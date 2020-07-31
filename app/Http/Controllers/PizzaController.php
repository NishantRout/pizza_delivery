<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizza = [
            ['type' => 'Italian', 'base' => 'Thin crust', 'price' => 10],
            ['type' => 'Veg Supreme', 'base' => 'Cheese crust', 'price' => 20],
            ['type' => 'Margerita', 'base' => 'Garlic crust', 'price' => 30]
        ];
        
        $name = request('name');
    
        return view('pizzas', [
            'pizza' => $pizza,
            'name' => $name
        ]);
    }

    public function show($id){
        return view('details', ['id' => $id]);
    }
}
