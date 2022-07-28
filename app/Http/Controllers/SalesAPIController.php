<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Models\Salesman;
use Illuminate\Http\Request;

class SalesAPIController extends Controller
{
    public function sales(Request $request)
    {
        // $sales_salesman = Sales::where('SalesCall_id',$request->id)->get();
        $salesman = Salesman::where('id',$request->id)->pluck('name');
        $Product = Sales::where('SalesCall_id',$request->id)->select('POS_NAME','POS_CODE','VISIT_START_TIME','VISIT_END_TIME','COMPANY_NAME','PRODUCT', 'PROD_ID', 'PRODUCT', 'STOCK')->get();

        return response()->json([
            'status'  => 200,
            'salesman' => $salesman,
            'Product' => $Product,
     ]);
    }
}
