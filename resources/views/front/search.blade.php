<x-guest-layout>
    <div class="preview"><div class="preview__loader"></div></div>
    <div class="product-container">
        @foreach ($products as $item)
            <div class="item">
                <div ref="productThumb" class="product-thumb">
                    <div class="overlay" @click.self="closeModal">
                        <div class="product-info">
                            <product-mini></product-mini>
                        </div>
                    </div>
                </div>
                <div class="preview"><div class="preview__loader"></div></div>
                <div class="item-image">
                    <img src="{{ $item['imgsrc'] }}" alt="{{ $item['imgalt'] }}" style="width: 100%;">
                    <div class="zoom" idx="{{ $item['id'] }}" @click="thumb"></div>
                </div>
                <a href="./item/{{ $item['id'] }}" target="_blank" class="item-description">{{ $item['title'] }}</a>
                <span class="price-wrapper">
                    <span class="item-price">{{ $item['price'] }}</span>
                    <button class="mobile-zoom" @click="thumb"></button>
                    <button ref="fav" class="fav" @click="addToFavs" idx="{{ $item['id'] }}"></button>            
                </span>        
            </div>
        @endforeach
    </div>
</x-guest-layout>