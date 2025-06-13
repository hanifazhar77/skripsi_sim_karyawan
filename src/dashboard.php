<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sistem Informasi Kepegawaian</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../public/css/admin/style.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <a href="#" class="sidebar-logo">
                <i class="bi bi-buildings me-2"></i>
                <span>Pegawai Pabrik</span>
            </a>
        </div>
        
        <div class="sidebar-nav">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <i class="bi bi-speedometer2"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-people"></i>
                        Data Pegawai
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-diagram-3"></i>
                        Struktur Organisasi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-briefcase"></i>
                        Jabatan & Divisi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-calendar-check"></i>
                        Presensi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-cash-coin"></i>
                        Penggajian
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-clipboard-data"></i>
                        Laporan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-gear"></i>
                        Pengaturan
                    </a>
                </li>
                <li class="nav-item mt-5">
                    <a class="nav-link text-light bg-danger-hover" href="#">
                        <i class="bi bi-box-arrow-right"></i>
                        Keluar
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
    <!-- Sidebar overlay (mobile only) -->
    <div class="sidebar-overlay"></div>
    
    <!-- Main content -->
    <div class="content">
        <!-- Header -->
        <div class="header d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <div class="header-toggle me-3">
                    <i class="bi bi-list" id="sidebarToggle"></i>
                </div>
                <div class="search-box">
                    <div class="input-group">
                        <span class="input-group-text bg-white">
                            <i class="bi bi-search text-secondary"></i>
                        </span>
                        <input type="text" class="form-control border-start-0" placeholder="Cari...">
                    </div>
                </div>
            </div>
            
            <div class="d-flex align-items-center">
                <div class="notification me-4 position-relative">
                    <a href="#" class="btn btn-light text-secondary">
                        <i class="bi bi-bell fs-5"></i>
                        <span class="notification-badge badge bg-danger">3</span>
                    </a>
                </div>
                
                <div class="user-dropdown">
                    <a class="dropdown-toggle d-flex align-items-center text-decoration-none" href="#" role="button" data-bs-toggle="dropdown">
                        <img src="https://ui-avatars.com/api/?name=Admin&background=0D8ABC&color=fff" class="user-avatar me-2">
                        <span class="d-none d-md-inline">Administrator</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i> Profil</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i> Pengaturan</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-box-arrow-right me-2"></i> Keluar</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Main Content Area -->
        <div class="main-content">
            <h1 class="page-title">Dashboard Sistem Kepegawaian</h1>
            
        </div>
    </div>
    
    <!-- Bootstrap JS with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- Custom JS -->
    <script src="../public/js/admin/script.js"></script>
</body>
</html>