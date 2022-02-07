<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Articles;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 100; $i++) {
            $product = new Articles();
            $product->setTitle('Article '.$i);
            $product->setText(mt_rand(10, 100). 'Avserfwer');
            $manager->persist($product);
        }

        $manager->flush();
    }
}
