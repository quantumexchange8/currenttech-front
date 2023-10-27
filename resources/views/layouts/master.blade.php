<!DOCTYPE html>
<html lang="en">
    


<head>
    <meta charset="utf-8">

    <title>Current Tech</title>
    <meta name="Description" content="Current Tech Industries is a leading technology solutions development provider." />
    <meta name="keywords" content="Current Tech Industries, Current Tech, Forex, Crypto, Financial, Technology, POS system, Accounting System, NFT, Expert Advisor Builder, Mobile App Development, Website Development, Software Development">
    <meta property="og:title" content="Current Tech Industries">
    <meta property="og:description" content="Current Tech Industries is a leading technology solutions development provider.">
    <meta property="og:image" content="https://currenttech.pro/assets/image/currenttechlogo.svg">
    <meta property="og:url" content="https://currenttech.pro/">
    <meta property="og:type" content="website">
    <link rel="shortcut icon" href="{{asset('assets/image/logo.png')}}">
    <link rel="apple-touch-icon" href="{{asset('assets/image/logo.png')}}">
    <link rel="icon" href="{{asset('assets/image/logo.png')}}" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/master.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
</head>

<body class="light-mode dark-mode">

    <div class="container-scroller">
        
        <!--top navigation-->
        
            @include('layouts.topbar')
        

        <!--content-->
        
            @yield('content')
        
        <!--content-->

        <!--footer-->
    
        @include('layouts.footer')
    
        <!--/footer-->

    </div>

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css">

    <script>

    function toggleNav() {
      var navMenu = document.getElementById('navMenu');
      var navToggle = document.querySelector('.nav-toggle');
      
      // Check if the navMenu has the active class
      if (navMenu.classList.contains('active')) {
        // If it has the active class, remove it to hide the menu
        navMenu.classList.remove('active');
      } else {
        // If it doesn't have the active class, add it to show the menu
        navMenu.classList.add('active');
      }
    }

    function toggleSubMenu(showSubMenuId, showIconId, hideSubMenuId, hideIconId) {
        var showSubMenu = document.getElementById(showSubMenuId);
        var showIcon = document.getElementById(showIconId);
        
        var hideSubMenu = document.getElementById(hideSubMenuId);
        var hideIcon = document.getElementById(hideIconId);

        // Hide the previously shown submenu (if any)
        if (hideSubMenu.style.display === 'block') {
            hideSubMenu.style.display = 'none';
            // hideIcon.className = 'mdi mdi-chevron-down';
        }

        // Toggle the clicked submenu
        if (showSubMenu.style.display === 'none' || showSubMenu.style.display === '') {
            showSubMenu.style.display = 'block';
            // showIcon.className = 'mdi mdi-chevron-up';
        } else {
            showSubMenu.style.display = 'none';
            // showIcon.className = 'mdi mdi-chevron-down';
        }
    }



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

    // Ensure the selected mode persists across page navigation
    window.addEventListener('beforeunload', function () {
      var body = document.querySelector('body');
      var mode = body.classList.contains('dark-mode') ? 'dark' : 'light';
      localStorage.setItem('mode', mode);
    });


    // navigation sub active

    $(document).ready(function() {
    // Function to update the height of .blackboard
    function updateBlackboardHeight() {
        // Check if any .sub element is currently visible
        var subMenuVisible = $('.sub:visible').length > 0;
        
        // Set the height of .blackboard based on sub-menu visibility
        if (subMenuVisible) {
            $('.blackboard').css('height', '174px');
        } else {
            $('.blackboard').css('height', '80px');
        }
    }

    // Show/hide sub-navigation menu on parent click
    $('.nav-item.menu-items > a.nav-link').click(function() {
        var subMenu = $(this).next('.sub');
        $('.sub').not(subMenu).slideUp(300, function() {
            // Update the height of .blackboard after the slideUp animation is complete
            updateBlackboardHeight();
        });
        subMenu.slideToggle(300, function() {
            // Update the height of .blackboard after the slideToggle animation is complete
            updateBlackboardHeight();
        });
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
            $('.sub').slideUp(300, function() {
                // Update the height of .blackboard after closing the sub-menu
                updateBlackboardHeight();
            });
        }
    });

    // Disable auto-scrolling to top on parent click
    $('.nav-item.menu-items > a.nav-link').click(function(e) {
        e.preventDefault(); // Prevent the default anchor link behavior
    });

    // Initialize the height of .blackboard on page load
    updateBlackboardHeight();
});


  // MARQUEE SLIDING IMAGE
  window.addEventListener("load", function() {
  // document.addEventListener("DOMContentLoaded", function() {
  // Marquee auto sliding image
  const marqueeContents = document.querySelectorAll(".marquee-content");
  const marqueeContents2 = document.querySelectorAll(".marquee-content5");

  // Clone the marquee items for each marquee row
  marqueeContents.forEach((marqueeContent) => {
    const marqueeItems = marqueeContent.querySelectorAll(".marquee-item");
    const marqueeWidth = marqueeItems.length * (marqueeItems[0].offsetWidth + 2 * parseFloat(getComputedStyle(marqueeItems[0]).marginLeft));

    // Calculate the number of items needed to fill the width of the marquee
    const numberOfItems = Math.ceil(marqueeContent.offsetWidth / (marqueeItems[0].offsetWidth + 2 * parseFloat(getComputedStyle(marqueeItems[0]).marginLeft)));

    // Clone the items
    for (let i = 0; i < numberOfItems; i++) {
      marqueeItems.forEach((item) => {
        marqueeContent.appendChild(item.cloneNode(true));
      });
    }

    marqueeContent.style.width = (marqueeWidth * numberOfItems) + "px";
  });

  marqueeContents2.forEach((marqueeContent2) => {
    const marqueeItems2 = marqueeContent2.querySelectorAll(".marquee-item5");
    const marqueeWidth2 = marqueeItems2.length * (marqueeItems2[0].offsetWidth + 2 * parseFloat(getComputedStyle(marqueeItems2[0]).marginLeft));

    // Calculate the number of items needed to fill the width of the marquee
    const numberOfItems2 = Math.ceil(marqueeContent2.offsetWidth / (marqueeItems2[0].offsetWidth + 2 * parseFloat(getComputedStyle(marqueeItems2[0]).marginLeft)));

    // Clone the items
    for (let i = 0; i < numberOfItems2; i++) {
      marqueeItems2.forEach((item) => {
        marqueeContent2.appendChild(item.cloneNode(true));
      });
    }

    marqueeContent2.style.width = (marqueeWidth2 * numberOfItems2) + "px";
  });
});

    </script>

    {{-- MARQUEE_CONTENT 6 --}}
    <script>
      window.addEventListener("load", function() {
      // document.addEventListener("DOMContentLoaded", function() {
      // Marquee auto sliding image
      const marqueeContents = document.querySelectorAll(".marquee-content6");

      // Clone the marquee items for each marquee row
      marqueeContents.forEach((marqueeContent) => {
        const marqueeItems = marqueeContent.querySelectorAll(".marquee-item6");
        const marqueeWidth = marqueeItems.length * (marqueeItems[0].offsetWidth + 2 * parseFloat(getComputedStyle(marqueeItems[0]).marginLeft));

        // Calculate the number of items needed to fill the width of the marquee
        const numberOfItems = Math.ceil(marqueeContent.offsetWidth / (marqueeItems[0].offsetWidth + 2 * parseFloat(getComputedStyle(marqueeItems[0]).marginLeft)));

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
  {{-- MARQUEE 7 --}}
    <script>
      window.addEventListener("load", function() {
      // document.addEventListener("DOMContentLoaded", function() {
      // Marquee auto sliding image
      const marqueeContents = document.querySelectorAll(".marquee-content7");

      // Clone the marquee items for each marquee row
      marqueeContents.forEach((marqueeContent) => {
        const marqueeItems = marqueeContent.querySelectorAll(".marquee-item7");
        const marqueeWidth = marqueeItems.length * (marqueeItems[0].offsetWidth + 2 * parseFloat(getComputedStyle(marqueeItems[0]).marginLeft));

        // Calculate the number of items needed to fill the width of the marquee
        const numberOfItems = Math.ceil(marqueeContent.offsetWidth / (marqueeItems[0].offsetWidth + 2 * parseFloat(getComputedStyle(marqueeItems[0]).marginLeft)));

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
    {{-- MARQUEE 8 --}}
    <script>
      window.addEventListener("load", function() {
      // document.addEventListener("DOMContentLoaded", function() {
      // Marquee auto sliding image
      const marqueeContents = document.querySelectorAll(".marquee-content8");

      // Clone the marquee items for each marquee row
      marqueeContents.forEach((marqueeContent) => {
        const marqueeItems = marqueeContent.querySelectorAll(".marquee-item8");
        const marqueeWidth = marqueeItems.length * (marqueeItems[0].offsetWidth + 2 * parseFloat(getComputedStyle(marqueeItems[0]).marginLeft));

        // Calculate the number of items needed to fill the width of the marquee
        const numberOfItems = Math.ceil(marqueeContent.offsetWidth / (marqueeItems[0].offsetWidth + 2 * parseFloat(getComputedStyle(marqueeItems[0]).marginLeft)));

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
    {{-- MARQUEE 9 --}}
    <script>
    window.addEventListener("load", function() {
    // document.addEventListener("DOMContentLoaded", function() {
    // Marquee auto sliding image
    const marqueeContents = document.querySelectorAll(".marquee-content9");

    // Clone the marquee items for each marquee row
    marqueeContents.forEach((marqueeContent) => {
      const marqueeItems = marqueeContent.querySelectorAll(".marquee-item9");
      const marqueeWidth = marqueeItems.length * (marqueeItems[0].offsetWidth + 2 * parseFloat(getComputedStyle(marqueeItems[0]).marginLeft));

      // Calculate the number of items needed to fill the width of the marquee
      const numberOfItems = Math.ceil(marqueeContent.offsetWidth / (marqueeItems[0].offsetWidth + 2 * parseFloat(getComputedStyle(marqueeItems[0]).marginLeft)));

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

    {{-- MARQUEE FOR TRADING INSTRUMENT SLIDING IMAGE --}}
    <script>
      $('.slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 5000,
      prevArrow: null, // Remove the previous button
      nextArrow: null, // Remove the next button
      infinite: true, // Enable infinite looping
      dots: true, // Enable the dots pagination
      pauseOnHover: false // Disable pause on hover
    }).on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        // Check if the carousel is about to loop back to the first slide
        if (nextSlide === slick.slideCount - 1 && currentSlide === 0) {
            // Reset the filter property of the duplicated first image
            $('.slider img:last-child').css('filter', 'none');
        }
    });
    </script>

    <script>
      // Add event listeners to the modal triggers
      const modalTriggers = document.getElementsByClassName("modal-trigger");
      for (let i = 0; i < modalTriggers.length; i++) {
        modalTriggers[i].addEventListener("click", function (event) {
          event.preventDefault();
          const modalId = this.getAttribute("href");
          const modal = document.querySelector(modalId);
          modal.style.display = "block";
        });
      }

      // Close the modal when clicking on the close button or outside the modal content
      const closeModal = function() {
        const modals = document.getElementsByClassName("modal");
        for (let i = 0; i < modals.length; i++) {
          modals[i].style.display = "none";
        }
      }

      const closeButtons = document.getElementsByClassName("close");
      for (let i = 0; i < closeButtons.length; i++) {
        closeButtons[i].addEventListener("click", closeModal);
      }

      window.onclick = function (event) {
        const modals = document.getElementsByClassName("modal");
        for (let i = 0; i < modals.length; i++) {
          if (event.target == modals[i]) {
            closeModal();
          }
        }
      };

    </script>

    <script>
      $(document).ready(function() {
        $('#company').on('show.bs.collapse', function() {
          $(this).prev('.nav-link').find('i').removeClass('mdi-chevron-right').addClass('mdi-chevron-up');
        });

        $('#company').on('hide.bs.collapse', function() {
          $(this).prev('.nav-link').find('i').removeClass('mdi-chevron-up').addClass('mdi-chevron-right');
        });
        
      });

    </script>

    {{-- new --}}
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
          const marqueeContents = document.querySelectorAll(".web3-marqueee-content");

          // Clone the marquee items for each marquee row
          marqueeContents.forEach((marqueeContent) => {
              const marqueeItems = marqueeContent.querySelectorAll(".web3-marqueee-item");
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
      window.addEventListener("load", function() {
          const marqueeContents = document.querySelectorAll(".web3-marqueee-content-2");

          // Clone the marquee items for each marquee row
          marqueeContents.forEach((marqueeContent) => {
              const marqueeItems = marqueeContent.querySelectorAll(".web3-marqueee-item-2");
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
            const marqueeContents = document.querySelectorAll(".sector-marquee-content");

            // Clone the marquee items for each marquee row
            marqueeContents.forEach((marqueeContent) => {
                const marqueeItems = marqueeContent.querySelectorAll(".sector-marquee-item");
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
          const marqueeContents = document.querySelectorAll(".sector-marqueee-content");

          // Clone the marquee items for each marquee row
          marqueeContents.forEach((marqueeContent) => {
              const marqueeItems = marqueeContent.querySelectorAll(".sector-marqueee-item");
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
            const marqueeContents = document.querySelectorAll(".web3-marquee-content-3");

            // Clone the marquee items for each marquee row
            marqueeContents.forEach((marqueeContent) => {
                const marqueeItems = marqueeContent.querySelectorAll(".web3-marquee-item-3");
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
      function toggleNav() {
        var smallNav = document.querySelector('.small-nav');
        smallNav.classList.toggle('open');
    }

    document.addEventListener("DOMContentLoaded", function () {
      var smallNav = document.querySelector('.small-nav');
      
      // Function to close the sidebar
      function closeSidebar() {
          smallNav.classList.remove('open');
      }
      
      // Add a scroll event listener to the document
      window.addEventListener("scroll", closeSidebar);
  });
    </script>

    <script>
        $(document).ready(function () {
            // Listen for changes in the NFT and Crypto checkboxes
            // $("input[name='nft'], input[name='crypto'], input[name='standard_package'], input[name='advance_package'], input[name='website'], input[name='appdev'], input[name='crm']").change(function () {
            //     var isNFTSelected = $("input[name='nft']").is(":checked");
            //     var isCryptoSelected = $("input[name='crypto']").is(":checked");

            //     var isStdSelected = $("input[name='standard_package']").is(":checked");
            //     var isAdvSelected = $("input[name='advance_package']").is(":checked");

            //     var isCryptoSelected = $("input[name='crypto']").is(":checked");

                
            //     // Disable the Career checkboxes if NFT or Crypto is selected
            //     if (isNFTSelected || isCryptoSelected) {
            //         $("input[name^='it'], input[name='uiux'], input[name='market'], input[name='op'], input[name='sales'], input[name='intern']").prop("disabled", true);
            //     } else {
            //         // Enable the Career checkboxes if neither NFT nor Crypto is selected
            //         $("input[name^='it'], input[name='uiux'], input[name='market'], input[name='op'], input[name='sales'], input[name='intern']").prop("disabled", false);
            //     }
            // });

            

        });

        document.addEventListener('DOMContentLoaded', function() {
            const itprogramCheckboxes = document.querySelectorAll('[name="itprogram"], [name="uiux"], [name="market"], [name="op"], [name="sales"]');
            const internCheckbox = document.querySelector('[name="intern"]');
            const otherCheckboxes = document.querySelectorAll('[name="standard_package"], [name="advance_package"], [name="website"], [name="appdev"], [name="crm"], [name="whitelabel"], [name="paymentsolution"], [name="crmsolu"], [name="medusa"], [name="mercury"], [name="ragnarok"], [name="nft"], [name="crypto"]');
            
            const standardPackageCheckbox = document.querySelector('[name="standard_package"]');
            const advancePackageCheckbox = document.querySelector('[name="advance_package"]');

            const websiteCheckbox = document.querySelector('[name="website"]');
            const appdevCheckbox = document.querySelector('[name="appdev"]');
            const crmCheckbox = document.querySelector('[name="crm"]');

            const whitelabelCheckbox = document.querySelector('[name="whitelabel"]');
            const paymentsolutionCheckbox = document.querySelector('[name="paymentsolution"]');
            const crmsoluCheckbox = document.querySelector('[name="crmsolu"]');

            const medusaCheckbox = document.querySelector('[name="medusa"]');
            const mercuryCheckbox = document.querySelector('[name="mercury"]');
            const ragnarokCheckbox = document.querySelector('[name="ragnarok"]');

            const nftCheckbox = document.querySelector('[name="nft"]');
            const cryptoCheckbox = document.querySelector('[name="crypto"]');


            // const webApplicationCheckboxes = document.querySelectorAll('[name="website"], [name="appdev"], [name="crm"]');
            // const ctraderCheckboxes = document.querySelectorAll('[name="whitelabel"], [name="appdev2"], [name="crmsolu"]');
            // const prochipCheckboxes = document.querySelectorAll('[name="medusa"], [name="mercury"], [name="ragnarok"]');
            // const web3Checkboxes = document.querySelectorAll('[name="nft"], [name="crypto"]');
            
            const displayElement = document.getElementById('someElement');
            const displayElement2 = document.getElementById('someElement2');
            
            
            // Function to count the number of checked checkboxes in the itprogramCheckboxes group
            function isAnyItProgramCheckboxChecked() {
                return Array.from(itprogramCheckboxes).some(checkbox => checkbox.checked);
            }

            function countCheckedCheckboxes() {
                return Array.from(itprogramCheckboxes).filter(checkbox => checkbox.checked).length;
            }

            // POS SYSTEM
            standardPackageCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    advancePackageCheckbox.checked = false;
                }
            });

            advancePackageCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    standardPackageCheckbox.checked = false;
                }
            });

            // WEB / APPPLICATION
            websiteCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    appdevCheckbox.checked = false;
                    crmCheckbox.checked = false;
                }
            });

            appdevCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    websiteCheckbox.checked = false;
                    crmCheckbox.checked = false;
                }
            });

            crmCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    websiteCheckbox.checked = false;
                    appdevCheckbox.checked = false;
                }
            });

            // CTRADER / METAQUOTE
            whitelabelCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    paymentsolutionCheckbox.checked = false;
                    crmsoluCheckbox.checked = false;
                }
            });

            paymentsolutionCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    whitelabelCheckbox.checked = false;
                    crmsoluCheckbox.checked = false;
                }
            });

            crmsoluCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    whitelabelCheckbox.checked = false;
                    paymentsolutionCheckbox.checked = false;
                }
            });

            // PRO CHIP / ULTRA CHIP
            medusaCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    mercuryCheckbox.checked = false;
                    ragnarokCheckbox.checked = false;
                }
            });

            mercuryCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    medusaCheckbox.checked = false;
                    ragnarokCheckbox.checked = false;
                }
            });

            ragnarokCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    medusaCheckbox.checked = false;
                    mercuryCheckbox.checked = false;
                }
            });

            // WEB 3.0
            nftCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    cryptoCheckbox.checked = false;
                }
            });

            cryptoCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    nftCheckbox.checked = false;
                }
            });

            // Add event listeners to the "itprogram, uiux, market, op, sales" checkboxes
            itprogramCheckboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    
                    if (internCheckbox.checked) {
                        // If "intern" is checked, allow selecting only one checkbox from itprogramCheckboxes
                        if (countCheckedCheckboxes() > 1) {
                            this.checked = false;
                            displayElement.style.display = 'block';
                            displayElement2.style.display = 'block';
                        }
                    } else {
                        // If "intern" is unchecked, allow selecting only one checkbox from itprogramCheckboxes
                        if (countCheckedCheckboxes() > 1) {
                            this.checked = false;
                            displayElement.style.display = 'block';
                            displayElement2.style.display = 'block';
                        }
                    }
                    displayElement.style.display = isAnyItProgramCheckboxChecked() ? 'block' : 'none';
                    displayElement2.style.display = isAnyItProgramCheckboxChecked() ? 'block' : 'none';
                });
            });

            // Add event listener to the "intern" checkbox
            internCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    // If "intern" is checked, allow selecting only one checkbox from itprogramCheckboxes
                    itprogramCheckboxes.forEach(function(checkbox) {
                        checkbox.disabled = false;
                    });
                } else {
                    // If "intern" is unchecked, allow selecting only one checkbox from itprogramCheckboxes
                    itprogramCheckboxes.forEach(function(checkbox) {
                        checkbox.disabled = false;
                    });
                }
                displayElement.style.display = isAnyItProgramCheckboxChecked() ? 'block' : 'none';
                displayElement2.style.display = isAnyItProgramCheckboxChecked() ? 'block' : 'none';
            });

            // Add event listeners to the "standard_package, advance_package, website, appdev, crm, whitelabel, appdev2, crmsolu, medusa, mercury, ragnarok, nft, crypto" checkboxes
            otherCheckboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    // If any checkbox in otherCheckboxes is checked, disable all checkboxes in itprogramCheckboxes
                    if (this.checked) {
                        itprogramCheckboxes.forEach(function(itprogramCheckbox) {
                            itprogramCheckbox.checked = false;
                            itprogramCheckbox.disabled = true;
                        });
                    } else {
                        // Enable all checkboxes in itprogramCheckboxes
                        itprogramCheckboxes.forEach(function(itprogramCheckbox) {
                            itprogramCheckbox.disabled = false;
                        });
                    }
                    displayElement.style.display = isAnyItProgramCheckboxChecked() ? 'block' : 'none';
                    displayElement2.style.display = isAnyItProgramCheckboxChecked() ? 'block' : 'none';
                });
            });
        });
    </script>


</body>
</html>
