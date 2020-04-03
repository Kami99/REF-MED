<?php

namespace App\DataFixtures;

use Faker\Factory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use App\Entity\UsersBlog;

class UsersBlogFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for ($i=0; $i < 3; $i++) { 

        $usersBlog = new UsersBlog();
        $faker=Factory::Create('fr_FR');
        $usersBlog
        ->setEmail($faker->safeEmail)
        ->setPseudo($faker->userName)
        ->setPassword($faker->password)
        ;
        $manager->persist($usersBlog);
        
        }
        $manager->flush();
        $this->setReference('usersBlog', $usersBlog);
    }
 
    public function getOrder()
    {
        return 1;
    }
}
