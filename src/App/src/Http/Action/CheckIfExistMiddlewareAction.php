<?php
/**
 * Created by PhpStorm.
 * User: asrulsibaoel
 * Date: 14/06/17
 * Time: 14:50
 */

namespace App\Http\Action;


use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface as ServerMiddlewareInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\JsonResponse;


class CheckIfExistMiddlewareAction implements ServerMiddlewareInterface
{

    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {
        // TODO: Implement process() method.

        // cek kalau ada parameter saya
        if ($request->getAttribute('id') == 'saya') {
          // request di lanjutkan ke middleware selanjutnya atau controller aplikasi
            return $delegate->process($request);
        }

        //redirect ke json di bawah ini
        return new JsonResponse([
            'error' => 'id must be "saya"'
        ]);
    }


}
