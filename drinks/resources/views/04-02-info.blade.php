<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>訂單查詢</title>
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
    body {
      /* background-color: #f0f5e5; */
      background-image: linear-gradient(-225deg, #FFFEFF 0%, #D7FFFE 100%);
      font-size: 1.5rem;
    }

    @media screen and (max-width: 865px) {
      .rwd-pc{
        display: none;
      }
    }

    @media screen and (min-width: 865px) {
      .rwd-tel{
        display: none;
      }
    }

    @media (max-width: 576px) {
      #drinkslogo{
        max-width:100%;
      }
    }

    @media (min-width: 576px) {
      #drinkslogo{
        width: 450px;
      }
    }

  </style>
</head>

<body>
  
  <div class="container-xl">
    <div class="">
      <div class="py-5 text-center">
        <span><img class="" id="drinkslogo" src="image/drinklogo.png" alt="drinks"></span>
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-cup"
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M.11 3.187A.5.5 0 0 1 .5 3h13a.5.5 0 0 1 .488.608l-.22.991a3.001 3.001 0 0 1-1.3 5.854l-.132.59A2.5 2.5 0 0 1 9.896 13H4.104a2.5 2.5 0 0 1-2.44-1.958L.012 3.608a.5.5 0 0 1 .098-.42Zm12.574 6.288a2 2 0 0 0 .866-3.899l-.866 3.9ZM1.124 4l1.516 6.825A1.5 1.5 0 0 0 4.104 12h5.792a1.5 1.5 0 0 0 1.464-1.175L12.877 4H1.123Z" />
        </svg>
        <p style="font-size: 3rem;" class="lead">迷客夏</p> -->
      </div>
      <div class="py-5 text-center">
        <form style="background-color: #f9f1db;" class="p-2" action="query" method="get">
          @csrf
          <fieldset>
            <legend class="text-center">迷客夏----訂單查詢</legend>
            <div class="row g-3 text-start">
              <!-- <div class="col-12 my-2">
                <label for="phone" class="form-label">電話：</label>
                <input type="tel" class="form-control" id="phone" name="phone">
              </div> -->
              <div class="col-sm-6 my-2">
                <label for="phone" class="form-label">電話：</label>
                <input type="tel" class="form-control @error('phone') border border-danger text-danger @enderror" id="phone" value="{{ old('phone') }}" name="phone" required>
              </div>
              <div class="col-sm-6 my-2">
                <label for="username" class="form-label">名字：</label>
                <input type="text" class="form-control @error('name') border border-danger text-danger @enderror" id="username" value="{{ old('name') }}" name="name" required>
              </div>
              <p class="">
                <button class="btn btn-primary" type="submit">確認</button>
              </p>
            </div> 
          </fieldset>
        </form>
        <div class="text-start">
          @if ($errors->any())
            <div style="color:red;">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
        </div>
        <hr class="my-5">
      
        <table class="table table-hover table-warning rwd-pc">
          <thead>
            <tr class="table-info">
              <th scope="col">訂單編號</th>
              <th scope="col">門市</th>
              <th scope="col">商品</th>
              <th scope="col">數量</th>
              <th scope="col">時間</th>
            </tr>
          </thead>
          <tbody>
            @if (isset($orders))
              @foreach ($orders as $order)
                <tr>
                  <th scope="row">{{ $order->oid }}</th>
                  <td>{{ $order->sname }}</td>
                  <td>{{ $order->pdinfo }}</td>
                  <td>{{ $order->amount }}</td>
                  <td>{{ $order->createdate }}</td>
                </tr>
              @endforeach
            @endif
          </tbody>
        </table>

        @if (isset($orders))
          @foreach ($orders as $order)
            <table class="table table-warning rwd-tel">
                <thead>
                  <tr class="table-info">
                    <th scope="col">訂單編號</th>
                    <th scope="col">{{ $order->oid }}</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">門市</th>
                    <td>{{ $order->sname }}</td> 
                  </tr>
                  <tr>
                    <th scope="row">商品</th>
                    <td>{{ $order->pdinfo }}</td>
                  </tr>
                  <tr>
                    <th scope="row">數量</th>
                    <td>{{ $order->amount }}</td>
                  </tr>
                  <tr>
                    <th scope="row">時間</th>
                    <td>{{ $order->createdate }}</td>
                  </tr>
                </tbody>
            </table>
          @endforeach
        @endif

        
        <hr class="my-5">
        <div class="my-5">
          <a href="http://localhost/drinks/public/" class="btn btn-success btn-lg">
          回到首頁
          </a>
        </div>
        


      </div>
    </div>  
  </div>
</body>

</html>