<?php

declare(strict_types=1);

function formatEuroAmount(float $amount): string
{
    return number_format($amount, 2) . '€';
}


function formatDate(string $date): string
{
return date('M j, Y', strtotime($date));
}