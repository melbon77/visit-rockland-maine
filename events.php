<?php
    $page = "Events | Visit Rockland";
    $path = "";
    include($path . "assets/inc/header.php");
    include($path . "assets/inc/nav.php");
?>

    <div class="events_wrapper">
        <h1>Events</h1>
        <div class="event_content">
            <h3 class="date">October 13, 2023</h3>
            <div class="event">
                <div class="desc">
                    <h3>Mini Pumpkin Painting</h3>
                    <p>Put on your Halloween costume and join us to 
                        paint your own small pumpkin.</p>
                </div>
                <button class="learn_more_btn" onclick="location.href='events/event1.php'">Register</button>
            </div>

            <h3 class="date">October 14, 2023</h3>
            <div class="event">
                <div class="desc">
                <h3>Press Your Own Apple Cider</h3>
                <p>Bring your own apples and storage vessels and you can
                    use our apple presses to make your own apple cider!</p>
                </div>
                <button class="learn_more_btn" onclick="location.href='events/event2.php'">Register</button>
            </div>
            <div class="event">
                <div class="desc">
                <h3>Rockland Electrification Expo</h3>
                <p>Join us for this event!</p>
                </div>
                <button class="learn_more_btn" onclick="location.href='events/event3.php'">Register</button>
            </div>

            <h3 class="date">October 16, 2023</h3>
            <div class="event">
                <div class="desc">
                    <h3>Book Group: Catching Up With the Classics</h3>
                    <p>Join us for this event!</p>
                </div>
                <button class="learn_more_btn" onclick="location.href='events/event4.php'">Register</button>
            </div>
        </div>

    </div>

<?php
    include($path . "assets/inc/footer.php");
?>
