@extends('layouts.main')

@section('container')
    <div class="person">
        <div class="photoPerson">
            <img class="realPhoto" src="img/meme.jpg" alt="Not Your Face" width="270">
        </div>
        <div class="textPerson">
            <h4>Hello, Master</h4>
            <h2>{{ auth()->user()->name }}</h2>
            <h1>We're Happy You Here</h1>
            <p>Let's Join Our Events/Competition</p>
        </div>
    </div>
@endsection