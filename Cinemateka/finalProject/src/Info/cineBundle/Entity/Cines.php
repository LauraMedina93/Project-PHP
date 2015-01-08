<?php

namespace Info\cineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cines
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Cines
{
    /**
     * @var integer
     * 
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(name="address", type="string", length=50)
     */
    private $address;

    /**
     * @var array
     * @ORM\Column(name="carteleras", type="array")
     */
    private $cateleras;


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
     * @return Cines
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
     * Set address
     *
     * @param string $address
     * @return Cines
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set cateleras
     *
     * @param array $cateleras
     * @return Cines
     */
    public function setCateleras($cateleras)
    {
        $this->cateleras = $cateleras;

        return $this;
    }

    /**
     * Get cateleras
     *
     * @return array 
     */
    public function getCateleras()
    {
        return $this->cateleras;
    }
}
