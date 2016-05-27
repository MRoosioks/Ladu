<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Logi sisse</title>
		<link rel="stylesheet" type="text/css" href="design.css"/>
    </head>
    <body>

        <?php foreach (message_list() as $message):?>
            <p class="message">
                <?= $message; ?>
            </p>
        <?php endforeach; ?>

        <h1><img src="Icon.png" class="logo"/>Logi sisse</h1>
        <a href="<?= $_SERVER['PHP_SELF']; ?>?view=contact"><button class="contact">Kontakt</button></a>

        <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">

            <input type="hidden" name="action" value="login">
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">

            <table class="register-login">
                <tr>
                    <td>Kasutajanimi</td>
                    <td>
                        <input type="text" name="kasutajanimi" required>
                    </td>
                </tr>
                <tr>
                    <td>Parool</td>
                    <td>
                        <input type="password" name="parool" required>
                    </td>
                </tr>
            </table>

            <p class="button">
                <button type="submit">Logi sisse</button> või <a href="<?= $_SERVER['PHP_SELF']; ?>?view=register">loo konto</a>
            </p>

        </form>
    </body>
</html>

