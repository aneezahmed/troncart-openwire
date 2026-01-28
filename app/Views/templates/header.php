<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'TronCart Solutions - Smart IT Infrastructure & Utility Metering Solutions') ?></title>
    <meta name="description" content="<?= esc($description ?? 'Leading provider of smart metering platforms, IoT solutions, and high-performance computing devices. Serving 150+ clients with enterprise-grade technology solutions for modern businesses.') ?>">
    <meta name="keywords" content="smart metering, IoT solutions, thin client, mini PC, network security, data storage, enterprise technology, utility metering, IT infrastructure, network firewall, NAS storage">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicon-192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="/favicon-512.png">
    <link rel="apple-touch-icon" href="/favicon-192.png">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #D12525;
            --primary-dark: #A51D1D;
            --primary-light: #E63939;
            --secondary-color: #333333;
            --accent-color: #D12525;
            --text-dark: #1d1e1e;
            --background-light: #ffffff;
            --background-muted: #f5f5f5;
        }
        
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-dark);
        }
        
        .navbar-brand img {
            height: 45px;
        }
        
        .navbar-light {
            background-color: white !important;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .navbar-light .navbar-nav .nav-link {
            color: var(--text-dark);
            font-weight: 500;
            padding: 0.5rem 1rem;
            transition: color 0.3s;
        }
        
        .navbar-light .navbar-nav .nav-link:hover {
            color: var(--primary-color);
        }
        
        .navbar-light .navbar-nav .nav-link.active {
            color: var(--primary-color);
            font-weight: 600;
        }
        
        /* Page Header for Internal Pages */
        .page-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            color: white;
            padding: 100px 0 60px;
            margin-top: 56px;
            text-align: center;
        }
        
        .page-header h1 {
            margin-bottom: 1rem;
        }
        
        /* Mobile optimization for page header */
        @media (max-width: 768px) {
            .page-header {
                padding: 80px 0 40px;
            }
            
            .page-header h1 {
                font-size: 2rem !important;
            }
            
            .page-header .lead {
                font-size: 1rem !important;
            }
        }
        
        @media (max-width: 576px) {
            .page-header {
                padding: 60px 0 30px;
            }
            
            .page-header h1 {
                font-size: 1.75rem !important;
            }
            
            .page-header .lead {
                font-size: 0.95rem !important;
            }
        }
        
        .hero-section {
            position: relative;
            color: white;
            padding: 100px 0 80px;
            margin-top: 56px;
            min-height: 90vh;
            display: flex;
            align-items: center;
        }
        
        .hero-background-slider {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        
        .hero-background-slider .carousel-inner,
        .hero-background-slider .carousel-item,
        .hero-background-slider .carousel-item img {
            height: 100%;
            width: 100%;
        }
        
        .hero-background-slider .carousel-item img {
            object-fit: cover;
            object-position: center;
        }
        
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.5) 100%);
            z-index: 2;
        }
        
        .hero-content {
            z-index: 3;
            width: 100%;
        }
        
        .carousel-fade .carousel-item {
            opacity: 0;
            transition: opacity 1.5s ease-in-out;
        }
        
        .carousel-fade .carousel-item.active {
            opacity: 1;
        }
        
        /* Mobile Responsive Styles */
        @media (max-width: 768px) {
            .hero-section {
                min-height: auto;
                padding: 60px 0 40px;
            }
            
            .hero-section h1 {
                font-size: 2.5rem !important;
            }
            
            .hero-section .lead {
                font-size: 1.1rem !important;
            }
            
            .hero-section .card {
                margin-bottom: 1rem;
            }
            
            .hero-section .card-body {
                padding: 2rem !important;
            }
            
            .hero-section .icon-box {
                width: 60px !important;
                height: 60px !important;
                font-size: 2rem !important;
            }
            
            .hero-section h2 {
                font-size: 1.5rem !important;
            }
            
            .hero-section .card-body p {
                font-size: 0.95rem !important;
            }
            
            .hero-section ul li {
                font-size: 0.9rem;
                margin-bottom: 0.5rem !important;
            }
            
            .hero-section .btn-lg {
                font-size: 1rem;
                padding: 0.75rem 1.5rem;
            }
            
            .hero-overlay {
                background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.7) 100%);
            }
        }
        
        @media (max-width: 576px) {
            .hero-section {
                padding: 40px 0 30px;
            }
            
            .hero-section h1 {
                font-size: 2rem !important;
                margin-bottom: 1rem !important;
            }
            
            .hero-section .lead {
                font-size: 1rem !important;
                margin-bottom: 2rem !important;
            }
            
            .hero-section .card-body {
                padding: 1.5rem !important;
            }
            
            .hero-section .icon-box {
                width: 50px !important;
                height: 50px !important;
                font-size: 1.5rem !important;
                margin-bottom: 1rem !important;
            }
            
            .hero-section h2 {
                font-size: 1.3rem !important;
                margin-bottom: 1rem !important;
            }
            
            .hero-section .card-body p {
                font-size: 0.9rem !important;
                margin-bottom: 1rem !important;
            }
            
            .hero-section ul {
                margin-bottom: 1.5rem !important;
            }
            
            .hero-section ul li {
                font-size: 0.85rem;
            }
        }
        
        .card-hover {
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(209, 37, 37, 0.2);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
        }
        
        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }
        
        .text-primary-custom {
            color: var(--primary-color);
        }
        
        .bg-light-custom {
            background-color: var(--background-muted);
        }
        
        .icon-box {
            width: 64px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            font-size: 2rem;
        }
        
        footer {
            background-color: #2d3748;
            color: #cbd5e0;
        }
        
        footer a {
            color: #cbd5e0;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        footer a:hover {
            color: white;
        }
        
        .badge-custom {
            background-color: var(--primary-color);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 500;
        }
        
        .navbar-dark {
            background-color: white !important;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .navbar-dark .navbar-brand img {
            height: 45px;
        }
        
        .navbar-dark .navbar-nav .nav-link {
            color: var(--text-dark) !important;
            font-weight: 500;
        }
        
        .navbar-dark .navbar-nav .nav-link:hover {
            color: var(--primary-color) !important;
        }
        
        .navbar-dark .navbar-toggler {
            border-color: var(--primary-color);
        }
        
        .navbar-dark .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(209, 37, 37, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        
        .nav-link.active {
            color: var(--primary-color) !important;
            font-weight: 600;
        }
        
        .text-gradient {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Carousel Styles */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: var(--primary-color);
            border-radius: 50%;
            padding: 20px;
        }
        
        .carousel-indicators [data-bs-target] {
            background-color: var(--primary-color);
        }
        
        .product-carousel img {
            border-radius: 12px;
            height: 400px;
            object-fit: cover;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/images/troncart-logo.svg" alt="TronCart Solutions">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= uri_string() == '' ? 'active' : '' ?>" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= uri_string() == 'solutions' ? 'active' : '' ?>" href="/solutions">Solutions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= uri_string() == 'products' ? 'active' : '' ?>" href="/products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= uri_string() == 'cloud-services' ? 'active' : '' ?>" href="/cloud-services">Cloud Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= uri_string() == 'about' ? 'active' : '' ?>" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= uri_string() == 'contact' ? 'active' : '' ?>" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
