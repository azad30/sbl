@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h3 class="text-center">Sales Invoice</h3></div>
                </div>
            </div>

        <form>
            <div class="col-md-12">
                    <div class="form-group col-xs-4 col-md-3">
                        <label for="name" class="control-label">Customer Name</label>                        
                        <select name="customer_name" id="customer_name" class="form-control">
                            <option value="volvo" disabled selected>-- select customer --</option>
                            @foreach($customerinfos as $customer)
                             <option value="{{ $customer->id }}">
                                    {{ $customer->cu_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-xs-4 col-md-2">
                        <label for="name" class="control-label">Proprietor Name</label>
                        <input type="text" value='' class="form-control" name="proprietor_name" id="proprietor_name" placeholder="Enter Proprietor Name">
                    </div>
                    <div class="form-group col-xs-4 col-md-3">
                        <label for="name" class="control-label">Payment Method</label>
                        <select name="payment_method" id="payment_method" class="form-control">
                            <option value="0" disabled selected>-- select payment method --</option>
                            <option value="cash">Cash</option>
                            <option value="bkash">Bkash</option>
                            <option value="due">Due</option>
                        </select>
                    </div>
                    <div class="form-group col-xs-4 col-md-2">
                        <label for="name" class="control-label">Previous Due</label>
                        <input type="text" value='' class="form-control" name="previous_due" id="previous_due" readonly="readonly">
                    </div>
                    <div class="form-group">
                          <label class="control-label col-sm-2" for="sales_center">Sales Center:</label>                     
                    </div>
                </div>

                <br />
                <br />
                <br />
                 <div class="col-md-12">
 
                    <div class="form-group col-xs-4 col-md-3">
                        <label for="name" class="control-label">Address</label>
                        <input type="text" class="form-control myaddress" readonly="readonly">
                    </div>

                    <div class="form-group col-xs-4 col-md-2">
                        <label for="name" class="control-label">Phone No</label>
                        <input type="text" class="form-control mobile_no" name="mobile_no" id="mobile_no" readonly="readonly">
                    </div>
                     <div class="form-group col-xs-4 col-md-3">
                        <label for="name" class="control-label">Date</label>
                        <input type="text" class="form-control created_at" name="customer_payment_date" id="customer_payment_date" readonly="readonly">
                    </div>
                    <div class="form-group col-xs-4 col-md-2">
                        <label for="name" class="control-label">Reference By</label>
                        <input type="text" class="form-control reference_name" name="reference_by" id="reference_by" readonly="readonly">
                    </div>
                </div>

                <br />
                <br />
                <br />
                <br />

                <div class="col-md-12">
                    <div class="col-md-10">
                        <div class="row clearfix">
                            <div class="col-md-12 column">
                                <table class="table table-bordered table-hover" id="tab_logic">
                                    <thead>
                                        <tr >
                                            <th class="text-center">
                                                No
                                            </th>
                                            <th class="text-center">
                                                Product Name
                                            </th>
                                            <th class="text-center">
                                                Unit
                                            </th>
                                            <th class="text-center">
                                                Qty
                                            </th>
                                             <th class="text-center">
                                                Price
                                            </th>
                                            <th class="text-center">
                                                Disc (%)
                                            </th>
                                            <th class="text-center">
                                                B.Qty
                                            </th>
                                            <th class="text-center">
                                                Amount
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id='addr0'>
                                            <td>
                                            1
                                            </td>
                                            <td>
                                                <select name="item_name" id="item_name" class="form-control">
                                                    <option value="product" disabled selected>Item</option>
                                                    @foreach($iteminfos as $item)
                                                     <option value="{{ $item->id }}">
                                                            {{ $item->item_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name='unitname0' placeholder='Unit Name' class="form-control"/>
                                            </td>
                                            <td>
                                                <input type="text" name='qty' placeholder='Enter Qty' class="form-control qty">
                                            </td>
                                            <td>
                                                <input type="text" name='price' class="form-control item_pirce" readonly="readonly">
                                            </td>
                                            <td>
                                                <input type="text" name='disc0'  placeholder='Disc (%)' class="form-control"/>
                                            </td>
                                            <td>
                                                <input type="text" name='bqty0' placeholder='B.Qty' class="form-control"/>
                                            </td>
                                            <td>
                                                <input type="text" name='total_amount' class="form-control total_amount" readonly="readonly">
                                            </td>
                                        </tr>
                                        <tr id='addr1'></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <a id="add_row" class="btn btn-primary pull-left">+</a><a id='delete_row' class="pull-right btn btn-danger">-</a>
                    </div>

                        <div class="col-md-2">
                              <table class="table table-bordered">
                                <tbody>
                                    <tr><h4 class="text-center" style="color:golden"><strong>Cash Report</strong></h4></tr>
                                  <tr>
                                    <td>Grand Total</td>
                                    <td><input type="text" value='123' class="form-control" name="reference_by" id="reference_by" readonly="readonly"></td>
                                  </tr>      
                                  <tr>
                                    <td>Total Discount</td>
                                    <td><input type="text" value='123' class="form-control" name="reference_by" id="reference_by" readonly="readonly"></td>
                                  </tr>
                                  <tr>
                                    <td>Net Payable</td>
                                    <td><input type="text" value='123' class="form-control" name="reference_by" id="reference_by" readonly="readonly"></td>
                                  </tr>
                                </tbody>
                              </table>

                                <button type="button" class="btn btn-success">Export-Excel</button>
                                <button type="button" class="btn btn-primary">Print</button>
                        </div>
                    </div>
                </div>

                <div class="container">                   
                        <button type="button" class="btn btn-success">Save Record</button>
                        <button type="button" class="btn btn-primary">+ New Entry</button>
                        <button type="button" class="btn btn-info">View Sales</button>
                        <button type="button" class="btn btn-danger">Home</button>
      
                </div>

            </form>
        </div>
    </div>


@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- section for table row dynamicalle added -->
    <script type="text/javascript">
        $(document).ready(function(){
        var i=1;
            $("#add_row").click(function(){
            $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='productname"+i+"' type='text' placeholder='Product Name' class='form-control input-md'  /> </td><td><input  name='unit"+i+"' type='text' placeholder='Unit Name'  class='form-control input-md'></td><td><input  name='qty"+i+"' type='text' placeholder='Qty'  class='form-control input-md'></td><td><input  name='price"+i+"' type='text' placeholder='Price'  class='form-control input-md'></td><td><input  name='disc"+i+"' type='text' placeholder='Disc'  class='form-control input-md'></td><td><input  name='unit"+i+"' type='text' placeholder='B.Qty'  class='form-control input-md'></td><td><input  name='amount"+i+"' type='text' placeholder='Amount'  class='form-control input-md'></td>");
            $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
            i++; 
          });

            $("#delete_row").click(function(){
                 if(i>1){
                 $("#addr"+(i-1)).html('');
                 i--;
                 }
             });
        });
    </script>


<!-- dynamically getting address, phone, date, reference name of a customer -->
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('change','#customer_name',function(){
            var customer_id = $(this).val();
            $.ajax({
                type:'get',
                url:'{!!URL::to('customer-sales')!!}',
                data:{'id':customer_id},
                dataType:'json',
                success:function(data){
                    $('.myaddress').val(data.cu_address);
                    $('.mobile_no').val(data.cu_mobile);
                    $('.created_at').val(data.created_at);
                    $('.reference_name').val(data.reference_name);
                },
                error:function(){
                    console.log('error');
                }
            });

        });
    });
</script>


<!-- dynamically get the item_pirce of an item -->
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('change','#item_name',function(){
            var item_id = $(this).val();
            var qty     = $('.qty').val();
            console.log(qty);
            $.ajax({
                type:'get',
                url:'{!!URL::to('item-cost')!!}',
                data:{'id':item_id},
                dataType:'json',
                success:function(data){
                    var item_price   = data.item_price;
                    var total_amount = qty * item_price;

                    $('.item_pirce').val(data.item_price);
                    $('.total_amount').val(total_amount);
                },
                error:function(){
                    console.log('error');
                }
            });

        });
    });
</script>

