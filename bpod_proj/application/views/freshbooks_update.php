<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>FreshBooks! Project Update</h1>

	<div id="body">
		<!-- <code>application/controllers/welcome.php</code> -->

		<div>
			<?php 
			echo form_error();
			echo validation_errors();
			?>
		</div>

		<div>
			<span> <?php if($message) {?> 
				<code> <?php echo $message; ?> </code> 
				<?php } ?>
			</span>
			
			<?php echo form_open(''); ?>
				<h5>Select Project</h5>
				<select name="proj">
					<?php foreach($data->project as $d){ 
					?>
						<option value="<?php echo $d->project_id; ?>">
							<?php echo "&nbsp;" . $d->name . "&nbsp;"; ?>
						</option>
					<?php } ?>
				</select>

				<h5>Set Task.<small>(You can select multiple task to add on the project.)</small></h5>
				<!-- <input type="text" name="task" value="" size="50" /> -->

				<select name="tasks[]" multiple>
					<?php foreach($allTasks->tasks->task as $d){ 
						$s="";
						if(in_array($d->task_id, $projTaskIds))
						{
							$s = "selected='1'";
						}
					?>

						<option value="<?php echo $d->task_id; ?>" <?php echo $s; ?>>
							<?php echo "&nbsp;" . $d->name . "&nbsp;"; ?>
						</option>
					<?php } ?>
				</select>
				


				<h5>Set Time in hours</h5>
				<input type="text" name="time" value="" size="50" />
				<div><input type="submit" value="Submit" /></div>
			</form>
		</div>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>