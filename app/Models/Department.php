<?php

namespace DurianSoftware\Models;

use Delatbabel\Elocrypt\Elocrypt;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use Elocrypt;

    protected $table = "dim_department";
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = ['client_id', 'name', 'description'];


    protected $encrypts = [
        'name',
    ];
}
