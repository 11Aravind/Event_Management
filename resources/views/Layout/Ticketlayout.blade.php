<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Event Ticket</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="../../css/ticket.css">

</head>
<style>
	#download{
		padding: 9px;
    width: 39%;
    margin-left: 34px;
    margin-left: 28%;
    color: white;
    background: #ff460e;
    border: none;
    margin-top: 25px;
    /* margin: 25px; */
    margin-bottom: 22px;
	}
</style>
<body>
<!-- partial:index.partial.html -->
<link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
			<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" > -->
<!-- partial -->
@php $x=2;@endphp
<button class="btn btn-primary"  id="download">Download</button>
  @for($i=0;$i<$noofseat;$i++)
  
<div class="ticket" style="margin: 9px 359px;">
	<div class="left">
		<div class="image" style="background-repeat: no-repeat;
    background-size: cover;background-image: url('../../uploaded_images/{{$Event->event_banner}}')">
       
			<!-- <p class="admit-one">
				<span>ADMIT ONE</span>
				<span>ADMIT ONE</span>
				<span>ADMIT ONE</span>
			</p> -->
			<div class="ticket-number">
				<p>
                    
                #20030220 @php echo $x;
                    @endphp
				</p>
			</div>
		</div>
		<div class="ticket-info">
			<p class="date">
				<span>TUESDAY</span>
				<span class="june-29">{{$Event->event_date}}</span>
				<span>2022</span>
			</p>
			<div class="show-name">
				<h1>{{$Event->event_name}}</h1>
				<h2>Olivia Rodrigo</h2>
			</div>
			<div class="time">
				<p> {{$Event->starting_time}}AM <span>TO</span>{{$Event->duration_time}}PM </p>
				<!-- <p>DOORS <span>@</span> 7:00 PM</p> -->
			</div>
			<p class="location"><span>East High School</span>
				<span class="separator"><i class="far fa-smile"></i></span><span>Salt Lake City, Utah</span>
			</p>
		</div>
	</div>
	<div class="right">
		<!-- <p class="admit-one">
			<span>ADMIT ONE</span>
			<span>ADMIT ONE</span>
			<span>ADMIT ONE</span>
		</p> -->
		<div class="right-info-container">
			<div class="show-name">
				<h1>{{$Event->event_name}}</h1>
			</div>
			<div class="time">
				<p>8{{$Event->starting_time}}AM  <span>TO</span> {{$Event->duration_time}}PM</p>
				<p>DOORS <span>@</span> 7:00 PM</p>
			</div>
			<div class="barcode">
				<img src="https://external-preview.redd.it/cg8k976AV52mDvDb5jDVJABPrSZ3tpi1aXhPjgcDTbw.png?auto=webp&s=1c205ba303c1fa0370b813ea83b9e1bddb7215eb" alt="QR code">
			</div>
			<p class="ticket-number">
				#20030220@php echo $x;
                    @endphp

                    @php $x=$x+1;
                    @endphp
			</p>
		</div>
	</div>
</div>
  @endfor
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
<script>
	$("#download").click(function(){
		$("#download").hide();
		window.print();
	});
</script>
</body>
</html>
