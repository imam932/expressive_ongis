<?php
/**
 * Created by PhpStorm.
 * User: asrulsibaoel
 * Date: 14/06/17
 * Time: 14:50
 */

namespace App\Http\Action;


use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\JsonResponse;

class AboutAction implements MiddlewareInterface
{

  public function process(ServerRequestInterface $request, DelegateInterface $delegate)
  {
    // TODO: Implement process() method.

    return new JsonResponse([
      'data'  => [
        'nama'  => 'Imam Nawawi',
        'kelas' => 'Backend Class'
      ]
    ]);
  }
}
