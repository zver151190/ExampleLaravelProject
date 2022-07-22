<?php
    $orders = array(
        array("status"=> "В пути по Японии","price" => "74 000 Р", "identificator" => "№ 2358965","title" => '[XX44]Windows11 or Windows10[ASUS GL752VW]Core i7-6700HQ/ новый товар SSD 240GB/GTX 960M/ память 16GB/Web камера /Office2019/BluRay', "bet" => "75000"),
        array("status"=> "В пути по Японии","price" => "74 000 Р", "identificator" => "№ 2358965","title" => '[XX44]Windows11 or Windows10[ASUS GL752VW]Core i7-6700HQ/ новый товар SSD 240GB/GTX 960M/ память 16GB/Web камера /Office2019/BluRay', "bet" => "75000"),
    );
?>

<x-guest-layout>
    <h1 class="title">Заказы</h1>
    <section class="tracking-container">
        @foreach ($orders as $item)
        <div class="tracking-item">
            <div class="thumbnail-wrapper">
                <div>
                    <img src="img/images/img-item.jpg" height="160" width="170" alt="">
                </div>
                <span>
                    <a href="item">{{ $item['title'] }}</a>
                    <span class="price">{{ $item['price'] }}</span>
                </span>
            </div>
            <div class="tracking-status">
                <span class="identificator">{{ $item['identificator'] }}</span>
                <span class="status">{{ $item['status'] }}</span>
                <button type="button" class="button tracking" @click="openList">Отследить</button>
                <button ref="dropdownButton" type="button" class="dropdown" @click="openList">
                    <svg width="30" height="22" viewBox="0 0 5 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.602 6.034L3.402 3.556L0.602 1.092L1.176 0.448L4.676 3.514L1.176 6.622L0.602 6.034Z" fill="#8C3E7D"/>
                    </svg>
                </button>
                <ul ref="dropdownList" class="dropdown-list">
                    <li>
                        <span class="date">01.01.21</span>
                        <span class="track-status">Лот выигран</span>
                    </li>
                    <li>
                        <span class="date">10.01.21</span>
                        <span class="track-status">Заказ обрабатывается</span>
                    </li>
                    <li>
                        <span class="date">21.01.21</span>
                        <span class="track-status">Передано в доставку</span>
                    </li>
                    <li>
                        <span class="date">02.02.21</span>
                        <span class="track-status">Заказ в пути по Японии</span>
                    </li>
                </ul>
            </div>
            <div>
                <table>
                    <tr>
                        <th>Дата покупки: </th>
                        <td>01.01.2022</td>
                    </tr>
                    <tr>
                        <th>Адрес доставки: </th>
                        <td>Россия, г.Владивосток, ул. Нейбута 10, кв. 13</td>
                    </tr>
                    <tr>
                        <th>Получатель: </th>
                        <td>Иванов Иван Иванович</td>
                    </tr>
                    <tr>
                        <th>Конт.телефон: </th>
                        <td>8 999 000 12 34</td>
                    </tr>
                    <tr>
                        <th>Дата доставки: </th>
                        <td>15.02.2022</td>
                    </tr>
                    <tr>
                        <th>Стоимость лота: </th>
                        <td>65 000р</td>
                    </tr>
                    <tr>
                        <th>Доставка: </th>
                        <td>5 000р</td>
                    </tr>
                    <tr>
                        <th>Номер заказа</th>
                        <td>№123456</td>
                    </tr>
                    <tr>
                        <th>Статус заказа: </th>
                        <td>В пути</td>
                    </tr>
                </table>
            </div>
            <hr>
        </div>
        @endforeach
    </section>
</x-guest-layout>
