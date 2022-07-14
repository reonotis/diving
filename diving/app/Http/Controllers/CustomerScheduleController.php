<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerScheduleRequest;
use App\Http\Requests\UpdateCustomerScheduleRequest;
use App\Models\CustomerSchedule;

class CustomerScheduleController extends Controller
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
     * @param  \App\Http\Requests\StoreCustomerScheduleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerScheduleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerSchedule  $customerSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerSchedule $customerSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerSchedule  $customerSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerSchedule $customerSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerScheduleRequest  $request
     * @param  \App\Models\CustomerSchedule  $customerSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerScheduleRequest $request, CustomerSchedule $customerSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerSchedule  $customerSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerSchedule $customerSchedule)
    {
        //
    }
}
