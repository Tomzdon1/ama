@extends('layouts.app')

@section('content')

    <table class="table table-hover">
    @foreach($sites as $site)
        <tr>
            <td><a href="{{route('sites.show', $site)}}">{{$site->title}}</a></td>
            <td>{{$site->description}}</td>
        </tr>
    @endforeach
    </table>
@endsection