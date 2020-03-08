<?php
session_start();
include './validation/Validate.php';
$file = file('../function.php');

$v    = new Validate();
if ($_SESSION['step'] === 1) {
    $return = $v->testForeachStep1($file);
} elseif ($_SESSION['step'] >= 2) {
    $return = $v->testForeachStep2($file);
}

if ($return) {
    if ($_SESSION['step'] === 10) {
        header('Location: http://localhost/mini_projet_foreach/?finish=true');
    } else {
        header('Location: http://localhost/mini_projet_foreach/?return=success');
    }
    ++$_SESSION['step'];
    exit();
}

header('Location: http://localhost/mini_projet_foreach/?return=notSuccess');
exit();
