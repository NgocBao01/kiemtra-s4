<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #007bff !important;
        }
        .navbar-brand, .nav-link {
            color: #fff !important;
            font-weight: 500;
        }
        .nav-link:hover {
            color: #ffdd57 !important;
        }
        .active {
            font-weight: bold;
            border-bottom: 2px solid #ffdd57;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand" href="<?php echo BASE_URL; ?>">📘 Quản lý SV</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($_SERVER['REQUEST_URI'] == BASE_URL.'sinhvien') ? 'active' : ''; ?>" 
                           href="<?php echo BASE_URL; ?>sinhvien">📚 Sinh Viên</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($_SERVER['REQUEST_URI'] == BASE_URL.'hocphan') ? 'active' : ''; ?>" 
                           href="<?php echo BASE_URL; ?>hocphan">📖 Học Phần</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($_SERVER['REQUEST_URI'] == BASE_URL.'dangky') ? 'active' : ''; ?>" 
                           href="<?php echo BASE_URL; ?>dangky">📝 Đăng Ký</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($_SERVER['REQUEST_URI'] == BASE_URL.'dangnhap') ? 'active' : ''; ?>" 
                           href="<?php echo BASE_URL; ?>dangnhap">🔐 Đăng Nhập</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if(isset($error_message)): ?>
            <div class="alert alert-danger">❗ <?php echo $error_message; ?></div>
        <?php endif; ?>
    </div>
</body>
</html>