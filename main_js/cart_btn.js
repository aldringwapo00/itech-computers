document.addEventListener('DOMContentLoaded', function() {
    const cartBtn = document.getElementById('cart_btn');
    const cartContainer = document.getElementById('side_cart_container');
    const cartOverlay = document.getElementById('side_cart_overlay');
    const cartClose = document.getElementById('close_btn');
    
    cartBtn.addEventListener('click', function() {
      cartContainer.style.right = "0";
      cartOverlay.style.display = "block";
      document.getElementById("top").style.overflow = "hidden";

    });

    cartClose.addEventListener('click', function() {
      cartContainer.style.right = "-380px";
      cartOverlay.style.display = "none";
      document.getElementById("top").style.overflow = "auto";
    });

});


document.addEventListener('DOMContentLoaded', function() {
    const cartBtn = document.querySelector('.cart-btn');
    
    // Add click event listener to the button
    cartBtn.addEventListener('click', function() {
        // Navigate to another page
        window.location.href = '../main/addcart.html';
    });
});



