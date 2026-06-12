<?php
/**
 * SEO & Meta Tag configuration for Prishiv Energy Private Limited
 */
$siteName = "Prishiv Energy Private Limited";
$defaultDesc = "Prishiv Energy Private Limited is a premium supplier of industrial power infrastructure solutions, Diesel Generators (DG sets), Power Transformers, Voltage Regulators, and Industrial Pumps.";
$currentUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// Set defaults if variables are not predefined in the page
$pageTitle = isset($pageTitle) ? $pageTitle . " | " . $siteName : "Powering Progress, Delivering Trust | " . $siteName;
$pageDesc = isset($pageDesc) ? $pageDesc : $defaultDesc;
$metaKeywords = isset($metaKeywords) ? $metaKeywords : "Diesel Generators, DG Sets, Power Transformers, Voltage Regulators, Servo Stabilizers, Industrial Pumps, Air Filtration Systems, Industrial Power Solutions, Prishiv Energy, B2B Power Infrastructure";
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo htmlspecialchars($pageDesc); ?>">
<meta name="keywords" content="<?php echo htmlspecialchars($metaKeywords); ?>">
<meta name="author" content="Prishiv Energy Private Limited">
<link rel="canonical" href="<?php echo htmlspecialchars($currentUrl); ?>">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo htmlspecialchars($currentUrl); ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($pageDesc); ?>">
<meta property="og:image" content="assets/images/hero/banner.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="<?php echo htmlspecialchars($currentUrl); ?>">
<meta property="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta property="twitter:description" content="<?php echo htmlspecialchars($pageDesc); ?>">
<meta property="twitter:image" content="assets/images/hero/banner.jpg">

<!-- Title -->
<title><?php echo $pageTitle; ?></title>

<!-- Favicon -->
<link rel="icon" type="image/jpeg" href="assets/images/logo.jpeg">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700;800&family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Tailwind CSS Play CDN -->
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          primary: {
            DEFAULT: '#0D47A1',
            light: '#1E88E5',
            dark: '#0A3780',
          },
          secondary: {
            DEFAULT: '#43A047',
            light: '#66BB6A',
            dark: '#2E7D32',
          },
          accent: {
            DEFAULT: '#F57C00',
            light: '#FFB74D',
            dark: '#E65100',
          },
          dark: '#1A1A1A',
          light: '#F5F7FA',
        },
        fontFamily: {
          sans: ['Inter', 'sans-serif'],
          display: ['Montserrat', 'Outfit', 'sans-serif'],
        },
        boxShadow: {
          'premium': '0 10px 30px -5px rgba(0, 0, 0, 0.05), 0 20px 40px -15px rgba(13, 71, 161, 0.05)',
          'premium-hover': '0 20px 50px -10px rgba(13, 71, 161, 0.15), 0 30px 60px -20px rgba(0, 0, 0, 0.1)',
        }
      }
    }
  }
</script>

<!-- Custom Stylesheet -->
<link rel="stylesheet" href="assets/css/custom.css">

<!-- B2B Structured Data (Schema.org) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EnergyBusinessSystem",
  "name": "Prishiv Energy Private Limited",
  "alternateName": "Prishiv Energy",
  "url": "https://www.prishivenergy.com",
  "logo": "https://www.prishivenergy.com/assets/images/logo.jpeg",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91-9876543210",
    "contactType": "sales",
    "areaServed": "IN",
    "availableLanguage": ["en", "hi"]
  },
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Prishiv Corporate Tower, Sector 62",
    "addressLocality": "Noida",
    "addressRegion": "Uttar Pradesh",
    "postalCode": "201301",
    "addressCountry": "IN"
  },
  "sameAs": [
    "https://www.linkedin.com/company/prishiv-energy"
  ]
}
</script>
