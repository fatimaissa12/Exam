<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group_Product extends Model
{
    use HasFactory;
    public function prodects()
    {
        return $this->hasMany(Prodect::class);
    }
}
