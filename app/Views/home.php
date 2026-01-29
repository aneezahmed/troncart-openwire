<?= view('templates/header', [
    'title' => 'TronCart Solutions - Smart IT Infrastructure & Utility Metering Solutions Provider',
    'description' => 'Leading provider of smart utility metering platforms and IT infrastructure solutions. Offering Mini PCs, Thin Clients, Network Security, NAS Storage, and comprehensive metering solutions for 150+ clients worldwide.'
]) ?>

<!-- Hero Section with Background Slider -->
<section class="hero-section position-relative overflow-hidden">
    <!-- Background Image Carousel -->
    <div id="heroCarousel" class="carousel slide carousel-fade hero-background-slider" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/images/hero/background-1.jpg" class="d-block w-100" alt="Background 1">
            </div>
            <div class="carousel-item">
                <img src="/images/hero/background-2.jpg" class="d-block w-100" alt="Background 2">
            </div>
            <div class="carousel-item">
                <img src="/images/hero/background-3.jpg" class="d-block w-100" alt="Background 3">
            </div>
        </div>
    </div>
    
    <!-- Dark Overlay for Better Text Readability -->
    <div class="hero-overlay"></div>
    
    <!-- Hero Content -->
    <div class="container position-relative hero-content">
        <div class="row align-items-center mb-5">
            <div class="col-lg-12 text-center">
                <h1 class="display-2 fw-bold mb-4 text-white">Troncart Solutions</h1>
                <p class="lead mb-5 fs-3 text-white">Empowering Businesses with Cutting-Edge Technology</p>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Smart IT Infrastructure Solutions -->
            <div class="col-lg-6">
                <div class="card h-100 shadow-lg card-hover border-0">
                    <div class="card-body p-5 text-center">
                        <div class="icon-box mb-4 mx-auto" style="width: 80px; height: 80px; font-size: 2.5rem;">
                            <i class="bi bi-pc-display"></i>
                        </div>
                        <h2 class="h2 mb-4 text-gradient">Smart IT Infrastructure Solutions</h2>
                        <p class="text-muted mb-4 fs-5">High-performance computing devices, thin clients, network security appliances, and enterprise storage solutions for modern businesses.</p>
                        <ul class="list-unstyled text-start mb-4">
                            <li class="mb-3"><i class="bi bi-check-circle-fill text-danger me-2"></i><strong>Mini PCs & Thin Clients</strong> - Compact, powerful computing</li>
                            <li class="mb-3"><i class="bi bi-check-circle-fill text-danger me-2"></i><strong>Network Security</strong> - Enterprise-grade firewalls</li>
                            <li class="mb-3"><i class="bi bi-check-circle-fill text-danger me-2"></i><strong>Storage Solutions</strong> - Scalable NAS systems</li>
                            <li class="mb-3"><i class="bi bi-check-circle-fill text-danger me-2"></i><strong>Interactive Displays</strong> - Touch-enabled panels</li>
                        </ul>
                        <a href="/products" class="btn btn-primary btn-lg">Explore Products <i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Smart Utility Monitoring Solutions -->
            <div class="col-lg-6">
                <div class="card h-100 shadow-lg card-hover border-0">
                    <div class="card-body p-5 text-center">
                        <div class="icon-box mb-4 mx-auto" style="width: 80px; height: 80px; font-size: 2.5rem;">
                            <i class="bi bi-speedometer2"></i>
                        </div>
                        <h2 class="h2 mb-4 text-gradient">Smart Utility Monitoring & Billing Solutions</h2>
                        <p class="text-muted mb-4 fs-5">Comprehensive platform for smart metering, automated data collection, real-time monitoring, and integrated billing systems.</p>
                        <ul class="list-unstyled text-start mb-4">
                            <li class="mb-3"><i class="bi bi-check-circle-fill text-danger me-2"></i><strong>Multi-Utility Support</strong> - Electricity, water, gas, BTU</li>
                            <li class="mb-3"><i class="bi bi-check-circle-fill text-danger me-2"></i><strong>Real-Time Monitoring</strong> - Live data & analytics</li>
                            <li class="mb-3"><i class="bi bi-check-circle-fill text-danger me-2"></i><strong>Automated Billing</strong> - Seamless invoicing</li>
                            <li class="mb-3"><i class="bi bi-check-circle-fill text-danger me-2"></i><strong>Cloud Technology</strong> - Secure & scalable</li>
                        </ul>
                        <a href="/solutions" class="btn btn-primary btn-lg">Explore Solutions <i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Stats Section -->
<section class="py-5 bg-light-custom">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Trusted by Industry Leaders</h2>
            <p class="lead text-muted">Delivering excellence across industries</p>
        </div>
        <div class="row text-center g-4">
            <div class="col-md-3 col-6">
                <h2 class="display-3 fw-bold text-primary-custom">150+</h2>
                <p class="text-muted fw-semibold">Clients Served</p>
            </div>
            <div class="col-md-3 col-6">
                <h2 class="display-3 fw-bold text-primary-custom">14+</h2>
                <p class="text-muted fw-semibold">Products</p>
            </div>
            <div class="col-md-3 col-6">
                <h2 class="display-3 fw-bold text-primary-custom">99.5%</h2>
                <p class="text-muted fw-semibold">On-Time Delivery</p>
            </div>
            <div class="col-md-3 col-6">
                <h2 class="display-3 fw-bold text-primary-custom">24/7</h2>
                <p class="text-muted fw-semibold">Support</p>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge-custom">Why Choose Us</span>
            <h2 class="section-title mt-3">Your Trusted Technology Partner</h2>
            <p class="lead text-muted">Delivering innovative solutions backed by excellence</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow card-hover">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mx-auto mb-3">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h5 class="card-title fw-bold">Enterprise Reliable</h5>
                        <p class="card-text text-muted">Proven track record with 99.5% on-time delivery</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow card-hover">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mx-auto mb-3">
                            <i class="bi bi-lightning-charge"></i>
                        </div>
                        <h5 class="card-title fw-bold">High Performance</h5>
                        <p class="card-text text-muted">Optimized solutions for maximum efficiency</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow card-hover">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mx-auto mb-3">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h5 class="card-title fw-bold">24/7 Support</h5>
                        <p class="card-text text-muted">Always available when you need us</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow card-hover">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mx-auto mb-3">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h5 class="card-title fw-bold">Scalable</h5>
                        <p class="card-text text-muted">Solutions that grow with your business</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-dark text-white">
    <div class="container text-center">
        <h2 class="mb-4">Ready to Transform Your Business?</h2>
        <p class="lead mb-4">Get in touch with our team to discuss your requirements</p>
        <a href="/contact" class="btn btn-light btn-lg">Contact Us Today</a>
    </div>
</section>

<?= view('templates/footer') ?>
