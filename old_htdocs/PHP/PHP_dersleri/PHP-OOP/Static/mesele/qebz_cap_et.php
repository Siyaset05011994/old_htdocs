<?php

include "Qebz.php";

$mehsullar=[
    ['ad'=>'Noxud','kutle'=>1,'qiymet_kq'=>2],
    ['ad'=>'Lobya','kutle'=>2,'qiymet_kq'=>3],
    ['ad'=>'Paxla','kutle'=>3,'qiymet_kq'=>4],
];

$qebz=new Qebz;

echo '<table border="" style="position:relative;border:1px solid #c0c0c0">
        <thead>
        <tr>
        <th>Ad</th>
        <th>Kütlə</th>
        <th>Qiymət(kq)</th>
        <th>Yeykun qiymət</th>
      </tr>
      </thead>
      <tbody>';

foreach ($mehsullar as $mehsul){
    $qebz->setMehsulunAdi($mehsul['ad']);
    $qebz->setMehsulunKutlesi($mehsul['kutle']);
    $qebz->setMehsulunKiloqramQiymeti($mehsul['qiymet_kq']);

    echo ' <tr>
        <td>'.$qebz->getMehsulunAdi().'</td>
        <td>'.$qebz->getMehsulunKutlesi().'</td>
        <td>'.$qebz->getMehsulunKiloqramQiymeti().' AZN</td>
        <td>'.$qebz->getHerMehsulunYekunQiymeti().' AZN</td>
      </tr>';

}

echo '<tr>
      <td style="position:absolute;right:0;bottom: -30px">Yekun qiymət : '.$qebz::$yekunQiymet.' AZN</td>
      </tr>
      </tbody>
      </table>';



