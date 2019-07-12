<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Booking
 *
 * @ORM\Table(name="booking", indexes={@ORM\Index(name="fk_booking_room1_idx", columns={"room_id"}), @ORM\Index(name="fk_booking_member1_idx", columns={"guest_id"})})
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity
 */
class Booking
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="start_date", type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duration", type="integer", nullable=true)
     */
    private $duration;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_pay", type="float", precision=10, scale=0, nullable=true)
     */
    private $totalPay;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=true)
     */
    private $status;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=true)
     */
    private $createdDate;

    /**
     * @var \Room
     *
     * @ORM\ManyToOne(targetEntity="Room")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="room_id", referencedColumnName="id")
     * })
     */
    private $room;

    /**
     * @var \Member
     *
     * @ORM\ManyToOne(targetEntity="Member")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="guest_id", referencedColumnName="id")
     * })
     */
    private $guest;



    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set startDate.
     *
     * @param \DateTime|null $startDate
     *
     * @return Booking
     */
    public function setStartDate($startDate = null)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate.
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set duration.
     *
     * @param int|null $duration
     *
     * @return Booking
     */
    public function setDuration($duration = null)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration.
     *
     * @return int|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set endDate.
     *
     * @param \DateTime|null $endDate
     *
     * @return Booking
     */
    public function setEndDate($endDate = null)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate.
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set totalPay.
     *
     * @param float|null $totalPay
     *
     * @return Booking
     */
    public function setTotalPay($totalPay = null)
    {
        $this->totalPay = $totalPay;

        return $this;
    }

    /**
     * Get totalPay.
     *
     * @return float|null
     */
    public function getTotalPay()
    {
        return $this->totalPay;
    }

    /**
     * Set status.
     *
     * @param string|null $status
     *
     * @return Booking
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set createdDate.
     *
     * @param \DateTime|null $createdDate
     *
     * @return Booking
     */
    public function setCreatedDate($createdDate = null)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate.
     *
     * @return \DateTime|null
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @ORM\PrePersist
     */
    public function setCreatedDateValue()
    {
        $this->createdDate = new \DateTime();
    }

    /**
     * Set room.
     *
     * @param \AppBundle\Entity\Room|null $room
     *
     * @return Booking
     */
    public function setRoom(\AppBundle\Entity\Room $room = null)
    {
        $this->room = $room;

        return $this;
    }

    /**
     * Get room.
     *
     * @return \AppBundle\Entity\Room|null
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Set guest.
     *
     * @param \AppBundle\Entity\Member|null $guest
     *
     * @return Booking
     */
    public function setGuest(\AppBundle\Entity\Member $guest = null)
    {
        $this->guest = $guest;

        return $this;
    }

    /**
     * Get guest.
     *
     * @return \AppBundle\Entity\Member|null
     */
    public function getGuest()
    {
        return $this->guest;
    }
}
