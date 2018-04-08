<?php

namespace DurianSoftware\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerTier extends Model
{
    use SoftDeletes;

    protected $table = 'dim_customer_tiers';
    public $primaryKey = 'id';
    public $timestamps = true;
    protected $softDelete = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'image',
        'client_id',
        'description',
        'status',
    ];

    public $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function companygroup()
    {
        return $this->hasOne(\DurianSoftware\Models\CompanyGroup::class, 'company_group_id', 'id');
    }
}
