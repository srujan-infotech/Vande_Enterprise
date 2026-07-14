<?php include 'header.php'; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
/* ============================================================
   CONTACT PAGE — Vande Enterprises (Fully Responsive)
   ============================================================ */

* { box-sizing: border-box; }

/* ---- Hero ---- */
.contact-hero {
    height: 80vh;
    overflow: hidden;
    position: relative;
}
.contact-hero img {
    width: 100%; height: 100%;
    object-fit: cover;
    filter: grayscale(12%);
    animation: chZoom 16s ease-in-out infinite alternate;
}
@keyframes chZoom { 0%{transform:scale(1)} 100%{transform:scale(1.1)} }
.contact-hero::before {
    content:""; position:absolute; top:0; left:0;
    width:100%; height:6px;
    background:linear-gradient(90deg,#b08a3e,#e3c581,#b08a3e);
    background-size:200% 100%; z-index:3;
    animation:chShimmer 4s linear infinite;
}
@keyframes chShimmer { 0%{background-position:0% 0%} 100%{background-position:200% 0%} }
.contact-hero .ch-overlay {
    position:absolute; inset:0;
    background:linear-gradient(120deg,rgba(0,0,0,.82) 0%,rgba(0,0,0,.55) 50%,rgba(0,0,0,.2) 100%);
    z-index:1;
}
.ch-text {
    position:absolute; top:55%; left:50%;
    transform:translate(-50%,-50%);
    text-align:center; width:100%; padding:0 20px; z-index:2;
}
.ch-text h1 {
    color:#fff; font-size:5rem; font-weight:800;
    letter-spacing:.5px; text-shadow:0 4px 14px rgba(0,0,0,.55);
    margin:0 0 14px;
    opacity:0;
    animation:chIn 1s cubic-bezier(.2,.8,.2,1) .3s forwards;
}
.ch-text p {
    color:rgba(255,255,255,.85); font-size:1.1rem;
    max-width:520px; margin:0 auto;
    opacity:0;
    animation:chIn 1s cubic-bezier(.2,.8,.2,1) .6s forwards;
}
@keyframes chIn { from{opacity:0;transform:translateY(26px)} to{opacity:1;transform:translateY(0)} }

/* ---- Hero Responsive ---- */
@media(max-width:991px){
    .contact-hero { height:60vh; }
    .ch-text h1 { font-size:3.8rem; }
}
@media(max-width:768px){
    .contact-hero { height:380px; }
    .ch-text h1 { font-size:2.8rem; }
    .ch-text p { font-size:0.95rem; max-width:90%; }
}
@media(max-width:530px){
    .contact-hero { height:320px; }
    .ch-text h1 { font-size:2rem !important; }
    .ch-text p { font-size:0.85rem; }
}

/* ---- Breadcrumb ---- */
.breadcrumb-strip {
    background:#f4f6f5; padding:16px 0;
    border-bottom:1px solid #e3e8e6;
}
.breadcrumb-strip ol {
    margin:0; padding:0 12px; list-style:none;
    display:flex; align-items:center; gap:8px;
    font-size:.87rem; color:#777;
    flex-wrap:wrap;
}
.breadcrumb-strip ol li a {
    color:#164243; text-decoration:none; font-weight:600;
    transition:color .2s;
}
.breadcrumb-strip ol li a:hover{color:#b08a3e}
.breadcrumb-strip ol li.active{color:#b08a3e;font-weight:600}
.breadcrumb-strip ol li+li::before{content:"/";margin-right:8px;color:#bbb}
@media(max-width:576px){
    .breadcrumb-strip ol { font-size:.8rem; padding:0 6px; }
    .breadcrumb-strip { padding:12px 0; }
}

/* ---- Reveal ---- */
.rv{opacity:0;transform:translateY(36px);transition:opacity .8s ease,transform .8s ease}
.rv.in-view{opacity:1;transform:translateY(0)}

/* ============================================================
   INFO CARDS
   ============================================================ */
.sec-contact { padding:90px 0 80px; background:#f4f7f6; }

.info-card {
    background:#fff;
    border-radius:18px;
    padding:36px 24px 32px;
    text-align:center;
    box-shadow:0 6px 28px rgba(0,0,0,.06);
    height:100%;
    transition:transform .35s ease, box-shadow .35s ease, border-bottom-color .35s ease;
    border-bottom:4px solid transparent;
}
.info-card:hover {
    transform:translateY(-8px);
    box-shadow:0 20px 50px rgba(0,0,0,.12);
    border-bottom-color:#b08a3e;
}

.info-icon {
    width:72px; height:72px; border-radius:50%;
    background:#edf3f3;
    display:flex; align-items:center; justify-content:center;
    margin:0 auto 20px;
    transition:background .35s ease, transform .35s ease;
}
.info-icon i {
    font-size:1.55rem;
    color:#164243;
    transition:color .35s ease;
    line-height:1;
}
.info-card:hover .info-icon {
    background:#164243;
    transform:rotate(10deg) scale(1.08);
}
.info-card:hover .info-icon i { color:#e3c581; }

.info-card h5 {
    font-size:1rem; font-weight:700;
    color:#164243; margin-bottom:10px;
    text-transform:uppercase; letter-spacing:.6px;
}
.info-card p, .info-card a {
    font-size:.92rem; line-height:1.75;
    color:#666; text-decoration:none;
    display:block; margin:0;
    transition:color .2s;
}
.info-card a:hover { color:#b08a3e; }

/* ---- Info Cards Responsive ---- */
@media(max-width:768px){
    .sec-contact { padding:60px 0 40px; }
    .info-card { padding:28px 18px; }
    .info-icon { width:60px; height:60px; }
    .info-icon i { font-size:1.3rem; }
}

/* ============================================================
   MAIN FORM + SIDEBAR
   ============================================================ */
.contact-main { margin-top:50px; }

.form-card {
    background:#fff;
    border-radius:20px;
    padding:48px 44px;
    box-shadow:0 8px 36px rgba(0,0,0,.07);
    height:100%;
}
.form-card .fc-label {
    font-size:.75rem; font-weight:700;
    letter-spacing:2.5px; text-transform:uppercase;
    color:#b08a3e; display:block; margin-bottom:10px;
}
.form-card h2 {
    font-size:2rem; font-weight:800;
    color:#164243; margin-bottom:8px; line-height:1.3;
}
.form-card .fc-sub {
    font-size:.93rem; color:#777;
    line-height:1.7; margin-bottom:32px;
}
.form-divider {
    width:50px; height:3px;
    background:linear-gradient(90deg,#b08a3e,#e3c581);
    border-radius:2px; margin-bottom:32px;
}
.cv-label {
    font-size:.84rem; font-weight:600;
    color:#444; margin-bottom:6px; display:block;
}
.cv-label span { color:#c0392b; }
.cv-input {
    width:100%;
    border:1.5px solid #e5eaea;
    border-radius:10px;
    padding:12px 16px;
    font-size:.93rem;
    color:#222;
    background:#fafcfc;
    outline:none;
    transition:border-color .25s, box-shadow .25s, background .25s;
    font-family:inherit;
}
.cv-input:focus {
    border-color:#164243;
    background:#fff;
    box-shadow:0 0 0 4px rgba(22,66,67,.09);
}
.cv-input::placeholder { color:#aab5b5; }
textarea.cv-input { resize:vertical; min-height:138px; }
.btn-send {
    display:inline-flex; align-items:center; gap:12px;
    background:#164243; color:#fff;
    padding:15px 36px; border-radius:10px;
    font-size:.95rem; font-weight:700;
    border:none; cursor:pointer; letter-spacing:.4px;
    transition:background .3s, transform .3s, box-shadow .3s;
    font-family:inherit;
}
.btn-send:hover {
    background:#b08a3e; color:#fff;
    transform:translateY(-3px);
    box-shadow:0 12px 30px rgba(176,138,62,.35);
}
.btn-send:disabled { opacity:.65; cursor:not-allowed; transform:none; }
.btn-send i { transition:transform .3s; }
.btn-send:hover i { transform:translateX(5px); }
.form-response { margin-top:14px; font-size:.9rem; font-weight:600; }

/* ---- Form Responsive ---- */
@media(max-width:991px){
    .contact-main { margin-top:30px; }
    .form-card { padding:36px 28px; }
}
@media(max-width:576px){
    .form-card { padding:28px 18px; }
    .form-card h2 { font-size:1.6rem; }
    .btn-send { width:100%; justify-content:center; padding:14px 20px; }
    .cv-input { padding:14px 16px; font-size:1rem; } /* larger touch targets */
}

/* ---- Details Sidebar ---- */
.detail-card {
    background:#164243;
    border-radius:20px;
    padding:44px 36px;
    box-shadow:0 8px 36px rgba(22,66,67,.25);
    height:100%;
    position:relative;
    overflow:hidden;
}
.detail-card::before {
    content:"";
    position:absolute; top:-60px; right:-60px;
    width:220px; height:220px; border-radius:50%;
    background:rgba(255,255,255,.05);
    pointer-events:none;
}
.detail-card::after {
    content:"";
    position:absolute; bottom:-80px; left:-40px;
    width:200px; height:200px; border-radius:50%;
    background:rgba(176,138,62,.12);
    pointer-events:none;
}
.detail-card .dc-label {
    font-size:.72rem; font-weight:700;
    letter-spacing:2.5px; text-transform:uppercase;
    color:#e3c581; display:block; margin-bottom:10px;
}
.detail-card h2 {
    font-size:1.75rem; font-weight:800;
    color:#fff; margin-bottom:28px; line-height:1.3;
}

.dc-item {
    display:flex; align-items:flex-start; gap:16px;
    padding:18px 0;
    border-bottom:1px solid rgba(255,255,255,.1);
}
.dc-item:last-of-type { border-bottom:none; }

.dc-icon-wrap {
    width:46px; height:46px; border-radius:12px;
    background:rgba(255,255,255,.12);
    display:flex; align-items:center; justify-content:center;
    flex-shrink:0;
    transition:background .3s, transform .3s;
}
.dc-item:hover .dc-icon-wrap {
    background:#b08a3e;
    transform:scale(1.1);
}
.dc-icon-wrap i {
    font-size:1.1rem;
    color:#fff;
    line-height:1;
}

.dc-text { flex:1; }
.dc-text strong {
    display:block; font-size:.75rem;
    font-weight:700; letter-spacing:1.2px;
    text-transform:uppercase; color:rgba(255,255,255,.50);
    margin-bottom:5px;
}
.dc-text span, .dc-text a {
    font-size:.93rem; color:rgba(255,255,255,.90);
    text-decoration:none; line-height:1.7;
    display:block;
    transition:color .2s;
}
.dc-text a:hover { color:#e3c581; }

.dc-social {
    display:flex; gap:12px; margin-top:28px;
    flex-wrap:wrap;
}
.dc-social a {
    width:44px; height:44px; border-radius:50%;
    background:rgba(255,255,255,.10);
    display:flex; align-items:center; justify-content:center;
    text-decoration:none;
    transition:background .3s, transform .3s;
}
.dc-social a:hover { background:#b08a3e; transform:translateY(-4px); }
.dc-social a i {
    font-size:1rem;
    color:#fff;
    line-height:1;
}

/* ---- Sidebar Responsive ---- */
@media(max-width:991px){
    .detail-card { padding:36px 28px; margin-top:28px; }
}
@media(max-width:576px){
    .detail-card { padding:28px 20px; }
    .detail-card h2 { font-size:1.4rem; }
    .dc-social { justify-content:center; }
}

/* ============================================================
   MAP
   ============================================================ */
.map-section { padding:0 0 80px; background:#f4f7f6; }
.map-wrap {
    border-radius:20px; overflow:hidden;
    box-shadow:0 8px 36px rgba(0,0,0,.08);
    border:1px solid #e3e8e6;
    position:relative;
}
.map-wrap::before {
    content:"";
    position:absolute; top:0; left:0;
    width:100%; height:4px;
    background:linear-gradient(90deg,#164243,#b08a3e);
    z-index:2;
}
.map-wrap iframe {
    display:block; width:100%; height:400px; border:0;
}
@media(max-width:768px){
    .map-wrap iframe { height:300px; }
}
@media(max-width:576px){
    .map-wrap iframe { height:250px; }
    .map-section { padding:0 0 40px; }
}

/* ---- Extra small fixes ---- */
@media(max-width:400px){
    .ch-text h1 { font-size:1.6rem !important; }
    .info-card { padding:22px 14px; }
    .info-card h5 { font-size:.9rem; }
}
</style>

<!-- HERO ════════════════════════════════════════════════════════ -->
<div class="contact-hero position-relative">
    <div class="ch-overlay"></div>
    <picture>
        <source media="(max-width:530px)" srcset="assets/images/blog-single-image-sm.jpg">
        <img src="assets/images/img4.jpg" alt="Contact Vande Enterprises">
    </picture>
    <div class="container ch-text">
        <h1>Contact Us</h1>
        <p>Have a project in mind? We'd love to hear from you — let's build something great together.</p>
    </div>
</div>    

<!-- BREADCRUMB ══════════════════════════════════════════════════ -->
<div class="breadcrumb-strip">
    <div class="container">
        <ol>
            <li><a href="index.php"><i class="fa-solid fa-house" style="font-size:.8rem;margin-right:4px;"></i>Home</a></li>
            <li class="active">Contact</li>
        </ol>
    </div>
</div>

<!-- INFO CARDS ══════════════════════════════════════════════════ -->
<section class="sec-contact">
    <div class="container">

        <div class="row g-4 rv">

            <!-- Address -->
            <div class="col-sm-6 col-lg-3">
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <h5>Our Location</h5>
                    <p>Shop No.10, Khedkar Industries,<br>Narhe-Katraj Road, Narhe,<br>Pune – 411041</p>
                </div>
            </div>

            <!-- Phone -->
            <div class="col-sm-6 col-lg-3">
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <h5>Phone Numbers</h5>
                    <a href="tel:8089768370">+91 80897 68370</a>
                    <a href="tel:7488470936">+91 74884 70936</a>
                    <a href="tel:7620229568">+91 76202 29568</a>
                </div>
            </div>

            <!-- Email -->
            <div class="col-sm-6 col-lg-3">
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <h5>Email Address</h5>
                    <a href="mailto:info.vande28@gmail.com">info.vande28@gmail.com</a>
                </div>
            </div>

            <!-- Hours -->
            <div class="col-sm-6 col-lg-3">
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <h5>Working Hours</h5>
                    <p>Mon – Sat: 9:00 AM – 7:00 PM</p>
                    <p>Sunday: By Appointment</p>
                </div>
            </div>

        </div>

        <!-- FORM + DETAILS ══════════════════════════════════════ -->
        <div class="row g-4 contact-main">

            <!-- LEFT: Form -->
            <div class="col-lg-7 rv">
                <div class="form-card">
                    <span class="fc-label">Send Us a Message</span>
                    <h2>Let's Start a Conversation</h2>
                    <div class="form-divider"></div>
                    <p class="fc-sub">Fill in the details below and our team will get back to you within 24 hours.</p>

                    <form id="contactForm" novalidate>
                        <div class="row g-3">

                            <div class="col-12">
                                <label class="cv-label" for="cName">Full Name <span>*</span></label>
                                <input class="cv-input" type="text" id="cName" name="cName" placeholder="Enter your full name" required>
                            </div>

                            <div class="col-md-6">
                                <label class="cv-label" for="cPhone">Phone Number</label>
                                <input class="cv-input" type="tel" id="cPhone" name="cPhone" placeholder="+91 00000 00000">
                            </div>

                            <div class="col-md-6">
                                <label class="cv-label" for="cEmail">Email Address <span>*</span></label>
                                <input class="cv-input" type="email" id="cEmail" name="cEmail" placeholder="your@email.com" required>
                            </div>

                            <div class="col-12">
                                <label class="cv-label" for="cService">Service Interested In</label>
                                <select class="cv-input" id="cService" name="cService">
                                    <option value="" disabled selected>Select a service</option>
                                    <option>SS &amp; MS Fabrication</option>
                                    <option>Custom Metal Furniture</option>
                                    <option>PVD Coating</option>
                                    <option>Gates &amp; Railings</option>
                                    <option>Interior Metal Works</option>
                                    <option>Site Installation</option>
                                    <option>Other</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="cv-label" for="cMsg">Your Message</label>
                                <textarea class="cv-input" id="cMsg" name="cMsg" placeholder="Describe your project or requirement..."></textarea>
                            </div>

                            <div class="col-12 mt-2">
                                <button type="submit" class="btn-send" id="sendBtn">
                                    <span class="btn-send-label">Send Message</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>

                            <div class="col-12 form-response"></div>

                        </div>
                    </form>
                </div>
            </div>

            <!-- RIGHT: Details -->
            <div class="col-lg-5 rv">
                <div class="detail-card">
                    <span class="dc-label">Get In Touch</span>
                    <h2>Visit Us or<br>Call Anytime</h2>

                    <div class="dc-item">
                        <div class="dc-icon-wrap"><i class="fa-solid fa-location-dot"></i></div>
                        <div class="dc-text">
                            <strong>Address</strong>
                            <span>Shop No.10, Khedkar Industries,<br>Narhe-Katraj Road, Narhe,<br>Pune – 411041</span>
                        </div>
                    </div>

                    <div class="dc-item">
                        <div class="dc-icon-wrap"><i class="fa-solid fa-phone"></i></div>
                        <div class="dc-text">
                            <strong>Phone</strong>
                            <a href="tel:8089768370">+91 80897 68370</a>
                            <a href="tel:7488470936">+91 74884 70936</a>
                            <a href="tel:7620229568">+91 76202 29568</a>
                        </div>
                    </div>

                    <div class="dc-item">
                        <div class="dc-icon-wrap"><i class="fa-solid fa-envelope"></i></div>
                        <div class="dc-text">
                            <strong>Email</strong>
                            <a href="mailto:info.vande28@gmail.com">info.vande28@gmail.com</a>
                        </div>
                    </div>

                    <div class="dc-item">
                        <div class="dc-icon-wrap"><i class="fa-solid fa-clock"></i></div>
                        <div class="dc-text">
                            <strong>Working Hours</strong>
                            <span>Mon – Sat: 9:00 AM – 7:00 PM</span>
                            <span>Sunday: By Appointment</span>
                        </div>
                    </div>

                    <div class="dc-social">
                        <a href="#" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="#" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="mailto:info.vande28@gmail.com" title="Email"><i class="fa-solid fa-envelope"></i></a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- MAP ═════════════════════════════════════════════════════════ -->
<section class="map-section">
    <div class="container">
        <div class="map-wrap rv">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.839601028083!2d73.82137290929008!3d18.44559048256097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc295fe8218d6dd%3A0x906152e9c20fc0a8!2sKhedekar%20Industrial%20Estate%20nearby%20Shri%20control%20chowk!5e0!3m2!1sen!2ssg!4v1781342163520!5m2!1sen!2ssg"
                allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

<!-- ==================== UPDATED SCRIPT – FIXES & DEBUGGING ==================== -->
<script>
document.addEventListener('DOMContentLoaded', function () {

    // ---------- 1. Scroll Reveal (Intersection Observer) ----------
    var els = document.querySelectorAll('.rv');
    if ('IntersectionObserver' in window) {
        var io = new IntersectionObserver(function(entries){
            entries.forEach(function(e){
                if (e.isIntersecting){ 
                    e.target.classList.add('in-view'); 
                    io.unobserve(e.target); 
                }
            });
        }, {threshold: 0.12});
        els.forEach(function(el){ io.observe(el); });
    } else {
        els.forEach(function(el){ el.classList.add('in-view'); });
    }

    // ---------- 2. Form Submission with proper error handling ----------
    var form = document.getElementById('contactForm');
    var resp = form.querySelector('.form-response');
    var btn  = document.getElementById('sendBtn');
    var btnLabel = btn.querySelector('.btn-send-label');

    if (form) {
        form.addEventListener('submit', function(e){
            e.preventDefault();
            e.stopPropagation();   // Prevents the jQuery handler from running

            // Gather required fields
            var name  = document.getElementById('cName').value.trim();
            var email = document.getElementById('cEmail').value.trim();

            // Basic client-side validation
            if (!name || !email) {
                resp.innerHTML = '<span style="color:#c0392b;"><i class="fa-solid fa-circle-exclamation"></i> Please fill in all required fields.</span>';
                return;
            }

            // Disable button and show sending state
            btn.disabled = true;
            btnLabel.textContent = 'Sending...';
            resp.innerHTML = '';

            var formData = new FormData(form);

            // ----- Determine correct path to send-mail.php -----
            // If this page is in a subfolder (e.g., /pages/contact.php), adjust accordingly.
            // By default, we assume send-mail.php is in the same folder.
            var scriptUrl = 'send-mail.php';

            // OPTIONAL: If you know the page is in a subfolder, uncomment and adjust:
            // var path = window.location.pathname;
            // if (path.includes('/pages/')) {
            //     scriptUrl = '../send-mail.php';
            // }

            // ----- Perform fetch with detailed error handling -----
            fetch(scriptUrl, {
                method: 'POST',
                headers: { 'X-Requested-With': 'XMLHttpRequest' },
                body: formData
            })
            .then(function(response) {
                // Check for HTTP errors (404, 500, etc.)
                if (!response.ok) {
                    throw new Error('HTTP ' + response.status + ': ' + response.statusText);
                }
                // Get raw text first so we can inspect it if JSON parsing fails
                return response.text();
            })
            .then(function(text) {
                // Try to parse the response as JSON
                var data;
                try {
                    data = JSON.parse(text);
                } catch (parseError) {
                    // JSON parsing failed – show a preview of the response
                    var snippet = text.substring(0, 200);
                    resp.innerHTML = '<span style="color:#c0392b;"><i class="fa-solid fa-circle-exclamation"></i> Server returned invalid JSON. Preview: ' + snippet + '...</span>';
                    console.error('Invalid JSON response from server:', text);
                    return; // stop further processing
                }

                // Now handle the parsed data
                if (data.success) {
                    resp.innerHTML = '<span style="color:#164243;"><i class="fa-solid fa-circle-check"></i> Thank you, <strong>' + name + '</strong>! We\'ll get back to you shortly.</span>';
                    form.reset();
                } else {
                    resp.innerHTML = '<span style="color:#c0392b;"><i class="fa-solid fa-circle-exclamation"></i> ' + (data.message || 'Something went wrong. Please try again.') + '</span>';
                }
            })
            .catch(function(error) {
                // This catches network errors, CORS issues, or thrown errors above
                resp.innerHTML = '<span style="color:#c0392b;"><i class="fa-solid fa-circle-exclamation"></i> ' + error.message + '</span>';
            })
            .finally(function() {
                // Re-enable the button
                btn.disabled = false;
                btnLabel.textContent = 'Send Message';
            });
        });
    }
});
</script>

<?php include 'footer.php'; ?>