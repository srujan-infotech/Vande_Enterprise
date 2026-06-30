<?php include 'header.php'; ?>

<style>
    /* Fix banner height and prevent overlap */
    .blog-single-image {
        height: 350px;
        overflow: hidden;
        position: relative;
        margin-bottom: 40px;
        /* ← यहाँ गैप जोड़ा गया है */
    }

    .blog-single-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Overlay – matches contact page (0.2 opacity) */
    .blog-single-image .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.2);
        z-index: 1;
        pointer-events: none;
    }

    /* Position "About Us" text – above overlay */
    .blog-single-text {
        top: 15% !important;
        transform: translateY(0) !important;
        left: 0;
        width: 100%;
        padding-left: 15px;
        padding-right: 15px;
        z-index: 2;
    }

    @media (max-width: 530px) {
        .blog-single-image {
            height: 250px;
        }

        .blog-single-text {
            top: 10% !important;
        }
    }

    /* Additional spacing for about section (optional) */
    .section-about {
        margin-top: 2rem;
    }

    /* ========== EYE ICON OVERLAY ========== */
    .shop-image-wrapper {
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        cursor: pointer;
    }

    .shop-image-wrapper .shop-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.4s ease;
    }

    /* The overlay that appears on hover */
    .shop-image-wrapper .eye-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.35);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.35s ease;
        border-radius: 12px;
        z-index: 3;
        backdrop-filter: blur(2px);
    }

    .shop-image-wrapper:hover .eye-overlay {
        opacity: 1;
    }

    .shop-image-wrapper:hover .shop-image img {
        transform: scale(1.04);
    }

    /* Eye icon button */
    .eye-icon-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 56px;
        height: 56px;
        background: rgba(255, 255, 255, 0.92);
        border: none;
        border-radius: 50%;
        font-size: 24px;
        color: #1a1a2e;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        transform: scale(0.8);
        pointer-events: auto;
        z-index: 4;
        position: relative;
    }

    .shop-image-wrapper:hover .eye-icon-btn {
        transform: scale(1);
    }

    .eye-icon-btn:hover {
        background: #ffffff;
        color: #e94560;
        transform: scale(1.08) !important;
        box-shadow: 0 8px 30px rgba(233, 69, 96, 0.3);
    }

    .eye-icon-btn svg {
        width: 28px;
        height: 28px;
        fill: none;
        stroke: currentColor;
        stroke-width: 2;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    /* ========== LIGHTBOX / MODAL ========== */
    .lightbox {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.88);
        z-index: 9999;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.35s ease;
        backdrop-filter: blur(8px);
        padding: 30px;
    }

    .lightbox.active {
        display: flex;
        opacity: 1;
    }

    .lightbox-content {
        position: relative;
        max-width: 85vw;
        max-height: 85vh;
        background: transparent;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.6);
        transform: scale(0.92);
        transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .lightbox.active .lightbox-content {
        transform: scale(1);
    }

    .lightbox-content img {
        display: block;
        width: 100%;
        height: 100%;
        max-width: 85vw;
        max-height: 85vh;
        object-fit: contain;
        border-radius: 16px;
        background: #0a0a0a;
    }

    /* Close button */
    .lightbox-close {
        position: fixed;
        top: 28px;
        right: 32px;
        width: 48px;
        height: 48px;
        background: rgba(255, 255, 255, 0.12);
        border: 2px solid rgba(255, 255, 255, 0.25);
        border-radius: 50%;
        font-size: 28px;
        color: #fff;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10000;
        backdrop-filter: blur(4px);
        line-height: 1;
    }

    .lightbox-close:hover {
        background: rgba(255, 255, 255, 0.25);
        border-color: rgba(255, 255, 255, 0.5);
        transform: rotate(90deg);
    }

    .lightbox-close svg {
        width: 28px;
        height: 28px;
        fill: none;
        stroke: currentColor;
        stroke-width: 2.5;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    /* Counter / caption (optional) */
    .lightbox-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 20px 28px;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.6));
        color: #fff;
        font-size: 15px;
        font-weight: 400;
        letter-spacing: 0.3px;
        opacity: 0;
        transition: opacity 0.4s ease;
        pointer-events: none;
        border-radius: 0 0 16px 16px;
    }

    .lightbox.active .lightbox-caption {
        opacity: 1;
    }

    /* Responsive */
    @media (max-width: 576px) {
        .lightbox {
            padding: 12px;
        }

        .lightbox-content {
            max-width: 98vw;
            max-height: 92vh;
        }

        .lightbox-content img {
            max-width: 98vw;
            max-height: 92vh;
        }

        .lightbox-close {
            top: 14px;
            right: 16px;
            width: 40px;
            height: 40px;
            font-size: 22px;
        }

        .lightbox-close svg {
            width: 22px;
            height: 22px;
        }

        .eye-icon-btn {
            width: 46px;
            height: 46px;
            font-size: 20px;
        }

        .eye-icon-btn svg {
            width: 22px;
            height: 22px;
        }

        .lightbox-caption {
            font-size: 13px;
            padding: 14px 18px;
        }
    }

    /* Smooth scroll lock */
    body.lightbox-open {
        overflow: hidden !important;
    }
</style>

<!--Banner Section ======================-->
<div class="blog-single-image position-relative max-width">
    <div class="overlay"></div>
    <picture>
        <source media="(max-width:530px)" srcset="assets/images/blog-single-image-sm.jpg">
        <img src="assets/images/blog-single-image.jpg" alt="hero-image">
    </picture>
    <div class="container">
        <div class="blog-single-text position-absolute">
            <h5 class="display-3 fw-extra-bold mt-0">Our gallery</h5>
        </div>
    </div>
</div>
<!--Banner Section ======================-->

<!--Shop Section ======================-->
<section class="section-shop position-relative">
    <div class="container">
        <div class="row gx-4 gy-5 gy-lg-70 section-padding-lg">

            <!-- Image 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="shop-details">
                    <div class="shop-image-wrapper position-relative">
                        <div class="shop-image">
                            <img src="assets/images/shop-image-1.jpg" class="w-100 h-100 object-fit-cover" alt="Gallery image 1">
                        </div>
                        <!-- Eye icon overlay -->
                        <div class="eye-overlay">
                            <button class="eye-icon-btn" data-img="assets/images/shop-image-1.jpg" data-alt="Gallery image 1" aria-label="View image">
                                <!-- Eye icon SVG -->
                                <svg viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="shop-details">
                    <div class="shop-image-wrapper position-relative">
                        <div class="shop-image">
                            <img src="assets/images/shop-image-2.jpg" class="w-100 h-100 object-fit-cover" alt="Gallery image 2">
                        </div>
                        <div class="eye-overlay">
                            <button class="eye-icon-btn" data-img="assets/images/shop-image-2.jpg" data-alt="Gallery image 2" aria-label="View image">
                                <svg viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="shop-details">
                    <div class="shop-image-wrapper position-relative">
                        <div class="shop-image">
                            <img src="assets/images/shop-image-3.jpg" class="w-100 h-100 object-fit-cover" alt="Gallery image 3">
                        </div>
                        <div class="eye-overlay">
                            <button class="eye-icon-btn" data-img="assets/images/shop-image-3.jpg" data-alt="Gallery image 3" aria-label="View image">
                                <svg viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image 4 (extra – you can add more) -->
            <div class="col-md-6 col-lg-4">
                <div class="shop-details">
                    <div class="shop-image-wrapper position-relative">
                        <div class="shop-image">
                            <img src="assets/images/shop-image-1.jpg" class="w-100 h-100 object-fit-cover" alt="Gallery image 4">
                        </div>
                        <div class="eye-overlay">
                            <button class="eye-icon-btn" data-img="assets/images/shop-image-1.jpg" data-alt="Gallery image 4" aria-label="View image">
                                <svg viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image 5 (extra) -->
            <div class="col-md-6 col-lg-4">
                <div class="shop-details">
                    <div class="shop-image-wrapper position-relative">
                        <div class="shop-image">
                            <img src="assets/images/shop-image-2.jpg" class="w-100 h-100 object-fit-cover" alt="Gallery image 5">
                        </div>
                        <div class="eye-overlay">
                            <button class="eye-icon-btn" data-img="assets/images/shop-image-2.jpg" data-alt="Gallery image 5" aria-label="View image">
                                <svg viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image 6 (extra) -->
            <div class="col-md-6 col-lg-4">
                <div class="shop-details">
                    <div class="shop-image-wrapper position-relative">
                        <div class="shop-image">
                            <img src="assets/images/shop-image-3.jpg" class="w-100 h-100 object-fit-cover" alt="Gallery image 6">
                        </div>
                        <div class="eye-overlay">
                            <button class="eye-icon-btn" data-img="assets/images/shop-image-3.jpg" data-alt="Gallery image 6" aria-label="View image">
                                <svg viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- row -->
    </div>
</section>
<!--Shop Section ======================-->

<!-- ========== LIGHTBOX ========== -->
<div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="Image viewer">
    <button class="lightbox-close" id="lightboxClose" aria-label="Close lightbox">
        <svg viewBox="0 0 24 24">
            <line x1="18" y1="6" x2="6" y2="18" />
            <line x1="6" y1="6" x2="18" y2="18" />
        </svg>
    </button>
    <div class="lightbox-content">
        <img id="lightboxImg" src="" alt="">
        <div class="lightbox-caption" id="lightboxCaption"></div>
    </div>
</div>

<script>
    (function() {
        'use strict';

        // DOM refs
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightboxImg');
        const lightboxCaption = document.getElementById('lightboxCaption');
        const closeBtn = document.getElementById('lightboxClose');

        // All eye buttons
        const eyeButtons = document.querySelectorAll('.eye-icon-btn');

        // Open lightbox
        function openLightbox(imgSrc, altText) {
            if (!imgSrc) return;

            lightboxImg.src = imgSrc;
            lightboxImg.alt = altText || 'Gallery image';
            lightboxCaption.textContent = altText || '';

            // Show with animation
            lightbox.classList.add('active');
            document.body.classList.add('lightbox-open');

            // Trap focus inside lightbox
            closeBtn.focus();
        }

        // Close lightbox
        function closeLightbox() {
            lightbox.classList.remove('active');
            document.body.classList.remove('lightbox-open');

            // Remove src to free memory (optional)
            // setTimeout(() => { lightboxImg.src = ''; }, 400);
        }

        // --- Event listeners ---

        // Click on eye buttons
        eyeButtons.forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                const imgSrc = this.getAttribute('data-img');
                const altText = this.getAttribute('data-alt') || '';
                openLightbox(imgSrc, altText);
            });
        });

        // Close button
        closeBtn.addEventListener('click', closeLightbox);

        // Click on backdrop (lightbox bg) to close
        lightbox.addEventListener('click', function(e) {
            if (e.target === lightbox) {
                closeLightbox();
            }
        });

        // ESC key to close
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && lightbox.classList.contains('active')) {
                closeLightbox();
            }
        });

        // Tab trap inside lightbox
        lightbox.addEventListener('keydown', function(e) {
            if (e.key === 'Tab') {
                const focusable = lightbox.querySelectorAll(
                    'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
                );
                const first = focusable[0];
                const last = focusable[focusable.length - 1];
                if (e.shiftKey && document.activeElement === first) {
                    e.preventDefault();
                    last.focus();
                } else if (!e.shiftKey && document.activeElement === last) {
                    e.preventDefault();
                    first.focus();
                }
            }
        });

        // Handle window resize - just keep it responsive (no extra logic needed)

        console.log('🔍 Gallery lightbox initialized — click the 👁️ icon on any image.');
    })();
</script>

<?php include 'footer.php'; ?>