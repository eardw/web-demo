<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeny Wooden Arm Chair - Product Page</title>
    <link rel="stylesheet" href="product.css">
    <!-- Google Fonts for typography matching -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="app-container">
        <!-- Navigation Header -->
        <header class="navbar">
            <div class="nav-left">
                <a href="#" class="logo">
                    <!-- Armchair Icon -->
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#5d6373" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 9V6a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v3"></path>
                        <path d="M3 16a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v5z"></path>
                        <path d="M6 18v2"></path>
                        <path d="M18 18v2"></path>
                    </svg>
                </a>
                <nav class="nav-links">
                    <a href="#">Products</a>
                    <a href="#">Stores</a>
                    <a href="#">Our story</a>
                    <a href="#">Blog</a>
                </nav>
            </div>

            <div class="nav-right">
                <a href="http://localhost/htt/login.php" class="auth-link">Login/Sign up</a>
                <a href="#" class="cart-btn">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#333" stroke-width="2">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                    </svg>
                </a>
                <div class="search-box">
                    <input type="text" placeholder="">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#aaa" stroke-width="2">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </div>
            </div>
        </header>

        <!-- Main Product Card Area -->
        <main class="main-content">
            
            <!-- Left Side: Interactive Gallery & Product Preview -->
            <section class="gallery-section">
                <!-- Designer & Rating Badge -->
                <div class="designer-info">
                    <p class="designer-text">Designed by <span>Thomas Jonas</span></p>
                    <div class="rating">
                        <span class="star">★</span>
                        <span class="score">4.5</span>
                        <span class="reviews">(89 reviews)</span>
                    </div>
                </div>

                <!-- Color Swatch Line -->
                <div class="color-swatches">
                    <span class="swatch swatch-yellow"></span>
                    <span class="swatch swatch-mint active"></span>
                    <span class="swatch swatch-dark"></span>
                    <span class="swatch swatch-gray"></span>
                </div>

                <!-- Product Preview Image -->
                <div class="image-wrapper">
                    <img src="https://images.unsplash.com/photo-1580481072645-022f9a6d83d0?auto=format&fit=crop&w=800&q=80" alt="Greeny Wooden Arm Chair" class="product-image">
                    
                    <!-- Navigation Arrows -->
                    <button class="nav-arrow arrow-left" aria-label="Previous image">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="2">
                            <path d="M15 18l-6-6 6-6"/>
                        </svg>
                    </button>
                    <button class="nav-arrow arrow-right" aria-label="Next image">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="2">
                            <path d="M9 18l6-6-6-6"/>
                        </svg>
                    </button>
                </div>
            </section>

            <!-- Right Side: Details & Purchasing -->
            <section class="details-section">
                <h1 class="product-title">Greeny wooden<br>arm chair</h1>
                <p class="item-code">Item code: 587830</p>

                <div class="description-block">
                    <h2>DESCRIPTION</h2>
                    <p>Accent Chair Living Room Armchair Tub Side Chair Sofa Lounge Soft Velvet Upholstered Back for Dining Room/Cafe Home Furniture</p>
                </div>

                <div class="price-block">
                    <span class="price-label">PRICE</span>
                    <div class="price-wrapper">
                        <span class="current-price">$399</span>
                        <span class="original-price">$465</span>
                    </div>
                </div>

                <!-- Color Selection Dropdown -->
                <div class="option-group">
                    <label class="option-label">COLOR</label>
                    <div class="dropdown">
                        <span>GREEN</span>
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#5d6373" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                    </div>
                </div>

                <!-- Quantity and Add to Cart Row -->
                <div class="action-row">
                    <div class="quantity-group">
                        <label class="option-label">QUANTITY</label>
                        <div class="dropdown qty-dropdown">
                            <span>02</span>
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#5d6373" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                        </div>
                    </div>
                    <button class="add-to-cart-btn">ADD TO CART</button>
                </div>

                <!-- Bottom Footer Links -->
                <footer class="product-footer">
                    <a href="#">DETAILS</a>
                    <a href="#">DELIVERY</a>
                    <a href="#">RETURN</a>
                </footer>
            </section>
            
        </main>
    </div>

</body>
</html>