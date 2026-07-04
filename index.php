<?php include 'header.php'; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

<style>
    *,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
    html,body{overflow-x:hidden;max-width:100%;font-family:'Inter',system-ui,-apple-system,sans-serif;scroll-behavior:smooth;}
    img{max-width:100%;display:block;}
    a{text-decoration:none;transition:all 0.3s ease;}
    :root{
        --gold:#b08a3e;--gold-light:#e3c581;--gold-dark:#8a6e2a;
        --teal:#164243;--teal-dark:#0f2d2e;--teal-light:#1f5a5b;
        --white:#ffffff;--off-white:#f8f9f9;
        --text-dark:#1a1a1a;--text-muted:#6c757d;
        --shadow-sm:0 4px 20px rgba(0,0,0,0.06);
        --shadow-md:0 8px 32px rgba(0,0,0,0.10);
        --shadow-lg:0 16px 48px rgba(0,0,0,0.15);
        --radius:16px;--transition:0.4s cubic-bezier(0.2,0.8,0.2,1);
    }

    /* ── Utility ── */
    .section-padding{padding:80px 0;}
    .section-label{display:inline-block;font-size:0.7rem;font-weight:700;letter-spacing:3.5px;text-transform:uppercase;color:var(--gold);background:rgba(176,138,62,0.10);padding:6px 20px;border-radius:60px;border:1px solid rgba(176,138,62,0.15);margin-bottom:14px;}
    .section-title{font-size:clamp(1.8rem,4vw,2.8rem);font-weight:800;color:var(--teal);line-height:1.2;margin-bottom:10px;}
    .section-title .gold-text{background:linear-gradient(135deg,var(--gold),var(--gold-light));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;}
    .section-divider{width:60px;height:4px;background:linear-gradient(90deg,var(--gold),var(--gold-light));border-radius:4px;margin:14px auto 0;}
    .section-subtitle{font-size:1.05rem;color:var(--text-muted);max-width:640px;margin:0 auto;line-height:1.7;}

    /* ── Buttons ── */
    .btn-gold{display:inline-flex;align-items:center;gap:12px;padding:14px 34px;background:linear-gradient(135deg,var(--gold),var(--gold-dark));color:#fff;font-weight:700;font-size:0.92rem;letter-spacing:0.5px;border:none;border-radius:60px;box-shadow:0 8px 28px rgba(176,138,62,0.35);transition:all var(--transition);cursor:pointer;position:relative;overflow:hidden;}
    .btn-gold::before{content:"";position:absolute;inset:0;background:linear-gradient(135deg,var(--gold-light),var(--gold));opacity:0;transition:opacity 0.4s ease;border-radius:60px;}
    .btn-gold:hover{transform:translateY(-4px) scale(1.02);box-shadow:0 16px 48px rgba(176,138,62,0.45);color:var(--teal);}
    .btn-gold:hover::before{opacity:1;}
    .btn-gold span,.btn-gold i,.btn-gold svg{position:relative;z-index:1;}
    .btn-gold svg{fill:currentColor;transition:transform 0.3s ease;}
    .btn-gold:hover svg{transform:translateX(6px);}
    .btn-outline-light{display:inline-flex;align-items:center;gap:10px;padding:14px 28px;background:rgba(255,255,255,0.06);backdrop-filter:blur(8px);color:#fff;border:1.5px solid rgba(255,255,255,0.20);border-radius:60px;font-weight:700;font-size:0.92rem;transition:all var(--transition);}
    .btn-outline-light:hover{background:rgba(255,255,255,0.14);border-color:rgba(255,255,255,0.50);transform:translateY(-4px);color:#fff;}

    /* ── Hero ── */
 
    .hero-video{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;z-index:0;}
    .hero {
    width: 100%;
    height: 100vh; /* or your preferred height */
    overflow: hidden;
}

/* ── Hero ── */
.hero-section{
    position:relative;
    width:100%;
    min-height:100vh;
    min-height:100dvh; /* fixes mobile address-bar jump */
    display:flex;
    align-items:center;
    overflow:hidden;
    background:var(--teal-dark);
}

.hero-bg-image{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    min-height:100vh;
    min-height:100dvh;
    object-fit:cover;
    object-position:center center;
    z-index:0;
    display:block;
}

/* ── Responsive height tuning ── */
@media(max-width:991px){
    .hero-section,.hero-bg-image{
        min-height:90vh;
        min-height:90dvh;
    }
}

@media(max-width:767px){
    .hero-section,.hero-bg-image{
        min-height:100vh;
        min-height:100dvh;
    }
}

@media(max-height:600px) and (orientation:landscape){
    .hero-section,.hero-bg-image{
        min-height:auto;
        height:100vh;
    }
}

    .hero-overlay{position:absolute;inset:0;z-index:1;background:linear-gradient(145deg,rgba(11,20,20,0.88) 0%,rgba(11,20,20,0.50) 50%,rgba(11,20,20,0.25) 100%);pointer-events:none;}
    .hero-overlay::after{content:"";position:absolute;bottom:0;left:0;width:100%;height:4px;background:linear-gradient(90deg,var(--gold),var(--gold-light),#f5e6b0,var(--gold-light),var(--gold));background-size:300% 100%;animation:goldShimmer 5s linear infinite;}
    @keyframes goldShimmer{0%{background-position:0% 0%;}100%{background-position:300% 0%;}}
    .hero-glow{position:absolute;border-radius:50%;filter:blur(120px);pointer-events:none;z-index:0;opacity:0.30;animation:glowFloat 14s ease-in-out infinite alternate;}
    .hero-glow--1{width:500px;height:500px;top:-10%;right:-5%;background:radial-gradient(circle,rgba(176,138,62,0.35),transparent 70%);}
    .hero-glow--2{width:400px;height:400px;bottom:-10%;left:-5%;background:radial-gradient(circle,rgba(227,197,129,0.15),transparent 70%);animation-delay:5s;}
    @keyframes glowFloat{0%{transform:translate(0,0) scale(1);}100%{transform:translate(30px,-40px) scale(1.1);}}

    .hero-content{position:relative;z-index:2;padding:140px 0 100px;width:100%;}
    .hero-label{display:inline-flex;align-items:center;gap:10px;font-size:0.7rem;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:var(--gold-light);background:rgba(176,138,62,0.12);backdrop-filter:blur(8px);padding:8px 22px 8px 18px;border-radius:60px;border:1px solid rgba(176,138,62,0.25);opacity:0;animation:fadeUp 0.8s ease 0.2s forwards;}
    .hero-label i{color:var(--gold);font-size:0.8rem;}

    .hero-title{
        font-size:clamp(2rem,6.5vw,4.8rem);
        font-weight:800;
        line-height:1.12;
        color:#fff;
        margin:20px 0 16px;
        max-width:820px;
        opacity:0;
        animation:fadeUp 0.9s ease 0.35s forwards;
        word-wrap:break-word;
    }
    .hero-title .gold-highlight{display:inline-block;background:linear-gradient(135deg,var(--gold-light),var(--gold),var(--gold-light));background-size:200% 200%;-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;animation:goldWave 4s ease-in-out infinite alternate;position:relative;}
    @keyframes goldWave{0%{background-position:0% 50%;}100%{background-position:100% 50%;}}

    .hero-sub{
        font-size:clamp(0.9rem,2.2vw,1.15rem);
        line-height:1.75;
        color:rgba(255,255,255,0.75);
        max-width:580px;
        margin-bottom:32px;
        opacity:0;
        animation:fadeUp 0.9s ease 0.55s forwards;
    }

    .hero-actions{
        display:flex;
        flex-wrap:wrap;
        align-items:center;
        gap:20px;
        opacity:0;
        animation:fadeUp 0.9s ease 0.75s forwards;
        width:100%;
    }
    .btn-gold,.btn-outline-light{white-space:nowrap;}

    .hero-stats{
        display:flex;
        align-items:center;
        gap:14px;
        padding:8px 16px 8px 20px;
        background:rgba(255,255,255,0.05);
        backdrop-filter:blur(12px);
        border-radius:60px;
        border:1px solid rgba(255,255,255,0.08);
        flex-wrap:nowrap;
    }
    .stat-item{display:flex;flex-direction:column;align-items:center;line-height:1.2;}
    .stat-num{font-size:1.15rem;font-weight:800;color:var(--gold-light);}
    .stat-label{font-size:0.58rem;text-transform:uppercase;letter-spacing:1px;color:rgba(255,255,255,0.45);white-space:nowrap;}
    .stat-divider{width:1px;height:26px;background:rgba(255,255,255,0.08);flex-shrink:0;}

    .hero-floating-cards{display:flex;flex-direction:column;gap:16px;padding-left:20px;opacity:0;animation:fadeUp 1s ease 0.9s forwards;}
    .hero-float-card{display:flex;align-items:center;gap:14px;padding:12px 20px;background:rgba(255,255,255,0.04);backdrop-filter:blur(14px);border-radius:14px;border:1px solid rgba(255,255,255,0.06);transition:all 0.4s ease;width:fit-content;margin-left:auto;}
    .hero-float-card:hover{transform:translateX(-8px) scale(1.03);background:rgba(176,138,62,0.12);border-color:rgba(176,138,62,0.25);}
    .hero-float-card i{font-size:1.4rem;color:var(--gold-light);width:32px;text-align:center;}
    .hero-float-card span{font-size:0.85rem;font-weight:600;color:rgba(255,255,255,0.80);white-space:nowrap;}
    .hero-float-card--1{animation:floatCard 6s ease-in-out infinite alternate;}
    .hero-float-card--2{animation:floatCard 7s ease-in-out infinite alternate 1s;margin-right:20px;}
    .hero-float-card--3{animation:floatCard 8s ease-in-out infinite alternate 2s;margin-right:40px;}
    @keyframes floatCard{0%{transform:translateY(0px);}100%{transform:translateY(-10px);}}

    .scroll-indicator{position:absolute;bottom:24px;left:50%;transform:translateX(-50%);z-index:3;display:flex;flex-direction:column;align-items:center;gap:8px;opacity:0;animation:fadeUp 1s ease 1.3s forwards;}
    .scroll-mouse{width:22px;height:34px;border:2px solid rgba(255,255,255,0.20);border-radius:30px;display:flex;justify-content:center;padding-top:7px;}
    .scroll-wheel{width:4px;height:9px;background:var(--gold);border-radius:4px;animation:scrollWheel 2s ease-in-out infinite;}
    @keyframes scrollWheel{0%{transform:translateY(0);opacity:1;}100%{transform:translateY(16px);opacity:0;}}
    .scroll-indicator span{font-size:0.55rem;text-transform:uppercase;letter-spacing:2.5px;color:rgba(255,255,255,0.20);}

    @keyframes fadeUp{from{opacity:0;transform:translateY(36px);}to{opacity:1;transform:translateY(0);}}

    /* ── Hero Responsive ── */
    @media(max-width:991px){
        .hero-content{padding:100px 20px 50px;}
        .hero-floating-cards{display:none;}
        .hero-actions{flex-direction:column;align-items:flex-start;gap:14px;}
        .hero-stats{width:100%;justify-content:center;}
    }

    @media(max-width:767px){
        .hero-content{padding:90px 20px 40px;}
        .hero-label{margin-bottom:2px;}
        .hero-title{margin:12px 0 10px;}
        .hero-sub{margin-bottom:20px;}
        .hero-actions{width:100%;gap:12px;}
        .btn-gold,.btn-outline-light{width:100%;justify-content:center;padding:13px 24px;}
        .hero-stats{width:100%;padding:10px 12px;gap:8px;margin-top:2px;}
        .stat-num{font-size:1rem;}
        .stat-label{font-size:0.52rem;}
    }

    @media(max-width:480px){
        .hero-content{padding:80px 18px 30px;}
        .hero-label{font-size:0.6rem;padding:6px 14px 6px 12px;}
        .hero-title{font-size:clamp(1.6rem,7.5vw,2.2rem);line-height:1.2;margin:10px 0 8px;}
        .hero-sub{font-size:0.85rem;line-height:1.6;margin-bottom:18px;}
        .hero-actions{gap:10px;}
        .btn-gold,.btn-outline-light{padding:12px 20px;font-size:0.85rem;}
        .hero-stats{flex-wrap:nowrap;border-radius:20px;justify-content:space-around;padding:9px 8px;}
        .stat-divider{display:block;height:22px;}
        .stat-item{min-width:auto;}
        .stat-num{font-size:0.92rem;}
        .stat-label{font-size:0.48rem;}
        .scroll-indicator{display:none;}
    }

    @media(max-width:360px){
        .hero-content{padding:75px 16px 24px;}
        .hero-title{font-size:1.5rem;}
        .hero-stats{padding:8px 6px;gap:4px;}
        .stat-num{font-size:0.85rem;}
        .stat-label{font-size:0.44rem;}
    }

    @media(max-height:600px) and (orientation:landscape){
        .hero-section{min-height:auto;padding:90px 0 40px;}
        .hero-content{padding:0;}
        .scroll-indicator{display:none;}
    }

    /* ── About ── */
    .about-section{background:var(--off-white);overflow:hidden;position:relative;}
    .about-scroll-text{position:absolute;top:0;left:0;width:100%;height:100%;pointer-events:none;display:flex;align-items:center;overflow:hidden;opacity:0.05;}
    .about-scroll-text span{font-size:clamp(5rem,15vw,12rem);font-weight:800;color:var(--teal);white-space:nowrap;text-transform:uppercase;letter-spacing:12px;user-select:none;animation:scrollText 22s linear infinite;}
    @keyframes scrollText{0%{transform:translateX(0%);}100%{transform:translateX(-50%);}}
    .about-image-wrap{position:relative;border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow-lg);}
    .about-image-wrap img{width:100%;height:420px;object-fit:cover;transition:transform 0.8s ease;display:block;}
    .about-image-wrap:hover img{transform:scale(1.05);}
    .about-badge{position:absolute;bottom:24px;left:24px;display:flex;align-items:center;gap:14px;background:rgba(255,255,255,0.95);backdrop-filter:blur(12px);padding:12px 20px 12px 16px;border-radius:14px;box-shadow:0 8px 32px rgba(0,0,0,0.12);animation:badgeFloat 4s ease-in-out infinite alternate;}
    @keyframes badgeFloat{0%{transform:translateY(0px);}100%{transform:translateY(-8px);}}
    .about-badge-icon{width:44px;height:44px;border-radius:50%;background:linear-gradient(135deg,var(--gold),var(--gold-light));display:flex;align-items:center;justify-content:center;color:#fff;font-size:1.2rem;flex-shrink:0;}
    .about-badge-text strong{display:block;font-size:1rem;font-weight:800;color:var(--teal);line-height:1.2;}
    .about-badge-text span{font-size:0.65rem;color:#888;font-weight:500;}
    .about-content{display:flex;flex-direction:column;gap:24px;}
    .about-card{background:var(--teal);padding:24px 28px;border-radius:var(--radius);border:1px solid rgba(255,255,255,0.06);transition:all var(--transition);position:relative;overflow:hidden;}
    .about-card::before{content:"";position:absolute;top:0;left:0;width:4px;height:100%;background:linear-gradient(180deg,var(--gold),var(--gold-light));opacity:0;transition:opacity 0.4s ease;}
    .about-card:hover::before{opacity:1;}
    .about-card:hover{transform:translateX(6px);border-color:rgba(176,138,62,0.15);}
    .about-card .card-icon{display:inline-flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:12px;background:rgba(176,138,62,0.15);color:var(--gold-light);font-size:1rem;margin-bottom:12px;transition:all 0.3s ease;}
    .about-card:hover .card-icon{background:var(--gold);color:#fff;transform:rotate(-6deg) scale(1.05);}
    .about-card h4{font-size:1.1rem;font-weight:700;color:#fff;margin-bottom:8px;}
    .about-card p{font-size:0.9rem;line-height:1.8;color:rgba(255,255,255,0.72);margin:0;}
    .about-link{display:inline-flex;align-items:center;gap:12px;font-size:0.92rem;font-weight:700;color:var(--gold-light);transition:all var(--transition);padding:8px 0;position:relative;}
    .about-link::after{content:"";position:absolute;bottom:0;left:0;width:0%;height:2px;background:var(--gold-light);transition:width 0.4s ease;}
    .about-link:hover::after{width:100%;}
    .about-link:hover{color:#fff;gap:18px;}
    .about-link svg{width:28px;height:18px;fill:currentColor;transition:transform 0.3s ease;}
    .about-link:hover svg{transform:translateX(6px);}

    /* ── Services ── */
    .services-section{background:#fff;padding:80px 0;}
    .service-card{border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow-sm);transition:all var(--transition);background:#fff;border:1px solid #f0f0f0;height:100%;}
    .service-card:hover{transform:translateY(-10px);box-shadow:var(--shadow-lg);border-color:rgba(176,138,62,0.20);}
    .service-card img{width:100%;height:200px;object-fit:cover;transition:transform 0.6s ease;}
    .service-card:hover img{transform:scale(1.06);}
    .service-card-body{padding:18px 20px 22px;text-align:center;}
    .service-card-body h5{font-size:1rem;font-weight:700;color:var(--teal);margin:0;}
    .service-card-body .service-icon{display:inline-flex;align-items:center;justify-content:center;width:48px;height:48px;border-radius:50%;background:rgba(176,138,62,0.10);color:var(--gold);font-size:1.2rem;margin-bottom:12px;transition:all 0.3s ease;}
    .service-card:hover .service-icon{background:var(--gold);color:#fff;transform:scale(1.1);}
    .services-nav{display:flex;align-items:center;justify-content:center;gap:20px;margin-top:30px;}
    .s-nav-btn{background:none;border:none;padding:0;cursor:pointer;opacity:0.6;transition:all 0.3s ease;line-height:0;}
    .s-nav-btn svg path{fill:var(--teal);}
    .s-nav-btn:hover{opacity:1;transform:scale(1.15);}
    .s-nav-btn.prev svg{transform:scaleX(-1);}
    #sPagination .swiper-pagination-bullet{background:var(--teal);opacity:0.25;}
    #sPagination .swiper-pagination-bullet-active{opacity:1;background:var(--gold);}

    /* ── Testimonials ── */
    .testimonials-section{background:var(--off-white);padding:80px 0;}

    .tcard{
        background:#fff;
        border-radius:var(--radius);
        padding:32px 28px 28px;
        box-shadow:var(--shadow-sm);
        border:1px solid #f0f0f0;
        transition:all var(--transition);
        height:100%;
        display:flex;
        flex-direction:column;
        align-items:center;
        text-align:center;
        position:relative;
        overflow:hidden;
    }
    .tcard::before{content:"";position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg,var(--gold),var(--gold-light));opacity:0;transition:opacity 0.4s ease;}
    .tcard:hover{transform:translateY(-8px);box-shadow:0 16px 40px rgba(176,138,62,0.12);border-color:rgba(176,138,62,0.20);}
    .tcard:hover::before{opacity:1;}

    .tcard .quote-icon{
        display:flex;
        align-items:center;
        justify-content:center;
        width:52px;height:52px;
        border-radius:50%;
        background:linear-gradient(135deg,var(--gold),var(--gold-light));
        color:#fff;font-size:1.2rem;
        margin:0 auto 16px;
        flex-shrink:0;
    }
    .tcard .stars{color:#FFC107;font-size:1.05rem;letter-spacing:2px;margin-bottom:14px;}
    .tcard .stars .empty{color:#ddd;}
    .tcard p{font-size:0.92rem;line-height:1.75;color:#5c5f66;flex:1;margin-bottom:24px;}

    .tcard .reviewer{
        display:flex;
        flex-direction:column;
        align-items:center;
        gap:0;
        width:100%;
    }
    .tcard .reviewer img{
        width:72px;height:72px;
        border-radius:50%;
        object-fit:cover;
        border:3px solid var(--gold);
        margin:0 auto 10px;
        display:block;
        box-shadow:0 4px 16px rgba(176,138,62,0.25);
        transition:transform 0.4s ease, box-shadow 0.4s ease;
    }
    .tcard:hover .reviewer img{
        transform:scale(1.06);
        box-shadow:0 8px 24px rgba(176,138,62,0.35);
    }
    .tcard .reviewer h6{font-size:0.95rem;font-weight:700;color:var(--teal);margin:0 0 3px;}
    .tcard .reviewer span{font-size:0.78rem;color:#9a9da3;letter-spacing:0.3px;}

    .tcard .reviewer-divider{
        width:40px;height:2px;
        background:linear-gradient(90deg,var(--gold),var(--gold-light));
        border-radius:2px;
        margin:0 auto 18px;
    }

    /* ── Testimonials Nav ── */
    .t-nav{display:flex;align-items:center;justify-content:center;gap:20px;margin-top:28px;}
    .t-nav-btn{background:none;border:none;padding:0;cursor:pointer;opacity:0.6;transition:all 0.3s ease;line-height:0;}
    .t-nav-btn svg path{fill:var(--gold);}
    .t-nav-btn:hover{opacity:1;transform:scale(1.15);}
    .t-nav-btn.prev svg{transform:scaleX(-1);}
    #tPagination .swiper-pagination-bullet{background:var(--gold);opacity:0.25;}
    #tPagination .swiper-pagination-bullet-active{opacity:1;}

    /* ── Responsive (global) ── */
    @media(max-width:991px){
        .about-image-wrap img{height:300px;}
        .section-padding{padding:60px 0;}
        .services-section,.testimonials-section{padding:60px 0;}
    }
    @media(max-width:576px){
        .about-image-wrap img{height:220px;}
        .services-section,.testimonials-section{padding:50px 0;}
        .section-title{font-size:1.5rem;}
        .tcard{padding:24px 16px 20px;}
        .tcard .reviewer img{width:60px;height:60px;}
    }
    @media(prefers-reduced-motion:reduce){
        *,*::before,*::after{animation-duration:0.01ms!important;animation-iteration-count:1!important;transition-duration:0.01ms!important;}
        .hero-label,.hero-title,.hero-sub,.hero-actions,.hero-floating-cards,.scroll-indicator{animation:none!important;opacity:1!important;transform:none!important;}
    }
</style>

<!-- ══ HERO ══════════════════════════════════════════════════════ -->
<!-- ══ HERO ══════════════════════════════════════════════════════ -->
<section class="hero-section">
     <img src="assets/images/images-5.png" alt="Hero Image" class="hero-bg-image">
    <div class="hero-overlay"></div>
    <div class="hero-glow hero-glow--1"></div>
    <div class="hero-glow hero-glow--2"></div>

    <div class="container hero-content">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="hero-label"><i class="fa-solid fa-crown"></i> Vande Enterprises</div>
                <h1 class="hero-title">
                    Customized Metal Furniture
                    <span class="d-block">with the Elegant Touch</span>
                    <span class="gold-highlight">of PVD Coating</span>
                </h1>
                <p class="hero-sub">Premium SS &amp; MS fabrication, bespoke metal furniture &amp; PVD coating —<br class="d-none d-md-block"> crafted with precision across Pune since 2016.</p>
                <div class="hero-actions">
                    <a href="project-archive.html" class="btn-gold">
                        Explore More
                        <svg width="35" height="22" viewBox="0 0 35 22" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/></svg>
                    </a>
                    <a href="contact.php" class="btn-outline-light"><i class="fa-solid fa-phone"></i> Get a Free Quote</a>
                    <div class="hero-stats">
                        <div class="stat-item"><span class="stat-num">8+</span><span class="stat-label">Years</span></div>
                        <div class="stat-divider"></div>
                        <div class="stat-item"><span class="stat-num">500+</span><span class="stat-label">Projects</span></div>
                        <div class="stat-divider"></div>
                        <div class="stat-item"><span class="stat-num">32+</span><span class="stat-label">Workers</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
                <div class="hero-floating-cards">
                    <div class="hero-float-card hero-float-card--1"><i class="fa-solid fa-spray-can-sparkles"></i><span>PVD Coating</span></div>
                    <div class="hero-float-card hero-float-card--2"><i class="fa-solid fa-screwdriver-wrench"></i><span>SS / MS Fab</span></div>
                    <div class="hero-float-card hero-float-card--3"><i class="fa-solid fa-couch"></i><span>Custom Furniture</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-indicator">
        <div class="scroll-mouse"><div class="scroll-wheel"></div></div>
        <span>Scroll</span>
    </div>
</section>

<!-- ══ ABOUT ═════════════════════════════════════════════════════ -->
<section class="about-section section-padding position-relative">
    <div class="about-scroll-text"><span>About Us &nbsp; About Us &nbsp; About Us &nbsp;</span></div>
    <div class="container position-relative">
        <div class="text-center mb-5">
            <span class="section-label">Who We Are</span>
            <h2 class="section-title">Foundations of <span class="gold-text">Vande Enterprises</span></h2>
            <p class="section-subtitle">VANDE ENTERPRISES is driven by the philosophy of creating furniture that seamlessly blends functionality with innovative design.</p>
            <div class="section-divider"></div>
        </div>
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="about-image-wrap">
                    <img src="assets/images/about2.jpg" alt="About Vande Enterprises">
                    <div class="about-badge">
                        <div class="about-badge-icon"><i class="fa-solid fa-medal"></i></div>
                        <div class="about-badge-text"><strong>8+ Years</strong><span>of Excellence</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="about-card">
                        <div class="card-icon"><i class="fa-solid fa-flag"></i></div>
                        <h4>Our Journey</h4>
                        <p>We took over running Plant @ Kasurdi, Pune — Dhara PVD &amp; Decor Ltd. This milestone has strengthened our capabilities and expanded our vision, allowing us to serve a wider spectrum of clients with enhanced expertise.</p>
                    </div>
                    <div class="about-card">
                        <div class="card-icon"><i class="fa-solid fa-wrench"></i></div>
                        <h4>Our Specializations</h4>
                        <p>We specialize in custom fabrication solutions — SS grills, gates, railings, safety doors, corporate office partitions, design chairs, dining tables, centre tables, console tables, rack self lofts, showroom display racks, and PVD coating.</p>
                    </div>
                    <a href="about.php" class="about-link">Learn more About Us
                        <svg width="35" height="22" viewBox="0 0 35 22" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══ SERVICES ══════════════════════════════════════════════════ -->
<section id="services" class="services-section">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">What We Do</span>
            <h3 class="section-title">Our <span class="gold-text">Services</span></h3>
            <p class="section-subtitle">From fabrication to PVD coating, we deliver quality metal solutions for every need.</p>
            <div class="section-divider"></div>
        </div>
        <div class="swiper services-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="height:auto;">
                    <div class="service-card"><img src="assets/images/blog-image-1.jpg" alt="SS Fabrication">
                    <div class="service-card-body"><div class="service-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div><h5>SS Fabrication</h5></div></div>
                </div>
                <div class="swiper-slide" style="height:auto;">
                    <div class="service-card"><img src="assets/images/blog-image-2.jpg" alt="MS Fabrication">
                    <div class="service-card-body"><div class="service-icon"><i class="fa-solid fa-gear"></i></div><h5>MS Fabrication</h5></div></div>
                </div>
                <div class="swiper-slide" style="height:auto;">
                    <div class="service-card"><img src="assets/images/blog-image-3.jpg" alt="PVD Coating">
                    <div class="service-card-body"><div class="service-icon"><i class="fa-solid fa-spray-can-sparkles"></i></div><h5>PVD Coating</h5></div></div>
                </div>
                <div class="swiper-slide" style="height:auto;">
                    <div class="service-card"><img src="assets/images/blog-image-2.jpg" alt="Custom Furniture">
                    <div class="service-card-body"><div class="service-icon"><i class="fa-solid fa-couch"></i></div><h5>Custom Furniture</h5></div></div>
                </div>
                <div class="swiper-slide" style="height:auto;">
                    <div class="service-card"><img src="assets/images/blog-image-1.jpg" alt="Gates &amp; Railings">
                    <div class="service-card-body"><div class="service-icon"><i class="fa-solid fa-border-all"></i></div><h5>Gates &amp; Railings</h5></div></div>
                </div>
            </div>
        </div>
        <div class="services-nav">
            <button class="s-nav-btn prev" id="sPrev" aria-label="Previous"><svg width="35" height="22" viewBox="0 0 35 22" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/></svg></button>
            <div class="swiper-pagination" id="sPagination" style="position:static;width:auto;flex:1;max-width:200px;"></div>
            <button class="s-nav-btn next" id="sNext" aria-label="Next"><svg width="35" height="22" viewBox="0 0 35 22" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/></svg></button>
        </div>
    </div>
</section>

<!-- ══ TESTIMONIALS ══════════════════════════════════════════════ -->
<section id="testimonials" class="testimonials-section">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Testimonials</span>
            <h3 class="section-title">What Our <span class="gold-text">Clients Say</span></h3>
            <p class="section-subtitle">Hear from our valued customers about their experience working with us.</p>
            <div class="section-divider"></div>
        </div>
        <div class="swiper testimonial-swiper">
            <div class="swiper-wrapper">

                <!-- Card 1 -->
                <div class="swiper-slide" style="height:auto;display:flex;padding:4px;">
                    <div class="tcard">
                        <div class="quote-icon"><i class="fa-solid fa-quote-left"></i></div>
                        <div class="stars">★★★★★</div>
                        <p>Vande Enterprises delivered exactly what we envisioned for our office partitions. Their PVD coating work is flawless and the team was professional throughout.</p>
                        <div class="reviewer-divider"></div>
                        <div class="reviewer">
                            <img src="https://placehold.co/72x72/164243/ffffff?text=RS" alt="Rajesh Sharma">
                            <h6>Rajesh Sharma</h6>
                            <span>Business Owner</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="swiper-slide" style="height:auto;display:flex;padding:4px;">
                    <div class="tcard">
                        <div class="quote-icon"><i class="fa-solid fa-quote-left"></i></div>
                        <div class="stars">★★★★<span class="empty">★</span></div>
                        <p>From custom dining tables to safety doors, every piece was crafted with great attention to detail. Highly recommended for custom fabrication needs.</p>
                        <div class="reviewer-divider"></div>
                        <div class="reviewer">
                            <img src="https://placehold.co/72x72/164243/ffffff?text=PD" alt="Priya Deshmukh">
                            <h6>Priya Deshmukh</h6>
                            <span>Interior Designer</span>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="swiper-slide" style="height:auto;display:flex;padding:4px;">
                    <div class="tcard">
                        <div class="quote-icon"><i class="fa-solid fa-quote-left"></i></div>
                        <div class="stars">★★★★★</div>
                        <p>We got our showroom display racks made here and the quality, finish, and timely delivery exceeded our expectations. Will definitely work with them again.</p>
                        <div class="reviewer-divider"></div>
                        <div class="reviewer">
                            <img src="https://placehold.co/72x72/164243/ffffff?text=AK" alt="Amit Kulkarni">
                            <h6>Amit Kulkarni</h6>
                            <span>Showroom Manager</span>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="swiper-slide" style="height:auto;display:flex;padding:4px;">
                    <div class="tcard">
                        <div class="quote-icon"><i class="fa-solid fa-quote-left"></i></div>
                        <div class="stars">★★★★<span class="empty">★</span></div>
                        <p>Excellent craftsmanship on our stainless steel gates and railings. The team understood our requirements perfectly and executed the project on time.</p>
                        <div class="reviewer-divider"></div>
                        <div class="reviewer">
                            <img src="https://placehold.co/72x72/164243/ffffff?text=SP" alt="Sneha Patil">
                            <h6>Sneha Patil</h6>
                            <span>Homeowner</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- ONE nav row -->
        <div class="t-nav">
            <button class="t-nav-btn prev" id="tPrev" aria-label="Previous"><svg width="35" height="22" viewBox="0 0 35 22" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/></svg></button>
            <div class="swiper-pagination" id="tPagination" style="position:static;width:auto;flex:1;max-width:200px;"></div>
            <button class="t-nav-btn next" id="tNext" aria-label="Next"><svg width="35" height="22" viewBox="0 0 35 22" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/></svg></button>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    if (typeof Swiper === 'undefined') return;
    new Swiper('.services-swiper', {
        slidesPerView:1, spaceBetween:24, loop:true,
        autoplay:{delay:3500,disableOnInteraction:false},
        pagination:{el:'#sPagination',clickable:true},
        navigation:{nextEl:'#sNext',prevEl:'#sPrev'},
        breakpoints:{576:{slidesPerView:2},992:{slidesPerView:3},1200:{slidesPerView:4}}
    });
    new Swiper('.testimonial-swiper', {
        slidesPerView:1, spaceBetween:24, loop:true,
        autoplay:{delay:4000,disableOnInteraction:false},
        pagination:{el:'#tPagination',clickable:true},
        navigation:{nextEl:'#tNext',prevEl:'#tPrev'},
        breakpoints:{768:{slidesPerView:2},992:{slidesPerView:3}}
    });
});
</script>

<?php include 'footer.php'; ?>