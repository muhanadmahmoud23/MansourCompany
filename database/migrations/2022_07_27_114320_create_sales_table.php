<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->integer('JOU_ID');
            $table->unsignedBigInteger('SalesCall_id');
            $table->foreign('SalesCall_id')->references('id')->on('salesmen');

            //Foregin Region Table
            $table->string('REGION');
            $table->foreign('REGION')->references('name')->on('regions');
            //Foregin Branch Table
            $table->integer('BRANCH_CODE');
            $table->foreign('BRANCH_CODE')->references('code')->on('branches');
            //Foregin Comapny Table
            $table->integer('COMPANY_SEQ');
            $table->unsignedBigInteger('COMPANY_ID');
            $table->foreign('COMPANY_ID')->references('id')->on('companies');
            $table->string('COMPANY_NAME');
            //Foreign Category Table
            $table->string('CATEGORY_DESC');
            $table->unsignedBigInteger('CATEGORY_ID');
            $table->foreign('CATEGORY_ID')->references('id')->on('categories');
            //Foriegn TER table
            $table->unsignedBigInteger('TER_ID');
            $table->foreign('TER_ID')->references('id')->on('terminals');
            //Foriegn Position table
            $table->unsignedBigInteger('POS_ID');
            $table->foreign('POS_ID')->references('id')->on('positions');
            $table->integer('POS_CODE');
            $table->string('POS_NAME');

            $table->boolean('TEMP');

            //Foriegn SalesRep table
            $table->unsignedBigInteger('SALESREP_ID');
            $table->foreign('SALESREP_ID')->references('id')->on('sales_reps');
            $table->string('SALESREP_NAME');
            //Foriegn TER table
            $table->unsignedBigInteger('SALES_TER_ID');
            $table->foreign('SALES_TER_ID')->references('id')->on('sales__t_r_s');
            $table->string('SALES_TER_NAME');
            //Foriegn Route table
            $table->unsignedBigInteger('ROUTE_TYPE_ID');
            $table->foreign('ROUTE_TYPE_ID')->references('id')->on('routes');
            $table->string('ROUTE_TYPE');
        

            $table->date('DAY');
            $table->time('VISIT_START_TIME');
            $table->time('VISIT_END_TIME');
            $table->string('CALL_STATUS_ID');

            //Foriegn Family table
            $table->unsignedBigInteger('FAMILY_ID');
            $table->foreign('FAMILY_ID')->references('id')->on('families');
            $table->integer('FAMILY_SEQ');

            //Foriegn Family table
            $table->string('PROD_FAMILY');
            $table->integer('PROD_SEQ');
            $table->string('PRODUCT');
            $table->unsignedBigInteger('PROD_ID');
            $table->foreign('PROD_ID')->references('id')->on('products');

            $table->integer('SALES_CAR');
            $table->float('STOCK');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
};
