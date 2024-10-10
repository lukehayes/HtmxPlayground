<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTMX</title>
    <script src="js/htmx.min.js"></script>
</head>
<body>

    <!-- have a button POST a click via AJAX -->
    <button hx-post="/clicked" hx-swap="outerHTML">
        Click Me
    </button>

</body>
</html>
