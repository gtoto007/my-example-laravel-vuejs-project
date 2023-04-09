<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Status
{
    public const Pendente = 'pendente';
    public const Accettato = 'accettato';
    public const Scartato = 'scartato';
}


class Application extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function getCreatedAtAttribute($date)
    {
        $carbon = new Carbon($date);
        return $carbon->format('Y-m-d');
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
