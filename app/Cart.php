<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //   
     protected $table = 'buy';
     protected $fillable =['product_id'];

    public function protuct()
    {
        return $this->belongsTo('App\Products','product_id','id');
    }

     public function productquantity()
    {
        return $this->belongsTo('App\ProductQuantity','type_id','id');
    }
    public function productservice()
    {
        return $this->belongsTo('App\ProductService','type_id','id');
    }

}
