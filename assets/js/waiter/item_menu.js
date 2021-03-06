function load_item_menu() {
	$.ajax({
		url: "waiter/item_menu/load_item_menu",
		success: function (data) {
			window.current_menu = "item_menu";
			$("#container").html(data);
			square_buttons();
			clearInterval(window.refresh_interval);
		}
	});
}

function load_category_list() {
	$.get("waiter/item_menu/load_category_list", function (data) {
		window.current_menu = "item_menu";
		$("#item-menu-main").replaceWith(data);
		square_buttons();
	})
}

function load_item_list(category_id) {
	$.ajax({
		url: "waiter/item_menu/load_item_list",
		type: "post",
		data: {
			category_id: category_id
		},
		success: function (data) {
			window.current_menu = "item_list";
			window.current_category = category_id;
			$("#item-menu-main").replaceWith(data);
			square_buttons();
		}
	})
}

function load_item_form(item_id) {
	$.ajax({
		url: "waiter/item_menu/load_item_form",
		type: "post",
		data: {
			item_id: item_id
		},
		success: function (data) {
			window.current_menu = "item_form";
			$("#item-menu-main").html(data);
		}
	})
}

function add_bundle() {
	if ($("#to-go-checkbox").prop("checked")) {
		add_item_to_bundle(/* to-go-id here? */);
	}
	$.ajax({
		url: "waiter/item_menu/add_bundle",
		type: "post",
		data: {
			bundle_count: $("#count-input").val()
		},
		dataType: "text",
		success: function () {
			load_order_menu();
		}
	})
}

function add_item_to_bundle() {

}

function add_item(item_id) {
	$.ajax({
		url: "waiter/item_menu/add_item",
		type: "post",
		data: {
			item_id: item_id,
			item_count: $("#count-input").val(),
			item_to_go: $("#to-go-checkbox").prop("checked")
		},
		dataType: "text",
		success: function () {
			load_order_menu();
		}
	})
}
