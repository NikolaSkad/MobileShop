<?php
    // request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['top_sale_submit'])){
            // call method addToCart
            $Card->addToCard($_POST['user_id'], $_POST['phone_id']);
        }
    }
?>
            <!--TopSale-->
            <section id="top-sale">
                <div class="container py-5">
                    <h4 class="font-rubik font-size-20">Najtrazeniji telefoni</h4>
                    <hr>
                    <!--Owl Carousel-->
                    <div class="owl-carousel owl-theme">
                        <?php foreach($best_phone as $item){ ?>
                        <div class="item py-2">
                            <div class="product font-rale">
                                <a href="<?php printf('%s?phone_id=%s', 'product.php', $item['phone_id']) ?>"><img src="<?php echo $item['item_image']?>" alt="a52"></a>
                                <div class="text-center">
                                    <h6><?php echo $item['model']?></h6>
                                    <div class="rating text-warning font-size-12">
                                        <span class="fas fa-trophy"></span>
                                        <span class="fas fa-trophy"></span>
                                        <span class="fas fa-trophy"></span>
                                        <span class="fas fa-trophy"></span>
                                    </div>
                                    <div class="price py-2">
                                        <span><?php echo $item['price'] ?? '0';?></span>
                                    </div>
                                    <form method="post">
                                        <input type="hidden" name="phone_id" value="<?php echo $item['phone_id'] ?? '1'; ?>">
                                        <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                        <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Dodaj u korpu!</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </section>