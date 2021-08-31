<?php
    $best_phone = $product->getData();
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
                                    <button type="submit" class="btn btn-warning font-size-12">Dodaj u korpu!</button>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </section>