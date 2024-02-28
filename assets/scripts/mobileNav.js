/**
 * Melanie Boncaro
 * ISTE 240 - Individual Project Part 2: Final
 * 12/12/2023
 * Script for toggling dropdown navigation on mobile.
 * Toggles visibility of navigation links when the
 * menu button is pressed.
 */

function toggleMenu() {
    let otherLinks = document.getElementById("other_links");
    
    if (otherLinks.className == "other_links") {
        otherLinks.className += " open";
    } else {
        otherLinks.className = "other_links";
    }
}
