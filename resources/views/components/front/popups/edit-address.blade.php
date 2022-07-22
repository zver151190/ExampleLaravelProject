<div class="overlay" id="editAdress">
    <div class="popup popup--adress-edit">
        <p>Редактировать адрес</p>
        <button class="close-button" type="button" aria-label="Закрыть окно"></button>
        <form method="post" action="#">
        <select>
            <option value="Russia" selected>Россия</option>
            <option value="China">China</option>
            <option value="USA">USA</option>
        </select>
        <input class="index" type="text" placeholder="Индекс" autocomplete="on">
        <input class="city" type="text" placeholder="Город" autocomplete="on">
        <input class="street" type="text" placeholder="Улица" autocomplete="on">
        <input class="building" type="text" placeholder="Дом/Корпус/Строение" autocomplete="on">
        <input class="apartment" type="text" placeholder="Квартира" autocomplete="on">
        <button type="submit"  class="button">Сохранить</button>
        <button type="reset" class="reset-button white-button">Отменить</button>
        </form>
    </div>
</div>
