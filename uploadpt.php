<link rel="stylesheet" type="text/css" href="requestform.css">

   <center> 
    <div class="container">
        <form action="exceltoqpaper.php" method="post"

            name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
            <div><h2>Upload Question Bank</h2></div><div>
                <label>Choose Excel
                    File</label> </div> 
                    <div><input type="file" class="a" name="file" 
                    id="file" accept=".xls,.xlsx"></div><br><br>
                    <div>
                <input type="submit" id="submit" name="import"
                    class="btn-submit">
        </div>
            </div>
        
        </form>
        
    </div>
    <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?><?php if(!empty($message)) { echo $message; } ?></div>";?>
</div>
</center>
    
