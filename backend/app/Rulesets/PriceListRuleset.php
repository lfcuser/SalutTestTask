<?php

namespace App\Rulesets;

use App\Rules\IntegerFromMinToMaxRule;
use App\Rules\PriceCurrencyRule;

class PriceListRuleset
{
    public function getRuleset()
    {
        return [
            'page' => (new IntegerFromMinToMaxRule(1, 2147483646))->rules(),
            'limit' => (new IntegerFromMinToMaxRule(1, 50))->rules(),
            'currency' => (new PriceCurrencyRule())->rules(),
        ];
    }
}
