<?php

namespace Model;

use \DateTime;

class Task
{
    private int $id;
    private String $description;
    private String $status;
    private DateTime $createdAt;
    private DateTime $updateAt;


    public function __construct(int $id)
    {
        $this->id = $id;        
    }
    
    public function getDescription(): String
    {
        return $this->description;
    }

    public function setDescription(String $description)
    {
        $this->description = $description;
    }



    /**
     * Get the value of createdAt
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     *
     * @return  self
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of updateAt
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     * Set the value of updateAt
     *
     * @return  self
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }
}
