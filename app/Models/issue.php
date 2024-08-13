<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class issue extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "catagory_id",
        "authority_id",
        "title",
        "status",
        "location",
        "latitude",
        "longitude",
    ];

    public function authority()
    {
        return $this->belongsTo(Authority::class);
    }
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    public function catagory()
    {
        return $this->belongsTo(category::class);
    }
}
