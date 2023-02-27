<!DOCTYPE html>
<html lang="en">
    <head>
        <script>
            $(function() {
                $('a').each(function() {
                    if ($(this).prop('href') == window.location.href) {
                        $(this).addClass('current');
                    }
                });
            });
        </script>

        <link rel="stylesheet" href="../CSS/header.css">
    </head>

    <header>
        <div class="navBar">
            <a href="./index.html"><img id="logo" src="../IMAGES/PortfolioLogo.png" alt="LUZ" width="92.4" height="34.4"></a>
            <ul>
                <li><a href="./index.html">HOME</a></li>
                <li><a href="./photos.html">PHOTOS</a></li>
                <li><a href="./bio.html">BIO</a></li>
                <li><a href="./blog.html">BLOG</a></li>
                <li><a href="./contact.html">CONTACT</a></li>
            </ul>

            <div class="socialLinks">
                <ul>
                    <li><a href="https://www.facebook.com" target="_blank"><img src="../IMAGES/FacebookLogo.png" alt="FaceBook Logo"></a></li>
                    <li><a href="https://www.instagram.com" target="_blank"><img src="../IMAGES/InstagramLogo.png" alt="Instagram Logo"></a></li>
                    <li><a href="https://www.linkedin.com" target="_blank"><img src="../IMAGES/LinkedinLogo.png" alt="LinkedIn Logo"></a></li>
                    <li><a href="https://www.github.com" target="_blank"><img src="../IMAGES/GithubLogo.png" alt="GitHub Logo"></a></li>
                </ul>
            </div>
        </div>
    </header>
</html>