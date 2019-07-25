
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">assignment</i>
                  </div>
                  <h4 class="card-title">Location Info</h4>
                </div>
                <div class="card-body">
                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                  </div>
                  <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr >
                          <th>City</th>
                          <th>Position</th>
                          <th>Address</th>
                          
                          <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>City</th>
                          <th>Position</th>
                          <th>Address</th>
                        
                          <th class="text-right">Actions</th>
                        </tr>
                      </tfoot>
                      <tbody id="dt">
                        
                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- end content-->
              </div>
              <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
            
              <input type="hidden" name="cityval" id="cityval">
              <input type="hidden" name="citynum" id="citynum">
              <button id="btn">Update Data</button>
            
          </div>
          <!-- end row -->
        </div>
      </div>

     
      <script src="./assets/js/core/jquery-3.4.1.min.js"></script>
      <script>

            let cityval=[];
            let citynums=[];

            $.ajax({
            
            url: "./tables/ttwify.json",
            type: "GET",
            dataType: "json",
            success: function(r){
                let citys=[];
                for(let i=0;i<r.length;i++){

                    citys.push(r[i].區域);

                    $("#dt").append(/*html*/`
                        <tr>
                            <td> ${r[i].區域} </td>
                            <td> ${r[i].熱點名稱} </td>
                            <td> ${r[i].地址} </td>
                            <td class='text-right'>
                            <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
                            <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                            <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                            </td>
                        </tr>
                    `);

                }
            
            //確認型態
            // console.log(typeof(citys));

            //全部的縣市(資料)總數:446 (Array)
            // console.log(citys);

            let total=citys.length;  

            // console.log(total);    

            //透過filter篩選過濾重複的縣市
            var res= citys.filter(function(element,index,arr){
                return arr.indexOf(element) === index;
            });

            //縣市清單:19 (Array)
            // console.log(res);

            //計算每個縣市出現的次數
            var collectionRepeat = function(box, key){
            let counter = {};
  
            box.forEach(function(x) { 
             counter[x] = (counter[x] || 0) + 1; 
            });
  
            let val = counter[key];
 
            if (key === undefined) {
              return counter;
            }               
  
              return (val) === undefined ? 0 : val;
            };
            
            let citycount= collectionRepeat(citys);
            
            
            // console.log(citycount); 


            //算出各縣市百分比
            for(let i=0;i<res.length;i++){
              citynums.push(collectionRepeat(citys,res[i]));
              cityval.push(((collectionRepeat(citys,res[i])/total)*100).toFixed(2));
              // console.log(res[i]+":"+((collectionRepeat(citys,res[i])/total)*100).toFixed(2)+"%");
            }

            $("#cityval").val(cityval);
            
            $("#citynum").val(citynums);
            
            // $("#btn").on("click",function(){

            //   let cvl=("#cityval").val();
            //   console.log(cvl);
            //   $.post("api.php?do=val",{cvl},function(x){
            //   console.log(x);
            //   // alert(x);
            //   })
            //   }) 


            }



          })

          // console.log(citynums);
          // console.log(cityval);

           $("#btn").on("click",function(){

            let cvl=$("#cityval").val();
            // console.log(cvl);
            let citynums=$("#citynum").val();
            console.log(citynums);
            $.post("api.php?do=val",{cvl,citynums},function(x){
              console.log(x);
             
            })
          }) 

          // console.log(cityval);
        
          // $.post("api.php?do=val",{cityval},function(x){
          //   console.log(x);
          // })
      </script>
  
</body>

</html>