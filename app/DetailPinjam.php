<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPinjam extends Model {

	protected $table = 'detail_pinjam';

	public $timestamps = false;

    protected $fillable = [ 
        'id_peminjaman', 'id_inventaris', 'jumlah'
    ];

    public static $rules = [
        'id_peminjaman' => 'required', 
        'id_inventaris' => 'required', 
        'jumlah' => 'required'
    ];

    // Relationships

}
