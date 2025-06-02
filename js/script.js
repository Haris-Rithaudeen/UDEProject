document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".toggle-image").forEach(img => {
        img.addEventListener("click", function () {
            let largeSrc = this.getAttribute("data-large");

            // Remove existing popup if any
            let existingPopup = document.querySelector(".img-popup");
            if (existingPopup) {
                existingPopup.remove();
                return;
            }

            // Create the popup container
            let popup = document.createElement("div");
            popup.classList.add("img-popup");

            // Create the large image inside the popup
            let enlargedImg = document.createElement("img");
            enlargedImg.src = largeSrc;
            enlargedImg.classList.add("img-popup-content");

            // Append everything
            popup.appendChild(enlargedImg);
            document.body.appendChild(popup);

            // Close when clicking outside the image
            popup.addEventListener("click", function () {
                popup.remove();
            });
        });
    });
});
