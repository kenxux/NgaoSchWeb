    <script src="https://cdn.tailwindcss.com"></script>
    <script>
function homepage() {
    window.location.replace('index.php');
}

function joinus() {
    window.location.replace('joinus.php');
}
    </script>
    <!-- unpkg -->
    <script src="https://unpkg.com/@barba/core"></script>

    <!-- jsdelivr -->
    <script src="https://cdn.jsdelivr.net/npm/@barba/core"></script>
    
    <header class="enhanced-header sticky top-0 z-50">
        <div class="header-content">
            <div class="logo-section">
                <img onclick="homepage()" 
                     style="cursor: pointer;" 
                     class="w-80 h-22 transition-transform hover:scale-105" 
                     src="assects/images/defaults/header_logo.png"
                     alt="Pashupati Technical School Logo">
            </div>
            
            <nav class="nav-menu">
                <a href="index.php" class="nav-link">Home</a>
                <a href="aboutus.php" class="nav-link">About</a>
                <a href="notice.php" class="nav-link">Notices</a>
                <a href="extras.php" class="nav-link">Extras</a>
                <a href="contactUs.php" class="nav-link">Contact Us</a>
            </nav>
            
            <button onclick="joinus()" class="join-button">
                Join Us
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </header>