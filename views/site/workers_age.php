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
                <th>Сотрудники</th>
            </tr>
        </table>

        <table>
            <tr>
                <th>Возраст</th>
            </tr>
        </table>

        <h5>Средний возраст сотрудников</h5>
        <h5>Самый младшйи сотрудник</h5>
        <h5>Самый старший сотрудник</h5>
        <h5>Всего сотрудников</h5>
    </body>
<footer>УП 05 ПнСС, 2022</footer>
<?php endif;