<?php
    $favorites = array(
        array("status"=> "Осталось 10 минут","title" => 'Apple MacBook Air (M1, 2020) 8 ГБ, 256 ГБ SSD, золотой', "bet" => "75000"),
        array("status"=> "Осталось 10 минут","title" => 'Apple MacBook Air (M1, 2020) 8 ГБ, 256 ГБ SSD, золотой', "bet" => "75000"),
        array("status"=> "Осталось 10 минут","title" => 'Apple MacBook Air (M1, 2020) 8 ГБ, 256 ГБ SSD, золотой', "bet" => "75000"),
        array("status"=> "Осталось 10 минут","title" => 'Apple MacBook Air (M1, 2020) 8 ГБ, 256 ГБ SSD, золотой', "bet" => "75000"),
    );
?>

<x-guest-layout>
    <h1 class="title">Избранное</h1>
    <section id="favorite-container">
        @foreach ($favorites as $item)
        <div class="favorite-item">
            <div class="thumbnail-wrapper">
                <img src="img/images/item/macbook.jpg" height="160" width="170" alt="">
            </div>
            <div class="info-wrapper">
                <div class="timer">
                    <span>{{ $item['status'] }}</span>
                    <span>{{ $item['bet'] }}</span>
                </div>
                <a href="/item">{{ $item['title'] }}</a>
                <div class="button-wrapper">
                    <button @click="makeBet" type="button" class="button">Сделать ставку</button>
                    <button type="button" class="white-button">Удалить</button>
                </div>
            </div>
            <hr>
        </div>
        @endforeach
    </section>
</x-guest-layout>
