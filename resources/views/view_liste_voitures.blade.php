@extends('template')

@section('contenu')
@if(isset($info))
<div class='row alert alert-info'> {{$info}}</div>
@endif
{!!$links!!}
@foreach($voitures as $voiture)
<article class="row bg-primary">
    <div class="col-md-12">
        <header>
            <h1>{{$voiture->marque}} {{$voiture->type}} {{$voiture->couleur}} {{$voiture->cylindree}} [l]</h1>
            <div class="pull-right">
                <td><a href="{{route('voitures.edit', [$voiture->id])}}" class="btn btn-warning btn-block">Modifier liste accessoire(s)</a>
                @foreach($voiture->accessoires as $accessoire)
                <a href='{{url("/voitures/{$voiture->id}/accessoires/{$accessoire->id}")}}' class="btn btn-xs btn-danger" onclick="return confirm('Vraiment supprimer cet accessoire ?')">{{$accessoire->nom}}</a>
                @endforeach
            </div>
        </header>
    </div>
</article>
<br>
@endforeach
{!! $links !!}
@endsection