<?php include 'header.php'; ?>

<style>
    /* Fix banner height and prevent overlap */
    .blog-single-image {
        height: 350px;
        overflow: hidden;
        position: relative;
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

    /* ----- Mission & Vision styles (only boxes have #164243) ----- */
    .section-mission-vision {
        padding: 70px 0 80px;
        background-color: transparent;
        /* section background transparent */
    }

    .mission-vision-card {
        background-color: #164243;
        /* sirf box ka background */
        border-radius: 16px;
        padding: 40px 30px 35px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        text-align: center;
        color: #ffffff;

        /* ----- Koi bhi white line nahi aani chahiye ----- */
        border: none !important;
        outline: none !important;
    }

    .mission-vision-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 48px rgba(0, 0, 0, 0.20);
        background-color: #164243;
        /* hover par bhi wahi colour */
    }

    /* Card ke ANDAR ke saare elements se border/outline/underline hatao */
    .mission-vision-card * {
        border: none !important;
        outline: none !important;
        text-decoration: none !important;
    }

    .mission-vision-card .icon-wrapper {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 72px;
        height: 72px;
        background: rgba(255, 255, 255, 0.18);
        border-radius: 50%;
        margin-bottom: 20px;
        font-size: 34px;
        color: #ffffff;
    }

    .mission-vision-card h4 {
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 16px;
        color: #ffffff;
        letter-spacing: 0.5px;
    }

    .mission-vision-card p {
        font-size: 16px;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.92);
        margin-bottom: 0;
    }

    /* responsive */
    @media (max-width: 768px) {
        .section-mission-vision {
            padding: 50px 0 60px;
        }

        .mission-vision-card {
            padding: 30px 20px 25px;
        }

        .mission-vision-card h4 {
            font-size: 22px;
        }
    }

    @media (max-width: 576px) {
        .mission-vision-card .icon-wrapper {
            width: 60px;
            height: 60px;
            font-size: 28px;
        }
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
            <h5 class="display-3 fw-extra-bold mt-0">About Us</h5>
        </div>
    </div>
</div>
<!--Banner Section ======================-->

<!--About Section ======================-->
<section class="section-about about-2 section-full-width position-relative pt-4 pt-lg-0">
    <div class="about-bg bg-primary text-secondary position-relative">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="about-image overflow-hidden">
                        <img src="assets/images/about1.jpg" class="img-fluid wow slideInLeft" alt="about-image">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-contents d-flex flex-column">
                        <h5 class="display-5"> Our Story</h5>
                        <p>VANDE ENTERPRISES is driven by the philosophy of creating furniture that seamlessly blends functionality with innovative design. We have recognized the potential of incorporating metal into interior decor, a trend that has gained global recognition in recent years.</p>
                        <p> Along with that we offers Customization of furniture with the elegant touch of PVD coating.</p>
                        <p>At the heart of VANDE ENTERPRISES is our commitment to innovation, superior design, and unmatched quality.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Section ======================-->

<!-- ========== MISSION & VISION SECTION (only boxes coloured) ========== -->
<section class="section-mission-vision">
    <div class="container">
        <div class="row g-4 justify-content-center">

            <!-- Mission Card -->
            <div class="col-md-6 col-lg-6">
                <div class="mission-vision-card">
                    <div class="icon-wrapper">
                        <!-- target / mission icon -->
                        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2L2 7l10 5 10-5-10-5z" />
                            <path d="M2 17l10 5 10-5" />
                            <path d="M2 12l10 5 10-5" />
                        </svg>
                    </div>
                    <h4>Our Mission</h4>
                    <p>To craft exceptional metal-infused furniture that elevates modern living spaces, combining timeless elegance with cutting‑edge PVD coating technology, while ensuring every piece tells a story of quality and innovation.</p>
                </div>
            </div>

            <!-- Vision Card -->
            <div class="col-md-6 col-lg-6">
                <div class="mission-vision-card">
                    <div class="icon-wrapper">
                        <!-- eye / vision icon -->
                        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                    </div>
                    <h4>Our Vision</h4>
                    <p>To become a global benchmark in metal‑infused furniture design, inspiring a new era of interior aesthetics where durability meets artistry, and every reflection showcases our passion for perfection.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>