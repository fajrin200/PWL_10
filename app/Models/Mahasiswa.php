<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Database\Eloquent\Model; //Model Eloquent
    use App\Models\Kelas;
    use App\Models\Matakuliah;

class Mahasiswa extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'mahasiswas';
    protected $fillable = ['nim','nama','kelas','jurusan'];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function matakuliah(){
        return $this->belongsToMany(Matakuliah::class)->withPivot('nilai');
    }
}
