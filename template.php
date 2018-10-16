<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body>
<div class="container ">

    <div class="row">

        <h2>Product Manager</h2>


        <div class="pull-right">
            <form name="search" method="POST">
                <input type="text" name="search">
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
    </div>

    <div class="row">
        <table class="table table-bordered table-striped">
            <thead>
            <tr class="bg-info ">
                <th><b>Action</b></th>
                <th>Code</th>
                <th>Name</th>
                <th>ProductLine</th>
                <th>Scale</th>
                <th>Vendor</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Buy Price</th>
                <th>MSRP</th>
            </tr>
            </thead>

            <tbody id="list-itens">
            <?php foreach($products as $product) : ?>
                <tr>

                    <td style="width:140px; text-align: center">
                        <form method="POST" name="action">
                            <div class="btn btn-sm btn-default"><i class="icon-trash glyphicon glyphicon-eye-open text-primary"></i></div>
                            <div class="btn btn-sm btn-default" ><i class="icon-trash glyphicon glyphicon-edit text-primary"></i></div>

                            <input type="hidden" name="delete" value="<?php echo $product['productCode'] ;?>">
                            <input class="btn btn-sm btn-default" type="submit" value="delete">
                        </form>
                    </td>
                    <td><?php echo $product['productCode']?></td>
                    <td><?php echo $product['productName']?></td>
                    <td><?php echo $product['productLine']?></td>
                    <td><?php echo $product['productScale']?></td>
                    <td><?php echo $product['productVendor']?></td>
                    <td><?php echo $product['productDescription']?></td>
                    <td><?php echo $product['quantityInStock']?></td>
                    <td><?php echo $product['buyPrice']?></td>
                    <td><?php echo $product['MSRP']?></td>
                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    </div>



    <div class="row">

        <h3>Customer #<span id="txt-customer-id"></span></h3>

        <div class="col-sm-12 col-md-12 col-lg-12">

        </div>


    </div>


    <div id="panel-customer" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title" id="hdr-form-customer">New customer</h4>
                </div>
                <div class="modal-body">

                    <form class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="name" id="frm-customer-name" class="form-control">

                        <label>Email Address</label>
                        <input type="email" name="email" id="frm-customer-email"  class="form-control">

                        <label>Description</label>
                        <textarea class="form-control" name="description" id="frm-customer-description"></textarea>
                        <div class="clearfix"></div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link pull-left" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-default btn-success" data-dismiss="modal">Save</button>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</body>
</html>