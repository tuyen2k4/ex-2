@extends('layout.marter')
@section('title','ADD-STUDENT')
@section('body')
    <h1 style="text-align: center">ADD FPT-APTECH STUDENTS</h1>
<form action="{{url("/students")}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input  class="form-control" type="text" id="name" name="name" >
        @error("name")
        <p class="text-danger"><i>{{$message}}</i></p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" name="age" >
        @error("age")
        <p class="text-danger"><i>{{$message}}</i></p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" name="address" >
        @error("address")
        <p class="text-danger"><i>{{$message}}</i></p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">TelePhone</label>
        <input type="text" class="form-control" id="phone" name="phone" >
        @error("phone")
        <p class="text-danger"><i>{{$message}}</i></p>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

