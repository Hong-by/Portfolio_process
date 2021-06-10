$(function(){
  $.ajax(
    {url: "/schedule/php/read_json.php",
      success: function(result){



        const total_obj = JSON.parse(result);


        const dbRate = Number(total_obj[0].db_rate);
        const apiRate = Number(total_obj[0].api_rate);
        const renRate = Number(total_obj[0].ren_rate);
        const plaRate = Number(total_obj[0].pla_rate);



        const spAvg = (dbRate * 0.4) + (apiRate * 0.2) + (renRate * 0.1) + (plaRate * 0.3);

        $(".total-pofol .total-chart").html(
            `<span class="chart easyPieChart" data-percent="${spAvg}">
              <span class="percent"></span>
            </span>`
        );

      }
    }
  ); 
});