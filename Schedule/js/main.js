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

let speed_ball1 = 0.3;
let speed_ball2 = 0.35;
let speed_ball3 = 0.1;
let speed_ball4 = 0.25;

let Y_ball1 = 0;
let Y_ball2 = 0;
let Y_ball3 = 0;
let Y_ball4 = 0;

let start_scroll = 0;

window.addEventListener("scroll", function (e) {

    let ball1 = document.querySelector('.ball1');
    let ball2 = document.querySelector('.ball2');
    let ball3 = document.querySelector('.ball3');
    let ball4 = document.querySelector('.ball4');

    if(window.pageYOffset != start_scroll) {

      Y_ball1 += speed_ball1 * (window.pageYOffset - start_scroll);
      Y_ball2 += speed_ball2 * (window.pageYOffset - start_scroll);
      Y_ball3 += speed_ball3 * (window.pageYOffset - start_scroll);
      Y_ball4 += speed_ball4 * (window.pageYOffset - start_scroll);
    }

    start_scroll = window.pageYOffset;

    ball1.setAttribute("style", "transform:translateY(" + Y_ball1 + "px);");
    ball2.setAttribute("style", "transform:translateY(" + Y_ball2 + "px);");
    ball3.setAttribute("style", "transform:translateY(" + Y_ball3 + "px);");
    ball4.setAttribute("style", "transform:translateY(" + Y_ball4 + "px);");
});