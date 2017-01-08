<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 08/01/2017
 * Time: 7:05 PM
 */

namespace Auction\Domain\Entity;


use Ramsey\Uuid\Uuid;

class BidPack
{
    /**
     * @var Uuid
     */
    private $id;
    /**
     * @var int
     */
    private $amount;
    /**
     * @var float
     */
    private $price;

    /**
     * BidPack constructor.
     * @param int $amount
     * @param float $price
     */
    public function __construct(int $amount, float $price)
    {
        $this->id = Uuid::uuid4();
        $this->amount = $amount;
        $this->price = $price;
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
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price)
    {
        $this->price = $price;
    }
}
