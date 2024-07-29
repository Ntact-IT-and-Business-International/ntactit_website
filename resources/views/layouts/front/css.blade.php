<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta data-react-helmet="true" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, shrink-to-fit=no">
    <title>Ntact IT -{{Request()->route()->getName()}}</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&display=swap" rel="stylesheet">
    <!-- //google-fonts -->
   
    <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css')}}">
    <!-- Template CSS Style link --> 
    <link rel="stylesheet" href="{{ asset('assets/css/style-starter.css')}}">
    <link rel="stylesheet" href="{{ asset('admin\assets\css\style.css')}}">

    <style>
        body {
            margin: 0;
            padding: 0;
            
        }

        /* Default container styles */
        .container {
            width: 95%; /* Use percentage for fluid width */
            max-width: 1200px; /* Constrain max width */
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Adjust container for larger screens */
        @media (min-width: 1600px) {
            .container {
                max-width: 1550px;
                padding: 0 25px;
            }
        }
        .dropdown-submenu {
      position: relative;
    }

    .dropdown-submenu .dropdown-menu {
      margin-top: 0;
      display: none;
      position: absolute;
      z-index: 1030; /* Ensure dropdown is above other content */
    }

    .dropdown-submenu:hover .dropdown-menu {
      display: block;
    }

    .dropdown-item:last-child {
      margin-bottom: 1rem; /* Add margin to separate items */
    }

    /* Adjust dropdown position to fit within navbar */
    .navbar-nav {
      overflow: visible; /* Allow overflow for absolute positioning */
      transform: none;
    }

    /* Ensure dropdowns stay within navbar bounds */
    .dropdown-submenu .dropdown-menu {
      top: 100%; /* Position below the parent */
      left: 18%; /* Align with the parent */
      right: auto; /* Reset right positioning */
    }

    .demi-content {
        padding: 10px;
        color: #555;
    }
    .dropdown-item.sub-item {
        padding-left: 20%;
        min-width: 300px;
    }
    .caret {
        margin-left: 5px;
        border-top: 4px solid;
        border-right: 4px solid transparent;
        border-left: 4px solid transparent;
        display: inline-block;
        width: 0;
        height: 0;
        vertical-align: middle;
    }
    .caret-right {
        margin-left: 5px;
        border-top: 4px solid transparent;
        border-bottom: 4px solid transparent;
        border-left: 4px solid;
        display: inline-block;
        width: 0;
        height: 0;
        vertical-align: middle;
    }

    .package-storage {
    position: absolute;
    top: 10px; /* Adjust as necessary */
    right: 10px; /* Adjust as necessary */
    background-color: var(--primary-color); /* Use your primary color variable */
    color: white;
    border-radius: 50%;
    width: 60px; /* Adjust as necessary */
    height: 60px; /* Adjust as necessary */
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2em; /* Adjust as necessary */
    font-weight: bold;
}
        #navbarDropdown {
        font-size: 1.2rem; /* Adjust the font size to your preference */
        }

    
    </style>

    <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6681e286eaf3bd8d4d169ca2/1i1llpo13';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</head>