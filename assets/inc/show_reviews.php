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
