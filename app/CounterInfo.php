<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class CounterInfo extends Model
{
    protected $primaryKey = 'counterId';
    protected $table = 'counter_info';
    public $timestamps = false;

    protected $hidden = [
        'display'
    ];

    public static function getCurrent()
    {
        return self::where('electionDate', '>=', Carbon::now())
            ->orderBy('electionDate')
            ->get();
    }

    public static function getAll()
    {
        return self::orderBy('electionDate', 'desc')
            ->get();
    }
}
