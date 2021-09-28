<!DOCTYPE html>
<html>
<head>
	<title>IT Support Helpdesk </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.buttonload {
  background-color: #ffc0cb; /* Green background */
  padding: 10px 40px; /* Some padding */
  font-size: 14px; /* Set a font-size */
  display: flex;
  justify-content: center;
  álign-items: center;
  color: #000;
  border-width: 2px;
    border-style: outset;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
    border-image: initial;
}

/* Add a right margin to each icon */
.fa {
  /*margin-left: 10px;
  margin-right: 15px;*/
}
</style>
</head>
<body>
	<div class="wrap">
		<div class="container">
		<form name ="helpdesk-it" >
				<h1>IT Support Helpdesk</h1>
	
			<table>
				<tr>
					<td>Name :</td>
					<td><input type="text" name="Nama"></td>
				</tr>
	
				<tr>
					<td>Whatsapp Number :</td>
					<td><input type="number" name="No_Whatsapp"></td>
		
				</tr>
				<tr>
					<td>Division :</td>
					<td><input type="text" name="Divisi"></td>
				</tr>
				<tr>
					<td>Date :</td>
					<td><input type="date" name="Tanggal"></td>
				</tr>
				<tr>
					<td>What Is Your Problem? :</td>
					<td><textarea name="Kendala_yang_dialami"></textarea></td>
				</tr>
				<tr>
					<td>Insert Picture :</td>
					<td>
						<input type="file" name="Picture">
					</td>
				</tr>
				<tr>
					<td>
						<div style="display: flex;align-items: center;">
							<button type="reset" name="Clear" style="margin-right:10px">Clear all</button>
							<button type="submit" class="btn btn-primary" style="margin-right:10px">Submit</button>
							<button class="buttonload">
							  <i class="fa fa-refresh fa-spin"></i>
							  <span style="margin-left: 5px;line-height: 18px;">Loading</span>
							</button>

						</div>
					</td>
				</tr>
			</table>
			</form>
		</div>
	</div>

<script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycby2XlXT4TZAtCuN2MS5DDJFz059506UrgGYBYYhcXkNKtKa0i4JTvjxiljbMcc0bPiw/exec'
  const form = document.forms['helpdesk-it']

  form.addEventListener('submit', e => {
    e.preventDefault();
    console.log(new FormData(form))
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => console.log('Success!', response))
      .catch(error => console.error('Error!', error.message))
  })
</script>
</body>
</html>