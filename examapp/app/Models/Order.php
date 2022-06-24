<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function prodects()
    {
        return $this->belongsToMany(Prodect::class);
    }
    public function purchases()
    {
        return $this->belongsToMany(Purchase::class);
    }
    public function suppliers()
    {
        return $this->belongsToMany(Supplier::class);
    }
}
