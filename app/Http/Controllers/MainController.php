<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;
use App\Models\Article;

class MainController extends BaseController
{
    public function articles()
    {
        $articles = Article::with('images')->paginate(16);

        $articles->each(function ($article) {
            $article->content = Str::limit($article->content, 80);

            $imagePathsString = $article->images->map(function ($image) {
                return asset('article_photos/' . $image->image_path . $image->image_name . '.' . $image->extension);
            })->implode(', ');

            $article->imagePathsString = $imagePathsString;
        });

        return view('frontend/main_page_info', compact('articles'));
    }

    public function article($id)
    {
        $article = Article::find($id);

        $imagePathsString = $article->images->map(function ($image) {
            return asset('article_photos/'.$image->image_path.$image->image_name.'.'.$image->extension);
        })->implode(', ');

        $article->imagePathsString = $imagePathsString;

        return view('frontend/detail_article_page', compact('article'));
    }

    public function catalog()
    {
        $products = Product::with('category:id,name')->paginate(8);

        $products->each(function ($product) {
            $product->description = Str::limit($product->description, 80);

            $firstImage = $product->images->first();
            if ($firstImage) {
                $imagePath = asset('product_photos/' . $firstImage->image_path . $firstImage->image_name . '.' . $firstImage->extension);
                $product->image_path = $imagePath;
            }
        });

        return view('frontend/products', compact('products'));
    }

    public function contacts()
    {
        return view('frontend/contacts');
    }

    public function about()
    {
        return view('frontend/about');
    }
}
