window.onload = () => {
    const openCloseNavigationMenuButton = document.getElementById(
        "openCloseNavigationMenuButton"
    );
    const navigationMenu = document.getElementById("navigationMenu");

    openCloseNavigationMenuButton.onclick = (event) => {
        console.log("click");
        navigationMenu.classList.toggle("translate-x-full");
        document.body.classList.toggle("overflow-hidden");
    };
};
