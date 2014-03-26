<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css" />
    <script>
    $(document).ready(function(){
        $('#filterfield').keyup(function(){
        var data = $(this).val();
           $.get('getall.php',{data:data},function(value){
            $('#tab').html(value).show();
        }); 
        });
    });
    </script>
    </head>
    <body>
        <div id="wrapper">
            <div id="wrapper_heading2">Facebook like Search Suggestion list using JQuery</div>
            <div id="filter">
                <label>Type any name in the text field below</label>
                <br />
                <span id="note">pics are randomized</span>
                <br />
                <input type="text" id="filterfield" class="inputs"/>
                <div id="tab">
                    
                </div>
            </div>
        </div>
      <body>
</html>      
