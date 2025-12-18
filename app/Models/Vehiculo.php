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
        'observacion'
    ];
    static public function getVehiculos()
    {
        return self::all();
    }
    static public function getVehiculosById($id)
    {
        return self::find($id);
    }
    public static function createVehiculo(array $data)
    {
        return self::create($data);
    }
    public function updateVehiculo(array $data)
    {
        return $this->update($data);
    }
    static public function deleteVehiculo(Vehiculo $vehiculo)
    {
        $vehiculo->delete();
    }
}
