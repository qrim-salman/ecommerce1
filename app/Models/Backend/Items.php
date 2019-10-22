<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class Items extends Model  
{

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'items';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['category_id', 'name', 'description', 'width', 'height', 'length', 'weight', 'price', 'status', 'stock_id', 'updated_by', 'created_at', 'updated_at'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = ['status' => 'boolean'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

    public function itemCategory()
    {
        return $this->belongsTo('App\Models\Backend\itemCategories', 'category_id');
    }

    public function stock()
    {
        return $this->hasMany('App\Models\Backend\Stocks');
    }

}
