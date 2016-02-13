<?php

namespace Kdv\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SessionAnswer
 *
 * @ORM\Table(name="session_answer")
 * @ORM\Entity(repositoryClass="Kdv\QuizBundle\Repository\SessionAnswerRepository")
 */
class SessionAnswer
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
     * @ORM\ManyToOne(targetEntity="Session", inversedBy="sessionAnswers")
     */
    private $session;
    
    /**
     * @ORM\ManyToOne(targetEntity="Question", inversedBy="sessionAnswers")
     */
    private $question;
    
    /**
     * @ORM\ManyToOne(targetEntity="Answer", inversedBy="sessionAnswers")
     * @ORM\JoinColumn(nullable = true)
     */
    private $answer;
    
     /**
     * @var string
     *
     * @ORM\Column(name="text",  type="string", length=255, nullable = true)
     */
    private $text;


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
     * Set session
     *
     * @param \Kdv\QuizBundle\Entity\Session $session
     *
     * @return SessionAnswer
     */
    public function setSession(\Kdv\QuizBundle\Entity\Session $session = null)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * Get session
     *
     * @return \Kdv\QuizBundle\Entity\Session
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Set question
     *
     * @param \Kdv\QuizBundle\Entity\Question $question
     *
     * @return SessionAnswer
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
     * Set answer
     *
     * @param \Kdv\QuizBundle\Entity\Answer $answer
     *
     * @return SessionAnswer
     */
    public function setAnswer(\Kdv\QuizBundle\Entity\Answer $answer = null)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return \Kdv\QuizBundle\Entity\Answer
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return SessionAnswer
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
}
