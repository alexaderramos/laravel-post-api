<?php

namespace App\Traits;

trait ApiResponse{

    public function successResponse($data,$code = 200, $msj = ""): \Illuminate\Http\JsonResponse
    {
        return response()->json(array(
            "data"=>$data,
            "code"=> $code,
            "msj"=>$msj
        ), $code);
    }

    public function errorResponse($data,$code = 500, $msj = ""): \Illuminate\Http\JsonResponse
    {
        return response()->json(array(
            "data"=>$data,
            "code"=> $code,
            "msj"=>$msj
        ), $code);
    }
}
