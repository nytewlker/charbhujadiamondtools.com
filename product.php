<?php 
include 'include/header.php';
include 'product-data.php';

// Get product slug from URL or default to quarrying-wire-saw
$productSlug = isset($_GET['product']) ? $_GET['product'] : 'quarrying-wire-saw';
$product = getProduct($productSlug);

// Redirect if product not found
if (!$product) {
    header('Location: products.php');
    exit;
}
?>

<!-- Product Hero Section -->
<section class="relative h-[60vh] w-full overflow-hidden bg-black">
    <div class="absolute inset-0">
        <img src="<?= $product['hero']['image'] ?>" alt="<?= $product['name'] ?>" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/60 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
    </div>

    <div class="relative z-10 h-full flex items-center">
        <div class="container mx-auto px-6 lg:px-16">
            <div class="max-w-3xl">
                <!-- Breadcrumb -->
                <div class="mb-6">
                    <nav class="flex items-center space-x-2 text-sm text-white/60 font-tagline">
                        <a href="index.php" class="hover:text-primary transition">Home</a>
                        <span>/</span>
                        <a href="products.php" class="hover:text-primary transition">Products</a>
                        <span>/</span>
                        <span class="text-white"><?= $product['name'] ?></span>
                    </nav>
                </div>

                <div class="mb-6 inline-block">
                    <div class="flex items-center space-x-3 text-primary">
                        <div class="w-12 h-px bg-primary"></div>
                        <span class="text-xs tracking-[0.3em] font-light uppercase font-tagline"><?= $product['hero']['tagline'] ?></span>
                    </div>
                </div>

                <h1 class="text-5xl md:text-7xl font-light leading-tight mb-6 font-appcrave">
                    <span class="text-white"><?= explode(' ', $product['name'])[0] ?></span><br>
                    <span class="text-primary font-medium"><?= implode(' ', array_slice(explode(' ', $product['name']), 1)) ?></span>
                </h1>

                <p class="text-lg md:text-xl text-white/70 font-light font-tagline mb-8">
                    <?= $product['hero']['description'] ?>
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
            <?php foreach ($product['quickStats'] as $stat): ?>
            <div>
                <div class="text-3xl font-bold mb-1 font-appcrave"><?= $stat['value'] ?></div>
                <p class="text-sm font-tagline opacity-90"><?= $stat['label'] ?></p>
            </div>
            <?php endforeach; ?>
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
                    <img src="<?= $product['overview']['mainImage'] ?>" alt="<?= $product['name'] ?>" class="w-full h-[500px] object-cover">
                    <div class="absolute top-4 right-4 bg-primary text-white px-4 py-2 text-sm font-tagline">
                        <?= $product['overview']['badge'] ?>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <?php foreach ($product['overview']['galleryImages'] as $img): ?>
                    <img src="<?= $img ?>" alt="Detail" class="w-full h-32 object-cover shadow-lg cursor-pointer hover:scale-105 transition">
                    <?php endforeach; ?>
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
                    <?= $product['overview']['description1'] ?>
                </p>

                <p class="text-dark mb-6 font-tagline leading-relaxed">
                    <?= $product['overview']['description2'] ?>
                </p>

                <!-- Key Features -->
                <div class="space-y-3 mb-8">
                    <?php foreach ($product['overview']['keyFeatures'] as $feature): ?>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium text-dark font-tagline"><?= $feature['title'] ?></h4>
                            <p class="text-dark text-sm font-tagline"><?= $feature['desc'] ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Certifications -->
                <div class="flex items-center gap-4 p-4 bg-stone-50 border-l-4 border-primary">
                    <svg class="w-8 h-8 text-primary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    <div>
                        <h4 class="font-medium text-dark font-tagline">Quality Certified</h4>
                        <p class="text-sm text-dark font-tagline"><?= $product['overview']['certifications'] ?></p>
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
            <?php foreach ($product['applications'] as $app): ?>
            <div class="bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="w-full h-48 mb-6 overflow-hidden">
                    <img src="<?= $app['image'] ?>" alt="<?= $app['title'] ?>" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                </div>
                <h3 class="text-xl font-medium text-dark mb-3 font-appcrave"><?= $app['title'] ?></h3>
                <p class="text-dark font-tagline text-sm leading-relaxed">
                    <?= $app['desc'] ?>
                </p>
            </div>
            <?php endforeach; ?>
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
                        <?php foreach ($product['specifications'] as $spec): ?>
                        <tr class="hover:bg-stone-50 transition">
                            <td class="px-6 py-4 font-tagline text-dark font-medium"><?= $spec['param'] ?></td>
                            <td class="px-6 py-4 font-tagline text-dark"><?= $spec['spec'] ?></td>
                        </tr>
                        <?php endforeach; ?>
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
            <?php foreach ($product['advantages'] as $adv): ?>
            <div class="bg-white p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-primary">
                <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-dark mb-3 font-appcrave"><?= $adv['title'] ?></h3>
                <p class="text-dark font-tagline text-sm leading-relaxed">
                    <?= $adv['desc'] ?>
                </p>
            </div>
            <?php endforeach; ?>
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
            <?php $guidelineKeys = ['installation', 'operation', 'maintenance', 'safety'];
            $guideTitles = ['Installation', 'Operation', 'Maintenance', 'Safety'];
            $guideIcons = ['gears', 'play-circle', 'wrench', 'shield-alert'];
            
            foreach ($guidelineKeys as $idx => $key): ?>
            <div class="bg-gradient-to-br from-stone-50 to-white p-8 shadow-lg">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-medium text-dark font-appcrave"><?= $guideTitles[$idx] ?></h3>
                </div>
                <ul class="space-y-3 text-dark font-tagline text-sm">
                    <?php foreach ($product['guidelines'][$key] as $item): ?>
                    <li class="flex items-start gap-2">
                        <span class="text-primary font-bold">•</span>
                        <span><?= $item ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endforeach; ?>
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
            <?php foreach ($product['relatedProducts'] as $rel): ?>
            <a href="product.php?product=<?= $rel['slug'] ?>" class="group block bg-white shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="w-full h-64 overflow-hidden">
                    <img src="<?= $rel['image'] ?>" alt="<?= $rel['title'] ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-medium text-dark mb-2 font-appcrave"><?= $rel['title'] ?></h3>
                    <p class="text-dark text-sm font-tagline mb-4"><?= $rel['desc'] ?></p>
                    <span class="inline-flex items-center text-primary font-medium font-tagline">
                        View Details
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </span>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'include/footer.php'; ?>