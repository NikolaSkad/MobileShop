<section id="card" class="py-3">
                <div class="container-fluid">
                    <h5 class="font-baloo font-size-2">Korpa</h5>

                    <!--shopping card items-->
                        <div class="row">
                            <div class="col-sm-9">
                                <?php
                                //ovaj forach vraca sve podatke iz tabele card
                                    foreach($product->getData('card') as $item):
                                        $card = $product->getProduct($item['phone_id']);
                                        array_map(function($item){
                                ?>
                                <div class="row border-top py-3 mt-3">
                                    <div class="col-sm-2">
                                        <img src="<?php echo $item['item_image'] ?? "./img/top-sale/iphone12.jpg"?>" alt="iPhone12"  width="100" height="100">
                                    </div>
                                    <div class="col-sm-8">
                                        <h5 class="font-baloo font-size-20"><?php echo $item['model'] ?? "phone"?></h5>
                                        <small>by <?php echo $item['brand_id'] ?? "phone"?></small>
                                        <div class="d-flex">
                                            <div class="rating text-warning font-size-12">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </div>
                                            &nbsp<a href="#">20,534 ocena</a>
                                        </div>
                                        <div class="d-flex pt-2">
                                            <!--<div class="d-flex font-rale w-25">
                                                <button class="qty-up border bg-light" data-id="pro"><i class="fas fa-angle-up"></i></button>
                                                <input type="text" data-id="pro" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                                <button data-id="pro" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                            </div>-->
                                            <button type="submit" class="btn font-baloo text-danger px-3 border-right">Obriši</button>
                                            <button type="submit" class="btn font-baloo text-danger px-3">Sačuvaj za kasnije</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 text-right">
                                        <div class="font-size-20 text-danger font-baloo">
                                            <span><?php echo $item["price"]?>$</span>
                                        </div>
                                    </div>                                    
                                <?php
                                    },$card);
                                    endforeach;
                                ?>
                            </div>
                    </div>
            </div>
</section>