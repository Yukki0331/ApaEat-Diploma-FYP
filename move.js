let sun = document.getElementById('sun');
let cloud = document.getElementById('cloud');
let cloud2 = document.getElementById('cloud2');
let cloud3 = document.getElementById('cloud3');
let cloud4 = document.getElementById('cloud4');
let food = document.getElementById('foodd');
let hotpot = document.getElementById('hotpot');
let spaghettie = document.getElementById('spaghettie');
let nasilemak = document.getElementById('nasilemak');
let burger = document.getElementById('burger');
let text = document.getElementById('text')
let btn = document.getElementById ('btn')
let restaurant = document.getElementById('restaurant');
let header = document.querySelector('header');


window.addEventListener('scroll',function()
 {
let value = window.scrollY;
sun.style.top = value*0.25 + 'px';
restaurant.style.bottom = value*0.25 + 'px';
text.style.marginRight = value * 2 +'px';
cloud.style.right = value*0.25 + 'px';




})