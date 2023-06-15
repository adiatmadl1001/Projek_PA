<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    use HasFactory;

    public $table = 'tr_tagihan';

    public $appends = ['bulan'];

    public function getTotalKWH()
    {
        return $this->kwh_before - $this->kwh_after;
    }

    public function  getBulan()
    {
        return $this->created_at->format('F');
    }
}
