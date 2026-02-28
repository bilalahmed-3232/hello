

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="display-4 fw-bold mb-3">Place Your Order</h1>
                    <p class="lead">Fill out the form below to order premium printing services</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Order Form -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-card">
                        <h3 class="mb-4">Order Details</h3>
                        <form id="orderForm" action="php/process-order.php" method="POST" enctype="multipart/form-data">
                            <!-- Product Selection -->
                            <div class="mb-4">
                                <label for="productType" class="form-label">Product Type *</label>
                                <select class="form-select" id="productType" name="productType" required>
                                    <option value="" selected disabled>Select a product</option>
                                    <option value="business-card">Business Cards</option>
                                    <option value="flex-banner">Flex & Banner</option>
                                    <option value="flyer">Flyers</option>
                                    <option value="brochure">Brochures</option>
                                    <option value="poster">Posters</option>
                                    <option value="wedding-card">Wedding Cards</option>
                                    <option value="custom">Custom Printing</option>
                                </select>
                            </div>

                            <!-- Size Selection -->
                            <div class="mb-4">
                                <label for="size" class="form-label">Size *</label>
                                <select class="form-select" id="size" name="size" required>
                                    <option value="" selected disabled>Select size</option>
                                    <option value="small">Small</option>
                                    <option value="medium" selected>Medium</option>
                                    <option value="large">Large</option>
                                    <option value="xlarge">Extra Large</option>
                                </select>
                            </div>

                            <!-- Quantity -->
                            <div class="mb-4">
                                <label for="quantity" class="form-label">Quantity *</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" 
                                       min="10" max="10000" value="100" required>
                                <div class="form-text">Minimum order: 10 units</div>
                            </div>

                            <!-- Paper Type -->
                            <div class="mb-4">
                                <label for="paperType" class="form-label">Paper Type *</label>
                                <select class="form-select" id="paperType" name="paperType" required>
                                    <option value="" selected disabled>Select paper type</option>
                                    <option value="standard" selected>Standard (80gsm)</option>
                                    <option value="premium">Premium (120gsm)</option>
                                    <option value="glossy">Glossy Finish</option>
                                    <option value="matte">Matte Finish</option>
                                    <option value="cardstock">Cardstock (300gsm)</option>
                                </select>
                            </div>

                            <!-- Color Option -->
                            <div class="mb-4">
                                <label for="colorOption" class="form-label">Color Option *</label>
                                <select class="form-select" id="colorOption" name="colorOption" required>
                                    <option value="" selected disabled>Select color option</option>
                                    <option value="bw">Black & White</option>
                                    <option value="color" selected>Standard Color</option>
                                    <option value="full-color">Full Color (CMYK)</option>
                                </select>
                            </div>

                            <!-- File Upload -->
                            <div class="mb-4">
                                <label for="fileUpload" class="form-label">Design File *</label>
                                <input type="file" class="form-control" id="fileUpload" name="fileUpload" 
                                       accept=".pdf,.jpg,.jpeg,.png,.ai,.psd" required>
                                <div class="form-text file-info" id="fileInfo">
                                    Accepted formats: PDF, JPG, PNG, AI, PSD (Max 50MB)
                                </div>
                            </div>

                            <!-- Delivery Method -->
                            <div class="mb-4">
                                <label for="deliveryMethod" class="form-label">Delivery Method *</label>
                                <select class="form-select" id="deliveryMethod" name="deliveryMethod" required>
                                    <option value="" selected disabled>Select delivery method</option>
                                    <option value="pickup">Store Pickup</option>
                                    <option value="delivery" selected>Home Delivery</option>
                                </select>
                            </div>

                            <!-- Customer Information -->
                            <h4 class="mt-5 mb-4">Your Information</h4>
                            
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label for="fullName" class="form-label">Full Name *</label>
                                    <input type="text" class="form-control" id="fullName" name="fullName" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number *</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="city" class="form-label">City *</label>
                                    <input type="text" class="form-control" id="city" name="city" required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="address" class="form-label">Delivery Address</label>
                                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                                <div class="form-text">Required for home delivery</div>
                            </div>

                            <div class="mb-4">
                                <label for="specialInstructions" class="form-label">Special Instructions</label>
                                <textarea class="form-control" id="specialInstructions" name="specialInstructions" rows="3"></textarea>
                            </div>

                            <!-- Terms Agreement -->
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="termsAgreement" required>
                                    <label class="form-check-label" for="termsAgreement">
                                        I agree to the <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Terms & Conditions</a> *
                                    </label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="bi bi-cart-check me-2"></i> Place Order
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Price Calculator Sidebar -->
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="price-summary">
                        <h4 class="mb-4">Order Summary</h4>
                        
                        <div class="price-item">
                            <span>Base Price:</span>
                            <span id="basePrice">Rs. 50,000</span>
                        </div>
                        
                        <div class="price-item">
                            <span>Size Upgrade:</span>
                            <span id="sizePrice">Rs. 25,000</span>
                        </div>
                        
                        <div class="price-item">
                            <span>Paper Type:</span>
                            <span id="paperPrice">Rs. 0</span>
                        </div>
                        
                        <div class="price-item">
                            <span>Color Option:</span>
                            <span id="colorPrice">Rs. 25,000</span>
                        </div>
                        
                        <div class="price-item">
                            <span>Delivery:</span>
                            <span id="deliveryPrice">Rs. 300</span>
                        </div>
                        
                        <div class="price-total">
                            <span>Total:</span>
                            <span id="totalPrice">Rs. 100,300</span>
                        </div>

                        <!-- Order Summary Display -->
                        <div class="mt-4" id="orderSummary">
                            <!-- Dynamic content will be inserted by JavaScript -->
                        </div>

                        <!-- WhatsApp Quick Contact -->
                        <div class="mt-4 text-center">
                            <a href="https://wa.me/923001234567?text=Hello%20PremiumPrint%20Pro%2C%20I%20need%20help%20with%20my%20order" 
                               class="btn btn-success w-100" target="_blank">
                                <i class="bi bi-whatsapp me-2"></i> Chat on WhatsApp
                            </a>
                            <p class="text-muted small mt-2">Get instant assistance with your order</p>
                        </div>
                    </div>

                    <!-- Help Section -->
                    <div class="mt-4">
                        <div class="card price-summary">
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-info-circle me-2"></i> Need Help?</h5>
                                <p class="card-text">Our team is available to assist you:</p>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-telephone text-primary me-2"></i> +92 300 1234567</li>
                                    <li><i class="bi bi-envelope text-primary me-2"></i> orders@premiumprintpro.com</li>
                                    <li><i class="bi bi-clock text-primary me-2"></i> Mon-Sat: 9AM - 7PM</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Terms & Conditions Modal -->
    <div class="modal fade" id="termsModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Terms & Conditions</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <h6>Order Processing</h6>
                    <p>All orders are subject to availability and confirmation of the order price. Orders are processed within 2-3 business days.</p>
                    
                    <h6>File Requirements</h6>
                    <p>Files must be provided in CMYK color mode at 300 DPI resolution. We are not responsible for printing errors due to low-resolution files.</p>
                    
                    <h6>Delivery</h6>
                    <p>Delivery times are estimates and not guaranteed. Delivery charges may vary based on location and order size.</p>
                    
                    <h6>Payment</h6>
                    <p>50% advance payment is required for order confirmation. Balance payment is due upon delivery.</p>
                    
                    <h6>Cancellation Policy</h6>
                    <p>Orders can be cancelled within 24 hours of placement. Once printing has started, cancellation is not possible.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

