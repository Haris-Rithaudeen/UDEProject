<!DOCTYPE html>
<!-- Prototype UDE WebApp -->
<html lang="en">
<head>
    <title>Kampung Connect</title>
    <?php include "inc/head.inc.php"; ?>
</head>

<body>
    <?php include "inc/nav.inc.php"; ?>
    <?php include "inc/header.inc.php"; ?>

    <!-- Main -->
    <main>
        
<!-- Function 1: Ongoing Activities -->
<section id="Activities">
    <h2 class="mb-4 text-center">Ongoing Activities</h2>
    <div class="row align-items-center">
        <!-- Chess -->
        <div class="col-md-6 text-center">
            <figure>
                <img class="toggle-image activity-img img-thumbnail"
                     data-large="images/Chess_setup.jpg"
                     src="images/Elderly_Chess.jpg"
                     alt="Chess" title="Click to enlarge">
                <figcaption class="text-muted"><em>Elderly playing Chess</em></figcaption>
            </figure>
            <h3>Chess</h3>
        </div>

        <!-- Mahjong -->
        <div class="col-md-6 text-center">
            <figure>
                <img class="toggle-image activity-img img-thumbnail"
                     data-large="images/Mj_setup.jpg"
                     src="images/Elderly_Mahjong.jpg"
                     alt="Mahjong" title="Click to Check Registration">
                <figcaption class="text-muted"><em>Elderly playing Mahjong</em></figcaption>
            </figure>
            <h3>Mahjong</h3>
        </div>
    </div>

    <div class="text-center">
        <button class="btn btn-primary mt-4" onclick="location.href='activity_register.php'">
            Register for Activity
        </button>
    </div>
</section>


        <!-- Location -->
        <section id="Location">
            <h2 class="mb-4 text-center">Location</h2>
            <div>
            <figure class="text-center">
                <img class="toggle-image img-thumbnail" 
                     src="images/SG_Map.jpg" 
                     alt="SG Region" title="Click to enlarge">
                <figcaption class="text-muted"><em>SG Region</em></figcaption>
            </figure>
            </div>
            <div id="region-popup" class="hidden fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50">
                <img id="region-image" class="max-w-[60%] max-h-[60%] border-4 border-white rounded-xl shadow-xl" src="" alt="Region Map">
            </div>
            <div class="text-center py-4">
                <button class="region-btn" data-region="north">North</button>
                <button class="region-btn" data-region="east">East</button>
                <button class="region-btn" data-region="west">West</button>
                <button class="region-btn" data-region="central">Central</button>
            </div>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
            const regionButtons = document.querySelectorAll(".region-btn");
            const popup = document.getElementById("region-popup");
            const popupImage = document.getElementById("region-image");

            const regionImagePaths = {
                north: "images/north.jpg",
                east: "images/east.jpg",
                west: "images/west.jpg",
                central: "images/central.jpg"
            };

            regionButtons.forEach(button => {
                button.addEventListener("click", () => {
                const region = button.getAttribute("data-region");
                popupImage.src = regionImagePaths[region];
                popup.classList.remove("hidden");
                });
            });

            popup.addEventListener("click", () => {
                popup.classList.add("hidden");
                popupImage.src = "";
            });
            });
        </script>
        </section>

        <!-- User Name List -->
<section >
    <div class="container">
        <h2 class="text-3xl font-bold text-center text-black mb-4 uppercase">Community Status</h2>
        <div class="bg-gray-900 rounded-lg shadow-lg overflow-x-auto">
            <table class="w-full text-left text-white">
                <thead>
                    <tr class="bg-red-600 text-black uppercase text-sm">
                        <th class="py-4 px-6 glow-red-border">User ID</th>
                        <th class="py-4 px-6 glow-red-border">Name</th>
                        <th class="py-4 px-6 glow-red-border">Area</th>
                        <th class="py-4 px-6 glow-red-border">Status</th>
                        <th class="py-4 px-6 glow-red-border">Last Seen</th>
                    </tr>
                </thead>
                 <tbody id="community-body" class="bg-zinc-900 text-white">
                    <!-- JS will populate this -->
                </tbody>
            </table>
        </div>
    </div>
</section>
        <!-- GoGoBot -->
<section id="GoGoBot">
    <div class="container text-center">
        <h2 class="text-3xl font-bold text-black mb-4 uppercase">GoGoBot</h2>

        <figure>
            <img src="images\GoGoBot.png" alt="GoGoBot" class="gogobot-image img-thumbnail">
            <figcaption class="text-muted mt-2"><em>Your friendly community assistant</em></figcaption>
        </figure>
    </div>
</section>


        
    </main>

    <?php include "inc/footer.inc.php"; ?>

    <!-- JavaScript -->
    <script src="js/script.js"></script>
</body>
</html>
