<!doctype html> 
<html lang="en">
    <head>
        <title>Current Tech</title>
        <link rel="stylesheet" href="{{ asset('assets/master.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    </head>

    <body>

        <div class="container-scoller">
            @include('layouts.topbar')

            @yield('content')

            @include('layouts.footer')
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>
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

        <script>
            window.addEventListener("load", function() {
                const marqueeContents = document.querySelectorAll(".web3-marquee-content");

                // Clone the marquee items for each marquee row
                marqueeContents.forEach((marqueeContent) => {
                    const marqueeItems = marqueeContent.querySelectorAll(".web3-marquee-item");
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

        <script>
            window.addEventListener("load", function() {
                const marqueeContents = document.querySelectorAll(".web3-marquee-content-2");

                // Clone the marquee items for each marquee row
                marqueeContents.forEach((marqueeContent) => {
                    const marqueeItems = marqueeContent.querySelectorAll(".web3-marquee-item-2");
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

        <script>
            document.addEventListener('click', function(event) {
                // var navMenu = document.getElementById('navMenu');
                // var navToggle = document.querySelector('.nav-toggle');

                // Check if the clicked element is outside the nav-menu
                // if (!navMenu.contains(event.target) && !navToggle.contains(event.target)) {
                //     navMenu.classList.remove('active');// Hide the nav-menu
                // }
                });

                // function toggleNav() {
                // var navMenu = document.getElementById('navMenu');
                // var navToggle = document.querySelector('.nav-toggle');
                
                // // Check if the navMenu has the active class
                // if (navMenu.classList.contains('active')) {
                //     // If it has the active class, remove it to hide the menu
                //     navMenu.classList.remove('active');
                // } else {
                //     // If it doesn't have the active class, add it to show the menu
                //     navMenu.classList.add('active');
                // }
                // }

                function toggleSubMenu(subMenuId) {
                var subMenu = document.getElementById(subMenuId);
                var subMenuArrow = subMenu.previousElementSibling.querySelector('i');
                var subMenus = document.getElementsByClassName("sub-menu");

                // Check if the clicked sub-menu is already active
                if (subMenu.classList.contains("active")) {
                subMenu.classList.remove("active");
                subMenuArrow.classList.remove("mdi-chevron-up");
                subMenuArrow.classList.add("mdi-chevron-down");
                } else {
                // Deactivate all sub-menus
                for (var i = 0; i < subMenus.length; i++) {
                    subMenus[i].classList.remove("active");
                    var arrow = subMenus[i].previousElementSibling.querySelector('i');
                    arrow.classList.remove("mdi-chevron-up");
                    arrow.classList.add("mdi-chevron-down");
                }
                
                // Activate the clicked sub-menu
                subMenu.classList.add("active");
                subMenuArrow.classList.remove("mdi-chevron-down");
                subMenuArrow.classList.add("mdi-chevron-up");
                }
            }


                window.addEventListener('scroll', function() {
                // var navMenu = document.getElementById('navMenu');

                // // Remove the "active" class from navMenu when scrolling the page
                // navMenu.classList.remove('active');
                });


                // dark mode
                $(document).ready(function() {
                        var modeToggle = $('#mode-toggle');
                        var icon = modeToggle.find('i');

                        modeToggle.on('click', function() {
                            $('body').toggleClass('dark-mode');
                            var isDarkMode = $('body').hasClass('dark-mode');
                            icon.css('color', isDarkMode ? '#ffffff' : '#5CA346');

                            // Store the mode in local storage
                            localStorage.setItem('mode', isDarkMode ? 'dark' : 'light');
                        });

                        // Check the mode on page load
                        var storedMode = localStorage.getItem('mode');
                        if (storedMode === 'dark' || (storedMode === null && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                            $('body').addClass('dark-mode');
                            icon.css('color', '#ffffff');
                        } else {
                            $('body').removeClass('dark-mode');
                            icon.css('color', '#5CA346');
                        }
                    });
                
                    function myFunction() {
            var body = document.querySelector('body');
            var modeIcon = document.querySelector('#mode-icon');
            var isDarkMode = body.classList.contains('dark-mode');

            body.classList.toggle('dark-mode');

            // Update the modeIcon based on the selected mode
            if (body.classList.contains('dark-mode')) {
                modeIcon.classList.replace('mdi-lightbulb-on-outline', 'mdi-lightbulb');
            } else {
                modeIcon.classList.replace('mdi-lightbulb', 'mdi-lightbulb-on-outline');
            }

            // Store the selected mode in local storage
            localStorage.setItem('mode', body.classList.contains('dark-mode') ? 'dark' : 'light');
            }

            // navigation sub active

            $(document).ready(function() {
            // Show/hide sub-navigation menu on parent click
            $('.nav-item.menu-items > a.nav-link').click(function() {
            var subMenu = $(this).next('.sub');
            $('.sub').not(subMenu).slideUp(300);
            subMenu.slideToggle(300);
            });

            // Add active class to selected sub-navigation menu item and its parent
            $('.sub-navi a').click(function() {
            // Remove active class from all sub-navigation menu items
            $('.sub-navi a').removeClass('active');

            // Add active class to selected sub-navigation menu item
            $(this).addClass('active');

            // Add active class to parent menu item
            var parentMenuItem = $(this).closest('.nav-item.menu-items');
            $('.nav-item.menu-items').removeClass('active');
            parentMenuItem.addClass('active');
            parentMenuItem.find('> a.nav-link').addClass('active');

            // Add active class to parent menu item if sub-menu is active
            if (parentMenuItem.hasClass('nav-item') && parentMenuItem.hasClass('menu-items')) {
                parentMenuItem.addClass('active');
                parentMenuItem.find('> a.nav-link').addClass('active');
            } else {
                parentMenuItem.removeClass('active');
                parentMenuItem.find('> a.nav-link').removeClass('active');
            }
            });

            // Hide sub-navigation menu on scroll
            $(window).scroll(function() {
            // Check if the sub-navigation menu is currently visible
            var subMenuVisible = $('.sub:visible').length > 0;
            
            // Close the sub-navigation menu if it's visible and the user is scrolling
            if (subMenuVisible) {
            $('.sub').slideUp();
            }
        });
            // Disable auto-scrolling to top on parent click
            $('.nav-item.menu-items > a.nav-link').click(function(e) {
            e.preventDefault(); // Prevent the default anchor link behavior
            });
        });
        </script>
        
    </body>
</html>

</html>