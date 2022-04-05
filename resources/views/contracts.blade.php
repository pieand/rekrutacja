@extends('layouts.app')

@section('content')

    <h1>Moje umowy</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Umowa nr</th>
            <th scope="col">Adres</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($contracts as $contract)
            <tr>
                <th scope="row">{{ $contract->nr_umowy }}</th>
                <td>{{ $contract->adres }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $contracts->links() }}
    <hr>

@endsection
