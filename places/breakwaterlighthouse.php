<?php
    $page = "Breakwater Lighthouse | Visit Rockland";
    $location = "'Rockland Breakwater Lighthouse'";
    $path = "../";
    include($path . "../dbcon.php");
    include($path . "assets/inc/get_reviews.php");

    include($path . "assets/inc/header.php");
    include($path . "assets/inc/nav.php");
?>

    <div class="place_sub_wrapper">
        <div id="breakwater_hero_img" class="hero_section"></div>
        <div class="place_sections_wrapper">
            <div class="place_hero_txt">
                <h1>Breakwater Lighthouse</h1>
                <p>Located on the end of a 7/8 mile long breakwater, this
                    lighthouse is a popular location to visit while staying
                    in Rockland.</p>
                <p>When colunteers are available, visitors are able to walk 
                    through the attached keeper's house and climb to the top
                    of the lighthouse.
                    You can learn more about visiting the lighthouse 
                    <a href="https://lighthousefoundation.org/what-we-do/programs/lighthouse-tours/tour-rockland-breakwater-light/">
                        here.</a>
                </p>
            </div>
            <div class="place_details">
                <p><b>Location: </b>Samoset Rd, Rockland, ME 04841</p>
                <p><b>Hours: </b>Open sunrise to sunset</p>
                <p><b>Cost: </b>Free (donations appreciated)</p>
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
