// document.addEventListener("DOMContentLoaded", function () {
//     document.querySelectorAll(".toggle-image").forEach(img => {
//         img.addEventListener("click", function () {
//             let largeSrc = this.getAttribute("data-large");

//             // Remove existing popup if any
//             let existingPopup = document.querySelector(".img-popup");
//             if (existingPopup) {
//                 existingPopup.remove();
//                 return;
//             }

//             // Create the popup container
//             let popup = document.createElement("div");
//             popup.classList.add("img-popup");

//             // Create the large image inside the popup
//             let enlargedImg = document.createElement("img");
//             enlargedImg.src = largeSrc;
//             enlargedImg.classList.add("img-popup-content");

//             // Append everything
//             popup.appendChild(enlargedImg);
//             document.body.appendChild(popup);

//             // Close when clicking outside the image
//             popup.addEventListener("click", function () {
//                 popup.remove();
//             });
//         });
//     });
// });

document.addEventListener("DOMContentLoaded", function () {
    // Existing image toggle logic
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

    // 👇 Community status rotation logic starts here
    const users = [
        { id: "01", name: "Mary", area: "North", status: "Online", lastSeen: "1d 1h 40m" },
        { id: "02", name: "John", area: "East", status: "Online", lastSeen: "2h 30m" },
        { id: "03", name: "Ali", area: "Central", status: "Online", lastSeen: "5m" },
        { id: "04", name: "Susan", area: "West", status: "Online", lastSeen: "10m" },
        { id: "05", name: "Ben", area: "NorthEast", status: "Online", lastSeen: "20m" },
        { id: "06", name: "Lily", area: "North", status: "Online", lastSeen: "3h 5m" },
        { id: "07", name: "Tom", area: "East", status: "Online", lastSeen: "4h 10m" },
        { id: "08", name: "Jane", area: "Central", status: "Online", lastSeen: "2d 3h" },
        { id: "09", name: "Mark", area: "West", status: "Online", lastSeen: "1h 15m" },
        { id: "10", name: "Aisha", area: "NorthEast", status: "Online", lastSeen: "45m" }
    ];

    let startIndex = 0;

    function updateCommunityTable() {
        const tbody = document.getElementById("community-body");
        tbody.innerHTML = "";

        for (let i = 0; i < 5; i++) {
            const user = users[(startIndex + i) % users.length];

            const row = document.createElement("tr");
            row.innerHTML = `
                <td class="py-4 px-6 glow-red-border">${user.id}</td>
                <td class="py-4 px-6 glow-red-border">${user.name}</td>
                <td class="py-4 px-6 glow-red-border">${user.area}</td>
                <td class="py-4 px-6 glow-red-border">${user.status}</td>
                <td class="py-4 px-6 glow-red-border">${user.lastSeen}</td>
            `;
            tbody.appendChild(row);
        }

        startIndex = (startIndex + 1) % users.length;
    }

    updateCommunityTable();
    setInterval(updateCommunityTable, 5000);
});

