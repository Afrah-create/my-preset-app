@extends('layouts.app', ['activePage' => 'welcome', 'title' => 'Caramel Dreams - Yogurt Supply Chain Management'])

@section('content')
    <div class="full-page section-image" data-color="black" data-image="{{ asset('light-bootstrap/img/full-screen-image-2.jpg') }}">
        <div class="content">
            <div class="container">
                <!-- Animated Background -->
                <div class="particles" id="particles"></div>

                <!-- Header -->
                <header class="header">
                    <div class="nav-container">
                        <div class="logo">
                            <div class="logo-icon">🥛</div>
                            <span>Caramel Dreams</span>
                        </div>
                        <nav>
                            <ul class="nav-links">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#features">Features</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </header>

                <!-- Hero Section -->
                <section class="hero" id="home">
                    <div class="hero-content">
                        <h1 class="text-white text-center">{{ __('Welcome to Caramel Dreams') }}</h1>
                        <p class="text-white text-center">{{ __('Your comprehensive yogurt supply chain management platform. Streamline operations from farm to table with real-time tracking, intelligent analytics, and seamless stakeholder collaboration.') }}</p>
                    </div>
                </section>

                <!-- User Types Section -->
                <section class="user-types" id="about">
                    <div class="container">
                        <h2 class="section-title text-white text-center">{{ __('Choose Your Access Portal') }}</h2>
                        <div class="row cards-grid">
                            <div class="col-lg-4 col-md-6 user-card" onclick="navigateToLogin('admin')">
                                <div class="card-icon">👨‍💼</div>
                                <h3>{{ __('Administrator') }}</h3>
                                <p>{{ __('Manage users, oversee system analytics, configure products and monitor overall performance across the entire supply chain.') }}</p>
                                <button class="card-button">{{ __('Access Dashboard') }}</button>
                            </div>
                            <div class="col-lg-4 col-md-6 user-card" onclick="navigateToLogin('supplier')">
                                <div class="card-icon">🚛</div>
                                <h3>{{ __('Supplier') }}</h3>
                                <p>{{ __('Log raw milk deliveries, track batch processing, monitor quality feedback and manage supply schedules efficiently.') }}</p>
                                <button class="card-button">{{ __('Supplier Portal') }}</button>
                            </div>
                            <div class="col-lg-4 col-md-6 user-card" onclick="navigateToLogin('distributor')">
                                <div class="card-icon">📦</div>
                                <h3>{{ __('Distributor') }}</h3>
                                <p>{{ __('View ready stock, assign delivery routes, track shipments and monitor delivery performance in real-time.') }}</p>
                                <button class="card-button">{{ __('Distribution Hub') }}</button>
                            </div>
                            <div class="col-lg-4 col-md-6 user-card" onclick="navigateToLogin('retailer')">
                                <div class="card-icon">🏪</div>
                                <h3>{{ __('Retailer') }}</h3>
                                <p>{{ __('Place orders, track deliveries, manage inventory levels and provide quality feedback on products and services.') }}</p>
                                <button class="card-button">{{ __('Retail Center') }}</button>
                            </div>
                            <div class="col-lg-4 col-md-6 user-card" onclick="navigateToLogin('customer')">
                                <div class="card-icon">👥</div>
                                <h3>{{ __('Customer') }}</h3>
                                <p>{{ __('Browse products, place orders, track deliveries and share reviews to help improve our yogurt quality and service.') }}</p>
                                <button class="card-button">{{ __('Shop Now') }}</button>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Features Section -->
                <section class="features" id="features">
                    <div class="container">
                        <h2 class="section-title text-white text-center">{{ __('Platform Features') }}</h2>
                        <div class="row features-grid">
                            <div class="col-lg-3 col-md-6 feature-item">
                                <span class="feature-icon">📊</span>
                                <h4>{{ __('Real-time Analytics') }}</h4>
                                <p>{{ __('Monitor key performance indicators and make data-driven decisions with comprehensive reporting.') }}</p>
                            </div>
                            <div class="col-lg-3 col-md-6 feature-item">
                                <span class="feature-icon">🔄</span>
                                <h4>{{ __('Automated Workflows') }}</h4>
                                <p>{{ __('Streamline order processing, inventory management and vendor validation with intelligent automation.') }}</p>
                            </div>
                            <div class="col-lg-3 col-md-6 feature-item">
                                <span class="feature-icon">🛡️</span>
                                <h4>{{ __('Quality Control') }}</h4>
                                <p>{{ __('HACCP compliance and systematic quality tracking throughout the entire production process.') }}</p>
                            </div>
                            <div class="col-lg-3 col-md-6 feature-item">
                                <span class="feature-icon">📱</span>
                                <h4>{{ __('Mobile Ready') }}</h4>
                                <p>{{ __('Access your dashboard anywhere with responsive design optimized for all devices.') }}</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- CTA Section -->
                <section class="cta">
                    <div class="container">
                        <h2 class="section-title text-white text-center">{{ __('Ready to Get Started?') }}</h2>
                        <p class="text-white text-center" style="font-size: 1.2rem; margin-bottom: 2rem;">{{ __('Join thousands of users managing their yogurt supply chain efficiently') }}</p>
                        <button class="cta-button" onclick="navigateToLogin('signup')">{{ __('Sign Up Today') }}</button>
                        <button class="cta-button" onclick="navigateToLogin('demo')">{{ __('Request Demo') }}</button>
                    </div>
                </section>

                <!-- Footer -->
                <footer class="footer">
                    <div class="container">
                        <p>{{ __('© 2025 Caramel Dreams Yogurt Supply Chain Management. Developed by Apex Developers.') }}</p>
                        <p style="margin-top: 0.5rem; opacity: 0.7;">{{ __('Supervisor: Mr. Brian Muchake | GitHub: Afrah-create/Apex234') }}</p>
                    </div>
                </footer>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            // Ensure full-page background image is applied
            demo.checkFullPageBackgroundImage();

            // Remove card-hidden class for animation
            setTimeout(function() {
                $('.card').removeClass('card-hidden');
            }, 700);

            // Create animated particles
            function createParticles() {
                const particlesContainer = document.getElementById('particles');
                const particleCount = 50;

                for (let i = 0; i < particleCount; i++) {
                    const particle = document.createElement('div');
                    particle.className = 'particle';
                    
                    const size = Math.random() * 4 + 2;
                    particle.style.width = size + 'px';
                    particle.style.height = size + 'px';
                    particle.style.left = Math.random() * 100 + '%';
                    particle.style.top = Math.random() * 100 + '%';
                    particle.style.animationDelay = Math.random() * 6 + 's';
                    particle.style.animationDuration = (Math.random() * 3 + 4) + 's';
                    
                    particlesContainer.appendChild(particle);
                }
            }

            // Navigation function
            function navigateToLogin(userType) {
                // In a real application, this would navigate to the appropriate login page
                alert(`Redirecting to ${userType} login page...`);
                // Example: window.location.href = `/login/${userType}`;
            }

            // Header scroll effect
            window.addEventListener('scroll', () => {
                const header = document.querySelector('.header');
                if (window.scrollY > 100) {
                    header.style.background = 'rgba(255, 255, 255, 0.15)';
                    header.style.backdropFilter = 'blur(20px)';
                } else {
                    header.style.background = 'rgba(255, 255, 255, 0.1)';
                    header.style.backdropFilter = 'blur(10px)';
                }
            });

            // Smooth scrolling for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Initialize particles when page loads
            document.addEventListener('DOMContentLoaded', createParticles);

            // Add hover effects to cards
            document.querySelectorAll('.user-card').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px) scale(1.02)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });
        });
    </script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Animated background particles */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        /* Header */
        .header {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding: 1rem 2rem;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            color: white;
            font-size: 1.8rem;
            font-weight: bold;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(45deg, #ff6b6b, #feca57);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 0.5rem 1rem;
            border-radius: 8px;
        }

        .nav-links a:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero {
            padding: 120px 2rem 80px;
            text-align: center;
            color: white;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            background: linear-gradient(45deg, #fff, #f8f8f8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: slideInDown 1s ease-out;
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 3rem;
            opacity: 0.9;
            line-height: 1.6;
            animation: slideInUp 1s ease-out 0.3s both;
        }

        @keyframes slideInDown {
            from { opacity: 0; transform: translateY(-50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideInUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* User Types Section */
        .user-types {
            padding: 80px 2rem;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
        }

        .section-title {
            text-align: center;
            color: white;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            font-weight: 700;
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .user-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 2.5rem;
            text-align: center;
            transition: all 0.4s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .user-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.5s;
        }

        .user-card:hover::before {
            left: 100%;
        }

        .user-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            border-color: rgba(255, 255, 255, 0.4);
        }

        .card-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
            background: linear-gradient(45deg, #ff6b6b, #feca57);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            transition: transform 0.3s ease;
        }

        .user-card:hover .card-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .user-card h3 {
            color: white;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .user-card p {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .card-button {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .card-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Features Section */
        .features {
            padding: 80px 2rem;
            background: rgba(0, 0, 0, 0.1);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .feature-item {
            text-align: center;
            color: white;
            padding: 2rem;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.05);
            transition: transform 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            display: block;
        }

        .feature-item h4 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        /* CTA Section */
        .cta {
            padding: 80px 2rem;
            text-align: center;
            background: linear-gradient(45deg, rgba(255, 107, 107, 0.2), rgba(254, 202, 87, 0.2));
        }

        .cta-button {
            background: linear-gradient(45deg, #ff6b6b, #feca57);
            color: white;
            border: none;
            padding: 18px 40px;
            font-size: 1.2rem;
            border-radius: 30px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin: 1rem;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(255, 107, 107, 0.4);
        }

        /* Footer */
        .footer {
            background: rgba(0, 0, 0, 0.3);
            color: white;
            text-align: center;
            padding: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.5rem; }
            .hero p { font-size: 1.1rem; }
            .nav-links { display: none; }
            .cards-grid { grid-template-columns: 1fr; }
        }

        /* Animation delays for cards */
        .user-card:nth-child(1) { animation: fadeInUp 0.6s ease-out 0.2s both; }
        .user-card:nth-child(2) { animation: fadeInUp 0.6s ease-out 0.4s both; }
        .user-card:nth-child(3) { animation: fadeInUp 0.6s ease-out 0.6s both; }
        .user-card:nth-child(4) { animation: fadeInUp 0.6s ease-out 0.8s both; }
        .user-card:nth-child(5) { animation: fadeInUp 0.6s ease-out 1.0s both; }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
@endpush