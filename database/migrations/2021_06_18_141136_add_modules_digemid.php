<?php

    use App\Models\System\Module;
    use App\Models\System\ModuleLevel;
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    /**
     * Class AddModulesDigemid
     */
    class AddModulesDigemid extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::table('modules', function (Blueprint $table) {
                //
                DB::table('modules')->insert([
                    ['id'=> 19,'value' => 'digemid', 'description' => 'Farmacia']
                ]);
                
                DB::table('module_levels')->insert([
                    ['id'=> 73,'value' => 'digemid', 'description' => 'Productos','module_id'=>19]
                ]);
               
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            $e = Module::where([
                                   'description' => 'Farmacia',
                                   'value'       => 'digemid',
                               ])
                       ->first();
            if (!empty($e)) {
                $id = $e->id;
                $e->delete();
                $q = ModuleLevel::where('module_id', $id)->get();
                foreach ($q as $i) {
                    $i->delete();
                }

            }
        }
    }
