<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model {

    protected $fillable = [
        'nama_pegawai', 'nip', 'alamat', 'kode_unik'
    ];

    public static $rules = [
        'nama_pegawai' => 'required',
        'nip' => 'required',
        'alamat' => 'required',
        'kode_unik' => 'required'
    ];

    // Relationships

}
