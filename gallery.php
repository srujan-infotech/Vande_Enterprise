<?php include 'header.php'; ?>

<style>
    /* ============================================================
       GALLERY PAGE – NO GAP, NO ACCENT LINE
       ============================================================ */

    /* ---------- HERO / BANNER ---------- */
    .gallery-hero {
        height: 70vh;
        min-height: 320px;
        max-height: 600px;
        overflow: hidden;
        position: relative;
        background: #0f1a1a;
        margin-top: 90px;   /* navbar offset */
        margin-bottom: 0;    /* no bottom gap */
        /* no ::before accent line */
    }

    .gallery-hero picture,
    .gallery-hero img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        filter: grayscale(12%) brightness(0.7);
        animation: heroZoom 18s ease-in-out infinite alternate;
    }

    @keyframes heroZoom {
        0%   { transform: scale(1); }
        100% { transform: scale(1.08); }
    }

    .gallery-hero .hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(0,0,0,0.75) 0%, rgba(0,0,0,0.30) 50%, rgba(0,0,0,0.15) 100%);
        z-index: 1;
        pointer-events: none;
    }

    .gallery-hero .hero-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        padding: 0 24px;
        z-index: 2;
        text-align: center;
        animation: fadeUp 1.2s cubic-bezier(0.2, 0.8, 0.2, 1) 0.3s forwards;
        opacity: 0;
    }

    @keyframes fadeUp {
        from { opacity: 0; transform: translate(-50%, -40%); }
        to   { opacity: 1; transform: translate(-50%, -50%); }
    }

    .gallery-hero .hero-text h1 {
        color: #ffffff;
        font-size: 4.8rem;
        font-weight: 800;
        letter-spacing: 0.5px;
        text-shadow: 0 4px 24px rgba(0,0,0,0.6);
        margin: 0 0 12px;
        line-height: 1.1;
    }

    .gallery-hero .hero-text p {
        color: rgba(255,255,255,0.85);
        font-size: 1.15rem;
        max-width: 480px;
        margin: 0 auto;
        font-weight: 400;
        letter-spacing: 0.3px;
        text-shadow: 0 2px 12px rgba(0,0,0,0.4);
    }

    /* Hero responsive */
    @media (max-width: 992px) {
        .gallery-hero {
            height: 55vh;
            min-height: 280px;
            max-height: 480px;
            margin-top: 76px;
        }
        .gallery-hero .hero-text h1 { font-size: 3.8rem; }
    }

    @media (max-width: 768px) {
        .gallery-hero {
            height: 45vh;
            min-height: 240px;
            max-height: 400px;
            margin-top: 76px;
        }
        .gallery-hero .hero-text h1 { font-size: 2.8rem; }
        .gallery-hero .hero-text p { font-size: 1rem; max-width: 90%; }
    }

    @media (max-width: 530px) {
        .gallery-hero {
            height: 220px;
            min-height: 180px;
            max-height: 280px;
            margin-top: 66px;
        }
        .gallery-hero .hero-text h1 { font-size: 2rem; }
        .gallery-hero .hero-text p { font-size: 0.85rem; }
    }

    /* ---------- GALLERY SECTION ---------- */
    .section-shop {
        padding: 30px 0 70px;   /* top padding reduced, but background covers */
        background: #f4f7f6;    /* soft background – no white gap */
        margin-top: 0;          /* flush with hero */
    }

    @media (max-width: 768px) {
        .section-shop {
            padding: 20px 0 40px;
        }
    }

    /* ---------- FILTERS ---------- */
    .gallery-filters {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 12px;
        margin-bottom: 40px;
    }

    .gallery-filter-btn {
        border: 2px solid #164243;
        background: transparent;
        color: #164243;
        font-size: 15px;
        font-weight: 600;
        letter-spacing: 0.3px;
        padding: 10px 28px;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .gallery-filter-btn:hover {
        background: rgba(22, 66, 67, 0.08);
    }

    .gallery-filter-btn.active {
        background: #164243;
        color: #ffffff;
    }

    @media (max-width: 576px) {
        .gallery-filter-btn {
            padding: 8px 18px;
            font-size: 13px;
        }
    }

    /* ---------- GRID ITEMS ---------- */
    .gallery-item {
        transition: opacity 0.35s ease, transform 0.35s ease;
    }
    .gallery-item.is-hidden {
        display: none;
    }

    /* ---------- IMAGE/VIDEO WRAPPER ---------- */
    .shop-image-wrapper {
        position: relative;
        overflow: hidden;
        border-radius: 14px;
        cursor: pointer;
        aspect-ratio: 4 / 3;
        background: #ececec;
        box-shadow: 0 4px 20px rgba(0,0,0,0.06);
        transition: box-shadow 0.3s ease;
    }

    .shop-image-wrapper:hover {
        box-shadow: 0 12px 40px rgba(0,0,0,0.12);
    }

    .shop-image-wrapper .shop-image img,
    .shop-image-wrapper .shop-image video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.4s ease;
    }

    .shop-image-wrapper:hover .shop-image img,
    .shop-image-wrapper:hover .shop-image video {
        transform: scale(1.05);
    }

    .shop-image-wrapper .eye-overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.30);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.35s ease;
        border-radius: 14px;
        z-index: 3;
        backdrop-filter: blur(2px);
    }

    .shop-image-wrapper:hover .eye-overlay,
    .shop-image-wrapper:focus-within .eye-overlay {
        opacity: 1;
    }

    .eye-icon-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 56px;
        height: 56px;
        background: rgba(255, 255, 255, 0.92);
        border: none;
        border-radius: 50%;
        color: #1a1a2e;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        transform: scale(0.8);
        z-index: 4;
        position: relative;
    }

    .shop-image-wrapper:hover .eye-icon-btn,
    .shop-image-wrapper:focus-within .eye-icon-btn {
        transform: scale(1);
    }

    .eye-icon-btn:hover {
        background: #ffffff;
        color: #e94560;
        transform: scale(1.08) !important;
        box-shadow: 0 8px 30px rgba(233,69,96,0.3);
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

    .play-icon-btn svg {
        fill: currentColor;
        stroke: none;
        width: 24px;
        height: 24px;
    }

    .video-badge {
        position: absolute;
        top: 14px;
        right: 14px;
        width: 36px;
        height: 36px;
        background: rgba(0,0,0,0.55);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 4;
        pointer-events: none;
    }

    .video-badge svg {
        width: 16px;
        height: 16px;
        fill: #fff;
        margin-left: 2px;
    }

    .media-type-label {
        position: absolute;
        bottom: 14px;
        left: 14px;
        padding: 4px 12px;
        background: rgba(0,0,0,0.55);
        color: #fff;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.4px;
        text-transform: uppercase;
        border-radius: 50px;
        z-index: 4;
        pointer-events: none;
    }

    @media (max-width: 576px) {
        .eye-icon-btn { width: 46px; height: 46px; }
        .eye-icon-btn svg { width: 22px; height: 22px; }
        .play-icon-btn svg { width: 20px; height: 20px; }
        .video-badge { width: 30px; height: 30px; }
        .video-badge svg { width: 14px; height: 14px; }
        .media-type-label { font-size: 10px; padding: 3px 10px; bottom: 10px; left: 10px; }
    }

    /* ---------- LIGHTBOX ---------- */
    .lightbox {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(0,0,0,0.88);
        z-index: 9999;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.35s ease;
        backdrop-filter: blur(8px);
        padding: 30px;
        box-sizing: border-box;
    }

    .lightbox.active {
        display: flex;
        opacity: 1;
    }

    .lightbox-content {
        position: relative;
        max-width: 90vw;
        max-height: 85vh;
        background: transparent;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0,0,0,0.6);
        transform: scale(0.92);
        transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .lightbox.active .lightbox-content {
        transform: scale(1);
    }

    .lightbox-content img,
    .lightbox-content video,
    .lightbox-content iframe {
        display: block;
        width: 100%;
        height: 100%;
        max-width: 90vw;
        max-height: 85vh;
        object-fit: contain;
        border-radius: 16px;
        background: #0a0a0a;
    }

    .lightbox-content iframe {
        width: 80vw;
        height: 45vw;
        max-width: 90vw;
        max-height: 85vh;
        border: 0;
    }

    .lightbox-close {
        position: fixed;
        top: 28px;
        right: 32px;
        width: 48px;
        height: 48px;
        background: rgba(255,255,255,0.12);
        border: 2px solid rgba(255,255,255,0.25);
        border-radius: 50%;
        color: #fff;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10000;
        backdrop-filter: blur(4px);
    }

    .lightbox-close:hover {
        background: rgba(255,255,255,0.25);
        border-color: rgba(255,255,255,0.5);
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

    .lightbox-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 20px 28px;
        background: linear-gradient(transparent, rgba(0,0,0,0.6));
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

    .lightbox-content.is-loading::after {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        width: 44px;
        height: 44px;
        margin: -22px 0 0 -22px;
        border: 4px solid rgba(255,255,255,0.25);
        border-top-color: #fff;
        border-radius: 50%;
        animation: spin 0.8s linear infinite;
        z-index: 1;
    }

    @keyframes spin {
        to { transform: rotate(360deg); }
    }

    .lightbox-error {
        color: #fff;
        font-size: 15px;
        text-align: center;
        padding: 60px 30px;
        max-width: 320px;
    }

    @media (max-width: 768px) {
        .lightbox { padding: 16px; }
        .lightbox-content { max-width: 98vw; max-height: 92vh; }
        .lightbox-content img,
        .lightbox-content video,
        .lightbox-content iframe {
            max-width: 98vw;
            max-height: 92vh;
        }
        .lightbox-close {
            top: 16px;
            right: 16px;
            width: 40px;
            height: 40px;
        }
        .lightbox-close svg { width: 22px; height: 22px; }
        .lightbox-caption { font-size: 13px; padding: 14px 18px; }
    }

    @media (max-width: 576px) {
        .lightbox { padding: 10px; }
        .lightbox-close { top: 12px; right: 12px; width: 36px; height: 36px; }
        .lightbox-close svg { width: 18px; height: 18px; }
        .lightbox-content iframe { width: 92vw; height: 52vw; }
    }

    body.lightbox-open {
        overflow: hidden !important;
    }

    .no-results {
        display: none;
        text-align: center;
        padding: 60px 20px;
        font-size: 1.2rem;
        color: #888;
        width: 100%;
    }
    .no-results.show { display: block; }
</style>

<!-- ============================================================
     HERO / BANNER
     ============================================================ -->
<div class="gallery-hero">
    <div class="hero-overlay"></div>
    <picture>
        <source media="(max-width: 530px)" srcset="assets/images/blog-single-image-sm.jpg">
        <source media="(max-width: 992px)" srcset="assets/images/blog-single-image.jpg">
        <img src="assets/images/img3.jpg" alt="Vande Enterprises Gallery" loading="lazy">
    </picture>
    <div class="hero-text">
        <h1>Our Gallery</h1>
        <p>Explore our finest fabrication projects, metal artistry, and on‑site installations.</p>
    </div>
</div>

<!-- ============================================================
     GALLERY SECTION
     ============================================================ -->
<section class="section-shop">
    <div class="container">

        <!-- Filters -->
        <div class="gallery-filters">
            <button class="gallery-filter-btn active" data-filter="all">All</button>
            <button class="gallery-filter-btn" data-filter="image">Photos</button>
            <button class="gallery-filter-btn" data-filter="video">Videos</button>
        </div>

        <!-- Grid -->
        <div class="row g-4" id="galleryGrid">

            <!-- ===== IMAGES ===== -->
            <?php
            $images = [
                ['src' => 'shop-image-1.jpg', 'alt' => 'Fabrication work 1'],
                ['src' => 'shop-image-2.jpg', 'alt' => 'Fabrication work 2'],
                ['src' => 'shop-image-3.jpg', 'alt' => 'Fabrication work 3'],
                ['src' => 'images-4.png', 'alt' => 'Interior metal work'],
                ['src' => 'images-5.png', 'alt' => 'Gate design'],
                ['src' => 'images-6.png', 'alt' => 'Custom railing'],
                ['src' => 'images-7.png', 'alt' => 'SS fabrication'],
                ['src' => 'images-8.png', 'alt' => 'Metal furniture'],
                ['src' => 'shop-image-1.jpg', 'alt' => 'Fabrication detail'],
            ];
            foreach ($images as $img) : ?>
                <div class="col-sm-6 col-lg-4 gallery-item" data-type="image">
                    <div class="shop-details">
                        <div class="shop-image-wrapper">
                            <div class="shop-image">
                                <img src="assets/images/<?= $img['src'] ?>" alt="<?= $img['alt'] ?>" loading="lazy">
                            </div>
                            <span class="media-type-label">Photo</span>
                            <div class="eye-overlay">
                                <button class="eye-icon-btn" data-type="image" data-src="assets/images/<?= $img['src'] ?>" data-alt="<?= $img['alt'] ?>" aria-label="View image">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                        <circle cx="12" cy="12" r="3" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- ===== VIDEOS ===== -->
            <?php
            $videos = [
                ['src' => 'video-1.mp4', 'alt' => 'Process video 1'],
                ['src' => 'video-2.mp4', 'alt' => 'Process video 2'],
                ['src' => 'video-3.mp4', 'alt' => 'Process video 3'],
                ['src' => 'video-4.mp4', 'alt' => 'Installation clip'],
                ['src' => 'video-5.mp4', 'alt' => 'Metal cutting'],
                ['src' => 'video-6.mp4', 'alt' => 'Welding process'],
                ['src' => 'video-7.mp4', 'alt' => 'Finishing work'],
                ['src' => 'video-8.mp4', 'alt' => 'Assembly'],
                ['src' => 'video-9.mp4', 'alt' => 'Quality check'],
                ['src' => 'video-10.mp4', 'alt' => 'Product showcase'],
                ['src' => 'video-11.mp4', 'alt' => 'Installation 2'],
                ['src' => 'video-12.mp4', 'alt' => 'Final product'],
            ];
            foreach ($videos as $vid) : ?>
                <div class="col-sm-6 col-lg-4 gallery-item" data-type="video">
                    <div class="shop-details">
                        <div class="shop-image-wrapper">
                            <div class="shop-image">
                                <video src="assets/videos/<?= $vid['src'] ?>" muted preload="metadata"></video>
                            </div>
                            <span class="video-badge">
                                <svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z" /></svg>
                            </span>
                            <span class="media-type-label">Video</span>
                            <div class="eye-overlay">
                                <button class="eye-icon-btn play-icon-btn" data-type="video" data-src="assets/videos/<?= $vid['src'] ?>" data-alt="<?= $vid['alt'] ?>" aria-label="Play video">
                                    <svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z" /></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- No results message -->
            <div class="col-12 no-results" id="noResults">No media found for this filter.</div>

        </div><!-- /row -->
    </div><!-- /container -->
</section>

<!-- ============================================================
     LIGHTBOX
     ============================================================ -->
<div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="Media viewer">
    <button class="lightbox-close" id="lightboxClose" aria-label="Close lightbox">
        <svg viewBox="0 0 24 24">
            <line x1="18" y1="6" x2="6" y2="18" />
            <line x1="6" y1="6" x2="18" y2="18" />
        </svg>
    </button>
    <div class="lightbox-content" id="lightboxContent">
        <div class="lightbox-caption" id="lightboxCaption"></div>
    </div>
</div>

<!-- ============================================================
     JAVASCRIPT
     ============================================================ -->
<script>
    (function() {
        'use strict';

        // ----- DOM refs -----
        const lightbox = document.getElementById('lightbox');
        const lightboxContent = document.getElementById('lightboxContent');
        const lightboxCaption = document.getElementById('lightboxCaption');
        const closeBtn = document.getElementById('lightboxClose');
        const mediaButtons = document.querySelectorAll('.eye-icon-btn');
        const filterButtons = document.querySelectorAll('.gallery-filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');
        const noResults = document.getElementById('noResults');

        // ----- Build media element -----
        function buildMediaElement(type, src, altText) {
            let el;
            if (type === 'image') {
                el = document.createElement('img');
                el.src = src;
                el.alt = altText || 'Gallery image';
                el.addEventListener('load', () => lightboxContent.classList.remove('is-loading'));
                el.addEventListener('error', () => showLightboxError('Image could not be loaded.'));
            } else if (type === 'video') {
                el = document.createElement('video');
                el.src = src;
                el.controls = true;
                el.autoplay = true;
                el.playsInline = true;
                el.addEventListener('loadeddata', () => lightboxContent.classList.remove('is-loading'));
                el.addEventListener('canplay', () => {
                    lightboxContent.classList.remove('is-loading');
                    const promise = el.play();
                    if (promise !== undefined) {
                        promise.catch(() => { el.muted = true; el.play().catch(() => {}); });
                    }
                });
                el.addEventListener('error', () => showLightboxError('Video could not be played.'));
            } else if (type === 'youtube') {
                el = document.createElement('iframe');
                el.src = src + (src.indexOf('?') > -1 ? '&' : '?') + 'autoplay=1&rel=0';
                el.setAttribute('allow', 'autoplay; encrypted-media; picture-in-picture');
                el.setAttribute('allowfullscreen', '');
                el.style.border = '0';
                el.addEventListener('load', () => lightboxContent.classList.remove('is-loading'));
            }
            return el;
        }

        function showLightboxError(message) {
            lightboxContent.classList.remove('is-loading');
            const existing = lightboxContent.querySelector('img, video, iframe, .lightbox-error');
            if (existing) existing.remove();
            const err = document.createElement('div');
            err.className = 'lightbox-error';
            err.textContent = message;
            lightboxContent.insertBefore(err, lightboxCaption);
        }

        // ----- Open / Close -----
        function openLightbox(type, src, altText) {
            if (!src) return;
            const existing = lightboxContent.querySelector('img, video, iframe, .lightbox-error');
            if (existing) existing.remove();
            lightboxContent.classList.add('is-loading');
            const media = buildMediaElement(type, src, altText);
            if (!media) return;
            lightboxContent.insertBefore(media, lightboxCaption);
            lightboxCaption.textContent = altText || '';
            lightbox.classList.add('active');
            document.body.classList.add('lightbox-open');
            closeBtn.focus();
        }

        function closeLightbox() {
            lightbox.classList.remove('active');
            document.body.classList.remove('lightbox-open');
            lightboxContent.classList.remove('is-loading');
            const media = lightboxContent.querySelector('video, iframe');
            if (media) {
                if (media.tagName === 'VIDEO') media.pause();
                else media.src = media.src; // reload iframe to stop playback
            }
        }

        // ----- Event listeners -----
        mediaButtons.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                const type = this.dataset.type || 'image';
                const src = this.dataset.src;
                const alt = this.dataset.alt || '';
                openLightbox(type, src, alt);
            });
        });

        closeBtn.addEventListener('click', closeLightbox);
        lightbox.addEventListener('click', function(e) {
            if (e.target === lightbox) closeLightbox();
        });
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && lightbox.classList.contains('active')) closeLightbox();
        });

        // Trap focus inside lightbox
        lightbox.addEventListener('keydown', function(e) {
            if (e.key === 'Tab') {
                const focusable = lightbox.querySelectorAll(
                    'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
                );
                const first = focusable[0];
                const last = focusable[focusable.length - 1];
                if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
                else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
            }
        });

        // ----- Filtering -----
        function updateFilter() {
            const activeFilter = document.querySelector('.gallery-filter-btn.active');
            const filter = activeFilter ? activeFilter.dataset.filter : 'all';
            let visibleCount = 0;

            galleryItems.forEach(item => {
                const type = item.dataset.type;
                if (filter === 'all' || filter === type) {
                    item.classList.remove('is-hidden');
                    visibleCount++;
                } else {
                    item.classList.add('is-hidden');
                }
            });

            if (visibleCount === 0) {
                noResults.classList.add('show');
            } else {
                noResults.classList.remove('show');
            }
        }

        filterButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                filterButtons.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                updateFilter();
            });
        });

        // Initial filter state
        updateFilter();

        // ----- Video thumbnail seek -----
        document.querySelectorAll('.shop-image video').forEach(v => {
            v.addEventListener('loadedmetadata', function() {
                try { this.currentTime = Math.min(1, this.duration / 4); } catch (e) {}
            });
        });

        console.log('🎨 Gallery ready – no white line, no accent bar.');
    })();
</script>

<?php include 'footer.php'; ?>