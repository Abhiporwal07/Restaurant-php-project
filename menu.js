
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".add-to-cart").forEach(button => {
        button.addEventListener("click", function () {
            const card = this.closest(".card");
            const title = card.querySelector(".card-title").textContent;
            const imageSrc = card.querySelector(".card-img-top").src;


            const priceText = card.querySelector(".price").textContent;
            const price = parseFloat(priceText.replace('$', ''));

    
            const quantityInput = card.querySelector(".quantity");
            const quantity = parseInt(quantityInput ? quantityInput.value : 1);

          
            let cart = JSON.parse(localStorage.getItem("cart")) || [];

            const existingItem = cart.find(item => item.title.trim().toLowerCase() === title.trim().toLowerCase());

            if (existingItem) {
                alert("Item already in cart!");
                return;
            }

            cart.push({ title, imageSrc, price, quantity });

            localStorage.setItem("cart", JSON.stringify(cart));

            alert("Item added to cart!");
        });
    });
});

