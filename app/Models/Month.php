<?php

namespace DurianSoftware\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Month extends Model
{
    use SoftDeletes;

    protected $table = "dim_months";
    public $primaryKey = 'id';
    public $timestamps = true;
    protected $softDelete = true;

    protected $fillable = ['month'];
}
