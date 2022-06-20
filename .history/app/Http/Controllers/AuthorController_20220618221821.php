<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
/*DBクラス
{
    public function index()
    {
        $items = DB::select('select * from authors');
        return view('index', ['items' => $items]);
    }
    public function add()
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $param = [
            'name' => $reauest->name,
            'age' => $reauest->age,
            'nationality' => $request->nationality,
        ];
        DB::insert('insert into authors (name, age, nationality) values (:name, :age, :nationality)', $param);
        return redirect('/');
    }

    public function edit(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('select * from authors where id = :id', $param);
        return view('edit', ['form' => $item[0]]);
    }
    public function update(Request $request)
    {
        $param = [
            'id' => $reauest->id,
            'name' => $reauest->name,
            'age' => $reauest->age,
            'nationality' => $reauest->nationality,
        ];
        DB::update('update authors set name =:name, age =:age, nationality =:nationality');
    }
    public function delete(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('select * from authors where id = :id', $param);
        return view('delete', ['form' => $item[0]]);
    }
    public function remove(Request $request)
    {
        $param = ['id' => $request->id];
        DB::delete('delete from authors where id =:id', $param);
        return redirect('/');
    }
}
*/
{
    public function index()
    {
        $items = DB::table('authors')->get();
        return view('index', ['items' => $items]);
    }
}





/*
{
    public function index()
    {
        $items = Author::all();
        return view('index', ['items' => $items]);
    }
}
    /*public function add()
    {
        return view('add');
    }
    public function find()
    {
        return view('find' , ['input' => '']);
    }
    public function search(Request $request)
    {
        $item = Author::where('name', 'LIKE', "%{$request->input}%")->first();
        $param = [
            'item' =>$item,
            'input' =>$request->input
        ];
        return view('find' , $param);
    }
    public function bind(Author $author)
    {
        $data = [
            'item' =>$author,
        ];
        return view('author.binds' , $data);
    }
    public function add()
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $this->validate($request, Author::$rules);
        $form = $request->all();
        Author::create($form);
        return redirect('/');
    }

}

*/

