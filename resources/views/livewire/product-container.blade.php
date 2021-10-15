<div class="container mydiv">
    <div class="row">
        @foreach ($products as $product)
            @livewire('product-unit', ['product'=> $product])
        @endforeach
    </div>
</div>
