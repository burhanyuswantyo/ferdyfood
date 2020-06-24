<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="card">
                            <div class="card-header">
                                <h5>Product Detail</h5><br><br>
                                <!-- Page body start -->
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <!-- Product detail page start -->
                                            <div class="card product-detail-page">
                                                <div class="card-block">
                                                    <?php foreach ($product as $p) : ?>
                                                        <div class="row">
                                                            <div class="col-lg-5 col-xs-12">
                                                                <div class="port_details_all_img row">
                                                                    <div class="col-lg-12 m-b-15">
                                                                        <div id="big_banner">
                                                                            <div class="port_big_img">
                                                                                <img class="img img-fluid" src="<?= base_url() . '/assets/images/uploads/' . $p->image ?>" alt="Big_ Details">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7 col-xs-12 product-detail" id="product-detail">
                                                                <div class="row">
                                                                    <div>
                                                                        <div class="col-lg-12">
                                                                            <span class="txt-muted d-inline-block">Product Code: <a href="#!"> <?= $p->id_product ?> </a></span>
                                                                            <span class="f-right"> Stock : <a href="#!"> <?= $p->stock ?> </a> </span>
                                                                        </div>

                                                                        <div class="col-lg-12">
                                                                            <h4 class="pro-desc"><?= $p->name_product ?></h4>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <span class="text-primary product-price"><i class="icofont icofont-cur-dollar"></i>Rp. <?= number_format($p->price, 0, ',', '.') ?></span>
                                                                            <hr>
                                                                            <p><?= $p->information ?>
                                                                            </p>
                                                                            <hr>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                                <a href="<?= base_url('backend/product/index') ?>">
                                                                    <div class="btn btn-sm btn-danger">Kembali</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Product detail page end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>