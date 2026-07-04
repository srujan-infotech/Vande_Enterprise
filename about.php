<?php include 'header.php'; ?>

<style>
  .blog-single-image {
    width: 100%;
    height: 80vh;
    overflow: hidden;
    position: relative;
    background: var(--teal-dark, #0f2d2e);
}

.blog-single-image picture {
    display: block;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 0;
}

.blog-single-image picture img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center center;
    display: block;
    filter: grayscale(15%);
    animation: heroZoom 16s ease-in-out infinite alternate;
}

@keyframes heroZoom {
    0%   { transform: scale(1); }
    100% { transform: scale(1.12); }
}

.blog-single-image .overlay {
    position: absolute; top: 0; left: 0; width: 100%; height: 100%;
    background: linear-gradient(90deg, rgba(0,0,0,0.78) 0%, rgba(0,0,0,0.6) 35%, rgba(0,0,0,0.35) 65%, rgba(0,0,0,0.15) 100%);
    z-index: 1; pointer-events: none;
}
.blog-single-image::before {
    content: ""; position: absolute; top: 0; left: 0; width: 100%; height: 6px;
    background: linear-gradient(90deg, #b08a3e, #e3c581, #b08a3e);
    background-size: 200% 100%; z-index: 2;
    animation: shimmerBar 4s linear infinite;
}
@keyframes shimmerBar { 0% { background-position: 0% 0%; } 100% { background-position: 200% 0%; } }
.blog-single-text {
    position: absolute; inset: 0; width: 100%;
    display: flex; align-items: center; justify-content: center;
    padding: 0 24px; text-align: center; z-index: 2;
}
.blog-single-text h5 {
    color: #fff !important; font-weight: 800 !important; line-height: 1.25 !important;
    letter-spacing: 0.5px;  text-shadow: 0 3px 10px rgba(0,0,0,0.6);
    opacity: 0; animation: heroTextIn 1s cubic-bezier(0.2,0.8,0.2,1) 0.3s forwards;
    font-size: clamp(1.6rem, 6vw, 5rem) !important;
    max-width: 100%; word-wrap: break-word;
}
@keyframes heroTextIn { 0% { opacity: 0; transform: translateY(30px); } 100% { opacity: 1; transform: translateY(0); } }
@media (max-width: 991px) { .blog-single-image { height: 320px; } }
@media (max-width: 768px) { .blog-single-image { height: 230px; } .blog-single-text { padding: 0 20px; } }
@media (max-width: 530px) { .blog-single-image { height: 190px; } .blog-single-text { padding: 0 18px; } }
@media (max-width: 360px) { .blog-single-image { height: 170px; } }

.section-about { margin-top: 2rem; padding: 0; }
.about-2 .about-bg { background: transparent; padding: 0; }
.about-2 .about-overlap-row { position: relative; display: flex; align-items: stretch; min-height: 600px; }
.about-2 .about-image-full { flex: 1 1 100%; position: relative; overflow: hidden; min-height: 600px; }
.about-2 .about-image-full img { width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; transition: transform 0.8s ease; }
.about-2 .about-overlap-row:hover .about-image-full img { transform: scale(1.06); }
@keyframes arrowPulse {
    0%, 100% { transform: translate(-50%, -50%) scale(1); box-shadow: 0 4px 16px rgba(0,0,0,0.15); }
    50% { transform: translate(-50%, -50%) scale(1.1); box-shadow: 0 6px 22px rgba(0,0,0,0.25); }
}
.about-2 .about-text-card {
    position: absolute; top: 10%; left: 0; width: 42%; max-width: 650px;
    background-color: #ffffff; padding: 60px 55px; z-index: 2;
    box-shadow: 0 20px 50px rgba(0,0,0,0.12); opacity: 0;
    transform: translateX(-40px); animation: cardSlideIn 1s ease 0.2s forwards;
}
@keyframes cardSlideIn { 0% { opacity: 0; transform: translateX(-40px); } 100% { opacity: 1; transform: translateX(0); } }
.about-2 .about-text-card h5.display-5 { font-size: 46px; font-weight: 800; color: #164243; letter-spacing: 1px; margin-bottom: 28px; }
.about-2 .about-text-card p { font-size: 16px; line-height: 1.85; color: #2c2c2c; margin-bottom: 16px; }
.about-2 .about-text-card p:last-child { margin-bottom: 0; }
.about-2 .about-text-card p b, .about-2 .about-text-card p strong { color: #164243; }
@media (max-width: 1199px) { .about-2 .about-text-card { width: 50%; padding: 45px 35px; } .about-2 .about-text-card h5.display-5 { font-size: 36px; } }
@media (max-width: 991px) {
    .about-2 .about-overlap-row { flex-direction: column; min-height: auto; }
    .about-2 .about-image-full { min-height: 320px; }
    .about-2 .about-text-card { position: relative; top: 0; left: 0; width: 90%; max-width: 90%; margin: -60px auto 0; padding: 40px 32px; }
    .about-2 .about-arrow { display: none; }
}
@media (max-width: 576px) {
    .about-2 .about-image-full { min-height: 260px; }
    .about-2 .about-text-card { width: calc(100% - 32px); max-width: calc(100% - 32px); padding: 32px 22px; margin: -36px auto 0; }
    .about-2 .about-text-card h5.display-5 { font-size: 26px; margin-bottom: 18px; }
    .about-2 .about-text-card p { font-size: 14.5px; line-height: 1.75; }
}
@media (max-width: 360px) {
    .about-2 .about-image-full { min-height: 220px; }
    .about-2 .about-text-card { padding: 26px 18px; margin-top: -28px; }
    .about-2 .about-text-card h5.display-5 { font-size: 22px; }
}

.section-our-story { padding: 90px 0 70px; background-color: transparent; }
.section-our-story .story-image { border-radius: 12px; overflow: hidden; }
.section-our-story .story-image img { border-radius: 12px; width: 100%; transition: transform 0.6s ease; }
.section-our-story .story-image:hover img { transform: scale(1.05); }
.section-our-story h5.display-5 { font-size: 38px; font-weight: 800; color: #164243; margin-bottom: 24px; }
.section-our-story p { font-size: 16px; line-height: 1.85; color: #2c2c2c; margin-bottom: 16px; }
.section-our-story p:last-child { margin-bottom: 0; }
.section-our-story p b, .section-our-story p strong { color: #164243; }
@media (max-width: 991px) { .section-our-story { padding: 60px 0 50px; } .section-our-story h5.display-5 { font-size: 30px; } .section-our-story .story-image { margin-bottom: 30px; } }
@media (max-width: 576px) {
    .section-our-story { padding: 45px 0 40px; }
    .section-our-story h5.display-5 { font-size: 24px; margin-bottom: 16px; }
    .section-our-story p { font-size: 14.5px; line-height: 1.75; margin-bottom: 14px; }
    .section-our-story .story-image { margin-bottom: 22px; }
}

.section-mission-vision { padding: 70px 0 80px; background-color: transparent; }
.mission-vision-card {
    background-color: #164243; border-radius: 16px; padding: 40px 30px 35px;
    box-shadow: 0 8px 30px rgba(0,0,0,0.12); transition: transform 0.35s ease, box-shadow 0.35s ease;
    height: 100%; text-align: center; color: #ffffff; border: none !important; outline: none !important;
}
.mission-vision-card:hover { transform: translateY(-10px) scale(1.02); box-shadow: 0 18px 50px rgba(0,0,0,0.22); background-color: #164243; }
.mission-vision-card * { border: none !important; outline: none !important; text-decoration: none !important; }
.mission-vision-card .icon-wrapper {
    display: inline-flex; align-items: center; justify-content: center;
    width: 72px; height: 72px; background: rgba(255,255,255,0.18); border-radius: 50%;
    margin-bottom: 20px; font-size: 34px; color: #ffffff; transition: transform 0.4s ease, background 0.4s ease;
}
.mission-vision-card:hover .icon-wrapper { transform: rotate(360deg) scale(1.1); background: rgba(255,255,255,0.3); }
.mission-vision-card h4 { font-size: 26px; font-weight: 700; margin-bottom: 16px; color: #ffffff; letter-spacing: 0.5px; }
.mission-vision-card p { font-size: 16px; line-height: 1.7; color: rgba(255,255,255,0.92); margin-bottom: 0; }
@media (max-width: 768px) { .section-mission-vision { padding: 50px 0 60px; } .mission-vision-card { padding: 30px 20px 25px; } .mission-vision-card h4 { font-size: 22px; } }
@media (max-width: 576px) {
    .section-mission-vision { padding: 40px 0 45px; }
    .mission-vision-card { padding: 26px 20px 22px; }
    .mission-vision-card .icon-wrapper { width: 60px; height: 60px; font-size: 28px; margin-bottom: 14px; }
    .mission-vision-card h4 { font-size: 20px; margin-bottom: 10px; }
    .mission-vision-card p { font-size: 14.5px; }
}

.section-founder { padding: 70px 0 80px; background-color: transparent; }
.founder-card {
    background-color: #ffffff; border-radius: 16px; box-shadow: 0 8px 30px rgba(0,0,0,0.08);
    overflow: hidden; display: flex; flex-wrap: wrap; align-items: stretch;
    transition: box-shadow 0.4s ease, transform 0.4s ease;
}
.founder-card:hover { box-shadow: 0 20px 55px rgba(0,0,0,0.16); transform: translateY(-4px); }
.founder-image-wrap { flex: 0 0 38%; max-width: 38%; position: relative; min-height: 320px; background-color: #164243; overflow: hidden; }
.founder-image-wrap img { width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; transition: transform 0.6s ease; }
.founder-card:hover .founder-image-wrap img { transform: scale(1.08); }
.founder-details { flex: 1 1 62%; max-width: 62%; padding: 40px 45px; }
.founder-details h4 { font-size: 26px; font-weight: 700; color: #164243; margin-bottom: 4px; }
.founder-details .founder-role { font-size: 16px; font-weight: 600; color: #b08a3e; margin-bottom: 22px; display: block; }
.founder-info-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 22px 30px; margin-bottom: 22px; }
.founder-info-item h6 { font-size: 15px; font-weight: 700; color: #164243; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 6px; }
.founder-info-item p { font-size: 15px; line-height: 1.6; color: #444; margin-bottom: 0; }
.founder-quote { border-top: 1px solid #eee; margin-top: 10px; padding-top: 20px; font-size: 15.5px; line-height: 1.7; color: #333; font-style: italic; }
@media (max-width: 991px) {
    .section-founder { padding: 55px 0 60px; }
    .founder-details { padding: 32px 30px; }
}
@media (max-width: 768px) {
    .founder-image-wrap, .founder-details { flex: 1 1 100%; max-width: 100%; }
    .founder-image-wrap { min-height: 260px; }
    .founder-details { padding: 30px 25px; }
    .founder-info-grid { grid-template-columns: 1fr; gap: 16px; }
}
@media (max-width: 576px) {
    .section-founder { padding: 45px 0 50px; }
    .founder-image-wrap { min-height: 220px; }
    .founder-details { padding: 24px 20px; }
    .founder-details h4 { font-size: 21px; }
    .founder-details .founder-role { font-size: 14px; margin-bottom: 16px; }
    .founder-info-item h6 { font-size: 13px; }
    .founder-info-item p { font-size: 14px; }
    .founder-quote { font-size: 14px; padding-top: 16px; }
}

/* ----- OUR TEAM SECTION ----- */
.section-team { padding: 70px 0 90px; background-color: transparent; }
.section-team .team-heading h5.display-5 { font-size: 38px; font-weight: 800; color: #164243; margin-bottom: 12px; }
.section-team .team-heading p { font-size: 16px; color: #555; max-width: 560px; margin: 0 auto; }
.team-card {
    background-color: #ffffff; border-radius: 16px; overflow: hidden;
    box-shadow: 0 8px 26px rgba(0,0,0,0.08); transition: transform 0.4s ease, box-shadow 0.4s ease;
    height: 100%; text-align: center;
}
.team-card:hover { transform: translateY(-10px); box-shadow: 0 20px 45px rgba(0,0,0,0.14); }
.team-photo {
    position: relative;
    width: 100%;
    aspect-ratio: 1 / 1;
    border-radius: 50%;
    overflow: hidden;
    background: #164243;
    display: flex;
    align-items: center;
    justify-content: center;
}
.team-photo img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    transition: transform 0.5s ease;
}
.team-card:hover .team-photo img { transform: scale(1.08); }
.team-info { padding: 22px 18px 26px; position: relative; }
.team-info::before {
    content: ""; position: absolute; top: 0; left: 50%; transform: translateX(-50%);
    width: 40px; height: 3px; background: linear-gradient(90deg, #b08a3e, #e3c581); border-radius: 2px;
}
.team-info h4 { font-size: 19px; font-weight: 700; color: #164243; margin: 10px 0 4px; }
.team-info .team-role { font-size: 14px; font-weight: 600; color: #b08a3e; display: block; margin-bottom: 10px; text-transform: uppercase; letter-spacing: 0.4px; }
.team-info .team-bio { font-size: 14px; line-height: 1.6; color: #666; margin-bottom: 0; }
@media (max-width: 768px) { .section-team { padding: 50px 0 60px; } .section-team .team-heading h5.display-5 { font-size: 30px; } }
@media (max-width: 576px) {
    .section-team { padding: 40px 0 50px; }
    .section-team .team-heading h5.display-5 { font-size: 24px; }
    .section-team .team-heading p { font-size: 14.5px; }
    .team-info { padding: 18px 14px 20px; }
    .team-info h4 { font-size: 17px; }
    .team-info .team-role { font-size: 12.5px; }
    .team-info .team-bio { font-size: 13.5px; }
}

/* Team Slider */
.team-slider-wrap { position: relative; padding: 0 60px; }
.team-slider-track { display: flex; gap: 24px; overflow-x: auto; scroll-behavior: smooth; scroll-snap-type: x mandatory; padding: 8px 4px 20px; -ms-overflow-style: none; scrollbar-width: none; }
.team-slider-track::-webkit-scrollbar { display: none; }
.team-slide { flex: 0 0 calc(25% - 18px); scroll-snap-align: start; }
.team-slider-arrow {
    position: absolute; top: 45%; transform: translateY(-50%); width: 46px; height: 46px;
    border-radius: 50%; background-color: #164243; color: #fff; border: none;
    display: flex; align-items: center; justify-content: center; cursor: pointer; z-index: 4;
    box-shadow: 0 6px 18px rgba(0,0,0,0.18); transition: background-color 0.3s ease, transform 0.3s ease; padding: 0;
}
.team-slider-arrow .arrow-glyph { display: inline-block; width: 10px; height: 10px; border-top: 2px solid #fff; border-right: 2px solid #fff; }
.team-slider-arrow.prev .arrow-glyph { transform: rotate(-135deg); margin-left: 4px; }
.team-slider-arrow.next .arrow-glyph { transform: rotate(45deg); margin-right: 4px; }
.team-slider-arrow:hover { background-color: #b08a3e; transform: translateY(-50%) scale(1.08); }
.team-slider-arrow.prev { left: 0; }
.team-slider-arrow.next { right: 0; }
.team-slider-dots { display: flex; justify-content: center; gap: 8px; margin-top: 8px; }
.team-slider-dots .dot { width: 9px; height: 9px; border-radius: 50%; background-color: #d8d8d8; cursor: pointer; transition: background-color 0.3s ease, transform 0.3s ease; }
.team-slider-dots .dot.active { background-color: #164243; transform: scale(1.25); }
@media (max-width: 1199px) { .team-slide { flex: 0 0 calc(33.333% - 16px); } }
@media (max-width: 991px) { .team-slide { flex: 0 0 calc(50% - 12px); } .team-slider-wrap { padding: 0 50px; } }
@media (max-width: 576px) {
    .team-slide { flex: 0 0 92%; }
    .team-slider-wrap { padding: 0 34px; }
    .team-slider-arrow { width: 38px; height: 38px; }
    .team-slider-track { gap: 14px; }
}
@media (max-width: 420px) {
    .team-slide { flex: 0 0 100%; }
    .team-slider-wrap { padding: 0 28px; }
    .team-slider-arrow { width: 34px; height: 34px; }
    .team-slider-track { gap: 0; }
}

/* ----- OUR CLIENTS SECTION ----- */
.section-clients { padding: 70px 0 80px; overflow: hidden; }
.clients-ticker-outer { overflow: hidden; position: relative; margin-top: 48px; }
.clients-ticker-outer::before,
.clients-ticker-outer::after {
    content: ""; position: absolute; top: 0; bottom: 0; width: 100px; z-index: 2; pointer-events: none;
}
.clients-ticker-outer::before { left: 0; background: linear-gradient(to right, #fff 0%, transparent 100%); }
.clients-ticker-outer::after  { right: 0; background: linear-gradient(to left,  #fff 0%, transparent 100%); }
.clients-ticker-track {
    display: flex; gap: 40px; width: max-content;
    animation: clientsTicker 30s linear infinite; padding: 10px 0 20px;
}
.clients-ticker-track:hover { animation-play-state: paused; }
@keyframes clientsTicker { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
.client-logo-card {
    flex: 0 0 130px; width: 130px; height: 130px; border-radius: 50%;
    background: #fff; border: 2px solid #ececec;
    box-shadow: 0 6px 20px rgba(0,0,0,0.07);
    display: flex; align-items: center; justify-content: center;
    overflow: hidden; position: relative;
    transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease; cursor: pointer;
}
.clients-ticker-track:hover .client-logo-card:hover {
    transform: translateY(-8px) scale(1.1);
    box-shadow: 0 18px 38px rgba(176,138,62,0.25); border-color: #b08a3e;
}
.client-logo-card img { width: 80%; height: 80%; object-fit: contain; border-radius: 0; display: block; transition: transform 0.4s ease; }
.clients-ticker-track:hover .client-logo-card:hover img { transform: scale(1.07); }
@media (max-width: 768px) {
    .section-clients { padding: 50px 0 60px; }
    .client-logo-card { flex: 0 0 95px; width: 95px; height: 95px; }
    .clients-ticker-outer::before, .clients-ticker-outer::after { width: 50px; }
}
@media (max-width: 576px) {
    .section-clients { padding: 40px 0 50px; }
    .clients-ticker-outer { margin-top: 30px; }
    .clients-ticker-track { gap: 24px; }
    .client-logo-card { flex: 0 0 78px; width: 78px; height: 78px; }
    .clients-ticker-outer::before, .clients-ticker-outer::after { width: 32px; }
}
/* ----- END OUR CLIENTS SECTION ----- */

/* ----- Scroll-reveal ----- */
.reveal-up { opacity: 0; transform: translateY(40px); transition: opacity 0.8s ease, transform 0.8s ease; }
.reveal-up.in-view { opacity: 1; transform: translateY(0); }
.reveal-stagger > * { opacity: 0; transform: translateY(40px); transition: opacity 0.7s ease, transform 0.20s ease; }
.reveal-stagger.in-view > *:nth-child(1) { transition-delay: 0.10s; }
.reveal-stagger.in-view > *:nth-child(2) { transition-delay: 0.20s; }
.reveal-stagger.in-view > *:nth-child(3) { transition-delay: 0.35s; }
.reveal-stagger.in-view > * { opacity: 1; transform: translateY(0); }

/* ----- Global mobile container safety ----- */
@media (max-width: 576px) {
    .container { padding-left: 18px; padding-right: 18px; }
}
@media (max-width: 360px) {
    .container { padding-left: 16px; padding-right: 16px; }
}

@media (prefers-reduced-motion: reduce) {
    .blog-single-image picture img, .blog-single-text h5, .about-2 .about-text-card,
    .about-2 .about-arrow, .reveal-up, .reveal-stagger > * {
        animation: none !important; transition: none !important; opacity: 1 !important; transform: none !important;
    }
}
</style>

<!--Banner Section-->
<div class="blog-single-image position-relative max-width">
    <div class="overlay"></div>
    <picture>
        <source media="(max-width:530px)" srcset="assets/images/blog-single-image-sm.jpg">
        <img src="assets/images/img-1.jpg" alt="hero-image">
    </picture>
    <div class="container">
        <div class="blog-single-text position-absolute">
            <h5 class="display-1 fw-extra-bold mt-0">About Us</h5>
        </div>
    </div>
</div>

<!--About Section-->
<section class="section-about about-2 section-full-width position-relative">
    <div class="about-bg position-relative">
        <div class="about-overlap-row">
            <div class="about-image-full">
                <img src="assets/images/about1.jpg" alt="about-image">
            </div>
            <div class="about-arrow">
                <i class="fa-solid fa-chevron-right"></i>
            </div>
            <div class="about-text-card">
                <h5 class="display-5">About Us</h5>
                <p><b>VANDE ENTERPRISES</b> is driven by the philosophy of creating furniture that seamlessly blends functionality with innovative design. We have recognized the potential of incorporating metal into interior decor, a trend that has gained global recognition in recent years. Along with that we offers <b>Customization of furniture</b> with <b>the elegant touch of PVD coating.</b></p>
                <p>At the heart of <b>VANDE ENTERPRISES</b> is our commitment to innovation, superior design, and unmatched quality.</p>
            </div>
        </div>
    </div>
</section>

<!--Our Story Section-->
<section class="section-our-story">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6">
                <div class="story-image overflow-hidden reveal-up">
                    <img src="assets/images/about2.jpg" class="img-fluid" alt="our-story-image">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="story-contents d-flex flex-column reveal-up">
                    <h5 class="display-5">Our Story</h5>
                    <p>What began as a small fabrication setup in Narhe, Pune in 2016 has grown into <b>VANDE ENTERPRISES</b> — a name trusted for SS &amp; MS fabrication and metal-infused furniture design. Founded by <b>Pravin Siddramappa Bhave</b>, a Civil Engineer with 15 years of project management experience across Maharashtra, Telangana, Karnataka &amp; Kerala, the company was built on a foundation of discipline, craftsmanship and an eye for detail.</p>
                    <p>Today, with a dedicated team of 7 core staff and 32 skilled workers operating across 4 sites in Pune, we continue to push the boundaries of what metal furniture can be — blending durability with the elegant touch of <b>PVD coating</b> to create pieces that are as functional as they are beautiful.</p>
                    <p>Backed by strong family roots in the fabrication industry and guided by shared values, our story is one of steady growth, hands-on leadership, and an unwavering commitment to quality.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOUNDER SECTION -->
<section class="section-founder">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-8 text-center reveal-up">
                <h5 class="display-5">Meet Our Founder</h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="founder-card reveal-up">
                    <div class="founder-image-wrap">
                        <img src="https://i.pinimg.com/474x/fc/61/92/fc6192afd6869bc7b5b98b3d56eed948.jpg" alt="Pravin Siddramappa Bhave - Founder, Vande Enterprises">
                    </div>
                    <div class="founder-details">
                        <h4>Pravin Siddramappa Bhave</h4>
                        <span class="founder-role">Founder – Vande Enterprises, Pune</span>
                        <div class="founder-info-grid">
                            <div class="founder-info-item">
                                <h6>Education</h6>
                                <p>B.E. Civil, WIT College Solapur<br>MMS, IMSSR Tilak Road, Pune</p>
                            </div>
                            <div class="founder-info-item">
                                <h6>Experience</h6>
                                <p>15 years as Project Manager (2000–2015) across Maharashtra, Telangana, Karnataka &amp; Kerala.</p>
                            </div>
                            <div class="founder-info-item">
                                <h6>Business</h6>
                                <p>Founded Vande Enterprises in 2016 — specialized in SS &amp; MS Fabrication, Narhe, Pune. A team of 7 staff (incl. founder &amp; wife) along with 32 workers across 4 sites in Pune.</p>
                            </div>
                            <div class="founder-info-item">
                                <h6>Leadership</h6>
                                <p>Mrs. Supriya Bhave actively manages day-to-day business operations alongside the founder.</p>
                            </div>
                        </div>
                        <p class="founder-quote">A Civil Engineer turned entrepreneur, Pravin brings over two decades of project management expertise and strong family-rooted industry experience to lead a growing 30+ member fabrication team in Pune.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- OUR TEAM SECTION -->
<section class="section-team">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center team-heading reveal-up">
                <h5 class="display-5">Meet Our Team</h5>
                <p>The skilled hands and dedicated minds behind every piece of furniture we craft — combining experience, precision and passion for design.</p>
            </div>
        </div>
        <div class="team-slider-wrap reveal-up">
            <button class="team-slider-arrow prev" id="teamPrev" aria-label="Previous"><span class="arrow-glyph"></span></button>
            <button class="team-slider-arrow next" id="teamNext" aria-label="Next"><span class="arrow-glyph"></span></button>
            <div class="team-slider-track" id="teamTrack">
                <div class="team-slide"><div class="team-card"><div class="team-photo"><img src="https://i.pinimg.com/736x/62/16/9f/62169fb4f961f71ff689f1d6a215dc6f.jpg" alt="Rahul Sawant"></div><div class="team-info"><h4>Rahul Sawant</h4><span class="team-role">Production Head</span><p class="team-bio">Oversees fabrication quality and timelines across all 4 Pune work sites.</p></div></div></div>
                <div class="team-slide"><div class="team-card"><div class="team-photo"><img src="https://i.pinimg.com/736x/09/04/88/090488cd968fc9b2f36565c891ff3602.jpg" alt="Supriya Bhave"></div><div class="team-info"><h4>Supriya Bhave</h4><span class="team-role">Operations Manager</span><p class="team-bio">Manages day-to-day business operations alongside the founder.</p></div></div></div>
                <div class="team-slide"><div class="team-card"><div class="team-photo"><img src="https://i.pinimg.com/736x/7c/25/74/7c25747aa214fa6eedec7cd13bf06a64.jpg" alt="Akash Jadhav"></div><div class="team-info"><h4>Akash Jadhav</h4><span class="team-role">Design Lead</span><p class="team-bio">Leads custom furniture design and the PVD coating finishing process.</p></div></div></div>
                <div class="team-slide"><div class="team-card"><div class="team-photo"><img src="https://i.pinimg.com/1200x/86/95/4c/86954c3f789236355d341d74687758b0.jpg" alt="Mahesh Jagtap"></div><div class="team-info"><h4>Mahesh Jagtap</h4><span class="team-role">Site Supervisor</span><p class="team-bio">Coordinates the skilled workforce across installation and site projects.</p></div></div></div>
                <div class="team-slide"><div class="team-card"><div class="team-photo"><img src="https://i.pinimg.com/736x/17/b1/e9/17b1e90db838609c2c343517d6b94e12.jpg" alt="Sandeep More"></div><div class="team-info"><h4>Sandeep More</h4><span class="team-role">Welding Supervisor</span><p class="team-bio">Ensures precision SS &amp; MS welding standards across every project.</p></div></div></div>
                <div class="team-slide"><div class="team-card"><div class="team-photo"><img src="https://i.pinimg.com/736x/ec/54/c4/ec54c4ee119b085a230a11bb66aa4d24.jpg" alt="Pooja Kale"></div><div class="team-info"><h4>Pooja Kale</h4><span class="team-role">Client Relations</span><p class="team-bio">Manages client communication and ensures a smooth project experience.</p></div></div></div>
                <div class="team-slide"><div class="team-card"><div class="team-photo"><img src="https://i.pinimg.com/736x/00/a5/0e/00a50ef41ed3f0a2af6bc21d011c3c1d.jpg" alt="Vikram Pawar"></div><div class="team-info"><h4>Vikram Pawar</h4><span class="team-role">PVD Coating Specialist</span><p class="team-bio">Handles the precision finishing that gives our furniture its signature shine.</p></div></div></div>
                <div class="team-slide"><div class="team-card"><div class="team-photo"><img src="https://i.pinimg.com/736x/eb/35/01/eb3501e07b4969c68115384cbe7ebf70.jpg" alt="Nitin Shinde"></div><div class="team-info"><h4>Nitin Shinde</h4><span class="team-role">Site Engineer</span><p class="team-bio">Manages on-ground execution and quality checks across active sites.</p></div></div></div>
                <div class="team-slide"><div class="team-card"><div class="team-photo"><img src="https://i.pinimg.com/736x/4f/37/26/4f3726e481efeca38abe2e991cd773b9.jpg" alt="Ganesh Lokhande"></div><div class="team-info"><h4>Ganesh Lokhande</h4><span class="team-role">Fabrication Specialist</span><p class="team-bio">Brings 10+ years of hands-on metal fabrication craftsmanship to every piece.</p></div></div></div>
                <div class="team-slide"><div class="team-card"><div class="team-photo"><img src="https://i.pinimg.com/736x/90/06/83/9006838f5f8347d83b65fea831b40eb9.jpg" alt="Snehal Deshmukh"></div><div class="team-info"><h4>Snehal Deshmukh</h4><span class="team-role">Accounts &amp; Admin</span><p class="team-bio">Keeps billing, vendor records and office administration running smoothly.</p></div></div></div>
            </div>
            <div class="team-slider-dots" id="teamDots"></div>
        </div>
    </div>
</section>

<!-- ========== OUR CLIENTS SECTION ========== -->
<section class="section-clients">
    <div class="container">
        <div class="row justify-content-center mb-2">
            <div class="col-lg-7 text-center reveal-up">
                <h5 class="display-5" style="font-size:38px;font-weight:800;color:#164243;margin-bottom:10px;">Our Clients</h5>
                <p style="font-size:16px;color:#555;max-width:500px;margin:0 auto;">Trusted by leading builders, developers and businesses across Pune and beyond.</p>
                <div style="width:60px;height:3px;background:linear-gradient(90deg,#b08a3e,#e3c581);border-radius:2px;margin:16px auto 0;"></div>
            </div>
        </div>
    </div>
    <div class="clients-ticker-outer">
        <div class="clients-ticker-track">
            <div class="client-logo-card">
                <img src="https://i.pinimg.com/736x/6d/89/4c/6d894c7ccb74a0faf26c85ee144dce66.jpg" alt="Client Logo 1">
            </div>
            <div class="client-logo-card">
                <img src="https://i.pinimg.com/736x/e9/cf/26/e9cf261c7db2c43c5c4c98225d3d36e4.jpg" alt="Client Logo 2">
            </div>
            <div class="client-logo-card">
                <img src="https://i.pinimg.com/736x/92/86/82/928682d49b47cdbcff88e611ae2d6501.jpg" alt="Client Logo 3">
            </div>
            <div class="client-logo-card">
                <img src="https://i.pinimg.com/736x/8f/61/4a/8f614abe2b0d5b6396e7ad6297bbb593.jpg" alt="Client Logo 4">
            </div>
            <div class="client-logo-card">
                <img src="https://i.pinimg.com/736x/c7/74/8c/c7748c538d37fee110eaa46c8c7600a2.jpg" alt="Client Logo 3">
            </div>
            <div class="client-logo-card">
                <img src="https://i.pinimg.com/736x/09/c5/60/09c56040c44751eaa0e1196383f647a4.jpg" alt="Client Logo 4">
            </div>
            <div class="client-logo-card">
                <img src="https://i.pinimg.com/736x/4d/f5/eb/4df5eb2537a31d06018cd68184a4921a.jpg" alt="Client Logo 5">
            </div>
            <div class="client-logo-card">
                <img src="https://i.pinimg.com/736x/f1/a8/5c/f1a85cce95fc727d723c7c393d2d5fba.jpg" alt="Client Logo 6">
            </div>
            <div class="client-logo-card">
                <img src="https://i.pinimg.com/736x/6a/ea/26/6aea264c4dd6b3e656a1b9631704478a.jpg" alt="Client Logo 6">
            </div>
        </div>
    </div>
</section>
<!-- ========== OUR CLIENTS SECTION END ========== -->

<!-- MISSION & VISION SECTION -->
<section class="section-mission-vision">
    <div class="container">
        <div class="row g-4 justify-content-center reveal-stagger">
            <div class="col-md-6 col-lg-6">
                <div class="mission-vision-card">
                    <div class="icon-wrapper">
                        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <h4>Our Mission</h4>
                    <p>To craft exceptional metal-infused furniture that elevates modern living spaces, combining timeless elegance with cutting-edge PVD coating technology, while ensuring every piece tells a story of quality and innovation.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="mission-vision-card">
                    <div class="icon-wrapper">
                        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>
                        </svg>
                    </div>
                    <h4>Our Vision</h4>
                    <p>To become a global benchmark in metal-infused furniture design, inspiring a new era of interior aesthetics where durability meets artistry, and every reflection showcases our passion for perfection.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var revealEls = document.querySelectorAll('.reveal-up, .reveal-stagger');
    if (!('IntersectionObserver' in window)) {
        revealEls.forEach(function(el){ el.classList.add('in-view'); }); return;
    }
    var observer = new IntersectionObserver(function(entries){
        entries.forEach(function(entry){
            if (entry.isIntersecting){ entry.target.classList.add('in-view'); observer.unobserve(entry.target); }
        });
    }, { threshold: 0.2 });
    revealEls.forEach(function(el){ observer.observe(el); });

    var track = document.getElementById('teamTrack');
    var prevBtn = document.getElementById('teamPrev');
    var nextBtn = document.getElementById('teamNext');
    var dotsWrap = document.getElementById('teamDots');

    if (track && prevBtn && nextBtn && dotsWrap) {
        var slides = track.querySelectorAll('.team-slide');
        function getPerView() {
            var w = window.innerWidth;
            if (w <= 576) return 1; if (w <= 991) return 2; if (w <= 1199) return 3; return 4;
        }
        function getSlideWidth() { return slides[0].getBoundingClientRect().width + 24; }
        function buildDots() {
            dotsWrap.innerHTML = '';
            var pages = Math.ceil(slides.length / getPerView());
            for (var i = 0; i < pages; i++) {
                var dot = document.createElement('span');
                dot.className = 'dot' + (i === 0 ? ' active' : '');
                dot.dataset.index = i;
                dot.addEventListener('click', function(){
                    track.scrollTo({ left: parseInt(this.dataset.index) * getPerView() * getSlideWidth(), behavior: 'smooth' });
                    restartAutoplay();
                });
                dotsWrap.appendChild(dot);
            }
        }
        function updateActiveDot() {
            var maxScroll = track.scrollWidth - track.clientWidth;
            var dots = dotsWrap.querySelectorAll('.dot');
            var page = track.scrollLeft >= maxScroll - 5 ? dots.length - 1 : Math.round(track.scrollLeft / (getSlideWidth() * getPerView()));
            dots.forEach(function(d,i){ d.classList.toggle('active', i === page); });
        }
        function scrollByPage(dir) { track.scrollBy({ left: dir * getPerView() * getSlideWidth(), behavior: 'smooth' }); }
        prevBtn.addEventListener('click', function(){ scrollByPage(-1); restartAutoplay(); });
        nextBtn.addEventListener('click', function(){ scrollByPage(1); restartAutoplay(); });
        track.addEventListener('scroll', function(){ window.clearTimeout(track._st); track._st = window.setTimeout(updateActiveDot, 100); });
        buildDots();
        window.addEventListener('resize', function(){ window.clearTimeout(window._trt); window._trt = window.setTimeout(buildDots, 200); });

        var DELAY = 3000, timer = null;
        function isAtEnd(){ return track.scrollLeft + track.clientWidth >= track.scrollWidth - 5; }
        function tick(){ isAtEnd() ? track.scrollTo({ left: 0, behavior: 'smooth' }) : scrollByPage(1); }
        function start(){ stop(); timer = window.setInterval(tick, DELAY); }
        function stop(){ if(timer){ window.clearInterval(timer); timer = null; } }
        function restartAutoplay(){ stop(); start(); }
        var wrap = document.querySelector('.team-slider-wrap');
        if (wrap) {
            wrap.addEventListener('mouseenter', stop);
            wrap.addEventListener('mouseleave', start);
            wrap.addEventListener('touchstart', stop, { passive: true });
            wrap.addEventListener('touchend', function(){ window.setTimeout(start, DELAY); }, { passive: true });
        }
        start();
    }
});
</script>

<?php include 'footer.php'; ?>