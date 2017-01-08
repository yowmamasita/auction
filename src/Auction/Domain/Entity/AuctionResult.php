<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 08/01/2017
 * Time: 9:44 AM
 */

namespace Auction\Domain\Entity;


use Ramsey\Uuid\Uuid;
use DateTime;

class AuctionResult
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
     * @var Bid
     */
    private $winner;
    /**
     * @var DateTime
     */
    private $createdAt;

    /**
     * AuctionResult constructor.
     * @param Auction $auction
     * @param Bid $winner
     */
    public function __construct(Auction $auction, Bid $winner)
    {
        $this->id = Uuid::uuid4();
        $this->auction = $auction;
        $this->winner = $winner;
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
     * @return Bid
     */
    public function getWinner(): Bid
    {
        return $this->winner;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }
}
