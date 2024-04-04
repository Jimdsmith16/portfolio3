<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Project extends Model
{
    use HasFactory;
    protected $primaryKey = "pid";
    public $timestamps = false;

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, "uid");
    }
}
