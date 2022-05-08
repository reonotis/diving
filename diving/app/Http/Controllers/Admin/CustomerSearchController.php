<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Customer, CustomerInfo};

class CustomerSearchController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.customer.search');
    }

    /**
     *
     */
    public function search()
    {
        //
    }

    /**
     *
     * @param  int  $id
     */
    public function searching(Request $request)
    {
        $customers = Customer::getByCondition();
        // TODO 顧客のライセンスを取得
        // TODO 顧客の本数を取得
        return view('admin.customer.list', compact('customers'));
    }

    /**
     *
     */
    public function list()
    {
        //
    }

}
