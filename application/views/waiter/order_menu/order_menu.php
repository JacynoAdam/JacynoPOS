<?php
/**
 * Created by PhpStorm.
 * User: Hardner07@gmail.com
 * Date: 6/28/2019
 * Time: 1:03 PM
 */
?>
<div id="order-menu-list" class="row h-60">
	<div class="col-12 h-100 overflow-scroll p-0">
		<?php foreach ($order_items as $item) { ?>
			<div class="row h-25 no-gutters <?php switch ($item->item_status) {
				case 'new':
					echo 'bg-muted';
					break;
				case 'ready':
					echo 'bg-light-yellow';
					break;
				case 'delivered':
					echo 'bg-light-green';
					break;
			} ?>">
				<div class="col p-1 h-100 overflow-hidden" onclick="edit_item_popup(<?= $item->order_item_id ?>)">
					<div>
						<div><b><?= $item->item_name ?></b></div>
						<small><?= $item->item_comment ?></small>
					</div>
				</div>
				<div class="col-3 p-1 center-content">
					<b><?= $item->price ?> zł</b>
				</div>
				<div class="col-2">
					<a onclick="confirm_delete_item_popup(<?= $item->order_item_id ?>)" href="#"
					   class="btn btn-danger w-100 h-100 rounded-0 center-content">
						<i class="fas fa-trash-alt"></i>
					</a>
				</div>
			</div>
			<hr class="m-0">
		<?php } ?>
	</div>
</div>

