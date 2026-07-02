<!-- Footer Section -->
<footer class="section-footer position-relative" style="background: #0d2b2c;">

    <!-- Top Gold Bar -->
    <div style="height: 4px; background: linear-gradient(90deg, #b08a3e, #e3c581, #b08a3e); background-size: 200% 100%; animation: shimmerBar 4s linear infinite;"></div>

    <style>
        @keyframes shimmerBar {
            0%   { background-position: 0% 0%; }
            100% { background-position: 200% 0%; }
        }

        .section-footer { color: #ccc; font-size: 15px; }

        .footer-top {
            padding: 70px 0 50px;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }

        .footer-brand p {
            font-size: 14px;
            color: rgba(255,255,255,0.55);
            line-height: 1.7;
            margin: 18px 0 22px;
            max-width: 290px;
        }

        .footer-tagline {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: #b08a3e;
            margin-bottom: 22px;
        }

        .footer-tagline::before,
        .footer-tagline::after {
            content: "";
            display: block;
            width: 28px;
            height: 1px;
            background: #b08a3e;
        }

        .footer-socials {
            display: flex;
            gap: 10px;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-socials a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            border: 1px solid rgba(255,255,255,0.15);
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            transition: background 0.3s ease, border-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
        }

        .footer-socials a:hover {
            background: #b08a3e;
            border-color: #b08a3e;
            color: #fff;
            transform: translateY(-3px);
        }

        .footer-col-title {
            font-size: 16px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 22px;
            padding-bottom: 12px;
            position: relative;
        }

        .footer-col-title::after {
            content: "";
            position: absolute;
            bottom: 0; left: 0;
            width: 36px; height: 2px;
            background: linear-gradient(90deg, #b08a3e, #e3c581);
            border-radius: 2px;
        }

        .footer-links {
            list-style: none;
            padding: 0; margin: 0;
            display: flex;
            flex-direction: column;
            gap: 11px;
        }

        .footer-links a {
            color: rgba(255,255,255,0.6);
            text-decoration: none;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: color 0.3s ease, gap 0.3s ease;
        }

        .footer-links a::before {
            content: "";
            display: inline-block;
            width: 6px; height: 6px;
            border-top: 1.5px solid #b08a3e;
            border-right: 1.5px solid #b08a3e;
            transform: rotate(45deg);
            flex-shrink: 0;
        }

        .footer-links a:hover { color: #e3c581; gap: 12px; }

        .footer-contact-list {
            list-style: none;
            padding: 0; margin: 0;
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .footer-contact-list li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            font-size: 14px;
            color: rgba(255,255,255,0.6);
            line-height: 1.6;
        }

        .footer-contact-list .fc-icon {
            flex-shrink: 0;
            width: 34px; height: 34px;
            border-radius: 8px;
            background: rgba(176,138,62,0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 1px;
        }

        .footer-contact-list .fc-icon svg { fill: #b08a3e; }

        .footer-contact-list a {
            color: rgba(255,255,255,0.6);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-contact-list a:hover { color: #e3c581; }

        .footer-map-wrap {
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid rgba(255,255,255,0.08);
            margin-top: 6px;
        }

        .footer-map-wrap iframe { display: block; }

        /* ── Bottom bar ── */
        .footer-bottom {
            padding: 22px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
        }

        .footer-bottom p {
            margin: 0;
            font-size: 13px;
            color: rgba(255,255,255,0.4);
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .footer-bottom a {
            color: #b08a3e;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-bottom a:hover { color: #e3c581; }

        /* credit icon animations */
        .footer-credit-icon {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            color: rgba(255,255,255,0.4);
            font-size: 13px;
        }

        .footer-credit-icon .icon-sparkle {
            display: inline-block;
            color: #b08a3e;
            font-size: 15px;
            animation: sparklePulse 2.5s ease-in-out infinite;
        }

        .footer-credit-icon .icon-heart {
            display: inline-block;
            color: #e05555;
            font-size: 14px;
            animation: heartBeat 1.4s ease-in-out infinite;
        }

        @keyframes sparklePulse {
            0%, 100% { opacity: 1; transform: scale(1) rotate(0deg); }
            50%       { opacity: 0.7; transform: scale(1.2) rotate(15deg); }
        }

        @keyframes heartBeat {
            0%, 100% { transform: scale(1); }
            14%       { transform: scale(1.2); }
            28%       { transform: scale(1); }
            42%       { transform: scale(1.15); }
            70%       { transform: scale(1); }
        }

        @media (max-width: 991px) { .footer-top { padding: 50px 0 40px; } }
        @media (max-width: 767px) { .footer-bottom { justify-content: center; text-align: center; } }
    </style>

    <!-- Tabler Icons (for sparkle + heart icons) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">

    <div class="container">
        <div class="footer-top">
            <div class="row gy-5 gy-lg-0">

                <!-- Col 1 — Brand -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-brand">
                        <a href="index.php">
                            <img src="assets/images/logo1.png" alt="Vande Enterprises" width="180" height="auto">
                        </a>
                        <p>Crafting metal-infused furniture that blends timeless elegance with innovative PVD coating technology — built in Pune, trusted across India.</p>
                        <div class="footer-tagline">Shaping Interior Excellence</div>
                        <ul class="footer-socials">
                            <li>
                                <a href="#" aria-label="Facebook" target="_blank">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 16.991 5.657 21.128 10.438 21.879V14.891H7.898V12H10.438V9.797C10.438 7.291 11.93 5.907 14.215 5.907C15.309 5.907 16.453 6.102 16.453 6.102V8.561H15.193C13.95 8.561 13.563 9.333 13.563 10.124V12H16.336L15.893 14.891H13.563V21.879C18.343 21.129 22 16.99 22 12Z" fill="currentColor"/></svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-label="Instagram" target="_blank">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M7.8 2H16.2C19.4 2 22 4.6 22 7.8V16.2C22 19.4 19.4 22 16.2 22H7.8C4.6 22 2 19.4 2 16.2V7.8C2 4.6 4.6 2 7.8 2ZM7.6 4C5.61 4 4 5.61 4 7.6V16.4C4 18.39 5.61 20 7.6 20H16.4C18.39 20 20 18.39 20 16.4V7.6C20 5.61 18.39 4 16.4 4H7.6ZM17.25 6C16.8358 6 16.5 6.33579 16.5 6.75C16.5 7.16421 16.8358 7.5 17.25 7.5C17.6642 7.5 18 7.16421 18 6.75C18 6.33579 17.6642 6 17.25 6ZM12 7C9.23858 7 7 9.23858 7 12C7 14.7614 9.23858 17 12 17C14.7614 17 17 14.7614 17 12C17 9.23858 14.7614 7 12 7ZM12 9C13.6569 9 15 10.3431 15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9Z" fill="currentColor"/></svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-label="Twitter / X" target="_blank">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M22.46 6C21.69 6.35 20.86 6.58 20 6.69C20.88 6.16 21.56 5.32 21.88 4.31C21.05 4.81 20.13 5.16 19.16 5.36C18.37 4.5 17.26 4 16 4C13.65 4 11.73 5.92 11.73 8.29C11.73 8.63 11.77 8.96 11.84 9.27C8.28 9.09 5.11 7.38 3 4.79C2.63 5.42 2.42 6.16 2.42 6.94C2.42 8.43 3.17 9.75 4.33 10.5C3.62 10.5 2.96 10.3 2.38 10C2.38 12.11 3.86 13.85 5.82 14.24C5.46 14.34 5.08 14.39 4.69 14.39C4.42 14.39 4.15 14.36 3.89 14.31C4.43 16 6 17.26 7.89 17.29C6.43 18.45 4.58 19.13 2.56 19.13C2.22 19.13 1.88 19.11 1.54 19.07C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79C20.33 8.6 20.33 8.42 20.32 8.23C21.16 7.63 21.88 6.87 22.46 6Z" fill="currentColor"/></svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-label="LinkedIn" target="_blank">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M19 3C20.1 3 21 3.9 21 5V19C21 20.1 20.1 21 19 21H5C3.9 21 3 20.1 3 19V5C3 3.9 3.9 3 5 3H19ZM18.5 18.5V13.2C18.5 11.4 17.04 9.94 15.24 9.94C14.34 9.94 13.54 10.36 13.02 11.02V10.11H10.11V18.5H13.02V14.05C13.02 13.18 13.73 12.47 14.6 12.47C15.47 12.47 16.18 13.18 16.18 14.05V18.5H18.5ZM6.88 8.56C7.78 8.56 8.5 7.84 8.5 6.94C8.5 6.04 7.78 5.32 6.88 5.32C5.98 5.32 5.26 6.04 5.26 6.94C5.26 7.84 5.98 8.56 6.88 8.56ZM8.27 18.5V10.11H5.5V18.5H8.27Z" fill="currentColor"/></svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Col 2 — Quick Links -->
                <div class="col-lg-2 col-md-6 col-6">
                    <h6 class="footer-col-title">Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>

                <!-- Col 3 — Services -->
                <div class="col-lg-2 col-md-6 col-6">
                    <h6 class="footer-col-title">Our Services</h6>
                    <ul class="footer-links">
                        <li><a href="#">SS Fabrication</a></li>
                        <li><a href="#">MS Fabrication</a></li>
                        <li><a href="#">PVD Coating</a></li>
                        <li><a href="#">Custom Furniture</a></li>
                        <li><a href="#">Interior Solutions</a></li>
                    </ul>
                </div>

                <!-- Col 4 — Contact -->
                <div class="col-lg-3 col-md-6">
                    <h6 class="footer-col-title">Contact Us</h6>
                    <ul class="footer-contact-list">
                        <li>
                            <span class="fc-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/></svg>
                            </span>
                            <span>Shop No.10, Khedkar Industries, Narhe-Katraj Road, Narhe, Pune – 411041.</span>
                        </li>
                        <li>
                            <span class="fc-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24a11.36 11.36 0 003.55.57c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.61 21 3 13.39 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.55.11.35.03.74-.24 1.02l-2.21 2.22z"/></svg>
                            </span>
                            <span>
                                <a href="tel:8089768370">8089768370</a><br>
                                <a href="tel:7488470936">7488470936</a><br>
                                <a href="tel:7620229568">7620229568</a>
                            </span>
                        </li>
                        <li>
                            <span class="fc-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                            </span>
                            <a href="mailto:info.vande28@gmail.com">info.vande28@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <!-- Col 5 — Map -->
                <div class="col-lg-2 col-md-6">
                    <h6 class="footer-col-title">Find Us</h6>
                    <div class="footer-map-wrap">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.839601028083!2d73.82137290929008!3d18.44559048256097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc295fe8218d6dd%3A0x906152e9c20fc0a8!2sKhedekar%20Industrial%20Estate%20nearby%20Shri%20control%20chowk!5e0!3m2!1sen!2ssg!4v1781342163520!5m2!1sen!2ssg"
                            width="100%" height="200" style="border:0;"
                            allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="footer-bottom">
            <!-- Left: credit with animated icons -->
            <p>
                <span class="icon-sparkle"><i class="ti ti-sparkles" aria-hidden="true"></i></span>
                Crafted by
                <a href="https://srujaninfotech.com/" target="_blank">Srujan Infotech</a>
                <span class="icon-heart"><i class="ti ti-heart" aria-hidden="true"></i></span>
            </p>
            <!-- Right: copyright with dynamic year -->
            <p>&copy; <span class="dynamic-year"></span> Vande Enterprises. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<!-- Back to top -->
<div class="progressCounter progressScroll progress-scroll-opacity-0">
    <div class="progressScroll-border">
        <div class="progressScroll-circle">
            <span class="progressScroll-text text-secondary">
                <svg width="24" height="24" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.1758 41.7882C11.4955 41.1079 11.4388 40.0401 12.0057 39.2953L12.1758 39.1007L39.0508 12.2256C39.7929 11.4835 40.9962 11.4835 41.7383 12.2256C42.4186 12.9059 42.4753 13.9737 41.9084 14.7185L41.7383 14.9131L14.8633 41.7882C14.1211 42.5303 12.9179 42.5303 12.1758 41.7882Z" />
                    <path d="M18.7659 15.5153C17.7163 15.5175 16.8637 14.6685 16.8614 13.619C16.8594 12.6649 17.5608 11.8735 18.4769 11.7358L18.7577 11.7146L40.3903 11.668C41.3473 11.6659 42.14 12.3714 42.2746 13.2906L42.2947 13.5723L42.25 35.2067C42.2478 36.2562 41.3952 37.1052 40.3457 37.1031C39.3916 37.1011 38.6031 36.3963 38.4693 35.4797L38.4493 35.1988L38.489 15.4727L18.7659 15.5153Z" />
                </svg>
            </span>
        </div>
    </div>
</div>

</div><!-- /.page -->

<script src="assets/js/jquery-3.7.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/anime.min.js"></script>
<script src="assets/js/animate.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/odometer.js"></script>
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script src="assets/js/jquery.progressScroll.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
