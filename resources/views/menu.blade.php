<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Paradise Pour - Menu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header class="alt-header">
        <h1>Paradise Pour 🍹</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/menu">Menu</a>
            <a href="/contact">Contact</a>
        </nav>
        <button id="cart-toggle" class="cart-toggle">
            <i class="fas fa-shopping-cart"></i>
            <span class="cart-count">0</span>
        </button>
    </header>

    <!-- Shopping Cart Panel -->
    <div id="cart-panel" class="cart-panel">
        <div class="cart-header">
            <h3>Winkelwagen</h3>
            <button id="close-cart" class="close-cart">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="cart-items">
            <!-- Cart items will be dynamically added here -->
        </div>
        <div class="cart-footer">
            <div class="cart-total">
                <span>Totaal:</span>
                <span class="total-amount">€0,00</span>
            </div>
            <button id="checkout-btn" class="checkout-btn">
                Bestellen
            </button>
        </div>
    </div>

    <div class="menu-hero">
        <div class="menu-hero-content">
            <h2>Ons Menu</h2>
            <p>Ontdek onze heerlijke selectie verfrissende drankjes</p>
        </div>
        <div class="decorative-fruit floating mango" style="top: 20%; left: 10%; width: 100px; height: 100px;">
            <img src="{{ asset('images/decorative/mango.png') }}" alt="Mango">
        </div>
        <div class="decorative-fruit floating pineapple" style="top: 60%; right: 15%; width: 80px; height: 80px;">
            <img src="{{ asset('images/decorative/pineapple.png') }}" alt="Pineapple">
        </div>
        <div class="decorative-fruit floating strawberry" style="bottom: 20%; left: 20%; width: 60px; height: 60px;">
            <img src="{{ asset('images/decorative/Strawberry.png') }}" alt="Strawberry">
        </div>
        <div class="decorative-fruit floating watermelon" style="top: 30%; right: 25%; width: 70px; height: 70px;">
            <img src="{{ asset('images/decorative/watermelon.png') }}" alt="Watermelon">
        </div>
    </div>

    <div class="menu-filters">
        <button class="filter-button all active" data-filter="all">
            <i class="fas fa-th-large"></i> Alle Categorieën
        </button>
        <button class="filter-button cocktails" data-filter="cocktails">
            <i class="fas fa-cocktail"></i> Cocktails
        </button>
        <button class="filter-button warme-dranken" data-filter="warme-dranken">
            <i class="fas fa-coffee"></i> Warme Dranken
        </button>
        <button class="filter-button fruit-salades" data-filter="fruit-salades">
            <i class="fas fa-apple-alt"></i> Fruit Salades
        </button>
        <button class="filter-button ijsjes" data-filter="ijsjes">
            <i class="fas fa-ice-cream"></i> IJsjes
        </button>
    </div>

    <div class="menu-container">
        <section class="menu-section cocktails" id="cocktails">
            <div class="decorative-fruit floating orange" style="top: 1%; right: 5%; width: 100px; height: 160px;">
                <img src="{{ asset('images/decorative/orange.png') }}" alt="Orange">
            </div>
            <div class="decorative-fruit floating cherry" style="bottom: 7%; left: -2%; width: 90px; height: 90px;">
                <img src="{{ asset('images/decorative/cherry.png') }}" alt="Cherry">
            </div>
            <div class="section-header">
                <h2><i class="fas fa-cocktail"></i> Cocktails</h2>
                <p class="section-description">Ontdek onze verfrissende cocktail selectie</p>
            </div>
            <div class="menu-grid">
                <div class="menu-item">
                    <div class="menu-item-image">
                        <img src="{{ asset('images/menu/cocktails/mojito.jpg') }}" alt="Mojito">
                        <div class="menu-item-overlay">
                            <span class="price">€8,50</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-plus"></i> Toevoegen
                            </button>
                        </div>
                    </div>
                    <div class="menu-item-content">
                        <h3>Mojito</h3>
                        <p>Verfrissende cocktail met witte rum, verse munt, limoen, suiker en bruiswater. Perfect voor een zomerse dag!</p>
                        <div class="menu-item-tags">
                            <span class="tag">Alcoholisch</span>
                            <span class="tag">Verfrissend</span>
                        </div>
                    </div>
                </div>

                <div class="menu-item">
                    <div class="menu-item-image">
                        <img src="{{ asset('images/menu/cocktails/pina-colada.jpg') }}" alt="Pina Colada">
                        <div class="menu-item-overlay">
                            <span class="price">€9,00</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-plus"></i> Toevoegen
                            </button>
                        </div>
                    </div>
                    <div class="menu-item-content">
                        <h3>Pina Colada</h3>
                        <p>Tropische cocktail met witte rum, kokosroom en vers ananassap. Geserveerd in een luxe glas met vers fruit.</p>
                        <div class="menu-item-tags">
                            <span class="tag">Alcoholisch</span>
                            <span class="tag">Tropisch</span>
                        </div>
                    </div>
                </div>

                <div class="menu-item">
                    <div class="menu-item-image">
                        <img src="{{ asset('images/menu/cocktails/mango-daiquiri.jpg') }}" alt="Mango Daiquiri">
                        <div class="menu-item-overlay">
                            <span class="price">€8,50</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-plus"></i> Toevoegen
                            </button>
                        </div>
                    </div>
                    <div class="menu-item-content">
                        <h3>Mango Daiquiri</h3>
                        <p>Exotische daiquiri met verse mango, rum en limoensap. Een perfecte balans tussen zoet en zuur.</p>
                        <div class="menu-item-tags">
                            <span class="tag">Alcoholisch</span>
                            <span class="tag">Exotisch</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="menu-section warme-dranken" id="warme-dranken">
            <div class="decorative-fruit floating coffee-bean" style="top: 3%; left: -3%; width: 140px; height: 120px;">
                <img src="{{ asset('images/decorative/coffee-bean.png') }}" alt="Coffee Bean">
            </div>
            <div class="decorative-fruit floating pomegranate" style="bottom: 7%; right: 6%; width: 55px; height: 55px;">
                <img src="{{ asset('images/decorative/pomegranate.png') }}" alt="Pomegranate">
            </div>
            <div class="section-header">
                <h2><i class="fas fa-coffee"></i> Warme Dranken</h2>
                <p class="section-description">Geniet van onze warme specialiteiten</p>
            </div>
            <div class="menu-grid">
                <div class="menu-item">
                    <div class="menu-item-image">
                        <img src="{{ asset('images/menu/warme-dranken/koffie-special.jpg') }}" alt="Koffie Specialiteiten">
                        <div class="menu-item-overlay">
                            <span class="price">€3,50</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-plus"></i> Toevoegen
                            </button>
                        </div>
                    </div>
                    <div class="menu-item-content">
                        <h3>Koffie Specialiteiten</h3>
                        <p>Verse koffie met keuze uit verschillende soorten melk, siropen en toppings. Vraag naar onze speciale koffie van de maand!</p>
                        <div class="menu-item-tags">
                            <span class="tag">Warm</span>
                            <span class="tag">Cafeïne</span>
                        </div>
                    </div>
                </div>

                <div class="menu-item">
                    <div class="menu-item-image">
                        <img src="{{ asset('images/menu/warme-dranken/thee.jpg') }}" alt="Thee Variaties">
                        <div class="menu-item-overlay">
                            <span class="price">€3,00</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-plus"></i> Toevoegen
                            </button>
                        </div>
                    </div>
                    <div class="menu-item-content">
                        <h3>Thee Variaties</h3>
                        <p>Keuze uit verschillende premium theesoorten, van klassieke Earl Grey tot exotische fruitmelanges. Geserveerd met honing.</p>
                        <div class="menu-item-tags">
                            <span class="tag">Warm</span>
                            <span class="tag">Premium</span>
                        </div>
                    </div>
                </div>

                <div class="menu-item">
                    <div class="menu-item-image">
                        <img src="{{ asset('images/menu/warme-dranken/chocolade.jpg') }}" alt="Chocolade Dranken">
                        <div class="menu-item-overlay">
                            <span class="price">€4,00</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-plus"></i> Toevoegen
                            </button>
                        </div>
                    </div>
                    <div class="menu-item-content">
                        <h3>Chocolade Dranken</h3>
                        <p>Luxe warme chocolademelk gemaakt met Belgische chocolade. Keuze uit pure, melk of witte chocolade. Met slagroom en marshmallows.</p>
                        <div class="menu-item-tags">
                            <span class="tag">Warm</span>
                            <span class="tag">Luxe</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="menu-section fruit-salades" id="fruit-salades">
            <div class="decorative-fruit floating fruit-bowl" style="bottom: 7%; right: 5%; width: 90px; height: 70px;">
                <img src="{{ asset('images/decorative/fruit-bowl.png') }}" alt="Fruit Bowl">
            </div>
            <div class="decorative-fruit floating kiwi" style="top: 4%; left: 0%; width: 100px; height: 120px;">
                <img src="{{ asset('images/decorative/kiwi.png') }}" alt="Kiwi">
            </div>
            <div class="section-header">
                <h2><i class="fas fa-apple-alt"></i> Fruit Salades</h2>
                <p class="section-description">Verse en gezonde fruitmixen</p>
            </div>
            <div class="menu-grid">
                <div class="menu-item">
                    <div class="menu-item-image">
                        <img src="{{ asset('images/menu/fruit-salades/tropische-mix.jpg') }}" alt="Tropische Mix">
                        <div class="menu-item-overlay">
                            <span class="price">€7,50</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-plus"></i> Toevoegen
                            </button>
                        </div>
                    </div>
                    <div class="menu-item-content">
                        <h3>Tropische Mix</h3>
                        <p>Kleurrijke mix van mango, ananas, papaya en passievrucht. Bestrooid met kokosrasp en geserveerd met een vleugje limoensap.</p>
                        <div class="menu-item-tags">
                            <span class="tag">Vers</span>
                            <span class="tag">Tropisch</span>
                        </div>
                    </div>
                </div>

                <div class="menu-item">
                    <div class="menu-item-image">
                        <img src="{{ asset('images/menu/fruit-salades/avocado-mix.jpg') }}" alt="Avocado Mix">
                        <div class="menu-item-overlay">
                            <span class="price">€8,00</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-plus"></i> Toevoegen
                            </button>
                        </div>
                    </div>
                    <div class="menu-item-content">
                        <h3>Avocado Mix</h3>
                        <p>Romige avocado gecombineerd met vers seizoensfruit. Een heerlijke en voedzame combinatie van smaken.</p>
                        <div class="menu-item-tags">
                            <span class="tag">Vers</span>
                            <span class="tag">Gezond</span>
                        </div>
                    </div>
                </div>

                <div class="menu-item">
                    <div class="menu-item-image">
                        <img src="{{ asset('images/menu/fruit-salades/fruit-mix.jpg') }}" alt="Fruit Mix">
                        <div class="menu-item-overlay">
                            <span class="price">€8,50</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-plus"></i> Toevoegen
                            </button>
                        </div>
                    </div>
                    <div class="menu-item-content">
                        <h3>Fruit Mix</h3>
                        <p>Een verfrissende mix van seizoensgebonden vers fruit. Perfect voor een gezonde en smaakvolle traktatie!</p>
                        <div class="menu-item-tags">
                            <span class="tag">Vers</span>
                            <span class="tag">Seizoensgebonden</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="menu-section ijsjes" id="ijsjes">
            <div class="decorative-fruit floating ice-cream" style="bottom: 3%; left: -4%; width: 100px; height: 160px;">
                <img src="{{ asset('images/decorative/ice-cream.png') }}" alt="Ice Cream">
            </div>
            <div class="decorative-fruit floating pitaya" style="top: 0%; right: 7%; width: 100px; height: 150px;">
                <img src="{{ asset('images/decorative/Pitaya.png') }}" alt="Pitaya">
            </div>
            <div class="section-header">
                <h2><i class="fas fa-ice-cream"></i> IJsjes</h2>
                <p class="section-description">Heerlijk verfrissend ijs</p>
            </div>
            <div class="menu-grid">
                <div class="menu-item">
                    <div class="menu-item-image">
                        <img src="{{ asset('images/menu/ijsjes/bessen-special.jpg') }}" alt="Roomijs">
                        <div class="menu-item-overlay">
                            <span class="price">€2,50</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-plus"></i> Toevoegen
                            </button>
                        </div>
                    </div>
                    <div class="menu-item-content">
                        <h3>Roomijs</h3>
                        <p>Romig Italiaans ijs in verschillende smaken. Keuze uit vanille, chocolade, aardbei, pistache en meer. Per bol geserveerd.</p>
                        <div class="menu-item-tags">
                            <span class="tag">Romig</span>
                            <span class="tag">Klassiek</span>
                        </div>
                    </div>
                </div>

                <div class="menu-item">
                    <div class="menu-item-image">
                        <img src="{{ asset('images/menu/ijsjes/lemon-ice.jpg') }}" alt="Lemon Sorbet">
                        <div class="menu-item-overlay">
                            <span class="price">€2,50</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-plus"></i> Toevoegen
                            </button>
                        </div>
                    </div>
                    <div class="menu-item-content">
                        <h3>Lemon Sorbet</h3>
                        <p>Verfrissend sorbetijs gemaakt van vers fruit. Keuze uit citroen, framboos, mango of passievrucht. Perfect voor een warme dag!</p>
                        <div class="menu-item-tags">
                            <span class="tag">Verfrissend</span>
                            <span class="tag">Vegan</span>
                        </div>
                    </div>
                </div>

                <div class="menu-item">
                    <div class="menu-item-image">
                        <img src="{{ asset('images/menu/ijsjes/speciale-ijsjes.jpg') }}" alt="Speciale Ijsjes">
                        <div class="menu-item-overlay">
                            <span class="price">€4,00</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-plus"></i> Toevoegen
                            </button>
                        </div>
                    </div>
                    <div class="menu-item-content">
                        <h3>Speciale Ijsjes</h3>
                        <p>Unieke ijscreaties met verschillende toppings, sauzen en garnituren. Vraag naar onze special van de week!</p>
                        <div class="menu-item-tags">
                            <span class="tag">Speciaal</span>
                            <span class="tag">Toppings</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer class="footer">
        <div class="decorative-fruit floating orange" style="top: -80px; right: -100px; width: 180px; height: 180px;">
            <img src="{{ asset('images/decorative/orange.png') }}" alt="Orange">
        </div>
        <div class="decorative-fruit floating cherry" style="top: -60px; left: -80px; width: 140px; height: 140px;">
            <img src="{{ asset('images/decorative/cherry.png') }}" alt="Cherry">
        </div>
        <div class="decorative-fruit floating watermelon" style="bottom: -70px; right: -90px; width: 160px; height: 160px;">
            <img src="{{ asset('images/decorative/watermelon.png') }}" alt="Watermelon">
        </div>
        <div class="decorative-fruit floating kiwi" style="bottom: -60px; left: -70px; width: 130px; height: 130px;">
            <img src="{{ asset('images/decorative/kiwi.png') }}" alt="Kiwi">
        </div>
        
        <div class="decorative-fruit floating mango" style="top: 40%; left: -40px; width: 100px; height: 100px;">
            <img src="{{ asset('images/decorative/mango.png') }}" alt="Mango">
        </div>
        <div class="decorative-fruit floating pineapple" style="top: 30%; right: -50px; width: 120px; height: 120px;">
            <img src="{{ asset('images/decorative/pineapple.png') }}" alt="Pineapple">
        </div>
        <div class="decorative-fruit floating strawberry" style="top: 60%; left: -30px; width: 80px; height: 80px;">
            <img src="{{ asset('images/decorative/Strawberry.png') }}" alt="Strawberry">
        </div>
        <div class="decorative-fruit floating pitaya" style="top: 70%; right: -40px; width: 90px; height: 90px;">
            <img src="{{ asset('images/decorative/Pitaya.png') }}" alt="Pitaya">
        </div>
        
        <div class="footer-content">
            <div class="footer-section">
                <h3>Over Ons</h3>
                <p>Paradise Pour is jouw tropische oase voor verfrissende drankjes en heerlijke versnaperingen. Wij streven ernaar om de beste kwaliteit en service te bieden in een ontspannen sfeer.</p>
            </div>

            <div class="footer-section">
                <h3>Snelle Links</h3>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/menu">Menu</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Contact Info</h3>
                <p>📍 Tropische Laan 123<br>
                   1234 AB Amsterdam</p>
                <p>📞 +31 (0)20 123 4567</p>
                <p>✉️ info@paradisepour.nl</p>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2025 Paradise Pour. Alle rechten voorbehouden.</p>
        </div>
    </footer>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-button');
        const menuSections = document.querySelectorAll('.menu-section');

        function filterMenuSections(filterValue) {
            menuSections.forEach(section => {
                if (filterValue === 'all' || section.classList.contains(filterValue)) {
                    section.style.display = 'block';
                    const menuItems = section.querySelectorAll('.menu-item');
                    menuItems.forEach((item, index) => {
                        item.style.animation = 'none';
                        item.offsetHeight;
                        item.style.animation = `fadeInUp 0.6s ease-out ${index * 0.2}s`;
                    });
                } else {
                    section.style.display = 'none';
                }
            });
        }

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
                const filterValue = button.getAttribute('data-filter');
                filterMenuSections(filterValue);
            });
        });

        const header = document.querySelector('.alt-header');
        const scrollThreshold = 100;

        function handleScroll() {
            if (window.scrollY > scrollThreshold) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }

        window.addEventListener('scroll', handleScroll);
        handleScroll();

        const menuHero = document.querySelector('.menu-hero');
        const heroImage = new Image();
        
        // Preload the background image
        heroImage.src = "{{ asset('images/menu/menu-bg.jpg') }}";
        
        heroImage.onload = function() {
            menuHero.classList.add('loaded');
        };

        // Fallback in case the image is already cached
        if (heroImage.complete) {
            menuHero.classList.add('loaded');
        }
    });
    </script>
    <script src="{{ asset('js/cart.js') }}"></script>
</body>
</html> 