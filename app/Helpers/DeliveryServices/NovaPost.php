<?php

namespace App\Helpers\DeliveryServices;

use Illuminate\Http\JsonResponse;

class NovaPost implements IDelivery
{
    public static function sendDeliveryData(array $packageData): JsonResponse
    {
        $requestData = [
            'customer_name' => $packageData['full_name'],
            'phone_number' => $packageData['phone_number'],
            'email' => $packageData['email'],
            'sender_address' => config('sender_address'),
            'delivery_address' => $packageData['address'],
        ];
        // Надсилання  даних
        //sendData($requestData);
        $response = ['message' => "Succes"];//відповідь від сервера

        return response()->json($response);
        
    }  
}