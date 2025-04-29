<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HR Solutions - Modern Workforce Management</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            :root {
                --primary: #2D46B9;
                --primary-dark: #1a309c;
                --secondary: #FF9900;
                --dark: #1F2937;
                --light: #F9FAFB;
                --gray: #6B7280;
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Poppins', sans-serif;
                line-height: 1.6;
                color: var(--dark);
                overflow-x: hidden;
            }

            .nav {
                position: fixed;
                top: 0;
                width: 100%;
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
                z-index: 1000;
                box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            }

            .nav-container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 1rem 2rem;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .logo {
                font-size: 1.5rem;
                font-weight: 700;
                color: var(--primary);
                text-decoration: none;
            }

            .nav-links {
                display: flex;
                gap: 1rem;
            }

            .nav-btn {
                text-decoration: none;
                padding: 0.5rem 1rem;
                border-radius: 50px;
                transition: all 0.3s ease;
                position: relative;
            }

            .nav-btn.active, .nav-btn:focus {
                background: var(--primary);
                color: #fff !important;
                box-shadow: 0 2px 8px rgba(45,70,185,0.08);
            }

            .btn-login {
                color: var(--primary);
                border: 2px solid var(--primary);
            }

            .btn-login:hover {
                background: var(--primary);
                color: white;
            }

            .btn-register {
                background: var(--primary);
                color: white;
            }

            .btn-register:hover {
                background: var(--primary-dark);
            }

            .hero {
                padding: 8rem 2rem 4rem;
                background: linear-gradient(135deg, #f6f8ff 0%, #ffffff 100%);
                min-height: 100vh;
                display: flex;
                align-items: center;
            }

            .hero-container {
                max-width: 1200px;
                margin: 0 auto;
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 4rem;
                align-items: center;
            }

            .hero-content h1 {
                font-size: 3.5rem;
                line-height: 1.2;
                margin-bottom: 1.5rem;
                color: var(--dark);
            }

            .hero-content p {
                font-size: 1.25rem;
                color: var(--gray);
                margin-bottom: 2.2rem;
                max-width: 500px;
            }

            .hero-buttons {
                display: flex;
                gap: 1rem;
            }

            .hero-btn {
                padding: 1rem 2rem;
                border-radius: 50px;
                text-decoration: none;
                font-weight: 500;
                transition: all 0.3s ease;
            }

            .btn-primary {
                background: var(--primary);
                color: white;
            }

            .btn-primary:hover {
                background: var(--primary-dark);
                transform: translateY(-2px);
            }

            .btn-secondary {
                background: white;
                color: var(--primary);
                border: 2px solid var(--primary);
            }

            .btn-secondary:hover {
                background: var(--primary);
                color: white;
                transform: translateY(-2px);
            }

            .hero-image {
                position: relative;
            }

            .hero-image img {
                width: 70%;
                max-width: 500px;
                animation: float 6s ease-in-out infinite;
            }

            .features {
                padding: 6rem 2rem;
                background: white;
            }

            .features-container {
                max-width: 1200px;
                margin: 0 auto;
            }

            .features-header {
                text-align: center;
                margin-bottom: 4rem;
            }

            .features-header h2 {
                font-size: 2.5rem;
                color: var(--primary);
                margin-bottom: 1rem;
            }

            .features-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 2rem;
            }

            .feature-card {
                background: white;
                padding: 2rem;
                border-radius: 20px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease;
            }

            .feature-card:hover {
                transform: translateY(-10px);
            }

            .feature-icon {
                width: 60px;
                height: 60px;
                background: var(--primary);
                border-radius: 15px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 1.5rem;
            }

            .feature-icon svg {
                width: 30px;
                height: 30px;
                color: white;
            }

            .feature-card h3 {
                font-size: 1.5rem;
                margin-bottom: 1rem;
                color: var(--dark);
            }

            .feature-card p {
                color: var(--gray);
            }

            @keyframes float {
                0% { transform: translateY(0px); }
                50% { transform: translateY(-20px); }
                100% { transform: translateY(0px); }
            }

            @media (max-width: 768px) {
                .hero-container {
                    grid-template-columns: 1fr;
                    text-align: center;
                }

                .hero-buttons {
                    justify-content: center;
                }

                .hero-image {
                    grid-row: 1;
                }

                .hero-content h1 {
                    font-size: 2.5rem;
                }

                .nav-container {
                    padding: 1rem;
                }

                .nav-links {
                    display: none;
                    flex-direction: column;
                    width: 100%;
                    background: #fff;
                    position: absolute;
                    top: 64px;
                    left: 0;
                    box-shadow: 0 2px 15px rgba(0,0,0,0.08);
                    z-index: 1001;
                }
                .nav-links.open {
                    display: flex;
                }
                .nav-container {
                    flex-direction: row;
                    align-items: center;
                    position: relative;
                }
                #nav-toggle {
                    display: block;
                }
            }
            @media (min-width: 769px) {
                #nav-toggle {
                    display: none;
                }
                .nav-links {
                    display: flex !important;
                    position: static;
                    background: transparent;
                    box-shadow: none;
                    flex-direction: row;
                    width: auto;
                }
            }

            html {
                scroll-behavior: smooth;
            }

            .pricing-card-link {
                text-decoration: none;
                display: block;
                transition: box-shadow 0.2s, transform 0.2s;
            }
            .pricing-card-link:hover .pricing-card, .pricing-card-link:focus .pricing-card {
                box-shadow: 0 16px 40px rgba(45,70,185,0.18), 0 2px 8px rgba(45,70,185,0.08);
                transform: translateY(-4px) scale(1.03) !important;
                cursor: pointer;
            }
            .pricing-card {
                background: var(--light);
                border-radius: 20px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.08);
                padding: 2.5rem 2rem;
                min-width: 260px;
                max-width: 340px;
                text-align: center;
                margin: 0 auto;
                transition: box-shadow 0.2s, transform 0.2s;
            }
            .pricing-card.pro {
                background: var(--primary);
                color: white;
                box-shadow: 0 10px 30px rgba(0,0,0,0.12);
            }
            .pricing-card.pro h3,
            .pricing-card.pro p,
            .pricing-card.pro ul,
            .pricing-card.pro a {
                color: white !important;
            }
            .fade-in {
                opacity: 0;
                transform: translateY(40px);
                transition: opacity 0.8s cubic-bezier(.4,0,.2,1), transform 0.8s cubic-bezier(.4,0,.2,1);
            }
            .fade-in.visible {
                opacity: 1;
                transform: none;
            }
            .slide-in-left {
                opacity: 0;
                transform: translateX(-40px);
                transition: opacity 0.8s cubic-bezier(.4,0,.2,1), transform 0.8s cubic-bezier(.4,0,.2,1);
            }
            .slide-in-left.visible {
                opacity: 1;
                transform: none;
            }
            .slide-in-right {
                opacity: 0;
                transform: translateX(40px);
                transition: opacity 0.8s cubic-bezier(.4,0,.2,1), transform 0.8s cubic-bezier(.4,0,.2,1);
            }
            .slide-in-right.visible {
                opacity: 1;
                transform: none;
            }
            .float-anim {
                animation: float 6s ease-in-out infinite;
            }
            .hero-btn, .pricing-card-link {
                transition: transform 0.2s cubic-bezier(.4,0,.2,1), box-shadow 0.2s cubic-bezier(.4,0,.2,1);
            }
            .hero-btn:hover, .hero-btn:focus {
                transform: scale(1.06);
                box-shadow: 0 4px 16px rgba(45,70,185,0.10);
            }
            .pricing-card-link:hover .pricing-card, .pricing-card-link:focus .pricing-card {
                box-shadow: 0 16px 40px rgba(45,70,185,0.18), 0 2px 8px rgba(45,70,185,0.08);
                transform: translateY(-4px) scale(1.03) !important;
                cursor: pointer;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gradient-to-br from-gray-50 via-white to-blue-50">
        <!-- Navigation -->
            <nav class="nav">
                <div class="nav-container">
                    <a href="/" style="text-decoration: none; display: flex; align-items: center; gap: 0.5rem;">
                        <span style="display:inline-flex;align-items:center;justify-content:center;width:2.5rem;height:2.5rem;border-radius:50%;background:linear-gradient(135deg,#2D46B9 60%,#34D399 100%);color:#fff;font-weight:800;font-size:1.5rem;box-shadow:0 2px 8px rgba(45,70,185,0.10);letter-spacing:-1px;">HR</span>
                        <span style="font-size:2rem;font-weight:600;color:#2D46B9;letter-spacing:-1px;font-family:inherit;">Solutions</span>
                    </a>
                    <button id="nav-toggle" class="md:hidden block text-3xl text-primary focus:outline-none" aria-label="Toggle navigation" style="background: none; border: none;">
                        <span>&#9776;</span>
                    </button>
                    <div id="nav-links" class="nav-links md:flex hidden flex-col md:flex-row md:items-center gap-1 md:gap-4 absolute md:static top-16 left-0 w-full md:w-auto bg-white md:bg-transparent shadow md:shadow-none z-50">
                        <a href="#features" class="nav-btn">Features</a>
                        <a href="#about" class="nav-btn">About</a>
                        <a href="#pricing" class="nav-btn">Pricing</a>
                        <a href="#testimonials" class="nav-btn">Testimonials</a>
                        <a href="#contact" class="nav-btn">Contact</a>
                        <div class="nav-links">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ route('dashboard') }}" class="nav-btn btn-login">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="nav-btn btn-login">Log in</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="nav-btn btn-register">Register</a>
                                    @endif
                                @endauth
                            @endif
                        </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section id="home" class="hero" style="position: relative; padding: 7rem 0 0; background: linear-gradient(120deg, #f6f8ff 0%, #e9edfa 100%); min-height: 90vh; display: flex; align-items: center;">
            <div class="hero-container" style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 3rem;">
                <div class="hero-content fade-in" style="flex: 1 1 400px; min-width: 320px; padding: 2rem 0;">
                    <h1 style="font-size: 3.2rem; font-weight: 500; line-height: 1.1; color: var(--primary); margin-bottom: 1.2rem; letter-spacing: -1px;">Smart Recruitment<br><span style="color: var(--secondary);">for Modern Workplaces</span></h1>
                    <p style="font-size: 1.25rem; color: var(--gray); margin-bottom: 2.2rem; max-width: 500px;">All-in-one platform for smarter hiring. Instantly match, filter, and manage applicants with intelligent tools for employers, HR teams, and job seekers.</p>
                    <div class="hero-buttons" style="display: flex; gap: 1.2rem; flex-wrap: wrap;">
                        <a href="{{ route('register') }}" class="hero-btn btn-primary" style="background: var(--primary); color: #fff; font-size: 1.1rem; font-weight: 600; padding: 1rem 2.5rem; border-radius: 40px; box-shadow: 0 4px 24px rgba(45,70,185,0.10); transition: background 0.2s, transform 0.2s;">Get Started</a>
                        <a href="#features" class="hero-btn btn-secondary" style="background: #fff; color: var(--primary); border: 2px solid var(--primary); font-size: 1.1rem; font-weight: 600; padding: 1rem 2.5rem; border-radius: 40px; box-shadow: 0 2px 12px rgba(45,70,185,0.06); transition: background 0.2s, color 0.2s, transform 0.2s;">Learn More</a>
                    </div>
                </div>
                <div class="hero-image slide-in-right" style="flex: 1 1 350px; min-width: 280px; display: flex; justify-content: center; align-items: center;">
                    <img src="https://ik.imagekit.io/your-account/hr-illustration.svg" alt="Smart Recruitment Platform" style="width: 90%; max-width: 440px; border-radius: 24px; box-shadow: 0 8px 32px rgba(45,70,185,0.10);  padding: 1.5rem;" class="float-anim" onerror="this.onerror=null; this.src='https://cdn-icons-png.flaticon.com/512/2910/2910791.png'">
                </div>
            </div>
            <!-- Wavy SVG Divider -->
            {{-- <div style="position: absolute; left: 0; right: 0; bottom: -1px; width: 100%; line-height: 0; pointer-events: none; z-index: 2;">
                <svg viewBox="0 0 1440 90" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 100%; height: 90px; display: block;"><path d="M0 60 Q 360 0 720 60 T 1440 60 V90 H0V60Z" fill="#fff"/></svg>
            </div> --}}
        </section>
        <!-- End Hero Section -->

        <!-- Features Section -->
            <section id="features" class="features fade-in">
                <div class="features-container">
                    <div class="features-header">
                        <h2>Intelligent Recruitment Features</h2>
                        <p>Powerful tools for employers, HR managers, and job seekers</p>
                    </div>
                    <div class="features-grid">
                        <div class="feature-card fade-in">
                            <div class="feature-icon">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                            </div>
                            <h3>Intelligent Applicant Matching</h3>
                            <p>Advanced algorithms profile, filter, and rank candidates by experience, certifications, test scores, and more—ensuring the best fit for every role.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <div class="feature-icon">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                            </div>
                            <h3>Multi-Portal Access</h3>
                            <p>Dedicated portals for employers, HR managers, and job seekers. Manage job postings, applications, and talent pipelines with ease.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <div class="feature-icon">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                </div>
                            <h3>Automated Interview Scheduling</h3>
                            <p>Coordinate interviews and assessments with built-in scheduling tools, notifications, and calendar integration for a seamless hiring process.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <div class="feature-icon">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke-width="2"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12l2 2 4-4"/></svg>
                    </div>
                            <h3>Recruitment Analytics</h3>
                            <p>Gain actionable insights with analytics on applicant sources, hiring speed, diversity, and more. Make smarter, data-driven recruitment decisions.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <div class="feature-icon">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                            <h3>Job Search & Application</h3>
                            <p>Job seekers can search, filter, and apply for roles across industries. Employers and HR can manage applicants and track progress in real time.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
            <section id="about" class="fade-in" style="background: var(--light); padding: 6rem 2rem;">
                <div style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; align-items: center; gap: 3rem;">
                    <div class="slide-in-left" style="flex: 1; min-width: 300px;">
                        <img src="https://ik.imagekit.io/your-account/about-hr.svg" alt="About HR Solutions" style="width: 100%; max-width: 400px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
                </div>
                    <div class="slide-in-right" style="flex: 2; min-width: 300px;">
                        <h2 style="color: var(--primary); font-size: 2.2rem; margin-bottom: 1rem;">About HR Solutions</h2>
                        <p style="color: var(--gray); font-size: 1.1rem; margin-bottom: 1.5rem;">Our platform is designed to revolutionize recruitment for employers, HR professionals, and job seekers. With intelligent matching, automated workflows, and real-time analytics, HR Solutions helps you find the right talent, faster and smarter.</p>
                        <ul style="color: var(--dark); font-size: 1rem; list-style: disc inside; margin-bottom: 1.5rem;">
                            <li>Smart applicant profiling & ranking</li>
                            <li>Multi-portal access for all users</li>
                            <li>Automated interview scheduling</li>
                            <li>Comprehensive recruitment analytics</li>
                    </ul>
                        <a href="#contact" class="hero-btn btn-primary">Contact Us</a>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
            <section id="pricing" class="fade-in" style="background: white; padding: 6rem 2rem;">
                <div style="max-width: 1200px; margin: 0 auto;">
                    <div style="text-align: center; margin-bottom: 3rem;">
                        <h2 style="color: var(--primary); font-size: 2.5rem; margin-bottom: 1rem;">Pricing</h2>
                        <p style="color: var(--gray); font-size: 1.1rem;">Flexible plans for every organization and recruiter</p>
                    </div>
                    <div style="display: flex; flex-wrap: wrap; gap: 2rem; justify-content: center;">
                        <a href="#" class="pricing-card-link fade-in">
                            <div class="pricing-card">
                                <h3 style="color: var(--primary); font-size: 1.3rem; margin-bottom: 0.5rem;">Starter</h3>
                                <p style="font-size: 2.5rem; color: var(--dark); margin-bottom: 1rem;">$29 <span style="font-size: 1rem; color: var(--gray);">/mo</span></p>
                                <ul style="color: var(--gray); margin-bottom: 1.5rem; list-style: none; padding: 0;">
                                    <li>For small teams & startups</li>
                                    <li>Basic applicant matching</li>
                                    <li>Email support</li>
                                </ul>
                                <span class="hero-btn btn-primary">Choose Plan</span>
                            </div>
                        </a>
                        <a href="#" class="pricing-card-link fade-in">
                            <div class="pricing-card pro">
                                <h3 style="font-size: 1.3rem; margin-bottom: 0.5rem;">Pro</h3>
                                <p style="font-size: 2.5rem; margin-bottom: 1rem;">$59 <span style="font-size: 1rem; color: #c7d2fe;">/mo</span></p>
                                <ul style="color: #dbeafe; margin-bottom: 1.5rem; list-style: none; padding: 0;">
                                    <li>For growing businesses</li>
                                    <li>Advanced filtering & analytics</li>
                                    <li>Automated interview scheduling</li>
                            <li>Priority support</li>
                        </ul>
                                <span class="hero-btn btn-secondary" style="background: white; color: var(--primary); border: 2px solid var(--primary);">Most Popular</span>
                    </div>
                        </a>
                        <a href="#" class="pricing-card-link fade-in">
                            <div class="pricing-card">
                                <h3 style="color: var(--primary); font-size: 1.3rem; margin-bottom: 0.5rem;">Enterprise</h3>
                                <p style="font-size: 2.5rem; color: var(--dark); margin-bottom: 1rem;">Custom</p>
                                <ul style="color: var(--gray); margin-bottom: 1.5rem; list-style: none; padding: 0;">
                                    <li>For large organizations</li>
                            <li>Custom integrations</li>
                                    <li>Dedicated account manager</li>
                                    <li>All platform features</li>
                        </ul>
                                <span class="hero-btn btn-primary">Contact Us</span>
                    </div>
                        </a>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
            <section id="testimonials" class="fade-in" style="background: var(--light); padding: 6rem 2rem;">
                <div style="max-width: 1200px; margin: 0 auto;">
                    <div style="text-align: center; margin-bottom: 3rem;">
                        <h2 style="color: var(--primary); font-size: 2.5rem; margin-bottom: 1rem;">What Our Clients Say</h2>
                        <p style="color: var(--gray); font-size: 1.1rem;">Trusted by HR teams and recruiters in leading organizations</p>
                    </div>
                    <div style="display: flex; flex-wrap: wrap; gap: 2rem; justify-content: center;">
                        <div class="fade-in" style="background: white; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); padding: 2rem; flex: 1; min-width: 260px; max-width: 340px; text-align: center;">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client" style="width: 60px; height: 60px; border-radius: 50%; margin-bottom: 1rem; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                            <p style="color: var(--gray); margin-bottom: 1rem;">"The intelligent matching and analytics have made our recruitment process faster and more effective than ever."</p>
                            <span style="color: var(--primary); font-weight: 600;">James Smith</span><br>
                            <span style="color: var(--gray); font-size: 0.95rem;">HR Manager, TechCorp</span>
                        </div>
                        <div class="fade-in" style="background: white; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); padding: 2rem; flex: 1; min-width: 260px; max-width: 340px; text-align: center;">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Client" style="width: 60px; height: 60px; border-radius: 50%; margin-bottom: 1rem; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                            <p style="color: var(--gray); margin-bottom: 1rem;">"I found my dream job quickly thanks to the smart filtering and easy application process!"</p>
                            <span style="color: var(--primary); font-weight: 600;">Linda Johnson</span><br>
                            <span style="color: var(--gray); font-size: 0.95rem;">Job Seeker</span>
                    </div>
                        <div class="fade-in" style="background: white; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); padding: 2rem; flex: 1; min-width: 260px; max-width: 340px; text-align: center;">
                            <img src="https://randomuser.me/api/portraits/men/54.jpg" alt="Client" style="width: 60px; height: 60px; border-radius: 50%; margin-bottom: 1rem; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                            <p style="color: var(--gray); margin-bottom: 1rem;">"The platform's automation and scheduling tools have saved our HR team countless hours."</p>
                            <span style="color: var(--primary); font-weight: 600;">Michael Lee</span><br>
                            <span style="color: var(--gray); font-size: 0.95rem;">Head of Recruitment, InnovateX</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
            <section id="contact" class="fade-in" style="background: white; padding: 6rem 2rem;">
                <div style="max-width: 600px; margin: 0 auto;">
                    <div style="text-align: center; margin-bottom: 2rem;">
                        <h2 style="color: var(--primary); font-size: 2.5rem; margin-bottom: 1rem;">Contact Us</h2>
                        <p style="color: var(--gray); font-size: 1.1rem;">Have questions about our recruitment platform? Get in touch and our team will get back to you soon.</p>
                    </div>
                    <form style="background: var(--light); padding: 2rem; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); display: flex; flex-direction: column; gap: 1.5rem;">
                        <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
                            <input type="text" placeholder="Your Name" style="flex: 1; padding: 1rem; border-radius: 10px; border: 1px solid #e5e7eb; font-size: 1rem;" required>
                            <input type="email" placeholder="Your Email" style="flex: 1; padding: 1rem; border-radius: 10px; border: 1px solid #e5e7eb; font-size: 1rem;" required>
                        </div>
                        <textarea placeholder="Your Message" rows="5" style="width: 100%; padding: 1rem; border-radius: 10px; border: 1px solid #e5e7eb; font-size: 1rem;" required></textarea>
                        <button type="submit" class="hero-btn btn-primary" style="width: 100%;">Send Message</button>
                </form>
            </div>
        </section>

            <!-- CTA Section -->
            <div class="relative overflow-hidden bg-gradient-to-r from-blue-600 to-blue-700">
                <div class="absolute inset-0 opacity-10">
                    <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <path d="M0,0 L100,0 L100,100 L0,100 Z" fill="url(#grid)" />
                        <defs>
                            <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                                <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5"/>
                            </pattern>
                        </defs>
                    </svg>
                </div>
                <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8 relative">
                    <div class="text-center">
                        <h2 class="text-4xl font-extrabold text-white sm:text-5xl">
                            <span class="block">Ready to transform your HR?</span>
                            <span class="block mt-2 text-blue-200">Start your journey today.</span>
                        </h2>
                        <div class="mt-8 flex justify-center">
                            <a href="{{ route('register') }}" 
                               class="inline-flex items-center px-8 py-3 rounded-lg bg-white text-blue-600 font-medium hover:bg-blue-50 transform hover:scale-105 transition-all duration-200 shadow-xl">
                                Get Started
                                <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Footer -->
            <footer class="bg-white border-t border-gray-200">
                <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                    <div class="text-center">
                        <p class="text-gray-500">
                            &copy; {{ date('Y') }} HR Solutions. All rights reserved.
                        </p>
                </div>
            </div>
        </footer>
        </div>
        <script>
        // Smooth scroll and scrollspy for nav links
        (function() {
            const navLinks = document.querySelectorAll('.nav-btn[href^="#"]');
            const sections = Array.from(navLinks).map(link => document.querySelector(link.getAttribute('href'))).filter(Boolean);

            // Scrollspy: highlight nav link for section in view
            function onScroll() {
                let scrollPos = window.scrollY + 80; // Offset for fixed nav
                let activeSet = false;
                for (let i = sections.length - 1; i >= 0; i--) {
                    if (sections[i].offsetTop <= scrollPos) {
                        navLinks.forEach(link => link.classList.remove('active'));
                        navLinks[i].classList.add('active');
                        activeSet = true;
                        break;
                    }
                }
                if (!activeSet) navLinks.forEach(link => link.classList.remove('active'));
            }
            window.addEventListener('scroll', onScroll);
            document.addEventListener('DOMContentLoaded', onScroll);

            // Smooth scroll for nav links (for browsers that don't support scroll-behavior)
            navLinks.forEach((link, idx) => {
                link.addEventListener('click', function(e) {
                    const targetId = this.getAttribute('href');
                    const target = document.querySelector(targetId);
                    if (target) {
                        e.preventDefault();
                        window.scrollTo({
                            top: target.offsetTop - 70, // Offset for fixed nav
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Intersection Observer for fade/slide-in animations
            const animatedEls = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right');
            const observer = new window.IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });
            animatedEls.forEach(el => observer.observe(el));
        })();
        document.addEventListener('DOMContentLoaded', function() {
            var navToggle = document.getElementById('nav-toggle');
            var navLinks = document.getElementById('nav-links');
            if (navToggle && navLinks) {
                navToggle.addEventListener('click', function() {
                    navLinks.classList.toggle('open');
                });
            }
        });
        </script>
    </body>
</html>