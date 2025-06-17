<?php

namespace App\Rules;

use App\Enums\Currency;
use App\Rules\BaseRule;
use Illuminate\Validation\Rule;

class PriceCurrencyRule extends BaseRule
{
    public function __construct(
        protected bool $required = false,
    ) {
    }

    public function rules(): array
    {
        $rules = [
            'string',
            Rule::in(array_map(fn($currency) => $currency->value, Currency::cases())),
        ];

        return $this->requred($rules, $this->required);
    }
}
