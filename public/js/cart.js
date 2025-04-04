// Shopping Cart Functionality
class ShoppingCart {
    constructor() {
        this.items = [];
        this.total = 0;
        this.init();
    }

    init() {
        // Cart toggle functionality
        const cartToggle = document.getElementById('cart-toggle');
        const cartPanel = document.getElementById('cart-panel');
        const closeCart = document.getElementById('close-cart');
        const checkoutBtn = document.getElementById('checkout-btn');

        cartToggle.addEventListener('click', () => {
            cartPanel.classList.add('active');
            this.updateCartDisplay();
        });

        closeCart.addEventListener('click', () => {
            cartPanel.classList.remove('active');
        });

        // Add to cart buttons
        document.querySelectorAll('.add-to-cart-btn').forEach(btn => {
            const menuItem = btn.closest('.menu-item');
            const name = menuItem.querySelector('h3').textContent;
            const price = parseFloat(menuItem.querySelector('.price').textContent.replace('€', '').replace(',', '.'));
            const image = menuItem.querySelector('img').src;

            btn.addEventListener('click', () => {
                this.addItem({ name, price, image });
                this.showNotification('Product toegevoegd aan winkelwagen!');
            });
        });

        // Checkout button
        checkoutBtn.addEventListener('click', () => {
            if (this.items.length === 0) {
                this.showNotification('Je winkelwagen is leeg!', 'error');
                return;
            }
            this.checkout();
        });
    }

    addItem(item) {
        const existingItem = this.items.find(i => i.name === item.name);
        
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            this.items.push({ ...item, quantity: 1 });
        }
        
        this.updateCartCount();
        this.updateCartDisplay();
    }

    removeItem(name) {
        this.items = this.items.filter(item => item.name !== name);
        this.updateCartCount();
        this.updateCartDisplay();
    }

    updateQuantity(name, change) {
        const item = this.items.find(i => i.name === name);
        if (item) {
            item.quantity += change;
            if (item.quantity <= 0) {
                this.removeItem(name);
            } else {
                this.updateCartDisplay();
            }
        }
    }

    updateCartCount() {
        const cartCount = document.querySelector('.cart-count');
        const totalItems = this.items.reduce((sum, item) => sum + item.quantity, 0);
        cartCount.textContent = totalItems;
    }

    updateCartDisplay() {
        const cartItems = document.querySelector('.cart-items');
        const totalAmount = document.querySelector('.total-amount');
        
        cartItems.innerHTML = '';
        this.total = 0;

        this.items.forEach(item => {
            const itemTotal = item.price * item.quantity;
            this.total += itemTotal;

            const itemElement = document.createElement('div');
            itemElement.className = 'cart-item';
            itemElement.innerHTML = `
                <div class="cart-item-image">
                    <img src="${item.image}" alt="${item.name}">
                </div>
                <div class="cart-item-details">
                    <div class="cart-item-name">${item.name}</div>
                    <div class="cart-item-price">€${item.price.toFixed(2)}</div>
                    <div class="cart-item-quantity">
                        <button class="quantity-btn minus" data-name="${item.name}">-</button>
                        <span>${item.quantity}</span>
                        <button class="quantity-btn plus" data-name="${item.name}">+</button>
                    </div>
                </div>
            `;

            cartItems.appendChild(itemElement);
        });

        totalAmount.textContent = `€${this.total.toFixed(2)}`;

        // Add event listeners for quantity buttons
        cartItems.querySelectorAll('.quantity-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const name = btn.dataset.name;
                const change = btn.classList.contains('plus') ? 1 : -1;
                this.updateQuantity(name, change);
            });
        });
    }

    showNotification(message, type = 'success') {
        const notification = document.createElement('div');
        notification.className = `notification ${type}`;
        notification.textContent = message;
        document.body.appendChild(notification);

        setTimeout(() => {
            notification.classList.add('show');
        }, 100);

        setTimeout(() => {
            notification.classList.remove('show');
            setTimeout(() => {
                notification.remove();
            }, 300);
        }, 3000);
    }

    checkout() {
        // Simulate a successful order
        this.showNotification('Bedankt voor je bestelling! We bereiden deze met liefde voor je voor.');
        this.items = [];
        this.updateCartCount();
        this.updateCartDisplay();
        document.getElementById('cart-panel').classList.remove('active');
    }
}

// Initialize the shopping cart when the DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new ShoppingCart();
}); 