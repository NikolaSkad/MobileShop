<?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['delete_card_submit'])){
            $deletedrecord = $Card->deleteCard($_POST['phone_id']);
        }
    }


?>

<section id="card" class="py-3">
                <div class="container-fluid w-7">
                    <h5 class="font-baloo font-size-20">Korpa</h5>

                    <!--shopping card items-->
                        <div class="row">
                            <div class="col-sm-9">
                                <?php
                                //ovaj forach vraca sve podatke iz tabele card
                                    foreach($product->getData('card') as $item):
                                        $card = $product->getProduct($item['phone_id']);
                                        $subTotal[] = array_map(function($item){
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
                                            <form method="post">
                                                <input type="hidden" value="<?php echo $item['phone_id'] ?? 0; ?>" name="phone_id">
                                                <button type="submit" name="delete_card_submit" class="btn font-baloo text-danger px-3 border-right">Obriši</button>
                                            </form>
                                            <button type="submit" class="btn font-baloo text-danger px-3">Sačuvaj za kasnije</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 text-right">
                                        <div class="font-size-20 text-danger font-baloo">
                                            <span><?php echo $item["price"]?>$</span>
                                        </div>
                                    </div>                                    
                                <?php
                                    return $item['price'];
                                    },$card);
                                    endforeach;
                                ?>
                            </div>

                            <div id="ukupnoNaruceno" class="col-sm-3">
                                <div class="sub-total border text-center mt-2">
                                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Ostvarili ste pravo na besplatnu pošiljku!</h6>
                                    <div class="border-top py-4">
                                        <h5 class="font-baloo font-size-20">Ukupno (<?php echo isset($subTotal)?count($subTotal):0?>) : &nbsp;<span class="text-danger" id="ukupnaCena"><?php echo isset($subTotal) ? $Card->getSum($subTotal) : 0?>$</span></h5>
                                        <button type="submit" class="btn btn-warning mt-3">Potvrdi kupovinu!</button>
                                    </div>  
                                </div>
                            </div>
                    </div>
            </div>
</section>