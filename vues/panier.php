<div class="panier content-wrapper">
    <h1>Votre panier</h1>
    <p id='livraison'></p>
    
    <form action="index.php?page=vues/panier" method="post">
        <table>
            <thead>
                <tr>
                    <td colspan="2">Produits</td>
                    <td>Prix</td>
                    <td>Quantité</td>
                    <td>Total</td>
                </tr>
            </thead>
            <tbody>

                <?php 
                    if (empty($produits)) : 
                ?>
                    <tr>
                        <td id="note" colspan="5" style="text-align:center;">Vous n'avez aucun produits dans votre panier</td>
                    </tr>
                <?php 
                    else : 
                ?>
                    <?php 
                        foreach ($produits as $produit) : 
                    ?>
                            <tr>
                                <td class="img">
                                    <a href="index.php?page=vues/produit&id=<?= $produit['id'] ?>">
                                        <img src="public/imgs/<?= $produit['img'] ?>" width="50" height="50" alt="<?= $produit['name'] ?>">
                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?page=vues/produit&id=<?= $produit['id'] ?>"><?= $produit['name'] ?></a>
                                    <br>
                                    <a href="index.php?page=vues/panier&remove=<?= $produit['id'] ?>" class="remove" onclick="rapelerLivraison()">Retirer</a>
                                </td>
                                <td class="price">&dollar;<?= $produit['price'] ?></td>
                                <td class="quantity">
                                    <input type="number" name="quantity-<?= $produit['id'] ?>" value="<?= $produits_dans_panier[$produit['id']] ?>" min="1" max="<?= $produit['quantity'] ?>" placeholder="Quantity" required>
                                </td>
                                <td class="price">&dollar;<?= $produit['price'] * $produits_dans_panier[$produit['id']] ?></td>
                            </tr>
                    <?php 
                        endforeach; 
                     ?>
                <?php 
                    endif; 
                ?>
            </tbody>
        </table>
        <div class="subtotal">
            <span class="text">Sous Total</span>
            <span class="price">&dollar;<?= $subtotal ?></span>
        </div>
        <div class="buttons">
            <input type="submit" value="Mettre à jour" name="update" >
            <input type="submit" value="Commander" name="commander" >
        </div>
    </form>

</div>