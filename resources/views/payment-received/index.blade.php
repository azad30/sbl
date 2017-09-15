@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-danger">
                    <div class="panel-heading"><h3 class="text-center">Payment Received</h3></div>
                </div>
            </div>

        <form>

                <div class="col-md-12">
                    <div class="form-group col-xs-4 col-md-3">
                        <label for="name" class="control-label">Payment Date:</label>                        
                        <input type="date" value='Bond' class="form-control" name="payment_date" id="payment_date">
                    </div>
                    <div class="form-group col-xs-4 col-md-3">
                        <label for="name" class="control-label">Customer Name</label>                        
                        <select name="customer_name" id="customer_name" class="form-control">
                            <option value="volvo" disabled selected>-- select customer --</option>
                            <option>James</option>
                            <option>Bond</option>
                            <option>Azad</option>
                        </select>
                    </div>
                    <div class="form-group col-xs-4 col-md-3">
                        <label for="name" class="control-label">Reference By:</label>                        
                        <input type="text" value='Azad' class="form-control" name="mobile" id="mobile" readonly="readonly">
                    </div>
                    <div class="form-group col-xs-4 col-md-3">
                        <label for="name" class="control-label">Total Due:</label>                        
                        <input type="text" value='1234' class="form-control" name="total_due" id="total_due" readonly="readonly">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="row clearfix">
                            <div class="col-md-12 column">
                                <table class="table table-bordered table-hover" id="tab_logic">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                Payment
                                            </th>
                                            <th class="text-center">
                                                Method
                                            </th>
                                            <th class="text-center">
                                                Net Due
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id='addr0'>
                                            <td>
                                                <input type="text" value="1234" name='payment' placeholder='Descriotion' class="form-control"/>
                                            </td>
                                            <td>
                                                <select name="payment_method" id="payment_method" class="form-control">
                                                    <option value="product" disabled selected>--select--</option>
                                                    <option>Cash</option>
                                                    <option>Bkash</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" value="12345" name='net_due' placeholder='Descriotion' class="form-control"/>
                                            </td>
                                        </tr>
                                        <tr id='addr1'></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
             <!--            <a id="add_row" class="btn btn-primary pull-left">+</a><a id='delete_row' class="pull-right btn btn-danger">-</a> -->
                    </div>
                    </div>
                </div>

                    <div class="container">                   
                        <button type="button" class="btn btn-success">Save Record</button>
                        <button type="button" class="btn btn-primary">+ New Entry</button>
                        <button type="button" class="btn btn-info">Print</button>
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
            $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='productname"+i+"' type='text' placeholder='Product Name' class='form-control input-md'  /> </td><td><input  name='description"+i+"' type='text' placeholder='Description'  class='form-control input-md'></td><td><input  name='amount"+i+"' type='text' placeholder='Amount'  class='form-control input-md'></td>");
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




