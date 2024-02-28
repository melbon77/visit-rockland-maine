<?php
    $page = "Places | Visit Rockland";
    $path = "";
    include($path . "assets/inc/header.php");
    include($path . "assets/inc/nav.php");
?>

    <div class="places_wrapper">
        <h1>Places to Visit</h1>
        <div class="places_holder">
            <div id="breakwater_img" class="place_img"></div>
            <div class="place_text">
                <h3>Rockland Breakwater Lighthouse</h3>
                <p>Located on the end of a 7/8 mile long breakwater, this
                    lighthouse is a popular location to visit while staying
                    in Rockland.</p>
                <button class="learn_more_btn" onclick="location.href='places/breakwaterlighthouse.php'">Learn More</button>
            </div>
    
            <div class="place_text">
                <h3>Farnsworth Art Museum</h3>
                <p>Considered one of the best collections of American Art, this
                    museum can be found right here in Rockland.</p>
                <button class="learn_more_btn" onclick="location.href='places/farnsworthmuseum.php'">Learn More</button>
            </div>
            <div id="farnsworth_img" class="place_img"></div>
    
            <div id="lighthouse_museum_img" class="place_img"></div>
            <div class="place_text">
                <h3>Maine Lighthouse Museum</h3>
                <p>Discover the history behind America's lighthouses and the
                    United States Coast Guard.
                </p>
                <button class="learn_more_btn" onclick="location.href='places/lighthousemuseum.php'">Learn More</button>
            </div>
        </div>

    </div>
    
<?php
    include($path . "assets/inc/footer.php");
?>
