<?= view('templates/header', [
    'title' => 'About TronCart Solutions - Leading Technology Innovation Company',
    'description' => 'Transforming businesses through innovative technology solutions. Serving 150+ clients with 99.5% on-time delivery. Enterprise-grade smart metering and IT infrastructure solutions provider.'
]) ?>

<!-- Page Header -->
<div class="page-header">
    <div class="container text-center">
        <h1 class="display-3 fw-bold text-white">About Troncart Solutions</h1>
        <p class="lead text-white">Leading Innovation In Technology</p>
    </div>
</div>

<!-- About Content -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <span class="badge-custom">About Us</span>
                <h2 class="section-title mt-3">Transforming Businesses Through Innovation</h2>
                <p class="lead text-muted">Troncart Solutions is dedicated to transforming businesses through innovative technology solutions</p>
            </div>
        </div>

        <!-- Values Grid -->
        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-lg card-hover">
                    <div class="card-body p-5">
                        <div class="icon-box mb-4">
                            <i class="bi bi-bullseye"></i>
                        </div>
                        <h3 class="h4 mb-3">Our Mission</h3>
                        <p class="text-muted">Empowering customers by delivering state-of-the-art devices and software products that are reliable, high-performance, and efficient.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-lg card-hover">
                    <div class="card-body p-5">
                        <div class="icon-box mb-4">
                            <i class="bi bi-lightbulb"></i>
                        </div>
                        <h3 class="h4 mb-3">Innovation First</h3>
                        <p class="text-muted">At the forefront of technological innovation, continuously developing cutting-edge solutions for modern challenges.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-lg card-hover">
                    <div class="card-body p-5">
                        <div class="icon-box mb-4">
                            <i class="bi bi-people"></i>
                        </div>
                        <h3 class="h4 mb-3">Customer Focus</h3>
                        <p class="text-muted">Trusted by 150+ organizations across industries with a proven track record of successful deployments.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-lg card-hover">
                    <div class="card-body p-5">
                        <div class="icon-box mb-4">
                            <i class="bi bi-rocket-takeoff"></i>
                        </div>
                        <h3 class="h4 mb-3">Future Ready</h3>
                        <p class="text-muted">Innovating across hardware and software solutions with 14+ products in our growing portfolio.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why Choose Us Section -->
        <div class="card shadow-lg border-0">
            <div class="card-body p-5">
                <div class="text-center mb-5">
                    <h3 class="section-title">Why Choose Troncart Solutions?</h3>
                    <p class="lead text-muted">We combine cutting-edge technology with proven reliability to deliver solutions that drive real business value. Our comprehensive product portfolio and expert support ensure you have the tools needed to succeed in today's competitive landscape.</p>
                </div>
                <div class="row g-4 text-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="mb-2">
                            <h2 class="display-4 fw-bold text-primary-custom">99.5%</h2>
                        </div>
                        <p class="text-muted">On-Time Project Delivery</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="mb-2">
                            <h2 class="display-4 fw-bold text-primary-custom">3x</h2>
                        </div>
                        <p class="text-muted">Faster Implementation Time</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="mb-2">
                            <h2 class="display-4 fw-bold text-primary-custom">24/7</h2>
                        </div>
                        <p class="text-muted">Support Available</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="mb-2">
                            <h2 class="display-4 fw-bold text-primary-custom">100%</h2>
                        </div>
                        <p class="text-muted">Client Satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-dark text-white">
    <div class="container text-center">
        <h2 class="mb-4">Ready to Work With Us?</h2>
        <p class="lead mb-4">Get in touch to discuss how we can help your business</p>
        <a href="/contact" class="btn btn-light btn-lg">Contact Us Today</a>
    </div>
</section>

<?= view('templates/footer') ?>
