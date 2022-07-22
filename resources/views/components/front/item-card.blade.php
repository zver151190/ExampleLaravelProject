<div class="item">
    <div ref="productThumb" class="product-thumb">
        <div class="product-info">
            <x-front.product-mini></x-front.product-mini>
        </div>
    </div>
    <div class="item-image">
        <img src="img/images/img_item_thumbnail.jpg" alt="">
        <div class="zoom" @click="thumb"></div>
    </div>
    <a href="/item" class="item-description">Одиночный усилитель Mazda 6V6 в хорошем состоянии</a>
    <span class="price-wrapper">
        <span class="item-price">6 824</span>
        <button class="mobile-zoom" @click="thumb"></button>
        <button ref="fav" class="fav" @click="addToFavs"></button>
    </span>
</div>
