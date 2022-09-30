<header>
    <a>Сотрудники по подразделениям</a>
    <a>Сотрудники по составу</a>
    <a>Возраст сотрудников</a>
</header>

<hr>

<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
?>

<body class="text-center">
    <table>
        <tr>
            <th>Администрация</th>
        </tr>
    </table>
    <table>
        <tr>
            <th>Бухгалтерия</th>
        </tr>
    </table>
    <table>
        <tr>
            <th>Преподавательский состав</th>
        </tr>
    </table>
</body>

<footer>УП 05 ПнСС, 2022</footer>

<?php endif;