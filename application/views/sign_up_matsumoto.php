<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ログイン画面</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        img {
            max-width: 100%;
            height: auto;
        }
        @import url(https://fonts.googleapis.com/css?family=Roboto:700);
        html,
        body {
            font-family: Roboto;
            height: 100%;
            width: 100%;
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="background-wrapper"></div>
    <div class="body-wrapper"></div>

    <!-- navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-1">
        <a class="navbar-brand" href="#" style="width: 190px;"><img src="assets/img/MtoF_logo1.png" alt="mtof"></a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </nav>

    <section id="about">
        <div class="container">
            <div class="card row">
                <!-- <div class=""> -->

                    <div class="col-sm-6 col-md-6 mx-auto text-center">
                        <img src="assets/img/login.png" alt="mtof" style="width: 200px;"><br>
                        <a href="<?php echo base_url(); ?>MtoF_sign_up1/">会員でない方はこちらから</a>
                    </div>

                    <form class="form-login">
                        <!-- row1 -->
                        <div class="form-group col-sm-12 col-md-12">
                            <label>名前</label>
                            <input class="form-control form-container" type="text" name="name" id="name" 　
                                placeholder="(例)ヤマダタロウ" title="全角カナで入力してください">
                        </div>

                        <!-- row2 -->
                        <div class="form-group col-sm-12 col-md-12">
                            <label>メールアドレス</label>
                            <input class="form-control form-container" type="email" name="mail" id="mail">
                        </div>

                        <!-- row3 -->
                        <div class="form-group col-sm-12 col-md-12">
                            <label>パスワード</label>
                            　<input class="form-control form-container" type="password" name="pswd" id="pswd" title="半角英字8文字以上で入力してください" >
                        </div>

                        <!-- row4 -->
                        <div class="col-sm-12 col-md-12 checkbox mb-2">
                            　<label><input type="checkbox" value="remember-me">パスワードを保存します</label>
                        </div>

                        <!-- row5 -->
                        <div class="form-group col-sm-12 col-md-12">
                            <button class="btn btn-success btn-lg btn-block" type="submit">送　信</button>
                        </div>

                        <!-- CSRF対策 「トークンの埋め込み」 -->
                        <input type="hidden" name="token" id="token" value="<?php echo $_SESSION['token']; ?>">
                    </form>

                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="py-4 bg-dark text-light text-center">
        <ul class="navbar-nav mr-auto">
            <small>&copy 2019-2019 Mail to the Future</small>   
        </ul>
    </footer>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script>
            $("form").on('submit', function(){
                //http非同期
                event.preventDefault();4
                
                $(this).css('pointer-event','none');
            
                Swal.fire({
                    title: '送信しますか',
                    text: "",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK',
                    allowEnterkey: 'true',
                }).then((result) => {
                    // ここでAjax?
     
                    if (result.value) {
                        Swal.fire({
                            title: '送信完了しました',
                            text: "",
                            type: 'success',
                            allowEnterkey: 'true',
                        }).then((result) => {
                            if (result.value) {
                                $(this).submit();
                            }
                        });
                    }
                });
            });
        </script>   

</body>
</html>