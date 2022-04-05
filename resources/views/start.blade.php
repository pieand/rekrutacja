@extends('layouts.app')


@section('content')

    <h1>Witamy w strefie klienta.</h1>

    @if (Session::has('loginId'))
        <h3></h3>
    @else
        <h3>Aby zobaczyć swoje umowy, faktury i saldo prosimy przejść do logowania.</h3>
    @endif


@endsection
