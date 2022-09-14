var map;$(document).ready(function(){$("#slideshow > div:gt(0)").hide();setInterval(function(){$('#slideshow > div:first').fadeOut(1000).next().fadeIn(1000).end().appendTo('#slideshow');},3000);$('#backTop').hide();$(window).scroll(function(){if($(this).scrollTop()>150){$("#backTop").fadeIn(400);$('#nav').css('position:fixed');}else{$("#backTop").fadeOut(400);}});$('#backTop').click(function(){$('body,html').animate({scrollTop:0},800);return false;});$(".menu").click(function(e){e.preventDefault();$(".d").slideToggle(500);return false;});});function myFunction(){var x=document.getElementById("myTopnav");if(x.className==="topnav"){x.className+=" responsive";}else{x.className="topnav";}}
function init(){var imgDefer=document.getElementsByTagName('img');for(var i=0;i<imgDefer.length;i++){if(imgDefer[i].getAttribute('data-src')){imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));}}}
window.onload=init;
// Analytics
//(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-85342858-1', 'auto');  ga('send', 'pageview');

//
//gMap3
if($('#map').length > 0){
    // Initialize and add the map
function initialize() { 
    var myLatlng = new google.maps.LatLng(23.718998, 90.411881);
    var mapOptions = {
        zoom: 18,
        center: myLatlng,
        gestureHandling: "greedy",
        zoomControl: true,        
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);
    //=====Initialise Default Marker    
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        animation: google.maps.Animation.BOUNCE,
        title: 'Anika Machinery'
    //=====You can even customize the icons here
    });
     //=====Initialise InfoWindow
    var infowindow = new google.maps.InfoWindow({
      content: "<p>Anika Machinery, 83, Sajeda Ali Plaza, Nawabpur, Dhaka.</p>"
  });
   //=====Eventlistener for InfoWindow
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}
window.addEventListener('load', initialize)
//EndMap
}