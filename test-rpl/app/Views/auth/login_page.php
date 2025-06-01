<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Universitas Katolik Parahyangan</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/login_styles.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-main-container">
        <div class="logo-section">
            <img src="<?= base_url('assets/img/unpar_logo.png') ?>" alt="Universitas Katolik Parahyangan Logo" class="logo-image" onerror="this.onerror=null;this.src='https://placehold.co/150x50/EFEFEF/333333?text=UNPAR+Logo+Error';">
            <p class="tagline">SELAMAT DATANG CALON MAHASISWA RPL</p>
            <h1 class="university-name">UNIVERSITAS KATOLIK PARAHYANGAN</h1>
        </div>

        <div class="login-title-section">
            <h2 class="login-title">LOGIN</h2>
            <p class="login-subtitle">Silahkan masuk menggunakan akun kamu!</p>
        </div>

        <form action="<?= site_url('auth/processLogin') ?>" method="POST">
             <?= csrf_field() ?> <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" required
                       class="form-input-field"
                       placeholder="Masukkan Alamat e-mail kamu...">
            </div>

            <div class="form-group password-group">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" id="password" name="password" required
                       class="form-input-field"
                       placeholder="Masukkan Kata sandi kamu...">
            </div>

            <button type="submit" class="submit-button">
                Masuk
            </button>
        </form>

        <div class="register-link-section">
            <p class="register-text">
                Belum Memiliki Akun?
                <a href="<?= site_url('register') ?>" class="register-link">Daftar</a>
            </p>
        </div>

        <div class="footer-section">
            <p class="footer-text">
                Copyright Universitas Katolik Parahyangan &copy; <span id="currentYear"><?= date('Y') ?></span>
            </p>
        </div>
    </div>

    </body>
</html>