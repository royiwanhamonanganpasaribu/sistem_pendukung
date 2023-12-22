<?php


$html =
  '<html><body>'.
  '<div align="center"><h3>Data Gaji Karyawan</h3></div>'.
  '<br><br><br><table >
  <tr>
  <td> Id Anggota  </td>
  <td> '.$staff_kepatuhan['nik'].' </td>
  </tr>
  
  <tr>
   <td> Nama Anggota </td>
   <td>  '.$staff_kepatuhan['nik'].' </td>
  </tr>
  
  <tr>
  <td> Status Perkawinan  </td>
  <td> '.$staff_kepatuhan['nik'].' </td>
  </tr>
  
  <tr>
  <td> Jenis Kelamin  </td>
  <td> '.$staff_kepatuhan['nik'].' </td>
  </tr>

  </table>'.
  
  '</body></html>';

$nik = new cetak();
$cetak->load_html($html);
$cetak->render();
$cetak->stream('Data_'.$staff_kepatuhan['nik'].'.pdf');

?>