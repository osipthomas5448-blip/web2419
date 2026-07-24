<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CleanXpress - Professional Home Cleaning Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="min-h-screen flex flex-col">
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <!-- Top Bar -->
        <div class="bg-blue-600 text-white py-2">
            <div class="container mx-auto px-4 flex justify-between items-center text-sm">
                <div class="flex items-center gap-6">
                    <a href="tel:+12303452343" class="flex items-center gap-2 hover:text-blue-100">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>+1-230-345-2343</span>
                    </a>
                    <a href="mailto:help@CleanXpress.in" class="hidden sm:flex items-center gap-2 hover:text-blue-100">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <span>help@CleanXpress.in</span>
                    </a>
                </div>
                <a href="contact.html" class="text-sm hover:text-blue-100">Get a Free Quote</a>
            </div>
        </div>

        <!-- Main Navigation -->
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <a href="index.html" class="flex items-center gap-2">
                    <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                        <span class="text-white text-xl font-bold">C</span>
                    </div>
                    <span class="text-2xl font-bold text-gray-900">CleanXpress</span>
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center gap-8">
                    <a href="index.html" class="text-gray-700 hover:text-blue-600 transition-colors">Home</a>
                    <a href="about.html" class="text-gray-700 hover:text-blue-600 transition-colors">About Us</a>
                    <a href="services.html" class="text-gray-700 hover:text-blue-600 transition-colors">Services</a>
                    <a href="blog.html" class="text-gray-700 hover:text-blue-600 transition-colors">Blog</a>
                    <a href="contact.html" class="text-gray-700 hover:text-blue-600 transition-colors">Contact</a>
                    <a href="contact.html" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">Book Now</a>
                </nav>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <nav id="mobile-menu" class="hidden md:hidden mt-4 pb-4 flex-col gap-4">
                <a href="index.html" class="text-gray-700 hover:text-blue-600 transition-colors py-2">Home</a>
                <a href="about.html" class="text-gray-700 hover:text-blue-600 transition-colors py-2">About Us</a>
                <a href="services.html" class="text-gray-700 hover:text-blue-600 transition-colors py-2">Services</a>
                <a href="blog.html" class="text-gray-700 hover:text-blue-600 transition-colors py-2">Blog</a>
                <a href="contact.html" class="text-gray-700 hover:text-blue-600 transition-colors py-2">Contact</a>
                <a href="contact.html" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors text-center">Book Now</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-1">
        <!-- Hero Section -->
        <section class="bg-gradient-to-br from-blue-600 to-blue-800 text-white py-20 md:py-32">
            <div class="container mx-auto px-4">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="inline-block bg-yellow-400 text-gray-900 px-4 py-1 rounded-full text-sm font-semibold mb-6">
                            Book Your First Cleaning
                        </div>
                        <h1 class="text-5xl md:text-6xl font-bold mb-6">Sparkling Homes Start With CleanXpress</h1>
                        <p class="text-xl mb-8 text-blue-100">
                            We offer professional, reliable, and eco-friendly cleaning services tailored to your needs. Your satisfaction is our priority.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="contact.html" class="bg-white text-blue-600 px-8 py-4 rounded-lg hover:bg-blue-50 transition-colors font-semibold inline-flex items-center gap-2">
                                Book Now
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                            <a href="services.html" class="border-2 border-white text-white px-8 py-4 rounded-lg hover:bg-white hover:text-blue-600 transition-colors font-semibold">
                                Our Services
                            </a>
                        </div>
                        <div class="flex gap-8 mt-12">
                            <div>
                                <div class="flex items-center gap-1 mb-1">
                                    <svg class="w-5 h-5 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                                    <svg class="w-5 h-5 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                                    <svg class="w-5 h-5 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                                    <svg class="w-5 h-5 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                                    <svg class="w-5 h-5 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                                </div>
                                <p class="text-sm text-blue-100">5.0 Average Rating</p>
                            </div>
                            <div>
                                <p class="text-3xl font-bold">1,200+</p>
                                <p class="text-sm text-blue-100">Happy Customers</p>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1766524789958-b0ec578d7d41?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwcm9mZXNzaW9uYWwlMjBjbGVhbmluZyUyMHNlcnZpY2UlMjBwZXJzb24lMjB1bmlmb3JtfGVufDF8fHx8MTc2OTY4ODc1NHww&ixlib=rb-4.1.0&q=80&w=1080" alt="Professional cleaning service" class="rounded-2xl shadow-2xl">
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="py-20">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Why Choose CleanXpress for Quality</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">
                        Discover a range of services designed to bring comfort and ease to every interaction.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Trained & Vetted Cleaners</h3>
                        <p class="text-gray-600">Only skilled background checked professionals.</p>
                    </div>
                    <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Eco-Conscious Approach</h3>
                        <p class="text-gray-600">Safe, eco-friendly products for a healthier environment.</p>
                    </div>
                    <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Flexible Scheduling</h3>
                        <p class="text-gray-600">We work around your time, not the other way around.</p>
                    </div>
                    <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Satisfaction Guarantee</h3>
                        <p class="text-gray-600">Not happy? We'll make it right or refund you.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- How We Work Section -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">How We Work</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Simple, transparent pricing. No hidden fees or charges.</p>
                </div>
                <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <div class="text-center relative">
                        <div class="w-20 h-20 bg-blue-600 text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-6">01</div>
                        <h3 class="text-xl font-semibold mb-3">Book Your First Cleaning</h3>
                        <p class="text-gray-600">Choose your service, date, and time online or by phone.</p>
                    </div>
                    <div class="text-center relative">
                        <div class="w-20 h-20 bg-blue-600 text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-6">02</div>
                        <h3 class="text-xl font-semibold mb-3">We Clean Your Home</h3>
                        <p class="text-gray-600">Our professional team arrives on time, fully equipped and ready.</p>
                    </div>
                    <div class="text-center relative">
                        <div class="w-20 h-20 bg-blue-600 text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-6">03</div>
                        <h3 class="text-xl font-semibold mb-3">Enjoy a Spotless Space</h3>
                        <p class="text-gray-600">Relax and enjoy your clean home with peace of mind.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="bg-blue-600 text-white py-20">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready for a Cleaner, Healthier Home?</h2>
                <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                    Book your first cleaning today and experience the CleanXpress difference.
                </p>
                <a href="contact.html" class="bg-white text-blue-600 px-8 py-4 rounded-lg hover:bg-blue-50 transition-colors font-semibold inline-flex items-center gap-2">
                    Get Started Now
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300">
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <a href="index.html" class="flex items-center gap-2 mb-4">
                        <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                            <span class="text-white text-xl font-bold">C</span>
                        </div>
                        <span class="text-2xl font-bold text-white">CleanXpress</span>
                    </a>
                    <p class="text-sm mb-4">Your trusted partner for professional cleaning services.</p>
                </div>
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="index.html" class="hover:text-white transition-colors">Home</a></li>
                        <li><a href="about.html" class="hover:text-white transition-colors">About Us</a></li>
                        <li><a href="services.html" class="hover:text-white transition-colors">Services</a></li>
                        <li><a href="blog.html" class="hover:text-white transition-colors">Blog</a></li>
                        <li><a href="contact.html" class="hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Our Services</h3>
                    <ul class="space-y-2">
                        <li><a href="services.html" class="hover:text-white transition-colors">Residential Cleaning</a></li>
                        <li><a href="services.html" class="hover:text-white transition-colors">Commercial Cleaning</a></li>
                        <li><a href="services.html" class="hover:text-white transition-colors">Deep Cleaning</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Contact Us</h3>
                    <ul class="space-y-3">
                        <li><a href="tel:+12303452343" class="hover:text-white transition-colors">+1-230-345-2343</a></li>
                        <li><a href="mailto:help@CleanXpress.in" class="hover:text-white transition-colors">help@CleanXpress.in</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm">© 2026 CleanXpress. All rights reserved.</p>
                <div class="flex gap-6 text-sm">
                    <a href="privacy.html" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="terms.html" class="hover:text-white transition-colors">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
