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

        <title>Contact LUZ</title>
    </head>

    <body>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-10 mt-5">
                    <form>
                        <div class="pb-3 form-group">
                            <label for="userEmail">Email Address</label>
                            <input type="email" class="form-control" id="userEmail" placeholder="name@email.com">
                        </div>

                        <div class="pb-3 form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" id="content" rows="3" placeholder="Start typing here..."></textarea>
                        </div>
                    </form>

                    <button type="button" class="btn btn-dark"><a href="./contact.html">SUBMIT</a></button>
                </div>

                <div id="header" class="col-md-2"></div>
            </div>
        </div>
    </body>
</html>