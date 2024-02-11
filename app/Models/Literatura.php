<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Literatura extends Model
{
    use HasFactory;

    protected $table = 'literaturas';
    public $timestamps = true;

    public function congregacao()
    {
        return $this->belongsTo(Congregacao::class, 'id_congregacao');
    }
}
