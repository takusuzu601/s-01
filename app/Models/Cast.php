<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    use HasFactory;

     public function company()
    {
      return $this->belongsTo(Company::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
