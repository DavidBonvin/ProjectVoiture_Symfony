<?php

namespace App\DataFixtures;

use App\Entity\Marque;
use App\Entity\Modele;
use App\Entity\Voiture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $marque1 = new Marque();
        $marque1->setLibelle("Yotota");
        $manager->persist($marque1);

        $marque2 = new Marque();
        $marque2->setLibelle("Jeupe");
        $manager->persist($marque2);
        
        $modele1 = new Modele();
        $modele1->setLibelle("Rayis")
                ->setImage("modele1.jpg")
                ->setPrixMoyen(15000)
                ->setMarque($marque1);
                $manager->persist($modele1);
               
        $modele2 = new Modele();
        $modele2->setLibelle("V8")
                ->setImage("modele2.jpg")
                ->setPrixMoyen(35000)
                ->setMarque($marque1);
                $manager->persist($modele2);
               
        $modele3 = new Modele();
        $modele3->setLibelle("JackBlack")
                ->setImage("modele3.jpg")
                ->setPrixMoyen(25000)
                ->setMarque($marque1);
                $manager->persist($modele3);
                
        $modele4 = new Modele();
        $modele4->setLibelle("Carbon")
                ->setImage("modele4.jpg")
                ->setPrixMoyen(19000)
                ->setMarque($marque1);
                $manager->persist($modele4);
               
        $modele5 = new Modele();
        $modele5->setLibelle("Titan")
                ->setImage("modele5.jpg")
                ->setPrixMoyen(16000)
                ->setMarque($marque1);
                $manager->persist($modele5);
        
        $modeles = [$modele1,$modele2,$modele3,$modele4,$modele5] ;


        $faker = \Faker\Factory::create();
        foreach ($modeles as $m) {
            $rand = rand(3,5);
            for ($i=1; $i<=$rand ; $i++) {        
                $voiture = new Voiture();
                $voiture->setModele($m);

                $voiture->setImmatriculation($faker->regexify("[A-Z]{2}[0-9]{3,4}[A-Z]{2}"));
                $voiture->setNbPorte($faker->randomElement($array = array(3,5)));
                $voiture->setAnnee($faker->numberBetween($min = 1990, $max = 2021));
                
                $manager->persist($voiture); 

            }
        }




        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
