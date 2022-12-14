<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <?php include("modules/head.php") ?>
<body>

    <?php include("modules/header.php"); ?>

    <main>
        <h1>Abonnez-vous</h1>
        <form action="treatment/subscribe.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="email">Email</label>
                <input id="email" type="email" name="email" required />
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input id="password" type="password" name="password" required />
            </div>
            <div>
            <label for="lastname">Nom</label>
                <input id="lastname" type="text" name="lastname" required />
            </div>
            <div>
                <label for="firstname">Prénom</label>
                <input id="firstname" type="text" name="firstname" required />
            </div>
            <div>
                <label for="birthdate">Date de naissance</label>
                <input id="birthdate" type="date" name="birthdate" />
            </div>
            <div>
                <label for="address">Adresse</label>
                <input id="address" type="text" name="address" required>
            </div>
            <div>
                <label for="postal">Code postal</label>
                <input id="postal" type="text" name="postal" pattern="[0-9]{5}" required />
            </div>
            <div>
                <label for="city">Ville</label>
                <input id="city" type="text" name="city" required>
            </div>
            <div>
                <p>Genre</p>
                <select name="genre">
                    <option value="none" selected>Non renseigné</option>
                    <option value="man">Homme</option>
                    <option value="woman">Femme</option>
                </select>
            </div>
            <div>
                <label for="picture">Photo</label>
                <input id="picture" type="file" name="picture" accept="image/png, image/jpeg" />
            </div>
            <div>
                <label for="color">Couleur préférée</label>
                <input id="color" type="color" name="color">
            </div>
            <button type="submit">
                <p>S'incrire</p>
                <i class="icon-arrow-right"></i>
            </button>
        </form>
    </main>

    <?php include("modules/footer.php"); ?>

</body>
</html>