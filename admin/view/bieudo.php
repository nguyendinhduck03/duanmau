<div class="row2">
      <div class="row2 font_title">
        <h1>Biểu đồ</h1>
      </div>
      <div class="row2 form_content ">
        <div
          id="myChart" style="width:100%; width:800px; height:500px; align-items: center">
        </div>
        <script>
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);
          function drawChart() {

  // Set Data

            const data = google.visualization.arrayToDataTable([
              ['Contry', 'Mhl'],
                <?php
                foreach ($danhmuc as $dm) {   
                  extract($dm);
                  $thongke = load_bieudo($id);
                  extract($thongke);
                  ?>
                  ['<?php echo $name ?>',<?php echo $soluong?>],
               <?php } ?>
            ]);

  // Set Options
            const options = {
              title:'Biểu đồ danh mục sản phẩm',
              is3D:true
            };

  // Draw
            const chart = new google.visualization.PieChart(document.getElementById('myChart'));
            chart.draw(data, options);

          }
        </script>
      </div>
      <button><a href="index.php?act=thongke">Thống kê</a></button>
</div>