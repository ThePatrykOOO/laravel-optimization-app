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
        $categoryListWithProduct = Cache::remember('categoryListWithProduct', now()->addHour(), function () {
            return Category::query()
                ->with('products')
                ->get();
        });
        return CategoryResource::collection($categoryListWithProduct);
    }
}
