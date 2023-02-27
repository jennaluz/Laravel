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

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../CSS/styles.css" rel="stylesheet">

        <title>LUZ</title>
    </head>

    <body>
        <div class="container g-0">
            <div class="row g-0">
                <div class="col-10 pt-5 g-0">
                    <div class="row">
                        <div class="col g-0">
                            <img class="img-size" src="../IMAGES/koreanStore.jpg" alt="Korean Convenience Store">
                        </div>

                        <div class="col g-0">
                            <img class="img-size" src="../IMAGES/honu.jpg" alt="Turtle Bay, Hawaii">
                        </div>

                        <div class="col g-0">
                            <img class="img-size" src="../IMAGES/twinFalls.jpg" alt="Kyoto, Japan">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col g-0">
                            <img class="img-size" src="../IMAGES/sedona.jpg" alt="Sedona, Arizona">
                        </div>

                        <div class="col g-0">
                            <img class="img-size" src="../IMAGES/koreaStreet.jpg" alt="New York, New York">
                        </div>

                        <div class="col g-0">
                            <img class="img-size" src="../IMAGES/greatWall.jpg" alt="Great Wall, China">
                        </div>
                    </div>
                </div>
                <div id="header" class="col-md-2 g-0"></div>
            </div>
            
            <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="gallery-modal-label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <img src="../IMAGES/koreanStore.jpg" class="modal-img img-size" alt="Model Image">
                        </div>
                    </div>
                </div>
            </div>
        </div> 

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../JS/main.js"></script>
    </body>
</html>