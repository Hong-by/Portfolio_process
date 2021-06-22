
<section class="table-ui">
  <div class="new-update">
    <div class="tit-box">
      <p>Recent Update</p>
      <a href="/schedule/pages/sp_detail_form.php">More</a>
    </div>

    <ul class="con-details">
    <?php
      include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
      $sql = "SELECT * FROM sp_table ORDER BY SP_idx DESC LIMIT 5";
      $ta_result = mysqli_query($dbConn, $sql);
      $ta_num_result = mysqli_num_rows($ta_result);
      if(!$ta_num_result){

    ?>

    <li>
        <p>입력된 일정이 없습니다.</p>
    </li>

    <?php
      } else {
        while($ta_row = mysqli_fetch_array($ta_result)){
          $ta_row_cate = $ta_row['SP_cate'];
          $ta_row_tit = $ta_row['SP_tit'];
          $ta_row_reg = $ta_row['SP_reg'];
          $ta_row_idx = $ta_row['SP_idx'];
    ?>
    <li>
      <i class="fa fa-<?=$ta_row_cate?>"></i>
      <div class="con-txt">
        <p><a href="/schedule/pages/sp_detail_view.php?pageNum=<?=$ta_row_idx?>"><?=$ta_row_tit?></a></p>
        <em><?=$ta_row_reg?></em>
      </div>
    </li>
    <?php
        };
      };
    ?>
    </ul>
  </div>
  <div class="each-project">
    <div class="each-btns">
      <button class="active" value="database">Database</button>
      <button value="thermometer-half">API</button>
      <button value="clone">Renewal</button>
      <button value="bar-chart-o">Planning</button>
    </div>
    <ul class="con-details" id="con-details">

    </ul>
  </div>
</section>
<script>

  function reqListener() {
    // console.log(this.responseText);
    const jsonObj = JSON.parse(this.responseText);
    //json에서 받아온 값을 파싱 시킨다. responseText 의 값을
    const jsonDom = document.querySelector('#con-details')
    // console.log(jsonObj);
    // console.log(jsonDom);
    

    function callTabs(n) {
      //console.log("abc");
      //console.log(jsonObj);

      //  for(let i = 0; i < jsonObj.length; i++){
      //    console.log(jsonObj[i]);
      //  }
      //jsonObj.forEach(elements => {});
      // jsonObj.forEach(function(elements){
      //   console.log(elements);
      const result = jsonObj.filter(value => {
        return value.sp_cate == n;
        // value == "database"
      });
      
      // console.log(result);

      for(let i = 0; i < result.length; i++){
        // console.log(result[i].sp_idx);
        jsonDom.innerHTML +=
        `
        <li>
          <i class="fa fa-${result[i].sp_cate}"></i>
          <div class="con-txt">
            <p><a href="/schedule/pages/sp_detail_view.php?pageNum=${result[i].sp_idx}">${result[i].sp_tit}</a></p>
            <em>${result[i].sp_reg}</em>
          </div>
        </li>
        `
      };
    };
    
    const btns = document.querySelectorAll('.each-btns button');
    console.log(btns);

    btns.forEach(value => {
      console.log(value);
      value.addEventListener('click', function(){
        // console.log(value);
        btns.forEach(btnItem => {
          btnItem.className = "";
        });
        

        this.className = "active";
        jsonDom.innerHTML = "";
        // console.log(this.getAttribute('value'));
        const itemVal = this.getAttribute('value');
        callTabs(itemVal);
      });
    });
    callTabs("database");
  };
  


  var oReq = new XMLHttpRequest();
  oReq.addEventListener("load", reqListener);
  oReq.open("GET", "/schedule/php/read_table_json.php");
  oReq.send();




</script>