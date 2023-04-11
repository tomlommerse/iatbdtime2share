@extends('default')
@section('content')
    <div onclick="sort()">
        <label for="entertainment">entertainment</label>
        <input class="box" id="entertainment" name="entertainment" type="checkbox">
        <label for="huishouden">huishouden</label>
        <input class="box" id="huishouden" name="huishouden" type="checkbox">
        <label for="transport">transport</label>
        <input class="box" id="transport" name="transport" type="checkbox">
        <label for="tuin">tuin</label>
        <input class="box" id="tuin" name="tuin" type="checkbox">
        <label for="overig">overig</label>
        <input class="box" id="overig" name="overig" type="checkbox">
    </div>
    <ul class="productlist">
        @foreach(DB::table('product')->where('status', 'offered')->get() as $product)
        @include('product.components.productCard--index')
        @endforeach
    </ul>
@endsection

