<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('acme_test_homepage', new Route('/hello/{name}', array(
    '_controller' => 'AcmeTestBundle:Default:index',
)));

return $collection;
