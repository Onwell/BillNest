<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BillNest - Invoicing that gets you paid</title>
    
    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* --- CSS Reset & Variables --- */
        :root {
            --primary-color: #0d5c4d;
            --primary-hover: #0a473b;
            --bg-light: #f8f9fa;
            --bg-white: #ffffff;
            --bg-green-light: #e6f2ef;
            --text-main: #111827;
            --text-muted: #6b7280;
            --border-color: #e5e7eb;
            --font-family: 'Poppins', sans-serif;
            --border-radius: 12px;
            --max-width: 1200px;
            --transition-speed: 0.3s;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 80px;
        }

        body {
            font-family: var(--font-family);
            color: var(--text-main);
            background-color: var(--bg-light);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        /* --- SVG Icon Styling --- */
        .icon {
            width: 20px;
            height: 20px;
            stroke: currentColor;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
            fill: none;
            flex-shrink: 0;
        }
        
        .icon-sm { width: 16px; height: 16px; }
        .icon-lg { width: 24px; height: 24px; }

        /* --- Animation Keyframes --- */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        @keyframes modalPop {
            from { opacity: 0; transform: scale(0.95) translateY(10px); }
            to { opacity: 1; transform: scale(1) translateY(0); }
        }

        /* Animation Classes */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .animate-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* --- Utility Classes --- */
        .container {
            max-width: var(--max-width);
            margin: 0 auto;
            padding: 0 24px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 0.95rem;
            cursor: pointer;
            transition: all var(--transition-speed) ease;
            text-align: center;
            border: none;
            font-family: inherit;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: var(--bg-white);
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(13, 92, 77, 0.2);
        }

        .btn-outline {
            background-color: transparent;
            border: 1px solid var(--border-color);
            color: var(--text-main);
        }

        .btn-outline:hover {
            background-color: #f3f4f6;
            transform: translateY(-2px);
        }

        .btn-large {
            padding: 14px 28px;
            font-size: 1rem;
        }

        .section-tag {
            display: inline-block;
            background-color: var(--bg-green-light);
            color: var(--primary-color);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-bottom: 16px;
        }

        .section-header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 48px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 16px;
            letter-spacing: -0.5px;
            line-height: 1.2;
        }

        .section-header p {
            color: var(--text-muted);
            font-size: 1.1rem;
        }

        /* --- Navbar --- */
        header {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border-color);
            position: sticky;
            top: 0;
            z-index: 100;
            transition: box-shadow var(--transition-speed);
        }
        
        header.scrolled {
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 72px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 800;
            font-size: 1.25rem;
            transition: transform var(--transition-speed);
        }
        
        .logo:hover {
            transform: scale(1.02);
        }

        .logo-icon {
            width: 28px;
            height: 28px;
            background-color: var(--primary-color);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .nav-links {
            display: flex;
            gap: 32px;
            font-weight: 500;
            font-size: 0.95rem;
            color: var(--text-muted);
        }

        .nav-links a {
            position: relative;
            padding-bottom: 4px;
            transition: color var(--transition-speed);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary-color);
            transition: width var(--transition-speed) ease;
        }

        .nav-links a:hover {
            color: var(--text-main);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .nav-actions a,
        .nav-actions button {
            font-weight: 600;
            font-size: 0.95rem;
        }

        .nav-signin {
            background: none;
            border: none;
            font-family: inherit;
            color: var(--text-main);
            cursor: pointer;
            padding: 8px 12px;
            border-radius: 6px;
            transition: background var(--transition-speed);
        }

        .nav-signin:hover {
            background: #f3f4f6;
        }

        /* --- Hero Section --- */
        .hero {
            background-color: var(--bg-white);
            padding: 80px 0;
            overflow: hidden;
        }

        .hero-container {
            display: flex;
            align-items: center;
            gap: 60px;
        }

        .hero-content {
            flex: 1;
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .hero-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 24px;
            animation: fadeIn 1s ease-out;
        }

        .hero h1 {
            font-size: 3.8rem;
            font-weight: 800;
            line-height: 1.1;
            letter-spacing: -1.5px;
            margin-bottom: 24px;
        }

        .hero h1 span {
            color: var(--primary-color);
        }

        .hero p {
            font-size: 1.1rem;
            color: var(--text-muted);
            margin-bottom: 32px;
            max-width: 90%;
        }

        .hero-actions {
            display: flex;
            gap: 16px;
            margin-bottom: 16px;
        }

        .hero-trust {
            font-size: 0.85rem;
            color: var(--text-muted);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .hero-stats {
            display: flex;
            gap: 32px;
            margin-top: 40px;
            padding-top: 24px;
            border-top: 1px solid var(--border-color);
        }

        .stat-item strong {
            display: block;
            font-size: 1.25rem;
            font-weight: 800;
        }

        .stat-item span {
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        .hero-image-wrapper {
            flex: 1.2;
            position: relative;
            animation: fadeInUp 1s ease-out 0.2s forwards;
            opacity: 0;
        }

        /* --- Dashboard Mockup CSS --- */
        .mockup-container {
            background: #f0f4f8;
            border-radius: 16px;
            border: 1px solid var(--border-color);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            position: relative;
            z-index: 2;
        }

        .mockup-header {
            background: #ffffff;
            padding: 12px 16px;
            display: flex;
            align-items: center;
            gap: 12px;
            border-bottom: 1px solid var(--border-color);
        }
        
        .mockup-dots {
            display: flex;
            gap: 6px;
        }
        
        .mockup-dots span {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #d1d5db;
        }
        .mockup-dots span:nth-child(1) { background-color: #ef4444; }
        .mockup-dots span:nth-child(2) { background-color: #f59e0b; }
        .mockup-dots span:nth-child(3) { background-color: #10b981; }

        .mockup-url {
            background: #f3f4f6;
            padding: 4px 12px;
            border-radius: 6px;
            font-size: 0.7rem;
            color: var(--text-muted);
            flex: 1;
            text-align: center;
            font-weight: 500;
        }

        .mockup-body {
            padding: 24px;
            background: #ffffff;
            display: grid;
            grid-template-columns: 200px 1fr;
            gap: 24px;
        }

        .mockup-sidebar {
            border-right: 1px solid var(--border-color);
            padding-right: 24px;
        }

        .mockup-nav-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 0.8rem;
            font-weight: 500;
            color: var(--text-muted);
            margin-bottom: 4px;
        }
        
        .mockup-nav-item.active {
            background-color: var(--bg-green-light);
            color: var(--primary-color);
            font-weight: 600;
        }

        .mockup-main {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .mockup-top-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .mockup-card {
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 16px;
        }

        .mockup-card-title {
            font-size: 0.75rem;
            color: var(--text-muted);
            margin-bottom: 8px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .mockup-card-value {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--text-main);
        }

        .mockup-card-sub {
            font-size: 0.75rem;
            color: #10b981;
            font-weight: 600;
            margin-top: 4px;
        }

        .mockup-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.8rem;
        }

        .mockup-table th {
            text-align: left;
            padding-bottom: 8px;
            border-bottom: 1px solid var(--border-color);
            color: var(--text-muted);
            font-weight: 600;
        }

        .mockup-table td {
            padding: 12px 0;
            border-bottom: 1px solid #f3f4f6;
            color: var(--text-main);
            font-weight: 500;
        }
        
        .status-badge {
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 0.7rem;
            font-weight: 600;
        }
        .status-paid { background: #d1fae5; color: #065f46; }
        .status-pending { background: #fef3c7; color: #92400e; }
        .status-draft { background: #f3f4f6; color: #4b5563; }

        .floating-badge {
            position: absolute;
            background: white;
            padding: 12px 16px;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            font-size: 0.8rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            animation: float 4s ease-in-out infinite;
            z-index: 10;
            border: 1px solid var(--border-color);
        }
        
        .badge-1 { top: 10%; right: -20px; animation-delay: 0s; }
        .badge-2 { bottom: 15%; left: -30px; animation-delay: 2s; }

        /* --- Logos Section --- */
        .logos-section {
            padding: 40px 0;
            text-align: center;
            background-color: var(--bg-white);
            border-bottom: 1px solid var(--border-color);
        }

        .logos-section p {
            font-size: 0.75rem;
            font-weight: 700;
            color: var(--text-muted);
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 24px;
        }

        .logos-grid {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 48px;
            opacity: 0.6;
            filter: grayscale(100%);
            font-weight: 700;
            font-size: 1.2rem;
            transition: filter var(--transition-speed);
        }
        
        .logos-grid:hover {
            filter: grayscale(0%);
            opacity: 1;
        }

        /* --- Features Section --- */
        .features-section {
            padding: 80px 0;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .feature-card {
            background-color: var(--bg-white);
            padding: 32px;
            border-radius: var(--border-radius);
            border: 1px solid var(--border-color);
            transition: all var(--transition-speed) ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            border-color: var(--bg-green-light);
        }

        .feature-card.large {
            grid-column: span 2;
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .feature-card h3 {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .feature-icon-wrapper {
            width: 40px;
            height: 40px;
            background-color: var(--bg-light);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            transition: background-color var(--transition-speed);
        }
        
        .feature-card:hover .feature-icon-wrapper {
            background-color: var(--bg-green-light);
        }

        .feature-card p {
            color: var(--text-muted);
            font-size: 0.95rem;
        }

        /* --- How It Works Section --- */
        .how-it-works-section {
            padding: 80px 0;
            background-color: var(--bg-light);
        }

        .steps-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-top: 40px;
        }

        .step-card {
            background-color: var(--bg-white);
            padding: 32px;
            border-radius: var(--border-radius);
            border: 1px solid var(--border-color);
            position: relative;
            transition: all var(--transition-speed);
        }
        
        .step-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }

        .step-number {
            position: absolute;
            top: 32px;
            right: 32px;
            font-size: 3rem;
            font-weight: 800;
            color: var(--border-color);
            line-height: 1;
            transition: color var(--transition-speed);
        }
        
        .step-card:hover .step-number {
            color: var(--bg-green-light);
        }

        .step-card h3 {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 12px;
            margin-top: 40px;
        }

        .step-card p {
            color: var(--text-muted);
            font-size: 0.95rem;
        }

        /* --- Pricing Section --- */
        .pricing-section {
            padding: 80px 0;
            background-color: var(--bg-white);
        }

        .pricing-toggle {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 16px;
            margin-bottom: 40px;
            font-weight: 600;
        }

        .toggle-btn {
            background-color: var(--bg-light);
            border: 1px solid var(--border-color);
            padding: 8px 16px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: all var(--transition-speed);
            font-family: inherit;
        }

        .toggle-btn.active {
            background-color: var(--bg-white);
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            border-color: transparent;
        }

        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            align-items: stretch;
        }

        .pricing-card {
            background-color: var(--bg-white);
            border: 1px solid var(--border-color);
            border-radius: var(--border-radius);
            padding: 40px;
            display: flex;
            flex-direction: column;
            transition: all var(--transition-speed);
        }

        .pricing-card:hover {
            box-shadow: 0 15px 35px rgba(0,0,0,0.06);
            transform: translateY(-3px);
        }

        .pricing-card.popular {
            border: 2px solid var(--primary-color);
            position: relative;
            box-shadow: 0 10px 30px rgba(13, 92, 77, 0.1);
        }
        
        .pricing-card.popular:hover {
            box-shadow: 0 20px 40px rgba(13, 92, 77, 0.15);
        }

        .popular-badge {
            position: absolute;
            top: -12px;
            left: 50%;
            transform: translateX(-50%);
            background-color: var(--primary-color);
            color: var(--bg-white);
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .pricing-card h3 {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .pricing-card .description {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin-bottom: 24px;
            min-height: 40px;
        }

        .price {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 8px;
            display: flex;
            align-items: baseline;
            gap: 4px;
        }

        .price span {
            font-size: 1rem;
            font-weight: 500;
            color: var(--text-muted);
        }

        .price-sub {
            font-size: 0.85rem;
            color: var(--text-muted);
            margin-bottom: 24px;
        }

        .pricing-card .btn {
            width: 100%;
            margin-bottom: 32px;
        }

        .features-list {
            flex-grow: 1;
        }

        .features-list li {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
            font-size: 0.9rem;
            color: var(--text-main);
        }

        .features-list li.disabled {
            color: var(--text-muted);
        }

        .check-icon { color: var(--primary-color); }
        .cross-icon { color: var(--border-color); }

        /* --- Testimonials Section --- */
        .testimonials-section {
            padding: 80px 0;
            background-color: var(--bg-light);
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .testimonial-card {
            background-color: var(--bg-white);
            padding: 32px;
            border-radius: var(--border-radius);
            border: 1px solid var(--border-color);
            display: flex;
            flex-direction: column;
            transition: all var(--transition-speed);
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.05);
        }

        .stars {
            color: #fbbf24;
            margin-bottom: 16px;
            display: flex;
            gap: 4px;
        }

        .quote {
            font-size: 1rem;
            font-weight: 500;
            margin-bottom: 24px;
            flex-grow: 1;
        }

        .author {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .avatar {
            width: 40px;
            height: 40px;
            background-color: var(--bg-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.8rem;
            color: var(--primary-color);
            transition: background-color var(--transition-speed), color var(--transition-speed);
        }
        
        .testimonial-card:hover .avatar {
            background-color: var(--primary-color);
            color: white;
        }

        .author-info h4 {
            font-size: 0.9rem;
            font-weight: 700;
        }

        .author-info p {
            font-size: 0.8rem;
            color: var(--text-muted);
        }

        /* --- FAQ Section --- */
        .faq-section {
            padding: 80px 0;
            background-color: var(--bg-white);
        }

        .faq-list {
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            border-bottom: 1px solid var(--border-color);
            transition: background-color var(--transition-speed);
        }
        
        .faq-item:hover {
            background-color: #fafafa;
        }

        .faq-question {
            width: 100%;
            text-align: left;
            padding: 24px 16px;
            background: none;
            border: none;
            font-size: 1.05rem;
            font-weight: 600;
            color: var(--text-main);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: color var(--transition-speed);
            font-family: inherit;
        }

        .faq-question:hover {
            color: var(--primary-color);
        }
        
        .faq-question .icon {
            transition: transform var(--transition-speed);
        }
        
        .faq-question.active .icon {
            transform: rotate(45deg);
        }

        .faq-answer {
            padding: 0 16px 24px;
            color: var(--text-muted);
            font-size: 0.95rem;
            display: none;
            animation: fadeIn var(--transition-speed) ease-out;
        }

        /* --- CTA Section --- */
        .cta-section {
            padding: 0 0 80px;
            background-color: var(--bg-white);
        }

        .cta-container {
            background-color: var(--primary-color);
            border-radius: var(--border-radius);
            padding: 64px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--bg-white);
            position: relative;
            overflow: hidden;
        }
        
        .cta-container::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
            border-radius: 50%;
            transition: transform 1s ease;
        }
        
        .cta-container:hover::before {
            transform: scale(1.2);
        }

        .cta-content {
            max-width: 500px;
            position: relative;
            z-index: 2;
        }

        .cta-content h2 {
            font-size: 2.5rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 16px;
        }

        .cta-content p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 32px;
        }

        .cta-actions {
            display: flex;
            gap: 16px;
        }

        .cta-actions .btn-primary {
            background-color: var(--bg-white);
            color: var(--primary-color);
        }

        .cta-actions .btn-primary:hover {
            background-color: #f3f4f6;
            box-shadow: 0 4px 15px rgba(255,255,255,0.2);
        }

        .cta-actions .btn-outline {
            border-color: rgba(255,255,255,0.3);
            color: var(--bg-white);
        }

        .cta-actions .btn-outline:hover {
            background-color: rgba(255,255,255,0.1);
        }

        /* --- Footer --- */
        footer {
            background-color: var(--bg-white);
            border-top: 1px solid var(--border-color);
            padding: 64px 0 32px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 64px;
        }

        .footer-brand p {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin: 16px 0 24px;
            max-width: 250px;
        }

        .social-links {
            display: flex;
            gap: 16px;
            color: var(--text-muted);
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: var(--bg-light);
            transition: all var(--transition-speed);
        }
        
        .social-links a:hover {
            background-color: var(--primary-color);
            color: white;
        }

        .footer-col h4 {
            font-size: 0.9rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .footer-col ul li {
            margin-bottom: 12px;
        }

        .footer-col ul li a {
            color: var(--text-muted);
            font-size: 0.95rem;
            transition: color var(--transition-speed);
        }

        .footer-col ul li a:hover {
            color: var(--primary-color);
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 32px;
            border-top: 1px solid var(--border-color);
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        .footer-legal {
            display: flex;
            gap: 24px;
        }
        
        .footer-legal a {
            transition: color var(--transition-speed);
        }
        
        .footer-legal a:hover {
            color: var(--text-main);
        }

        /* ===================================================== */
        /* --- AUTH MODAL (Login / Sign up pop-up) --- */
        /* ===================================================== */
        .auth-modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(17, 24, 39, 0.55);
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.25s ease, visibility 0.25s ease;
        }

        .auth-modal-overlay.is-open {
            opacity: 1;
            visibility: visible;
        }

        .auth-modal {
            max-width: 460px;
            width: 100%;
            max-height: 95vh;
            overflow-y: auto;
            background: var(--bg-white);
            border-radius: 24px;
            box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.3), 0 0 0 1px rgba(0, 0, 0, 0.02);
            padding: 36px 32px 32px;
            position: relative;
            border: 1px solid var(--border-color);
            animation: modalPop 0.35s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        .auth-modal-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 24px;
        }

        .auth-modal-header .logo {
            font-size: 1.35rem;
        }

        .auth-close {
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text-muted);
            padding: 6px;
            border-radius: 50%;
            transition: background 0.2s, color 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .auth-close:hover {
            background: #f3f4f6;
            color: var(--text-main);
        }

        /* Tabs */
        .auth-tabs {
            display: flex;
            gap: 8px;
            background: var(--bg-light);
            padding: 4px;
            border-radius: 40px;
            margin-bottom: 28px;
        }

        .auth-tab-btn {
            flex: 1;
            padding: 10px 16px;
            border: none;
            background: transparent;
            font-family: inherit;
            font-weight: 600;
            font-size: 0.95rem;
            color: var(--text-muted);
            border-radius: 40px;
            cursor: pointer;
            transition: all 0.2s;
        }

        .auth-tab-btn.active {
            background: var(--bg-white);
            color: var(--primary-color);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        }

        .auth-tab-btn:hover:not(.active) {
            color: var(--text-main);
        }

        /* Form */
        .auth-form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .auth-form .form-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .auth-form .form-group label {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--text-main);
            letter-spacing: 0.2px;
        }

        .auth-form .form-group input {
            font-family: inherit;
            padding: 12px 16px;
            border-radius: 10px;
            border: 1.5px solid var(--border-color);
            font-size: 0.95rem;
            background: var(--bg-white);
            transition: border 0.2s, box-shadow 0.2s;
            outline: none;
            color: var(--text-main);
            width: 100%;
        }

        .auth-form .form-group input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(13, 92, 77, 0.08);
        }

        .auth-form .form-group input::placeholder {
            color: #9ca3af;
            font-weight: 400;
        }

        .auth-forgot-row {
            display: flex;
            justify-content: flex-end;
            margin-top: -6px;
            margin-bottom: 4px;
        }

        .auth-forgot-row a {
            font-size: 0.8rem;
            font-weight: 500;
            color: var(--primary-color);
            transition: opacity 0.2s;
        }

        .auth-forgot-row a:hover {
            opacity: 0.8;
            text-decoration: underline;
        }

        .auth-submit-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 24px;
            border-radius: 40px;
            font-weight: 600;
            font-size: 0.95rem;
            cursor: pointer;
            transition: all var(--transition-speed) ease;
            text-align: center;
            border: none;
            font-family: inherit;
            width: 100%;
            background-color: var(--primary-color);
            color: var(--bg-white);
            margin-top: 4px;
        }

        .auth-submit-btn:hover {
            background-color: var(--primary-hover);
            transform: translateY(-1px);
            box-shadow: 0 8px 20px rgba(13, 92, 77, 0.25);
        }

        .auth-divider {
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--text-muted);
            font-size: 0.75rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin: 8px 0 4px;
        }

        .auth-divider::before,
        .auth-divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: var(--border-color);
        }

        .auth-social-login {
            display: flex;
            gap: 12px;
            margin-bottom: 8px;
        }

        .auth-social-btn {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 10px 12px;
            border-radius: 10px;
            border: 1.5px solid var(--border-color);
            background: var(--bg-white);
            font-family: inherit;
            font-weight: 500;
            font-size: 0.85rem;
            color: var(--text-main);
            cursor: pointer;
            transition: all 0.2s;
        }

        .auth-social-btn:hover {
            background: #f9fafb;
            border-color: #d1d5db;
        }

        .auth-social-btn .icon {
            width: 18px;
            height: 18px;
        }

        .auth-trust-line {
            margin-top: 22px;
            text-align: center;
            font-size: 0.75rem;
            color: var(--text-muted);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            flex-wrap: wrap;
        }

        .auth-trust-line .icon {
            color: var(--primary-color);
            width: 14px;
            height: 14px;
        }

        .auth-panel {
            display: none;
            animation: fadeIn 0.25s ease-out;
        }

        .auth-panel.active {
            display: block;
        }

        .auth-terms {
            font-size: 0.7rem;
            color: var(--text-muted);
            text-align: center;
            margin-top: 12px;
        }

        .auth-terms a {
            color: var(--primary-color);
            font-weight: 500;
        }

        /* --- Responsive Design --- */
        @media (max-width: 992px) {
            .hero-container {
                flex-direction: column;
                text-align: center;
                gap: 40px;
            }

            .hero h1 {
                font-size: 3rem;
            }

            .hero p {
                margin: 0 auto 32px;
            }

            .hero-actions, .hero-trust, .hero-stats {
                justify-content: center;
            }

            .features-grid, .steps-grid, .pricing-grid, .testimonials-grid {
                grid-template-columns: 1fr;
            }

            .feature-card.large {
                grid-column: span 1;
                flex-direction: column;
                align-items: flex-start;
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }

            .cta-container {
                flex-direction: column;
                text-align: center;
                padding: 40px 24px;
            }

            .cta-actions {
                justify-content: center;
            }
            
            .floating-badge {
                display: none;
            }
            
            .mockup-body {
                grid-template-columns: 1fr;
            }
            .mockup-sidebar {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .section-header h2 {
                font-size: 2rem;
            }

            .footer-grid {
                grid-template-columns: 1fr;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 16px;
                text-align: center;
            }

            .auth-modal {
                padding: 28px 20px 24px;
            }

            .auth-social-login {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container nav-container">
            <a href="#home" class="logo">
                <div class="logo-icon">
                    <svg class="icon" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                </div>
                BillNest
            </a>
            <nav class="nav-links">
                <a href="#features">Features</a>
                <a href="#how-it-works">How it works</a>
                <a href="#pricing">Pricing</a>
                <a href="#stories">Stories</a>
                <a href="#faq">FAQ</a>
            </nav>
            <div class="nav-actions">
                <button type="button" class="nav-signin" data-auth-open="signin">Sign in</button>
                <button type="button" class="btn btn-primary" data-auth-open="signup">
                    Start free 
                    <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container hero-container">
            <div class="hero-content">
                <div class="hero-tag">
                    <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    BUILT FOR SMALL TEAMS
                </div>
                <h1>Invoicing that <span>gets you paid,</span> without the busywork.</h1>
                <p>BillNest keeps every invoice, client and payment in one calm workspace. Send a professional invoice in under a minute, then let automatic reminders do the chasing.</p>
                <div class="hero-actions">
                    <button type="button" class="btn btn-primary btn-large" data-auth-open="signup">Start free — no card needed</button>
                    <a href="#how-it-works" class="btn btn-outline btn-large">See how it works</a>
                </div>
                <div class="hero-trust">
                    <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    14-day free trial &middot; Cancel anytime &middot; No setup fees
                </div>
                <div class="hero-stats">
                    <div class="stat-item">
                        <strong>12,400+</strong>
                        <span>invoices sent monthly</span>
                    </div>
                    <div class="stat-item">
                        <strong>9 days</strong>
                        <span>faster average payment</span>
                    </div>
                    <div class="stat-item">
                        <strong>4.9/5</strong>
                        <span>from 300 reviews</span>
                    </div>
                </div>
            </div>
            <div class="hero-image-wrapper">
                <div class="floating-badge badge-1">
                    <svg class="icon icon-sm" style="color: #10b981;" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    Payment received
                </div>
                <div class="floating-badge badge-2">
                    <svg class="icon icon-sm" style="color: #f59e0b;" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    Reminder scheduled
                </div>
                
                <div class="mockup-container">
                    <div class="mockup-header">
                        <div class="mockup-dots"><span></span><span></span><span></span></div>
                        <div class="mockup-url">app.billnest.com/dashboard</div>
                    </div>
                    <div class="mockup-body">
                        <div class="mockup-sidebar">
                            <div class="mockup-nav-item active">
                                <svg class="icon icon-sm" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                                Dashboard
                            </div>
                            <div class="mockup-nav-item">
                                <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                                Invoices
                            </div>
                            <div class="mockup-nav-item">
                                <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                                Clients
                            </div>
                            <div class="mockup-nav-item">
                                <svg class="icon icon-sm" viewBox="0 0 24 24"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
                                Reports
                            </div>
                        </div>
                        <div class="mockup-main">
                            <div class="mockup-top-row">
                                <div class="mockup-card">
                                    <div class="mockup-card-title">Total Revenue</div>
                                    <div class="mockup-card-value">$24,120.00</div>
                                    <div class="mockup-card-sub">+12% from last month</div>
                                </div>
                                <div class="mockup-card">
                                    <div class="mockup-card-title">Outstanding</div>
                                    <div class="mockup-card-value">$8,450.00</div>
                                    <div class="mockup-card-sub" style="color: #f59e0b;">4 invoices pending</div>
                                </div>
                            </div>
                            <div class="mockup-card" style="padding: 16px;">
                                <div class="mockup-card-title" style="margin-bottom: 12px;">Recent Invoices</div>
                                <table class="mockup-table">
                                    <thead>
                                        <tr>
                                            <th>Client</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Northwind Logistics</td>
                                            <td>$4,500</td>
                                            <td><span class="status-badge status-paid">Paid</span></td>
                                        </tr>
                                        <tr>
                                            <td>Kada Studio</td>
                                            <td>$1,200</td>
                                            <td><span class="status-badge status-pending">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>Boobab Capital</td>
                                            <td>$2,800</td>
                                            <td><span class="status-badge status-paid">Paid</span></td>
                                        </tr>
                                        <tr>
                                            <td>Zambezi Foods</td>
                                            <td>$950</td>
                                            <td><span class="status-badge status-draft">Draft</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Logos Section -->
    <section class="logos-section animate-on-scroll">
        <div class="container">
            <p>TRUSTED BY FINANCE AND OPS TEAMS AT</p>
            <div class="logos-grid">
                <span>Northwind</span>
                <span>Kada</span>
                <span>Boobab</span>
                <span>Miterlian</span>
                <span>Zambezi</span>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <span class="section-tag">EVERYTHING YOU NEED</span>
                <h2>One place for the whole billing cycle</h2>
                <p>From the first invoice to the last payment, BillNest keeps the money side of your business organised — without spreadsheets.</p>
            </div>
            <div class="features-grid">
                <div class="feature-card animate-on-scroll" style="transition-delay: 0.1s;">
                    <h3>
                        <div class="feature-icon-wrapper"><svg class="icon" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg></div>
                        Invoices in under a minute
                    </h3>
                    <p>Build a branded invoice with line items, tax and payment terms. Send clients and products make the next one even faster.</p>
                </div>
                <div class="feature-card animate-on-scroll" style="transition-delay: 0.2s;">
                    <h3>
                        <div class="feature-icon-wrapper"><svg class="icon" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                        Automatic payment reminders
                    </h3>
                    <p>Friendly nudges go out before and after the due date, so you stop writing awkward follow-up emails yourself.</p>
                </div>
                <div class="feature-card animate-on-scroll" style="transition-delay: 0.3s;">
                    <h3>
                        <div class="feature-icon-wrapper"><svg class="icon" viewBox="0 0 24 24"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg></div>
                        Track every payment
                    </h3>
                    <p>See which jobs are pending and whether a glance. Record a payment and the dashboard updates instantly.</p>
                </div>
                <div class="feature-card large animate-on-scroll" style="transition-delay: 0.1s;">
                    <div class="feature-icon-wrapper" style="width: 56px; height: 56px;"><svg class="icon icon-lg" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
                    <div>
                        <h3>Clients with full history</h3>
                        <p>Each client gets a page showing every invoice, payment and outstanding balance — so you always know where a relationship stands.</p>
                    </div>
                </div>
                <div class="feature-card animate-on-scroll" style="transition-delay: 0.2s;">
                    <h3>
                        <div class="feature-icon-wrapper"><svg class="icon" viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
                        Audit-ready records
                    </h3>
                    <p>Every sign-in and money movement is logged with a timestamp, so you're never guessing what happened.</p>
                </div>
                <div class="feature-card animate-on-scroll" style="transition-delay: 0.3s;">
                    <h3>
                        <div class="feature-icon-wrapper"><svg class="icon" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                        Roles and access control
                    </h3>
                    <p>Invite your accountant as a viewer, or a teammate as a member. Everyone sees exactly what they should.</p>
                </div>
                <div class="feature-card animate-on-scroll" style="transition-delay: 0.4s;">
                    <h3>
                        <div class="feature-icon-wrapper"><svg class="icon" viewBox="0 0 24 24"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg></div>
                        Clear revenue insights
                    </h3>
                    <p>A simple monthly view of what's come in and what's still owed — no dashboards you need a course to read.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="how-it-works-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <span class="section-tag">HOW IT WORKS</span>
                <h2>Three steps from draft to paid</h2>
                <p>No onboarding calls, no configuration maze. Sign up and send your first invoice the same afternoon.</p>
            </div>
            <div class="steps-grid">
                <div class="step-card animate-on-scroll" style="transition-delay: 0.1s;">
                    <div class="step-number">01</div>
                    <h3>Add your clients</h3>
                    <p>Import your list or type in a few people and companies. Store their email and billing details once, reuse forever.</p>
                </div>
                <div class="step-card animate-on-scroll" style="transition-delay: 0.2s;">
                    <div class="step-number">02</div>
                    <h3>Send an invoice</h3>
                    <p>Pick a client, add line items, hit send. A clean, branded PDF is generated and emailed in seconds.</p>
                </div>
                <div class="step-card animate-on-scroll" style="transition-delay: 0.3s;">
                    <div class="step-number">03</div>
                    <h3>Get paid</h3>
                    <p>Mark invoices as paid, record payments in a few clicks, and let reminders handle anyone who runs late.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="pricing-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <span class="section-tag">PRICING</span>
                <h2>Simple plans, no surprises</h2>
                <p>Start free. Upgrade when your team grows. Every plan includes unlimited clients and no per-invoice fees.</p>
            </div>
            
            <div class="pricing-toggle animate-on-scroll">
                <button class="toggle-btn active" type="button">Monthly</button>
                <button class="toggle-btn" type="button">Yearly <span style="font-size: 0.7rem; background: #e6f2ef; color: #0d5c4d; padding: 2px 6px; border-radius: 10px; margin-left: 4px;">Save 20%</span></button>
            </div>

            <div class="pricing-grid">
                <!-- Starter Plan -->
                <div class="pricing-card animate-on-scroll" style="transition-delay: 0.1s;">
                    <h3>Starter</h3>
                    <p class="description">For freelancers sending their first invoices.</p>
                    <div class="price">$0 <span>/month</span></div>
                    <p class="price-sub">Free forever</p>
                    <button type="button" class="btn btn-outline" data-auth-open="signup">Get started free</button>
                    <ul class="features-list">
                        <li><svg class="icon icon-sm check-icon" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg> Up to 5 invoices a month</li>
                        <li><svg class="icon icon-sm check-icon" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg> Unlimited clients</li>
                        <li><svg class="icon icon-sm check-icon" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg> PDF export & email sending</li>
                        <li><svg class="icon icon-sm check-icon" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg> 1 team seat</li>
                        <li class="disabled"><svg class="icon icon-sm cross-icon" viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> Automatic reminders</li>
                    </ul>
                </div>

                <!-- Pro Plan (Popular) -->
                <div class="pricing-card popular animate-on-scroll" style="transition-delay: 0.2s;">
                    <div class="popular-badge">MOST POPULAR</div>
                    <h3>Pro</h3>
                    <p class="description">For growing teams who invoice every week.</p>
                    <div class="price">$19 <span>/user / month</span></div>
                    <p class="price-sub">Billed monthly</p>
                    <button type="button" class="btn btn-primary" data-auth-open="signup">Start 14-day free trial</button>
                    <ul class="features-list">
                        <li><svg class="icon icon-sm check-icon" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg> Unlimited invoices</li>
                        <li><svg class="icon icon-sm check-icon" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg> Unlimited clients & products</li>
                        <li><svg class="icon icon-sm check-icon" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg> Automatic payment reminders</li>
                        <li><svg class="icon icon-sm check-icon" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg> Up to 10 team seats</li>
                        <li><svg class="icon icon-sm check-icon" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg> Audit log & role controls</li>
                    </ul>
                </div>

                <!-- Business Plan -->
                <div class="pricing-card animate-on-scroll" style="transition-delay: 0.3s;">
                    <h3>Business</h3>
                    <p class="description">For larger finance and ops teams.</p>
                    <div class="price">$39 <span>/user / month</span></div>
                    <p class="price-sub">Billed monthly</p>
                    <button type="button" class="btn btn-outline">Talk to sales</button>
                    <ul class="features-list">
                        <li><svg class="icon icon-sm check-icon" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg> Everything in Pro</li>
                        <li><svg class="icon icon-sm check-icon" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg> Unlimited team seats</li>
                        <li><svg class="icon icon-sm check-icon" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg> Multi-currency invoicing</li>
                        <li><svg class="icon icon-sm check-icon" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg> Priority support with SLA</li>
                        <li><svg class="icon icon-sm check-icon" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg> Custom branding on PDFs</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="stories" class="testimonials-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <span class="section-tag">CUSTOMER STORIES</span>
                <h2>Teams that stopped chasing payments</h2>
                <p>Real feedback from small businesses using BillNest every week.</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card animate-on-scroll" style="transition-delay: 0.1s;">
                    <div class="stars">
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 24 24" stroke="none"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 24 24" stroke="none"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 24 24" stroke="none"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 24 24" stroke="none"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 24 24" stroke="none"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    </div>
                    <p class="quote">"We cut our average payment time from 32 days to 9. The reminders alone paid for the subscription in the first week."</p>
                    <div class="author">
                        <div class="avatar">TN</div>
                        <div class="author-info">
                            <h4>Tomasz Nowak</h4>
                            <p>Operations Lead, Studio Kreska</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card animate-on-scroll" style="transition-delay: 0.2s;">
                    <div class="stars">
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 24 24" stroke="none"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 24 24" stroke="none"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 24 24" stroke="none"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 24 24" stroke="none"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 24 24" stroke="none"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    </div>
                    <p class="quote">"The dashboard finally shows me what I actually need: what's paid, what's pending, and what's late. Nothing else."</p>
                    <div class="author">
                        <div class="avatar">GP</div>
                        <div class="author-info">
                            <h4>Grace Patel</h4>
                            <p>Owner, Zambezi Foods</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card animate-on-scroll" style="transition-delay: 0.3s;">
                    <div class="stars">
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 24 24" stroke="none"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 24 24" stroke="none"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 24 24" stroke="none"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 24 24" stroke="none"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 24 24" stroke="none"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    </div>
                    <p class="quote">"Our accountant logs in as a viewer and reconciles everything in minutes. No more monthly zip files of PDFs."</p>
                    <div class="author">
                        <div class="avatar">SO</div>
                        <div class="author-info">
                            <h4>Sam Okafor</h4>
                            <p>Operations Manager, Northwind Logistics</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="faq-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <span class="section-tag">QUESTIONS</span>
                <h2>Frequently asked</h2>
                <p>Everything you need to know before you start.</p>
            </div>
            <div class="faq-list animate-on-scroll">
                <div class="faq-item">
                    <button class="faq-question" type="button">
                        Do I need a credit card to start? 
                        <svg class="icon" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                    </button>
                    <div class="faq-answer">No. The Starter plan is free forever and doesn't ask for a card. Pro and Business come with a 14-day trial, and you can cancel before it ends without being charged.</div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" type="button">
                        Can I send invoices in multiple currencies? 
                        <svg class="icon" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                    </button>
                    <div class="faq-answer">Yes, multi-currency invoicing is available on the Business plan. You can bill clients in their local currency while keeping your reporting currency consistent.</div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" type="button">
                        What happens if a client doesn't pay? 
                        <svg class="icon" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                    </button>
                    <div class="faq-answer">BillNest automatically sends polite reminders before and after the due date. You can customize the schedule and tone of these reminders in your settings.</div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" type="button">
                        Can my accountant or teammate log in? 
                        <svg class="icon" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                    </button>
                    <div class="faq-answer">Absolutely. You can invite team members with specific roles. Accountants can be given "Viewer" access to see records without being able to edit or send invoices.</div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" type="button">
                        Is my data exportable? 
                        <svg class="icon" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                    </button>
                    <div class="faq-answer">Yes, you can export all your client data, invoices, and payment history to CSV at any time from the settings menu.</div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" type="button">
                        How long does setup take? 
                        <svg class="icon" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                    </button>
                    <div class="faq-answer">Most users send their first invoice within 10 minutes of signing up. There is no complex onboarding or configuration required.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-container animate-on-scroll">
                <div class="cta-content">
                    <h2>Start sending invoices that get paid on time.</h2>
                    <p>Join thousands of small teams using BillNest to stay on top of their billing. Free to start — no card required.</p>
                    <div class="cta-actions">
                        <button type="button" class="btn btn-primary btn-large" data-auth-open="signup">
                            Create free account 
                            <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </button>
                        <a href="#pricing" class="btn btn-outline btn-large">Compare plans</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="#home" class="logo">
                        <div class="logo-icon">
                            <svg class="icon" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                        </div>
                        BillNest
                    </a>
                    <p>The calm invoicing workspace for small teams. Send invoices, track payments, get paid faster.</p>
                    <div class="social-links">
                        <a href="#" aria-label="Twitter"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg></a>
                        <a href="#" aria-label="LinkedIn"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg></a>
                        <a href="#" aria-label="Instagram"><svg class="icon icon-sm" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>PRODUCT</h4>
                    <ul>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#how-it-works">How it works</a></li>
                        <li><a href="#">Changelog</a></li>
                        <li><a href="#">Roadmap</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>COMPANY</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#stories">Customers</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Press</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>RESOURCES</h4>
                    <ul>
                        <li><a href="#">Help centre</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#">Invoice template</a></li>
                        <li><a href="#">API docs</a></li>
                        <li><a href="#">Status</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 BillNest. All rights reserved.</p>
                <div class="footer-legal">
                    <a href="#">Privacy</a>
                    <a href="#">Terms</a>
                    <a href="#">Security</a>
                    <a href="#">Cookies</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- ===================================================== -->
    <!-- AUTH MODAL (Login / Sign up pop-up)                   -->
    <!-- ===================================================== -->
    <div class="auth-modal-overlay" id="authModalOverlay" aria-hidden="true">
        <div class="auth-modal" role="dialog" aria-modal="true" aria-labelledby="authModalTitle">
            <div class="auth-modal-header">
                <div class="logo">
                    <div class="logo-icon">
                        <svg class="icon" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                    </div>
                    <span id="authModalTitle">BillNest</span>
                </div>
                <button type="button" class="auth-close" id="authCloseBtn" aria-label="Close dialog">
                    <svg class="icon" viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                </button>
            </div>

            <!-- Tabs -->
            <div class="auth-tabs" role="tablist">
                <button class="auth-tab-btn active" data-auth-tab="signin" role="tab" aria-selected="true" type="button">Sign in</button>
                <button class="auth-tab-btn" data-auth-tab="signup" role="tab" aria-selected="false" type="button">Create account</button>
            </div>

            <!-- SIGN IN PANEL -->
            <div id="auth-panel-signin" class="auth-panel active" role="tabpanel">
                <form class="auth-form" data-auth-form="signin">
                    <div class="form-group">
                        <label for="auth-signin-email">Email address</label>
                        <input type="email" id="auth-signin-email" placeholder="you@company.com" required>
                    </div>
                    <div class="form-group">
                        <label for="auth-signin-password">Password</label>
                        <input type="password" id="auth-signin-password" placeholder="••••••••" required>
                    </div>
                    <div class="auth-forgot-row">
                        <a href="#" data-auth-forgot>Forgot password?</a>
                    </div>
                    <button type="submit" class="auth-submit-btn">
                        Sign in
                        <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </button>
                </form>

                <div class="auth-divider">or continue with</div>

                <div class="auth-social-login">
                    <button class="auth-social-btn" type="button" data-auth-social="Google">
                        <svg class="icon" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="currentColor" stroke="none"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="currentColor" stroke="none"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="currentColor" stroke="none"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="currentColor" stroke="none"/></svg>
                        Google
                    </button>
                    <button class="auth-social-btn" type="button" data-auth-social="Microsoft">
                        <svg class="icon" viewBox="0 0 24 24"><rect x="2" y="2" width="9" height="9" fill="#f25022" stroke="none"/><rect x="13" y="2" width="9" height="9" fill="#7fba00" stroke="none"/><rect x="2" y="13" width="9" height="9" fill="#00a4ef" stroke="none"/><rect x="13" y="13" width="9" height="9" fill="#ffb900" stroke="none"/></svg>
                        Microsoft
                    </button>
                </div>

                <div class="auth-trust-line">
                    <svg class="icon" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    <span>Secured with 256‑bit encryption</span>
                </div>
            </div>

            <!-- SIGN UP PANEL -->
            <div id="auth-panel-signup" class="auth-panel" role="tabpanel">
                <form class="auth-form" data-auth-form="signup">
                    <div class="form-group">
                        <label for="auth-signup-name">Full name</label>
                        <input type="text" id="auth-signup-name" placeholder="Alex Rivera" required>
                    </div>
                    <div class="form-group">
                        <label for="auth-signup-email">Work email</label>
                        <input type="email" id="auth-signup-email" placeholder="alex@company.com" required>
                    </div>
                    <div class="form-group">
                        <label for="auth-signup-password">Password</label>
                        <input type="password" id="auth-signup-password" placeholder="Create a strong password" required>
                        <span style="font-size: 0.7rem; color: var(--text-muted); margin-top: 2px;">Must be at least 8 characters</span>
                    </div>
                    <button type="submit" class="auth-submit-btn" style="margin-top: 6px;">
                        Create free account
                        <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </button>
                </form>

                <div class="auth-divider">or sign up with</div>

                <div class="auth-social-login">
                    <button class="auth-social-btn" type="button" data-auth-social="Google">
                        <svg class="icon" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="currentColor" stroke="none"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="currentColor" stroke="none"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="currentColor" stroke="none"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="currentColor" stroke="none"/></svg>
                        Google
                    </button>
                    <button class="auth-social-btn" type="button" data-auth-social="Microsoft">
                        <svg class="icon" viewBox="0 0 24 24"><rect x="2" y="2" width="9" height="9" fill="#f25022" stroke="none"/><rect x="13" y="2" width="9" height="9" fill="#7fba00" stroke="none"/><rect x="2" y="13" width="9" height="9" fill="#00a4ef" stroke="none"/><rect x="13" y="13" width="9" height="9" fill="#ffb900" stroke="none"/></svg>
                        Microsoft
                    </button>
                </div>

                <div class="auth-trust-line">
                    <svg class="icon" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    <span>14‑day free trial · No credit card required</span>
                </div>
                <p class="auth-terms">
                    By signing up, you agree to our <a href="#">Terms</a> and <a href="#">Privacy Policy</a>.
                </p>
            </div>
        </div>
    </div>

    <!-- JavaScript for Interactivity & Animations -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            
            // 1. FAQ Toggle Logic
            const faqQuestions = document.querySelectorAll('.faq-question');
            
            faqQuestions.forEach(button => {
                button.addEventListener('click', () => {
                    const answer = button.nextElementSibling;
                    const isActive = button.classList.contains('active');
                    
                    faqQuestions.forEach(q => {
                        q.classList.remove('active');
                        q.nextElementSibling.style.display = 'none';
                    });

                    if (!isActive) {
                        button.classList.add('active');
                        answer.style.display = 'block';
                    }
                });
            });

            // 2. Scroll Animation Observer
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.15
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                    }
                });
            }, observerOptions);

            const animatedElements = document.querySelectorAll('.animate-on-scroll');
            animatedElements.forEach(el => observer.observe(el));

            // 3. Header Shadow on Scroll
            const header = document.getElementById('header');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 10) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // ==============================================
            // 4. AUTH MODAL Logic
            // ==============================================
            const overlay = document.getElementById('authModalOverlay');
            const closeBtn = document.getElementById('authCloseBtn');
            const authTabs = document.querySelectorAll('.auth-tab-btn');
            const authPanels = {
                signin: document.getElementById('auth-panel-signin'),
                signup: document.getElementById('auth-panel-signup')
            };

            function openAuthModal(mode = 'signin') {
                overlay.classList.add('is-open');
                overlay.setAttribute('aria-hidden', 'false');
                document.body.style.overflow = 'hidden';
                switchAuthTab(mode);
                // focus first input after transition
                setTimeout(() => {
                    const activePanel = authPanels[mode];
                    const firstInput = activePanel?.querySelector('input');
                    if (firstInput) firstInput.focus();
                }, 150);
            }

            function closeAuthModal() {
                overlay.classList.remove('is-open');
                overlay.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
            }

            function switchAuthTab(tabId) {
                authTabs.forEach(btn => {
                    const isActive = btn.dataset.authTab === tabId;
                    btn.classList.toggle('active', isActive);
                    btn.setAttribute('aria-selected', isActive);
                });

                Object.keys(authPanels).forEach(key => {
                    authPanels[key].classList.toggle('active', key === tabId);
                });
            }

            // Open triggers
            document.querySelectorAll('[data-auth-open]').forEach(btn => {
                btn.addEventListener('click', () => {
                    const mode = btn.getAttribute('data-auth-open') || 'signin';
                    openAuthModal(mode);
                });
            });

            // Close triggers
            closeBtn.addEventListener('click', closeAuthModal);
            overlay.addEventListener('click', (e) => {
                if (e.target === overlay) closeAuthModal();
            });
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && overlay.classList.contains('is-open')) {
                    closeAuthModal();
                }
            });

            // Tab switching
            authTabs.forEach(btn => {
                btn.addEventListener('click', () => {
                    switchAuthTab(btn.dataset.authTab);
                });
            });

            // Form submissions (demo)
            document.querySelector('[data-auth-form="signin"]').addEventListener('submit', (e) => {
                e.preventDefault();
                alert('Sign in demo — in production this would authenticate.');
            });
            document.querySelector('[data-auth-form="signup"]').addEventListener('submit', (e) => {
                e.preventDefault();
                alert('Account created — this is a demo. Welcome to BillNest!');
            });

            // Forgot password demo
            document.querySelector('[data-auth-forgot]')?.addEventListener('click', (e) => {
                e.preventDefault();
                alert('Password reset link would be sent to your email (demo).');
            });

            // Social buttons demo
            document.querySelectorAll('[data-auth-social]').forEach(btn => {
                btn.addEventListener('click', () => {
                    const provider = btn.getAttribute('data-auth-social');
                    alert(`${provider} login demo — this would redirect to ${provider} OAuth.`);
                });
            });
        });
    </script>
</body>
</html>