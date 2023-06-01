@extends('default')
@section('content')
    <div class="profilepage">

        @if ($user->blocked)
            @if (Auth::user()->role === 'admin')
                <h1>{{ $user->name }}</h1>
                <form method="POST" action="{{ route('user.unblock', $user->id) }}">
                    @csrf
                    @method('PUT')
                    <button type="submit">Unblock User</button>
                </form>
            @else
                <p>User is blocked.</p>
            @endif
        @else
            <h1>{{ $user->name }}</h1>

            @if (Auth::user()->role === 'admin' && $user->role !== 'admin')
                <form method="POST" action="{{ route('user.block', $user->id) }}">
                    @csrf
                    @method('PUT')
                    <button type="submit">Block User</button>
                </form>
            @endif

            <ul class="swapButtonContainer">
                <button class="swapButton" onclick="swapProductsProfile('offered')">jouw producten</button>
                <button class="swapButton" onclick="swapProductsProfile('lent')">geleend</button>
                <button class="swapButton" onclick="swapProductsProfile('returned')">teruggestuurd</button>
            </ul>

            <ul class="profileProductsOwned">
                @foreach(\App\Models\Product::where('owner_id', $user->id)->where('status', 'offered')->get() as $product)
                    @include('product.components.productCard--index')
                @endforeach
            </ul>

            <ul class="profileProductsBorrowed">
                @foreach(\App\Models\Product::where('borrower_id', $user->id)->get() as $product)
                    @include('product.components.productCard--index')
                @endforeach
            </ul>

            <ul class="profileProductsReturned">
                @foreach(\App\Models\Product::where('owner_id', $user->id)->where('status', 'returned')->get() as $product)
                    @include('product.components.productCard--index')
                @endforeach
            </ul>

            <ul class="profileComments">
                @foreach(\App\Models\Comment::where('user_id', $user->id)->get() as $comment)
                    @include('product.components.comment')
                @endforeach
            </ul>
        @endif

    </div>
@endsection
