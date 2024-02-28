<?php
    $page = "Reviews - Visit Rockland";
    $path = "";
    include("../dbcon.php");

    function sanitize($str, $length = 50) {
        $str = trim($str);	// removes whitespace from beginning and end of string
        $str = htmlentities($str);	// ex: converts < to &lt
        $str = substr($str, 0, $length);

        return $str;
    }

    // If inputs are all filled, add data to database
    if (!empty($_POST)) {
        if (!empty($_POST["fname"]) && !empty($_POST["lname"]) && !empty($_POST["email"]) && !empty($_POST["review"])) {
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $email = $_POST["email"];
            $location = $_POST["location"];
            $review = $_POST["review"];

            $fname = sanitize($fname);
            $lname = sanitize($lname);
            $email = sanitize($email);
            $review = sanitize($review);

            // if (emailCheck($email)) {
            //     // email good
            // } else {
            //     // enter valid email
            // }

            if ($location == "lighthouse") {
                $location = "Rockland Breakwater Lighthouse";
            } else if ($location == "art_museum") {
                $location = "Farnsworth Art Museum";
            } else if ($location == "lighthouse_museum") {
                $location = "Maine Lighthouse Museum";
            }
    
    
            $sql = "INSERT INTO Reviews(fname, lname, email, location, review) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssss", $fname, $lname, $email, $location, $review);
            $stmt->execute();
            $stmt->close();
    
    
        } else {
            echo "<span style='color: red;'>Please enter data into all fields.</span>";
        }
    }

    // Get existing reviews from database
    $sql = "SELECT * FROM Reviews ORDER BY reviewDate DESC LIMIT 50";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $reviews[] = $row;
        }
    }

    include($path . "assets/inc/header.php");
    include($path . "assets/inc/nav.php");
?>

    <script>
        function validate() {
            // validate form data before it submits
            if (document.getElementById("fname").value == "") {
                return false;
            } else if (document.getElementById("lname").value == "") {
                return false;
            } else if (document.getElementById("email").value == "") {
                return false;
            } else if (document.getElementById("review").value == "") {
                return false;
            } else {
                return true;
            }
        }
    </script>


    <div class="reviews_wrapper">
        
        <div class="reviews_img">
            <!-- <img src="assets/media/alex-grodkiewicz-2HIN_BHL0-4-unsplash.jpg" alt="Rocks at low tide"> -->
        </div>

        <div class="reviews_content">
            
            <h2>Visited Rockland? Leave a Review!</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return validate()">
                <label for="fname">First Name: </label><input type="text" name="fname" id="fname"><br><br>
                <label for="lname">Last Name: </label><input type="text" name="lname" id="lname"><br><br>
                <label for="email">Email: </label><input type="text" name="email" id="email"><br><br>
                <label for="location">Location you are reviewing: </label>
                <select name="location" id="location">
                    <option value="lighthouse">Rockland Breakwater Lighthouse</option>
                    <option value="art_museum">Farnsworth Art Museum</option>
                    <option value="lighthouse_museum">Maine Lighthouse Museum</option>
                </select><br>
                <br>
                <label for="review">Write your review here:</label><br>
                <textarea name="review" id="review" rows="6" cols="50"></textarea><br><br>
                <input type="submit" value="Submit review">
            </form>
            <br>
            <hr>
            <h2>User Reviews</h2>
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
                    }
                ?>
        </div>
    </div>
    
<?php
    include($path . "assets/inc/footer.php");
?>
