<?php include_once "views/client/layout/header.php" ?>
        <!-- slider -->
        <div class="tf-slideshow slider-effect-fade slider-skincare position-relative">
            <div dir="ltr" class="swiper tf-sw-slideshow" data-preview="1" data-tablet="1" data-mobile="1" data-centered="false" data-space="0" data-loop="true" data-auto-play="false" data-delay="2000" data-speed="1000">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" lazy="true">
                        <div class="wrap-slider">
                            <img class="lazyload" data-src="images/slider/skincare-slide1.jpg" src="images/slider/skincare-slide1.jpg" alt="skincare-slideshow-01" loading="lazy">
                            <div class="box-content text-center">
                                <div class="container">
                                    <h1 class="fade-item fade-item-1 text-white heading">Skincare Reimagined.</h1>
                                    <p class="fade-item fade-item-2 text-white">To deliver peak potency, minus the waste</p>
                                    <a href="shop-collection-sub.html" class="fade-item fade-item-3 tf-btn btn-light-icon animate-hover-btn btn-xl radius-3"><span>Shop collection</span><i class="icon icon-arrow-right"></i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="wrap-slider">
                            <img class="lazyload" data-src="images/slider/skincare-slide2.jpg" src="images/slider/skincare-slide2.jpg" alt="skincare-slideshow-02" loading="lazy">
                            <div class="box-content text-center">
                                <div class="container">
                                    <h1 class="fade-item fade-item-1 text-white heading">Beauty in Every Drop</h1>
                                    <p class="fade-item fade-item-2 text-white">Indulge in the luxury of flawless skin</p>
                                    <a href="shop-collection-sub.html" class="fade-item fade-item-3 tf-btn btn-light-icon animate-hover-btn btn-xl radius-3"><span>Shop collection</span><i class="icon icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="wrap-slider">
                            <img class="lazyload" data-src="images/slider/skincare-slide3.jpg" src="images/slider/skincare-slide3.jpg" alt="fashion-slideshow-03" loading="lazy">
                            <div class="box-content text-center">
                                <div class="container">
                                    <h1 class="fade-item fade-item-1 text-white">Skin Love, Unleashed</h1>
                                    <p class="fade-item fade-item-2 text-white">Experience the magic of self-care with our premium skincare</p>
                                    <a href="shop-collection-sub.html" class="fade-item fade-item-3 tf-btn btn-light-icon animate-hover-btn btn-xl radius-3"><span>Shop collection</span><i class="icon icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap-pagination sw-absolute-3">
                <div class="sw-dots style-2 dots-white sw-pagination-slider justify-content-center"></div>
            </div>
        </div>
        <!-- /slider -->
        <!-- Store -->
        <section class="flat-spacing-9 bg_grey-6 flat-spacing-26">
            <div class="container">
                <div class="flat-tab-store flat-animate-tab overflow-unset">
                    <ul class="widget-tab-3 d-flex justify-content-center flex-wrap wow fadeInUp" data-wow-delay="0s" role="tablist">
                        <li class="nav-tab-item" role="presentation">   
                            <a href="#essentials" class="active" data-bs-toggle="tab">Essentials</a>
                        </li>
                        <li class="nav-tab-item" role="presentation">
                            <a href="#gift_sets"  data-bs-toggle="tab">Gift Sets</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active show" id="essentials" role="tabpanel">
                            <div class="wrap-carousel">
                                <div dir="ltr" class="swiper tf-sw-product-sell-1" data-preview="4" data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="15" data-pagination="2" data-pagination-md="3" data-pagination-lg="3">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide" lazy="true">
                                            <div class="card-product style-skincare">
                                                <div class="card-product-wrapper">
                                                    <a href="product-detail.html" class="product-img">
                                                        <img class="lazyload img-product" data-src="images/products/skincare-1.jpg" src="images/products/skincare-1.jpg" alt="image-product">
                                                        <img class="lazyload img-hover" data-src="images/products/skincare-2.jpg" src="images/products/skincare-2.jpg" alt="image-product">
                                                    </a>
                                                    <div class="list-product-btn">
                                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                            <span class="icon icon-delete"></span>
                                                        </a>
                                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Add to Compare</span>
                                                            <span class="icon icon-check"></span>
                                                        </a>
                                                        <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-product-info text-center">
                                                    <a href="product-detail.html" class="title link">Natural Moisturizing Factors</a>
                                                    <span class="price">$32.00</span>
                                                    <div class="tf-size-list">
                                                        <span class="tf-size-list-item fw-6 radius-3">30ml</span>
                                                        <span class="tf-size-list-item fw-6 radius-3">60ml</span>
                                                    </div>
                                                    <div class="tf-product-btns">
                                                        <a href="#quick_add" data-bs-toggle="modal" class="tf-btn style-3 radius-3 btn-fill animate-hover-btn">Quick add</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" lazy="true">
                                            <div class="card-product style-skincare">
                                                <div class="card-product-wrapper">
                                                    <a href="product-detail.html" class="product-img">
                                                        <img class="lazyload img-product" data-src="images/products/skincare-3.jpg" src="images/products/skincare-3.jpg" alt="image-product">
                                                        <img class="lazyload img-hover" data-src="images/products/skincare-4.jpg" src="images/products/skincare-4.jpg" alt="image-product">
                                                    </a>
                                                    <div class="list-product-btn">
                                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                            <span class="icon icon-delete"></span>
                                                        </a>
                                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Add to Compare</span>
                                                            <span class="icon icon-check"></span>
                                                        </a>
                                                        <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-product-info text-center">
                                                    <a href="product-detail.html" class="title link">Anhydrous Solution Pore Serum</a>
                                                    <span class="price">From $65.00</span>
                                                    <div class="tf-size-list">
                                                        <span class="tf-size-list-item fw-6 radius-3">30ml</span>
                                                        <span class="tf-size-list-item fw-6 radius-3">60ml</span>
                                                    </div>
                                                    <div class="tf-product-btns">
                                                        <a href="#quick_add" data-bs-toggle="modal" class="tf-btn style-3 radius-3 btn-fill animate-hover-btn">Quick add</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" lazy="true">
                                            <div class="card-product style-skincare">
                                                <div class="card-product-wrapper">
                                                    <a href="product-detail.html" class="product-img">
                                                        <img class="lazyload img-product" data-src="images/products/skincare-5.jpg" src="images/products/skincare-5.jpg" alt="image-product">
                                                        <img class="lazyload img-hover" data-src="images/products/skincare-6.jpg" src="images/products/skincare-6.jpg" alt="image-product">
                                                    </a>
                                                    <div class="list-product-btn">
                                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                            <span class="icon icon-delete"></span>
                                                        </a>
                                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Add to Compare</span>
                                                            <span class="icon icon-check"></span>
                                                        </a>
                                                        <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-product-info text-center">
                                                    <a href="product-detail.html" class="title link">Serum for Hair Density</a>
                                                    <span class="price">$65.00</span>
                                                    <div class="tf-size-list">
                                                        <span class="tf-size-list-item fw-6 radius-3">40ml</span>
                                                        <span class="tf-size-list-item fw-6 radius-3">50ml</span>
                                                    </div>
                                                    <div class="tf-product-btns">
                                                        <a href="#quick_add" data-bs-toggle="modal" class="tf-btn style-3 radius-3 btn-fill animate-hover-btn">Quick add</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" lazy="true">
                                            <div class="card-product style-skincare">
                                                <div class="card-product-wrapper">
                                                    <a href="product-detail.html" class="product-img">
                                                        <img class="lazyload img-product" data-src="images/products/skincare-7.jpg" src="images/products/skincare-7.jpg" alt="image-product">
                                                        <img class="lazyload img-hover" data-src="images/products/skincare-8.jpg" src="images/products/skincare-8.jpg" alt="image-product">
                                                    </a>
                                                    <div class="list-product-btn">
                                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                            <span class="icon icon-delete"></span>
                                                        </a>
                                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Add to Compare</span>
                                                            <span class="icon icon-check"></span>
                                                        </a>
                                                        <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-product-info text-center">
                                                    <a href="product-detail.html" class="title link">Mini Confidence in a Cleanser</a>
                                                    <span class="price">$22.00</span>
                                                    <div class="tf-size-list">
                                                        <span class="tf-size-list-item fw-6 radius-3">50ml</span>
                                                        <span class="tf-size-list-item fw-6 radius-3">80ml</span>
                                                    </div>
                                                    <div class="tf-product-btns">
                                                        <a href="#quick_add" data-bs-toggle="modal" class="tf-btn style-3 radius-3 btn-fill animate-hover-btn">Quick add</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" lazy="true">
                                            <div class="card-product style-skincare">
                                                <div class="card-product-wrapper">
                                                    <a href="product-detail.html" class="product-img">
                                                        <img class="lazyload img-product" data-src="images/products/skincare-9.jpg" src="images/products/skincare-9.jpg" alt="image-product">
                                                        <img class="lazyload img-hover" data-src="images/products/skincare-10.jpg" src="images/products/skincare-10.jpg" alt="image-product">
                                                    </a>
                                                    <div class="list-product-btn">
                                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                            <span class="icon icon-delete"></span>
                                                        </a>
                                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Add to Compare</span>
                                                            <span class="icon icon-check"></span>
                                                        </a>
                                                        <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-product-info text-center">
                                                    <a href="product-detail.html" class="title link">Natural Moisturizing Factors</a>
                                                    <span class="price"><span class="fw-4 text-sale">$62.00</span> <span class="text_primary">$52.00</span></span>
                                                    <div class="tf-size-list">
                                                        <span class="tf-size-list-item fw-6 radius-3">50ml</span>
                                                        <span class="tf-size-list-item fw-6 radius-3">80ml</span>
                                                    </div>
                                                    <div class="tf-product-btns">
                                                        <a href="#quick_add" data-bs-toggle="modal" class="tf-btn style-3 radius-3 btn-fill animate-hover-btn">Quick add</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" lazy="true">
                                            <div class="card-product style-skincare">
                                                <div class="card-product-wrapper">
                                                    <a href="product-detail.html" class="product-img">
                                                        <img class="lazyload img-product" data-src="images/products/skincare-11.jpg" src="images/products/skincare-11.jpg" alt="image-product">
                                                        <img class="lazyload img-hover" data-src="images/products/skincare-12.jpg" src="images/products/skincare-12.jpg" alt="image-product">
                                                    </a>
                                                    <div class="list-product-btn">
                                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                            <span class="icon icon-delete"></span>
                                                        </a>
                                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Add to Compare</span>
                                                            <span class="icon icon-check"></span>
                                                        </a>
                                                        <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-product-info text-center">
                                                    <a href="product-detail.html" class="title link">Natural Moisturizing Factors</a>
                                                    <span class="price"><span class="fw-4 text-sale">$62.00</span> <span class="text_primary">$52.00</span></span>
                                                    <div class="tf-size-list">
                                                        <span class="tf-size-list-item fw-6 radius-3">50ml</span>
                                                        <span class="tf-size-list-item fw-6 radius-3">80ml</span>
                                                    </div>
                                                    <div class="tf-product-btns">
                                                        <a href="#quick_add" data-bs-toggle="modal" class="tf-btn style-3 radius-3 btn-fill animate-hover-btn">Quick add</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" lazy="true">
                                            <div class="card-product style-skincare">
                                                <div class="card-product-wrapper">
                                                    <a href="product-detail.html" class="product-img">
                                                        <img class="lazyload img-product" data-src="images/products/skincare-13.jpg" src="images/products/skincare-13.jpg" alt="image-product">
                                                        <img class="lazyload img-hover" data-src="images/products/skincare-14.jpg" src="images/products/skincare-14.jpg" alt="image-product">
                                                    </a>
                                                    <div class="list-product-btn">
                                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                            <span class="icon icon-delete"></span>
                                                        </a>
                                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Add to Compare</span>
                                                            <span class="icon icon-check"></span>
                                                        </a>
                                                        <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-product-info text-center">
                                                    <a href="product-detail.html" class="title link">Mini Skin Perfecting Exfoliant</a>
                                                    <span class="price">$65.00</span>
                                                    <div class="tf-size-list">
                                                        <span class="tf-size-list-item fw-6 radius-3">40ml</span>
                                                        <span class="tf-size-list-item fw-6 radius-3">50ml</span>
                                                    </div>
                                                    <div class="tf-product-btns">
                                                        <a href="#quick_add" data-bs-toggle="modal" class="tf-btn style-3 radius-3 btn-fill animate-hover-btn">Quick add</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" lazy="true">
                                            <div class="card-product style-skincare">
                                                <div class="card-product-wrapper">
                                                    <a href="product-detail.html" class="product-img">
                                                        <img class="lazyload img-product" data-src="images/products/skincare-15.jpg" src="images/products/skincare-15.jpg" alt="image-product">
                                                        <img class="lazyload img-hover" data-src="images/products/skincare-16.jpg" src="images/products/skincare-16.jpg" alt="image-product">
                                                    </a>
                                                    <div class="list-product-btn">
                                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                            <span class="icon icon-delete"></span>
                                                        </a>
                                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Add to Compare</span>
                                                            <span class="icon icon-check"></span>
                                                        </a>
                                                        <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-product-info text-center">
                                                    <a href="product-detail.html" class="title link">Mini Skin Perfecting Exfoliant</a>
                                                    <span class="price">$65.00</span>
                                                    <div class="tf-size-list">
                                                        <span class="tf-size-list-item fw-6 radius-3">40ml</span>
                                                        <span class="tf-size-list-item fw-6 radius-3">50ml</span>
                                                    </div>
                                                    <div class="tf-product-btns">
                                                        <a href="#quick_add" data-bs-toggle="modal" class="tf-btn style-3 radius-3 btn-fill animate-hover-btn">Quick add</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-sw style-not-line nav-next-slider nav-next-sell-1 box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
                                <div class="nav-sw style-not-line nav-prev-slider nav-prev-sell-1 box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
                                <div class="sw-dots style-2 sw-pagination-sell-1 justify-content-center"></div>
                            </div>
                        </div>
                        <div class="tab-pane" id="gift_sets" role="tabpanel">
                            <div class="wrap-carousel">
                                <div dir="ltr" class="swiper tf-sw-product-sell" data-preview="4" data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="15" data-pagination="2" data-pagination-md="3" data-pagination-lg="3">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide" lazy="true">
                                            <div class="card-product style-skincare">
                                                <div class="card-product-wrapper">
                                                    <a href="product-detail.html" class="product-img">
                                                        <img class="lazyload img-product" data-src="images/products/skincare-1.jpg" src="images/products/skincare-1.jpg" alt="image-product">
                                                        <img class="lazyload img-hover" data-src="images/products/skincare-2.jpg" src="images/products/skincare-2.jpg" alt="image-product">
                                                    </a>
                                                    <div class="list-product-btn">
                                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                            <span class="icon icon-delete"></span>
                                                        </a>
                                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Add to Compare</span>
                                                            <span class="icon icon-check"></span>
                                                        </a>
                                                        <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-product-info text-center">
                                                    <a href="product-detail.html" class="title link">Natural Moisturizing Factors</a>
                                                    <span class="price">$32.00</span>
                                                    <div class="tf-size-list">
                                                        <span class="tf-size-list-item fw-6 radius-3">30ml</span>
                                                        <span class="tf-size-list-item fw-6 radius-3">60ml</span>
                                                    </div>
                                                    <div class="tf-product-btns">
                                                        <a href="#quick_add" data-bs-toggle="modal" class="tf-btn style-3 radius-3 btn-fill animate-hover-btn">Quick add</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" lazy="true">
                                            <div class="card-product style-skincare">
                                                <div class="card-product-wrapper">
                                                    <a href="product-detail.html" class="product-img">
                                                        <img class="lazyload img-product" data-src="images/products/skincare-3.jpg" src="images/products/skincare-3.jpg" alt="image-product">
                                                        <img class="lazyload img-hover" data-src="images/products/skincare-4.jpg" src="images/products/skincare-4.jpg" alt="image-product">
                                                    </a>
                                                    <div class="list-product-btn">
                                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                            <span class="icon icon-delete"></span>
                                                        </a>
                                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Add to Compare</span>
                                                            <span class="icon icon-check"></span>
                                                        </a>
                                                        <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-product-info text-center">
                                                    <a href="product-detail.html" class="title link">Anhydrous Solution Pore Serum</a>
                                                    <span class="price">From $65.00</span>
                                                    <div class="tf-size-list">
                                                        <span class="tf-size-list-item fw-6 radius-3">30ml</span>
                                                        <span class="tf-size-list-item fw-6 radius-3">60ml</span>
                                                    </div>
                                                    <div class="tf-product-btns">
                                                        <a href="#quick_add" data-bs-toggle="modal" class="tf-btn style-3 radius-3 btn-fill animate-hover-btn">Quick add</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" lazy="true">
                                            <div class="card-product style-skincare">
                                                <div class="card-product-wrapper">
                                                    <a href="product-detail.html" class="product-img">
                                                        <img class="lazyload img-product" data-src="images/products/skincare-5.jpg" src="images/products/skincare-5.jpg" alt="image-product">
                                                        <img class="lazyload img-hover" data-src="images/products/skincare-6.jpg" src="images/products/skincare-6.jpg" alt="image-product">
                                                    </a>
                                                    <div class="list-product-btn">
                                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                            <span class="icon icon-delete"></span>
                                                        </a>
                                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Add to Compare</span>
                                                            <span class="icon icon-check"></span>
                                                        </a>
                                                        <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-product-info text-center">
                                                    <a href="product-detail.html" class="title link">Serum for Hair Density</a>
                                                    <span class="price">$65.00</span>
                                                    <div class="tf-size-list">
                                                        <span class="tf-size-list-item fw-6 radius-3">40ml</span>
                                                        <span class="tf-size-list-item fw-6 radius-3">50ml</span>
                                                    </div>
                                                    <div class="tf-product-btns">
                                                        <a href="#quick_add" data-bs-toggle="modal" class="tf-btn style-3 radius-3 btn-fill animate-hover-btn">Quick add</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" lazy="true">
                                            <div class="card-product style-skincare">
                                                <div class="card-product-wrapper">
                                                    <a href="product-detail.html" class="product-img">
                                                        <img class="lazyload img-product" data-src="images/products/skincare-7.jpg" src="images/products/skincare-7.jpg" alt="image-product">
                                                        <img class="lazyload img-hover" data-src="images/products/skincare-8.jpg" src="images/products/skincare-8.jpg" alt="image-product">
                                                    </a>
                                                    <div class="list-product-btn">
                                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                            <span class="icon icon-delete"></span>
                                                        </a>
                                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Add to Compare</span>
                                                            <span class="icon icon-check"></span>
                                                        </a>
                                                        <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-product-info text-center">
                                                    <a href="product-detail.html" class="title link">Mini Confidence in a Cleanser</a>
                                                    <span class="price">$22.00</span>
                                                    <div class="tf-size-list">
                                                        <span class="tf-size-list-item fw-6 radius-3">50ml</span>
                                                        <span class="tf-size-list-item fw-6 radius-3">80ml</span>
                                                    </div>
                                                    <div class="tf-product-btns">
                                                        <a href="#quick_add" data-bs-toggle="modal" class="tf-btn style-3 radius-3 btn-fill animate-hover-btn">Quick add</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" lazy="true">
                                            <div class="card-product style-skincare">
                                                <div class="card-product-wrapper">
                                                    <a href="product-detail.html" class="product-img">
                                                        <img class="lazyload img-product" data-src="images/products/skincare-9.jpg" src="images/products/skincare-9.jpg" alt="image-product">
                                                        <img class="lazyload img-hover" data-src="images/products/skincare-10.jpg" src="images/products/skincare-10.jpg" alt="image-product">
                                                    </a>
                                                    <div class="list-product-btn">
                                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                            <span class="icon icon-delete"></span>
                                                        </a>
                                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Add to Compare</span>
                                                            <span class="icon icon-check"></span>
                                                        </a>
                                                        <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-product-info text-center">
                                                    <a href="product-detail.html" class="title link">Natural Moisturizing Factors</a>
                                                    <span class="price"><span class="fw-4 text-sale">$62.00</span> <span class="text_primary">$52.00</span></span>
                                                    <div class="tf-size-list">
                                                        <span class="tf-size-list-item fw-6 radius-3">50ml</span>
                                                        <span class="tf-size-list-item fw-6 radius-3">80ml</span>
                                                    </div>
                                                    <div class="tf-product-btns">
                                                        <a href="#quick_add" data-bs-toggle="modal" class="tf-btn style-3 radius-3 btn-fill animate-hover-btn">Quick add</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" lazy="true">
                                            <div class="card-product style-skincare">
                                                <div class="card-product-wrapper">
                                                    <a href="product-detail.html" class="product-img">
                                                        <img class="lazyload img-product" data-src="images/products/skincare-11.jpg" src="images/products/skincare-11.jpg" alt="image-product">
                                                        <img class="lazyload img-hover" data-src="images/products/skincare-12.jpg" src="images/products/skincare-12.jpg" alt="image-product">
                                                    </a>
                                                    <div class="list-product-btn">
                                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                            <span class="icon icon-delete"></span>
                                                        </a>
                                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Add to Compare</span>
                                                            <span class="icon icon-check"></span>
                                                        </a>
                                                        <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-product-info text-center">
                                                    <a href="product-detail.html" class="title link">Natural Moisturizing Factors</a>
                                                    <span class="price"><span class="fw-4 text-sale">$62.00</span> <span class="text_primary">$52.00</span></span>
                                                    <div class="tf-size-list">
                                                        <span class="tf-size-list-item fw-6 radius-3">50ml</span>
                                                        <span class="tf-size-list-item fw-6 radius-3">80ml</span>
                                                    </div>
                                                    <div class="tf-product-btns">
                                                        <a href="#quick_add" data-bs-toggle="modal" class="tf-btn style-3 radius-3 btn-fill animate-hover-btn">Quick add</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" lazy="true">
                                            <div class="card-product style-skincare">
                                                <div class="card-product-wrapper">
                                                    <a href="product-detail.html" class="product-img">
                                                        <img class="lazyload img-product" data-src="images/products/skincare-13.jpg" src="images/products/skincare-13.jpg" alt="image-product">
                                                        <img class="lazyload img-hover" data-src="images/products/skincare-14.jpg" src="images/products/skincare-14.jpg" alt="image-product">
                                                    </a>
                                                    <div class="list-product-btn">
                                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                            <span class="icon icon-delete"></span>
                                                        </a>
                                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Add to Compare</span>
                                                            <span class="icon icon-check"></span>
                                                        </a>
                                                        <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-product-info text-center">
                                                    <a href="product-detail.html" class="title link">Mini Skin Perfecting Exfoliant</a>
                                                    <span class="price">$65.00</span>
                                                    <div class="tf-size-list">
                                                        <span class="tf-size-list-item fw-6 radius-3">40ml</span>
                                                        <span class="tf-size-list-item fw-6 radius-3">50ml</span>
                                                    </div>
                                                    <div class="tf-product-btns">
                                                        <a href="#quick_add" data-bs-toggle="modal" class="tf-btn style-3 radius-3 btn-fill animate-hover-btn">Quick add</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" lazy="true">
                                            <div class="card-product style-skincare">
                                                <div class="card-product-wrapper">
                                                    <a href="product-detail.html" class="product-img">
                                                        <img class="lazyload img-product" data-src="images/products/skincare-15.jpg" src="images/products/skincare-15.jpg" alt="image-product">
                                                        <img class="lazyload img-hover" data-src="images/products/skincare-16.jpg" src="images/products/skincare-16.jpg" alt="image-product">
                                                    </a>
                                                    <div class="list-product-btn">
                                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                            <span class="icon icon-delete"></span>
                                                        </a>
                                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Add to Compare</span>
                                                            <span class="icon icon-check"></span>
                                                        </a>
                                                        <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-product-info text-center">
                                                    <a href="product-detail.html" class="title link">Mini Skin Perfecting Exfoliant</a>
                                                    <span class="price">$65.00</span>
                                                    <div class="tf-size-list">
                                                        <span class="tf-size-list-item fw-6 radius-3">40ml</span>
                                                        <span class="tf-size-list-item fw-6 radius-3">50ml</span>
                                                    </div>
                                                    <div class="tf-product-btns">
                                                        <a href="#quick_add" data-bs-toggle="modal" class="tf-btn style-3 radius-3 btn-fill animate-hover-btn">Quick add</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-sw nav-next-slider nav-next-product box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
                                <div class="nav-sw nav-prev-slider nav-prev-product box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
                                <div class="sw-dots style-2 sw-pagination-product justify-content-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Store -->
        <!-- Banner collection -->
        <section class="tf-slideshow slider-video position-relative">
            <div class="banner-wrapper">
                <img class="lazyload" src="images/collections/banner-collection-1.jpg" data-src="images/collections/banner-collection-1.jpg" src="images/collections/banner-collection-1.jpg" alt="image-collection">
                <div class="box-content text-center">
                    <div class="container">
                        <p class="subheading text-white fw-7">ULTRA-PREMIUM SILK</p>
                        <h1 class="heading text-white">Silk Blouses Shirts</h1>
                        <p class="description text-white">Shop our luxury silk button-up blouses made with ultra-soft, washable silk.</p>
                        <div class="wow fadeInUp" data-wow-delay="0s">
                            <a href="shop-collection-sub.html" class="tf-btn btn-md btn-light-icon btn-icon radius-3 animate-hover-btn"><span>Shop collection</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- /Banner collection -->
        <!-- Marquee -->
        <div class="tf-marquee marquee-sm bg_dark">
            <div class="wrap-marquee speed-1">
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none"><path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="white"></path></svg>
                    </div>
                    <p class="text text-white text-uppercase fw-6">LIMITED TIME OFFER: FASHION SALE YOU CAN'T RESIST</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none"><path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="white"></path></svg>
                    </div>
                    <p class="text text-white text-uppercase fw-6">FREE SHIPPING AND RETURN</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none"><path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="white"></path></svg>
                    </div>
                    <p class="text text-white text-uppercase fw-6">NEW SEASON, NEW STYLES: FASHION SALE YOU CAN'T MISS</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none"><path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="white"></path></svg>
                    </div>
                    <p class="text text-white text-uppercase fw-6">LIMITED TIME OFFER: FASHION SALE YOU CAN'T RESIST</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none"><path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="white"></path></svg>
                    </div>
                    <p class="text text-white text-uppercase fw-6">FREE SHIPPING AND RETURN</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none"><path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="white"></path></svg>
                    </div>
                    <p class="text text-white text-uppercase fw-6">NEW SEASON, NEW STYLES: FASHION SALE YOU CAN'T MISS</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none"><path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="white"></path></svg>
                    </div>
                    <p class="text text-white text-uppercase fw-6">LIMITED TIME OFFER: FASHION SALE YOU CAN'T RESIST</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none"><path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="white"></path></svg>
                    </div>
                    <p class="text text-white text-uppercase fw-6">FREE SHIPPING AND RETURN</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none"><path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="white"></path></svg>
                    </div>
                    <p class="text text-white text-uppercase fw-6">NEW SEASON, NEW STYLES: FASHION SALE YOU CAN'T MISS</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none"><path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="white"></path></svg>
                    </div>
                    <p class="text text-white text-uppercase fw-6">LIMITED TIME OFFER: FASHION SALE YOU CAN'T RESIST</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none"><path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="white"></path></svg>
                    </div>
                    <p class="text text-white text-uppercase fw-6">FREE SHIPPING AND RETURN</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none"><path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="white"></path></svg>
                    </div>
                    <p class="text text-white text-uppercase fw-6">NEW SEASON, NEW STYLES: FASHION SALE YOU CAN'T MISS</p>
                </div>
            </div>
        </div>
        <!-- /Marquee -->
        <!-- video-text -->
        <section class="flat-spacing-9">
            <div class="container">
                <div class="tf-grid-layout md-col-2 tf-img-video-text">
                    <div class="content-wrap bg_orange radius-20">
                        <div class="heading text-white wow fadeInUp" data-wow-delay="0s">How to Use</div>
                        <p class="text-white fs-16 wow fadeInUp" data-wow-delay="0s">EASY USE WITH 4 STEPS</p>
                        <ul>
                            <li>
                                <div class="number text-white">1</div>
                                <div class="text text-white">Unscrew cap of 4EVERBTL™ and fill with water. Screw cap back on.</div>
                            </li>
                            <li>
                                <div class="number text-white">2</div>
                                <div class="text text-white">Peel-off one blister individual seal and place tablet in the palm of your hand.</div>
                            </li>
                            <li>
                                <div class="number text-white">3</div>
                                <div class="text text-white">Add 3-8 drops of water and mix until tablet is fully dissolved.</div>
                            </li>
                            <li>
                                <div class="number text-white">4</div>
                                <div class="text text-white">Apply on clean skin like any liquid serum!</div>
                            </li>
                        </ul>
                    </div>
                    <div class="video-wrap">
                        <video class="radius-20" src="images/slider/video-1.mp4" playsinline metadata controls></video>
                    </div>
                </div>
            </div>
        </section>
        <!-- /video-text -->
        <!-- Store -->
        <section class="flat-spacing-9">
            <div class="container">
                <div class="flat-tab-store flat-animate-tab overflow-unset">
                    <ul class="widget-tab-3 d-flex justify-content-center flex-wrap" role="tablist">
                        <li class="nav-tab-item" role="presentation">   
                            <a href="#organic" class="active" data-bs-toggle="tab">Organic Ingredients</a>
                        </li>
                        <li class="nav-tab-item" role="presentation">
                            <a href="#cruelty"  data-bs-toggle="tab">Cruelty-Free</a>
                        </li>
                        <li class="nav-tab-item" role="presentation">
                            <a href="#sustainable"  data-bs-toggle="tab">Sustainable</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active show" id="organic" role="tabpanel">
                            <div class="widget-card-store radius-20 overflow-hidden type-1 align-items-center tf-grid-layout md-col-2">
                                <div class="store-img">
                                    <img class="lazyload" data-src="images/shop/store/ourstore4.jpg" src="images/shop/store/ourstore4.jpg" alt="store-img">
                                </div>
                                <div class="store-item-info text-center">
                                    <h5 class="store-heading text-white">Organic Ingredients</h5>
                                    <div class="description">
                                        <p class="text-white">Use certified organic ingredients to assure consumers that the product is free from synthetic <br> pesticides and fertilizers.</p>
                                    </div>
                                    <div class="wow fadeInUp" data-wow-delay="0s">
                                        <a href="shop-collection-list.html" class="tf-btn btn-md btn-light-icon btn-icon radius-3 animate-hover-btn"><span>Shop collection</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="cruelty" role="tabpanel">
                            <div class="widget-card-store radius-20 overflow-hidden type-1 align-items-center tf-grid-layout md-col-2">
                                <div class="store-img">
                                    <img class="lazyload" data-src="images/shop/store/ourstore5.jpg" src="images/shop/store/ourstore5.jpg" alt="store-img">
                                </div>
                                <div class="store-item-info text-center">
                                    <h5 class="store-heading text-white">Our Verified Cruelty-Free</h5>
                                    <div class="description">
                                        <p class="text-white">Get full-size, verified cruelty-free and vegan products in every box! We work directly with <br> brands to bring you huge discounts.</p>
                                    </div>
                                    <div class="wow fadeInUp" data-wow-delay="0s">
                                        <a href="shop-collection-list.html" class="tf-btn btn-md btn-light-icon btn-icon radius-3 animate-hover-btn"><span>Shop collection</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="sustainable" role="tabpanel">
                            <div class="widget-card-store radius-20 overflow-hidden type-1 align-items-center tf-grid-layout md-col-2">
                                <div class="store-img">
                                    <img class="lazyload" data-src="images/shop/store/ourstore6.jpg" src="images/shop/store/ourstore6.jpg" alt="store-img">
                                </div>
                                <div class="store-item-info text-center">
                                    <h5 class="store-heading text-white">Sustainable expansion</h5>
                                    <div class="description">
                                        <p class="text-white">With steadily increasing demand, the authors suggest that a major opportunity exists for <br> environmentally and socially sustainable expansion</p>
                                    </div>
                                    <div class="wow fadeInUp" data-wow-delay="0s">
                                        <a href="shop-collection-list.html" class="tf-btn btn-md btn-light-icon btn-icon radius-3 animate-hover-btn"><span>Shop collection</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Store -->
        <!-- featured -->
        <section class="flat-spacing-9 bg_grey-6">
            <div class="container">
                <div class="flat-title wow fadeInUp" data-wow-delay="0s">
                    <span class="title">Exclusive Kits</span>
                </div>
                <div class="wrap-carousel">
                    <div dir="ltr" class="swiper tf-sw-recent" data-preview="4" data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="15" data-space="15" data-pagination="2" data-pagination-md="3" data-pagination-lg="3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" lazy="true">
                                <div class="card-product style-skincare">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/skincare-1.jpg" src="images/products/skincare-1.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/skincare-2.jpg" src="images/products/skincare-2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info text-center">
                                        <a href="product-detail.html" class="title link">Natural Moisturizing Factors</a>
                                        <span class="price">$32.00</span>
                                        <div class="tf-size-list">
                                            <span class="tf-size-list-item fw-6 radius-3">30ml</span>
                                            <span class="tf-size-list-item fw-6 radius-3">60ml</span>
                                        </div>
                                        <div class="tf-product-btns">
                                            <a href="#quick_add" data-bs-toggle="modal" class="tf-btn style-3 radius-3 btn-fill animate-hover-btn">Quick add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="card-product style-skincare">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/skincare-3.jpg" src="images/products/skincare-3.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/skincare-4.jpg" src="images/products/skincare-4.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info text-center">
                                        <a href="product-detail.html" class="title link">Anhydrous Solution Pore Serum</a>
                                        <span class="price">From $65.00</span>
                                        <div class="tf-size-list">
                                            <span class="tf-size-list-item fw-6 radius-3">30ml</span>
                                            <span class="tf-size-list-item fw-6 radius-3">60ml</span>
                                        </div>
                                        <div class="tf-product-btns">
                                            <a href="#quick_add" data-bs-toggle="modal" class="tf-btn style-3 radius-3 btn-fill animate-hover-btn">Quick add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="card-product style-skincare">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/skincare-5.jpg" src="images/products/skincare-5.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/skincare-6.jpg" src="images/products/skincare-6.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info text-center">
                                        <a href="product-detail.html" class="title link">Serum for Hair Density</a>
                                        <span class="price">$65.00</span>
                                        <div class="tf-size-list">
                                            <span class="tf-size-list-item fw-6 radius-3">40ml</span>
                                            <span class="tf-size-list-item fw-6 radius-3">50ml</span>
                                        </div>
                                        <div class="tf-product-btns">
                                            <a href="#quick_add" data-bs-toggle="modal" class="tf-btn style-3 radius-3 btn-fill animate-hover-btn">Quick add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="card-product style-skincare">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/skincare-7.jpg" src="images/products/skincare-7.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/skincare-8.jpg" src="images/products/skincare-8.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info text-center">
                                        <a href="product-detail.html" class="title link">Mini Confidence in a Cleanser</a>
                                        <span class="price">$22.00</span>
                                        <div class="tf-size-list">
                                            <span class="tf-size-list-item fw-6 radius-3">50ml</span>
                                            <span class="tf-size-list-item fw-6 radius-3">80ml</span>
                                        </div>
                                        <div class="tf-product-btns">
                                            <a href="#quick_add" data-bs-toggle="modal" class="tf-btn style-3 radius-3 btn-fill animate-hover-btn">Quick add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="card-product style-skincare">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/skincare-9.jpg" src="images/products/skincare-9.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/skincare-10.jpg" src="images/products/skincare-10.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info text-center">
                                        <a href="product-detail.html" class="title link">Natural Moisturizing Factors</a>
                                        <span class="price"><span class="fw-4 text-sale">$62.00</span> <span class="text_primary">$52.00</span></span>
                                        <div class="tf-size-list">
                                            <span class="tf-size-list-item fw-6 radius-3">50ml</span>
                                            <span class="tf-size-list-item fw-6 radius-3">80ml</span>
                                        </div>
                                        <div class="tf-product-btns">
                                            <a href="#quick_add" data-bs-toggle="modal" class="tf-btn style-3 radius-3 btn-fill animate-hover-btn">Quick add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="card-product style-skincare">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/skincare-11.jpg" src="images/products/skincare-11.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/skincare-12.jpg" src="images/products/skincare-12.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info text-center">
                                        <a href="product-detail.html" class="title link">Natural Moisturizing Factors</a>
                                        <span class="price"><span class="fw-4 text-sale">$62.00</span> <span class="text_primary">$52.00</span></span>
                                        <div class="tf-size-list">
                                            <span class="tf-size-list-item fw-6 radius-3">50ml</span>
                                            <span class="tf-size-list-item fw-6 radius-3">80ml</span>
                                        </div>
                                        <div class="tf-product-btns">
                                            <a href="#quick_add" data-bs-toggle="modal" class="tf-btn style-3 radius-3 btn-fill animate-hover-btn">Quick add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="card-product style-skincare">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/skincare-13.jpg" src="images/products/skincare-13.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/skincare-14.jpg" src="images/products/skincare-14.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info text-center">
                                        <a href="product-detail.html" class="title link">Mini Skin Perfecting Exfoliant</a>
                                        <span class="price">$65.00</span>
                                        <div class="tf-size-list">
                                            <span class="tf-size-list-item fw-6 radius-3">40ml</span>
                                            <span class="tf-size-list-item fw-6 radius-3">50ml</span>
                                        </div>
                                        <div class="tf-product-btns">
                                            <a href="#quick_add" data-bs-toggle="modal" class="tf-btn style-3 radius-3 btn-fill animate-hover-btn">Quick add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="card-product style-skincare">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/skincare-15.jpg" src="images/products/skincare-15.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/skincare-16.jpg" src="images/products/skincare-16.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info text-center">
                                        <a href="product-detail.html" class="title link">Mini Skin Perfecting Exfoliant</a>
                                        <span class="price">$65.00</span>
                                        <div class="tf-size-list">
                                            <span class="tf-size-list-item fw-6 radius-3">40ml</span>
                                            <span class="tf-size-list-item fw-6 radius-3">50ml</span>
                                        </div>
                                        <div class="tf-product-btns">
                                            <a href="#quick_add" data-bs-toggle="modal" class="tf-btn style-3 radius-3 btn-fill animate-hover-btn">Quick add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-sw style-not-line nav-next-slider nav-next-recent box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
                    <div class="nav-sw style-not-line nav-prev-slider nav-prev-recent box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
                    <div class="sw-dots style-2 sw-pagination-recent justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /featured -->
        <!-- Testimonial -->
        <section class="flat-spacing-12">
            <div class="container">
                <div class="wrapper-thumbs-testimonial-v2 type-1 flat-thumbs-testimonial">
                    <div class="box-left wow fadeInUp" data-wow-delay="0s">
                        <div dir="ltr" class="swiper tf-sw-tes-2" data-preview="1" data-space-lg="40" data-space-md="30">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-item lg lg-2">
                                        <div class="icon">
                                            <img class="lazyload" data-src="images/item/quote.svg" alt="img" src="images/item/quote.svg">
                                        </div>
                                        <div class="heading fs-12 mb_18">OUR CUSTOMER'S REVIEWS</div>
                                        <div class="rating">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        </div>
                                        <p class="text">
                                            Love love love! This product is so easy to use!   I absolutely love the Alpha Arbutin product.  It has made such a difference with my hyperpigmentation spots!  I feel so much more confident without makeup on where as before I would never leave the house
                                        </p>
                                        <div class="author box-author">
                                            <div class="box-img d-md-none rounded-0">
                                                <img class="lazyload img-product" data-src="images/slider/te4.jpg" src="images/slider/te4.jpg" alt="image-product">
                                            </div>
                                            <div class="content">
                                                <div class="name">Robert smith</div>
                                                <a href="product-detail.html" class="metas link">Purchase item : <span>100% Organic Cold-Pressed Oil</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item lg lg-2">
                                        <div class="icon">
                                            <img class="lazyload" data-src="images/item/quote.svg" alt="" src="images/item/quote.svg">
                                        </div>
                                        <div class="heading fs-12 mb_18">PEOPLE ARE TALKING</div>
                                        <div class="rating">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        </div>
                                        <p class="text">
                                            "The shipping is always fast and the customer service team is friendly and helpful. I highly recommend this site to anyone looking for affordable clothing."
                                        </p>
                                        <div class="author box-author">
                                            <div class="box-img d-md-none rounded-0">
                                                <img class="lazyload img-product" data-src="images/slider/te6.jpg" src="images/slider/te6.jpg" alt="image-product">
                                            </div>
                                            <div class="content">
                                                <div class="name">Jenifer Unix</div>
                                                <a href="product-detail.html" class="metas link">Purchase item : <span> Sweetheart-neckline Top</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex d-none box-sw-navigation">
                            <div class="nav-sw nav-next-slider nav-next-tes-2"><span class="icon icon-arrow-left"></span></div>
                            <div class="nav-sw nav-prev-slider nav-prev-tes-2"><span class="icon icon-arrow-right"></span></div>
                        </div>
                        <div class="d-md-none sw-dots style-2 sw-pagination-tes-2"></div>
                    </div>
                    <div class="box-right wow fadeInUp" data-wow-delay="0s">
                        <div dir="ltr" class="swiper tf-thumb-tes" data-preview="1" data-space="30">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="grid-img-group style-ter-1">
                                        <div class="box-img item-1 hover-img">
                                            <div class="img-style">
                                                <img class="lazyload" data-src="images/slider/te8.jpg" src="images/slider/te8.jpg" alt="img-slider">
                                            </div>
                                        </div>
                                        <div class="box-img item-2 hover-img">
                                            <div class="img-style">
                                                <img class="lazyload" data-src="images/slider/te7.jpg" src="images/slider/te7.jpg" alt="img-slider">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="grid-img-group style-ter-1">
                                        <div class="box-img item-1 hover-img">
                                            <div class="img-style">
                                                <img class="lazyload" data-src="images/slider/te10.jpg" src="images/slider/te10.jpg" alt="img-slider">
                                            </div>
                                        </div>
                                        <div class="box-img item-2 hover-img">
                                            <div class="img-style">
                                                <img class="lazyload" data-src="images/slider/te9.jpg" src="images/slider/te9.jpg" alt="img-slider">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Testimonial -->
        <!-- testimonials-before-after -->
        <section class="flat-spacing-3 pb_0">
            <div class="container">
                <div class="flat-title wow fadeInUp" data-wow-delay="0s">
                    <span class="title">Before and after use our products</span>
                    <p class="sub-title">Witness the transformative power of our skincare solutions as they unveil a radiant new you</p>
                </div>
                <div id="image-compare" class="wow fadeInUp" data-wow-delay="0s">
                    <img class="lazyload" data-src="images/shop/file/skincare_before.jpg" src="images/shop/file/skincare_before.jpg" alt="" />
                    <img class="lazyload" data-src="images/shop/file/skincare_after.jpg" src="images/shop/file/skincare_after.jpg" alt="" />
                </div>
            </div>
        </section>
        <!-- /testimonials-before-after -->
        <!-- Icon box -->
        <section class="flat-spacing-1 flat-iconbox">
            <div class="container">
                <div class="wrap-carousel wrap-mobile wow fadeInUp" data-wow-delay="0s">
                    <div dir="ltr" class="swiper tf-sw-mobile" data-preview="1" data-space="15">
                        <div class="swiper-wrapper wrap-iconbox">
                            <div class="swiper-slide">
                                <div class="tf-icon-box style-row">
                                    <div class="icon">
                                        <i class="icon-shipping"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title fw-4">Free Shipping</div>
                                        <p>Free shipping over order $120</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tf-icon-box style-row">
                                    <div class="icon">
                                        <i class="icon-payment fs-22"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title fw-4">Flexible Payment</div>
                                        <p>Pay with Multiple Credit Cards</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tf-icon-box style-row">
                                    <div class="icon">
                                        <i class="icon-return fs-20"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title fw-4">14 Day Returns</div>
                                        <p>Within 30 days for an exchange</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tf-icon-box style-row">
                                    <div class="icon">
                                        <i class="icon-suport"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title fw-4">Premium Support</div>
                                        <p>Outstanding premium support</p>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                    <div class="sw-dots style-2 sw-pagination-mb justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Icon box -->
        <div class="container"><div class="line"></div></div>
        <!-- Shop Gram -->
        <section class="flat-spacing-1">
            <div class="container">
                <div class="flat-title wow fadeInUp" data-wow-delay="0s">
                    <span class="title">Shop Gram</span>
                    <p class="sub-title">Inspire and let yourself be inspired, from one unique fashion to another.</p>
                </div>
                <div class="wrap-carousel wrap-shop-gram">
                    <div dir="ltr" class="swiper tf-sw-shop-gallery" data-preview="5" data-tablet="3" data-mobile="2" data-space-lg="7" data-space-md="7">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img wow fadeInUp" data-wow-delay="0s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="images/shop/gallery/gallery-9.jpg" src="images/shop/gallery/gallery-9.jpg" alt="image-gallery">
                                </div>
                                <a href="#quick_add" data-bs-toggle="modal" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">Quick Add</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".1s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="images/shop/gallery/gallery-10.jpg" src="images/shop/gallery/gallery-10.jpg" alt="image-gallery">
                                </div>
                                <a href="#quick_add" data-bs-toggle="modal" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">Quick Add</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".2s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="images/shop/gallery/gallery-11.jpg" src="images/shop/gallery/gallery-11.jpg" alt="image-gallery">
                                </div>
                                <a href="#quick_add" data-bs-toggle="modal" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">Quick Add</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".3s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="images/shop/gallery/gallery-12.jpg" src="images/shop/gallery/gallery-12.jpg" alt="image-gallery">
                                </div>
                                <a href="product-detail.html" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">View product</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".4s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="images/shop/gallery/gallery-13.jpg" src="images/shop/gallery/gallery-13.jpg" alt="image-gallery">
                                </div>
                                <a href="product-detail.html" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">View product</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".4s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="images/shop/gallery/gallery-14.jpg" src="images/shop/gallery/gallery-14.jpg" alt="image-gallery">
                                </div>
                                <a href="product-detail.html" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">View product</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".4s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="images/shop/gallery/gallery-15.jpg" src="images/shop/gallery/gallery-15.jpg" alt="image-gallery">
                                </div>
                                <a href="product-detail.html" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">View product</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".4s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="images/shop/gallery/gallery-16.jpg" src="images/shop/gallery/gallery-16.jpg" alt="image-gallery">
                                </div>
                                <a href="product-detail.html" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">View product</span></a>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="sw-dots sw-pagination-gallery justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Shop Gram -->
        <!-- footer -->
        <?php include_once "views/client/layout/footer.php" ?>