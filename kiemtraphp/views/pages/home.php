<?php
include_once('../layout/header.php');
include_once('../layout/banner-category.php');

include_once('../../model/product.php');
$category_field = category::getList();
?>
<div class="container">
    <?php foreach ($category_field as $category) { ?>
        <?php if ($category->parent_id !==  null) continue; ?>
        <div class="row" style="margin-top: 30px;" id="category_<?= $category->id ?>">
            <!-- block  host deals -->
            <?php if ($category->banner !== null) { ?>
                <div class="text-center">
                    <a href="<?= $category->url_banner ?>" style="width: 100%">
                        <img style="width: 100%;" src="<?= $category->banner ?>" alt="<?= $category->name ?> ads banner">
                    </a>
                </div>
            <?php } ?>
            <div class="block block-hot-deals">
                <div class="block-head">
                    <div class="block-title">
                        <div>
                            <div>
                                <img style="width: 48px;" src="<?= $category->image ?>" alt="<?= $category->name ?> icon">
                            </div>
                            <span class="" style="display:block; color: #FF7E7E; font-weight: bold; text-align: center;"><?= $category->name ?></span>
                        </div>
                        <a class="button-radius view_more" href="<?='http://localhost/kiemtraphp/views/pages/product_of_category.php?category='.$category->id?>" title="View all" style="color: #FF7E7E;">View all<span class="icon"></span></a>
                    </div>
                </div>
                <div class="block-inner">
                    <ul class="products kt-owl-carousel" data-margin="20" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                        <?php
                            $products = product::getListByCategoryId($category->id);
                        ?>
                        <?php foreach ($products as $product) { ?>
                            <!-- product -->
                            <li class="product ">
                                <div class="product-container">
                                    <div class="product-left">
                                        <div class="product-thumb">
                                            <a class="product-img" href="<?='http://localhost/kiemtraphp/views/pages/product_detail.php?product='.$product->id?>">

                                                <img src="<?=$product->images[0]?>" alt="<?=$product->name?>"></a>
                                            <a href="" class="btn-quick-view">View</a>
                                        </div>
                                        <div class="product-status">
                                            <span class="sale" style="background-color: red ;"><?=$product->deal?>%</span>
                                        </div>
                                    </div>
                                    <div class=" product-right">
                                        <div class="product-name">
                                            <a title="View detail" href="<?='http://localhost/kiemtraphp/views/pages/product_detail.php?product='.$product->id?>"><?=$product->name?></a>
                                        </div>
                                        <div class="price-box">
                                            <span class="product-price" style="color: red;">
                                                <?=number_format($product->price*(100-$product->deal)/100)?>
                                                <span class="text-primary" style="font-size: 12px; color: red">VND</span>
                                            </span>
                                            <span class="product-price-old">
                                                <?=number_format($product->price)?>
                                                <span class="text-primary" style="font-size: 12px; color: grey">VND</span>
                                            </span>
                                        </div>
                                        <div style="overflow: auto">
                                            <div class="deal_c" style="color: #FF7E7E;">
                                                <span>To 2019-12-31 15:59:00 </span>
                                            </div>
                                            <div class="sale_amourt is_active" title="Total 30 user has bought.If reach to , this deal will be approved">
                                                <span>30</span>/<span>100</span>
                                                <span class="fa fa-user"></span>
                                            </div>
                                        </div>
                                        <div class="product-button" style="padding: 2px;">
                                            <a class="button-radius btn-add-cart" href="<?='http://localhost/kiemtraphp/views/pages/product_detail.php?product='.$product->id?>" title="Add to Cart">Buy<span class="icon"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                        <!-- end product -->
                    </ul>
                </div>
            </div>
            <!-- ./block hot deals -->
        </div>
    <?php } ?>

</div>
<?php
include_once('../layout/footer.php');
?>