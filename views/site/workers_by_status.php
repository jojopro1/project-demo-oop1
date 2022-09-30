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
            <th>Профессорско-преподавательский</th>
        </tr>
    </table>
    <table>
        <tr>
            <th>Учебно-вспомогательный</th>
        </tr>
    </table>
    <table>
        <tr>
            <th>Административно-хозяйственный</th>
        </tr>
    </table>
</body>
<footer>УП 05 ПнСС, 2022</footer>
<?php endif;