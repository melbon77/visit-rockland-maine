<?php
    $page = "Farnsworth Art Museum | Visit Rockland";
    $location = "'Farnsworth Art Museum'";
    $path = "../";
    include($path . "../dbcon.php");
    include($path . "assets/inc/get_reviews.php");

    include($path . "assets/inc/header.php");
    include($path . "assets/inc/nav.php");    
?>

    <div class="place_sub_wrapper">
        <div id="farnsworth_hero_img" class="hero_section"></div>
        <div class="place_sections_wrapper">
            <div class="place_hero_txt">
                <h1>Farnsworth Art Museum</h1>
                <p>The museum is home to a nationally recognized collection of works
                    from a number of America's greatest artists.
                </p>
                <p>More information about the museum and its collection can be found
                    <a href="https://www.farnsworthmuseum.org/">here.</a>
                </p>
            </div>
            <div class="place_details">
                <p><b>Location: </b>16 Museum Street, Rockland, ME 04841</p>
                <p><b>Hours: </b>Every day from 10:00am to 5:00pm</p>
                <p><b>Cost:</b></p>
                <ul>
                    <li>Members - Free</li>
                    <li>Adults - $20</li>
                    <li>Seniors (65+) - $18</li>
                    <li>Students (17+) - $10</li>
                    <li>Children (16 and under) - Free</li>
                    <li>Rockland Residents - Free</li>
                </ul>
            </div>

            <div class="reviews_section">
                <h2>Reviews</h2>
                <?php
                    if (!empty($reviews)) {
                        foreach ($reviews as $review) { 
                            ?>
    
                            <div class="review"> 
                                <?php
                                echo "<p class='rname'>" . $review["fname"] . " " . $review["lname"] . "</p>";
                                echo "<p class='rlocation'>" . "Visited " . $review["location"] . "</p>";
                                echo "<p class='rtext'>" . $review["review"] . "</p>";
                                echo "<p class='rdate'>" . $review["reviewdate"] . "</p>";
                                ?>
                            </div>
    
                            <?php
                        }
                    } else {
                        echo "<p>There are no reviews for this location yet. ";
                        echo "<a href='../reviews.php'>Leave the first one!</a>";
                    }
                ?>
            </div>
        </div>
    </div>
<?php
    include($path . "assets/inc/footer.php");
?>
