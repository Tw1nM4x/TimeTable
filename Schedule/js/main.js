function Open(block,hgt1,hgt2,id){
  if(document.getElementById(id).style.display == 'block'){
      document.getElementById(id).style.display = 'none';
      document.getElementById(block).style.height = hgt1;
  }
  else{
      document.getElementById(id).style.display = 'block';
      document.getElementById(block).style.height = hgt2;
  }
}

let speed_ball2 = 0.1;
let speed_ball3 = 0.05;
let speed_ball4 = 0.1;
let speed_ball9 = 0.25;
let speed_waves = 0.05;
let speed_waves2 = 0.2;


let Y_ball2 = 0;
let Y_ball3 = 0;
let Y_ball4 = 0;
let Y_balls9 = 0;
let Y_waves = 0;
let Y_waves2 = 0;

let start_scroll = 0;

window.addEventListener("scroll", function (e) {

    let ball2 = document.querySelector('.ball2');
    let ball3 = document.querySelector('.ball3');
    let ball4 = document.querySelector('.ball4');
    let balls9 = document.querySelector('.balls9');
    let waves = document.querySelector('.waves');
    let waves2 = document.querySelector('.waves2');

    if(window.pageYOffset != start_scroll) {

      Y_ball2 += speed_ball2 * (window.pageYOffset - start_scroll);
      Y_ball3 += speed_ball3 * (window.pageYOffset - start_scroll);
      Y_ball4 += speed_ball4 * (window.pageYOffset - start_scroll);
      Y_balls9 += speed_ball9 * (window.pageYOffset - start_scroll);
      Y_waves += speed_waves * (window.pageYOffset - start_scroll);
      Y_waves2 += speed_waves2 * (window.pageYOffset - start_scroll);

    }

    start_scroll = window.pageYOffset;

    ball2.setAttribute("style", "transform:translate( " + Y_ball2 + "px, " + Y_ball2 + "px);");
    ball3.setAttribute("style", "transform:translateY(" + Y_ball3 + "px);");
    ball4.setAttribute("style", "transform:translateY(" + Y_ball4 + "px);");
    balls9.setAttribute("style", "transform:translateY(" + Y_balls9 + "px);");
    waves.setAttribute("style", "transform:translateX(" + Y_waves + "px);");
    waves2.setAttribute("style", "transform:translateY( -" + Y_waves2 + "px);");

});
