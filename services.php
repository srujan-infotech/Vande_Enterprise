<?php include 'header.php'; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
/* ================================================================
   SERVICES PAGE — Vande Enterprises
   ================================================================ */

/* ---- Hero ---- */
.services-hero{height:80vh;overflow:hidden;position:relative}
.services-hero img{width:100%;height:100%;object-fit:cover;filter:grayscale(15%);animation:sHeroZoom 16s ease-in-out infinite alternate}
@keyframes sHeroZoom{0%{transform:scale(1)}100%{transform:scale(1.1)}}
.services-hero::before{content:"";position:absolute;top:0;left:0;width:100%;height:6px;background:linear-gradient(90deg,#b08a3e,#e3c581,#b08a3e);background-size:200% 100%;z-index:3;animation:sShimmer 4s linear infinite}
@keyframes sShimmer{0%{background-position:0%}100%{background-position:200%}}
.services-hero .overlay{position:absolute;inset:0;background:linear-gradient(90deg,rgba(0,0,0,.82) 0%,rgba(0,0,0,.5) 50%,rgba(0,0,0,.18) 100%);z-index:1}
.services-hero-text{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);text-align:center;width:100%;padding:0 20px;z-index:2}
.services-hero-text h1{color:#fff;font-size:5rem;font-weight:800;text-shadow:0 3px 10px rgba(0,0,0,.6);margin:0 0 14px;opacity:0;animation:sHeroIn 1s cubic-bezier(.2,.8,.2,1) .3s forwards}
.services-hero-text p{color:rgba(255,255,255,.85);font-size:1.1rem;max-width:560px;margin:0 auto;opacity:0;animation:sHeroIn 1s cubic-bezier(.2,.8,.2,1) .6s forwards}
@keyframes sHeroIn{from{opacity:0;transform:translateY(26px)}to{opacity:1;transform:translateY(0)}}

/* ---- Hero — MOBILE RESPONSIVE (updated) ---- */
@media(max-width:768px){
    .services-hero{
        height:280px;
        padding-top:72px;      /* clears the mobile navbar so heading isn't hidden behind it */
        box-sizing:border-box;
    }
    .services-hero-text{ top:50%; }
    .services-hero-text h1{ font-size:2.1rem; margin:0; }
    .services-hero-text p{
        display:none !important;   /* description hidden on mobile */
    }
}
@media(max-width:530px){
    .services-hero{
        height:230px;
        padding-top:66px;
    }
    .services-hero-text h1{ font-size:1.75rem!important; }
}
@media(max-width:380px){
    .services-hero{
        height:200px;
        padding-top:60px;
    }
    .services-hero-text h1{ font-size:1.5rem!important; }
}

/* ---- Breadcrumb ---- */
.breadcrumb-strip{background:#f4f6f5;padding:13px 0;border-bottom:1px solid #e3e8e6}
.breadcrumb-strip ol{margin:0;padding:0;list-style:none;display:flex;align-items:center;gap:8px;font-size:.87rem;color:#777}
.breadcrumb-strip ol li a{color:#164243;text-decoration:none;font-weight:600;transition:color .2s}
.breadcrumb-strip ol li a:hover{color:#b08a3e}
.breadcrumb-strip ol li.active{color:#b08a3e;font-weight:600}
.breadcrumb-strip ol li+li::before{content:"/";margin-right:8px;color:#bbb}

/* ---- Shared ---- */
.s-label{display:inline-block;font-size:.75rem;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;color:#b08a3e;margin-bottom:12px}
.s-heading{font-size:2.55rem;font-weight:800;color:#164243;line-height:1.25;margin-bottom:18px}
.s-sub{font-size:1rem;line-height:1.8;color:#666;max-width:630px}
.centered-block{text-align:center}
.centered-block .s-sub{margin:0 auto}
.s-divider{width:60px;height:3px;background:linear-gradient(90deg,#b08a3e,#e3c581);border-radius:2px;margin:14px auto 0}
@media(max-width:768px){.s-heading{font-size:1.85rem}}

/* ---- Scroll reveal ---- */
.rv-up{opacity:0;transform:translateY(38px);transition:opacity .8s ease,transform .8s ease}
.rv-up.in-view{opacity:1;transform:translateY(0)}
.rv-stagger>*{opacity:0;transform:translateY(36px);transition:opacity .7s ease,transform .7s ease}
.rv-stagger.in-view>*:nth-child(1){transition-delay:.05s}
.rv-stagger.in-view>*:nth-child(2){transition-delay:.17s}
.rv-stagger.in-view>*:nth-child(3){transition-delay:.29s}
.rv-stagger.in-view>*:nth-child(4){transition-delay:.41s}
.rv-stagger.in-view>*:nth-child(5){transition-delay:.53s}
.rv-stagger.in-view>*:nth-child(6){transition-delay:.65s}
.rv-stagger.in-view>*{opacity:1;transform:translateY(0)}
@media(prefers-reduced-motion:reduce){.rv-up,.rv-stagger>*{animation:none!important;transition:none!important;opacity:1!important;transform:none!important}}

/* ================================================================
   SERVICE CARDS — icon beside heading
   ================================================================ */
.sec-services{padding:90px 0 80px}

.svc-card{
    background:#fff;
    border-radius:18px;
    overflow:hidden;
    box-shadow:0 6px 30px rgba(0,0,0,.07);
    transition:transform .4s ease,box-shadow .4s ease,border-color .4s ease;
    height:100%;
    display:flex;
    flex-direction:column;
    border:1px solid #f0f0f0;
    border-bottom:4px solid transparent;
}
.svc-card:hover{
    transform:translateY(-10px);
    box-shadow:0 24px 56px rgba(0,0,0,.13);
    border-color:rgba(176,138,62,.25);
    border-bottom-color:#b08a3e;
}

/* Image — clean, no overlapping badge */
.svc-card-img{
    width:100%;height:210px;
    overflow:hidden;flex-shrink:0;
    background:#edf3f3;
}
.svc-card-img img{
    width:100%;height:100%;
    object-fit:cover;
    transition:transform .6s ease;
    display:block;
}
.svc-card:hover .svc-card-img img{transform:scale(1.07)}

/* Card body */
.svc-card-body{
    padding:24px 24px 26px;
    display:flex;flex-direction:column;flex:1;
}

/* ── Icon + heading row ── */
.svc-card-title{
    display:flex;
    align-items:center;
    gap:14px;
    margin-bottom:14px;
}

/* Icon circle beside heading */
.svc-head-icon{
    width:46px;height:46px;
    border-radius:12px;
    background:linear-gradient(135deg,#164243,#1f5a5b);
    color:#e3c581;
    display:flex;align-items:center;justify-content:center;
    font-size:1.1rem;
    flex-shrink:0;
    box-shadow:0 4px 14px rgba(22,66,67,.25);
    transition:background .35s,transform .35s,box-shadow .35s;
}
.svc-card:hover .svc-head-icon{
    background:linear-gradient(135deg,#b08a3e,#e3c581);
    color:#fff;
    transform:rotate(8deg) scale(1.1);
    box-shadow:0 6px 20px rgba(176,138,62,.35);
}

.svc-card-title h4{
    font-size:1.05rem;font-weight:700;
    color:#164243;margin:0;line-height:1.3;
}

.svc-card-body p{font-size:.91rem;line-height:1.78;color:#666;margin-bottom:18px;flex:1}

.svc-tags{display:flex;flex-wrap:wrap;gap:6px;margin-bottom:20px}
.svc-tag{
    font-size:.7rem;font-weight:600;letter-spacing:.4px;text-transform:uppercase;
    background:#edf3f3;color:#164243;border-radius:20px;padding:4px 12px;
    border:1px solid #dce9e9;
    transition:background .25s,color .25s;
}
.svc-card:hover .svc-tag{background:#164243;color:#e3c581}

.svc-link{
    display:inline-flex;align-items:center;gap:7px;
    font-size:.85rem;font-weight:700;color:#164243;
    text-decoration:none;letter-spacing:.3px;
    transition:color .25s,gap .25s;margin-top:auto;
}
.svc-link i{font-size:.8rem;transition:transform .25s}
.svc-link:hover{color:#b08a3e;gap:12px}
.svc-link:hover i{transform:translateX(4px)}

/* ================================================================
   SECTION 2 — PROCESS
   ================================================================ */
.sec-process{padding:80px 0 90px;background:#f4f7f6}
.proc-wrap{display:flex;flex-wrap:wrap;position:relative}
.proc-step{flex:1 1 200px;text-align:center;padding:0 20px;position:relative}
.proc-step:not(:last-child)::after{content:"";position:absolute;top:40px;left:68%;width:64%;height:2px;background:linear-gradient(90deg,#b08a3e 0%,rgba(176,138,62,0) 100%)}
.proc-num{width:80px;height:80px;border-radius:50%;background:#164243;color:#fff;font-size:1.55rem;font-weight:800;display:flex;align-items:center;justify-content:center;margin:0 auto 20px;position:relative;z-index:1;box-shadow:0 8px 24px rgba(22,66,67,.28);transition:background .35s,transform .35s}
.proc-step:hover .proc-num{background:#b08a3e;transform:scale(1.1)}
.proc-step h5{font-size:1rem;font-weight:700;color:#164243;margin-bottom:9px}
.proc-step p{font-size:.9rem;line-height:1.75;color:#666;margin:0}
@media(max-width:991px){.proc-step{flex:1 1 45%;margin-bottom:44px}.proc-step::after{display:none}}
@media(max-width:576px){.proc-step{flex:1 1 100%}}

/* ================================================================
   SECTION 3 — PVD FEATURE
   ================================================================ */
.sec-pvd{padding:90px 0}
.pvd-img-wrap{border-radius:16px;overflow:hidden;min-height:460px;position:relative}
.pvd-img-wrap img{width:100%;height:100%;object-fit:cover;position:absolute;inset:0;transition:transform .7s ease}
.pvd-img-wrap:hover img{transform:scale(1.06)}
.pvd-badge{position:absolute;bottom:26px;left:26px;background:#b08a3e;color:#fff;border-radius:12px;padding:14px 20px;z-index:2;font-size:.85rem;line-height:1.5}
.pvd-badge strong{display:block;font-size:1.5rem;font-weight:800}
.pvd-body{padding-left:44px}
.pvd-body h2{font-size:2.2rem;font-weight:800;color:#164243;margin-bottom:18px;line-height:1.3}
.pvd-body p{font-size:.97rem;line-height:1.85;color:#555;margin-bottom:14px}
.pvd-checklist{list-style:none;padding:0;margin:24px 0 34px;display:flex;flex-direction:column;gap:13px}
.pvd-checklist li{display:flex;align-items:flex-start;gap:12px;font-size:.94rem;color:#444;line-height:1.6}
.pvd-checklist .ck{width:22px;height:22px;border-radius:50%;background:#164243;color:#fff;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:2px;font-size:.65rem}
.pvd-cta-btn{display:inline-flex;align-items:center;gap:10px;background:#164243;color:#fff;padding:14px 30px;border-radius:8px;font-size:.92rem;font-weight:700;text-decoration:none;transition:background .3s,transform .3s,box-shadow .3s}
.pvd-cta-btn:hover{background:#b08a3e;color:#fff;transform:translateY(-3px);box-shadow:0 10px 28px rgba(176,138,62,.35)}
@media(max-width:991px){.pvd-body{padding-left:0;margin-top:36px}.pvd-img-wrap{min-height:300px}.pvd-body h2{font-size:1.8rem}}

/* ================================================================
   SECTION 4 — STATS
   ================================================================ */
.sec-stats{padding:70px 0;background:#164243}
.stat-box{text-align:center}
.stat-box .num{font-size:3rem;font-weight:800;color:#e3c581;display:block;line-height:1;margin-bottom:8px}
.stat-box .lbl{font-size:.9rem;color:rgba(255,255,255,.8);font-weight:500}

/* ================================================================
   SECTION 5 — TESTIMONIALS
   ================================================================ */
.sec-testimonials{padding:90px 0 80px}
.tcard{background:#fff;border-radius:16px;padding:32px 28px 28px;box-shadow:0 6px 28px rgba(0,0,0,.07);display:flex;flex-direction:column;height:100%;transition:transform .35s,box-shadow .35s;border-top:4px solid transparent}
.tcard:hover{transform:translateY(-6px);box-shadow:0 18px 46px rgba(0,0,0,.12);border-top-color:#b08a3e}
.tcard .stars{display:flex;gap:4px;margin-bottom:14px}
.tcard .stars i{color:#f5a623;font-size:14px}
.tcard .quote-i{font-size:2.4rem;color:#e0eae9;line-height:1;margin-bottom:10px}
.tcard p{font-size:.92rem;line-height:1.8;color:#555;flex:1;margin-bottom:24px}
.tcard .reviewer{display:flex;flex-direction:column;align-items:center;gap:8px;border-top:1px solid #f0f0f0;padding-top:18px;text-align:center}
.tcard .reviewer img{width:68px;height:68px;border-radius:50%;object-fit:cover;border:3px solid #b08a3e;box-shadow:0 4px 14px rgba(176,138,62,.25);display:block;transition:transform .4s ease}
.tcard:hover .reviewer img{transform:scale(1.07)}
.tcard .reviewer h6{font-size:.93rem;font-weight:700;color:#164243;margin:0 0 2px}
.tcard .reviewer span{font-size:.78rem;color:#999}
.t-nav{display:flex;align-items:center;justify-content:center;gap:16px;margin-top:40px}
.t-nav-btn{width:46px;height:46px;border-radius:50%;border:2px solid #164243;background:transparent;color:#164243;display:flex;align-items:center;justify-content:center;cursor:pointer;font-size:16px;transition:background .3s,color .3s,transform .3s}
.t-nav-btn:hover{background:#164243;color:#fff;transform:scale(1.08)}
.t-swiper-pg .swiper-pagination-bullet{width:9px;height:9px;background:#ccc;opacity:1;transition:background .3s,transform .3s}
.t-swiper-pg .swiper-pagination-bullet-active{background:#164243;transform:scale(1.3)}

/* ================================================================
   SECTION 6 — CTA
   ================================================================ */
.sec-cta{padding:80px 0;background:linear-gradient(135deg,#164243 0%,#0f2d2e 100%);position:relative;overflow:hidden}
.sec-cta::before{content:"";position:absolute;top:-60px;right:-60px;width:300px;height:300px;border-radius:50%;background:rgba(176,138,62,.12);pointer-events:none}
.sec-cta::after{content:"";position:absolute;bottom:-80px;left:-40px;width:260px;height:260px;border-radius:50%;background:rgba(176,138,62,.08);pointer-events:none}
.sec-cta h2{font-size:2.4rem;font-weight:800;color:#fff;margin-bottom:14px;line-height:1.3}
.sec-cta p{font-size:1rem;color:rgba(255,255,255,.78);max-width:500px;margin:0 auto 34px;line-height:1.75}
.cta-gold{display:inline-flex;align-items:center;gap:10px;background:#b08a3e;color:#fff;padding:15px 34px;border-radius:8px;font-size:.93rem;font-weight:700;text-decoration:none;transition:background .3s,transform .3s,box-shadow .3s}
.cta-gold:hover{background:#e3c581;color:#164243;transform:translateY(-3px);box-shadow:0 12px 30px rgba(176,138,62,.4)}
.cta-outline{display:inline-flex;align-items:center;gap:10px;background:transparent;color:#fff;padding:15px 34px;border-radius:8px;border:2px solid rgba(255,255,255,.4);font-size:.93rem;font-weight:700;text-decoration:none;transition:border-color .3s,background .3s,transform .3s}
.cta-outline:hover{border-color:#fff;background:rgba(255,255,255,.08);color:#fff;transform:translateY(-3px)}

/* ================================================================
   GLOBAL MOBILE / TABLET RESPONSIVE — full page
   ================================================================ */

/* ---- Tablet (max 991px) ---- */
@media(max-width:991px){
    .sec-services{padding:70px 0 60px}
    .svc-card-img{height:190px}
    .svc-card-body{padding:22px 20px 22px}
    .svc-card-title h4{font-size:1rem}
    .svc-head-icon{width:42px;height:42px;font-size:1rem}
    .pvd-body h2{font-size:2rem}
}

/* ---- Small tablet / large phone (max 768px) ---- */
@media(max-width:768px){
    .s-heading{font-size:1.85rem}
    .s-sub{font-size:.92rem}

    .sec-services{padding:55px 0 40px}
    .svc-card-img{height:200px}
    .svc-card-body{padding:20px 18px 20px}
    .svc-card-body p{font-size:.88rem;line-height:1.7;margin-bottom:14px}
    .svc-tag{font-size:.65rem;padding:3px 10px}

    .sec-process{padding:45px 0 45px}
    .proc-num{width:64px;height:64px;font-size:1.25rem;margin-bottom:14px}
    .proc-step{margin-bottom:32px}
    .proc-step h5{font-size:.95rem}
    .proc-step p{font-size:.85rem}

    .sec-pvd{padding:45px 0}
    .pvd-img-wrap{min-height:240px}
    .pvd-badge{padding:10px 16px;bottom:16px;left:16px}
    .pvd-badge strong{font-size:1.2rem}
    .pvd-body h2{font-size:1.6rem;margin-bottom:14px}
    .pvd-body p{font-size:.9rem;line-height:1.75}
    .pvd-checklist{margin:18px 0 26px;gap:11px}
    .pvd-checklist li{font-size:.88rem}
    .pvd-cta-btn{padding:12px 24px;font-size:.86rem;width:100%;justify-content:center}

    .sec-stats{padding:44px 0}
    .stat-box .num{font-size:2.1rem}
    .stat-box .lbl{font-size:.78rem}

    .sec-testimonials{padding:45px 0 40px}
    .tcard{padding:26px 20px 22px}
    .tcard p{font-size:.87rem}
    .t-nav-btn{width:40px;height:40px;font-size:14px}

    .sec-cta{padding:45px 0}
    .sec-cta h2{font-size:1.6rem}
    .sec-cta p{font-size:.9rem;margin-bottom:26px}
    .cta-gold,.cta-outline{padding:12px 24px;font-size:.86rem;width:100%;justify-content:center}
    .sec-cta .d-flex{flex-direction:column;align-items:stretch;gap:12px!important}
}

/* ---- Phone (max 576px) ---- */
@media(max-width:576px){
    .breadcrumb-strip{padding:10px 0}
    .breadcrumb-strip ol{font-size:.78rem}

    .s-heading{font-size:1.5rem;margin-bottom:12px}
    .s-sub{font-size:.86rem}
    .s-label{font-size:.68rem;letter-spacing:2px}

    .sec-services{padding:60px 0 50px}
    .svc-card-img{height:180px}
    .svc-card-title{gap:10px;margin-bottom:10px}
    .svc-head-icon{width:38px;height:38px;font-size:.9rem;border-radius:10px}
    .svc-card-title h4{font-size:.95rem}
    .svc-link{font-size:.8rem}

    .sec-process{padding:55px 0 60px}
    .proc-num{width:56px;height:56px;font-size:1.1rem}

    .sec-pvd{padding:60px 0}
    .pvd-img-wrap{min-height:200px;border-radius:12px}
    .pvd-body h2{font-size:1.4rem}
    .pvd-checklist .ck{width:19px;height:19px;font-size:.58rem}

    .sec-stats{padding:34px 0}
    .stat-box .num{font-size:1.8rem}
    .stat-box .lbl{font-size:.72rem}

    .sec-testimonials{padding:60px 0 50px}
    .tcard .reviewer img{width:56px;height:56px}
    .tcard .quote-i{font-size:1.9rem}

    .sec-cta{padding:55px 0}
    .sec-cta h2{font-size:1.35rem}
    .sec-cta p{font-size:.85rem}
}

/* ---- Extra-small phone (max 380px) ---- */
@media(max-width:380px){
    .s-heading{font-size:1.3rem}
    .svc-card-img{height:160px}
    .svc-card-body{padding:16px 14px 16px}
    .pvd-body h2{font-size:1.25rem}
    .sec-cta h2{font-size:1.2rem}
}
</style>

<!-- ══ HERO ═══════════════════════════════════════════════════════ -->
<div class="services-hero position-relative">
    <div class="overlay"></div>
    <picture>
        <source media="(max-width:530px)" srcset="assets/images/blog-single-image-sm.jpg">
        <img src="assets/images/img-2.jpg" alt="Vande Enterprises Services">
    </picture>
    <div class="container services-hero-text">
        <h1>Our Services</h1>
        <p>Premium SS &amp; MS fabrication, custom metal furniture &amp; PVD coating — crafted with precision across Pune.</p>
    </div>
</div>

<!-- ══ BREADCRUMB ══════════════════════════════════════════════════ -->
<div class="breadcrumb-strip">
    <div class="container">
        <ol>
            <li><a href="index.php"><i class="fa-solid fa-house" style="font-size:.78rem;margin-right:4px;"></i>Home</a></li>
            <li class="active">Services</li>
        </ol>
    </div>
</div>

<!-- ══ SECTION 1 — SERVICE CARDS ══════════════════════════════════ -->
<section class="sec-services">
    <div class="container">
        <div class="centered-block mb-5 rv-up">
            <span class="s-label">What We Offer</span>
            <h2 class="s-heading">Crafting Metal Into Masterpieces</h2>
            <p class="s-sub">From structural fabrication to PVD-coated statement furniture — every service backed by 8+ years of expertise and a 32+ member skilled team in Pune.</p>
            <div class="s-divider"></div>
        </div>

        <div class="row g-4 rv-stagger">

            <!-- 1 -->
            <div class="col-sm-6 col-lg-4">
                <div class="svc-card">
                    <div class="svc-card-img">
                        <img src="assets/images/blog-image-1.jpg" alt="SS & MS Fabrication">
                    </div>
                    <div class="svc-card-body">
                        <div class="svc-card-title">
                            <div class="svc-head-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                            <h4>SS &amp; MS Fabrication</h4>
                        </div>
                        <p>Stainless Steel and Mild Steel structural fabrication for residential, commercial and industrial projects — precision welding, cutting and finishing by trained craftsmen.</p>
                        <div class="svc-tags">
                            <span class="svc-tag">Residential</span>
                            <span class="svc-tag">Commercial</span>
                            <span class="svc-tag">Industrial</span>
                        </div>
                        <a href="contact.php" class="svc-link">Get a Quote <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- 2 -->
            <div class="col-sm-6 col-lg-4">
                <div class="svc-card">
                    <div class="svc-card-img">
                        <img src="assets/images/blog-image-2.jpg" alt="Custom Metal Furniture">
                    </div>
                    <div class="svc-card-body">
                        <div class="svc-card-title">
                            <div class="svc-head-icon"><i class="fa-solid fa-couch"></i></div>
                            <h4>Custom Metal Furniture</h4>
                        </div>
                        <p>Bespoke dining tables, chairs, centre tables, console tables, wardrobes and shelves — designed to your exact dimensions, blending durability with modern aesthetics.</p>
                        <div class="svc-tags">
                            <span class="svc-tag">Dining Tables</span>
                            <span class="svc-tag">Chairs</span>
                            <span class="svc-tag">Shelves</span>
                        </div>
                        <a href="contact.php" class="svc-link">Get a Quote <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- 3 -->
            <div class="col-sm-6 col-lg-4">
                <div class="svc-card">
                    <div class="svc-card-img">
                        <img src="assets/images/images-4.png" alt="PVD Coating">
                    </div>
                    <div class="svc-card-body">
                        <div class="svc-card-title">
                            <div class="svc-head-icon"><i class="fa-solid fa-spray-can-sparkles"></i></div>
                            <h4>PVD Coating</h4>
                        </div>
                        <p>Physical Vapour Deposition coating in Gold, Rose Gold, Black, Gunmetal &amp; Chrome — scratch-resistant, corrosion-free and long-lasting elegance for every surface.</p>
                        <div class="svc-tags">
                            <span class="svc-tag">Gold</span>
                            <span class="svc-tag">Rose Gold</span>
                            <span class="svc-tag">Matte Black</span>
                        </div>
                        <a href="contact.php" class="svc-link">Get a Quote <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- 4 -->
            <div class="col-sm-6 col-lg-4">
                <div class="svc-card">
                    <div class="svc-card-img">
                        <img src="assets/images/blog-image-1.jpg" alt="Gates & Railings">
                    </div>
                    <div class="svc-card-body">
                        <div class="svc-card-title">
                            <div class="svc-head-icon"><i class="fa-solid fa-border-all"></i></div>
                            <h4>Gates &amp; Railings</h4>
                        </div>
                        <p>Decorative and security-grade SS &amp; MS main gates, staircase railings, balcony grills, safety doors and window guards — engineered for both strength and style.</p>
                        <div class="svc-tags">
                            <span class="svc-tag">Safety Doors</span>
                            <span class="svc-tag">Grills</span>
                            <span class="svc-tag">Railings</span>
                        </div>
                        <a href="contact.php" class="svc-link">Get a Quote <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- 5 -->
            <div class="col-sm-6 col-lg-4">
                <div class="svc-card">
                    <div class="svc-card-img">
                        <img src="assets/images/blog-image-2.jpg" alt="Corporate & Office Works">
                    </div>
                    <div class="svc-card-body">
                        <div class="svc-card-title">
                            <div class="svc-head-icon"><i class="fa-solid fa-building"></i></div>
                            <h4>Corporate &amp; Office Works</h4>
                        </div>
                        <p>Office partitions, showroom display racks, reception counters, storage lofts and rack shelf systems — tailored for professional commercial spaces across Pune.</p>
                        <div class="svc-tags">
                            <span class="svc-tag">Partitions</span>
                            <span class="svc-tag">Display Racks</span>
                            <span class="svc-tag">Lofts</span>
                        </div>
                        <a href="contact.php" class="svc-link">Get a Quote <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- 6 -->
            <div class="col-sm-6 col-lg-4">
                <div class="svc-card">
                    <div class="svc-card-img">
                        <img src="assets/images/blog-image-3.jpg" alt="Site Installation">
                    </div>
                    <div class="svc-card-body">
                        <div class="svc-card-title">
                            <div class="svc-head-icon"><i class="fa-solid fa-helmet-safety"></i></div>
                            <h4>Site Installation</h4>
                        </div>
                        <p>End-to-end on-site installation across 4 active sites in Pune — managed by a dedicated supervisor team ensuring clean, safe and on-time project delivery every time.</p>
                        <div class="svc-tags">
                            <span class="svc-tag">On-Site</span>
                            <span class="svc-tag">Supervised</span>
                            <span class="svc-tag">On-Time</span>
                        </div>
                        <a href="contact.php" class="svc-link">Get a Quote <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ══ SECTION 2 — HOW WE WORK ════════════════════════════════════ -->
<section class="sec-process">
    <div class="container">
        <div class="centered-block mb-5 rv-up">
            <span class="s-label">Our Process</span>
            <h2 class="s-heading">How We Work</h2>
            <p class="s-sub">A simple 4-step journey — from your first call to the final installation — with zero compromise on quality or timelines.</p>
            <div class="s-divider"></div>
        </div>
        <div class="proc-wrap rv-stagger">
            <div class="proc-step">
                <div class="proc-num">01</div>
                <h5>Consultation</h5>
                <p>We visit your site or meet at our Narhe workshop to understand your space, style and requirements.</p>
            </div>
            <div class="proc-step">
                <div class="proc-num">02</div>
                <h5>Design &amp; Estimate</h5>
                <p>Our design lead creates detailed drawings with precise measurements and a fully transparent quote.</p>
            </div>
            <div class="proc-step">
                <div class="proc-num">03</div>
                <h5>Fabrication</h5>
                <p>Your project is welded, finished and quality-checked in-house by our 32+ member skilled team.</p>
            </div>
            <div class="proc-step">
                <div class="proc-num">04</div>
                <h5>Installation</h5>
                <p>Our site crew delivers, installs on schedule and completes a thorough final walkthrough with clean-up.</p>
            </div>
        </div>
    </div>
</section>

<!-- ══ SECTION 3 — PVD FEATURE ════════════════════════════════════ -->
<section class="sec-pvd">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5 rv-up">
                <div class="pvd-img-wrap">
                    <img src="assets/images/images-4.png" alt="PVD Coating Vande Enterprises">
                    <div class="pvd-badge"><strong>8+</strong> Years of Expertise</div>
                </div>
            </div>
            <div class="col-lg-7 rv-up">
                <div class="pvd-body">
                    <span class="s-label">Signature Finish</span>
                    <h2>The Elegant Touch of<br>PVD Coating</h2>
                    <p>PVD bonds metallic finishes at the atomic level — giving your furniture a luxurious, long-lasting appearance that standard paint or plating simply cannot match.</p>
                    <p>Applied at our Kasurdi plant (Dhara PVD &amp; Decor Ltd.), every coated piece goes through strict quality checks before delivery.</p>
                    <ul class="pvd-checklist">
                        <li><span class="ck"><i class="fa-solid fa-check"></i></span> Available in Gold, Rose Gold, Matte Black, Gunmetal &amp; Chrome</li>
                        <li><span class="ck"><i class="fa-solid fa-check"></i></span> Scratch-resistant, corrosion-free &amp; eco-friendly process</li>
                        <li><span class="ck"><i class="fa-solid fa-check"></i></span> Applied on SS furniture, fixtures, railings &amp; decorative panels</li>
                        <li><span class="ck"><i class="fa-solid fa-check"></i></span> Lifetime colour retention under normal indoor conditions</li>
                    </ul>
                    <a href="contact.php" class="pvd-cta-btn">Request PVD Sample &nbsp;<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══ SECTION 4 — STATS ══════════════════════════════════════════ -->
<section class="sec-stats">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-6 col-md-3"><div class="stat-box"><span class="num">15+</span><span class="lbl">Years in Business</span></div></div>
            <div class="col-6 col-md-3"><div class="stat-box"><span class="num">32+</span><span class="lbl">Skilled Workers</span></div></div>
            <div class="col-6 col-md-3"><div class="stat-box"><span class="num">4</span><span class="lbl">Active Sites in Pune</span></div></div>
            <div class="col-6 col-md-3"><div class="stat-box"><span class="num">500+</span><span class="lbl">Projects Completed</span></div></div>
        </div>
    </div>
</section>

<!-- ══ SECTION 5 — TESTIMONIALS ═══════════════════════════════════ -->
<section class="sec-testimonials">
    <div class="container">
        <div class="centered-block mb-5 rv-up">
            <span class="s-label">Client Reviews</span>
            <h2 class="s-heading">What Our Clients Say</h2>
            <p class="s-sub">Trusted by homeowners, architects and contractors across Pune for quality fabrication and on-time delivery.</p>
            <div class="s-divider"></div>
        </div>
        <div class="swiper testimonial-swiper rv-up">
            <div class="swiper-wrapper">
                <div class="swiper-slide h-auto">
                    <div class="tcard">
                        <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                        <div class="quote-i"><i class="fa-solid fa-quote-left"></i></div>
                        <p>Excellent craftsmanship on our stainless steel gates and railings. The team understood our requirements perfectly and executed on time without any follow-up needed.</p>
                        <div class="reviewer"><img src="https://placehold.co/68x68/164243/ffffff?text=SP" alt="Sneha Patil"><h6>Sneha Patil</h6><span>Homeowner, Pune</span></div>
                    </div>
                </div>
                <div class="swiper-slide h-auto">
                    <div class="tcard">
                        <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                        <div class="quote-i"><i class="fa-solid fa-quote-left"></i></div>
                        <p>The PVD gold finish on our reception desk is absolutely stunning. Every visitor compliments it. Vande Enterprises delivers genuine luxury at a fair price.</p>
                        <div class="reviewer"><img src="https://placehold.co/68x68/164243/ffffff?text=RK" alt="Rajesh Kulkarni"><h6>Rajesh Kulkarni</h6><span>Interior Designer, Pune</span></div>
                    </div>
                </div>
                <div class="swiper-slide h-auto">
                    <div class="tcard">
                        <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                        <div class="quote-i"><i class="fa-solid fa-quote-left"></i></div>
                        <p>Hired Vande Enterprises for 3 sites in Baner and Wakad. Consistent quality, professional team and Pravin sir personally oversees every project detail.</p>
                        <div class="reviewer"><img src="https://placehold.co/68x68/164243/ffffff?text=AG" alt="Amit Gaikwad"><h6>Amit Gaikwad</h6><span>Builder &amp; Contractor, Pune</span></div>
                    </div>
                </div>
                <div class="swiper-slide h-auto">
                    <div class="tcard">
                        <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                        <div class="quote-i"><i class="fa-solid fa-quote-left"></i></div>
                        <p>Rose gold PVD staircase railing transformed our entire home interior. The crew was professional and left the site spotless. Highly recommended.</p>
                        <div class="reviewer"><img src="https://placehold.co/68x68/164243/ffffff?text=SM" alt="Sunil Marathe"><h6>Sunil Marathe</h6><span>Architect, Hadapsar</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="t-nav">
            <button class="t-nav-btn" id="tPrev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
            <div class="swiper-pagination t-swiper-pg" id="tPagination" style="position:static;width:auto;"></div>
            <button class="t-nav-btn" id="tNext" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
    </div>
</section>

<!-- ══ SECTION 6 — CTA ════════════════════════════════════════════ -->
<section class="sec-cta">
    <div class="container text-center position-relative" style="z-index:1">
        <div class="rv-up">
            <span class="s-label" style="color:#e3c581">Let's Build Together</span>
            <h2>Have a Project in Mind?</h2>
            <p>Get in touch for a free consultation and quote. We serve Narhe, Baner, Wakad, Kothrud and all of Pune.</p>
            <div class="d-flex flex-wrap gap-3 justify-content-center">
                <a href="contact.php" class="cta-gold"><i class="fa-solid fa-paper-plane"></i> Get a Free Quote</a>
                <a href="gallery.php" class="cta-outline"><i class="fa-solid fa-images"></i> View Our Work</a>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var els = document.querySelectorAll('.rv-up, .rv-stagger');
    if ('IntersectionObserver' in window) {
        var io = new IntersectionObserver(function(entries){
            entries.forEach(function(e){
                if (e.isIntersecting){ e.target.classList.add('in-view'); io.unobserve(e.target); }
            });
        }, {threshold: 0.14});
        els.forEach(function(el){ io.observe(el); });
    } else {
        els.forEach(function(el){ el.classList.add('in-view'); });
    }
    if (typeof Swiper !== 'undefined') {
        new Swiper('.testimonial-swiper', {
            slidesPerView:1, spaceBetween:24, loop:true,
            autoplay:{delay:4000,disableOnInteraction:false,pauseOnMouseEnter:true},
            pagination:{el:'#tPagination',clickable:true},
            navigation:{nextEl:'#tNext',prevEl:'#tPrev'},
            breakpoints:{768:{slidesPerView:2},992:{slidesPerView:3}}
        });
    }
});
</script>

<?php include 'footer.php'; ?>