<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiBobotKriteria extends Model
{
    use HasFactory;
    protected $table = "nilai_bobot_kriterias";
    protected $fillable =['kode','nilai_banding', 'kriteria1', 'kriteria2'];

    public function prefensi(){
        return $this->hasOne(NilaiPrefensi::class, 'id', 'nilai_banding');
    }
}