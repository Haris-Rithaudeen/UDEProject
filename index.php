<!DOCTYPE html>
<!--Prototype UDE WebApp-->
<html lang="en">
<head>
    <title>Kampung Connect</title>
    <?php
        include "inc/head.inc.php";
    ?>
</head>

<body>
    <?php
        include "inc/nav.inc.php";
    ?>
    <?php
        include "inc/header.inc.php";
    ?>

    <!-- Main -->
    <main class="container my-4">
        <!-- Function 1 -->
        <section id="Activities">
            <h2 class="mb-4 text-center">Ongoing Activities</h2>
            <div class="row align-items-center">
                <div class="col-md-6 text-center">
                    <figure>
                        <img class="toggle-image img-thumbnail" 
                            data-large="images/Chess_setup.jpg"
                            src="images/Elderly_Chess.jpg" 
                            alt="Chess" title="Click to enlarge">
                        <figcaption class="text-muted"><em>Chess</em></figcaption>
                    </figure>
                    <h3>Chess</h3>
                </div>

                <div class="col-md-6 text-center">
                    <figure>
                        <img class="toggle-image img-thumbnail" 
                            data-large="images/Mj_setup.jpg"
                            src="images/Elderly_Mahjong.jpg" 
                            alt="Mahjong" title="Click to Check Registration">
                        <figcaption class="text-muted"><em>Elderly playing Mahjong</em></figcaption>
                    </figure>
                    <h3>Mahjong</h3>
                </div>
            
            <btn class="btn btn-primary mt-4" 
                onclick="location.href='activity_register.php'">Register for Activity</btn>

            </div>
        </section>

        <!-- Location -->
        <section id="Location" class="mt-5">
            <h2 class="mb-4 text-center">Location</h2>
            <figure>
                <img class="toggle-image img-thumbnail" 
                    data-large="images/SG_Map.jpg"
                    src="images/SG_Map.jpg" 
                    alt="SG Region" title="Click to enlarge">
                <figcaption class="text-muted"><em>SG Region</em></figcaption>
            </figure>
            <div class="row align-items-center">
            </div>
        </section>
        <body class="bg-black text-white">

  <!-- User Name list -->
  <section class="py-16 bg-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-white mb-8 uppercase">User Name List</h2>
            <div class="bg-gray-900 rounded-lg shadow-lg overflow-x-auto">             
                <table class="w-full text-left">
                    <thead>
                        <tr class="bg-red-600 text-white uppercase text-sm">
                            <th class="py-4 px-6 glow-red-border">User ID</th>
                            <th class="py-4 px-6 glow-red-border">Name</th>
                            <th class="py-4 px-6 glow-red-border">Email</th>
                            <th class="py-4 px-6 glow-red-border">Area</th>      
                        </tr>
                    </thead>
                    <tbody>
                            <tr class="bg-black">
                                    <td class="py-4 px-6 glow-red-border">01</td>
                                    <td class="py-4 px-6 glow-red-border">Mary</td>
                                    <td class="py-4 px-6 glow-red-border">Mary@gmail.com</td>
                                    <td class="py-4 px-6 glow-red-border">North</td>        
                                </tr>
                    </tbody>
                </table>          
            </div>
        </div>
    </section>
    </main>
    <?php
        include "inc/footer.inc.php";
    ?>
    <!-- JavaScript -->
    <script src="js/script.js"></script>
</body>
</html>
