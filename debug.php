<?php
$id=$_REQUEST['id'];

$connect = mysqli_connect('localhost','root','','boonge');
 
  $query1 = "SELECT * FROM `books` WHERE `book_genere` ='$id' AND `transaction` = 'Sale'";
  $query2 = "SELECT * FROM `books` WHERE `book_genere` ='$id' AND `transaction` = 'Rent'";
  $query3= "SELECT * FROM `books` WHERE `book_genere` ='$id' AND `transaction` = 'Exchange'";
  $object1 = mysqli_query($connect,$query1); 
  $object2 = mysqli_query($connect,$query2); 
  $object3 = mysqli_query($connect,$query3); 
  if($object1)
    echo "Success";
  else
    echo "errorrrr";

?>


<!DOCTYPE html>
<html>
<title>Horror Books</title>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 

<link rel="stylesheet" type="text/css" href="horrortype.css">

<body>
  <?php
 include("boongenav.php");
  ?>
  <div id="categoryheading">
 <h1> <?php echo $id; ?></h1>
</div>
<div class="btncont">
  <button class="type" onclick="currentDiv(1)">For Sale</button> 
  <button class="type" onclick="currentDiv(2)">For Rent</button> 
  <button class="type" onclick="currentDiv(3)">For Swap</button> 
</div>
<div class="page">


  <!--sale-->

  <div class="mySlides" >
    <div class="categories">

<?php
while($data=mysqli_fetch_assoc($object1)) 
{

  $name=$data['title'];
  $pic=$data['pic'];
  $bid=$data['ID'];

?>
       <div class="categoriesItem">
         <center>
           <a href="viewbookNP.php?id=<?php echo $bid?> "><img class="bookcover" src="images/<?php echo $data['pic'] ?>"></a>
           <figcaption><?php echo $name;  ?></figcaption>

         </center>      
          </div>
<?php } ?>
      </div>  
    </div><!--yaha para khatam horae-->


<!--RENT-->
  <div class="mySlides" >
    <div class="categories">

<?php
while($data=mysqli_fetch_assoc($object2)) 
{

  $name=$data['title'];
  $pic=$data['pic'];
  $bid=$data['ID'];

?>
       <div class="categoriesItem">
         <center>
           <a href="viewbookNP.php?id=<?php echo $bid?> "><img class="bookcover" src="images/<?php echo $data['pic'] ?>"></a>
           <figcaption><?php echo $name;  ?></figcaption>

         </center>      
          </div>
<?php } ?>
      </div>  
    </div>  <!--yaha para khatam horae-->


<!--exchange-->
  <div class="mySlides" >
    <div class="categories">

<?php
while($data=mysqli_fetch_assoc($object3)) 
{

  $name=$data['title'];
  $pic=$data['pic'];
  $bid=$data['ID'];
?>
       <div class="categoriesItem">
         <center>
           <a href="viewbookNP.php?id=<?php echo $bid?> "><img class="bookcover" src="images/<?php echo $data['pic'] ?>"></a>
           <figcaption><?php echo $name;  ?></figcaption>

         </center>      
          </div>
<?php } ?>
      </div>  
    </div>  <!--yaha para khatam horae-->

    <div class="pn">
    <button class="next" onclick="plusDivs(-1)">? Prev</button>
    <button class="next" onclick="plusDivs(1)">Next ?</button>
    </div>
</div>

<script type="text/javascript" src="type.js"></script>

</body>

</body>
</html>