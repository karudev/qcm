<?php

namespace Kdv\EstheticQuizBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Kdv\QuizBundle\Entity\Question;

class LoadQuestionData extends AbstractFixture implements OrderedFixtureInterface
{
    private $questions = [
        [   
            'enunciated' => 'L\'eau represente combien de % du poids du corps ?',
            'quiz' => 0,
            'category' => 0,
            'type' => 'single_choice',
            'picture_path' => null
        ],
        [
            'enunciated' => 'Quel est la répartition de l\'eau dans l\'organisme ?',
            'quiz' => 0,
            'category' => 0,
            'type' => 'single_choice',
            'picture_path' => null
        ],
        [
            'enunciated' => 'Quel est la teneur en eau du sang, de la peau, des muscles, des os ?',
            'quiz' => 0,
            'category' => 0,
            'type' => 'single_choice',
            'picture_path' => null
        ],
        [
            'enunciated' => 'Quel est le processus de la Mitose ?',
            'quiz' => 0,
            'category' => 0,
            'type' => 'single_choice',
            'picture_path' => null
        ],
        [
            'enunciated' => 'Cellule animale : Définition de "Vacuole"',
            'quiz' => 0,
            'category' => 0,
            'type' => 'single_choice',
            'picture_path' => null
        ],
        [
            'enunciated' => 'Cellule animale : Définition de "Cytosquelette"',
            'quiz' => 0,
            'category' => 0,
            'type' => 'single_choice',
            'picture_path' => null
        ],
        [
            'enunciated' => 'Cellule animale : Définition de "Centrosome"',
            'quiz' => 0,
            'category' => 0,
            'type' => 'single_choice',
            'picture_path' => null
        ],
        [
            'enunciated' => 'Cellule animale : Définition de "Ribosomes"',
            'quiz' => 0,
            'category' => 0,
            'type' => 'single_choice',
            'picture_path' => null
        ],
        [
            'enunciated' => 'Cellule animale : Définition de "Lysosome"',
            'quiz' => 0,
            'category' => 0,
            'type' => 'single_choice',
            'picture_path' => null
        ],
        [
            'enunciated' => 'Cellule animale : Définition de "Mitochondries"',
            'quiz' => 0,
            'category' => 0,
            'type' => 'single_choice',
            'picture_path' => null
        ],
        [
            'enunciated' => 'Nommez les éléments du tissu conjonctif',
            'quiz' => 0,
            'category' => 0,
            'type' => 'multiple_text',
            'picture_path' => '/bundles/kdvestheticquiz/images/questions/tissu.jpg'
        ],
        [
            'enunciated' => 'Organisation de la cellule',
            'quiz' => 0,
            'category' => 0,
            'type' => 'multiple_text',
            'picture_path' => '/bundles/kdvestheticquiz/images/questions/cellule.jpg'
        ],[
            'enunciated' => 'Différentes parties du corps humain',
            'quiz' => 0,
            'category' => 0,
            'type' => 'multiple_text',
            'picture_path' => '/bundles/kdvestheticquiz/images/questions/corps_humain.jpg'
        ],[
            'enunciated' => 'Principales régions de la tête et du cou',
            'quiz' => 0,
            'category' => 0,
            'type' => 'multiple_text',
            'picture_path' => '/bundles/kdvestheticquiz/images/questions/tete_cou.jpg'
        ],
    ];
    public function load(ObjectManager $manager)
    {
        foreach ($this->questions as $key => $q) {
            $question = new Question();
            $question->setEnunciated($q['enunciated'])
                    ->setType($q['type'])
                    ->setQuiz($this->getReference('quiz_'.$q['quiz']))
                    ->setPicturePath($q['picture_path'])
                    ->setCategory($this->getReference('category_'.$q['category']));
            $manager->persist($question);
            $this->addReference('question_'.$key, $question);
        }

        $manager->flush();
    }
    
     public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 3;
    }
}