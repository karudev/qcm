<?php

namespace Kdv\EstheticQuizBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Kdv\QuizBundle\Entity\Quiz;

class LoadQuizData extends AbstractFixture implements OrderedFixtureInterface
{
    private $quiz = [
        [
         'name' => 'QCM CAP Esthétique',
         'nbQuestions' => 13
        ]
    ];
    public function load(ObjectManager $manager)
    {
        foreach ($this->quiz as $key => $q) {
            $quiz = new Quiz();
            $quiz->setName($q['name']);
            $quiz->setNbQuestions($q['nbQuestions']);
            $manager->persist($quiz);
            $this->addReference('quiz_'.$key, $quiz);
        }

        $manager->flush();
    }
    
     public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 1;
    }
}