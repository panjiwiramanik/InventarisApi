<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model {

    protected $table = 'peminjaman';

    public $timestamps = false;

    protected $fillable = [
        'tanggal_pinjam', 'tanggal_kembali', 'status_peminjaman', 'id_pegawai'
    ];

    public static $rules = [
        'tanggal_pinjam' => 'required', 
        'tanggal_kembali' => 'required', 
        'status_peminjaman' => 'required',
        'id_pegawai' => 'required'
    ];

    // Relationships

}
