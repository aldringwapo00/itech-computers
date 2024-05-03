document.addEventListener('DOMContentLoaded', function() {
    const wishlistBtn = document.querySelector('.wishlist-btn');
    
    // Add click event listener to the button
    wishlistBtn.addEventListener('click', function() {
        // Navigate to another page
        window.location.href = '../main/wishlist.html';
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


document.addEventListener('DOMContentLoaded', function() {
  const cartBtn = document.querySelector('.account-btn');
  
  // Add click event listener to the button
  cartBtn.addEventListener('click', function() {
      // Navigate to another page
      window.location.href = '../main/account.html';
  });
});


document.addEventListener('DOMContentLoaded', function() {
  const cartBtn = document.querySelector('.checkout-btn');
  
  // Add click event listener to the button
  cartBtn.addEventListener('click', function() {
      // Navigate to another page
      window.location.href = '../main/checkout_section.html';
  });
});



    document.addEventListener('DOMContentLoaded', function() {
  const decrementBtn = document.querySelector('.decrement-btn');
  const incrementBtn = document.querySelector('.increment-btn');
  const quantityInput = document.querySelector('.quantity-input');

  decrementBtn.addEventListener('click', function() {
    // Get the current value of the input
    let currentValue = parseInt(quantityInput.value);

    // If the current value is greater than the minimum value (1), decrement it
    if (currentValue > parseInt(quantityInput.min)) {
      quantityInput.value = currentValue - 1;
    }
  });

  incrementBtn.addEventListener('click', function() {
    // Get the current value of the input
    let currentValue = parseInt(quantityInput.value);

    // If the current value is less than the maximum value, increment it
    quantityInput.value = currentValue + 1;
  });
});
