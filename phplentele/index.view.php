<?php
include 'mokiniai.php';
?>
<link rel="stylesheet" href="css/styles.css">
<table style="width:100%">
  <tr>
    <th>Klase</th>
    <th>Kodas</th>
    <th>Vardas</th>
    <th>Pavarde</th>
    <th>Kontroliniu darbu vidurkis</th>
    <th>Duomenu formavimo data</th>
  </tr>
  <?php foreach($klase as $id => $list):?>
    <tr>
        <?php foreach($klase[$id] as $list):?>
        <td><?=$list;?></td>
        <?php endforeach ?>
    </tr>
    <?php endforeach ?>
</table>
