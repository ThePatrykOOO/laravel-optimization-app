<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Cache;

class CategoryController extends Controller
{
    public function categoryListWithProduct(): AnonymousResourceCollection
    {
        return Cache::remember('CategoryController.categoryListWithProduct', now()->addHour(), function () {
            $categoryListWithProduct = Category::query()
                ->with('products')
                ->get();

            return CategoryResource::collection($categoryListWithProduct);
        });
    }
}
