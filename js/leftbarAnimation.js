/**
 * Created by Philipp on 25.10.2017.
 */
$('document').ready(function () {
   $('#login').click(function () {
        document.getElementsByClassName('container')[0].style.marginLeft="80%";
        document.getElementsByTagName('html')[0].style.marginLeft="80%";
        document.getElementsByClassName('container')[0].style.width="180%";
        document.getElementsByTagName('html')[0].style.width="180%";
        document.getElementById('mainNav').style.marginLeft="80%";
        // document.getElementsByTagName('*')[0].style.marginLeft="80%";
        document.getElementById('loginPage').style.left="0";
    }) ;
    $('#signin').click(function () {
        document.getElementsByClassName('container')[0].style.marginLeft="80%";
        document.getElementsByTagName('html')[0].style.marginLeft="80%";
        document.getElementsByClassName('container')[0].style.width="180%";
        document.getElementsByTagName('html')[0].style.width="180%";
        document.getElementById('mainNav').style.marginLeft="80%";
        // document.getElementsByTagName('*')[0].style.marginLeft="80%";
        document.getElementById('registration').style.left="0";
    }) ;
   $('.exit,header').click(function () {
       document.getElementsByClassName('container')[0].style.marginLeft="auto";
       document.getElementsByTagName('html')[0].style.marginLeft="0%";
       document.getElementsByClassName('container')[0].style.width="100%";
       document.getElementsByTagName('html')[0].style.width="100%";
       document.getElementById('mainNav').style.marginLeft="0";
       // document.getElementsByTagName('*')[0].style.marginLeft="80%";
       document.getElementById('loginPage').style.left="-100%";
       document.getElementById('registration').style.left="-100%";
   });


});