<?php


namespace App\Http\Controllers\api;

trait ApiResponse
{
    public function apiResponse($data, int $status)
    {
        return response()->json(['data' => $data], $status);
    }
}
