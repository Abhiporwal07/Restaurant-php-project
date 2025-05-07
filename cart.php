<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script defer src="cart.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="text-center text-success mt-4">CART</h1>
        <div id="cart-items" class="row">
        </div>
        <div class="container text-center mt-5">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#orderModal">
                Confirm Order
            </button>
        </div>
        <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Order Confirmation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <h4 class="text-success">Your order has been placed successfully!</h4>
        <p>Thank you for shopping with us.</p>

        <div id="order-details">
            <h5>Order Summary</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Price (Each)</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody id="order-items">
                    <!-- JavaScript will populate this -->
                </tbody>
            </table>
            <h5 class="text-end">Grand Total: ₹<span id="grand-total">0</span></h5>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-success" id="proceedToPayBtn">Proceed to Pay</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
</div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</div>
    <div class="text-center mt-4">
        <a href="index.php" class="btn btn-danger mb-3">Back to Home</a>
        <a href="menu.php" class="btn btn-primary mb-3">Back to Menu</a>
        <button class="btn btn-danger mb-3" id="clear-cart">Clear Cart</button>
    </div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Function to populate the order summary
        function populateOrderSummary() {
            const cart = JSON.parse(localStorage.getItem("cart")) || [];
            const tbody = document.getElementById('order-items');
            const totalEl = document.getElementById('grand-total');
            tbody.innerHTML = ''; 

            let grandTotal = 0;

            
            cart.forEach(item => {
                const total = item.quantity * item.price;
                grandTotal += total;

                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${item.title}</td>
                    <td>${item.quantity}</td>
                    <td>₹${item.price}</td>
                    <td>₹${total}</td>
                `;
                tbody.appendChild(row);
            });

            totalEl.textContent = "" + grandTotal.toFixed(2); 
        }

        // Show modal and populate when it's triggered
        const orderModal = document.getElementById('orderModalLabel');
        if (orderModal) {
            const modal = document.querySelector('#orderModalLabel').closest('.modal');
            modal.addEventListener('show.bs.modal', populateOrderSummary);
        }

        // Proceed to Pay action
        document.getElementById('proceedToPayBtn').addEventListener('click', function () {
            alert("Redirecting to payment gateway...");
            // Redirect or trigger payment logic here
        });
    });
</script>
