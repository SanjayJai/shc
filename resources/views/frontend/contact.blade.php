@extends('frontend.layouts.app')
@section('title', 'Contact Us')
@section('content')

<!--====================  breadcrumb area ====================-->
<div class="page-breadcrumb bg-img space__bottom--r120" data-bg="assets/img/backgrounds/bc-bg.webp">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-breadcrumb-content text-center">
                    <h1>Contact</h1>
                    <ul class="page-breadcrumb-links">
                        <li><a href="{{ route('Home') }}">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====================  contact area ====================-->
<div class="conact-section space__bottom--r120">
    <div class="container">
        <div class="row">
            <!-- Contact Info -->
            <div class="col-lg-4 col-12">
                <div class="contact-information">
                    <h4 class="space__bottom--30">Contact Information</h4>
                    <ul>
                        <li>
                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                            <span class="text"><span>Office: No.60/1A, Vetrilaikara Street, Opp. Ayappan Temple, Walajapet, Ranipet Dist. - 632 513.</span></span>
                        </li>
                        <li>
                            <span class="icon"><i class="fa fa-phone"></i></span>
                            <span class="text"><a href="callto:(+91) 9597677439">(+91) 9597677439</a><a href="callto:(+91)73732 31781">(+91)73732 31781</a></span>
                        </li>
                        <li>
                            <span class="icon"><i class="fa fa-envelope-open"></i></span>
                            <span class="text"><a href="mailto:squarehomeconstruction@gmail.com">squarehomeconstruction@gmail.com</a><a href="#">squarehomeconstruction@gmail.com</a></span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-8 col-12">
                <div class="contact-form">
                    <h4 class="space__bottom--30">Leave Your Message</h4>
                    <form id="contact-form" method="POST">
                        @csrf
                        <div class="row row-10">
                            <div class="col-md-6 col-12 space__bottom--20">
                                <input name="con_name" type="text" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 col-12 space__bottom--20">
                                <input name="con_email" type="email" placeholder="Your Email" required>
                            </div>
                            <div class="col-12">
                                <textarea name="con_message" placeholder="Your Message" required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" id="submitBtn">
                                    <span class="spinner-border spinner-border-sm d-none" role="status" id="loadingSpinner"></span>
                                    <span id="btnText">Send Message</span>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Message Response Box -->
                    <div id="formResponse" class="mt-3"></div>
                </div>
            </div>
        </div>

        <!-- Google Map -->
        <br><br>
        <div class="row">
            <div class="col space__bottom--40">
                <div class="contact-map">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29570.267691592268!2d79.34667316114904!3d12.927459342548232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bad353b17827b67%3A0xe7ef15461599f78f!2sWalajapet%2C%20Tamil%20Nadu!5e1!3m2!1sen!2sin!4v1752562291148!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<x-brand/>

<!-- Scroll top -->
<button class="scroll-top" id="scroll-top">
    <i class="fa fa-angle-up"></i>
</button>

<!-- Script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('contact-form');
        const btn = document.getElementById('submitBtn');
        const spinner = document.getElementById('loadingSpinner');
        const btnText = document.getElementById('btnText');
        const responseBox = document.getElementById('formResponse');

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            // Show loading spinner
            spinner.classList.remove('d-none');
            btnText.innerText = 'Sending...';
            btn.disabled = true;

            const formData = new FormData(form);

            fetch("{{ route('contact.send') }}", {
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: formData
            })
            .then(response => {
                if (!response.ok) throw new Error("Something went wrong.");
                return response.text();
            })
            .then(() => {
               responseBox.innerHTML = '<div class="alert alert-success">✅ Thank you for contacting us. One of our representatives will connect with you as soon as possible.</div>';

                form.reset();
            })
            .catch(() => {
                responseBox.innerHTML = '<div class="alert alert-danger">❌ Failed to send message. Please try again later.</div>';
            })
            .finally(() => {
                // Reset button
                spinner.classList.add('d-none');
                btnText.innerText = 'Send Message';
                btn.disabled = false;
            });
        });
    });
</script>

<!-- Optional CSS Spinner if Bootstrap not available -->
<style>
    .spinner-border {
        border: 2px solid #f3f3f3;
        border-top: 2px solid #333;
        border-radius: 50%;
        width: 18px;
        height: 18px;
        animation: spin 0.8s linear infinite;
        display: inline-block;
        margin-right: 5px;
    }
    @keyframes spin {
        to { transform: rotate(360deg); }
    }
    .d-none {
        display: none;
    }
</style>

@endsection
