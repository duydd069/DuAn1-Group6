<?php 
include 'views/admin/layout/header.php';?>
<div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-30">
                                    <h3>Add Product</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="index.html"><div class="text-tiny">Dashboard</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="#"><div class="text-tiny">Product</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">Add Product</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- form-add-product -->
                                <form class="form-add-product" >
                                    <div class="wg-box mb-30">
                                        <fieldset>
                                            <div class="body-title mb-10">Upload images</div>
                                            <div class="upload-image mb-16">
                                                <div class="up-load">
                                                    <label class="uploadfile" for="myFile">
                                                        <span class="icon">
                                                            <i class="icon-upload-cloud"></i>
                                                        </span>
                                                        <div class="text-tiny">Drop your images here or select <span class="text-secondary">click to browse</span></div>
                                                        <input type="file" id="myFile" name="filename">
                                                        <img src="#" id="myFile-input" alt="">
                                                    </label>
                                                </div>
                                                <div class="flex gap20 flex-wrap">
                                                    <div class="item">
                                                        <img src="public/admin/assets/images/upload/img-1.jpg" alt="">
                                                    </div>
                                                    <div class="item">
                                                        <img src="public/admin/assets/images/upload/img-2.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="body-text">You need to add at least 4 images. Pay attention to the quality of the pictures you add, comply with the background color standards. Pictures must be in certain dimensions. Notice that the product shows all the details</div>
                                        </fieldset>
                                    </div>
                                    <div class="wg-box mb-30">
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Product title <span class="tf-color-1">*</span></div>
                                            <input class="mb-10" type="text" placeholder="Enter title" name="text" tabindex="0" value="" aria-required="true" required="">
                                            <div class="text-tiny text-surface-2">Do not exceed 20 characters when entering the product name.</div>
                                        </fieldset>
                                        <fieldset class="category">
                                            <div class="body-title mb-10">Category <span class="tf-color-1">*</span></div>
                                            <input class="" type="text" placeholder="Choose category" name="text" tabindex="0" value="" aria-required="true" required="">
                                        </fieldset>
                                        <div class="cols-lg gap22">
                                            <fieldset class="price">
                                                <div class="body-title mb-10">Price <span class="tf-color-1">*</span></div>
                                                <input class="" type="number" placeholder="Price" name="text" tabindex="0" value="" aria-required="true" required="">
                                            </fieldset>
                                            <fieldset class="sale-price">
                                                <div class="body-title mb-10">Sale Price </div>
                                                <input class="" type="number" placeholder="Sale Price " name="text" tabindex="0" value="" aria-required="true" required="">
                                            </fieldset>
                                            <fieldset class="schedule">
                                                <div class="body-title mb-10">Schedule</div>
                                                <input type="date" name="date" >
                                            </fieldset>
                                        </div>
                                        <div class="cols-lg gap22">
                                            <fieldset class="choose-brand">
                                                <div class="body-title mb-10">Brand <span class="tf-color-1">*</span></div>
                                                <input class="" type="text" placeholder="Choose brand" name="text" tabindex="0" value="" aria-required="true" required="">
                                            </fieldset>
                                            <fieldset class="variant-picker-item">
                                                <div class="variant-picker-label body-title">
                                                    Color: <span class="body-title-2 fw-4 variant-picker-label-value">Orange</span>
                                                </div>
                                                <div class="variant-picker-values">
                                                    <input id="values-orange" type="radio" name="color" checked="">
                                                    <label class="radius-60" for="values-orange" data-value="Orange">
                                                        <span class="btn-checkbox bg-color-orange"></span>
                                                    </label>
                                                    <input id="values-blue" type="radio" name="color">
                                                    <label class="radius-60" for="values-blue" data-value="Blue">
                                                        <span class="btn-checkbox bg-color-blue"></span>
                                                    </label>
                                                    <input id="values-yellow" type="radio" name="color">
                                                    <label class="radius-60" for="values-yellow" data-value="Yellow">
                                                        <span class="btn-checkbox bg-color-yellow"></span>
                                                    </label>
                                                    <input id="values-black" type="radio" name="color">
                                                    <label class="radius-60" for="values-black" data-value="Black">
                                                        <span class="btn-checkbox bg-color-black"></span>
                                                    </label>
                                                </div>
                                            </fieldset>
                                            <fieldset class="variant-picker-item">
                                                <div class="variant-picker-label body-text">
                                                    Size: <span class="body-title-2 variant-picker-label-value">S</span>
                                                </div>
                                                <div class="variant-picker-values">
                                                    <input type="radio" name="size" id="values-s">
                                                    <label class="style-text" for="values-s" data-value="S">
                                                        <div class="text">S</div>
                                                    </label>
                                                    <input type="radio" name="size" id="values-m" checked="">
                                                    <label class="style-text" for="values-m" data-value="M">
                                                        <div class="text">M</div>
                                                    </label>
                                                    <input type="radio" name="size" id="values-l">
                                                    <label class="style-text" for="values-l" data-value="L">
                                                        <div class="text">L</div>
                                                    </label>
                                                    <input type="radio" name="size" id="values-xl">
                                                    <label class="style-text" for="values-xl" data-value="XL">
                                                        <div class="text">XL</div>
                                                    </label>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="cols-lg gap22">
                                            <fieldset class="sku">
                                                <div class="body-title mb-10">SKU</div>
                                                <input class="" type="text" placeholder="Enter SKU" name="text" tabindex="0" value="" aria-required="true" required="">
                                            </fieldset>
                                            <fieldset class="category">
                                                <div class="body-title mb-10">Stock <span class="tf-color-1">*</span></div>
                                                <input class="" type="text" placeholder="Enter Stock" name="text" tabindex="0" value="" aria-required="true" required="">
                                            </fieldset>
                                            <fieldset class="sku">
                                                <div class="body-title mb-10">Tags</div>
                                                <input class="" type="text" placeholder="Enter a tag" name="text" tabindex="0" value="" aria-required="true" required="">
                                            </fieldset>
                                        </div>
                                        <fieldset class="description">
                                            <div class="body-title mb-10">Description <span class="tf-color-1">*</span></div>
                                            <textarea class="mb-10" name="description" placeholder="Short description about product" tabindex="0" aria-required="true" required=""></textarea>
                                            <div class="text-tiny">Do not exceed 100 characters when entering the product name.</div>
                                        </fieldset>
                                    </div>
                                
                                    <div class="cols gap10">
                                        <button class="tf-button w380" type="submit">Add product</button>
                                        <a href="#" class="tf-button style-3 w380" type="submit">Cancel</a>
                                    </div>
                                </form>
                                <!-- /form-add-product -->
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->
                        <!-- bottom-page -->
                        <div class="bottom-page">
                            <div class="body-text">Copyright © 2024 <a href="https://themesflat.co/html/ecomus/index.html">Ecomus</a>. Design by Themesflat All rights reserved</div>
                        </div>
                        <!-- /bottom-page -->
                    </div>
                        <!-- main-content-wrap -->

                        <!-- /main-content-wrap -->
                        <!-- bottom-page -->
                        <!-- /bottom-page -->
                    </div>
<?php include 'views/admin/layout/footer.php';?>