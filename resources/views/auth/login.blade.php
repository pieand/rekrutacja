@extends('layouts.app')

@section('content')
    <h2>Logowanie</h2>
    <hr>
    <form action="{{route('login-user')}}" method="post">
        @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
        @csrf
        <div class="form-group">
            <label for="nr_klienta">Numer klienta</label>
            <input type="text" class="form-control" placeholder="Podaj numer klienta" name="nr_klienta"
                   value="{{old('nr_klienta')}}">
            <span class="text-danger">@error('nr_klienta'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label for="pin">Pin</label>
            <input type="password" class="form-control" placeholder="Podaj pin" name="pin" value="">
            <span class="text-danger">@error('pin'){{$message}}@enderror</span>
            <br>
        </div>
        <div class="form-group">
            <button class="btn btn-block btn-dark" type="submit">Login</button>
        </div>
        <br>
    </form>
@endsection
