<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Products extends Model
{
    use HasFactory;
    protected $casts = [
        'info_json' => 'array'
    ];
    protected $table = 'Products';
    protected $guarded = [];

    public function category(){
        return $this->hasOne(Categories::class, 'id', 'categories_id');
    }

    public static function currency($id, $type = 'slug'){
        $curr = [
            1 => [
                'name' => 'Türk Lirası',
                'slug' => '₺'
            ],
            2 => [
                'name' => 'Dolar',
                'slug' => '$'
            ],
            3 => [
                'name' => 'Euro',
                'slug' => '€'
            ]
            ];

            if(is_null($id)){
                return $curr;
            };
            return $curr[$id][$type];
    }

    public function showPrice(){
        return $this->prc . ' ' . Products::currency($this->cid);
    }
}
