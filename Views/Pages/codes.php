<?php 
    session_start();

    require_once './Controllers/Functions/Allcodes.php';

    if($_SESSION['role']!="admin"){
      header("Location:http://codata-admin.com/login");
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Sidebar Menu  | CodingLab </title>
    <link rel="stylesheet" href="http://codata-admin.com/Views/Styles/style.css">
    <link rel="icon" href="ic.png">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
   </head>
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
                      <h1>Codes</h1>
                      <i class='bx bxs-plus-circle' data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                      <span class="circle">Create new code</span>
                      
                    </div>
                    <div class="col-lg-12 mt-5">
                      <div class="items" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="700">
                          <table class="tab">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>title</th>
                                  <th class="resp-table">username</th>
                                  <th class="resp-table">password</th>
                                  <th class="resp-table">prix</th>
                                  <th class="resp-table">durée</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php while($row = mysqli_fetch_array($resultat)){ ?>
                                <tr>
                                  <th><?= $row['id'] ?></th>
                                  <td><?= $row['title'] ?></td>
                                  <td class="resp-table"><?= $row['username'] ?></td>
                                  <td class="resp-table"><?= $row['password'] ?></td>
                                  <td class="resp-table"><?= $row['prix'] ?></td>
                                  <td class="resp-table"><?= $row['durée'] ?></td>
                                  <td>
                                      <a><?= '<i class="bx bxs-pencil" data-bs-toggle="modal" data-bs-target="#edit'.$row['id'].'"></i>' ?></a>
                                      <a><i class='bx bx-trash' <?php echo 'onclick="deleteCode('.$row['id'].')"'?> ></i></a>

                                      
                                  </td>
                                </tr>
                                
                                <?php } ?>
                          
                              
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


    <!--Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create New Code</h5>
                    <i class='bx bxs-x-circle' data-bs-dismiss="modal" aria-label="Close"></i>
                </div>
                <div class="modal-body">
                    <form action="http://codata-admin.com/Controllers/Functions/codes/create" method="POST">
                        <div class="mb-3">
                            <label for="code-name" class="col-form-label">Code Name:</label>
                            <input type="text" class="form-control" id="code-name" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="code-username" class="col-form-label">username:</label>
                            <input type="text" class="form-control" id="code-username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="code-password" class="col-form-label">password:</label>
                            <input type="text" class="form-control" id="code-password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="code-price" class="col-form-label">Prix:</label>
                            <input type="text" class="form-control" id="code-price" name="prix" required>
                        </div>
                        <div class="mb-3">
                            <label for="code-Duree" class="col-form-label">Durée:</label>
                            <input type="text" class="form-control" id="code-duree" name="duree" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-or">Send message</button>
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>

    <?php $resultat->data_seek(0);
      while($row = mysqli_fetch_array($resultat)){
        echo '<div class="modal fade" id="edit'.$row['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">'
    ?>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                    <i class='bx bxs-x-circle' data-bs-dismiss="modal" aria-label="Close"></i>
                </div>
                <div class="modal-body">
                    <form action="http://codata-admin.com/Controllers/Functions/codes/edit" method="POST">
                      <input type="hidden" name="id" <?php echo 'value="'.$row['id'].'"' ?> >
                        <div class="mb-3">
                            <label for="code-name" class="col-form-label">Code Name:</label>
                            <?php echo '<input type="text" class="form-control" id="code-name" name="title" value="'.$row['title'].'" required>' ?>
                        </div>
                        <div class="mb-3">
                            <label for="code-username" class="col-form-label">username:</label>
                            <?php echo '<input type="text" class="form-control" id="code-username" name="username" value="'.$row['username'].'" required>' ?>
                        </div>
                        <div class="mb-3">
                            <label for="code-password" class="col-form-label">password:</label>
                           <?php echo '<input type="text" class="form-control" id="code-password" name="password" value="'.$row['password'].'" required>' ?>
                        </div>
                        <div class="mb-3">
                            <label for="code-price" class="col-form-label">Prix:</label>
                            <input type="text" class="form-control" id="code-price" name="prix" <?php echo 'value="'.$row['prix'].'"' ?> required>
                        </div>
                        <div class="mb-3">
                            <label for="code-Duree" class="col-form-label">Durée:</label>
                            <input type="text" class="form-control" id="code-duree" name="duree" <?php echo 'value="'.$row['durée'].'"' ?> required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-or">Send message</button>
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>
    <?php } ?>








  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="http://codata-admin.com/Views/JS/script.js"></script>
  <script src="http://codata-admin.com/Views/JS/chartScript.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
          AOS.init(); 

          function deleteCode(id){
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
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
                window.location.href = 'http://codata-admin.com/Controllers/Functions/codes/delete?id='+id;
              }
            })
          }
          
    </script>
</body>
</html>
