<!-- Mobile Nav -->
<div class="header mobile-header">
    <div id="menuButton" class="menu-button">&#9776;</div>
    <div id="mobileMenu" class="mobile-menu">
        <button onclick="Home()" class="nav-link"><i class="fas fa-home"></i> Home</button>
        <button onclick="Project()" class="nav-link"><i class="fas fa-folder"></i> Projects</button>
        <button onclick="About()" class="nav-link"><i class="fas fa-user"></i> About</button>
        <button onclick="GitHub()" class="nav-link"><i class="fab fa-github"></i> GitHub</button>
    </div>
    <div class="social-media-icons">
        <button class="social-button"><i class="fab fa-instagram"></i></button>
        <button class="social-button"><i class="fab fa-twitter"></i></button>
        <button class="social-button"><i class="fab fa-youtube"></i></button>
        <button class="social-button"><i class="fab fa-twitch"></i></button>
        <?php include 'dropdown.php'; ?>
    </div>
</div>

<!-- Desktop Nav -->
<div class="header desktop-header">
    <nav class="nav-bar">
        <button onclick="Home()" class="nav-link"><i class="fas fa-home"></i> Home</button>
        <button onclick="Project()" class="nav-link"><i class="fas fa-folder"></i> Projects</button>
        <button onclick="About()" class="nav-link"><i class="fas fa-user"></i> About</button>
        <button onclick="GitHub()" class="nav-link"><i class="fab fa-github"></i> GitHub</button>
    </nav>
    <div class="social-media-icons">
        <button class="social-button"><i class="fab fa-instagram"></i></button>
        <button class="social-button"><i class="fab fa-twitter"></i></button>
        <button class="social-button"><i class="fab fa-youtube"></i></button>
        <button class="social-button"><i class="fab fa-twitch"></i></button>
        <?php include 'dropdown.php'; ?>
    </div>
</div>
<script src="script.js"></script>