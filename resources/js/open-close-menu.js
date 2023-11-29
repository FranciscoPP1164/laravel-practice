window.onload = () => {
    const openCloseNavigationMenuButton = document.getElementById(
        "openCloseNavigationMenuButton"
    );
    const navigationMenu = document.getElementById("navigationMenu");
    const mainContent = document.getElementById("mainContent");

    openCloseNavigationMenuButton.onclick = (event) => {
        navigationMenu.classList.toggle("translate-x-full");
        navigationMenu.classList.toggle("md:w-12");
        navigationMenu.classList.toggle("md:w-56");
        mainContent.classList.toggle("md:ml-12");
        mainContent.classList.toggle("md:ml-56");
    };
};
