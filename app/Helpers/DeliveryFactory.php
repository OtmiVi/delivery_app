<?php

namespace App\Helpers;

use App\Helpers\DeliveryServices\NovaPost;
use Illuminate\Http\JsonResponse;

class DeliveryFactory
{
    public static function sendDeliveryData(array $packageData, string $deliveryService): JsonResponse
    {
        // можна додавати нові типи доставок
        return match ($deliveryService) {
            'nova_posta' => NovaPost::sendDeliveryData($packageData),
            default => response()->json(['message' => 'Unnoun delivery method'])
        };
    }
}