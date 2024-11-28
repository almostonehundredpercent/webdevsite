<?php include('header.php'); ?>

<main>
    <!-- Featured Items Section -->
    <section class="featured-items">
        <h2>Featured Items</h2>
        <div class="items">
            <!-- First Item: Image on Left, Text on Right -->
            <div class="content-item">
                <div class="item-box">
                    <img src="coffee90.jpg" alt="Drink 1" class="image">
                    <div class="text">
                        <h3>Latte</h3>
                        <p>Our signature latte made with fresh espresso and steamed milk.</p>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>

            <!-- Second Item: Image on Right, Text on Left -->
            <div class="content-item reverse">
                <div class="item-box">
                    <div class="text">
                        <h3>Chocolate Croissant</h3>
                        <p>Flaky and buttery croissant filled with rich chocolate.</p>
                        <button>Order Now</button>
                    </div>
                    <img src="croissant90.jpg" alt="Snack 1" class="image">
                </div>
            </div>

            <!-- Third Item: Image on Left, Text on Right -->
            <div class="content-item">
                <div class="item-box">
                    <img src="dessert1.jpg" alt="Dessert 1" class="image">
                    <div class="text">
                        <h3>Cheesecake</h3>
                        <p>Delicious cheesecake with a smooth and creamy texture.</p>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Offers Section -->
    <section class="special-offers">
        <h2>Special Offer</h2>
        <p>Get 10% off your first order! Use code "WELCOME10" at checkout.</p>
    </section>
</main>

<?php include('footer.php'); ?>
