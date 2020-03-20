<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Coronavirus (COVID-19) Live Monitor</title>

        <link rel="stylesheet" href="assets/css/main.css" />
        
        <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="assets/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="manifest.json">
        <meta name="msapplication-TileColor" content="#263238">
        <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#263238">

        <!-- SEO -->
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Coronavirus (COVID-19) Live Monitor" />
        <meta property="og:site_name" content="Coronavirus (COVID-19) Live Monitor" />
        <meta property="og:description" content="Your new hub for news, information, and latest updates about the Coronavirus (COVID-19) outbreak." />
        <meta property="og:image" content="full_logo.png" />

        <meta name="twitter:site" content="Coronavirus (COVID-19) Live Monitor" />
        <meta name="twitter:title" content="Coronavirus (COVID-19) Live Monitor" />
        <meta name="twitter:description" content="Your new hub for news, information, and latest updates about the Coronavirus (COVID-19) outbreak." />
        <meta name="twitter:image" content="full_logo.png" />
        <meta name="twitter:card" content="summary" />

        <!-- Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120907429-8"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-120907429-8');
        </script>
    </head>
    <body>
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
        <div class="container calculator-active" style="opacity: 0;">
            <p class="built-by"><a href="https://github.com/xtrp/Coronavirus-Live-Monitor">Star on GitHub</a> &nbsp;&bull;&nbsp; Built by <a href="https://xtrp.io/">Fred Adams</a></p>
            <nav class="row top">
                <div class="panel masthead">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M20.763 10.377c-.694.519-1.537.801-2.403.801-1.607 0-2.415-1.963-1.282-3.095.614-.615 1.406-1.009 2.266-1.133 1.621-.233 2.334-2.244 1.142-3.437s-3.203-.479-3.437 1.142c-.123.857-.52 1.653-1.132 2.266-1.138 1.138-3.095.329-3.095-1.282 0-.869.28-1.708.801-2.403.983-1.312.061-3.236-1.623-3.236-1.683 0-2.606 1.923-1.623 3.237.519.693.801 1.537.801 2.403 0 1.61-1.956 2.421-3.095 1.282-.614-.614-1.008-1.405-1.132-2.266-.233-1.621-2.243-2.334-3.436-1.141s-.48 3.203 1.141 3.436c.857.123 1.653.52 2.266 1.132 1.138 1.139.329 3.095-1.282 3.095-.869 0-1.707-.28-2.403-.801-1.313-.983-3.237-.061-3.237 1.623 0 1.683 1.923 2.606 3.237 1.623.693-.519 1.537-.801 2.403-.801 1.61 0 2.421 1.956 1.282 3.095-.614.615-1.406 1.009-2.266 1.133-1.621.233-2.334 2.244-1.142 3.437s3.203.479 3.437-1.142c.123-.857.52-1.653 1.132-2.266 1.139-1.138 3.095-.329 3.095 1.282 0 .869-.28 1.708-.801 2.404-.981 1.308-.064 3.235 1.623 3.235 1.677 0 2.611-1.919 1.621-3.24-.518-.689-.799-1.528-.799-2.39 0-1.615 1.957-2.432 3.095-1.293.615.615 1.009 1.406 1.133 2.267.233 1.621 2.244 2.334 3.437 1.142 1.19-1.19.483-3.206-1.146-3.437-.854-.121-1.646-.515-2.255-1.125-1.143-1.141-.337-3.102 1.274-3.102.87 0 1.708.28 2.404.801 1.309.981 3.236.064 3.236-1.623 0-1.686-1.926-2.605-3.237-1.623zm-10.728 4.296c-.547 0-.99-.443-.99-.99s.443-.99.99-.99.99.443.99.99-.443.99-.99.99zm1.262-3.143c-.858 0-1.553-.695-1.553-1.553s.695-1.553 1.553-1.553 1.553.695 1.553 1.553-.695 1.553-1.553 1.553zm2.928 2.969c-.727 0-1.315-.589-1.315-1.315s.589-1.315 1.315-1.315 1.315.589 1.315 1.315-.589 1.315-1.315 1.315z"
                        />
                    </svg>
                    <h1 class="title"><strong>Coronavirus</strong> (COVID-19) <strong>Live Monitor</strong></h1>
                    <h1 class="mobile-title">
                        <span class="text">
                            Coronavirus Live Monitor
                        </span>
                    </h1>
                    <nav class="mobile-nav">
                        <button class="calculator">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M19 0h-14c-2.762 0-5 2.239-5 5v14c0 2.761 2.238 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm3 7h-3v2h3v6h-6v2h6v2c0 1.654-1.346 3-3 3h-14c-1.654 0-3-1.346-3-3v-2h2v-2h-2v-6h8v-2h-8v-2c0-1.654 1.346-3 3-3h14c1.654 0 3 1.346 3 3v2zm-8 3c0 .552-.447 1-1 1s-1-.448-1-1v-4c0-.552.447-1 1-1s1 .448 1 1v4zm3 0c0 .552-.447 1-1 1s-1-.448-1-1v-4c0-.552.447-1 1-1s1 .448 1 1v4zm-9 8c0 .552-.447 1-1 1s-1-.448-1-1v-4c0-.552.447-1 1-1s1 .448 1 1v4zm3 0c0 .552-.447 1-1 1s-1-.448-1-1v-4c0-.552.447-1 1-1s1 .448 1 1v4zm3 0c0 .552-.447 1-1 1s-1-.448-1-1v-4c0-.552.447-1 1-1s1 .448 1 1v4z"
                                />
                            </svg>
                            <p class="label">Virus Info</p>
                        </button>
                        <button class="news">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M7 16h13v1h-13v-1zm13-3h-13v1h13v-1zm0-6h-5v1h5v-1zm0 3h-5v1h5v-1zm-17-8v17.199c0 .771-1 .771-1 0v-15.199h-2v15.98c0 1.115.905 2.02 2.02 2.02h19.958c1.117 0 2.022-.904 2.022-2.02v-17.98h-21zm19 17h-17v-15h17v15zm-9-12h-6v4h6v-4z"
                                />
                            </svg>
                            <p class="label">Latest News</p>
                        </button>
                        <button class="cases-about">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M20.763 10.377c-.694.519-1.537.801-2.403.801-1.607 0-2.415-1.963-1.282-3.095.614-.615 1.406-1.009 2.266-1.133 1.621-.233 2.334-2.244 1.142-3.437s-3.203-.479-3.437 1.142c-.123.857-.52 1.653-1.132 2.266-1.138 1.138-3.095.329-3.095-1.282 0-.869.28-1.708.801-2.403.983-1.312.061-3.236-1.623-3.236-1.683 0-2.606 1.923-1.623 3.237.519.693.801 1.537.801 2.403 0 1.61-1.956 2.421-3.095 1.282-.614-.614-1.008-1.405-1.132-2.266-.233-1.621-2.243-2.334-3.436-1.141s-.48 3.203 1.141 3.436c.857.123 1.653.52 2.266 1.132 1.138 1.139.329 3.095-1.282 3.095-.869 0-1.707-.28-2.403-.801-1.313-.983-3.237-.061-3.237 1.623 0 1.683 1.923 2.606 3.237 1.623.693-.519 1.537-.801 2.403-.801 1.61 0 2.421 1.956 1.282 3.095-.614.615-1.406 1.009-2.266 1.133-1.621.233-2.334 2.244-1.142 3.437s3.203.479 3.437-1.142c.123-.857.52-1.653 1.132-2.266 1.139-1.138 3.095-.329 3.095 1.282 0 .869-.28 1.708-.801 2.404-.981 1.308-.064 3.235 1.623 3.235 1.677 0 2.611-1.919 1.621-3.24-.518-.689-.799-1.528-.799-2.39 0-1.615 1.957-2.432 3.095-1.293.615.615 1.009 1.406 1.133 2.267.233 1.621 2.244 2.334 3.437 1.142 1.19-1.19.483-3.206-1.146-3.437-.854-.121-1.646-.515-2.255-1.125-1.143-1.141-.337-3.102 1.274-3.102.87 0 1.708.28 2.404.801 1.309.981 3.236.064 3.236-1.623 0-1.686-1.926-2.605-3.237-1.623zm-10.728 4.296c-.547 0-.99-.443-.99-.99s.443-.99.99-.99.99.443.99.99-.443.99-.99.99zm1.262-3.143c-.858 0-1.553-.695-1.553-1.553s.695-1.553 1.553-1.553 1.553.695 1.553 1.553-.695 1.553-1.553 1.553zm2.928 2.969c-.727 0-1.315-.589-1.315-1.315s.589-1.315 1.315-1.315 1.315.589 1.315 1.315-.589 1.315-1.315 1.315z"
                                />
                            </svg>
                            <p class="label">Cases</p>
                        </button>
                    </nav>
                </div>
            </nav>
            <main class="row app-area">
                <!-- left panels with current case count, links, and about -->
                <div class="col left">
                    <div class="panel current-cases">
                        <h3 class="panel-title">Total Cases:</h3>
                        <div class="case-count-container">
                            <h1 class="case-count">Loading...</h1>
                        </div>
                        <p class="last-updated"></p>
                    </div>
                    <div class="panel stats">
                        <p class="recoveries"><strong>Recoveries:</strong><span></span></p>
                        <p class="deaths"><strong>Deaths:</strong><span></span></p>
                    </div>
                    <div class="panel about">
                        <p>Total cases, deaths, and recoveries data from <a href="https://www.worldometers.info/coronavirus/" target="_blank">WorldoMeters</a>, which gets data from sources such as <a href="http://who.int/" target="_blank">The WHO</a>.</p>
                        <p>Rates (percentages) are calculated by dividing the current amount of recoveries/deaths by the current amount of total cases.</p>
                    </div>
                    <div class="panel links">
                        <a href="https://github.com/xtrp/Coronavirus-Live-Monitor" target="_blank" class="github-repo">
                            <span class="text">Star on GitHub</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"
                                />
                            </svg>
                        </a>
                        <hr />
                        <a href="https://xtrp.io/" target="_blank" class="creator">
                            <span class="text">Built By <span class="link">Fred Adams</span></span>
                            <img src="assets/img/creator.png" alt="Fred Adams Picture" />
                        </a>
                    </div>
                </div>

                <!-- main app panel with travel info entering area and risk calculator -->
                <div class="col center">
                    <div class="panel main-app overview-active">
                        <ul class="tab-select">
                            <li class="overview">Live Updates</span></li>
                            <!--<li class="stock">Stock Market</li>-->
                            <li class="health">Health Resources</span></li>
                        </ul>
                        <div class="tabs">
                            <section class="overview">
                                <h3 class="panel-title">Latest Updates from The WHO</h3>
                                <div class="video-container">

                                </div>
                                <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/situation-reports" target="_blank" class="styled-link">
                                    <span class="text">Read Latest WHO Situation Reports</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"/></svg>
                                </a>
                                <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/media-resources/news" target="_blank" class="styled-link">
                                    <span class="text">Read Latest WHO News Updates</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"/></svg>
                                </a>
                            </section>
                            <!--<section class="stock">
                                <h3 class="panel-title">Effect on Stock Market</h3>
                                <p>Market data may be delayed by > 24 hours.</p>
                                <div class="stock-widget">
                                <!-- TradingView Widget BEGIN
                                <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <div class="tradingview-widget-copyright"><a href="https://uk.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Market Data</span></a> by TradingView</div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                                {
                                "colorTheme": "dark",
                                "dateRange": "12m",
                                "showChart": true,
                                "locale": "en",
                                "width": "100%",
                                "height": "100%",
                                "largeChartUrl": "",
                                "isTransparent": false,
                                "plotLineColorGrowing": "rgba(25, 118, 210, 1)",
                                "plotLineColorFalling": "rgba(25, 118, 210, 1)",
                                "gridLineColor": "rgba(42, 46, 57, 1)",
                                "scaleFontColor": "rgba(120, 123, 134, 1)",
                                "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
                                "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
                                "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
                                "tabs": [
                                {
                                "title": "Indices",
                                "symbols": [
                                {
                                "s": "OANDA:SPX500USD",
                                "d": "S&P 500"
                                },
                                {
                                "s": "OANDA:NAS100USD",
                                "d": "Nasdaq 100"
                                },
                                {
                                "s": "FOREXCOM:DJI",
                                "d": "Dow 30"
                                },
                                {
                                "s": "INDEX:NKY",
                                "d": "Nikkei 225"
                                },
                                {
                                "s": "INDEX:DEU30",
                                "d": "DAX Index"
                                },
                                {
                                "s": "OANDA:UK100GBP",
                                "d": "FTSE 100"
                                }
                                ],
                                "originalTitle": "Indices"
                                },
                                {
                                "title": "Commodities",
                                "symbols": [
                                {
                                "s": "CME_MINI:ES1!",
                                "d": "E-Mini S&P"
                                },
                                {
                                "s": "CME:6E1!",
                                "d": "Euro"
                                },
                                {
                                "s": "COMEX:GC1!",
                                "d": "Gold"
                                },
                                {
                                "s": "NYMEX:CL1!",
                                "d": "Crude Oil"
                                },
                                {
                                "s": "NYMEX:NG1!",
                                "d": "Natural Gas"
                                },
                                {
                                "s": "CBOT:ZC1!",
                                "d": "Corn"
                                }
                                ],
                                "originalTitle": "Commodities"
                                },
                                {
                                "title": "Bonds",
                                "symbols": [
                                {
                                "s": "CME:GE1!",
                                "d": "Eurodollar"
                                },
                                {
                                "s": "CBOT:ZB1!",
                                "d": "T-Bond"
                                },
                                {
                                "s": "CBOT:UB1!",
                                "d": "Ultra T-Bond"
                                },
                                {
                                "s": "EUREX:FGBL1!",
                                "d": "Euro Bund"
                                },
                                {
                                "s": "EUREX:FBTP1!",
                                "d": "Euro BTP"
                                },
                                {
                                "s": "EUREX:FGBM1!",
                                "d": "Euro BOBL"
                                }
                                ],
                                "originalTitle": "Bonds"
                                },
                                {
                                "title": "Forex",
                                "symbols": [
                                {
                                "s": "FX:EURUSD"
                                },
                                {
                                "s": "FX:GBPUSD"
                                },
                                {
                                "s": "FX:USDJPY"
                                },
                                {
                                "s": "FX:USDCHF"
                                },
                                {
                                "s": "FX:AUDUSD"
                                },
                                {
                                "s": "FX:USDCAD"
                                }
                                ],
                                "originalTitle": "Forex"
                                }
                                ]
                                }
                                </script>
                                </div>
                                <!-- TradingView Widget END
                                </div>
                            </section>-->
                            <section class="health">
                                <h3 class="panel-title">Health Resources</h3>
                                <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public" target="_blank" class="styled-link">
                                    <span class="text">Advice from The World Health Organization</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"/></svg>
                                </a>
                                <a href="https://www.cdc.gov/coronavirus/2019-ncov/prepare/prevention.html" target="_blank" class="styled-link">
                                    <span class="text">Advice from The Center for Disease Control and Prevention (U.S.A.)</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"/></svg>
                                </a>
                                <a href="https://www.nhs.uk/conditions/coronavirus-covid-19/" target="_blank" class="styled-link">
                                    <span class="text">Information from The National Health Service (U.K.)</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"/></svg>
                                </a>
                            </section>
                        </div>
                    </div>
                </div>

                <!-- latest news, retrieved from NewsAPI -->
                <div class="col right">
                    <div class="panel latest-news">
                        <div class="top">
                            <h3 class="panel-title">Latest News:</h3>
                            <div class="select-country">
                                <span>Country:</span>
                                <select name="country" class="country-select-box" style="display: none;">
                                    <option value="ar">Argentina</option>
                                    <option value="at">Austria</option>
                                    <option value="au">Australia</option>
                                    <option value="be">Belgium</option>
                                    <option value="bg">Bulgaria</option>
                                    <option value="br">Brazil</option>
                                    <option value="ca">Canada</option>
                                    <option value="cn">China</option>
                                    <option value="co">Colombia</option>
                                    <option value="cu">Cuba</option>
                                    <option value="cz">Czech Republic</option>
                                    <option value="eg">Egypt</option>
                                    <option value="fr">France</option>
                                    <option value="de">Germany</option>
                                    <option value="gr">Greece</option>
                                    <option value="hk">Hong Kong</option>
                                    <option value="hu">Hungary</option>
                                    <option value="id">Indonesia</option>
                                    <option value="ie">Ireland</option>
                                    <option value="il">Israel</option>
                                    <option value="in">India</option>
                                    <option value="it">Italy</option>
                                    <option value="jp">Japan</option>
                                    <option value="lt">Lithuania</option>
                                    <option value="lv">Latvia</option>
                                    <option value="ma">Morocco</option>
                                    <option value="mx">Mexico</option>
                                    <option value="my">Malaysia</option>
                                    <option value="ng">Nigeria</option>
                                    <option value="nl">Netherlands</option>
                                    <option value="no">Norway</option>
                                    <option value="nz">New Zealand</option>
                                    <option value="ph">Philippines</option>
                                    <option value="pl">Poland</option>
                                    <option value="pt">Portugal</option>
                                    <option value="kr">Republic of Korea</option>
                                    <option value="ro">Romania</option>
                                    <option value="ru">Russian Federation</option>
                                    <option value="sa">Saudi Arabia</option>
                                    <option value="rs">Serbia</option>
                                    <option value="se">Sweden</option>
                                    <option value="ch">Switzerland</option>
                                    <option value="sg">Singapore</option>
                                    <option value="si">Slovenia</option>
                                    <option value="sk">Slovakia</option>
                                    <option value="za">South Africa</option>
                                    <option value="th">Thailand</option>
                                    <option value="tr">Turkey</option>
                                    <option value="tw">Taiwan</option>
                                    <option value="ua">Ukraine</option>
                                    <option value="ae">United Arab Emirates</option>
                                    <option value="us">United States of America</option>
                                    <option value="gb">United Kingdom</option>
                                    <option value="ve">Venezuela</option>
                                </select>
                            </div>
                        </div>
                        <ul class="news-list"></ul>
                    </div>
                </div>
            </main>
            <button class="reload-btn" onclick="window.location.reload();">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 12l-4.463 4.969-4.537-4.969h3c0-4.97 4.03-9 9-9 2.395 0 4.565.942 6.179 2.468l-2.004 2.231c-1.081-1.05-2.553-1.699-4.175-1.699-3.309 0-6 2.691-6 6h3zm10.463-4.969l-4.463 4.969h3c0 3.309-2.691 6-6 6-1.623 0-3.094-.65-4.175-1.699l-2.004 2.231c1.613 1.526 3.784 2.468 6.179 2.468 4.97 0 9-4.03 9-9h3l-4.537-4.969z"/></svg>
            </button>
            <div class="clearfix" style="display: block; clear: both;">
        </div>

        <!-- register service worker -->
        <script>
        if ('serviceWorker' in navigator) {
            console.log('Attempting to register Service Worker (service-worker.js in root directory)');
            navigator.serviceWorker.register('service-worker.js')
                .then((reg) => {
                    console.log('Service worker successfully registered.');
                }).catch(function(err) {
                    console.log('Service worker did not register. The following error was yielded: ', err);
                });
        }
        </script>

        <!-- data scripts -->
        <script src="server/current_cases_data.js?v=<?php echo uniqid(); ?>"></script>
        <script src="server/live_updates_data.js?v=<?php echo uniqid(); ?>"></script>

        <!-- scripts -->
        <script src="assets/js/fitty.js"></script>
        <script src="assets/js/moment.js"></script>
        <script src="assets/js/api_keys.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/js/masthead.js"></script>
        <script src="assets/js/news.js"></script>
        <script src="assets/js/current_cases.js"></script>
    </body>
</html>
