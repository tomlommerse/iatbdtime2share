<article class="productpage">
    <h2>{{$product->product}}</h2>
    <img class="productpageimg" src="/{{ $product->image }}" alt="afbeelding van het product" />
    {{$product->description}}

    <a href="#" onclick="event.preventDefault(); document.getElementById('lend-form-{{ $product->id }}').submit();">Leen nu</a>
    <form id="lend-form-{{ $product->id }}" method="POST" action="{{ route('product.lend', $product->id) }}" style="display: none;">
        @csrf
        <input type="hidden" name="borrower_id" value="{{auth()->id()}}">
    </form>

    <a href="#" onclick="event.preventDefault(); document.getElementById('return-form-{{ $product->id }}').submit();">geef terug</a>
    <form id="return-form-{{ $product->id }}" method="POST" action="{{ route('product.return', $product->id) }}" style="display: none;">
        @csrf
        @method('POST')
        <input type="hidden" name="lent_to" value="">
    </form>
</article>
