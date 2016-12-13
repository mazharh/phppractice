<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <style>
            #body_wrap {margin: auto;width: 80%;padding: 20px;background-color: white;}
            body {background-color: bisque;}
            #error_block {background-color: lightgray;text-align: center;}
        </style>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li>Home</li>
                    <li>About</li>
                    <li>Contact Us</li>
                    <li>Portfolio</li>
                </ul>
            </nav>
        </header>

        @yield('content')

        <footer>
            This is the footer
        </footer>
    </body>
</html>