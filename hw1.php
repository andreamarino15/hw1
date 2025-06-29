<!DOCTYPE html>
<html>
    
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil:opsz,wght@10..72,100..900&family=Tektur:wght@400..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />
        <title>hw1</title>
        <meta name="viewport" content="width=device-width , initial-scale=1">
       
        <link rel="stylesheet" href="hw1.css?v=<?php echo time(); ?>">
        <script src="hw1.js?v=<?php echo time(); ?>" defer="true"></script>
    </head>
    <body>
        <header id="header">
            <div id="hidden">
                <button id="menu_hidden">
                    <svg class="stockx-icon " focusable="false" viewBox="0 0 50 50" style="fill: var(--chakra-colors-text-primary, text-primary);"><g><path fill-rule="evenodd" clip-rule="evenodd" d="M7 16.25V14H43V16.25H7Z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M43 26.5H7V24.25H43V26.5Z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M43 36.75H7V34.5H43V36.75Z"></path></g></svg>
                </button>
                <div id="logo_hidden">
                    <a href="https://stockx.com/">
                        <svg class="stockx-icon " focusable="false" viewBox="0 0 201 40" aria-hidden="true" style="fill: var(--chakra-colors-brand-primary, brand-primary);"><title>StockX Logo</title><g><path d="M186.401 27.5001L201.001 40V30L189.328 20.0056L201.001 10V0L180.601 17.4859V12.4999L166.001 0V10L177.674 19.9944L166.001 30V40L186.401 22.5144V27.5001Z"></path><path d="M20.3007 16.8L13.7506 15.55C10.1005 14.85 8.50062 14 8.50062 12C8.50062 9.19995 11.6506 7.74994 15.6006 7.74994C19.7506 7.74994 23.4506 9.34994 24.2506 12.75H31.2508C30.4508 6.25002 24.6007 2 15.6006 2C7.30062 2 0.750616 5.65011 0.750616 12.2501C0.750616 18.0001 5.65063 20.9001 12.2006 22.1501L18.7506 23.4001C22.4007 24.1001 24.2506 25.2501 24.2506 27.5001C24.2506 30.55 20.8506 32.2501 16.6506 32.2501C11.5006 32.2501 8.05063 29.7501 7.25063 26.0001H0.000610352C1.0506 33.5001 6.95062 38.0001 16.6506 38.0001C25.3006 38.0001 32.0006 34.5001 32.0006 27.25C32.0007 20.85 26.8506 18.05 20.3007 16.8Z"></path><path d="M48.6507 6.25001V2.5H41.4007V5.25001C41.4007 8.49998 39.9007 10 36.6507 10H34.6007V15.5H40.3507V29.0001C40.3507 35.0001 43.3007 37.5001 50.3007 37.5001H56.2507V32H50.9507C48.4507 32 47.6007 31.25 47.6007 29V15.5H56.2507V10H45.5007L48.6507 6.25001Z"></path><path d="M111.351 32.5C106.101 32.5 102.751 28.8 102.751 23.8C102.751 18.8 106.101 15.1 111.351 15.1C115.401 15.1 118.301 17.35 119.051 20.1H126.201C124.901 13.6 119.251 9.59998 111.351 9.59998C101.901 9.59998 95.3508 15.3 95.3508 23.8C95.3508 32.3 101.901 38 111.351 38C119.251 38 125.451 34 126.451 27.25H119.301C118.551 29.75 115.851 32.5 111.351 32.5Z"></path><path d="M75.3507 9.59998C65.6008 9.59998 59.3507 15.3 59.3507 23.8C59.3507 32.3 65.6007 38 75.3507 38C85.1007 38 91.3508 32.3 91.3508 23.8C91.3508 15.3 85.1008 9.59998 75.3507 9.59998ZM75.3507 32.5C70.1007 32.5 66.7507 28.8 66.7507 23.8C66.7507 18.8 70.1007 15.1 75.3507 15.1C80.6007 15.1 83.9508 18.8 83.9508 23.8C83.9508 28.8 80.6008 32.5 75.3507 32.5Z"></path><path d="M145.151 22.9001L160.201 10.0001H150.451L138.151 20.8001V2.5H130.901V37.5001H138.151V28.9001L142.498 25.1742L153.051 37.5001H162.251L149.751 22.9001H145.151Z"></path></g></svg>
                    </a>
                </div>
                <button id="input_hidden">
                    <svg class="stockx-icon " focusable="false" viewBox="0 0 50 50"><path fill="currentColor" d="M33.8 31.5L32.5 31.6C34.9 29 36.4 25.5 36.4 21.7C36.4 13.7 29.9 7.10001 21.8 7.10001C13.7 7.10001 7.3 13.7 7.3 21.7C7.3 29.7 13.8 36.3 21.9 36.3C25.6 36.3 29 34.9 31.5 32.6L31.4 34L40.3 42.9L42.7 40.5L33.8 31.5ZM21.9 33.3C15.5 33.3 10.3 28.1 10.3 21.7C10.3 15.3 15.5 10.1 21.9 10.1C28.3 10.1 33.5 15.3 33.5 21.7C33.5 28.1 28.2 33.3 21.9 33.3Z"></path></svg>
                </button>
            </div>
            <div id="logo">
                <a href="https://stockx.com/">
                    <svg class="stockx-icon " focusable="false" viewBox="0 0 201 40" aria-hidden="true" style="fill: var(--chakra-colors-brand-primary, brand-primary);"><title>StockX Logo</title><g><path d="M186.401 27.5001L201.001 40V30L189.328 20.0056L201.001 10V0L180.601 17.4859V12.4999L166.001 0V10L177.674 19.9944L166.001 30V40L186.401 22.5144V27.5001Z"></path><path d="M20.3007 16.8L13.7506 15.55C10.1005 14.85 8.50062 14 8.50062 12C8.50062 9.19995 11.6506 7.74994 15.6006 7.74994C19.7506 7.74994 23.4506 9.34994 24.2506 12.75H31.2508C30.4508 6.25002 24.6007 2 15.6006 2C7.30062 2 0.750616 5.65011 0.750616 12.2501C0.750616 18.0001 5.65063 20.9001 12.2006 22.1501L18.7506 23.4001C22.4007 24.1001 24.2506 25.2501 24.2506 27.5001C24.2506 30.55 20.8506 32.2501 16.6506 32.2501C11.5006 32.2501 8.05063 29.7501 7.25063 26.0001H0.000610352C1.0506 33.5001 6.95062 38.0001 16.6506 38.0001C25.3006 38.0001 32.0006 34.5001 32.0006 27.25C32.0007 20.85 26.8506 18.05 20.3007 16.8Z"></path><path d="M48.6507 6.25001V2.5H41.4007V5.25001C41.4007 8.49998 39.9007 10 36.6507 10H34.6007V15.5H40.3507V29.0001C40.3507 35.0001 43.3007 37.5001 50.3007 37.5001H56.2507V32H50.9507C48.4507 32 47.6007 31.25 47.6007 29V15.5H56.2507V10H45.5007L48.6507 6.25001Z"></path><path d="M111.351 32.5C106.101 32.5 102.751 28.8 102.751 23.8C102.751 18.8 106.101 15.1 111.351 15.1C115.401 15.1 118.301 17.35 119.051 20.1H126.201C124.901 13.6 119.251 9.59998 111.351 9.59998C101.901 9.59998 95.3508 15.3 95.3508 23.8C95.3508 32.3 101.901 38 111.351 38C119.251 38 125.451 34 126.451 27.25H119.301C118.551 29.75 115.851 32.5 111.351 32.5Z"></path><path d="M75.3507 9.59998C65.6008 9.59998 59.3507 15.3 59.3507 23.8C59.3507 32.3 65.6007 38 75.3507 38C85.1007 38 91.3508 32.3 91.3508 23.8C91.3508 15.3 85.1008 9.59998 75.3507 9.59998ZM75.3507 32.5C70.1007 32.5 66.7507 28.8 66.7507 23.8C66.7507 18.8 70.1007 15.1 75.3507 15.1C80.6007 15.1 83.9508 18.8 83.9508 23.8C83.9508 28.8 80.6008 32.5 75.3507 32.5Z"></path><path d="M145.151 22.9001L160.201 10.0001H150.451L138.151 20.8001V2.5H130.901V37.5001H138.151V28.9001L142.498 25.1742L153.051 37.5001H162.251L149.751 22.9001H145.151Z"></path></g></svg>
                </a>
            </div>
            <div id="input">
                <div>
                    <span class="material-symbols-outlined">
                        search
                    </span> 
                </div>
                <!--<input placeholder="Search for brand, color, etc. "> !-->
                <form id="searchForm" autocomplete="off" method="GET" action="risultati.php">
                    <div id="search">
                        <input type="text" name="search" value="<?php echo htmlspecialchars($search ?? ''); ?>" placeholder="Search for brand, color, etc. ">
                        <input id="cerca" type="submit" value="Search">
                    </div>
                </form>
            </div>
            <nav id="navbar">
                <a href="https://stockx.com/news/?_gl=1*1jwjrkw*_up*MQ..*_gs*MQ..&gclid=CjwKCAjwp8--BhBREiwAj7og1zCiMJTWjOieYuqnXpdmxSbM-VC3KtJMYJRZLqwcMAGbKfA1gb52uRoCQ74QAvD_BwE&gclsrc=aw.ds">
                    News</a>
                <a href="https://stockx.com/about/how-it-works/?_gl=1*bki2o7*_up*MQ..*_gs*MQ..&gclid=CjwKCAjwp8--BhBREiwAj7og1zCiMJTWjOieYuqnXpdmxSbM-VC3KtJMYJRZLqwcMAGbKfA1gb52uRoCQ74QAvD_BwE&gclsrc=aw.ds">
                    About</a>
                <a href="https://stockx.com/help/home?_gl=1*1ykamvz*_up*MQ..*_gs*MQ..&gclid=CjwKCAjwp8--BhBREiwAj7og1zCiMJTWjOieYuqnXpdmxSbM-VC3KtJMYJRZLqwcMAGbKfA1gb52uRoCQ74QAvD_BwE&gclsrc=aw.ds">
                    Help</a>
                <a href="https://stockx.com/sell">
                    Sell</a>
                <a href="profilo.php">
                <svg id="profile" class="stockx-icon " focusable="false" viewBox="0 0 50 50"><path d="M25 26.6999C19.8 26.6999 15.6 22.4999 15.6 17.2999C15.6 12.0999 19.8 7.8999 25 7.8999C30.2 7.8999 34.4 12.0999 34.4 17.2999C34.4 22.4999 30.2 26.6999 25 26.6999ZM25 10.0999C21.1 10.0999 17.8 13.2999 17.8 17.2999C17.8 21.2999 21 24.4999 25 24.4999C29 24.4999 32.2 21.2999 32.2 17.2999C32.2 13.2999 28.9 10.0999 25 10.0999Z" fill="white"></path><path d="M41.4 42.1998C39.6 34.6998 32.8 29.2998 25 29.2998C17.3 29.2998 10.4 34.6998 8.59998 42.1998H10.9C12.6 35.9998 18.4 31.4998 24.9 31.4998C31.4 31.4998 37.2 35.9998 38.9 42.1998H41.4Z" fill="white"></path></svg>
                
                </a>
                <a href="logout.php">
                    Logout
                </a>

            </nav>


        </header>
        
        <div id="menu">
            <div data-index="1">
                <a href="https://stockx.com/brands">
                    Brands
                </a>
            </div>
            <div>
                <a href="https://stockx.com/search?sort=most-active">
                    New
                </a>
            </div>
            <div>
                <a href="https://stockx.com/browse/men">
                    Men
                </a>
            </div>
            <div>
                <a href="https://stockx.com/browse/women">
                    Women
                </a>
            </div>
            <div>    
                <a href="https://stockx.com/browse/kids">
                    Kids
                </a>
            </div>
            <div>
                <a href="https://stockx.com/category/sneakers">
                    Sneakers
                </a>
            </div>
            <div>
                <a href="https://stockx.com/category/shoes">
                    Shoes
                </a>
            </div>
            <div>
                <a href="https://stockx.com/category/apparel">
                    Apparel
                </a>
            </div>
            <div>
                <a href="https://stockx.com/category/accessories">
                    Accessories
                </a>
            </div>
            <div>
                <a href="https://stockx.com/category/collectibles">
                    More Categories
                </a>
            </div>
            <div>
                <a href="https://stockx.com/dp/deals">
                    Deals
                </a>
            </div>
            <div>
                <a href="https://stockx.com/stockx-gift-card">
                    Gift Cards
                </a>
            </div>
        </div>

        <div id="menu_comparsa" class="hidden">
            <div id="contenitore_comparsa">
                <ul>
                    <div id="primo-div">
                        <a>
                            All Brands
                        </a>
                        <ul>
                            <li>
                                <a>
                                    A
                                </a>
                            </li>
                            <li>
                                <a>
                                    B
                                </a>
                            </li>
                            <li>
                                <a>
                                    C
                                </a>
                            </li>
                            <li>
                                <a>
                                    D
                                </a>
                            </li>
                            <li>
                                <a>
                                    E
                                </a>
                            </li>
                            <li>
                                <a>
                                    F
                                </a>
                            </li>
                            <li>
                                <a>
                                    G
                                </a>
                            </li>
                            <li>
                                <a>
                                    H
                                </a>
                            </li>
                            <li>
                                <a>
                                    I
                                </a>
                            </li>
                            <li>
                                <a>
                                    J
                                </a>
                            </li>
                            <li>
                                <a>
                                    K
                                </a>
                            </li>
                            <li>
                                <a>
                                    L
                                </a>
                            </li>
                            <li>
                                <a>
                                    M
                                </a>
                            </li>
                            <li>
                                <a>
                                    N
                                </a>
                            </li>
                            <li>
                                <a>
                                    O
                                </a>
                            </li>
                            <li>
                                <a>
                                    P
                                </a>
                            </li>
                            <li>
                                <a>
                                    Q
                                </a>
                            </li>
                            <li>
                                <a>
                                    R
                                </a>
                            </li>
                            <li>
                                <a>
                                    S
                                </a>
                            </li>
                            <li>
                                <a>
                                    T
                                </a>
                            </li>
                            <li>
                                <a>
                                    U
                                </a>
                            </li>
                            <li>
                                <a>
                                    V
                                </a>
                            </li>
                            <li>
                                <a>
                                    W
                                </a>
                            </li>
                            <li>
                                <a>
                                    X
                                </a>
                            </li>
                            <li>
                                <a>
                                    Y
                                </a>
                            </li>
                            <li>
                                <a>
                                    Z
                                </a>
                            </li>
                            <li>
                                <a>
                                    #
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="secondo-div">
                        <h2>
                            Top Brands
                        </h2>
                        <ul>
                            <li>
                                <a>
                                    Nike
                                </a>
                            </li>
                            <li>
                                <a>
                                   adidas 
                                </a>
                            </li>
                            <li>
                                <a>
                                    New Balance
                                </a>
                            </li>
                            <li>
                                <a>
                                   Supreme 
                                </a>
                            </li>
                            <li>
                                <a>
                                   Pop Mart 
                                </a>
                            </li>
                            <li>
                                <a>
                                   Yeezy 
                                </a>
                            </li>
                            <li>
                                <a>
                                   Puma 
                                </a>
                            </li>
                            <li>
                                <a>
                                   Jordan 
                                </a>
                            </li>
                            <li>
                                <a>
                                   Fear of God 
                                </a>
                            </li>
                            <li>
                                <a>
                                   ASICS 
                                </a>
                            </li>
                            <li>
                                <a>
                                   UGC 
                                </a>
                            </li>
                            <li>
                                <a>
                                   Crocs 
                                </a>
                            </li>
                            <li>
                                <a>
                                   BAPE 
                                </a>
                            </li>
                            <li>
                                <a>
                                   LEGO 
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="terzo-div">
                        <h2>
                            Trending Brands
                        </h2>
                        <ul>
                            <li>
                                <a>
                                    Luis Vuitton
                                </a>
                            </li>
                            <li>
                                <a>
                                   Gucci 
                                </a>
                            </li>
                            <li>
                                <a>
                                    Sp5der
                                </a>
                            </li>
                            <li>
                                <a>
                                    Pokemon
                                </a>
                            </li>
                            <li>
                                <a>
                                    Balenciaga
                                </a>
                            </li>
                            <li>
                                <a>
                                    Denima Tears
                                </a>
                            </li>
                            <li>
                                <a>
                                    OFF-WHITE
                                </a>
                            </li>
                            <li>
                                <a>
                                    Travis Scott
                                </a>
                            </li>
                            <li>
                                <a>
                                    Kith
                                </a>
                            </li>
                            <li>
                                <a>
                                    Chrome Hearts
                                </a>
                            </li>
                            <li>
                                <a>
                                    Maison Mihara Yasuhiro
                                </a>
                            </li>
                            <li>
                                <a>
                                    Converse
                                </a>
                            </li>
                            <li>
                                <a>
                                    Eric Emanuel
                                </a>
                            </li>
                            <li>
                                <a>
                                    Burberry
                                </a>
                            </li>
                        </ul>
                    </div>
            </div>
        </div>

        <section id="start">
            <div id="contenitore_start">
                <button id="left">
                    <svg class="stockx-icon " focusable="false" viewBox="0 0 50 50" aria-hidden="true" style="color: var(--chakra-colors-brand-tertiary, brand-tertiary); height: 16px;"><path fill="currentColor" d="M35.8 9.7999L19.6 24.9999L35.8 40.1999L33.3 42.8999L14.2 24.9999L33.3 7.0999L35.8 9.7999Z"></path></svg>
                </button>
                <a href="https://stockx.com/air-jordan-1-retro-high-og-sp-union-la-chicago-shadow">
                    <img srcset="https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/bltcf4837ed50307468/67bfde986bdc801877691c40/EN-AJ1_High_Union_LA_Chicago_ShadowPrimary_Desktop-Small.jpg?auto=webp&format=pjpg&width=1246&dpr=1&quality=80 1x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/bltcf4837ed50307468/67bfde986bdc801877691c40/EN-AJ1_High_Union_LA_Chicago_ShadowPrimary_Desktop-Small.jpg?auto=webp&format=pjpg&width=1246&dpr=2&quality=75 2x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/bltcf4837ed50307468/67bfde986bdc801877691c40/EN-AJ1_High_Union_LA_Chicago_ShadowPrimary_Desktop-Small.jpg?auto=webp&format=pjpg&width=1246&dpr=3&quality=50 3x">
                </a>
                <button id="right">
                <svg class="stockx-icon " focusable="false" viewBox="0 0 50 50" aria-hidden="true" style="color: var(--chakra-colors-brand-tertiary, brand-tertiary); height: 16px;"><path fill="currentColor" d="M14.2 40.2001L30.4 25.0001L14.2 9.8001L16.7 7.1001L35.8 25.0001L16.7 42.9001L14.2 40.2001Z"></path></svg>
            </button>
            </div>
        </section>
        <section id="start_hidden">
            <div id="contenitore_start_hidden">
                <a href="https://stockx.com/air-jordan-1-retro-high-og-sp-union-la-chicago-shadow">
                    <img srcset="https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blte10491e5652de677/67bfde9ef10771debb5d7541/EN-AJ1_High_Union_LA_Chicago_ShadowPrimary_Mobil-small.jpg?auto=webp&format=pjpg&quality=50&dpr=3&heightToWidthRatio=0.347">
                </a>
            </div>
        </section>
        <section id="section">
            <div id="contenitore">
                <div id="intestazione">
                    <h2>
                        Recommended For You
                        <svg class="stockx-icon " focusable="false" viewBox="0 0 50 50" aria-hidden="true"><path d="M25 6C14.5 6 6 14.5 6 25C6 35.5 14.5 44 25 44C35.5 44 44 35.5 44 25C44 14.5 35.5 6 25 6ZM26.4 36.2H22V31.7H26.4V36.2ZM29 25C27 26.1 26.2 26.8 26.2 29V29.2H22.1V28.9C22.1 25.9 23.2 24.6 25.3 23.4C27.2 22.3 28.5 21.3 28.5 19.7C28.5 18.1 26.9 17.1 25.3 17.1C23.1 17.1 21.4 18.3 21.3 21.2H17.2C17.2 16.8 20.7 14 25.3 14C29 14 32.6 15.7 32.6 19.5C32.7 22.3 30.7 24 29 25Z"></path></svg>
                    </h2>
                </div>
                <div class="elementi">
                    <a href="shop1.php">
                        <div data-immagine="1">
                            <img srcset="https://images.stockx.com/images/KAWS-Urge-Portfolio-Set-Of-10-Prints-Signed-Edition-of-250-1.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1618328520 1x,
                        https://images.stockx.com/images/KAWS-Urge-Portfolio-Set-Of-10-Prints-Signed-Edition-of-250-1.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1618328520 2x,
                        https://images.stockx.com/images/KAWS-Urge-Portfolio-Set-Of-10-Prints-Signed-Edition-of-250-1.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1618328520 3x">
                        </div>
                        <p data-testo="1">
                            KAWS Urge Portfolio Set Of 10 Prints (Signed, Edition od 250)
                        </p>
                        <p>
                            €52,988

                        </p>
                    </a>
                    <a href="shop.php">
                        <div>
                            <img srcset="https://images.stockx.com/images/ASICS-Gel-1130-Black-Pure-Silver-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1738193358 1x,
                            https://images.stockx.com/images/ASICS-Gel-1130-Black-Pure-Silver-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1738193358 2x,
                            https://images.stockx.com/images/ASICS-Gel-1130-Black-Pure-Silver-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1738193358 3x">
                        </div>
                        <p>
                            ASICS Gel-1130 Black Pure Silver
                        </p>
                        <p>
                            €96

                        </p>
                    </a>
                    <a href="shop3.php">
                        <div>
                            <img srcset="https://images.stockx.com/images/Bearbrick-Jean-Michel-Basquiat-9-1000.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1667023481 1x,
                            https://images.stockx.com/images/Bearbrick-Jean-Michel-Basquiat-9-1000.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1667023481 2x,
                            https://images.stockx.com/images/Bearbrick-Jean-Michel-Basquiat-9-1000.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1667023481 3x">
                        </div>
                        <p>
                           Bearbrick Jean-Michel Basquiat #9 1000% 
                        </p>
                        <p>
                            €658

                        </p>
                    </a>
                    <a href="shop4.php">
                        <div>
                            <img srcset="https://images.stockx.com/images/Air-Jordan-5-Retro-OG-Black-Metallic-Reimagined-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1738617131 1x,
                            https://images.stockx.com/images/Air-Jordan-5-Retro-OG-Black-Metallic-Reimagined-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1738617131 2x,
                            https://images.stockx.com/images/Air-Jordan-5-Retro-OG-Black-Metallic-Reimagined-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1738617131 3x">
                        </div>
                        <p>
                           Jordan 5 Retro OG Black Metallic Reimagined 
                        </p>
                        <p>
                            €286

                        </p>
                    </a>
                    <a href="shop5.php">
                        <div>
                            <img srcset="https://images.stockx.com/images/Bearbrick-Texalium-1000-Multi.png?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1616760638 1x,
                            https://images.stockx.com/images/Bearbrick-Texalium-1000-Multi.png?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1616760638 2x,
                            https://images.stockx.com/images/Bearbrick-Texalium-1000-Multi.png?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1616760638 3x">
                        </div>
                        <p>
                           Bearbrick Jean-Michel Basquiat Texallium 1000% Multi 
                        </p>
                        <p>
                            €3,524

                        </p>
                    </a>
                    <a href="shop6.php">
                        <div>
                            <img srcset="https://images.stockx.com/images/Air-Jordan-12-Retro-Flu-Game-2025-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1740684335 1x,
                            https://images.stockx.com/images/Air-Jordan-12-Retro-Flu-Game-2025-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1740684335 2x,
                            https://images.stockx.com/images/Air-Jordan-12-Retro-Flu-Game-2025-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1740684335 3x">
                        </div>
                        <p>
                           Jordan 12 Retro Flu Game (2025) 
                        </p>
                        <p>
                            €253

                        </p>
                    </a>
                    
                </div>
            </div>

        </section>

        <section id="section2">
            <div id="contenitore2">
                <div id="intestazione2">
                    <h3>
                        Popular Brand
                        <svg class="stockx-icon " focusable="false" viewBox="0 0 50 50" aria-hidden="true" style="width: 20px; height: 20px; vertical-align: -0.125em;"><path d="M25 6C14.5 6 6 14.5 6 25C6 35.5 14.5 44 25 44C35.5 44 44 35.5 44 25C44 14.5 35.5 6 25 6ZM26.4 36.2H22V31.7H26.4V36.2ZM29 25C27 26.1 26.2 26.8 26.2 29V29.2H22.1V28.9C22.1 25.9 23.2 24.6 25.3 23.4C27.2 22.3 28.5 21.3 28.5 19.7C28.5 18.1 26.9 17.1 25.3 17.1C23.1 17.1 21.4 18.3 21.3 21.2H17.2C17.2 16.8 20.7 14 25.3 14C29 14 32.6 15.7 32.6 19.5C32.7 22.3 30.7 24 29 25Z" fill="currentColor"></path></svg>
                    </h3>

                    <a href="https://stockx.com/brands">
                        See All ->
                    </a>
                </div>
                <div class="elementi2">
                    <a href="https://stockx.com/brands/jordan">
                        <div>
                            <img srcset="https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blte08f252776d5834f/6773260836f5cc36f9db1b35/Copy_of_Brand_Tile_Template_(10).png?auto=webp&format=pjpg&width=234&height=160&dpr=1&quality=80 1x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blte08f252776d5834f/6773260836f5cc36f9db1b35/Copy_of_Brand_Tile_Template_(10).png?auto=webp&format=pjpg&width=234&height=160&dpr=2&quality=75 2x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blte08f252776d5834f/6773260836f5cc36f9db1b35/Copy_of_Brand_Tile_Template_(10).png?auto=webp&format=pjpg&width=234&height=160&dpr=3&quality=50 3x">
                        </div>
                    </a>
                    <a href="https://stockx.com/brands/fear-of-god">
                        <div>
                            <img srcset="https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/bltc5a55f409dcd724d/6773257bb290b35ed991f4f6/Copy_of_Brand_Tile_Template_(9).png?auto=webp&format=pjpg&width=234&height=160&dpr=1&quality=80 1x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/bltc5a55f409dcd724d/6773257bb290b35ed991f4f6/Copy_of_Brand_Tile_Template_(9).png?auto=webp&format=pjpg&width=234&height=160&dpr=2&quality=75 2x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/bltc5a55f409dcd724d/6773257bb290b35ed991f4f6/Copy_of_Brand_Tile_Template_(9).png?auto=webp&format=pjpg&width=234&height=160&dpr=3&quality=50 3x">
                        </div>
                    </a>
                    <a href="https://stockx.com/brands/louis-vuitton">
                        <div>
                            <img srcset="https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt7de4e73e15b4ad06/67a2992aecc9d7c5f9413fce/Copy_of_Brand_Tile_Template_(24).png?auto=webp&format=pjpg&width=234&height=160&dpr=1&quality=80 1x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt7de4e73e15b4ad06/67a2992aecc9d7c5f9413fce/Copy_of_Brand_Tile_Template_(24).png?auto=webp&format=pjpg&width=234&height=160&dpr=2&quality=75 2x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt7de4e73e15b4ad06/67a2992aecc9d7c5f9413fce/Copy_of_Brand_Tile_Template_(24).png?auto=webp&format=pjpg&width=234&height=160&dpr=3&quality=50 3x">
                        </div>
                    </a>
                    <a href="https://stockx.com/brands/supreme">
                        <div>
                            <img srcset="https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt53990f215de13e8e/67732787775da7112d1f51d0/Copy_of_Brand_Tile_Template_(13).png?auto=webp&format=pjpg&width=234&height=160&dpr=1&quality=80 1x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt53990f215de13e8e/67732787775da7112d1f51d0/Copy_of_Brand_Tile_Template_(13).png?auto=webp&format=pjpg&width=234&height=160&dpr=2&quality=75 2x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt53990f215de13e8e/67732787775da7112d1f51d0/Copy_of_Brand_Tile_Template_(13).png?auto=webp&format=pjpg&width=234&height=160&dpr=3&quality=50 3x">
                        </div>
                    </a>
                    <a href="https://stockx.com/brands/ugg">
                        <div>
                            <img srcset="https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt67260f9960b40bc3/67732801776bc04ff327d1fc/Copy_of_Brand_Tile_Template_(12).png?auto=webp&format=pjpg&width=234&height=160&dpr=1&quality=80 1x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt67260f9960b40bc3/67732801776bc04ff327d1fc/Copy_of_Brand_Tile_Template_(12).png?auto=webp&format=pjpg&width=234&height=160&dpr=2&quality=75 2x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt67260f9960b40bc3/67732801776bc04ff327d1fc/Copy_of_Brand_Tile_Template_(12).png?auto=webp&format=pjpg&width=234&height=160&dpr=3&quality=50 3x">
                        </div>
                    </a>
                </div>
            </div>

        </section>

        <section id="section">
            <div id="contenitore">
                <div id="intestazione">
                    <h2>
                        Trending Sneakers
                        <svg class="stockx-icon " focusable="false" viewBox="0 0 50 50" aria-hidden="true" style="width: 20px; height: 20px; vertical-align: -0.125em;"><path d="M25 6C14.5 6 6 14.5 6 25C6 35.5 14.5 44 25 44C35.5 44 44 35.5 44 25C44 14.5 35.5 6 25 6ZM26.4 36.2H22V31.7H26.4V36.2ZM29 25C27 26.1 26.2 26.8 26.2 29V29.2H22.1V28.9C22.1 25.9 23.2 24.6 25.3 23.4C27.2 22.3 28.5 21.3 28.5 19.7C28.5 18.1 26.9 17.1 25.3 17.1C23.1 17.1 21.4 18.3 21.3 21.2H17.2C17.2 16.8 20.7 14 25.3 14C29 14 32.6 15.7 32.6 19.5C32.7 22.3 30.7 24 29 25Z" fill="currentColor"></path></svg>
                    </h2>
                    <a href="https://stockx.com/brands">
                        See All ->
                    </a>
                </div>
                <div class="elementi">
                    <a href="https://stockx.com/air-jordan-12-retro-flu-game-2025">
                        <div>
                            <img srcset="https://images.stockx.com/images/Air-Jordan-12-Retro-Flu-Game-2025-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1740684335 1x,
                            https://images.stockx.com/images/Air-Jordan-12-Retro-Flu-Game-2025-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1740684335 2x,
                            https://images.stockx.com/images/Air-Jordan-12-Retro-Flu-Game-2025-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1740684335 3x">
                        </div>
                        <p>
                            Jordan 12 Retro Flu Game (2025)
                        </p>
                        <p>
                            €253

                        </p>
                    </a>
                    <a href="https://stockx.com/air-air-jordan-4-retro-og-sp-nigel-sylvester-bike-air-firewood-orange">
                        <div>
                            <img srcset="https://images.stockx.com/images/Air-Air-Jordan-4-Retro-OG-SP-Nigel-Sylvester-Bike-Air-Firewood-Orange-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1741209000 1x,
                            https://images.stockx.com/images/Air-Air-Jordan-4-Retro-OG-SP-Nigel-Sylvester-Bike-Air-Firewood-Orange-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1741209000 2x,
                            https://images.stockx.com/images/Air-Air-Jordan-4-Retro-OG-SP-Nigel-Sylvester-Bike-Air-Firewood-Orange-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1741209000 3x">
                        </div>
                        <p>
                            Air Jordan 4 Retro OG SP Nigel Sylvester Brick by Brick
                        </p>
                        <p>
                            €333

                        </p>
                    </a>
                    <a href="https://stockx.com/air-jordan-9-retro-cool-grey">
                        <div>
                            <img srcset="https://images.stockx.com/images/Air-Jordan-9-Retro-Cool-Grey-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1741385298 1x,
                            https://images.stockx.com/images/Air-Jordan-9-Retro-Cool-Grey-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1741385298 2x,
                            https://images.stockx.com/images/Air-Jordan-9-Retro-Cool-Grey-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1741385298 3x">
                        </div>
                        <p>
                            Jordan 9 Retro Cool Grey (2025) 
                        </p>
                        <p>
                            €232

                        </p>
                    </a>
                    <a href="https://stockx.com/nike-air-foamposite-one-black-volt">
                        <div>
                            <img srcset="https://images.stockx.com/images/Nike-Air-Foamposite-One-Black-Volt-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1740686882 1x,
                            https://images.stockx.com/images/Nike-Air-Foamposite-One-Black-Volt-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1740686882 2x,
                            https://images.stockx.com/images/Nike-Air-Foamposite-One-Black-Volt-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1740686882 3x">
                        </div>
                        <p>
                            Nike Air Foamposite One Black Volt 
                        </p>
                        <p>
                            €315

                        </p>
                    </a>
                    <a href="https://stockx.com/adidas-taekwondo-mei-ballet-black-white-womens">
                        <div>
                            <img srcset="https://images.stockx.com/images/adidas-Taekwondo-Mei-Ballet-Black-White-Womens.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1740686578 1x,
                            https://images.stockx.com/images/adidas-Taekwondo-Mei-Ballet-Black-White-Womens.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1740686578 2x,
                            https://images.stockx.com/images/adidas-Taekwondo-Mei-Ballet-Black-White-Womens.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1740686578 3x">
                        </div>
                        <p>
                            Adidas Taekwondo Mei Ballet Black White (Women's) 
                        </p>
                        <p>
                            €116

                        </p>
                    </a>
                    <a href="https://stockx.com/crocs-classic-clog-a-bathing-ape-bape-abc-camo-green">
                        <div>
                            <img srcset="https://images.stockx.com/images/Crocs-Classic-Clog-A-Bathing-Ape-Bape-ABC-Camo-Green-V2.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1741115281 1x,
                            https://images.stockx.com/images/Crocs-Classic-Clog-A-Bathing-Ape-Bape-ABC-Camo-Green-V2.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1741115281 2x,
                            https://images.stockx.com/images/Crocs-Classic-Clog-A-Bathing-Ape-Bape-ABC-Camo-Green-V2.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1741115281 3x">
                        </div>
                        <p>
                            Crocs Classic Clog
                            A Bathing Ape ABC Camo Green 
                        </p>
                        <p>
                            €219

                        </p>
                    </a>
                    
                </div>
            </div>

        </section>
        <section id="section">
            <div id="contenitore">
                <div id="intestazione">
                    <h2>
                        Featured Apparel
                        <svg class="stockx-icon " focusable="false" viewBox="0 0 50 50" aria-hidden="true" style="width: 20px; height: 20px; vertical-align: -0.125em;"><path d="M25 6C14.5 6 6 14.5 6 25C6 35.5 14.5 44 25 44C35.5 44 44 35.5 44 25C44 14.5 35.5 6 25 6ZM26.4 36.2H22V31.7H26.4V36.2ZM29 25C27 26.1 26.2 26.8 26.2 29V29.2H22.1V28.9C22.1 25.9 23.2 24.6 25.3 23.4C27.2 22.3 28.5 21.3 28.5 19.7C28.5 18.1 26.9 17.1 25.3 17.1C23.1 17.1 21.4 18.3 21.3 21.2H17.2C17.2 16.8 20.7 14 25.3 14C29 14 32.6 15.7 32.6 19.5C32.7 22.3 30.7 24 29 25Z" fill="currentColor"></path></svg>
                    </h2>
                    <a href="https://stockx.com/brands">
                        See All ->
                    </a>
                </div>
                <div class="elementi">
                    <a href="https://stockx.com/nike-jordan-jalen-hurts-love-hurts-hoodie-black">
                        <div>
                            <img srcset="https://images.stockx.com/images/Nike-Jordan-Jalen-Hurts-Love-Hurts-Hoodie-Black.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1741026352 1x,
                            https://images.stockx.com/images/Nike-Jordan-Jalen-Hurts-Love-Hurts-Hoodie-Black.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1741026352 2x,
                            https://images.stockx.com/images/Nike-Jordan-Jalen-Hurts-Love-Hurts-Hoodie-Black.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1741026352 3x">
                        </div>
                        <p>
                            Nike Jordan Jalen Hurts Love Hurts Hoodie Black
                        </p>
                        <p>
                            €95

                        </p>
                    </a>
                    <a href="https://stockx.com/supreme-los-angeles-fire-relief-box-logo-tee-white">
                        <div>
                            <img srcset="https://images.stockx.com/images/Supreme-Los-Angeles-Fire-Relief-Box-Logo-Tee-White.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1740629542 1x,
                            https://images.stockx.com/images/Supreme-Los-Angeles-Fire-Relief-Box-Logo-Tee-White.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1740629542 2x,
                            https://images.stockx.com/images/Supreme-Los-Angeles-Fire-Relief-Box-Logo-Tee-White.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1740629542 3x">
                        </div>
                        <p>
                            Supreme Los Angeles Fire Relief Box Logo Tee White
                        </p>
                        <p>
                            €85

                        </p>
                    </a>
                    <a href="https://stockx.com/nike-sportswear-tech-fleece-full-zip-hoodie-joggers-set-black-bemis-silver">
                        <div>
                            <img srcset="https://images.stockx.com/images/Nike-Sportswear-Tech-Fleece-Full-Zip-Hoodie-Joggers-Set-Black-Bemis-Silver-v2.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1732912670 1x,
                            https://images.stockx.com/images/Nike-Sportswear-Tech-Fleece-Full-Zip-Hoodie-Joggers-Set-Black-Bemis-Silver-v2.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1732912670 2x,
                            https://images.stockx.com/images/Nike-Sportswear-Tech-Fleece-Full-Zip-Hoodie-Joggers-Set-Black-Bemis-Silver-v2.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1732912670 3x">
                        </div>
                        <p>
                            Nike Sportswear Tech Fleece Full Zip Hoodie & Joggers Reflective Details Set
                            Black/Bemis Silver 
                        </p>
                        <p>
                            €249

                        </p>
                    </a>
                    <a href="https://stockx.com/jordan-x-nigel-sylvester-brick-tee-white">
                        <div>
                            <img srcset="https://images.stockx.com/images/Jordan-x-Nigel-Sylvester-Brick-Tee-White-2.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1741786322 1x,
                            https://images.stockx.com/images/Jordan-x-Nigel-Sylvester-Brick-Tee-White-2.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1741786322 2x,
                            https://images.stockx.com/images/Jordan-x-Nigel-Sylvester-Brick-Tee-White-2.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1741786322 3x">
                        </div>
                        <p>
                            Jordan x Nigel Sylvester Brick Tee White 
                        </p>
                        <p>
                            €64

                        </p>
                    </a>
                    <a href="https://stockx.com/supreme-nike-track-jacket-black">
                        <div>
                            <img srcset="https://images.stockx.com/images/Supreme-Nike-Track-Jacket-Black-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1742479862 1x,
                            https://images.stockx.com/images/Supreme-Nike-Track-Jacket-Black-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1742479862 2x,
                            https://images.stockx.com/images/Supreme-Nike-Track-Jacket-Black-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1742479862 3x">
                        </div>
                        <p>
                            Supreme Nike Track Jacket Black 
                        </p>
                        <p>
                            €203

                        </p>
                    </a>
                    <a href="https://stockx.com/nike-x-nocta-nrg-tech-fleece-full-zip-hoodie-palest-purple-daybreak">
                        <div>
                            <img srcset="https://images.stockx.com/images/Nike-x-NOCTA-NRG-Tech-Fleece-Full-Zip-Hoodie-Palest-Purple-Daybreak.png?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1739475287 1x,
                            https://images.stockx.com/images/Nike-x-NOCTA-NRG-Tech-Fleece-Full-Zip-Hoodie-Palest-Purple-Daybreak.png?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1739475287 2x,
                            https://images.stockx.com/images/Nike-x-NOCTA-NRG-Tech-Fleece-Full-Zip-Hoodie-Palest-Purple-Daybreak.png?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1739475287 3x">
                        </div>
                        <p>
                            Nike x NOCTA NRG Tech Fleece Full Zip Hoodie
                            Palest Purple/Daybreak 
                        </p>
                        <p>
                            €121

                        </p>
                    </a>
                    
                </div>
            </div>

        </section>
        <section id="foto">
            <div id="contenitore_foto">
                <a id="first-child" href="https://stockx.com/lp/supreme-seller-fee-promo/">
                    <img src="https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt705e1dd82189f699/67c5de94809db03054b53011/Supreme$5_SellerFeeGLOBAL_Promo2_11_SecondaryA.jpg?format=jpg&auto=webp&height=438">
                </a>
                <a id="second-child" href="https://stockx.com/lists/thebasketballshop/072b6d6f-51c4-4cbd-874c-f2c42123632b">
                    <img srcset="https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/bltf5aa974172eb67c1/67dd6c8b17f7b41d4c0d0005/Basketball_Shop_(March_Madness_Timing)SecondaryB.jpg?format=jpg&auto=webp&height=438">
                </a>
            </div>
        </section>
        <section id="foto_hidden">
            <div id="contenitore_foto_hidden">
                <a href="https://stockx.com/lists/thebasketballshop/072b6d6f-51c4-4cbd-874c-f2c42123632b">
                    <img srcset="https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/bltf5aa974172eb67c1/67dd6c8b17f7b41d4c0d0005/Basketball_Shop_(March_Madness_Timing)SecondaryB.jpg?auto=webp&format=pjpg&width=425&height=425&dpr=1&quality=80 1x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/bltf5aa974172eb67c1/67dd6c8b17f7b41d4c0d0005/Basketball_Shop_(March_Madness_Timing)SecondaryB.jpg?auto=webp&format=pjpg&width=425&height=425&dpr=2&quality=75 2x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/bltf5aa974172eb67c1/67dd6c8b17f7b41d4c0d0005/Basketball_Shop_(March_Madness_Timing)SecondaryB.jpg?auto=webp&format=pjpg&width=425&height=425&dpr=3&quality=50 3x">
                </a>
            </div>
        </section>
        <section id="section2">
            <div id="contenitore2">
                <div id="intestazione2">
                    <h3>
                        Steals & Deals
                        <svg class="stockx-icon " focusable="false" viewBox="0 0 50 50" aria-hidden="true" style="width: 20px; height: 20px; vertical-align: -0.125em;"><path d="M25 6C14.5 6 6 14.5 6 25C6 35.5 14.5 44 25 44C35.5 44 44 35.5 44 25C44 14.5 35.5 6 25 6ZM26.4 36.2H22V31.7H26.4V36.2ZM29 25C27 26.1 26.2 26.8 26.2 29V29.2H22.1V28.9C22.1 25.9 23.2 24.6 25.3 23.4C27.2 22.3 28.5 21.3 28.5 19.7C28.5 18.1 26.9 17.1 25.3 17.1C23.1 17.1 21.4 18.3 21.3 21.2H17.2C17.2 16.8 20.7 14 25.3 14C29 14 32.6 15.7 32.6 19.5C32.7 22.3 30.7 24 29 25Z" fill="currentColor"></path></svg>
                    </h3>

                    <a href="https://stockx.com/brands">
                        See All ->
                    </a>
                </div>
                <div class="elementi2">
                    <a href="https://stockx.com/search?lowest-ask-range=1-25">
                        <div>
                            <img srcset="https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/bltc1e3d9a9f96c9709/6773205df6d8ef3740c15fae/Copy_of_Brand_Tile_Template_(1).png?auto=webp&format=pjpg&width=234&height=160&dpr=1&quality=80 1x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/bltc1e3d9a9f96c9709/6773205df6d8ef3740c15fae/Copy_of_Brand_Tile_Template_(1).png?auto=webp&format=pjpg&width=234&height=160&dpr=2&quality=75 2x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/bltc1e3d9a9f96c9709/6773205df6d8ef3740c15fae/Copy_of_Brand_Tile_Template_(1).png?auto=webp&format=pjpg&width=234&height=160&dpr=3&quality=50 3x">
                        </div>
                    </a>
                    <a href="https://stockx.com/search?lowest-ask-range=26-50">
                        <div>
                            <img srcset="https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt77a521f72819906c/6773209a6a4e900673d052bf/Copy_of_Brand_Tile_Template_(2).png?auto=webp&format=pjpg&width=234&height=160&dpr=1&quality=80 1x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt77a521f72819906c/6773209a6a4e900673d052bf/Copy_of_Brand_Tile_Template_(2).png?auto=webp&format=pjpg&width=234&height=160&dpr=2&quality=75 2x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt77a521f72819906c/6773209a6a4e900673d052bf/Copy_of_Brand_Tile_Template_(2).png?auto=webp&format=pjpg&width=234&height=160&dpr=3&quality=50 3x">
                        </div>
                    </a>
                    <a href="https://stockx.com/brands/yeezy?below-retail=true&category=sneakers">
                        <div>
                            <img srcset="https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt32e5cda18bc14721/677320f0775da75b981f51b9/Copy_of_Brand_Tile_Template_(5).png?auto=webp&format=pjpg&width=234&height=160&dpr=1&quality=80 1x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt32e5cda18bc14721/677320f0775da75b981f51b9/Copy_of_Brand_Tile_Template_(5).png?auto=webp&format=pjpg&width=234&height=160&dpr=2&quality=75 2x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt32e5cda18bc14721/677320f0775da75b981f51b9/Copy_of_Brand_Tile_Template_(5).png?auto=webp&format=pjpg&width=234&height=160&dpr=3&quality=50 3x">
                        </div>
                    </a>
                    <a href="https://stockx.com/dp/designer-deals">
                        <div>
                            <img srcset="https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/bltfae73db1e5412c55/6773211b258d13254590762f/Copy_of_Brand_Tile_Template_(6).png?auto=webp&format=pjpg&width=234&height=160&dpr=1&quality=80 1x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/bltfae73db1e5412c55/6773211b258d13254590762f/Copy_of_Brand_Tile_Template_(6).png?auto=webp&format=pjpg&width=234&height=160&dpr=2&quality=75 2x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/bltfae73db1e5412c55/6773211b258d13254590762f/Copy_of_Brand_Tile_Template_(6).png?auto=webp&format=pjpg&width=234&height=160&dpr=3&quality=50 3x">
                        </div>
                    </a>
                    <a href="https://stockx.com/dp/deals">
                        <div>
                            <img srcset="https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt3af747e7d82dae7d/6773217f776bc0b95427d1e3/Copy_of_Brand_Tile_Template_(7).png?auto=webp&format=pjpg&width=234&height=160&dpr=1&quality=80 1x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt3af747e7d82dae7d/6773217f776bc0b95427d1e3/Copy_of_Brand_Tile_Template_(7).png?auto=webp&format=pjpg&width=234&height=160&dpr=2&quality=75 2x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt3af747e7d82dae7d/6773217f776bc0b95427d1e3/Copy_of_Brand_Tile_Template_(7).png?auto=webp&format=pjpg&width=234&height=160&dpr=3&quality=50 3x">
                        </div>
                    </a>
                </div>
            </div>

        </section>
        <section id="section_extra">
            <div class="elementi_extra">
                <p>
                    Shipping and Processing fees of €15-€65 generally apply, based on the type of item purchased, its price, and the location of the buyer and seller.

                    <a href="https://stockx.com/help/it-IT/home">
                        Learn More
                    </a>
                </p>
            </div>

        </section>

        <section id="section">
            <div id="contenitore">
                <div id="intestazione">
                    <h2>
                        Picks For Her
                        <svg class="stockx-icon " focusable="false" viewBox="0 0 50 50" aria-hidden="true" style="width: 20px; height: 20px; vertical-align: -0.125em;"><path d="M25 6C14.5 6 6 14.5 6 25C6 35.5 14.5 44 25 44C35.5 44 44 35.5 44 25C44 14.5 35.5 6 25 6ZM26.4 36.2H22V31.7H26.4V36.2ZM29 25C27 26.1 26.2 26.8 26.2 29V29.2H22.1V28.9C22.1 25.9 23.2 24.6 25.3 23.4C27.2 22.3 28.5 21.3 28.5 19.7C28.5 18.1 26.9 17.1 25.3 17.1C23.1 17.1 21.4 18.3 21.3 21.2H17.2C17.2 16.8 20.7 14 25.3 14C29 14 32.6 15.7 32.6 19.5C32.7 22.3 30.7 24 29 25Z" fill="currentColor"></path></svg>
                    </h2>
                </div>
                <div class="elementi">
                    <a href="https://stockx.com/pop-mart-labubu-the-monsters-i-found-you-vinyl-doll">
                        <div>
                            <img srcset="https://images.stockx.com/images/Pop-Mart-Labubu-The-Monsters-I-Found-You-Vinyl-Doll.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1721855046 1x,
                            https://images.stockx.com/images/Pop-Mart-Labubu-The-Monsters-I-Found-You-Vinyl-Doll.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1721855046 2x,
                            https://images.stockx.com/images/Pop-Mart-Labubu-The-Monsters-I-Found-You-Vinyl-Doll.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1721855046 3x">
                        </div>
                        <p>
                            Pop Mart Labubu The Monsters ZIMOMO I Found You Vinyl Doll + Tote Bag
                        </p>
                        <p>
                            €198

                        </p>
                    </a>
                    <a href="https://stockx.com/balenciaga-square-rectangle-sunglasses-black-black-grey-bb0072s-30008290-001">
                        <div>
                            <img srcset="https://images.stockx.com/images/Balenciaga-Square-Rectangle-Sunglasses-Black-Black-Grey-BB0072S-30008290-001.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&trimcolor=ffffff&updated_at=1725899957 1x,
                            https://images.stockx.com/images/Balenciaga-Square-Rectangle-Sunglasses-Black-Black-Grey-BB0072S-30008290-001.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&trimcolor=ffffff&updated_at=1725899957 2x,
                            https://images.stockx.com/images/Balenciaga-Square-Rectangle-Sunglasses-Black-Black-Grey-BB0072S-30008290-001.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&trimcolor=ffffff&updated_at=1725899957 3x">
                        </div>
                        <p>
                            Balenciaga Square Rectangle Sunglasses Black/Black/Grey (BB0072S-30008290-001)
                        </p>
                        <p>
                            €106

                        </p>
                    </a>
                    <a href="https://stockx.com/louis-vuitton-x-takashi-murakami-speedy-bandouliere-25-white-multicolored">
                        <div>
                            <img srcset="https://images.stockx.com/images/Louis-Vuitton-x-Takashi-Murakami-Speedy-Bandouliere-25-White-Multicolored.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&trimcolor=ffffff&updated_at=1734536773 1x,
                            https://images.stockx.com/images/Louis-Vuitton-x-Takashi-Murakami-Speedy-Bandouliere-25-White-Multicolored.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&trimcolor=ffffff&updated_at=1734536773 2x,
                            https://images.stockx.com/images/Louis-Vuitton-x-Takashi-Murakami-Speedy-Bandouliere-25-White-Multicolored.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&trimcolor=ffffff&updated_at=1734536773 3x">
                        </div>
                        <p>
                            Louis Vuitton x Takashi Murakami Speedy Bandouliere
                            25 White Multicolored 
                        </p>
                        <p>
                            €3,703

                        </p>
                    </a>
                    <a href="https://stockx.com/louis-vuitton-x-takashi-murakami-card-holder-white-multicolored">
                        <div>
                            <img srcset="https://images.stockx.com/images/Louis-Vuitton-Card-Holder-x-Takashi-Murakami-White-Multicolored.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&trimcolor=ffffff&updated_at=1734536745 1x,
                            https://images.stockx.com/images/Louis-Vuitton-Card-Holder-x-Takashi-Murakami-White-Multicolored.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&trimcolor=ffffff&updated_at=1734536745 2x,
                            https://images.stockx.com/images/Louis-Vuitton-Card-Holder-x-Takashi-Murakami-White-Multicolored.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&trimcolor=ffffff&updated_at=1734536745 3x">
                        </div>
                        <p>
                            Louis Vuitton x Takashi Murakami Card Holder
                            White Multicolored 
                        </p>
                        <p>
                            €385

                        </p>
                    </a>
                    <a href="https://stockx.com/louis-vuitton-x-takashi-murakami-lv-confidential-bracelet-white-multicolored">
                        <div>
                            <img srcset="https://images.stockx.com/images/Louis-Vuitton-Bracelet-x-Takashi-Murakami-LV-Confidential-White-Multicolored.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&trimcolor=ffffff&updated_at=1734536896 1x,
                            https://images.stockx.com/images/Louis-Vuitton-Bracelet-x-Takashi-Murakami-LV-Confidential-White-Multicolored.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&trimcolor=ffffff&updated_at=1734536896 2x,
                            https://images.stockx.com/images/Louis-Vuitton-Bracelet-x-Takashi-Murakami-LV-Confidential-White-Multicolored.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&trimcolor=ffffff&updated_at=1734536896 3x">
                        </div>
                        <p>
                            Louis Vuitton x Takashi Murakami LV Confidential Bracelet
                            White Multicolored 
                        </p>
                        <p>
                            €320

                        </p>
                    </a>
                    <a href="https://stockx.com/louis-vuitton-x-takashi-murakami-speedy-bandouliere-25-sakura-brown">
                        <div>
                            <img srcset="https://images.stockx.com/images/Louis-Vuitton-x-Takashi-Murakami-Speedy-Bandouliere-25-Sakura-Brown.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&trimcolor=ffffff&updated_at=1742249985 1x,
                            https://images.stockx.com/images/Louis-Vuitton-x-Takashi-Murakami-Speedy-Bandouliere-25-Sakura-Brown.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&trimcolor=ffffff&updated_at=1742249985 2x,
                            https://images.stockx.com/images/Louis-Vuitton-x-Takashi-Murakami-Speedy-Bandouliere-25-Sakura-Brown.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&trimcolor=ffffff&updated_at=1742249985 3x">
                        </div>
                        <p>
                            Louis Vuitton x Takashi Murakami Cherry Blossom Speedy Bandouliere
                            25 Sakura Brown
                        </p>
                        <p>
                            €3,430

                        </p>
                    </a>
                    
                </div>
            </div>

        </section>
        <section id="section">
            <div id="contenitore">
                <div id="intestazione">
                    <h2>
                        Featured Accessories
                        <svg class="stockx-icon " focusable="false" viewBox="0 0 50 50" aria-hidden="true" style="width: 20px; height: 20px; vertical-align: -0.125em;"><path d="M25 6C14.5 6 6 14.5 6 25C6 35.5 14.5 44 25 44C35.5 44 44 35.5 44 25C44 14.5 35.5 6 25 6ZM26.4 36.2H22V31.7H26.4V36.2ZM29 25C27 26.1 26.2 26.8 26.2 29V29.2H22.1V28.9C22.1 25.9 23.2 24.6 25.3 23.4C27.2 22.3 28.5 21.3 28.5 19.7C28.5 18.1 26.9 17.1 25.3 17.1C23.1 17.1 21.4 18.3 21.3 21.2H17.2C17.2 16.8 20.7 14 25.3 14C29 14 32.6 15.7 32.6 19.5C32.7 22.3 30.7 24 29 25Z" fill="currentColor"></path></svg>
                    </h2>
                </div>
                <div class="elementi">
                    <a href="https://stockx.com/pop-mart-labubu-the-monsters-i-found-you-vinyl-doll">
                        <div>
                            <img srcset="https://images.stockx.com/images/Pop-Mart-Labubu-The-Monsters-I-Found-You-Vinyl-Doll.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1721855046 1x,
                            https://images.stockx.com/images/Pop-Mart-Labubu-The-Monsters-I-Found-You-Vinyl-Doll.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1721855046 2x,
                            https://images.stockx.com/images/Pop-Mart-Labubu-The-Monsters-I-Found-You-Vinyl-Doll.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1721855046 3x">
                        </div>
                        <p>
                            Pop Mart Labubu The Monsters ZIMOMO I Found You Vinyl Doll + Tote Bag
                        </p>
                        <p>
                            €198

                        </p>
                    </a>
                    <a href="https://stockx.com/supreme-license-plate-multicolor">
                        <div>
                            <img srcset="https://images.stockx.com/images/Supreme-License-Plate-Multicolor.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1741873036 1x,
                            https://images.stockx.com/images/Supreme-License-Plate-Multicolor.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1741873036 2x,
                            https://images.stockx.com/images/Supreme-License-Plate-Multicolor.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1741873036 3x">
                        </div>
                        <p>
                            Supreme License Plate Multicolor
                        </p>
                        <p>
                            €56

                        </p>
                    </a>
                    <a href="https://stockx.com/stanley-x-tyla-tyger-flowstate-quencher-40oz-tumbler-bronze">
                        <div>
                            <img srcset="https://images.stockx.com/images/Stanley-x-TYLA-TYGER-Flowstate-Quencher-40oz-Tumbler-Bronze.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&trimcolor=ffffff&updated_at=1732583321 1x,
                            https://images.stockx.com/images/Stanley-x-TYLA-TYGER-Flowstate-Quencher-40oz-Tumbler-Bronze.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&trimcolor=ffffff&updated_at=1732583321 2x,
                            https://images.stockx.com/images/Stanley-x-TYLA-TYGER-Flowstate-Quencher-40oz-Tumbler-Bronze.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&trimcolor=ffffff&updated_at=1732583321 3x">
                        </div>
                        <p>
                            Stanley x TYLA TYGER Flowstate Quencher 40oz Tumbler
                            Bronze 
                        </p>
                        <p>
                            €67

                        </p>
                    </a>
                    <a href="https://stockx.com/balenciaga-square-rectangle-sunglasses-black-black-grey-bb0072s-30008290-001">
                        <div>
                            <img srcset="https://images.stockx.com/images/Balenciaga-Square-Rectangle-Sunglasses-Black-Black-Grey-BB0072S-30008290-001.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&trimcolor=ffffff&updated_at=1725899957 1x,
                            https://images.stockx.com/images/Balenciaga-Square-Rectangle-Sunglasses-Black-Black-Grey-BB0072S-30008290-001.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&trimcolor=ffffff&updated_at=1725899957 2x,
                            https://images.stockx.com/images/Balenciaga-Square-Rectangle-Sunglasses-Black-Black-Grey-BB0072S-30008290-001.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&trimcolor=ffffff&updated_at=1725899957 3x">
                        </div>
                        <p>
                            Balenciaga Square Rectangle Sunglasses Black/Black/Grey (BB0072S-30008290-001)
                        </p>
                        <p>
                            €106

                        </p>
                    </a>
                    <a href="https://stockx.com/versace-irregular-biggie-sunglasses-black-black-ve4361">
                        <div>
                            <img srcset="https://images.stockx.com/images/Versace-Irregular-Biggie-Sunglasses-Black-Dark-Grey-VE4361-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&trimcolor=ffffff&updated_at=1738193358 1x,
                            https://images.stockx.com/images/Versace-Irregular-Biggie-Sunglasses-Black-Dark-Grey-VE4361-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&trimcolor=ffffff&updated_at=1738193358 2x,
                            https://images.stockx.com/images/Versace-Irregular-Biggie-Sunglasses-Black-Dark-Grey-VE4361-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&trimcolor=ffffff&updated_at=1738193358 3x">
                        </div>
                        <p>
                            Versace Irregular Biggie Sunglasses
                            Black/Black (VE4361) 
                        </p>
                        <p>
                            €116

                        </p>
                    </a>
                    <a href="https://stockx.com/louis-vuitton-x-takashi-murakami-speedy-bandouliere-25-white-multicolored">
                        <div>
                            <img srcset="https://images.stockx.com/images/Louis-Vuitton-x-Takashi-Murakami-Speedy-Bandouliere-25-White-Multicolored.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&trimcolor=ffffff&updated_at=1734536773 1x,
                            https://images.stockx.com/images/Louis-Vuitton-x-Takashi-Murakami-Speedy-Bandouliere-25-White-Multicolored.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&trimcolor=ffffff&updated_at=1734536773 2x,
                            https://images.stockx.com/images/Louis-Vuitton-x-Takashi-Murakami-Speedy-Bandouliere-25-White-Multicolored.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&trimcolor=ffffff&updated_at=1734536773 3x">
                        </div>
                        <p>
                            Louis Vuitton x Takashi Murakami Speedy Bandouliere
                            25 White Multicolored 
                        </p>
                        <p>
                            €3,703

                        </p>
                    </a>
                    
                </div>
            </div>

        </section>

        <section id="section2">
            <div id="contenitore2">
                <div id="intestazione2">
                    <h3>
                        Seasonal Favorites
                        <svg class="stockx-icon " focusable="false" viewBox="0 0 50 50" aria-hidden="true" style="width: 20px; height: 20px; vertical-align: -0.125em;"><path d="M25 6C14.5 6 6 14.5 6 25C6 35.5 14.5 44 25 44C35.5 44 44 35.5 44 25C44 14.5 35.5 6 25 6ZM26.4 36.2H22V31.7H26.4V36.2ZM29 25C27 26.1 26.2 26.8 26.2 29V29.2H22.1V28.9C22.1 25.9 23.2 24.6 25.3 23.4C27.2 22.3 28.5 21.3 28.5 19.7C28.5 18.1 26.9 17.1 25.3 17.1C23.1 17.1 21.4 18.3 21.3 21.2H17.2C17.2 16.8 20.7 14 25.3 14C29 14 32.6 15.7 32.6 19.5C32.7 22.3 30.7 24 29 25Z" fill="currentColor"></path></svg>
                    </h3>

                    <a href="https://stockx.com/brands">
                        See All ->
                    </a>
                </div>
                <div class="elementi2">
                    <a href="https://stockx.com/category/apparel/tops/hoodies-and-sweatshirts">
                        <div>
                            <img srcset="https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/bltef08e86c0cbeee9d/67732aa41381a69cea47e1c5/Copy_of_Brand_Tile_Template_(14).png?auto=webp&format=pjpg&width=234&height=160&dpr=1&quality=80 1x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/bltef08e86c0cbeee9d/67732aa41381a69cea47e1c5/Copy_of_Brand_Tile_Template_(14).png?auto=webp&format=pjpg&width=234&height=160&dpr=2&quality=75 2x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/bltef08e86c0cbeee9d/67732aa41381a69cea47e1c5/Copy_of_Brand_Tile_Template_(14).png?auto=webp&format=pjpg&width=234&height=160&dpr=3&quality=50 3x">
                        </div>
                    </a>
                    <a href="https://stockx.com/category/apparel/outerwear/jackets-and-coats">
                        <div>
                            <img srcset="https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/bltf508ef069d2c8017/67732abe4667375164aa7d00/Copy_of_Brand_Tile_Template_(15).png?auto=webp&format=pjpg&width=234&height=160&dpr=1&quality=80 1x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/bltf508ef069d2c8017/67732abe4667375164aa7d00/Copy_of_Brand_Tile_Template_(15).png?auto=webp&format=pjpg&width=234&height=160&dpr=2&quality=75 2x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/bltf508ef069d2c8017/67732abe4667375164aa7d00/Copy_of_Brand_Tile_Template_(15).png?auto=webp&format=pjpg&width=234&height=160&dpr=3&quality=50 3x">
                        </div>
                    </a>
                    <a href="https://stockx.com/category/accessories/watches">
                        <div>
                            <img srcset="https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt8f3fb8d07836edaf/67732cceb290b3406391f515/Copy_of_Brand_Tile_Template_(16).png?auto=webp&format=pjpg&width=234&height=160&dpr=1&quality=80 1x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt8f3fb8d07836edaf/67732cceb290b3406391f515/Copy_of_Brand_Tile_Template_(16).png?auto=webp&format=pjpg&width=234&height=160&dpr=2&quality=75 2x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt8f3fb8d07836edaf/67732cceb290b3406391f515/Copy_of_Brand_Tile_Template_(16).png?auto=webp&format=pjpg&width=234&height=160&dpr=3&quality=50 3x">
                        </div>
                    </a>
                    <a href="https://stockx.com/brands/pop-mart">
                        <div>
                            <img srcset="https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blte56098b293a5c34e/67732bda05ab071f242c5451/Copy_of_Brand_Tile_Template_(17).png?auto=webp&format=pjpg&width=234&height=160&dpr=1&quality=80 1x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blte56098b293a5c34e/67732bda05ab071f242c5451/Copy_of_Brand_Tile_Template_(17).png?auto=webp&format=pjpg&width=234&height=160&dpr=2&quality=75 2x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blte56098b293a5c34e/67732bda05ab071f242c5451/Copy_of_Brand_Tile_Template_(17).png?auto=webp&format=pjpg&width=234&height=160&dpr=3&quality=50 3x">
                        </div>
                    </a>
                    <a href="https://stockx.com/category/trading-cards?brand=pokemon">
                        <div>
                            <img srcset="https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt91c4f6729091cce8/67732c615c0f67a75f81bde9/Copy_of_Brand_Tile_Template_(18).png?auto=webp&format=pjpg&width=234&height=160&dpr=1&quality=80 1x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt91c4f6729091cce8/67732c615c0f67a75f81bde9/Copy_of_Brand_Tile_Template_(18).png?auto=webp&format=pjpg&width=234&height=160&dpr=2&quality=75 2x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt91c4f6729091cce8/67732c615c0f67a75f81bde9/Copy_of_Brand_Tile_Template_(18).png?auto=webp&format=pjpg&width=234&height=160&dpr=3&quality=50 3x">
                        </div>
                    </a>
                </div>
            </div>

        </section>

        <section id="section">
            <div id="contenitore">
                <div id="intestazione">
                    <h2>
                        Trending Trading Cards
                        <svg class="stockx-icon " focusable="false" viewBox="0 0 50 50" aria-hidden="true" style="width: 20px; height: 20px; vertical-align: -0.125em;"><path d="M25 6C14.5 6 6 14.5 6 25C6 35.5 14.5 44 25 44C35.5 44 44 35.5 44 25C44 14.5 35.5 6 25 6ZM26.4 36.2H22V31.7H26.4V36.2ZM29 25C27 26.1 26.2 26.8 26.2 29V29.2H22.1V28.9C22.1 25.9 23.2 24.6 25.3 23.4C27.2 22.3 28.5 21.3 28.5 19.7C28.5 18.1 26.9 17.1 25.3 17.1C23.1 17.1 21.4 18.3 21.3 21.2H17.2C17.2 16.8 20.7 14 25.3 14C29 14 32.6 15.7 32.6 19.5C32.7 22.3 30.7 24 29 25Z" fill="currentColor"></path></svg>
                    </h2>
                </div>
                <div class="elementi">
                    <a href="https://stockx.com/pokemon-scarlet-violet-151-blooming-waters-premium-collection-box">
                        <div>
                            <img srcset="https://images.stockx.com/images/Pokemon-Scarlet-Violet-151-Blooming-Waters-Premium-Collection-Box-V1.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1736179831 1x,
                            https://images.stockx.com/images/Pokemon-Scarlet-Violet-151-Blooming-Waters-Premium-Collection-Box-V1.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1736179831 2x,
                            https://images.stockx.com/images/Pokemon-Scarlet-Violet-151-Blooming-Waters-Premium-Collection-Box-V1.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1736179831 3x">
                        </div>
                        <p>
                            Pokémon Scarlet & Violet 151 Blooming Waters Premium Collection Box
                        </p>
                        <p>
                            €100

                        </p>
                    </a>
                    <a href="https://stockx.com/pokemon-scarlet-and-violet-prismatic-evolutions-elite-trainer-box">
                        <div>
                            <img srcset="https://images.stockx.com/images/Pokemon-Scarlet-And-Violet-Prismatic-Evolutions-Elite-Trainer-Box.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1736782112 1x,
                            https://images.stockx.com/images/Pokemon-Scarlet-And-Violet-Prismatic-Evolutions-Elite-Trainer-Box.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1736782112 2x,
                            https://images.stockx.com/images/Pokemon-Scarlet-And-Violet-Prismatic-Evolutions-Elite-Trainer-Box.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1736782112 3x">
                        </div>
                        <p>
                            Pokémon Scarlet & Violet Prismatic Evolutions Elite Trainer Box
                        </p>
                        <p>
                            €112

                        </p>
                    </a>
                    <a href="https://stockx.com/pokemon-scarlet-violet-151-blooming-waters-premium-collection-box-2x-lot">
                        <div>
                            <img srcset="https://images.stockx.com/images/Pokemon-Scarlet-Violet-151-Blooming-Waters-Premium-Collection-Box-2x-Lot.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1733505580 1x,
                            https://images.stockx.com/images/Pokemon-Scarlet-Violet-151-Blooming-Waters-Premium-Collection-Box-2x-Lot.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1733505580 2x,
                            https://images.stockx.com/images/Pokemon-Scarlet-Violet-151-Blooming-Waters-Premium-Collection-Box-2x-Lot.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1733505580 3x">
                        </div>
                        <p>
                            Pokémon Scarlet & Violet
                            151 Blooming Waters Premium Collection Box 2x Lot 
                        </p>
                        <p>
                            €183

                        </p>
                    </a>
                    <a href="https://stockx.com/pokemon-scarlet-violet-prismatic-evolutions-booster-bundle-4x-lot">
                        <div>
                            <img srcset="https://images.stockx.com/images/Pokemon-Scarlet-Violet-Prismatic-Evolutions-Booster-Bundle-4x-Lot.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1733505564 1x,
                            https://images.stockx.com/images/Pokemon-Scarlet-Violet-Prismatic-Evolutions-Booster-Bundle-4x-Lot.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1733505564 2x,
                            https://images.stockx.com/images/Pokemon-Scarlet-Violet-Prismatic-Evolutions-Booster-Bundle-4x-Lot.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1733505564 3x">
                        </div>
                        <p>
                            Pokémon Scarlet & Violet
                            Prismatic Evolutions Booster Bundle 4x Lot 
                        </p>
                        <p>
                            €212

                        </p>
                    </a>
                    <a href="https://stockx.com/pokemon-scarlet-violet-151-blooming-waters-premium-collection-box-4x-lot">
                        <div>
                            <img srcset="https://images.stockx.com/images/Pokemon-Scarlet-Violet-151-Blooming-Waters-Premium-Collection-Box-4x-Lot.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1733505555 1x,
                            https://images.stockx.com/images/Pokemon-Scarlet-Violet-151-Blooming-Waters-Premium-Collection-Box-4x-Lot.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1733505555 2x,
                            https://images.stockx.com/images/Pokemon-Scarlet-Violet-151-Blooming-Waters-Premium-Collection-Box-4x-Lot.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1733505555 3x">
                        </div>
                        <p>
                            Pokémon Scarlet & Violet
                            151 Blooming Waters Premium Collection Box 4x Lot 
                        </p>
                        <p>
                            €385

                        </p>
                    </a>
                    <a href="https://stockx.com/pokemon-scarlet-violet-prismatic-evolutions-elite-trainer-box-4x-lot">
                        <div>
                            <img srcset="https://images.stockx.com/images/Pokemon-Scarlet-Violet-Prismatic-Evolutions-Elite-Trainer-Box-4x-Lot.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=60&dpr=1&trim=color&updated_at=1737137565 1x,
                            https://images.stockx.com/images/Pokemon-Scarlet-Violet-Prismatic-Evolutions-Elite-Trainer-Box-4x-Lot.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=57&dpr=2&trim=color&updated_at=1737137565 2x,
                            https://images.stockx.com/images/Pokemon-Scarlet-Violet-Prismatic-Evolutions-Elite-Trainer-Box-4x-Lot.jpg?fit=fill&bg=FFFFFF&w=140&h=75&q=41&dpr=3&trim=color&updated_at=1737137565 3x">
                        </div>
                        <p>
                            Pokémon Scarlet & Violet
                            Prismatic Evolutions Elite Trainer Box 4x Lot 
                        </p>
                        <p>
                            €404

                        </p>
                    </a>
                    
                </div>
            </div>

        </section>

        <div id="youtube">
            <iframe id="video" src="" frameborder = '0' allowfullscreen></iframe>
        </div>

        <div id="newsLetter">
            <h3>
                Receive updates and exclusive offers
            </h3>
            <form>
                <div id="contenitore_input">
                    <input placeholder="Email" type="email">
                </div>
                <div id="iscrizione">
                    <button type="submit">
                        Sign Up
                    </button>
                </div>
            </form>
        </div>

        <footer id="footer">
            <div id="contenitore_footer">
                <h2>
                    StockX. Access the Now.
                </h2>
                <div class="elementi_footer">
                    <ul>
                        <li id="intestazione_lista">
                            <h3>
                                <a href="https://stockx.com/about/how-it-works/">
                                    About
                                </a>
                            </h3>
                        </li>
                        <li>
                            <a href="https://stockx.com/about/how-it-works/">
                                How It Works
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/about/verification/">
                                Verification
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/about/newsroom/">
                                Newsroom
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/about/company/">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="https://careers.stockx.com/">
                                Careers
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/about/reviews/">
                                StockX Reviews
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Give $10, Get $10
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li id="intestazione_lista">
                            <h3>
                                <a href="https://stockx.com/help/home">
                                    Help
                                </a>
                            </h3>
                        </li>
                        <li>
                            <a href="https://stockx.com/help/home">
                                Help Center
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/help/home?contactsupport=true">
                                Contact Us
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/product-suggestion">
                                Product Suggestions
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/help/articles/I-dont-know-how-an-item-fits-Can-you-make-a-size-recommendation">
                                Size Guide
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li id="intestazione_lista">
                            <h3>
                                <a href="https://stockx.com/about/selling/">
                                    Sell
                                </a>
                            </h3>
                        </li>
                        <li>
                            <a href="https://stockx.com/about/selling/">
                                Selling Guide
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/about/professionalsellers/"> 
                                Professional Tools
                            </a>
                        </li>
                        <li>
                            <a href="https://pro.stockx.com/login?redirectUrl=/listings">
                                StockX Pro
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/about/sponsored-asks/">
                                Sponsored Asks
                            </a>
                        </li>
                        <li>
                            <a href="https://developer.stockx.com/">
                                Developers
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li id="intestazione_lista">
                            <h3>
                                <a href="https://stockx.com/brands/jordan">
                                    Air Jordan
                                </a>
                            </h3>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/jordan?category=sneakers&model=1">
                                Air Jordan 1
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/jordan?category=sneakers&model=3">
                                Air Jordan 3
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/jordan?category=sneakers&model=4">
                                Air Jordan 4
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/jordan?category=sneakers&model=11">
                                Air Jordan 11
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/jordan?category=sneakers&gender=women">
                                Women's Jordan Shoes
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/jordan?category=sneakers&model=5">
                                Air Jordan 5
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li id="intestazione_lista">
                            <h3>
                                <a href="https://stockx.com/brands/adidas">
                                    Adidas
                                </a>
                            </h3>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/adidas?category=sneakers&model=samba">
                                Adidas Samba
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/adidas?category=sneakers&model=campus">
                                Adidas Campus
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/adidas?category=sneakers&model=gazelle">
                                Adidas Gazelle
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/adidas?category=sneakers&model=handball-spezial">
                                Adidas Handball Spezial
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/adidas?category=sneakers&model=ae-1">
                                Adidas AE
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/adidas?category=sneakers&product-line=adidas-yeezy">
                                Adidas Yeezy
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li id="intestazione_lista">
                            <h3>
                                <a href="https://stockx.com/brands/new-balance">
                                    New Balance
                                </a>
                            </h3>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/new-balance?category=sneakers&model=2002r">
                                New Balance 2002R
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/new-balance?category=sneakers&model=1906r">
                                New Balance 1906R
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/new-balance?category=sneakers&model=530">
                                New Balance 530
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/new-balance?category=sneakers&model=550">
                                New Balance 550
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/new-balance?category=sneakers&model=9060">
                                New Balance 9060
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/new-balance?category=sneakers&model=990v1">
                                New Balance 990 V1
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li id="intestazione_lista">
                            <h3>
                                <a href="https://stockx.com/brands/nike">
                                    Nike
                                </a>
                            </h3>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/nike?category=sneakers&model=air-force-1">
                                Nike Air Force 1
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/nike?category=sneakers&model=air-max-1">
                                Nike Air Max 1
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/nike?category=sneakers&model=dunk">
                                Nike Dunk
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/nike?category=sneakers&product-line=nike-sb">
                                Nike SB
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/nike?category=sneakers&gender=women&model=dunk">
                                Women's Nike Dunk
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/nike?category=sneakers&model=vomero-5">
                                Nike Vomero 5
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li id="intestazione_lista">
                            <h3>
                                <a href="https://stockx.com/brands/pop-mart">
                                    Pop Mart
                                </a>
                            </h3>
                        </li>
                        <li>
                            <a href="https://stockx.com/pop-mart-labubu-the-monsters-coca-cola-series-vinyl-face-sealed-case-6-blind-box">
                                Coca Cola Case
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/pop-mart-labubu-the-monsters-have-a-seat-vinyl-plush-blind-box-set-of-6">
                                Have A Seat Case
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/pop-mart-the-monsters-labubu-zimomo-angel-in-clouds-figure">
                                Labubu Zimo Angel
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/pop-mart-labubu-the-monsters-flip-with-me-vinyl-plush-doll">
                                Labubu Flip With Me
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/pop-mart-labubu-the-monsters-fall-in-wild-vinyl-plush-doll-pendant-keychain">
                                Labubu Fall in Wild
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/pop-mart-labubu-the-monsters-tasty-macarons-vinyl-face-blind-box-whole-set">
                                Tasty Macarons Case
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li id="intestazione_lista">
                            <h3>
                                <a href="https://stockx.com/releases/upcoming?productType=sneakers">
                                    Popular Releases
                                </a>
                            </h3>
                        </li>
                        <li>
                            <a href="https://stockx.com/air-jordan-3-retro-black-cat-2025">
                                Jordan 3 Retro Black Cat (2025)
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/air-jordan-5-retro-og-black-metallic-reimagined">
                                Jordan 5 Retro OG Black Metallic Reimagined
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/air-jordan-1-retro-high-85-bred">
                                Jordan 1 Retro High '85 OG Bred (2025)
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/air-jordan-11-retro-legend-blue-2024">
                                Jordan 11 Retro Legend Blue (2024)
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/air-jordan-1-retro-high-og-black-toe-reimagined">
                                Jordan 1 Retro High OG Black Toe Reimagined
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/nike-sb-dunk-low-the-wizard-of-oz-poppy-field">
                                Nike SB Dunk Low The Wizard of Oz Poppy Field
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li id="intestazione_lista">
                            <h3>
                                <a href="https://stockx.com/category/apparel">
                                    Apparel
                                </a>
                            </h3>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/denim-tears">
                                Denim Tears
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/fear-of-god">
                                Fear of God Essentials
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/nike?category=apparel">
                                Nike Apparel
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/supreme?category=apparel">
                                Supreme
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/travis-scott?category=apparel">
                                Travis Scott
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/yeezy?category=apparel">
                                Yeezy
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li id="intestazione_lista">
                            <h3>
                                <a href="https://stockx.com/category/accessories">
                                    Accessories
                                </a>
                            </h3>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/swatch">
                                Swatch X Omega
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/stanley">
                                Stanley
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/category/accessories/eyewear/sunglasses">
                                Designer Sunglasses
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/louis-vuitton">
                                Louis Vuitton Accessories
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/gucci">
                                Gucci Accessories
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/brands/supreme?category=accessories">
                                Supreme Accessories
                            </a>
                        </li>
                    </ul>
                    <div id="last_container">
                        <div>
                            <a id="first_link" href="https://apps.apple.com/us/app/stockx-sneakers-and-apparel/id881599819">
                                <svg viewBox="0 0 128 43" focusable="false" class="chakra-icon css-1a9naxn"><g clip-path="url(#clip0_1347_18305)"><path d="M117.807 1.76797e-05H10.1989C9.80663 1.76797e-05 9.41909 1.76798e-05 9.02789 0.00216768C8.70041 0.00431768 8.37554 0.0105634 8.04492 0.0158202C7.32666 0.0243146 6.61008 0.0878197 5.90143 0.205783C5.19377 0.326315 4.50827 0.553552 3.86813 0.879808C3.22877 1.20882 2.64457 1.63635 2.13672 2.14687C1.62621 2.65595 1.20066 3.24439 0.876427 3.88954C0.551304 4.53341 0.325862 5.22338 0.207889 5.93561C0.0887936 6.64694 0.0247074 7.36648 0.0162054 8.08776C0.00627891 8.41735 0.00523064 8.74804 0 9.07768V33.9255C0.00523064 34.2593 0.00627891 34.5827 0.0162054 34.9166C0.02471 35.6378 0.0887962 36.3573 0.207889 37.0686C0.325536 37.7812 0.550991 38.4716 0.876427 39.1157C1.20051 39.7588 1.62612 40.3448 2.13672 40.8511C2.64265 41.3639 3.22722 41.7917 3.86813 42.1182C4.50827 42.4453 5.19369 42.6739 5.90143 42.7963C6.61021 42.9133 7.32671 42.9769 8.04492 42.9864C8.37554 42.9937 8.70041 42.9979 9.02789 42.9979C9.41908 43 9.80665 43 10.1989 43H117.807C118.191 43 118.582 43 118.966 42.9979C119.292 42.9979 119.627 42.9937 119.953 42.9864C120.669 42.9774 121.385 42.9138 122.092 42.7963C122.802 42.6731 123.49 42.4445 124.133 42.1182C124.773 41.7915 125.357 41.3637 125.863 40.8511C126.372 40.3429 126.799 39.7572 127.127 39.1157C127.45 38.4711 127.673 37.7808 127.789 37.0686C127.908 36.3572 127.975 35.6379 127.987 34.9166C127.992 34.5827 127.992 34.2593 127.992 33.9255C128 33.535 128 33.1466 128 32.7497V10.2514C128 9.85768 128 9.46716 127.992 9.07768C127.992 8.74804 127.992 8.41735 127.987 8.08772C127.975 7.36637 127.908 6.647 127.789 5.93557C127.673 5.22375 127.449 4.53383 127.127 3.8895C126.466 2.59635 125.419 1.54375 124.133 0.879712C123.49 0.554253 122.802 0.327076 122.092 0.205687C121.385 0.0872032 120.669 0.023676 119.953 0.0156697C119.627 0.0104237 119.292 0.00412418 118.966 0.00202793C118.582 -0.00012207 118.191 -0.00012207 117.807 -0.00012207V1.76797e-05Z" fill="#A6A6A6"></path><path d="M9.03288 42.0594C8.70697 42.0594 8.38894 42.0552 8.06559 42.0479C7.39575 42.0391 6.72747 41.9805 6.06625 41.8725C5.44968 41.7658 4.8524 41.5673 4.29409 41.2835C3.74091 41.0021 3.23636 40.6331 2.79978 40.1907C2.35687 39.7535 1.98814 39.2464 1.70818 38.6895C1.42513 38.1289 1.22925 37.5281 1.12735 36.908C1.01731 36.2416 0.957773 35.5678 0.949254 34.8923C0.942472 34.6656 0.933594 33.9108 0.933594 33.9108V9.07765C0.933594 9.07765 0.94305 8.33439 0.949307 8.11602C0.957464 7.44166 1.01666 6.76889 1.12637 6.10355C1.22846 5.48168 1.42449 4.87914 1.70769 4.31679C1.98662 3.76028 2.35331 3.25279 2.79354 2.81399C3.23328 2.37103 3.73945 2.00014 4.29357 1.71484C4.85059 1.43199 5.44675 1.23488 6.06206 1.1301C6.72546 1.02106 7.39606 0.962109 8.06822 0.953739L9.0334 0.940613H118.961L119.938 0.954265C120.604 0.962219 121.268 1.02065 121.925 1.12905C122.547 1.23514 123.149 1.43362 123.713 1.71799C124.823 2.29295 125.726 3.20259 126.296 4.31941C126.575 4.87788 126.768 5.47551 126.868 6.092C126.98 6.7628 127.042 7.44086 127.054 8.12075C127.058 8.42519 127.058 8.75221 127.058 9.07765C127.066 9.48078 127.066 9.86448 127.066 10.2513V32.7496C127.066 33.1402 127.066 33.5213 127.058 33.9055C127.058 34.2551 127.058 34.5753 127.053 34.9049C127.041 35.5727 126.98 36.2386 126.871 36.8974C126.771 37.5221 126.576 38.1276 126.293 38.6927C126.011 39.2435 125.644 39.7463 125.207 40.1823C124.77 40.6271 124.264 40.9983 123.71 41.2815C123.148 41.5674 122.546 41.7667 121.925 41.8725C121.264 41.9811 120.596 42.0397 119.926 42.0479C119.613 42.0552 119.285 42.0594 118.966 42.0594L117.807 42.0615L9.03288 42.0594Z" fill="black"></path><path d="M26.4941 21.8232C26.5056 20.926 26.7428 20.0462 27.1835 19.2658C27.6242 18.4854 28.2542 17.8297 29.0148 17.3598C28.5316 16.6662 27.8942 16.0955 27.1531 15.6928C26.412 15.2902 25.5877 15.0668 24.7457 15.0403C22.9494 14.8508 21.2081 16.1205 20.2928 16.1205C19.3597 16.1205 17.9505 15.0591 16.4329 15.0905C15.4513 15.1223 14.4946 15.4092 13.6562 15.9231C12.8177 16.437 12.126 17.1605 11.6484 18.0229C9.57966 21.6225 11.1227 26.9126 13.1044 29.8222C14.0959 31.247 15.2546 32.8384 16.7708 32.782C18.2545 32.7202 18.8086 31.8312 20.5996 31.8312C22.3739 31.8312 22.8938 32.782 24.4407 32.7461C26.0328 32.7202 27.0358 31.315 27.9925 29.8768C28.7049 28.8616 29.2531 27.7396 29.6167 26.5524C28.6918 26.1592 27.9025 25.5011 27.3472 24.6601C26.7919 23.8192 26.4952 22.8325 26.4941 21.8232Z" fill="white"></path><path d="M23.5723 13.1267C24.4404 12.0794 24.868 10.7333 24.7645 9.3743C23.4383 9.51429 22.2132 10.1513 21.3335 11.1584C20.9033 11.6504 20.5739 12.2227 20.3639 12.8428C20.154 13.4628 20.0678 14.1183 20.1101 14.7719C20.7734 14.7787 21.4297 14.6342 22.0294 14.3493C22.6291 14.0643 23.1567 13.6463 23.5723 13.1267Z" fill="white"></path><path d="M45.2488 29.1751H40.1856L38.9697 32.7833H36.8252L41.6209 19.434H43.849L48.6447 32.7833H46.4636L45.2488 29.1751ZM40.71 27.5101H44.7234L42.7449 21.6543H42.6896L40.71 27.5101Z" fill="white"></path><path d="M59.0023 27.9175C59.0023 30.942 57.3916 32.8851 54.9608 32.8851C54.345 32.9175 53.7327 32.775 53.1938 32.4738C52.6549 32.1727 52.2113 31.7251 51.9137 31.1823H51.8677V36.003H49.8799V23.0506H51.8041V24.6694H51.8406C52.1518 24.1292 52.6029 23.684 53.1459 23.381C53.6889 23.078 54.3035 22.9286 54.9242 22.9487C57.3821 22.9487 59.0023 24.9014 59.0023 27.9175ZM56.9591 27.9175C56.9591 25.947 55.9458 24.6515 54.3999 24.6515C52.881 24.6515 51.8594 25.9743 51.8594 27.9175C51.8594 29.8785 52.881 31.1918 54.3999 31.1918C55.9459 31.1918 56.9591 29.9058 56.9591 27.9175Z" fill="white"></path><path d="M69.6605 27.9175C69.6605 30.9419 68.0498 32.8851 65.619 32.8851C65.0033 32.9175 64.3909 32.7749 63.852 32.4738C63.3131 32.1726 62.8695 31.7251 62.5719 31.1823H62.5259V36.003H60.5381V23.0505H62.4622V24.6693H62.4988C62.81 24.1292 63.2611 23.6839 63.8041 23.381C64.3471 23.078 64.9617 22.9286 65.5824 22.9487C68.0404 22.9487 69.6605 24.9014 69.6605 27.9175ZM67.6173 27.9175C67.6173 25.947 66.604 24.6515 65.0581 24.6515C63.5392 24.6515 62.5176 25.9743 62.5176 27.9175C62.5176 29.8785 63.5392 31.1918 65.0581 31.1918C66.6041 31.1918 67.6173 29.9058 67.6173 27.9175H67.6173Z" fill="white"></path><path d="M76.7058 29.0638C76.8531 30.3876 78.1327 31.2568 79.8814 31.2568C81.5569 31.2568 82.7623 30.3876 82.7623 29.194C82.7623 28.1578 82.0353 27.5374 80.3138 27.1122L78.5923 26.6954C76.1532 26.1033 75.0209 24.9569 75.0209 23.0967C75.0209 20.7934 77.0181 19.2114 79.8542 19.2114C82.661 19.2114 84.5851 20.7934 84.6499 23.0967H82.6432C82.5231 21.7645 81.4273 20.9603 79.826 20.9603C78.2246 20.9603 77.1288 21.7739 77.1288 22.9581C77.1288 23.9019 77.8287 24.4572 79.5408 24.8824L81.0043 25.2435C83.7296 25.8912 84.8619 26.9915 84.8619 28.9441C84.8619 31.4416 82.8824 33.0058 79.734 33.0058C76.7883 33.0058 74.7994 31.4783 74.6709 29.0637L76.7058 29.0638Z" fill="white"></path><path d="M89.1515 20.7473V23.0506H90.9931V24.6326H89.1515V29.9982C89.1515 30.8317 89.5202 31.2201 90.3298 31.2201C90.5484 31.2163 90.7667 31.2009 90.9837 31.1739V32.7465C90.6197 32.8149 90.2497 32.8458 89.8795 32.8389C87.9188 32.8389 87.1542 32.0988 87.1542 30.2112V24.6326H85.7461V23.0506H87.1542V20.7473H89.1515Z" fill="white"></path><path d="M92.0605 27.9174C92.0605 24.8552 93.8551 22.9309 96.6536 22.9309C99.4615 22.9309 101.248 24.8551 101.248 27.9174C101.248 30.9881 99.4709 32.904 96.6536 32.904C93.8373 32.904 92.0605 30.9881 92.0605 27.9174ZM99.2223 27.9174C99.2223 25.8168 98.2644 24.577 96.6536 24.577C95.0428 24.577 94.086 25.8262 94.086 27.9174C94.086 30.0265 95.0428 31.2569 96.6536 31.2569C98.2644 31.2569 99.2222 30.0265 99.2222 27.9174H99.2223Z" fill="white"></path><path d="M102.886 23.0506H104.782V24.7071H104.828C104.956 24.1898 105.258 23.7325 105.682 23.4123C106.106 23.0921 106.627 22.9284 107.157 22.9487C107.386 22.9479 107.615 22.9729 107.838 23.0233V24.8919C107.549 24.8031 107.247 24.7623 106.945 24.7712C106.656 24.7594 106.368 24.8106 106.101 24.9212C105.834 25.0318 105.594 25.1992 105.397 25.4119C105.2 25.6247 105.051 25.8777 104.961 26.1536C104.871 26.4295 104.841 26.7218 104.874 27.0104V32.7833H102.886L102.886 23.0506Z" fill="white"></path><path d="M117.003 29.9247C116.736 31.6915 115.024 32.904 112.833 32.904C110.016 32.904 108.268 31.007 108.268 27.9636C108.268 24.9108 110.026 22.9309 112.75 22.9309C115.429 22.9309 117.114 24.7806 117.114 27.7316V28.4161H110.274V28.5368C110.243 28.895 110.287 29.2559 110.405 29.5954C110.523 29.9349 110.711 30.2454 110.958 30.5061C111.204 30.7668 111.503 30.9719 111.834 31.1077C112.166 31.2435 112.522 31.3068 112.879 31.2936C113.349 31.3378 113.821 31.2285 114.224 30.9819C114.627 30.7352 114.939 30.3644 115.116 29.9247L117.003 29.9247ZM110.284 27.0199H115.125C115.143 26.6978 115.095 26.3755 114.983 26.0732C114.871 25.7709 114.698 25.4951 114.475 25.2632C114.252 25.0312 113.983 24.8481 113.686 24.7253C113.39 24.6026 113.071 24.5427 112.75 24.5497C112.426 24.5477 112.105 24.6102 111.806 24.7336C111.506 24.8569 111.234 25.0387 111.005 25.2683C110.775 25.498 110.594 25.771 110.47 26.0716C110.346 26.3723 110.283 26.6945 110.284 27.0199V27.0199Z" fill="white"></path><path d="M40.4617 9.38582C40.8784 9.35576 41.2966 9.41904 41.6861 9.57108C42.0756 9.72312 42.4266 9.96013 42.7139 10.265C43.0012 10.5699 43.2176 10.9351 43.3474 11.3342C43.4773 11.7333 43.5174 12.1564 43.4649 12.573C43.4649 14.6222 42.3628 15.8002 40.4617 15.8002H38.1562V9.38582H40.4617ZM39.1476 14.893H40.3509C40.6487 14.9109 40.9467 14.8619 41.2233 14.7494C41.4998 14.6369 41.748 14.4639 41.9496 14.2429C42.1512 14.022 42.3013 13.7586 42.3888 13.472C42.4764 13.1853 42.4993 12.8827 42.4558 12.5861C42.4961 12.2906 42.4709 11.9899 42.382 11.7054C42.2931 11.4209 42.1427 11.1596 41.9415 10.9404C41.7403 10.7212 41.4934 10.5494 41.2184 10.4373C40.9434 10.3253 40.6472 10.2757 40.3509 10.2923H39.1476V14.893Z" fill="white"></path><path d="M44.585 13.3777C44.5547 13.0596 44.5909 12.7386 44.6913 12.4354C44.7916 12.1321 44.954 11.8534 45.1678 11.6169C45.3817 11.3804 45.6424 11.1914 45.9332 11.0621C46.224 10.9328 46.5384 10.8661 46.8564 10.8661C47.1744 10.8661 47.4889 10.9328 47.7797 11.0621C48.0704 11.1914 48.3311 11.3804 48.545 11.6169C48.7589 11.8534 48.9212 12.1321 49.0216 12.4354C49.122 12.7386 49.1582 13.0596 49.1279 13.3777C49.1587 13.6961 49.123 14.0175 49.0229 14.3212C48.9227 14.6249 48.7605 14.9042 48.5466 15.1412C48.3327 15.3781 48.0718 15.5675 47.7807 15.6971C47.4896 15.8266 47.1748 15.8936 46.8564 15.8936C46.5381 15.8936 46.2232 15.8266 45.9322 15.6971C45.6411 15.5675 45.3802 15.3781 45.1663 15.1412C44.9523 14.9042 44.7901 14.6249 44.69 14.3212C44.5899 14.0175 44.5541 13.6961 44.585 13.3777ZM48.1501 13.3777C48.1501 12.3284 47.6811 11.7148 46.858 11.7148C46.0317 11.7148 45.5669 12.3284 45.5669 13.3777C45.5669 14.4354 46.0318 15.0442 46.858 15.0442C47.6811 15.0442 48.1502 14.4311 48.1502 13.3777H48.1501Z" fill="white"></path><path d="M55.166 15.8001H54.1799L53.1844 12.2349H53.1092L52.1178 15.8001H51.1412L49.8135 10.9594H50.7776L51.6405 14.6531H51.7115L52.7018 10.9594H53.6137L54.604 14.6531H54.6792L55.5378 10.9594H56.4884L55.166 15.8001Z" fill="white"></path><path d="M57.6055 10.9594H58.5205V11.7284H58.5916C58.7121 11.4522 58.9153 11.2207 59.173 11.0661C59.4306 10.9115 59.7298 10.8415 60.0289 10.866C60.2633 10.8483 60.4986 10.8838 60.7175 10.9699C60.9363 11.056 61.1331 11.1905 61.2932 11.3634C61.4533 11.5363 61.5726 11.7432 61.6424 11.9687C61.7121 12.1943 61.7305 12.4327 61.6961 12.6664V15.8H60.7455V12.9063C60.7455 12.1284 60.4092 11.7415 59.7061 11.7415C59.547 11.7341 59.3882 11.7613 59.2405 11.8213C59.0928 11.8813 58.9598 11.9727 58.8506 12.0892C58.7413 12.2057 58.6585 12.3446 58.6076 12.4963C58.5568 12.6481 58.5392 12.809 58.556 12.9682V15.8001H57.6055L57.6055 10.9594Z" fill="white"></path><path d="M63.2109 9.06976H64.1615V15.8001H63.2109V9.06976Z" fill="white"></path><path d="M65.4824 13.3777C65.4521 13.0595 65.4884 12.7386 65.5888 12.4353C65.6892 12.1321 65.8515 11.8533 66.0654 11.6168C66.2793 11.3803 66.54 11.1914 66.8308 11.0621C67.1216 10.9328 67.4361 10.866 67.7541 10.866C68.0721 10.866 68.3866 10.9328 68.6774 11.0621C68.9682 11.1914 69.2289 11.3803 69.4428 11.6168C69.6567 11.8533 69.8191 12.1321 69.9195 12.4353C70.0199 12.7386 70.0561 13.0595 70.0258 13.3777C70.0567 13.6961 70.0209 14.0175 69.9207 14.3212C69.8206 14.6249 69.6583 14.9042 69.4444 15.1412C69.2304 15.3781 68.9695 15.5675 68.6784 15.697C68.3873 15.8266 68.0725 15.8935 67.7541 15.8935C67.4358 15.8935 67.1209 15.8266 66.8298 15.697C66.5387 15.5675 66.2778 15.3781 66.0639 15.1412C65.8499 14.9042 65.6877 14.6249 65.5875 14.3212C65.4874 14.0175 65.4516 13.6961 65.4824 13.3777ZM69.0476 13.3777C69.0476 12.3284 68.5786 11.7148 67.7554 11.7148C66.9292 11.7148 66.4644 12.3284 66.4644 13.3777C66.4644 14.4354 66.9292 15.0442 67.7554 15.0442C68.5786 15.0442 69.0476 14.4311 69.0476 13.3777H69.0476Z" fill="white"></path><path d="M71.0273 14.4311C71.0273 13.5598 71.6729 13.0575 72.8188 12.9861L74.1235 12.9105V12.4927C74.1235 11.9814 73.7872 11.6927 73.1374 11.6927C72.6068 11.6927 72.2391 11.8885 72.1336 12.2307H71.2133C71.3104 11.3993 72.0887 10.866 73.1813 10.866C74.3888 10.866 75.0699 11.4701 75.0699 12.4927V15.8001H74.1548V15.1198H74.0796C73.927 15.3638 73.7126 15.5627 73.4584 15.6963C73.2043 15.8298 72.9194 15.8931 72.6329 15.8798C72.4307 15.901 72.2263 15.8793 72.033 15.8162C71.8396 15.7531 71.6616 15.65 71.5103 15.5135C71.359 15.377 71.2379 15.2101 71.1547 15.0237C71.0715 14.8373 71.0281 14.6354 71.0273 14.4311ZM74.1235 14.0175V13.6128L72.9473 13.6884C72.284 13.733 71.9831 13.9598 71.9831 14.3865C71.9831 14.8222 72.3592 15.0757 72.8763 15.0757C73.0278 15.0911 73.1809 15.0757 73.3263 15.0305C73.4718 14.9852 73.6068 14.911 73.7231 14.8123C73.8395 14.7136 73.9349 14.5923 74.0037 14.4558C74.0725 14.3193 74.1132 14.1702 74.1235 14.0175Z" fill="white"></path><path d="M76.3184 13.3777C76.3184 11.8481 77.1008 10.8791 78.3177 10.8791C78.6187 10.8652 78.9175 10.9376 79.179 11.088C79.4406 11.2384 79.6542 11.4605 79.7948 11.7284H79.8658V9.06976H80.8164V15.8001H79.9055V15.0353H79.8303C79.6788 15.3013 79.4578 15.5207 79.1912 15.6695C78.9246 15.8184 78.6225 15.8911 78.3177 15.8798C77.0924 15.8799 76.3184 14.9109 76.3184 13.3777ZM77.3003 13.3777C77.3003 14.4044 77.7819 15.0222 78.5873 15.0222C79.3884 15.0222 79.8836 14.3955 79.8836 13.3819C79.8836 12.373 79.3832 11.7373 78.5873 11.7373C77.7871 11.7373 77.3003 12.3593 77.3003 13.3777H77.3003Z" fill="white"></path><path d="M84.75 13.3777C84.7197 13.0596 84.7559 12.7386 84.8563 12.4354C84.9567 12.1321 85.119 11.8534 85.3329 11.6169C85.5468 11.3804 85.8074 11.1914 86.0982 11.0621C86.389 10.9328 86.7035 10.8661 87.0215 10.8661C87.3394 10.8661 87.6539 10.9328 87.9447 11.0621C88.2355 11.1914 88.4962 11.3804 88.71 11.6169C88.9239 11.8534 89.0862 12.1321 89.1866 12.4354C89.287 12.7386 89.3232 13.0596 89.2929 13.3777C89.3238 13.6961 89.288 14.0175 89.1879 14.3212C89.0878 14.6249 88.9255 14.9042 88.7116 15.1412C88.4977 15.3781 88.2368 15.5675 87.9457 15.6971C87.6547 15.8266 87.3398 15.8936 87.0215 15.8936C86.7031 15.8936 86.3883 15.8266 86.0972 15.6971C85.8061 15.5675 85.5452 15.3781 85.3313 15.1412C85.1174 14.9042 84.9551 14.6249 84.855 14.3212C84.7549 14.0175 84.7191 13.6961 84.75 13.3777ZM88.3152 13.3777C88.3152 12.3284 87.8462 11.7148 87.023 11.7148C86.1968 11.7148 85.732 12.3284 85.732 13.3777C85.732 14.4354 86.1968 15.0442 87.023 15.0442C87.8462 15.0442 88.3152 14.4311 88.3152 13.3777Z" fill="white"></path><path d="M90.5684 10.9594H91.4834V11.7284H91.5545C91.675 11.4522 91.8782 11.2207 92.1358 11.0661C92.3935 10.9115 92.6927 10.8415 92.9918 10.866C93.2262 10.8483 93.4615 10.8838 93.6804 10.9699C93.8992 11.056 94.096 11.1905 94.2561 11.3634C94.4162 11.5363 94.5355 11.7432 94.6053 11.9687C94.675 12.1943 94.6934 12.4327 94.659 12.6664V15.8H93.7084V12.9063C93.7084 12.1284 93.3721 11.7415 92.669 11.7415C92.5099 11.7341 92.3511 11.7613 92.2034 11.8213C92.0557 11.8813 91.9227 11.9727 91.8135 12.0892C91.7042 12.2057 91.6214 12.3446 91.5705 12.4963C91.5197 12.6481 91.5021 12.809 91.5189 12.9682V15.8001H90.5684V10.9594Z" fill="white"></path><path d="M100.03 9.75424V10.9815H101.073V11.7861H100.03V14.2752C100.03 14.7823 100.238 15.0043 100.711 15.0043C100.832 15.0039 100.953 14.9966 101.073 14.9823V15.778C100.903 15.8087 100.73 15.825 100.556 15.8268C99.4991 15.8268 99.0781 15.4531 99.0781 14.5198V11.7861H98.3135V10.9814H99.0781V9.75424H100.03Z" fill="white"></path><path d="M102.372 9.06976H103.314V11.7373H103.389C103.516 11.4586 103.725 11.2257 103.987 11.0705C104.25 10.9154 104.554 10.8454 104.858 10.8702C105.091 10.8574 105.324 10.8966 105.541 10.9847C105.757 11.0729 105.951 11.208 106.11 11.3804C106.268 11.5528 106.387 11.7581 106.457 11.9819C106.528 12.2056 106.548 12.4422 106.517 12.6748V15.8001H105.565V12.9105C105.565 12.1373 105.207 11.7457 104.535 11.7457C104.372 11.7322 104.208 11.7548 104.054 11.8118C103.9 11.8689 103.761 11.959 103.645 12.0759C103.53 12.1928 103.441 12.3336 103.385 12.4886C103.33 12.6435 103.308 12.8088 103.323 12.9729V15.8H102.372L102.372 9.06976Z" fill="white"></path><path d="M112.059 14.4931C111.93 14.9355 111.65 15.3181 111.269 15.5742C110.887 15.8302 110.428 15.9432 109.972 15.8935C109.655 15.9019 109.339 15.8408 109.048 15.7145C108.756 15.5881 108.496 15.3996 108.284 15.1618C108.072 14.9241 107.915 14.6429 107.822 14.3378C107.729 14.0327 107.704 13.711 107.747 13.395C107.705 13.078 107.731 12.7555 107.823 12.4495C107.916 12.1435 108.073 11.861 108.283 11.6212C108.494 11.3814 108.753 11.1899 109.044 11.0596C109.335 10.9293 109.65 10.8633 109.968 10.866C111.308 10.866 112.117 11.7862 112.117 13.3062V13.6396H108.715V13.6931C108.701 13.8708 108.723 14.0496 108.781 14.2181C108.839 14.3866 108.931 14.5411 109.052 14.6716C109.172 14.8022 109.319 14.906 109.482 14.9763C109.645 15.0466 109.821 15.0818 109.998 15.0799C110.226 15.1073 110.456 15.0662 110.66 14.9617C110.864 14.8572 111.033 14.694 111.144 14.493L112.059 14.4931ZM108.715 12.9331H111.148C111.16 12.7706 111.138 12.6074 111.084 12.454C111.029 12.3006 110.943 12.1603 110.832 12.0422C110.72 11.9241 110.585 11.8308 110.435 11.7682C110.286 11.7057 110.125 11.6753 109.963 11.6791C109.798 11.677 109.635 11.708 109.483 11.7703C109.331 11.8326 109.192 11.9249 109.076 12.0418C108.96 12.1586 108.868 12.2977 108.806 12.4508C108.744 12.6038 108.713 12.7678 108.715 12.9331H108.715Z" fill="white"></path></g><defs><clipPath id="clip0_1347_18305"><rect width="128" height="43" fill="white"></rect></clipPath></defs></svg>
                            </a>
                            <a id="second_link" href="https://play.google.com/store/apps/details?id=com.stockx.stockx&hl=en_US&pli=1">
                                <svg viewBox="0 0 128 39" focusable="false" class="chakra-icon css-1e4lz4u"><g clip-path="url(#clip0_2018_23135)"><mask id="mask0_2018_23135" maskUnits="userSpaceOnUse" x="0" y="0" width="128" height="39" style="mask-type: luminance;"><path d="M127.53 0.470581H0.470703V38.1176H127.53V0.470581Z" fill="white"></path></mask><g mask="url(#mask0_2018_23135)"><path d="M122.824 38.1176H5.17659C2.63541 38.1176 0.470703 36.0471 0.470703 33.4118V5.17646C0.470703 2.54117 2.54129 0.470581 5.17659 0.470581H122.824C125.459 0.470581 127.53 2.54117 127.53 5.17646V33.4118C127.53 36.0471 125.365 38.1176 122.824 38.1176Z" fill="black"></path></g><mask id="mask1_2018_23135" maskUnits="userSpaceOnUse" x="0" y="0" width="128" height="39" style="mask-type: luminance;"><path d="M127.53 0.470581H0.470703V38.1176H127.53V0.470581Z" fill="white"></path></mask><g mask="url(#mask1_2018_23135)"><path d="M122.824 0.470581H5.17659C2.63541 0.470581 0.470703 2.54117 0.470703 5.17646V33.4118C0.470703 36.0471 2.54129 38.1176 5.17659 38.1176H122.824C125.459 38.1176 127.53 36.0471 127.53 33.4118V5.17646C127.53 2.63529 125.365 0.470581 122.824 0.470581ZM122.824 1.22352C124.988 1.22352 126.777 3.01176 126.777 5.17646V33.4118C126.777 35.5765 124.988 37.3647 122.824 37.3647H5.17659C3.01188 37.3647 1.22364 35.5765 1.22364 33.4118V5.17646C1.22364 3.01176 3.01188 1.22352 5.17659 1.22352H122.824Z" fill="#A6A5A5"></path></g><path d="M43.9042 8.81C43.8387 8.60963 43.7524 8.43008 43.6453 8.27137C43.5402 8.11067 43.4142 7.97379 43.2674 7.8607C43.1225 7.74762 42.9579 7.66132 42.7734 7.6018C42.5889 7.54229 42.3865 7.51253 42.1663 7.51253C41.8052 7.51253 41.4769 7.60577 41.1813 7.79226C40.8857 7.97875 40.6506 8.25352 40.476 8.61657C40.3014 8.97962 40.2141 9.42501 40.2141 9.95273C40.2141 10.4804 40.3024 10.9258 40.479 11.2889C40.6556 11.6519 40.8946 11.9267 41.1962 12.1132C41.4977 12.2997 41.837 12.3929 42.2139 12.3929C42.5631 12.3929 42.8706 12.3185 43.1364 12.1697C43.4043 12.019 43.6126 11.8067 43.7614 11.5329C43.9121 11.2571 43.9875 10.9328 43.9875 10.5598L44.2137 10.6074H42.3806V9.95273H44.7017V10.6074C44.7017 11.1093 44.5946 11.5458 44.3803 11.9168C44.1681 12.2878 43.8744 12.5754 43.4995 12.7798C43.1265 12.9821 42.698 13.0833 42.2139 13.0833C41.6743 13.0833 41.2001 12.9564 40.7915 12.7024C40.3848 12.4485 40.0673 12.0874 39.8392 11.6192C39.613 11.151 39.4999 10.5955 39.4999 9.95273C39.4999 9.47064 39.5644 9.03716 39.6934 8.65228C39.8243 8.26542 40.0088 7.93609 40.2469 7.6643C40.485 7.3925 40.7667 7.18419 41.092 7.03937C41.4174 6.89454 41.7755 6.82213 42.1663 6.82213C42.4877 6.82213 42.7873 6.87074 43.065 6.96795C43.3447 7.06317 43.5937 7.19907 43.812 7.37564C44.0322 7.55022 44.2157 7.75952 44.3625 8.00354C44.5093 8.24558 44.6105 8.5144 44.666 8.81H43.9042ZM45.9657 13V6.90545H49.6439V7.56014H46.7037V9.61943H49.4534V10.2741H46.7037V12.3453H49.6915V13H45.9657ZM50.6408 7.56014V6.90545H55.2117V7.56014H53.2953V13H52.5572V7.56014H50.6408ZM59.4456 6.90545V13H58.7076V6.90545H59.4456ZM60.592 7.56014V6.90545H65.1629V7.56014H63.2465V13H62.5085V7.56014H60.592ZM73.8011 9.95273C73.8011 10.5955 73.685 11.151 73.4529 11.6192C73.2208 12.0874 72.9024 12.4485 72.4977 12.7024C72.093 12.9564 71.6307 13.0833 71.1109 13.0833C70.5912 13.0833 70.1289 12.9564 69.7242 12.7024C69.3195 12.4485 69.0011 12.0874 68.7689 11.6192C68.5368 11.151 68.4208 10.5955 68.4208 9.95273C68.4208 9.30994 68.5368 8.75445 68.7689 8.28625C69.0011 7.81805 69.3195 7.45698 69.7242 7.20304C70.1289 6.9491 70.5912 6.82213 71.1109 6.82213C71.6307 6.82213 72.093 6.9491 72.4977 7.20304C72.9024 7.45698 73.2208 7.81805 73.4529 8.28625C73.685 8.75445 73.8011 9.30994 73.8011 9.95273ZM73.0869 9.95273C73.0869 9.42501 72.9986 8.97962 72.822 8.61657C72.6475 8.25352 72.4104 7.97875 72.1108 7.79226C71.8132 7.60577 71.4799 7.51253 71.1109 7.51253C70.7419 7.51253 70.4076 7.60577 70.1081 7.79226C69.8105 7.97875 69.5734 8.25352 69.3968 8.61657C69.2223 8.97962 69.135 9.42501 69.135 9.95273C69.135 10.4804 69.2223 10.9258 69.3968 11.2889C69.5734 11.6519 69.8105 11.9267 70.1081 12.1132C70.4076 12.2997 70.7419 12.3929 71.1109 12.3929C71.4799 12.3929 71.8132 12.2997 72.1108 12.1132C72.4104 11.9267 72.6475 11.6519 72.822 11.2889C72.9986 10.9258 73.0869 10.4804 73.0869 9.95273ZM79.8748 6.90545V13H79.1606L75.8396 8.21483H75.78V13H75.042V6.90545H75.7562L79.0892 11.7025H79.1487V6.90545H79.8748Z" fill="white"></path><path d="M101.083 28.7059H102.871V16.9412H101.083V28.7059ZM116.895 21.1765L114.918 26.2588H114.824L112.753 21.1765H110.871L113.977 28.3294L112.189 32.2823H113.977L118.777 21.1765H116.895ZM107.012 27.3882C106.447 27.3882 105.6 27.1059 105.6 26.3529C105.6 25.4118 106.636 25.1294 107.483 25.1294C108.236 25.1294 108.612 25.3176 109.083 25.5059C108.895 26.6353 107.953 27.3882 107.012 27.3882ZM107.2 20.8941C105.883 20.8941 104.565 21.4588 104.094 22.6823L105.695 23.3412C106.071 22.6823 106.636 22.4941 107.295 22.4941C108.236 22.4941 109.083 23.0588 109.177 24V24.0941C108.895 23.9059 108.142 23.6235 107.389 23.6235C105.695 23.6235 104 24.5647 104 26.2588C104 27.8588 105.412 28.8941 106.918 28.8941C108.142 28.8941 108.706 28.3294 109.177 27.7647H109.271V28.7059H110.965V24.1882C110.777 22.1176 109.177 20.8941 107.2 20.8941ZM96.3769 22.5882H93.8357V18.5412H96.3769C97.6945 18.5412 98.4474 19.6706 98.4474 20.5176C98.3533 21.5529 97.6004 22.5882 96.3769 22.5882ZM96.2827 16.9412H92.0474V28.7059H93.8357V24.2823H96.2827C98.2592 24.2823 100.142 22.8706 100.142 20.6118C100.142 18.3529 98.2592 16.9412 96.2827 16.9412ZM73.318 27.3882C72.0945 27.3882 71.0592 26.3529 71.0592 24.9412C71.0592 23.5294 72.0945 22.4941 73.318 22.4941C74.5416 22.4941 75.4827 23.5294 75.4827 24.9412C75.4827 26.3529 74.5416 27.3882 73.318 27.3882ZM75.3886 21.8353C74.918 21.3647 74.1651 20.8941 73.2239 20.8941C71.2474 20.8941 69.3651 22.6823 69.3651 24.9412C69.3651 27.2 71.1533 28.8941 73.2239 28.8941C74.1651 28.8941 74.918 28.4235 75.2945 27.9529H75.3886V28.5176C75.3886 30.0235 74.5416 30.8706 73.2239 30.8706C72.1886 30.8706 71.4357 30.1176 71.2474 29.4588L69.6474 30.2118C70.118 31.247 71.2474 32.5647 73.2239 32.5647C75.2945 32.5647 76.9886 31.3412 76.9886 28.4235V21.2706H75.2945V21.8353H75.3886ZM78.2121 28.7059H80.0004V16.9412H78.2121V28.7059ZM82.6357 24.847C82.6357 23.3412 83.8592 22.4941 84.7063 22.4941C85.3651 22.4941 86.0239 22.8706 86.2121 23.3412L82.6357 24.847ZM88.0945 23.5294C87.718 22.5882 86.7769 20.9882 84.7063 20.9882C82.6357 20.9882 80.9416 22.5882 80.9416 25.0353C80.9416 27.2941 82.6357 29.0823 84.8945 29.0823C86.6827 29.0823 87.8121 27.9529 88.1886 27.2941L86.7769 26.3529C86.3063 27.0118 85.7416 27.4823 84.8004 27.4823C83.8592 27.4823 83.2945 27.1059 82.8239 26.2588L88.1886 24L88.0945 23.5294ZM45.3651 22.2118V23.9059H49.4121C49.318 24.847 48.9416 25.6 48.471 26.0706C48.0004 26.6353 47.0592 27.2941 45.3651 27.2941C42.8239 27.2941 40.9416 25.3176 40.9416 22.7765C40.9416 20.2353 42.918 18.2588 45.3651 18.2588C46.6827 18.2588 47.718 18.8235 48.471 19.4823L49.6945 18.2588C48.6592 17.3176 47.3416 16.5647 45.4592 16.5647C42.071 16.5647 39.1533 19.3882 39.1533 22.7765C39.1533 26.1647 42.071 28.9882 45.4592 28.9882C47.3416 28.9882 48.6592 28.4235 49.7886 27.2C50.918 26.0706 51.2945 24.4706 51.2945 23.2471C51.2945 22.8706 51.2945 22.4941 51.2004 22.2118H45.3651ZM55.8121 27.3882C54.5886 27.3882 53.5533 26.3529 53.5533 24.9412C53.5533 23.5294 54.5886 22.4941 55.8121 22.4941C57.0357 22.4941 58.071 23.4353 58.071 24.9412C58.071 26.3529 57.0357 27.3882 55.8121 27.3882ZM55.8121 20.9882C53.5533 20.9882 51.7651 22.6823 51.7651 25.0353C51.7651 27.2941 53.5533 29.0823 55.8121 29.0823C58.071 29.0823 59.8592 27.3882 59.8592 25.0353C59.8592 22.5882 58.071 20.9882 55.8121 20.9882ZM64.5651 27.3882C63.3416 27.3882 62.3063 26.3529 62.3063 24.9412C62.3063 23.5294 63.3416 22.4941 64.5651 22.4941C65.7886 22.4941 66.8239 23.4353 66.8239 24.9412C66.8239 26.3529 65.7886 27.3882 64.5651 27.3882ZM64.5651 20.9882C62.3063 20.9882 60.518 22.6823 60.518 25.0353C60.518 27.2941 62.3063 29.0823 64.5651 29.0823C66.8239 29.0823 68.6121 27.3882 68.6121 25.0353C68.6121 22.5882 66.8239 20.9882 64.5651 20.9882Z" fill="white"></path><path d="M19.953 18.7294L9.97656 29.3647C10.2589 30.4941 11.2942 31.3412 12.6119 31.3412C13.0824 31.3412 13.553 31.2471 14.0236 30.9647L25.3177 24.4706L19.953 18.7294Z" fill="#EA4435"></path><path d="M30.1176 16.9411L25.2235 14.1176L19.7646 19.0117L25.2235 24.4706L30.0235 21.647C30.8705 21.1764 31.4352 20.3294 31.4352 19.2941C31.5294 18.2588 30.9647 17.4117 30.1176 16.9411Z" fill="#F9BC15"></path><path d="M9.97693 9.22351C9.88281 9.41175 9.88281 9.6941 9.88281 9.88233V28.7059C9.88281 28.9882 9.88281 29.1764 9.97693 29.3647L20.3299 19.0117L9.97693 9.22351Z" fill="#547DBF"></path><path d="M20.0475 19.2941L25.224 14.1177L13.9299 7.62354C13.5534 7.34119 13.0828 7.24707 12.5181 7.24707C11.2946 7.24707 10.1652 8.09413 9.88281 9.22354L20.0475 19.2941Z" fill="#33A852"></path></g><defs><clipPath id="clip0_2018_23135"><rect width="128" height="38.5882" fill="white"></rect></clipPath></defs></svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </footer>
        <div id="ultimo_contenitore">
            <div id="primo_div">
                <div id="uno">
                    <svg class="stockx-icon " focusable="false" viewBox="0 0 53 60" style="fill: var(--chakra-colors-brand-primary, brand-primary);"><title>StockX Logo</title><path d="M30.4985 41.25L52.3257 59.9999V44.9999L34.8738 30.0083L52.3257 15V0L21.8272 26.2288V18.7499L0 0V15L17.4519 29.9916L0 44.9999V59.9999L30.4985 33.7715V41.25Z"></path></svg>
                    <div>
                        <button>
                            <span>
                                Italy
                            </span>
                            <span>
                                |
                            </span>
                            <span>
                                English
                            </span>
                            <span>
                                |
                            </span>
                            <span>
                                € EUR
                            </span>
                        </button>
                    </div>
                </div>
                <div id="due">
                    <ul>
                        <li>
                            <a href="https://x.com/stockx">
                                <svg class="stockx-icon " focusable="false" viewBox="0 0 1200 1227" style="fill: var(--chakra-colors-text-primary, text-primary); color: var(--chakra-colors-text-primary, text-primary);"><g><path fill="currentColor" d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z"></path></g></svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/stockxdotcom">
                                <svg class="stockx-icon " focusable="false" viewBox="0 0 44 44" style="fill: var(--chakra-colors-text-primary, text-primary); color: var(--chakra-colors-text-primary, text-primary);"><g><path fill="currentColor" d="M44,22C44,9.85,34.15,0,22,0S0,9.85,0,22c0,10.98,8.05,20.08,18.56,21.73v-15.37h-5.59v-6.36h5.59v-4.85c0-5.51,3.28-8.56,8.31-8.56,2.41,0,4.92,.43,4.92,.43v5.41h-2.77c-2.73,0-3.59,1.7-3.59,3.44v4.13h6.1l-.98,6.36h-5.13v15.37c10.52-1.65,18.56-10.75,18.56-21.73Z"></path><path d="M30.56,28.36l.98-6.36h-6.1v-4.13c0-1.74,.85-3.44,3.59-3.44h2.77v-5.41s-2.52-.43-4.92-.43c-5.03,0-8.31,3.05-8.31,8.56v4.85h-5.59v6.36h5.59v15.37c1.12,.18,2.27,.27,3.44,.27s2.32-.09,3.44-.27v-15.37h5.13Z" fill="transparent"></path></g></svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/stockx/">
                                <svg class="stockx-icon " focusable="false" viewBox="0 0 44 44" style="fill: var(--chakra-colors-text-primary, text-primary); color: var(--chakra-colors-text-primary, text-primary);"><path d="M13.16,.15c-2.34,.11-3.94,.48-5.34,1.03-1.45,.56-2.67,1.32-3.89,2.54-1.22,1.22-1.97,2.45-2.53,3.9-.54,1.4-.91,3-1.01,5.34-.1,2.34-.13,3.09-.11,9.07s.04,6.72,.15,9.07c.11,2.34,.48,3.94,1.03,5.34,.56,1.45,1.32,2.67,2.54,3.89,1.22,1.22,2.45,1.97,3.9,2.53,1.4,.54,3,.91,5.34,1.01,2.34,.1,3.1,.13,9.07,.11,5.97-.01,6.72-.04,9.07-.15s3.94-.49,5.33-1.03c1.45-.57,2.67-1.32,3.89-2.54s1.97-2.45,2.53-3.9c.54-1.4,.91-3,1.01-5.34,.1-2.35,.13-3.1,.12-9.07-.01-5.97-.04-6.72-.15-9.07s-.48-3.94-1.03-5.34c-.57-1.45-1.32-2.67-2.54-3.89s-2.45-1.97-3.9-2.53c-1.4-.54-3-.91-5.34-1.01S28.2,0,22.22,0s-6.72,.04-9.07,.15m.26,39.77c-2.15-.09-3.31-.45-4.09-.75-1.03-.4-1.76-.87-2.53-1.64s-1.25-1.5-1.65-2.53c-.3-.78-.66-1.94-.76-4.08-.11-2.32-.13-3.01-.14-8.89s0-6.57,.11-8.89c.09-2.14,.45-3.31,.75-4.08,.4-1.03,.87-1.76,1.64-2.53s1.5-1.25,2.53-1.65c.78-.3,1.94-.66,4.08-.76,2.32-.11,3.02-.13,8.89-.14,5.87-.01,6.57,0,8.89,.11,2.14,.09,3.31,.45,4.08,.75,1.03,.4,1.76,.87,2.53,1.64s1.25,1.5,1.65,2.53c.3,.77,.66,1.94,.76,4.08,.11,2.32,.14,3.02,.15,8.89,.01,5.87-.01,6.57-.11,8.89-.09,2.15-.45,3.31-.75,4.09-.4,1.03-.87,1.76-1.64,2.53s-1.5,1.25-2.53,1.65c-.77,.3-1.94,.66-4.08,.77-2.32,.11-3.02,.13-8.89,.14s-6.57-.01-8.89-.11M31.35,10.24c0,1.46,1.19,2.64,2.64,2.64s2.64-1.19,2.64-2.64c0-1.46-1.19-2.64-2.64-2.64,0,0,0,0,0,0-1.46,0-2.64,1.19-2.63,2.64M10.97,22.02c.01,6.24,5.08,11.29,11.32,11.27s11.29-5.08,11.28-11.32-5.08-11.29-11.32-11.27-11.29,5.08-11.27,11.32m3.96,0c0-4.05,3.27-7.34,7.32-7.35,4.05,0,7.34,3.27,7.35,7.32,0,4.05-3.27,7.34-7.32,7.35-4.05,0-7.34-3.27-7.35-7.32h0"></path></svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/stockx">
                                <svg class="stockx-icon " focusable="false" viewBox="0 0 576 512" style="fill: var(--chakra-colors-text-primary, text-primary); color: var(--chakra-colors-text-primary, text-primary);"><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="tre">
                    <ul>
                        <li>
                            <a href="https://stockx.com/terms">
                                Terms
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/privacy">
                                Privacy 
                            </a>
                        </li>
                        <li>
                            <a>
                                Your Privacy Choices
                            </a>
                        </li>
                        <li>
                            <a>
                                ©2025 StockX. All Rights Reserved.
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <ul>
                <li>
                    <a href="https://stockx.com/">
                        English (US)
                    </a>
                </li>
                <li>
                    <a href="https://stockx.com/en-gb">
                        English (UK) 
                    </a>
                </li>
                <li>
                    <a href="https://stockx.com/it-it">
                        Italiano
                    </a>
                </li>
                <li>
                    <a href="https://stockx.com/de-de">
                        Deutsch
                    </a>
                </li>
                <li>
                    <a href="https://stockx.com/fr-fr">
                        Français (FR)
                    </a>
                </li>
                <li>
                    <a href="https://stockx.com/zh-cn">
                        简体中文
                    </a>
                </li>
                <li>
                    <a href="https://stockx.com/zh-tw">
                        繁體中文
                    </a>
                </li>
                <li>
                    <a href="https://stockx.com/ja-jp">
                        日本語
                    </a>
                </li>
                <li>
                    <a href="https://stockx.com/ko-kr">
                        한국어
                    </a>
                </li>
                <li>
                    <a href="https://stockx.com/es-mx">
                        Español (MX)
                    </a>
                </li>
                <li>
                    <a href="https://stockx.com/es-us">
                        Español (US)
                    </a>
                </li>
                <li>
                    <a href="https://stockx.com/es-es">
                        Español (ES)
                    </a>
                </li>
            </ul>
        </div>

        <footer id="footer_hidden">
            <div id="contenitore_footer_hidden">
                <div id="primo_div_hidden">
                    <button class="bottone">
                        <svg class="stockx-icon " focusable="false" viewBox="0 0 35 35"><path d="M17.5 24.0102C21.0954 24.0102 24.01 21.0956 24.01 17.5002C24.01 13.9049 21.0954 10.9902 17.5 10.9902C13.9046 10.9902 10.99 13.9049 10.99 17.5002C10.99 21.0956 13.9046 24.0102 17.5 24.0102Z" fill="currentColor"></path><path d="M18.27 4.90039H16.73V8.54039H18.27V4.90039Z" fill="currentColor"></path><path d="M18.27 26.5293H16.73V30.1693H18.27V26.5293Z" fill="currentColor"></path><path d="M11.8554 6.15383L10.5218 6.92383L12.3418 10.0761L13.6754 9.30607L11.8554 6.15383Z" fill="currentColor"></path><path d="M22.6573 24.9234L21.3237 25.6934L23.1437 28.8456L24.4773 28.0756L22.6573 24.9234Z" fill="currentColor"></path><path d="M6.95072 10.5414L6.18072 11.875L9.33296 13.695L10.103 12.3614L6.95072 10.5414Z" fill="currentColor"></path><path d="M25.6312 21.3656L24.8612 22.6992L28.0134 24.5192L28.7834 23.1856L25.6312 21.3656Z" fill="currentColor"></path><path d="M8.54 16.7305H4.9V18.2705H8.54V16.7305Z" fill="currentColor"></path><path d="M30.17 16.7305H26.53V18.2705H30.17V16.7305Z" fill="currentColor"></path><path d="M9.3058 21.3245L6.15356 23.1445L6.92356 24.4782L10.0758 22.6582L9.3058 21.3245Z" fill="currentColor"></path><path d="M28.0755 10.5218L24.9233 12.3418L25.6933 13.6754L28.8455 11.8554L28.0755 10.5218Z" fill="currentColor"></path><path d="M12.3 24.8614L10.48 28.0137L11.8137 28.7837L13.6337 25.6314L12.3 24.8614Z" fill="currentColor"></path><path d="M23.1248 6.18175L21.3048 9.33398L22.6384 10.104L24.4584 6.95174L23.1248 6.18175Z" fill="currentColor"></path></svg>
                    </button>
                    <div>
                        <button>
                            <span>
                                Italy
                            </span>
                            <span>
                                |
                            </span>
                            <span>
                                English
                            </span>
                            <span>
                                |
                            </span>
                            <span>
                                € EUR
                            </span>
                        </button>
                    </div>
                </div>
                <h2>
                    StockX. Access the Now.
                </h2>
                <div id="secondo_div_hidden">
                    <div id="menu_hidden">
                        <div class="custom_button">
                            <h3>
                                About
                            </h3>
                            <svg class="stockx-icon chakra-icon css-1fzy3ki" focusable="false" viewBox="0 0 50 50"><path fill="currentColor" d="M40.2 35.7999L25 19.6L9.79999 35.7999L7.09999 33.2999L25 14.2L42.9 33.2999L40.2 35.7999Z"></path></svg>
                        </div>
                        <div class="custom_button">
                            <h3>
                                Help
                            </h3>
                            <svg class="stockx-icon chakra-icon css-1fzy3ki" focusable="false" viewBox="0 0 50 50"><path fill="currentColor" d="M40.2 35.7999L25 19.6L9.79999 35.7999L7.09999 33.2999L25 14.2L42.9 33.2999L40.2 35.7999Z"></path></svg>
                        </div>
                        <div class="custom_button">
                            <h3>
                                Sell
                            </h3>
                            <svg class="stockx-icon chakra-icon css-1fzy3ki" focusable="false" viewBox="0 0 50 50"><path fill="currentColor" d="M40.2 35.7999L25 19.6L9.79999 35.7999L7.09999 33.2999L25 14.2L42.9 33.2999L40.2 35.7999Z"></path></svg>
                        </div>
                        <div class="custom_button">
                            <h3>
                                Air Jordan
                            </h3>
                            <svg class="stockx-icon chakra-icon css-1fzy3ki" focusable="false" viewBox="0 0 50 50"><path fill="currentColor" d="M40.2 35.7999L25 19.6L9.79999 35.7999L7.09999 33.2999L25 14.2L42.9 33.2999L40.2 35.7999Z"></path></svg>
                        </div>
                        <div class="custom_button">
                            <h3>
                                Adidas
                            </h3>
                            <svg class="stockx-icon chakra-icon css-1fzy3ki" focusable="false" viewBox="0 0 50 50"><path fill="currentColor" d="M40.2 35.7999L25 19.6L9.79999 35.7999L7.09999 33.2999L25 14.2L42.9 33.2999L40.2 35.7999Z"></path></svg>
                        </div>
                        <div class="custom_button">
                            <h3>
                                New Balance
                            </h3>
                            <svg class="stockx-icon chakra-icon css-1fzy3ki" focusable="false" viewBox="0 0 50 50"><path fill="currentColor" d="M40.2 35.7999L25 19.6L9.79999 35.7999L7.09999 33.2999L25 14.2L42.9 33.2999L40.2 35.7999Z"></path></svg>
                        </div>
                        <div class="custom_button">
                            <h3>
                                Nike
                            </h3>
                            <svg class="stockx-icon chakra-icon css-1fzy3ki" focusable="false" viewBox="0 0 50 50"><path fill="currentColor" d="M40.2 35.7999L25 19.6L9.79999 35.7999L7.09999 33.2999L25 14.2L42.9 33.2999L40.2 35.7999Z"></path></svg>
                        </div>
                        <div class="custom_button">
                            <h3>
                                Pop Mart
                            </h3>
                            <svg class="stockx-icon chakra-icon css-1fzy3ki" focusable="false" viewBox="0 0 50 50"><path fill="currentColor" d="M40.2 35.7999L25 19.6L9.79999 35.7999L7.09999 33.2999L25 14.2L42.9 33.2999L40.2 35.7999Z"></path></svg>
                        </div>
                        <div class="custom_button">
                            <h3>
                                Popular Releases
                            </h3>
                            <svg class="stockx-icon chakra-icon css-1fzy3ki" focusable="false" viewBox="0 0 50 50"><path fill="currentColor" d="M40.2 35.7999L25 19.6L9.79999 35.7999L7.09999 33.2999L25 14.2L42.9 33.2999L40.2 35.7999Z"></path></svg>
                        </div>
                        <div class="custom_button">
                            <h3>
                                Apparel
                            </h3>
                            <svg class="stockx-icon chakra-icon css-1fzy3ki" focusable="false" viewBox="0 0 50 50"><path fill="currentColor" d="M40.2 35.7999L25 19.6L9.79999 35.7999L7.09999 33.2999L25 14.2L42.9 33.2999L40.2 35.7999Z"></path></svg>
                        </div>
                        <div class="custom_button">
                            <h3>
                                Accessories
                            </h3>
                            <svg class="stockx-icon chakra-icon css-1fzy3ki" focusable="false" viewBox="0 0 50 50"><path fill="currentColor" d="M40.2 35.7999L25 19.6L9.79999 35.7999L7.09999 33.2999L25 14.2L42.9 33.2999L40.2 35.7999Z"></path></svg>
                        </div>
                    </div>
                </div>
                <div id="terzo_div_hidden">
                    <svg class="stockx-icon" focusable="false" viewBox="0 0 53 60" style="fill: var(--chakra-colors-brand-primary, brand-primary);"><title>StockX Logo</title><path d="M30.4985 41.25L52.3257 59.9999V44.9999L34.8738 30.0083L52.3257 15V0L21.8272 26.2288V18.7499L0 0V15L17.4519 29.9916L0 44.9999V59.9999L30.4985 33.7715V41.25Z"></path></svg>
                    <div id="app_container">
                        <a class="apple" href="https://apps.apple.com/us/app/stockx-sneakers-and-apparel/id881599819">
                            <svg viewBox="0 0 128 43" focusable="false" class="chakra-icon css-1a9naxn"><g clip-path="url(#clip0_1347_18305)"><path d="M117.807 1.76797e-05H10.1989C9.80663 1.76797e-05 9.41909 1.76798e-05 9.02789 0.00216768C8.70041 0.00431768 8.37554 0.0105634 8.04492 0.0158202C7.32666 0.0243146 6.61008 0.0878197 5.90143 0.205783C5.19377 0.326315 4.50827 0.553552 3.86813 0.879808C3.22877 1.20882 2.64457 1.63635 2.13672 2.14687C1.62621 2.65595 1.20066 3.24439 0.876427 3.88954C0.551304 4.53341 0.325862 5.22338 0.207889 5.93561C0.0887936 6.64694 0.0247074 7.36648 0.0162054 8.08776C0.00627891 8.41735 0.00523064 8.74804 0 9.07768V33.9255C0.00523064 34.2593 0.00627891 34.5827 0.0162054 34.9166C0.02471 35.6378 0.0887962 36.3573 0.207889 37.0686C0.325536 37.7812 0.550991 38.4716 0.876427 39.1157C1.20051 39.7588 1.62612 40.3448 2.13672 40.8511C2.64265 41.3639 3.22722 41.7917 3.86813 42.1182C4.50827 42.4453 5.19369 42.6739 5.90143 42.7963C6.61021 42.9133 7.32671 42.9769 8.04492 42.9864C8.37554 42.9937 8.70041 42.9979 9.02789 42.9979C9.41908 43 9.80665 43 10.1989 43H117.807C118.191 43 118.582 43 118.966 42.9979C119.292 42.9979 119.627 42.9937 119.953 42.9864C120.669 42.9774 121.385 42.9138 122.092 42.7963C122.802 42.6731 123.49 42.4445 124.133 42.1182C124.773 41.7915 125.357 41.3637 125.863 40.8511C126.372 40.3429 126.799 39.7572 127.127 39.1157C127.45 38.4711 127.673 37.7808 127.789 37.0686C127.908 36.3572 127.975 35.6379 127.987 34.9166C127.992 34.5827 127.992 34.2593 127.992 33.9255C128 33.535 128 33.1466 128 32.7497V10.2514C128 9.85768 128 9.46716 127.992 9.07768C127.992 8.74804 127.992 8.41735 127.987 8.08772C127.975 7.36637 127.908 6.647 127.789 5.93557C127.673 5.22375 127.449 4.53383 127.127 3.8895C126.466 2.59635 125.419 1.54375 124.133 0.879712C123.49 0.554253 122.802 0.327076 122.092 0.205687C121.385 0.0872032 120.669 0.023676 119.953 0.0156697C119.627 0.0104237 119.292 0.00412418 118.966 0.00202793C118.582 -0.00012207 118.191 -0.00012207 117.807 -0.00012207V1.76797e-05Z" fill="#A6A6A6"></path><path d="M9.03288 42.0594C8.70697 42.0594 8.38894 42.0552 8.06559 42.0479C7.39575 42.0391 6.72747 41.9805 6.06625 41.8725C5.44968 41.7658 4.8524 41.5673 4.29409 41.2835C3.74091 41.0021 3.23636 40.6331 2.79978 40.1907C2.35687 39.7535 1.98814 39.2464 1.70818 38.6895C1.42513 38.1289 1.22925 37.5281 1.12735 36.908C1.01731 36.2416 0.957773 35.5678 0.949254 34.8923C0.942472 34.6656 0.933594 33.9108 0.933594 33.9108V9.07765C0.933594 9.07765 0.94305 8.33439 0.949307 8.11602C0.957464 7.44166 1.01666 6.76889 1.12637 6.10355C1.22846 5.48168 1.42449 4.87914 1.70769 4.31679C1.98662 3.76028 2.35331 3.25279 2.79354 2.81399C3.23328 2.37103 3.73945 2.00014 4.29357 1.71484C4.85059 1.43199 5.44675 1.23488 6.06206 1.1301C6.72546 1.02106 7.39606 0.962109 8.06822 0.953739L9.0334 0.940613H118.961L119.938 0.954265C120.604 0.962219 121.268 1.02065 121.925 1.12905C122.547 1.23514 123.149 1.43362 123.713 1.71799C124.823 2.29295 125.726 3.20259 126.296 4.31941C126.575 4.87788 126.768 5.47551 126.868 6.092C126.98 6.7628 127.042 7.44086 127.054 8.12075C127.058 8.42519 127.058 8.75221 127.058 9.07765C127.066 9.48078 127.066 9.86448 127.066 10.2513V32.7496C127.066 33.1402 127.066 33.5213 127.058 33.9055C127.058 34.2551 127.058 34.5753 127.053 34.9049C127.041 35.5727 126.98 36.2386 126.871 36.8974C126.771 37.5221 126.576 38.1276 126.293 38.6927C126.011 39.2435 125.644 39.7463 125.207 40.1823C124.77 40.6271 124.264 40.9983 123.71 41.2815C123.148 41.5674 122.546 41.7667 121.925 41.8725C121.264 41.9811 120.596 42.0397 119.926 42.0479C119.613 42.0552 119.285 42.0594 118.966 42.0594L117.807 42.0615L9.03288 42.0594Z" fill="black"></path><path d="M26.4941 21.8232C26.5056 20.926 26.7428 20.0462 27.1835 19.2658C27.6242 18.4854 28.2542 17.8297 29.0148 17.3598C28.5316 16.6662 27.8942 16.0955 27.1531 15.6928C26.412 15.2902 25.5877 15.0668 24.7457 15.0403C22.9494 14.8508 21.2081 16.1205 20.2928 16.1205C19.3597 16.1205 17.9505 15.0591 16.4329 15.0905C15.4513 15.1223 14.4946 15.4092 13.6562 15.9231C12.8177 16.437 12.126 17.1605 11.6484 18.0229C9.57966 21.6225 11.1227 26.9126 13.1044 29.8222C14.0959 31.247 15.2546 32.8384 16.7708 32.782C18.2545 32.7202 18.8086 31.8312 20.5996 31.8312C22.3739 31.8312 22.8938 32.782 24.4407 32.7461C26.0328 32.7202 27.0358 31.315 27.9925 29.8768C28.7049 28.8616 29.2531 27.7396 29.6167 26.5524C28.6918 26.1592 27.9025 25.5011 27.3472 24.6601C26.7919 23.8192 26.4952 22.8325 26.4941 21.8232Z" fill="white"></path><path d="M23.5723 13.1267C24.4404 12.0794 24.868 10.7333 24.7645 9.3743C23.4383 9.51429 22.2132 10.1513 21.3335 11.1584C20.9033 11.6504 20.5739 12.2227 20.3639 12.8428C20.154 13.4628 20.0678 14.1183 20.1101 14.7719C20.7734 14.7787 21.4297 14.6342 22.0294 14.3493C22.6291 14.0643 23.1567 13.6463 23.5723 13.1267Z" fill="white"></path><path d="M45.2488 29.1751H40.1856L38.9697 32.7833H36.8252L41.6209 19.434H43.849L48.6447 32.7833H46.4636L45.2488 29.1751ZM40.71 27.5101H44.7234L42.7449 21.6543H42.6896L40.71 27.5101Z" fill="white"></path><path d="M59.0023 27.9175C59.0023 30.942 57.3916 32.8851 54.9608 32.8851C54.345 32.9175 53.7327 32.775 53.1938 32.4738C52.6549 32.1727 52.2113 31.7251 51.9137 31.1823H51.8677V36.003H49.8799V23.0506H51.8041V24.6694H51.8406C52.1518 24.1292 52.6029 23.684 53.1459 23.381C53.6889 23.078 54.3035 22.9286 54.9242 22.9487C57.3821 22.9487 59.0023 24.9014 59.0023 27.9175ZM56.9591 27.9175C56.9591 25.947 55.9458 24.6515 54.3999 24.6515C52.881 24.6515 51.8594 25.9743 51.8594 27.9175C51.8594 29.8785 52.881 31.1918 54.3999 31.1918C55.9459 31.1918 56.9591 29.9058 56.9591 27.9175Z" fill="white"></path><path d="M69.6605 27.9175C69.6605 30.9419 68.0498 32.8851 65.619 32.8851C65.0033 32.9175 64.3909 32.7749 63.852 32.4738C63.3131 32.1726 62.8695 31.7251 62.5719 31.1823H62.5259V36.003H60.5381V23.0505H62.4622V24.6693H62.4988C62.81 24.1292 63.2611 23.6839 63.8041 23.381C64.3471 23.078 64.9617 22.9286 65.5824 22.9487C68.0404 22.9487 69.6605 24.9014 69.6605 27.9175ZM67.6173 27.9175C67.6173 25.947 66.604 24.6515 65.0581 24.6515C63.5392 24.6515 62.5176 25.9743 62.5176 27.9175C62.5176 29.8785 63.5392 31.1918 65.0581 31.1918C66.6041 31.1918 67.6173 29.9058 67.6173 27.9175H67.6173Z" fill="white"></path><path d="M76.7058 29.0638C76.8531 30.3876 78.1327 31.2568 79.8814 31.2568C81.5569 31.2568 82.7623 30.3876 82.7623 29.194C82.7623 28.1578 82.0353 27.5374 80.3138 27.1122L78.5923 26.6954C76.1532 26.1033 75.0209 24.9569 75.0209 23.0967C75.0209 20.7934 77.0181 19.2114 79.8542 19.2114C82.661 19.2114 84.5851 20.7934 84.6499 23.0967H82.6432C82.5231 21.7645 81.4273 20.9603 79.826 20.9603C78.2246 20.9603 77.1288 21.7739 77.1288 22.9581C77.1288 23.9019 77.8287 24.4572 79.5408 24.8824L81.0043 25.2435C83.7296 25.8912 84.8619 26.9915 84.8619 28.9441C84.8619 31.4416 82.8824 33.0058 79.734 33.0058C76.7883 33.0058 74.7994 31.4783 74.6709 29.0637L76.7058 29.0638Z" fill="white"></path><path d="M89.1515 20.7473V23.0506H90.9931V24.6326H89.1515V29.9982C89.1515 30.8317 89.5202 31.2201 90.3298 31.2201C90.5484 31.2163 90.7667 31.2009 90.9837 31.1739V32.7465C90.6197 32.8149 90.2497 32.8458 89.8795 32.8389C87.9188 32.8389 87.1542 32.0988 87.1542 30.2112V24.6326H85.7461V23.0506H87.1542V20.7473H89.1515Z" fill="white"></path><path d="M92.0605 27.9174C92.0605 24.8552 93.8551 22.9309 96.6536 22.9309C99.4615 22.9309 101.248 24.8551 101.248 27.9174C101.248 30.9881 99.4709 32.904 96.6536 32.904C93.8373 32.904 92.0605 30.9881 92.0605 27.9174ZM99.2223 27.9174C99.2223 25.8168 98.2644 24.577 96.6536 24.577C95.0428 24.577 94.086 25.8262 94.086 27.9174C94.086 30.0265 95.0428 31.2569 96.6536 31.2569C98.2644 31.2569 99.2222 30.0265 99.2222 27.9174H99.2223Z" fill="white"></path><path d="M102.886 23.0506H104.782V24.7071H104.828C104.956 24.1898 105.258 23.7325 105.682 23.4123C106.106 23.0921 106.627 22.9284 107.157 22.9487C107.386 22.9479 107.615 22.9729 107.838 23.0233V24.8919C107.549 24.8031 107.247 24.7623 106.945 24.7712C106.656 24.7594 106.368 24.8106 106.101 24.9212C105.834 25.0318 105.594 25.1992 105.397 25.4119C105.2 25.6247 105.051 25.8777 104.961 26.1536C104.871 26.4295 104.841 26.7218 104.874 27.0104V32.7833H102.886L102.886 23.0506Z" fill="white"></path><path d="M117.003 29.9247C116.736 31.6915 115.024 32.904 112.833 32.904C110.016 32.904 108.268 31.007 108.268 27.9636C108.268 24.9108 110.026 22.9309 112.75 22.9309C115.429 22.9309 117.114 24.7806 117.114 27.7316V28.4161H110.274V28.5368C110.243 28.895 110.287 29.2559 110.405 29.5954C110.523 29.9349 110.711 30.2454 110.958 30.5061C111.204 30.7668 111.503 30.9719 111.834 31.1077C112.166 31.2435 112.522 31.3068 112.879 31.2936C113.349 31.3378 113.821 31.2285 114.224 30.9819C114.627 30.7352 114.939 30.3644 115.116 29.9247L117.003 29.9247ZM110.284 27.0199H115.125C115.143 26.6978 115.095 26.3755 114.983 26.0732C114.871 25.7709 114.698 25.4951 114.475 25.2632C114.252 25.0312 113.983 24.8481 113.686 24.7253C113.39 24.6026 113.071 24.5427 112.75 24.5497C112.426 24.5477 112.105 24.6102 111.806 24.7336C111.506 24.8569 111.234 25.0387 111.005 25.2683C110.775 25.498 110.594 25.771 110.47 26.0716C110.346 26.3723 110.283 26.6945 110.284 27.0199V27.0199Z" fill="white"></path><path d="M40.4617 9.38582C40.8784 9.35576 41.2966 9.41904 41.6861 9.57108C42.0756 9.72312 42.4266 9.96013 42.7139 10.265C43.0012 10.5699 43.2176 10.9351 43.3474 11.3342C43.4773 11.7333 43.5174 12.1564 43.4649 12.573C43.4649 14.6222 42.3628 15.8002 40.4617 15.8002H38.1562V9.38582H40.4617ZM39.1476 14.893H40.3509C40.6487 14.9109 40.9467 14.8619 41.2233 14.7494C41.4998 14.6369 41.748 14.4639 41.9496 14.2429C42.1512 14.022 42.3013 13.7586 42.3888 13.472C42.4764 13.1853 42.4993 12.8827 42.4558 12.5861C42.4961 12.2906 42.4709 11.9899 42.382 11.7054C42.2931 11.4209 42.1427 11.1596 41.9415 10.9404C41.7403 10.7212 41.4934 10.5494 41.2184 10.4373C40.9434 10.3253 40.6472 10.2757 40.3509 10.2923H39.1476V14.893Z" fill="white"></path><path d="M44.585 13.3777C44.5547 13.0596 44.5909 12.7386 44.6913 12.4354C44.7916 12.1321 44.954 11.8534 45.1678 11.6169C45.3817 11.3804 45.6424 11.1914 45.9332 11.0621C46.224 10.9328 46.5384 10.8661 46.8564 10.8661C47.1744 10.8661 47.4889 10.9328 47.7797 11.0621C48.0704 11.1914 48.3311 11.3804 48.545 11.6169C48.7589 11.8534 48.9212 12.1321 49.0216 12.4354C49.122 12.7386 49.1582 13.0596 49.1279 13.3777C49.1587 13.6961 49.123 14.0175 49.0229 14.3212C48.9227 14.6249 48.7605 14.9042 48.5466 15.1412C48.3327 15.3781 48.0718 15.5675 47.7807 15.6971C47.4896 15.8266 47.1748 15.8936 46.8564 15.8936C46.5381 15.8936 46.2232 15.8266 45.9322 15.6971C45.6411 15.5675 45.3802 15.3781 45.1663 15.1412C44.9523 14.9042 44.7901 14.6249 44.69 14.3212C44.5899 14.0175 44.5541 13.6961 44.585 13.3777ZM48.1501 13.3777C48.1501 12.3284 47.6811 11.7148 46.858 11.7148C46.0317 11.7148 45.5669 12.3284 45.5669 13.3777C45.5669 14.4354 46.0318 15.0442 46.858 15.0442C47.6811 15.0442 48.1502 14.4311 48.1502 13.3777H48.1501Z" fill="white"></path><path d="M55.166 15.8001H54.1799L53.1844 12.2349H53.1092L52.1178 15.8001H51.1412L49.8135 10.9594H50.7776L51.6405 14.6531H51.7115L52.7018 10.9594H53.6137L54.604 14.6531H54.6792L55.5378 10.9594H56.4884L55.166 15.8001Z" fill="white"></path><path d="M57.6055 10.9594H58.5205V11.7284H58.5916C58.7121 11.4522 58.9153 11.2207 59.173 11.0661C59.4306 10.9115 59.7298 10.8415 60.0289 10.866C60.2633 10.8483 60.4986 10.8838 60.7175 10.9699C60.9363 11.056 61.1331 11.1905 61.2932 11.3634C61.4533 11.5363 61.5726 11.7432 61.6424 11.9687C61.7121 12.1943 61.7305 12.4327 61.6961 12.6664V15.8H60.7455V12.9063C60.7455 12.1284 60.4092 11.7415 59.7061 11.7415C59.547 11.7341 59.3882 11.7613 59.2405 11.8213C59.0928 11.8813 58.9598 11.9727 58.8506 12.0892C58.7413 12.2057 58.6585 12.3446 58.6076 12.4963C58.5568 12.6481 58.5392 12.809 58.556 12.9682V15.8001H57.6055L57.6055 10.9594Z" fill="white"></path><path d="M63.2109 9.06976H64.1615V15.8001H63.2109V9.06976Z" fill="white"></path><path d="M65.4824 13.3777C65.4521 13.0595 65.4884 12.7386 65.5888 12.4353C65.6892 12.1321 65.8515 11.8533 66.0654 11.6168C66.2793 11.3803 66.54 11.1914 66.8308 11.0621C67.1216 10.9328 67.4361 10.866 67.7541 10.866C68.0721 10.866 68.3866 10.9328 68.6774 11.0621C68.9682 11.1914 69.2289 11.3803 69.4428 11.6168C69.6567 11.8533 69.8191 12.1321 69.9195 12.4353C70.0199 12.7386 70.0561 13.0595 70.0258 13.3777C70.0567 13.6961 70.0209 14.0175 69.9207 14.3212C69.8206 14.6249 69.6583 14.9042 69.4444 15.1412C69.2304 15.3781 68.9695 15.5675 68.6784 15.697C68.3873 15.8266 68.0725 15.8935 67.7541 15.8935C67.4358 15.8935 67.1209 15.8266 66.8298 15.697C66.5387 15.5675 66.2778 15.3781 66.0639 15.1412C65.8499 14.9042 65.6877 14.6249 65.5875 14.3212C65.4874 14.0175 65.4516 13.6961 65.4824 13.3777ZM69.0476 13.3777C69.0476 12.3284 68.5786 11.7148 67.7554 11.7148C66.9292 11.7148 66.4644 12.3284 66.4644 13.3777C66.4644 14.4354 66.9292 15.0442 67.7554 15.0442C68.5786 15.0442 69.0476 14.4311 69.0476 13.3777H69.0476Z" fill="white"></path><path d="M71.0273 14.4311C71.0273 13.5598 71.6729 13.0575 72.8188 12.9861L74.1235 12.9105V12.4927C74.1235 11.9814 73.7872 11.6927 73.1374 11.6927C72.6068 11.6927 72.2391 11.8885 72.1336 12.2307H71.2133C71.3104 11.3993 72.0887 10.866 73.1813 10.866C74.3888 10.866 75.0699 11.4701 75.0699 12.4927V15.8001H74.1548V15.1198H74.0796C73.927 15.3638 73.7126 15.5627 73.4584 15.6963C73.2043 15.8298 72.9194 15.8931 72.6329 15.8798C72.4307 15.901 72.2263 15.8793 72.033 15.8162C71.8396 15.7531 71.6616 15.65 71.5103 15.5135C71.359 15.377 71.2379 15.2101 71.1547 15.0237C71.0715 14.8373 71.0281 14.6354 71.0273 14.4311ZM74.1235 14.0175V13.6128L72.9473 13.6884C72.284 13.733 71.9831 13.9598 71.9831 14.3865C71.9831 14.8222 72.3592 15.0757 72.8763 15.0757C73.0278 15.0911 73.1809 15.0757 73.3263 15.0305C73.4718 14.9852 73.6068 14.911 73.7231 14.8123C73.8395 14.7136 73.9349 14.5923 74.0037 14.4558C74.0725 14.3193 74.1132 14.1702 74.1235 14.0175Z" fill="white"></path><path d="M76.3184 13.3777C76.3184 11.8481 77.1008 10.8791 78.3177 10.8791C78.6187 10.8652 78.9175 10.9376 79.179 11.088C79.4406 11.2384 79.6542 11.4605 79.7948 11.7284H79.8658V9.06976H80.8164V15.8001H79.9055V15.0353H79.8303C79.6788 15.3013 79.4578 15.5207 79.1912 15.6695C78.9246 15.8184 78.6225 15.8911 78.3177 15.8798C77.0924 15.8799 76.3184 14.9109 76.3184 13.3777ZM77.3003 13.3777C77.3003 14.4044 77.7819 15.0222 78.5873 15.0222C79.3884 15.0222 79.8836 14.3955 79.8836 13.3819C79.8836 12.373 79.3832 11.7373 78.5873 11.7373C77.7871 11.7373 77.3003 12.3593 77.3003 13.3777H77.3003Z" fill="white"></path><path d="M84.75 13.3777C84.7197 13.0596 84.7559 12.7386 84.8563 12.4354C84.9567 12.1321 85.119 11.8534 85.3329 11.6169C85.5468 11.3804 85.8074 11.1914 86.0982 11.0621C86.389 10.9328 86.7035 10.8661 87.0215 10.8661C87.3394 10.8661 87.6539 10.9328 87.9447 11.0621C88.2355 11.1914 88.4962 11.3804 88.71 11.6169C88.9239 11.8534 89.0862 12.1321 89.1866 12.4354C89.287 12.7386 89.3232 13.0596 89.2929 13.3777C89.3238 13.6961 89.288 14.0175 89.1879 14.3212C89.0878 14.6249 88.9255 14.9042 88.7116 15.1412C88.4977 15.3781 88.2368 15.5675 87.9457 15.6971C87.6547 15.8266 87.3398 15.8936 87.0215 15.8936C86.7031 15.8936 86.3883 15.8266 86.0972 15.6971C85.8061 15.5675 85.5452 15.3781 85.3313 15.1412C85.1174 14.9042 84.9551 14.6249 84.855 14.3212C84.7549 14.0175 84.7191 13.6961 84.75 13.3777ZM88.3152 13.3777C88.3152 12.3284 87.8462 11.7148 87.023 11.7148C86.1968 11.7148 85.732 12.3284 85.732 13.3777C85.732 14.4354 86.1968 15.0442 87.023 15.0442C87.8462 15.0442 88.3152 14.4311 88.3152 13.3777Z" fill="white"></path><path d="M90.5684 10.9594H91.4834V11.7284H91.5545C91.675 11.4522 91.8782 11.2207 92.1358 11.0661C92.3935 10.9115 92.6927 10.8415 92.9918 10.866C93.2262 10.8483 93.4615 10.8838 93.6804 10.9699C93.8992 11.056 94.096 11.1905 94.2561 11.3634C94.4162 11.5363 94.5355 11.7432 94.6053 11.9687C94.675 12.1943 94.6934 12.4327 94.659 12.6664V15.8H93.7084V12.9063C93.7084 12.1284 93.3721 11.7415 92.669 11.7415C92.5099 11.7341 92.3511 11.7613 92.2034 11.8213C92.0557 11.8813 91.9227 11.9727 91.8135 12.0892C91.7042 12.2057 91.6214 12.3446 91.5705 12.4963C91.5197 12.6481 91.5021 12.809 91.5189 12.9682V15.8001H90.5684V10.9594Z" fill="white"></path><path d="M100.03 9.75424V10.9815H101.073V11.7861H100.03V14.2752C100.03 14.7823 100.238 15.0043 100.711 15.0043C100.832 15.0039 100.953 14.9966 101.073 14.9823V15.778C100.903 15.8087 100.73 15.825 100.556 15.8268C99.4991 15.8268 99.0781 15.4531 99.0781 14.5198V11.7861H98.3135V10.9814H99.0781V9.75424H100.03Z" fill="white"></path><path d="M102.372 9.06976H103.314V11.7373H103.389C103.516 11.4586 103.725 11.2257 103.987 11.0705C104.25 10.9154 104.554 10.8454 104.858 10.8702C105.091 10.8574 105.324 10.8966 105.541 10.9847C105.757 11.0729 105.951 11.208 106.11 11.3804C106.268 11.5528 106.387 11.7581 106.457 11.9819C106.528 12.2056 106.548 12.4422 106.517 12.6748V15.8001H105.565V12.9105C105.565 12.1373 105.207 11.7457 104.535 11.7457C104.372 11.7322 104.208 11.7548 104.054 11.8118C103.9 11.8689 103.761 11.959 103.645 12.0759C103.53 12.1928 103.441 12.3336 103.385 12.4886C103.33 12.6435 103.308 12.8088 103.323 12.9729V15.8H102.372L102.372 9.06976Z" fill="white"></path><path d="M112.059 14.4931C111.93 14.9355 111.65 15.3181 111.269 15.5742C110.887 15.8302 110.428 15.9432 109.972 15.8935C109.655 15.9019 109.339 15.8408 109.048 15.7145C108.756 15.5881 108.496 15.3996 108.284 15.1618C108.072 14.9241 107.915 14.6429 107.822 14.3378C107.729 14.0327 107.704 13.711 107.747 13.395C107.705 13.078 107.731 12.7555 107.823 12.4495C107.916 12.1435 108.073 11.861 108.283 11.6212C108.494 11.3814 108.753 11.1899 109.044 11.0596C109.335 10.9293 109.65 10.8633 109.968 10.866C111.308 10.866 112.117 11.7862 112.117 13.3062V13.6396H108.715V13.6931C108.701 13.8708 108.723 14.0496 108.781 14.2181C108.839 14.3866 108.931 14.5411 109.052 14.6716C109.172 14.8022 109.319 14.906 109.482 14.9763C109.645 15.0466 109.821 15.0818 109.998 15.0799C110.226 15.1073 110.456 15.0662 110.66 14.9617C110.864 14.8572 111.033 14.694 111.144 14.493L112.059 14.4931ZM108.715 12.9331H111.148C111.16 12.7706 111.138 12.6074 111.084 12.454C111.029 12.3006 110.943 12.1603 110.832 12.0422C110.72 11.9241 110.585 11.8308 110.435 11.7682C110.286 11.7057 110.125 11.6753 109.963 11.6791C109.798 11.677 109.635 11.708 109.483 11.7703C109.331 11.8326 109.192 11.9249 109.076 12.0418C108.96 12.1586 108.868 12.2977 108.806 12.4508C108.744 12.6038 108.713 12.7678 108.715 12.9331H108.715Z" fill="white"></path></g><defs><clipPath id="clip0_1347_18305"><rect width="128" height="43" fill="white"></rect></clipPath></defs></svg>
                        </a>
                        <a class="android" href="https://play.google.com/store/apps/details?id=com.stockx.stockx&hl=en_US">
                            <svg viewBox="0 0 128 39" focusable="false" class="chakra-icon css-1e4lz4u"><g clip-path="url(#clip0_2018_23135)"><mask id="mask0_2018_23135" maskUnits="userSpaceOnUse" x="0" y="0" width="128" height="39" style="mask-type: luminance;"><path d="M127.53 0.470581H0.470703V38.1176H127.53V0.470581Z" fill="white"></path></mask><g mask="url(#mask0_2018_23135)"><path d="M122.824 38.1176H5.17659C2.63541 38.1176 0.470703 36.0471 0.470703 33.4118V5.17646C0.470703 2.54117 2.54129 0.470581 5.17659 0.470581H122.824C125.459 0.470581 127.53 2.54117 127.53 5.17646V33.4118C127.53 36.0471 125.365 38.1176 122.824 38.1176Z" fill="black"></path></g><mask id="mask1_2018_23135" maskUnits="userSpaceOnUse" x="0" y="0" width="128" height="39" style="mask-type: luminance;"><path d="M127.53 0.470581H0.470703V38.1176H127.53V0.470581Z" fill="white"></path></mask><g mask="url(#mask1_2018_23135)"><path d="M122.824 0.470581H5.17659C2.63541 0.470581 0.470703 2.54117 0.470703 5.17646V33.4118C0.470703 36.0471 2.54129 38.1176 5.17659 38.1176H122.824C125.459 38.1176 127.53 36.0471 127.53 33.4118V5.17646C127.53 2.63529 125.365 0.470581 122.824 0.470581ZM122.824 1.22352C124.988 1.22352 126.777 3.01176 126.777 5.17646V33.4118C126.777 35.5765 124.988 37.3647 122.824 37.3647H5.17659C3.01188 37.3647 1.22364 35.5765 1.22364 33.4118V5.17646C1.22364 3.01176 3.01188 1.22352 5.17659 1.22352H122.824Z" fill="#A6A5A5"></path></g><path d="M43.9042 8.81C43.8387 8.60963 43.7524 8.43008 43.6453 8.27137C43.5402 8.11067 43.4142 7.97379 43.2674 7.8607C43.1225 7.74762 42.9579 7.66132 42.7734 7.6018C42.5889 7.54229 42.3865 7.51253 42.1663 7.51253C41.8052 7.51253 41.4769 7.60577 41.1813 7.79226C40.8857 7.97875 40.6506 8.25352 40.476 8.61657C40.3014 8.97962 40.2141 9.42501 40.2141 9.95273C40.2141 10.4804 40.3024 10.9258 40.479 11.2889C40.6556 11.6519 40.8946 11.9267 41.1962 12.1132C41.4977 12.2997 41.837 12.3929 42.2139 12.3929C42.5631 12.3929 42.8706 12.3185 43.1364 12.1697C43.4043 12.019 43.6126 11.8067 43.7614 11.5329C43.9121 11.2571 43.9875 10.9328 43.9875 10.5598L44.2137 10.6074H42.3806V9.95273H44.7017V10.6074C44.7017 11.1093 44.5946 11.5458 44.3803 11.9168C44.1681 12.2878 43.8744 12.5754 43.4995 12.7798C43.1265 12.9821 42.698 13.0833 42.2139 13.0833C41.6743 13.0833 41.2001 12.9564 40.7915 12.7024C40.3848 12.4485 40.0673 12.0874 39.8392 11.6192C39.613 11.151 39.4999 10.5955 39.4999 9.95273C39.4999 9.47064 39.5644 9.03716 39.6934 8.65228C39.8243 8.26542 40.0088 7.93609 40.2469 7.6643C40.485 7.3925 40.7667 7.18419 41.092 7.03937C41.4174 6.89454 41.7755 6.82213 42.1663 6.82213C42.4877 6.82213 42.7873 6.87074 43.065 6.96795C43.3447 7.06317 43.5937 7.19907 43.812 7.37564C44.0322 7.55022 44.2157 7.75952 44.3625 8.00354C44.5093 8.24558 44.6105 8.5144 44.666 8.81H43.9042ZM45.9657 13V6.90545H49.6439V7.56014H46.7037V9.61943H49.4534V10.2741H46.7037V12.3453H49.6915V13H45.9657ZM50.6408 7.56014V6.90545H55.2117V7.56014H53.2953V13H52.5572V7.56014H50.6408ZM59.4456 6.90545V13H58.7076V6.90545H59.4456ZM60.592 7.56014V6.90545H65.1629V7.56014H63.2465V13H62.5085V7.56014H60.592ZM73.8011 9.95273C73.8011 10.5955 73.685 11.151 73.4529 11.6192C73.2208 12.0874 72.9024 12.4485 72.4977 12.7024C72.093 12.9564 71.6307 13.0833 71.1109 13.0833C70.5912 13.0833 70.1289 12.9564 69.7242 12.7024C69.3195 12.4485 69.0011 12.0874 68.7689 11.6192C68.5368 11.151 68.4208 10.5955 68.4208 9.95273C68.4208 9.30994 68.5368 8.75445 68.7689 8.28625C69.0011 7.81805 69.3195 7.45698 69.7242 7.20304C70.1289 6.9491 70.5912 6.82213 71.1109 6.82213C71.6307 6.82213 72.093 6.9491 72.4977 7.20304C72.9024 7.45698 73.2208 7.81805 73.4529 8.28625C73.685 8.75445 73.8011 9.30994 73.8011 9.95273ZM73.0869 9.95273C73.0869 9.42501 72.9986 8.97962 72.822 8.61657C72.6475 8.25352 72.4104 7.97875 72.1108 7.79226C71.8132 7.60577 71.4799 7.51253 71.1109 7.51253C70.7419 7.51253 70.4076 7.60577 70.1081 7.79226C69.8105 7.97875 69.5734 8.25352 69.3968 8.61657C69.2223 8.97962 69.135 9.42501 69.135 9.95273C69.135 10.4804 69.2223 10.9258 69.3968 11.2889C69.5734 11.6519 69.8105 11.9267 70.1081 12.1132C70.4076 12.2997 70.7419 12.3929 71.1109 12.3929C71.4799 12.3929 71.8132 12.2997 72.1108 12.1132C72.4104 11.9267 72.6475 11.6519 72.822 11.2889C72.9986 10.9258 73.0869 10.4804 73.0869 9.95273ZM79.8748 6.90545V13H79.1606L75.8396 8.21483H75.78V13H75.042V6.90545H75.7562L79.0892 11.7025H79.1487V6.90545H79.8748Z" fill="white"></path><path d="M101.083 28.7059H102.871V16.9412H101.083V28.7059ZM116.895 21.1765L114.918 26.2588H114.824L112.753 21.1765H110.871L113.977 28.3294L112.189 32.2823H113.977L118.777 21.1765H116.895ZM107.012 27.3882C106.447 27.3882 105.6 27.1059 105.6 26.3529C105.6 25.4118 106.636 25.1294 107.483 25.1294C108.236 25.1294 108.612 25.3176 109.083 25.5059C108.895 26.6353 107.953 27.3882 107.012 27.3882ZM107.2 20.8941C105.883 20.8941 104.565 21.4588 104.094 22.6823L105.695 23.3412C106.071 22.6823 106.636 22.4941 107.295 22.4941C108.236 22.4941 109.083 23.0588 109.177 24V24.0941C108.895 23.9059 108.142 23.6235 107.389 23.6235C105.695 23.6235 104 24.5647 104 26.2588C104 27.8588 105.412 28.8941 106.918 28.8941C108.142 28.8941 108.706 28.3294 109.177 27.7647H109.271V28.7059H110.965V24.1882C110.777 22.1176 109.177 20.8941 107.2 20.8941ZM96.3769 22.5882H93.8357V18.5412H96.3769C97.6945 18.5412 98.4474 19.6706 98.4474 20.5176C98.3533 21.5529 97.6004 22.5882 96.3769 22.5882ZM96.2827 16.9412H92.0474V28.7059H93.8357V24.2823H96.2827C98.2592 24.2823 100.142 22.8706 100.142 20.6118C100.142 18.3529 98.2592 16.9412 96.2827 16.9412ZM73.318 27.3882C72.0945 27.3882 71.0592 26.3529 71.0592 24.9412C71.0592 23.5294 72.0945 22.4941 73.318 22.4941C74.5416 22.4941 75.4827 23.5294 75.4827 24.9412C75.4827 26.3529 74.5416 27.3882 73.318 27.3882ZM75.3886 21.8353C74.918 21.3647 74.1651 20.8941 73.2239 20.8941C71.2474 20.8941 69.3651 22.6823 69.3651 24.9412C69.3651 27.2 71.1533 28.8941 73.2239 28.8941C74.1651 28.8941 74.918 28.4235 75.2945 27.9529H75.3886V28.5176C75.3886 30.0235 74.5416 30.8706 73.2239 30.8706C72.1886 30.8706 71.4357 30.1176 71.2474 29.4588L69.6474 30.2118C70.118 31.247 71.2474 32.5647 73.2239 32.5647C75.2945 32.5647 76.9886 31.3412 76.9886 28.4235V21.2706H75.2945V21.8353H75.3886ZM78.2121 28.7059H80.0004V16.9412H78.2121V28.7059ZM82.6357 24.847C82.6357 23.3412 83.8592 22.4941 84.7063 22.4941C85.3651 22.4941 86.0239 22.8706 86.2121 23.3412L82.6357 24.847ZM88.0945 23.5294C87.718 22.5882 86.7769 20.9882 84.7063 20.9882C82.6357 20.9882 80.9416 22.5882 80.9416 25.0353C80.9416 27.2941 82.6357 29.0823 84.8945 29.0823C86.6827 29.0823 87.8121 27.9529 88.1886 27.2941L86.7769 26.3529C86.3063 27.0118 85.7416 27.4823 84.8004 27.4823C83.8592 27.4823 83.2945 27.1059 82.8239 26.2588L88.1886 24L88.0945 23.5294ZM45.3651 22.2118V23.9059H49.4121C49.318 24.847 48.9416 25.6 48.471 26.0706C48.0004 26.6353 47.0592 27.2941 45.3651 27.2941C42.8239 27.2941 40.9416 25.3176 40.9416 22.7765C40.9416 20.2353 42.918 18.2588 45.3651 18.2588C46.6827 18.2588 47.718 18.8235 48.471 19.4823L49.6945 18.2588C48.6592 17.3176 47.3416 16.5647 45.4592 16.5647C42.071 16.5647 39.1533 19.3882 39.1533 22.7765C39.1533 26.1647 42.071 28.9882 45.4592 28.9882C47.3416 28.9882 48.6592 28.4235 49.7886 27.2C50.918 26.0706 51.2945 24.4706 51.2945 23.2471C51.2945 22.8706 51.2945 22.4941 51.2004 22.2118H45.3651ZM55.8121 27.3882C54.5886 27.3882 53.5533 26.3529 53.5533 24.9412C53.5533 23.5294 54.5886 22.4941 55.8121 22.4941C57.0357 22.4941 58.071 23.4353 58.071 24.9412C58.071 26.3529 57.0357 27.3882 55.8121 27.3882ZM55.8121 20.9882C53.5533 20.9882 51.7651 22.6823 51.7651 25.0353C51.7651 27.2941 53.5533 29.0823 55.8121 29.0823C58.071 29.0823 59.8592 27.3882 59.8592 25.0353C59.8592 22.5882 58.071 20.9882 55.8121 20.9882ZM64.5651 27.3882C63.3416 27.3882 62.3063 26.3529 62.3063 24.9412C62.3063 23.5294 63.3416 22.4941 64.5651 22.4941C65.7886 22.4941 66.8239 23.4353 66.8239 24.9412C66.8239 26.3529 65.7886 27.3882 64.5651 27.3882ZM64.5651 20.9882C62.3063 20.9882 60.518 22.6823 60.518 25.0353C60.518 27.2941 62.3063 29.0823 64.5651 29.0823C66.8239 29.0823 68.6121 27.3882 68.6121 25.0353C68.6121 22.5882 66.8239 20.9882 64.5651 20.9882Z" fill="white"></path><path d="M19.953 18.7294L9.97656 29.3647C10.2589 30.4941 11.2942 31.3412 12.6119 31.3412C13.0824 31.3412 13.553 31.2471 14.0236 30.9647L25.3177 24.4706L19.953 18.7294Z" fill="#EA4435"></path><path d="M30.1176 16.9411L25.2235 14.1176L19.7646 19.0117L25.2235 24.4706L30.0235 21.647C30.8705 21.1764 31.4352 20.3294 31.4352 19.2941C31.5294 18.2588 30.9647 17.4117 30.1176 16.9411Z" fill="#F9BC15"></path><path d="M9.97693 9.22351C9.88281 9.41175 9.88281 9.6941 9.88281 9.88233V28.7059C9.88281 28.9882 9.88281 29.1764 9.97693 29.3647L20.3299 19.0117L9.97693 9.22351Z" fill="#547DBF"></path><path d="M20.0475 19.2941L25.224 14.1177L13.9299 7.62354C13.5534 7.34119 13.0828 7.24707 12.5181 7.24707C11.2946 7.24707 10.1652 8.09413 9.88281 9.22354L20.0475 19.2941Z" fill="#33A852"></path></g><defs><clipPath id="clip0_2018_23135"><rect width="128" height="38.5882" fill="white"></rect></clipPath></defs></svg>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        <div id="ultimo_contenitore_hidden">
            <div id="primo_div_hidden">
                <div id="uno">
                    <ul>
                        <li>
                            <a href="https://x.com/stockx">
                                <svg class="stockx-icon " focusable="false" viewBox="0 0 1200 1227" style="fill: var(--chakra-colors-text-primary, text-primary); color: var(--chakra-colors-text-primary, text-primary);"><g><path fill="currentColor" d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z"></path></g></svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/stockxdotcom">
                                <svg class="stockx-icon " focusable="false" viewBox="0 0 44 44" style="fill: var(--chakra-colors-text-primary, text-primary); color: var(--chakra-colors-text-primary, text-primary);"><g><path fill="currentColor" d="M44,22C44,9.85,34.15,0,22,0S0,9.85,0,22c0,10.98,8.05,20.08,18.56,21.73v-15.37h-5.59v-6.36h5.59v-4.85c0-5.51,3.28-8.56,8.31-8.56,2.41,0,4.92,.43,4.92,.43v5.41h-2.77c-2.73,0-3.59,1.7-3.59,3.44v4.13h6.1l-.98,6.36h-5.13v15.37c10.52-1.65,18.56-10.75,18.56-21.73Z"></path><path d="M30.56,28.36l.98-6.36h-6.1v-4.13c0-1.74,.85-3.44,3.59-3.44h2.77v-5.41s-2.52-.43-4.92-.43c-5.03,0-8.31,3.05-8.31,8.56v4.85h-5.59v6.36h5.59v15.37c1.12,.18,2.27,.27,3.44,.27s2.32-.09,3.44-.27v-15.37h5.13Z" fill="transparent"></path></g></svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/stockx/">
                                <svg class="stockx-icon " focusable="false" viewBox="0 0 44 44" style="fill: var(--chakra-colors-text-primary, text-primary); color: var(--chakra-colors-text-primary, text-primary);"><path d="M13.16,.15c-2.34,.11-3.94,.48-5.34,1.03-1.45,.56-2.67,1.32-3.89,2.54-1.22,1.22-1.97,2.45-2.53,3.9-.54,1.4-.91,3-1.01,5.34-.1,2.34-.13,3.09-.11,9.07s.04,6.72,.15,9.07c.11,2.34,.48,3.94,1.03,5.34,.56,1.45,1.32,2.67,2.54,3.89,1.22,1.22,2.45,1.97,3.9,2.53,1.4,.54,3,.91,5.34,1.01,2.34,.1,3.1,.13,9.07,.11,5.97-.01,6.72-.04,9.07-.15s3.94-.49,5.33-1.03c1.45-.57,2.67-1.32,3.89-2.54s1.97-2.45,2.53-3.9c.54-1.4,.91-3,1.01-5.34,.1-2.35,.13-3.1,.12-9.07-.01-5.97-.04-6.72-.15-9.07s-.48-3.94-1.03-5.34c-.57-1.45-1.32-2.67-2.54-3.89s-2.45-1.97-3.9-2.53c-1.4-.54-3-.91-5.34-1.01S28.2,0,22.22,0s-6.72,.04-9.07,.15m.26,39.77c-2.15-.09-3.31-.45-4.09-.75-1.03-.4-1.76-.87-2.53-1.64s-1.25-1.5-1.65-2.53c-.3-.78-.66-1.94-.76-4.08-.11-2.32-.13-3.01-.14-8.89s0-6.57,.11-8.89c.09-2.14,.45-3.31,.75-4.08,.4-1.03,.87-1.76,1.64-2.53s1.5-1.25,2.53-1.65c.78-.3,1.94-.66,4.08-.76,2.32-.11,3.02-.13,8.89-.14,5.87-.01,6.57,0,8.89,.11,2.14,.09,3.31,.45,4.08,.75,1.03,.4,1.76,.87,2.53,1.64s1.25,1.5,1.65,2.53c.3,.77,.66,1.94,.76,4.08,.11,2.32,.14,3.02,.15,8.89,.01,5.87-.01,6.57-.11,8.89-.09,2.15-.45,3.31-.75,4.09-.4,1.03-.87,1.76-1.64,2.53s-1.5,1.25-2.53,1.65c-.77,.3-1.94,.66-4.08,.77-2.32,.11-3.02,.13-8.89,.14s-6.57-.01-8.89-.11M31.35,10.24c0,1.46,1.19,2.64,2.64,2.64s2.64-1.19,2.64-2.64c0-1.46-1.19-2.64-2.64-2.64,0,0,0,0,0,0-1.46,0-2.64,1.19-2.63,2.64M10.97,22.02c.01,6.24,5.08,11.29,11.32,11.27s11.29-5.08,11.28-11.32-5.08-11.29-11.32-11.27-11.29,5.08-11.27,11.32m3.96,0c0-4.05,3.27-7.34,7.32-7.35,4.05,0,7.34,3.27,7.35,7.32,0,4.05-3.27,7.34-7.32,7.35-4.05,0-7.34-3.27-7.35-7.32h0"></path></svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/stockx">
                                <svg class="stockx-icon " focusable="false" viewBox="0 0 576 512" style="fill: var(--chakra-colors-text-primary, text-primary); color: var(--chakra-colors-text-primary, text-primary);"><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="due">
                    <ul>
                        <li>
                            <a href="https://stockx.com/terms">
                                Terms
                            </a>
                        </li>
                        <li>
                            <a href="https://stockx.com/privacy">
                                Privacy 
                            </a>
                        </li>
                        <li>
                            <a>
                                Your Privacy Choices
                            </a>
                        </li>
                        <li>
                            <a>
                                ©2025 StockX. All Rights Reserved.
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <ul>
                <li>
                    <a href="https://stockx.com/">
                        English (US)
                    </a>
                </li>
                <li>
                    <a href="https://stockx.com/en-gb">
                        English (UK) 
                    </a>
                </li>
                <li>
                    <a href="https://stockx.com/it-it">
                        Italiano
                    </a>
                </li>
                <li>
                    <a href="https://stockx.com/de-de">
                        Deutsch
                    </a>
                </li>
                <li>
                    <a href="https://stockx.com/fr-fr">
                        Français (FR)
                    </a>
                </li>
                <li>
                    <a href="https://stockx.com/zh-cn">
                        简体中文
                    </a>
                </li>
                <li>
                    <a href="https://stockx.com/zh-tw">
                        繁體中文
                    </a>
                </li>
                <li>
                    <a href="https://stockx.com/ja-jp">
                        日本語
                    </a>
                </li>
                <li>
                    <a href="https://stockx.com/ko-kr">
                        한국어
                    </a>
                </li>
                <li>
                    <a href="https://stockx.com/es-mx">
                        Español (MX)
                    </a>
                </li>
                <li>
                    <a href="https://stockx.com/es-us">
                        Español (US)
                    </a>
                </li>
                <li>
                    <a href="https://stockx.com/es-es">
                        Español (ES)
                    </a>
                </li>
            </ul>
        </div>
        <div id="chat">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="M240-400h320v-80H240v80Zm0-120h480v-80H240v80Zm0-120h480v-80H240v80ZM80-80v-720q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H240L80-80Zm126-240h594v-480H160v525l46-45Zm-46 0v-480 480Z"/></svg>
        </div>

        <div id="hidden_chat" class="hidden">
            <header>
                <h2>
                    Chat with us! 
                </h2>
                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
            </header>
            <div id="contenitore_chat">
                <div id="text_container" class="hidden">
                    <input placeholder="Write your message...">
                </div>
                <button>
                        Chat now
                </button>
            </div>
        </div>
    </body>
</html>