<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        return view('index');
    }

    public function store(Request $request){
        $input = $request->all();
        $data = [];
        $data['name'] = json_encode($input['name']);

        Category::create($data);
        return response()->json(['success' => 'Datos insertados']);
    }
}
