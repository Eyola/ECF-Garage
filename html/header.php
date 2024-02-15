<div class="menu">
    <input type="checkbox" id="hamburger" />
    <label id="hamburger-logo" for="hamburger">☰</label>
    <nav class="menu-burger">
        <a href="../index.php">Accueil</a>
        <a href="../views/carFormView.php">Voitures</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
        <a href="#">Qui sommes nous ?</a>
        <a href="#">Se connecter</a>
    </nav>
</div>

<header>
    <img src="/img/Logo Parrot.JPG" class="logo" />
    <div class="search">
        <label for="site-search">Recherche&nbsp;:</label>
        <div>
            <input type="search" id="site-search" name="q" />
            <button>Chercher</button>
        </div>
    </div>
</header>

<nav class="menu-desktop">
    <a href="../index.php">Accueil</a>
    <a href="/html/vehicle.php">Voitures</a>
    <a href="/html/commentary.php">Commentaires</a>
    <a href="#">Qui sommes nous ?</a>
    <?php
    if (isset($_SESSION['admin']) and $_SESSION['admin'] === true) { ?>
        <a href="../views/userFormView.php">Gestion du personnel</a>
        <a href="../views/carFormView.php">Gestion voitures</a>
        <a href="?logout">Log out</a>
        <?php
        if (isset($_GET['logout'])) {
            session_unset();
            header('Refresh:0');
        }
        ?>
        </form>

    <?php
    } else if (isset($_SESSION['user']) and $_SESSION['user'] === true) { ?>
        <a href="../views/carFormView.php">Gestion voitures</a>
        <a href="?logout">Log out</a>
        <?php
        if (isset($_GET['logout'])) {
            session_unset();
            header('Refresh:0');
        }
        ?>
        </form>
    <?php
    } else { ?>
        <a href="/html/connect.php">Se connecter</a>

    <?php
    } ?>


</nav>

<section class="carroussel">
    <div class="text-img">Garage V Parrot</div>
</section>