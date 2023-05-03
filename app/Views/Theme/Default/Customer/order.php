<section class="main-container my-5" >
    <div class="container">
        <div class="col-md-12 px-5">
            <?php if (session()->getFlashdata('message') !== NULL) : echo session()->getFlashdata('message'); endif; ?>
        </div>
        <div class="cart">
            <table class="cart-table w-100 text-center" id="tableReload">
                <thead>
                <tr>
                    <th>Order Date</th>
                    <th>Total</th>
                    <th>Discount</th>
                    <th>Shipping charge</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($order as $val){ ?>
                    <tr>
                        <td><?php echo $val->createdDtm;?></td>
                        <td><?php echo currency_symbol($val->total);?></td>
                        <td><?php echo currency_symbol($val->discount);?></td>
                        <td><?php echo currency_symbol($val->shipping_charge);?></td>
                        <td><?php echo currency_symbol($val->final_amount);?></td>
                        <td><?php echo $val->order_status;?></td>
                        <td>
                            <a href="#" class="btn btn-success">View</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</section>