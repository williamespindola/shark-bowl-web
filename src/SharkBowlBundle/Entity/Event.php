<?php

namespace SharkBowlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 */
class Event
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \DateTime
     */
    private $time;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $canUpdateSubject;

    /**
     * @var integer
     */
    private $canAddSubject;

    /**
     * @var integer
     */
    private $open;


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
     * Set name
     *
     * @param string $name
     * @return Event
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
     * Set date
     *
     * @param \DateTime $date
     * @return Event
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     * @return Event
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Event
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
     * Set created
     *
     * @param \DateTime $created
     * @return Event
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
     * Set userId
     *
     * @param integer $userId
     * @return Event
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
     * Set canUpdateSubject
     *
     * @param integer $canUpdateSubject
     * @return Event
     */
    public function setCanUpdateSubject($canUpdateSubject)
    {
        $this->canUpdateSubject = $canUpdateSubject;

        return $this;
    }

    /**
     * Get canUpdateSubject
     *
     * @return integer 
     */
    public function getCanUpdateSubject()
    {
        return $this->canUpdateSubject;
    }

    /**
     * Set canAddSubject
     *
     * @param integer $canAddSubject
     * @return Event
     */
    public function setCanAddSubject($canAddSubject)
    {
        $this->canAddSubject = $canAddSubject;

        return $this;
    }

    /**
     * Get canAddSubject
     *
     * @return integer 
     */
    public function getCanAddSubject()
    {
        return $this->canAddSubject;
    }

    /**
     * Set open
     *
     * @param integer $open
     * @return Event
     */
    public function setOpen($open)
    {
        $this->open = $open;

        return $this;
    }

    /**
     * Get open
     *
     * @return integer 
     */
    public function getOpen()
    {
        return $this->open;
    }
}
