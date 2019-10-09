<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
#box1{
    margin-top:30px;
    margin-bottom:15px;
}
#box2{
    margin-top:15px;
    margin-bottom:30px;
}
img{
    padding-top:12px; 
}

</style>
<body>
    <div class="container">
        <div class="row" style="margin-top:5rem; border: 10px grey double;">
        <h2 style="text-align:center; margin-bottom:10px; letter-spacing:5px"><b>MANAGE</b></h2>
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <!--First Row starts-->
                <div class="row" style="">

                    <div class="col-md-6" id="box1">
                        <a href="javascript:void(0);" onclick="loadDoc('manage-order/manage-order-add.php')">
                            <div style="border:5px solid #17a2b8">
                                <img src="../image/manage/add-order.png" style="width:50%" class="center-block" />
                                <h4 style="text-align:center">Add Order</h4>
                            </div>
                        </a>

                    </div>
                    <div class="col-md-6" id="box1">
                        <a href="javascript:void(0);" onclick="loadDoc('manage-order/manage-order-remove.php')">
                            <div style="border:5px solid #17a2b8">
                                <img src="../image/manage/remove-order.png" style="width:50%" class="center-block" />
                                <h4 style="text-align:center">Delete Order</h4>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="row" style="">

                    <div class="col-md-6" id="box2">
                        <a href="javascript:void(0);" onclick="loadDoc('manage-order/manage-order-update.php')">
                            <div style="border:5px solid #17a2b8">
                                <img src="../image/manage/update-order.png" style="width:50%" class="center-block" />
                                <h4 style="text-align:center">Update Order</h4>
                            </div>
                        </a>

                    </div>
                    <div class="col-md-6" id="box2">
                        <a href="javascript:void(0);" onclick="loadDoc('manage-order/manage-order-view.php')">
                            <div style="border:5px solid #17a2b8">
                                <img src="../image/manage/view-order.png" style="width:50%" class="center-block" />
                                <h4 style="text-align:center">View Orders</h4>
                            </div>
                        </a>
                    </div>

                </div>

            </div>

            <div class="col-md-2"></div>
        </div>

    </div>
</body>

</html>