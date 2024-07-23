<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Dream - the exchange rate: local currency / Euro. </title>
    <!-- CSS de Bootstrap via CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h2>Currency Converter</h2>
                    </div>
                    <div class="card-body">
                        <form action="converter.php" method="post">
                            <div class="form-group row">
                                <label for="amount" class="col-sm-4 col-form-label text-right"><b>Enter
                                        Amount:</b></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="amount" name="amount"
                                        placeholder="Enter Amount" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="from" class="col-sm-4 col-form-label text-right"><b>Convert
                                        from:</b></label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="from" name="from">
                                        <option>Select a Currency</option>
                                        <option>USD</option>
                                        <option>KRW</option>
                                        <option>AUD</option>
                                        <option>GBP</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="to" class="col-sm-4 col-form-label text-right"><b>Convert to:</b></label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="to" name="to">
                                        <option>EUR</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-8 offset-sm-4">
                                    <input type="submit" class="btn btn-primary" name="convert"
                                        value="Convert Currency" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS de Bootstrap et dépendances via CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php
    //if someone is clicking on the convert button "Convert Currency", the data will be stored in the local storage that we have created below: amount into $amount, from into $from, ....
    if(isset($_POST['convert'])){
        $amount = $_POST ['amount'];
        $from = $_POST ['from'];
        $to = $_POST ['to'];
    }
    
    if ($from==='USD' AND $to=='EUR')
    {
        echo "<br><center><b style='background : orange; padding: 10px;'> Your Balance is: ";
        echo $amount*0.92;
        echo " $to";
        echo " from ";
        echo $amount; 
        echo " $from";
        echo  "</b></center>";
    }

    if ($from==='KRW' AND $to=='EUR')
    {
        echo "<br><center><b style='background : orange; padding: 10px;'> Your Balance is: ";
        echo $amount*0.00066; 
        echo " $to";
        echo " from ";
        echo $amount; 
        echo " $from";
        echo  "</b></center>";
    }

    if ($from==='AUD' AND $to=='EUR')
    {
        echo "<br><center><b style='background : orange; padding: 10px;'> Your Balance is: ";
        echo $amount*0.61; 
        echo " $to";
        echo " from ";
        echo $amount; 
        echo " $from";
        echo  "</b></center>";
    }

    if ($from==='GBP' AND $to=='EUR')
    {
        echo "<br><center><b style='background : orange; padding: 10px;'> Your Balance is: ";
        echo $amount*1.19; 
        echo " $to";
        echo " from ";
        echo $amount; 
        echo " $from";
        echo  "</b></center>";
    }
    
    
?>
</body>

</html>