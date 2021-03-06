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
/* クエリビルダ 
{
    public function index()
    {
        $items = DB::table('authors')->get();
        return view('index', ['items' => $items]);
    }
    public function add()
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'age' => $request->age,
            'nationality' => $reauest->nationality,
        ];
        DB::table('authors')->insert($param);
        return redirect('/');
    }
    public function edit(Request $request)
    {
        $item = DB::table('authors')->where('id', $request->id)->first();
        return view('edit', ['form' => $item]);
    }
    public function update(Request $reauest)
    {
        $param = [
            'id' => $reauest->id,
            'name' => $reauest->name,
            'age' => $reauest->age,
            'nationality' => $reauest->nationality,
        ];
        DB::table('authors')->where('id', $reauest->update($param));
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $item = DB::table('authors')->where('id', $request->id)->first();
        return view('delete', ['form' =>$item]);
    }
    public function remove(Request $request)
    {
        $param = ['id' => $request->id];
        DB::table('authors')->where('id', $request->id)->delete();
        return redirect('/');
    }

}
*/



{
    public function index()
    {
        $items = Author::all();
        return view('index', ['items' => $items]);
    }
    
    

    public function add()
    {
        return view('add');
    }
    public function find()
    {
        return view('find' , ['input' => '']);
    }
    /*5章 */
   /* public function search(Request $request)
    {
        $item = Author::find($request->input);
        $param = [
            'item' => $item,
            'input' => $request->input
        ];
        return view('find', $param);
    }
    */
    public function search(Request $request)
    {
        $item = Author::where('name', 'LIKE', "%{$request->input}%")->first();
        $param = [
            
            'input' =>$request->input,
            'item' => $item
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

    /*public function add()
    {
        return view('add');
    }
    */
    public function create(Request $request)
    {
        $this->validate($request, Author::$rules);
        $form = $request->all();
        Author::create($form);
        return redirect('/');
    }

  
    public function edit (Request $request)
    {
        $author = Author::find($request->id);
        return view('edit', ['form' => $author]);
    }
    public function update(Request $request)
    {
        $this->validate($request, Author::$rules);
        $form = $request->all();
        unset($form['_token']);
        Author::where('id', $request->id)->update($form);
        return redirect('/');

    }
    public function delete(Request $request)
    {
        $author = Author::find($request->id);
        return view('delete', ['form' => $author]);

    }
    public function remove(Request $request)
    {
        Author::find($request->id)->delete();
        return redirect('/');
    }
    public function relate(Request $request)
    {
        $items = Author::all();
        return view('author.index', ['items' => $items]);

        /*8章*/ 
        /*$hasItems = Author::has('book')->get();
        $noItems = Author::doesntHave('book')->get();
        $param = ['hasItems' => $hasItems, 'noItems' => $noItems];
        return view('author.index',$param);
        */
    }
    
}










