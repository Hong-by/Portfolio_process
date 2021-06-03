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
document.addEventListener('DOMContentLoaded', function() {

  let lWidth = 10;
  let tWidth = 8;
  const winWidth = window.innerWidth;

  if(winWidth <= 950) {
    lWidth = 5;
    tWidth = 4;
  } else {
    lWidth = 10;
    tWidth = 8;
  }

  var chart = window.chart = new EasyPieChart(document.querySelector('.total-chart .chart'), {
    easing: 'easeOutElastic',
    delay: 3000,
    barColor: '#7c41f5',
    trackColor: '#c1a3ff',
    scaleColor: false,
    lineWidth: 18,
    trackWidth: 18,
    size:200,
    lineCap: 'butt',
    onStep: function(from, to, percent) {
       this.el.children[0].innerHTML = Math.round(percent);
    }
 });


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
    
      var chart = window.chart = new EasyPieChart(document.querySelector(value.poKind + ' .chart'), {
      easing: 'easeOutElastic',
      delay: 3000,
      barColor: value.bColor,
      trackColor: value.tColor,
      scaleColor: false,
      lineWidth: lWidth,
      trackWidth: tWidth,
      lineCap: 'round',
        onStep: function(from, to, percent) {
          this.el.children[0].innerHTML = Math.round(percent);
        }
      });
    });
  }
  startPie();

});

const abc = window.innerHeight;
console.log(abc);