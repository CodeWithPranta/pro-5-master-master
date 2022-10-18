<?php

namespace App\CoreFacturalo\Helpers\Functions;

use App\Models\Tenant\Catalogs\District;
use Illuminate\Database\Query\Builder;
use Modules\LevelAccess\Models\SystemActivityLogType;
use DB;

class SetDataHelper
{
     
    /**
     * 
     * Obtener data para insertar modulo en tenant
     *
     * @param  string $value
     * @param  string $description
     * @param  int $order_menu
     * @return array
     */
    public static function getModuleData($value, $description, $order_menu,$id)
    {
        return [
            'value' => $value,
            'description' => $description,
            'order_menu' => $order_menu,
            'id' => $id
        ];
    }


    /**
     * Obtener data para insertar modulo en system
     *
     * @param  string $value
     * @param  string $description
     * @param  int $sort
     * @return array
     */
    public static function getModuleDataSystem($value, $description, $sort, $id)
    {
        return [
            'value' => $value,
            'description' => $description,
            'sort' => $sort,
            'id' =>$id
        ];
    }

    
    /**
     * 
     * Obtener conexion con la tabla modules
     *
     * @return Builder
     */
    public static function getModuleConnection($connection)
    {
        return DB::connection($connection)->table('modules');
    }


    /**
     * 
     * Validar y registrar distrito
     *
     * @param  string $district_id
     * @param  string $description
     * @return void
     */
    public static function createDistrict($district_id, $description)
    {

        $district = District::find($district_id);

        if(!$district)
        {
            $province_id = substr($district_id, 0 ,4);

            District::insert([
                'id' => $district_id,
                'province_id' => $province_id,
                'description' => $description,
                'active' => true,
            ]);
        }

    }
    

    /**
     * 
     * Eliminar distrito
     *
     * @param  string $district_id
     * @return void
     */
    public static function deleteDistrict($district_id)
    {
        District::where('id', $district_id)->delete();
    }

        
    /**
     * 
     * Registrar tipo de actividad para el log
     *
     * @param  string $id
     * @param  string $description
     * @return void
     */
    public static function createSystemActivityLogType($id, $description)
    {
        $record = SystemActivityLogType::find($id);

        if(!$record)
        {
            SystemActivityLogType::insert([
                'id' => $id,
                'description' => $description,
            ]);
        }
    }
    

    /**
     * 
     * Eliminar registro
     *
     * @param  string $model
     * @param  string $id
     * @return void
     */
    public static function deleteGeneralRecord($model, $id)
    {
        $model::where('id', $id)->delete();
    }

}
