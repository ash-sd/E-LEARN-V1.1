<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>E-Classe | Students</title>
  </head>
  <body class=" overflow-hidden d-flex">
      <?php // IDEA: sidebar ?>
      <?php include 'php/sidebar.php'; ?>
      <?php // IDEA: navbar ?>
      <div class="flex-column w-100">
        <?php include 'php/navbar.php'; ?>
        <!-- IDEA: content-nav -->
        <div class="mx-5 my-3 d-flex justify-content-between  ">
          <h2 class="fs-2 m-0">Student list</h2>
          <div>
            <a href="#"><svg class="mx-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
            </svg></a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Add a new student
            </button>
          </div>
        </div>
        <!-- IDEA: content -->
        <div class="mx-5 my-5">
          <div class="my-3 shadow-sm rounded shadow-4 rounded-5 overflow-auto">
            <table class="table align-middle mb-0 bg-white">
              <thead class="bg-light">
                <tr>
                  <th></th>
                  <th class="py-3 px-3">Name</th>
                  <th class="py-3">Email</th>
                  <th class="py-3">Phone</th>
                  <th class="py-3">Enroll Number</th>
                  <th class="py-3">Date of admission</th>
                  <th class="py-3">&nbsp;</th>
                  <th class="py-3">&nbsp;</th>
                  <th class="py-3">&nbsp;</th>
                </tr>
              </thead>

              <div class="my-2">
                <tbody>
                  <?php

                   $somevar = file_get_contents('students.json');
                   $std_list = json_decode($somevar);

                  foreach($std_list as $std) {
                    echo '<tr>';
                    echo '<th class="fw-normal"> <img src="./imgs/placeholder.png" width="60px" alt=""> </th>';
                    echo '<th class="fw-normal">'.$std->name.'</th>';
                    echo '<th class="fw-normal">'.$std->email.'</th>';
                    echo '<th class="fw-normal">'.$std->phone.'</th>';
                    echo '<th class="fw-normal">'.$std->enroll.'</th>';
                    echo '<th class="fw-normal">'.$std->date.'</th>';
                    echo '<th class="fw-normal">'.$std->date.'</th>';
                    echo '</tr>';
                  };
                   ?>
               </tbody>
              </div>
            </table>
          </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Understood</button>
            </div>
          </div>
        </div>
      </div>


















    <style>
      @media screen and (max-width:1022px) {
        .vh-100.side_bar{
          display:none !important;
        }
      }
    </style>
  </body>
</html>
