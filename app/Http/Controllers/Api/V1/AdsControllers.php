<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreAdsRequest;
use App\Http\Requests\UpdateAdsRequest;
use App\Models\Ads;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdsRequest $request)
    {
        $image_path = rand() . 'ADS' . time() . '.' . $request->image_url->extension();
        $request->image_url->move(public_path('images/ads'), $image_path);

        Ads::create([
            'image' => $image_path,
            'description' => $request->description,
            'product_ids' => $request->product_ids
        ]);

        return response(['success' => true]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ads $ads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdsRequest $request, Ads $ads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ads $ads)
    {
        //
    }
}
