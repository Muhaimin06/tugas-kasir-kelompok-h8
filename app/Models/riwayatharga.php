<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatHarga extends Model
{
    use HasFactory;

    protected $table = 'riwayat_hargas';
    protected $primaryKey = 'id_riwayat';

    protected $fillable = [
        'id_menu',
        'harga_lama',
        'harga_baru',
        'tanggal_perubahan',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu', 'id_menu');
    }
}

?>