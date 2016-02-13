<?php

namespace Kdv\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity(repositoryClass="Kdv\QuizBundle\Repository\QuestionRepository")
 */
class Question
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
     * @ORM\Column(name="enunciated", type="text")
     */
    private $enunciated;
    
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=32)
     */
    private $type;
    
    /**
     * @var string
     *
     * @ORM\Column(name="picture_path", type="string", length=255, nullable=true)
     */
    private $picturePath;
    
     /**
     * @ORM\ManyToOne(targetEntity="Quiz", inversedBy="questions")
     */
    private $quiz;
    
    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="questions")
     */
    private $category;
    
    /**
     * @ORM\OneToMany(targetEntity="Answer", mappedBy="question")
     */
    private $answers;
    
    /**
     * @ORM\OneToMany(targetEntity="SessionAnswer", mappedBy="question")
     */
    private $sessionAnswers;
    
    


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
     * Set enunciated
     *
     * @param string $enunciated
     *
     * @return Question
     */
    public function setEnunciated($enunciated)
    {
        $this->enunciated = $enunciated;

        return $this;
    }

    /**
     * Get enunciated
     *
     * @return string
     */
    public function getEnunciated()
    {
        return $this->enunciated;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->answers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add answer
     *
     * @param \Kdv\QuizBundle\Entity\Answer $answer
     *
     * @return Question
     */
    public function addAnswer(\Kdv\QuizBundle\Entity\Answer $answer)
    {
        $this->answers[] = $answer;

        return $this;
    }

    /**
     * Remove answer
     *
     * @param \Kdv\QuizBundle\Entity\Answer $answer
     */
    public function removeAnswer(\Kdv\QuizBundle\Entity\Answer $answer)
    {
        $this->answers->removeElement($answer);
    }

    /**
     * Get answers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * Set quiz
     *
     * @param \Kdv\QuizBundle\Entity\Quiz $quiz
     *
     * @return Question
     */
    public function setQuiz(\Kdv\QuizBundle\Entity\Quiz $quiz = null)
    {
        $this->quiz = $quiz;

        return $this;
    }

    /**
     * Get quiz
     *
     * @return \Kdv\QuizBundle\Entity\Quiz
     */
    public function getQuiz()
    {
        return $this->quiz;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Question
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set category
     *
     * @param \Kdv\QuizBundle\Entity\Category $category
     *
     * @return Question
     */
    public function setCategory(\Kdv\QuizBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Kdv\QuizBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add sessionAnswer
     *
     * @param \Kdv\QuizBundle\Entity\SessionAnswer $sessionAnswer
     *
     * @return Question
     */
    public function addSessionAnswer(\Kdv\QuizBundle\Entity\SessionAnswer $sessionAnswer)
    {
        $this->sessionAnswers[] = $sessionAnswer;

        return $this;
    }

    /**
     * Remove sessionAnswer
     *
     * @param \Kdv\QuizBundle\Entity\SessionAnswer $sessionAnswer
     */
    public function removeSessionAnswer(\Kdv\QuizBundle\Entity\SessionAnswer $sessionAnswer)
    {
        $this->sessionAnswers->removeElement($sessionAnswer);
    }

    /**
     * Get sessionAnswers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSessionAnswers()
    {
        return $this->sessionAnswers;
    }

    /**
     * Set picturePath
     *
     * @param string $picturePath
     *
     * @return Question
     */
    public function setPicturePath($picturePath)
    {
        $this->picturePath = $picturePath;

        return $this;
    }

    /**
     * Get picturePath
     *
     * @return string
     */
    public function getPicturePath()
    {
        return $this->picturePath;
    }
}
