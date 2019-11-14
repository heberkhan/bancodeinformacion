
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Versión Imprimible</title>


        <!-- Stylesheets -->
        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" id="css-main" href="css/oneui.min.css">
        <script src="https://kit.fontawesome.com/615ae397eb.js" crossorigin="anonymous"></script>

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-dark'                              Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Light themed Header
            'page-header-dark'                          Dark themed Header

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
            <!-- Side Overlay-->


            <!-- Sidebar -->
            <!--
                Sidebar Mini Mode - Display Helper classes

                Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

                Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
                Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
                Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
            -->


            <!-- Header -->


            <!-- Main Container -->
            <main id="main-container">

                <!-- Hero -->
                <div class="bg-body-light d-print-none">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill h3 my-2">
                                Versión Imprimible <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Banco de Información de Industria y Comercio</small>
                            </h1>
                            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-alt">
                                    <li class="breadcrumb-item">Comercio</li>

                                    <li class="fa fa-home" aria-current="page">
                                        <a class="link-fx" href="{{URL::Previous()}}">Volver</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content">
                    <!-- Invoice -->
                    <div class="block">
                        <div class="block-header" >
                            <h3 class="block-title" >Banco de Información INDUSTRIA Y COMERCIO</h3>
                            <div class="block-options">
                                <!-- Print Page functionality is initialized in Helpers.print() -->
                                <button type="button" class="btn-block-option" onclick="One.helpers('print');">
                                    <i class="fas fa-file-download"></i> Imprimir PDF
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="p-sm-4 p-xl-7">
                                <!-- encabezado -->
                                <div class="row mb-4" style="background-color:#0174DF;">
                                    <!-- comercio Info -->
                                    <div class="col-6 font-size-sm">
                                        <p class="h3" style="color:#fff;">{{$com->nombre}}</p>
                                        <address style="color:#fff;">
                                            <i class="fas fa-home"></i> {{$com->dirEstablecimiento}}<br>
                                            <i class="fas fa-map-marked-alt"></i> {{$com->name}}, Castilla la Nueva<br>
                                            @if($com->celular)
                                            <i class="fas fa-mobile-alt"></i> {{$com->celular}}<br>
                                            @endif
                                            @if($com->email)
                                            <i class="fas fa-envelope-open-text"></i> {{$com->email}}
                                            @endif
                                        </address>
                                    </div>
                                    <!-- END comercio Info -->

                                    <!-- logo -->
                                    <div class="col-6 text-right font-size-sm">


                                            <img src="images/identidad/logo.png" alt="logo_app">

                                    </div>
                                    <!-- END logo -->
                                </div>
                                <!-- END encabezado -->
                                <div class="col-md-5 offset-md-3">
                                  <img src="qrcodes/{{$com->qr}}">
                                  <p>Escanéame y déjanos tus comentarios</p>
                                </div>
                                <div class="col-md-12 offset-md-1">
                                  <h3>ACTIVIDAD: {{$com->actComercial}} - {{$com->categoria}}</h3>
                                  <h3>DIAS LABORALES: {{$datos->diasLaborales}}</h3>
                                  <h3>HORARIO: {{$datos->horario}}</h3>

                                </div>
                                <div class="col-md-5 offset-md-3">
                                  <img src="images/legal.png" style="width:100%; height:auto" alt="soy_legal">
                                </div>
                                <!-- Footer Imprimible-->


                                  <img src="images/identidad/castilla.png" alt="logo-alcaldia" style="width:200px; height:auto;">
                                  
                                  <img src="images/identidad/logo_bdi.png" alt="logo-aplicativo" style="width:300px; height:auto;" class="float-right">
                                  <p class="font-size-sm text-muted text-center py-3 my-3 border-top" style="color:#fff;">
                                      "CAPACIDAD Y VISIÓN PARA IMPULSAR LA LEGALIDAD"
                                  </p>

                                <!-- END Footer Imprimible -->
                            </div>
                        </div>
                    </div>
                    <!-- END Invoice -->
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="bg-body-light">
                <div class="content py-3">
                    <div class="row font-size-sm">
                        <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                            Powered by <a class="font-w600" href="http://adhesdigital.com" target="_blank">ADHE´S DIGITAL</a>
                        </div>

                    </div>
                </div>
            </footer>
            <!-- END Footer -->


        </div>
        <!-- END Page Container -->

        <!--
            OneUI JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/js.cookie.min.js
        -->
        <script src="js/oneui.core.min.js"></script>

        <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <script src="js/oneui.app.min.js"></script>
    </body>
</html>
