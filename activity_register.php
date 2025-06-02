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
    <main class="container">
            <h1>Event Registration</h1>
            <form action="process_activity.php" method="post">
                <div class=mb-3>
                    <label class=form-label>Activity List</label>
                    <list class="list-group">
                        <li class="list-group-item">
                            <input type="checkbox" name="activity[]" value="Chess"> Chess 
                            <input type="checkbox" name="activity[]" value="Chess"> Mahjong 
                            <input type="checkbox" name="activity[]" value="Chess"> Tai Chi 
                            <input type="checkbox" name="activity[]" value="Chess"> Caligraphy 
                        </li>
                    </list>
                </div>
                <div class=mb-3>
                    <fieldset>
                        <legend>Choose Preferred Location (required):</legend>
                        <div>
                        <input
                            type="radio"
                            id="locChoice1"
                            name="location"
                            value="North"
                            checked />
                        <label for="locChoice1">North</label>

                        <input 
                            type="radio" 
                            id="locChoice2" 
                            name="location" 
                            value="South" 
                            />
                        <label for="locChoice2">South</label>

                        <input
                            type="radio"
                            id="locChoice3"
                            name="location"
                            value="East"
                            />
                        <label for="locChoice3">East</label>
                        <input
                            type="radio"
                            id="locChoice4"
                            name="location"
                            value="West"
                            />
                        <label for="locChoice3">West</label>
                        <input
                            type="radio"
                            id="locChoice5"
                            name="location"
                            value="Central"
                            />
                        <label for="locChoice3">Central</label>
                        </div>
                    </fieldset>    
                </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </form>
        </main>
    <?php
        include "inc/footer.inc.php";
    ?>
</body>