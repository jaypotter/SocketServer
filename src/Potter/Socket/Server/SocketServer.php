<?php

declare(strict_types=1);

namespace Potter\Socket\Server;

use \Potter\Aware\{AwareInterface, AwareTrait};
use \Potter\Cloneable\{CloneableInterface, CloneableTrait};
use \Potter\Container\Aware\{ContainerAwareInterface, ContainerAwareTrait};
use \Potter\Socket\Aware\{SocketAwareInterface, SocketAwareTrait};

final class SocketServer extends AbstractSocketServer implements AwareInterface, CloneableInterface, ContainerAwareInterface, SocketAwareInterface
{
    use AwareTrait, CloneableTrait, ContainerAwareTrait, SocketAwareTrait, SocketServerTrait;
    
    public function __construct(ContainerInterface $container)
    {
        $this->setContainer($container);
    }
}