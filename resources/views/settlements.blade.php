@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <h2>Moje Saldo</h2>
        @foreach($balances as $balance)
            <div class="balance">{{$balance->saldo}}zł</div>
        @endforeach
    </div>
    <hr>
    <h2>Faktury</h2>
    <div class="div-table">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Data wystawienia</th>
                <th scope="col">Nr faktury</th>
                <th scope="col">Termin płatności</th>
                <th scope="col">Kwota</th>
                <th scope="col">Opłacona/Nieopłacona</th>
            </tr>
            </thead>
            <tbody>
            @foreach($invoices as $invoice)
                <tr>
                    <td>{{$invoice->data_faktury}}</td>
                    <td>{{$invoice->id}}</td>
                    <td>{{$invoice->data_faktury}}</td>
                    <td>{{$invoice->kwota_brutto}}</td>
                    <td>{{$invoice->status}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $invoices->links() }}
    </div>
    <hr>
@endsection
