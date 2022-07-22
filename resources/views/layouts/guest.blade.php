<!DOCTYPE html>
<html>
<x-front.head title="IziBuy"></x-front.head>
<body>
    <div class="wrapper">
      <x-front.sidebar></x-front.sidebar>
      <div class="main-content">
        <x-front.header></x-front.header>
        <main>
            {{ $slot }}
        </main>
        <x-front.popups.login></x-front.popups.login>
        <x-front.footer></x-front.footer>
      </div>
    </div>
</body>
</html>
