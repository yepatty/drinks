<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>門市情報</title>
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
    <script></script>
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

        .mygooglemap {
            text-align: center;
        }

        table {
            margin: auto;
        }

        .card {
            background-color: lemonchiffon;
        }

        /* 導覽列*/ 
        #navdiv{
            background-color: #f7e8aa;
        }

        body{
            font-size: 1.3rem;
        }

        h2 .btn-lg{
            font-size: 1.5rem;
        }

        a {
            text-decoration: none;
        }

        div iframe {
            width: 100%;
            aspect-ratio: 4 / 3;
        }

        footer{
            font-size: 1rem;
        }

        .card-footer{
            background-color: deepskyblue;
        }
    </style>
</head>

<body>
    <div class="">
        <!-- 導覽列 -->
        <div id="drinknav" class="text-center pb-md-5"></div>
        
        <div class="container-fluid mt-1 pb-5">
            <h1 class="display-2 m-3 p-1 text-center">
                <span class="text-success" style="background-color:#c6dfc8;">
                    門市情報
                </span>
            </h1>
            <div class="row row-cols-1 row-cols-md-2 row-cols-xxl-3 g-4">
                @foreach ($stores as $shop)
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title text-center">
                                    <a target="_blank" href="{{ $shop->mapurl }}"
                                        type="button" class="btn btn-outline-primary btn-lg">
                                        {{ $shop->sname }}
                                    </a>
                                </h2>
                                <div class="card-text mygooglemap">
                                    <iframe
                                    src="{{ $shop->wilurl }}"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                            <div class="card-footer">
                                <ul class="bg-light list-group list-group-flush">
                                    <li class="list-group-item">地址：{{ $shop->address }}</li>
                                    <li class="list-group-item">📞：{{ $shop->shoptel }}</li>
                                    <li class="list-group-item">🕛：{{ $shop->shophr }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
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


    </script>

</body>

</html>