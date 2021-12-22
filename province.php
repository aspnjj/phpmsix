<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  
  echo "<p><center><font color='#D1D0CE'><h2>รายงานสถานการณ์โควิด 19 แยกจังหวัด</h2></center></p>";
  echo "<body style = 'bg color:#778899'>";
  echo "<p><center><table border='1'>";
  echo "<tr><td style = 'bg color:#BCC6CC'><center><font color='3A3B3C'><b>ลำดับ</b></font></center></td>
        <td style ='bg color:#BCC6CC'><font color='3A3B3C'><b>ลำดับ</b></font></center></td>
        <td style ='bg color:#BCC6CC'><font color='3A3B3C'><b>จังหวัด</b></font></center></td>
        <td style ='bg color:#BCC6CC'><font color='3A3B3C'><b>ผู้ป่วยใหม่</b></font></center></td>
        <td style ='bg color:#BCC6CC'><font color='3A3B3C'><b>ผู้ป่วยรวม</b></font></center></td>
        <td style ='bg color:#BCC6CC'><font color='3A3B3C'><b>ผู้ป่วยในประเทศ</b></font></center></td>
        <td style ='bg color:#BCC6CC'><font color='3A3B3C'><b>ผู้ป่วยรวมในประเทศ</b></font></center></td>
        <td style ='bg color:#BCC6CC'><font color='3A3B3C'><b>ผู้เสียชีวิตใหม่</b></font></center></td>
        <td style ='bg color:#BCC6CC'><font color='3A3B3C'><b>ผู้เสียชีวิตรวม</b></font></center></td></tr>";
 
  foreach($data as $key=>$val){
    echo "<tr>";
    echo "<td style ='bg color:#B0E0E6'><center>";
    echo ($key+1);
    echo "</center></td>";
    
    echo "<td style ='bg color:#AD8E6'><center>";
    echo $val->province;
    echo "</center></td>";
    
    echo "<td style ='bg color:#B0E0E6'><center>";
    echo $val->new_case;
    echo "</center></td>";
    
    echo "<td style ='bg color:#AD8E6'><center>";
    echo $val->total_case;
    echo "</center></td>";
    
    echo "<td style ='bg color:#B0E0E6'><center>";
    echo $val->new_case_excludeabroad;
    echo "</center></td>";
    
    echo "<td style ='bg color:#AD8E6'><center>";
    echo $val->total_case_excludeabroad;
    echo "</center></td>";
    
    echo "<td style ='bg color:#B0E0E6'><center>";
    echo $val->new_death;
    echo "</center></td>";
    
    echo "<td style ='bg color:#AD8E6'><center>";
    echo $val->total_death;
    echo "</center></td>";
    echo "</tr>";
  }
  echo "</table></center><p>"; 

  echo "<br>";
  echo "<center><font color='#F88F8FF'><p><b>วันที่อัปเดต</b></p></center>";
  echo "<p><center>". $val->xn_date."</center></p>";
?>
