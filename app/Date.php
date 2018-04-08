<?php

namespace DurianSoftware;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;
use Session;

class Date extends Model
{
    use SoftDeletes;

    protected $table = "dim_dates";
    public $primaryKey = 'id';

    public $timestamps = true;

    protected $appends = ['full_date'];

    protected $dates = ['deleted_at'];

    protected $softDelete = true;

    protected $fillable = [
        'client_id',
        'date',
        'day',
        'day_of_week',
        'month',
        'month_name',
        'quarter',
        'quarter_name',
        'year',
    ];

    public function getFullDateAttribute()
    {
        return substr('0'.$this->date, -2).'/'.substr('0'.$this->month, -2)."/{$this->year}";
    }

    public static function insertStrDate($strDate)
    {
        if (empty($strDate) || !isset($strDate)) {
            return false;
        }

        $date = Carbon::createFromFormat('d/m/Y', $strDate);
        $client_id = Session::has('client_id') ? Session::get('client_id') : 1 ;

        $result = Date::create([
            'client_id'     => $client_id,
            'date'          => $date->format('j'),
            'day'           => $date->format('D'),
            'day_of_week'   => $date->format('w')+1,
            'month'         => $date->format('n'),
            'month_name'    => $date->format('F'),
            'quarter'       => ceil($date->format('n')/3),
            'quarter_name'  => ceil($date->format('n')/3),
            'year'          => $date->format('Y'),
        ]);

        return $result;
    }
}
