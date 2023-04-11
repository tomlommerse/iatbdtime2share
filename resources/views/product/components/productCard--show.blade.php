<article class="productpage">
    <h2>{{$product->product}}</h2>
    <div class="imgcontainer">
        <img class="productpageimg" src="/{{ $product->image }}" alt="afbeelding van het product" />
    </div>
    
    {{$product->description}}

    @if ($product->status === 'offered')
        <a class="productbutton" href="#" onclick="event.preventDefault(); document.getElementById('lend-form-{{ $product->id }}').submit();">Leen nu</a>
        <form id="lend-form-{{ $product->id }}" method="POST" action="{{ route('product.lend', $product->id) }}" style="display: none;">
            @csrf
            <input type="hidden" name="borrower_id" value="{{auth()->id()}}">
        </form>
    @elseif ($product->status === 'lent')
        <a class="productbutton" href="#" onclick="event.preventDefault(); document.getElementById('return-form-{{ $product->id }}').submit();">geef terug</a>
        <form id="return-form-{{ $product->id }}" method="POST" action="{{ route('product.return', $product->id) }}" style="display: none;">
            @csrf
            @method('POST')
        </form>
    @elseif ($product->status === 'returned')
        <form method="POST" action="{{ route('comments.store', $product->id) }}">
            @csrf
            <input type="hidden" name="user_id" value="{{ $product->borrower_id }}">
            <label for="comment">Comment:</label>
            <input class="productcomment" type="text" name="comment" id="comment">
            <input type="hidden" name="commenter_id" value="{{auth()->id()}}">
            <button class="productbutton" type="submit">Add Comment</button>
        </form>
    @endif


</article>
