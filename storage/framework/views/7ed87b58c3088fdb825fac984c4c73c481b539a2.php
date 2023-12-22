<?php $__env->startComponent('website.component.navbar_with_cart'); ?>
<?php echo $__env->renderComponent(); ?>

<!-- Header -->
<header class="bg-dark py-5">
</header>

<meta name="_token" content="<?php echo e(csrf_token()); ?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="container px-4 px-lg-5 mt-5">
    <div class="card h-50">
        <div class="card-body p-4">
            <div class="row">
                <div class="col-md-8">
                    <div class="container">
                        <div class="row">
                            <div class="panel panel-default">

                                <div class="panel-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="search" name="search"
                                            placeholder="Search Products">

                                    </div>
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <!-- Table headers go here -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Table data goes here -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="dropdown stylish-dropdown">
                        <button class="btn btn-outline-dark dropdown-toggle" type="button" id="categoryDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Select Category
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                            <li><a class="dropdown-item" href="#">All</a></li>
                            <li><a class="dropdown-item" href="#">Flowers</a></li>
                            <li><a class="dropdown-item" href="#">Herbs</a></li>
                            <li><a class="dropdown-item" href="#">Microgreens</a></li>
                            <li><a class="dropdown-item" href="#">Vegetables</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary" name="searchButton" id="searchButton">Search</button>

                </div>
            </div>
        </div>
    </div>
</div>
<?php echo csrf_field(); ?>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-2">
        <div class="row">
            <?php $itemsPerRow = 4; $itemCount = 0; ?>

            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($itemCount % $itemsPerRow === 0): ?>
        </div>
        <p></p>
        <p></p>
        <div class="row">
            <?php endif; ?>

            <div class="col-md-3 col-sm-6 my-3 my-md-0">
                
                    <form action="">
                    <?php echo csrf_field(); ?>
                    <div class="card shadow position-relative">
                        <div>
                            <img src="<?php echo e($item->image); ?>" alt="Image1" class="card-img-top"
                                style="width:100%;height:242px;">
                            <?php if($item->discount > 0): ?>
                            <span class="badge bg-danger position-absolute top-0 start-100 translate-middle p-2">
                                <?php echo e($item->discount); ?>%
                            </span>
                            <?php endif; ?>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo e(Illuminate\Support\Str::limit($item->name, 18)); ?></h5>
                            <h6 class="d-flex justify-content-center">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <p class="card-text text-center mb-0">
                                <?php echo e(Illuminate\Support\Str::limit($item->description, 50)); ?>

                            </p>
                            <?php if($item->discount > 0): ?>
                            <h5 class="d-flex justify-content-center"><small>
                                    <s class="text-secondary text-center">Rs. <?php echo e($item->price); ?></s></small></h5>
                            <?php else: ?>
                            <h5 class="d-flex justify-content-center"><small>
                                    <s class="text-secondary text-center">
                                        <p></p>
                                    </s></small></h5>
                            <?php endif; ?>
                            <?php
                            $price = $item->price;
                            $discount = $item->discount;
                            $finalPrice = $price - ($price * $discount / 100);
                            ?>
                            <h5 class="price text-center text-success">Rs. <?php echo e($finalPrice); ?></h5>

                            <div class="store-overlay d-flex justify-content-center align-items-center">
                                <button type="button" class="btn btn-primary rounded-pill py-2 px-4 m-2"
                                    onclick="addToCart('<?php echo e($item->item_id); ?>', '<?php echo e($item->name); ?>', <?php echo e($item->price); ?>, <?php echo e($item->discount); ?>, '<?php echo e($item->description); ?>')">Add
                                    to Cart <i class="fa fa-cart-plus ms-2"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <?php $itemCount++; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<script>
    // Function to add an item to the cart using browser cookies
    function addToCart(itemId, itemName, itemPrice, itemDiscount, itemDescription) {
        // Retrieve existing cart data from cookies (if any)\ 
        let cart = getCartData();

        // Check if the item is already in the cart
        const existingItem = cart.find(item => item.itemId === itemId);

        if (existingItem) {
            // If the item is already in the cart, increase its quantity
            existingItem.quantity += 1;
        } else {
            // If the item is not in the cart, add it
            cart.push({
                itemId,
                quantity: 1,
                name: itemName,
                price: itemPrice,
                discount: itemDiscount,
                description: itemDescription
            });
        }

        // Save the updated cart data to cookies
        saveCartData(cart);

        const cartData = getCartData();
        const itemCount = cartData.length;

        const itemCountElement = document.getElementById('itemCountContainer');
        itemCountElement.textContent = `${itemCount}`;

        // Show a response message to the user
        alert(`${itemName} has been added to your cart.`);

    }

    function getCartData() {
        // Check if the 'cart' cookie exists
        const cartCookie = getCookie('cart');

        if (cartCookie) {
            // Parse the JSON data from the cookie
            try {
                const cartData = JSON.parse(cartCookie);
                // Ensure that the parsed data is an array
                if (Array.isArray(cartData)) {
                    return cartData;
                }
            } catch (error) {
                // Handle JSON parsing errors, if any
                console.error('Error parsing cart data:', error);
            }
        }

        // If there's no cart data in the cookie or if it's invalid, return an empty array
        return [];
    }

    // Helper function to get a cookie by name
    function getCookie(name) {
        const cookieValue = document.cookie.match(`(^|;)\\s*${name}\\s*=\\s*([^;]+)`);
        return cookieValue ? cookieValue.pop() : null;
    }

    function saveCartData(cart) {
        // Convert the cart data to a JSON string
        const cartDataJSON = JSON.stringify(cart);

        // Calculate the expiration date as three months from the current date
        const expirationDate = new Date();
        expirationDate.setMonth(expirationDate.getMonth() + 3);

        // Set the 'cart' cookie with the JSON data and the new expiration date
        document.cookie = `cart=${cartDataJSON}; expires=${expirationDate.toUTCString()}; path=/`;

        // You can adjust the 'path' option as needed
        // 'path' specifies the path for which the cookie is valid on your website
    }
</script>


<script type="text/javascript">
    $(document).on('keyup', '#search', function () {
        $value = $(this).val();
        $.ajax({
            type: 'get',
            url: '<?php echo e(route('search')); ?>', // Use the named route
            data: {
                'search': $value
            },
            success: function (data) {
                $('tbody').html(data);

                // Add a click event handler for the generated rows
                $('.clickable-row').click(function() {
                    window.location = $(this).data('href');
                });
            }
        });
    });
</script>



</script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'csrftoken': '<?php echo e(csrf_token()); ?>'
        }
    });
</script>



<!-- Footer Component -->
<?php $__env->startComponent('website.component.footer'); ?>
<?php echo $__env->renderComponent(); ?><?php /**PATH C:\Users\SHANAKA\Desktop\Final_Hydroponic_Farm\resources\views/webSite/store.blade.php ENDPATH**/ ?>