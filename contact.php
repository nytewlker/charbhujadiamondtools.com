<?php include 'include/header.php'; ?>

<!-- Hero Header -->
<section class="relative h-[40vh] w-full overflow-hidden bg-white">
    <div class="absolute inset-0">
        <img src="assets/images/slider/02.jpg" alt="Contact CHARBHUJA DIAMOND TOOLS" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
    </div>

    <div class="relative z-10 h-full flex items-center">
        <div class="container mx-auto px-6 lg:px-16">
            <div class="max-w-5xl">
                <div class="mb-6 inline-block">
                    <div class="flex items-center space-x-3 text-primary">
                        <div class="w-12 h-px bg-primary"></div>
                        <span class="text-xs tracking-[0.3em] font-light uppercase font-tagline">Get In Touch</span>
                    </div>
                </div>

                <h1 class="text-5xl md:text-7xl font-light leading-tight mb-6 font-appcrave">
                    <span class="text-white">Contact</span>&nbsp;
                    <span class="text-primary font-medium">Our Team</span>
                </h1>

                <p class="text-lg md:text-xl text-white/70 font-light font-tagline">
                    We're here to help. Reach out for product inquiries, technical support, or partnership opportunities.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- Main Contact Form & Map Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6 lg:px-16">
        <div class="grid lg:grid-cols-3 gap-12">
            <!-- Contact Form -->
            <div class="bg-dark lg:col-span-2 p-8 lg:p-12 shadow-2xl border border-white/10">

                <!-- Heading -->
                <div class="mb-8">
                    <div class="flex items-center space-x-3 text-primary mb-3">
                        <div class="w-12 h-px bg-primary"></div>
                        <span class="text-xs tracking-[0.35em] uppercase font-tagline text-primary">Send Message</span>
                    </div>

                    <h2 class="text-3xl md:text-4xl font-light text-white font-appcrave mb-2">
                        Request a <span class="text-primary font-medium">Quote</span>
                    </h2>

                    <p class="text-white/70 font-tagline">
                        Fill out the form below and our team will get back to you within 24 hours.
                    </p>
                </div>

                <form action="process-contact.php" method="POST" class="space-y-8">

                    <!-- Name & Email -->
                    <div class="grid md:grid-cols-2 gap-6">

                        <div>
                            <label class="block text-sm text-white/80 mb-0 font-tagline">Full Name *</label>
                            <input type="text" name="name" required
                                class="w-full px-0 py-1 bg-transparent border-b border-white/30 text-white placeholder-white/40 focus:border-primary focus:ring-0 outline-none transition"
                                placeholder="John Doe">
                        </div>
                        <div>
                            <label class="block text-sm text-white/80 mb-0 font-tagline">Company Name</label>
                            <input type="text" name="company"
                                class="w-full px-0 py-1 bg-transparent border-b border-white/30 text-white placeholder-white/40 focus:border-primary focus:ring-0 outline-none transition"
                                placeholder="Your Company">
                        </div>


                    </div>

                    <!-- Phone & Company -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm text-white/80 mb-0 font-tagline">Email Address *</label>
                            <input type="email" name="email" required
                                class="w-full px-0 py-1 bg-transparent border-b border-white/30 text-white placeholder-white/40 focus:border-primary focus:ring-0 outline-none transition"
                                placeholder="john@example.com">
                        </div>
                        <div>
                            <label class="block text-sm text-white/80 mb-0 font-tagline">Phone Number *</label>
                            <input type="tel" name="phone" required
                                class="w-full px-0 py-1 bg-transparent border-b border-white/30 text-white placeholder-white/40 focus:border-primary focus:ring-0 outline-none transition"
                                placeholder="+91 98765 43210">
                        </div>



                    </div>
                    <!-- Country, City, Zip -->
                    <div class="grid md:grid-cols-3 gap-6">

                        <div>
                            <label class="block text-sm text-white/80 mb-0 font-tagline">Country</label>
                            <input type="text" name="country"
                                class="w-full px-0 py-1 bg-transparent border-b border-white/30 text-white placeholder-white/40 focus:border-primary focus:ring-0 outline-none transition"
                                placeholder="India">
                        </div>

                        <div>
                            <label class="block text-sm text-white/80 mb-0 font-tagline">City</label>
                            <input type="text" name="city"
                                class="w-full px-0 py-1 bg-transparent border-b border-white/30 text-white placeholder-white/40 focus:border-primary focus:ring-0 outline-none transition"
                                placeholder="Mumbai">
                        </div>

                        <div>
                            <label class="block text-sm text-white/80 mb-0 font-tagline">ZIP Code</label>
                            <input type="text" name="zipcode"
                                class="w-full px-0 py-1 bg-transparent border-b border-white/30 text-white placeholder-white/40 focus:border-primary focus:ring-0 outline-none transition"
                                placeholder="400001">
                        </div>

                    </div>
                    <!-- Product & Subject -->
                    <div class="grid md:grid-cols-2 gap-6">

                        <div>
                            <label class="block text-sm text-white/80 mb-0 font-tagline">Product Interest</label>
                            <select name="product"
                                class="w-full px-0 py-1 bg-transparent border-b border-white/30 text-white focus:border-primary focus:ring-0 outline-none transition">
                                <option value="" class="text-black">Select a product</option>
                                <option value="Quarrying Wire Saw" class="text-black">Quarrying Wire Saw</option>
                                <option value="Diamond Wire Saw" class="text-black">Diamond Wire Saw</option>
                                <option value="Mono Wire" class="text-black">Mono Wire</option>
                                <option value="Squaring Wire Saw" class="text-black">Squaring Wire Saw</option>
                                <option value="Profiling Wiresaw" class="text-black">Profiling Wiresaw</option>
                                <option value="Diamond Wiresaw Beads" class="text-black">Diamond Wiresaw Beads</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm text-white/80 mb-0 font-tagline">Est. Quantity</label>
                            <input type="text" name="quantity" required
                                class="w-full px-0 py-1 bg-transparent border-b border-white/30 text-white placeholder-white/40 focus:border-primary focus:ring-0 outline-none transition"
                                placeholder="1000 meters">
                        </div>

                    </div>



                    <!-- Message -->
                    <div>
                        <label class="block text-sm text-white/80 mb-0 font-tagline">Your Message *</label>
                        <textarea name="message" rows="4" required
                            class="w-full px-0 py-1 bg-transparent border-b border-white/30 text-white placeholder-white/40 focus:border-primary focus:ring-0 outline-none transition resize-none"
                            placeholder="Write your message here..."></textarea>
                    </div>

                    <!-- Submit -->
                    <button type="submit"
                        class="w-full bg-primary text-white font-tagline text-lg font-medium py-3  hover:bg-primary/80 transition">
                        Send Message
                    </button>

                </form>

            </div>


            <!-- Map & Additional Info -->
            <div class="space-y-8">
                <div class="bg-white shadow-2xl p-8">

                    <h3 class="text-2xl font-medium text-dark mb-2 font-appcrave">Contact <span class="text-primary">Information</span></h3>
                    <hr class="border-primary mb-2">
                    <p class="text-dark mb-6 font-tagline">
                        Whether you have questions about our products, need technical support, or want to discuss partnership opportunities, our team is here to assist you. Reach out to us through any of the following methods:
                    </p>

                    <div class="space-y-3">
                        <div class="flex justify-between items-center py-2 border-b border-stone-200">
                            <span class="font-tagline text-dark">Call Our Experts:</span>
                            <span class="font-tagline text-primary font-medium">+91 99288 11486<br> +91 90240 34737 </span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-stone-200">
                            <span class="font-tagline text-dark">Email Us:</span>
                            <span class="font-tagline text-primary font-medium">cdtools8189@gmail.com</span>
                        </div>
                    </div>

                    <div class="mt-6 p-4 bg-stone-50 border-l-4 border-primary">
                        <p class="text-sm text-dark font-tagline">
                            <strong>We will get back to you within 24 hours.</strong>
                        </p>
                    </div>
                </div>




                <!-- Manufacturing Units -->
                <div class="bg-white shadow-2xl p-8">
                    <h3 class="text-2xl font-medium text-dark mb-6 font-appcrave">Our <span class="text-primary">Manufacturing Units</span></h3>

                    <div class="space-y-6">
                        <!-- Unit 1 -->
                        <div class="border-l-4 border-primary pl-4">
                            <h4 class="font-medium text-dark mb-2 font-tagline">Manufacturing Unit - I</h4>
                            <p class="text-dark text-sm font-tagline leading-relaxed">
                                Mohi-peepli road, Behind Mahalaxmi Granite, Peepli Acharyan, Rajsamand-313324 (Rj.) INDIA
                            </p>
                        </div>

                        <!-- Unit 2 -->
                        <div class="border-l-4 border-primary pl-4">
                            <h4 class="font-medium text-dark mb-2 font-tagline">Manufacturing Unit - II</h4>
                            <p class="text-dark text-sm font-tagline leading-relaxed">
                                SH-56, Madri-Amet road, Dhuliyana, Rajsamand-313324 (Rj.) INDIA
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class=" relative py-12 " style="background-image: url(assets/images/map.jpg); background-size: cover; background-position: center;">
    <div class="inset-0 absolute  "> </div>
    <div class="absolute inset-0 bg-gradient-to-b from-white via-white to-transparent"></div>
        <div class="container z-20 relative  mx-auto px-6 lg:px-16">
            <div>
                <div class="text-center mb-12">
                    <div class="inline-block mb-4">
                        <div class="flex items-center justify-center space-x-3 text-primary">
                            <div class="w-12 h-px bg-primary"></div>
                            <span class="text-xs tracking-[0.3em] font-light uppercase font-tagline">FAQs</span>
                            <div class="w-12 h-px bg-primary"></div>
                        </div>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-light text-white font-appcrave">
                        Frequently Asked <span class="text-primary font-medium">Questions</span>
                    </h2>
                </div>

                <div class="max-w-4xl mx-auto space-y-4" x-data="{selected: null}">
                    <!-- FAQ 1 -->
                    <div class="bg-stone-50 shadow-lg overflow-hidden">
                        <button
                            @click="selected = selected === 1 ? null : 1"
                            class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-stone-100 transition">
                            <span class="font-medium text-dark font-tagline">What types of diamond wire saws do you manufacture?</span>
                            <svg
                                class="w-5 h-5 text-primary transition-transform"
                                :class="{'rotate-180': selected === 1}"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="selected === 1" x-collapse class="px-6 pb-4">
                            <p class="text-dark font-tagline">
                                We manufacture a complete range including Quarrying Wire Saws, Diamond Wire Saws, Mono (Stationary) Wires, Squaring Wire Saws, Profiling Wiresaws, and Diamond Wiresaw Beads. Each product is designed for specific applications in stone processing.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="bg-stone-50 shadow-lg overflow-hidden">
                        <button
                            @click="selected = selected === 2 ? null : 2"
                            class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-stone-100 transition">
                            <span class="font-medium text-dark font-tagline">What is your typical delivery time?</span>
                            <svg
                                class="w-5 h-5 text-primary transition-transform"
                                :class="{'rotate-180': selected === 2}"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="selected === 2" x-collapse class="px-6 pb-4">
                            <p class="text-dark font-tagline">
                                Delivery times vary based on order quantity and customization requirements. Standard orders typically ship within 7-10 business days for domestic delivery and 15-20 days for international orders. Rush orders can be accommodated upon request.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="bg-stone-50 shadow-lg overflow-hidden">
                        <button
                            @click="selected = selected === 3 ? null : 3"
                            class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-stone-100 transition">
                            <span class="font-medium text-dark font-tagline">Do you offer custom specifications?</span>
                            <svg
                                class="w-5 h-5 text-primary transition-transform"
                                :class="{'rotate-180': selected === 3}"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="selected === 3" x-collapse class="px-6 pb-4">
                            <p class="text-dark font-tagline">
                                Yes, we specialize in custom configurations to meet specific project requirements. Our technical team can work with you to determine the optimal bead size, spacing, wire diameter, and length for your application.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="bg-stone-50 shadow-lg overflow-hidden">
                        <button
                            @click="selected = selected === 4 ? null : 4"
                            class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-stone-100 transition">
                            <span class="font-medium text-dark font-tagline">What quality certifications do you have?</span>
                            <svg
                                class="w-5 h-5 text-primary transition-transform"
                                :class="{'rotate-180': selected === 4}"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="selected === 4" x-collapse class="px-6 pb-4">
                            <p class="text-dark font-tagline">
                                All our products undergo rigorous quality testing including tensile strength verification, bead adhesion testing, and cutting performance trials. We maintain strict quality control standards at every stage of manufacturing to ensure consistent excellence.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="bg-stone-50 shadow-lg overflow-hidden">
                        <button
                            @click="selected = selected === 5 ? null : 5"
                            class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-stone-100 transition">
                            <span class="font-medium text-dark font-tagline">Do you provide technical support and training?</span>
                            <svg
                                class="w-5 h-5 text-primary transition-transform"
                                :class="{'rotate-180': selected === 5}"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="selected === 5" x-collapse class="px-6 pb-4">
                            <p class="text-dark font-tagline">
                                Yes, we provide comprehensive technical support including installation guidance, operational best practices, and troubleshooting assistance. Training sessions can be arranged for bulk orders or long-term partnerships.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</section>

<!-- Map -->
<div class="bg-white shadow-2xl overflow-hidden h-[1200px]">
    <iframe
        src="https://maps.google.com/maps?q=Rajsamand,%20Rajasthan,%20India&t=&z=13&ie=UTF8&iwloc=&output=embed"
        class="w-full h-full border-0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<?php include 'include/footer.php'; ?>