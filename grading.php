<?php 
    $page = "Grading - Melanie Boncaro";
    $path = "";

    include($path . "assets/inc/header.php");
    include($path . "assets/inc/nav.php");
?>

    <div class="content_sections_wrapper table">
        <h1>Grading</h1>
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
                    <td></td>
                </tr>
                <tr>
                    <td>DHTML</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Extras</td>
                    <td>
                        <ol>
                            <li>First thing</li>
                            <li>Second thing</li>
                        </ol>
                    </td>
                </tr>
            </tbody>
        </table>

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
