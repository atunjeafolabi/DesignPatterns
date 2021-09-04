<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Proxy;

class SecuredDoor
{
    protected Door $door;
    /**
     * @var bool
     */
    private bool $opened;

    public function __construct(Door $door)
    {
        $this->door = $door;
    }

    public function open($password)
    {
        if ($this->authenticate($password)) {
            $this->door->open();
            $this->opened = true;
        }
    }

    public function authenticate($password)
    {
        return $password === '$ecr@t';
    }

    public function close()
    {
        $this->door->close();
        $this->opened = false;
    }

    public function isClosed()
    {
        return !$this->opened;
    }

    public function isOpened()
    {
        return $this->opened;
    }
}
