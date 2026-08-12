<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ice cream products</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>

    <div class="card-container">
        <!-- Header / Navbar -->
        <nav class="navbar">
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">New Releases</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">About us</a></li>
            </ul>
            <div class="nav-icons">
                <!-- User Icon SVG -->
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="8" r="4"></circle>
                    <path d="M4 20c0-4 4-6 8-6s8 2 8 6"></path>
                </svg>
                <!-- Cart Icon SVG -->
                <div class="cart-icon">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                    </svg>
                    <span class="badge">5</span>
                </div>
            </div>
        </nav>

        <!-- Big Background Text -->
        <div class="bg-text">CHOCOLATE</div>

        <!-- Foreground Character Image -->
        <img src="img/CHOCO.png" 
             alt="3D Character" 
             class="character-img">

        <!-- Main Body Content -->
        <div class="content">
            <!-- Left Info Panel -->
            <div class="left-col">
                <h1 class="title">chocolate<br>ice cream</h1>
                
                <div class="meta-item">
                    <div class="meta-label">Published</div>
                    <div class="meta-value">NOV 06, 2020</div>
                </div>

                <div class="meta-item">
                    <div class="meta-label">See more products:</div>
                    <div class="meta-value"><a href="#" class="link-text">CLICK HERE</a></div>
                </div>
            </div>

            <!-- Right Info Panel -->
            <div class="right-col">
                <p class="description">
                   its iconic variation, mint chocolate chip ranks among the most popular ice cream flavors globally.
                    Known for its uniquely refreshing taste,
                     Whether you are looking to purchase a top tier store brand or churn a batch completely from scratch, achieving the perfect flavor depends on high-quality mint oils and well-dispersed chocolate chunks.
                </p>
                <div class="controls">
                    <button class="btn-arrow" aria-label="Previous">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                    </button>
                    <button class="btn-arrow" aria-label="Next">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>