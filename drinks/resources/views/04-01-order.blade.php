<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>點餐</title>
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
    <script>
        okbtnjs = function(){
            okbtn = document.querySelector('#okbtn');
            okbtn.addEventListener('click', function (event) {
                event.preventDefault();
                var result = confirm('確定要送出訂單嗎？');
                if (result) {
                    document.querySelector('form').submit();
                }
            })
        }
        cancelbtnjs = function () {
            cancelbtn = document.getElementById("cancelbtn");
            cancelbtn.addEventListener('click', function(event){
                event.preventDefault();
                var result = confirm('確定要離開訂單嗎？');
                if (result) {
                    window.location.href = 'http://localhost/drinks/public/';
                }

            })
        }

        amountjs = function () {
            const amountInput = document.getElementById('amount');
            const errorDiv = document.createElement('div');
            errorDiv.className = 'text-danger';

            amountInput.addEventListener('input', () => {
                const amount = amountInput.value;

                if (isNaN(amount) || amount < 1 || amount > 50) {
                    amountInput.classList.add('border-danger', 'text-danger');
                    errorDiv.textContent = '請輸入1到50之間的整數';
                    amountInput.parentElement.appendChild(errorDiv);
                } else {
                    amountInput.classList.remove('border-danger', 'text-danger');
                    errorDiv.textContent = '';
                }
            });



        }


        window.onload = function(){
            okbtnjs();
            cancelbtnjs(); 
            amountjs();     
        }
    </script>
    <style>
        body {
            /* background-color: #c6e6e8; */
            background-image: linear-gradient(-225deg, #FFFEFF 0%, #D7FFFE 100%);
            font-size: 1.5rem;
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
    <div class="p-2">
        <div class="container text-center">
            <main>
                <div class="py-5">
                    <span><img class="" id="drinkslogo" src="image/drinklogo.png" alt="drinks"></span>
                </div>
                <div class="row">
                    <div id="orderform" style="background-color: #f9f1db;" class="col-12">
                        <form action="receipt" method="post">
                            @csrf
                            <fieldset>
                                <legend class="">迷客夏----飲料訂單</legend>
                                <div class="row g-3 text-start">
                                    <div class="col-sm-6 my-2">
                                        <label for="phone" class="form-label">電話：</label>
                                        <input type="tel" class="form-control form-control-lg @error('phone') border border-danger text-danger @enderror" id="phone" value="{{ old('phone') }}" name="phone" required>
                                    </div>
                                    <div class="col-sm-6 my-2">
                                        <label for="username" class="form-label">名字：</label>
                                        <input type="text" class="form-control form-control-lg @error('name') border border-danger text-danger @enderror" id="username" value="{{ old('name') }}" name="name" required>
                                    </div>
                                    <div class="col-12 my-2 ">
                                        <label for="sname" class="form-label">門市</label>
                                        <select name="sname" id="sname" class="form-select form-select-lg mb-3">
                                            <optgroup label="門市">
                                                @foreach ($stores as $shop)
                                                    <option value="{{ $shop->sname }}">{{ $shop->sname }}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-12 my-2">
                                        <div class="row">
                                            <div class="col-md-6 ">
                                                <label for="pdinfo" class="form-label">商品</label>
                                                <select name="pdinfo" id="pdinfo" class="form-select form-select-lg mb-3">
                                                    <optgroup label="愛茶的牛">
                                                        @foreach ($teas as $te)
                                                            <option value="{{ $te->pname }}NT${{ $te->price }}">
                                                                {{ $te->pname }}NT${{ $te->price }}
                                                            </option>
                                                        @endforeach
                                                    </optgroup>

                                                    <optgroup label="牧場鮮奶茶">
                                                        @foreach ($milkteas as $mktea)
                                                            <option value="{{ $mktea->pname }}NT${{ $mktea->price }}">
                                                                {{ $mktea->pname }}NT${{ $mktea->price }}
                                                            </option>
                                                        @endforeach
                                                    </optgroup>

                                                    <optgroup label="綠光牧場鮮奶">
                                                        @foreach ($milks as $mk)
                                                            <option value="{{ $mk->pname }}NT${{ $mk->price }}">
                                                                {{ $mk->pname }}NT${{ $mk->price }}
                                                            </option>
                                                        @endforeach
                                                    </optgroup>

                                                    <optgroup label="手作特調">
                                                        @foreach ($spals as $sp)
                                                            <option value="{{ $sp->pname }}NT${{ $sp->price }}">
                                                                {{ $sp->pname }}NT${{ $sp->price }}
                                                            </option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>


                                            </div>
                                            <div class="col-md-6">
                                                <label for="amount" class="form-label">飲料杯數（上限50杯）:</label>
                                                <input type="number" class="form-control form-control-lg @error('amount') border border-danger text-danger @enderror" value="{{ old('amount') }}" name="amount" id="amount"
                                                min="1" max="50" required >
                                            </div>
                                            <hr class="my-4">
                                            <div class="col-auto">
                                                <button id="okbtn" class="btn btn-primary btn-lg" type="button">確認</button>
                                            </div>
                                            <div class="col-auto">
                                                <button id="cancelbtn"  class="btn btn-danger btn-lg" type="button">
                                                    取消
                                                </button>
                                            </div>
                                        </div>
                                    </div>

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
                    </div>
                </div>
            </main>
            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1"><span style="background-color: white;">&copy; 2017–2023 迷客夏</span></p>
            </footer>
        </div>
    </div>
    <br>
    <br>
    <br>
    
    

</body>

</html>