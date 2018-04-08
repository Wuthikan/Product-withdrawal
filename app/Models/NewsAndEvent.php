<?php

namespace DurianSoftware\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class NewsAndEvent extends Model
{
    use SoftDeletes;

    protected $table = "dim_news_events";
    public $primaryKey = 'id';
    public $timestamps = true;
    protected $softDelete = true;
    protected $dates = ['news_events_date', 'start_date', 'end_date'];
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'image',
        'news_events_date',
        'start_date',
        'end_date',
        'status'
    ];

    public function user()
    {
        return $this->hasOne('DurianSoftware\User', 'id', 'user_id');
    }

    public function setNewsEventsDateAttribute($value)
    {
        $this->attributes['news_events_date'] = date('Y-m-d H:i:s', strtotime($value));
    }

    public function setStartDateAttribute($value)
    {
        $this->attributes['start_date'] = date('Y-m-d H:i:s', strtotime($value));
    }

    public function setEndDateAttribute($value)
    {
        $this->attributes['end_date'] = date('Y-m-d H:i:s', strtotime($value));
    }
}
