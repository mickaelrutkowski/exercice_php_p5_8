<!DOCTYPE html PUBLIC>
<html lang="fr" >
<head>
  <title>Formulaires</title>
  <meta "charset=utf-8" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$arr = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novenvbre', 'Décembre');
?>
<table>
	<?php  foreach($arr as $key => $value): ?>
	        <tr>
	            <td><?=$key + '1';?></td>
	            <td><?=$value;?></td>
	        </tr>
	  <?php endforeach;?>
</table>
</body>
</html>
