<?php
    $page = "Visit Rockland";
    $path = "";
    include($path . "../dbcon.php");

    include($path . "assets/inc/header.php");
    include($path . "assets/inc/nav.php");

    // Get existing reviews from database
    $sql = "SELECT * FROM Reviews ORDER BY reviewDate DESC LIMIT 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $reviews[] = $row;
        }
    }
    
?>
    <script src="assets/scripts/map.js"></script>

    <div class="main_wrapper">
        <!-- Hero -->
        <div class="hero_section">
            <div class="hero_text">
                <h1>Visit Rockland</h1>
            </div>
        </div>

        <div class="content_sections_wrapper">

            <!-- Places -->
            <div class="places_section">
                <div class="section_header">
                    <h2>Places to Visit</h2>
                    <a href="places.php">view all &#8594;</a>
                </div>
                <div class="place_cards_holder">
                    <div class="place_card">
                        <div id="breakwater_img" class="place_img"></div>
                        <a href="places/breakwaterlighthouse.php"><h3>Rockland Breakwater Lighthouse</h3></a> 
                    </div>
                    <div class="place_card">
                        <div id="farnsworth_img" class="place_img"></div>
                        <a href="places/farnsworthmuseum.php"><h3>Farnsworth Art Museum</h3></a> 
                    </div>
                    <div class="place_card">
                        <div id="lighthouse_museum_img" class="place_img"></div>
                        <a href="places/lighthousemuseum.php"><h3>Maine Lighthouse Museum</h3></a> 
                    </div>
                </div>
            </div>

            <!-- Map -->
            <div class="map_section">
                <!-- <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1SDu8Z_KsftaQ1viO1IRTpK0qqRCSGXw&ehbc=2E312F&noprof=1"></iframe> -->
                <div class="map">
                    <img id="map_img" src="assets/media/map_images/map.jpg" alt="Map of Rockland, Maine">
                    <!-- Style initialized inline for map pin so that JS can alter later -->
                    <img id="map_pin" src="assets/media/map_images/pin.png" alt="Map location pin" style="display: none; top: 0; right: 0;">
                </div>
                <div class="map_controls">
                    
                    <div class="map_btn" onclick="updateMap(this)">
                        <h3 id="break_light_btn">Rockland Breakwater Lighthouse</h3>
                        <div class="map_btn_details">
                            <p>Located on the end of a 
                                7/8 mile long breakwater, this lighthouse is a 
                                popular location to visit while staying in Rockland.</p>
                            <a href="places/breakwaterlighthouse.php">Learn more</a>
                        </div>
                    </div>
                    <div class="map_btn" onclick="updateMap(this)">
                        <h3 id="farns_art_btn">Farnsworth Art Museum</h3>
                        <div class="map_btn_details">
                            <p>Considered one of the 
                                best collections of American Art, this museum 
                                can be found right here in Rockland.</p>
                            <a href="places/farnsworthmuseum.php">Learn more</a>
                        </div>

                    </div>
                    <div class="map_btn" onclick="updateMap(this)">
                        <h3 id="light_museum_btn">Maine Lighthouse Museum</h3>
                        <div class="map_btn_details">
                            <p>Discover the history 
                                behind America's lighthouses and the 
                                United States Coast Guard.</p>
                            <a href="places/lighthousemuseum.php">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Events -->
            <div class="events_section">
                <div class="section_header">
                    <h2>Events</h2>
                    <a href="events.php">see more &#8594;</a>
                </div>
                <h4>October 13, 2023</h4>
                <div class="events_card_holder">
                    <div class="event_card">
                        <a href="events/event1.php"><h3>Mini Pumpkin Painting</h3></a>
                        <p class="time">3:30pm - 4:30pm</p>
                        <p>Community Room, Rockland Public Library</p>
                    </div>
                </div>
                <h4>October 14, 2023</h4>
                <div class="events_card_holder">
                    <div class="event_card">
                        <a href="events/event2.php"><h3>Press Your Own Apple Cider</h3></a>
                        <p class="time">1:00am - 3:00pm</p>
                        <p>Front Lawn, Rockland Public Library</p>
                    </div>
                    <div class="event_card">
                        <a href="events/event3.php"><h3>Rockland Electrification Expo</h3></a>
                        <p class="time">10:00am - 3:00pm</p>
                        <p>Harbor Park</p>
                    </div>
                </div>
                <h4>October 16, 2023</h4>
                <div class="events_card_holder">
                    <div class="event_card">
                        <a href="events/event4.php"><h3>Book Group: Catching Up With the Classics</h3></a>
                        <p class="time">6:00pm</p>
                        <p>Reading Room, Rockland Public Library</p>
                    </div>
                </div>
            </div>

            <div class="reviews_section">
                <div class="section_header">
                    <h2>Latest</h2>
                </div>
                <p>See what people are saying about Rockland!</p>
                <?php include($path . "assets/inc/show_reviews.php"); ?>
                <a href="reviews.php">More reviews &#8594;</a>
            </div>

        </div>
    </div>

<?php
    include($path . "assets/inc/footer.php");
?>
