
 <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title> <?=$title?></title>
            <link href="public/css/style.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css"> 
        </head>
        <body id="body">
            <header>
                <div class="content-wrapper">
                <h1>Bienvenue à la pépinière Labranche!</h1>
                    <nav>
                        <a href="index.php?page=vues/accueil">Accueil</a>
                        <a href="index.php?page=vues/produits">Produits</a>
                        <a href="index.php?page=vues/contact">Contact</a>
                        <a href="#" onclick="changeTheme()">Theme</a>
                    </nav>
                    <div class="link-icons">
                        <a href="index.php?page=vues/panier">
                            <i class="fas fa-shopping-cart"></i>
                            <span><?=$num_items?></span>
                        </a>
                    </div>
                </div>
            </header>
            <main>

