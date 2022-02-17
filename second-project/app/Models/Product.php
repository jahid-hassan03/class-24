<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function getAllProduct()
    {
        return [
          0 =>[
              'id'=>1,
              'name'=>'shirt',
              'price' => '2300',
              'description'=> 'description',
              'image'=> asset('/img/ss1.jpg'),
          ],
            1 =>[
                'id'=> 2,
                'name'=>'shirt',
                'price'=>'2500',
                'description'=> 'description',
                'image'=> asset('/img/ss2.jpg'),
            ],
            2 =>[
                'id' =>3,
                'name'=>'shirt',
                'price'=>'3000',
                'description'=> 'description',
                'image'=> asset('/img/ss3.jpg'),
            ],
            3 =>[
                'id'=>4,
                'name'=>'shirt',
                'price'=>'2440',
                'description'=> 'description',
                'image'=> asset('/img/ss5.jpg'),
            ],
        ];
    }
}
