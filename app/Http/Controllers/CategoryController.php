<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function categoryListWithProduct(): AnonymousResourceCollection
    {
        $categoryListWithProduct = Category::query()
            ->with('products')
            ->get();
        return CategoryResource::collection($categoryListWithProduct);
    }
}
