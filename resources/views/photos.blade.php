<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script> 
        <script>
            $(function() {
                $("#header").load("./header.html");
                $("#footer").load("./footer.html");
            });
        </script>

        <!--<link rel="stylesheet" href="styles.css">-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../CSS/styles.css" rel="stylesheet">

        <title>LUZ Photos</title>
    </head>

    <body>
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-10">
                    <div class="row">
                        <div class="col mb-3">
                            <img id="honu" class="img-size" src="../IMAGES/honu.jpg" alt="Turtle Bay, Hawaii">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <img id="sedona" class="img-size" src="../IMAGES/sedona.jpg" alt="Sedona, Arizona">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <img id="koreanStore" class="img-size" src="../IMAGES/koreanStore.jpg" alt="Korean Convenience Store">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <img id="twinFalls" class="img-size" src="../IMAGES/twinFalls.jpg" alt="Twin Falls, Idaho">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <img id="greatWall" class="img-size" src="../IMAGES/greatWall.jpg" alt="Great Wall, China">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <img id="koreanStreet" class="img-size" src="../IMAGES/koreaStreet.jpg" alt="Itaewon, Korea">
                        </div>
                    </div>
                </div>

                <div id="header" class="col-md-2"></div>
            </div>
        </div>
    </body>
</html>