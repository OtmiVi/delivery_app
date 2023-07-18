<?php

namespace App\Http\Controllers;

use App\Helpers\DeliveryFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
     public function sendDeliveryData(Request $request): JsonResponse
    {

        /* Запит
        {
            "customer_data": {
                ...
            },
            "delivery_data": {
                ...
            },
            "delivery_service" : "type"
        }
        
        */
        // Дані про посилку і користувача
        $customerData = $request->input('customer_data');
        $deliveryData = $request->input('delivery_data');

        // якщо буде багато доставок тоді можна отримувати назву доставки
        $deliveryService = $request->input('delivery_service');

        $packageData = array_merge($customerData, $deliveryData);

        // відправка відповіді
        return DeliveryFactory::sendDeliveryData($packageData, $deliveryService);
    }
}
