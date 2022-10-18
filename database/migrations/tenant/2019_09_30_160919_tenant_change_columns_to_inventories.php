<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TenantChangeColumnsToInventories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('inventories', function (Blueprint $table) {
            
            $table->string('inventory_transaction_id')->nullable()->after('warehouse_destination_id');
            $table->foreign('inventory_transaction_id')->references('id')->on('inventory_transactions');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('inventories', function (Blueprint $table) {

            $table->dropForeign(['inventory_transaction_id']);
            $table->dropColumn('inventory_transaction_id');  

        });
    }
}
