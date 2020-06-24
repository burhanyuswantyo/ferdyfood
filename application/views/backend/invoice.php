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
                                            <h5>Invoice Pemesanan Product </h5><br><br>
                                        </div>
                                        <div class="card-block">
                                            <div class="table-responsive">
                                                <div class="table-content">
                                                    <div class="project-table">
                                                        <table id="e-product-list" class="table table-striped dt-responsive nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th>id</th>
                                                                    <th>Nama Pemesan</th>
                                                                    <th>Alamat Pengiriman</th>
                                                                    <th>Tanggal Pemesanan</th>
                                                                    <th>Batas Pembayaran</th>
                                                                    <th colspan="3">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <?php $no = 1;
                                                            foreach ($invoice as $inv) : ?>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><?= $no++ ?></td>

                                                                        <td><?= $inv->nama ?></td>
                                                                        <td><?= $inv->alamat ?></td>
                                                                        <td><?= $inv->tgl_pesan ?></td>
                                                                        <td><?= $inv->batas_bayar ?></td>

                                                                        <td>
                                                                            <?= anchor('backend/invoice/detail/' . $inv->id, 
                                                                            '<div class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail">
                                                                            <i class="fas fa-search-plus"></i></div>') ?>
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