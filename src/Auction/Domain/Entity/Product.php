<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 08/01/2017
 * Time: 9:21 AM
 */

namespace Auction\Domain\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Ramsey\Uuid\Uuid;
use DateTime;

class Product
{
    /**
     * @var Uuid
     */
    private $id;
    /**
     * @var string
     */
    private $name;
    /**
     * @var float
     */
    private $cost;
    /**
     * @var User
     */
    private $createdBy;
    /**
     * @var DateTime
     */
    private $createdAt;
    /**
     * @var User
     */
    private $updatedBy;
    /**
     * @var DateTime
     */
    private $updatedAt;
    /**
     * @var ArrayCollection
     */
    private $auctions;

    /**
     * Product constructor.
     * @param string $name
     * @param float $cost
     * @param User $createdBy
     */
    public function __construct($name, $cost, User $createdBy)
    {
        $this->id = Uuid::uuid4();
        $this->name = $name;
        $this->cost = $cost;
        $this->createdBy = $createdBy;
        $this->createdAt = new DateTime();
        $this->auctions = new ArrayCollection();
    }

    /**
     * @return Uuid
     */
    public function getId(): Uuid
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     */
    public function setCost(float $cost)
    {
        $this->cost = $cost;
    }

    /**
     * @return User
     */
    public function getCreatedBy(): User
    {
        return $this->createdBy;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return null|User
     */
    public function getUpdatedBy(): ?User
    {
        return $this->updatedBy;
    }

    /**
     * @param User $updatedBy
     */
    public function setUpdatedBy(User $updatedBy)
    {
        $this->updatedBy = $updatedBy;
    }

    /**
     * @return null|DateTime
     */
    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime $updatedAt
     */
    public function setUpdatedAt(DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return ArrayCollection
     */
    public function getAuctions(): ArrayCollection
    {
        return $this->auctions;
    }

    /**
     * @param ArrayCollection $auctions
     */
    public function setAuctions(ArrayCollection $auctions)
    {
        $this->auctions = $auctions;
    }
}
