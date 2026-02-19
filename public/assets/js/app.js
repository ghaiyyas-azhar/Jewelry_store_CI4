document.addEventListener("DOMContentLoaded", function() {

    const userBtn = document.getElementById("userBtn");
    const dropdown = document.getElementById("userDropdown");

    if (userBtn && dropdown) {

        userBtn.addEventListener("click", function(e) {
            e.stopPropagation();
            dropdown.classList.toggle("show");
        });

        window.addEventListener("click", function() {
            dropdown.classList.remove("show");
        });

    }

});
