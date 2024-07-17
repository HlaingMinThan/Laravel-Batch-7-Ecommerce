<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    />
    <title>Document</title>
    <!-- fontawesome cdn link -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link
        rel="stylesheet"
        href="style.css"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
        darkMode: "class",
        theme: {
          screens: {
            xs: "320px",
            sm: "480px",
            md: "768px",
            lg: "976px",
            xl: "1440px",
          },
          extend: {
            colors: {
              primary: "pink",
            },
            boxShadow: {
              "3xl": "0 35px 60px -15px red",
            },
          },
        },
      };
    </script>
</head>

<body>
    <header>
        <!-- navbar -->
        <div
            class="flex px-[40px] py-[20px] justify-between z-[100] items-center bg-white dark:bg-black shadow-lg w-[90%] fixed top-[10px] left-[50%] translate-x-[-50%] rounded-xl">
            <a href="/">
                <h1 class="text-3xl font-bold text-blue-500">CC Ecommerce</h1>
            </a>
            <div class="lg:block hidden">
                <ul class="flex gap-[40px]">
                    <li class="nav-link relative">
                        <div class="">
                            <a href="#">Home</a>
                            <i class="fa-solid text-xs fa-chevron-down"></i>
                        </div>
                        <div
                            class="w-[250px] transition-all opacity-0 pl-[20px] submenu translate-y-[30px] py-[25px] flex flex-col gap-3 font-normal rounded-md top-[130%] absolute bg-white shadow-lg">
                            <div class="cursor-pointer items-center hover:text-[#FF497C]">
                                Home - Electronics
                            </div>
                            <div class="cursor-pointer hover:text-[#FF497C]">
                                Home - Electronics
                            </div>
                            <div class="cursor-pointer hover:text-[#FF497C]">
                                Home - Electronics
                            </div>
                            <div class="cursor-pointer hover:text-[#FF497C]">
                                Home - Electronics
                            </div>
                            <div class="cursor-pointer hover:text-[#FF497C]">
                                Home - Electronics
                            </div>
                            <div class="cursor-pointer hover:text-[#FF497C]">
                                Home - Electronics
                            </div>
                        </div>
                    </li>
                    <li class="nav-link">
                        <a
                            class="text-primary dark:text-white"
                            href="#discount"
                        >Shop</a>
                        <div
                            class="w-[250px] transition-all opacity-0 pl-[20px] submenu translate-y-[30px] py-[25px] flex flex-col gap-3 font-normal rounded-md top-[130%] absolute bg-white shadow-lg">
                            <div class="cursor-pointer items-center hover:text-[#FF497C]">
                                Home - Electronics
                            </div>
                            <div class="cursor-pointer hover:text-[#FF497C]">
                                Home - Electronics
                            </div>
                            <div class="cursor-pointer hover:text-[#FF497C]">
                                Home - Electronics
                            </div>
                            <div class="cursor-pointer hover:text-[#FF497C]">
                                Home - Electronics
                            </div>
                            <div class="cursor-pointer hover:text-[#FF497C]">
                                Home - Electronics
                            </div>
                            <div class="cursor-pointer hover:text-[#FF497C]">
                                Home - Electronics
                            </div>
                        </div>
                    </li>
                    <li class="nav-link">
                        <a href="/products">Products</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">About</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Blog</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="flex md:gap-[30px] gap-[15px] text-xl">
                <div class="nav-icon md:text-base text-sm hover:text-white delay-300">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <div class="nav-icon md:text-base text-sm hover:text-white delay-300">
                    <i class="fa-regular fa-heart"></i>
                </div>
                <div class="nav-icon md:text-base text-sm relative hover:text-white delay-300">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span
                        class="absolute w-[20px] rounded-full top-[-8px] border border-2 border-white right-[-10px] h-[20px] text-xs font-bold text-white flex items-center justify-center bg-blue-400"
                    >3</span>
                </div>
                <div class="nav-icon md:text-base text-sm hover:text-white delay-300">
                    <i class="fa-regular fa-user"></i>
                </div>
                <div
                    class="lg:hidden md:text-base text-sm block"
                    id="menuShowIcon"
                >
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
        <div
            id="menuSidebar"
            class="fixed right-[-1000px] z-[2000] transition-all duration-500 d top-0 bottom-0 pt-[20px] px-[30px] w-[40vw] bg-white"
        >
            <div class="flex items-center justify-between">
                <img
                    src="https://new.axilthemes.com/demo/template/etrade/assets/images/logo/logo.png"
                    alt=""
                />
                <div
                    id="closeButton"
                    class="w-[37px] h-[37px] bg-slate-200 flex items-center justify-center rounded-full"
                >
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="mt-[40px]">
                <ul class="flex flex-col gap-[20px]">
                    <li class="relative mobile-nav-link">
                        <div
                            class=""
                            id="home-menu-btn"
                        >
                            <a href="#">Home</a>
                            <i class="fa-solid text-xs fa-chevron-down"></i>
                        </div>
                        <div
                            id="home-submenu"
                            class="w-full h-0 overflow-hidden transition-all pl-[20px] flex flex-col gap-3 font-normal rounded-md bg-white"
                        >
                            <div class="cursor-pointer items-center hover:text-[#FF497C]">
                                Home - Electronics
                            </div>
                            <div class="cursor-pointer hover:text-[#FF497C]">
                                Home - Electronics
                            </div>
                            <div class="cursor-pointer hover:text-[#FF497C]">
                                Home - Electronics
                            </div>
                            <div class="cursor-pointer hover:text-[#FF497C]">
                                Home - Electronics
                            </div>
                            <div class="cursor-pointer hover:text-[#FF497C]">
                                Home - Electronics
                            </div>
                            <div class="cursor-pointer hover:text-[#FF497C]">
                                Home - Electronics
                            </div>
                        </div>
                    </li>
                    <li class="nav-link">
                        <a href="#">Shop</a>
                        <!-- here -->
                        <div
                            class="w-[250px] transition-all opacity-0 pl-[20px] submenu translate-y-[30px] py-[25px] flex flex-col gap-3 font-normal rounded-md top-[130%] absolute bg-white shadow-lg">
                            <div class="cursor-pointer items-center hover:text-[#FF497C]">
                                Home - Electronics
                            </div>
                            <div class="cursor-pointer hover:text-[#FF497C]">
                                Home - Electronics
                            </div>
                            <div class="cursor-pointer hover:text-[#FF497C]">
                                Home - Electronics
                            </div>
                            <div class="cursor-pointer hover:text-[#FF497C]">
                                Home - Electronics
                            </div>
                            <div class="cursor-pointer hover:text-[#FF497C]">
                                Home - Electronics
                            </div>
                            <div class="cursor-pointer hover:text-[#FF497C]">
                                Home - Electronics
                            </div>
                        </div>
                    </li>
                    <li class="nav-link">
                        <a href="#">Pages</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">About</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Blog</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    {{ $slot }}
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        let showButton = document.getElementById("menuShowIcon");
      let closeButton = document.getElementById("closeButton");
      let sideBar = document.getElementById("menuSidebar");
      let homeSubmenu = document.getElementById("home-submenu");
      let homeMenuButton = document.getElementById("home-menu-btn");
      let switchBtn = document.getElementById("switch-btn");
      switchBtn.addEventListener("click", () => {
        document.documentElement.classList.add("dark");
      });
      let categorySwiper = new Swiper(".categorySwiper", {
        spaceBetween: 20,
        loop: true,
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 7,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 10,
          },
          1024: {
            slidesPerView: 7,
            spaceBetween: 20,
          },
        },
      });

      let categorySwiperElement =
        document.querySelector(".categorySwiper").swiper;
      let swiperNextButton = document.getElementById("swiper-next-button");
      let swiperPrevButton = document.getElementById("swiper-prev-button");
      swiperNextButton.addEventListener("click", function () {
        categorySwiperElement.slideNext();
      });
      swiperPrevButton.addEventListener("click", function () {
        categorySwiperElement.slidePrev();
      });
      showButton.addEventListener("click", function () {
        sideBar.classList.add("show");
      });
      homeMenuButton.addEventListener("click", function () {
        homeSubmenu.classList.toggle("submenu-show");
      });
      closeButton.addEventListener("click", function () {
        sideBar.classList.remove("show");
      });
    </script>
</body>

</html>