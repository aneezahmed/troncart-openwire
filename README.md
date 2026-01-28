# TronCart Solutions - PHP CodeIgniter Website

This is the official website for TronCart Solutions, converted from a React/TypeScript application to PHP CodeIgniter 4 framework.

## Features

- **Multiple Pages**: Home, Solutions, Products, Cloud Services, About, Contact
- **Bootstrap 5 Styling**: Modern, responsive design
- **Contact Form**: Fully functional with validation
- **Static Content**: Easy to manage and update

## Tech Stack

- **Framework**: CodeIgniter 4.6.4
- **PHP Version**: 8.2+
- **Frontend**: Bootstrap 5, Bootstrap Icons
- **Web Server**: Apache 2.4

## Installation

### Prerequisites
- PHP 8.2 or higher
- Apache web server with mod_rewrite enabled
- Composer

### Setup Instructions

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd <project-directory>
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Configure environment**
   - Copy `.env` file and update settings if needed
   - Update `app.baseURL` to match your domain

4. **Set permissions**
   ```bash
   chmod -R 777 writable/
   ```

5. **Configure Apache**
   - Point document root to `/public` directory
   - Ensure mod_rewrite is enabled
   - Example virtual host configuration:
   ```apache
   <VirtualHost *:80>
       ServerName your-domain.com
       DocumentRoot /path/to/project/public
       
       <Directory /path/to/project/public>
           Options Indexes FollowSymLinks
           AllowOverride All
           Require all granted
       </Directory>
   </VirtualHost>
   ```

6. **Access the website**
   - Open your browser and navigate to your configured domain
   - The homepage should load successfully

## Project Structure

```
/
├── app/
│   ├── Controllers/     # Page controllers
│   ├── Views/          # View templates
│   │   ├── templates/  # Header & footer templates
│   │   ├── home.php
│   │   ├── solutions.php
│   │   ├── products.php
│   │   ├── cloud_services.php
│   │   ├── about.php
│   │   └── contact.php
│   └── Config/         # Configuration files
├── public/             # Public assets (PDFs, images, etc.)
├── writable/           # Cache, logs, session data
└── system/             # CodeIgniter framework files
```

## Pages

1. **Home** (`/`) - Main landing page with software and hardware solutions
2. **Solutions** (`/solutions`) - Smart metering and billing platform details
3. **Products** (`/products`) - Hardware product catalogue
4. **Cloud Services** (`/cloud-services`) - Software ecosystem offerings
5. **About** (`/about`) - Company information and values
6. **Contact** (`/contact`) - Contact form and company contact details

## Contact Form

The contact form includes:
- Name (required)
- Email (required)
- Phone (optional)
- Subject (required)
- Message (required)

Form submissions are validated server-side using CodeIgniter's validation library.

## Assets

Product brochures and catalogues are available in `/public`:
- `Smart_Metering_Brochure.pdf`
- `Product_Catalogue.pdf`

## Support

For technical support or inquiries:

**Software & Hardware Solutions:**
- Email: connect@troncart.com
- Phone: +91 8848824518, +91 8921410645

**Smart Metering Solutions:**
- Email: contact@troncart.com
- Phone: +91 9744815290

## License

© 2026 TronCart Solutions. All rights reserved.
