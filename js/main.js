const menuToggle = document.getElementById("menuToggle");
const mobileMenu = document.getElementById("mobileMenu");

menuToggle.addEventListener("click", function () {

    mobileMenu.classList.toggle("active");

    const isOpen =
        mobileMenu.classList.contains("active");

    menuToggle.setAttribute(
        "aria-expanded",
        isOpen
    );

});

// ==============================
// ACTIVE MENU NAVBAR
// ==============================

const navLinks = document.querySelectorAll(".nav-link");

navLinks.forEach(link => {
    link.addEventListener("click", function () {

        // Hapus active dari semua menu
        navLinks.forEach(item => {
            item.classList.remove("active");
        });

        // Tambahkan active ke menu yang diklik
        this.classList.add("active");
    });
});