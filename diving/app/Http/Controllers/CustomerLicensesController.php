<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerLicensesRequest;
use App\Http\Requests\UpdateCustomerLicensesRequest;
use App\Models\CustomerLicenses;

class CustomerLicensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerLicensesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerLicensesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerLicenses  $customerLicenses
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerLicenses $customerLicenses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerLicenses  $customerLicenses
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerLicenses $customerLicenses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerLicensesRequest  $request
     * @param  \App\Models\CustomerLicenses  $customerLicenses
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerLicensesRequest $request, CustomerLicenses $customerLicenses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerLicenses  $customerLicenses
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerLicenses $customerLicenses)
    {
        //
    }
}
