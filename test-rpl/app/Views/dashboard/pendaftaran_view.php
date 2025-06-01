<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa RPL - UNPAR</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/dashboard_styles.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    </head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <img src="<?= base_url('assets/img/unpar_logo.png') ?>" alt="UNPAR Logo" class="sidebar-logo">
                <span class="sidebar-university-name">UNIVERSITAS KATOLIK<br>PARAHYANGAN</span>
            </div>
            <nav class="sidebar-nav">
                <ul>
                    <li>
                        <a href="<?= site_url('dashboard/pendaftaran') ?>" class="active">
                            <span class="nav-icon icon-pendaftaran"></span> Pendaftaran
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('dashboard/profil') ?>">
                            <span class="nav-icon icon-profil"></span> Profil
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('dashboard/ubah-foto') ?>">
                            <span class="nav-icon icon-ubah-foto"></span> Ubah Foto
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('dashboard/jadwal-kegiatan') ?>">
                            <span class="nav-icon icon-jadwal"></span> Jadwal Kegiatan
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('dashboard/pengaturan') ?>">
                            <span class="nav-icon icon-pengaturan"></span> Pengaturan
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="sidebar-nav" style="margin-top:auto;"> <ul>
                    <li class="nav-logout">
                        <a href="<?= site_url('logout') ?>">
                            <span class="nav-icon icon-logout"></span> Log Out
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <main class="main-content">
            <h1 class="page-header">Pendaftaran Calon Mahasiswa RPL</h1>

            <div class="stepper">
                <div class="step active">
                    <div class="step-indicator">1</div>
                    <div class="step-label">Data Diri Peserta</div>
                    <div class="step-date">Wed, 11th Jan</div>
                </div>
                <div class="step">
                    <div class="step-indicator">2</div>
                    <div class="step-label">Data Pilihan Prodi</div>
                    <div class="step-date">Wed, 11th Jan</div>
                </div>
                <div class="step">
                    <div class="step-indicator">3</div>
                    <div class="step-label">Data Formulir</div>
                    <div class="step-date">Wed, 11th Jan</div>
                </div>
                <div class="step">
                    <div class="step-indicator">4</div>
                    <div class="step-label">Pembayaran</div>
                    <div class="step-date">Expected by, Mon 16th</div>
                </div>
            </div>

            <div class="content-card">
                <h2 class="section-title">Data Diri Peserta</h2>

                <div class="photo-upload-section">
                    <h3 class="photo-upload-title">Upload Foto<span>*</span></h3>
                    <p class="photo-upload-instructions">
                        Foto background putih, berpakaian resmi, wajah menghadap ke depan, ukuran 4 x 6 cm, resolusi sekurang-kurangnya 400 x 600 pixels dan ukuran file maksimum 2 MB dalam format JPG(*.jpg).
                    </p>
                    <div class="dropzone" id="photoDropzone">
                        <div class="dropzone-icon">
                            <span class="nav-icon icon-upload" style="font-size: 3em; color: #0056b3;"></span>
                        </div>
                        <p class="dropzone-text">Drag & drop files or <span class="browse-link" id="browseLink">Browse</span></p>
                        <p class="dropzone-supported-formats">Supported formates: JPG</p>
                        <input type="file" id="fileInput" accept=".jpg,.jpeg" style="display: none;">
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Basic script to trigger file input when "Browse" or dropzone is clicked
        const photoDropzone = document.getElementById('photoDropzone');
        const browseLink = document.getElementById('browseLink');
        const fileInput = document.getElementById('fileInput');

        if (photoDropzone) {
            photoDropzone.addEventListener('click', () => {
                fileInput.click();
            });
        }
        // if (browseLink) { // Clicking dropzone itself is enough
        //     browseLink.addEventListener('click', (e) => {
        //         e.stopPropagation(); // Prevent dropzone click event from firing again
        //         fileInput.click();
        //     });
        // }


        if (fileInput) {
            fileInput.addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    const fileName = this.files[0].name;
                    // You can add logic here to display the filename or a preview
                    console.log('File selected:', fileName);
                    // Example: Update dropzone text
                    // document.querySelector('#photoDropzone .dropzone-text').textContent = `File selected: ${fileName}`;
                }
            });
        }

        // Drag and drop functionality (basic outline)
        if(photoDropzone) {
            photoDropzone.addEventListener('dragover', (event) => {
                event.preventDefault();
                photoDropzone.style.backgroundColor = '#e0ecff'; // Highlight on drag over
            });

            photoDropzone.addEventListener('dragleave', () => {
                photoDropzone.style.backgroundColor = '#f0f6ff'; // Revert background
            });

            photoDropzone.addEventListener('drop', (event) => {
                event.preventDefault();
                photoDropzone.style.backgroundColor = '#f0f6ff'; // Revert background
                if (event.dataTransfer.files && event.dataTransfer.files[0]) {
                    fileInput.files = event.dataTransfer.files; // Assign dropped files to input
                    const fileName = event.dataTransfer.files[0].name;
                    console.log('File dropped:', fileName);
                    // Example: Update dropzone text
                    // document.querySelector('#photoDropzone .dropzone-text').textContent = `File dropped: ${fileName}`;
                    // Trigger change event manually if needed for other listeners
                    const changeEvent = new Event('change');
                    fileInput.dispatchEvent(changeEvent);
                }
            });
        }
    </script>
</body>
</html>