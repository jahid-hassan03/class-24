<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    private $city;
    private $mobile;
    private $data = [];
    private $products;



    public function index()
    {
        return view('test');
    }

    public function bitm()
    {
        $this->city   ='Dhaka';
        $this->mobile ='01946409311';
        $this->data   =[
          0 => [
              'name' => 'jahid',
              'city' => 'Dhaka',
              'mobile' => '12345',
          ] ,
          1 => [
              'name' => 'salahuddin vai',
              'city' => 'farmgate',
              'mobile' => '12345666',
          ],
          2 =>[
              'name' => 'fahim',
              'city' => 'gazipur',
              'mobile' => '12345444',

          ],

        ];


        return view('bitm', [
            'a'=>$this->city,
            'j'=>$this->mobile,
            'b'=>$this->data,

        ]);
    }
    public function about()
    {
        $this->products = product::getAllProduct();
        return view('about', ['products'=> $this->products]);
    }
    public function contact()
    {
        return view('contact');
    }

    public function detail($k)
    {
        $this->products =Product::getAllProduct();
        foreach ($this->products as $item)
        {
            if ($item['id']== $k)
            {
                return view('detail', ['data'=> $item]);
            }
        }
        return view('detail');
    }


}
