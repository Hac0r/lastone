<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">



     <!--========== BOX ICONS ==========-->

     <link rel="stylesheet" href="../view/assets/css/boxicons.min.css">

     <!--========== CSS ==========-->




     <title>Admin</title>
     <link rel="icon" href="assets/img/icons8-film-reel-50.png">

</head>

<link rel="stylesheet" href="../view/assets/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="../view/image/"> -->

<link rel="stylesheet" href="../view/assets/css/main.css">
<link rel="stylesheet" href="../view/image/">
<?PHP
if (isset($_POST['up'])) {
     $from = $_FILES['image']['tmp_name'];
     $to = $_FILES['image']['name'];
     move_uploaded_file($from, "../view/image/" . $to);
     print_r($to);
     var_dump($to);
     // echo "../view/img/$to";

     // echo $_FILES['image']['name'];
     // move_uploaded_file(file, dest)
}
if (isset($_POST['sub'])) {
     $con = conect();
     $id = $_POST['id'];
     $title = $_POST['title'];
     $desc = $_POST['desc'];
     $date = $_POST['date'];
     $type = $_POST['type'];
     // $der  = $_POST['der'];
     $count = $_POST['count'];
     // $film = newFilm($id, $title, $desc, $date, $type, $count);
     // $con = conect();
     // $sql = "INSERT INTO movies_tv ( idMovies , title, describe, date ,type , country )
     //  VALUES ( :idMovies,:title, :describe, :date , :type , :country )";

     // $stmt = $con->prepare($sql);
     // $stmt->execute(array(
     //      'idMovies' =>  $id,
     //      'title' => $title,
     //      'describe' => $desc,
     //      'date' => $date,
     //      'type' => $type,
     //      'country' => $count


     // ));
     // echo '<script>alert("Film inserted successfully.");</script>';
     // return $sql;
}
?>




<body>
     <a href="?action=logout" name="logout"><input onclick="document.getElementById('id01').style.display='block'" class="header_btn" type="button" value="logout" /></a>
     <h1 class="header__logo">ADMIN PAGE</h1>
     <h3 style="text-align:center ;">ADD NEW FILM </h3>
     <header class="">
          <div class="">
               <!-- <form action="" method="post">
                    <div class="container">
                         <div>
                              <div>
                                   <label for="title">Title :</label>
                                   <input type="text" name="title" style=" color : whitesmoke; " name="title" placeholder="Enter A Film Name " required>
                              </div>
                              <div>
                                   <label for="desc">Describe Film :</label>
                                   <br>
                                   <input type="text" name="desc" style=" color : whitesmoke; " placeholder="Describe your Film" required>
                              </div>
                              <div>
                                   <label for="date">Date realize :</label>
                                   <br>
                                   <input style="color:lightblue ; " type="date" name="date">
                              </div>
                              <br>
                              <div>
                                   <label for="type">Type selected : </label>
                                   <br>
                                   <select style="color:lightblue ; " name="type" id="">
                                        <option value="Action">Action</option>
                                        <option value="Adventure">Adventure</option>
                                        <option value="Animated">Animated</option>
                                        <option value="Comedy">Comedy</option>
                                        <option value="Drama">Drama</option>
                                        <option value="Fantasy">Fantasy</option>
                                        <option value="Horror">Horror</option>
                                        <option value="Romance">Romance</option>
                                   </select>
                              </div>
                              <div>
                                   <label for="der">Derecteur :</label>
                                   <input type="text" style=" color : whitesmoke; " name="der" placeholder="Enter A Derrector Name">
                              </div>
                              <div>
                                   <label for="count"> Country :</label>
                                   <input type="text" style=" color : whitesmoke; " name="count" placeholder="Enter The Film Country">
                              </div>
                              <br>
                              <form enctype="multipart/form-data" method="POST">
                                   <div>
                                        <label for="img">Image :</label>
                                        <input type="file" name="image">
                                        <input type="submit" name="up" value="Upload image" class="btn btn-info">
                                   </div>
                              </form>
                              <div>
                                   <input type="submit" name="sub" value="VALID" class="header_btn">
                                   <input type="reset" value="Annuler" class="header_btn">
                              </div>
                         </div>
               </form> -->
               <form enctype="multipart/form-data" method="POST">
                    <div>
                         <label for="img">Image :</label>
                         <input type="file" name="image">
                         <input type="submit" name="up" value="Upload image" class="btn btn-info">
                    </div>
               </form>
               <div>
</body>

</html>