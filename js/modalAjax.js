$(function(){

  $.ajax(
    {url: "/schedule/php/read_json.php",
      success: function(result){
        // console.log(result);

        const obj = JSON.parse(result);

        // console.log(obj);
        // console.log(typeof(obj[0].db_rate));

        const dbRate = Number(obj[0].db_rate);
        const apiRate = Number(obj[0].api_rate);
        const renRate = Number(obj[0].ren_rate);
        const plaRate = Number(obj[0].pla_rate);

        //console.log(result[0].api_rate);
        $(".rate-form").html(
          `<p>
            <label for="db-pro">DB Project</label>
            <input type="text" id="db-pro" value="${dbRate}" name = "db_pro">
          </p>
          <p>
            <label for="api-pro">API Project</label>
            <input type="text" id="api-pro" value="${apiRate}" name = "api_pro">
          </p>
          <p>
            <label for="ren-pro">Renewal Project</label>
            <input type="text" id="ren-pro" value="${renRate}" name = "ren_pro">
          </p>
          <p>
            <label for="pl-pro">Planning Project</label>
            <input type="text" id="pl-pro"value="${plaRate}" name = "pl_pro">
          </p>`
        );
        
        $(".each-graph").html(
          `<div class="db-pofol">
            <span class="chart" data-percent="${dbRate}">
              <span class="percent"></span>
            </span>
            <b>DB Project</b>
            <i class="fa fa-database"></i>
          </div>
          <div class="api-pofol">
            <span class="chart" data-percent="${apiRate}">
              <span class="percent"></span>
            </span>
            <b>API Project</b>
            <i class="fa fa-thermometer-half"></i>
          </div>
          <div class="renewal-pofol">
            <span class="chart" data-percent="${renRate}">
              <span class="percent"></span>
            </span>
            <b>Renewal Project</b>
            <i class="fa fa-clone"></i>
          </div>
          <div class="planning-pofol">
            <span class="chart" data-percent="${plaRate}">
              <span class="percent"></span>
            </span>
            <b>Planning Project</b>
            <i class="fa fa-bar-chart-o"></i>
          </div>`
        );
      }

      
    }
  );

});