@extends('layouts.base')
@section('title', 'Create a new student')
@section('container')
    <main class="container">
        <h1 class="alert alert-success text-center"><i class="fa-solid fa-users"></i> &nbsp;Create a new student</h1>
        <form method="POST" action="{{route('students.store')}}">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="document" class="form-label">Document</label>
                        <input type="text" class="form-control" name="document" id="document"
                               aria-describedby="document" value="{{old('document')}}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="code" class="form-label">Code</label>
                        <input type="text" class="form-control" name="code" id="code"
                               aria-describedby="code" value="{{old('code')}}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name"
                               aria-describedby="name" value="{{old('name')}}">
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last name</label>
                        <input type="text" class="form-control" name="lastname" id="lastname"
                               aria-describedby="last_name" value="{{old('lastname')}}">
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="birth_date" class="form-label">Birth date</label>
                        <input type="date" class="form-control" name="birthdate" id="birthdate"
                               aria-describedby="birth_date" value="{{old('birthdate')}}">
                    </div>
                </div>
            </div>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>
    </main>
@endsection