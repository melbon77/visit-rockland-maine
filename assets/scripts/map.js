/**
 * Melanie Boncaro
 * ISTE 240 - Individual Project Part 2: Final
 * 12/10/2023
 * Script for map on home page.
 * Changes what is shown on map and button state based on 
 * which button was clicked.
 */

let mapImgSrcs = new Array(
    "../media/map_images/default_map.jpg",
    "../media/map_images/break_map.jpg", 
    "../media/map_images/farns_map.jpg",
    "../media/map_images/light_mus_map.jpg",);

let buttons = new Array();
let activeBtn;

function updateMap(btn) {
    // Get all map buttons and remove "active" id
    buttons = document.getElementsByClassName("map_btn");
    for (let i = 0; i < buttons.length;  i++) {
        if (buttons[i].id == "active") {
            buttons[i].removeAttribute("id");
        }
    }

    // Set new active button based on which button was clicked
    if (btn.children[0].id == "break_light_btn") {
        activeBtn = btn;
        mapImg = mapImgSrcs[1];
    } else if (btn.children[0].id == "farns_art_btn") {
        activeBtn = btn;
        mapImg = mapImgSrcs[2];
    } else if (btn.children[0].id == "light_museum_btn") {
        activeBtn = btn;
        mapImg = mapImgSrcs[3];
    }

    toggleActive(activeBtn);
    movePin();
}

function toggleActive(btn) {
    // Toggle id of button that was clicked
    if (btn.id == "active") {
        btn.removeAttribute("id");
    } else {
        btn.id = "active";
    }
}

function movePin() {
    let pin = document.getElementById("map_pin");

    // Set new CSS position of pin based on selected location
    if (activeBtn.children[0].id == "break_light_btn") {
        pin.style.display = "block";
        pin.style.top = "50%";
        pin.style.right = "11%";
    } else if (activeBtn.children[0].id == "farns_art_btn") {
        pin.style.display = "block";
        pin.style.top = "52%";
        pin.style.right = "76%";
    } else if (activeBtn.children[0].id == "light_museum_btn") {
        pin.style.display = "block";
        pin.style.top = "57%";
        pin.style.right = "75%";
    }
}