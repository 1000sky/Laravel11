@extends('layouts.default')
<style>
    th {
        background-color: #289ADC;
        color: white;
        padding: 5px 40px;
    }
    tr:nth-child(odd) td{
        background-color: #FFFFFF;
    }
    td {
        padding: 25px 40px;
        background-color: #EEEEEE;
        text-align: center;
    }
</style>
@section('title', 'index.blade.php')

@section('content')
<table>
    <tr>
        <!-- 4章までの記述 -->
        <!-- <th>id</th>  
        <th>name</th>
        <th>age</th>
        <th>nationality</th>-->
        <th>Data</th> 
    </tr>
    @foreach ($items as $item)
    <tr>
        <!-- 4章までの記述 -->
        <!-- <td>  
            {{$item->id}}
        </td>
        <td>
            {{$item->name}}
        </td>
        <td>
            {{$item->age}}
        </td>
        <td>
            {{$item->nationality}}
        </td>-->
        <td>
            {{$item->getDetail()}}
        </td>
        
    </tr>
    @endforeach
</table>
{{ $items->links() }}
@endsection