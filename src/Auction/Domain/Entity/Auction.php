<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 08/01/2017
 * Time: 9:21 AM
 */

namespace Auction\Domain\Entity;


use Auction\Domain\ValueObject\AuctionStatus;
use Doctrine\Common\Collections\ArrayCollection;
use Ramsey\Uuid\Uuid;
use DateTime;

class Auction
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
     * @var Product
     */
    private $product;
    /**
     * @var float
     */
    private $targetReturn;
    /**
     * @var float
     */
    private $minimumBidValue;
    /**
     * @var float
     */
    private $maximumBidValue;
    /**
     * @var int
     */
    private $scaleLimit;
    /**
     * @var AuctionStatus
     */
    private $status;
    /**
     * @var AuctionResult
     */
    private $result;
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
    private $bids;

    /**
     * Auction constructor.
     * @param string $name
     * @param Product $product
     * @param float $targetReturn
     * @param float $minimumBidValue
     * @param float $maximumBidValue
     * @param int $scaleLimit
     * @param User $createdBy
     */
    public function __construct(
        string $name,
        Product $product,
        float $targetReturn,
        float $minimumBidValue,
        float $maximumBidValue,
        int $scaleLimit,
        User $createdBy)
    {
        $this->id = Uuid::uuid4();
        $this->name = $name;
        $this->product = $product;
        $this->targetReturn = $targetReturn;
        $this->minimumBidValue = $minimumBidValue;
        $this->maximumBidValue = $maximumBidValue;
        $this->scaleLimit = $scaleLimit;
        $this->status = AuctionStatus::SCHEDULED;
        $this->createdBy = $createdBy;
        $this->createdAt = new DateTime();
        $this->bids = new ArrayCollection();
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
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * @return float
     */
    public function getTargetReturn(): float
    {
        return $this->targetReturn;
    }

    /**
     * @param float $targetReturn
     */
    public function setTargetReturn(float $targetReturn)
    {
        $this->targetReturn = $targetReturn;
    }

    /**
     * @return float
     */
    public function getMinimumBidValue(): float
    {
        return $this->minimumBidValue;
    }

    /**
     * @param float $minimumBidValue
     */
    public function setMinimumBidValue(float $minimumBidValue)
    {
        $this->minimumBidValue = $minimumBidValue;
    }

    /**
     * @return float
     */
    public function getMaximumBidValue(): float
    {
        return $this->maximumBidValue;
    }

    /**
     * @param float $maximumBidValue
     */
    public function setMaximumBidValue(float $maximumBidValue)
    {
        $this->maximumBidValue = $maximumBidValue;
    }

    /**
     * @return int
     */
    public function getScaleLimit(): int
    {
        return $this->scaleLimit;
    }

    /**
     * @param int $scaleLimit
     */
    public function setScaleLimit(int $scaleLimit)
    {
        $this->scaleLimit = $scaleLimit;
    }

    /**
     * @return AuctionStatus
     */
    public function getStatus(): AuctionStatus
    {
        return $this->status;
    }

    /**
     * @param AuctionStatus $status
     */
    public function setStatus(AuctionStatus $status)
    {
        $this->status = $status;
    }

    /**
     * @return null|AuctionResult
     */
    public function getResult(): ?AuctionResult
    {
        return $this->result;
    }

    /**
     * @param AuctionResult $result
     */
    public function setResult(AuctionResult $result)
    {
        $this->result = $result;
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
    public function getBids(): ArrayCollection
    {
        return $this->bids;
    }

    /**
     * @param ArrayCollection $bids
     */
    public function setBids(ArrayCollection $bids)
    {
        $this->bids = $bids;
    }
}
