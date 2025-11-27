<?php include 'include/header.php'; ?>

<!-- Product Hero Section -->
<section class="relative h-[60vh] w-full overflow-hidden bg-black">
    <div class="absolute inset-0">
        <img src="assets/images/products/quarrying-wire-hero.jpg" alt="Quarrying Wire Saw" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/60 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
    </div>

    <div class="relative z-10 h-full flex items-center">
        <div class="container mx-auto px-6 lg:px-16">
            <div class="max-w-3xl">
                <!-- Breadcrumb -->
                <div class="mb-6">
                    <nav class="flex items-center space-x-2 text-sm text-white/60 font-tagline">
                        <a href="index1.php" class="hover:text-primary transition">Home</a>
                        <span>/</span>
                        <a href="products.php" class="hover:text-primary transition">Products</a>
                        <span>/</span>
                        <span class="text-white">Quarrying Wire Saw</span>
                    </nav>
                </div>

                <div class="mb-6 inline-block">
                    <div class="flex items-center space-x-3 text-primary">
                        <div class="w-12 h-px bg-primary"></div>
                        <span class="text-xs tracking-[0.3em] font-light uppercase font-tagline">Premium Quality</span>
                    </div>
                </div>

                <h1 class="text-5xl md:text-7xl font-light leading-tight mb-6 font-appcrave">
                    <span class="text-white">Quarrying</span><br>
                    <span class="text-primary font-medium">Wire Saw</span>
                </h1>

                <p class="text-lg md:text-xl text-white/70 font-light font-tagline mb-8">
                    Heavy-duty diamond wire saw engineered for large-scale stone extraction in quarries. Maximum cutting efficiency with minimal operational costs.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="#specifications" class="inline-flex items-center gap-2 bg-primary text-white px-6 py-3 hover:bg-primary/90 transition font-tagline">
                        View Specifications
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                        </svg>
                    </a>
                    <a href="#contact-form" class="inline-flex items-center gap-2 bg-white text-dark px-6 py-3 hover:bg-white/90 transition font-tagline">
                        Request Quote
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Stats Bar -->
<section class="w-full bg-primary py-6 shadow-lg">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center text-white">
            <div>
                <div class="text-3xl font-bold mb-1 font-appcrave">11.5mm</div>
                <p class="text-sm font-tagline opacity-90">Wire Diameter</p>
            </div>
            <div>
                <div class="text-3xl font-bold mb-1 font-appcrave">40 beads/m</div>
                <p class="text-sm font-tagline opacity-90">Bead Density</p>
            </div>
            <div>
                <div class="text-3xl font-bold mb-1 font-appcrave">2200 MPa</div>
                <p class="text-sm font-tagline opacity-90">Tensile Strength</p>
            </div>
            <div>
                <div class="text-3xl font-bold mb-1 font-appcrave">5-10 m²/h</div>
                <p class="text-sm font-tagline opacity-90">Cutting Speed</p>
            </div>
        </div>
    </div>
</section>

<!-- Product Overview Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6 lg:px-16">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Image Gallery -->
            <div class="space-y-4">
                <div class="relative overflow-hidden shadow-2xl">
                    <img src="assets/images/products/quarrying-main.jpg" alt="Quarrying Wire Saw Main" class="w-full h-[500px] object-cover">
                    <div class="absolute top-4 right-4 bg-primary text-white px-4 py-2 text-sm font-tagline">
                        Made in India
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <img src="assets/images/products/quarrying-detail-1.jpg" alt="Detail 1" class="w-full h-32 object-cover shadow-lg cursor-pointer hover:scale-105 transition">
                    <img src="assets/images/products/quarrying-detail-2.jpg" alt="Detail 2" class="w-full h-32 object-cover shadow-lg cursor-pointer hover:scale-105 transition">
                    <img src="assets/images/products/quarrying-detail-3.jpg" alt="Detail 3" class="w-full h-32 object-cover shadow-lg cursor-pointer hover:scale-105 transition">
                </div>
            </div>

            <!-- Product Info -->
            <div>
                <div class="mb-6 inline-block">
                    <div class="flex items-center space-x-3 text-primary">
                        <div class="w-12 h-px bg-primary"></div>
                        <span class="text-xs tracking-[0.3em] font-light uppercase font-tagline">Product Overview</span>
                    </div>
                </div>

                <h2 class="text-4xl md:text-5xl font-light text-dark mb-6 font-appcrave">
                    Professional Grade <span class="text-primary font-medium">Quarrying Solution</span>
                </h2>

                <p class="text-dark mb-4 font-tagline leading-relaxed">
                    Our Quarrying Wire Saw is specifically designed for high-volume stone extraction in granite, marble, and limestone quarries. With reinforced steel cable construction and premium diamond beads, this wire delivers exceptional performance even in the most demanding cutting conditions.
                </p>

                <p class="text-dark mb-6 font-tagline leading-relaxed">
                    Engineered to minimize downtime and maximize productivity, our quarrying wire saw provides consistent cutting performance with extended service life. The optimal bead spacing and high-tensile wire rope ensure smooth operation and reduced operational costs.
                </p>

                <!-- Key Features -->
                <div class="space-y-3 mb-8">
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium text-dark font-tagline">High Tensile Strength Wire Rope</h4>
                            <p class="text-dark text-sm font-tagline">2200 MPa strength ensures durability in heavy-duty applications</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium text-dark font-tagline">Premium Diamond Beads</h4>
                            <p class="text-dark text-sm font-tagline">Superior cutting efficiency with consistent performance</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium text-dark font-tagline">Optimized Bead Spacing</h4>
                            <p class="text-dark text-sm font-tagline">40 beads per meter for balanced cutting and longevity</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium text-dark font-tagline">Extended Service Life</h4>
                            <p class="text-dark text-sm font-tagline">Cuts 1000-1500 m² per wire under optimal conditions</p>
                        </div>
                    </div>
                </div>

                <!-- Certifications -->
                <div class="flex items-center gap-4 p-4 bg-stone-50 border-l-4 border-primary">
                    <svg class="w-8 h-8 text-primary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    <div>
                        <h4 class="font-medium text-dark font-tagline">Quality Certified</h4>
                        <p class="text-sm text-dark font-tagline">ISO 9001:2015 | CE Certified | 100% Quality Tested</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Applications Section -->
<section class="py-16 bg-gradient-to-b from-stone-50 to-white">
    <div class="container mx-auto px-6 lg:px-16">
        <div class="text-center mb-12">
            <div class="inline-block mb-4">
                <div class="flex items-center justify-center space-x-3 text-primary">
                    <div class="w-12 h-px bg-primary"></div>
                    <span class="text-xs tracking-[0.3em] font-light uppercase font-tagline">Applications</span>
                    <div class="w-12 h-px bg-primary"></div>
                </div>
            </div>
            <h2 class="text-4xl md:text-5xl font-light text-dark font-appcrave">
                Ideal For <span class="text-primary font-medium">Multiple Stone Types</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Application 1 -->
            <div class="bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="w-full h-48 mb-6 overflow-hidden">
                    <img src="assets/images/applications/granite-quarry.jpg" alt="Granite Quarrying" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                </div>
                <h3 class="text-xl font-medium text-dark mb-3 font-appcrave">Granite Quarrying</h3>
                <p class="text-dark font-tagline text-sm leading-relaxed">
                    Exceptional performance in hard granite extraction with consistent cutting speed and minimal wire breakage. Ideal for large block cutting.
                </p>
            </div>

            <!-- Application 2 -->
            <div class="bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="w-full h-48 mb-6 overflow-hidden">
                    <img src="assets/images/applications/marble-quarry.jpg" alt="Marble Quarrying" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                </div>
                <h3 class="text-xl font-medium text-dark mb-3 font-appcrave">Marble Extraction</h3>
                <p class="text-dark font-tagline text-sm leading-relaxed">
                    Smooth, clean cuts in marble quarries with reduced material wastage. Perfect for premium quality block extraction.
                </p>
            </div>

            <!-- Application 3 -->
            <div class="bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="w-full h-48 mb-6 overflow-hidden">
                    <img src="assets/images/applications/limestone-quarry.jpg" alt="Limestone Quarrying" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                </div>
                <h3 class="text-xl font-medium text-dark mb-3 font-appcrave">Limestone Quarrying</h3>
                <p class="text-dark font-tagline text-sm leading-relaxed">
                    Efficient cutting in limestone and sandstone quarries. Cost-effective solution for high-volume operations.
                </p>
            </div>

            <!-- Application 4 -->
            <div class="bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="w-full h-48 mb-6 overflow-hidden">
                    <img src="assets/images/applications/basalt-quarry.jpg" alt="Basalt Quarrying" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                </div>
                <h3 class="text-xl font-medium text-dark mb-3 font-appcrave">Basalt & Hard Stone</h3>
                <p class="text-dark font-tagline text-sm leading-relaxed">
                    Specially formulated for extremely hard stone types. High diamond concentration ensures effective cutting.
                </p>
            </div>

            <!-- Application 5 -->
            <div class="bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="w-full h-48 mb-6 overflow-hidden">
                    <img src="assets/images/applications/block-squaring.jpg" alt="Block Squaring" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                </div>
                <h3 class="text-xl font-medium text-dark mb-3 font-appcrave">Block Squaring</h3>
                <p class="text-dark font-tagline text-sm leading-relaxed">
                    Precise squaring and trimming of rough blocks. Reduces waste and improves block quality for further processing.
                </p>
            </div>

            <!-- Application 6 -->
            <div class="bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="w-full h-48 mb-6 overflow-hidden">
                    <img src="assets/images/applications/large-blocks.jpg" alt="Large Blocks" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                </div>
                <h3 class="text-xl font-medium text-dark mb-3 font-appcrave">Large Block Cutting</h3>
                <p class="text-dark font-tagline text-sm leading-relaxed">
                    Designed for cutting massive stone blocks in primary extraction. High stability and controlled cutting path.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Technical Specifications -->
<section id="specifications" class="py-16 bg-white">
    <div class="container mx-auto px-6 lg:px-16">
        <div class="text-center mb-12">
            <div class="inline-block mb-4">
                <div class="flex items-center justify-center space-x-3 text-primary">
                    <div class="w-12 h-px bg-primary"></div>
                    <span class="text-xs tracking-[0.3em] font-light uppercase font-tagline">Technical Data</span>
                    <div class="w-12 h-px bg-primary"></div>
                </div>
            </div>
            <h2 class="text-4xl md:text-5xl font-light text-dark font-appcrave">
                Technical <span class="text-primary font-medium">Specifications</span>
            </h2>
        </div>

        <div class="max-w-5xl mx-auto">
            <!-- Specifications Table -->
            <div class="bg-white shadow-2xl overflow-hidden">
                <table class="w-full">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th class="px-6 py-4 text-left font-tagline font-medium">Parameter</th>
                            <th class="px-6 py-4 text-left font-tagline font-medium">Specification</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-stone-200">
                        <tr class="hover:bg-stone-50 transition">
                            <td class="px-6 py-4 font-tagline text-dark font-medium">Wire Diameter</td>
                            <td class="px-6 py-4 font-tagline text-dark">11.5mm ± 0.2mm</td>
                        </tr>
                        <tr class="hover:bg-stone-50 transition">
                            <td class="px-6 py-4 font-tagline text-dark font-medium">Bead Diameter</td>
                            <td class="px-6 py-4 font-tagline text-dark">10.5mm - 11.0mm</td>
                        </tr>
                        <tr class="hover:bg-stone-50 transition">
                            <td class="px-6 py-4 font-tagline text-dark font-medium">Bead Spacing</td>
                            <td class="px-6 py-4 font-tagline text-dark">40 beads/meter</td>
                        </tr>
                        <tr class="hover:bg-stone-50 transition">
                            <td class="px-6 py-4 font-tagline text-dark font-medium">Wire Rope Construction</td>
                            <td class="px-6 py-4 font-tagline text-dark">6×19 + 1 FC / 7×7 structure</td>
                        </tr>
                        <tr class="hover:bg-stone-50 transition">
                            <td class="px-6 py-4 font-tagline text-dark font-medium">Breaking Load (Tensile Strength)</td>
                            <td class="px-6 py-4 font-tagline text-dark">≥ 2200 MPa (≥ 2500 kg)</td>
                        </tr>
                        <tr class="hover:bg-stone-50 transition">
                            <td class="px-6 py-4 font-tagline text-dark font-medium">Diamond Concentration</td>
                            <td class="px-6 py-4 font-tagline text-dark">25% - 30% (customizable)</td>
                        </tr>
                        <tr class="hover:bg-stone-50 transition">
                            <td class="px-6 py-4 font-tagline text-dark font-medium">Diamond Mesh Size</td>
                            <td class="px-6 py-4 font-tagline text-dark">30/35, 35/40, 40/45, 45/50</td>
                        </tr>
                        <tr class="hover:bg-stone-50 transition">
                            <td class="px-6 py-4 font-tagline text-dark font-medium">Bead Connection Method</td>
                            <td class="px-6 py-4 font-tagline text-dark">Injection molding / Rubber + Spring</td>
                        </tr>
                        <tr class="hover:bg-stone-50 transition">
                            <td class="px-6 py-4 font-tagline text-dark font-medium">Cutting Speed</td>
                            <td class="px-6 py-4 font-tagline text-dark">5-10 m²/hour (varies by stone type)</td>
                        </tr>
                        <tr class="hover:bg-stone-50 transition">
                            <td class="px-6 py-4 font-tagline text-dark font-medium">Lifespan (Granite)</td>
                            <td class="px-6 py-4 font-tagline text-dark">1000-1500 m² per wire</td>
                        </tr>
                        <tr class="hover:bg-stone-50 transition">
                            <td class="px-6 py-4 font-tagline text-dark font-medium">Recommended Cutting Speed</td>
                            <td class="px-6 py-4 font-tagline text-dark">28-32 m/s (linear speed)</td>
                        </tr>
                        <tr class="hover:bg-stone-50 transition">
                            <td class="px-6 py-4 font-tagline text-dark font-medium">Recommended Wire Tension</td>
                            <td class="px-6 py-4 font-tagline text-dark">800-1200 kg</td>
                        </tr>
                        <tr class="hover:bg-stone-50 transition">
                            <td class="px-6 py-4 font-tagline text-dark font-medium">Water Flow Rate</td>
                            <td class="px-6 py-4 font-tagline text-dark">80-120 liters/minute</td>
                        </tr>
                        <tr class="hover:bg-stone-50 transition">
                            <td class="px-6 py-4 font-tagline text-dark font-medium">Standard Length</td>
                            <td class="px-6 py-4 font-tagline text-dark">Custom (typically 20m - 80m loops)</td>
                        </tr>
                        <tr class="hover:bg-stone-50 transition">
                            <td class="px-6 py-4 font-tagline text-dark font-medium">Packaging</td>
                            <td class="px-6 py-4 font-tagline text-dark">Wooden case or carton box</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Note -->
            <div class="mt-8 p-6 bg-stone-50 border-l-4 border-primary">
                <div class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-primary flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div>
                        <h4 class="font-medium text-dark mb-2 font-tagline">Important Notes:</h4>
                        <ul class="space-y-1 text-sm text-dark font-tagline">
                            <li>• Specifications can be customized based on specific stone type and quarry conditions</li>
                            <li>• Cutting performance varies depending on stone hardness, machine condition, and operator skill</li>
                            <li>• Regular maintenance and proper cooling water supply are essential for optimal performance</li>
                            <li>• Contact our technical team for specific recommendations for your quarry</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Advantages Section -->
<section class="py-16 bg-gradient-to-b from-stone-50 to-white">
    <div class="container mx-auto px-6 lg:px-16">
        <div class="text-center mb-12">
            <div class="inline-block mb-4">
                <div class="flex items-center justify-center space-x-3 text-primary">
                    <div class="w-12 h-px bg-primary"></div>
                    <span class="text-xs tracking-[0.3em] font-light uppercase font-tagline">Advantages</span>
                    <div class="w-12 h-px bg-primary"></div>
                </div>
            </div>
            <h2 class="text-4xl md:text-5xl font-light text-dark font-appcrave">
                Why Choose Our <span class="text-primary font-medium">Quarrying Wire</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Advantage 1 -->
            <div class="bg-white p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-primary">
                <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-dark mb-3 font-appcrave">High Cutting Efficiency</h3>
                <p class="text-dark font-tagline text-sm leading-relaxed">
                    Optimized bead design and diamond distribution deliver faster cutting speeds, reducing extraction time and increasing daily output.
                </p>
            </div>

            <!-- Advantage 2 -->
            <div class="bg-white p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-primary">
                <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-dark mb-3 font-appcrave">Cost-Effective Operation</h3>
                <p class="text-dark font-tagline text-sm leading-relaxed">
                    Extended wire life and reduced power consumption translate to lower cost per square meter, improving profitability.
                </p>
            </div>

            <!-- Advantage 3 -->
            <div class="bg-white p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-primary">
                <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
</svg>
</div>
<h3 class="text-xl font-medium text-dark mb-3 font-appcrave">Superior Durability</h3>
<p class="text-dark font-tagline text-sm leading-relaxed">
High-tensile steel wire rope with reinforced bead connections ensures minimal wire breakage even in demanding conditions.
</p>
</div>
        <!-- Advantage 4 -->
        <div class="bg-white p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-primary">
            <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-6">
                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                </svg>
            </div>
            <h3 class="text-xl font-medium text-dark mb-3 font-appcrave">Smooth Cutting Surface</h3>
            <p class="text-dark font-tagline text-sm leading-relaxed">
                Precision-engineered beads create clean, smooth cuts with minimal surface roughness, reducing secondary processing requirements.
            </p>
        </div>

        <!-- Advantage 5 -->
        <div class="bg-white p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-primary">
            <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-6">
                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </div>
            <h3 class="text-xl font-medium text-dark mb-3 font-appcrave">Customizable Solutions</h3>
            <p class="text-dark font-tagline text-sm leading-relaxed">
                Tailored specifications available for different stone types, hardness levels, and specific quarry requirements.
            </p>
        </div>

        <!-- Advantage 6 -->
        <div class="bg-white p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-primary">
            <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-6">
                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </div>
            <h3 class="text-xl font-medium text-dark mb-3 font-appcrave">Technical Support</h3>
            <p class="text-dark font-tagline text-sm leading-relaxed">
                Expert guidance on wire selection, installation, operation parameters, and troubleshooting from our experienced team.
            </p>
        </div>
    </div>
</div>
</section>
<!-- Operating Guidelines -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6 lg:px-16">
        <div class="text-center mb-12">
            <div class="inline-block mb-4">
                <div class="flex items-center justify-center space-x-3 text-primary">
                    <div class="w-12 h-px bg-primary"></div>
                    <span class="text-xs tracking-[0.3em] font-light uppercase font-tagline">Guidelines</span>
                    <div class="w-12 h-px bg-primary"></div>
                </div>
            </div>
            <h2 class="text-4xl md:text-5xl font-light text-dark font-appcrave">
                Operating <span class="text-primary font-medium">Guidelines</span>
            </h2>
        </div>
    <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-8">
        <!-- Installation -->
        <div class="bg-gradient-to-br from-stone-50 to-white p-8 shadow-lg">
            <div class="flex items-center gap-4 mb-6">
                <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-medium text-dark font-appcrave">Installation</h3>
            </div>
            <ul class="space-y-3 text-dark font-tagline text-sm">
                <li class="flex items-start gap-2">
                    <span class="text-primary font-bold">•</span>
                    <span>Inspect wire for any damage before installation</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-primary font-bold">•</span>
                    <span>Ensure proper wire tension (800-1200 kg recommended)</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-primary font-bold">•</span>
                    <span>Check pulley alignment and groove condition</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-primary font-bold">•</span>
                    <span>Verify water cooling system is functioning properly</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-primary font-bold">•</span>
                    <span>Run wire at low speed initially to seat beads properly</span>
                </li>
            </ul>
        </div>

        <!-- Operation -->
        <div class="bg-gradient-to-br from-stone-50 to-white p-8 shadow-lg">
            <div class="flex items-center gap-4 mb-6">
                <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-medium text-dark font-appcrave">Operation</h3>
            </div>
            <ul class="space-y-3 text-dark font-tagline text-sm">
                <li class="flex items-start gap-2">
                    <span class="text-primary font-bold">•</span>
                    <span>Maintain linear speed of 28-32 m/s for optimal performance</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-primary font-bold">•</span>
                    <span>Ensure continuous water flow (80-120 liters/minute)</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-primary font-bold">•</span>
                    <span>Monitor wire tension throughout operation</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-primary font-bold">•</span>
                    <span>Avoid sudden starts and stops to prevent wire breakage</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-primary font-bold">•</span>
                    <span>Regularly check for unusual vibrations or noises</span>
                </li>
            </ul>
        </div>

        <!-- Maintenance -->
        <div class="bg-gradient-to-br from-stone-50 to-white p-8 shadow-lg">
            <div class="flex items-center gap-4 mb-6">
                <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-medium text-dark font-appcrave">Maintenance</h3>
            </div>
            <ul class="space-y-3 text-dark font-tagline text-sm">
                <li class="flex items-start gap-2">
                    <span class="text-primary font-bold">•</span>
                    <span>Clean wire and beads after each shift</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-primary font-bold">•</span>
                    <span>Inspect pulleys and bearings for wear weekly</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-primary font-bold">•</span>
                    <span>Check water nozzles for blockages regularly</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-primary font-bold">•</span>
                    <span>Lubricate machine moving parts as per schedule</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-primary font-bold">•</span>
                    <span>Store unused wire in dry, covered conditions</span>
                </li>
            </ul>
        </div>

        <!-- Safety -->
        <div class="bg-gradient-to-br from-stone-50 to-white p-8 shadow-lg">
            <div class="flex items-center gap-4 mb-6">
                <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-medium text-dark font-appcrave">Safety</h3>
            </div>
            <ul class="space-y-3 text-dark font-tagline text-sm">
                <li class="flex items-start gap-2">
                    <span class="text-primary font-bold">•</span>
                    <span>Wear appropriate PPE (goggles, gloves, hearing protection)</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-primary font-bold">•</span>
                    <span>Keep safe distance from operating wire saw</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-primary font-bold">•</span>
                    <span>Never touch wire during operation</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-primary font-bold">•</span>
                    <span>Ensure emergency stop button is accessible</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-primary font-bold">•</span>
                    <span>Train operators on proper safety procedures</span>
                </li>
            </ul>
        </div>
    </div>
</div>
</section>
<!-- Contact Form Section -->
<section id="contact-form" class="py-16 bg-gradient-to-b from-stone-50 to-white">
    <div class="container mx-auto px-6 lg:px-16">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <div class="inline-block mb-4">
                    <div class="flex items-center justify-center space-x-3 text-primary">
                        <div class="w-12 h-px bg-primary"></div>
                        <span class="text-xs tracking-[0.3em] font-light uppercase font-tagline">Get a Quote</span>
                        <div class="w-12 h-px bg-primary"></div>
                    </div>
                </div>
                <h2 class="text-4xl md:text-5xl font-light text-dark font-appcrave mb-4">
                    Request a <span class="text-primary font-medium">Quote</span>
                </h2>
                <p class="text-dark font-tagline">
                    Fill out the form below and our team will get back to you within 24 hours with pricing and availability.
                </p>
            </div>
        <div class="bg-white p-8 shadow-2xl">
            <form action="" method="POST" class="space-y-6">
                <!-- Row 1 -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-dark mb-2 font-tagline">Full Name *</label>
                        <input
                            id="name" name="name" type="text" required
                            class="w-full px-4 py-3 border border-stone-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition font-tagline"
                            placeholder="John Doe">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-dark mb-2 font-tagline">Email Address *</label>
                        <input
                            id="email" name="email" type="email" required
                            class="w-full px-4 py-3 border border-stone-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition font-tagline"
                            placeholder="john@example.com">
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="phone" class="block text-sm font-medium text-dark mb-2 font-tagline">Phone Number *</label>
                        <input
                            id="phone" name="phone" type="tel" required
                            class="w-full px-4 py-3 border border-stone-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition font-tagline"
                            placeholder="+91 98765 43210">
                    </div>
                    <div>
                        <label for="company" class="block text-sm font-medium text-dark mb-2 font-tagline">Company Name</label>
                        <input
                            id="company" name="company" type="text"
                            class="w-full px-4 py-3 border border-stone-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition font-tagline"
                            placeholder="Your Company">
                    </div>
                </div>

                <!-- Row 3 -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="country" class="block text-sm font-medium text-dark mb-2 font-tagline">Country *</label>
                        <input
                            id="country" name="country" type="text" required
                            class="w-full px-4 py-3 border border-stone-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition font-tagline"
                            placeholder="India">
                    </div>
                    <div>
                        <label for="stone_type" class="block text-sm font-medium text-dark mb-2 font-tagline">Stone Type *</label>
                        <select
                            id="stone_type" name="stone_type" required
                            class="w-full px-4 py-3 border border-stone-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition font-tagline">
                            <option value="">Select Stone Type</option>
                            <option value="granite">Granite</option>
                            <option value="marble">Marble</option>
                            <option value="limestone">Limestone</option>
                            <option value="sandstone">Sandstone</option>
                            <option value="basalt">Basalt</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>

                <!-- Row 4 -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="quantity" class="block text-sm font-medium text-dark mb-2 font-tagline">Quantity (meters) *</label>
                        <input
                            id="quantity" name="quantity" type="number" required
                            class="w-full px-4 py-3 border border-stone-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition font-tagline"
                            placeholder="100">
                    </div>
                    <div>
                        <label for="delivery_timeline" class="block text-sm font-medium text-dark mb-2 font-tagline">Delivery Timeline</label>
                        <select
                            id="delivery_timeline" name="delivery_timeline"
                            class="w-full px-4 py-3 border border-stone-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition font-tagline">
                            <option value="">Select Timeline</option>
                            <option value="urgent">Urgent (Within 1 week)</option>
                            <option value="standard">Standard (2-4 weeks)</option>
                            <option value="flexible">Flexible (1-2 months)</option>
                        </select>
                    </div>
                </div>

                <!-- Message -->
                <div>
                    <label for="message" class="block text-sm font-medium text-dark mb-2 font-tagline">Additional Requirements</label>
                    <textarea
                        id="message" name="message" rows="4"
                        class="w-full px-4 py-3 border border-stone-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition resize-none font-tagline"
                        placeholder="Please provide any specific requirements, custom specifications, or questions..."></textarea>
                </div>

                <!-- Submit Button -->
                <div class="flex items-center justify-between">
                    <p class="text-sm text-dark font-tagline">* Required fields</p>
                    <button
                        type="submit"
                        class="inline-flex items-center gap-2 bg-primary text-white px-8 py-3 hover:bg-primary/90 transition font-tagline font-medium">
                        Submit Quote Request
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>

        <!-- Contact Info -->
        <div class="mt-8 grid md:grid-cols-3 gap-6">
            <div class="bg-white p-6 shadow-lg text-center">
                <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </div>
                <h4 class="font-medium text-dark mb-2 font-tagline">Call Us</h4>
                <p class="text-sm text-dark font-tagline">+91 99288 11486</p>
                <p class="text-sm text-dark font-tagline">+91 90240 34737</p>
            </div>

            <div class="bg-white p-6 shadow-lg text-center">
                <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h4 class="font-medium text-dark mb-2 font-tagline">Email Us</h4>
                <p class="text-sm text-dark font-tagline">cdtools8189@gmail.com</p>
            </div>

            <div class="bg-white p-6 shadow-lg text-center">
                <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h4 class="font-medium text-dark mb-2 font-tagline">Response Time</h4>
                <p class="text-sm text-dark font-tagline">Within 24 hours</p>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Related Products -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6 lg:px-16">
        <div class="text-center mb-12">
            <div class="inline-block mb-4">
                <div class="flex items-center justify-center space-x-3 text-primary">
                    <div class="w-12 h-px bg-primary"></div>
                    <span class="text-xs tracking-[0.3em] font-light uppercase font-tagline">Explore More</span>
                    <div class="w-12 h-px bg-primary"></div>
                </div>
            </div>
            <h2 class="text-4xl md:text-5xl font-light text-dark font-appcrave">
                Related <span class="text-primary font-medium">Products</span>
            </h2>
        </div>
    <div class="grid md:grid-cols-3 gap-8">
        <!-- Product 1 -->
        <a href="diamond-wire-saw.php" class="group block bg-white shadow-lg hover:shadow-2xl transition-all duration-300">
            <div class="w-full h-64 overflow-hidden">
                <img src="assets/images/products/diamond-wire.jpg" alt="Diamond WireSaw" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
</div>
<div class="p-6">
<h3 class="text-xl font-medium text-dark mb-2 font-appcrave">Diamond Wire Saw</h3>
<p class="text-dark text-sm font-tagline mb-4">Multi-purpose diamond wire for block squaring and profiling operations.</p>
<span class="inline-flex items-center text-primary font-medium font-tagline">
View Details
<svg class="w-4 h-4 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
</svg>
</span>
</div>
</a>        <!-- Product 2 -->
        <a href="mono-wire.php" class="group block bg-white shadow-lg hover:shadow-2xl transition-all duration-300">
            <div class="w-full h-64 overflow-hidden">
                <img src="assets/images/products/mono-wire.jpg" alt="Mono Wire" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
            </div>
            <div class="p-6">
                <h3 class="text-xl font-medium text-dark mb-2 font-appcrave">Mono (Stationary) Wire</h3>
                <p class="text-dark text-sm font-tagline mb-4">Stationary wire saw for precise cutting in stone processing facilities.</p>
                <span class="inline-flex items-center text-primary font-medium font-tagline">
                    View Details
                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </span>
            </div>
        </a>        <!-- Product 3 -->
        <a href="diamond-beads.php" class="group block bg-white shadow-lg hover:shadow-2xl transition-all duration-300">
            <div class="w-full h-64 overflow-hidden">
                <img src="assets/images/products/diamond-beads.jpg" alt="Diamond Beads" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
            </div>
            <div class="p-6">
                <h3 class="text-xl font-medium text-dark mb-2 font-appcrave">Diamond Wiresaw Beads</h3>
                <p class="text-dark text-sm font-tagline mb-4">Premium diamond beads for wire saw assembly and replacements.</p>
                <span class="inline-flex items-center text-primary font-medium font-tagline">
                    View Details
                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </span>
            </div>
        </a>
    </div>
</div>
</section><?php include 'include/footer.php'; ?>