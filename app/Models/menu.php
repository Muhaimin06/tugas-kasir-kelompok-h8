<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';
    protected $primaryKey = 'id_menu';

    protected $fillable = [
        'id_kategori',
        'id_admin',
        'nama_menu',
        'deskripsi_menu',
        'status_ketersediaan',
        'harga',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin', 'id_admin');
    }

    public function detailPesanans()
    {
        return $this->hasMany(DetailPesanan::class, 'id_menu', 'id_menu');
    }

    public function riwayatHargas()
    {
        return $this->hasMany(RiwayatHarga::class, 'id_menu', 'id_menu');
    }
}

?>