<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secvice extends Model
{
    use HasFactory;
    public function getUrl() {
        return route('secvice.detail', [$this->slug,$this->id]);
    }
}
