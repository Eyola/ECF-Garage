<div class="menu">
    <input type="checkbox" id="hamburger" />
    <label id="hamburger-logo" for="hamburger">☰</label>
    <nav class="menu-burger">
        <a href="index.php">Accueil</a>
        <a href="vehicle.php">Voitures</a>
        <a href="commentary.php">Commentaires</a>
        <a href="#">Qui sommes nous ?</a>
        <?php
        if (isset($_SESSION['admin']) and $_SESSION['admin'] === true) { ?>
            <a href="gestion-utilisateurs.php">Gestion du personnel</a>
            <a href="gestion-voiture.php">Gestion voitures</a>
            <a href="?logout">Deconnexion</a>
            <?php
            if (isset($_GET['logout'])) {
                session_unset();
                header('Location:index.php');
            }
            ?>
            </form>

        <?php
        } else if (isset($_SESSION['user']) and $_SESSION['user'] === true) { ?>
            <a href="gestion-voiture.php">Gestion voitures</a>
            <a href="?logout">Deconnexion</a>
            <?php
            if (isset($_GET['logout'])) {
                session_unset();
                header('Location:index.php');
            }
            ?>
            </form>
        <?php
        } else { ?>
            <a href="connect.php">Se connecter</a>

        <?php
        } ?>
    </nav>
</div>

<header>
    <img src="img/Logo-Parrot.JPG" class="logo" alt="img not found" />
    <div class="search">
        <label for="site-search">Recherche&nbsp;:</label>
        <div>
            <input type="search" id="site-search" name="q" />
            <button>Chercher</button>
        </div>
    </div>
</header>

<nav class="menu-desktop">
    <a href="index.php">Accueil</a>
    <a href="vehicle.php">Voitures</a>
    <a href="commentary.php">Commentaires</a>
    <a href="#">Qui sommes nous ?</a>
    <?php
    if (isset($_SESSION['admin']) and $_SESSION['admin'] === true) { ?>
        <a href="gestion-utilisateurs.php">Gestion du personnel</a>
        <a href="gestion-voiture.php">Gestion voitures</a>
        <a href="?logout">Deconnexion</a>
        <?php
        if (isset($_GET['logout'])) {
            session_unset();
            header('Location:index.php');
        }
        ?>
        </form>

    <?php
    } else if (isset($_SESSION['user']) and $_SESSION['user'] === true) { ?>
        <a href="gestion-voiture.php">Gestion voitures</a>
        <a href="?logout">Deconnexion</a>
        <?php
        if (isset($_GET['logout'])) {
            session_unset();
            header('Location:index.php');
        }
        ?>
        </form>
    <?php
    } else { ?>
        <a href="connect.php">Se connecter</a>

    <?php
    } ?>


</nav>

<div class="carroussel">
    <div class="text-img">Garage V Parrot</div>
</div>