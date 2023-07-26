<!DOCTYPE html>
<html>
   <head><title>Recyclage des produits chimiques</title></head>
  <body>
<div class="or-top-banner" style="background: #57806C; color: #fff;"><p>
       Welcome to our online chemical product recycling platform! Explore our extensive selection of chemical products.
</p></div>
  <div>
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
<section class="header" >
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
    <h1 class="or-title  or-title__xl" type="primary-brand" >GreenChemRecycle</h1>
       
        <?php
        $currentPage = $_SERVER['PHP_SELF'];
        ?>

</div>
</nav>
</section>
</body>
</html>
<!DOCTYPE html>

<html lang="fr"><head>
 
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<script>

  document.addEventListener('turbo:load', function(event) {
    if (event.detail && event.detail.timing && event.detail.timing.visitStart === undefined) {
      
      return;
    }
    var page_path = window.location.pathname + window.location.search;
    if (page_path) {
      
        gtag('config', 'UA-34871961-4', { 
          'groups': 'UA',
          'page_path': page_path
        });
    } else {
      throw("Undefined page location when sending info to gtag.");
    }
  });
</script>

  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title" content="Bergamotte">

  <meta name="csrf-param" content="authenticity_token">

  <link rel="stylesheet" media="screen" href="{{asset('css/stylehome.css')}}" data-turbo-track="reload">
     <script>


    try {
      (function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"5500242"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");
    } catch(err) { }

</script>

  <script>
    document.addEventListener('turbo:load', function(event) {
      if (event.detail && event.detail.timing && event.detail.timing.visitStart === undefined) {
        
        return;
      }
      var page_path = window.location.pathname + window.location.search;

      if (page_path) {
        window.uetq = window.uetq || [];
        window.uetq.push('event', 'page_view', { 'page_path': page_path });
      } else {
        throw("Undefined page path when sending info to uetq (Bing tracker).");
      }
    });

//]]>
</script>
 <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
  <body data-controller="js-trackers">
    

    <turbo-frame id="flash-notification">
</turbo-frame>
<section class="or-static-page-intro"></section>


    <div class="home-wrapper with-top-banner">
      <div class="promo-code-from-link-banner">
</div>
      
      <turbo-frame id="left-side-panel"></turbo-frame>
      <turbo-frame id="right-side-panel"></turbo-frame>
      
  <div class="home-page-landing-banner">
      <a href=>
        <img sizes="(max-width: 480px) 320px, 1280px"  class="" width="320" height="220" src="/img/3.jpg">
</a>
      <or-incentive class="or-incentive"><or-title class="or-title  or-title__sm" type="primary">
      Transport your loved ones to an eco-responsible world. 
      Each chemical compound is carefully chosen based on its positive impact on nature and its role in reducing the ecological footprint.
       Trust us to provide you with environmentally-friendly solutions while contributing to the preservation of our ecosystem.
      
</or-title></or-incentive>
    <div class="home-page-landing-banner__footer">
        <or-title class="or-title  or-title__xl">
        Welcome to our platform&nbsp;!
</or-title>        <a class="or-button-new or-button-new--primary"href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

        
    </div>
  </div>

<div class="or-carousel-block">
  <h2 class="or-title  or-title__lg">    L
</h2>

  <div class="or-carousel" data-controller="or-carousel"><div class="or-carousel__container" data-or-carousel-target="container" style="transform: translate3d(0%, 0px, 0px);">
   

            
<div class="product-card or-carousel__slide" >
    <figure>
      <img sizes="(max-width: 768px) 283px, 480px" class=" ls-is-cached lazyloaded" width="528" height="660" 
       src="/img/3.png">
    </figure>

    <figcaption>
      <div class="or-product-text">
  <span class="or-product-text__title">Electronic Card</span>
    
</div>

    </figcaption>
</a>

</div>

            
<div class="product-card or-carousel__slide" >
    <figure>
      <img sizes="(max-width: 768px) 283px, 480px"  class=" ls-is-cached lazyloaded" width="528" height="660"
       src="/img/5.jpg">
    </figure>

    <figcaption>
      <div class="or-product-text">
  <span class="or-product-text__title">Agricultural Chemicals</span>
    
</div>

    </figcaption>
</a>

</div>

            
<div class="product-card or-carousel__slide" >
    <figure>
      <img sizes="(max-width: 768px) 283px, 480px" class=" ls-is-cached lazyloaded" width="528" height="660" 
      src="/img/7.jpg">
    </figure>

    <figcaption>
      <div class="or-product-text">
  <span class="or-product-text__title">Ammonia Cleaner </span>
    
</div>

    </figcaption>
</a>

</div>

            
<div class="product-card or-carousel__slide" >
    <figure>
      <img sizes="(max-width: 768px) 283px, 480px" class=" ls-is-cached lazyloaded" width="528" height="660" 
      src="/img/6.jpg">
    </figure>

    <figcaption>
      <div class="or-product-text">
  <span class="or-product-text__title">Personal care Chemicals</span>
    
</div>

    </figcaption>
</a>

</div>

            
<div class="product-card or-carousel__slide" >
    <figure>
      <img sizes="(max-width: 768px) 283px,480px " class=" lazyload" width="528" height="660" src="/img/7.jpg">
    </figure>

    <figcaption>
      <div class="or-product-text">
  <span class="or-product-text__title">Ammonia Cleaner</span>
   
</div>

    </figcaption>
</a>

</div>

            
<div class="product-card or-carousel__slide">
    <figure>
      <img sizes="(max-width: 768px) 283px, 480px" class=" lazyload" width="528" height="660" src="">
    </figure>

    <figcaption>
      <div class="or-product-text">
  <span class="or-product-text__title">Olivier Milo</span>
    
</div>

    </figcaption>
</a>

</div>

</div><button name="button" type="button" class="or-button-new previous-slide-button or-button-new--light or-button-new--round hidden" data-or-carousel-target="previousButton" data-action="click-&gt;or-carousel#previousSlide"><svg width="6" height="10" viewBox="0 0 6 10" xmlns="http://www.w3.org/2000/svg">
<path d="M2.06047 5.02953L5.7364 8.70546L5.0293 9.41257L0.646254 5.02953L5.0293 0.646484L5.7364 1.35359L2.06047 5.02953Z"></path>
</svg>
</button><button name="button" type="button" class="or-button-new next-slide-button or-button-new--light or-button-new--round" data-or-carousel-target="nextButton" data-action="click-&gt;or-carousel#nextSlide"><svg width="6" height="10" viewBox="0 0 6 10" xmlns="http://www.w3.org/2000/svg">
<path d="M4.32234 5.02953L0.646409 1.35359L1.35352 0.646484L5.73656 5.02953L1.35352 9.41257L0.646409 8.70546L4.32234 5.02953Z"></path>
</svg>
</button></div>
</div>

<div class="category-list-block">
  <img sizes="100vw" alt="alt text" class=" lazyloaded"  src="\img\1.jpg">

  <article>
    <h3 class="or-title  or-title__xs">
      des idées sur le reycla
</h3>  
  </article>
</div>

<div class="home-page-engagement">
  <h2 class="or-title  or-title__xl" type="secondary">
   Some good reasons to opt for chemical recycling
</h2>
  <div class="or-carousel" data-controller="or-carousel"><div class="or-carousel__container" data-or-carousel-target="container" style="transform: translate3d(0%, 0px, 0px);">
      <article class="or-carousel__slide">
      <img sizes="100vw" alt="alt text" class=" lazyloaded" src="/img/0.jpg">
      <h3 class="or-title  or-title__sm" type="secondary">
       Environmental Protection:<br> 
</h3>      <p> Chemical recycling reduces hazardous waste and prevents air, water, and soil pollution.</p>
    </article>

    <article class="or-carousel__slide">
      <img sizes="100vw" alt="alt text" class=" lazyloaded"  src="/img/2.jpeg">
      <h3 class="or-title  or-title__sm" type="secondary">
        Social Responsibility: <br> 
</h3>      <p>Opting for chemical recycling contributes to preserving the environment for future generations.</p>
    </article>

    <article class="or-carousel__slide">
      <img sizes="100vw" alt="alt text" class=" lazyloaded"  src="/img/5.png">
      <h3 class="or-title  or-title__sm" type="secondary"><br><br>
        Regulatory Compliance: <br> 
</h3>      <p>Chemical recycling helps comply with environmental laws and regulations.</p>
    </article>

    <article class="or-carousel__slide">
      <img sizes="100vw" alt="alt text" class=" lazyloaded"src="/img/2.jpg">
      <h3 class="or-title  or-title__sm" type="secondary">
        Cost Reduction: <br>
</h3>      <p>Recycling can be more cost-effective than chemical waste disposal, leading to reduced management expenses.</p>
    </article>
</div></div>
</div>

  

</div>





    </div>
        <footer class="shop-footer">
  <section class="reinsurance-wrapper">

    <or-icon-block class="or-icon-block"><svg width="53" height="40" viewBox="0 0 53 40" fill="none">
<path d="M51.6733 0.571451C50.8569 0.081655 49.7957 0.0816551 48.8161 0.163288C48.5712 0.163288 48.408 0.163288 48.1631 0.163288L18.6937 2.24169e-05C18.0406 2.24169e-05 17.3876 2.24169e-05 16.7345 2.24169e-05C14.8569 2.24169e-05 12.8978 -0.0816102 11.0202 0.0816551C10.3671 0.163288 9.63245 0.24492 9.14266 0.816349C8.73449 1.22451 8.4896 1.79594 8.2447 2.61227C7.83653 4.08165 7.91817 5.71431 7.9998 7.26533V7.75512C7.9998 8.24492 8.08143 8.73471 8.08143 9.30614C8.08143 9.46941 8.16306 9.63267 8.2447 9.71431C8.2447 9.71431 8.2447 9.71431 8.2447 9.79594C8.32633 10.0408 8.57123 10.2857 8.97939 10.2041L15.3467 8.40818C13.6325 11.9184 11.6733 15.2653 9.38755 18.449C8.73449 17.3061 8.2447 16.1633 7.83653 15.0204C7.67327 14.6939 7.51 14.5306 7.34674 14.5306C7.18347 14.449 6.93857 14.5306 6.77531 14.6939L2.61204 18.2857L2.53041 18.3674C2.44878 18.449 2.36715 18.5306 2.28551 18.6123H2.20388C1.95898 18.2041 1.63245 17.7959 1.38755 17.3878C1.71409 17.1429 2.04062 16.898 2.36715 16.7347C3.34674 16 4.40796 15.2653 5.38755 14.5306C5.87735 14.2041 6.44878 13.6327 6.53041 12.898C6.61204 12.0817 6.12225 11.2653 5.79572 10.8572C5.71409 10.6939 5.55082 10.6123 5.30592 10.6123C5.14266 10.6123 4.89776 10.7755 4.81613 11.0204C4.73449 11.2653 4.73449 11.4286 4.89776 11.6735C5.22429 12.0817 5.55082 12.6531 5.22429 13.1429C4.89776 13.3061 4.4896 13.6327 4.08143 13.8776C3.91817 13.9592 3.83653 14.0408 3.7549 14.1225L0.326331 16.5714C0.0814326 16.7347 -0.000200026 17.0612 0.163065 17.3878C0.489596 18.0408 0.897759 18.9388 1.46919 19.5102C2.04062 20.1633 2.77531 19.5919 3.26511 19.1837L6.93857 16.0817C7.42837 17.3878 8.08143 18.6123 8.73449 19.7551C8.81612 19.9184 8.97939 20 9.22429 20C9.38755 20 9.63245 19.9184 9.71408 19.7551C12.4896 16 14.9386 12 16.8161 7.75512C16.8978 7.51022 16.8978 7.26533 16.7345 7.10206C16.5712 6.9388 16.408 6.85716 16.1631 6.9388L9.14266 8.89798C9.14266 8.40818 9.14266 7.83676 9.06102 7.34696C9.06102 6.449 8.97939 5.55104 9.06102 4.65308V4.57145C9.14266 3.59186 9.22429 1.71431 10.3671 1.38778C10.6937 1.30614 11.0202 1.30614 11.4284 1.30614C11.51 1.30614 11.6733 1.30614 11.7549 1.30614C12.4896 1.30614 13.1427 1.30614 13.7141 1.30614C14.6937 1.30614 15.6733 1.30614 16.6529 1.30614L48.5712 1.38778C48.7345 1.38778 48.8978 1.38778 49.061 1.38778C50.0406 1.38778 51.3467 1.30614 51.6733 2.36737C51.8365 2.77553 51.7549 3.26533 51.7549 3.75512C51.7549 3.83676 51.7549 3.91839 51.7549 4.00002L51.6733 21.551C51.6733 21.6327 51.6733 21.7143 51.6733 21.7959C51.6733 22.3674 51.6733 22.9388 51.2651 23.2653C50.9386 23.5102 50.4488 23.5102 49.959 23.5102H49.8773C49.3876 23.5102 48.8978 23.5102 48.408 23.5102L37.3876 23.347C36.408 23.347 35.4284 23.347 34.4488 23.2653C33.7957 23.2653 33.061 23.2653 32.3263 23.347C32.2447 23.2653 32.2447 23.2653 32.1631 23.1837C31.3467 22.5306 30.2039 22.6123 29.2243 22.6123C29.061 22.6123 28.8978 22.6123 28.7345 22.6123L15.4284 22.6939H15.3467C14.9386 22.6939 14.5304 22.6939 14.1222 22.6939C13.2243 22.6939 12.2447 22.6939 11.3467 22.7755C10.1222 22.8572 9.22429 23.347 8.81613 24.1633C7.9998 25.551 7.9998 28 9.38755 29.1429C10.1222 29.7959 11.1835 29.9592 11.8365 30.1225C12.7345 30.2857 13.7957 30.2857 14.7753 30.2857H15.1835C16.3263 30.2041 17.4692 30.1225 18.612 30.2041C19.3467 30.2041 20.0814 30.2857 20.7345 30.2857C21.3059 30.2857 21.7957 30.3674 22.3671 30.3674C23.51 30.3674 24.5712 30.3674 25.4692 30.3674C25.2243 32.4898 24.8978 35.0204 23.1018 36.5714C22.6937 36.898 22.2855 37.2245 21.7957 37.3878C21.5508 37.4694 21.3059 37.551 21.061 37.551C20.8161 37.6327 20.5712 37.6327 20.408 37.7143C20.0814 37.7959 19.5916 38.0408 19.2651 38.449C19.0202 38.8572 19.0202 39.4286 19.3467 39.7551C19.51 39.9184 19.8365 39.9184 20.0814 39.9184C20.1631 39.9184 20.2447 39.9184 20.2447 39.9184C20.5712 39.9184 20.8161 40 21.1427 40C21.8773 40.0816 22.612 40.1633 23.3467 40.1633C24.1631 40.2449 24.8978 40.2449 25.7141 40.2449C26.2855 40.2449 26.8569 40.2449 27.4284 40.2449C30.2039 40.1633 32.8978 39.7551 35.5916 39.1837C35.9998 39.1021 36.408 39.0204 36.8161 38.8572C37.959 39.8368 39.5916 40.3265 40.9794 40.1633C42.0406 40 42.9386 39.5102 43.5916 38.7755C43.7549 38.5306 43.8365 38.2041 43.5916 37.9592C41.8773 36.3265 39.3467 36.9796 37.1427 37.6327C35.51 35.8368 35.4284 32.898 35.4284 30.9388C35.51 30.9388 35.5916 30.9388 35.6733 30.9388C36.1631 30.9388 36.5712 30.9388 37.061 30.9388C38.2855 30.9388 39.4284 31.0204 40.8161 31.0204C41.4692 31.0204 42.2039 31.1021 42.8569 31.1021C44.5712 31.1837 46.4488 31.2653 48.1631 31.1837C48.8161 31.1837 49.4692 31.1021 50.1222 31.0204H50.2855C50.7753 30.9388 51.2651 30.9388 51.6733 30.6939C52.6529 30.1225 52.5712 28.9796 52.4896 28.0817C52.4896 27.9184 52.3263 27.7551 52.1631 27.6735C51.9998 27.5919 51.7549 27.6735 51.5916 27.7551C51.4284 27.9184 51.3467 28.0817 51.3467 28.3265C51.4284 28.6531 51.4284 29.1429 51.2651 29.3878C51.1018 29.7143 50.612 29.7959 50.2855 29.7959H50.1222C49.061 29.9592 47.9182 29.9592 46.8569 29.9592C46.1222 29.9592 45.3876 29.9592 44.6529 29.8776C44.408 29.8776 44.1631 29.8776 43.9998 29.8776C41.6325 29.7959 39.3467 29.7143 37.061 29.6327C36.8978 29.6327 36.7345 29.6327 36.5712 29.6327C35.9998 29.6327 35.3467 29.551 34.7753 29.7143C34.5304 29.7959 34.3671 30.0408 34.3671 30.2857C34.2855 32.9796 34.4488 35.8368 35.9998 37.8776C35.9182 37.8776 35.9182 37.8776 35.8365 37.9592C32.4896 38.7755 29.061 39.1021 25.5508 39.1021C24.0814 39.1021 22.5304 39.0204 20.9794 38.8572C21.2243 38.7755 21.5508 38.6939 21.7141 38.6123C22.1222 38.449 22.4488 38.3674 22.4488 38.3674C23.2651 37.9592 24.0814 37.3061 24.7345 36.4898C26.2039 34.5306 26.4488 32 26.612 29.7959C26.612 29.6327 26.5304 29.4694 26.4488 29.3878C26.3671 29.2245 26.2039 29.2245 26.0406 29.2245C24.2447 29.3878 22.4488 29.3061 20.6529 29.2245C19.9998 29.2245 19.3467 29.1429 18.6937 29.1429C17.5508 29.1429 16.408 29.1429 14.9386 29.2245C13.959 29.3061 13.061 29.3061 12.2447 29.1429C11.6733 29.0612 10.5304 28.898 9.95898 28.3265C9.55082 27.8368 9.38755 27.0204 9.46919 26.1225C9.55082 25.1429 10.0406 24.5714 10.6937 24.3265C11.1835 24.1633 11.6733 24.1633 12.1631 24.1633L29.2243 24.0816C29.3059 24.0816 29.4692 24.0816 29.5508 24.0816C30.0406 24.0816 30.5304 24.0816 30.9386 24.1633C30.9386 24.1633 30.8569 24.1633 30.8569 24.2449C30.1222 24.7347 29.3059 25.7959 29.5508 26.9388C29.7141 27.8368 30.612 28.5714 31.5916 28.5714H31.6733C32.8161 28.4898 33.3876 27.4286 33.3876 26.449C33.3876 25.9592 33.3059 25.3061 33.1427 24.7347C34.0406 24.6531 35.0202 24.6531 35.9182 24.7347C36.3263 24.7347 36.6529 24.7347 36.9794 24.7347L46.7753 24.898C47.7549 24.898 48.7345 24.898 49.7957 24.9796C50.612 24.9796 51.9182 24.9796 52.5712 24.0816C52.8978 23.5919 52.9794 23.0204 52.9794 22.5306C52.9794 22.0408 52.9794 21.551 52.9794 21.0612C52.9794 20.8163 52.9794 20.5714 52.9794 20.4082L52.8978 7.34696C52.8978 6.9388 52.8978 6.449 52.8978 6.04084C52.8978 5.14288 52.8978 4.24492 52.8978 3.26533C52.8978 2.36737 52.7345 1.14288 51.6733 0.571451ZM32.0814 26.449C31.9998 26.6123 31.8365 27.1021 31.4284 27.0204C31.0202 26.9388 30.6937 26.5306 30.6937 26.1225C30.6937 25.3878 31.2651 24.898 31.9182 24.6531C32.1631 25.2245 32.2447 25.8776 32.0814 26.449ZM39.4284 37.9592C40.2447 37.7959 41.3059 37.7143 42.2039 38.1225C41.7957 38.449 41.2243 38.6939 40.5712 38.6939C39.7549 38.7755 38.9386 38.5306 38.2039 38.1225C38.612 38.1225 39.0202 38.0408 39.4284 37.9592Z" fill="#CCC4BD"></path>
</svg>
<or-title class="or-title  or-title__md">Order With Click</or-title><p>
      Discover the perfect plant gem that suits you.

</p></or-icon-block>
    <or-icon-block class="or-icon-block"><svg width="18" height="40" viewBox="0 0 18 40" fill="none">
<path d="M8.69437 8.47828L8.91176 8.76814C9.70887 9.85509 10.6509 10.2174 11.6654 9.78263C12.535 9.42031 13.4045 8.76814 14.419 7.75364C15.2161 6.95654 15.9407 6.01451 16.5205 5.00002C17.1726 3.76814 17.6074 2.75364 17.7523 1.81161C17.8248 1.2319 17.6799 0.724658 17.3176 0.434803C16.9552 0.0724842 16.3755 2.04742e-05 15.7958 0.217412C14.9987 0.434803 14.2016 1.01451 13.4045 1.88408C13.3321 1.81161 13.3321 1.66669 13.2596 1.59422C12.7523 0.724658 11.8828 0.144948 10.9407 2.04667e-05C9.92626 -0.144907 8.8393 0.217412 7.96973 1.01451C7.02771 1.95654 6.59292 3.18843 6.88278 4.34785C6.95524 4.49277 7.02771 4.6377 7.17263 4.71017C7.31756 4.78263 7.60742 4.71017 7.75234 4.56524C7.89727 4.42031 7.96973 4.27538 7.89727 4.05799C7.67988 2.97103 8.33205 1.95654 9.12916 1.4493C9.99872 0.869586 10.9408 0.869586 11.6654 1.37683C12.1002 1.73915 12.4625 2.2464 12.535 2.89857C11.8828 3.8406 11.448 4.92756 11.1581 6.01451C11.0857 6.2319 11.2306 6.4493 11.3755 6.59422C11.5205 6.73915 11.7379 6.73915 11.9552 6.59422C13.1871 5.86959 13.6944 4.49277 13.6219 3.18843C14.1292 2.53625 14.7813 1.95654 15.4335 1.52176C15.9407 1.2319 16.3031 1.15944 16.448 1.2319C16.7379 1.37683 16.5205 2.02901 16.3755 2.39132C16.3755 2.46379 16.3031 2.53625 16.3031 2.53625C16.0132 3.47828 15.5784 4.34785 14.9987 5.21741C14.4915 6.01451 13.8393 6.73915 13.1147 7.39132C12.7523 7.75364 12.39 8.0435 11.9552 8.33335L11.8103 8.40582C11.448 8.69567 10.9407 8.98553 10.506 8.91306C9.92626 8.76814 9.56394 8.11596 9.20162 7.53625C9.05669 7.31886 8.91176 7.10147 8.8393 6.95654C8.25959 6.2319 7.53495 5.57973 6.73785 4.92756C4.99872 3.69567 2.75234 2.89857 0.505968 2.89857C0.288577 2.89857 0.143649 2.97104 0.0711853 3.11596C-0.0737422 3.33335 -0.00127845 3.55074 0.143649 3.76814C1.37553 5.21741 2.39003 6.81161 3.25959 8.40582C3.69437 9.27538 4.12916 10.0725 4.49147 10.942C4.6364 11.2319 4.70887 11.4493 4.78133 11.7392C4.99872 12.3189 5.21611 12.8986 5.50597 13.4058C6.01321 14.4203 6.95524 15.4348 8.11466 15.7971C7.96973 17.1739 7.82481 18.6232 7.82481 20.2899C7.75234 24.4203 8.25959 28.5507 8.76684 32.7536C8.8393 33.0435 8.8393 33.3334 8.8393 33.6957C8.91176 34.6377 9.05669 35.6522 9.27408 36.6667C9.49147 37.5362 9.6364 38.4783 9.70886 39.4203V39.5652C9.78133 39.8551 9.99872 40.0725 10.2886 40.0725H10.361C10.5784 40.0725 10.7958 39.8551 10.7234 39.5652C10.7234 39.3478 10.6509 39.2029 10.6509 38.9855C10.5784 38.2609 10.506 37.4638 10.2886 36.7391C10.1436 36.2319 10.0712 35.7247 9.99872 35.2899C9.41901 31.4493 9.05669 27.971 8.8393 24.7102C8.69437 22.6812 8.69437 20.8696 8.76684 19.2029C8.76684 18.2609 8.8393 17.3913 8.98423 16.5218C8.98423 16.3768 8.98423 16.1594 9.05669 16.0145C9.12916 16.0145 9.27408 16.0145 9.34655 15.942C10.1436 15.7971 10.9407 15.1449 11.3031 14.3478C11.5205 13.6957 11.5205 13.116 11.0857 12.6087C10.8683 12.3189 10.5784 12.1739 10.2886 12.1015C9.92626 12.029 9.56394 12.1739 9.27408 12.3913C8.76684 12.8261 8.33205 13.4783 8.25959 14.2754C8.25959 14.4928 8.18713 14.6377 8.18713 14.8551C7.31756 14.4928 6.59292 13.4783 6.23061 12.6812C6.01321 12.1739 5.79582 11.6667 5.57843 11.2319C5.4335 10.8696 5.28858 10.5073 5.14365 10.2174C4.78133 9.34785 4.34655 8.47828 3.91176 7.68118C3.25959 6.4493 2.39003 5.21741 1.52046 4.05799C3.40452 4.34785 5.14365 5.07248 6.59292 6.30437C7.53495 6.95654 8.0422 7.68118 8.69437 8.47828ZM9.6364 14.8551C9.56394 14.9276 9.41901 14.9276 9.34655 14.9276C9.41901 14.5652 9.49147 14.2754 9.56394 13.9855C9.70887 13.6957 10.0712 13.116 10.2886 13.116C10.361 13.116 10.4335 13.2609 10.506 13.4058C10.6509 13.9855 10.2161 14.5652 9.6364 14.8551Z" fill="#CCC4BD"></path>
</svg>
<or-title class="or-title  or-title__md">Prepared with care</or-title><p>
      Prepared with care in our workshops .
</p></or-icon-block>
    <or-icon-block class="or-icon-block"><svg width="36" height="40" viewBox="0 0 36 40" fill="none" >
<path d="M35.1923 7.88459C35.0641 7.75639 34.9359 7.75639 34.7436 7.82049C32.9487 8.52562 31.0256 9.16664 29.2308 9.80767C27.5641 10.3846 25.8333 10.9615 24.1667 11.6025C22.1795 12.3718 20.5769 13.141 19.1667 13.9102C18.782 14.1025 18.4615 14.2948 18.141 14.5513C18.0769 12.5641 18.2051 10.641 18.5897 8.71793C19.4872 9.61536 20.4487 10.3846 21.6667 10.5128C22.1795 10.5769 22.9487 10.5769 23.6538 10.1923C24.2949 9.80767 24.6795 9.16664 25 8.52562C25.0641 8.39741 25.1282 8.33331 25.1923 8.2051C26.2179 8.58972 27.3077 8.65382 28.3974 8.26921C30.2564 7.69228 31.7949 6.66664 32.6282 5.38459C32.6923 5.25639 32.7564 5.12818 32.6923 4.93587C32.6282 4.80767 32.4359 4.67946 32.2436 4.67946C32.0513 4.67946 31.9231 4.74357 31.859 4.87177C31.282 5.7051 30.4487 6.41023 29.1026 6.98716C27.7564 7.56408 26.6667 7.69228 25.641 7.30767C26.2179 6.15382 26.6667 5.06408 26.9231 3.91023C26.9231 3.141 26.9231 2.37177 26.7949 1.66664C26.6667 0.769207 26.2821 0.256387 25.7692 0.0640792C24.9359 -0.192331 24.4231 0.641002 24.0385 1.21793L23.9744 1.28203C23.7821 1.60254 23.5897 1.85895 23.3974 2.24357C23.3333 1.92305 23.2051 1.66664 23.0769 1.41023C22.6923 0.83331 21.9872 0.448695 21.4103 0.512797C20.7692 0.5769 20.1923 1.08972 20.0641 1.79485C19.8718 2.56408 20.2564 3.33331 20.5769 3.78203C21.4103 5.06408 22.3718 6.53844 23.7179 7.49998C23.9103 7.62818 24.0385 7.75639 24.2308 7.82049C24.1667 7.88459 24.1667 7.94869 24.1026 8.0128C23.8462 8.46151 23.5897 8.97434 23.2051 9.29485C22.8205 9.55126 22.3077 9.67946 21.7949 9.67946C20.4487 9.55126 19.4872 8.52562 18.5897 7.56408V7.49998C18.5256 7.43587 18.4615 7.43587 18.4615 7.43587C18.4615 7.24357 18.5256 7.11536 18.5256 6.92305C18.5256 6.79485 18.5256 6.66664 18.5897 6.53844C18.8462 4.87177 18.9744 3.141 18.6538 1.41023C18.6538 1.28203 18.5256 1.15382 18.3974 1.08972C18.2692 1.02562 18.0769 1.02562 17.9487 1.08972C13.3333 3.52562 8.78205 5.96152 4.16667 8.39741L0.192308 10.5128C0.0641026 10.5769 0 10.7051 0 10.8333C0 10.9615 0 11.0897 0.0641026 11.1538C1.47436 13.141 2.69231 15 2.88462 17.2436C2.94872 18.141 2.94872 19.0384 3.01282 19.9359C3.01282 20.2564 3.01282 20.5128 3.01282 20.8333C3.07692 22.1795 3.07692 23.2692 3.07692 24.2307C3.07692 25.3846 3.07692 26.4743 3.01282 27.5641C3.01282 28.2051 2.94872 28.782 2.88462 29.4231V29.5513C2.82051 30 2.82051 30.5128 3.07692 30.8974C3.33333 31.282 3.71795 31.4743 4.10256 31.6666L4.23077 31.7307C4.67949 32.0513 5.1282 32.3077 5.64103 32.6282C6.66667 33.2692 7.69231 33.9102 8.58974 34.4872C8.91026 34.7436 9.23077 34.9359 9.61538 35.1923C11.4103 36.4102 13.2692 37.6282 15.1923 38.6538C15.4487 38.782 15.7051 38.6538 15.8333 38.4615C15.9615 38.2692 15.8974 38.0128 15.641 37.8846C13.7179 36.923 11.859 35.641 10.1282 34.4872L9.87179 34.2948C8.78205 33.5897 7.94872 33.0128 6.98718 32.3718C6.47436 32.0513 6.02564 31.7948 5.57692 31.5384C5.38461 31.4102 5.19231 31.282 4.9359 31.2179C4.67949 31.0897 4.35897 30.8974 4.10256 30.7692C3.71795 30.5128 3.71795 30.1282 3.78205 29.6795C3.78205 29.6154 3.78205 29.5513 3.78205 29.4872C3.84615 28.782 3.84615 28.2051 3.91026 27.5641C3.97436 26.5384 3.97436 25.4487 3.97436 24.3589C3.97436 21.9872 3.97436 19.7436 3.84615 17.4359C3.78205 16.1538 3.46154 14.9359 2.88462 13.782C2.37179 12.8205 1.79487 11.859 1.15385 11.0256C5.57692 8.65382 10 6.34613 14.4231 3.97434L17.8205 2.17946C18.0128 3.46151 17.8846 4.74357 17.7564 5.89741C17.7564 6.02562 17.6923 6.21793 17.6923 6.34613C17.6282 6.85895 17.5641 7.43587 17.3718 7.94869C17.1795 8.52562 16.6667 8.78203 16.1538 9.03844L16.0897 9.10254C13.5256 10.3846 10.8974 11.7948 8.39744 13.2051C6.98718 13.9743 5.57692 14.8718 4.16667 15.7051C4.03846 15.7692 3.91026 15.9615 3.97436 16.1538C3.97436 16.282 4.03846 16.4102 4.23077 16.4743C4.9359 16.7948 5.64103 17.1154 6.34615 17.4359C10.0641 19.1666 13.9103 20.9615 17.3718 23.2692C17.3077 23.8461 17.3077 24.4231 17.3077 25C17.3077 25.2564 17.3077 25.5769 17.3077 25.8333L17.1154 36.7948C17.1154 36.9872 17.1154 37.1795 17.1154 37.4359C17.1154 37.8205 17.1154 38.2692 17.1154 38.6538C17.1154 38.9743 17.1795 39.423 17.4359 39.6795C17.6282 39.8077 17.7564 39.8718 17.9487 39.8718C18.2051 39.8718 18.4615 39.7436 18.6538 39.6795H18.7179C19.1667 39.4872 19.6795 39.2948 20.1923 39.1025C21.1538 38.6538 22.1795 38.141 23.2692 37.5641C25.4487 36.4102 27.4359 35.1282 28.9744 34.1666C29.2949 33.9743 29.6154 33.782 29.9359 33.5897C30.4487 33.3333 30.9615 33.0128 31.4103 32.6923C32.2436 32.1154 32.7564 31.3461 32.9487 30.3846C33.0769 29.9359 33.0769 29.423 33.0769 28.9102C33.0769 28.782 33.0769 28.5897 33.0769 28.4615C33.0769 27.8846 33.141 27.3077 33.141 26.6666C33.2051 25.8974 33.2692 25.0641 33.3333 24.2948C33.3333 23.9743 33.3974 23.6538 33.3974 23.3333C33.6538 20.5769 33.6538 18.3333 33.4615 16.282C33.4615 15.9615 33.141 15.8333 32.9487 15.8333C32.8846 15.8333 32.7564 15.8974 32.6923 15.9615C32.7564 15.8974 32.7564 15.7692 32.8205 15.641C32.8205 15.5769 32.8846 15.5128 32.8846 15.4487C33.141 14.8718 33.3333 14.2307 33.5256 13.6538C33.9744 12.5 34.359 11.282 34.7436 10.0641C34.9359 9.48716 35.1282 8.91023 35.2564 8.26921C35.3846 8.2051 35.3205 8.0128 35.1923 7.88459ZM32.4359 24.7436C32.3077 26.282 32.1795 27.8846 32.1795 29.4872C32.1795 30.641 31.6667 31.5384 30.7692 32.1154C30.2564 32.4359 29.7436 32.7564 29.2949 33.0128C28.9103 33.2692 28.5256 33.4615 28.141 33.7179C26.4744 34.7436 24.2949 36.0897 21.9872 37.2436C20.8333 37.8205 19.8077 38.3333 18.8462 38.7179L18.6538 38.782C18.4615 38.8461 18.2692 38.9743 18.0769 39.0384H18.0128C18.0128 38.9743 18.0128 38.9102 18.0128 38.8461V38.782C18.0128 38.3974 18.0128 37.9487 18.0128 37.5641C18.0128 37.3718 18.0128 37.1795 18.0128 36.923L18.2051 25.3205C18.2051 25.1282 18.2051 25 18.2051 24.8077C18.2051 24.3589 18.2051 23.9743 18.2051 23.5256C18.2051 23.4615 18.2051 23.3974 18.2051 23.3333C18.2051 23.2692 18.2692 23.2051 18.2692 23.141C18.2692 23.0128 18.2692 22.9487 18.2692 22.8205C18.3333 22.5641 18.4615 22.3077 18.5897 22.0513C18.9103 21.6666 19.2949 21.4743 19.8077 21.2179C20.3205 20.9615 20.8974 20.7051 21.4103 20.4487C22.5641 19.9359 23.6538 19.4231 24.8077 18.9743C27.0513 18.0769 29.359 17.2436 31.7308 16.5384C31.7949 16.5384 31.859 16.4743 31.9231 16.4743C32.1154 16.4102 32.3718 16.3461 32.5 16.282C32.5641 16.282 32.5641 16.2179 32.5641 16.2179C32.5641 16.282 32.5641 16.282 32.5641 16.3461C32.8846 19.1666 32.6923 21.9872 32.4359 24.7436ZM25.4487 17.8205C23.5897 18.5256 21.3462 19.4231 19.2308 20.5769C18.7821 20.8333 18.3974 21.0897 18.141 21.3461C17.8846 20.3205 17.4359 19.2307 16.7308 18.0769C16.6026 17.8846 16.5385 17.6923 16.4103 17.5641C16.4103 17.5641 16.3462 17.5 16.3462 17.4359C16.2821 17.3718 16.1538 17.1795 16.1538 17.1154C16.1538 17.0513 16.3462 16.9231 16.4744 16.8589C16.5385 16.8589 16.5385 16.7948 16.6026 16.7948C16.7949 16.6666 16.9872 16.4743 17.2436 16.3461C17.9487 15.8333 18.6538 15.3846 19.4872 14.9359C22.5641 13.141 26.0256 11.9872 29.359 10.8974L29.5513 10.8333C31.0897 10.3205 32.6923 9.74357 34.2949 9.16664C33.6538 11.3461 32.8846 13.5897 32.0513 15.7051C29.7436 16.2179 27.5641 16.9872 25.4487 17.8205ZM12.6282 11.9231C13.7821 11.282 15.0641 10.641 16.7308 9.80767C16.9872 9.67946 17.2436 9.48716 17.5 9.29485C17.1795 11.2179 17.0513 13.2051 17.1795 15.1923C17.0513 15.2564 16.9231 15.3205 16.7949 15.4487C16.4744 15.7051 16.0897 15.9615 15.7051 16.282C15.2564 16.6666 15.1282 17.0513 15.2564 17.4359C15.3205 17.7564 15.5128 18.0128 15.7051 18.2692C15.8333 18.3974 15.8974 18.5256 15.9615 18.6538C16.282 19.1666 16.4744 19.6154 16.7308 20.1282C17.0513 20.9615 17.3077 21.6666 17.3077 22.3718C13.9744 20.1282 10.2564 18.3974 6.66667 16.7948C6.21795 16.6025 5.76923 16.3461 5.32051 16.1538C7.75641 14.6154 10.1923 13.2051 12.6282 11.9231ZM22.3718 4.80767C22.0513 4.35895 21.6026 3.78203 21.2821 3.2051C21.0256 2.75639 20.7692 2.24357 20.9615 1.73075C21.0256 1.53844 21.2179 1.41023 21.3462 1.41023C21.3462 1.41023 21.3462 1.41023 21.4103 1.41023C21.7308 1.41023 22.0513 1.66664 22.2436 1.92305C22.5 2.30767 22.5641 2.82049 22.6923 3.26921C22.7564 3.46151 22.7564 3.71793 22.8205 3.91023C22.8846 4.10254 23.0769 4.23075 23.2692 4.23075C23.4615 4.23075 23.6538 4.10254 23.7179 3.91023C23.9103 3.33331 24.1026 2.75639 24.359 2.24357C24.4872 1.98716 24.6795 1.73075 24.8077 1.47434C24.8077 1.47434 24.8718 1.41023 24.8718 1.34613C25 1.21793 25.2564 0.83331 25.3846 0.83331C25.5128 0.83331 25.7692 0.961515 25.8333 2.24357C25.8333 2.82049 25.8333 3.46151 25.641 4.10254C25.3846 5.06408 25 6.02562 24.5513 6.92305C23.6538 6.41023 22.8846 5.44869 22.3718 4.80767Z" fill="#CCC4BD"></path>
</svg>
<or-title class="or-title  or-title__md">Shipped with care</or-title><p>
      In a custom packaging, 100% tailored.
</p></or-icon-block>
    <or-icon-block class="or-icon-block"><svg width="51" height="40" viewBox="0 0 51 40" fill="none">
<path d="M50.0357 0.073332C49.8892 7.18851e-05 49.6694 7.18851e-05 49.5229 0.073332H49.4496C49.3031 7.18851e-05 49.1566 -0.0731882 49.01 7.18832e-05C45.4936 1.39201 41.684 1.83157 38.021 2.19787L37.6547 2.27113C33.9185 2.71069 30.4752 3.22352 27.1785 3.95612C26.1529 4.1759 25.2005 4.39568 24.2481 4.61546C22.1236 5.05502 19.999 5.56784 17.8012 5.93414C17.5082 6.0074 17.2884 6.0074 16.9954 6.08066C16.2628 6.22718 15.6034 6.3737 14.8708 6.44696C14.5778 5.86088 14.065 5.34806 13.4789 4.98176C12.8196 4.5422 12.0137 4.61546 11.4276 5.05502C11.2078 5.2748 11.0613 5.49458 11.0613 5.78762C11.0613 6.15392 11.3544 6.59348 11.7207 6.88652C12.4533 7.39934 13.5522 7.54586 14.1382 7.54586C14.358 8.05868 14.7976 8.49824 15.1639 8.9378C15.3104 9.08432 15.4569 9.23084 15.5302 9.3041L15.6767 9.45062C16.1163 9.96344 16.6291 10.4763 17.0686 10.9891C18.021 11.9415 19.2664 12.7473 20.8049 13.5532C20.9514 13.6264 21.1712 13.6264 21.3177 13.5532C21.4642 13.4067 21.6108 13.2601 21.6108 13.0404C21.6108 12.8938 21.5375 12.7473 21.3177 12.6741C19.7793 11.9415 18.6804 11.1356 17.728 10.2565C17.2884 9.81692 16.7756 9.3041 16.336 8.79128L16.1895 8.64476C15.8965 8.35172 15.6034 8.05868 15.3837 7.76564L15.3104 7.69238C15.3104 7.69238 15.2371 7.61912 15.2371 7.54586C15.6767 7.4726 16.043 7.39934 16.4826 7.32608L16.7023 7.25282C17.1419 7.17956 17.5082 7.1063 17.9478 7.03304C18.6071 6.88652 19.1932 6.81326 19.8525 6.66674C21.5375 6.30044 23.2225 5.93414 24.9807 5.56784C29.0833 4.61546 32.4533 4.02938 35.5302 3.66308C36.4093 3.51656 37.3617 3.4433 38.2408 3.37004C40.9514 3.077 43.7353 2.78395 46.4459 2.05135C43.2225 4.1759 39.5595 5.71436 35.9697 7.17956L35.5302 7.39934C31.2078 9.23084 26.2262 11.2821 22.3434 14.7253C21.8305 15.2382 21.3177 15.6777 21.1712 16.4836C21.0979 17.1429 21.0979 17.8023 21.0979 18.3884C21.0979 18.6081 21.0979 18.9012 21.0979 19.121L21.1712 24.762C21.1712 24.9085 21.2445 25.055 21.3177 25.1283C20.3653 25.8609 19.413 26.6667 18.5338 27.3993C16.9954 28.718 15.4569 30.11 13.6254 31.0623C13.1126 31.3554 12.4533 31.6484 11.7207 31.8682C11.7207 31.7949 11.7207 31.7949 11.7207 31.7217C12.087 29.5971 12.38 27.2528 10.9148 25.7876C9.37633 24.2492 6.44593 24.6887 4.98073 26.1539C4.17487 26.9598 3.73531 28.0587 3.73531 29.1576C3.73531 30.2565 4.24813 31.2089 4.98073 31.9415C6.22615 33.0404 8.13091 33.5532 10.1089 33.3334C9.96241 33.6264 9.74263 33.9195 9.52285 34.2125C8.93677 34.8719 8.20417 35.458 7.10527 36.044C6.29941 36.4836 5.42029 36.8499 4.54117 37.2162L0.218822 39.0477C-0.0742188 39.1942 -0.147479 39.414 -0.000958666 39.6338C0.0723014 39.8536 0.292082 40.0001 0.511862 40.0001C0.585122 40.0001 0.658382 40.0001 0.731642 39.9268L5.12725 38.0953C6.00637 37.729 6.95875 37.2895 7.83787 36.8499C8.93677 36.2638 9.74263 35.6045 10.3287 34.9451C10.7683 34.4323 11.1346 33.8462 11.3544 33.1136C14.358 32.381 16.6291 30.403 18.8269 28.425C20.2188 27.2528 21.6108 26.0074 23.1492 25.055C24.3946 24.3224 25.7133 23.8096 27.1785 23.2235C27.6913 23.0037 28.2042 22.8572 28.717 22.6374C29.6694 22.2711 30.6218 21.9048 31.5741 21.5385C31.7939 21.4653 32.0137 21.392 32.1602 21.2455C34.358 23.0037 36.6291 24.6887 38.8269 26.3004C38.9001 26.3737 39.0467 26.3737 39.1932 26.3737C39.3397 26.3737 39.4862 26.2272 39.5595 26.1539C42.9294 19.9268 46.3727 13.4799 48.6437 6.59348C49.3031 4.61546 49.8159 2.63743 50.1822 0.659413C50.3287 0.439632 50.2555 0.219852 50.0357 0.073332ZM37.0686 9.37736C36.4093 9.89018 35.75 10.3297 35.0906 10.8426C32.673 12.6008 30.1822 14.4323 28.0577 16.4836C27.8379 16.4103 27.6181 16.5569 27.4716 16.7766C27.3983 16.9232 27.3983 17.0697 27.3983 17.1429C26.9588 17.5825 26.5192 18.0953 26.0796 18.6081C25.4935 19.2675 24.9807 20.0001 24.4679 20.6594C23.7353 21.6118 23.0027 22.5642 22.1968 23.4433V19.8536C22.1968 19.0477 22.1968 18.2418 22.1968 17.436V17.2895C22.1968 16.9964 22.1968 16.7034 22.2701 16.4836C22.3434 16.1173 22.6364 15.8975 22.9294 15.6777C24.5412 14.2125 26.5192 12.8938 29.01 11.5752C31.4276 10.3297 33.9917 9.23084 36.4826 8.2052C38.3873 7.39934 40.2921 6.59348 42.1968 5.71436L37.0686 9.37736ZM31.7939 19.0477L31.6474 18.9744C30.8415 18.2418 29.8892 17.6558 28.9368 17.0697C29.5961 16.4103 30.3287 15.8243 31.1346 15.1649C32.5998 13.9927 34.1382 12.8938 35.6034 11.7949C36.043 11.4286 36.4826 11.1356 36.9221 10.7693L49.01 1.83157C47.4716 8.64476 44.4679 14.9451 41.684 20.2931C40.8782 21.9048 39.999 23.4433 39.1199 25.1283C36.9954 23.5898 34.8708 21.9781 32.8196 20.2931C32.673 19.7803 32.1602 19.3407 31.7939 19.0477ZM31.3544 20.5862C31.1346 20.6594 30.9148 20.7327 30.695 20.8059C30.6218 20.8792 30.4752 20.8792 30.402 20.9525C29.8892 21.1722 29.3031 21.392 28.7903 21.5385C27.1785 22.1246 25.4935 22.784 23.8818 23.5166C23.662 23.5898 23.5155 23.7363 23.2957 23.8096C23.9551 23.0037 24.6144 22.1979 25.2738 21.3188C25.6401 20.8792 26.0064 20.3664 26.3727 19.9268C26.8855 19.2675 27.5448 18.5349 28.2042 17.8755C29.2298 18.8279 30.2555 19.707 31.3544 20.5862ZM12.1602 5.78762C12.3067 5.71436 12.5998 5.71436 12.7463 5.78762C13.0393 5.86088 13.2591 6.15392 13.4789 6.3737C13.2591 6.30044 13.0393 6.30044 12.8196 6.22718C12.5998 6.15392 12.38 6.08066 12.2335 5.93414C12.2335 5.86088 12.1602 5.78762 12.1602 5.78762ZM7.83787 32.1612C7.03201 32.0147 5.93311 31.5752 5.27377 30.696C4.76095 29.9634 4.61443 29.0111 4.90747 28.1319C5.20051 27.2528 5.93311 26.5935 6.88549 26.2272C7.32505 26.0074 7.83787 25.9341 8.27743 25.9341C8.79025 25.9341 9.22981 26.0074 9.66937 26.2272C11.3544 27.1063 10.9881 29.6704 10.7683 31.0623C10.695 31.4286 10.6218 31.7949 10.5485 32.2345C9.66937 32.3078 8.79025 32.381 7.83787 32.1612Z" fill="#CCC4BD"></path>
</svg>
<or-title class="or-title  or-title__md">Delivered in a flash</or-title><p>
      In just a few hours, anywhere in Tunisia.
</p></or-icon-block>  </section>

  <section class="footer-claim">
    <or-tagline class="or-tagline"><or-title class="or-title  or-title__sm or-title__uppercase" type="primary">GreenChemRecycle</or-title><p>At GreenChemRecycle, the art of nature flourishes every day, <br>finding its rightful place by your side.  </p></or-tagline>

    <or-social-links class="or-social-links"><ul><li><a href="#"><svg width="13" height="13" viewBox="0 0 13 13" >
<path d="M6.49825 3.16487C4.65267 3.16487 3.16319 4.65438 3.16319 6.5C3.16319 8.34562 4.65267 9.83513 6.49825 9.83513C8.34384 9.83513 9.83332 8.34562 9.83332 6.5C9.83332 4.65438 8.34384 3.16487 6.49825 3.16487ZM6.49825 8.66759C5.30472 8.66759 4.3307 7.69356 4.3307 6.5C4.3307 5.30644 5.30472 4.33241 6.49825 4.33241C7.69179 4.33241 8.6658 5.30644 8.6658 6.5C8.6658 7.69356 7.69179 8.66759 6.49825 8.66759ZM9.96991 2.251C9.539 2.251 9.19102 2.59899 9.19102 3.02991C9.19102 3.46082 9.539 3.80881 9.96991 3.80881C10.4008 3.80881 10.7488 3.46245 10.7488 3.02991C10.7489 2.92758 10.7289 2.82624 10.6898 2.73168C10.6507 2.63712 10.5933 2.55121 10.521 2.47885C10.4486 2.4065 10.3627 2.34913 10.2681 2.31003C10.1736 2.27094 10.0722 2.25088 9.96991 2.251ZM12.9993 6.5C12.9993 5.60239 13.0074 4.71292 12.957 3.81694C12.9066 2.77623 12.6692 1.85261 11.9082 1.0916C11.1456 0.328955 10.2236 0.0931713 9.18289 0.0427622C8.2853 -0.00764684 7.39584 0.000483674 6.49988 0.000483674C5.60229 0.000483674 4.71283 -0.00764684 3.81687 0.0427622C2.77618 0.0931713 1.85258 0.330582 1.09158 1.0916C0.328949 1.85424 0.0931695 2.77623 0.0427614 3.81694C-0.0076467 4.71454 0.000483665 5.60402 0.000483665 6.5C0.000483665 7.39598 -0.0076467 8.28708 0.0427614 9.18306C0.0931695 10.2238 0.330576 11.1474 1.09158 11.9084C1.8542 12.671 2.77618 12.9068 3.81687 12.9572C4.71446 13.0076 5.60391 12.9995 6.49988 12.9995C7.39747 12.9995 8.28693 13.0076 9.18289 12.9572C10.2236 12.9068 11.1472 12.6694 11.9082 11.9084C12.6708 11.1458 12.9066 10.2238 12.957 9.18306C13.009 8.28708 12.9993 7.39761 12.9993 6.5ZM11.5683 10.3343C11.4496 10.6303 11.3065 10.8514 11.0773 11.0791C10.848 11.3084 10.6285 11.4515 10.3325 11.5702C9.47721 11.91 7.44625 11.8336 6.49825 11.8336C5.55025 11.8336 3.51767 11.91 2.66236 11.5718C2.36641 11.4531 2.14527 11.31 1.91762 11.0807C1.68834 10.8514 1.54525 10.6319 1.42655 10.336C1.08832 9.47901 1.16475 7.44802 1.16475 6.5C1.16475 5.55198 1.08832 3.51936 1.42655 2.66403C1.54525 2.36808 1.68834 2.14693 1.91762 1.91928C2.14689 1.69163 2.36641 1.5469 2.66236 1.4282C3.51767 1.08997 5.55025 1.1664 6.49825 1.1664C7.44625 1.1664 9.47884 1.08997 10.3341 1.4282C10.6301 1.5469 10.8512 1.69 11.0789 1.91928C11.3082 2.14856 11.4513 2.36808 11.57 2.66403C11.9082 3.51936 11.8318 5.55198 11.8318 6.5C11.8318 7.44802 11.9082 9.47901 11.5683 10.3343Z"></path>
</svg>
</li><li><svg width="11" height="22" viewBox="0 0 11 22">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2.77555 22V10.985H0.595703V7.33387H2.77555V5.12585C2.77555 2.14762 3.64265 0 6.81807 0H10.5957V3.64368H7.93567C6.60361 3.64368 6.30006 4.55269 6.30006 5.50459V7.33387H10.3994L9.83984 10.985H6.30006V22H2.77555Z"></path>
</svg>
</a></li><li><svg width="18" height="23" viewBox="0 0 18 23" >
<path d="M9.6109 0C3.61785 0 0.595703 4.49995 0.595703 8.25327C0.595703 10.5254 1.41707 12.5467 3.17849 13.2993C3.46745 13.424 3.72634 13.3039 3.81018 12.9689C3.8684 12.738 4.00648 12.153 4.06781 11.9086C4.15206 11.5774 4.11941 11.4619 3.88608 11.1722C3.37831 10.5453 3.05326 9.73302 3.05326 8.58171C3.05326 5.24326 5.43842 2.25455 9.26372 2.25455C12.6511 2.25455 14.5122 4.42227 14.5122 7.31671C14.5122 11.1264 12.9025 14.3415 10.5135 14.3415C9.19366 14.3415 8.20645 13.199 8.52223 11.7968C8.90119 10.1229 9.63567 8.31743 9.63567 7.10834C9.63567 6.02722 9.08113 5.12541 7.93471 5.12541C6.58576 5.12541 5.50193 6.5872 5.50193 8.54474C5.50193 9.79171 5.9042 10.6353 5.9042 10.6353C5.9042 10.6353 4.52393 16.7615 4.2818 17.8342C3.80012 19.971 4.20941 22.5897 4.24431 22.8539C4.26465 23.0111 4.45691 23.0489 4.54426 22.9307C4.66824 22.7602 6.27568 20.683 6.82134 18.6068C6.97612 18.0195 7.70841 14.9759 7.70841 14.9759C8.14691 15.8518 9.42791 16.6215 10.7901 16.6215C14.8444 16.6215 17.5957 12.7504 17.5957 7.56857C17.596 3.64934 14.4271 0 9.6109 0Z"></path>
</svg>
</a></li></ul></or-social-links>

  </section>

  <section class="footer-links">
    <div class="footer-links__left">
        <div class="footer-links__content" data-controller="footer-links" data-action="resize@window-&gt;footer-links#handleResize">
    <details data-footer-links-target="accordion" data-action="toggle-&gt;footer-links#handleAccordion" open="">
      <summary>
        Produits
      </summary>
      <div class="footer-links__list">
          <ul>
              <li>
              Industrial Chemicals
              </li>
              <li>
               Agricultural Chemicals 
              </li>
              <li>
               Household Chemicals 
              </li>
              <li>
               Electronic Chemicals
              </li>
              <li>
               Personal care Chemicals
              </li>
              <li>
               Automotive Chemicals
              </li>
              <li>
               Medical Chemicals
              </li>
          </ul>
      </div>
    </details>
  </div>
<div class="footer-links__content" data-controller="footer-links" data-action="resize@window-&gt;footer-links#handleResize">
    <details data-footer-links-target="accordion" data-action="toggle-&gt;footer-links#handleAccordion" open="">
      <summary>
        Contact
      
      </summary>
      <div class="footer-links__list">
        <ul>
            <li>
              <a href="mailto:help@GreenChemRecycle.com">help@GreenChemRecycle.com</a>
            </li>
            
            <li>
               <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Join us </a>
            </li>
        </ul>
    </div>
    </details>
  </div>

    </div>
  </section>


</body>
