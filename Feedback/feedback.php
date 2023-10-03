<?php

use App\Feedback\FormHandlerLax;
use App\Feedback\FormHandlerStrict;


require_once __DIR__ . '/vendor/autoload.php';

// Масштабируемость
match ('strict'){
    'strict' => FormHandlerStrict::processForm(),
    'lax' => FormHandlerLax::processForm(),
    default => false
};

/**
 *  JSON-ответ с заданным сообщением и HTTP-статусом.
 *
 * @param string $msg        Сообщение для включения в ответ (default success).
 * @param int    $statusCode HTTP-статус код ответа (default 200 OK).
 * @Class Response
 * @return void
 */
//Symphograph\Bicycle\Api\Response::success();
