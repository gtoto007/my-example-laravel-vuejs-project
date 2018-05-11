<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $guarded = [];

    /**
     * Accetta una candidatura
     */
    public function accept()
    {
        $this->accepted = 1;
        $this->save();
    }

    /**
     * Rifiuta una candidatura
     */
    public function refuse()
    {
        $this->accepted = 0;
        $this->save();
    }
}
