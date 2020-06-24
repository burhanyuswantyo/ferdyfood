<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">

                    <!-- Page body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Basic Inputs Validation start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Edit Product</h5>
                                    </div>
                                    <div class="card-block">
                                        <?php foreach ($product as $p) : ?>
                                            <form id="main" method="post" action="<?= base_url() . 'backend/product/update' ?>">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Nama Produk</label>
                                                    <div class="col-sm-10">
                                                        <input type="hidden" class="form-control" name="id_product" id="id_product" value="<?= $p->id_product ?>">
                                                        <input type="text" class="form-control" name="name_product" id="name_product" value="<?= $p->name_product ?>">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Keterangan</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="information" name="information" value="<?= $p->information ?>">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Kategori</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="category" name="category" value="<?= $p->category ?>">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Harga</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="price" name="price" value="<?= $p->price ?>">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Stok</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="stock" name="stock" value="<?= $p->stock ?>">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Gambar</label>
                                                    <div class="col-sm-10">
                                                        <img src="<?= base_url() . '/assets/images/uploads/' . $p->image ?>" alt="No Image" class="img-fluid" style="width:100px; height:100px;">
                                                        <!-- <input type="file" class="" id="gambar" name="gambar" value="<?= $p->stock ?>"> -->
                                                        <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#uploadFotoModal">Ubah Foto</button>
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2"></label>
                                                    <div class="col-sm-6">
                                                        <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <!-- Basic Inputs Validation end -->