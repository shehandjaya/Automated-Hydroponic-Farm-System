@component('website.component.navbar_with_cart')
@endcomponent

<br><br><br>
@auth
<section class="h-100 gradient-custom">
    <div class="container py-5">
        <div class="row d-flex justify-content-center my-4">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0" id="no_of_items">0 </h5>
                    </div>
                    <div class="card-body">
                        <hr class="my-4" />
                        <div class="container">
                            <div class="table-responsive" style="max-height: 54vh;min-height: 54vh; overflow-y: auto;">
                                <table id="cart" class="table table-hover table-condensed">
                                    <thead>
                                        <tr>
                                            <th style="display: none">Item ID</th>
                                            <th>No</th>
                                            <th></th>
                                            <th>Item</th>
                                            <th>Quantity</th>
                                            <th>Discount</th>
                                            <th>Price</th>
                                            <th style="display: none">Description</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="cartTableBody">
                                        <!-- Cart data will be dynamically added here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <p><strong>Expected shipping delivery</strong></p>
                        <p class="mb-0">3 to 4 business days</p>
                    </div>
                </div>
                <div class="card mb-4 mb-lg-0">
                    <div class="card-body">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <input type="radio" name="payment_method" value="cash_on_delivery" checked>
                                    <label for="css"><strong>Cash On Delivery</strong></label><br>

                                </div>
                                <div class="col align-self-center">

                                </div>
                                <div class="col-auto">
                                    <img class="me-2" width="60px"
                                        src="https://d28wu8o6itv89t.cloudfront.net/images/Cashondeliveryjpgjpg-1594648666434.jpeg"
                                        alt="Cash On Delivery" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card mb-4 mb-lg-0">
                    <div class="card-body">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <input type="radio" name="payment_method" value="credit_card">
                                    <label for="css"><strong>We accept</strong></label><br>

                                </div>
                                <div class="col align-self-center">

                                </div>
                                <div class="col-auto">
                                    <img class="me-2" width="45px"
                                        src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                                        alt="Visa" />
                                    <img class="me-2" width="45px"
                                        src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                                        alt="American Express" />
                                    <img class="me-2" width="45px"
                                        src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                                        alt="Mastercard" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Summary</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                Products
                                <span id="totalPrice">00.00</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                Shipping
                                <span>300</span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                <div>
                                    <strong>Total amount</strong>
                                    <strong>
                                        <p class="mb-0">(including VAT)</p>
                                    </strong>
                                </div>
                                <span id="PriceWithShipping"><strong>00.00</strong></span>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Billing Information</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <div class="form-group">
                                <label for="fullName">Full Name:</label>
                                <input type="text" class="form-control" id="fullName" placeholder="Enter your full name"
                                    value="{{Auth::user()->fname}} {{Auth::user()->lname}}">
                            </div>
                            <div class="form-group">
                                <p></p>
                                <label for="email">Email Address:</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="Enter your email address" value="{{Auth::user()->email}}">
                            </div>
                            <div class="form-group">
                                <p></p>
                                <label for="address">Billing Address:</label>
                                <input type="text" class="form-control" id="address"
                                    placeholder="Enter your billing address" value="{{Auth::user()->address1}}">
                            </div>
                            <div class="form-group">
                                <p></p>
                                <input type="text" class="form-control" id="address"
                                    placeholder="Enter your billing address" value="{{Auth::user()->address2}}">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <p></p>
                                    <label for="city">City:</label>
                                    <input type="text" class="form-control" id="city" placeholder="City"
                                        value="{{Auth::user()->address3}}">
                                </div>
                            </div>
                            <p></p>
                            <form action="{{route('cartItem.addToDb')}}" method="POST">
                                @csrf
                                <input type="hidden" value="{{Auth::user()->address3}}" name="user_id">
                                <input type="submit" value=" Proceed to Checkout" name="Checkout"
                                    class="btn btn-primary btn-lg btn-block">

                            </form>
                            {{-- <button type="button" class="btn btn-primary btn-lg btn-block" id="checkoutButton">
                                Proceed to Checkout
                            </button> --}}


                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>
</section>
@else
<script>
    window.location.href = "{{ route('login') }}";
</script>

@endauth

{{-- <script>
    document.getElementById('checkoutButton').addEventListener('click', function() {
        var user_id = 'U001'; // You may get the user ID dynamically if needed
        var url = '/cartItem/' + user_id;

        // Redirect to the Laravel route
        window.location.href = url;
    });
</script> --}}

{{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        const checkoutButton = document.getElementById('checkoutButton');

        if (checkoutButton) {
            checkoutButton.addEventListener('click', function () {
                // Make an AJAX request to the checkout route
                fetch("{{ route('checkout') }}", {
method: "GET",
headers: {
"X-CSRF-TOKEN": "{{ csrf_token() }}",
},
})
.then(response => response.json())
.then(data => {
// Handle the response data if needed
console.log(data);
})
.catch(error => {
// Handle errors if any
console.error(error);
});
});
}
});
</script> --}}

<script>
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
    // Function to display cart data in the table
    function displayCartData() {
        const cart = getCartData();
        const cartTableBody = document.getElementById('cartTableBody');
        const totalPriceElement = document.getElementById('totalPrice');
        const priceWithShippingElement = document.getElementById('PriceWithShipping');

        // Clear the table body before populating it
        cartTableBody.innerHTML = '';
        let itemCount = 1;
        let totalPriceExcludingShipping = 0; // Initialize the total price (excluding shipping)

        // Loop through the cart items and add them to the table
        cart.forEach(item => {
            const row = document.createElement('tr');
            row.innerHTML = `
        <td style="display: none">${item.itemId}</td>
        <td>${itemCount}</td>
        <td><img src="webSiteImages\\store\\${item.itemId}.png" class="img-fluid rounded-3" alt="Shopping item" style="width: 50px;"></td>
        <td>${item.name}</td>
        <td>
              <input min="1" name="quantity" value="${item.quantity}" type="number"
              class="form-control" style="width: 40px; height: 30px; border-radius: 5px; border: 1px solid #ccc; padding: 5px;" />
        </td>
        <td>${item.discount === 0 ? 'N/A' : `${item.discount}%`}</td>
        <td class="price">${(item.price * (1 - item.discount / 100)).toFixed(2)}</td>
        <td style="display: none">${item.description}</td>
        <td><button class="btn" onclick="deleteCartItem('${item.itemId}')" id="deleteItem" style="background-color: transparent; border: none;"> <i class="fas fa-trash-alt"></i> </button></td>

        `;

            // Add an event listener to update the price when quantity changes
            const quantityInput = row.querySelector('input[name="quantity"]');
            quantityInput.addEventListener('change', function () {
                const quantity = parseInt(this.value, 10); // Parse the quantity as an integer
                const priceCell = row.querySelector('.price'); // Get the price cell

                // Calculate the new price based on quantity and update the cell
                if (!isNaN(quantity) && quantity >= 1) {
                    const newPrice = (item.price * (1 - item.discount / 100) * quantity).toFixed(
                        2); // Adjust the price as needed
                    priceCell.textContent = newPrice;
                    updateTotalPrice(); // Update the total price when quantity changes
                }
            });

            itemCount++;
            cartTableBody.appendChild(row);

            // Update the total price (excluding shipping) with the price of the current item
            totalPriceExcludingShipping += (item.price * (1 - item.discount / 100) * item.quantity);
        });




        // Initialize the initial total price
        updateTotalPrice();

        // Initialize the number of items (item count)
        document.getElementById('no_of_items').textContent = (itemCount - 1) + " Items";


        // Function to update the total price (including shipping)
        function updateTotalPrice() {
            let newTotalPriceExcludingShipping = 0;
            const priceElements = document.querySelectorAll('.price');
            priceElements.forEach(element => {
                newTotalPriceExcludingShipping += parseFloat(element.textContent);
            });

            // Calculate the total price including shipping
            const shippingCost = 300; // Example shipping cost
            const newTotalWithShipping = newTotalPriceExcludingShipping + shippingCost;

            totalPriceElement.textContent = newTotalPriceExcludingShipping.toFixed(
                2); // Update the "totalPrice" element
            priceWithShippingElement.textContent = "Rs." + newTotalWithShipping.toFixed(
                2); // Update the "PriceWithShipping" element
        }



    }

    function deleteCartItem(itemIdToDelete) {
        // Get the cart items from the cookie
        var cartItems = getCartItemsFromCookie();

        // Find the index of the item to delete
        var itemIndex = cartItems.findIndex(function (item) {
            return item.itemId === itemIdToDelete;
        });

        if (itemIndex !== -1) {
            // Remove the item from the array
            cartItems.splice(itemIndex, 1);

            // Update the "cart" cookie with the modified cart items
            setCartItemsToCookie(cartItems);

            alert("Item is deleted from the cart.");
            displayCartData();
        } else {
            alert("Item with ID " + itemIdToDelete + " not found in the cart.");
        }

        const cartData = getCartData();
        const itemCount = cartData.length;

        const itemCountElement = document.getElementById('itemCountContainer');
        itemCountElement.textContent = `${itemCount}`;
    }

    // Helper function to get cart items from the "cart" cookie
    function getCartItemsFromCookie() {
        var cartCookie = getCookie("cart");
        if (cartCookie) {
            return JSON.parse(cartCookie);
        } else {
            return [];
        }
    }

    // Helper function to set cart items to the "cart" cookie
    function setCartItemsToCookie(cartItems) {
        document.cookie = "cart=" + JSON.stringify(cartItems) + "; path=/;";
    }

    // Call the function to display cart data when the page loads
    displayCartData();
</script>

<!-- Footer Component -->
@component('website.component.footer')
@endcomponent