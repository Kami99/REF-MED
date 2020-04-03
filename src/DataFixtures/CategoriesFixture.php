<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;


class CategoriesFixture extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for ($i=0; $i < 6; $i++) { 

            $categories = new Categories();
            $faker=Factory::Create('fr_FR');
            $categories
            ->setName($faker->words(2, true))
            ;
            $manager->persist($categories);
            }
            $manager->flush();
            $this->setReference('categories', $categories);
        }
     
        public function getOrder()
        {
            return 2;
        }
}
