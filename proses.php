<?php
if(isset($_POST['submit_form'])){
echo '<table width=500 border =1>';
echo '<tr><td>'.'Nama : '.'</td><td>'.$_POST['nama'].'</td></tr>';
echo '<tr><td>'.'Email : '.'</td><td>'.$_POST['email'].'</td></tr>';
echo '<tr><td>'.'Pertanyaan : '.'</td><td>'.$_POST['pertanyaan'].'</td></tr>';
echo '</table>';
}	
?>
