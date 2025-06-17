<?php

namespace App\Transformers;

use App\Enums\Currency;
use Illuminate\Pagination\LengthAwarePaginator;

class PriceListTransformer
{
    public function fromList(LengthAwarePaginator $priceList, ?string $currency): LengthAwarePaginator
    {
        $currency= Currency::tryFrom($currency) ?? Currency::RUB;

        $items = $priceList->getCollection();

        $transformed = $items->map(function ($item) use ($currency) {
            $item->price = $currency->formatPrice($item->price);
            return $item;
        });

        $priceList->setCollection($transformed);

        return $priceList;
    }
}
