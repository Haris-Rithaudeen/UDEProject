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
            <figure class="text-center">
                <img class="toggle-image img-thumbnail" 
                     data-large="images/SG_Map.jpg"
                     src="images/SG_Map.jpg" 
                     alt="SG Region" title="Click to enlarge">
                <figcaption class="text-muted"><em>SG Region</em></figcaption>
            </figure>
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
                <tbody id="community-body">
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
