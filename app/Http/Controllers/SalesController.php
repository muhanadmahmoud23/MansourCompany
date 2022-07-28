<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalesRequest;
use App\Models\Branch;
use App\Models\Category;
use App\Models\Company;
use App\Models\Family;
use App\Models\Position;
use App\Models\Product;
use App\Models\Region;
use App\Models\Route;
use App\Models\Sales;
use App\Models\Sales_rep;
use App\Models\Sales_TR;
use App\Models\Salesman;
use App\Models\Terminal;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            return Datatables()->of(Sales::all())
                ->addIndexColumn()
                ->addColumn('action',  'sales.datatable.actions')
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('sales.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salesman = Salesman::all()->pluck('name','id');
        $region = Region::all()->pluck('name','id');
        $branch = Branch::all()->pluck('code','id');
        $company = Company::all()->pluck('name','id');
        $category = Category::all()->pluck('desc','id');
        $terminal = Terminal::all()->pluck('name','id');
        $position = Position::all()->pluck('name','id');
        $sales_rep = Sales_rep::all()->pluck('name','id');
        $sales_ter = Sales_TR::all()->pluck('name','id');
        $route = Route::all()->pluck('type','id');
        $family = Family::all()->pluck('seq','id');
        $product = Product::all()->pluck('name','id');

        return view('sales.add', [
            'salesman'     =>    $salesman,
            'region'       =>    $region,
            'branch'       =>    $branch,
            'company'      =>    $company,
            'category'     =>    $category,
            'terminal'     =>    $terminal,
            'position'     =>    $position,
            'sales_rep'    =>    $sales_rep,
            'sales_ter'    =>    $sales_ter,
            'route'        =>    $route,
            'family'       =>    $family,
            'product'      =>    $product,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalesRequest $request)
    {
        $region = Region::where('id',$request->REGION)->pluck('name');        
        $branch = Branch::where('id',$request->BRANCH_CODE)->pluck('code');   
        $company = Company::where('id',$request->COMPANY_ID)->get();    
        $category = Category::where('id',$request->CATEGORY_ID)->pluck('desc');   
        $position = Position::where('id',$request->POS_ID)->get();   
        $salesREP = Sales_rep::where('id',$request->SALESREP_ID)->pluck('name');   
        $salesTER = Sales_TR::where('id',$request->SALES_TER_ID)->pluck('name');   
        $route = Route::where('id',$request->ROUTE_TYPE_ID)->pluck('type');   
        $family = Family::where('id',$request->FAMILY_ID)->pluck('seq');  
        $product = Product::where('id',$request->PROD_ID)->get(); 
        $JOU_ID = rand();

        $sales = new Sales;
        $sales->JOU_ID            = $JOU_ID;
        $sales->SalesCall_id      = $request->SalesCall_id;
        $sales->REGION            = $region[0];
        $sales->BRANCH_CODE       = $branch[0];
        $sales->COMPANY_SEQ       = $company[0]->seq;
        $sales->COMPANY_ID        = $request->COMPANY_ID;
        $sales->COMPANY_NAME      = $company[0]->name;
        $sales->CATEGORY_DESC     = $category[0];
        $sales->CATEGORY_ID       = $request->CATEGORY_ID;
        $sales->TER_ID            = $request->TER_ID;
        $sales->POS_ID            = $request->POS_ID;
        $sales->POS_CODE          = $position[0]->code;
        $sales->POS_NAME          = $position[0]->name;
        $sales->TEMP              = 0;
        $sales->SALESREP_ID       = $request->SALESREP_ID;
        $sales->SALESREP_NAME     = $salesREP[0];
        $sales->SALES_TER_ID      = $request->SALES_TER_ID;
        $sales->SALES_TER_NAME    = $salesTER[0];
        $sales->ROUTE_TYPE_ID     = $request->ROUTE_TYPE_ID;
        $sales->ROUTE_TYPE        = $route[0];
        $sales->DAY               = $request->DAY;
        $sales->VISIT_START_TIME  = $request->VISIT_START_TIME;
        $sales->VISIT_END_TIME    = $request->VISIT_END_TIME;
        $sales->CALL_STATUS_ID    = 's';
        $sales->FAMILY_ID         = $request->FAMILY_ID ;
        $sales->FAMILY_SEQ        = $family[0];
        $sales->PROD_FAMILY       = $product[0]->family;
        $sales->PROD_SEQ          = $product[0]->seq;
        $sales->PRODUCT           = $product[0]->name;
        $sales->PROD_ID           = $request->PROD_ID;
        $sales->SALES_CAR         = $request->SALES_CAR;
        $sales->STOCK             = $request->STOCK;
        $sales->save();

        return view('sales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        $salesman = Salesman::all()->pluck('name','id');
        $region = Region::all()->pluck('name','id');
        $branch = Branch::all()->pluck('code','id');
        $company = Company::all()->pluck('name','id');
        $category = Category::all()->pluck('desc','id');
        $terminal = Terminal::all()->pluck('name','id');
        $position = Position::all()->pluck('name','id');
        $sales_rep = Sales_rep::all()->pluck('name','id');
        $sales_ter = Sales_TR::all()->pluck('name','id');
        $route = Route::all()->pluck('type','id');
        $family = Family::all()->pluck('seq','id');
        $product = Product::all()->pluck('name','id');
        $sales = Sales::find($id);

        return view('sales.edit', [
            'sales'   =>  $sales,
            'salesman'     =>    $salesman,
            'region'       =>    $region,
            'branch'       =>    $branch,
            'company'      =>    $company,
            'category'     =>    $category,
            'terminal'     =>    $terminal,
            'position'     =>    $position,
            'sales_rep'    =>    $sales_rep,
            'sales_ter'    =>    $sales_ter,
            'route'        =>    $route,
            'family'       =>    $family,
            'product'      =>    $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $region = Region::where('id',$request->REGION)->pluck('name');        
        $branch = Branch::where('id',$request->BRANCH_CODE)->pluck('code');   
        $company = Company::where('id',$request->COMPANY_ID)->get();    
        $category = Category::where('id',$request->CATEGORY_ID)->pluck('desc');   
        $position = Position::where('id',$request->POS_ID)->get();   
        $salesREP = Sales_rep::where('id',$request->SALESREP_ID)->pluck('name');   
        $salesTER = Sales_TR::where('id',$request->SALES_TER_ID)->pluck('name');   
        $route = Route::where('id',$request->ROUTE_TYPE_ID)->pluck('type');   
        $family = Family::where('id',$request->FAMILY_ID)->pluck('seq');  
        $product = Product::where('id',$request->PROD_ID)->get(); 

        $sales = Sales::find($id);

        $sales->SalesCall_id      = $request->SalesCall_id;
        $sales->REGION            = $region[0];
        $sales->BRANCH_CODE       = $branch[0];
        $sales->COMPANY_SEQ       = $company[0]->seq;
        $sales->COMPANY_ID        = $request->COMPANY_ID;
        $sales->COMPANY_NAME      = $company[0]->name;
        $sales->CATEGORY_DESC     = $category[0];
        $sales->CATEGORY_ID       = $request->CATEGORY_ID;
        $sales->TER_ID            = $request->TER_ID;
        $sales->POS_ID            = $request->POS_ID;
        $sales->POS_CODE          = $position[0]->code;
        $sales->POS_NAME          = $position[0]->name;
        $sales->TEMP              = 0;
        $sales->SALESREP_ID       = $request->SALESREP_ID;
        $sales->SALESREP_NAME     = $salesREP[0];
        $sales->SALES_TER_ID      = $request->SALES_TER_ID;
        $sales->SALES_TER_NAME    = $salesTER[0];
        $sales->ROUTE_TYPE_ID     = $request->ROUTE_TYPE_ID;
        $sales->ROUTE_TYPE        = $route[0];
        $sales->DAY               = $request->DAY;
        $sales->VISIT_START_TIME  = $request->VISIT_START_TIME;
        $sales->VISIT_END_TIME    = $request->VISIT_END_TIME;
        $sales->CALL_STATUS_ID    = 's';
        $sales->FAMILY_ID         = $request->FAMILY_ID ;
        $sales->FAMILY_SEQ        = $family[0];
        $sales->PROD_FAMILY       = $product[0]->family;
        $sales->PROD_SEQ          = $product[0]->seq;
        $sales->PRODUCT           = $product[0]->name;
        $sales->PROD_ID           = $request->PROD_ID;
        $sales->SALES_CAR         = $request->SALES_CAR;
        $sales->STOCK             = $request->STOCK;
        $sales->update();

        return view('sales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sales = Sales::find($id);
        $sales->delete();
        return view('sales.index');
    }
}
