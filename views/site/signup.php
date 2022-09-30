<h2>Регистрация нового пользователя</h2>
<h3><?= $message ?? ''; ?></h3>
<body class = "text-center" >
    <main class="form-signin">
    <form method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <div class="form-floating" >
            <input type="text" class="form-control" id="floatingInput" name="name">
            <label for="floatingInput">Имя </label>
        </div>
        <div class="form-floating" >
            <input type="text" class="form-control" id="floatingInput" name="login">
            <label for="floatingInput">Логин </label>
        </div>
        <div class="form-floating" >
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label>Пароль </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type ="submit" >Зарегистрироваться</button>
    </form>
    </main>
</body>
