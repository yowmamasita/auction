<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 08/01/2017
 * Time: 9:21 AM
 */

namespace Auction\Domain\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Ramsey\Uuid\Uuid;
use DateTime;

class User
{
    /**
     * @var Uuid
     */
    private $id;
    /**
     * @var string
     */
    private $email;
    /**
     * @var string
     */
    private $password;
    /**
     * @var DateTime
     */
    private $createdAt;
    /**
     * @var ArrayCollection
     */
    private $bids;

    /**
     * User constructor.
     * @param string $email
     * @param string $password
     */
    public function __construct(string $email, string $password)
    {
        $this->id = Uuid::uuid4();
        $this->email = $email;
        $this->password = $password;
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
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
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
