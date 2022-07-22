<?php
    $basket = array(
        array("status"=> "Осталось 10 минут","title" => 'Apple MacBook Air (M1, 2020) 8 ГБ, 256 ГБ SSD, золотой', "my-bet" => "75000", "max-bet" => "75000", "snipe-bet" => "75000"),
        array("status"=> "Осталось 10 минут","title" => 'Apple MacBook Air (M1, 2020) 8 ГБ, 256 ГБ SSD, золотой', "my-bet" => "75000", "max-bet" => "75000", "snipe-bet" => "75000"),
        array("status"=> "Осталось 10 минут","title" => 'Apple MacBook Air (M1, 2020) 8 ГБ, 256 ГБ SSD, золотой', "my-bet" => "75000", "max-bet" => "75000", "snipe-bet" => "75000"),
        array("status"=> "Осталось 10 минут","title" => 'Apple MacBook Air (M1, 2020) 8 ГБ, 256 ГБ SSD, золотой', "my-bet" => "75000", "max-bet" => "75000", "snipe-bet" => "75000"),
    );
?>

<x-guest-layout>
            <h1 class="title">Корзина</h1>
            <div class="cart-item-container">
                @foreach ($basket as $item)
                <div class="cart-item">
                    <div class="thumbnail-wrapper">
                        <img src="img/images/item/macbook.jpg" height="160" width="170" alt="">
                    </div>
                    <div class="info-wrapper">
                        <div class="timer">
                            <span>{{ $item['status'] }}</span>
                        </div>
                        <a href="item">{{ $item['title'] }}</a>
                        <div class="button-wrapper">
                            <span>{{ $item['my-bet'] }}</span>
                            <button type="button" class="text-button max-bet">{{ $item['max-bet'] }}</button>
                            <button type="button" class="text-button snipe-bet">{{ $item['snipe-bet'] }}</button>
                        </div>
                    </div>
                    <hr>
                </div>
                @endforeach
            </div>
</x-guest-layout>
