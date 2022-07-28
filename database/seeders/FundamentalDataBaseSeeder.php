<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\Company;
use App\Models\Category;
use App\Models\Family;
use App\Models\TER;
use App\Models\Sales_TR;
use App\Models\Position;
use App\Models\Product;
use App\Models\Region;
use App\Models\Route;
use App\Models\Sales;
use App\Models\Sales_rep;
use App\Models\Salesman;
use App\Models\Terminal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FundamentalDataBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Region::create([  'name' => 'Cairo', ]);
        Region::create([  'name' => 'Alex', ]);

        Branch::create([  'code' => '1', ]);
        Branch::create([  'code' => '3', ]);

        Company::create([  'name' => 'Company Test 1', 'seq' => '4']);
        Company::create([  'name' => 'Company Test 2', 'seq' => '2']);

        Category::create([  'desc' => 'This is Category Number 1']);
        Category::create([  'desc' => 'This is Category Number 2']);

        TER::create([  'name' => 'TER Name Test 1']);
        TER::create([  'name' => 'TER Name Test 2']);

        Position::create([  'code' => '2584' , 'name' => 'Positon Test 1']);
        Position::create([  'code' => '2369' , 'name' => 'Positon Test 2']);

        Terminal::create([  'name' => 'Terminal No 1']);
        Terminal::create([  'name' => 'Terminal No 2']);
        
        Sales_TR::create([  'name' => 'Sales TR Name Test 1', 'Terminal_id'  => 1]);
        Sales_TR::create([  'name' => 'Sales TR Name Test 2', 'Terminal_id'  => 2]);

        Sales_rep::create([  'name' => 'Sales Rep test 1' ]);
        Sales_rep::create([  'name' => 'Sales Rep test 2' ]);
        
        Route::create([  'type' => 'Route Type 1']);
        Route::create([  'type' => 'Route Type 2']);

        Family::create([  'seq' => '3']);
        Family::create([  'seq' => '2']);

        Product::create([  'name' => 'DVDPLW' ,'family' => 'Davidoff' , 'seq' => '12']);
        Product::create([  'name' => 'DVDSLG' ,'family' => 'Time' , 'seq' => '3']);

        Salesman::create([  'name' => 'Mohamed' ,'title' => 'Senior Salesman' ]);
        Salesman::create([  'name' => 'Hassan' ,'title' => 'Junior Salesman']);

        Sales::create([  
            'JOU_ID'        => '12311',
            'SalesCall_id'  => '1',
            'REGION'        => 'Cairo',
            'BRANCH_CODE'   => '1',
            'COMPANY_SEQ'   => '4',
            'COMPANY_ID'    => '1',
            'COMPANY_NAME'  => 'Company Test 1',
            'CATEGORY_DESC' => 'This is Category Number 1',
            'CATEGORY_ID'   => '1',
            'TER_ID'        => '1',
            'POS_ID'        => '1',
            'POS_CODE'      => '2584',
            'POS_NAME'      => 'Positon Test 1',
            'TEMP'          => '0',
            'SALESREP_ID'   => '1',
            'SALESREP_NAME' => 'Sales Rep test 1',
            'SALES_TER_ID'  => '1',
            'SALES_TER_NAME'=> 'Sales TR Name Test 1' ,
            'ROUTE_TYPE_ID' => '1',
            'ROUTE_TYPE'    => 'Route Type 1',
            'DAY'           => '2022-07-27',
            'VISIT_START_TIME'=> '17:49:26',
            'VISIT_END_TIME'=> '18:29:26',
            'CALL_STATUS_ID'=> 's',
            'FAMILY_ID'    => '1',
            'FAMILY_SEQ'   => '2',
            'PROD_FAMILY'  => 'Time',
            'PROD_SEQ'     => '3',
            'PRODUCT'      => 'DVDSLG',
            'PROD_ID'      => '2',
            'SALES_CAR'    => '0',
            'STOCK'        => '0.2'
        ]);


        Sales::create([  
            'JOU_ID'        => '14528',
            'SalesCall_id'  => '1',
            'REGION'        => 'Alex',
            'BRANCH_CODE'   => '3',
            'COMPANY_SEQ'   => '2',
            'COMPANY_ID'    => '2',
            'COMPANY_NAME'  => 'Company Test 2',
            'CATEGORY_DESC' => 'This is Category Number 2',
            'CATEGORY_ID'   => '2',
            'TER_ID'        => '2',
            'POS_ID'        => '2',
            'POS_CODE'      => '2369',
            'POS_NAME'      => 'Positon Test 2',
            'TEMP'          => '0',
            'SALESREP_ID'   => '2',
            'SALESREP_NAME' => 'Sales Rep test 2',
            'SALES_TER_ID'  => '2',
            'SALES_TER_NAME'=> 'Sales TR Name Test 2' ,
            'ROUTE_TYPE_ID' => '2',
            'ROUTE_TYPE'    => 'Route Type 2',
            'DAY'           => '2022-07-27',
            'VISIT_START_TIME'=> '17:59:26',
            'VISIT_END_TIME'=> '18:49:26',
            'CALL_STATUS_ID'=> 's',
            'FAMILY_ID'    => '2',
            'FAMILY_SEQ'   => '3',
            'PROD_FAMILY'  => 'Davidoff',
            'PROD_SEQ'     => '12',
            'PRODUCT'      => 'DVDPLW',
            'PROD_ID'      => '1',
            'SALES_CAR'    => '0',
            'STOCK'        => '0.02'
        ]);

        Sales::create([  
            'JOU_ID'        => '124575',
            'SalesCall_id'  => '2',
            'REGION'        => 'Cairo',
            'BRANCH_CODE'   => '1',
            'COMPANY_SEQ'   => '4',
            'COMPANY_ID'    => '1',
            'COMPANY_NAME'  => 'Company Test 1',
            'CATEGORY_DESC' => 'This is Category Number 1',
            'CATEGORY_ID'   => '1',
            'TER_ID'        => '1',
            'POS_ID'        => '1',
            'POS_CODE'      => '2584',
            'POS_NAME'      => 'Positon Test 1',
            'TEMP'          => '0',
            'SALESREP_ID'   => '1',
            'SALESREP_NAME' => 'Sales Rep test 1',
            'SALES_TER_ID'  => '1',
            'SALES_TER_NAME'=> 'Sales TR Name Test 1' ,
            'ROUTE_TYPE_ID' => '1',
            'ROUTE_TYPE'    => 'Route Type 1',
            'DAY'           => '2022-07-27',
            'VISIT_START_TIME'=> '17:49:26',
            'VISIT_END_TIME'=> '18:29:26',
            'CALL_STATUS_ID'=> 's',
            'FAMILY_ID'    => '1',
            'FAMILY_SEQ'   => '3',
            'PROD_FAMILY'  => 'Davidoff',
            'PROD_SEQ'     => '12',
            'PRODUCT'      => 'DVDPLW',
            'PROD_ID'      => '1',
            'SALES_CAR'    => '0',
            'STOCK'        => '0.02'
        ]);

    }
}
