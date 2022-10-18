<?php

    use App\Models\System\Module;
    use App\Models\System\ModuleLevel;
    use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExtraDataItemMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('modules', function (Blueprint $table) {

            DB::table('module_levels')->insert([
                ['id' => 75, 'value' =>
                    'inventory_item_extra_data',
                    'description' => 'Datos extra de items',
                    'module_id' => 8],
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $q = ModuleLevel::where('value', 'inventory_item_extra_data')->first();
        if($q != null) {
            $q->delete();
        }
    }
}
