<?php

namespace Kdv\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Session
 *
 * @ORM\Table(name="session")
 * @ORM\Entity(repositoryClass="Kdv\QuizBundle\Repository\SessionRepository")
 */
class Session
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
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="begin_at", type="datetime")
     */
    private $beginAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_at", type="datetime", nullable=true)
     */
    private $endAt;
    
    /**
     * @ORM\OneToMany(targetEntity="SessionAnswer", mappedBy="session")
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
     * Set userId
     *
     * @param integer $userId
     *
     * @return Session
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set beginAt
     *
     * @param \DateTime $beginAt
     *
     * @return Session
     */
    public function setBeginAt($beginAt)
    {
        $this->beginAt = $beginAt;

        return $this;
    }

    /**
     * Get beginAt
     *
     * @return \DateTime
     */
    public function getBeginAt()
    {
        return $this->beginAt;
    }

    /**
     * Set endAt
     *
     * @param \DateTime $endAt
     *
     * @return Session
     */
    public function setEndAt($endAt)
    {
        $this->endAt = $endAt;

        return $this;
    }

    /**
     * Get endAt
     *
     * @return \DateTime
     */
    public function getEndAt()
    {
        return $this->endAt;
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
     * @return Session
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
}
