<?php
 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\product\ProductPost;
 

class ProductController extends Controller
{

    public function index(){
        $products = Product::all();
        $products = $products->load('connectComments')->where('connectComments.product_id', 6)->all();
        dd($products); die;
        return view('admin/product/index', ['products' => $products]);
    }

    public function getProducts(){
    	$products = Product::all()->where('active', 1);
    	return view('site/index', ['products' => $products]);
    }

    public function getProductDetail(Request $req){
    	$sell = Product::select("*")->where("active" , "1")->orderBy('sells', 'desc')->limit(3)->get();
        $product = Product::select("*")->where("active" , "1")->where("id", $req->id)->first();
        $releated_pro = Product::select("*")->where("active" , "1")->where("cate_id", $product->cate_id)->where('id' , "!=" , $product->id )->get();
        

    	return view('site/product/product-detail', ['sell' => $sell , 'releated_pro' => $releated_pro ,  'product' => $product]);
    }

    public function createForm()
    {
        $cate = Category::select("*")->from('categories')->join('products' , 'products.cate_id' , '=' , 'categories.id')->get();
        return view('admin/product/add-product' , ['cate' => $cate]);
    }

    public function create(ProductPost $request)
    {
        $data = $request->except('_token');
        Product::insert($data);
        return $this->index();
    }

    public function editForm(Product $product)
    {
        $cate = Category::select("*")->from('categories')->join('products' , 'products.cate_id' , '=' , 'categories.id')->get();
        $product = Product::find($product->id);
        return view('admin/product/edit-product' , ['cate' => $cate , 'product' => $product]);
    }

    public function update(ProductPost $request) {
        // 1. Lay ra du lieu can update
        $data = $request->except('_token', 'id');
        // 2. Tim ra classRoom co id truyen vao
        $product = Comment::find($request->id);
        // $classRoom = ClassRoom::where('id', '=' ,$request->id)->first();
        // 3. Update bang phuong thuc update
        $product->update($data);
        // 4. Tra ve danh sach
        return $this->index();
    }

    public function deletePost($id){
        $post= Product::find($id);
        $post->delete();
        return redirect()->route('admin/products');
    }

}
