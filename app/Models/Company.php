<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function admin()
    {
      return $this->belongsTo(Admin::class);
    }
    public function casts()
    {
      return $this->hasMany(Cast::class);
    }
}
