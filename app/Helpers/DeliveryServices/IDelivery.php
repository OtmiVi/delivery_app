<?php

namespace App\Helpers\DeliveryServices;

use Illuminate\Http\JsonResponse;

interface IDelivery
{
    public static function sendDeliveryData(array $packageData): JsonResponse;
}