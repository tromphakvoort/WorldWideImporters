<?php $title = "Contact | World Wide Importers";
include("../templates/header.php"); ?>
<div class="container">
<div>
    <h1>Contact</h1>
    <p>Heb je een vraag of opmerking voor ons? Neem dan contact op via onderstaand formulier:</p>

    <form>
        <div class="form-group">
            <label for="FormControlInput1">E-mailadres:</label>
            <input type="email" class="form-control" id="FormControlInput1" placeholder="naam@voorbeeld.nl">
        </div>
        <div class="form-row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Voornaam:">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Achternaam:">
            </div>
        </div>
        <div class="form-group">
            <label for="FormControlTextarea1">Vraag of opmerking:</label>
            <textarea class="form-control" id="FormControlTextarea1" rows="3"></textarea>
        </div>
    </form>
    <button type="button" class="btn btn-primary">Verstuur</button>
</div>
        <?php include("../templates/footer.php"); ?>
