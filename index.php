<!DOCTYPE html>
<html> 
<head>
<title> </title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<table>
<caption>Таблица истинности PHP</caption>    
    <tr class='firstLine'>       
        <td> A </td>
        <td> B </td>
        <td> !A </td>
        <td> A || B </td>
        <td> A&&B </td>
        <td> A xor B </td>
    </tr>   
    <tr> 
        <td> <?php echo $a = 0 ?> </td>
        <td> <?php echo $b = 0 ?> </td>
        <td> <?php $c = 0; 
        if (!$a) {$c=1;}
        echo $c; ?> </td>
        <td>
        <?php $c = 0; 
        if ($a||$b) {$c=1;}
        echo $c; ?> 
        </td>
        <td>
        <?php $c = 0; 
        if ($a&&$b) {$c=1;}
        echo $c; ?> 
        </td>
        <td>
        <?php $c = 0; 
        if ($a xor $b) {$c=1;}
        echo $c; ?> 
        </td>
    </tr>
    <tr> 
        <td> <?php echo $a = 0 ?> </td>
        <td> <?php echo $b = 1 ?> </td>
        <td> <?php $c = 0; 
        if (!$a) {$c=1;}
        echo $c; ?> </td>
        <td>
        <?php $c = 0; 
        if ($a||$b) {$c=1;}
        echo $c; ?> 
        </td>
        <td>
        <?php $c = 0; 
        if ($a&&$b) {$c=1;}
        echo $c; ?> 
        </td>
        <td>
        <?php $c = 0; 
        if ($a xor $b) {$c=1;}
        echo $c; ?> 
        </td>
    </tr>
    <tr>
        <td> <?php echo $a = 1 ?> </td>
        <td> <?php echo $b = 0 ?> </td>
        <td> <?php $c = 0; 
        if (!$a) {$c=1;}
        echo $c; ?> </td>
        <td>
        <?php $c = 0; 
        if ($a||$b) {$c=1;}
        echo $c; ?> 
        </td>
        <td>
        <?php $c = 0; 
        if ($a&&$b) {$c=1;}
        echo $c; ?> 
        </td>
        <td>
        <?php $c = 0; 
        if ($a xor $b) {$c=1;}
        echo $c; ?> 
        </td>
     </tr>
    <tr> 
        <td> <?php echo $a = 1 ?> </td>
        <td> <?php echo $b = 1 ?> </td>
        <td> <?php $c = 0; 
        if (!$a) {$c=1;}
        echo $c; ?> </td>
        <td>
        <?php $c = 0; 
        if ($a||$b) {$c=1;}
        echo $c; ?> 
        </td>
        <td>
        <?php $c = 0; 
        if ($a&&$b) {$c=1;}
        echo $c; ?> 
        </td>
        <td>
        <?php $c = 0; 
        if ($a xor $b) {$c=1;}
        echo $c; ?> 
        </td>
    </tr>
</table>
<table>                                                                                                 <?php ?>
<caption>Гибкое сравнение в PHP</caption>    
    <tr class='firstLine'>       
        <td>  </td>
        <td> <?php $col1=true; echo 'true' ?> </td>
        <td> <?php $col2=false; echo 'false' ?> </td>
        <td> <?php $col3=1; echo '1' ?> </td>
        <td> <?php $col4=0; echo '0' ?> </td>
        <td> <?php $col5=-1; echo '-1' ?> </td>
        <td> <?php $col6='1'; echo '"1"' ?> </td>
        <td> <?php $col7=null; echo 'null' ?> </td>
        <td> <?php $col8='php'; echo '"php"' ?> </td>
    </tr>   
    <tr> 
    <td> <?php $row1=true; echo 'true' ?> </td>
    <td> <?php var_dump ($row1==$col1) ?> </td>
    <td> <?php var_dump ($row1==$col2) ?> </td>
    <td> <?php var_dump ($row1==$col3) ?> </td>
    <td> <?php var_dump ($row1==$col4) ?> </td>
    <td> <?php var_dump ($row1==$col5) ?> </td>
    <td> <?php var_dump ($row1==$col6) ?> </td>
    <td> <?php var_dump ($row1==$col7) ?> </td>
    <td> <?php var_dump ($row1==$col8) ?> </td>
    </tr>
    <tr> 
    <td> <?php $row2=false; echo 'false' ?> </td>
    <td> <?php var_dump ($row2==$col1) ?> </td>
    <td> <?php var_dump ($row2==$col2) ?> </td>
    <td> <?php var_dump ($row2==$col3) ?> </td>
    <td> <?php var_dump ($row2==$col4) ?> </td>
    <td> <?php var_dump ($row2==$col5) ?> </td>
    <td> <?php var_dump ($row2==$col6) ?> </td>
    <td> <?php var_dump ($row2==$col7) ?> </td>
    <td> <?php var_dump ($row2==$col8) ?> </td>
    </tr> 
    <tr> 
    <td> <?php $row3=1; echo '1' ?> </td>
    <td> <?php var_dump ($row3==$col1) ?> </td>
    <td> <?php var_dump ($row3==$col2) ?> </td>
    <td> <?php var_dump ($row3==$col3) ?> </td>
    <td> <?php var_dump ($row3==$col4) ?> </td>
    <td> <?php var_dump ($row3==$col5) ?> </td>
    <td> <?php var_dump ($row3==$col6) ?> </td>
    <td> <?php var_dump ($row3==$col7) ?> </td>
    <td> <?php var_dump ($row3==$col8) ?> </td>
    </tr>
    <tr> 
    <td> <?php $row4=0; echo '0' ?> </td>
    <td> <?php var_dump ($row4==$col1) ?> </td>
    <td> <?php var_dump ($row4==$col2) ?> </td>
    <td> <?php var_dump ($row4==$col3) ?> </td>
    <td> <?php var_dump ($row4==$col4) ?> </td>
    <td> <?php var_dump ($row4==$col5) ?> </td>
    <td> <?php var_dump ($row4==$col6) ?> </td>
    <td> <?php var_dump ($row4==$col7) ?> </td>
    <td> <?php var_dump ($row4==$col8) ?> </td>
    </tr> 
    <tr> 
    <td> <?php $row5=-1; echo '-1' ?> </td>
    <td> <?php var_dump ($row5==$col1) ?> </td>
    <td> <?php var_dump ($row5==$col2) ?> </td>
    <td> <?php var_dump ($row5==$col3) ?> </td>
    <td> <?php var_dump ($row5==$col4) ?> </td>
    <td> <?php var_dump ($row5==$col5) ?> </td>
    <td> <?php var_dump ($row5==$col6) ?> </td>
    <td> <?php var_dump ($row5==$col7) ?> </td>
    <td> <?php var_dump ($row5==$col8) ?> </td>
    </tr>
    <tr> 
    <td> <?php $row6='1'; echo '"1"' ?> </td>
    <td> <?php var_dump ($row6==$col1) ?> </td>
    <td> <?php var_dump ($row6==$col2) ?> </td>
    <td> <?php var_dump ($row6==$col3) ?> </td>
    <td> <?php var_dump ($row6==$col4) ?> </td>
    <td> <?php var_dump ($row6==$col5) ?> </td>
    <td> <?php var_dump ($row6==$col6) ?> </td>
    <td> <?php var_dump ($row6==$col7) ?> </td>
    <td> <?php var_dump ($row6==$col8) ?> </td>
    </tr> 
    <tr> 
    <td> <?php $row7=null; echo 'null' ?> </td>
    <td> <?php var_dump ($row7==$col1) ?> </td>
    <td> <?php var_dump ($row7==$col2) ?> </td>
    <td> <?php var_dump ($row7==$col3) ?> </td>
    <td> <?php var_dump ($row7==$col4) ?> </td>
    <td> <?php var_dump ($row7==$col5) ?> </td>
    <td> <?php var_dump ($row7==$col6) ?> </td>
    <td> <?php var_dump ($row7==$col7) ?> </td>
    <td> <?php var_dump ($row7==$col8) ?> </td>
    </tr>
    <tr> 
    <td> <?php $row8='php'; echo '"php"' ?> </td>
    <td> <?php var_dump ($row8==$col1) ?> </td>
    <td> <?php var_dump ($row8==$col2) ?> </td>
    <td> <?php var_dump ($row8==$col3) ?> </td>
    <td> <?php var_dump ($row8==$col4) ?> </td>
    <td> <?php var_dump ($row8==$col5) ?> </td>
    <td> <?php var_dump ($row8==$col6) ?> </td>
    <td> <?php var_dump ($row8==$col7) ?> </td>
    <td> <?php var_dump ($row8==$col8) ?> </td>
    </tr> 
</table>
<table>                                                                                                 <?php ?>
<caption>Жёсткое сравнение в PHP</caption>    
    <tr class='firstLine'>       
        <td>  </td>
        <td> <?php $col1=true; echo 'true' ?> </td>
        <td> <?php $col2=false; echo 'false' ?> </td>
        <td> <?php $col3=1; echo '1' ?> </td>
        <td> <?php $col4=0; echo '0' ?> </td>
        <td> <?php $col5=-1; echo '-1' ?> </td>
        <td> <?php $col6='1'; echo '"1"' ?> </td>
        <td> <?php $col7=null; echo 'null' ?> </td>
        <td> <?php $col8='php'; echo '"php"' ?> </td>
    </tr>   
    <tr> 
    <td> <?php $row1=true; echo 'true' ?> </td>
    <td> <?php var_dump ($row1===$col1) ?> </td>
    <td> <?php var_dump ($row1===$col2) ?> </td>
    <td> <?php var_dump ($row1===$col3) ?> </td>
    <td> <?php var_dump ($row1===$col4) ?> </td>
    <td> <?php var_dump ($row1===$col5) ?> </td>
    <td> <?php var_dump ($row1===$col6) ?> </td>
    <td> <?php var_dump ($row1===$col7) ?> </td>
    <td> <?php var_dump ($row1===$col8) ?> </td>
    </tr>
    <tr> 
    <td> <?php $row2=false; echo 'false' ?> </td>
    <td> <?php var_dump ($row2===$col1) ?> </td>
    <td> <?php var_dump ($row2===$col2) ?> </td>
    <td> <?php var_dump ($row2===$col3) ?> </td>
    <td> <?php var_dump ($row2===$col4) ?> </td>
    <td> <?php var_dump ($row2===$col5) ?> </td>
    <td> <?php var_dump ($row2===$col6) ?> </td>
    <td> <?php var_dump ($row2===$col7) ?> </td>
    <td> <?php var_dump ($row2===$col8) ?> </td>
    </tr> 
    <tr> 
    <td> <?php $row3=1; echo '1' ?> </td>
    <td> <?php var_dump ($row3===$col1) ?> </td>
    <td> <?php var_dump ($row3===$col2) ?> </td>
    <td> <?php var_dump ($row3===$col3) ?> </td>
    <td> <?php var_dump ($row3===$col4) ?> </td>
    <td> <?php var_dump ($row3===$col5) ?> </td>
    <td> <?php var_dump ($row3===$col6) ?> </td>
    <td> <?php var_dump ($row3===$col7) ?> </td>
    <td> <?php var_dump ($row3===$col8) ?> </td>
    </tr>
    <tr> 
    <td> <?php $row4=0; echo '0' ?> </td>
    <td> <?php var_dump ($row4===$col1) ?> </td>
    <td> <?php var_dump ($row4===$col2) ?> </td>
    <td> <?php var_dump ($row4===$col3) ?> </td>
    <td> <?php var_dump ($row4===$col4) ?> </td>
    <td> <?php var_dump ($row4===$col5) ?> </td>
    <td> <?php var_dump ($row4===$col6) ?> </td>
    <td> <?php var_dump ($row4===$col7) ?> </td>
    <td> <?php var_dump ($row4===$col8) ?> </td>
    </tr> 
    <tr> 
    <td> <?php $row5=-1; echo '-1' ?> </td>
    <td> <?php var_dump ($row5===$col1) ?> </td>
    <td> <?php var_dump ($row5===$col2) ?> </td>
    <td> <?php var_dump ($row5===$col3) ?> </td>
    <td> <?php var_dump ($row5===$col4) ?> </td>
    <td> <?php var_dump ($row5===$col5) ?> </td>
    <td> <?php var_dump ($row5===$col6) ?> </td>
    <td> <?php var_dump ($row5===$col7) ?> </td>
    <td> <?php var_dump ($row5===$col8) ?> </td>
    </tr>
    <tr> 
    <td> <?php $row6='1'; echo '"1"' ?> </td>
    <td> <?php var_dump ($row6===$col1) ?> </td>
    <td> <?php var_dump ($row6===$col2) ?> </td>
    <td> <?php var_dump ($row6===$col3) ?> </td>
    <td> <?php var_dump ($row6===$col4) ?> </td>
    <td> <?php var_dump ($row6===$col5) ?> </td>
    <td> <?php var_dump ($row6===$col6) ?> </td>
    <td> <?php var_dump ($row6===$col7) ?> </td>
    <td> <?php var_dump ($row6===$col8) ?> </td>
    </tr> 
    <tr> 
    <td> <?php $row7=null; echo 'null' ?> </td>
    <td> <?php var_dump ($row7===$col1) ?> </td>
    <td> <?php var_dump ($row7===$col2) ?> </td>
    <td> <?php var_dump ($row7===$col3) ?> </td>
    <td> <?php var_dump ($row7===$col4) ?> </td>
    <td> <?php var_dump ($row7===$col5) ?> </td>
    <td> <?php var_dump ($row7===$col6) ?> </td>
    <td> <?php var_dump ($row7===$col7) ?> </td>
    <td> <?php var_dump ($row7===$col8) ?> </td>
    </tr>
    <tr> 
    <td> <?php $row8='php'; echo '"php"' ?> </td>
    <td> <?php var_dump ($row8===$col1) ?> </td>
    <td> <?php var_dump ($row8===$col2) ?> </td>
    <td> <?php var_dump ($row8===$col3) ?> </td>
    <td> <?php var_dump ($row8===$col4) ?> </td>
    <td> <?php var_dump ($row8===$col5) ?> </td>
    <td> <?php var_dump ($row8===$col6) ?> </td>
    <td> <?php var_dump ($row8===$col7) ?> </td>
    <td> <?php var_dump ($row8===$col8) ?> </td>
    </tr> 
</table>
</body>
</html>

