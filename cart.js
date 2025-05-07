document.addEventListener("DOMContentLoaded", function () {
    const cartItemsContainer = document.getElementById("cart-items");

    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    if (cart.length === 0) {
        cartItemsContainer.innerHTML = "<p class='text-center text-muted'>Your cart is empty.</p>";
    } else {
        cart.forEach(item => {
            const cartItem = document.createElement("div");
            cartItem.classList.add("col-sm-3", "mt-3");
            cartItem.innerHTML = `
                <div class="card">
                    <img class="card-img-top" src="${item.imageSrc}" alt="${item.title}">
                    <div class="card-body text-center">
                        <h5 class="card-title">${item.title}</h5>
                        <p>Price: $${item.price}</p>
                        <p>Quantity: ${item.quantity}</p>
                        <button class="btn btn-warning remove-from-cart">Remove</button>
                    </div>
                </div>
            `;

            cartItemsContainer.appendChild(cartItem);

            // Remove item from cart
            cartItem.querySelector(".remove-from-cart").addEventListener("click", function () {
                cart = cart.filter(cartItem => cartItem.title !== item.title);
                localStorage.setItem("cart", JSON.stringify(cart));
                cartItem.remove();

                if (cart.length === 0) {
                    cartItemsContainer.innerHTML = "<p class='text-center text-muted'>Your cart is empty.</p>";
                }
            });
        });
    }

    // Clear cart
    document.getElementById("clear-cart").addEventListener("click", function () {
        localStorage.removeItem("cart");
        cartItemsContainer.innerHTML = "<p class='text-center text-muted'>Your cart is empty.</p>";
    });
});
    

