<?= view('templates/header', [
    'title' => 'Smart Metering & Billing Solutions | Real-Time Utility Monitoring - TronCart',
    'description' => 'Comprehensive smart metering platform for electricity, water, gas & BTU monitoring. Automated data collection, real-time analytics, cloud-based billing system. Supporting M-BUS, Modbus, BACnet protocols.'
]) ?>

<!-- Page Header -->
<div class="page-header">
    <div class="container text-center">
        <h1 class="display-3 fw-bold text-white">Smart Metering & Billing Platform</h1>
        <p class="lead text-white">Comprehensive solution for meter reading, data management, and billing</p>
    </div>
</div>

<!-- Overview Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <span class="badge-custom">Our Solutions</span>
                <h2 class="section-title mt-3">Robust, Scalable Platform</h2>
                <p class="lead text-muted mb-4">Our platform is designed for managing and analyzing utility meters using all major BMS protocols. It supports any make and model as long as they follow standard communication protocols, providing flexibility to manage electricity, water, gas, BTU, and more.</p>
                <p class="text-muted">Whether for residential complexes, commercial buildings, or industrial sites, our platform streamlines meter reading, consumption calculation, billing, and beyond.</p>
            </div>
            <div class="col-lg-6">
                <img src="/images/smart-meter.jpg" alt="Smart Metering" class="img-fluid rounded shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5 bg-light-custom">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Key Features</h2>
            <p class="lead text-muted">Comprehensive functionality for all your metering needs</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm card-hover">
                    <div class="card-body p-4">
                        <div class="icon-box mb-3">
                            <i class="bi bi-speedometer"></i>
                        </div>
                        <h5 class="card-title">Multi-Utility Support</h5>
                        <p class="card-text text-muted">Handles electricity, water, gas, BTU, and other utilities with a single platform</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm card-hover">
                    <div class="card-body p-4">
                        <div class="icon-box mb-3">
                            <i class="bi bi-diagram-3"></i>
                        </div>
                        <h5 class="card-title">Wide Protocol Support</h5>
                        <p class="card-text text-muted">M-BUS, Modbus, BACnet, MQTT and other BMS protocols integrate seamlessly</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm card-hover">
                    <div class="card-body p-4">
                        <div class="icon-box mb-3">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h5 class="card-title">Data Security</h5>
                        <p class="card-text text-muted">Secure storage with encrypted communication and automatic error handling</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm card-hover">
                    <div class="card-body p-4">
                        <div class="icon-box mb-3">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <h5 class="card-title">Real-Time Monitoring</h5>
                        <p class="card-text text-muted">View and manage live meter data with easy configuration of custom parameters</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm card-hover">
                    <div class="card-body p-4">
                        <div class="icon-box mb-3">
                            <i class="bi bi-database"></i>
                        </div>
                        <h5 class="card-title">Scalable Performance</h5>
                        <p class="card-text text-muted">Handles 5000+ meter readings per minute with advanced optimization</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm card-hover">
                    <div class="card-body p-4">
                        <div class="icon-box mb-3">
                            <i class="bi bi-lightning-charge"></i>
                        </div>
                        <h5 class="card-title">Smart Automation</h5>
                        <p class="card-text text-muted">Integrated control for smart valves and actuators for better management</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="mb-4">Interested in Our Smart Metering Solutions?</h2>
        <p class="lead text-muted mb-4">Download our brochure or request a demo</p>
        <a href="/Smart_Metering_Brochure.pdf" class="btn btn-primary btn-lg me-3" download><i class="bi bi-download me-2"></i>Download Brochure</a>
        <a href="/contact" class="btn btn-outline-primary btn-lg">Request Demo</a>
    </div>
</section>

<?= view('templates/footer') ?>
