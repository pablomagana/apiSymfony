<?php

namespace AppBundle\Entity;

/**
 * user
 */
class user
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $orchards;

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
     * @return user
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
        $this->orchards = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add orchard
     *
     * @param \AppBundle\Entity\orchard $orchard
     *
     * @return user
     */
    public function addOrchard(\AppBundle\Entity\orchard $orchard)
    {
        $this->orchards[] = $orchard;

        return $this;
    }

    /**
     * Remove orchard
     *
     * @param \AppBundle\Entity\orchard $orchard
     */
    public function removeOrchard(\AppBundle\Entity\orchard $orchard)
    {
        $this->orchards->removeElement($orchard);
    }

    /**
     * Get orchards
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrchards()
    {
        return $this->orchards;
    }
}
