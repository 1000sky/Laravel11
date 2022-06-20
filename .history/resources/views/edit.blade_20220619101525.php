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
    button {
      padding: 10px 20px;
      background-color: #289ADC;
      border: none;
      color: white;
    }
</style>
@section('title', 'edit.blad.php')

@section('content')
<!-- 7章 -->
@if (count($errors) > 0)
<ul>
    @foreach ($errors->all() as $erroe)
    <li>
        {{$error}}
    </li>
    @endforeach
</ul>
<form action="/edit" method="POST">
    <table>
        @csrf 
        <tr>
            <th>
                id
            </th>
            <td>
                <input tyoe="text" name="id" value="{{$form->id}}">
            </td>
        </tr>
        <tr>
            <th>
                name
            </th>
            <td>
                <input tyoe="text" name="name" value="{{$form->name}}">
            </td>
        </tr>
        <tr>
            <th>
                age
            </th>
            <td>
                <input tyoe="text" name="age" value="{{$form->age}}">
            </td>
        </tr>
        <tr>
            <th>
                nationality
            </th>
            <td>
                <input tyoe="text" name="nationality" value="{{$form->nationality}}">
            </td>
        </tr>
        <tr>
            <th></th>
            <td>
                <button>送信</button>
            </td>
        <tr>
    </table>
</form>
@endsection 