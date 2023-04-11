@extends('default')
@section('content')
    <div class="profilepage">

        <h1>{{Auth::user()->name}}</h1>

        <button class="swapButton" onclick="swapProductsProfile()">owned</button>
        
        <ul class="profileProductsOwned">
            
            @foreach(\App\Models\Product::where('owner_id', Auth::id())->get() as $product)
                @include('product.components.productCard--index')
            @endforeach
        </ul>
        <ul class="profileProductsBorrowed">
        
            @foreach(\App\Models\Product::where('borrower_id', Auth::id())->get() as $product)
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

