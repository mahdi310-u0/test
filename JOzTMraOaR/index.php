<?if ($_SERVER['HTTP_AUTHORIZATION'] === 'Basic QXVyb3JhbDoxMjM0') {
    if ($_COOKIE['user'] === 'admin') {
        if ($_SERVER['HTTP_REFERER'] === $_SERVER['HTTP_HOST']) {
            if ($_SERVER['HTTP_X_FORWARDED_FOR'] === $_SERVER['HTTP_HOST']) {
                  if ($_SERVER['HTTP_USER_AGENT'] === 'YaKarimOS') {
                      header("X-Flag: SGV4OiAyZjYxNTk3MTM1NTQzMjZmNTAzNzZk");
                      $_GLOBAL['A']="T";
                 }
            }
        }
    }
}
setcookie('user','guest');
?> <!DOCTYPE html><html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="robots" content="noindex,nofollow,noarchive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="/statics/favicon-black.png" media="(prefers-color-scheme: light)">
    <link rel="icon" type="image/x-icon" href="/statics/favicon-black.ico" media="(prefers-color-scheme: light)">
    <link rel="icon" type="image/png" href="/statics/favicon-white.png" media="(prefers-color-scheme: dark)">
    <link rel="icon" type="image/x-icon" href="/statics/favicon-white.ico" media="(prefers-color-scheme: dark)">


    <link rel="stylesheet" href="/statics/styles/levels.css">
    <title>
      Auroral | Level 03
    </title>
  </head>
  <body>
    <div class="image">
      <picture><source srcset="/statics/images/RaOarMTzOJ.webp" type="image/webp"> <source srcset="/statics/images/RaOarMTzOJ.jpg" type="image/jpeg"> <img src="/statics/images/RaOarMTzOJ.jpg" alt="Background"></picture>
    </div>

    <main class="content level">

      <h1>
        Level <b>03</b>
      </h1>

      <p>
        <?
if (empty($_GLOBAL['A'])) {
echo "Auroral:1234<br>user=admin<br>referer>". $_SERVER['HTTP_HOST']."<br>forwarded-for>".$_SERVER['HTTP_HOST']."<br>OS>YaKarimOS";} else { echo "Flag in Header..."; }
?>
      </p>
    </main>
    <!-- Google tag (gtag.js) -->
     
    

</body></html>