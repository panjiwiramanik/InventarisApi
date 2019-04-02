<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model {

    protected $table = 'inventaris';

    public $timestamps = false;

    protected $fillable = [
        'nama', 'kondisi', 'keterangan', 'jumlah', 'id_jenis', 'tanggal_register', 'id_ruang', 'id_petugas', 'barcode', 'image'
    ];

    public static $rules = [
        'nama' => 'required', 
        'kondisi' => 'required', 
        'keterangan' => 'required', 
        'jumlah' => 'required', 
        'id_jenis' => 'required', 
        'tanggal_register' => 'required', 
        'id_ruang' => 'required', 
        'id_petugas' => 'required'
    ];

    // Relationships

}
