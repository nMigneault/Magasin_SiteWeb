
<div class="product content-wrapper">
 
    <div id="overlay" onclick="hideOverlay()"></div>
    
    <a id="linkImageDetailProduit" href="public/imgs/largImgs/<?=$produit['img']?>" title="<?=$produit['name']?>">
    <img src="public/imgs/<?=$produit['img']?>" width="500" height="500" alt="<?=$produit['name']?>" onclick="afficheLargeImage()" /></a>

    <div>
        <h1 class="name"><?=$produit['name']?></h1>
        <?php
            if($produit['quantity'] > 0)
            {
        ?>
            <span class="price">
                &dollar;<?=$produit['price']?><br />
                <?=$produit['quantity']?> disponible</span>
            </span>
            <form action="index.php?page=vues/panier" method="post">
                    <input type="number" name="quantity" value="1" min="1" max="<?=$produit['quantity']?>" placeholder="Quantity" required>
                    <input type="hidden" name="product_id" value="<?=$produit['id']?>">
                    <input type="submit" value="Ajouter au panier">    
            </form>
            <div class="description">
                <?=$produit['desc']?>
            </div>
        <?php 
            }
            else
            {
        ?> 
            <div class="description">
            Ce produit n'est plus en inventaire
        </div>
        <?php }?>
    </div>
</div>
