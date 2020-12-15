<section id="loginFromWrapper" class="wrapper">
    <h2 class="title">Prisijungimas</h2>
    <form id="loginForm" name="loginForm" method="POST">
        <div class="formField">
            <label for="clientNr">Kliento Nr</label>
            <input type="text" class="loginInput" name="userNr" required>
        </div>
        <div class="formField">
            <label for="clientPass">Slaptažodis</label>
            <input type="password" class="loginInput" name="userPass" required>
        </div>
        <div class="formField">
            <span>Likti Prisijungus</span>
            <input type="checkbox" name="rememberUser">
        </div>
        <div class="formField">
            <input type="submit" class="loginButton" name="loginForm" value="Prisijungti">
        </div>
        <div class="formField">
            <a class="smallText" href="#">Pamiršote prisijungimo duomenis?</a>
        </div>
        <div class="formField">
            <p class="smallText">Neturite paskyros? Prašome registruotis - <a href="index.php?action=register">Registruotis</a></p>
        </div>
    </form>
</section>