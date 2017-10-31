<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
      <script src="vendor/jquery/jquery.min.js"></script>
      <script type="text/javascript" src="js/leftbarAnimation.js"></script>
    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">


    

  </head>

  <body id="page-top" ng-app="myApp">
    <?php require_once 'login_signin/checkerToken.php'; tokenSetAndRight();?>
        <div id="cabinetPage">
            <div class="exit" ></div>
            <div class="clear"></div>
        </div>
        <div id="registration">
          <div class="exit" ></div>
          <div class="clear"></div>
          <div class="formWrapper">

          <form action="login_signin/register.php" method="post" style="margin-top: -200px;">
            <a class="navbar-brand js-scroll-trigger" href="" id="logo" style="">InstaLiker</a><br>
            <input type="text" name="name" placeholder="Ваше имя" required /><br>
            <input type="text" name="surname" placeholder="Ваша фамилия" required /><br>
            <input type="text" name="email" placeholder="Ваш email" required /><br>
            <input type="password" name="password" placeholder="Пароль" required /><br>
            <input type="submit" name="submit" value="Зарегестрироваться" />
              <p style="margin-left: 29%; ">либо <a href="" style="font-size: 1.2em;" id="relogin" >Войти </a></p>
          </form>
          </div>

        </div>
        <div id="loginPage">
          <div class="exit" ></div>
          <div class="clear"></div>
          <div class="formWrapper">

            <form action="login_signin/login.php" method="post" style="margin-top: -200px;">
              <a class="navbar-brand js-scroll-trigger" href="" id="logo" style="">InstaLiker</a><br>
              <input type="text" name="email" placeholder="Ваш email" required /><br>
              <input type="password" name="password" placeholder="Пароль" required /><br>
              <input type="submit" name="submit" value="Войти" />
                <p style="margin-left: 16%;">либо <a href="" style="font-size: 1.1em;" id="reregister" >Зарегестрироваться </a></p>
            </form>

          </div>
        </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">InstaLiker</a>


        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#pricing">Услуги</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">О нас</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" id="cabinet" >Кабинет</a>
            </li>
              <?php
              require_once 'login_signin/checkerToken.php';
              if(!tokenSetAndRight()):
                  ?>

              <li class="nav-item" class="specialLi" style="padding-top: 13px; ">
                  <span class="" href="" style="margin-left:100px;margin-right:-5vw;font-size: 90%;"><a href="" id="login">Войти</a> <span style="margin-left: 10px; margin-right: 10px; color : #ffffff; "> или </span><a
                              href="" id="signin">Зарегистрироваться</a></span>
              </li>
                  <?php
              else:
                  ?>


                  <li class="nav-item" class="specialLi" style="margin-right: -300px; width: 400px; padding-top: 13px; ">
                      <span class="" href="" style="margin-left:100px;margin-right:-5vw;font-size: 90%;"><span style="margin-left: 10px; margin-right: 10px; color : #ffffff; "> Вы авторизованы </span><a href="login_signin/logout.php" id="logout">Выйти</a></span>
                  </li>
              <?php endif;?>


            

          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Стань еще популярнее</div>
          <div class="intro-heading">Вместе с нами</div>
          
        </div>
        <a id="arrBot" href="#pricing">
        <button id="gobottom"><i class="material-icons" id="arr">keyboard_arrow_down</i></button>
        </a>
      </div>
    </header>

   <!-- Container (Pricing Section) -->
	<div id="pricing" class="container-fluid">
      <div class="text-center">
        <h2>Мы предлагаем</h2>
        
      </div>
      <div class="row slideanim">
        <div class="col-sm-4 col-xs-12">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <h1>Basic</h1>
            </div>
            <div class="panel-body">
              <p><strong>20</strong> Lorem</p>
              <p><strong>15</strong> Ipsum</p>
              <p><strong>5</strong> Dolor</p>
              <p><strong>2</strong> Sit</p>
              <p><strong>Endless</strong> Amet</p>
            </div>
            <div class="panel-footer">
              <h3>$19</h3>
              <h4>per month</h4>
              <button class="btn btn-lg">Sign Up</button>
            </div>
          </div>      
        </div>     
        <div class="col-sm-4 col-xs-12">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <h1>Pro</h1>
            </div>
            <div class="panel-body">
              <p><strong>50</strong> Lorem</p>
              <p><strong>25</strong> Ipsum</p>
              <p><strong>10</strong> Dolor</p>
              <p><strong>5</strong> Sit</p>
              <p><strong>Endless</strong> Amet</p>
            </div>
            <div class="panel-footer">
              <h3>$29</h3>
              <h4>per month</h4>
              <button class="btn btn-lg">Sign Up</button>
            </div>
          </div>      
        </div>       
        <div class="col-sm-4 col-xs-12">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <h1>Premium</h1>
            </div>
            <div class="panel-body">
              <p><strong>100</strong> Lorem</p>
              <p><strong>50</strong> Ipsum</p>
              <p><strong>25</strong> Dolor</p>
              <p><strong>10</strong> Sit</p>
              <p><strong>Endless</strong> Amet</p>
            </div>
            <div class="panel-footer">
              <h3>$49</h3>
              <h4>per month</h4>
              <button class="btn btn-lg">Sign Up</button>
            </div>
          </div>      
        </div>    
      </div>
    </div>
 <section id="HowToUse">
        <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                <h2 class="HowToUse-heading">Как пользоваться нашим сервисом:</h2>

              </div>
            </div>
            <div class="row text-center" id="rowTextCenter">
              <div class="col-md-4">
                <div class="instruct">Зарегистрируйся</div>


              </div>
              <div class="col-md-4">
                <div class="instruct" style="background-color: #f58020 !important">Оплати нужную услугу</div>


              </div>
              <div class="col-md-4">
                <div class="instruct" style="background-color: #f64e2d !important">Следи за ростом популярности</div>


              </div>

            </div>
          </div>
    </section>
    <!-- Services -->
    <section id="about">
      
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading about-heading">6 причин работать с нами</h2>
              
            </div>
          </div>
          <div class="row text-center">
            <div class="col-md-4">
              <span class="fa-stack fa-4x">
                <i class="fa fa-square fa-stack-2x text-primary"></i>
                <i class="fa fa-check fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Надежность и гарантия</h4>
              
            </div>
            <div class="col-md-4">
              <span class="fa-stack fa-4x">
                <i class="fa fa-square fa-stack-2x text-primary"></i>
                <i class="fa fa-heart fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Реалистичная, постепенная накрутка лайков</h4>
              
            </div>
            <div class="col-md-4">
              <span class="fa-stack fa-4x">
                <i class="fa fa-square fa-stack-2x text-primary"></i>
                <i class="fa fa-eye fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Вам больше не надо будет следить за накруткой на каждой фотографии</h4>
              
            </div>
            <div class="col-md-4">
              <span class="fa-stack fa-4x">
                <i class="fa fa-square fa-stack-2x text-primary"></i>
                <i class="fa fa-user-o fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Оперативная обратная связь 24/7</h4>
              
            </div>
            <div class="col-md-4">
              <span class="fa-stack fa-4x">
                <i class="fa fa-square fa-stack-2x text-primary"></i>
                <i class="fa fa-gears fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Гибкая настройка услуг</h4>
              
            </div>
            <div class="col-md-4">
              <span class="fa-stack fa-4x">
                <i class="fa fa-square fa-stack-2x text-primary"></i>
                <i class="fa fa-percent fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Экономия времени и денег</h4>
              
            </div>
          </div>
        </div>
        
    </section>



    



    <section id = "inWork">
      <div class="container">
        <div class="row">
          <span class="col-lg-6 text-left fa fa-users" id="Online" ng-controller="MyRngCtrl"> {{rngESUS}}</span>
          <span class="col-lg-6 text-left fa fa-heart-o" id="Processing" ng-controller="MyRngCtrl">{{rngESUS}}</span>
        </div>
        <div class="row">
          <span class="col-lg-6 text-center description">Online</span>
          <span class="col-lg-6 text-center description">In process</span>
        </div>

      </div>

    </section>
    

    

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Свяжись с нами</h2>

          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Ваше имя *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Ваш Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Ваш номер телефона *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Ваше сообщение *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-xl" type="submit">Отправить сообщение</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Your Website 2017</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    
    <!-- Bootstrap core JavaScript -->

    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>
    <script>
      var app = angular.module('myApp', []);
app.controller('MyRngCtrl', function($scope, $timeout) {
  $scope.rngESUS = 0;
  (function update() {
    $timeout(update, 1000 * Math.round((Math.random() * (10-2)) + 2));
    $scope.rngESUS = Math.round((Math.random() * (70-50)) + 50);
  }());
});
    </script>
    <script type="text/javascript">
        $('document').ready(function () {
            $('#arrBot').click(function () {
                var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
                if ($(scroll_el).length !== 0) { // проверим существование элемента чтобы избежать ошибки
                    $('html, body').animate({ scrollTop: $(scroll_el).offset().top-54 }, 1000,"easeInOutExpo"); // анимируем скроолинг к элементу scroll_el
                }
                return false; // выключаем стандартное действие
            });
            function repeat() {
                document.getElementById("gobottom").style.paddingTop="4px";
                setTimeout(function () {
                    document.getElementById("gobottom").style.paddingTop="-4px";
                    setTimeout(function () {
                        document.getElementById("gobottom").style.paddingTop="0";
                    },50);
                },50);
                setTimeout(function () {

                    document.getElementById("gobottom").style.paddingTop="4px";
                    setTimeout(function () {
                        document.getElementById("gobottom").style.paddingTop="-4px";
                        setTimeout(function () {
                            document.getElementById("gobottom").style.paddingTop="0";
                        },50);
                    },50);
                },200);
            }

            repeat();
            setInterval(function () {
//                setTimeout(repeat(),500);
                repeat();
            },4000)
        });
    </script>
  <script async type="text/javascript">
    $(document).ready(function () {
//        var start = Date.now(); // сохранить время начала
//        var k=-800;
//        var timer = setInterval(function() {
//            // вычислить сколько времени прошло с начала анимации
//            var timePassed = Date.now() - start;
//
//            if (timePassed >= 5000 ) {
//                clearInterval(timer); // конец через 2 секунды
//                return;
//            }
//            if(k>= 0)
//                return;
//
//            // рисует состояние анимации, соответствующее времени timePassed
//            document.getElementById("rowTextCenter").style.marginLeft = k+"%";
//            console.log(k);
//            k+=5;
//
//        }, 10);

        $(document).scroll(function () {
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            if(parseInt(scrollTop)>=1100) {
//                console.log("Текущая прокрутка: " + scrollTop);
                document.getElementById("rowTextCenter").style.marginLeft = "0px ";

            }
        });

    })
  </script>

    <script type="text/javascript" src="js/rightbarAnimation.js"></script>
  </body>


</html>