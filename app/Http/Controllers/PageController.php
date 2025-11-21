<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;
use App\Models\Comment;

class PageController extends Controller
{
    /**
     * Trang chủ
     */
    public function index()
    {
        $slides = Slide::all();

        $newProducts = Product::where('new', 1)
            ->paginate(4, ['*'], 'new-page');

        $topProducts = Product::where('promotion_price', '<>', 0)
            ->paginate(4, ['*'], 'top-page');

        return view('page.homepage', compact('slides', 'newProducts', 'topProducts'));
    }

    /**
     * Chi tiết sản phẩm
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        // Sản phẩm liên quan (cùng loại)
        $relatedProducts = Product::where('id_type', $product->id_type)
            ->where('id', '<>', $product->id)
            ->paginate(3);

        // Comment của sản phẩm
        $comments = Comment::where('id_product', $id)->get();

        return view('page.product_detail', compact('product', 'relatedProducts', 'comments'));
    }

    /**
     * Loại sản phẩm (Category)
     */
    public function showCategory($id)
    {
        // Lúc sau nếu bà muốn query theo category thì tui chỉnh tiếp
        return view('page.product'); 
    }

    /**
     * Thêm giỏ hàng
     */
    public function addToCart($id)
    {
        return "Đã thêm sản phẩm $id vào giỏ (demo).";
    }

    /**
     * Liên hệ
     */
    public function contact()
    {
        return view('page.contact');
    }

    /**
     * Giới thiệu
     */
    public function about()
    {
        return view('page.about');
    }
}
