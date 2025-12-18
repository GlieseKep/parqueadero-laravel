<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculos';
    protected $fillable = [
        'placa',
        'tipo',
        'propietario',
        'observacion',
        'salio'
    ];
    static public function getVehiculos()
    {
        return self::all();
    }
    static public function getVehiculoByID($id)
    {
        return self::find($id);
    }
    static public function createVehiculo(Request $request)
    {
        return self::create($request->all());
    }
    static public function updateVehiculo(Request $request)
    {
        return self::update($request->all());
    }
}
