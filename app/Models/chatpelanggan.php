<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatPelanggan extends Model
{
    use HasFactory;

    protected $table = 'chat_pelanggans';
    protected $primaryKey = 'id_chat';

    protected $fillable = [
        'id_pelanggan',
        'id_admin',
        'isi_chat',
        'waktu_kirim',
        'status_chat',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan', 'id_pelanggan');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin', 'id_admin');
    }
}

?>