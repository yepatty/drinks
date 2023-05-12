<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>最新消息</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/myself.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src=" https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link href="./image/cup048.png" rel="icon">
    <style>
        /* #drinkslogo {
            width: 300px
        } */

        @media screen and (max-width: 575px) {

            /*導覽列 */
            #drinknav img {
                display: none;
            }

            
        }

        @media screen and (min-width: 575px) {

            /*導覽列 */
            #logoname {
                display: none;
            }

        }

        /* 內容  */

        a {
            text-decoration: none;
        }
        
        /* 導覽列*/ 
         #navdiv {
            background-color: #f7e8aa;
        }

        body {
            font-size: 1.5rem;
        }

        footer{
            font-size: 1rem;
        }

        .card{
            background-color: lightyellow;
        }


    </style>
</head>

<body>
    <div class="">
        <!-- 導覽列 -->
        <div id="drinknav" class="text-center pb-md-5"></div>
        <div id="newtxt" class="container mt-1 text-center pb-5">
            <h1 class="display-2 m-3 p-1">
                <span class="text-success" style="background-color:#c6dfc8;">
                    最新消息
                </span>
            </h1>
            <div id="newstext" class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4"></div>
        </div>
    </div>
    <!-- 結尾 -->
    <footer style="background-color: #c6e6e8;"  class="text-center p-5">
        <p class="">Author:葉思霈</p>
    </footer>



    <script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>

    <script type="text/babel">

        // 導覽列---------------------------------------------------------

        const dataItem = {
            drinkname: "迷客夏",
            drinkurl: "http://localhost/drinks/public/index",
            newspage: "最新消息",
            newsurl: "http://localhost/drinks/public/news",
            pdspage: "商品介紹",
            pdsurl: "http://localhost/drinks/public/products",
            shopspage: "門市情報",
            shopsurl: "http://localhost/drinks/public/shops",
            orderpage: "drinks首頁",
            orderurl: "http://localhost/drinks/public/",
            logoimage: "image/mylogo.jpg"
        }
        // NavGroups 元件的程式寫在這:
        function NavGroups(props) {
            return <a class="col-12 col-sm  
            btn btn-lg btn-outline-success p-md-4"
                href={props.url}>{props.name}</a>;
        }

        const navelement = (
            <React.Fragment>
                <a href={dataItem.drinkurl}>
                    <img className="p-4" id="drinkslogo" src={dataItem.logoimage} />
                </a>
                <h2 id="logoname" class="pt-2">
                    <a href={dataItem.drinkurl} class="text-success">
                        {dataItem.drinkname}
                    </a>
                </h2>
                <div id="navdiv" class="row m-1 m-md-0">
                    <NavGroups url={dataItem.newsurl} name={dataItem.newspage} />
                    <NavGroups url={dataItem.pdsurl} name={dataItem.pdspage} />
                    <NavGroups url={dataItem.shopsurl} name={dataItem.shopspage} />
                    <NavGroups url={dataItem.orderurl} name={dataItem.orderpage} />
                </div>
            </React.Fragment>
        );
        ReactDOM.render(
            navelement,
            document.getElementById('drinknav')
        );
        //--------------------------------------------------------------------------
        // 消息內容-------

        const newsItem = {
            nwurl01: "http://localhost/drinks/public/news_01",
            nwimg01: "./image/news/news-1.jpg",
            nwname01: "賀！迷客夏榮獲《2023 A.A 全球純粹風味評鑑》三星獎",
            nwurl02: "http://localhost/drinks/public/news_02",
            nwimg02: "./image/news/news-2.jpg",
            nwname02: "琥珀高峰烏龍 隱藏熱銷精品茶推薦",
            nwurl03: "http://localhost/drinks/public/news_03",
            nwimg03: "./image/news/news-3.jpg",
            nwname03: "支持環保 自備飲料杯 7/1起 單杯省$5元",
            nwurl04: "http://localhost/drinks/public/news_04",
            nwimg04: "./image/news/news-4.jpg",
            nwname04: "蜜蜂工坊 x 迷客夏聯名飲品-蜜香紅茶拿鐵 在7-11也喝得到！",
            nwurl05: "http://localhost/drinks/public/news_05",
            nwimg05: "./image/news/news-5.jpg",
            nwname05: "養樂多綠～好評回歸！",
            nwurl06: "http://localhost/drinks/public/news_06",
            nwimg06: "./image/news/news-6.jpg",
            nwname06: "2023清明連假 營業資訊",
            nwurl07: "http://localhost/drinks/public/news_07",
            nwimg07: "./image/news/news-7.jpg",
            nwname07: "2/4補班日找樂事",
            nwurl08: "http://localhost/drinks/public/news_08",
            nwimg08: "./image/news/news-8.jpg",
            nwname08: "2023迷客夏春節期間門市營業資訊",
            nwurl09: "http://localhost/drinks/public/news_09",
            nwimg09: "./image/news/news-9.jpg",
            nwname09: "飲品價格調整公告",
            nwurl10: "http://localhost/drinks/public/news_10",
            nwimg10: "./image/news/news-10.jpg",
            nwname10: "迷客夏 娜杯紅茶系列 全新上市"
        }

        // NewApp 元件的程式寫在這:
        function NewApp(props) {
            return <div class="col">
                <div class="card h-100">
                    <a class="text-success" href={props.url}>
                        <img src={props.imgnm} class="card-img-top img-fluid" alt="..." />
                        <div class="card-body">
                            <p class="card-text">
                                {props.name}
                            </p>
                        </div>
                    </a>
                </div>
            </div>;
        }
        const newelement = (
            <React.Fragment>
                <NewApp url={newsItem.nwurl01} imgnm={newsItem.nwimg01} name={newsItem.nwname01} />
                <NewApp url={newsItem.nwurl02} imgnm={newsItem.nwimg02} name={newsItem.nwname02} />
                <NewApp url={newsItem.nwurl03} imgnm={newsItem.nwimg03} name={newsItem.nwname03} />
                <NewApp url={newsItem.nwurl04} imgnm={newsItem.nwimg04} name={newsItem.nwname04} />
                <NewApp url={newsItem.nwurl05} imgnm={newsItem.nwimg05} name={newsItem.nwname05} />
                <NewApp url={newsItem.nwurl06} imgnm={newsItem.nwimg06} name={newsItem.nwname06} />
                <NewApp url={newsItem.nwurl07} imgnm={newsItem.nwimg07} name={newsItem.nwname07} />
                <NewApp url={newsItem.nwurl08} imgnm={newsItem.nwimg08} name={newsItem.nwname08} />
                <NewApp url={newsItem.nwurl09} imgnm={newsItem.nwimg09} name={newsItem.nwname09} />
                <NewApp url={newsItem.nwurl10} imgnm={newsItem.nwimg10} name={newsItem.nwname10} />
            </React.Fragment>
        );

        ReactDOM.render(
            newelement,
            document.getElementById('newstext')
        );

    </script>

</body>

</html>