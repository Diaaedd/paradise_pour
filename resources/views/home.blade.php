<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Paradise Pour - Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Paradise Pour 🍹</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/menu">Menu</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>

    <section class="hero">
        <h2>Welkom bij Paradise Pour!</h2>
        <p>Ontdek onze heerlijke selectie cocktails, warme dranken, fruit salades en ijsjes in een tropische sfeer.</p>
    </section>

    <div class="category-grid">
        <a href="/menu#cocktails" class="category-card cocktails">
            <div class="category-image">
                <img src="{{ asset('images/home/cards/cocktails-card.jpg') }}" alt="Cocktails">
            </div>
            <div class="category-content">
                <h2>Cocktails</h2>
                <p>Ontdek onze verfrissende cocktails</p>
                <p>Ontdek onze verfrissende cocktails</p>

            </div>
        </a>

        <a href="/menu#warme-dranken" class="category-card warme-dranken">
            <div class="category-image">
                <img src="{{ asset('images/home/cards/koffie-card.jpg') }}" alt="Warme Dranken">
            </div>
            <div class="category-content">
                <h2>Warme Dranken</h2>
                <p>Geniet van onze warme specialiteiten</p>
            </div>
        </a>

        <a href="/menu#fruit-salades" class="category-card fruit-salades">
            <div class="category-image">
                <img src="{{ asset('images/home/cards/fruit-card.jpg') }}" alt="Fruit Salades">
            </div>
            <div class="category-content">
                <h2>Fruit Salades</h2>
                <p>Verse en gezonde fruitmixen</p>
            </div>
        </a>

        <a href="/menu#ijsche" class="category-card ijsche">
            <div class="category-image">
                <img src="{{ asset('images/home/cards/ijs-card.jpg') }}" alt="Ijsjes">
            </div>
            <div class="category-content">
                <h2>Ijsjes</h2>
                <p>Heerlijk verfrissend ijs</p>
            </div>
        </a>
    </div>

    <section class="featured-section">
        <h2>Uitgelichte Items</h2>
        <div class="featured-grid">
            <div class="featured-item">
                <img src="{{ asset('images/menu/cocktails/mojito.jpg') }}" alt="Special Cocktail">
                <div class="featured-content">
                    <span class="featured-label">Populair</span>
                    <h3>Mojito Special</h3>
                    <p>Onze beroemde Mojito met verse munt, limoen en premium rum. Perfect voor een warme zomerdag!</p>
                    <div class="featured-price">€8,50</div>
                </div>
            </div>

            <div class="featured-item">
                <img src="{{ asset('images/menu/fruit-salades/tropische-mix.jpg') }}" alt="Tropische Mix">
                <div class="featured-content">
                    <span class="featured-label">Nieuw</span>
                    <h3>Tropische Mix Deluxe</h3>
                    <p>Een kleurrijke mix van vers seizoensfruit met mango, ananas, en passievrucht. Geserveerd met kokosroom.</p>
                    <div class="featured-price">€7,95</div>
                </div>
            </div>

            <div class="featured-item">
                <img src="{{ asset('images/menu/warme-dranken/koffie-special.jpg') }}" alt="Koffie Special">
                <div class="featured-content">
                    <span class="featured-label">Aanbevolen</span>
                    <h3>Paradise Latte</h3>
                    <p>Huisgemaakte latte met een vleugje vanille en karamel, afgetopt met een kunstzinnig melkschuim design.</p>
                    <div class="featured-price">€4,95</div>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <h2>Over Paradise Pour</h2>
        <p>Bij Paradise Pour combineren we de beste ingrediënten met tropische smaken om een unieke ervaring te creëren. Of je nu op zoek bent naar een verfrissende cocktail, een gezonde fruit salade, of een heerlijk ijsje, wij hebben het allemaal!</p>
        
        <div class="about-features">
            <div class="about-feature">
                <i class="fas fa-glass-martini-alt"></i>
                <h3>Verse Cocktails</h3>
                <p>Ontdek onze selectie van handgemaakte cocktails met de beste tropische ingrediënten.</p>
            </div>
            <div class="about-feature">
                <i class="fas fa-fruit"></i>
                <h3>Fruit Salades</h3>
                <p>Geniet van onze verse fruit salades, perfect voor een gezonde en verfrissende snack.</p>
            </div>
            <div class="about-feature">
                <i class="fas fa-ice-cream"></i>
                <h3>Speciale Ijsjes</h3>
                <p>Proef onze unieke ijsjes, gemaakt met de beste ingrediënten en bijzondere smaken.</p>
            </div>
        </div>
    </section>

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
            const header = document.querySelector('header');
            const scrollThreshold = 100;

            function handleScroll() {
                if (window.scrollY > scrollThreshold) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            }

            window.addEventListener('scroll', handleScroll);
            // Check initial scroll position
            handleScroll();
        });
    </script>
</body>
</html>
