
<style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }
        h1,h2,h3,h4,h5,h6,p,span,label {
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }
        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }
        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }
        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }
        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }
        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }
        .text-end {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }
        .no-border {
            border: 1px solid #fff !important;
        }
        .bg-blue {
            background-color: #414ab1;
            color: #fff;
        }
         img{
            height: 70px;
            width: 100px;
         }

        footer{
            bottom: 0%;
            margin: auto;
            position: fixed;
            left: 0px;
                right: 0px;
                text-align: center;
        }
    </style>
  <table class="order-details">
        <thead>
        
            <tr>
                <th width="50%" colspan="2">
                    <h2 class="text-start">Pumplink </h2>
                    <img src="android-chrome-192x192.png">
                </th>
                <th width="50%" colspan="2" class="text-end company-data">
                   
                    <span>Pumplink</span> 
                    <br>
                    <span>No 07, 4th Street, Malboro </span> 
                    <br>
                    <span>Sandton</span> 
                    <br>
                    <span>(+27) 11 262 2384</span> 
                    <br>
                    <span>sales@pumplink.co.za</span> 
                    
                    <br>
                 
                </th>
            </tr>
            <tr class="bg-blue">
                <th width="50%" colspan="2">Quotation Details</th>
                <th width="50%" colspan="2">User Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Company/Institution:</td>
                <td></td>

                <td>Full Name:</td>
                <td> </td>
            </tr>
            <tr>
                <td>Tracking Id/No.:</td>
                <td></td>

                <td>Email Id:</td>
                <td></td>
            </tr>
            <tr>
                <td>Date:</td>
                <td>{{ date('d / M / Y')}}</td>

                <td>Phone:</td>
                <td></td>
            </tr>
            <tr>
                <td>Time:</td>
                <td>{{ date(' H:i')}}</td>

                <td>Address:</td>
                <td></td>
            </tr>
            <tr>
                <td>Order Status:</td>
                <td></td>

                <td>Pin code:</td>
                <td></td>
            </tr>
        </tbody>
    </table>


<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Unit price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            
        </tr>
    </thead>
    <tbody>
    @php $total = 0 @endphp
@foreach(session('cart') as $id => $details)
@php $total += $details['price'] * $details['quantity'] @endphp
<tr data-id="{{ $id }}">
<td data-th="Product">
                        <div class="row">
                            
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['product_name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">R{{ $details['price'] }}</td>
                    <td data-th="Quantity">
                        <p  >{{ $details['quantity'] }}</p>
                    </td>
                    <td data-th="Subtotal" class="text-center">R {{ $details['price'] * $details['quantity'] }}</td>
                    
                </tr>
                

            
                
@endforeach
    </tbody>

    <tfoot>
        <tr>
            <td colspan="4" class="text-right"><h3><strong>Total R {{ $total }}</strong></h3></td>
        </tr>
       
    </tfoot>
</table>
<footer >Copyright &copy; 2023 - Pumplink All Rights Reserved</footer>
