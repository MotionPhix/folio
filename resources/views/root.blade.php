<!DOCTYPE html>
<html
  lang="{{ str_replace('_', '-', app()->getLocale()) }}"
  class="uk-background-white dark:uk-background-gray-100 dark:uk-text-gray-40 uk-dark">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Ultrashots') }}</title>

  <meta name="theme-color" content="#741ff5">

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- preload head styles -->
  <link rel="preload" href="assets/fonts/brand-icons/brand-icons.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="assets/fonts/unicons/Unicons.woff?lkolxg" as="font" type="font/woff" crossorigin>
  <link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@8.3.2/swiper-bundle.min.css" as="style">
  <link rel="preload" href="https://cdn.jsdelivr.net/npm/uikit@3.15.1/dist/css/uikit.min.css" as="style">

  <link rel="preload" href="assets/js/uikit.min.js" as="script">
  <link rel="preload" href="assets/js/uikit-components.js" as="script">
  <link rel="preload" href="assets/js/jquery.min.js" as="script">
  <link rel="preload" href="assets/js/swiper-bundle.min.js" as="script">
  <link rel="preload" href="assets/js/feather.min.js" as="script">
  <link rel="preload" href="assets/js/typed.min.js" as="script">
  <link rel="preload" href="assets/js/anime.min.js" as="script">
  <link rel="preload" href="assets/js/app.js" as="script">
  <link rel="preload" href="assets/js/data-attr-helper.js" as="script">
  <link rel="preload" href="assets/js/swiper-helper.js" as="script">
  <link rel="preload" href="assets/js/typed-helper.js" as="script">
  <link rel="preload" href="assets/js/anime-helper.js" as="script">

  <script src="assets/js/app-head.js"></script>
  <link rel="stylesheet" href="assets/css/theme/main.min.css">

  <!-- include scripts -->
  <script src="assets/js/uikit.min.js"></script>
  <script src="assets/js/uikit-components.js"></script>

  <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Inter:wght@400;600;700&display=swap">

  @vite(['resources/js/app.js'])
  @spladeHead
</head>
<body class="font-sans antialiased min-h-dvh uni-body">

  @splade

  <script defer src="assets/js/jquery.min.js"></script>
  <script defer src="assets/js/swiper-bundle.min.js"></script>
  <script defer src="assets/js/feather.min.js"></script>
  <script defer src="assets/js/typed.min.js"></script>
  <script defer src="assets/js/anime.min.js"></script>
  <script defer src="assets/js/app.js"></script>
  <script defer src="assets/js/data-attr-helper.js"></script>
  <script defer src="assets/js/swiper-helper.js"></script>
  <script defer src="assets/js/typed-helper.js"></script>
  <script defer src="assets/js/anime-helper.js"></script>

  <script>
    // Schema toggle via URL
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const getSchema = urlParams.get("schema");
    if (getSchema === "dark") {
      document.documentElement.classList.add("uk-dark");
      localStorage.setItem("darkMode", "1");
    } else if (getSchema === "light") {
      document.documentElement.classList.remove("uk-dark");
      localStorage.setItem("darkMode", "0");
    }

  </script>
</body>
</html>
