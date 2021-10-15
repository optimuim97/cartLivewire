<div>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <i class="fas fa-shopping-cart"> {{ Cart::count() }} </i>
        </a>
    </nav>
    <div class="container">
        <ul class="list-group">
            @foreach (Cart::content() as $item)     
                <li class="list-group-item"> Titre: {{ $item->name }} | Quantite : {{ $item->qty }} | Prix : {{ $item->price }} |  Prix : {{ $item->price }}</li>
                <hr>
            @endforeach


            <h4> Prix Total : {{ Cart::PriceTotal() }} </h4>

        </ul>
    </div>

</div>






