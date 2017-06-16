<?php
/**
* Created by PhpStorm.
* User: asrulsibaoel
* Date: 14/06/17
* Time: 14:50
*/

namespace App\Http\Factory;


use App\Http\Action\AboutAction;
use Interop\Container\ContainerInterface;

class AboutActionFactory
{

  public function __invoke(ContainerInterface $Container)
  {
    // TODO: Implement process() method.

    return new AboutAction();

  }
}
