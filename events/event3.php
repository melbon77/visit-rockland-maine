<?php
    $page = "Register for Rockland Electrification Expo | Visit Rockland";
    $path = "../";
    include($path . "assets/inc/header.php");
    include($path . "assets/inc/nav.php");
?>

    <div class="event_sub_wrapper">
        <h1>Register</h1>
        <div class="event_img" id="electric_event"></div>
        <div class="events_holder">
            <div class="details">
                <h2>Rockland Electrification Expo</h2>
                <p>Come talk to local businesses and organizations about
                    opportunities to switch to electric. Learn about EVs, 
                    e-bikes, and e-boats, and hear about what the City 
                    of Rockland is doing to limit emissions.
                </p>
                <div class="date">
                    <h3>Date</h3>
                    <p>October 14, 2023</p>
                </div>
                <div class="time">
                    <h3>Time</h3>
                    <p>10:00am - 3:00pm</p>
                </div>
                <div class="location">
                    <h3>Location</h3>
                    <p>Harbor Park</p>
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
