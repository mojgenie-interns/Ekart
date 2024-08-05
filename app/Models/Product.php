<?php

namespace App\Models;

use Attribute;
use Dotenv\Parser\Value;
use Illuminate\Database\Eloquent\Casts\Attribute as CastsAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function category()
    {
    }

    protected function status(): CastsAttribute
    {
        return CastsAttribute::make(
            get: fn (string $value) => ($value == 1) ? "Active" : "Inactive",
        );
    }
    protected function isFavourite(): CastsAttribute
    {
        return CastsAttribute::make(
            get: fn (string $value) => ($value == 1) ? "Yes" : "No",
        );
    }
}
