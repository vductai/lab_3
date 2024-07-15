<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\books;

class BookController extends Controller
{
    public function listbook()
    {
        $list = DB::table('books')
            ->join('categories', 'category_id', "=", 'categories.id')
            ->get();
        return view('list', compact('list'));
    }

    public function ins(){
        $listcate = DB::table('categories')->get();
        return view('create', compact('listcate'));
    }

    public function add(Request $request)
    {
        $data = [
            'title' => $request['title'],
            'thumbnail' => $request['thumbnail'],
            'author' => $request['author'],
            'publisher' => $request['publisher'],
            'publication' =>$request['publication'],
            'price' => $request['price'],
            'quantity' => $request['quantity'],
            'category_id' => $request['category_id']
        ];

        $add = DB::table('books')->insert($data);

        if ($add){
            return redirect()->route('book.list');
        }else{
            return view('errors');
        }

    }

    public function edit(int $id_book){
        $listcate = DB::table('categories')->get();
        $edits = DB::table('books')
            ->join('categories', 'category_id', "=", 'categories.id')
            ->where('id_book', '=', $id_book)
            ->get();
        return view('edit', compact('edits', 'listcate'));
    }

    public function update(Request $request, $id_book){
        $data = [
            'title' => $request['title'],
            'thumbnail' => $request['thumbnail'],
            'author' => $request['author'],
            'publisher' => $request['publisher'],
            'publication' =>$request['publication'],
            'price' => $request['price'],
            'quantity' => $request['quantity'],
            'category_id' => $request['category_id']
        ];

        $update = DB::table('books')
            ->where('id_book', '=', $id_book)
            ->update($data);

        if ($update){
            return redirect()->route('book.list');
        }else{
            return view('errors');
        }
    }

    public function delete($id_book){
        DB::table('books')
            ->where('id_book', '=', $id_book)
            ->delete();
        return redirect()->route('book.list');
    }
}
