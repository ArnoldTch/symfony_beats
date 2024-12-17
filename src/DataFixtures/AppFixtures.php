<?php

namespace App\DataFixtures;

use App\Entity\Composition;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $composition1 = new Composition();
        $composition1->setTitle('LOT');
        $composition1->setFile('audios/lot.mp3');
        $composition1->setImage('images/finalspace.jpg');
        $manager->persist($composition1);

        $composition2 = new Composition();
        $composition2->setTitle('LCDM');
        $composition2->setFile('audios/LaCuantaDetaMadre.mp3');
        $composition2->setImage('images/astronaut.jpg');
        $manager->persist($composition2);

        $composition3 = new Composition();
        $composition3->setTitle('COAT');
        $composition3->setFile('audios/coat.mp3');
        $composition3->setImage('images/trounoir.jpg');
        $manager->persist($composition3);

        $composition4 = new Composition();
        $composition4->setTitle('SHERPA');
        $composition4->setFile('audios/sherpa84.mp3');
        $composition4->setImage('images/interstellar.jpg');
        $manager->persist($composition4);

        $composition5 = new Composition();
        $composition5->setTitle('WORST');
        $composition5->setFile('audios/worst.mp3');
        $composition5->setImage('images/boreale.jpg');
        $manager->persist($composition5);

        $manager->flush();
    }
}
