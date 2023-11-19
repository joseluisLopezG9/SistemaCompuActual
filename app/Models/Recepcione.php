<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


/**
 * Class Recepcione
 *
 * @property $id
 * @property $marca
 * @property $modelo
 * @property $numSerie
 * @property $caracteristicasFisicas
 * @property $caracteristicasInternas
 * @property $accesorios
 * @property $claveAcceso
 * @property $servicio
 * @property $name
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Recepcione extends Model
{
    
	use Notifiable;

    static $rules = [
		'marca' => 'required',
		'modelo' => 'required',
		'numSerie' => 'required',
		'caracteristicasFisicas' => 'required',
		'caracteristicasInternas' => 'required',
		'accesorios' => 'required',
		'claveAcceso' => 'required',
		'servicio' => 'required',
		'name' => 'required',
		'telefono' => 'required',
		'estado_notificacion',
		'fcm_token',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['marca','modelo','numSerie','caracteristicasFisicas','caracteristicasInternas','accesorios','claveAcceso','servicio','name','telefono'];


	public function routeNotificationForFcm()
	{
		return $this->fcm_token;
	}
 
	public function diagnostico()
	{
		return $this->hasOne(Diagnostico::class);
	}


}
