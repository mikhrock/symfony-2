<?php

namespace TriggMine\ApiBundle\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Sylius\Component\Cart\Event\CartEvent;
use Symfony\Component\EventDispatcher\GenericEvent;

class CartListener
{
    public function onCartSave( GenericEvent $event )
    {
        var_dump(1); exit();
    }
}