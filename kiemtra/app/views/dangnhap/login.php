<?php include 'app/views/layouts/header.php'; ?>

<div class="container d-flex justify-content-center align-items-center" style="height: 80vh;">
    <div class="col-md-6">
        <div class="card shadow-lg rounded-3">
            <div class="card-header bg-primary text-white text-center">
                <h2>🔐 Đăng nhập</h2>
            </div>
            <div class="card-body">
                <?php if(isset($data['error_message'])): ?>
                    <div class="alert alert-danger text-center">
                        ⚠️ <?php echo $data['error_message']; ?>
                    </div>
                <?php endif; ?>

                <form action="<?php echo BASE_URL; ?>dangnhap/login" method="POST">
                    <div class="mb-3">
                        <label for="masv" class="form-label">🎓 Mã sinh viên</label>
                        <input type="text" class="form-control" id="masv" name="masv" required placeholder="Nhập mã sinh viên">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary w-100 fw-bold">🚀 Đăng nhập</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'app/views/layouts/footer.php'; ?>
