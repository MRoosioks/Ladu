<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Konto registreerimine</title>
		<script type="text/javascript" src="register.js"></script>
		<link rel="stylesheet" type="text/css" href="design.css"/>
    </head>
    <body>

        <?php foreach (message_list() as $message):?>
            <p class="message">
                <?= $message; ?>
            </p>
        <?php endforeach; ?>

        <h1><img src="Icon.png" class="logo"/>Registreeri konto</h1>
        <a href="<?= $_SERVER['PHP_SELF']; ?>?view=contact"><button class="contact">Kontakt</button></a>

        <form name="form" onSubmit="return validate()" method="post" action="<?= $_SERVER['PHP_SELF']; ?>">

            <input type="hidden" name="action" value="register">
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">

            <table class="register-login">
                <tr>
                    <td>Kasutajanimi</td>
                    <td>
                        <input type="text" name="kasutajanimi" id="kasutajanimi">
                    </td>
					<td>
						<p id="message-username" class="alert"></p>
					</td>
                </tr>
                <tr>
                    <td>Parool</td>
                    <td>
                        <input type="password" name="parool">
                    </td>
					<td>
						<p id="message-password" class="alert"></p>
					</td>
                </tr>
				    <td>Korda parooli</td>
                    <td>
                        <input type="password" name="parooluuesti">
                    </td>
                </tr>
            </table>

            <p class="button">
                <button type="submit">Registreeri konto</button>
            </p>

        </form>
    </body>
</html>
