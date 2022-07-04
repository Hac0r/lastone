<?php
include_once('controlleur/actions.php');
if (!isset($_GET['action'])) {
     require_once('view/home.php');
}
if (isset($_GET['action'])) {
     switch ($_GET['action']) {
          case 'addUser':
               newUser();
               require_once('view/home.php');
               break;
          case 'auth':
               if (isset($_SESSION["user"]) && $_SESSION["type"] == "user") {
                    include_once("view/homelog.php");
               } elseif (isset($_SESSION["user"]) && $_SESSION["type"] == "admin") {
                    include_once("view/admin.php");
               } else {
                    $u = (isset($_POST['uname']) ? $_POST['uname'] = $_POST['uname'] : $_POST['uname'] = "");
                    $l = (isset($_POST['psw']) ? $_POST['psw'] = $_POST['psw'] : $_POST['psw'] = "");
                    login($u, $l);
                    echo $_SESSION["idUser"];
               }
               break;

          case 'logout':
?>
               <script>
                    document.getElementById("closer").onclick = function() {

                         <?php
                         logout();
                         ?>
                    }
               </script>
<?php
               if (!isset($_SESSION['user'])) {
                    include_once("view/home.php");
               }
               break;
          default:
               if (isset($_SESSION['user']) && $_SESSION['type'] == "user") {
                    include_once("view/homelog.php");
               } elseif (isset($_SESSION['user']) && $_SESSION['type'] == "admin") {
                    include_once("view/admin.php");
               } else {
                    include_once("view/home.php");
               }
               break;
               // case 'playList':
               //      if (isset()) {
               //           # code...
               //      }
          case 'movie':
               // $id = $_GET['id'];
               include('view/movie.php');
               break;
     }
}
// if (!isset($_GET['action'])) {
//      require_once('view/home.php');
// }
// ////////////////////////////////////////////Registry Form///////////////////////////////////
// if (!isset($_POST['regist'])) {
//      // echo '<script>alert("Non");</script>';
// }
// if (isset($_POST['regist'])) {
//      $u = $_POST['uname'];
//      // $e = $_POST['email'];
//      $p = $_POST['psw'];
//      $p1 = $_POST['psw1'];
//      // if ($p != $p1) {
//      //      echo '<script>alert("VALID YOUR PASSWORD");</script>';
//      //      return;
//      // } else {
//      //      $addUser  = newUser($u, $p);
//      //      echo '<script>alert("Records inserted successfully.");</script>';
//      // }
//      if ($p != $p1) {
//           echo '<script>alert("VALID YOUR PASSWORD");</script>';
//           return;
//      } else {
//           $con = conect();
//           $sql = "INSERT INTO user (login,pwd) VALUES (?,?)";
//           $stmt = $con->prepare($sql);
//           $stmt->execute(array($u, $p));
//      }
// }
// //////////////////////////// LOGIN FORM ////////////////////////////////////////////
// if (isset($_POST["login"])) {

//      login($u, $p);
// }
// if (isset($_POST['regist'])) {
// }
