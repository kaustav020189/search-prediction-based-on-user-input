$data = $_GET['data'];
$str = '';

if(strlen($data)>0){
    
$query2 = "SELECT * FROM fb WHERE name LIKE '$data%'";
$result2 = mysql_query($query2) 
or die();

while($row=mysql_fetch_row($result2)){
    $img = rand(1, 8);
    
    $str.= '<a href="#" class="records">
                    <img src="img/'.$img.'.png" alt="Facebook like search suggestion"/>
                    <div class="r_i">
                        <h2>'.$row[0].'</h2>
                        <span>'.$row[1].'</span>
                    </div>
                    </a>';
}
}
echo $str;
