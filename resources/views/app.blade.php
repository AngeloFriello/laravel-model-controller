@extends('layouts.layouts')

@section('content')
    <section class="container">
        <div class="row">
            @forelse ($movies as $movie)
                <div class="col-3">
                    <ul class="card">
                        <li>name = {{$movie['title']}}</li>
                        <li>nome originale = {{$movie['original_title']}}</li>
                        <li>nazionalità = {{$movie['nationality']}}</li>
                        <li>data di uscità = {{$movie['date']}}</li>
                        <li>voto = {{$movie['vote']}}</li>
                    </ul>
                </div>
            @empty
                non c'è nessun film
            @endforelse
            

        </div>
    </section>
@endsection