<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Articles;
use App\Repository\KeywordRepository;
use App\Repository\UsersBlogRepository;
use App\Repository\CategoriesRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class ArticlesFixtures extends Fixture implements OrderedFixtureInterface
{
    private $categoriesRepository;
    private $keywordRepository;
    private $usersRepository;
    public function __construct( CategoriesRepository $categoriesRepository,  KeywordRepository $keywordRepository, UsersBlogRepository $usersBlogRepository){
        $this->categoriesRepository=$categoriesRepository;
        $this->keywordRepository=$keywordRepository;
        $this->usersRepository=$usersBlogRepository;
    }
    public function load(ObjectManager $manager)
    {

   

        for ($i=0; $i < 23; $i++) { 
            $article=new Articles();
            $keyword = $this->getReference('keyword');
            $category = $this->getReference('categories');
            $usersBlog = $this->getReference('usersBlog');
            $k=rand(0,12);
            $faker=Factory::Create('fr_FR');
            $article
            ->setTitle($faker->words(2, true))
            ->setContenu($faker->paragraph($nbSentences = $k, $variableNbSentences = true))
            ->setUsersBlog($usersBlog)
            ->addKeyword($keyword)
            ->addCategory($category)
            ;
            $manager->persist($article);
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
    public function getOrder()
    {
        return 4;
    }
}
