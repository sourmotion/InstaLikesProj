/**
 * Created by Philipp on 25.10.2017.
 */
$('document').ready(function () {
   $('#login').click(function () {
        logInShow();
    }) ;
    $('#signin').click(function () {
       signInShow();
    }) ;
    $('#cabinet').click(function () {
        $.ajax('js/checkCookie.php',{
            success:function (result) {
                console.log(result);
                if(result==='1')
                    cabinetShow();
                else
                    signInShow();
            }
        });
    });


    $('#reregister').click(function () {
        regExitLoginShow();
    });
    $('#relogin').click(function () {
        loginExitRegShow();
    });

    function loginExitRegShow() {;
        document.getElementById('registration').style.left="-100%";
        document.getElementsByClassName('container')[0].style.marginLeft="auto";
        document.getElementsByTagName('html')[0].style.marginLeft="0%";
        document.getElementsByClassName('container')[0].style.width="100%";
        document.getElementsByTagName('html')[0].style.width="100%";
        document.getElementById('mainNav').style.marginLeft="0";

        logInShow();

    }

    function regExitLoginShow() {
        document.getElementById('loginPage').style.left="-100%";
        document.getElementsByClassName('container')[0].style.marginLeft="auto";
        document.getElementsByTagName('html')[0].style.marginLeft="0%";
        document.getElementsByClassName('container')[0].style.width="100%";
        document.getElementsByTagName('html')[0].style.width="100%";
        document.getElementById('mainNav').style.marginLeft="0";
        // document.getElementsByTagName('*')[0].style.marginLeft="80%";

        // document.getElementById('registration').style.left="-100%";
        signInShow();
    }

   function logInShow() {
       document.getElementsByClassName('container')[0].style.marginLeft="80%";
       document.getElementsByTagName('html')[0].style.marginLeft="80%";
       document.getElementsByClassName('container')[0].style.width="180%";
       document.getElementsByTagName('html')[0].style.width="180%";
       document.getElementById('mainNav').style.marginLeft="80%";
       // document.getElementsByTagName('*')[0].style.marginLeft="80%";
       document.getElementById('loginPage').style.left="0";
       $('.exit,header').click(function () {
           document.getElementsByClassName('container')[0].style.marginLeft="auto";
           document.getElementsByTagName('html')[0].style.marginLeft="0%";
           document.getElementsByClassName('container')[0].style.width="100%";
           document.getElementsByTagName('html')[0].style.width="100%";
           document.getElementById('mainNav').style.marginLeft="0";
           // document.getElementsByTagName('*')[0].style.marginLeft="80%";
           document.getElementById('loginPage').style.left="-100%";
           // document.getElementById('registration').style.left="-100%";
       });
   }

   function signInShow() {
       document.getElementsByClassName('container')[0].style.marginLeft="80%";
       document.getElementsByTagName('html')[0].style.marginLeft="80%";
       document.getElementsByClassName('container')[0].style.width="180%";
       document.getElementsByTagName('html')[0].style.width="180%";
       document.getElementById('mainNav').style.marginLeft="80%";
       // document.getElementsByTagName('*')[0].style.marginLeft="80%";
       document.getElementById('registration').style.left="0";
       $('.exit,header').click(function () {
           document.getElementsByClassName('container')[0].style.marginLeft="auto";
           document.getElementsByTagName('html')[0].style.marginLeft="0%";
           document.getElementsByClassName('container')[0].style.width="100%";
           document.getElementsByTagName('html')[0].style.width="100%";
           document.getElementById('mainNav').style.marginLeft="0";
           // document.getElementsByTagName('*')[0].style.marginLeft="80%";
           // document.getElementById('loginPage').style.left="-100%";
           document.getElementById('registration').style.left="-100%";
       });
   }

   function cabinetShow() {
       // document.getElementsByClassName('container')[0].style.marginRight = "180%";
       document.getElementsByTagName('html')[0].style.marginLeft = "-80%";
       document.getElementsByClassName('container')[0].style.width = "180%";
       document.getElementsByTagName('html')[0].style.width = "180%";
       document.getElementById('mainNav').style.marginLeft = "-80%";
       // document.getElementsByTagName('*')[0].style.marginRight="80%";
       document.getElementById('cabinetPage').style.left = "20%";

       $('.exit,header').click(function () {
           document.getElementsByClassName('container')[0].style.marginLeft="auto";
           document.getElementsByTagName('html')[0].style.marginLeft="0";
           document.getElementsByClassName('container')[0].style.width="100%";
           document.getElementsByTagName('html')[0].style.width="100%";
           document.getElementById('mainNav').style.marginLeft="0";
           // document.getElementsByTagName('*')[0].style.marginLeft="80%";
           // document.getElementById('loginPage').style.left = "-100%";
           document.getElementById('cabinetPage').style = "left: 100%;";
           // console.log('exit');
       });
   }

});