<?php
    $page = "Maine Lighthouse Museum | Visit Rockland";
    $location = "'Maine Lighthouse Museum'";
    $path = "../";
    include($path . "../dbcon.php");
    include($path . "assets/inc/get_reviews.php");

    include($path . "assets/inc/header.php");
    include($path . "assets/inc/nav.php");
?>

    <div class="place_sub_wrapper">
        <div id="lighthouse_museum_img" class="hero_section"></div>
        <div class="place_sections_wrapper">
            <div class="place_hero_txt">
                <h1>Maine Lighthouse Museum</h1>
                <p>This is the nation's largest collection of lighthouse, 
                    lifesaving, and U.S. Coast Guard artifacts.
                    Come discover the tradition, heroism, and progress
                    behind America's oldest lighthouses.</p>
                <p>More information about the museum can be found
                    <a href="https://mainelighthousemuseum.org/">here.</a>
                </p>
            </div>
            <div class="place_details">
                <p><b>Location: </b>1 Park Dr, Rockland, ME 04841</p>
                <p><b>Hours: </b>Open daily from 10:00am - 4:00pm</p>
                <p><b>Cost: </b></p>
                <ul>
                    <li>Adults - $10</li>
                    <li>Seniors (65+) - $8</li>
                    <li>Children (12 and under) - Free with an Adult</li>
                    <li>Active & Retired Coast Guard - Free</li>
                </ul>
            </div>
            
            <div class="reviews_section">
                <h2>Reviews</h2>
                <?php include($path . "assets/inc/show_reviews.php"); ?>
            </div>

        </div>
    </div>

<?php
    include($path . "assets/inc/footer.php");
?>
