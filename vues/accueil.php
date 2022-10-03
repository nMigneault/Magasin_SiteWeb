<div class="featured">
    <h2>Les essentiels</h2>
    <p>pour votre jardin!</p>
</div>
<div class="recentlyadded content-wrapper">
    <h2>Nouvel arrivage</h2>
    <div class="products">
        <?php 
            foreach ($produit_nouvel_ajout as $produit) : 
        ?>
            <a href="index.php?page=vues/produit&id=<?= $produit['id'] ?>" class="product">
                <img src="public/imgs/<?= $produit['img'] ?>" width="200" height="200" alt="<?= $produit['name'] ?>">
                <span class="name"><?= $produit['name'] ?> 
                <span class="price">
                    &dollar;<?= $produit['price'] ?><br />
                    <?=$produit['quantity']?> disponible</span>
                </span>
            </a>
        <?php 
            endforeach; 
        ?>
    </div>
</div>