<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemCategory extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'itemcategories';

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
    protected $fillable = ['item_category_name', 'created_by', 'updated_by'];

    
}
