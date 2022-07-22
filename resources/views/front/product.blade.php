<x-guest-layout>
    <div class='bread-crumbs'>
        <a category-id='{{ $product["category"] }}' href='#'>Компьютеры</a>      <!-- /category/$category -->
        <a category-id='' href='#'>Ноутбуки</a>
    </div>
    <div ref='product' class='product'>
        <button class='close-button' type='button' aria-label='Закрыть окно' @click='closeModal'></button>
        <p class='product-title'>{{ $product["title"] }}</p>
        <div class='product-photos'>   
            <div class='full-wrapper'>
                <img src='{{ $product["imgsrc"] }}' alt='{{ $product["imgalt"] }}' class='current'></img>
            </div>                                               
            <div class='thumbnails-wrapper' @click.stopPropagation='display'>
            @foreach ($product["relatedimages"] as $image)
                <img src='{{ $image["src"] }}' alt='{{ $image["id"] }}' class='thumb'></img>
            @endforeach
            </div>
        </div>
        <div class='product-desc'>
            <div class='text-content'>
                    <span class='table-row'><span class='parameter'>Цена:</span><span class='value'>{{ $product['price'] }}</span></span>
                    <span class='table-row'><span class='parameter'>Тип:</span><span class='value'>{{ $product['headline'] }}</span></span>
                    <span class='table-row'><span class='parameter'>Состояние:</span><span class='value'>{{ $product['condition'] }}</span></span>
                    <span class='table-row'><span class='parameter'>В наличии:</span><span class='value'>{{ $product['instock'] }}</span></span>
                    <span class='table-row'><span class='parameter'>Рейтинг:</span><span class='value'>{{ $product['rating'] }}</span></span>
                    <span class='table-row'><span class='parameter'>Количество:</span><span class='value'>{{ $product['amount'] }} шт.</span></span>
                    <span class='table-row'><span class='parameter'>Категория:</span><span class='value'><a href='/izibuy/yahooshopping/search.php?c={{ $product["category"] }}'>{{ $product['category'] }}</a></span></span>
            </div>
            <a href='{{ $product["url"] }}' target='_blank'><img class='logo' src='../images/logos/yahoo.svg' alt='Yahoo logo' height='30' width='160'></a>
            <a><button type='button' class='button make-bet' @click='makeBet();closeModal();'>Сделать ставку</button></a>
            <button idx='{{ $product["id"] }}' type='button' ref='addFavs' class='add-favs' @click='addToFavs'>Добавить в избранное</button>
        </div>
    </div>
    <div class='product-details'>
        <div>{!! $product["description"] !!}</div>
        <div>{!! $product["Additional3"] !!}</div>
    </div>
</x-guest-layout>