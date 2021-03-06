<?php

namespace Alba\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuestBook
 *
 * @ORM\Table(name="guest_book")
 * 
 */
class GuestBook
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
     * @ORM\ManyToOne(targetEntity="Reservation", inversedBy="quest_id")
     * @ORM\JoinColumn(name="reservation_id", referencedColumnName="id")
     */

    private $reservation_id;

    /**
     * @var string
     *
     * @ORM\Column(name="name_adult", type="string", length=255, nullable=true)
     */
    private $nameAdult;
    
    /**
     * @var string
     *
     * @ORM\Column(name="age_adult", type="string", length=32)
     */
    private $ageAdult;

    /**
     * @var string
     *
     * @ORM\Column(name="name_child", type="string", length=255, nullable=true)
     */
    private $nameChild;

    /**
     * @var string
     *
     * @ORM\Column(name="age_child", type="string", length=45, nullable=true)
     */
    private $ageChild;


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
     * Set nameAdult
     *
     * @param string $nameAdult
     *
     * @return GuestBook
     */
    public function setNameAdult($nameAdult)
    {
        $this->nameAdult = $nameAdult;

        return $this;
    }

    /**
     * Get nameAdult
     *
     * @return string
     */
    public function getNameAdult()
    {
        return $this->nameAdult;
    }

    /**
     * Set ageAdult
     *
     * @param string $ageAdult
     *
     * @return GuestBook
     */
    public function setAgeAdult($ageAdult)
    {
        $this->ageAdult = $ageAdult;

        return $this;
    }

    /**
     * Get ageAdult
     *
     * @return string
     */
    public function getAgeAdult()
    {
        return $this->ageAdult;
    }

    /**
     * Set nameChild
     *
     * @param string $nameChild
     *
     * @return GuestBook
     */
    public function setNameChild($nameChild)
    {
        $this->nameChild = $nameChild;

        return $this;
    }

    /**
     * Get nameChild
     *
     * @return string
     */
    public function getNameChild()
    {
        return $this->nameChild;
    }

    /**
     * Set ageChild
     *
     * @param string $ageChild
     *
     * @return GuestBook
     */
    public function setAgeChild($ageChild)
    {
        $this->ageChild = $ageChild;

        return $this;
    }

    /**
     * Get ageChild
     *
     * @return string
     */
    public function getAgeChild()
    {
        return $this->ageChild;
    }
}
