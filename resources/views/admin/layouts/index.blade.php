<!DOCTYPE html>
<html lang="en" class="antialiased">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin DevGen</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    {{-- <link rel="stylesheet" href={{asset('css/app.css')}}> --}}
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <link href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css" rel="stylesheet">
    <!--Replace with your tailwind.css once created-->
    <style>
        .max-h-64 {
            max-height: 16rem;
        }
        /*Quick overrides of the form input as using the CDN version*/
        .form-input,
        .form-textarea,
        .form-select,
        .form-multiselect {
            background-color: #edf2f7;
        }
    </style>

</head>

<body class="bg-gray-100 text-gray-900 tracking-wider leading-normal">

    <nav id="header" class="bg-white fixed w-full z-10 top-0 shadow">

        <div class="w-full container mx-auto flex flex-wrap items-center justify-between my-4">

            <div class="pl-4 md:pl-0">
                <a class="flex items-center text-yellow-600 text-base xl:text-xl no-underline hover:no-underline font-extrabold font-sans" href="#">
                    <svg class="fill-current h-6 inline-block text-yellow-600 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M16 2h4v15a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3V0h16v2zm0 2v13a1 1 0 0 0 1 1 1 1 0 0 0 1-1V4h-2zM2 2v15a1 1 0 0 0 1 1h11.17a2.98 2.98 0 0 1-.17-1V2H2zm2 8h8v2H4v-2zm0 4h8v2H4v-2zM4 4h8v4H4V4z" />
                    </svg> Admin site of Genc
                </a>
            </div>

            <div class="pr-0 flex justify-end">

                <div class="flex relative inline-block float-right">

                    <div class="relative text-sm">

                        {{-- <button id="userButton" class="flex items-center mr-3 shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white text-sm md:text-base font-bold py-2 px-4 rounded">
                            Menu
                            <svg class="pl-2 h-2 fill-current text-white" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
                                <g>
                                    <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" />
                                </g>
                            </svg>
                        </button> --}}

                        <div id="userMenu" class="bg-white rounded shadow-md mt-2 mr-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                            <ul class="list-reset">
                                <li><a href="#" class="px-4 py-2 block hover:bg-gray-400 no-underline hover:no-underline">My account</a></li>
                                <li><a href="#" class="px-4 py-2 block hover:bg-gray-400 no-underline hover:no-underline">Notifications</a></li>
                                <li>
                                    <hr class="border-t mx-2 border-gray-400">
                                </li>
                                <li><a href="#" class="px-4 py-2 block text-yellow-600 font-bold hover:bg-yellow-600 hover:text-white no-underline hover:no-underline">Logout</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </nav>
        @yield('content0')

        <!--Section container-->
        <section class="w-full lg:w-4/5">

            <!--Title-->
            <h1 class="flex items-center font-sans font-bold break-normal text-gray-700 px-2 text-xl mt-12 lg:mt-0 md:text-2xl">
				Modifying on section
			</h1>

            <!--divider-->
            <hr class="bg-gray-300 my-12">
{{--
            <!--Title-->
            <h2 id='section1' class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Section 1</h2> --}}

            {{-- <!--Card-->
            <div class="p-8 mt-6 lg:mt-0 leading-normal rounded shadow bg-white">
                <li>Using the CDN version of <a class="underline text-yellow-600" href="https://github.com/tailwindcss/custom-forms" target="_blank">Tailwind Custom Forms</a></li>
                <li>This template uses jQuery for scrollspy</li>
            </div>
            <!--/Card--> --}}
{{--
            <!--divider-->
            <hr class="bg-gray-300 my-12"> --}}

        @yield("content")

        </section>
        <!--/Section container-->
{{-- 
        <!--Back link -->
        <div class="w-full lg:w-4/5 lg:ml-auto text-base md:text-sm text-gray-600 px-4 py-24 mb-12">
          <span class="text-base text-yellow-600 font-bold">&lt;</span> <a href="#" class="text-base md:text-sm text-yellow-600 font-bold no-underline hover:underline">Back link</a>
         </div> --}}

      </div>
      <!--/container-->

<!-- Toggle dropdown list -->
<script>
/*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

var userMenuDiv = document.getElementById("userMenu");
var userMenu = document.getElementById("userButton");

 var helpMenuDiv = document.getElementById("menu-content");
 var helpMenu = document.getElementById("menu-toggle");

document.onclick = check;

function check(e){
  var target = (e && e.target) || (event && event.srcElement);

  //User Menu
  if (!checkParent(target, userMenuDiv)) {
	// click NOT on the menu
	if (checkParent(target, userMenu)) {
	  // click on the link
	  if (userMenuDiv.classList.contains("invisible")) {
		userMenuDiv.classList.remove("invisible");
	  } else {userMenuDiv.classList.add("invisible");}
	} else {
	  // click both outside link and outside menu, hide menu
	  userMenuDiv.classList.add("invisible");
	}
  }

   //Help Menu
   if (!checkParent(target, helpMenuDiv)) {
	// click NOT on the menu
	if (checkParent(target, helpMenu)) {
	  // click on the link
	  if (helpMenuDiv.classList.contains("hidden")) {
		helpMenuDiv.classList.remove("hidden");
	  } else {helpMenuDiv.classList.add("hidden");}
	} else {
	  // click both outside link and outside menu, hide menu
	  helpMenuDiv.classList.add("hidden");
	}
   }

}

function checkParent(t, elm) {
  while(t.parentNode) {
	if( t == elm ) {return true;}
	t = t.parentNode;
  }
  return false;
}

</script>

<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!-- Scroll Spy -->
<script>
/* http://jsfiddle.net/LwLBx/ */

// Cache selectors
var lastId,
    topMenu = $("#menu-content"),
    topMenuHeight = topMenu.outerHeight()+175,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({
      scrollTop: offsetTop
  }, 300);
  if (!helpMenuDiv.classList.contains("hidden")) {
		helpMenuDiv.classList.add("hidden");
	  }
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;

   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";

   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("font-bold border-yellow-600")
         .end().filter("[href='#"+id+"']").parent().addClass("font-bold border-yellow-600");
   }
});

</script>

</body>
</html>
