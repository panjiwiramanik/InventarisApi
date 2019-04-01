<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model {

    protected $fillable = [
        'nama_jenis', 'kode_jenis', 'keterangan'
    ];

    public static $rules = [
        'nama_jenis' => 'required',
        'kode_jenis' => 'required'
    ];

    // Relationships

}
