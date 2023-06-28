
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Backend/Full-stack recruitment task</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>
</head>

<header>
  <div class="logo-wrap">
    <a href="/"><img src="/images/logo.png" ></a>
  </div>
  <div>
    <ul id="navbar">
        <li><a href="/">Home</a></li>
        <li><a href="/users">Users</a></li>
        <li><a href="/about">About</a></li>
    </ul>
  </div>
</header>

<body>
    <main>
        <?php include 'partials/views/'.$content_view; ?>
    </main>  
    
      
    
</body>

<!-- <footer></footer>  -->

</html>


