<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 08/01/2017
 * Time: 9:21 AM
 */

namespace Auction\Domain\Entity;


use Ramsey\Uuid\Uuid;
use DateTime;

class Bid
{
    /**
     * @var Uuid
     */
    private $id;
    /**
     * @var Auction
     */
    private $auction;
    /**
     * @var float
     */
    private $value;
    /**
     * @var float
     */
    private $return;
    /**
     * @var User
     */
    private $createdBy;
    /**
     * @var DateTime
     */
    private $createdAt;

    /**
     * Bid constructor.
     * @param Auction $auction
     * @param float $value
     * @param float $return
     * @param User $createdBy
     */
    public function __construct(Auction $auction, float $value, float $return, User $createdBy)
    {
        $this->id = Uuid::uuid4();
        $this->auction = $auction;
        $this->value = $value;
        $this->return = $return;
        $this->createdBy = $createdBy;
        $this->createdAt = new DateTime();
    }

    /**
     * @return Uuid
     */
    public function getId(): Uuid
    {
        return $this->id;
    }

    /**
     * @return Auction
     */
    public function getAuction(): Auction
    {
        return $this->auction;
    }

    /**
     * @param Auction $auction
     */
    public function setAuction(Auction $auction)
    {
        $this->auction = $auction;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @param float $value
     */
    public function setValue(float $value)
    {
        $this->value = $value;
    }

    /**
     * @return float
     */
    public function getReturn(): float
    {
        return $this->return;
    }

    /**
     * @param float $return
     */
    public function setReturn(float $return)
    {
        $this->return = $return;
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
}
