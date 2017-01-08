<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 08/01/2017
 * Time: 7:37 PM
 */

namespace Auction\Service;


use Auction\Domain\Entity\BidPack;
use Auction\Domain\Entity\User;
use Auction\Domain\Entity\Wallet;

interface WalletServiceInterface
{
    public function topUpWithBidPack(User $user, BidPack $bidPack): Wallet;
}
