<?php

namespace App\Services;

use App\Models\Price;
use Illuminate\Pagination\LengthAwarePaginator;

class PriceService
{
    /**
     * @param ?int $page
     * @param ?int $limit
     *
     * @return LengthAwarePaginator
     */
    public function getList(?int $page = 1, ?int $limit = 20): LengthAwarePaginator
    {
        return Price::paginate(perPage: $limit, page: $page);
    }
}