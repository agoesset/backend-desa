<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aparatur;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardContoller extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //count categories
        $categories = Category::count();

        //count posts
        $posts = Post::count();

        //count aparaturs
        $aparaturs = Aparatur::count();

        //count product
        $products = Product::count();

        return response()->json([
            'success' => true,
            'message' => 'List Data on Dashboard',
            'data' => [
                'categories' => $categories,
                'posts' => $posts,
                'aparaturs' => $aparaturs,
                'products' => $products,
            ]
        ]);
    }
}
