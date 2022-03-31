<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Categories;
use App\Models\Brands;

class Products extends Model
{
    use HasFactory;

    protected $fillable = ['brand_id', 'category_id'];

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }

    public function brands()
    {
        return $this->belongsTo(Brands::class);
    }
}
