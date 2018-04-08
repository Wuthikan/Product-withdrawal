<?php

namespace DurianSoftware\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Delatbabel\Elocrypt\Elocrypt;

class Warehouse extends Model
{
    use SoftDeletes;
    use Elocrypt;
    protected $table = "dim_warehouses";
    public $primaryKey = 'id';
    public $timestamps = true;
    protected $softDelete = true;

    protected $fillable =
    [
        'client_id',
        'name',
        'description',
        'image',
        'warehourse_type'
    ];
    protected $encrypts = [
        // 'name',
        // 'description',
    ];
}
