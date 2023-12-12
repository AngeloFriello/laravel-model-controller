@section('content')
    <section class="container">
        <div class="row">
            @forelse ($movies as $movie)
                <div class="col-2">
                    <ul>
                        <li>name = {{$movie['title']}}</li>
                    </ul>
                </div>
            @empty
                non c'è nessun film
            @endforelse
            

        </div>
    </section>
@endsection