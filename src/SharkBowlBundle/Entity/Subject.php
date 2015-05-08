<?php

namespace SharkBowlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subject
 */
class Subject
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var integer
     */
    private $eventId;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $modified;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var \DateTime
     */
    private $start;

    /**
     * @var \DateTime
     */
    private $discussionTime;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $orderTalk;

    /**
     * @var integer
     */
    private $orderUser;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return Subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set eventId
     *
     * @param integer $eventId
     * @return Subject
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;

        return $this;
    }

    /**
     * Get eventId
     *
     * @return integer 
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Subject
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     * @return Subject
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime 
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Subject
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set start
     *
     * @param \DateTime $start
     * @return Subject
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime 
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set discussionTime
     *
     * @param \DateTime $discussionTime
     * @return Subject
     */
    public function setDiscussionTime($discussionTime)
    {
        $this->discussionTime = $discussionTime;

        return $this;
    }

    /**
     * Get discussionTime
     *
     * @return \DateTime 
     */
    public function getDiscussionTime()
    {
        return $this->discussionTime;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Subject
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set orderTalk
     *
     * @param integer $orderTalk
     * @return Subject
     */
    public function setOrderTalk($orderTalk)
    {
        $this->orderTalk = $orderTalk;

        return $this;
    }

    /**
     * Get orderTalk
     *
     * @return integer 
     */
    public function getOrderTalk()
    {
        return $this->orderTalk;
    }

    /**
     * Set orderUser
     *
     * @param integer $orderUser
     * @return Subject
     */
    public function setOrderUser($orderUser)
    {
        $this->orderUser = $orderUser;

        return $this;
    }

    /**
     * Get orderUser
     *
     * @return integer 
     */
    public function getOrderUser()
    {
        return $this->orderUser;
    }
}
