<?php

namespace Kdv\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Answer
 *
 * @ORM\Table(name="answer")
 * @ORM\Entity(repositoryClass="Kdv\QuizBundle\Repository\AnswerRepository")
 */
class Answer
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
     * @ORM\Column(name="text", type="string", length=255)
     */
    private $text;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_right_answer", type="boolean")
     */
    private $isRightAnswer;

    /**
     * @var string
     *
     * @ORM\Column(name="point", type="decimal", precision=10, scale=2)
     */
    private $point = 0;
    
    /**
     * @ORM\ManyToOne(targetEntity="Question", inversedBy="answers")
     */
    private $question;
    
    
    /**
     * @ORM\OneToMany(targetEntity="SessionAnswer", mappedBy="answer")
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
     * Set text
     *
     * @param string $text
     *
     * @return Answer
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set isRightAnswer
     *
     * @param boolean $isRightAnswer
     *
     * @return Answer
     */
    public function setIsRightAnswer($isRightAnswer)
    {
        $this->isRightAnswer = $isRightAnswer;

        return $this;
    }

    /**
     * Get isRightAnswer
     *
     * @return bool
     */
    public function getIsRightAnswer()
    {
        return $this->isRightAnswer;
    }

    /**
     * Set point
     *
     * @param string $point
     *
     * @return Answer
     */
    public function setPoint($point)
    {
        $this->point = $point;

        return $this;
    }

    /**
     * Get point
     *
     * @return string
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * Set question
     *
     * @param \Kdv\QuizBundle\Entity\Question $question
     *
     * @return Answer
     */
    public function setQuestion(\Kdv\QuizBundle\Entity\Question $question = null)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \Kdv\QuizBundle\Entity\Question
     */
    public function getQuestion()
    {
        return $this->question;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sessionAnswers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add sessionAnswer
     *
     * @param \Kdv\QuizBundle\Entity\SessionAnswer $sessionAnswer
     *
     * @return Answer
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
     * Get sessionAnswer
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSessionAnswers()
    {
        return $this->sessionAnswers;
    }
}
