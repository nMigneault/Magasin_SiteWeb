
<div class="products content-wrapper">
    <h1>Nos produits</h1>
    <div class="products-wrapper">
        <?php foreach ($produits as $produit): ?>
            <a href="index.php?page=vues/produit&id=<?=$produit['id']?>" class="product">
                <img src="public/imgs/<?=$produit['img']?>" width="200" height="200" alt="<?=$produit['name']?>">
                <span class="name"><?=$produit['name']?>
                <span class="price">
                    &dollar; <?=$produit['price']?>
                    <br />
                    <?=$produit['quantity']?> disponible</span>
                </span>
            </a>
        <?php endforeach; ?>
    </div>
</div>
