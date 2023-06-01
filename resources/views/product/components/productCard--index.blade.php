<li class="productcard" data-cat={{$product->catname}}>
    <a href="/product/{{$product->id}}">
        <article>
            <figure class="cardimgcontainer">
            <img class="productimg" src="{{ asset(str_replace('user/', '', $product->image)) }}" alt="afbeelding van het product" />
            </figure>
            <header class="cardtext">
                <h2 >{{$product->product}}</h2>
            </header>
            <section class="cardtext">
                <p >{{$product->description}}</p>
            </section>
        </article>
    </a>
</li>