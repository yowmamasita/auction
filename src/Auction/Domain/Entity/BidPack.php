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
    private $credits;
    /**
     * @var float
     */
    private $price;

    /**
     * BidPack constructor.
     * @param int $credits
     * @param float $price
     */
    public function __construct(int $credits, float $price)
    {
        $this->id = Uuid::uuid4();
        $this->credits = $credits;
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
    public function getCredits(): int
    {
        return $this->credits;
    }

    /**
     * @param int $credits
     */
    public function setCredits(int $credits)
    {
        $this->credits = $credits;
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
