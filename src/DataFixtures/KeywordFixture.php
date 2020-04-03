<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Keyword;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;


class KeywordFixture extends Fixture implements OrderedFixtureInterface
{
    
    public function load(ObjectManager $manager)
    {
        for ($i=0; $i < 12; $i++) { 

            $keyword = new Keyword();
            $faker=Factory::Create('fr_FR');
            $keyword
            ->setKeyword($faker->words(1, true))
            ;
            $manager->persist($keyword);
            }
            $manager->flush();
            $this->setReference('keyword', $keyword);
        }
     
        public function getOrder()
        {
            return 3;
        }
}
