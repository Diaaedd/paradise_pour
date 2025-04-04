<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Paradise Pour - Contact</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="alt-header">
        <h1>Paradise Pour 🍹</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/menu">Menu</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>

    <section class="contact-section">
        <div class="contact-form">
            <h2>Neem Contact Op</h2>
            <form action="/contact" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="subject">Onderwerp</label>
                    <input type="text" id="subject" name="subject" required>
                </div>

                <div class="form-group">
                    <label for="message">Bericht</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>

                <button type="submit">Verstuur Bericht</button>
            </form>
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

</body>
</html> 