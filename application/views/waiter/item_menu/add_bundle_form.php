<?php
/**
 * Created by PhpStorm.
 * User: Hardner07@gmail.com
 * Date: 6/21/2019
 * Time: 9:51 PM
 */

?>

<div class="col-12 h-100">
	<div class="row h-15">
		<div class="col-12 h-100 center-content">
			<h2 class="m-0"><?= $item->item_name ?></h2>
		</div>
	</div>
	<div class="row h-25">
		<div class="col-12 p-0">
			<div class="row no-gutters h-100">
				<div class="col-3 h-100">
					<a onclick="change_item_count(-1)" href="#"
					   class="btn btn-danger rounded-0 w-100 h-100 center-content">
						<i class="fas fa-minus btn-icon"></i>
					</a>
				</div>
				<div class="col h-100">
					<input type="number" class="form-control h-100 rounded-0 text-center" id="count-input" value="1"
						   readonly>
				</div>
				<div class="col-3 h-100">
					<a onclick="change_item_count(1)" href="#"
					   class="btn btn-success rounded-0 w-100 h-100 center-content">
						<i class="fas fa-plus btn-icon"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row h-45">
		<?php if ($item->item_type == 'pizza') { ?>
			<div class="col-12 h-100 center-content">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="to-go-checkbox">
					<label class="form-check-label" for="to-go-checkbox">
						Wynos
					</label>
				</div>
			</div>
		<?php } ?>
	</div>
	<div class="row h-15">
		<a onclick="add_bundle()" href="#"
		   class="btn btn-success rounded-0 w-100 h-100 center-content">Dodaj</a>
	</div>
</div>
