<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="pay.css" rel="stylesheet">
</head>


<body>
  
<div class="row">
    
    <div class="col-6 layout">
        <form>
            <div class="p-3 mb-3 bg-white bg-gradient text-dark rounded-3">
                <div class="container mr-10">
                    <h3>PAYMENT DETAILS</h3>
                    <h6>Complete your Purchase by providing your Payment Details</h6>
                
    
        <div class="mb-3 mt-3">
            <label for="email" class="form-table">E-mail</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>

        <div class="mb-3">
            <label for="card" class="form-table">Card Details</label>
            <input type="number"  id="çard">
        </div>

        <div class="mb-3">
            <div class="row">

                <div class="col-12">
                    <label for="hname" class="form-table">Card Holder Name</label>
                    <input type="text" class="form-control" id="hname">
                </div>

                <div class="col-6 mt-3 ">
                    <span >
                        <img class="i1" src="images/visa.png" alt="visa">        <!-- add images to card details -->
                    </span>
                    <span >
                        <img class="i1" src="images/maestro.png" alt="master" > 
                    </span>
                    <span >
                        <img class="i1" src="images/american-express.png" alt="ame">
                    </span>    
                </div>

                <div class="col-6 mt-3">
                    <input type="text" class="form-control ccv2" placeholder="CVV">
                </div>

            </div>
        </div>

        <div>
            <lable for="badd" class="form-table">Billing Address</lable>
            <input type="text" class="form-control mb-3" id="badd">
        </div>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control mb-3" placeholder="Zip Code" >
            </div>
            <div class="col">
                <input type="text" class="form-control mb-3" placeholder="State">
            </div>    
        </div>
        
        <div class="mb-3">
            <label for="vatnum" class="form-table">VAT Number</label>
            <input type="text" class="form-control" id="vnum"> 
        </div>
        <div class="mb-3">
            <label for="dcode"class="form-table">Discount code</label><br>
            <input type="number"  id="dcode">
        </div>
        <h6>Sub total:</h6><br>
        <h6>Discount:</h6><br>
        <h6>VAT(20%)</h6><br>
        <h6><b>Total :</b></h6>

        <div class="mb-5 mt-5">
            <div class="text-center">
                <button class="btn btn-primary text-center button" type="submit">Pay $(AMOUNT)</button>
            </div>    
        </div>

    </div> 
</div>
</form>
</div>
</div>

</body>
</html>