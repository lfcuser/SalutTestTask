<?php

namespace App\Http\Controllers;

use App\Services\Features\PriceList;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PriceController extends Controller
{
    /**
     * @OA\Get(
     *   path="/api/prices",
     *   summary="Получить список отслеживаемых географических точек",
     *   operationId="GetPriceList",
     *   tags={"Price"},
     *   @OA\Parameter(name="page", in="query", @OA\Schema(type="integer")),
     *   @OA\Parameter(name="limit", in="query", @OA\Schema(type="integer")),
     *   @OA\Parameter(name="currency", in="query", @OA\Schema(type="string")),
     *   @OA\Response(
     *     response="200",
     *     description="Success",
     *     @OA\JsonContent(
     *       required={"success"},
     *       @OA\Property(property="success", type="bool", default=true),
     *       @OA\Property(property="data", type="object",
     *          required={"current_page","last_page","per_page","total","data"},
     *          @OA\Property(property="current_page", type="integer"),
     *          @OA\Property(property="last_page", type="integer"),
     *          @OA\Property(property="per_page", type="integer"),
     *          @OA\Property(property="total", type="integer"),
     *          @OA\Property(property="data", type="array", @OA\Items(
     *              @OA\Property(property="id", type="integer"),
     *              @OA\Property(property="price", type="number", format="float"),
     *              @OA\Property(property="title", type="string"),
     *          ))
     *       )
     *     )
     *   ),
     *   @OA\Response(response=401, ref="#/components/responses/errorResponseUnauthorized"),
     *   @OA\Response(response=422, ref="#/components/responses/errorResponseBadRequest")
     * )
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request, PriceList $featureService): JsonResponse
    {
        $prices = $featureService->handle($request->all());
        return response()->success($prices);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
