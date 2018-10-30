@extends('layouts.app')

@section('content')

<div class="container">
        
        <profil :user="{{$user}}"/>
</div>
   


@endsection
