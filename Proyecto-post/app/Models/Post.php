<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 *
 * @property $id
 * @property $fecha
 * @property $titulo
 * @property $comentario
 * @property $users_id
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Post extends Model
{

    static $rules = [
		'fecha' => 'required',
		'titulo' => 'required',
		'comentario' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha','titulo','comentario','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }


}
