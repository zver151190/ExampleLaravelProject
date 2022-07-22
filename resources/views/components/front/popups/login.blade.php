<div id="loginPopup" class="overlay" onclick.self="closeModal()">

        <div class="popup popup--login">
            <button class="close-button" type="button" aria-label="Закрыть окно" onclick="closeModal()"></button>
            <form method="get" action="#">
                <p class="form-title">Вход в профиль</p>
                <input type="text" autocomplete="on" placeholder="E-mail или телефон" required>
                <a class="help-link" onclick="$registerActive = false">Зарегистрироваться</a>
                <input type="password" placeholder="Пароль" required>
                <a class="help-link" href="#" @click="remindPassword">Восстановить пароль</a>
                <span class="unsafe-pc">
                    <input type="checkbox" id="unsafe-pc" checked name="unsafe-pc" value="" required>
                    <label for="unsafe-pc">Чужой компьютер</label>
                </span>
                <button class="button" type="submit">Войти</button>
                <a class="white-button" href="#">Войти через Google</a>
                <a class="white-button" href="#">Войти через Facebook</a>
            </form>
        </div>

        <div class="popup popup--registration">
            <button class="close-button" type="button" aria-label="Закрыть окно" onclick="closeModal()"></button>
            <form method="get" action="#">
                <p class="form-title">Регистрация</p>
                <input type="email" autocomplete="on" placeholder="E-mail" required>
                <input type="telephone" autocomplete="on" placeholder="Телефон" required>
                <input type="password" placeholder="Пароль" required>
                <input type="password" placeholder="Пароль еще раз" required>
                <span class="no-robot">
                    <input type="checkbox" id="no-robot" checked name="no-robot" value="">
                    <label for="no-robot">Я не робот</label>
                </span>
                <button class="button" type="submit">Зарегистрироваться</button>
                <p>Уже есть акаунт?<a href="#" onclick="$registerActive = true">Войти</a></p>
            </form>
        </div>

</div>
