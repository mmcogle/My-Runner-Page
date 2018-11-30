<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;  

class Product extends Model
{
    private $name;
    //
}
$products = Product::all();
foreach($products as $product) {
	var_dump($product->name);

}

