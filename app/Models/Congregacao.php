<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Congregacao extends Model
{

    protected $table = 'congregacaos';
    public $timestamps = true;

    public static function selectList()
    {
        $congregacaos = self::orderBy('nome')
            ->get();

        $arr = [];
        foreach ($congregacaos as $gen) {
            $arr[$gen->id] = $gen->nome;
        }
        return $arr;
    }
}

