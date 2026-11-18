<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admins';
    protected $primaryKey = 'id_admin';

    protected $fillable = [
        'nama_admin',
        'email',
        'role',
    ];

    public function menus()
    {
        return $this->hasMany(Menu::class, 'id_admin', 'id_admin');
    }

    public function chatPelanggans()
    {
        return $this->hasMany(ChatPelanggan::class, 'id_admin', 'id_admin');
    }
}

?>