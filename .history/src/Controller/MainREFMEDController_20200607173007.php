<?php

namespace App\Controller;

use App\Entity\Doctor;
use App\Entity\Appointment;
use App\Form\SearchDrugsType;
use App\Form\SearchDoctorType;
use App\Form\AppointmentType;
use App\Form\SearchLabotaryType;
use App\Repository\DoctorRepository;
use App\Repository\PharmacyRepository;
use App\Repository\LaboratoryRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainREFMEDController extends AbstractController
{
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

    public function __construct(DoctorRepository $doctorRepository, PharmacyRepository $pharmacyRepository, LaboratoryRepository $laboratoryRepository, PaginatorInterface $paginator){
        $this->doctorRepository=$doctorRepository;
        $this->pharmacyRepository=$pharmacyRepository;
        $this->laboratoryRepository=$laboratoryRepository;
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
        if($formSearchDoctor->isSubmitted() && $formSearchDoctor->isValid()){
           $data=$formSearchDoctor->getData();     
           $doctors=null;
           $distance=null;
           $dataLon=-17.44406;
           $dataLat=14.6937;
           $userDistance=$data['distance'];    
           if($data['lat'] == null or $data['lon'] == null)
           {
               $entityManager = $this->getDoctrine()->getManager();
               $sql="SELECT doctor.id, users.email,doctor.last_name, doctor.slug, doctor.picture_profil, doctor.tarif_min, doctor.tarif_max,
                location.name_location, location.latitude, location.longitude, 
               ( 6371 * acos( cos( radians({$dataLat}) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians({$dataLon}) ) + sin( radians({$dataLat}) ) * sin( radians( latitude ) ) ) ) AS distance ,profession.profession_name AS profession
                FROM doctor  INNER JOIN users INNER JOIN profession INNER JOIN location
                 ON doctor.profession_id = profession.id AND doctor.location_id = location.id AND users.id = doctor.id 
                 WHERE profession.profession_name LIKE '%{$data['profession']}%' HAVING distance < {$data['distance']} ORDER BY distance";
               $result=$entityManager->getConnection()->prepare($sql);
               $result->execute();
               while ($row=$result->fetch()) {
                   $doctors[]= $this->doctorRepository->find($row['id']);
                   $distance[]=$row['distance'];
                   

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
            $dataLat=$data['lat'];
            $dataLon=$data['lon'];
            while ($row=$result->fetch()) {
                $doctors[]= $this->doctorRepository->find($row['id']);
                $distance[]=$row['distance'];
            }
               
           }
           if($doctors != null){
            $doctors=$this->paginator->paginate($doctors, 
            $request->query->getInt('page', 1), 10);
           }



           return $this->render('main_refmed/result_doctor_search.html.twig', [
            'doctors' => $doctors,
            'distance' => $distance,
            'userDistance' => $userDistance,
            'latUser' => $dataLat,
            'lonUser' => $dataLon,
            'formDoctor' => $formSearchDoctor->createView(),
            ]);
            
        }
        if($formSearchDrugs->isSubmitted() && $formSearchDrugs->isValid())
        {
            return $this->render('main_refmed/result_pharmacy_search.html.twig', [
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
