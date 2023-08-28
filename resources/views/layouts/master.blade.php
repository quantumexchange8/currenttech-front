<!doctype html> 
<html lang="en">
    <head>
        <title>Current Tech</title>
        <link rel="stylesheet" href="{{ asset('assets/master.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    </head>

    <body>

        <div>
            @include('layouts.topbar')

            @yield('content')

            @include('layouts.footer')
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <script>
            window.addEventListener("load", function() {
                const marqueeContents = document.querySelectorAll(".marquee-content");

                // Clone the marquee items for each marquee row
                marqueeContents.forEach((marqueeContent) => {
                    const marqueeItems = marqueeContent.querySelectorAll(".marquee-item");
                    const marqueeWidth = marqueeItems.length * marqueeItems[0].offsetWidth;

                    // Calculate the number of items needed to fill the width of the marquee
                    const numberOfItems = Math.ceil(marqueeContent.offsetWidth / marqueeItems[0].offsetWidth);

                    // Clone the items
                    for (let i = 0; i < numberOfItems; i++) {
                        marqueeItems.forEach((item) => {
                            marqueeContent.appendChild(item.cloneNode(true));
                        });
                    }

                    marqueeContent.style.width = (marqueeWidth * numberOfItems) + "px";
                });
            });

        </script>
        
    </body>
</html>

</html>