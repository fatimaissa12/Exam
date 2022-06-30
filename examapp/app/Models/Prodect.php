<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodect extends Model
{
    use HasFactory;

    protected $fillable =['name','price','code','image'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function group_product()
    {
        return $this->belongsTo(Group_Product::class);
    }
    public function suppliers()
    {
        return $this->belongsToMany(Supplier::class);
    }
    public function purchases()
    {
        return $this->belongsToMany(Purchase::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
    
    
}
