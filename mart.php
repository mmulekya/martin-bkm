
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <titl>bkm.com</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Welcome to My Website</h1>
        <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
        </nav>
    </header>

    <section class="hero">
        <h2>Grow Your Business With Me</h2>
        <p>This is my professional business website.</p>
    </section>

    <footer>
        <p>© 2025 My Website. All Rights Reserved.</p>
    </footer>

</body>
</html>
5. Add CSS (Design & Styling)
Put this inside style.css:

body
<!DOCTYPE html>
            color: white;
        <h2>About Us</h2>
        <p>
            We are a professional business offering quality services to our community.
            Our goal is to provide excellent value and outstanding results for our customers.
        </p>
    </section>

    <section class="section" id="services">
        <h2>Our Services</h2>
        <div class="services">
            <div class="card">
                <h3>Service One</h3>
                <p>High‑quality and reliable service tailored to your needs.</p>
            </div>
            <div class="card">
                <h3>Service Two</h3>
                <p>Professional solutions to help you grow and succeed.</p>
            </div>
            <div class="card">
                <h3>Service Three</h3>
                <p>Affordable and effective results for every customer.</p>
            </div>
        </div>
    </section>

    <section class="section contact" id="contact">
        <h2>Contact Us</h2>
        <p>Phone: +000 000 000</p>
        <p>Email: info@mybusiness.com</p>
        <button>WhatsApp Us</button>
    </section>

    <footer>
        © 2025 My Business. All rights reserved.
        <!-- Account System Added -->
    <section class="section" id="account">
        <h2>Create Account / Login</h2>
        <div style="max-width:400px;margin:auto;">
            <form style="display:flex;flex-direction:column;gap:10px;">
                <input type="text" placeholder="Full Name" style="padding:10px;border-radius:6px;border:1px solid #ccc;">
                <input type="email" placeholder="Email" style="padding:10px;border-radius:6px;border:1px solid #ccc;">
                <input type="password" placeholder="Password" style="padding:10px;border-radius:6px;border:1px solid #ccc;">
                <button type="submit">Create Account</button>
            </form>
            <p style="margin-top:15px;text-align:center;">Already have an account? <a href="#login">Login here</a></p>
        </div>

        <div id="login" style="max-width:400px;margin:40px auto;">
            <h3>Login</h3>
            <form style="display:flex;flex-direction:column;gap:10px;">
                <input type="email" placeholder="Email" style="padding:10px;border-radius:6px;border:1px solid #ccc;">
                <input type="password" placeholder="Password" style="padding:10px;border-radius:6px;border:1px solid #ccc;">
                <button type="submit">Login</button>
            </form>
        </div>
    </section>

    </footer>

</body>
</html>!
