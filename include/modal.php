<!-- 2. 모달 박스 UI 제작 => style.css 160번째 줄  -->
<div class="modal" id="myModal">
    <div class="modal-content">
      <!-- <span class="close" id="times">&times;</span> -->
      <!-- <p>Some text in the Modal....</p> -->
      <form action="/schedule/php/sp_rate_insert.php" class="rate-form" name="rate_form">
        


      </form>
      <div class="updateBtnBox">
        <button type="button" id="updateBtn">Update Rate</button>
      </div>
    </div>
    <script>
      const updateBtn = document.querySelector('#updateBtn');
      // const modal = document.querySelector('#myModal');
      updateBtn.onclick = function() {
        //alert('abc');
        document.rate_form.submit();
        // modal.style.display = "none";
      };
    </script>

</div>