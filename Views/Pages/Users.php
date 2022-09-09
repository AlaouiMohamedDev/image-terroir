<?php 
    session_start();

    if($_SESSION['role']!="admin"){
      header("Location:http://codata-admin.com/login");
    }
    require_once './Controllers/Functions/users.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <?php 

include './Views/Template/Header.php';

?>
<body class="body">
<?php 
   include('./Views/Template/SideBar.php')
?>

    <section class="home-section pe-3 ps-3 pt-2">
    <a href="http://www.codata-agency.com">
      <img src="http://codata-admin.com/Views/Images/logos.png" class="logo-img"  data-aos="zoom-out" data-aos-easing="linear" data-aos-duration="1000"  >
      <img src="http://codata-admin.com/Views/Images/logos-1.png" class="logo-img-1">
    </a>
      
      <!--Top Bar-->
    <?php 
   include('./Views/Template/TopBar.php')
  ?>

       

      <div class="container mt-5 code-table">
          <div class="row">
              <div class="content">
                <i class='bx bxs-left-arrow-alt' onclick="goBack();"></i>
                <span class="arrow">Step Back</span>
                <h1>Manage Users</h1>

              </div>
              <div class="mt-5">
              <div class="items" >
                  <div class="head">
                    <h3>Authorized Users</h3>
                    <div class = "searchBox">
                      <input type="text" class="search" id="authorized" placeholder="Search by name or email ....">
                      <i class='bx bx-search'></i>
                    </div>
                  </div>
                  <hr />
            
                    <table class="tab">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Joined</th>
                            <th>Balance</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody class="list-alt">
                        
                        </tbody>
                      </table>
                </div>
              </div>
              
              <div class="mt-5 mb-5">
              <div class="items" >
                  <div class="head">
                    <h3>Unauthorized Users</h3>
                    <div class = "searchBox">
                      <input type="text" class="search" id="unauth" placeholder="Search by name or email ....">
                      <i class='bx bx-search'></i>
                    </div>
                  </div>
                  <hr />
                          <table class="tab">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody id="list">
                               
                              </tbody>
                            </table>
                           
                </div>
              </div>
          </div>
      </div>
      <div class="created">
        Created by <a href="http://codata-agency.com">codata-agency.com</a> . All right reserved ©
      </div>
    </section>
          <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content  moddy">
              
              </div>
            </div>
          </div>

      <?php 

        include './Views/Template/scripts.php';?>4
      


        <script>
             function load_users(query){
                  $.ajax({
                    url:"http://codata-admin.com/Controllers/AJAX/AuthUsers",
                    method:"post",
                    data:{idUser:query},
                    success:function(data)
                    {
                      $('.list-alt').html(data);
                    }
                  });
                };

         function load_data(query){

                  $.ajax({
                    url:"http://codata-admin.com/Controllers/AJAX/unAuthUser",
                    method:"post",
                    data:{query:query},
                    success:function(data)
                    {
                      $('#list').html(data);
                    }
                  });
                }

             
                

          $(document).ready(()=>{

            load_users();
 
                $('#authorized').keyup(function(){

                    var search = $(this).val();

                      if(search != '')
                      {
                        load_users(search);
                      }
                      else
                      {
                        load_users();			
                      }
                	});

               load_data();
               

               

                $('#unauth').keyup(function(){

                    var search = $(this).val();

                    if(search != '')
                    {
                      load_data(search);
                    }
                    else
                    {
                      load_data();			
                    }
                	});

          });
      
        
      </script>
        
<script>
                  function deleteUser(id){
                    Swal.fire({
                          title: 'Are you sure?',
                          text: "You won't be able to revert this!",
                          icon: 'warning',
                          showCancelButton: true,
                          confirmButtonColor: '#3085d6',
                          cancelButtonColor: '#d33',
                          confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                          if (result.isConfirmed) {
                            $.ajax({
                              url:"http://codata-admin.com/Controllers/AJAX/deleteUser",
                              method:"post",
                              data:{id:id},
                              success:function(data)
                              {
                                load_users();
                              }
                            });
                            Swal.fire(
                              'Deleted!',
                              'Your file has been deleted.',
                              'success'
                            )
                          }
                        })
                  
                };

                  function editUser(id){
                    
                    $.ajax({
                      url:"http://codata-admin.com/Controllers/AJAX/editUser",
                      method:"post",
                      data:{id:id,balance:$('#balance').val()},
                      success:function(data)
                      {
                        load_users();
                       
                      }
                    });
                };

                function getData(id){
                   
                   $.ajax({
                    url:"http://codata-admin.com/Controllers/AJAX/getUser",
                    method:"post",
                    data:{id:id},
                    success:function(data)
                    {
                      $('.moddy').html(data);
                    }
                  });
                };
                  function hi(id){
                    $.ajax({
                            url:"http://codata-admin.com/Controllers/AJAX/UserAuth",
                            method:"post",
                            data:{id:id},
                            success:function(data)
                            {
                              load_data();
                              load_users();
                            }
                    });
                 }

                 function deny(id){
                      Swal.fire({
                          title: 'Are you sure?',
                          text: "You won't be able to revert this!",
                          icon: 'warning',
                          showCancelButton: true,
                          confirmButtonColor: '#3085d6',
                          cancelButtonColor: '#d33',
                          confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                          if (result.isConfirmed) {
                            $.ajax({
                                url:"http://codata-admin.com/Controllers/AJAX/UserDeny",
                                        method:"post",
                                        data:{id},
                                        success:function(data)
                                        {
                                          load_data();
                                        }
                              });
                            Swal.fire(
                              'Deleted!',
                              'Your file has been deleted.',
                              'success'
                            )
                          }
                        })
                  
                 }
        </script>
</body>
</html>