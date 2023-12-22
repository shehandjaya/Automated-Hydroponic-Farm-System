<?php $__env->startComponent('website.component.navbar'); ?>
<?php echo $__env->renderComponent(); ?>
<style>
    .fixed-size-img {
    width: 800px;
    height: 720px;
}

</style>
    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 fixed-size-img" src="<?php echo e(asset("webSiteImages/carousel-1.png")); ?>" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    
                                    <h1 class="mb-4 animated zoomIn text-white "  >Lankan Hydoponic</h1>
                                    <h1 class="mb-4 animated zoomIn text-white"  >Pvt LTD</h1>
                                    <a href="" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100 fixed-size-img" src="<?php echo e(asset("webSiteImages/carousel-2.jpg")); ?>" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    
                                    <h1 class="mb-4 animated zoomIn text-white "  >Lankan Hydoponic</h1>
                                    <h1 class="mb-4 animated zoomIn text-white"  >Pvt LTD</h1>
                                    <a href="" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php $__currentLoopData = $webImageData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-item">
                    <img class="w-100 fixed-size-img" src="<?php echo e(asset($item->image_name)); ?>" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    
                                    <h1 class="mb-4 animated zoomIn text-white "  >Lankan Hydoponic</h1>
                                    <h1 class="mb-4 animated zoomIn text-white"  >Pvt LTD</h1>
                                    <a href="" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
<section id="about">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid bg-white w-100 mb-3 wow fadeIn" data-wow-delay="0.1s" src="<?php echo e(asset("webSiteImages/about-1.png")); ?>" alt="">
                            <img class="img-fluid bg-white w-50 wow fadeIn" data-wow-delay="0.2s" src="<?php echo e(asset('webSiteImages/about-3.png')); ?>" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid bg-white w-50 mb-3 wow fadeIn" data-wow-delay="0.3s" src="<?php echo e(asset('webSiteImages/about-2.png')); ?>" alt="">
                            <img class="img-fluid bg-white w-100 wow fadeIn" data-wow-delay="0.4s" src="<?php echo e(asset('webSiteImages/about-4.png')); ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <p class="fs-5 fw-medium fst-italic text-primary">About Us</p>
                        <p class="mb-0" style="margin-top: -3%">
                            Greenic Exotics: Sri Lanka's hydroponic leader since 5 years. We create space-efficient,
                            eco-friendly hydroponic systems for homes and businesses.
                            Our focus is on resource efficiency, durability, and local food chain enhancement.
                        </p>
                    </div>
                    <div class="row g-3 mb-4" style="margin-top: -6%">
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" style="height:80%;" src="<?php echo e(asset('webSiteImages/Aboutusbellpepper.jpeg')); ?>" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h5>Our Vision</h5>
                            <p class="mb-0">
                                Greenic Exotics’ vision of a revolutionized better
                                future entails modern agriculture that promotes
                                the welfare of all people and the environment. In addition,
                                Greenic Exotic aims to stabilize and promote sustainable
                                agriculture that will be equally affordable and available for all.
                            </p>
                        </div>
                        <div class="row g-0" style="margin-top: -8%">
                            <div class="col-sm-8">
                                <h5>Our Mission</h5>
                                <p class="mb-0">
                                    Greenic exotics’ mission is to build
                                    hydroponics systems at a low cost,
                                    support the local food chain by producing
                                    harmless products and change people’s thinking
                                    patterns through our products and services.
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <img class="img-fluid bg-white w-100" src="<?php echo e(asset('webSiteImages/Aboutusbellpepper2.jpeg')); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
</section>

    <!-- Products Start -->

                    
                    
                    
            

    <!-- Article Start -->
<section id="article">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="<?php echo e(asset('webSiteImages/article_new.jpg')); ?>" alt="">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <p class="fs-5 fw-medium fst-italic text-primary">Featured Acticle</p>
                        <h1 class="display-6">Smart Green Farm Concept</h1>
                    </div>
                    <p class="mb-4">
                        A smart, low-cost and efficient farming system is
                        proposed in this work. Good farm resources management
                        via recent technologies is pursued here in
                        this proposed work such as effective water usage,
                        decreasing human labor, and reducing efforts and errors
                        due to human carelessness.
                    </p>
                    
                    <a href="" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Article End -->
</section>

    <!-- Video Start -->
<section id="videos">
    <div class="container-fluid video my-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="py-5">
                        <h1 class="display-6 mb-4">Lankan Hydroponics <br>
                            <span class="text-white">For beginners</span></h1>
                        
                        <div class="row g-4 mb-5">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">part 1</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">part 2</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">part 3</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">part 4</span>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-light rounded-pill py-3 px-5" href="">Explore More</a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                        data-src="https://youtu.be/uGev7wbYO4M?si=NSdIyywV4PmQrSJG" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video End -->
</section>

    <!-- Video Modal Start -->
    
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        
                                <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="788.54" height="443" type="text/html" src="https://www.youtube.com/embed/jBVaTPg03JA?autoplay=1e&fs=1&iv_load_policy=1&showinfo=1&rel=0&cc_load_policy=1&start=0&end=0&origin=https://youtubeembedcode.com">
                                    <div>
                                        <small>
                                            <a href="https://youtubeembedcode.com/es/">youtubeembedcode.com/es/</a>
                                        </small>
                                    </div>
                                    <div>
                                        <small>
                                            <a href="https://sms-lån-utan-uc.se/">sms lån utan uc med betalningsanmärkningar</a>
                                        </small>
                                    </div>
                                </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Modal End -->


    <!-- Store Start -->
<section id="store">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Online Store</p>
                <h1 class="display-6">Most Popular Products In Our Store</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" style="min-height: 200px; min-width: 200px" src="<?php echo e(asset('webSiteImages/store-product-1.jpg')); ?>" alt="">
                        <div class="p-4">
                            <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h4 class="mb-3">Cherry tomato snow white seeds</h4>
                             <p>
                                High-quality indeterminate tomato seeds: >90% germination,
                                mid-early (70 days), for open ground and greenhouses.
                             </p>
                            
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" style="min-height: 365px; min-width: 200px" src="<?php echo e(asset('webSiteImages/store-product-2.jpg')); ?>" alt="">
                        <div class="p-4">
                            <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa -star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h4 class="mb-3">Basil red microgreens</h4>
                             <p>
                                Seeds quantity selectable : 1000/3000/5000 Germination rate > 80% 2023 seeds stock Dark green,
                                glossy leaves with purple vein and leaf margin.
                             </p>
                            
                        </div>
                         
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" style="min-height: 365px; min-width: 200px" src="<?php echo e(asset('webSiteImages/store-product-3.png')); ?>" alt="">
                        <div class="p-4">
                            <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h4 class="mb-3">Lavender</h4>
                             <p>
                                50 seeds germination rate > 85% Valuable
                                herb Stalks used as seasoning Stalks used as seasoning, flowers for tea and drinks.
                             </p>
                            
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                    
                    
                    <a href="<?php echo e(url('/items')); ?>" class="btn btn-primary rounded-pill py-3 px-5">View More Products</a>

                </div>
            </div>
        </div>
    </div>
    <!-- Store End -->
</section>

    <!-- Testimonial Start -->
<section id="feedback">
    <div class="container-fluid testimonial py-5 my-5">
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-white"></p>
                <h1 class="display-6">What our clients say about our products</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.5s">
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">I'm absolutely delighted with the hydroponic farm goods 
                        I purchased from this supplier. The quality of their products is unparalleled, and 
                        my plants have experienced remarkable growth and vitality. 
                        The nutrient solutions provided exceptional nourishment, 
                        leading to healthier and more abundant yields. 
                        The efficiency of their equipment and the user-friendly design made the setup process a breeze. 
                        What truly sets this supplier apart is their commitment to customer satisfaction. 
                        The responsive and knowledgeable customer service team answered all my queries, 
                        offering valuable insights and guidance. From the seamless ordering process to the prompt delivery, 
                        every aspect of my experience was positive. I highly recommend this hydroponic farm 
                        goods supplier to fellow enthusiasts for a reliable and rewarding cultivation journey.</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid flex-shrink-0" src="<?php echo e(asset('webSiteImages/customer.png')); ?>" alt="">
                        <div class="text-start ms-3">
                            <h5>Umesh Ranthnayaka</h5>
                            <span class="text-primary">Customer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">My experience with this hydroponic farm goods supplier has been nothing 
                        short of outstanding. The diverse range of high-quality products 
                        they offer has significantly enhanced my hydroponic farming endeavors. 
                        The nutrient solutions provided robust support to my plants, 
                        resulting in lush and vibrant growth. The equipment's durability and 
                        effectiveness exceeded my expectations, ensuring a hassle-free cultivation process. 
                        The prompt and secure delivery of my order showcased their commitment to customer satisfaction. 
                        Moreover, the informative resources and responsive customer support made navigating through their 
                        product range a pleasant experience. Choosing this supplier for my hydroponic 
                        needs has proven to be a game-changer, and I wholeheartedly recommend them for anyone seeking 
                        top-tier products and exceptional service.</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid flex-shrink-0" src="<?php echo e(asset('webSiteImages/customer.png')); ?>" alt="">
                        <div class="text-start ms-3">
                            <h5>Imesha Yapa</h5>
                            <span class="text-primary">Customer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">I am thrilled to share my positive experience with this hydroponic farm goods supplier. 
                        The comprehensive selection of products available catered perfectly to 
                        my diverse needs as a hydroponic enthusiast. The nutrient solutions provided 
                        optimal nourishment, resulting in robust and healthy plant growth. 
                        The attention to detail in the equipment's design and functionality showcased 
                        the supplier's commitment to excellence. From placing my order to the timely delivery, 
                        the entire process was seamless and efficient. The clear and concise 
                        instructions provided made setting up my hydroponic system a straightforward task. 
                        The exceptional customer service, characterized by responsiveness and expertise, 
                        added an extra layer of satisfaction to my overall experience. 
                        I wholeheartedly endorse this supplier to fellow hydroponic enthusiasts for 
                        their top-notch products and customer-centric approach.</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid flex-shrink-0" src="<?php echo e(asset('webSiteImages/customer.png')); ?>" alt="">
                        <div class="text-start ms-3">
                            <h5>Parami Basnayaka</h5>
                            <span class="text-primary">Customer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
</section>

    <!-- Contact Start -->
    <div class="container-xxl contact py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Contact Us</p>
                <h1 class="display-6">Contact us right now</h1>
            </div>
            <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-8">
                    <p class="text-center mb-5">
                        Our customer service team is ready to assist you with any queries that you might
                        have in regard to your order or our products. Adding the subject of your inquiry,
                        reference order number (if applicable), your customer number,
                        postcode and telephone number in the message will help us to process your query in a timely manner.
                    </p>
                    <div class="row g-5">
                        <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fa fa-envelope fa-2x text-white"></i>
                            </div>
                            <p class="mb-2">info@greenic.lk</p>
                            
                        </div>
                        <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.4s">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fa fa-phone fa-2x text-white"></i>
                            </div>
                            <p class="mb-2">+94711417152</p>
                            <p class="mb-0">Mon-Sun (9am – 5pm)</p>
                        </div>
                        <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fa fa-map-marker-alt fa-2x text-white"></i>
                            </div>
                            <p class="mb-2">40,Yatawatta</p>
                            <p class="mb-0">Matale.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $__env->startComponent('website.component.footer'); ?>
    <?php echo $__env->renderComponent(); ?>
<?php /**PATH D:\New folder\Final_Hydroponic_Farm\resources\views/webSite/index.blade.php ENDPATH**/ ?>