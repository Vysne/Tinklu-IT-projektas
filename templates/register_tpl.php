<section id="regsiterFormWrapper" class="wrapper">
    <h2 class="title">Registracija</h2>
    <form id="registerForm" name="registerForm" method="POST">
        <div class="formField">
            <p id="errorText"><?php echo $errorMessage; ?></p>
        </div>
        <div class="formField">
            <label for="userName">Vardas</label>
            <input type="text" name="userName" class="loginInput">
        </div>
        <div class="formField">
            <label for="userSurname">Pavardė</label>
            <input type="text" name="userSurname" class="loginInput">
        </div>
        <div class="formField">
            <label for="userPass">Slaptažodis</label>
            <input type="password" name="userPass" class="loginInput">
        </div>
        <div class="formField">
            <label for="userEmail">El. Paštas</label>
            <input type="email" name="userEmail" class="loginInput">
        </div>
        <div class="formField">
            <label for="userBankNr">Banko Sąs Nr.</label>
            <input type="text" name="userBankNr" class="loginInput">
        </div>
        <div class="formField">
            <label for="userAddress">Adresas</label>
            <input type="text" name="userAddress" class="loginInput">
        </div>
        <div class="formField">
            <input type="submit" class="loginButton" name="registerButton" value="Registruotis">
        </div>
        <div class="formField">
            <p class="smallText">Jau turite paskyrą? Tuomet prisijunkite - <a href="index.php?action=login">Prisijungti</a></p>
        </div>
    </form>
</section>