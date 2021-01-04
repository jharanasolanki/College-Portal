<h2>Time Table</h2>
    
    <div class="outer-container">
        <form action="exceltomysql.php" method="post"
            name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
            <div>
                <label>Choose Excel
                    File</label> <input type="file" name="file"
                    id="file" accept=".xls,.xlsx"><br><br>

                <input type="submit" id="submit" name="import"
                    class="btn-submit">
        
            </div>
        
        </form>
        
    </div>
    <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?><?php if(!empty($message)) { echo $message; } ?></div>