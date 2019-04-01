<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model {

    protected $fillable = [
        'nama_level'
    ];

    public static $rules = [
        'nama_level' => 'required'
    ];

    // Relationships

}
