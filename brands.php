<?php include('header.php')?>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-3 mx-auto">
            <!-- List group-->
            <ul class="list-group shadow">
                <!-- list group item-->
                <?php foreach($brands as $item){ ?>
                <li class="list-group-item">
                    <!-- Custom content-->
                    <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                        <div class="media-body order-2 order-lg-1">
                            <h5 class="mt-0 font-weight-bold mb-2"><?php echo $item["name"]?></h5>
                        </div><a href="<?php printf('%s?brand_id=%s', './phones.php', $item['brand_id']) ?>"><img src="<?php echo $item['brnad_image']?>" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2"></a>
                    </div> <!-- End -->
                    </li> <!-- End -->
                <?php }?>
            </ul>
        </div>
    </div>
</div>


<?php include('footer.php')?>