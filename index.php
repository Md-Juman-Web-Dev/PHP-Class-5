<?php 
include "./include/header.php";
session_start();
?>


<main>
   <div class="container mt-5">
      <div class="row">
         <div class="card col-6 m-auto">
            <div class="card-header">Add Post</div>
            <div class="card-body">
               <form action="./controller/postController.php" method="post">

                  <div class="form-group my-4">
                     <span class="text-danger"><?= $_SESSION['errors']['author'] ?? null ?></span>
                     <input name="author" type="text" value="<?= $_SESSION['old']['author'] ?? null ?>"
                        class="form-control" placeholder="Enter Author Name">
                  </div>

                  <div class="form-group my-4">
                     <span class="text-danger"><?= $_SESSION['errors']['title'] ?? null ?></span>
                     <input name="title" type="text" value="<?= $_SESSION['old']['title'] ?? null ?>"
                        class="form-control" placeholder="Enter title">
                  </div>

                  <div class="form-group my-4">
                     <span class="text-danger"><?= $_SESSION['errors']['detail'] ?? null ?></span>
                     <textarea name="detail" class="form-control" rows="3"
                        placeholder="Enter content"><?= $_SESSION['old']['author'] ?? null ?></textarea>
                  </div>

                  <div class="form-group my-4">
                     <span class="text-danger"><?= $_SESSION['errors']['number'] ?? null ?></span>
                     <input name="number" type="number" value="<?= $_SESSION['old']['number'] ?? null ?>"
                        class="form-control" placeholder="Enter Number">
                  </div>

                  <div class="form-group my-4">
                     <span class="text-danger"><?= $_SESSION['errors']['date'] ?? null ?></span>
                     <input name="date" type="date" value="<?= $_SESSION['old']['date'] ?? null ?>" class="form-control"
                        placeholder="Enter Date">
                  </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
               </form>
            </div>
         </div>
      </div>

   </div>
</main>

<?php 
include "./include/footer.php";
session_unset();
?>