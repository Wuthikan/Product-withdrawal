<?php

namespace DurianSoftware\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes;
    
    protected $table = 'dim_countries';
    protected $fillable = [
        'id',
        'client_id',
        'name',
        'description',
        'code'
    ];

    protected $hidden = [
        'timestamp', 'soft_delete',
    ];

    /**
     * Searching the countries
     * @param  [type] $query  [description]
     * @param  [type] $fields [description]
     * @param  [type] $value  [description]
     * @return [type]         [description]
     */
    public function scopeLike($query, $fields, $value)
    {
        if (is_array($fields)) {
            $query->where($fields[0], 'LIKE', "%$value%");
            
            foreach (array_splice($fields, 1) as $field) {
                $query->orWhere($field, 'LIKE', "%$value%");
            }

            return $query;
        }

        return $query->where($fields, 'LIKE', "%$value%");
    }


    /**
     * FILTER WITH CLIENT_ID
     * @param  [type] $query [description]
     * @param  [type] $id    [description]
     * @return [type]        [description]
     */
    public function scopeCompany($query, $id)
    {
        return $query->where('client_id', $id);
    }

    public function getDeleteStatus()
    {
        return $this->trashed() ? 'disabled' : null;
    }
}
