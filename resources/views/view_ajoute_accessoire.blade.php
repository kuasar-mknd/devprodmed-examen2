@extends('template')

@section('contenu')
<BR>
<div class="col-sm-offset-3 col-sm-6">
    <div class="panel panel-info">
        <div class="panel-heading">Ajout d'un accessoire pour {{$voiture->marque}} {{$voiture->type}} {{$voiture->couleur}} {{$voiture->cylindree}} [l]</div>
        <div class="panel-body">
            <form method="POST" action="{{route('voitures.store')}}" accept-charset="UTF-8">
            @csrf
            <div class="form-group ">
                @for ($i = 0; $i < count($accessoires); $i++)
                <input type="checkbox" name="accessoiresIds[]" value="{{$accessoires[$i]->id}}" {{$checked[$i]}}><label> {{$accessoires[$i]->nom}} </label><br/>
                @endfor
                {!! $errors->first('type', '<small class="help-block">:message</small>') !!}
            </div>
            
            <input type="hidden" name="voitureId" value="{{$voiture->id}}">
            
            <input class="btn btn-primary pull-right" type="submit" value="Envoyer">
            
            </form>
        </div>
    </div>
    <a href="javascript:history.back()" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span>Retour</a>
</div>
@endsection