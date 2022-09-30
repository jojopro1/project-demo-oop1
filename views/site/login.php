<h2>Авторизация</h2>
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
    ?>
<body class = "text-center" >
    <main class="form-signin">
    <form method="post" >
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <div class="form-floating" >
            <input type="text" class="form-control" id="floatingInput" name="login">
            <label for="floatingInput">Логин </label>
        </div>
        <div class="form-floating" >
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword" >Пароль </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>
    </form>
    </main>
</body>
<?php endif;


