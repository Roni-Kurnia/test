<footer style="background: linear-gradient(135deg, #1e1e1e 0%, #2d2d2d 100%); margin-top: auto;">
    <div class="container py-5">
        <div class="row g-4">
            <!-- About Section -->
            <div class="col-lg-4 col-md-6">
                <div class="d-flex align-items-center mb-3">
                    <img src="<?= BASEURL; ?>/asset/icon/bird.png" alt="Logo" width="40" class="me-2">
                    <h5 class="text-white mb-0">Roni Kurnia</h5>
                </div>
                <p class="text-white-50 small">
                    Mahasiswa Informatika yang passionate dalam web development. 
                    Siap membantu mewujudkan ide Anda menjadi website yang fungsional dan menarik.
                </p>
                <div class="d-flex gap-2">
                    <a href="https://github.com/Roni-Kurnia" target="_blank" class="social-media-link" style="width: 35px; height: 35px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-github"><img src="<?= BASEURL; ?>/asset/icon/github-t.png" width="33"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/roni-kurnia-a19630398/" target="_blank" class="social-media-link" style="width: 35px; height: 35px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-linkedin"><img src="<?= BASEURL; ?>/asset/icon/linkedin.png" width="33"></i>
                    </a>
                    <a href="https://www.instagram.com/1.roni_kurnia/" target="_blank" class="social-media-link" style="width: 35px; height: 35px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-instagram"><img src="<?= BASEURL; ?>/asset/icon/instagram.png" width="33"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h6 class="text-white mb-3">Quick Links</h6>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="<?= BASEURL; ?>" class="text-white-50 text-decoration-none hover-link">
                            <i class="bi bi-chevron-right text-info small me-1"></i>Home
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="<?= BASEURL; ?>/about" class="text-white-50 text-decoration-none hover-link">
                            <i class="bi bi-chevron-right text-info small me-1"></i>About
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="<?= BASEURL; ?>/project" class="text-white-50 text-decoration-none hover-link">
                            <i class="bi bi-chevron-right text-info small me-1"></i>Projects
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Services -->
            <div class="col-lg-3 col-md-6">
                <h6 class="text-white mb-3">Services</h6>
                <ul class="list-unstyled text-white-50 small">
                    <li class="mb-2">
                        <i class="bi bi-check2 text-info me-2"></i>Web Development
                    </li>

                    <li class="mb-2">
                        <i class="bi bi-check2 text-info me-2"></i>Backend Development
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6">
                <h6 class="text-white mb-3">Contact</h6>
                <ul class="list-unstyled text-white-50 small">
                    <li class="mb-2">
                        <i class="bi bi-geo-alt-fill text-info me-2"></i>
                        Jakarta, Indonesia
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-envelope-fill text-info me-2"></i>
                        Roni.Kurnia4249@email.com
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="row mt-4 pt-4 border-top border-secondary">
            <div class="col-md-6 text-center text-md-start">
                <p class="text-white-50 small mb-0">
                    &copy; 2025 Roni Kurnia.
                </p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <p class="text-white-50 small mb-0">
                    Made in Indonesia
                </p>
            </div>
        </div>
    </div>

    <style>
        .social-media-link {
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #7c8185ff; 
            border: 2px solid #17a2b8;
            border-radius: 50px;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .social-media-link:hover {
            background-color: #17a2b8; 
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(173, 216, 230, 0.4); 
        }

        .hover-link {
            transition: all 0.3s ease;
        }
        
        .hover-link:hover {
            color: #17a2b8 !important;
            padding-left: 5px;
        }
        
        footer {
            box-shadow: 0 -5px 20px rgba(0,0,0,0.3);
        }
    </style>
</footer>

<script src="<?= BASEURL; ?>/js/bootstrap.bundle.min.js"></script>
</body>
</html>