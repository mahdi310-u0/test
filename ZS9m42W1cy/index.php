<?
if($_SERVER['REQUEST_METHOD'] !== "GET"){
header("X-Flag: /JOzTMraOaR");
}
?>
<!DOCTYPE html><html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="robots" content="noindex,nofollow,noarchive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="/statics/favicon-black.png" media="(prefers-color-scheme: light)">
    <link rel="icon" type="image/x-icon" href="/statics/favicon-black.ico" media="(prefers-color-scheme: light)">
    <link rel="icon" type="image/png" href="/statics/favicon-white.png" media="(prefers-color-scheme: dark)">
    <link rel="icon" type="image/x-icon" href="/statics/favicon-white.ico" media="(prefers-color-scheme: dark)">


    <link rel="stylesheet" href="/statics/styles/levels.css">
    
    <title>
      Auroral | Level 02
    </title>
  </head>
  <body>
    <div class="image">
      <picture><source srcset="/statics/images/yc1W24m9SZ.webp" type="image/webp"> <source srcset="/statics/images/yc1W24m9SZ.jpg" type="image/jpeg"> <img src="/statics/images/yc1W24m9SZ.jpg" alt="Background"></picture>
    </div>

    <main class="content level">

      <h1>
        Level <b>02</b>
      </h1>

      <p>
        <button id="runaway-btn" class="moving-button">
<?
if($_SERVER['REQUEST_METHOD'] === "GET"){
echo "Don't get me";
}
?>
</button>
      </p>
    </main>
    <!-- Google tag (gtag.js) -->


<style>.moving-button {position: fixed; padding: 12px 24px; background-color: #3498db; color: white; border: 2px solid #fff; border-radius: 7px; font-weight: bold; cursor: pointer; z-index: 9999; transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275); box-shadow: 0 4px 15px rgba(0,0,0,0.3); }
.moving-button:active { transform: scale(0.9); }</style>
<script>
const btn = document.getElementById('runaway-btn');
btn.addEventListener('click', function() {
    const maxWidth = window.innerWidth - btn.clientWidth;
    const maxHeight = window.innerHeight - btn.clientHeight;
    const randomX = Math.floor(Math.random() * maxWidth);
    const randomY = Math.floor(Math.random() * maxHeight);
    btn.style.left = randomX + 'px';
    btn.style.top = randomY + 'px';
    const randomColor = `hsl(${Math.random() * 360}, 70%, 50%)`;
    btn.style.backgroundColor = randomColor;
});
</script>
</body></html>