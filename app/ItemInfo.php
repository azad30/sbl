<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemInfo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'iteminfos';

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
    protected $fillable = ['barcode', 'item_name', 'item_category_id', 'item_unit', 'item_type', 'item_qty', 'item_price', 'discount_percent', 'discount_tk', 'vat', 'created_by', 'update_by'];

    public function category(){
        return $this->belongsTo('App\ItemCategory','item_category_id');
    }


    public function unit(){
        return $this->belongsTo('App\ItemUnit','item_unit');
    }
    
}
