<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 08/01/2017
 * Time: 7:06 PM
 */

namespace Auction\Domain\Entity;


use Ramsey\Uuid\Uuid;
use DateTime;

class Wallet
{
    /**
     * @var Uuid
     */
    private $id;
    /**
     * @var int
     */
    private $initialAmount;
    /**
     * @var int
     */
    private $remainingAmount;
    /**
     * @var float
     */
    private $pricePaid;
    /**
     * @var float
     */
    private $returnPerUnit;
    /**
     * @var User
     */
    private $createdBy;
    /**
     * @var DateTime
     */
    private $createdAt;

    /**
     * Wallet constructor.
     * @param int $initialAmount
     * @param float $pricePaid
     * @param User $createdBy
     */
    public function __construct(int $initialAmount, float $pricePaid, User $createdBy)
    {
        $this->id = Uuid::uuid4();
        $this->initialAmount = $initialAmount;
        $this->remainingAmount = $initialAmount;
        $this->pricePaid = $pricePaid;
        $this->returnPerUnit = round($pricePaid / $initialAmount, 2);
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
     * @return int
     */
    public function getInitialAmount(): int
    {
        return $this->initialAmount;
    }

    /**
     * @return int
     */
    public function getRemainingAmount(): int
    {
        return $this->remainingAmount;
    }

    /**
     * @param int $remainingAmount
     */
    public function setRemainingAmount(int $remainingAmount)
    {
        $this->remainingAmount = $remainingAmount;
    }

    /**
     * @return float
     */
    public function getPricePaid(): float
    {
        return $this->pricePaid;
    }

    /**
     * @return float
     */
    public function getReturnPerUnit(): float
    {
        return $this->returnPerUnit;
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
