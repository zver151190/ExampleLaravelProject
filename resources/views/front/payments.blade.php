<?php
    $paymentsHistory = array(
        array("date"=> "17.01.2021","sum" => '4500', "comment" => "Пополнение счета с карты **** 7650"),
        array("date"=> "17.01.2021","sum" => '4500', "comment" => "Пополнение счета с карты **** 7650"),
        array("date"=> "17.01.2021","sum" => '4500', "comment" => "Пополнение счета с карты **** 7650"),
        array("date"=> "17.01.2021","sum" => '4500', "comment" => "Пополнение счета с карты **** 7650"),
        array("date"=> "17.01.2021","sum" => '4500', "comment" => "Пополнение счета с карты **** 7650"),
        array("date"=> "17.01.2021","sum" => '4500', "comment" => "Пополнение счета с карты **** 7650"),
    );
?>
<x-guest-layout>
    <h1 class="adresses-title">Платежи</h1>
    <div class="balance">
        <table>
            <tr>
            <th>Баланс:</th>
            <td>
                <span>85 000Р</span>
            </td>
            </tr>
            <tr>
            <th>Зарезервировано:</th>
            <td class="auction-wrapper">
                <span>74 000р</span>
                <span class="auction"
                ><a href="/pages/cart">1 аукцион</a></span
                >
            </td>
            </tr>
            <tr>
            <th>Остаток:</th>
            <td>
                <span>11 000р</span>
            </td>
            </tr>
        </table>
        <button type="button" class="button">Пополнить</button>
    </div>
    <hr>
    <div class="payments-history">
        <h2>История</h2>
        <table>
            @foreach ($paymentsHistory as $item)
                <tr>
                    <th>{{ $item['date'] }}</th>
                    <td>{{$item['sum'] }}</td>
                    <td class="good-name">
                        <a href="/item">
                            {{ $item['comment'] }}
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</x-guest-layout>


