<?php
    $page = "About | Visit Rockland";
    $path = "";
    include($path . "assets/inc/header.php");
    include($path . "assets/inc/nav.php");
?>

    <!-- About Section -->
    <div class="about_wrapper">
        <div class="about_text">
            <h1>About Rockland</h1>
            <div>
                <h3>
                    Rockland, Maine is a city on the Penobscot Bay and a
                    popular tourist destination. Located on the coast, 
                    there are multiple ferry routes that operate out of 
                    the town. 
                </h3>
                <h3>
                    One notable feature of the city is its lighthouse,
                    viewable from the shoreline and located at the end
                    of a 7/8 mile long breakwater.
                </h3>
            </div>
        </div>
        <div>
            <img class="about_img" src="<?php echo $path; ?>assets/media/karl-magnuson-vq_MtuXhdUs-unsplash.jpg" alt="Breakwater Lighthouse">
        </div>
    </div>

    <!-- Grading Section -->
    <div class="content_sections_wrapper table">
        <h1>Grading</h1>
        <!-- Part 2: Final -->
        <h3>Requirements for Part 2: Final</h3>
        <table>
            <thead>
                <tr>
                    <th scope="col">Component</th>
                    <th scope="col">What I Did</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Original JavaScript</td>
                    <td><b>For the map on the home page,</b>
                        when a location button is pressed, its id is updated to
                        "active" via JS so that additional text is displayed via CSS.
                        The pin is displayed and its location is updated based on 
                        which location is selected.
                    </td>
                </tr>
                <tr>
                    <td>DHTML</td>
                    <td><b>Also for the map on the home page,</b>
                        the placement of the pin is updated by altering its CSS
                        values for top and right locations.
                    </td>
                </tr>
                <tr>
                    <td>Extras</td>
                    <td>
                        <ol>
                            <li>Additional fields in database entry:
                                <ul>
                                    <li>Location you are reviewing</li>
                                    <li>Date and time of review</li>
                                </ul>
                                <p><a href="https://solace.ist.rit.edu/~mb2317/ISTE240/part2_final/reviews.php">All Reviews page</a></p>
                            </li>
                            <li>Location-specific reviews are filtered and 
                                shown on each individual location's page 
                                using a database query in a php include.
                                The same php include is used on each page,
                                but the query will be different based on 
                                each page's designated $location variable.
                                <p><a href="https://solace.ist.rit.edu/~mb2317/ISTE240/part2_final/places/breakwaterlighthouse.php">Breakwater Lighthouse page</a></p>
                            </li>
                            <li>A hamburger menu appears on smaller screens 
                                containing the navigation links in a (hopefully)
                                more mobile-friendly layout.
                            </li>
                        </ol>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Part 1: Midterm -->
        <h3>Requirements for Part 1: Midterm</h3>
        <table>
            <thead>
                <tr>
                    <th scope="col">Requirement</th>
                    <th scope="col">My solution</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Good Design Techniques</td>
                    <td>
                        <b>Contrast: </b>larger text and darker color indicates
                        greater importance.
                        <b>Repetition: </b>used for formatting location and event cards 
                        on the home page. 
                        <b>Alignment: </b> consistent margins across pages.
                        <b>Proximity: </b> closeness of text to images
                        indicates content grouping.
                    </td>
                </tr>
                <tr>
                    <td>Organization of Information</td>
                    <td>Locations to visit are grouped in a section, and events
                        are grouped in another section.
                    </td>
                </tr>
                <tr>
                    <td>Content</td>
                    <td><p><b>1st Submission: </b>Locations have images attached with them.</p>
                        <p><span style="color: red;">Late - </span>
                        <b>2nd Submission: </b>Map added to home page as iframe embed.</p>
                    </td>
                </tr>
                <tr>
                    <td>10 Content Pages</td>
                    <td><p><b>1st Submission: </b>9 pages (home, all places, 
                        places[3], events[4]).</p>
                        <p><span style="color: red;">Late - </span>
                        <b>2nd Submission: </b>+1 page (all events).</p>
                    </td>
                </tr>
                <tr>
                    <td>Code Design Requirements</td>
                    <td>Code is indented, comments throughout HTML and CSS.
                        Global CSS file is used as well as smaller, 
                        page-specific external CSS files.
                    </td>
                </tr>
                <tr>
                    <td>Interaction Design & Navigation</td>
                    <td><p><b>1st Submission: </b>Global navigation, unique 
                        page titles.</p>
                        <p><span style="color: red;">Late - </span>
                        <b>2nd Submission: </b>"You are here" indicator added.</p>
                    </td>

                </tr>
                <tr>
                    <td>HTML & CSS Validates</td>
                    <td>Successful validation.</td>
                </tr>
                <tr>
                    <td>Grading page</td>
                    <td><p><b>1st Submission: </b>No grading page.</p>
                        <p><span style="color: red;">Late - </span>
                        <b>2nd Submission: </b>Grading page included and
                        linked from all pages.</p>
                    </td>
                </tr>
                <tr>
                    <td>Responsive Web Design</td>
                    <td>All page layouts differ between smaller and larger 
                        screens.</td>
                </tr>

            </tbody>
        </table>
    </div>


<?php
    include($path . "assets/inc/footer.php");
?>
