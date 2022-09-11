
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    </head>
<body>

    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        <h3 class="text-primary">PHP - Basic Money Converter II</h3>
        <hr style="border-top:1px dotted #000;"/>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form method="POST" action="">
                <div class="form-inline">
                    <select name="val" class="form-control">
                        <option value="PHP">PHP</option>
                        <option value="USD">USD</option>
                        <option value="NAIRA">NAIRA</option>
                    </select>
                    <input class="form-control" type="number" value="<?php echo isset($_POST['digit']) ? $_POST['digit'] : ''  ?>" name="digit"/>
                </div>    
                <br />
                <div class="form-inline">
                    <label>Select Currency: </label>
                    <select name="currency" required="required" class="form-control">
                        <option value="">Select an option</option>
                        <option value="USD">USD</option>
                        <option value="Euro">Euro</option>
                        <option value="PHP">PHP</option>
                        <option value="Japanese Yen">Japanese Yen</option>
                        <option value="NAIRA">NAIRA</option>
                    </select>
                    <br /><br />
                    <center><button type="submit" name="convert" class="btn btn-primary form-control" style="width:30%;">Convert</button></center>
                    <br />
                </div>    
                    <?php require 'convert.php'?>
            </form>
        </div>
    </div>
</body>
</html>