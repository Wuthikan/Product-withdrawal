<?php

namespace DurianSoftware;

use Zizaco\Entrust\EntrustPermission;

// use Illuminate\Database\Eloquent\Model;

class Permission extends EntrustPermission
{
    public $timestamps = false;
    protected $fillable = ['name','display_name','description'];
}
