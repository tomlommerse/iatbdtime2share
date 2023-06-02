@extends('default')

@section('content')
<div class="createpagina">
    <form class="createform" action="/product" method="POST" enctype="multipart/form-data">
        <h2>maak een nieuw product aan</h2>

        @csrf

        <label for="name">Naam</label>
        <input name="name" id="name" type="text" required>

        <label for="cat">Categorie</label>
        <select name="cat" id="cat" required> 
            <option value="">Categorie</option>
            @foreach($Cat as $Cat)
                <option value="{{$Cat->catname}}">{{$Cat->catname}}</option>
            @endforeach
        </select>


        <label for="desc">Beschrijving</label>
        <input name="desc" id="desc" type="text" required>

        <label for="img">Afbeelding</label>

        <input name="img" id="img" type="file" required>

        <label for="return_date">datum</label>
        <input type="date" name="return_date" id="return_date" value="{{ date('Y-m-d', strtotime('+1 week')) }}" min="{{ date('Y-m-d', strtotime('+1 week')) }}" required>

        <button class="createbutton" type="submit">Maak product aan</button>
    </form>
</div>
@endsection