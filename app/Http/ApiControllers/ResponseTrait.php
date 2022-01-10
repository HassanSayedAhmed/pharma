<?php

namespace App\Http\ApiControllers;

use Symfony\Component\HttpFoundation\Response;

trait ResponseTrait
{
    public $paginationNumber = 10;

    public function ApiResponse($data = null, $error = [], $code =Response::HTTP_OK , $message = null)
    {

        $array = [
            'data' => $data,
            'status' => in_array($code, $this->SuccessArray()) ? true : false,
            'message' => $message,
            'error' => $error,
            'code' => $code
        ];

        return response($array, $code);
    }


    public function SuccessArray()
    {

        return [
            200, 201, 202
        ];
    }


}