<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesMaster extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'salesmasters';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cu_id', 'branch_id', 'pay_method', 'grand_total', 'discount', 'net_pay', 'due'];

    
}
