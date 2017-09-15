@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h3 class="text-center">Debit Voucher</h3></div>
                </div>
            </div>

        <form>

                <div class="col-md-12">
                    <div class="form-group col-xs-4 col-md-3">
                        <label for="name" class="control-label">Date</label>                        
                        <input type="date" value='Bond' class="form-control" name="voucher_date" id="voucher_date">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-xs-4 col-md-3">
                        <label for="name" class="control-label">Name:</label>                        
                        <input type="text" value='Bond' class="form-control" name="customer_name" id="proprietor_name" placeholder="Enter Name">
                    </div>
                    <div class="form-group col-xs-4 col-md-3">
                        <label for="name" class="control-label">Mobile:</label>                        
                        <input type="text" value='01234' class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile">
                    </div>
                    <div class="form-group col-xs-4 col-md-3">
                        <label for="name" class="control-label">Address:</label>                        
                        <input type="text" value='Dhaka,Bangladesh' class="form-control" name="address" id="address" placeholder="Enter Address">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="row clearfix">
                            <div class="col-md-12 column">
                                <table class="table table-bordered table-hover" id="tab_logic">
                                    <thead>
                                        <tr >
                                            <th class="text-center">
                                                No
                                            </th>
                                            <th class="text-center">
                                                Expense Type
                                            </th>
                                            <th class="text-center">
                                                Descrition
                                            </th>
                                            <th class="text-center">
                                                Amount
                                            </th>
                                            <th class="text-center">
                                                <a id="add_row" class="btn btn-primary pull-left">+</a><a id='delete_row' class="pull-right btn btn-danger">-</a>
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
                                                    <option value="product" disabled selected>--select--</option>
                                                    <option>Nasta</option>
                                                    <option>Car</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name='description' placeholder='Descriotion' class="form-control"/>
                                            </td>
                                            <td>
                                                <input type="text" name='total_amount' class="form-control total_amount" placeholder="Amount">
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
                        <button type="button" class="btn btn-success">Save Expenses</button>
                        <button type="button" class="btn btn-primary">+ New Entry</button>
                        <button type="button" class="btn btn-info">Print</button>
                        <button type="button" class="btn btn-info">View</button>
      
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




