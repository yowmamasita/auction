<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 08/01/2017
 * Time: 11:11 AM
 */

namespace Auction\Service;


use Auction\Domain\Entity\User;

interface UserServiceInterface
{
    /**
     * @return User
     */
    public function getCurrentUser(): User;
}
