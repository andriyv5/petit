<?php

namespace Tikit\TikitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TikitScore
 */
class PetitionScore
{
    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Tikit\TikitBundle\Entity\Petition
     */
    private $petition;

    /**
     * @var \Tikit\TikitBundle\Entity\FosUser
     */
    private $user;

    /**
     * @var integer
     */
    private $vote;


    public function __construct($petition_id,$user_id,$vote)
    {
        $this->dateAdded = new \DateTime('now');
        $this->vote = $vote;
        $this->user = $user_id;
        $this->petition = $petition_id;
    }
    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     * @return PetitionScore
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

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
     * Set tikit
     *
     * @param \Tikit\TikitBundle\Entity\Petition $petition
     * @return TikitScore
     */
    public function setPetition(\Tikit\TikitBundle\Entity\Petition $petition = null)
    {
        $this->petition = $petition;

        return $this;
    }

    /**
     * Get petition
     *
     * @return \Tikit\TikitBundle\Entity\Petition
     */
    public function getPetition()
    {
        return $this->petition;
    }

    /**
     * Set user
     *
     * @param \Tikit\TikitBundle\Entity\FosUser $user
     * @return PetitionScore
     */
    public function setUser(\Tikit\TikitBundle\Entity\FosUser $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Tikit\TikitBundle\Entity\FosUser
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set vote
     *
     * @param integer
     * @return PetitionScore
     */
    public function setVote($vote)
    {
        $this->vote = $vote;

        return $this;
    }

    /**
     * Get vote
     *
     * @return integer
     */
    public function getVote()
    {
        return $this->vote;
    }
}