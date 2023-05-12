<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品介紹</title>
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
    <!-- <script src="./image/products/products.js"></script> -->
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

        /* 導覽列*/ 
        #navdiv{
            background-color: #f7e8aa;
        }

        body{
            font-size: 1.2rem;
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
        
        <!-- 商品table -->
        <div class="container-fluid mt-1 text-center">
            <h1 class="display-2 m-3 p-1">
                <span class="text-success" style="background-color:#c6dfc8;">
                    商品介紹
                </span>
            </h1>
            <div class="row">
                <div class="col-12 col-md-6 col-xl-3">
                    <div id="teatable" class="p-3">
                        <table class="table table-warning">
                            <thead id ="teaseries">                                
                            </thead>
                            <tbody>
                                @foreach ($teas as $te)
                                    <tr>
                                        <th class="text-start ps-5" scope="row">{{ $te->pname }}</th>
                                        <td>{{ $te->price }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div id="mkteatable" class="p-3">
                        <table class="table table-warning">
                            <thead id="mkteaseries">                                                               
                            </thead>
                            <tbody>
                                @foreach ($milkteas as $mktea)
                                    <tr>
                                        <th class="text-start ps-5" scope="row">{{ $mktea->pname }}</th>
                                        <td>{{ $mktea->price }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div id="milktable" class="p-3">
                        <table class="table table-warning">
                            <thead id="milkseries">
                            </thead>
                            <tbody>
                                @foreach ($milks as $mk)
                                    <tr>
                                        <th class="text-start ps-5" scope="row">{{ $mk->pname }}</th>
                                        <td>{{ $mk->price }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-3">
                    <div id="sptable" class="p-3">
                        <table class="table table-warning">
                            <thead id="spseries">                               
                            </thead>
                            <tbody>
                                @foreach ($spals as $sp)
                                    <tr>
                                        <th class="text-start ps-5" scope="row">{{ $sp->pname }}</th>
                                        <td>{{ $sp->price }}</td>
                                    </tr>
                                @endforeach      
                            </tbody>
                        </table>
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
        
        //-------------------------------------------------------------
        const pddataItem = {
            teazhname: "愛茶的牛",
            teaenname: "Tea",
            teaurl: "http://localhost/drinks/public/tea",
            mktzhname: "牧場鮮奶茶",
            mktenname: "Fresh Milk Tea",
            mkturl: "http://localhost/drinks/public/mktea",
            milkzhname: "綠光牧場鮮奶",
            milkenname: "Green Light Milk",
            milkurl: "http://localhost/drinks/public/milk",
            spzhname: "手作特調",
            spenname: "Specials",
            spurl: "http://localhost/drinks/public/specials"          
        }

        // PdGroups 元件的程式寫在這:
        function PdGroups(props) {
            return <React.Fragment>
                    <tr class="table-success">
                        <th colspan="2" scope="col">
                            <a href={props.seurl} class="btn btn-lg btn-outline-primary">
                                <div>{props.zhname}</div>
                                <div>{props.enname}</div>
                            </a>
                        </th>
                    </tr>
                    <tr>
                        <th class="text-start ps-5" scope="col">商品名稱</th>
                        <th scope="col">價格（L）</th>
                    </tr>                    
            </React.Fragment>;
        }

        const teaelement = <PdGroups seurl={pddataItem.teaurl} zhname={pddataItem.teazhname} enname={pddataItem.teaenname}></PdGroups>;        
        ReactDOM.render(
            teaelement,
            document.getElementById('teaseries')
        );

        const mktelement = <PdGroups seurl={pddataItem.mkturl} zhname={pddataItem.mktzhname} enname={pddataItem.mktenname}></PdGroups>;
        ReactDOM.render(
            mktelement,
            document.getElementById('mkteaseries')
        );

        const milkelement = <PdGroups seurl={pddataItem.milkurl} zhname={pddataItem.milkzhname} enname={pddataItem.milkenname}></PdGroups>;
        ReactDOM.render(
            milkelement,
            document.getElementById('milkseries')
        );

        const spelement = <PdGroups seurl={pddataItem.spurl} zhname={pddataItem.spzhname} enname={pddataItem.spenname}></PdGroups>;
        ReactDOM.render(
            spelement,
            document.getElementById('spseries')
        );

    </script>

</body>

</html>