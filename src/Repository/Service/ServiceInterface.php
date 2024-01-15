<?php
namespace Cl\Container\Repository\Service;

use Cl\Container\Repository\Service\Info\ServiceInfoInterface;

interface ServiceInterface
{
    function get(): mixed;
    function getInfo(): ServiceInfoInterface;
}