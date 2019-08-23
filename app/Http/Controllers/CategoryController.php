<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\category\CategoryRequest;

class CategoryController extends Controller
{
    public function index(){
    	$categories = Category::all();
    	return view('admin/category/index', ['categories' => $categories]);
    }

    public function createForm()
    {
        return view('admin/category/add-category');
    }

    public function create(CategoryRequest $request)
    {
        $data = $request->except('_token');
        Category::insert($data);
        return $this->index();
    }

	public function editForm(Category $category)
	{
		$category = Category::find($category->id);
		return view('admin/category/edit-category' ,['category' => $category]);
	}

	public function update(CategoryRequest $req){
		$data = $req->except('_token', 'id');

		$category = Category::find($req->id);
        // $classRoom = ClassRoom::where('id', '=' ,$request->id)->first();
        // 3. Update bang phuong thuc update
		$category->update($data);
        // 4. Tra ve danh sach
		return $this->index();
	}

	public function delete($id){
		$category = Category::find($id);
		$category->delete();
		return redirect()->route('admin/categories');
	}


}
