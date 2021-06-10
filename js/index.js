//Cutting Contants Text

const conTxt = document.querySelectorAll('.con-txt p a');

conTxt.forEach(element => {
  const cutTxt = element.textContent.slice(0, 10) + "...";
  element.textContent = cutTxt;
});


//Mobile Menu Activate

const mobileMenu = document.querySelector('.mobile-menu');

mobileMenu.onclick = () => {
  mobileMenu.classList.toggle('active');
}


//Pie Chart Rendering Code
$(function(){
  $(window).ajaxComplete(function(){
  let lWidth = 10;
  let tWidth = 8;

  let eachSize = 90;
  let pieSize = 200;
  let clearSet;
  const winWidth = $(window).width();

  
  if(winWidth <= 1280 && winWidth > 950) {
    pieSize = 180;
  } else if(winWidth <= 950 && winWidth > 400){
    pieSize = 170;
  } else if( winWidth <= 400){
    pieSize = 140;
  } else {
    pieSize = 200;
  }


  // var chart = window.chart = new EasyPieChart(document.querySelector('.total-chart .chart'), {
    $('.total-chart .chart').easyPieChart({
    easing: 'easeOutElastic',
    delay: 3000,
    barColor: '#7c41f5',
    trackColor: '#c1a3ff',
    scaleColor: false,
    lineWidth: 18,
    trackWidth: 18,
    size: pieSize,
    lineCap: 'butt',
    onStep: function(from, to, percent) {
      this.el.children[0].innerHTML = Math.round(percent);
    }
  });


  // window.addEventListener('resize', function(){
  $(window).resize(function(){
    const winWidth = $(window).width();

    if(winWidth <= 1280 && winWidth > 950) {
      pieSize = 180;
    } else if(winWidth <= 950 && winWidth > 400){
      pieSize = 170;
    } else if( winWidth <= 400){
      pieSize = 140;
    } else {
      pieSize = 200;
    }


    clearTimeout(clearSet);

    clearSet = setTimeout(function(){

      $('.total-chart .chart canvas').removeData('easyPieChart').find('canvas').remove();
      // var chart = window.chart = new EasyPieChart(document.querySelector('.total-chart .chart'), {
        $('.total-chart .chart').easyPieChart({
          easing: 'easeOutElastic',
          delay: 3000,
          barColor: '#7c41f5',
          trackColor: '#c1a3ff',
          scaleColor: false,
          lineWidth: 18,
          trackWidth: 18,
          size: pieSize,
          lineCap: 'butt',
          onStep: function(from, to, percent) {
            this.el.children[0].innerHTML = Math.round(percent);
          }
        });
      
      }, 150);    
    });


    //--------------each chart
    if(winWidth <= 950) {
    lWidth = 5;
    tWidth = 5;
    } else {
      lWidth = 8;
      tWidth = 8;
    }

    if(winWidth <= 1280) {
      eachSize = 90;
    } else {
      eachSize = 100;
    }

  
    const poData = [
      {poKind:'.db-pofol', bColor:'#7c41f5', tColor:'#c1a3ff'},
      {poKind:'.api-pofol', bColor:'#ff9062', tColor:'#fcbca2'},
      {poKind:'.renewal-pofol', bColor:'#3acbe8', tColor:'#91edff'},
      {poKind:'.planning-pofol', bColor:'#69c', tColor:'#ace'},
      // {poKind:'.total-chart', bColor:'#69c', tColor:'#ace'},
    ];


    function startPie(){
      const mapData = poData.map(value => {
        // console.log(value.a);
        //document.querySelector(value.poKind +  ' .chart canvas').remove();
        // var chart = window.chart = new EasyPieChart(document.querySelector(value.poKind + ' .chart'), {
        $(value.poKind + ' .chart').easyPieChart({
          easing: 'easeOutElastic',
          delay: 3000,
          barColor: value.bColor,
          trackColor: value.tColor,
          scaleColor: false,
          lineWidth: lWidth,
          trackWidth: tWidth,
          size : eachSize,
          lineCap: 'round',
            onStep: function(from, to, percent) {
              this.el.children[0].innerHTML = Math.round(percent);
            }
        // });
        });
      });
    }
    startPie();
  });

});





//Open Modal for Input Rates
//1. 버튼 DOM 저장 => index.php 137번째 줄
const modalbtn = document.querySelector('#open-modal');

const modal = document.querySelector('#myModal');
const span = document.querySelector('.close');
const times = document.querySelector('#times');

modalbtn.onclick = function(){
  modal.style.display = "block";
}

// times.onclick = function() {
//   modal.style.display = "none";
// }

// window.onclick = function(){
//   if(event.target == modal){
//     modal.style.display = "none";
//   }
// }
