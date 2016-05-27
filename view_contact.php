<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Kontakt</title>
		<script type="text/javascript" src="register.js"></script>
		<link rel="stylesheet" type="text/css" href="design.css"/>
    </head>
    <body>

        <h1><img src="Icon.png" class="logo"/>Kontakt</h1>


        <input type="hidden" name="action" value="contact">
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">

        <ul class="register-login" id="contact">
			<li>Nimi: Madis Roosioks</li>
            <li>Tel nr: 53499624</li>
			<li>E-mail: madis.roosioks@itcollege.ee</li>          
		</ul>
            
        </form>
    </body>
</html>
