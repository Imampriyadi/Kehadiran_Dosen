<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Lecturer</title>
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        :root {
            --background-color: #343a40;
            --text-color: #e9ecef;
            --card-background: rgba(69, 77, 85, 0.3);
            /* Transparansi lebih terang */
            --card-border-radius: 15px;
            --card-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        body {
            background-color: var(--background-color);
            color: var(--text-color);
        }

        .content-wrapper {
            background-color: var(--background-color);
            color: var(--text-color);
        }

        .navbar {
            background-color: var(--background-color) !important;
        }

        .sidebar-dark-primary .brand-link {
            background-color: var(--background-color);
            color: #ffffff !important;
        }

        .nav-sidebar .nav-link.active {
            background-color: #6c757d !important;
        }

        .main-header .nav-link {
            color: #ffffff !important;
        }

        .main-header .nav-link:hover {
            color: #ced4da !important;
        }

        .table {
            background-color: #454d55;
            color: #e9ecef;
        }

        .thead-dark th {
            background-color: var(--background-color);
            color: var(--text-color);
        }

        .btn-dark {
            background-color: var(--background-color);
            color: #ffffff;
            border-color: var(--background-color);
        }

        .btn-dark:hover {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .card {
            background-color: var(--card-background);
            border-radius: var(--card-border-radius);
            box-shadow: var(--card-shadow);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.02);
        }

        .form-control {
            background-color: #ffffff;
            /* Ubah elemen input menjadi putih */
            color: #000000;
        }

        .form-control::placeholder {
            color: #6c757d;
        }

        .form-control:focus {
            background-color: #ffffff;
            color: #000000;
            border-color: #6c757d;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i> Added Udar Ider University Lecturer</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="/" class="brand-link">
                <span class="brand-text font-weight-light">Udar Ider University</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>DASHBOARD</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dosen" class="nav-link active">
                                <i class="nav-icon fas fa-book"></i>
                                <p>LECTURER DATA</p>
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
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Add Lecturer Form</h3>
                                </div>
                                <div class="card-body">
                                    <?php if (!empty(session()->getFlashdata('message'))) : ?>
                                        <div class="alert alert-success">
                                            <?php echo session()->getFlashdata('message'); ?>
                                        </div>
                                    <?php endif ?>

                                    <!-- Form Tambah Data Dosen -->
                                    <form action="/tambah-data-dosen" method="post">
                                        <div class="form-group">
                                            <label for="kode_dosen">Lecturer Code:</label>
                                            <input type="text" name="kode_dosen" id="kode_dosen" class="form-control" placeholder="Enter Lecturer Code" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_dosen">Lecturer Name:</label>
                                            <input type="text" name="nama_dosen" id="nama_dosen" class="form-control" placeholder="Enter the Lecturer's Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_matkul">Course Name:</label>
                                            <input type="text" name="nama_matkul" id="nama_matkul" class="form-control" placeholder="Enter the Course Name" required>
                                        </div>
                                        <button type="submit" class="btn btn-dark"><i class="fas fa-plus"></i> Add Lecturer</button>
                                        <a href="/dosen" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Return</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery, Popper.js, Bootstrap JS, and AdminLTE JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <script>
        $(document).ready(function() {
            if (localStorage.getItem('bgColor')) {
                var bgColor = localStorage.getItem('bgColor');
                document.documentElement.style.setProperty('--background-color', bgColor);
                $(".navbar, .sidebar-dark-primary, .content-wrapper").css("background-color", bgColor);
            }

            if (localStorage.getItem('textColor')) {
                var textColor = localStorage.getItem('textColor');
                document.documentElement.style.setProperty('--text-color', textColor);
                $("body, .navbar, .sidebar-dark-primary").css("color", textColor);
            }
        });
    </script>
</body>

</html>