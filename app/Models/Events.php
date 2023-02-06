<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'category',
        'date',
        'created_by'
    ];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
