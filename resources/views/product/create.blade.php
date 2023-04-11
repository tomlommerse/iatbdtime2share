@extends('default')

@section('title')
voeg product toe
@endsection
@section('content')
<form action="/product" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="name">Naam</label>
    <input name="name" id="name" type="text">

    <label for="cat">Categorie</label>
    <select name="cat" id="cat">
        @foreach($Cat as $Cat)
            <option value="{{$Cat->catname}}">{{$Cat->catname}}</option>
        @endforeach
    </select>


    <label for="desc">Beschrijving</label>
    <input name="desc" id="desc" type="text">

    <label for="img">Afbeelding</label>

    <input name="img" id="img" type="file" enctype="multipart/form-data">

    <label for="return_date">datum</label>
    <input type="date" name="return_date">

    <button type="submit">Maak product aan</button>
</form>
@endsection