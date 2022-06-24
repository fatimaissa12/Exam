<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    public function prodects()
    {
        return $this->belongsToMany(Prodect::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
    public function suppliers()
    {
        return $this->belongsToMany(Supplier::class);
    }
}
