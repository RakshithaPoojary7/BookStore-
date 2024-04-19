
  function addToCart(productName, productPrice) {
    // Retrieve or initialize the cart data from local storage
    var cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Add the selected product to the cart
    cart.push({ name: productName, price: productPrice, quantity: 1 });

    // Save the updated cart data to local storage
    localStorage.setItem('cart', JSON.stringify(cart));

    // Provide feedback to the user
    alert('Product added to cart!');
  }
