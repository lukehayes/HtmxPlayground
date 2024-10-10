<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTMX</title>
    <script src="js/htmx.min.js"></script>
</head>
<body>


    <!-- have a button POST a click via AJAX -->
    <button hx-get="/api/user" hx-swap="outerHTML" hx-target="#app">
        Click Me
    </button>

    <div id="app">Data:</div>

</body>
</html>
