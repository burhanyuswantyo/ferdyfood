<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <!-- Page body start -->
                        <div class="page-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Product list card start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Product List</h5><br><br>
                                            <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_product"><i class="fas fa-plus fa-sm"></i>Tambah Produk</button>
                                        </div>
                                        <div class="card-block">
                                            <div class="table-responsive">
                                                <div class="table-content">
                                                    <div class="project-table">
                                                        <table id="e-product-list" class="table table-striped dt-responsive nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Image</th>
                                                                    <th>Product Name</th>
                                                                    <th>Information</th>
                                                                    
                                                                    <th>Price</th>
                                                                    <th>Stock</th>
                                                                    <th colspan="3">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <?php $no = 1;
                                                            foreach ($sosis as $s) : ?>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><?= $no++ ?></td>
                                                                        <td class="pro-list-img">
                                                                            <img src="<?= base_url() . '/assets/images/uploads/' . $s->image ?>" class="img-fluid" style="width:100px; height:100px;">
                                                                        </td>
                                                                        <td class="pro-name"><?= $s->name_product ?></td>
                                                                        <td><?= $s->information ?></td>
                                                                        
                                                                        <td>Rp. <?= number_format($s->price, 0, ',', '.') ?></td>
                                                                        <td>
                                                                            <label class="text-danger"><?= $s->stock ?></label>
                                                                        </td>

                                                                        <td>
                                                                            <?= anchor('backend/product/detail/' . $s->id_product, ' <div class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail"><i class="fas fa-search-plus"></i></div>') ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= anchor('backend/product/edit/' . $s->id_product, ' <div class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fas fa-edit"></i></div>') ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= anchor('backend/product/hapus/' . $s->id_product, '<div class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fas fa-trash"></i></div>') ?>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            <?php endforeach; ?>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product list card end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="tambah_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url() . 'backend/product/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <input type="text" name="name_product" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" name="information" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control" name="category">
                                        <option>nugget</option>
                                        <option>kentang</option>
                                        <option>bakso</option>
                                        <option>sosis</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="text" name="price" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Stok</label>
                                    <input type="text" name="stock" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Gambar</label><br>
                                    <input type="file" name="image" class="form-control">
                                </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>