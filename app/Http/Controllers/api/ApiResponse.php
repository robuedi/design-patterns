<?php


namespace App\Http\Controllers\api;

trait ApiResponse
{
    public function apiResponse(array $data, int $status)
    {
        return response()->json(['data' => $data], $status);
    }
}
