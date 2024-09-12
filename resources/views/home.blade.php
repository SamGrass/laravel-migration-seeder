{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')

<div class="container my-5">
    <h1>Elenco Treni in partenza oggi</h1>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Compagnia</th>
                <th scope="col">Stazione di arrivo</th>
                <th scope="col">Stazione di partenza</th>
                <th scope="col">Orario di arrivo</th>
                <th scope="col">Orario di partenza</th>
            </tr>
        </thead>
        @forelse ($trains as $train)
        <tbody>
            <tr>
                <th>{{ $train->id }}</th>
                <th>{{ $train->company }}</th>
                <th>{{ $train->arrival_station }}</th>
                <th>{{ $train->departure_station }}</th>
                <th>{{ $train->arrival_time }}</th>
                <th>{{ $train->departure_time }}</th>
            </tr>
        </tbody>
        @empty
        <h2>Nessun treno è in partenza in data odierna</h2>
        @endforelse
    </table>
</div>

@endsection


@section('titlePage')
home
@endsection