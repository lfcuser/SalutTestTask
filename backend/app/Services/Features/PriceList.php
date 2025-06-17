<?php

namespace App\Services\Features;

use App\Rulesets\PriceListRuleset;
use App\Services\PriceService;
use App\Transformers\PriceListTransformer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\LengthAwarePaginator;

class PriceList
{
    public function __construct(
        private PriceListRuleset $ruleset,
        private PriceService $priceService,
        private PriceListTransformer $priceListTransformer,
    ) {}

    /**
     * @param array $data
     *
     * @return LengthAwarePaginator
     */
    public function handle(array $requestData): LengthAwarePaginator
    {
        Validator::make(
            $requestData,
            $this->ruleset->getRuleset()
        )->validate();

        $priceList = $this->priceService->getList($requestData['page'] ?? null, $requestData['limit'] ?? null);

        $responseDto = $this->priceListTransformer->fromList($priceList, $requestData['currency'] ?? null);

        return $responseDto;
    }
}