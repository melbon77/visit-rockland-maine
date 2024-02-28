    <script src="<?php echo $path; ?>assets/scripts/mobileNav.js"></script>
    <nav class="navbar">
        <div class="home_link" id="home_link">
            <img id="rockland_logo" src="<?php echo $path; ?>assets/media/rocklandLogo.png" alt="Rockland logo">
            <a href="<?php echo $path; ?>index.php">Rockland, ME</a>
        </div>
        <div class="other_links" id="other_links">

            <div class="dropdown">
                <a class="dropdown_btn" href="<?php echo $path; ?>places.php">Places to Visit</a>
                <div class="dropdown_items">
                    <p>Locations</p>
                    <a href="<?php echo $path; ?>places/breakwaterlighthouse.php">Rockland Breakwater Lighthouse</a>
                    <a href="<?php echo $path; ?>places/farnsworthmuseum.php">Farnsworth Art Museum</a>
                    <a href="<?php echo $path; ?>places/lighthousemuseum.php">Maine Lighthouse Museum</a>
                    <p>Insights</p>
                    <a href="<?php echo $path; ?>reviews.php">Reviews</a>
                </div>
            </div>

            <div class="dropdown">
                <a class="dropdown_btn" href="<?php echo $path; ?>events.php">Events</a>
                <div class="dropdown_items">
                    <a href="<?php echo $path; ?>events/event1.php">Mini Pumpkin Painting</a>
                    <a href="<?php echo $path; ?>events/event2.php">Press Your Own Apple Cider</a>
                    <a href="<?php echo $path; ?>events/event3.php">Rockland Electrification Expo</a>
                    <a href="<?php echo $path; ?>events/event4.php">Book Group: Catching Up With the Classics</a>
                </div>
            </div>

            <div id="about_btn">
                <a href="<?php echo $path; ?>about.php">About</a>
            </div>

        </div>
        <span id="menu_btn" onclick="toggleMenu()">
            <img src="<?php echo $path; ?>assets/media/menuIcon.png" alt="Menu icon">
        </span>
    </nav>
