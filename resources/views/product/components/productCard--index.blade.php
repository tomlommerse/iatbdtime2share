<li class="productcard" data-cat="{{ $product->catname }}">
    <a href="/product/{{ $product->id }}">
        <article>
            <figure class="cardimgcontainer">
                <img class="productimg" src="{{ asset(str_replace('user/', '', $product->image)) }}" alt="afbeelding van het product" />
            </figure>
            <header class="cardtext">
                <h2>{{ \Illuminate\Support\Str::limit($product->product, 20, '...') }}</h2>
            </header>
            <section class="cardtext">
            <p>{{ \Illuminate\Support\Str::limit($product->description, 30, '...') }}</p>

            </section>
        </article>
    </a>
</li>