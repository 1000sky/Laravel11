<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/*class Book extends Model
{
    use HasFactory;
}
*/

class Book extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'author_id' => 'required',
        'title' => 'required',
    );
    public function getTitle(){
        return 'ID'.$this->id . ':' . $this->title;
    }
    public function getTitel(){
        return 'ID'.$this->id . ':' . $this->title . '著名:' . optional($this->author)->name;
    }
}