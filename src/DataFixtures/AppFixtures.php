<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Cocur\Slugify\Slugify;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $slugify = new Slugify();
        for ($i = 0; $i < 20; $i++) {
            $product = new Category();
            $product->setName('category ' . $i);

            $slug = $slugify->slugify('Hello World!'); // hello-world

            $product->setSlug($slug);
            $manager->persist($product);
        }

        $manager->flush();
    }
}
