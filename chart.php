<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="header text-center">
        <h3 class="title">Chartist</h3>

      </div>



      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-icon card-header-info">
              <div class="card-icon">
                <i class="material-icons">timeline</i>
              </div>
              <h4 class="card-title">Coloured Bars Chart
                <small> - Rounded</small>
              </h4>
            </div>
            <div class="card-body">

              <canvas id="barchart"></canvas>

            </div>
          </div>
        </div>
      </div>

      <div class="row">

        <div class="col-md-12">

          <div class="card card-chart">
            <div class="card-header card-header-icon card-header-danger">
              <div class="card-icon">
                <i class="material-icons">pie_chart</i>
              </div>
              <h4 class="card-title">Pie Chart</h4>
            </div>
            <div class="card-body">

              <canvas id="piechart" style="overflow:auto;"></canvas>

            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-md-12">
                  <h6 class="card-category">資料來源</h6>
                </div>
                <div class="col-md-12">
                  <p style="font-family:'Microsoft JhengHei';font-weight:bold;">
                    <i class="fas fa-subway text-info"></i> 台灣鐵路局
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</div>

<?php
    //撈出縣市名稱
    $perCity=find("percentagetw",1);
    $arr0=[];
    foreach($perCity as $k=>$v){
      if($k != 'id'){
        array_push($arr0,"'".$k."'");
      }
    }
    // print_r(implode(",",$arr0));
    
    //撈出縣市百分比
    $percent = all("percentagetw",['id'=>1]);
    $arr1=[];
    for($i=1;$i<(count($percent[0])/2);$i++){
      // echo $percent[0][$i]."<br>";
        $x=$percent[0][$i];
        array_push($arr1,$x);
    }
    // print_r(implode(",",$arr1));

    $nums=all("percentagetw",['id'=>2]);
    $arr2=[];
    for($i=1;$i<(count($nums[0])/2);$i++){
        $x=$nums[0][$i];
        array_push($arr2,$x);
    }
    // print_r($arr2);

?>
<script src="./assets/js/core/jquery-3.4.1.min.js"></script>

<script src="./assets/js/plugins/Chart.min.js"></script>

<script>

  function rc() {

    var colorStr = "#";
    //字串的每一字元的範圍
    var randomArr = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f'];
    //產生一個六位的字串
    for (var i = 0; i < 6; i++) {
      //15是範圍上限，0是範圍下限，兩個函式保證產生出來的隨機數是整數
      colorStr += randomArr[Math.ceil(Math.random() * (15 - 0))];
    }
    return colorStr;
  }

  let nnn = <?=(count($nums[0]) / 2);?> ;
  // console.log(nnn);

  let colors = new Array;
  for (let x = 1; x < nnn; x++) {
    colors.push(rc());
  }
  // console.log(colors);

  // let cha = document.getElementById("piechart").getContext("2d");
  let piecha = $("#piechart");
  let cha1 = new Chart(piecha, {

    type: "pie",
    data: {
      datasets: [{
        data: [ <?=implode(",", $arr1);?> ],
        // backgroundColor: ["#000", "#00cc99", "#ff0"]
        backgroundColor: colors
      }],
      // labels: ["A1", "B1", "C1"]
      labels: [ <?=implode(",", $arr0);?> ]

    },
    options: {
      title: {
        text: "ABC funtion",
        display: false
      }

    }

  })


  let barcha = $("#barchart");
  let cha2 = new Chart(barcha, {
    type: "bar",
    // type: "line",
    data: {
      labels: [ <?=implode(",", $arr0);?> ],
      datasets: [{
          label: "據點數量",
          data: [ <?=implode(",", $arr2);?> ],
          borderColor: "yellow",
          backgroundColor: "#ffc7c7",
          fill: true,
          borderWidth: 1,
          // lineTension:0 
        },
        // {
        //     label:"XXXXX",
        //     data:[2,0,6,5,9],
        //     borderColor:"red",
        //     backgroundColor:"yellow",
        //     fill:true,
        //     borderWidth:1,
        //     // lineTension:0
        // },
      ]
    },
    options: {
      title: {
        text: "Test",
        display: false
      }
    }
  })
</script>