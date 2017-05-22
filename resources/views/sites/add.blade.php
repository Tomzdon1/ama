@extends('layouts.app')

@section('content')

   <form action="{{route('sites.save')}}" method="post">
   <input name="_token" type="hidden" value="{{csrf_token()}}"/>
       <div class="form-group">
            <input type="text" name="title" placeholder="Podaj tytul" class="form-control"/>
       </div>
        <div class="form-group">
            <textarea name="description" placeholder="Podaj tresc" class="form-control"></textarea>
       </div>
        <div class="form-group">
            <button class="btn btn-primary">Zapisz</button>
       </div>
   </form>

@endsection