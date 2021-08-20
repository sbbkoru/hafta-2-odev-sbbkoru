<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'Categories';
    protected $fillable = ['title', 'description', 'slug', 'status'];
// protected $guarded = [];

    public function getProducts(){
        return $this->hasMany('App\Models\Products', 'categories_id', 'id');
    }

    public static function statusIndicator($status){
        $data_ = [
            'a' => [
                'name' => 'Active',
                'class' => 'bg-success'
            ],
            'p' => [
                'name' => 'Passive',
                'class' => 'bg-secondary'
            ],
            't' => [
                'name' => 'Trash',
                'class' => 'bg-danger'
            ]
            ];
            return '<span style="min-width:70px" class="badge ' . $data_[$status]['class'] .  '">' . $data_[$status]['name'] . ' </span>';
    }
}
