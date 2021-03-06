<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 08/01/2017
 * Time: 11:01 AM
 */

namespace Auction\Service;


use Auction\Domain\Entity\Bid;
use Auction\Throwable\InsufficientBalanceException;
use Auction\Throwable\InvalidActionException;
use Auction\Throwable\AuctionNotFoundException;
use Ramsey\Uuid\UuidInterface;

interface BidServiceInterface
{
    /**
     * @param UuidInterface $auctionId
     * @throws InsufficientBalanceException
     * @throws InvalidActionException
     * @throws AuctionNotFoundException
     * @return Bid
     */
    public function bidOnAuction(UuidInterface $auctionId): Bid;
}
