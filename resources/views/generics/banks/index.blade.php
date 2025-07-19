@extends('layouts.app')

@section('content')
    <h1>Bancos</h1>
    <a href="{{ route('banks.create') }}">Nuevo Banco</a>
    <ul>
        @foreach($banks as $bank)
            <li>
                {{ $bank->name }} ({{ $bank->code }}) - {{ $bank->status }}
                <a href="{{ route('banks.edit', $bank) }}">Editar</a>
            </li>
        @endforeach
    </ul>
@endsection
