<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
// use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;

use Illuminate\Http\Request;

class createTable extends Controller
{
   public function ProductsTable(){
    schema::create('product', function($table){
        $table->id();
            $table->string('name',60);
            $table->string('image');
            $table->integer('quantity');
            $table->dateTime('date');
    });
    echo 'tao ban thanh cong';

}};
