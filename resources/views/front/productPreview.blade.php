<x-guest-layout>
    <div class='preview__content'>
            <div>
                <div class='bread-crumbs'>
                    <a href='../pages/catalog.html'>Компьютеры</a>
                    <a href='../pages/unit.html'>Ноутбуки</a>
                </div>
                <product-mini></product-mini>
            </div>
            <div ref='product' class='product'>
                <button class='close-button' type='button' aria-label='Закрыть окно' @click='closeModal'></button>
                <p class='product-card-title'><a href='./item.php?item=$id' target='_blank'>$title</a></p>
                <div class='container'>
                    <div class='gallery'>
                        <div class='selected-image'>
                            <img src='$imgsrc' alt='$imgalt' class='current'></img>
                        </div>
                        <div class='images'>
                        @foreach ($product["relatedimages"] as $image)
                            <img src='{{ $image["src"] }}' alt='{{ $image["id"] }}' class='thumb'></img>
                        @endforeach
                        </div>
                    </div>
                    <div class='specs'>              
                        <span class='spec'><span class='parameter'>Начало торгов (Jpn): </span><span class='value'>2021-10-13 10:44:13  </span></span>
                        <span class='spec'><span class='parameter'>Конец торгов (Jpn):  </span><span class='value'>2021-10-13 10:44:13  </span></span>
                        <span class='spec'><span class='parameter'>Количество:          </span><span class='value'>1 шт.                </span></span>
                        <span class='spec'><span class='parameter'>Состояние товара:    </span><span class='value'>б/у                  </span></span>
                        <span class='spec'><span class='parameter'>Раннее завершение:   </span><span class='value'>есть                 </span></span>                                
                        <span class='spec'><span class='parameter'>Авто продление:      </span><span class='value'>есть                 </span></span>
                        <span class='spec'><span class='parameter'>Стартовая цена:      </span><span class='value'>12 000 i             </span></span>                                
                        <span class='spec'><span class='parameter'>Число ставок:        </span><span class='value'>24                   </span></span>                                
                        <span class='spec'><span class='parameter'>Текущая ставка:      </span><span class='value'>35 000 i             </span></span>                                
                        <span class='spec'><span class='parameter'>Блиц цена:           </span><span class='value'>42 000 i             </span></span>
                        <span class='spec'><span class='parameter'>Осталось времени:    </span><span class='value'>6 час 30 мин         </span></span>

                        <span class='spec'><span class='parameter'>Цена:</span><span class='value'>$price JPY (".$price*$_COOKIE['JPY/RUB']." RUB)</span></span>
                        <span class='spec'><span class='parameter'>Состояние:</span><span class='value'>$condition</span></span>
                        <span class='spec'><span class='parameter'>В наличии:</span><span class='value'>$instock</span></span>
                        <span class='spec'><span class='parameter'>Рейтинг:</span><span class='value'>$rating</span></span>
                        <span class='spec'><span class='parameter'>Количество:</span><span class='value'>$amount шт.</span></span>
                        <span class='spec'><span class='parameter'>Категория:</span><span class='value'><a href='/izibuy/yahooshopping/search.php?c=$category'>$category</a></span></span>
                    </div>
                </div>
                <div class='container'>
                    <div style='display: flex; justify-content: center;'><button type='button' ref='addFavs' class='add-favs' @click='addToFavs'>Добавить в избранное</button></div>
                    <div><button type='button' class='button make-bet' @click='makeBet();closeModal();'>Сделать ставку</button></div>
                </div>
            </div>
        </div>
</x-guest-layout>