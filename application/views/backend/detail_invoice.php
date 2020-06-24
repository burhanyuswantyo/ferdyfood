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
                                            <h5>Detail Invoice Pemesanan Product </h5><br><br>
                                            <button class="btn btn-sm btn-primary mb-3">No. Invoice : <?= $invoice->id ?></button>
                                        </div>
                                        <div class="card-block">
                                            <div class="table-responsive">
                                                <div class="table-content">
                                                    <div class="project-table">
                                                        <table id="e-product-list" class="table table-striped dt-responsive nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th>Id</th>
                                                                    <th>Nama Produk</th>
                                                                    <th>Jumlah Pemesanan</th>
                                                                    <th>Harga Satuan</th>
                                                                    <th>Subtotal</th>

                                                                </tr>
                                                            </thead>
                                                            <?php
                                                            $total = 0;
                                                            foreach ($pesanan as $psn) :
                                                                $subtotal = $psn->qty * $psn->price;
                                                                $total += $subtotal;
                                                            ?>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><?= $psn->id_product ?></td>
                                                                        <td><?= $psn->name_product ?></td>
                                                                        <td><?= $psn->qty ?></td>
                                                                        <td>Rp. <?= number_format($psn->price, 0, ',', '.') ?></td>
                                                                        <td>Rp. <?= number_format($subtotal, 0, ',', '.') ?></td>

                                                                    </tr>
                                                                </tbody>
                                                            <?php endforeach; ?>
                                                            <tr>
                                                                <td colspan="4" mt="3" align="right">Grand Total</td>
                                                                <td align="right">Rp. <?= number_format($total, 0, ',', '.') ?> </td>
                                                            </tr>
                                                        </table>
                                                        <a href="<?= base_url('backend/invoice/index') ?>"><div class="btn btn-sm btn-danger">Kembali</div></a>
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