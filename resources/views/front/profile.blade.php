<x-guest-layout>
    <h1 class="profile-title">Личная информация</h1>
    <form class="profile-form" method="post" action="#">
    <fieldset>
        <input type="text" placeholder="Фамилия" />
        <input type="text" placeholder="Имя" />
        <input type="text" placeholder="Отчество" />
    </fieldset>
    <fieldset>
        <input type="email" placeholder="E-mail" />
        <input type="telephone" placeholder="Моб.телефон" />
    </fieldset>
    <input type="password" placeholder="Пароль" />
    <buton id="change-password-link" class="text-button">Сменить пароль</buton>
    <hr />
    <button type="submit">Сохранить</button>
    </form>
    <x-front.remindpass-popup></x-front.remindpass-popup>
    <script src="{{ asset('js/profile.js') }}"></script>
</x-guest-layout>
