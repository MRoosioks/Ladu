<!doctype HTML>
<html>

<head>
    <title>Ladu</title>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="design.css"/>
    <style>
        #lisa-vorm {
            display: none;
        }
    </style>

</head>

<body>

    <?php foreach (message_list() as $message):?>
        <p class="message">
            <?= $message; ?>
        </p>
    <?php endforeach; ?>
    

    <div style="float: right;">
        <form method="post"  action="<?= $_SERVER['PHP_SELF']; ?>">
            <input type="hidden" name="action" value="logout">
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">
            <button type="submit" id="väljalogimine">Logi välja</button>
        </form>
    </div>

    <h1><img src="Icon.png" class="logo"/>Ladu</h1>
    
    <a href="<?= $_SERVER['PHP_SELF']; ?>?view=contact"><button class="contact">Kontakt</button></a>

    <p id="kuva-nupp">
        <button type="button">Kuva lisamise vorm</button>
    </p>

    <form id="lisa-vorm" method="post" action="<?= $_SERVER['PHP_SELF']; ?>">

        <input type="hidden" name="action" value="add">
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">

        <p id="peida-nupp">
            <button type="button">Peida lisamise vorm</button>
        </p>

        <table>
            <tr>
                <td>Nimetus</td>
                <td>
                    <input type="text" id="nimetus" name="nimetus">
                </td>
            </tr>
            <tr>
                <td>Kogus</td>
                <td>
                    <input type="number" id="kogus" name="kogus">
                </td>
            </tr>
        </table>

        <p>
            <button type="submit">Lisa kirje</button>
        </p>

    </form>

    <table id="ladu" border="1">
        <thead>
            <tr>
                <th>Nimetus</th>
                <th>Kogus</th>
                <th>Tegevused</th>
            </tr>
        </thead>

        <tbody>

        <?php
        foreach (model_load($page) as $rida): ?>

            <tr>
                <td>
                    <?=
                        htmlspecialchars($rida['nimetus']);
                    ?>
                </td>
                <td>
                    <form method="post" action="<?= $_SERVER['PHP_SELF'];?>">
                        <input type="hidden" name="action" value="update">
                        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'];?>">
                        <input type="hidden" name="id" value="<?= $rida['id'];?>">

                        <input type="number" id="kogus" name="kogus" value="<?= $rida['kogus']; ?>">
                        <button type="submit">Uuenda</button>
                    </form>
                </td>
                <td>

                    <form method="post" action="<?= $_SERVER['PHP_SELF'];?>">
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">
                        <input type="hidden" name="id" value="<?= $rida['id']; ?>">
                        <button type="submit">Kustuta rida</button>
                    </form>

                </td>
            </tr>

        <?php endforeach; ?>

        </tbody>
    </table>

    <script src="ladu.js"></script>
</body>

</html>