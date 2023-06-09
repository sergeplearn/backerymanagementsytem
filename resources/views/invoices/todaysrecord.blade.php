


@extends('layouts.app')
@section('css')
<style>
    .page-break {
    page-break-after: always;
}
    body{margin-top:20px;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
}
.invoice-container {
    padding: 1rem;
}
.invoice-container .invoice-header .invoice-logo {
    margin: 0.8rem 0 0 0;
    display: inline-block;
    font-size: 1.6rem;
    font-weight: 700;
    color: #2e323c;
}
.invoice-container .invoice-header .invoice-logo img {
    max-width: 130px;
}
.invoice-container .invoice-header address {
    font-size: 0.8rem;
    color: #9fa8b9;
    margin: 0;
}
.invoice-container .invoice-details {
    margin: 1rem 0 0 0;
    padding: 1rem;
    line-height: 180%;
    background: #f5f6fa;
}
.invoice-container .invoice-details .invoice-num {
    text-align: right;
    font-size: 0.8rem;
}
.invoice-container .invoice-body {
    padding: 1rem 0 0 0;
}
.invoice-container .invoice-footer {
    text-align: center;
    font-size: 0.7rem;
    margin: 5px 0 0 0;
}

.invoice-status {
    text-align: center;
    padding: 1rem;
    background: #ffffff;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    margin-bottom: 1rem;
}
.invoice-status h2.status {
    margin: 0 0 0.8rem 0;
}
.invoice-status h5.status-title {
    margin: 0 0 0.8rem 0;
    color: #9fa8b9;
}
.invoice-status p.status-type {
    margin: 0.5rem 0 0 0;
    padding: 0;
    line-height: 150%;
}
.invoice-status i {
    font-size: 1.5rem;
    margin: 0 0 1rem 0;
    display: inline-block;
    padding: 1rem;
    background: #f5f6fa;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
}
.invoice-status .badge {
    text-transform: uppercase;
}

@media (max-width: 767px) {
    .invoice-container {
        padding: 1rem;
    }
}




.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}

.text-success {
    color: #00bb42 !important;
}

.text-muted {
    color: #9fa8b9 !important;
}

.custom-actions-btns {
    margin: auto;
    display: flex;
    justify-content: flex-end;
}

.custom-actions-btns .btn {
    margin: .3rem 0 .3rem .3rem;
}
   </style>
@stop
@section('content')

  <?php
$totalbread50 = 0;
$totallong40 = 0;
$totalsquare40 = 0;
$totallong80 = 0;
$totalround = 0;
$totalkirico = 0;
$totalsquare80 = 0;
$totalbread200 = 0;
$totalbread300 = 0;
$totalbread500 = 0;
$totalbread1000 = 0;
$expenditure = 0.00;
$itemsupplied = 0.00;
$moneycolleted = 0.00;
$housesal = 0;
$advance = 0;
$employeesal = 0;
?>
<p class = "d-none">
	@foreach($expense as $expense)
	{{ $totalexpense = $expense->amount }}
	<?php
$expenditure += $totalexpense;

?>
  @endforeach
</p>
<p class = "d-none">
  @foreach($itemsupplieds as $itemsupplieds)
	{{ $totalitemsupplied = $itemsupplieds->amount }}
	<?php
$itemsupplied += $totalitemsupplied;
?>
  @endforeach
</p>
<p class = "d-none">
  @foreach( $money as  $money)
	{{ $totalmoney =  $money->amount }}
	<?php
$moneycolleted += $totalmoney;
?>
  @endforeach
</p>
<p class = "d-none">
  @foreach( $housesalary as  $housesalary)
	{{ $tothousesalary =  $housesalary->salary }}
	<?php
$housesal += $tothousesalary;
?>
  @endforeach
</p>
<p class = "d-none">
  @foreach( $regemploysals as   $regemploysals)
	{{ $totregemploysals =  $regemploysals->salary }}
	<?php
$employeesal += $totregemploysals;
?>
  @endforeach

</p>


<p class = "d-none">
  @foreach( $advances  as   $advances )
	{{ $totadvances  =  $advances->amount }}
	<?php
$advance += $totadvances;
?>
  @endforeach

</p>





<p class = "d-none">
  @foreach($employee as $serge)
    
   
        {{$bread50 = $serge->bread50 }}
       {{$long40 = $serge->long40 }}
        {{$square40 = $serge->square40 }}
        {{$long80 = $serge->long80 }}
        {{$round = $serge->round }}
        {{$kirico = $serge->kirico }}
        {{$square80 = $serge->square80 }}
        {{$bread200 = $serge->bread200 }}
        {{$bread300 = $serge->bread300 }}
        {{$bread500 = $serge->bread500 }}
        {{$bread1000 = $serge->bread1000 }}
   
    <?php
       $totalbread50 += $bread50;
        $totallong40 += $long40;
        $totalsquare40 += $square40;
        $totallong80 += $long80;
        $totalround += $round;
        $totalkirico += $kirico;
        $totalsquare80 += $square80;
        $totalbread200 += $bread200;
        $totalbread300 += $bread300;
        $totalbread500 += $bread500;
        $totalbread1000 += $bread1000;
        
        ?>
@endforeach  

 </p>
    <!-- Start your project here-->
    
<div class="row gutters ">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="card">

				<div class="card-body p-0">
					<div class="invoice-container">
						<div class="invoice-header">
							<!-- Row start -->
							<div class="row gutters">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="custom-actions-btns mb-5">
										<a href="/server" class="btn btn-primary">
											<i class="icon-download"></i> Download
										</a>
										<a href="#" class="btn btn-secondary">
											<i class="icon-printer"></i> Print
										</a>
									</div>
								</div>
							</div>
							<!-- Row end -->
							<!-- Row start -->
							
							
							<div class="row gutters">
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
									<a href="index.html" class="invoice-logo">
										Divine and favor.com
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<address class="text-right">
										Maxwell admin Inc, 45 NorthWest Street.<br>
										Sunrise Blvd, San Francisco.<br>
										00000 00000
									</address>
								</div>
							</div>
							<!-- Row end -->
							<!-- Row start -->
							<div class="row gutters">
								<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
									<div class="invoice-details">
										<address>
											
											{{ Auth::user()->name }}<br>
											Divine and favor bakery, Yaounder, CMA
										</address>
									</div>
								</div>
								<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
									<div class="invoice-details">
										<div class="invoice-num">
											<?php
											$one = date('d');
											$two = date('m');
											?>
											<div>Invoice - #<?php echo $one.$two?></div>
											<div><?php
						   echo date("F jS, Y",strtotime("now"));
							?></div>
										</div>
									</div>													
								</div>
							</div>
							<!-- Row end -->
						</div>
						<div class="invoice-body">
							<!-- Row start -->
							<div class="row gutters">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="table-responsive">
										<table class="table ">
											<thead>
												<tr>
													<th>Items</th>
													<th>Product ID</th>
													<th>Quantity</th>
													<th>Sub Total</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														bread taken out today
														<p class="m-0 text-muted">
															Reference site about Lorem Ipsum, giving information on its origins.
														</p>
													</td>
													<td>total amount</td>
													<td>9</td>
													<td>{{ (($totalbread50 + $totallong40 + $totalsquare40 ) * $price->bread50 ) + (($totallong80 + $totalround + $totalkirico + $totalsquare80) * $price->bread100) + ($totalbread200 * $price->bread200 ) + ($totalbread300 * $price->bread300 ) + ($totalbread500 * $price->bread500)+ ($totalbread1000 * $price->bread1000) }}</td>
												</tr>
												<tr>
													<td>
													total money collected for today
														<p class="m-0 text-muted">
															As well as a random Lipsum generator.
														</p>
													</td>
													<td>Total</td>
													<td>5</td>
													<td>{{$moneycolleted}}</td>
												</tr>
												<tr>
													<td>
														expenditures for  today
														<p class="m-0 text-muted">
															Lorem ipsum has become the industry standard.
														</p>
													</td>
													<td>
														<p>supplies pay</p>
														<p>other expenditure</p>
														<p>salaray</p>
													</td>
													<td>6</td>
													<td>
													<p>{{$itemsupplied}}</p>
													<p>{{$expenditure }}</p>
													<p>{{$housesal + $employeesal + $advance }}</p>	
												
												</tr>
												<tr>
													<td>&nbsp;</td>
													<td colspan="2">
														<p>
															Subtotal<br>
															Shipping &amp; Handling<br>
															Tax<br>
														</p>
														<h5 class="text-success"><strong>Grand Total</strong></h5>
													</td>			
													<td>
														<p>
															$5000.00<br>
															$100.00<br>
															$49.00<br>
														</p>
														<h5 class="text-success"><strong>$5150.99</strong></h5>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- Row end -->
						</div>
						<div class="invoice-footer">
							Thank you for your Business.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- End your project here-->

    <!-- MDB -->
    
  @stop