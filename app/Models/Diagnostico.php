<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Diagnostico
 *
 * @property $id
 * @property $fechaDiagnostico
 * @property $observaciones
 * @property $marca
 * @property $modelo
 * @property $numSerie
 * @property $motherboard
 * @property $ram
 * @property $unidadAlmacenamiento
 * @property $cpu
 * @property $gpu
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Diagnostico extends Model
{
    
    static $rules = [
		'fechaDiagnostico' => 'required',
		'observaciones' => 'required',
		'marca' => 'required',
		'modelo' => 'required',
		'numSerie' => 'required',
		'motherboard' => 'required',
		'ram' => 'required',
		'unidadAlmacenamiento' => 'required',
		'cpu' => 'required',
		'gpu' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fechaDiagnostico','observaciones','marca','modelo','numSerie','motherboard','ram','unidadAlmacenamiento','cpu','gpu'];

	public function recepcion()
	{
		return $this->belongsTo(Recepcione::class);
	}



}
