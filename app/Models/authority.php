<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class authority extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "description"
    ];
    public function authority()
    {
        return $this->hasOne(Authority::class);
    }
}
