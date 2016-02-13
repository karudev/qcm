<?php

namespace Kdv\EstheticQuizBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Kdv\QuizBundle\Entity\Category;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    private $category = [
        ['name' => 'Biologie']
    ];
    public function load(ObjectManager $manager)
    {
        foreach ($this->category as $key => $q) {
            $category = new Category();
            $category->setName($q['name']);
            $manager->persist($category);
            $this->addReference('category_'.$key, $category);
        }

        $manager->flush();
    }
    
     public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 2;
    }
}