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
                --secondary: #34D399;
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
                gap: 2rem;
            }

            .nav-btn {
                text-decoration: none;
                padding: 0.5rem 1.5rem;
                border-radius: 50px;
                transition: all 0.3s ease;
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
                font-size: 1.2rem;
                color: var(--gray);
                margin-bottom: 2rem;
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
                width: 100%;
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
                    gap: 1rem;
                }

                .nav-btn {
                    padding: 0.5rem 1rem;
                }
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gradient-to-br from-gray-50 via-white to-blue-50">
            <!-- Navigation -->
            <nav class="nav">
                <div class="nav-container">
                    <a href="/" class="logo">HR Solutions</a>
                    <div class="nav-links">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="nav-btn btn-login">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="nav-btn btn-login">Login</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="nav-btn btn-register">Register</a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            </nav>

            <!-- Hero Section -->
            <section class="hero">
                <div class="hero-container">
                    <div class="hero-content">
                        <h1>Transform Your<br>HR Management</h1>
                        <p>Streamline your workforce management with our innovative HR solutions. Empower your team, boost productivity, and drive success.</p>
                        <div class="hero-buttons">
                            <a href="{{ route('register') }}" class="hero-btn btn-primary">Get Started</a>
                            <a href="#features" class="hero-btn btn-secondary">Learn More</a>
                        </div>
                    </div>
                    <div class="hero-image">
                        <img src="https://ik.imagekit.io/your-account/hr-illustration.svg" alt="HR Management" 
                             onerror="this.onerror=null; this.src='https://cdn-icons-png.flaticon.com/512/2910/2910791.png'">
                    </div>
                </div>
            </section>

            <!-- Features Section -->
            <section id="features" class="features">
                <div class="features-container">
                    <div class="features-header">
                        <h2>Why Choose Us</h2>
                        <p>Comprehensive solutions for modern HR management</p>
                    </div>
                    <div class="features-grid">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h3>Employee Management</h3>
                            <p>Efficiently manage your workforce with our comprehensive employee management system.</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                </svg>
                            </div>
                            <h3>Payroll Processing</h3>
                            <p>Automate your payroll processes with our secure and efficient payroll management system.</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <h3>Recruitment</h3>
                            <p>Streamline your hiring process with our advanced recruitment and talent acquisition tools.</p>
                        </div>
                    </div>
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
            <footer class="bg-white border-t border-gray-100">
                <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                    <div class="text-center">
                        <p class="text-gray-500">
                            &copy; {{ date('Y') }} HR Solutions. All rights reserved.
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
