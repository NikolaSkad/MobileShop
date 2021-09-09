<?php
    $phone_id = $_GET['phone_id']??1;
    foreach($product->getData() as $item):
        if($item['phone_id'] == $phone_id):
?>
<!--Product-->
    <section id="product" class="py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="<?php echo $item['item_image']?>" alt="iphone12" class="img-fluid">
                            <div id="btn" class="form-row pt-4 font-size-16 font-baloo">
                                <div id="col1" class="col">
                                    <button type="submit" class="btn btn-danger form-control">Nastavi kupovinu</button>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn color-second-bg text-white form-control">Dodaj u korpu</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 py-5">
                            <h5 class="font-baloo font-size-20"><?php echo $item['model']?></h5>
                            <small><?php echo $item['brand_id']?></small>
                            <div class="d-flex">
                                <div class="rating text-warning font-size-12">
                                    <span class="fas fa-trophy color-second"></span>
                                    <span class="fas fa-trophy color-second"></span>
                                    <span class="fas fa-trophy color-second"></span>
                                    <span class="fas fa-trophy color-second"></span>
                                    <span class="fas fa-trophy color-second"></span>
                                </div>
                                <a href="#" class="px-2 font-rale font-size-14">BEST CAMERA PHONE WINNER 2021</a>
                            </div>
                            <hr class="m-0">
                            <table class="my-3">
                                <tr class="font-rale font-size-14">
                                    <td>P.C.</td>
                                    <td class="font-size-16"><strike><?php echo ($item['price']+100)?>$</strike></td>
                                </tr>
                                <tr class="font-rale font-size-14">
                                    <td>Cena:</td>
                                    <td class="font-size-20 text-danger"><?php echo $item['price']?></td>
                                </tr>
                                <tr class="font-rale font-size-14">
                                    <td>Usteda:</td>
                                    <td class="font-size-16  text-danger">&nbsp 100$</td>
                                </tr>
                            </table>
                            <div id="policy">
                                <div class="d-flex">
                                   <div class="return text-center m-2">
                                       <div class="font-size-20 my-2 color-second">
                                            <span class="fas fa-shipping-fast border p-3 rounded-pill"></span>
                                       </div>
                                       <a href="#" class="font-rale font-size-12">Isporuka za <br> ceo svet</a>
                                   </div>
                                   <div class="return text-center m-2">
                                    <div class="font-size-20 my-2 color-second">
                                         <span class="fas fa-file-medical border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">2 godine garancije</a>
                                    </div>
                                    <div class="return text-center m-2">
                                        <div class="font-size-20 my-2 color-second">
                                            <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="#" class="font-rale font-size-12">Zamena u roku <br> od mesec dana</a>
                                    </div>   
                                </div>
                            </div>
                            <hr>
                            <div id="detalji" class="font-rale d-flex flex-column">
                                <small>Dostupno od Jula 2021. godine</small>
                                <small>Mobile Shop d.o.o.</small>
                                <small><i class="fas fa-map-marker-alt color-primary">&nbsp&nbspBeograd, Srbija</i></small>
                            </div>
                             <!-- size -->
                             <div class="size my-3">
                                <h6 class="font-baloo">Size :</h6>
                                <div class="d-flex justify-content-between w-75">
                                    <div class="font-rubik border p-2">
                                        <button class="btn p-0 font-size-14">4GB RAM</button>
                                    </div>
                                    <div class="font-rubik border p-2">
                                        <button class="btn p-0 font-size-14">6GB RAM</button>
                                    </div>
                                    <div class="font-rubik border p-2">
                                        <button class="btn p-0 font-size-14">8GB RAM</button>
                                    </div>
                                </div>
                            </div>
                        <!-- !size -->
                    </div>
                    <div id="product-description" class="col-12">
                        <h6 class="font-rubik">Product Description</h6>
                        <hr>
                        <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                        <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                    </div>
                </div>
            </section>



<?php
    endif;
    endforeach;
?>            