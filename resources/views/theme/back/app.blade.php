<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title' ,'Start') - VdM -</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link href="/css/app.css" rel="stylesheet">
    <link href="{{ asset("assets/back/css/app.css") }}" rel="stylesheet">

    <script src="/js/app.js" defer></script>

</head>
<body  class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">

     
    <!-------------------------START HEADER BAR MENU-------------------------------------------------------------------------------------->
    
    @include('theme.back.top_header')

   
    <!------------------------- END HEADER BAR MENU-------------------------------------------------------------------------------------->

    
    <!-------------------------START SIDEBAR--------------------------------------------------------------------------------------------->
   
    <div class="flex flex-col md:flex-row">
    
        @include('theme.back.aside')

        <!-------------------------END SIDEBAR----------------------------------------------------------------------------------------------->


        <!-------------------------START CONTENT--------------------------------------------------------------------------------------------->

        <main>
            <section>
                <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
                    Ahi va el contenido dvbdlvbldvndvnadòvnadònbòdbnòbnòbnòbbfsb
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis deserunt, rem fugit porro veritatis molestiae dolore facere blanditiis at corrupti placeat soluta quaerat nostrum neque nesciunt? Sapiente optio recusandae error.
                    @yield('content')
                </div>
            </section>
        </main>
    </div>

    <!-------------------------END CONTENT----------------------------------------------------------------------------------------------->
</body>

<script>
    /*Toggle dropdown list*/
    function toggleDD(myDropMenu) {
        document.getElementById(myDropMenu).classList.toggle("invisible");
    }
    /*Filter dropdown options*/
    function filterDD(myDropMenu, myDropMenuSearch) {
        var input, filter, ul, li, a, i;
        input = document.getElementById(myDropMenuSearch);
        filter = input.value.toUpperCase();
        div = document.getElementById(myDropMenu);
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }
    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
            var dropdowns = document.getElementsByClassName("dropdownlist");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (!openDropdown.classList.contains('invisible')) {
                    openDropdown.classList.add('invisible');
                }
            }
        }
    }
</script>
</html>