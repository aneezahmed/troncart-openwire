<?= view('templates/header', [
    'title' => 'Contact TronCart Solutions - Get Quote for IT & Metering Solutions',
    'description' => 'Contact TronCart for IT infrastructure solutions and smart metering platforms. 24/7 support. Email: connect@troncart.com | contact@troncart.com. Expert consultation available.'
]) ?>

<!-- Page Header -->
<div class="page-header">
    <div class="container text-center">
        <h1 class="display-3 fw-bold text-white">Get In Touch</h1>
        <p class="lead text-white">We'd love to hear from you. Send us a message!</p>
    </div>
</div>

<!-- Contact Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">
                        <h3 class="mb-4">Send us a Message</h3>
                        
                        <?php if (session()->has('success')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bi bi-check-circle me-2"></i><?= session('success') ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php endif; ?>

                        <?php if (session()->has('errors')): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="bi bi-exclamation-circle me-2"></i>
                                <ul class="mb-0">
                                    <?php foreach (session('errors') as $error): ?>
                                        <li><?= esc($error) ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php endif; ?>
                        
                        <form action="/contact/submit" method="post">
                            <?= csrf_field() ?>
                            
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="department" class="form-label">I'm contacting for <span class="text-danger">*</span></label>
                                    <select class="form-select" id="department" name="department" required>
                                        <option value="">-- Select Department --</option>
                                        <option value="it_infrastructure" <?= old('department') == 'it_infrastructure' ? 'selected' : '' ?>>IT and Infrastructure Solutions</option>
                                        <option value="smart_metering" <?= old('department') == 'smart_metering' ? 'selected' : '' ?>>Smart Utility Metering Solutions</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?= old('name') ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?= old('email') ?>" required>
                                </div>
                                <div class="col-12">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" value="<?= old('phone') ?>">
                                </div>
                                <div class="col-12">
                                    <label for="subject" class="form-label">Subject <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="subject" name="subject" value="<?= old('subject') ?>" required>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required><?= old('message') ?></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg w-100">
                                        <i class="bi bi-send me-2"></i>Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Contact Information -->
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 mb-4">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-4">
                            <i class="bi bi-briefcase text-primary-custom me-2"></i>
                            Software & Hardware Solutions
                        </h5>
                        <div class="mb-3">
                            <h6 class="fw-bold mb-2"><i class="bi bi-envelope text-primary-custom me-2"></i>Email</h6>
                            <p class="text-muted mb-0">connect@troncart.com</p>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-2"><i class="bi bi-telephone text-primary-custom me-2"></i>Phone</h6>
                            <p class="text-muted mb-0">+91 8848824518</p>
                            <p class="text-muted mb-0">+91 8921410645</p>
                        </div>
                    </div>
                </div>

                <div class="card shadow-lg border-0 mb-4">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-4">
                            <i class="bi bi-lightning-charge text-primary-custom me-2"></i>
                            Smart Metering Solutions
                        </h5>
                        <div class="mb-3">
                            <h6 class="fw-bold mb-2"><i class="bi bi-envelope text-primary-custom me-2"></i>Email</h6>
                            <p class="text-muted mb-0">contact@troncart.com</p>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-2"><i class="bi bi-telephone text-primary-custom me-2"></i>Phone</h6>
                            <p class="text-muted mb-0">+91 9744815290</p>
                        </div>
                    </div>
                </div>

                <div class="card shadow-lg border-0" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Business Hours</h5>
                        <p class="mb-2"><i class="bi bi-clock me-2"></i>Monday - Friday: 9:00 AM - 6:00 PM</p>
                        <p class="mb-2"><i class="bi bi-clock me-2"></i>Saturday: 9:00 AM - 1:00 PM</p>
                        <p class="mb-0"><i class="bi bi-clock me-2"></i>Sunday: Closed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= view('templates/footer') ?>
