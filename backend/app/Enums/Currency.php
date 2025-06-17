<?php

namespace App\Enums;

enum Currency: string
{
    case USD = 'USD';
    case EUR = 'EUR';
    case RUB = 'RUB';

    public function formatPrice(float $price): string
    {
        return match ($this) {
            self::USD => '$' . number_format($price, 2, '.', ''),
            self::EUR => '€' . number_format($price, 2, ',', ''),
            self::RUB => number_format($price, 0, '', ' ') . ' ₽',
        };
    }
}
