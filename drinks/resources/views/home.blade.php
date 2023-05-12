<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>迷客夏</title>
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

            /* 標題 */
            .h1title {
                text-align: center;
            }

        }

        @media screen and (min-width: 575px) {

            /*導覽列 */
            #logoname {
                display: none;
            }
        }

        /* 輪播 */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: chartreuse;
        }

        /* 標題 */
        .h1title span {
            color: #444444;
            background: #FFFFFF;
            text-shadow: 1px 0px 1px #CCCCCC,
                0px 1px 1px #EEEEEE,
                2px 1px 1px #CCCCCC,
                1px 2px 1px #EEEEEE,
                3px 2px 1px #CCCCCC,
                2px 3px 1px #EEEEEE,
                4px 3px 1px #CCCCCC,
                3px 4px 1px #EEEEEE,
                5px 4px 1px #CCCCCC,
                4px 5px 1px #EEEEEE,
                6px 5px 1px #CCCCCC,
                5px 6px 1px #EEEEEE,
                7px 6px 1px #CCCCCC;
            -webkit-box-shadow: 0px 20px 0px -10px #FFFFFF,
                0px -20px 0px -10px #FFFFFF,
                20px 0px 0px -10px #FFFFFF,
                -20px 0px 0px -10px #FFFFFF,
                0px 0px 0px 10px green,
                5px 5px 15px 5px rgba(0, 0, 0, 0);
            box-shadow: 0px 20px 0px -10px #FFFFFF,
                0px -20px 0px -10px #FFFFFF,
                20px 0px 0px -10px #FFFFFF,
                -20px 0px 0px -10px #FFFFFF,
                0px 0px 0px 10px green,
                5px 5px 15px 5px rgba(0, 0, 0, 0);
        }

        /*標題 產品 pdseries*/
        #pdseries .btn {
            border-color: transparent;
            border-width: 4px;
        }

        #pdseries .btn:hover,
        #pdseries .btn:active {
            border-color: dodgerblue;
            border-width: 4px;
            background-color: lightyellow;
            -webkit-box-shadow: 0px 0px 25px 5px deepskyblue;
            box-shadow: 0px 0px 25px 5px deepskyblue;
        }

        /* 導覽列*/ 
        #navdiv {
            background-color: #f7e8aa;
        }

        a {
            text-decoration: none;
        }

        footer{
            font-size: 1rem;
        }
        
    </style>
</head>

<body>
    <div class="">
        <!-- 導覽列 -->
        <div id="drinknav" class="text-center pb-md-5"></div>

        <div class="container mt-1">
            <!-- 輪播 -->
            <div id="adslide" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#adslide" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#adslide" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#adslide" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#adslide" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./image/001.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./image/002.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./image/003.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./image/004.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#adslide" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#adslide" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <!-- 標題 最新消息 -->
            <div class="mt-5 divtitle">
                <h1 id="newstitle" class="h1title m-5">
                    <span class="p-2">最新消息</span>
                </h1>
                <div class="row text-center ">
                    <div class="col-12 col-xl-4 py-1">
                        <a href="http://localhost/drinks/public/news_01">
                            <img class="img-fluid img-thumbnail" src="./image/homenew-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-12 col-xl-4 py-1">
                        <a href="http://localhost/drinks/public/news_02">
                            <img class="img-fluid img-thumbnail" src="./image/homenew-2.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-12 col-xl-4 py-1">
                        <a href="http://localhost/drinks/public/news_04">
                            <img class="img-fluid img-thumbnail" src="./image/homenew-3.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <hr>

            <!-- 標題 商品介紹 -->
            <div id="pdseries" class="mt-5 divtitle">
                <h1 id="pdstitle" class="h1title m-5">
                    <span class="p-2">商品介紹</span>
                </h1>
                <div class="row text-center">
                    <div class="col-12 col-md-6 col-xl-3">
                        <a href="http://localhost/drinks/public/tea" class="btn m-3">
                            <img class="w-25" src="./image/pd-1.png" alt="">
                            <h3>愛茶的牛</h3>
                            <h3>Tea</h3>
                        </a>
                    </div>

                    <div class="col-12 col-md-6 col-xl-3">
                        <a href="http://localhost/drinks/public/mktea" class="btn m-3">
                            <img class="w-25" src="./image/pd-2.png" alt="">
                            <h3>牧場鮮奶茶</h3>
                            <h3>Fresh Milk Tea</h3>
                        </a>
                    </div>

                    <div class="col-12 col-md-6 col-xl-3">
                        <a href="http://localhost/drinks/public/milk" class="btn m-3 ">
                            <img class="w-25" src="./image/pd-3.png" alt="">
                            <h3>綠光牧場鮮奶</h3>
                            <h3>Green Light Milk</h3>
                        </a>
                    </div>

                    <div class="col-12 col-md-6 col-xl-3">
                        <a href="http://localhost/drinks/public/specials" class="btn m-3 ">
                            <img class="w-25" src="./image/pd-4.png" alt="">
                            <h3>手作特調</h3>
                            <h3>Specials</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- 結尾 -->
    <footer style="background-color: #c6e6e8;" class="text-center p-5">
        <p class="">Author:葉思霈</p>
    </footer>


    <script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>

    <script type="text/babel">
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
    </script>

</body>

</html>