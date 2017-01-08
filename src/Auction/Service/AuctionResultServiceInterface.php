<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 08/01/2017
 * Time: 11:14 AM
 */

namespace Auction\Service;


use Auction\Domain\Entity\AuctionResult;
use Auction\Throwable\AuctionNotFoundException;
use Ramsey\Uuid\UuidInterface;

interface AuctionResultServiceInterface
{
    /**
     * @param UuidInterface $auctionId
     * @throws AuctionNotFoundException
     * @return AuctionResult
     */
    public function processAuction(UuidInterface $auctionId): AuctionResult;
}
