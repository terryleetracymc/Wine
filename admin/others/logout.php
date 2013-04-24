<?php
 header("content-type:text/html; charset=utf-8");
 session_start();
 session_destroy();
 echo "<script language=javascript>alert('注销成功！');location.href=\"../login.php\";</script>";
?>