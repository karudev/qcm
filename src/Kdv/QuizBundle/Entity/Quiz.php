<?php

namespace Kdv\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quiz
 *
 * @ORM\Table(name="quiz")
 * @ORM\Entity(repositoryClass="Kdv\QuizBundle\Repository\QuizRepository")
 */
class Quiz
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="nb_questions", type="integer")
     */
    private $nbQuestions;
    
    /**
     * @ORM\OneToMany(targetEntity="Question", mappedBy="quiz")
     */
    private $questions;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Quiz
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->questions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add question
     *
     * @param \Kdv\QuizBundle\Entity\Question $question
     *
     * @return Quiz
     */
    public function addQuestion(\Kdv\QuizBundle\Entity\Question $question)
    {
        $this->questions[] = $question;

        return $this;
    }

    /**
     * Remove question
     *
     * @param \Kdv\QuizBundle\Entity\Question $question
     */
    public function removeQuestion(\Kdv\QuizBundle\Entity\Question $question)
    {
        $this->questions->removeElement($question);
    }

    /**
     * Get questions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Set nbQuestions
     *
     * @param integer $nbQuestions
     *
     * @return Quiz
     */
    public function setNbQuestions($nbQuestions)
    {
        $this->nbQuestions = $nbQuestions;

        return $this;
    }

    /**
     * Get nbQuestions
     *
     * @return integer
     */
    public function getNbQuestions()
    {
        return $this->nbQuestions;
    }
}
