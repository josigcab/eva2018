<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class curso_inscrito extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'curso_inscritos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha',  'curso_id', 'user_id'];

       public function cursos()
    {
        return $this->belongsTo('App\User');
    }
     public function users()
    {
        return $this->belongsTo('App\curso');
    }
}
