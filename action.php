
<?php require ('header.html')?>

<body>
    <div class="head"><h1>Assalamu alaikum</h1></div>

        <div class="login">

        <div class="top"><h2>Output</h2></div>

        <div class="output">

               <h2> 
                <?php
                if($_POST['name']){
                    echo "***Welcome***<br>"; 
                    echo $_POST['name'];
                }else {echo "Opps... <br> You Don't Your Name";}
                    
                ?>
                </h2>
         </div>

        </div>>



</body>