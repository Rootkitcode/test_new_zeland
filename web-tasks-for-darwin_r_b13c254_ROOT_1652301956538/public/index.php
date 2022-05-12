<?php
    // include('../bootstrap.inc.php');
   include('../config.inc.php');

    $title = 'Welcome!';
    $heroText = 'HOME';
?>
<!doctype html>
<html lang="en">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href='./css/home.css' rel='stylesheet' type='text/css'>
    <link href='./css/modal.css' rel='stylesheet' type='text/css'>
    <script src='./js/modal.js'></script>
    </head>
<?php include('../head.inc.php'); ?>
<body>
    <?php include('../header.inc.php'); ?>

    <main role="main">
        <section class="hero-area text-center d-flex align-items-center container">
            <div class="container">
                <h1 class="hero__area__title"><?=htmlspecialchars($heroText)?></h1>
            </div>
        </section>

        <article class="text__content">
            <img class= "image__movie" src="./images/hero.jpg" alt="home" class="img-fluid">
            <p> Donec molis hendreit risus. Etiam sollicitudin, ipsum eu pulvinar rutrum, tellus ipsum laoreet sapien, quis venenatis ante odio sit amet eros. Suspendisse eu ligula. Maecenas nec odio et ante tincidunt tempus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>

<!-- modal -->
<div id="demo-modal" class="modal" role="dialog" tabindex="3">
  <div class="model-inner">
    <div class="modal-header">
      <h3>Top 5 movies this month</h3>
      <button class="modal-close" data-id="demo-modal" aria-label="Close">
        &times;
      </button>
     
    </div>
    <img class= "image__movie2" src="./images/top-movies.jpg" alt="home" class="img-fluid" width="250px" heigth="250px">
    
   <!-- table movies -->
<table class="table__info__movie">
 


 <table id='table__1' class="table table-striped">
     <thead>
         <th scope="col">ID</th>
         <th scope="col">NAME</th>
         <th scope="col">RELEASE_DATE</th>
         <th scope="col">VIEWS</th>
         <th scope="col">RATING</th>
         
     </thead>
     <tbody>
     

<?php
while ($row = mysqli_fetch_array($data))
{
?>
         <tr>
             <td><?php echo ($row['id']);?></td>
             <td><?php echo ($row['name']);?></td>
             <td><?php echo ($row['release_date']);?></td>
             <td><?php echo ($row['views']);?></td>
             <td><?php echo ($row['rating']);?></td>
         
         </tr>
<?php
}
?>
     </tbody>
 </table>

     
 <table id='table__2' class="table table-striped">
     <thead>
         <th scope="col">ID</th>
         <th scope="col">NAME</th>
         <th scope="col">RELEASE_DATE</th>
         <th scope="col">VIEWS</th>
         <th scope="col">RATING</th>
         
     </thead>
     <tbody>
     

<?php
while ($row = mysqli_fetch_array($data2))
{
?>
         <tr>
             <td><?php echo ($row['id']);?></td>
             <td><?php echo ($row['name']);?></td>
             <td><?php echo ($row['release_date']);?></td>
             <td><?php echo ($row['views']);?></td>
             <td><?php echo ($row['rating']);?></td>
         
         </tr>
<?php
}
?>
     </tbody>
 </table>
<!--end table movies -->

 <button class="button">views</button>
 <button class="button2">rating</button>
  </div>
</div>
<button class="modal-open" data-id="demo-modal">Top movies area</button>

<!-- end modal -->





</article>

        <hr class="m-0 p-0" />

        <div class="primary-content py-5">
            <div class="container cms-content">
                <p>Curabitur ullamcorper ultricies nisi. Pellentesque commodo eros a enim. Praesent porttitor, nulla vitae posuere iaculis.</p>
                <p>Vestibulum fringilla pede sit amet augue. Fusce a quam. Sed aliquam ultrices mauris. Ut a nisl id ante tempus hendrerit.</p>
            </div>
        </div>
    </main>

    <?php include('../footer.inc.php'); ?>
  
</body>
</html>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>
   $(document).ready(function(){

    $("#table__1").show();
    $("#table__2").hide();
    
         $(".button").click(function(){
            $("#table__1").show();
            $("#table__2").hide();
            
         });

         $(".button2").click(function(){
            $("#table__1").hide();
            $("#table__2").show();
            
        });

});
</script>

