<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 08/01/2017
 * Time: 9:32 AM
 */

namespace Auction\Domain\ValueObject;


use DomainException;


class AuctionStatus
{
    const SCHEDULED = 'scheduled';
    const STARTED = 'started';
    const PROCESSING = 'processing';
    const ENDED = 'ended';
    const HIDDEN = 'hidden';

    /**
     * @var string
     */
    private $name;

    /**
     * AuctionStatus constructor.
     * @param string $name
     */
    public function __construct($name)
    {
        $constant = strtoupper($name);
        if (! defined('self::' . $constant)) {
            throw new DomainException('This role is invalid');
        }
        $this->name = constant('self::' . $constant);
    }

    /**
     * @inheritDoc
     */
    public static function __callStatic($name, $arguments)
    {
        return new self($name);
    }

    /**
     * @inheritDoc
     */
    function __toString()
    {
        return $this->getName();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function isScheduled(): bool
    {
        return $this->name === self::SCHEDULED;
    }

    /**
     * @return bool
     */
    public function hasStarted(): bool
    {
        return $this->name === self::STARTED;
    }

    /**
     * @return bool
     */
    public function isProcessing(): bool
    {
        return $this->name === self::PROCESSING;
    }

    /**
     * @return bool
     */
    public function hasEnded(): bool
    {
        return $this->name === self::ENDED;
    }

    /**
     * @return bool
     */
    public function isHidden(): bool
    {
        return $this->name === self::HIDDEN;
    }
}
