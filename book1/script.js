//front
function message(){
    window.alert("Please Register to access our website")
}


document.addEventListener('DOMContentLoaded', function () {
    const searchIcon = document.querySelector('.search-icon');
    const searchBar = document.getElementById('search-bar');

    searchIcon.addEventListener('click', () => {
        searchBar.classList.toggle('search-active');
        if (searchBar.classList.contains('search-active')) {
            searchBar.focus();
        }
    });

    searchBar.addEventListener('input', () => {
        const searchTerm = searchBar.value.toLowerCase();
        // Implement your search logic here
        console.log(`Searching for: ${searchTerm}`);
    });

    // Your existing code goes here...
});

//cart

let cart = [];

function addToCart(itemName, itemPrice) {
    const item = {
        name: itemName,
        price: itemPrice
    };

    cart.push(item);
    updateCartDisplay();
}

function updateCartDisplay() {
    const cartContainer = document.querySelector('.cart-items');
    cartContainer.innerHTML = '';

    cart.forEach(item => {
        const itemDiv = document.createElement('div');
        itemDiv.textContent = `${item.name} - $${item.price.toFixed(2)}`;
        cartContainer.appendChild(itemDiv);
    });
    }



//buy.html
document.getElementById('myForm').addEventListener('input',function(){
    var nextBtn=document.getElementById('msg');
    var formFilled = isFormFilled();
    if(formFilled){
        nextBtn.removeAttribute('disabled');
    }else{
        nextBtn.setAttribute('disabled','disabled');
    }
        });
        document.getElementById('msg').addEventListener('click',function(){
            window.location.href='payment.html';
        });
        function isFormFilled(){
            var formElements=document.getElementById('myForm').elements;
            for(var i=0;i<formElements.length;i++){
                if(formElements[i].hasAttribute('required')&& formElements[i].value===''){
                    return false;
                }
            }
            return true;
        }

      
        // cat

function toggleSidebar() {
    const navMenu = document.querySelector('.nav-menu');
    navMenu.classList.toggle('show');
}

function searchBooks() {
    // Get the search input value
    var searchQuery = document.getElementById('searchInput').value.toLowerCase();

    // Get all the book cards
    var bookCards = document.querySelectorAll('.arrive_card');

    // Loop through each book card
    bookCards.forEach(function (card) {
        // Get the book title from the card
        var bookTitle = card.querySelector('.arrive_tag p').innerText.toLowerCase();

        // Show or hide the card based on the search result
        if (bookTitle.includes(searchQuery)) {
            card.style.display = 'block'; // Show the card
        } else {
            card.style.display = 'none'; // Hide the card
        }
    });
}


//payment.html
function checkInputs () {
    const cardNumberInput = document.getElementById('cardNumber');
    const cvvInput = document.getElementById('cvv');
    const expiryDateInput = document.getElementById('expiryDate');
    const saveButton = document.getElementById('saveButton');

        const cardNumber = cardNumberInput.value.trim();
        const cvv = cvvInput.value.trim();
        const expiryDate = expiryDateInput.value.trim();

        saveButton.disabled = !(cardNumber && cvv && expiryDate);
    }

    function saveCard() {
        const cardNumberInput = document.getElementById('cardNumber');
    const cvvInput = document.getElementById('cvv');
    const expiryDateInput = document.getElementById('expiryDate');
    const saveButton = document.getElementById('saveButton');

    if(saveButton.disabled){
        return;
    }
        alert('Your data saved successfully!');
        
        // Clear the entered data
        cardNumberInput.value = '';
        cvvInput.value = '';
        expiryDateInput.value = '';
        
        // Additional logic to handle saving data goes here
    }


   //confirm.html
    function enableConfirmButton(){
        document.getElementById("confirmButton").disabled=false;
      }
         function confirmOrder(){
             alert("Your order has been placed!...Thank you for choosing us");
        }

        //login
        
        function logIn(){
         alert("Login successfull....");
         window.location.href="web.html";
       }

       function regIn(){
        alert("Rigistration  successfull....");
        window.location.href="web.html";
   }



       

   

    
    
