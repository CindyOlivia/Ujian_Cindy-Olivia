<h2><?php echo $judul; ?></h2>
<hr>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2 bg-success">
                <div class="card-body">
                    <a href=<?= base_url('admin/hardware'); ?>>
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-md font-weight-bold text-white text-uppercase mb-1">Aset</div>
                                <div class="h1 mb-0 font-weight-bold text-white">
                                    <?php
                                    echo $hardware;
                                    ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-desktop fa-3x text-primary"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4" style="<?php if ($_SESSION["user"]["username"] != "admin") echo "display: none;"; ?>">
            <div class="card border-left-success shadow h-100 py-2 bg-warning">
                <div class="card-body">
                    <a href=<?= base_url('admin/kategori'); ?>>
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-md font-weight-bold text-white text-uppercase mb-1">Kategori</div>
                                <div class="h1 mb-0 font-weight-bold text-white">
                                    <?php
                                    echo $kategori;
                                    ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-gears fa-3x text-danger"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4" style="<?php if ($_SESSION["user"]["username"] != "admin") echo "display: none;"; ?>">
            <div class="card border-left-warning shadow h-100 py-2 bg-primary">
                <div class="card-body">
                    <a href=<?= base_url('admin/pegawai'); ?>>
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-md font-weight-bold text-white text-uppercase mb-1">Pegawai</div>
                                <div class="h1 mb-0 font-weight-bold text-white">
                                    <?php
                                    echo $pegawai;
                                    ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-users fa-3x text-success"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4" style="<?php if ($_SESSION["user"]["username"] != "admin") echo "display: none;"; ?>">
            <div class="card border-left-primary shadow h-100 py-2 bg-danger">
                <div class="card-body">
                    <a href=<?= base_url('admin/departemen'); ?>>
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-md font-weight-bold text-white text-uppercase mb-1">Departemen</div>
                                <div class="h1 mb-0 font-weight-bold text-white">
                                    <?php
                                    echo $departemen;
                                    ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-briefcase fa-3x text-warning"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>