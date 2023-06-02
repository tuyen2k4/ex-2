@extends('layout.marter')
@section('title','FPT-APTECH')
@section('body')

    <h1 style="text-align: center">LIST OF FPT-APTECH STUDENTS</h1>
    <a href="{{url("/add")}}">Add Student</a>
<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Address</th>
        <th scope="col">Telephone</th>
    </tr>
    </thead>
    <tbody>
    @foreach($studend as $item)
    <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->phone}}</td>
    </tr>
    @endforeach

    </tbody>
</table>

@endsection
