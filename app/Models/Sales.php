<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;
    protected $fillable = [
        'JOU_ID',
        'SalesCall_id',
        'REGION',
        'BRANCH_CODE',
        'COMPANY_SEQ',
        'COMPANY_ID',
        'COMPANY_NAME',
        'CATEGORY_DESC',
        'CATEGORY_ID',
        'TER_ID',
        'POS_ID',
        'POS_CODE',
        'POS_NAME',
        'TEMP',
        'SALESREP_ID',
        'SALESREP_NAME',
        'SALES_TER_ID',
        'SALES_TER_NAME',
        'ROUTE_TYPE_ID',
        'ROUTE_TYPE',
        'DAY',
        'VISIT_START_TIME',
        'VISIT_END_TIME',
        'CALL_STATUS_ID',
        'FAMILY_ID',
        'FAMILY_SEQ',
        'PROD_FAMILY',
        'PROD_SEQ',
        'PRODUCT',
        'PROD_ID',
        'SALES_CAR',
        'STOCK'
    ];
}
