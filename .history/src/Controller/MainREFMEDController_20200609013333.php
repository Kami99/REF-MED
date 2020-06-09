<?php

namespace App\Controller;

use App\Entity\Doctor;
use App\Entity\Appointment;
use App\Form\SearchDrugsType;
use App\Form\SearchDoctorType;
use App\Form\AppointmentType;
use App\Form\SearchLabotaryType;
use App\Repository\DoctorRepository;
use App\Repository\DrugsRepository;
use App\Repository\PharmacyRepository;
use App\Repository\LaboratoryRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainREFMEDController extends AbstractController
{
    /**
     * Used for user distance in form 
     * @var Float 
     */
    private $distance=null;

    /**
     * Used for user longitude in form   default lon to Dakar / center
     * @var Float 
     */
    private $dataLon=-17.44406;
    /**
     * Used for user lat in form default lat to Dakar / center
     * @var Float 
     */
    private $dataLat=14.6937;
     /**
     * 
     *
     * @var PaginatorInterface
     */
    private $paginator;

    /**
     * @var DoctorRepository
     */

    private $doctorRepository;

    /**
     * @var LaboratoryRepository
     */

    private $laboratoryRepository;
    /**
     * @var PharmacyRepository
     */
    private $pharmacyRepository;

        /**
     * @var DrugsRepository
     */
    private $drugsRepository;

    public function __construct(DoctorRepository $doctorRepository, PharmacyRepository $pharmacyRepository, LaboratoryRepository $laboratoryRepository, DrugsRepository $drugsRepository ,PaginatorInterface $paginator){
        $this->doctorRepository=$doctorRepository;
        $this->pharmacyRepository=$pharmacyRepository;
        $this->laboratoryRepository=$laboratoryRepository;
        $this->drugsRepository=$drugsRepository;
        $this->paginator=$paginator;

    }
    /**
     * @Route("/", name="Home")
     */
    public function index(Request $request)
    {
        $formSearchDoctor = $this->createForm(SearchDoctorType::class);
        $formSearchLaboratory = $this->createForm(SearchLabotaryType::class);
        $formSearchDrugs = $this->createForm(SearchDrugsType::class);
        $formSearchDoctor->handleRequest($request);
        $formSearchDrugs->handleRequest($request);
        if($formSearchDoctor->isSubmitted() && $formSearchDoctor->isValid()){
           $data=$formSearchDoctor->getData();     
           $doctors=null;
           $this->distance=null;
           $userDistance=$data['distance'];    
           if($data['lat'] == null or $data['lon'] == null)
           {
               $entityManager = $this->getDoctrine()->getManager();
               $sql="SELECT doctor.id, users.email,doctor.last_name, doctor.slug, doctor.picture_profil, doctor.tarif_min, doctor.tarif_max,
                location.name_location, location.latitude, location.longitude, 
               ( 6371 * acos( cos( radians({$this->dataLat}) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians({$this->dataLon}) ) + sin( radians({$this->dataLat}) ) * sin( radians( latitude ) ) ) ) AS distance ,profession.profession_name AS profession
                FROM doctor  INNER JOIN users INNER JOIN profession INNER JOIN location
                 ON doctor.profession_id = profession.id AND doctor.location_id = location.id AND users.id = doctor.id 
                 WHERE profession.profession_name LIKE '%{$data['profession']}%' HAVING distance < {$data['distance']} ORDER BY distance";
               $result=$entityManager->getConnection()->prepare($sql);
               $result->execute();
               while ($row=$result->fetch()) {
                   $doctors[]= $this->doctorRepository->find($row['id']);
                   $this->distance[]=$row['distance'];
                   

               }
           }
           else {
            $entityManager = $this->getDoctrine()->getManager();
            $sql="SELECT doctor.id, users.email,doctor.last_name, doctor.slug, doctor.picture_profil, doctor.tarif_min, doctor.tarif_max,
             location.name_location, location.latitude, location.longitude, 
            ( 6371 * acos( cos( radians( {$data['lat']}) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians({$data['lon']}) ) + sin( radians({$data['lat']}) ) * sin( radians( latitude ) ) ) ) AS distance ,profession.profession_name AS profession
             FROM doctor  INNER JOIN users INNER JOIN profession INNER JOIN location
              ON doctor.profession_id = profession.id AND doctor.location_id = location.id AND users.id = doctor.id 
              WHERE profession.profession_name LIKE '%{$data['profession']}%' HAVING distance < {$data['distance']} ORDER BY distance";
            $result=$entityManager->getConnection()->prepare($sql);
            $result->execute();
            $this->dataLat=$data['lat'];
            $this->dataLon=$data['lon'];
            while ($row=$result->fetch()) {
                $doctors[]= $this->doctorRepository->find($row['id']);
                $this->distance[]=$row['distance'];
               
            }
           }
           if($doctors != null){
            $doctors=$this->paginator->paginate($doctors, 
            $request->query->getInt('page', 1), 10);
           }
           return $this->render('main_refmed/result_doctor_search.html.twig', [
            'doctors' => $doctors,
            'distance' => $this->distance,
            'userDistance' => $userDistance,
            'latUser' => $this->dataLat,
            'lonUser' => $this->dataLon,
            'formDoctor' => $formSearchDoctor->createView(),
            ]);
            
        }
        if($formSearchDrugs->isSubmitted() && $formSearchDrugs->isValid()){
            $data=$formSearchDrugs->getData();     
            $pharmacies=null;
            $drugs=null;
            $this->distance=null;
            $userDistance=$data['distance'];    
            if($data['lat'] == null or $data['lon'] == null)
            {
                $entityManager = $this->getDoctrine()->getManager();
                $sql="SELECT pharmacy.id,pharmacy.pharmacy_name,pharmacy.phone_number, location.name_location, location.latitude, location.longitude, ( 6371 * acos( cos( radians( {$this->dataLat}) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians({$this->dataLon}) ) + sin( radians({$this->dataLat}) ) * sin( radians( latitude ) ) ) ) AS distance 
                FROM pharmacy INNER JOIN pharmacy_availabe_drugs INNER JOIN drugs INNER JOIN location ON
                 pharmacy_availabe_drugs.pharmacy_id = pharmacy.id AND pharmacy.location_id = location.id AND 
                 pharmacy_availabe_drugs.drugs_id = drugs.id WHERE drugs.name_drugs
                 LIKE '%{$data['name']}%'
                  AND pharmacy_availabe_drugs.is_available = 1
                   HAVING distance < {$data['distance']} ORDER BY distance";
                $sql_drugs="SELECT drugs.id,drugs.name_drugs FROM drugs
                 INNER JOIN pharmacy INNER JOIN pharmacy_availabe_drugs
                 ON drugs.id = pharmacy_availabe_drugs.drugs_id WHERE
                  drugs.name_drugs LIKE '%{$data['name']}%'
                  AND pharmacy_availabe_drugs.is_available=1";
                $result=$entityManager->getConnection()->prepare($sql);
                $result->execute();
                while ($row=$result->fetch()) {
                    if($pharmacies!=null){
                        $pharmacy=$this->pharmacyRepository->find($row['id']);
                        dump($pharmacy);
                        dump($pharmacies[0]);
                        dump($pharmacies[0]===$pharmacy);

                        //  if(!in_array($pharmacy, $pharmacies)){
                        //     $pharmacies[]= $this->pharmacyRepository->find($row['id']);
                        //     $this->distance[]=$row['distance']; 
                            foreach ($pharmacies as $value) {
                                if ($value == $pharmacy) {
                                $pharmacies[]= $this->pharmacyRepository->find($row['id']);
                                $this->distance[]=$row['distance'];    
                                dump($value==$pharmacy);

                                }
                            }
                        //  }

                     }
                     else{
                        $pharmacies[]= $this->pharmacyRepository->find($row['id']);
                        $this->distance[]=$row['distance'];
                     }
                }
                dd($pharmacies);

                $drugs_results=$entityManager->getConnection()->prepare($sql_drugs);
                $drugs_results->execute();
                while ($row=$drugs_results->fetch()) {
                    $drugs[]= $this->drugsRepository->find($row['id']);
                }
            }
            else {
             $entityManager = $this->getDoctrine()->getManager();
             $sql="SELECT pharmacy.id,pharmacy.pharmacy_name,pharmacy.phone_number,
            location.name_location, location.latitude, location.longitude, 
            ( 6371 * acos( cos( radians( {$data['lat']}) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians({$data['lon']}) ) + sin( radians({$data['lat']}) ) * sin( radians( latitude ) ) ) ) AS distance
               FROM pharmacy 
               INNER JOIN pharmacy_availabe_drugs INNER JOIN drugs INNER JOIN location ON 
               pharmacy_availabe_drugs.pharmacy_id = pharmacy.id AND pharmacy.location_id = location.id AND pharmacy_availabe_drugs.drugs_id = drugs.id 
               WHERE drugs.name_drugs LIKE '%{$data['name']}%'
                AND pharmacy_availabe_drugs.is_available = 1 HAVING distance < {$data['distance']} ORDER BY distance";
            $sql_drugs="SELECT drugs.id,drugs.name_drugs FROM drugs INNER JOIN pharmacy INNER JOIN pharmacy_availabe_drugs
            ON drugs.id = pharmacy_availabe_drugs.drugs_id WHERE drugs.name_drugs LIKE '%{$data['name']}%'
                AND pharmacy_availabe_drugs.is_available=1";
             $result=$entityManager->getConnection()->prepare($sql);
             $result->execute();
             $this->dataLat=$data['lat'];
             $this->dataLon=$data['lon'];
             while ($row=$result->fetch()) {
                if($pharmacies!=null){
                    $pharmacy=$this->drugsRepository->find($row['id']);
                     if(!in_array($pharmacy, $pharmacies, true)){
                        $pharmacies[]= $this->pharmacyRepository->find($row['id']);
                        $this->distance[]=$row['distance'];                                                
                     }
                 }
                 else{
                    $pharmacies[]= $this->pharmacyRepository->find($row['id']);
                    $this->distance[]=$row['distance'];
                 }
             }
             $drugs_results=$entityManager->getConnection()->prepare($sql_drugs);
             $drugs_results->execute();
             while ($row=$drugs_results->fetch()) {
                    $drugs[]= $this->drugsRepository->find($row['id']);                 
             }
                
            }
            if($pharmacies != null){
             $pharmacies=$this->paginator->paginate($pharmacies, 
             $request->query->getInt('page', 1), 10);
            }
            return $this->render('main_refmed/result_pharmacy_search.html.twig', [
             'pharmacies' => $pharmacies,
             'distance' => $this->distance,
             'userDistance' => $userDistance,
             'latUser' => $this->dataLat,
             'lonUser' => $this->dataLon,
             'drugs'=>$drugs,
             'formPharmacy' => $formSearchDrugs->createView(),
             ]);

        }
        if($formSearchLaboratory->isSubmitted() && $formSearchLaboratory->isValid()){
            $data=$formSearchLaboratory->getData();     
            $laboratories=null;
            $this->distance=null;
            $userDistance=$data['distance'];    
            if($data['lat'] == null or $data['lon'] == null)
            {
                $entityManager = $this->getDoctrine()->getManager();
                $sql="";
                $result=$entityManager->getConnection()->prepare($sql);
                $result->execute();
                while ($row=$result->fetch()) {
                    $laboratories[]= $this->laboratoryRepository->find($row['id']);
                    $this->distance[]=$row['distance'];
                }
                
            }
            else {
             $entityManager = $this->getDoctrine()->getManager();
             $sql="";
             $result=$entityManager->getConnection()->prepare($sql);
             $result->execute();
             $this->dataLat=$data['lat'];
             $this->dataLon=$data['lon'];
             while ($row=$result->fetch()) {
                 $laboratories[]= $this->laboratoryRepository->find($row['id']);
                 $this->distance[]=$row['distance'];
             }
                
            }
            if($laboratories != null){
             $laboratory=$this->paginator->paginate($laboratories, 
             $request->query->getInt('page', 1), 10);
            }
            return $this->render('main_refmed/result_doctor_search.html.twig', [
             'laboratories' => $laboratories,
             'distance' => $this->distance,
             'userDistance' => $userDistance,
             'latUser' => $this->dataLat,
             'lonUser' => $this->dataLon,
             'formPharmacy' => $formSearchDrugs->createView(),
             ]);

        }
        return $this->render('main_refmed/index.html.twig', [
            'formDoctor' => $formSearchDoctor->createView(),
            'formLaboratory' => $formSearchLaboratory->createView(),
            'formDrugs' => $formSearchDrugs->createView(),

        ]);
    }
     /**
     * @Route("/services", name="services")
     */
    public function service()
    {
        return $this->render('main_refmed/services.html.twig', [
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('main_refmed/contact.html.twig', [
        ]);
    }

        /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        return $this->render('main_refmed/about.html.twig', [
        ]);
    }

}
