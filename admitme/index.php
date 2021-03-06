<html lang="en">

	<head>

		<title>AdmitMe</title><br>

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

		<meta name="viewport" content="width=device-width, initial-scale=1">

	</head>


	<body>

		<div class="titles">
			<h1>AdmitMe</h1>
			<h2>Admission Note Generator</h2>
		</div>

		<div class="input-section">

			<form method="POST" action="response.php">

				<div class="input-group">
					<h3 class="input-label">Hospital ID</h3>
					<input type="text" name="id">
				</div>

				<div class="input-group">
					<h3 class="input-label">First name</h3>
					<input type="text" name="first_name">
				</div>

				<div class="input-group">
					<h3 class="input-label">Last name</h3>
					<input type="text" name="last_name">
				</div>

				<div class="input-group">
					<h3 class="input-label">Sex</h3>
					<select name="sex">
						<option>Male</option>
						<option>Female</option>
						<option>Other</option>
					</select>
				</div>

				<div class="input-group">
					<h3 class="input-label">Date of Birth</h3>
					<input type="date" name="date_of_birth">
				</div>

				<div class="input-group">
					<h3 class="input-label">Presenting Complaint</h3>
					<input type="text" name="presenting_complaint">
				</div>

				<div class="input-group">
					<h3 class="input-label">History of Presenting Complaint</h3>
					<textarea name="hx_presenting_complaint"></textarea>
				</div>

				<div class="input-group">
					<h3 class="input-label">Past Medical History</h3>
					<textarea name="pmhx"></textarea>
				</div>

				<div class="input-group">
					<h3 class="input-label">Medications</h3>
					<textarea name="medications"></textarea>
				</div>

				<div class="input-group">
					<h3 class="input-label">Allergies</h3>
					<textarea name="allergies"></textarea>
				</div>

				<div class="input-group">
					<h3 class="input-label">Family History</h3>
					<textarea name="fmhx"></textarea>
				</div>

				<div class="input-group">
					<h3 class="input-label">Social History</h3>
					<textarea name="shx"></textarea>
				</div>

				<div class="input-group">
					<h3 class="input-label">Observations</h3><br>
					<div class="observation">
						<label>Heart rate</label><input type="number" name="heart_rate">
					</div><br>
					<div class="observation">
						<label>Blood pressure</label><input type="text" name="blood_pressure">
					</div><br>
					<div class="observation">
						<label>Respiratory rate</label><input type="number" name="resp_rate">
					</div><br>
					<div class="observation">
						<label>Temperature</label><input type="number" name="temp" step="0.1">
					</div><br>
					<div class="observation">
						<label>Oxygen saturation</label><input type="number" name="oxygen_sats">
					</div>
				</div>

				<div class="input-group">
					<h3 class="input-label">Examination</h3>
					<textarea name="examination"></textarea>
				</div>

				<div class="input-group">
					<h3 class="input-label">Impression</h3>
					<input type="text" name="impression">
				</div>

				<div class="input-group">
					<h3 class="input-label">Plan</h3>
					<textarea name="plan"></textarea>
				</div>

				<div class="input-group">
					<button type="submit" class="submit">Generate Admission Note</button>
				</div>

			</form>

		</div>

	</body>

</html>