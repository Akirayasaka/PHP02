<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">assignment</i>
                  </div>
                  <h4 class="card-title">User Management</h4>
                </div>
                <div class="card-body">
                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                  </div>
                  <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>  
                          <th class="text-right">Actions</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        
                          <?php
                              $users=all("user","");
                              foreach($users as $k=>$v){
                                ?>
                                  <tr>
                                      <td><?=$v['acc'];?></td>
                                      <td><?=$v['mail'];?></td>
                                      <td class="text-right">
                                        <?php
                                          if($v['acc']=='admin'){

                                          }else{
                                            ?>
                                            <button  class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></button>
                                            <button  class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></button>
                                            <button id="<?=$v['id'];?>" class="btn btn-link btn-danger btn-just-icon remove deld"><i class="material-icons">close</i></button>
                                            <?php
                                          }
                                         ?>
                                      </td>
                                  </tr>
                                <?php
                              }
                          ?>


                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- end content-->
              </div>
              <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
          </div>
          <!-- end row -->
        </div>
      </div>

      <script src="./assets/js/core/jquery-3.4.1.min.js"></script>
      <script>
       $(".deld").on("click",function(){
         let x = $(this).attr('id');
         let y =$(this).parents('tr');

         Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
                if (result.value) {
                  $.post("./api.php?do=del",{x},function(){
                    y.remove();
                  })
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                 )
                }
              })

        
       })
        

      
      
      </script>