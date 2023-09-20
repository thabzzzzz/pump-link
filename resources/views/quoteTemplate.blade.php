@php $total = 0 @endphp
@foreach(session('cart') as $id => $details)
@php $total += $details['price'] * $details['quantity'] @endphp
<table>
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
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity cart_update" min="1" />
                    </td>
                    <td data-th="Subtotal" class="text-center">R {{ $details['price'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="">
                       
                    </td>
                </tr>

</table>
                
@endforeach