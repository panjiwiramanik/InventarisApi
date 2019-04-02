<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model {

    protected $table = 'petugas';

    public $timestamps = false;

    protected $fillable = [
        'username', 'password', 'nama_petugas', 'id_level'
    ];

    public static $rules = [
        'username' => 'required', 
        'password' => 'required', 
        'nama_petugas' => 'required', 
        'id_level' => 'required'
    ];

    // Relationships

}
