<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen Universitas Belum Bayar</title>
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        .anime-card {
            background-image: url('https://example.com/path-to-anime-background.jpg');
            background-size: cover;
            color: #fff;
            border-radius: 15px;
            padding: 15px;
            box-shadow: var(--card-shadow);
        }

        .anime-card .card-title {
            color: var(--text-color);
        }

        .anime-card .card-body,
        .anime-card .table {
            color: var(--text-color);
        }

        :root {
            --background-color: #343a40;
            --text-color: #e9ecef;
            --card-background: #ffffff;
            --card-border-radius: 15px;
            --card-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        body {
            background-color: var(--background-color);
            color: var(--text-color);
        }

        .navbar,
        .main-header,
        .sidebar,
        .brand-link,
        .btn-dark,
        .main-footer {
            background-color: var(--background-color) !important;
            color: var(--text-color) !important;
        }

        .card {
            background-color: var(--card-background);
            border-radius: var(--card-border-radius);
            box-shadow: var(--card-shadow);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .thead-dark th {
            background-color: var(--background-color);
            color: var(--text-color);
        }

        .color-picker {
            margin: 10px 0;
            text-align: right;
        }

        .anime-card {
            background-image: url('https://example.com/path-to-anime-background.jpg');
            background-size: cover;
            color: #fff;
            border-radius: 15px;
            padding: 15px;
            box-shadow: var(--card-shadow);
        }

        .sidebar {
            background-color: transparent !important;
        }

        .nav-item .nav-link {
            background-color: transparent !important;
        }

        .nav-item .nav-link p,
        .nav-icon,
        .brand-link span,
        .brand-link i {
            color: var(--text-color) !important;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i> Data Dosen Universitas Belum Bayar</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar elevation-4">
            <a href="/" class="brand-link">
                <i class="fas fa-university"></i>
                <span class="brand-text font-weight-light">Universitas Belum Bayar</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dosen" class="nav-link active">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Data Dosen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-sign-in-alt"></i>
                                <p>Login</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid mt-4">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if (!empty(session()->getFlashdata('message'))) : ?>
                                <div class="alert alert-success">
                                    <?php echo session()->getFlashdata('message'); ?>
                                </div>
                            <?php endif ?>

                            <div class="d-flex justify-content-between align-items-center">
                                <button onclick="window.location.href='/tambah-data-dosen'" class="btn btn-dark mb-3"><i class="fas fa-plus"></i> TAMBAH DATA</button>
                                <div class="color-picker">
                                    <label for="bg-color-picker">Ubah Warna:</label>
                                    <input type="color" id="bg-color-picker" value="#343a40">
                                    <label for="text-color-picker">Text :</label>
                                    <input type="color" id="text-color-picker" value="#e9ecef">
                                </div>
                            </div>

                            <!-- Tabel Data Dosen -->
                            <div class="card anime-card">
                                <div class="card-header">
                                    <h3 class="card-title">Data Dosen</h3>
                                    <div class="card-tools">
                                        <input type="text" class="form-control form-control-sm" id="search" placeholder="Search">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-striped">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Kode Dosen</th>
                                                <th>Nama Dosen</th>
                                                <th>Nama Mata Kuliah</th>
                                                <th>Konfirmasi Kehadiran</th>
                                            </tr>
                                        </thead>
                                        <tbody id="dosenTable">
                                            <?php foreach ($DataDosen as $key => $dosen) : ?>
                                                <tr>
                                                    <td><?php echo $dosen['kode_dosen'] ?></td>
                                                    <td><?php echo $dosen['nama_dosen'] ?></td>
                                                    <td><?php echo $dosen['nama_matkul'] ?></td>
                                                    <td class="text-center">
                                                        <a href="notifikasi/dosen-masuk/<?= $dosen['id_dosen']; ?>" class="btn btn-success btn-sm"><i class="fas fa-check"></i> Akan Hadir</a>
                                                        <a href="notifikasi/dosen-tidak-masuk/<?= $dosen['id_dosen']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Berhalangan Hadir</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Muhammad Ali Angga</strong>
        </footer>
    </div>

    <!-- jQuery, Popper.js, Bootstrap JS, and AdminLTE JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <script>
        $(document).ready(function() {
            // Set background and text color from localStorage
            if (localStorage.getItem('bgColor')) {
                var bgColor = localStorage.getItem('bgColor');
                document.documentElement.style.setProperty('--background-color', bgColor);
                $(".navbar, .main-header, .sidebar, .brand-link, .btn-dark, .main-footer, .content-wrapper").css("background-color", bgColor);
            }

            if (localStorage.getItem('textColor')) {
                var textColor = localStorage.getItem('textColor');
                document.documentElement.style.setProperty('--text-color', textColor);
                $("body, .navbar, .main-header, .sidebar, .brand-link, .btn-dark, .main-footer, .nav-item .nav-link p, .nav-icon, .brand-link span, .brand-link i").css("color", textColor);
            }

            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#dosenTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });

            $("#bg-color-picker").on("input", function() {
                var color = $(this).val();
                document.documentElement.style.setProperty('--background-color', color);
                $(".navbar, .main-header, .sidebar, .brand-link, .btn-dark, .main-footer, .content-wrapper").css("background-color", color);
                localStorage.setItem('bgColor', color); // Save to localStorage
            });

            $("#text-color-picker").on("input", function() {
                var color = $(this).val();
                document.documentElement.style.setProperty('--text-color', color);
                $("body, .navbar, .main-header, .sidebar, .brand-link, .btn-dark, .main-footer, .nav-item .nav-link p, .nav-icon, .brand-link span, .brand-link i").css("color", color);
                localStorage.setItem('textColor', color); // Save to localStorage
            });
        });
    </script>
</body>

</html>