<?php

namespace DesignPatterns\Behavioural\Mediator;

interface ChatRoomMediator
{
    public function showMessage(User $user, string $message);
}
