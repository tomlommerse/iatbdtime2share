<li class="productcard" data-cat={{$product->catname}}>
    <a href="/product/{{$product->id}}">
        <article>
            <figure>
            <img class="productimg" src="{{$product->image}}" alt="afbeelding van het product" />
            </figure>
            <header>
                <h2>{{$product->product}}</h2>
            </header>
            <section>
                <p>{{$product->description}}</p>
            </section>
        </article>
    </a>
</li>