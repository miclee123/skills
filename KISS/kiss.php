<?php

declare(strict_types=1);

function calculateTotalPrice(float $price, float $discount, bool $isMember): float
{
    if ($discount > 0) {
        return $isMember ? $price - ($price * $discount / 100) : $price - $discount;
    }

    return $isMember ? $price * 0.9 : $price;
}
