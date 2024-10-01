@extends('layouts.app')
{{-- Estende il layout principale "app" --}}

@section('content')
    {{-- Sezione del contenuto della pagina --}}
    <div class="container">
        {{-- Contenitore principale --}}
        <div class="row">
            <div class="col-md-12">
                {{-- Tabella dei treni con stili Bootstrap --}}
                <table class="table table-hover table-striped my-5">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Company</th>
                            <th>Departure Station</th>
                            <th>Arrival Station</th>
                            <th>Departure</th>
                            <th>Arrival</th>
                            <th>Code</th>
                            <th>Carriages</th>
                            <th>Puntual</th>
                            <th>Cancelled</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $train)
                            {{-- Evidenzia la riga se il treno è cancellato --}}
                            <tr @if ($train->cancelled) style="background-color: #f8d7da;" @endif>
                                <td>{{ $train->id }}</td>
                                <td>{{ $train->company }}</td>
                                <td>{{ $train->departure_station }}</td>
                                <td>{{ $train->arrival_station }}</td>
                                <td>{{ $train->departure_time }}</td>
                                <td>{{ $train->arrival_time }}</td>
                                <td>{{ $train->train_code }}</td>
                                <td>{{ $train->number_of_carriages }}</td>
                                <td>{{ $train->on_time ? 'Yes' : 'No' }}</td>
                                <td>{{ $train->cancelled ? 'Yes' : 'No' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- Fine della tabella dei treni --}}
            </div>
        </div>
    </div>
@endsection
{{-- Fine della sezione contenuto --}}
