<section id="regsiterFormWrapper" class="wrapper">
    <h2 class="title">Registracija</h2>
    <form id="registerForm" name="registerForm" method="POST">
        <div class="formField">
            <label for="userName">Vardas</label>
            <input type="text" name="vardas" class="loginInput">
        </div>
        <div class="formField">
            <label for="userSurname">Pavardė</label>
            <input type="text" name="pavarde" class="loginInput">
        </div>
        <div class="formField">
            <label for="userPass">Slaptažodis</label>
            <input type="password" name="slaptazodis" class="loginInput">
        </div>
        <div class="formField">
            <label for="userEmail">El. Paštas</label>
            <input type="email" name="el_pastas" class="loginInput">
        </div>
        <div class="formField">
            <label for="userBankNr">Banko Sąs Nr.</label>
            <input type="text" name="banksas_nr" class="loginInput">
        </div>
        <div class="formField">
            <label for="userAddress">Adresas</label>
            <input type="text" name="adresas" class="loginInput">
        </div>
        <div class="formField">
            <input type="submit" class="loginButton" name="registerButton" value="Registruotis">
        </div>
    </form>
</section>