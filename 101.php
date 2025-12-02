    <?php
    function feedback404()
    {
        global $BRANDS;
        header("HTTP/1.0 404 Not Found");
        echo "<h1><strong>Yang Anda Cari Tidak Ada Disini</strong></h1>";
        echo "<!-- This is " . ($BRANDS ?? 'undefined') . ". -->";
    }

    // Cek parameter q
    if (isset($_GET['q'])) {
        $filename = "kw.txt";
        if (!file_exists($filename)) {
            die("File kw.txt tidak ditemukan.");
        }

        $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $totalKeywords = count($lines);

        $input = strtolower(str_replace(' ', '-', $_GET['q']));

        $currentIndex = -1;
        foreach ($lines as $index => $item) {
            $normalizedItem = strtolower(str_replace(' ', '-', $item));
            if ($normalizedItem === $input) {
                $currentIndex = $index;
                $BRAND = $item; 
                break;
            }
        }

        if ($currentIndex >= 0) {
            // Tampilkan nama brand dengan format rapi
            $BRANDS = ucwords(strtolower(str_replace('-', ' ', $BRAND)));
            $BRANDS1 = strtolower(str_replace(' ', '-', $BRANDS));

            // Angka konsisten (1-1000)
            $Number = (crc32($BRAND) % 1000) + 1;

            // Ambil 1000 keyword berikutnya (loop jika mentok akhir file)
            $nextKeywords = [];
            for ($i = 1; $i <= 1000; $i++) {
                $nextIndex = ($currentIndex + $i) % $totalKeywords;
                $nextKeywords[] = $lines[$nextIndex];
            }

            // Convert ke variabel individual (opsional, bisa juga langsung array)
            foreach ($nextKeywords as $i => $kw) {
                ${"randomKeyword" . ($i + 1)} = $kw;
                ${"randomUrl" . ($i + 1)} = strtolower(str_replace(' ', '-', $kw));
            }

            // URL penuh untuk canonical & link
            $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https" : "http";
            $urlPath = rtrim($protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], "/");

        } else {
            feedback404();
            exit();
        }
    } else {
        feedback404();
        exit();
    }
    ?>
<!DOCTYPE html>
<html data-browse-mode="P" lang="ja" xml="ja" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#" xmlns:mixi="http://mixi-platform.com/ns#">
<head>
    <script async src="https://s.yimg.jp/images/listing/tool/cv/ytag.js"></script>
    
    <script>
        window.yjDataLayer = window.yjDataLayer || [];
        function ytag() { yjDataLayer.push(arguments); }
        ytag({"type":"ycl_cookie", "config":{"ycl_use_non_cookie_storage":true}});
    </script>
    

    <meta charset="UTF-8">
    <title><?php echo $BRANDS ?> | Layanan Impact Window Tinting Dalam Penyediaan Solusi Kaca Pelindung Profesional</title>
    <link rel="canonical" href="<?php echo $urlPath ?>">
    <link rel="amphtml" href="https://about-impactwindowtinting.pages.dev/access/?q=<?php echo $BRANDS1 ?>">


    <meta name="description" content="<?php echo $BRANDS ?> dan Impact Window Tinting memperkenalkan layanan pemasangan kaca film dan perlindungan jendela untuk rumah, bisnis, maupun kendaraan dengan standar profesional dan kualitas modern.">
    <meta name="keywords" content="<?php echo $BRANDS ?>, <?php echo $BRANDS ?> login, <?php echo $BRANDS ?> apk, <?php echo $BRANDS ?> gacor">

    <meta name="wwwroot" content="" />
    <meta name="rooturl" content="<?php echo $BRANDS ?>" />
    <meta name="shoproot" content="/shop" />


    <!-- Google Tag Manager -->
    
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WW7TZTK');</script>
    
    <!-- End Google Tag Manager -->









    <link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.1/themes/ui-lightness/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://www.komeri.com/css/sys/block_order.css">
    <link rel="stylesheet" href="https://www.komeri.com/css/usr/sb_block.css" media="screen and (max-width:767px)">
    <link rel="stylesheet" href="https://www.komeri.com/css/usr/sb_block.css" media="screen and (min-width:768px)">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.1/jquery-ui.min.js"></script>
    <script src="https://www.komeri.com/lib/jquery.ui.touch-punch.min.js"></script>

    <script src="https://www.komeri.com/lib/jquery.balloon.js"></script>
    <script src="https://www.komeri.com/lib/goods/jquery.tile.min.js"></script>
    <script src="https://www.komeri.com/lib/modernizr-custom.js"></script>
    <script src="https://www.komeri.com/lib/lazysizes.min.js"></script>
    <script src="https://www.komeri.com/js/sys/msg.js"></script>
    <script src="https://www.komeri.com/js/usr/user.js"></script>
    <script src="https://www.komeri.com/js/app/disp.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <meta name="format-detection" content="telephone=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.komeri.com/css/bita_css/base.css?v=2024082001">
    <link rel="stylesheet" href="https://www.komeri.com/css/bita_css/jquery-ui.css">
    <link rel="stylesheet" href="https://www.komeri.com/css/bita_css/sliderrange.css">
    <link rel="stylesheet" href="https://www.komeri.com/css/bita_css/slick-theme.css">
    <link rel="stylesheet" href="https://www.komeri.com/css/bita_css/slick.css">
    <link rel="stylesheet" href="https://www.komeri.com/css/bita_css/sp_module.css?v=2024082001" media="screen and (max-width:767px),print">
    <link rel="stylesheet" href="https://www.komeri.com/css/bita_css/template_b2.css?v=2024082001">

    <link rel="stylesheet" href="https://www.komeri.com/css/sys/user.css?v=2024062702">
    <link rel="stylesheet" href="https://www.komeri.com/css/usr/user.css">

    <script src="https://www.komeri.com/js/slick.min.js" defer></script>
    <script src="https://www.komeri.com/js/drawerCategory.js" defer></script>

    <link rel="icon" href="https://daduspin.calcufast.xyz/image/icon-daduspin.png" sizes="48x48">
    <link rel="icon" href="https://daduspin.calcufast.xyz/image/icon-daduspin.png" type="image/svg+xml">
    <link rel="apple-touch-icon" href="https://www.komeri.com/include_html/common/favicon/apple-touch-icon.png">



    <script src="https://www.komeri.com/js/usr/goods.js"></script>


    <script src="https://www.komeri.com/js/sys/goods_ajax_cart.js"></script>
    <script src="https://www.komeri.com/js/sys/zetaadd.js" defer></script>

    <script src="https://www.komeri.com/js/sys/goods_ajax_bookmark.js"></script>
    <script src="https://www.komeri.com/js/sys/goods_ajax_quickview.js"></script>

    <meta property="og:title" content="<?php echo $BRANDS ?> | Layanan Impact Window Tinting Dalam Penyediaan Solusi Kaca Pelindung Profesional">
    <meta property="og:description" content="<?php echo $BRANDS ?> dan Impact Window Tinting memperkenalkan layanan pemasangan kaca film dan perlindungan jendela untuk rumah, bisnis, maupun kendaraan dengan standar profesional dan kualitas modern.">
    <meta property="og:site_name" content="<?php echo $BRANDS ?> | Layanan Impact Window Tinting Dalam Penyediaan Solusi Kaca Pelindung Profesional">
    <meta property="og:url" content="<?php echo $urlPath ?>">
    <meta property="og:image" content="https://daduspin.calcufast.xyz/banner/banner30.png">
    <meta property="og:type" content="product">
    <meta name="twitter:card" content="summary" />



    <script type="text/javascript" src="https://dynamic.criteo.com/js/ld/ld.js?a=62571" async="true"></script>

    <script type="text/javascript">
        var dataLayer = dataLayer || [];
        dataLayer.push({
            'etm_criteo_loader_url': "https://static.criteo.net/js/ld/ld.js",
            'etm_criteo_account': 62571,
            'etm_var_criteo_script_goods_detail': true,
            'etm_var_criteo_type': "d",
            'etm_goods': "NGH18119763"
        });
    </script>

    <script type="text/javascript">
        window.criteo_q = window.criteo_q || [];
        var deviceType = /iPad/.test(navigator.userAgent) ? "t" : /Mobile|iP(hone|od)|Android|BlackBerry|IEMobile|Silk/.test(navigator.userAgent) ? "m" : "d";
        window.criteo_q.push(
            { event: "setAccount", account: 62571 },
            { event: "setSiteType", type: deviceType},
            { event: "viewItem", item: "NGH18119763" }
        );
    </script>



</head>
<script type="text/javascript">
    digitalData = {
        user: {
            info: {
                login: "false",
                memberID: "",
                myStore: "",
                memberType: "Non-login",
                cardType: ""
            }
        }
        ,
        ecommerce: {
            event: {
                eventName: "prodView"
            },
			items: '{"itemName":"<?php echo $BRANDS ?> | Layanan Impact Window Tinting Dalam Penyediaan Solusi Kaca Pelindung Profesional","JANcode":"NGH18119763"}'
        }

    };
</script>


<body class="page-goods" >
<div class="wrapper">


    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WW7TZTK"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->




    <script type="text/javascript">(function e(){
        var e=document.createElement("script");
        e.type="text/javascript",
            e.async=true,
            e.src="https://komeri.search.zetacx.net/static/zd/zd_register_prd.js";
        var t=document.getElementsByTagName("script")[0];
        t.parentNode.insertBefore(e,t)})();
    </script>
    <script type="text/javascript">
        const zrUserId="";
    </script>








    <div class="header-band  webfont">
        
        <style>
            .header-band {
                background-color: #e40001;
                height: 42px;
                padding: .3em .5em;
                overflow: hidden;
                box-sizing: border-box;
                display: flex;
                flex-wrap: nowrap;
                justify-content: center;
                align-items: center;
                font-size: 30px;
                color: #fff;
                font-variation-settings: "wght" 400;
                font-feature-settings: "palt";
            }

            .header-band--lead {
                /*font-weight: 700;*/
                font-variation-settings: "wght" 900;
                font-feature-settings: "palt";
                color: #fff;
                display: flex;
                align-items: center;
            }

            .header-band--lead img{
                width: 100%;
                height: auto;
                max-width: 35px;
                margin: 0 15px 0 0;
            }
            .header-band--lead img.svg-txt{
                width: 100%;
                height: auto;
                max-width: 100%;
            }
            .header-band--lead__jump {
                font-size: 0.6em;
                font-variation-settings: "wght" 600;
                color: #fff;
                padding-right: 0.5em;
            }
            .header-band--lead--fff {
                /* font-weight: 700; */
                font-variation-settings: "wght" 900;
                font-feature-settings: "palt";
                color: #272989;
                background: #fff;
                padding: 0.2em 0.5em;
                font-size: 0.7em;
                border-radius: 0.3em;
                margin-left: 2em;
            }

            .header-band--lead--link{
                color: #fff;
                background:#969694;
                border-radius: 0.3em;
                border: 2px solid #fff;
                padding: 0.25em 1em 0.35em;
                margin-left: 1em;
                font-size: 0.6em;
                font-variation-settings: "wght" 400;
                font-feature-settings: "palt";
                font-size: 0.6em;
            }
            /*.header-band--lead--link:hover{
            color: #fff;
            border: 2px solid #272989;
            background:#969694;
            font-variation-settings: "wght" 900;
            transition-duration: 500ms;
            }*/
            .header-band--lead__trr {
                -webkit-transform: rotate(15deg);
                transform: rotate(15deg);
                display: inline-block
            }

            .header-band--lead__small {
                font-size: 14px;
                color: #fff;
                align-self: self-end;
                padding-bottom: 2px
            }

            @media screen and (min-width: 768px) {
                .header-band--lead-sp{display: none;}
            }

            @media screen and (max-width: 767px) {
                .header-band--lead-sp{
                    width:100%;
                    max-width: 320px;
                }
                .header-band {
                    display: flex;
                    /*grid-template-columns: 1fr auto;*/
                    /*gap: .75rem;*/
                    place-content: center;
                    font-family: "Noto Sans JP",Sans-Serif;
                    padding: 0 0.5em;
                }
                .header-band--lead img {
                    width: 100%;
                    height: auto;
                    max-height: 40px;
                    margin: 0 2vw 0 0;
                }
                .header-band--lead__small {
                    font-size: 2vw;
                    padding-bottom: 0;
                    align-self: center
                }
                .header-band--lead-pc{
                    display: none;
                }
                .header-band--lead--link {
                    font-size: 13px;
                    /* padding: 0.3em .75em; */
                    margin: 0;
                    /* width: 7em; */
                    text-align: center;
                }
            }
        </style>
        
        <p class="header-band--lead header-band--lead-pc"><span class="header-band--lead__jump">Thanks to you, we are celebrating our 25th anniversary</span><?php echo $BRANDS ?> Founding Festival</p>
        <p class="header-band--lead header-band--lead-sp"><span class="header-band--lead__jump"><?php echo $BRANDS ?></span></p></p>
        <a href="<?php echo $urlPath ?>" data-info="/contents/event/kansyasai/" class="header-band--lead--link"><span style="display:inline-block">For more information</span><span style="display:inline-block">Here</span></a> </div>

    <header id="header" class="webfont">
        <div class="header-container webfont">
            <div class="header-logo">
                <a href="javascript:history.back();" class="header-app--btn">
                    <span></span>
                    <span></span>
                </a>
                <div class="hamburger" id="js-hamburger">
                    <span class="hamburger__line hamburger__line--1"></span>
                    <span class="hamburger__line hamburger__line--2"></span>
                    <span class="hamburger__line hamburger__line--3"></span>
                </div>
                <div class="header-logo--img">
                    <a href="https://www.ecoparkcampogrande.com.br" title="<?php echo $BRANDS ?>" style="color: #e40001;">
                        <img src="https://daduspin.calcufast.xyz/image/logo-daduspin.png" title="" width="270" height="50"></a>
                </div>
            </div>
            <div class="js-suggest header-search">
                <div class="suggest-wrapper">
                    <form name="category" method="get" action="/shop/goods/search.aspx" id="search_form" class="header-search-form">
                        <input type="hidden" name="search" value="x" />
                        <div class="header-search-container">
					<span class="header-search--s-select">
						<select name="category" id="header-select">
<option value="" selected>Category</option>
<option class="header-select--heading" value="21">Tools</option>
<option value="2101"> Power tools</option>
<option value="2102"> Electric machine</option>
<option value="2103">Tip parts</option>
<option value="2104"> Work tools</option>
<option value="2105">Carpenter tools</option>
<option value="2109"> Plastering tools</option>
<option value="2110"> Tool storage</option>
<option value="2111"> Safety</option>
<option value="2112"> Loading and unloading</option>
<option value="2107">Measurement</option>
<option value="2108"> Polishing and Chemical</option>
<option class="header-select--heading" value="22">Hardware and electrical materials</option>
<option value="2203"> Nails and screws</option>
<option value="2204"> Screw bolt</option>
<option value="2205"> Fitting hardware</option>
<option value="2206"> Wire/Chain</option>
<option value="2207"> Reinforcement brackets</option>
<option value="2209">Caster</option>
<option value="2221"> DIY materials</option>
<option value="2222">Safety</option>
<option value="2223">Air conditioner parts</option>
<option value="2224"> Electric wire</option>
<option value="2225"> Wiring components</option>
<option value="2226"> Wiring binding</option>
<option value="2227"> Electrical equipment</option>
<option value="2228"> Wiring parts</option>
<option value="2229"> Ventilation fan</option>
<option class="header-select--heading" value="23">Building materials, wood, and plumbing materials</option>
<option value="2306"> Piping material</option>
<option value="2307"> Faucet</option>
<option value="2308"> Rain Doi</option>
<option value="2309"> Safety and scaffolding materials</option>
<option value="2310">Roof and exterior wall materials</option>
<option value="2311"> Structural steel</option>
<option value="2322">Door windows and fittings</option>
<option value="2313"> Fences and boundary materials</option>
<option value="2323">Ventilation/Chimney</option>
<option value="2331"> Plywood</option>
<option value="2332"> sawn </option>
<option value="2324"> Insulation/Plaster</option>
<option value="2325"> Interior building materials</option>
<option value="2326"> Flooring materials and flooring</option>
<option value="2327"> Health care products</option>
<option value="2328"> DIY wood</option>
<option value="2304"> Cement, sand, gravel</option>
<option value="2329"> Block</option>
<option value="2305"> Exterior materials</option>
<option class="header-select--heading" value="46">Paints and repair agents</option>
<option value="4601">Paint</option>
<option value="4602"> Painting equipment</option>
<option value="4603">Tape</option>
<option value="4604"> Repair materials</option>
<option value="4605"> Caulking material</option>
<option value="4606"> adhesive</option>
<option value="4607"> Packing and packaging</option>
<option value="4608"> Sheet</option>
<option value="4609"> Insulation, condensation products, etc.</option>
<option class="header-select--heading" value="24">exterior and residential equipment</option>
<option value="2406">Exterior</option>
<option value="2401">Kitchen</option>
<option value="2402"> Bathroom/washroom</option>
<option value="2403">Toilet</option>
<option value="2404"> Gas and Oil Water Heaters</option>
<option value="2405"> Energy and electricity</option>
<option value="2407"> Interior/Construction Equipment</option>
<option value="2408"> Sashes, exterior walls, roofs</option>
<option value="2412"> Nameplate/Post</option>
<option class="header-select--heading" value="27">Agricultural materials, fertilizers, pesticides</option>
<option value="2717"> Rice materials</option>
<option value="2718"> Field crop fruits and livestock supplies</option>
<option value="2711"> Agricultural machinery</option>
<option value="2704"> Rice storage and polishing machine</option>
<option value="2712"> House materials</option>
<option value="2713"> Support (cultivation)</option>
<option value="2715"> Bird and animal-proof materials</option>
<option value="2719"> Harvest materials</option>
<option value="2714"> Shipping materials</option>
<option value="2720"> Lifting equipment and transport equipment</option>
<option value="2723"> Agricultural pesticides</option>
<option value="2724"> Home gardening pesticides</option>
<option value="2721"> Agricultural soil</option>
<option value="2706"> Fertilizer</option>
<option value="2722">Feed</option>
<option class="header-select--heading" value="28">Gardening and Plants</option>
<option value="2813"> Garden furniture</option>
<option value="2814"> Garden materials</option>
<option value="2815"> Outdoor flooring</option>
<option value="2817"> Garden decoration</option>
<option value="2816"> Pots and planters</option>
<option value="2812"> Soil</option>
<option value="2818"> Growing gardening supplies</option>
<option value="2807"> Earth and farming tools</option>
<option value="2808"> Brush cutter</option>
<option value="2809"> Sprayer</option>
<option value="2819"> Gardening equipment</option>
<option value="2810"> Watering supplies</option>
<option value="2811"> Snow shoveling supplies</option>
<option value="2802"> Plants</option>
<option value="2820"> seed</option>
<option value="2821">Artificial flowers</option>
<option class="header-select--heading" value="35">Clothing, shoes, and work gloves</option>
<option value="3501">Work clothing</option>
<option value="3507"> Practical clothing</option>
<option value="3508"> Cold protection products</option>
<option value="3502"> Work gloves</option>
<option value="3509"> Raincoat</option>
<option value="3503"> Work accessories</option>
<option value="3511"> Socks</option>
<option value="3504"> Boots</option>
<option value="3505"> Work shoes</option>
<option value="3506">General shoes, accessories</option>
<option value="3512"> Umbrella</option>
<option class="header-select--heading" value="26">Interior/Furniture/Storage</option>
<option value="2601"> Home Deco</option>
<option value="2602"> Carpets and indoor rugs</option>
<option value="2616">Indoor flooring</option>
<option value="2603"> Curtains and Blinds</option>
<option value="2604"> cushions and cushions</option>
<option value="2605"> Beds and bedding</option>
<option value="2617"> Kotatsu supplies</option>
<option value="2613"> Clothing storage supplies</option>
<option value="2618"> Multipurpose storage supplies</option>
<option value="2619">Space storage</option>
<option value="2620"> Living room furniture</option>
<option value="2621"> Entrance furniture</option>
<option value="2626"> Kitchen/Dining Furniture</option>
<option value="2622">Indoor auxiliary products</option>
<option value="2628"> Shinto altars and Shinto equipment</option>
<option value="2625"> Slippers</option>
<option value="2614"> Suitcase/Back</option>
<option value="2624"> Hang/table clock</option>
<option value="2623">Watch</option>
<option class="header-select--heading" value="33">Home appliances and lighting</option>
<option value="3325"> Air conditioners and air conditioning equipment</option>
<option value="3304"> Cooling supplies</option>
<option value="3323"> Heating supplies</option>
<option value="3303">Other heating supplies</option>
<option value="3320"> Household appliances</option>
<option value="3316"> Cooking appliances</option>
<option value="3315"> Stoves and gas appliances</option>
<option value="3318"> AV equipment</option>
<option value="3317"> Beauty and Health</option>
<option value="3306"> Electric wires and extension cords</option>
<option value="3308">Antenna parts</option>
<option value="3311"> Lighting fixtures</option>
<option value="3313"> Light bulbs and fluorescent lights</option>
<option value="3314"> Dry battery</option>
<option value="3322">Network equipment</option>
<option value="3309"> Crime prevention and security</option>
<option value="3321"> Disaster prevention</option>
<option value="3324">Camera</option>
<option value="34">Leisure, Bicycles, and Car Accessories</option>
<option value="3401">Car wash supplies</option>
<option value="3421">Wax Chemical</option>
<option value="3403">Oils and additives</option>
<option value="3404"> Battery, electrical equipment, valves</option>
<option value="3405"> In-car and external products</option>
<option value="3406"> Car accessories</option>
<option value="3422"> Car Electro-Nix</option>
<option value="3408"> Safety and repair</option>
<option value="3409"> Tires and tires related</option>
<option value="3410"> Motorcycle supplies</option>
<option value="3411"> Camping and Outdoor Goods</option>
<option value="3412">Swimwear</option>
<option value="3413">Sports goods</option>
<option value="3414"> Health Training</option>
<option value="3415"> Fishing Tackle</option>
<option value="3416"> Bicycle</option>
<option value="3418"> Bicycle supplies</option>
<option value="3419">Toys</option>
<option value="3420"> Season toys</option>
<option class="header-select--heading" value="29">Pet supplies</option>
<option value="2901">Dog food</option>
<option value="2910"> Dog supplies</option>
<option value="2902"> Cat food</option>
<option value="2911"> Cat supplies</option>
<option value="2912"> Small animals</option>
<option value="2913"> Birds and insects</option>
<option value="2914"> Fish and Reptile Food</option>
<option value="2915"> Fish and Reptile Products</option>
<option class="header-select--heading" value="30">Home products and daily necessities</option>
<option value="3001"> Cleaning tools</option>
<option value="3002"> Cleaning container</option>
<option value="3003"> Laundry supplies</option>
<option value="3004"> Bath supplies</option>
<option value="3005">Towel</option>
<option value="3006">Toilet supplies</option>
<option value="3019"> Storage supplies and storage protection supplies</option>
<option value="3010"> Residential detergent</option>
<option value="3011"> Laundry detergent</option>
<option value="3012"> Kitchenware</option>
<option value="3014"> Air fresheners and deodorants</option>
<option value="3015"> Insect repellents and dehumidifiers</option>
<option value="3016">Pesticides</option>
<option value="3013">Paper</option>
<option value="3017">Chiro</option>
<option value="3018"> Candles, incense sticks, Buddhist altar equipment</option>
<option value="3008"> Sandals</option>
<option class="header-select--heading" value="31">Kitchenware</option>
<option value="3101"> Cooking utensils</option>
<option value="3102"> Cooking products</option>
<option value="3103"> Chopsticks and tableware</option>
<option value="3104"> Tabletop and storage supplies</option>
<option value="3105">Sink supplies</option>
<option value="3111"> Pots and outings</option>
<option value="3108"> Plastic bags and kitchen guards</option>
<option value="3109"> Disposable chopsticks, paper plates, paper cups, and other consumables</option>
<option value="3110">Tablecloth</option>
<option class="header-select--heading" value="32">Health & Beauty</option>
<option value="3201"> Shampoo, soap, bath salts</option>
<option value="3203"> Oral care products</option>
<option value="3204"> Cosmetics and cosmetic accessories</option>
<option value="3214"> Healthcare</option>
<option value="3207"> Baby products</option>
<option value="3215"> Beauty products</option>
<option value="3208"> Handicrafts/Japanese/Western Clothing</option>
<option value="3209"> Senior Care</option>
<option value="3216"> Nursing care products</option>
<option value="3211"> Perfume</option>
<option value="3212"> Postal service related</option>
<option value="3217"> Reading glasses and glasses</option>
<option class="header-select--heading" value="37">Stationery and office supplies</option>
<option value="3701">Office supplies</option>
<option value="3702">OA supplies</option>
<option value="3720"> Computer supplies</option>
<option value="3703">Office equipment and store supplies</option>
<option value="3704"> Office furniture and storage</option>
<option value="3705">File</option>
<option value="3721"> Notebooks, slips, envelopes</option>
<option value="3722"> Congratulations and certificates</option>
<option value="3708"> Writing/School goods</option>
<option value="3723"> Magnifying glass</option>
<option value="3717"> Smoking equipment</option>
<option value="3719"> DIY books</option>
<option class="header-select--heading" value="36">food</option>
<option value="3601"> Sweets</option>
<option value="3602"> Beverages</option>
<option value="3603"> Rice</option>
<option value="3604"> Processed foods</option>
<option value="3606"> Food gifts and other gifts</option>
<option value="3605"> Mochi/New Year's goods</option>
<option class="header-select--heading" value="45">Direct from the source</option>
<option value="4506">Vegetables</option>
<option value="4501">Fruit</option>
<option value="4502"> Rice</option>
<option value="4503">Processed products</option>
<option value="4504"> Sweets</option>
</select>
					</span>
                            <span class="header-search--input">
					<input type="text" value="" maxlength="100" placeholder="What are you looking for?" list="example" class="s-suggest js-suggest-search" name="keyword" data-suggest-submit="on" autocomplete="off">
					</span>
                        </div>
                        <span class="header-search--input-btn">
					<input type="image" src="https://www.komeri.com/img/head_icon_search.svg" alt="Search">
					</span>
                    </form>
                </div>
            </div>
            <div class="header-contact">
                <a href="<?php echo $urlPath ?>">
                    <img src="https://www.komeri.com/img/head_icon_inquiry.svg" alt="Usage guide and inquiries" width="27" height="27">
                    <p class="pc-only">Information on how to use
                        <br>inquiry
                    </p>
                </a>
            </div>
            <div class="header-usr">
		<span class="header-usr--icon">
		  <a href="<?php echo $urlPath ?>">
			<img src="https://www.komeri.com/img/header_usr.svg" alt="account" width="28" height="28">
		  </a>
		</span>
                <span class="header-usr--name js-user-name">
          Guest
		</span>
            </div>
            <div class="header-cart">
                <div class="header-cart--icon">
                    <a href="<?php echo $urlPath ?>" rel="nofollow">
                        <img src="https://www.komeri.com/img/head_icon_cart.svg" alt="cart" width="25" height="25">
                        <span class="header-cart--bag js-cart-count">0</span>
                    </a>
                </div>
                <div class="header-cart--count">
                    <span class="header-cart--count-txt">total amount</span>
                    <span class="header-cart--total-count price" id="js-price">0 USD</span>
                </div>
            </div>
            <div class="header-store js-mystore-area">
		<span class="header-store--icon">
		  <img src="https://www.komeri.com/img/header_mystore.svg" alt="My Store" width="36" height="26">
		</span>
                <p class="header-store--dt">
                    <span class="header-store--dt__head">My Store</span>
                    <span class="header-store--dt-cont">
			<span class="header-store--dt-name js-mystore-area--name"></span>
			<span class="header-store--dt-time js-mystore-area--time"></span>
			<span class="header-store--dt-btn__change">
			<a class="js-mystore-area--change js-mystore-area--change" href="https://impactwindowtinting.co.uk/aboutcontents/event/kansyasai/?5539795000630" data-info="/shop/storeSearch/KeepCriteriaInput.aspx?&transition=top">change</a>
			</span>
		  </span>
                </p>
                <p class="pc-only header-store--login">
        <span>
        <a href="<?php echo $urlPath ?>">
         Login
        </a>
        </span>
                    <span>
        <a href="https://impactwindowtinting.co.uk/aboutshop/customer/entry.aspx" rel="nofollow">
        New Membership Registration
        </a>
        </span>
                </p>
            </div>
            <nav class="header-nav">
                <ul class="header-nav--list">
                    <li class="sp-only header-nav--head">welcome
                        <span>Guest</span>
                    </li>
					<li class="sp-only"> 
					<a href="<?php echo $urlPath ?>">Login</a> 
					</li> 
					<li class="drawerCategory pc-only"> 
					<a href="https://impactwindowtinting.co.uk/aboutshop/category/categorylist.aspx">Category list</a> 
					</li> 
					<li class="sp-only"> 
					<a href="https://impactwindowtinting.co.uk/aboutshop/category/categorylist.aspx">Category list</a> 
					</li> 
					<li> 
					<a href="https://impactwindowtinting.co.uk/aboutshop/pg/1005024240/">Digital flyer</a> 
					</li> 
					<li> 
					<a href="https://impactwindowtinting.co.uk/aboutshop/pg/1howto/">How to Information</a> 
					</li> 
					<li> 
					<a href="https://impactwindowtinting.co.uk/aboutshop/storeSearch/CriteriaInput.aspx">Store/Flyer Search</a> 
					</li> 
					<li class="sp-only"> 
					<a href="https://impactwindowtinting.co.uk/abouttoyu/top/CKmSpSfTop.jsp">Kerosene delivery</a> 
					</li> 
					<li class="sp-only"><a href="https://impactwindowtinting.co.uk/aboutreserve/tool/">Power Tools and Machine Rental</a></li>
                </ul>
                <div class="menu-category-list">
                    <ul>
                        <li class="depth1">
                            <div class="depth1-nm"> <span class="lnk1 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5539585051630">Tools</a> </span> </div>
                            <div class="depth1-lower" data-depth="2">
                                <ul>
                                    <li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5539375041630">Power tools</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5539181041630">Electric machinery</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5538971021630">Tip parts</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5538761011630">Work Tools</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5538551031630">Carpenter Tools</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5538341011630">Plastering tools</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5538131061630">Tool storage</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5537921071630">Security</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5537711001630">Cargo handling</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5537501131630">Measurement</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5537291061630">Polishing and Chemical</a> </span> </div> 
									</li>
                                </ul>
                            </div>
                        </li>
                        <li class="depth1">
                            <div class="depth1-nm"> <span class="lnk1 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5537081031630">Hardware and electrical materials</a> </span> </div>
                            <div class="depth1-lower" data-depth="2">
                                <ul>
                                    <li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5536871041630">Nails and screws</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5536661051630">screw bolt</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5536451061630">Fitting hardware</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5536241071630">Wire Chain</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5536031041630">Reinforcement fittings</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5535821021630">Casters</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5535611101630">DIY materials</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5535401031630">Safety</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5535191111630">Air conditioner parts</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5534981041630">Electrical wire</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5534771061630">Wiring components</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5534561051630">Wiring binding</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5534351041630">Electrical materials</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5534141061630">Wiring parts</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5533931141630">Ventilation fan</a> </span> </div> 
									</li>
                                </ul>
                            </div>
                        </li>
                        <li class="depth1">
                            <div class="depth1-nm"> <span class="lnk1 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5533721071630">Building materials, wood, and plumbing materials</a> </span> </div>
                            <div class="depth1-lower" data-depth="2">
                                <ul>
                                    <li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5533511001630">Plumbing materials</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5533301081630">Fast</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5533091011630">Ame Doi</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5532881091630">Safety and scaffolding</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5532671021630">Roof and exterior wall materials</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5532461011630">Structural steel</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5532251081630">Door windows and fittings</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5532041111630">Fences and boundary materials</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5531831041630">Ventilation/Chimney</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5531634021630">Plywood</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5531424001630">Lubber</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5531214011630">Insulation/Plaster</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5531004001630">Interior building materials</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5530794091630">Fittings and Flooring</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5530584021630">Healthcare products</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5530374051630">DIY wood</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5530164081630">Cement, sand, gravel</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5529954011630">Block</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5529744041630">Exterior materials</a> </span> </div></li>
                                </ul>
                            </div>
                        </li>
                        <li class="depth1">
                            <div class="depth1-nm"> <span class="lnk1 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5529534051630">Paints and repair agents</a> </span> </div>
                            <div class="depth1-lower" data-depth="2">
                                <ul>
                                    <li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5529324001630">Paint</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5529139001630">Painting tools</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5528929021630">Tape</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5528719031630">Repair materials</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5528509001630">caulking material</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5528299051630">Adhesive</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5528089041630">packing and packaging</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5527879061630">sheet</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5527669021630">Insulation and condensation products and more</a> </span> </div> 
									</li>
                                </ul>
                            </div>
                        </li>
                        <li class="depth1">
                            <div class="depth1-nm"> <span class="lnk1 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5527459011630">Exterior and residential equipment</a> </span> </div>
                            <div class="depth1-lower" data-depth="2">
                                <ul>
                                    <li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5527249001630">Exterior</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5527039031630">Kitchen</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5526829041630">Bath and washbasin</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5526619041630">Toilet</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5526409021630">Gas and Oil Water Heater</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5526199071630">Energy and Electricity</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5525989001630">sashes, exterior walls, roofs</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5525779011630">Nameplates and posts</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5525569041630">Interior and fittings</a> </span> </div> 
									</li>
                                </ul>
                            </div>
                        </li>
                        <li class="depth1">
                            <div class="depth1-nm"> <span class="lnk1 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5525359121630">Agricultural materials, fertilizers, pesticides</a> </span> </div>
                            <div class="depth1-lower" data-depth="2">
                                <ul>
                                    <li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5525149001630">Pallet materials</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5524939031630">Flower and livestock materials</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5524729061630">Agricultural machinery</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5524519051630">Rice storage and polishing machine</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5524310041630">House materials</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5524100001630">Supports (cultivation)</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5523890021630">Bird and animal-proof materials</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5523680011630">harvest materials</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5523470041630">Shipping materials</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5523260021630">lifting equipment and transport equipment</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5523050041630">Agricultural pesticides</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5522840031630">Home gardening pesticides</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5522630001630">Agricultural soil</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5522420041630">Fertilizer</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5522210121630">Feed</a> </span> </div> 
									</li>
                                </ul>
                            </div>
                        </li>
                        <li class="depth1">
                            <div class="depth1-nm"> <span class="lnk1 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5522011051630">Gardening and plants</a> </span> </div>
                            <div class="depth1-lower" data-depth="2">
                                <ul>
                                    <li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5521801081630">Garden Furniture</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5521591051630">Gardening materials</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5521381041630">Outdoor flooring</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5521171071630">Garden decoration</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5520961001630">Pots and Planters</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5520751011630">Soil</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5520541061630">Growing horticulture supplies</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5520331031630">Soil and farming tools</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5520121041630">Brush cutter</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5519911011630">Sprayer</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5519702061630">Horticultural Equipment</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5519492111630">Watering supplies</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5519282041630">Snow shoveling supplies</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5519072021630">Plants</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5518862021630">species</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5518652031630">Artificial flowers</a> </span> </div> 
									</li>
                                </ul>
                            </div>
                        </li>
                        <li class="depth1">
                            <div class="depth1-nm"> <span class="lnk1 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5518442061630">Clothing, shoes, work gloves</a> </span> </div>
                            <div class="depth1-lower" data-depth="2">
                                <ul>
                                    <li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5518232141630">Work clothing</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5518027021630">Practical clothing</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5517817031630">Cold protection products</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5517607031630">Work gloves</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5517397011630">Raincoat</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5517187041630">Work accessories</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5516977031630">Socks</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5516767001630">Boots</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5516557051630">Work shoes</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5516347061630">General shoes, accessories</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5516137041630">Umbrella</a> </span> </div> 
									</li>
                                </ul>
                            </div>
                        </li>
                        <li class="depth1">
                            <div class="depth1-nm"> <span class="lnk1 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5515927001630">Interior, Furniture, Storage</a> </span> </div>
                            <div class="depth1-lower open" data-depth="2">
                                <ul>
                                    <li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5515717051630">Home Deco</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5515507081630">Carpets and indoor rugs</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5515297031630">Indoor flooring</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5515087041630">Curtains and Blinds</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5514877071630">Cushions and cushions</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5514684001630">Beds and bedding</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5514474031630">Kotatsu supplies</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5514264041630">Clothing storage supplies</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5514054011630">Multipurpose storage supplies</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5513844021630">Space storage</a> </span> </div> 
									</li>
                                </ul>
                            </div>
                        </li>
                        <li class="depth1">
                            <div class="depth1-nm"> <span class="lnk1 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5513634051630">Home appliances and lighting</a> </span> </div>
                            <div class="depth1-lower" data-depth="2">
                                <ul>
                                    <li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5513424041630">Air conditioners and air conditioning equipment</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5513214011630">Cooling supplies</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5513004041630">Heating supplies</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5512794031630">Other heating supplies</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5512584001630">Household appliances</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5512374011630">Cooking appliances</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5512164061630">Stoves and gas appliances</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5511954051630">AV equipment</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5511744021630">Beauty and Health</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5511534051630">Electric wires and extension cords</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5511324031630">antenna parts</a> </span> </div> 
									</li>
                                </ul>
                            </div>
                        </li>
                        <li class="depth1">
                            <div class="depth1-nm"> <span class="lnk1 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5511114011630">Leisure, Bicycles and Car Goods</a> </span> </div>
                            <div class="depth1-lower" data-depth="2">
                                <ul>
                                    <li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5510904041630">Car wash supplies</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5510694021630">Wax Chemical</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5510484101630">Oils and additives</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5510274031630">Batteries, electrical equipment, valves</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5510064041630">In-car and external goods</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5509854091630">Car accessories</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5509644001630">Car Electrodicus</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5509434001630">Safety and repair</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5509224131630">Tire/Tire related</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5509014011630">Motorcycle supplies</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5508804141630">Camping and Outdoor Goods</a> </span> </div> 
									</li>
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5508594071630">Swimwear</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5508384001630">Sports goods</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5508174051630">Health Training</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5507964061630">Fishing Tackle</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5507754031630">Bicycle</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5507544021630">Bicycle supplies</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5507334051630">Toys</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5507124001630">Season Toys</a> </span> </div> 
									</li>
                                </ul>
                            </div>
                        </li>
                        <li class="depth1">
                            <div class="depth1-nm"> <span class="lnk1 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5506914011630">Pet supplies</a> </span> </div>
                            <div class="depth1-lower" data-depth="2">
                                <ul>
                                    <li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5506704041630">Dog food</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5506494121630">Dog supplies</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5506284061630">Cat food</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5506074031630">Cat supplies</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5505864011630">Small animals</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5505654051630">Birds and Insects</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5505444041630">Fish and Reptile Food</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5505234001630">Fish and reptile supplies</a> </span> </div> 
									</li>
                                </ul>
                            </div>
                        </li>
                        <li class="depth1">
                            <div class="depth1-nm"> <span class="lnk1 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5505026081630">Household goods and daily goods</a> </span> </div>
                            <div class="depth1-lower" data-depth="2">
                                <ul>
                                    <li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5504816011630">Cleaning tools</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5504606041630">Cleaning container</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5504396021630">Laundry supplies</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5504186001630">Bath supplies</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5503980031630">Towel</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5503775021630">Toilet supplies</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5503565041630">Storage supplies and storage protection supplies</a> </span> </div> 
									</li>
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5503355041630">Housing detergent</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5503145051630">laundry detergent</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5502945081630">Kitchenware</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5502735031630">Air Fresheners and Deodorizers</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5502525041630">Insect repellents and dehumidifiers</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5502315071630">insecticides</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5502105001630">Paper</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5501895031630">Cairo</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5501685041630">Candles, Incense Sticks, Buddhist altar equipment</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5501478031630">Sandals</a> </span> </div> 
									</li>
                                </ul>
                            </div>
                        </li>
                        <li class="depth1">
                            <div class="depth1-nm"> <span class="lnk1 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5501268021630">Kitchenware</a> </span> </div>
                            <div class="depth1-lower" data-depth="2">
                                <ul>
                                    <li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5501058001630">Cookware</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5500848081630">Cooking supplies</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5500644051630">Chopsticks and tableware</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5500434041630">Tabletop and storage supplies</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5500224071630">Sink supplies</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5500014001630">Pots and outings</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5499804011630">Poly bags and kitchen guards</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5499594061630">Disposable chopsticks, paper plates, paper cups, and other consumables</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5499384141630">Tablecloth</a> </span> </div> 
									</li>
                                </ul>
                            </div>
                        </li>
                        <li class="depth1">
                            <div class="depth1-nm"> <span class="lnk1 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5499174021630">Health & Beauty</a> </span> </div>
                            <div class="depth1-lower" data-depth="2">
                                <ul>
                                    <li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5498964031630">Shampoo, soaps, bath salts</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5498754021630">Oral care products</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5498544011630">Cosmetics and cosmetic accessories</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5498334001630">Healthcare</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5498124021630">Baby products</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5497914001630">Beauty products</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5497704031630">Crafts/Japanese/Western Dressmaking</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5497494001630">Senior Care</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5497284091630">Care products</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5497074121630">perfume</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5496864051630">Post-related</a> </span> </div> 
									</li> 
									<li class="depth2"> 
									<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5496654081630">Reading glasses and glasses</a> </span> </div> 
									</li>
                                </ul>
                            </div>
                        </li>
                        <li class="depth1">
                            <div class="depth1-nm"> <span class="lnk1 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5496444051630">Stationery and office supplies</a> </span> </div>
                            <div class="depth1-lower" data-depth="2">
                                <ul>
                                    <li class="depth2"> 
										<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5496234021630">Office supplies</a> </span> </div> 
										</li> 
										<li class="depth2"> 
										<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5496024071630">OA supplies</a> </span> </div> 
										</li> 
										<li class="depth2"> 
										<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5495814001630">PC supplies</a> </span> </div> 
										</li> 
										<li class="depth2"> 
										<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5495604051630">Office equipment and store supplies</a> </span> </div> 
										</li> 
										<li class="depth2"> 
										<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5495394021630">Office furniture and storage</a> </span> </div> 
										</li> 
										<li class="depth2"> 
										<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5495184091630">File</a> </span> </div> 
										</li> 
										<li class="depth2"> 
										<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5494974021630">Notes, slips, envelopes</a> </span> </div> 
										</li> 
										<li class="depth2"> 
										<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5494764011630">Celebrations and condolences and certificates</a> </span> </div> 
										</li> 
										<li class="depth2"> 
										<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5494554031630">Writing and school supplies</a> </span> </div> 
										</li> 
										<li class="depth2"> 
										<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5494344111630">Lupe/magnifying glass</a> </span> </div> 
										</li> 
										<li class="depth2"> 
										<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5494134041630">Smoking equipment</a> </span> </div> 
										</li> 
										<li class="depth2"> 
										<div class="depth2-nm"> <span class="lnk2 mgr05"> <a href="https://impactwindowtinting.co.uk/about?v=5493924011630">DIY books</a> </span> </div> 
										</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="header-search--s-close"><span class="s-suggest--close-btn">cancel</span></div>
            <div class="suggest-container">
                <div class="js-suggest disp-sp"></div>
            </div>

            <div class="header-store-map">
                <div class="header-store-map-container">
                    <div class="header-store-map--detail">
                        <dl>
                            <dt>Opening hours:</dt><dd class="js-mystore-area--time"></dd>
                        </dl>
                        <a href="https://impactwindowtinting.co.uk/aboutshop/storeSearch/KeepCriteriaInput.aspx?&transition=top" class="js-mystore-area--detail flatbtn default-btn fs-small webfont">View details</a>
                    </div>
                    <div class="header-store-map--img">
                        <img class="js-mystore-area--map" src="" alt="Store map information" width="300" height="180">
                        <img src="https://www.komeri.com/img/storemap/osm_copr_hs.png" alt="Copy light" width="147" height="15" class="header-store-map--img-copy">
                    </div>
                </div>
            </div>

            <div class="black-bg" id="js-black-bg"></div>
        </div>
    </header>
    <div class="header-sp-store webfont js-mystore-area">
		<span class="header-sp-store--icon">
		<img src="https://www.komeri.com/img/header_mystore.svg" alt="My Store" width="36" height="26">
		</span>
        <span class="header-sp-store--dt__head">My Store</span>
        <span class="header-sp-store--dt-name js-mystore-area--name"></span>
        <span class="header-sp-store--dt-time js-mystore-area--time"></span>
        <span class="header-sp-store--dt-btn__change">
			<a class="js-mystore-area--change" href="https://impactwindowtinting.co.uk/aboutshop/storeSearch/KeepCriteriaInput.aspx?&transition=top">change</a>
		</span>
    </div>











    <link rel="stylesheet" type="text/css" href="https://www.komeri.com/css/sys/goodsdetail.css"/>

    <div class="global-main">


        <div class="breadcrumb">

            <ul class="breadcrumbs">


                <li>
                    <a href="https://www.ecoparkcampogrande.com.br">
                        <?php echo $BRANDS ?>
                    </a>
                </li>

                
                <li>
                    <a href="https://impactwindowtinting.co.uk/about?v=5493732051630">Layanan Impact Window Tinting Dalam Penyediaan Solusi Kaca Pelindung Profesional</a>
                </li>
                
             
    
                
            </ul>


        </div>



        <script src="https://www.komeri.com/js/sys/goods_ajax_storecart.js"></script>
        <section>

            <script src="https://www.komeri.com/js/jquery.elevatezoom.js" defer="defer"></script>
            <script>
                function IsNumeric(strString) {
                    var strValidChars = "0123456789";
                    var strChar;
                    var blnResult = true;

                    for (i = 0; i < strString.length && blnResult == true; i++) {
                        strChar = strString.charAt(i);
                        if (strValidChars.indexOf(strChar) == -1) {
                            blnResult = false;
                        }
                    }

                    return blnResult;
                }

                function ieVersionchecker(){
                    var result  = false;
                    var agent   = window.navigator.userAgent.toLowerCase();
                    var version = window.navigator.appVersion.toLowerCase();
                    if(agent.indexOf("msie") > -1){
                        if (version.indexOf("msie 6.") > -1){
                            result = true;
                        }else if (version.indexOf("msie 7.") > -1){
                            result = true;
                        }else if (version.indexOf("msie 8.") > -1){
                            result = true;
                        }
                    }
                    return result;
                }


                (function(jQuery){
                    jQuery(document).ready(function(){
                        if (jQuery("#goodsImg").attr('src') != '//www.komeri.com/img/goods/noimage_l.gif') {
                            jQuery("#goodsImg").elevateZoom({
                                zoomWindowOffetx: 14,
                                zoomWindowWidth: 550,
                                zoomWindowHeight: 550,
                                cursor: "pointer",
                                borderColour: "#ccc",
                                borderSize: 1,
                                lensBorderSize: 0,
                                lensColour: "#8CD2F5"
                            });
                            jQuery("#example_video_1").hide();
                        }
                        jQuery(".sub-frame img").click(function() {
                            jQuery(".goodsImg").attr('src', jQuery(this).attr('data-image'));
                            if (jQuery(this).attr("class") == "videothum") {
                                if(jQuery('#example_video_1')[0].paused){
                                    jQuery('#example_video_1')[0].play();
                                }else{
                                    jQuery('#example_video_1')[0].pause();
                                }
                            }
                            return false;
                        });
                        jQuery(".sub-frame img").hover(function() {
                            jQuery("#goodsImg").attr('src', jQuery(this).attr('data-image'));
                            var ez =  jQuery('#goodsImg').data('elevateZoom');
                            if (jQuery(this).attr("class") == "videothum") {
                                ez.swaptheimage(jQuery(".mainImg img").attr('src'), "");
                                jQuery("#example_video_1").show();
                                jQuery("#goodsImg").hide();
                            } else {
                                ez.swaptheimage(jQuery(".mainImg img").attr('src'), jQuery(this).attr('data-image'));
                                jQuery("#example_video_1").hide();
                                jQuery("#goodsImg").show();
                            }
                        });
                        if(jQuery("#goodsImg").attr('src') == '//www.komeri.com/img/goods/noimage_l.gif'){
                            jQuery('#goodsImg').hide();
                            jQuery('#example_video_1').show();
                            if (ieVersionchecker()) {
                                jQuery('#videoMsg').show();
                            }
                        }
                        if(ieVersionchecker()){
                            jQuery('#videoMsg').html("The browser you are using does not support product introduction videos. </br>Please view with another browser.");
                        }


                        jQuery(".quantity-btn.decrement").click(function(){
                            if (IsNumeric(jQuery("#goodsCntInp").val())) {
                                var goodsCnt = Number(jQuery("#goodsCntInp").val());
                                if (1 < goodsCnt) {
                                    jQuery("#goodsCntInp").val(goodsCnt - 1);
                                    chkMyStoreCnt();
                                }
                            }
                        });

                        jQuery(".quantity-btn.increment").click(function(){
                            if (IsNumeric(jQuery("#goodsCntInp").val())) {
                                var nextCnt = Number(jQuery("#goodsCntInp").val()) + 1;
                                if (nextCnt <= 99999) {
                                    jQuery("#goodsCntInp").val(nextCnt);
                                    chkMyStoreCnt();
                                }
                            }
                        });

                        jQuery("input[name='qty']").blur(function() {
                            if (IsNumeric(jQuery(this).val())) {
                                chkMyStoreCnt();
                            }
                        });

                        jQuery(".js-animation-select-wrnt").click(function() {
                            jQuery(".js-animation-select-wrnt").removeClass("selected");
                            jQuery(this).addClass("selected");
                        });

                        chkMyStoreCnt();

                        function chkMyStoreCnt() {
                            var stockCnt = jQuery(".store-sel .stock .stockCnt").data("mystore-stock-cnt");
                            if (typeof stockCnt !== 'undefined') {
                                if (Number(jQuery("input[name='qty']").val()) > stockCnt) {
                                    jQuery(".delivery-date-info .keep-delv-plan").hide();
                                    jQuery(".delivery-date-info .store-delv-plan").show();
                                    jQuery(".store-receive .unit-box").show();
                                    jQuery(".store-receive .store-delv-stock").show();
                                    if (jQuery(".store-receive .cart-btn .btn-no-stock").length > 0) {
                                        jQuery(".store-receive .cart-btn .btn-in-stock").hide();
                                        jQuery(".store-receive .cart-btn .btn-no-stock").show();
                                    }
                                } else {
                                    jQuery(".delivery-date-info .store-delv-plan").hide();
                                    jQuery(".delivery-date-info .keep-delv-plan").show();
                                    jQuery(".store-receive .unit-box").hide();
                                    jQuery(".store-receive .store-delv-stock").hide();
                                    if (jQuery(".store-receive .cart-btn .btn-no-stock").length > 0) {
                                        jQuery(".store-receive .cart-btn .btn-in-stock").show();
                                        jQuery(".store-receive .cart-btn .btn-no-stock").hide();
                                    }
                                }
                            } else {
                                jQuery(".delivery-date-info .keep-delv-plan").hide();
                                jQuery(".delivery-date-info .store-delv-plan").show();
                                jQuery(".store-receive .unit-box").show();
                                jQuery(".store-receive .store-delv-stock").show();
                                if (jQuery(".store-receive .cart-btn .btn-no-stock").length > 0) {
                                    jQuery(".store-receive .cart-btn .btn-in-stock").hide();
                                    jQuery(".store-receive .cart-btn .btn-no-stock").show();
                                }
                            }
                        }
                    });
                })(jQuery);

                function checkEnterKey(e){
                    if (!e) {
                        var e = window.event;
                    }
                    if (e.keyCode == 13) {

                        return false;
                    }
                }

                function memberLoginDlg(){
                    var e = document.getElementById("cart-extendedwarranty-modal");
                    e.style.display = "block";
                }
                function closememberLoginDlg(){
                    var e = document.getElementById("cart-extendedwarranty-modal");
                    e.style.display = "none";
                }
            </script>

            <div class="block-goods-detail--promotion-freespace pc-only" id="html1"></div>
            <div class="block-goods-detail--promotion-freespace sp-only" id="html4"></div>
            <div class="goods-main">
                <input type="hidden" value="" id="hidden_variation_group">
                <input type="hidden" value="0" id="variation_design_type">
                <input type="hidden" value="NGH18119763" id="hidden_goods">
                <input type="hidden" value="<?php echo $BRANDS ?> | Layanan Impact Window Tinting Dalam Penyediaan Solusi Kaca Pelindung Profesional" id="hidden_goods_name">
                <input type="hidden" value="true" id="js_zeta_use">
                <input type="hidden" value="NGH18119763" id="js_goods">
                <input type="hidden" value="85" id="js_goods_price">


                <div class="img--wrap">



                    <div class="review-box">
                        <p><a href="#review_form-block"><span class="star-count_rating" data-rate="5"></span> <span class="rating--stars">(265)</span></a></p>
                    </div>



                    <div class="icon-set">
                        <ul>
                            <li><a href="/shop/pg/1005024164" target="_blank"><img src="https://www.komeri.com/img/icon/i_picking.gif" alt="Same-day delivery"></a></li>
                            <li><a href="/shop/pg/1005024164" target="_blank"><img src="https://www.komeri.com/img/icon/i_bill.gif" alt="advertisement"></a></li>








                            <li><a href="/shop/pg/1005024164" target="_blank"><img src="https://www.komeri.com/img/icon/icon_tenpo_keep.png" alt="Can be placed"></a></li>
                            <li><a href="/shop/pg/1005024164" target="_blank"><img src="https://www.komeri.com/img/icon/i_store_recieve.png" alt="In-store pickup"></a></li>
                        </ul>
                    </div>

                    <div class="gallery_thumbs">
                        <div class="goods-img">
                            <div class="main pc-only">
                                <div class="inner">
                                    <div class="pc-img">
                                        <img onerror="alterImage(this, '//www.komeri.com/img/product/noimage_l.gif')" src="https://daduspin.calcufast.xyz/banner/banner30.png" alt="<?php echo $BRANDS ?> | Layanan Impact Window Tinting Dalam Penyediaan Solusi Kaca Pelindung Profesional" id="goodsImg" />


                                    </div>
                                    <div class="favMsg">
                                        <div class="msg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="sp-img sp-only read">
                                <!--                                <script src="https://www.komeri.com/js/jquery.mobile-events.js"></script>-->
                                <!--                                <script src="https://www.komeri.com/js/lightslider.js"></script>-->
                                <!--                                <script src="https://www.komeri.com/js/ItemLightbox-setup.js" defer="defer"></script>-->
                                <link rel="stylesheet" href="https://www.komeri.com/css/bita_css/ItemLightbox-style.css">
                                <div class="PictBox_light">
                                    <div class="item">
                                        <ul class="imageGallery">
										                                            
                                            <li data-thumb="https://daduspin.calcufast.xyz/banner/banner30.png" data-src="https://daduspin.calcufast.xyz/banner/banner30.png" class="read lslide">
                                                <div class="inner">
                                                    <img onerror="alterImage(this, '//www.komeri.com/img/product/noimage_l.gif')" src="https://daduspin.calcufast.xyz/banner/banner30.png" alt="<?php echo $BRANDS ?> | Layanan Impact Window Tinting Dalam Penyediaan Solusi Kaca Pelindung Profesional">
                                                </div>
                                            </li>
										       	                                      
                                            
										                                            
                                            
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="favMsg">
                                    <div class="msg"></div>
                                </div>
                            </div>
                            <script>
                                jQuery(function(){
                                    jQuery(".sp-img").removeClass("read");
                                });
                            </script>
                            <div class="sub-frame pc-only">
								                                
                                <div class="thumb">
                                    <div class="inner">
                                        <img onerror="this.closest('.thumb').style.display='none';" src="https://daduspin.calcufast.xyz/banner/banner30.png" class="thumMainImg" data-image="https://daduspin.calcufast.xyz/banner/banner30.png" alt="<?php echo $BRANDS ?> | Layanan Impact Window Tinting Dalam Penyediaan Solusi Kaca Pelindung Profesional">
                                    </div>
                                </div>
						 	      
                                                                
                               

                                                               

                                
                            </div>
                        </div>



                        <div class="details-area pc-only">
                            <div class="share">
                                <div class="share-btn js-item-wrapper">
                                    <ul class="share-btn--list">
                                        <li>
                                            <div class="pane-goods favorite">

                                                <a class="js-animation-bookmark js-favicon js-block-goods-favorite" data-regtp="1" data-goods="NGH18119763" data-goods-price="85" href="/shop/customer/bookmark.aspx">
                                                    <img src="https://www.komeri.com/img/product/fav_dtl_icon.png" class="dtl" alt="Add to wish list">
                                                    <span class="favorite--word">Add to wish list</span>
                                                </a>

                                            </div>

                                        </li>
                                        <li class="sns-button" data-snstype="twitter">
                                            <a href="#" target="_blank">
                                                <img src="https://www.komeri.com/img/product/twitter-s.svg" alt="Twitter">
                                            </a>
                                        </li>
                                        <li class="sns-button" data-snstype="facebook">
                                            <a href="#" target="_blank">
                                                <img src="https://www.komeri.com/img/product/facebook-s.svg" alt="Facebook">
                                            </a>
                                        </li>
                                        <li class="sns-button" data-snstype="line">
                                            <a href="#" target="_blank">
                                                <img src="https://www.komeri.com/img/product/line-s.svg" alt="LINE">
                                            </a>
                                        </li>
                                        <li class="sns-button" data-snstype="mail">
                                            <a href="#">
                                                <img src="https://www.komeri.com/img/product/mail-s.svg" alt="Email">
                                            </a>
                                        </li>
                                    </ul>
                                    <p class="favorite--msg js-favMsg">Added to wish list</p>
                                    <!--                                    <script src="https://www.komeri.com/js/sys/sns.js" defer></script>-->
                                </div>
                            </div>
                        </div>

                        <div class="details-area-sp sp-only">
                            <div class="share">
                                <div class="share-btn js-item-wrapper">
                                    <ul class="share-btn--list">
                                        <li>
                                            <div class="pane-goods favorite">

                                                <a class="js-animation-bookmark js-favicon js-block-goods-favorite" data-regtp="1" data-goods="NGH18119763" data-goods-price="85" href="https://impactwindowtinting.co.uk/aboutshop/customer/bookmark.aspx">
                                                    <img src="https://www.komeri.com/img/product/fav_dtl_icon.png" class="dtl" alt="Add to wish list">
                                                </a>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="favorite">
                                                <a href="javascript:void(0)" onclick="navshare()" id="sharebtn">
                                                    <img src="https://www.komeri.com/img/product/share_dtl_icon.png" class="dtl" alt="share">
                                                    <span>share</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <p class="favorite--msg js-favMsg">Added to wish list</p>
                                    <script>
                                        function navshare() {
                                            try {
                                                if (navigator.share) {
                                                    navigator.share({
                                                        title: document.title,
                                                        url: location.href,
                                                    })
                                                } else {
                                                    alert('The sharing function cannot be used in your browser.');
                                                }
                                            } catch (e) {
                                                alert('Failed to display the sharing function.');
                                            }
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="article-wrap">
                    <form name="frm" method="GET" action="/shop/cart/cart.aspx">
                        <h1 class="heading--top webfont" id="goodsname" data-goods-name="<?php echo $BRANDS ?> | Layanan Impact Window Tinting Dalam Penyediaan Solusi Kaca Pelindung Profesional">

                            <span style="color: red">HOT !</span>
								<?php echo $BRANDS ?> | Layanan Impact Window Tinting Dalam Penyediaan Solusi Kaca Pelindung Profesional                            </h1>


                        <p class="p-description"><?php echo $BRANDS ?> bersama Impact Window Tinting menyajikan layanan pemasangan kaca film berkualitas tinggi untuk memberikan perlindungan maksimal pada jendela bangunan maupun kendaraan. Platform ini menampilkan berbagai jenis kaca film, manfaat perlindungan UV, hingga peningkatan keamanan dan efisiensi energi. Dengan pengalaman profesional dan teknologi pemasangan modern, Impact Window Tinting membantu pelanggan menentukan produk yang sesuai kebutuhan. Situs ini juga menyediakan panduan praktis agar pengguna memahami fungsi kaca pelindung serta keuntungan jangka panjang yang ditawarkan layanan tersebut.</p>
                            <p><br>Viewers have introduced us to the usability of our products!<br><a href="https://www.daduspin.com/">https://www.daduspin.com/</a></p>

                        <div class="block-goods-name" id="spec_goods_comment"></div>





                        <div class="price--inner">




                            <div class="price--tax">
                                <p class="tax">Online sales<br>Price (tax included)</p>
                                <p class="price--area2"><span class="amt"> 85</span><span class="en">USD</span></p>
                            </div>

                        </div>
                        <div id="sale--txt">





                        </div>


                        <div class="card--point">
                            <ul>


                                <li class="card--txt">Register your Komeri Card Number and pay with Komeri Card<br>Comeri Point ： <span>Earned 6 points</span></li>


                            </ul>
                        </div>



                        <p class="oguchi--btn"><a href="https://impactwindowtinting.co.uk/aboutshop/pg/1SiteUse#info19" class="product-textlink">About Komeri Points</a></p>


                        <div class="quantity">
                            <label for="buybox__quantity__input">Quantity purchased</label>
                            <div class="quantity-btn decrement"><img src="https://www.komeri.com/img/product/icon_minus.svg" alt="Reduce the number of items purchased"></div>
                            <div class="goods-cnt">
                                <input type="tel" name="qty" id="goodsCntInp" class="goods-cnt" value=1 maxlength="5" onkeypress="return checkEnterKey(event);">
                            </div>
                            <div class="quantity-btn increment"><img src="https://www.komeri.com/img/product/icon_plus.svg" alt="Increase the number of items purchased"></div>
                        </div>







                    </form>
                </div>
            </div>
        </section>





        <div class="product__size">
            <ul>

            </ul>
        </div>





        <div class="product__size">
            <ul>

            </ul>
        </div>




        <div id="receive">

            <div class="delivery-receive">
                <h3 class="webfont">
		<span class="rv-icon">
			<img src="https://www.komeri.com/img/product/icon_mystore2.png" alt="Pick up at the store">
		</span>
                    <span class="rv-txt">
			Pick up at the store<br class="sp-only">(Free shipping)
		</span>
                </h3>
                <div class="receive-box store-receive">

                    <div class="bottom-pos">
                        <div class="my-store--zaiko">
                            <p class="receive--heading webfont">Pickup store：</p>


                        </div>







                        <a href="https://impactwindowtinting.co.uk/about?v=5493522031630">
                            <p class="rv-store">
                                <input type="hidden" id="store_cd" value="">
                                <span class="store-sel keepStore" id="keepStoreInfo">
							<span>Choose a shop</span>
						</span>
                            </p>
                        </a>







                        <div class="store-lct">




                        </div>

                        <p class="store-choice--btn__ma"><a href="#" class="flatbtn default-btn fs-medium webfont" onclick="javascript: return DispStoreCartDialog();">Check nearby stores</a></p>


                        <p class="receive--heading webfont">Estimated delivery time:</p>


                        <div class="delivery-date-info">

                            <div class="keep-delv-plan">
                               Order by <p class="nouki mb5"><span class="text-red">1pm</span> → Prepare by <span class="text-red">5pm</span></p><p class="nouki"><span class="text-red">5pm</span> → Prepare by <span class="text-red">The next morning</span>
                            </div>


                            <div class="store-delv-plan" style="display: none;">

                                <p class="nouki mb5">Due to a lack of stock in stores, we will be ordering the item. </p> 
								<p class="nouki">Delivery is scheduled for around 2025-12-02. </p>

                            </div>

                        </div>

                        <p class="store-choice--btn__ma"><a href="/shop/pg/1SiteUse#info07" class="flatbtn default-btn fs-medium arrow-r webfont">How to receive and shipping fees</a></p>
                        <p class="cart-btn">




                            <a href="/shop/cart/cart.aspx" class="flatbtn orangebtn fs-large webfont js-enhanced-ecommerce-add-cart-detail js-animation-add-storecart btn-in-stock js-cart-in-button" data-goods="NGH18119763" data-goods-price="85">Add to Cart</a>



                        </p>
                        <div id="GoodsCntErrMsg" style="display:none" class="textCnter textSize05 textBold mgt10"></div>
                    </div>
                    <div id="storecartlist-modal" data-title="<?php echo $BRANDS ?> | Layanan Impact Window Tinting Dalam Penyediaan Solusi Kaca Pelindung Profesional" style="display:none;">
                        <div class="remodal-overlay">
                            <div class="remodal-container">
                                <div class="remodal-box remodal-store-box">
                                    <div class="remodal-header">
                                        <div class="remodal-box--product remodal-box--store__w">
								<span class="remodal-box--product-img ">
									<img onerror="alterImage(this, '//www.komeri.com/img/product/noimage_l.gif')" src="" alt="" width="60" height="60">
								</span>
                                            <p class="remodal-box--product-name"><?php echo $BRANDS ?> | Layanan Impact Window Tinting Dalam Penyediaan Solusi Kaca Pelindung Profesional</p>
                                        </div>
                                        <div class="remodal-box--close js-modal-close modal-close">
                                            <span class="remodal-box--close__line1"></span>
                                            <span class="remodal-box--close__line2"></span>
                                        </div>
                                    </div>
									<div class="remodal-store--head"> 
									<span>Store name</span> 
									<span>Address</span> 
									<span>Opening Hours </span> 
									<span>Quantity of stock </span> 
									<span>Select store<br> 
									Distance from 
									<span>Number of items purchased</span> 
									</div> 
									<div class="remodal-store--cont"> 

									<span class="remodal-store--detail1">There are no stores nearby that have stock. </span> 

									</div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="delivery-receive">
                <h3 class="webfont">
			<span class="rv-icon">
				<img src="https://www.komeri.com/img/product/icon_truck3.png" alt="Delivery">
			</span>
                    <span class="rv-txt">
				Delivery
			</span>
                </h3>
                <div class="receive-box">




                    <div class="nouki-h__center02">

                        <p class="receive--heading webfont">Estimated delivery time:</p> 
						<p class="nouki mb5">Delivery is scheduled for around 2025-12-06. </p> 


						<p class="nouki">Cash on delivery is limited to credit or cash on delivery. For other payment methods, please refer to <a href="/shop/pg/1SiteUse/#info04" target="_blank">here</a>. </p> 
						<p class="nouki indent1em mb5">*It may take some time for the product to be delivered on December Wednesday, or public holidays, and depending on stock availability. </p>










                    </div>

                    <p class="store-choice--btn__ma"><a href="/shop/pg/1SiteUse#info08_2" class="flatbtn default-btn fs-medium arrow-r webfont">Regarding same-day shipping conditions</a></p>

                    <p class="store-choice--btn__ma"><a href="/shop/pg/1SiteUse#info07" class="flatbtn default-btn fs-medium arrow-r webfont">How to receive and shipping fees</a></p>


                    <p class="cart-btn">

                        <a href="/shop/cart/cart.aspx"  class="flatbtn orangebtn fs-large webfont js-enhanced-ecommerce-add-cart-detail js-animation-add-cart js-cart-in-button" data-goods="NGH18119763" data-goods-price="85">Add to Cart</a>
                        <input type="hidden" value="0" id="order_kind">

                    </p>


                    <div id="GoodsCntErrMsg" style="display:none" class="textCnter textSize05 textBold mgt10"></div>


                </div>
            </div>
            <div id="cart-modal" data-title="Added to cart." style="visibility:hidden;">
                <div class="overlay"></div>
                <div class="remodal-overlay">
                    <div class="remodal-container">
                        <div class="remodal-box">
                            <div class="remodal-header">

                                <span class="remodal-header--txt webfont">Added to cart</span>
                                <span class="remodal-header--img">
							<img src="https://www.komeri.com/img/head_icon_cart_r.svg" alt="cart" width="40" height="40">
						</span>
                                <span class="remodal-header--btn">
							<a href="/shop/cart/cart.aspx" class="flatbtn orangebtn fs-medium webfont">View Cart</a>
						</span>

                            </div>
                            <div class="remodal-box--inner">

                                <div class="remodal-box--product">
						<span class="remodal-box--product-img">
							<img onerror="alterImage(this, '//www.komeri.com/img/product/noimage_l.gif')" src="https://daduspin.calcufast.xyz/banner/banner30.png" alt="<?php echo $BRANDS ?> | Layanan Impact Window Tinting Dalam Penyediaan Solusi Kaca Pelindung Profesional" width="60" height="60">
						</span>
                                    <p class="remodal-box--product-name"><?php echo $BRANDS ?> | Layanan Impact Window Tinting Dalam Penyediaan Solusi Kaca Pelindung Profesional</p>
                                </div>

                                <ul class="remodal-box--btn-list">
                                    <li><a href="#"  name="btncancel" class="flatbtn default-btn fs-medium webfont js-modal-close">Continue shopping</a></li>

                                    <li><a href="/shop/order/make_estimate.aspx" class="flatbtn orangebtn fs-medium webfont cart-modal-toorder">Go to the order process</a></li>
                                    <li><a href="/shop/order/make_estimate.aspx?locker_flg=true" class="flatbtn orangebtn fs-medium webfont cart-modal-locker">Pick up in the locker</a></li>

                                </ul>
                                <p class="remodal-box--txt webfont ajax_salesrelated_modal_title" style="display:none;">The person who bought this product<br class="sp-only">I also buy these products</p>
                            </div>

                            <div class="recommend-area cart-recommend-area ajax_salesrelated_modal" style="display:none;">
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div id="cart-error-modal" style="display:none;">
                <div class="overlay"></div>
                <div class="remodal-overlay">
                    <div class="remodal-container">
                        <div class="remodal-box">
                            <div class="modal-body cart-err-modal">
                                <p id="cart-error-msg"></p>
                            </div>
                            <div class="dialog-content-bottom modal-header">
                                <span class="js-modal-close modal-close-button">Continue shopping</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="pane-goods">
            <div class="fav-button-wrapper js-item-wrapper">
                <p class="favo-list">

                    <a class="js-favbutton flatbtn default-btn fs-medium webfont js-animation-bookmark js-block-goods-favorite " data-goods="NGH18119763" data-goods-price="85" data-regtp="1" href="/shop/customer/bookmark.aspx">Add to wish list</a>

                </p>
                <p class="favorite--msg js-favMsg">Added to wish list</p>
            </div>
            <div id="cancel-modal" data-title="Unlock your favorites" style="display:none;">
                <div class="modal-body">
                    <p>Would you like to unfavorite?</p>
                </div>
                <div class="modal-footer">
                    <input type="button" name="btncancel" class="btn btn-secondary" value="cancel">
                    <a class="btn btn-primary block-goods-favorite-cancel--btn js-animation-bookmark js-modal-close">OK</a>
                    <div class="bookmarkmodal-option">
                        <a class="btn btn-secondary" href="/shop/customer/bookmark_guest.aspx">Go to favorite list</a>
                    </div>
                </div>
            </div>
        </div>





        <div id="spec-area">
            <h2 class="global-hdg2 webfont">More information about <?php echo $BRANDS ?></h2>
            <div>Layanan Impact Window Tinting Dalam Penyediaan Solusi Kaca Pelindung Profesional</div>


        </div>

        <div class="pc-only" id="html2">
            <link rel="stylesheet" type="text/css" href="https://www.komeri.com/include_html/commodities_insert/koukoku/common/css/responsive.css">
            <link rel="stylesheet" href="https://www.komeri.com/include_html/koukoku/common/css/sp_feature_layout.css" media="screen and (max-width:767px)">
            <link rel="stylesheet" href="https://www.komeri.com/include_html/koukoku/common/css/pc_feature_layout.css" media="screen and (min-width:768px)">
            <link rel="stylesheet" type="text/css" href="https://www.komeri.com/include_html/commodities_insert/koukoku/250227_ubermann/css/style.css">
            <div class="maindesign webfont">
                <div class="insert-container">
                    <ul class="publish-column">
							                                                <li class="publish-column--item">
                            <img src="https://daduspin.calcufast.xyz/banner/banner30.png" width="600" height="600" alt="<?php echo $BRANDS ?> | Layanan Impact Window Tinting Dalam Penyediaan Solusi Kaca Pelindung Profesional">
                        </li>
                                                                                                                    
                        
                    </ul>
                </div>
            </div>
            <!--maindesign-->

        </div>
        <div class="sp-only" id="html5"></div>


        <div>
            <link rel="stylesheet" type="text/css" href="https://www.komeri.com/include_html/static/css/bnr.css" />


            <div class="maindesignBnrArea">
                <p class="oneColBnr"></p>
            </div>

        </div>

        <p class="p-txtline-r">
            <a href="https://impactwindowtinting.co.uk/about?v=5493312061630">Search for products in the same category</a>
        </p>










        <div id="js-itemhistory-wrapper" class="top-recommend AA_areaClick" data-currentgoods="">
        </div>
        <input type="hidden" id="js_leave_History" value="" />


        <section class="product-recommend recommend_rank AA_areaClick" style="">
            <h2 class="global-hdg2 webfont">Bestseller ranking</h2>
            <div class="recommend-area recommend-area-ranking rank-content">

                <ul class="slider multiple-items slick-initialized slick-slider">
                    <div class="slick-list draggable">
                        <div class="slick-track" style="opacity: 1; width: 1200px; transform: translate3d(0px, 0px, 0px);">
						<li class="buy-again slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 220px; height: 420.969px;">
                                                                <a href="https://impactwindowtinting.co.uk/about<?php echo $randomUrl2 ?>" tabindex="0">
                                    <div class="thum">
                                        <img onerror="alterImage(this, '//www.komeri.com/img/product/noimage_l.gif')" src="https://daduspin.calcufast.xyz/banner/banner30.png" alt="<?php echo $randomKeyword2 ?>" class=" ls-is-cached lazyloaded">
                                    </div>
                                </a>

                                <a href="https://impactwindowtinting.co.uk/about<?php echo $randomUrl2 ?>" tabindex="0">
                                    <div class="item-name-box"><?php echo $randomKeyword2 ?></div>
                                </a>

                                <div class="price-cart-area">
                                    <div class="store-stock">
                                        <span>My Store Stock：</span>
                                        <span>90</span>
                                    </div>
                                    <div class="customer-review"></div>
                                    <div class="price-area webfont">
                                        <div class="head">tax included</div>
                                        <div class="textRight">
                                            <del></del>
                                            <div class="value pr-red">
                                               <span class="en">$</span> <span class="amt">69</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-goods-list-cartbtn">
                                        <span class="msg"></span>
                                        <a class="js-animation-add-cart js-enhanced-ecommerce-add-cart js-cart-in-button js-animation-add-cart-reccomend" href="https://impactwindowtinting.co.uk/about<?php echo $randomUrl2 ?>" style="display:block" data-goods="2168704" data-goods-price="" tabindex="0">
                                            <p class="product-goods-list-cartbtn--button disp-goodsdetail-only">Add to Cart</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
										                                                                                    <li class="buy-again slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 220px; height: 420.969px;">
                                                                <a href="https://impactwindowtinting.co.uk/about<?php echo $randomUrl3 ?>" tabindex="0">
                                    <div class="thum">
                                        <img onerror="alterImage(this, '//www.komeri.com/img/product/noimage_l.gif')" src="https://daduspin.calcufast.xyz/banner/banner30.png" data-src="https://daduspin.calcufast.xyz/banner/banner30.png" alt="<?php echo $randomKeyword3 ?>" class=" ls-is-cached lazyloaded">
                                    </div>
                                </a>

                                <a href="https://impactwindowtinting.co.uk/about<?php echo $randomUrl3 ?>" tabindex="0">
                                    <div class="item-name-box"><?php echo $randomKeyword3 ?></div>
                                </a>

                                <div class="price-cart-area">
                                    <div class="store-stock">
                                        <span>My Store Stock：</span>
                                        <span>120</span>
                                    </div>
                                    <div class="customer-review"></div>
                                    <div class="price-area webfont">
                                        <div class="head">tax included</div>
                                        <div class="textRight">
                                            <del></del>
                                            <div class="value pr-red">
                                               <span class="en">$</span> <span class="amt">74</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-goods-list-cartbtn">
                                        <span class="msg"></span>
                                        <a class="js-animation-add-cart js-enhanced-ecommerce-add-cart js-cart-in-button js-animation-add-cart-reccomend" href="https://impactwindowtinting.co.uk/about<?php echo $randomUrl3 ?>" style="display:block" data-goods="2168704" data-goods-price="" tabindex="0">
                                            <p class="product-goods-list-cartbtn--button disp-goodsdetail-only">Add to Cart</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                                                                                                                <li class="buy-again slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 220px; height: 420.969px;">
                                                                <a href="https://impactwindowtinting.co.uk/about<?php echo $randomUrl4 ?>" tabindex="0">
                                    <div class="thum">
                                        <img onerror="alterImage(this, '//www.komeri.com/img/product/noimage_l.gif')" src="https://daduspin.calcufast.xyz/banner/banner30.png" data-src="https://daduspin.calcufast.xyz/banner/banner30.png" alt="<?php echo $randomKeyword4 ?>" class=" ls-is-cached lazyloaded">
                                    </div>
                                </a>

                                <a href="https://impactwindowtinting.co.uk/about<?php echo $randomUrl4 ?>" tabindex="0">
                                    <div class="item-name-box"><?php echo $randomKeyword4 ?></div>
                                </a>

                                <div class="price-cart-area">
                                    <div class="store-stock">
                                        <span>My Store Stock：</span>
                                        <span>177</span>
                                    </div>
                                    <div class="customer-review"></div>
                                    <div class="price-area webfont">
                                        <div class="head">tax included</div>
                                        <div class="textRight">
                                            <del></del>
                                            <div class="value pr-red">
                                               <span class="en">$</span> <span class="amt">47</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-goods-list-cartbtn">
                                        <span class="msg"></span>
                                        <a class="js-animation-add-cart js-enhanced-ecommerce-add-cart js-cart-in-button js-animation-add-cart-reccomend" href="https://impactwindowtinting.co.uk/about<?php echo $randomUrl4 ?>" style="display:block" data-goods="2168704" data-goods-price="" tabindex="0">
                                            <p class="product-goods-list-cartbtn--button disp-goodsdetail-only">Add to Cart</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                                                                                                                <li class="buy-again slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 220px; height: 420.969px;">
                                                                <a href="https://impactwindowtinting.co.uk/about<?php echo $randomUrl5 ?>" tabindex="0">
                                    <div class="thum">
                                        <img onerror="alterImage(this, '//www.komeri.com/img/product/noimage_l.gif')" src="https://daduspin.calcufast.xyz/banner/banner30.png" data-src="https://daduspin.calcufast.xyz/banner/banner30.png" alt="<?php echo $randomKeyword5 ?>" class=" ls-is-cached lazyloaded">
                                    </div>
                                </a>

                                <a href="https://impactwindowtinting.co.uk/about<?php echo $randomUrl5 ?>" tabindex="0">
                                    <div class="item-name-box"><?php echo $randomKeyword5 ?></div>
                                </a>

                                <div class="price-cart-area">
                                    <div class="store-stock">
                                        <span>My Store Stock：</span>
                                        <span>61</span>
                                    </div>
                                    <div class="customer-review"></div>
                                    <div class="price-area webfont">
                                        <div class="head">tax included</div>
                                        <div class="textRight">
                                            <del></del>
                                            <div class="value pr-red">
                                               <span class="en">$</span> <span class="amt">49</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-goods-list-cartbtn">
                                        <span class="msg"></span>x
                                        <a class="js-animation-add-cart js-enhanced-ecommerce-add-cart js-cart-in-button js-animation-add-cart-reccomend" href="https://impactwindowtinting.co.uk/about<?php echo $randomUrl5 ?>" style="display:block" data-goods="2168704" data-goods-price="" tabindex="0">
                                            <p class="product-goods-list-cartbtn--button disp-goodsdetail-only">Add to Cart</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                                                                                                                <li class="buy-again slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 220px; height: 420.969px;">
                                                                <a href="https://impactwindowtinting.co.uk/about<?php echo $randomUrl6 ?>" tabindex="0">
                                    <div class="thum">
                                        <img onerror="alterImage(this, '//www.komeri.com/img/product/noimage_l.gif')" src="https://daduspin.calcufast.xyz/banner/banner30.png" data-src="https://daduspin.calcufast.xyz/banner/banner30.png" alt="<?php echo $randomKeyword6 ?>" class=" ls-is-cached lazyloaded">
                                    </div>
                                </a>

                                <a href="https://impactwindowtinting.co.uk/about<?php echo $randomUrl6 ?>" tabindex="0">
                                    <div class="item-name-box"><?php echo $randomKeyword6 ?></div>
                                </a>

                                <div class="price-cart-area">
                                    <div class="store-stock">
                                        <span>My Store Stock：</span>
                                        <span>189</span>
                                    </div>
                                    <div class="customer-review"></div>
                                    <div class="price-area webfont">
                                        <div class="head">tax included</div>
                                        <div class="textRight">
                                            <del></del>
                                            <div class="value pr-red">
                                               <span class="en">$</span> <span class="amt">63</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-goods-list-cartbtn">
                                        <span class="msg"></span>
                                        <a class="js-animation-add-cart js-enhanced-ecommerce-add-cart js-cart-in-button js-animation-add-cart-reccomend" href="https://impactwindowtinting.co.uk/about<?php echo $randomUrl6 ?>" style="display:block" data-goods="2168704" data-goods-price="" tabindex="0">
                                            <p class="product-goods-list-cartbtn--button disp-goodsdetail-only">Add to Cart</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            			
                                                                                   
                                                                                  
                            
                        </div>

                    </div>

                </ul>
            </div>
            <p><a href="https://impactwindowtinting.co.uk/about?v=5493102041630" class="recommend-area-ranking--topbtn webfont" role="button">View more this category</a></p>
        </section>


        <div id="review_form-block">
            <h2 id="review_form"class="global-hdg2 webfont">Customer reviews</h2>
        </div>





        <div class="review-box">
            <p class="review-box--container__row">Recommendation level&ensp;<span class="star-count_rating" data-rate="5"></span>&nbsp;4.9</p>
        </div>
        <p>Currently, 265 reviews have been posted.</p>






        <p class="block-goods-user-review--need-login-message"><a href="/shop/customer/menu.aspx">login</a> is required to post a review. </p>








        <noscript><span class="noscript">Please enable Javascript. </span></noscript>

        <div id="userreview_frame">

        </div>




        <div id="review_form-block">
            <div id="review_form" class="block-goods-user-review--form">
            </div>

            <p class="mt30"><a href="https://impactwindowtinting.co.uk/about?v=5490607051630" class="flatbtn default-btn arrow-r fs-medium  etcbtn mwbtn webfont review-btn" role="button">Write a review</a></p>

        </div>




        <div class="pc-only" id="html3"></div>

        <link rel="stylesheet" type="text/css" href="https://www.komeri.com/css/usr/lightbox.css">
        <script src="https://ajax.calcufast.xyz/js/sys/fullset.js"></script>
        <script src="https://www.komeri.com/lib/goods/lightbox.js"></script>
        <script src="https://www.komeri.com/js/sys/goods_zoomjs.js"></script>



        <script type="application/ld+json">
           {
                "@context":"https://schema.org/",
                "@type":"Product",
                "name":"<?php echo $BRANDS ?> | Layanan Impact Window Tinting Dalam Penyediaan Solusi Kaca Pelindung Profesional",
                "image": ["https:\/\/cdn.moglix.com\/p\/tiD71H5ahI0Cu-xxlarge.jpg"],
                "sku":"NGH18119763",
                "review": {
                    "@type": "Review",
                    "reviewRating": {
                        "@type": "Rating",
                        "ratingValue": "4.9",
                        "bestRating": "5"
                    },
                    "author": {
                        "@type": "Organization",
                        "name": "<?php echo $BRANDS ?>"
                    }
                },
                "aggregateRating": {
                    "@type": "AggregateRating",
                    "ratingValue": "4.9",
                    "reviewCount": "265"
                },
                "offers":{
                    "@type":"Offer",
                    "price":85,
                    "priceCurrency":"USD",
                    "availability":"https://schema.org/InStock",
                    "itemCondition":"https://schema.org/NewCondition"
                }
            }

        </script>

    </div>





    <footer>

        <p id="footer_pagetop" class="block-page-top"><a href="#header"></a></p>
        <div class="layout-footer webfont">
            <div class="footer__inner">

                <div class="layout-footer_sns--arrea">
                    <ul class="footer-sns__list">
                        <li><a href="https://twitter.com/<?php echo $BRANDS ?>" target="_blank"><img src="https://www.komeri.com/include_html/top/images/sns_01.svg" alt="X" width="60" height="60">
                            <p class="icon-pc__title text-hide">X</p>
                        </a></li>
                        <li><a href="https://www.instagram.com/<?php echo $BRANDS ?>" target="_blank"><img class="sp" src="https://www.komeri.com/img/sns_02.png" alt="Instagram" width="60" height="60">
                            <p class="icon-pc__title text-hide">Instagram</p>
                        </a></li>
                        <li><a href="https://www.facebook.com/<?php echo $BRANDS ?>" target="_blank"><img class="sp" src="https://www.komeri.com/img/sns_03.svg" alt="Facebook" width="60" height="60">
                            <p class="icon-pc__title text-hide">Facebook</p>
                        </a></li>
                        <li><a href="https://lin.ee/<?php echo $BRANDS ?>" target="_blank"><img class="sp" src="https://www.komeri.com/img/sns_05.svg" alt="LINE" width="60" height="60">
                            <p class="icon-pc__title icon-sp__title">hard&amp;<br>Green</p>
                        </a></li>
                        <li><a href="https://lin.ee/<?php echo $BRANDS ?>" target="_blank"><img class="sp" src="https://www.komeri.com/img/sns_05.svg" alt="LINE" width="60" height="60">
                            <p class="icon-pc__title icon-sp__title">Power</p>
                        </a></li>
                        <li><a href="https://www.youtube.com/<?php echo $BRANDS ?>" target="_blank"><img class="sp" src="https://www.komeri.com/img/sns_04.svg" alt="YouTube" width="60" height="60">
                            <p class="icon-pc__title text-hide">YouTube</p>
                        </a></li>
                    </ul>
                </div>

                <ul class="layout-footer_nav">
                    <li><a href="https://impactwindowtinting.co.uk/aboutshop/pg/1005022001/"><span>Contact Us</span></a></li> 
					<li><a href="<?php echo $urlPath ?>"><span>User Guide</span></a></li> 
					<li><a href="https://impactwindowtinting.co.uk/aboutshop/pg/1Sitemap/"><span>Sitemap</span></a></li> 
					<li><a href="https://impactwindowtinting.co.uk/aboutshop/pg/1AgreementInfo/"><span>Terms of Use</span></a></li> 
					<li><a href="https://impactwindowtinting.co.uk/aboutshop/pg/1005024086/"><span>Company overview</span></a></li> 
					<li><a href="https://impactwindowtinting.co.uk/aboutshop/storeSearch/CriteriaInput.aspx"><span>Store Information</span></a></li> 
					<li><a href="https://impactwindowtinting.co.uk/aboutshop/pg/1005024010/"><span>Specified Commercial Transactions Act</span></a></li> 
					<li><a href="https://impactwindowtinting.co.uk/aboutinformation/privacy_policy.html"><span>Privacy Policy</span></a></li> 
					<li><a href="https://impactwindowtinting.co.uk/aboutshop/pg/1recruit/"><span>Recruitment</span></a></li>
                </ul>

                <div class="footer-menu">
                    <h2 class="footer-menu__title">Specialized Site</h2> 
					<ul class="footer-menu__column"> 
						<li><a href="https://impactwindowtinting.co.uk/aboutshop/pg/1sancyoku/">Direct from Komeri</a></li> 
						<li><a href="https://impactwindowtinting.co.uk/aboutcontents/reform/">Komeri Reform</a></li> 
						<li><a href="https://impactwindowtinting.co.uk/aboutcontents/renga/">brick.pro</a></li> 
						<li><a href="https://impactwindowtinting.co.uk/aboutjukyuban/">Sumikyuban</a></li> 
						<li><a href="https://impactwindowtinting.co.uk/aboutshop/e/e009001044001/">Green Garden & Garden</a></li> 
						<li><a href="https://impactwindowtinting.co.uk/abouttoyu/top/CSfTop.jsp">Kerosene delivery</a></li> 
						<li><a href="https://impactwindowtinting.co.uk/abouthg/" target="_blank">Komeri Hard & Green</a></li> 
						<li><a href="https://impactwindowtinting.co.uk/aboutpw/" target="_blank">Komeri Power</a></li> 
						<li><a href="https://impactwindowtinting.co.uk/aboutshop/e/e009001036001/">Professional feature</a></li> 
						<li><a href="https://impactwindowtinting.co.uk/aboutreserve/tool/">Power Tools and Machinery Rental Services</a></li> 
					</ul>
                </div>

                <p class="footer_copyright">Copyright &copy; <?php echo $BRANDS ?> Co.,Ltd. All rights reserved.</p>
            </div>
        </div>
        <script>
            jQuery(".sns-button").each(function(){
                if(jQuery(this).attr("data-snstype")=="twitter"){
                    jQuery(this).find("img").attr("src","https://www.komeri.com/include_html/top/bpr2020/header/img/twitter-s.svg");
                    jQuery(this).find("img").attr("alt","X");
                }
            });
        </script>





    </footer>


    <script src="https://www.komeri.com/js/header_move_smooth.js"></script>

    <script>
        zdView = {
            product : {
                user_id: "" ,
                site: "0",
                goods_no:"NGH18119763"
            }
        }
    </script>

</div>
</body>
</html>
