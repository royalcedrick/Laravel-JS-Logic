var myElement = document.getElementById('navbar-toggle');
/**
 * Bind event to navbar toggler
 */
myElement.addEventListener('click', function () {
    let elementNavbarItems = document.getElementById('navbar-items');
    // elementNavbarItems.style.display = (elementNavbarItems.style.display !== 'block') ? 'block' : 'none';
    if (elementNavbarItems.className === "") {
        elementNavbarItems.className += "navbar-toggle-off";
    } else {
        elementNavbarItems.className = "";
    }
});