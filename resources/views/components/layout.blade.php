<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My First Laravel Project</title>
    <style>
        nav > a {
            color: blue;
            padding: 1em;
        }
    </style>
</head>
     <nav>
            <a href="/">
                Home
            </a>
            <a href="/about">
                About Us
            </a>
            <a href="/contact">
                contact
            </a>
        </nav>
    <main>
        {{ $slot }}
    </main>

</body>
</html>

