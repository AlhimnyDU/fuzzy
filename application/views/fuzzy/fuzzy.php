<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fuzzy</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- uPlot -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/uplot/uPlot.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo base_url() ?>assets/index3.html" class="brand-link">
                <img src="<?php echo base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Fuzzy Logic</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Alhimny Dwinata Utama (152017130)
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Sholahuddin (152017124)
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Metode Fuzzy</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Masukkan Data</h3>
                                </div>
                                <div class="card-body">
                                    <form action="<?php echo site_url('Fuzzy/input') ?>" method="post" enctype="multipart/form-data">
                                        <table class="table table-bordered">
                                            <thead>
                                                <th colspan="2" align="center"><label for="">Diketahui</label></th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><label for="">Kebutuhan Barang</label></td>
                                                    <td><label for="">Nilai</label></td>
                                                </tr>
                                                <tr>
                                                    <td>Permintaan Maximal (naik)</td>
                                                    <td><input type="number" class="form-control" name="p_naik" required></td>
                                                </tr>
                                                <tr>
                                                    <td>Permintaan Minimal (turun)</td>
                                                    <td><input type="number" class="form-control" name="p_turun" required></td>
                                                </tr>
                                                <tr>
                                                    <td>Persediaan Maximal (banyak)</td>
                                                    <td><input type="number" class="form-control" name="p_banyak" required></td>
                                                </tr>
                                                <tr>
                                                    <td>Persediaan Minimal (sedikit)</td>
                                                    <td><input type="number" class="form-control" name="p_sedikit" required></td>
                                                </tr>
                                                <tr>
                                                    <td>Produksi Maksimum (bertambah)</td>
                                                    <td><input type="number" class="form-control" name="p_max" required></td>
                                                </tr>
                                                <tr>
                                                    <td>Produksi Minimum (berkurang)</td>
                                                    <td><input type="number" class="form-control" name="p_min" required></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><label for="">Ditanyakan</label></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><label for="">Input Nilai Permintaan dan Persediaan Barang</label></td>
                                                </tr>
                                                <tr>
                                                    <td>Permintaan Barang</td>
                                                    <td><input type="number" class="form-control" name="per_min" required></td>
                                                </tr>
                                                <tr>
                                                    <td>Persediaan Barang</td>
                                                    <td><input type="number" class="form-control" name="per_sed" required></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <center>
                                            <button class="btn btn-sm btn-primary" type="submit">Submit</button> | <a href="<?php echo site_url('Fuzzy/reset') ?>" class="btn btn-sm btn-danger" type="submit">Reset</a>

                                        </center>
                                    </form>

                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-secondary">
                                <div class="card-header">
                                    <h3 class="card-title">Data akan diolah</h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <table class="table table-bordered">
                                            <thead>
                                                <th colspan="2" align="center"><label for="">Diketahui</label></th>

                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><label for="">Kebutuhan Barang</label></td>
                                                    <td><label for="">Nilai</label></td>
                                                </tr>
                                                <tr>
                                                    <td>Permintaan Maximal (naik)</td>
                                                    <td><input type="number" class="form-control" name="p_naik" readonly value="<?php echo $this->session->userdata('p_naik'); ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Permintaan Minimal (turun)</td>
                                                    <td><input type="number" class="form-control" name="p_turun" readonly value="<?php echo $this->session->userdata('p_turun'); ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Persediaan Maximal (banyak)</td>
                                                    <td><input type="number" class="form-control" name="p_banyak" readonly value="<?php echo $this->session->userdata('p_banyak'); ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Persediaan Minimal (sedikit)</td>
                                                    <td><input type="number" class="form-control" name="p_sedikit" readonly value="<?php echo $this->session->userdata('p_banyak'); ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Produksi Maksimum (bertambah)</td>
                                                    <td><input type="number" class="form-control" name="p_max" readonly value="<?php echo $this->session->userdata('p_max'); ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Produksi Minimum (berkurang)</td>
                                                    <td><input type="number" class="form-control" name="p_min" readonly value="<?php echo $this->session->userdata('p_min'); ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><label for="">Ditanyakan</label></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><label for="">Input Nilai Permintaan dan Persediaan Barang</label></td>
                                                </tr>
                                                <tr>
                                                    <td>Permintaan Barang</td>
                                                    <td><input type="number" class="form-control" name="per_min" readonly value="<?php echo $this->session->userdata('per_min'); ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Persediaan Barang</td>
                                                    <td><input type="number" class="form-control" name="per_sed" readonly value="<?php echo $this->session->userdata('per_sed'); ?>"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Himpunan Permintaan Barang</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            $$μ_{turun}(x)\begin{cases}
                                            \displaystyle 1, x \le <?php echo $this->session->userdata('p_turun'); ?> \\
                                            \displaystyle {<?php echo $this->session->userdata('p_naik'); ?> - x \over <?php echo $this->session->userdata('p_naik'); ?> - <?php echo $this->session->userdata('p_turun'); ?>}, \\
                                            \displaystyle <?php echo $this->session->userdata('p_turun'); ?> \lt x \lt <?php echo $this->session->userdata('p_naik'); ?> \\
                                            \displaystyle 0, x \geq <?php echo $this->session->userdata('p_naik'); ?> \\
                                            \end{cases}
                                            $$
                                        </div>
                                        <div class="col-sm-6">
                                            $$μ_{naik}(x)\begin{cases}
                                            \displaystyle 0, x \le <?php echo $this->session->userdata('p_turun'); ?> \\
                                            \displaystyle {x - <?php echo $this->session->userdata('p_turun'); ?> \over <?php echo $this->session->userdata('p_naik'); ?> - <?php echo $this->session->userdata('p_turun'); ?>},\\
                                            \displaystyle <?php echo $this->session->userdata('p_turun'); ?> \lt x \lt <?php echo $this->session->userdata('p_naik'); ?> \\
                                            \displaystyle 1, x \geq <?php echo $this->session->userdata('p_naik'); ?> \\
                                            \end{cases}
                                            $$
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Himpunan Persediaan Barang</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            $$μ_{sedikit}(x)\begin{cases}
                                            \displaystyle 1, x \le <?php echo $this->session->userdata('p_sedikit'); ?> \\
                                            \displaystyle {<?php echo $this->session->userdata('p_banyak'); ?> - x \over <?php echo $this->session->userdata('p_banyak'); ?> - <?php echo $this->session->userdata('p_sedikit'); ?>},\\
                                            \displaystyle <?php echo $this->session->userdata('p_sedikit'); ?> \lt x \lt <?php echo $this->session->userdata('p_banyak'); ?> \\
                                            \displaystyle 0, x \geq <?php echo $this->session->userdata('p_banyak'); ?> \\
                                            \end{cases}
                                            $$
                                        </div>
                                        <div class="col-sm-6">
                                            $$μ_{banyak}(x)\begin{cases}
                                            \displaystyle 0, x \le <?php echo $this->session->userdata('p_sedikit'); ?> \\
                                            \displaystyle {x - <?php echo $this->session->userdata('p_sedikit'); ?> \over <?php echo $this->session->userdata('p_banyak'); ?> - <?php echo $this->session->userdata('p_sedikit'); ?>},\\
                                            \displaystyle <?php echo $this->session->userdata('p_sedikit'); ?> \lt x \lt <?php echo $this->session->userdata('p_banyak'); ?> \\
                                            \displaystyle 1, x \geq <?php echo $this->session->userdata('p_banyak'); ?> \\
                                            \end{cases}
                                            $$
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class="card card-danger">
                                <div class="card-header">
                                    <h3 class="card-title">Himpunan Produksi Barang</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            $$μ_{berkurang}(x)\begin{cases}
                                            \displaystyle 1, x \le <?php echo $this->session->userdata('p_min'); ?> \\
                                            \displaystyle {<?php echo $this->session->userdata('p_max'); ?> - x \over <?php echo $this->session->userdata('p_max'); ?> - <?php echo $this->session->userdata('p_min'); ?>},\\
                                            \displaystyle <?php echo $this->session->userdata('p_min'); ?> \lt x \lt <?php echo $this->session->userdata('p_max'); ?> \\
                                            \displaystyle 0, x \geq <?php echo $this->session->userdata('p_max'); ?> \\
                                            \end{cases}
                                            $$
                                        </div>
                                        <div class="col-sm-6">
                                            $$μ_{bertambah}(x)\begin{cases}
                                            \displaystyle 0, x \le <?php echo $this->session->userdata('p_min'); ?> \\
                                            \displaystyle {x - <?php echo $this->session->userdata('p_min'); ?> \over <?php echo $this->session->userdata('p_max'); ?> - <?php echo $this->session->userdata('p_min'); ?>},\\
                                            \displaystyle <?php echo $this->session->userdata('p_min'); ?> \lt x \lt <?php echo $this->session->userdata('p_max'); ?> \\
                                            \displaystyle 1, x \geq <?php echo $this->session->userdata('p_max'); ?> \\
                                            \end{cases}
                                            $$
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Permintaan</h3>
                                </div>
                                <div class="card-body">
                                    <div class="chart">
                                        <div id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Persediaan</h3>
                                </div>
                                <div class="card-body">
                                    <div class="chart">
                                        <div id="lineChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-danger">
                                <div class="card-header">
                                    <h3 class="card-title">Produksi</h3>
                                </div>
                                <div class="card-body">
                                    <div class="chart">
                                        <div id="lineChart3" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-dark">
                                <div class="card-header">
                                    Fuzzifikasi
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <th>Fuzzifikasi Permintaan</th>
                                            <th>Fuzzifikasi Persediaan</th>
                                            <th>Fuzzifikasi Produksi</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    $$μ_{turun}(x) = {<?php echo $this->session->userdata('p_naik'); ?> - x \over <?php echo $this->session->userdata('p_naik'); ?> - <?php echo $this->session->userdata('p_turun'); ?>}$$
                                                    $$μ_{turun}(x) = {<?php echo $this->session->userdata('p_naik'); ?> - <?php echo $this->session->userdata('per_min'); ?> \over <?php echo $this->session->userdata('p_naik'); ?> - <?php echo $this->session->userdata('p_turun'); ?>}=<?php echo $this->session->userdata('m_turun'); ?>$$

                                                </td>
                                                <td>
                                                    $$μ_{sedikit}(x) = {<?php echo $this->session->userdata('p_banyak'); ?> - x \over <?php echo $this->session->userdata('p_banyak'); ?> - <?php echo $this->session->userdata('p_sedikit'); ?>}$$
                                                    $$μ_{sedikit}(x) = {<?php echo $this->session->userdata('p_banyak'); ?> - <?php echo $this->session->userdata('per_sed'); ?> \over <?php echo $this->session->userdata('p_banyak'); ?> - <?php echo $this->session->userdata('p_sedikit'); ?>}=<?php echo $this->session->userdata('m_sedikit'); ?>$$
                                                </td>
                                                <td>
                                                    $$μ_{berkurang}(x) = {<?php echo $this->session->userdata('p_max'); ?> - x \over <?php echo $this->session->userdata('p_max'); ?> - <?php echo $this->session->userdata('p_min'); ?>}$$
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    $$μ_{naik}(x) = {x - <?php echo $this->session->userdata('p_turun'); ?> \over <?php echo $this->session->userdata('p_naik'); ?> - <?php echo $this->session->userdata('p_turun'); ?>}$$
                                                    $$μ_{naik}(x) = {<?php echo $this->session->userdata('per_min'); ?> - <?php echo $this->session->userdata('p_turun'); ?> \over <?php echo $this->session->userdata('p_naik'); ?> - <?php echo $this->session->userdata('p_turun'); ?>}=<?php echo $this->session->userdata('m_naik'); ?>$$
                                                </td>
                                                <td>
                                                    $$μ_{banyak}(x) = {x - <?php echo $this->session->userdata('p_sedikit'); ?> \over <?php echo $this->session->userdata('p_banyak'); ?> - <?php echo $this->session->userdata('p_sedikit'); ?>}$$
                                                    $$μ_{banyak}(x) = {<?php echo $this->session->userdata('per_sed'); ?> - <?php echo $this->session->userdata('p_sedikit'); ?> \over <?php echo $this->session->userdata('p_banyak'); ?> - <?php echo $this->session->userdata('p_sedikit'); ?>}=<?php echo $this->session->userdata('m_banyak'); ?>$$
                                                </td>
                                                <td>
                                                    $$μ_{bertambah}(x) = {x - <?php echo $this->session->userdata('p_min'); ?> \over <?php echo $this->session->userdata('p_max'); ?> - <?php echo $this->session->userdata('p_min'); ?>}$$
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-pink">
                                <div class="card-header">
                                    Operasi Fuzzy
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <th>Rule 1</th>
                                            <th>Rule 2</th>
                                            <th>Rule 3</th>
                                            <th>Rule 4</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p style="text-align: center;">
                                                        Permintaan turun dan persediaan banyak <br>
                                                        <?php echo $this->session->userdata('m_turun'); ?> dan <?php echo $this->session->userdata('m_banyak'); ?> <br>
                                                        Hasil operasi fuzzy = <?php echo $this->session->userdata('rule1'); ?>
                                                    </p>
                                                </td>
                                                <td>
                                                    <p style="text-align: center;">
                                                        Permintaan turun dan persediaan sedikit <br>
                                                        <?php echo $this->session->userdata('m_turun'); ?> dan <?php echo $this->session->userdata('m_sedikit'); ?> <br>
                                                        Hasil operasi fuzzy = <?php echo $this->session->userdata('rule2'); ?>
                                                    </p>
                                                </td>
                                                <td>
                                                    <p style="text-align: center;">
                                                        Permintaan naik dan persediaan banyak <br>
                                                        <?php echo $this->session->userdata('m_naik'); ?> dan <?php echo $this->session->userdata('m_banyak'); ?> <br>
                                                        Hasil operasi fuzzy = <?php echo $this->session->userdata('rule3'); ?>
                                                    </p>
                                                </td>
                                                <td>
                                                    <p style="text-align: center;">
                                                        Permintaan naik dan persediaan sedikit  <br>
                                                        <?php echo $this->session->userdata('m_naik'); ?> dan <?php echo $this->session->userdata('m_sedikit'); ?> <br>
                                                        Hasil operasi fuzzy = <?php echo $this->session->userdata('rule3'); ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-purple">
                                <div class="card-header">
                                    Implikasi
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <th>Rule 1</th>
                                            <th>Rule 2</th>
                                            <th>Rule 3</th>
                                            <th>Rule 4</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    $$ α - predikat_{1} = μ_{turun} ∩ μ_{banyak} $$
                                                    $$ α - predikat_{1} = min(μ_{turun}[<?php echo $this->session->userdata('per_min'); ?>], μ_{banyak}[<?php echo $this->session->userdata('per_sed'); ?>]) $$
                                                    $$ α - predikat_{1} = min(<?php echo $this->session->userdata('m_turun'); ?>;<?php echo $this->session->userdata('m_banyak'); ?>) $$
                                                    $$ α - predikat_{1} = <?php echo $this->session->userdata('rule1'); ?> $$
                                                </td>
                                                <td>
                                                    $$ α - predikat_{2} = μ_{turun} ∩ μ_{sedikit} $$
                                                    $$ α - predikat_{2} = min(μ_{turun}[<?php echo $this->session->userdata('per_min'); ?>], μ_{sedikit}[<?php echo $this->session->userdata('per_sed'); ?>]) $$
                                                    $$ α - predikat_{2} = min(<?php echo $this->session->userdata('m_turun'); ?>;<?php echo $this->session->userdata('m_sedikit'); ?>) $$
                                                    $$ α - predikat_{2} = <?php echo $this->session->userdata('rule2'); ?> $$
                                                </td>
                                                <td>
                                                    $$ α - predikat_{3} = μ_{naik} ∩ μ_{banyak} $$
                                                    $$ α - predikat_{3} = min(μ_{naik}[<?php echo $this->session->userdata('per_min'); ?>], μ_{banyak}[<?php echo $this->session->userdata('per_sed'); ?>]) $$
                                                    $$ α - predikat_{3} = min(<?php echo $this->session->userdata('m_naik'); ?>;<?php echo $this->session->userdata('m_banyak'); ?>) $$
                                                    $$ α - predikat_{3} = <?php echo $this->session->userdata('rule3'); ?> $$
                                                </td>
                                                <td>
                                                    $$ α - predikat_{4} = μ_{naik} ∩ μ_{sedikit} $$
                                                    $$ α - predikat_{4} = min(μ_{naik}[<?php echo $this->session->userdata('per_min'); ?>], μ_{sedikit}[<?php echo $this->session->userdata('per_sed'); ?>]) $$
                                                    $$ α - predikat_{4} = min(<?php echo $this->session->userdata('m_naik'); ?>;<?php echo $this->session->userdata('m_sedikit'); ?>) $$
                                                    $$ α - predikat_{4} = <?php echo $this->session->userdata('rule4'); ?> $$
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-gray">
                                <div class="card-header">
                                    Grafik
                                </div>
                                <div class="card-body">
                                    <table class="table table-responsive table-bordered">
                                        <tbody>
                                            <tr>
                                                <td align="center" colspan="4"><label for="">Rule 1</label></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Turun
                                                </td>
                                                <td>
                                                    Banyak
                                                </td>
                                                <td>
                                                    Berkurang
                                                </td>
                                                <td>
                                                    Hasil Implikasi
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="chart">
                                                        <div id="rule1_turun" style="min-height: 200px; height: 300px; max-height: 300px; max-width: 100%;"></div>

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chart">
                                                        <div id="rule1_banyak" style="min-height: 200px; height: 300px; max-height: 300px; max-width: 100%;"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chart">
                                                        <div id="rule1_berkurang" style="min-height: 200px; height: 300px; max-height: 300px; max-width: 100%;"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chart">
                                                        <div id="rule1_implikasi" style="min-height: 200px; height: 300px; max-height: 300px; max-width: 100%;"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" colspan="4"><label for="">Rule 2</label></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Turun
                                                </td>
                                                <td>
                                                    Sedikit
                                                </td>
                                                <td>
                                                    Berkurang
                                                </td>
                                                <td>
                                                    Hasil Implikasi
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="chart">
                                                        <div id="rule2_turun" style="min-height: 200px; height: 300px; max-height: 300px; max-width: 100%;"></div>

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chart">
                                                        <div id="rule2_sedikit" style="min-height: 200px; height: 300px; max-height: 300px; max-width: 100%;"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chart">
                                                        <div id="rule2_berkurang" style="min-height: 200px; height: 300px; max-height: 300px; max-width: 100%;"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chart">
                                                        <div id="rule2_implikasi" style="min-height: 200px; height: 300px; max-height: 300px; max-width: 100%;"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" colspan="4"><label for="">Rule 3</label></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Naik
                                                </td>
                                                <td>
                                                    Banyak
                                                </td>
                                                <td>
                                                    Bertambah
                                                </td>
                                                <td>
                                                    Hasil Implikasi
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="chart">
                                                        <div id="rule3_naik" style="min-height: 200px; height: 300px; max-height: 300px; max-width: 100%;"></div>

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chart">
                                                        <div id="rule3_banyak" style="min-height: 200px; height: 300px; max-height: 300px; max-width: 100%;"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chart">
                                                        <div id="rule3_bertambah" style="min-height: 200px; height: 300px; max-height: 300px; max-width: 100%;"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chart">
                                                        <div id="rule3_implikasi" style="min-height: 200px; height: 300px; max-height: 300px; max-width: 100%;"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" colspan="4"><label for="">Rule 4</label></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Naik
                                                </td>
                                                <td>
                                                    Sedikit
                                                </td>
                                                <td>
                                                    Bertambah
                                                </td>
                                                <td>
                                                    Hasil Implikasi
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="chart">
                                                        <div id="rule4_naik" style="min-height: 200px; height: 300px; max-height: 300px; max-width: 100%;"></div>

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chart">
                                                        <div id="rule4_sedikit" style="min-height: 200px; height: 300px; max-height: 300px; max-width: 100%;"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chart">
                                                        <div id="rule4_bertambah" style="min-height: 200px; height: 300px; max-height: 300px; max-width: 100%;"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chart">
                                                        <div id="rule4_implikasi" style="min-height: 200px; height: 300px; max-height: 300px; max-width: 100%;"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-maroon">
                                <div class="card-header">
                                    Komposisi Aturan
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <th>a1</th>
                                            <th>a2</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    $$ {a_{1} - <?php echo $this->session->userdata('p_min'); ?> \over <?php echo $this->session->userdata('p_max'); ?>-<?php echo $this->session->userdata('p_min'); ?>}= <?php echo $this->session->userdata('max_a1'); ?> \\$$
                                                    $$ a_{1} = (<?php echo $this->session->userdata('p_max'); ?>-<?php echo $this->session->userdata('p_min'); ?>)*<?php echo $this->session->userdata('max_a1'); ?>+<?php echo $this->session->userdata('p_min'); ?> = <?php echo $this->session->userdata('a1'); ?>$$
                                                </td>
                                                <td>
                                                    $$ {a_{2} - <?php echo $this->session->userdata('p_min'); ?> \over <?php echo $this->session->userdata('p_max'); ?>-<?php echo $this->session->userdata('p_min'); ?>}= <?php echo $this->session->userdata('max_a2'); ?> \\$$
                                                    $$ a_{2} = (<?php echo $this->session->userdata('p_max'); ?>-<?php echo $this->session->userdata('p_min'); ?>)*<?php echo $this->session->userdata('max_a2'); ?>+<?php echo $this->session->userdata('p_min'); ?> = <?php echo $this->session->userdata('a2'); ?>$$
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card card-teal">
                                <div class="card-header">
                                    Defuzzifikasi
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <th>No</th>
                                            <th>Bertambah</>
                                            <th>Berkurang</th>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 1; $i <= 10; $i++) { ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $i; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $this->session->userdata("bertambah[$i]"); ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $this->session->userdata("berkurang[$i]"); ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-navy">
                                <div class="card-header">
                                    Hasil Defuzzifikasi
                                </div>
                                <div class="card-body">
                                    $$<?php echo $this->session->userdata("hasil"); ?> kemasan/hari $$
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Add Content Here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- uPlot -->
    <script src="<?php echo base_url() ?>assets/plugins/uplot/uPlot.iife.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=default'></script>

    <script>
        $(function() {
            /* uPlot
             * -------
             * Here we will create a few charts using uPlot
             */

            function getSize(elementId) {
                return {
                    width: document.getElementById(elementId).offsetWidth,
                    height: document.getElementById(elementId).offsetHeight,
                }
            }

            let data_permintaan = [
                [0, <?php echo $this->session->userdata('p_turun'); ?>, <?php echo $this->session->userdata('p_naik'); ?>, <?php echo $this->session->userdata('p_naik') + $this->session->userdata('p_turun'); ?>],
                [1, 1, 0, 0],
                [0, 0, 1, 1]
            ];

            let data_persediaan = [
                [0, <?php echo $this->session->userdata('p_sedikit'); ?>, <?php echo $this->session->userdata('p_banyak'); ?>, <?php echo $this->session->userdata('p_banyak') + $this->session->userdata('p_sedikit'); ?>],
                [1, 1, 0, 0],
                [0, 0, 1, 1]
            ];

            let data_produksi = [
                [0, <?php echo $this->session->userdata('p_min'); ?>, <?php echo $this->session->userdata('p_max'); ?>, <?php echo $this->session->userdata('p_min') + $this->session->userdata('p_max'); ?>],
                [1, 1, 0, 0],
                [0, 0, 1, 1]
            ];

            let data_rule1turun = [
                [0, <?php echo $this->session->userdata('p_turun'); ?>, <?php echo $this->session->userdata('p_naik'); ?>, <?php echo $this->session->userdata('p_naik') + $this->session->userdata('p_turun'); ?>],
                [1, 1, 0, 0],
                [1, 1, 0, 0]

            ];

            let data_rule1banyak = [
                [0, <?php echo $this->session->userdata('p_sedikit'); ?>, <?php echo $this->session->userdata('p_banyak'); ?>, <?php echo $this->session->userdata('p_sedikit') + $this->session->userdata('p_banyak'); ?>],
                [0, 0, 1, 1]
            ];

            let data_rule1berkurang = [
                [0, <?php echo $this->session->userdata('p_min'); ?>, <?php echo $this->session->userdata('p_max'); ?>, <?php echo $this->session->userdata('p_min') + $this->session->userdata('p_max'); ?>],
                [1, 1, 0, 0],
            ];

            let data_rule1implikasi = [
                [0, <?php echo $this->session->userdata('p_min'); ?>, <?php echo $this->session->userdata('p_max'); ?>, <?php echo $this->session->userdata('p_min') + $this->session->userdata('p_max'); ?>],
                [<?php echo $this->session->userdata('rule1'); ?>, <?php echo $this->session->userdata('rule1'); ?>, 0, 0]
            ];

            let data_rule2turun = [
                [0, <?php echo $this->session->userdata('p_turun'); ?>, <?php echo $this->session->userdata('p_naik'); ?>, <?php echo $this->session->userdata('p_naik') + $this->session->userdata('p_turun'); ?>],
                [1, 1, 0, 0]
            ];

            let data_rule2sedikit = [
                [0, <?php echo $this->session->userdata('p_sedikit'); ?>, <?php echo $this->session->userdata('p_banyak'); ?>, <?php echo $this->session->userdata('p_sedikit') + $this->session->userdata('p_banyak'); ?>],
                [1, 1, 0, 0]
            ];

            let data_rule2berkurang = [
                [0, <?php echo $this->session->userdata('p_min'); ?>, <?php echo $this->session->userdata('p_max'); ?>, <?php echo $this->session->userdata('p_min') + $this->session->userdata('p_max'); ?>],
                [1, 1, 0, 0]
            ];

            let data_rule2implikasi = [
                [0, <?php echo $this->session->userdata('p_min'); ?>, <?php echo $this->session->userdata('p_max'); ?>, <?php echo $this->session->userdata('p_min') + $this->session->userdata('p_max'); ?>],
                [<?php echo $this->session->userdata('rule2'); ?>, <?php echo $this->session->userdata('rule2'); ?>, 0, 0]
            ];

            let data_rule3naik = [
                [0, <?php echo $this->session->userdata('p_sedikit'); ?>, <?php echo $this->session->userdata('p_banyak'); ?>, <?php echo $this->session->userdata('p_sedikit') + $this->session->userdata('p_banyak'); ?>],
                [0, 0, 1, 1]
            ];

            let data_rule3banyak = [
                [0, <?php echo $this->session->userdata('p_sedikit'); ?>, <?php echo $this->session->userdata('p_banyak'); ?>, <?php echo $this->session->userdata('p_sedikit') + $this->session->userdata('p_banyak'); ?>],
                [0, 0, 1, 1]
            ];

            let data_rule3bertambah = [
                [0, <?php echo $this->session->userdata('p_min'); ?>, <?php echo $this->session->userdata('p_max'); ?>, <?php echo $this->session->userdata('p_min') + $this->session->userdata('p_max'); ?>],
                [0, 0, 1, 1]
            ];

            let data_rule3implikasi = [
                [0, <?php echo $this->session->userdata('p_min'); ?>, <?php echo $this->session->userdata('p_max'); ?>, <?php echo $this->session->userdata('p_min') + $this->session->userdata('p_max'); ?>],
                [0, 0, <?php echo $this->session->userdata('rule3'); ?>, <?php echo $this->session->userdata('rule3'); ?>]
            ];

            let data_rule4naik = [
                [0, <?php echo $this->session->userdata('p_sedikit'); ?>, <?php echo $this->session->userdata('p_banyak'); ?>, <?php echo $this->session->userdata('p_sedikit') + $this->session->userdata('p_banyak'); ?>],
                [0, 0, 1, 1]
            ];

            let data_rule4sedikit = [
                [0, <?php echo $this->session->userdata('p_sedikit'); ?>, <?php echo $this->session->userdata('p_banyak'); ?>, <?php echo $this->session->userdata('p_sedikit') + $this->session->userdata('p_banyak'); ?>],
                [1, 1, 0, 0]
            ];

            let data_rule4bertambah = [
                [0, <?php echo $this->session->userdata('p_min'); ?>, <?php echo $this->session->userdata('p_max'); ?>, <?php echo $this->session->userdata('p_min') + $this->session->userdata('p_max'); ?>],
                [0, 0, 1, 1]
            ];

            let data_rule4implikasi = [
                [0, <?php echo $this->session->userdata('p_min'); ?>, <?php echo $this->session->userdata('p_max'); ?>, <?php echo $this->session->userdata('p_min') + $this->session->userdata('p_max'); ?>],
                [0, 0, <?php echo $this->session->userdata('rule4'); ?>, <?php echo $this->session->userdata('rule4'); ?>]
            ];

            const optsLineChart = {
                ...getSize('lineChart'),
                scales: {
                    x: {
                        time: false,
                    },
                    y: {
                        range: [0, 1],
                    },
                },
                series: [{},
                    {
                        fill: 'transparent',
                        width: 5,
                        stroke: 'rgba(60,141,188,1)',
                    },
                    {
                        stroke: '#c1c7d1',
                        width: 5,
                        fill: 'transparent',
                    },
                ],
            };

            const optsLineChart2 = {
                ...getSize('lineChart'),
                scales: {
                    x: {
                        time: false,
                    },
                    y: {
                        range: [0, 1],
                    },
                },
                series: [{},
                    {
                        fill: 'transparent',
                        width: 5,
                        stroke: 'rgba(60,141,188,1)',
                    },
                ],
            };



            let lineChart = new uPlot(optsLineChart, data_permintaan, document.getElementById('lineChart'));
            let lineChart2 = new uPlot(optsLineChart, data_persediaan, document.getElementById('lineChart2'));
            let lineChart3 = new uPlot(optsLineChart, data_produksi, document.getElementById('lineChart3'));
            let rule1_turun = new uPlot(optsLineChart2, data_rule1turun, document.getElementById('rule1_turun'));
            let rule1_banyak = new uPlot(optsLineChart2, data_rule1banyak, document.getElementById('rule1_banyak'));
            let rule1_berkurang = new uPlot(optsLineChart2, data_rule1berkurang, document.getElementById('rule1_berkurang'));
            let rule1_implikasi = new uPlot(optsLineChart2, data_rule1implikasi, document.getElementById('rule1_implikasi'));
            let rule2_turun = new uPlot(optsLineChart2, data_rule2turun, document.getElementById('rule2_turun'));
            let rule2_sedikit = new uPlot(optsLineChart2, data_rule2sedikit, document.getElementById('rule2_sedikit'));
            let rule2_berkurang = new uPlot(optsLineChart2, data_rule2berkurang, document.getElementById('rule2_berkurang'));
            let rule2_implikasi = new uPlot(optsLineChart2, data_rule2implikasi, document.getElementById('rule2_implikasi'));
            let rule3_naik = new uPlot(optsLineChart2, data_rule3naik, document.getElementById('rule3_naik'));
            let rule3_banyak = new uPlot(optsLineChart2, data_rule3banyak, document.getElementById('rule3_banyak'));
            let rule3_bertambah = new uPlot(optsLineChart2, data_rule3bertambah, document.getElementById('rule3_bertambah'));
            let rule3_implikasi = new uPlot(optsLineChart2, data_rule3implikasi, document.getElementById('rule3_implikasi'));
            let rule4_naik = new uPlot(optsLineChart2, data_rule4naik, document.getElementById('rule4_naik'));
            let rule4_sedikit = new uPlot(optsLineChart2, data_rule4sedikit, document.getElementById('rule4_sedikit'));
            let rule4_bertambah = new uPlot(optsLineChart2, data_rule4bertambah, document.getElementById('rule4_bertambah'));
            let rule4_implikasi = new uPlot(optsLineChart2, data_rule4implikasi, document.getElementById('rule4_implikasi'));

            window.addEventListener("resize", e => {
                lineChart.setSize(getSize('lineChart'));
                lineChart2.setSize(getSize('lineChart2'));
                lineChart3.setSize(getSize('lineChart3'));
                rule1_turun.setSize(getSize('rule1_turun'));
                rule1_banyak.setSize(getSize('rule1_banyak'));
                rule1_berkurang.setSize(getSize('rule1_berkurang'));
                rule1_implikasi.setSize(getSize('rule1_implikasi'));
                rule2_turun.setSize(getSize('rule2_turun'));
                rule2_sedikit.setSize(getSize('rule2_sedikit'));
                rule2_berkurang.setSize(getSize('rule2_berkurang'));
                rule2_implikasi.setSize(getSize('rule2_implikasi'));
                rule3_naik.setSize(getSize('rule3_naik'));
                rule3_banyak.setSize(getSize('rule3_banyak'));
                rule3_berkurang.setSize(getSize('rule3_bertambah'));
                rule3_implikasi.setSize(getSize('rule3_implikasi'));
                rule4_naik.setSize(getSize('rule4_naik'));
                rule4_sedikit.setSize(getSize('rule4_sedikit'));
                rule4_berkurang.setSize(getSize('rule4_bertambah'));
                rule4_implikasi.setSize(getSize('rule4_implikasi'));
            });
        })
    </script>
</body>

</html>