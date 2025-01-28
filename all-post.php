<?php 
include "./include/header.php";
include "./database/env.php";

$qury = "SELECT id, author, title, detail, number, date FROM user_post ORDER BY id DESC";
$result = mysqli_query($conn,$qury);
$posts = mysqli_fetch_all($result ,1);

?>


<main>
<div class="container mt-5">
  <div class="card">
     <div class="card-header">My Post</div>
     <div class="card-body">
     <table class="table table-striped table-hover table-bordered text-center align-middle mt-4">
  <thead class="table-dark">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Title</th>
      <th>Detail</th>
      <th>Number</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
   <?php foreach($posts as $index=>$post):
      ?>
      <tr>
      <td><?=++$index?></td>
      <td><?=$post['author']?></td>
      <td><?=$post['title']?></td>
      <td><?=$post['detail']?></td>
      <td><?=$post['number']?></td>
      <td><?=$post['date']?></td>
    </tr>
      <?php endforeach ?>
  </tbody>
</table>

     </div>
  </div>

</div>
</main>

<?php 
include "./include/footer.php";

?>