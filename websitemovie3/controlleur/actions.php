<?php include_once('modele/conect.php');
session_start();
function login($u, $p)
{
    include_once('modele/conect.php');
    $con = conect();
    $req = "SELECT * from user  where login=:u and pwd=:p";
    $st = $con->prepare($req);
    $st->execute(['u' => $u, 'p' => $p]);
    $tabb = $st->fetchAll();
    //print_r($tab);
    if (count($tabb) == 0) {
        // unset($_SESSION["user"]);
        include_once('view/home.php');
    } elseif ($tabb[0][3] == 'user') {
        $req = "SELECT * from user where login=:u
                and pwd=:p ";
        $st = $con->prepare($req);
        $st->execute(['u' => $u, 'p' => $p]);
        $tab = $st->fetchAll();
        $_SESSION["idUser"] = $tab[0][0];
        $_SESSION["user"] = $tab[0][1];
        $_SESSION["pwd"] = $tab[0][2];
        $_SESSION['type'] = $tab[0][3];
        include_once('view/homelog.php');
    } elseif ($tabb[0][3] == 'admin') {
        $_SESSION["idUser"] = $tab[0][0];
        $_SESSION["user"] = $tabb[0][1];
        $_SESSION["pwd"] = $tabb[0][2];
        $_SESSION['type'] = $tabb[0][3];
        include_once('view/admin.php');
    }
}
function logout()
{
    $_SESSION = array();
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }
}

function newUser()
{
    if (isset($_POST['regist'])) {
        include_once('modele/conect.php');
        $u = $_POST['uname'];
        $p = $_POST['psw'];
        $p1 = $_POST['psw1'];
        if ($p != $p1) {
            echo '<script>alert("VALID YOUR PASSWORD");</script>';
            return;
        } else {
            $con = conect();
            $sql = "INSERT INTO user (login,pwd) VALUES (?,?)";
            $stmt = $con->prepare($sql);
            $stmt->execute(array($u, $p));
        }
    }
}
function addList()
{
    if (isset($_POST['addList'])) {
    }
}
