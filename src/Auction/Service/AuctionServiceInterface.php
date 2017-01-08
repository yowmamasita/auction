<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 08/01/2017
 * Time: 11:16 AM
 */

namespace Auction\Service;


use Auction\Throwable\AuctionNotFoundException;
use Auction\Throwable\InvalidActionException;
use Ramsey\Uuid\UuidInterface;

interface AuctionServiceInterface
{
    /**
     * @param UuidInterface $auctionId
     * @throws AuctionNotFoundException
     * @throws InvalidActionException
     */
    public function processResult(UuidInterface $auctionId): void;

    /**
     * @param UuidInterface $auctionId
     * @throws AuctionNotFoundException
     */
    public function returnAllBids(UuidInterface $auctionId): void;
}
