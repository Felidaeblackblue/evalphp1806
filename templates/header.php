<header>
    <nav>
        <div>
            <ul class="liste">
                <li></li><a href="index.php">Accueil</a></li>
                <li><a href="page2.php">Voyages</a></li>
                
                <?php if (isset($_SESSION['isConnected'])) : ?> 
                   <li>Hello <?= ucfirst($_SESSION['pseudo']);?></li>
                   <li><a href="controllers\deconnexion.php">Deconnexion</a></li>
                <?php  else : ?>
                    <li><a href="pageconnect.php">Connexion</a></li>
                <?php endif ?>
                <li><a href="secret.php">Destination mystère</a></li>
            </ul>
        </div>
    </nav>
</header> 


 


