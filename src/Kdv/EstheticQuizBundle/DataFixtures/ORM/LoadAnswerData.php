<?php

namespace Kdv\EstheticQuizBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Kdv\QuizBundle\Entity\Answer;

class LoadAnswerData extends AbstractFixture implements OrderedFixtureInterface
{
    private $answers = [
        [   'question' => 0,
            'text' => '65 à 70% du poids du corps',
            'isRightAnswer' => true,
            'point' => 1,
        ],
        [   'question' => 0,
            'text' => '20 à 25% du poids du corps',
            'isRightAnswer' => false,
            'point' => 0,
        ],
        [   'question' => 0,
            'text' => '55 à 60% du poids du corps',
            'isRightAnswer' => false,
            'point' => 0
        ],
        [   'question' => 0,
            'text' => '75 à 80% du poids du corps',
            'isRightAnswer' => false,
            'point' => 0
        ],
        [   'question' => 1,
            'text' => '- Eau intracellulaire : 50%<br/>
                       - Eau extracellulaire : 20%<br/>
                       - - Eau canalisée (sang et lymphe) : 5%<br/>
                       - - Eau intercellulaire (liquide interstitiel) : 15%<br/>',
            'isRightAnswer' => true,
            'point' => 1
        ],
        [   'question' => 1,
            'text' => '- Eau intracellulaire : 40%<br/>
                       - Eau extracellulaire : 25%<br/>
                       - - Eau canalisée (sang et lymphe) : 15%<br/>
                       - - Eau intercellulaire (liquide interstitiel) : 5%<br/>',
            'isRightAnswer' => false,
            'point' => 0
        ],
        [   'question' => 1,
            'text' => '- Eau intracellulaire : 50%<br/>
                       - Eau extracellulaire : 15%<br/>
                       - - Eau canalisée (sang et lymphe) : 25%<br/>
                       - - Eau intercellulaire (liquide interstitiel) : 15%<br/>',
            'isRightAnswer' => false,
            'point' => 0
        ],
        [   'question' => 2,
            'text' => '- Sang : 50%<br/>
                       - Peau : 50%<br/>
                       - Muscles : 25%<br/>
                       - Os : 22%<br/>',
            'isRightAnswer' => false,
            'point' => 0
        ],
        [   'question' => 2,
            'text' => '- Sang : 80%<br/>
                       - Peau : 70%<br/>
                       - Muscles : 75%<br/>
                       - Os : 22%<br/>',
            'isRightAnswer' => true,
            'point' => 1
        ],
        [   'question' => 2,
            'text' => '- Sang : 90%<br/>
                       - Peau : 20%<br/>
                       - Muscles : 55%<br/>
                       - Os : 5%<br/>',
            'isRightAnswer' => false,
            'point' => 0
        ], [   'question' => 3,
            'text' => "Division d'une cellule mère en deux cellules filles avec réplication de l'ADN",
            'isRightAnswer' => true,
            'point' => 1
        ], [   'question' => 3,
            'text' => "Mutiplication d'une cellule mère en deux cellules filles avec réplication de l'ADN",
            'isRightAnswer' => false,
            'point' => 0
        ], [   'question' => 3,
            'text' => "Supression de toutes les cellules filles d'une cellule mère avec réplication de l'ADN",
            'isRightAnswer' => false,
            'point' => 0
        ], ['question' => 4,
            'text' => "Réserve des protéines",
            'isRightAnswer' => false,
            'point' => 0
        ], ['question' => 4,
            'text' => "Réserve de nutriments",
            'isRightAnswer' => true,
            'point' => 1
        ], ['question' => 5,
            'text' => "Configuration du squelette",
            'isRightAnswer' => true,
            'point' => 1
        ],['question' => 5,
            'text' => "Configuration de l'ADN",
            'isRightAnswer' => false,
            'point' => 0
        ],['question' => 6,
            'text' => "Formé de 10 centrioles, rôle dans la multiplication cellulaire",
            'isRightAnswer' => false,
            'point' => 0
        ],['question' => 6,
            'text' => "Formé de 2 centrioles, rôle dans la division cellulaire",
            'isRightAnswer' => true,
            'point' => 1
        ],['question' => 7,
            'text' => "Synthèse des protéines",
            'isRightAnswer' => true,
            'point' => 1
        ],['question' => 7,
            'text' => "Réserve de nutriments",
            'isRightAnswer' => false,
            'point' => 0
        ],['question' => 8,
            'text' => "Matières fécales causées par la digestion",
            'isRightAnswer' => false,
            'point' => 0
        ],['question' => 8,
            'text' => "Digestion organites inutilisables et substances étrangères",
            'isRightAnswer' => true,
            'point' => 1
        ],['question' => 9,
            'text' => "Production énergie => cellule",
            'isRightAnswer' => true,
            'point' => 1
        ],['question' => 9,
            'text' => "Blessures, pores abîmés",
            'isRightAnswer' => false,
            'point' => 0
        ],['question' => 10,
            'text' => "Macrophagocytes",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 10,
            'text' => "Fibroblaste",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 10,
            'text' => "Granulocyte basophile",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 10,
            'text' => "Lymphocyte",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 10,
            'text' => "Fibres de réticuline",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 10,
            'text' => "Fibres collagène",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 10,
            'text' => "Substance fondamentale",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 10,
            'text' => "Fibres d'élastine",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 11,
            'text' => "Membrane plasmique",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 11,
            'text' => "Noyau",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 11,
            'text' => "Cytoplasme ou hyaloplasme",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 11,
            'text' => "Réticulum endoplasmique rugueux",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 11,
            'text' => "Réticulum endoplasmique lisse",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 11,
            'text' => "Ribosomes",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 11,
            'text' => "Appareil de Golgi",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 11,
            'text' => "Mitochondries",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 11,
            'text' => "Centrosome",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 11,
            'text' => "Lysosome",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 11,
            'text' => "Vacuole",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 11,
            'text' => "Cytosquelette",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 12,
            'text' => "Pied",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 12,
            'text' => "Jambe",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 12,
            'text' => "Cuisse",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 12,
            'text' => "Bras",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 12,
            'text' => "Avant-bras",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 12,
            'text' => "Main",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 12,
            'text' => "Abdomen",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 12,
            'text' => "Thorax",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 12,
            'text' => "Cou",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 12,
            'text' => "Tête",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 13,
            'text' => "Région temporale",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 13,
            'text' => "Région jugale",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 13,
            'text' => "Région frontale",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 13,
            'text' => "Région orbitale",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 13,
            'text' => "Région nasale",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 13,
            'text' => "Région buccale",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 13,
            'text' => "Région mentonnière",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 13,
            'text' => "Région pariétale",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 13,
            'text' => "Région occipitale",
            'isRightAnswer' => true,
            'point' => 0.25
        ],['question' => 13,
            'text' => "Région cervicale",
            'isRightAnswer' => true,
            'point' => 0.25
        ],
        
    ];
    public function load(ObjectManager $manager)
    {
        foreach ($this->answers as $key => $a) {
            $answer = new Answer();
            $answer->setText($a['text'])
                    ->setPoint($a['point'])
                    ->setIsRightAnswer($a['isRightAnswer'])
                    ->setQuestion($this->getReference('question_'.$a['question']));
            $manager->persist($answer);
        }

        $manager->flush();
    }
    
     public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 4;
    }
}