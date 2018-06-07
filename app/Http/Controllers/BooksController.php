<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Books;
use App\Category;
use App\Userbook;
use DB;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $book=DB::table('book')
             ->join('category', 'book.category', '=', 'category.id_cat')
             ->join('userbook', 'book.id_user', '=', 'userbook.id_user')
             ->select('book.id_book','book.author','book.id_book','book.published_date',
                      'book.name AS libro','category.name AS category','userbook.name AS user',
                      'book.status_book')
               ->orderBy('libro', 'DESC')
               ->paginate(5);;
            return view('books.index')->with(compact('book'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Category::all();
        $user = Userbook::all();
        return view('books.create',['cat'=>$cat,'user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $book=new Books;
      $book->name=$request->input('name');
      $book->author=$request->input('author');
      $book->category=$request->input('category');
      $book->published_date=$request->get('published_date');
      $book->id_user=$request->input('id_user');
      $book->status_book= 1;
      $book->save();
      return Redirect::to('books');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('books.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
