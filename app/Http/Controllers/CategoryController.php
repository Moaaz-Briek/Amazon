<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        return Inertia::render('Category', [
           'category_name' => Category::findOrFail($id),
           'category_products' => Product::where('category', $id)->get(),
        ]);
    }
}
