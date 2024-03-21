<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;
    protected $table = 'pertanyaan';
    protected $fillable = [
        'tulisan', 
        'gambar',
        'kategori_id',
        'user_id'];


        public function jawaban()
        {
            return $this->hasMany(Jawaban::class);
        }   
}
