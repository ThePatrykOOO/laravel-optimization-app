<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryListWithProduct()
    {
        $categoryListWithProduct = Category::query()
            ->with('products')
            ->get();

        return CategoryResource::collection($categoryListWithProduct);
    }
}
