<?php

namespace Alba\Bundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Order_info
 *
 * @ORM\Table(name="order_info")
 * @ORM\Entity(repositoryClass="Alba\Bundle\Repository\Order_infoRepository")
 */
class Order_info
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
     * @var Rooms
     *
     * @ORM\ManyToOne(targetEntity="Rooms", inversedBy="orders")
     */
    private $rooms;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=255)
     */
    private $place;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode", type="string", length=255)
     */
    private $zipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var int
     *
     * @ORM\Column(name="phone_number", type="integer")
     */
    private $phoneNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="arrival", type="date")
     */
    private $arrival;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="departure", type="date")
     */
    private $departure;

    /**
     * @var int
     *
     * @ORM\Column(name="creditcard", type="integer")
     */
    private $creditcard;

    /**
     * @var string
     *
     * @ORM\Column(name="card_owner", type="string", length=255)
     */
    private $cardOwner;

    /**
     * @var string
     *
     * @ORM\Column(name="kind_payment", type="string", length=255)
     */
    private $kindPayment;


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
     * @return Order_info
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
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Order_info
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Order_info
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set place
     *
     * @param string $place
     *
     * @return Order_info
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Order_info
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     *
     * @return Order_info
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Order_info
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set phoneNumber
     *
     * @param integer $phoneNumber
     *
     * @return Order_info
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return int
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set arrival
     *
     * @param \DateTime $arrival
     *
     * @return Order_info
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return \DateTime
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * Set departure
     *
     * @param \DateTime $departure
     *
     * @return Order_info
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return \DateTime
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set creditcard
     *
     * @param integer $creditcard
     *
     * @return Order_info
     */
    public function setCreditcard($creditcard)
    {
        $this->creditcard = $creditcard;

        return $this;
    }

    /**
     * Get creditcard
     *
     * @return int
     */
    public function getCreditcard()
    {
        return $this->creditcard;
    }

    /**
     * Set cardOwner
     *
     * @param string $cardOwner
     *
     * @return Order_info
     */
    public function setCardOwner($cardOwner)
    {
        $this->cardOwner = $cardOwner;

        return $this;
    }

    /**
     * Get cardOwner
     *
     * @return string
     */
    public function getCardOwner()
    {
        return $this->cardOwner;
    }

    /**
     * Set kindPayment
     *
     * @param string $kindPayment
     *
     * @return Order_info
     */
    public function setKindPayment($kindPayment)
    {
        $this->kindPayment = $kindPayment;

        return $this;
    }

    /**
     * Get kindPayment
     *
     * @return string
     */
    public function getKindPayment()
    {
        return $this->kindPayment;
    }

    /**
     * Set rooms
     *
     * @param \Alba\Bundle\Entity\Rooms $rooms
     *
     * @return Order_info
     */
    public function setRooms(\Alba\Bundle\Entity\Rooms $rooms = null)
    {
        $this->rooms = $rooms;

        return $this;
    }

    /**
     * Get rooms
     *
     * @return \Alba\Bundle\Entity\Rooms
     */
    public function getRooms()
    {
        return $this->rooms;
    }
}
