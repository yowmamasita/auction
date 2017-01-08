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
    private $initialCredits;
    /**
     * @var int
     */
    private $remainingCredits;
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
     * @param int $initialCredits
     * @param float $pricePaid
     * @param User $createdBy
     */
    public function __construct(int $initialCredits, float $pricePaid, User $createdBy)
    {
        $this->id = Uuid::uuid4();
        $this->initialCredits = $initialCredits;
        $this->remainingCredits = $initialCredits;
        $this->pricePaid = $pricePaid;
        $this->returnPerUnit = round($pricePaid / $initialCredits, 2);
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
    public function getInitialCredits(): int
    {
        return $this->initialCredits;
    }

    /**
     * @return int
     */
    public function getRemainingCredits(): int
    {
        return $this->remainingCredits;
    }

    /**
     * @param int $remainingCredits
     */
    public function setRemainingCredits(int $remainingCredits)
    {
        $this->remainingCredits = $remainingCredits;
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
