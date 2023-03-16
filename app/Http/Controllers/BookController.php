<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::paginate(2);
        return view('books.index',compact('books'));
    }


    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $books = new Book();
        // dd($books);
        $books->name = $request->name;
        $books->isbn = $request->isbn;
        $books->tacgia = $request->tacgia;
        $books->theloai = $request->theloai;
        $books->sotrang = $request->sotrang;
        $books->namsanxuat = $request->namsanxuat;
        try {
            if( $books->save() ){
                return redirect()->route('books.index')->with('status','Thêm thành công');
            }
        } catch (\exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('books.index')->with('status1','Thêm không thành công');
        }
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $books = Book::find($id);
        return view('books.edit',compact('books'));
    }


    public function update(Request $request, string $id)
    {
        $books = Book::find($id);
        $books->name = $request->name;
        $books->isbn = $request->isbn;
        $books->tacgia = $request->tacgia;
        $books->theloai = $request->theloai;
        $books->sotrang = $request->sotrang;
        $books->namsanxuat = $request->namsanxuat;
        try {
            if( $books->save() ){
                return redirect()->route('books.index')->with('status','chỉnh sửa thành công');
            }
        } catch (\exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('books.index')->with('status1','chỉnh sửa thất bại');
        }
    }

    public function delete(string $id)
    {

        $books = Book::find($id);
        try {
            if ($books->delete()) {
                return redirect()->route('books.index')->with('status', 'Xóa thành công');
            }
        } catch (\exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('books.index')->with('status1', 'xóa thất bại');
        }
    }
}
