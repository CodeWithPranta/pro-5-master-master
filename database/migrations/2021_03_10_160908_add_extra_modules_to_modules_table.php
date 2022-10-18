<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExtraModulesToModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('modules')->insert([
            ['id'=> 15,'value' => 'hotels', 'description' => 'Hoteles'],
            ['id'=> 16,'value' => 'documentary-procedure', 'description' => 'Trámite documentario'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('modules')->whereIn('value', ['hotels', 'documentary-procedure'])->delete();
    }
}
