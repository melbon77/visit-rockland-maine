<?php
    $page = "Register for Mini Pumpkin Painting | Visit Rockland";
    $path = "../";
    include($path . "assets/inc/header.php");
    include($path . "assets/inc/nav.php");
?>

    <div class="event_sub_wrapper">
        <h1>Register</h1>
        <div class="event_img" id="pumpkin_event"></div>
        <div class="event_content">
            <div class="details">
                <h2>Mini Pumpkin Painting</h2>
                <p>Put on your Halloween costume and join us at the Library 
                    to paint your own small pumpkin.
                </p>
                <div class="date">
                    <h3>Date</h3>
                    <p>October 13, 2023</p>
                </div>
                <div class="time">
                    <h3>Time</h3>
                    <p>3:30pm - 4:30pm</p>
                </div>
                <div class="location">
                    <h3>Location</h3>
                    <p>Community Room, Rockland Public Library</p>
                </div>
            </div>
            <div class="registration">
                <label for="attendee_num">Number of Attendees:</label>
                <input type="number" name="attendee_num" id="attendee_num" value="1" min="1" max="20">
                <button>Register</button>
            </div>
        </div>
    </div>

<?php 
    include($path . "assets/inc/footer.php");
?>
