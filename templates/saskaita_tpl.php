<section id="saskaitaFormWrapper" class="wrapper">
    <h2 class="title">Nauja Sąskaita</h2>
    <form id="saskaitaForm" name="saskaitaForm" method="POST">
        <div class="formField">
            <label>Sąskaitos Nr</label>
            <input type="text" name="saskaitos_nr" class="loginInput">
        </div>
        <div class="formField">
            <label>Kliento Nr</label>
            <input type="text" name="kliento_nr" class="loginInput">
        </div>
        <div class="formField">
            <label>Gavėjas</label>
            <input type="text" name="gavejas" class="loginInput">
        </div>
        <div class="formField">
            <label>Mokėjimo Paskirtis</label>
            <input type="text" name="mokejimo_paskirtis" class="loginInput">
        </div>
        <div class="formField">
            <label>Kiekis</label>
            <input type="number" min="1" name="kiekis" class="loginInput">
        </div>
        <div class="formField">
            <label>Data</label>
            <input type="date" name="data" class="loginInput">
        </div>
        <div class="formField">
            <label>Suma</label>
            <input type="text" name="suma" class="loginInput">
        </div>
        <div class="formField">
            <input type="submit" class="loginButton" name="submitSaskaita" value="Sukurti Saskaita">
        </div>
    </form>
</section>