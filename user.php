<?php
  if(empty($_SESSION['login'])){
    jsm('index.php');
  }
  $member=find("user",['acc'=>$_SESSION['login']]);
?>
<!-- End Navbar -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-icon card-header-rose">
            <div class="card-icon">
              <i class="material-icons">perm_identity</i>
            </div>
            <h4 class="card-title">Edit Profile -
              <small class="category">Complete your profile(option)</small>
            </h4>
          </div>
          <div class="card-body">

            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                  <label class="bmd-label-floating">Company (disabled)</label>
                  <input type="text" class="form-control" disabled>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating">Username</label>
                  <input type="text" class="form-control" name="acc" id="acc" value="<?=$member['acc'];?>" disabled>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Email address</label>
                  <input type="email" class="form-control" value="<?=$member['mail'];?>" disabled>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Fist Name</label>
                  <input type="text" class="form-control" name="fname" id="fname" value="<?=$member['fname'];?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Last Name</label>
                  <input type="text" class="form-control" name="lname" id="lname" value="<?=$member['lname'];?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Adress</label>
                  <input type="text" class="form-control" name="addr" id="addr" value="<?=$member['addr'];?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">City</label>
                  <input type="text" class="form-control" name="city" id="city" value="<?=$member['city'];?>">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Country</label>
                  <input type="text" class="form-control" name="country" id="country" value="<?=$member['country'];?>">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Postal Code</label>
                  <input type="text" class="form-control" name="pos" id="pos" value="<?=$member['pos'];?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>About Me</label>
                  <div class="form-group">
                    <label class="bmd-label-floating"> Type something...</label>
                    <textarea class="form-control" rows="5" name="mess" id="mess"
                      value="<?=$member['mess'];?>"><?=$member['mess'];?></textarea>
                  </div>
                </div>
              </div>
            </div>

            <button id="userBtn" class="btn btn-rose pull-right">Update Profile</button>
            <div class="clearfix"></div>

          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-avatar">
            <a href="#pablo">
              <img class="img" src="./assets/img/faces/<?=$member['file'];?>" />
            </a>
          </div>
          <div class="card-body">
            <h6 class="card-category text-gray">Avatar</h6>
            <h4 class="card-title"><?=$member['acc'];?></h4>
            <p class="card-description">
              Welcome!
            </p>
            <button type="button" class="btn btn-rose btn-round" data-toggle="modal" data-target="#exampleModal">
              Change icon
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change Your Picture</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  
                  <div class="modal-body">
                    <input type="file" name="file" id="blockimg">
                  </div>
                  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="upload">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="./assets/js/core/jquery-3.4.1.min.js"></script>
<script>
  $(document).ready(function () {
    md.checkFullPageBackgroundImage();


  })
  $("#userBtn").on("click", function () {

    let acc = $("#acc").val();
    let fname = $("#fname").val();
    let lname = $("#lname").val();
    let addr = $("#addr").val();
    let city = $("#city").val();
    let country = $("#country").val();
    let pos = $("#pos").val();
    let mess = $("#mess").val();

    // console.log(fname,lname,addr,city,country,pos,mess,acc);
    $.post("./api.php?do=editUser", {
      fname,
      lname,
      addr,
      city,
      country,
      pos,
      mess,
      acc
    }, function (x) {
      location.reload();
    })
  });

  $("#upload").on("click",function(){
    
    let acc = $("#acc").val();
    let file_data = $('#blockimg').prop('files')[0];
    let form_data = new FormData();
    
    form_data.append("file", file_data);
    form_data.append('acc', acc);
    
    
    $.ajax({
      url:"api.php?do=editImg",
      type:"POST",
      data: form_data,
      contentType:false,
      cache: false,
      processData:false,
      success: function(){
                console.log('works');
                location.reload();
              },
      error: function(){
              } 
    })


    
  })

</script>