<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DraftShard extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'draft_id'
    ];

    public function draft(){
        return $this->belongsTo(Draft::class);
    }
}
