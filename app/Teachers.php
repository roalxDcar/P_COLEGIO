<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    protected $table = 'teachers';

    protected $primaryKey = 'idteacher';
    protected $fillable = ['id_user','specialty','num_item','cv'];

    public function user(){
    	///('nombre modelo', 'llave primaria exterior', 'llave primaria modelo')
        return $this->belongsTo('App\User','idteacher','iduser');
    }
}
