@extends('template')

@section('contenu')
    <div class="container">
    <h1>Liste des morceaux</h1>
        <ul>
            @foreach ($morceaux as $morceau)
                <li>{{ $morceau->titre }} - {{ $morceau->duree }}</li>
                @if (Auth::check())
                    Genre musical : {{ $morceau->genre->genre }}
                <br> Artistes :
                    <ul>
                        @foreach ($morceau->artistes as $artiste)
                            <li>{{ $artiste->nom }}</li>
                        @endforeach
                    </ul>
                @endif
            @endforeach
        </ul>

        {{ $morceaux->links() }}

    </div>
@endsection
