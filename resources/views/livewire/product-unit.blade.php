<div class="col-md-4">
    <div class="bbb_deals">
        <div class="bbb_deals_slider_container">
            <div class=" bbb_deals_item">
                <div class="bbb_deals_image"><img src="https://i.imgur.com/9UYzfny.png" alt=""></div>
                <div class="bbb_deals_content">
                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                        <div class="bbb_deals_item_category"><a href="#">{{ $product->title }}</a></div>
                        {{-- <div class="bbb_deals_item_price_a ml-auto"><strike>{{ $product->price }}</strike></div> --}}
                    </div>
                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                        <div class="bbb_deals_item_name">{{ $product->title }}</div>
                        <div class="bbb_deals_item_price ml-auto">{{ $product->price }}</div>
                    </div>
                    <div class="available">
                        <div class="available_line d-flex flex-row justify-content-start">
                            {{-- <div class="available_title">Available: <span>6</span></div> --}}
                            <div class="sold_stars ml-auto"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        </div>
                        <div class="available_bar"><span style="width:17%"></span></div>
                    </div>

                    <button class="btn btn-primary" wire:click="addItem({{$product->id}})">Ajouter au panier</button>

                </div>
            </div>
        </div>
    </div>
</div>