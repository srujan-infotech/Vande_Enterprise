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

    /* Overlay – increase opacity here */
    .blog-single-image .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.2);
        /* adjust alpha (0.6 = 60% opacity) */
        z-index: 1;
        pointer-events: none;
        /* allows clicks to pass through if needed */
    }

    /* Position "Contact Us" text – above the overlay */
    .blog-single-text {
        top: 15% !important;
        transform: translateY(0) !important;
        left: 0;
        width: 100%;
        padding-left: 15px;
        padding-right: 15px;
        z-index: 2;
        /* above overlay */
    }

    @media (max-width: 530px) {
        .blog-single-image {
            height: 250px;
        }

        .blog-single-text {
            top: 10% !important;
        }
    }

    /* Remove negative margins and adjust spacing */
    .section-contact-map {
        margin-top: 2rem !important;
    }

    .map-wrapper {
        padding-top: 2rem;
    }

    @media (min-width: 992px) {
        .map-wrapper {
            padding-top: 3rem;
        }
    }

    /* Change placeholder text color */
    .contact-form .form-control::placeholder {
        color: #6c757d;
        opacity: 1;
    }

    .contact-form .form-control:-ms-input-placeholder {
        color: #6c757d;
    }

    .contact-form .form-control::-ms-input-placeholder {
        color: #6c757d;
    }

    /* Optional: style the heading */
    .contact-heading {
        margin-bottom: 1.5rem;
    }
</style>

<!--Banner Section ======================-->
<div class="blog-single-image position-relative max-width">
    <!-- Overlay added here -->
    <div class="overlay"></div>

    <picture>
        <source media="(max-width:530px)" srcset="assets/images/blog-single-image-sm.jpg">
        <img src="assets/images/blog-single-image.jpg" alt="hero-image">
    </picture>
    <div class="container">
        <div class="blog-single-text position-absolute">
            <h5 class="display-3 fw-extra-bold mt-0">Contact Us</h5>
        </div>
    </div>
</div>
<!--Banner Section ======================-->

<!--Section Contact Map ======================-->
<section class="section-contact-map position-relative">
    <div class="container">
        <!-- Row: form (left) and details (right) -->
        <div class="row gx-20 gy-30">
            <!-- Left column: Contact Form (col-8) -->
            <div class="col-lg-8">
                <!-- Add heading above the form -->
                <h2 class="contact-heading" style="font-size:25px">Contact With Us</h2>

                <form id="contactForm" class="contact-form row gy-3 gx-20">
                    <div class="col-12">
                        <input type="text" class="form-control" id="InputName" name="InputName" placeholder="Your Name*" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="InputNumber" name="InputNumber" placeholder="Phone Number">
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Email*" required>
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" id="InputMessage" name="InputMessage" rows="5" placeholder="Type your message"></textarea>
                    </div>
                    <div class="col-12">
                        <div class="text-lg-end">
                            <button type="submit" class="btn btn-outline-primary gap-10">Send message
                                <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="response py-3"></div>
                </form>
            </div>

            <!-- Right column: Contact Details (col-4) -->
            <div class="col-lg-4">
                <div class="contact-details">
                    <h2 class="stroke-heading">
                        <svg stroke-width="1" class="text-line-2 fw-extra-bold"><text x="0%" dominant-baseline="middle" y="70%">01</text></svg>
                    </h2>
                    <h4 class="service-title">Office Address:</h4>
                    <div class="footer-address">
                        <p class="fw-semibold mb-0">Vande Enterprises,</p>
                        <p>Shop No. - 10, Khedkar Industries,<br>Narhe-Katraj Road, Narhe, Pune - 411041.</p>
                    </div>
                    <div class="d-flex flex-column">
                        <p class="mb-0 d-flex align-items-center gap-2">Phone: <a href="tel:8089768370" class="text-decoration-none link-hover-animation-1">8089768370</a></p>
                        <p class="mb-0 d-flex align-items-center gap-2">Phone: <a href="tel:7488470936" class="text-decoration-none link-hover-animation-1">7488470936</a></p>
                        <p class="mb-0 d-flex align-items-center gap-2">Phone: <a href="tel:7620229568" class="text-decoration-none link-hover-animation-1">7620229568</a></p>
                        <p class="mb-0 d-flex align-items-center gap-2">Email: <a href="mailto:info.vande28@gmail.com" class="text-decoration-none link-hover-animation-1">info.vande28@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--Section Contact Map ======================-->

<?php include 'footer.php'; ?>