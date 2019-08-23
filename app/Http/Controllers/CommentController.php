<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Requests\comment\CommentRequest;

class CommentController extends Controller
{

	public function index(){
		$comments = Comment::all();
		return view('admin/comment/index', ['comments' => $comments]);
	}

	public function create(CommentRequest $req){
		$data = $req->except('_token');
		Comment::insert($data);
		// return view('site/product/product-detail/');
	}

	public function editForm(Comment $comment)
	{
		$comment = Comment::find($comment->id);
		return view('admin/comment/edit-comment' ,['comment' => $comment]);
	}

	public function updateComment(CommentRequest $request) {
        // 1. Lay ra du lieu can update
		$data = $request->except('_token', 'id');

		dd($data); die;
        // 2. Tim ra classRoom co id truyen vao
		$comment = Comment::find($request->id);
        // $classRoom = ClassRoom::where('id', '=' ,$request->id)->first();
        // 3. Update bang phuong thuc update
		$comment->update($data);
        // 4. Tra ve danh sach
		return $this->index();
	}

	public function deleteComment($id){
		$comment = Comment::find($id);
		$comment->delete();
		return redirect()->route('admin/comments');
	}

	public function update(CommentRequest $req){
		$data = $req->except('_token', 'id');

		$comment = Comment::find($req->id);
        // $classRoom = ClassRoom::where('id', '=' ,$request->id)->first();
        // 3. Update bang phuong thuc update
		$comment->update($data);
        // 4. Tra ve danh sach
		return $this->index();
	}

}
