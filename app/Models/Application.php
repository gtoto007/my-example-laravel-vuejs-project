<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;


class Status
{
    public const Pendente = 'pendente';
    public const Accettato = 'accettato';
    public const Scartato = 'scartato';
}


class Application extends Model
{
    use HasFactory;

    use Notifiable;

    protected $guarded = [];


    public function getCreatedAtAttribute($date)
    {
        $carbon = new Carbon($date);
        return $carbon->format('Y-m-d');
    }

    public function accept()
    {
        if ($this->status != Status::Pendente) {
            throw new \Exception("Questa candidatura è stata già revisionata");
        }
        $this->status = Status::Accettato;
        $this->save();

    }

    public function discard()
    {
        if ($this->status != Status::Pendente) {
            throw new \Exception("Questa candidatura è stata già revisionata");
        }
        $this->status = Status::Scartato;
        $this->save();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
