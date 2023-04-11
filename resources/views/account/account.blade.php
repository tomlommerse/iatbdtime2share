@extends('default')
@section('content')
    <div class="profilepage">

        <h1>{{Auth::user()->name}}</h1>

        <ul class="swapButtonContainer">
            <button class="swapButton" onclick="swapProductsProfile('offered')">jouw producten</button>
            <button class="swapButton" onclick="swapProductsProfile('lent')">geleend</button>
            <button class="swapButton" onclick="swapProductsProfile('returned')">teruggestuurd</button>
        </ul>

        
        <ul class="profileProductsOwned">
            @foreach(\App\Models\Product::where('owner_id', Auth::id())->where('status', 'offered')->get() as $product)
                @include('product.components.productCard--index')
            @endforeach
        </ul>
        <ul class="profileProductsBorrowed">
            @foreach(\App\Models\Product::where('borrower_id', Auth::id())->get() as $product)
                @include('product.components.productCard--index')
            @endforeach
        </ul>
        <ul class="profileProductsReturned">
            @foreach(\App\Models\Product::where('owner_id', Auth::id())->where('status', 'returned')->get() as $product)
                @include('product.components.productCard--index')
            @endforeach
        </ul>

        <ul class=profileComments>
            @foreach(\App\Models\Comment::where('user_id', Auth::id())->get() as $comment)
                @include('product.components.comment')
            @endforeach
        </ul>

    </div>
@endsection

