<article class="productpage">
    <div class="productpagecard">
        <div class="productTop">
            <h2>{{ $product->product }}</h2>
            <p>Te lenen tot: {{ strftime('%e %B %Y', strtotime($product->return_date)) }}</p>
            <p>Uitgeleend door: <a class="owner" href="/user/{{ $product->owner->id }}">{{ $product->owner->name }}</a></p>
        </div>

        <div class="imgcontainer">
            <img class="productpageimg" src="/{{ $product->image }}" alt="afbeelding van het product" />
        </div>
        
        <p>{{ $product->description }}</p>

        @if ($product->status === 'offered')
            <a class="productbutton" href="#" onclick="event.preventDefault(); document.getElementById('lend-form-{{ $product->id }}').submit();">Leen nu</a>
            <form id="lend-form-{{ $product->id }}" method="POST" action="{{ route('product.lend', $product->id) }}" style="display: none;">
                @csrf
                <input type="hidden" name="borrower_id" value="{{ auth()->id() }}">
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
                <input type="hidden" name="commenter_id" value="{{ auth()->id() }}">
                <button class="productbutton" type="submit">accepteer</button>
            </form>
        @endif
        
        @if (Auth::user()->role === 'admin' && Auth::id() !== $product->owner->id)
            <form method="POST" action="{{ route('product.destroy', $product->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
            </form>
        @endif
    </div>
</article>
