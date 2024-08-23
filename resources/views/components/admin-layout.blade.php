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

    <div class="flex h-screen">
        <div class="bg-indigo-500 w-[20%]">
            <h1 class="font-bold text-white text-center text-3xl">ADMIN</h1>
            <ul class="text-white space-y-6">
                <a href="">
                    <li class="mt-10 border border-2 border-white p-4">
                        Dashboard
                    </li>
                </a>
                <a href="/admin/products">
                    <li class="mt-10 border border-2 border-white p-4">
                        Products
                    </li>
                </a>
                <a href="/admin/orders">
                    <li class="mt-10 border border-2 border-white p-4">
                        Orders
                    </li>
                </a>
            </ul>
        </div>
        <div class="bg-white w-[80%]">
            {{$slot}}
        </div>
    </div>
</body>

</html>