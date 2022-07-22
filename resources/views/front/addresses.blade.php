<?php
    $adresses = array(
       "Ул.Пушкина, д.13, кв.14",
       "Ул.Крылова, д.1, кв.22",
       "Ул.Гоголя, д.211, кв.666",
       "Ул.Зощенко, д.1, кв.1234");
?>

<x-guest-layout>
    <h1 class="adresses-title">Адреса доставки</h1>
    @foreach ($adresses as $item)
        <span class="adress-row">
        <p> {{ $item }} </p>
        <button type="button" class="white-button">Удалить</button>
        <hr>
        </span>
    @endforeach
    <button type="button" class="button">Добавить адрес</button>
</x-guest-layout>
