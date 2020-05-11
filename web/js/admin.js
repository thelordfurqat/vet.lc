/**
 * @author sergKs
 * @since 04.07.15
 */

'use strict';

jQuery(document).ready(function ($) {



	$('.tree li').on('click', function () {
		var next = $(this).next();
		if (next.length > 0 && next[0].tagName == 'UL') {
			next.slideToggle();
		}
	});

	$('.j-clear-image').on('click', function () {
		var parent = $(this).parent();
		console.log(parent.attr('class'));
		parent.find('[type="hidden"]:first').val(1);
		parent.find('.file-preview-image').fadeOut(200);
		setTimeout(function () {
			parent.find('.form-group').before('<div class="upload-image '+ (parent.attr('class') == 'col-md-6' ? '' : 'small') +'"></div>');
		}, 200);
		$(this).remove();
	});

	$('#create-backup').on('click', function () {
		var item = $(this);
		$('.loading').fadeIn(1);
		item.attr('disabled', 'disabled');
		$.ajax({
			type: 'POST',
			url: item.attr('data-url'),
			dataType: 'json',
			success: function () {
				$('.loading').fadeOut(1);
				item.removeAttr('disabled');
				location.reload();
			}
		});
	});

	$('#reset-button').on('click', function () {
		$('.login').remove();
		var reset = $('.reset');
		reset.fadeIn(100);
		$('.login .text-center').after(reset);
	});

	$('.j-view-password').on('click', function () {
		var input = $(this).parents('.form-group').find('input');
		if (input.attr('type') == 'password') {
			input.attr('type', 'text');
		} else {
			input.attr('type', 'password');
		}
	});

	$('#reset-form').on('submit', function () {
		var user = $(this).find('[name="user"]');
		var form = $(this);
		if (user.val().trim().length == 0) {
			user.parent().find('.error').html('Р—Р°РїРѕР»РЅРёС‚Рµ РѕР±СЏР·Р°С‚РµР»СЊРЅРѕРµ РїРѕР»Рµ.');
		} else {
			$.ajax({
				type: 'POST',
				url: form.attr('action'),
				data: {user: user.val().trim()},
				success: function (rez) {
					if (rez == 0) {
						user.parent().find('.error').html('РќРµРІРµСЂРЅС‹Р№ Р»РѕРіРёРЅ РёР»Рё E-mail.');
					} else {
						user.parent().find('.error').html('');
						$('.block:first').remove();
						$('.alert').fadeIn(1);
						setTimeout(function () {
							$('.alert').fadeOut(1000);
							location.reload();
						}, 7000);
					}
				}
			});
		}
		return false;
	});

	$('.preview-caption').focusout(function () {
		var item = $(this);
		$.ajax({
			type: 'POST',
			url: item.attr('data-url'),
			data: {caption: item.val().trim()}
		});
	});

	$('.preview-trash').on('click', function () {
		var item = $(this);
		$.ajax({
			type: 'POST',
			url: item.attr('data-url'),
			success: function () {
				item.parents('.col-md-2').fadeOut(300);
			}
		});
	});

	if ($.contextMenu !== undefined) {
		$.each($('.tree a + .tree'), function (key, item) {
			item = $(item);
			var el = item.parent().find('.glyphicon-file:first');
			el.removeClass('glyphicon-file');
			el.removeClass('text-primary');
			el.addClass('glyphicon-folder-open');
			item.parent().find('a:first').addClass('a-container');
		});

		$(function() {
			function editCategory(key, options) {
				var item = $(options.selector + '.context-menu-active');
				location.href = '/admin/category/update?id=' + item.attr('data-id');
			}

			function addCategory(key, options) {
				var item = $(options.selector + '.context-menu-active');
				location.href = '/admin/category/create?parentId=' + item.attr('data-id');
			}

			function addProduct(key, options) {
				var item = $(options.selector + '.context-menu-active');
				location.href = '/admin/product/create?categoryId=' + item.attr('data-id');
			}

			$.contextMenu({
				selector: '.context-menu-one',
				callback: function(key, options) {},
				items: {
					"addCategory": {name: "Р”РѕР±Р°РІРёС‚СЊ СЃСЋРґР°", icon: 'add', callback: addCategory},
					"addProduct": {name: "Р”РѕР±Р°РІРёС‚СЊ С‚РѕРІР°СЂ", icon: 'add', callback: addProduct},
					"editCategory": {name: "РР·РјРµРЅРёС‚СЊ", icon: 'edit', callback: editCategory},
					"close": {name: "РћС‚РјРµРЅР°", icon: function(){
						return 'context-menu-icon context-menu-icon-quit';
					}}
				}
			});
		});
	}

	///////////////////// charts ///////////////////////////////
	function chart(containerId, type) {
		var container = $('#'+containerId);
		var data = JSON.parse(container.attr('data-chart'));

		container.highcharts({
			chart: {
				type: type
			},
			credits: {
				enabled: false
			},
			title: {
				text: data.title
			},
			subtitle: {
				text: data.subtitle
			},
			xAxis: {
				categories: data.categories,
				crosshair: true
			},
			yAxis: {
				min: 0,
				title: {
					text: data.yTitle
				}
			},
			tooltip: {
				headerFormat: '<b>{point.y:.1f}</b>',
				pointFormat: '',
				shared: true,
				useHTML: true
			},
			plotOptions: {
				column: {
					pointPadding: 0.2,
					borderWidth: 0
				}
			},
			series: [{
				name: 'РџСЂРѕСЃРјРѕС‚СЂС‹',
				data: data.values
			}]
		});

		$('.highcharts-legend-item').remove();
	}

	function pieChart(containerId) {
		var container = $('#'+containerId);
		var data = JSON.parse(container.attr('data-chart'));

		container.highcharts({
			chart: {
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false,
				type: 'pie'
			},
			credits: {
				enabled: false
			},
			title: {
				text: data.title
			},
			tooltip: {
				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
			},
			plotOptions: {
				pie: {
					allowPointSelect: true,
					cursor: 'pointer',
					dataLabels: {
						enabled: true,
						format: '<b>{point.name}</b>: {point.percentage:.1f} %',
						style: {
							color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
						}
					}
				}
			},
			series: [{
				name: "Brands",
				colorByPoint: true,
				data: data.values
			}]
		});
	}

	function chartOrders(containerId, type) {
		var container = $('#'+containerId);
		var data = JSON.parse(container.attr('data-chart'));

		container.highcharts({
			chart: {
				type: type
			},
			credits: {
				enabled: false
			},
			title: {
				text: data.title
			},
			subtitle: {
				text: data.subtitle
			},
			xAxis: {
				categories: data.categories,
				crosshair: true
			},
			yAxis: {
				min: 0,
				title: {
					text: data.yTitle
				}
			},
			tooltip: {
				headerFormat: '<b>{point.y}</b>',
				pointFormat: '',
				shared: true,
				useHTML: true
			},
			plotOptions: {
				column: {
					pointPadding: 0.2,
					borderWidth: 0
				}
			},
			series: [{
				name: 'Р—Р°РєР°Р·С‹',
				data: data.values
			}]
		});

		$('.highcharts-legend-item').remove();
	}

	if ($('#visitors').length > 0) {
		chart('views', 'spline');
		chart('visitors', 'column');
		chart('newVisitors', 'column');
		chart('denial', 'area');
		chart('depth', 'area');
		chart('visitTime', 'area');
		pieChart('browsers');
		pieChart('os');
	}

	if ($('#orders').length > 0) {
		chartOrders('orders', 'spline');
	}

	$('.close-alert').on('click', function () {
		$(this).parents('.alert').fadeOut(200);
	});

	var th = $('th.kv-align-center.kv-align-middle.skip-export.kv-merged-header');
	if (th.length > 0) {
		th.attr('rowspan', 1);
	}

	$('#collapse-btn').on('click', function () {
		var block = $('.navigation');
		if (block.hasClass('in')) {
			block.removeClass('in');
		} else {
			block.addClass('in');
		}
	});

	$('#print-grid').on('click', function () {
		window.print();
	});

	var sortable = $('.sortable tbody');
	if (sortable.length > 0) {
		var updateUrl = $('input[name="sortable-update-url"]').val();
		sortable.sortable({
			containment: "parent",
			cursor: "move"
		});
		sortable.on('sortupdate', function( event, ui ) {
			var list = [];
			var i = 0;
			$.each(sortable.find('tr'), function (key, item) {
				item = $(item);
				list.push({
					id: item.attr('data-key'),
					sort: i++
				});
			});
			$.ajax({
				type: 'POST',
				url: updateUrl,
				data: {list: JSON.stringify(list)},
				dataType: 'json'
			});
		});
	}

	var sortableCategory = $('.category-index .sortable');
	if (sortableCategory.length > 0) {
		var updateUrlCategory = $('input[name="sortable-update-category-url"]').val();
		sortableCategory.sortable({
			containment: "parent",
			cursor: "move"
		});
		sortableCategory.on('sortupdate', function( event, ui ) {
			var list = [];
			var i = 0;
			$.each($('.category-list .context-menu-one'), function (key, item) {
				item = $(item);
				list.push({
					id: item.attr('data-id'),
					sort: i++
				});
			});
			$.ajax({
				type: 'POST',
				url: updateUrlCategory,
				data: {list: JSON.stringify(list)},
				dataType: 'json'
			});
		});
	}

	$('.j-permission-update').on('click', function () {
		var item = $(this);
		$.ajax({
			type: 'POST',
			url: item.parents('table').data('url'),
			data: {
				role: item.parent().attr('data-role'),
				permission: item.parent().attr('data-permission'),
				status: item.attr('class') == 'j-permission-update glyphicon glyphicon-unchecked' ? 1 : 0
			},
			dataType: 'json',
			success: function () {
				if (item.attr('class') == 'j-permission-update glyphicon glyphicon-unchecked') {
					item.attr('class', 'j-permission-update glyphicon glyphicon-check');
				} else {
					item.attr('class', 'j-permission-update glyphicon glyphicon-unchecked');
				}
			}
		});
	});

	$('.j-permission-remove').on('click', function () {
		var item = $(this);
		$.ajax({
			type: 'POST',
			url: item.parents('th').data('url'),
			dataType: 'json',
			success: function () {
				location.reload();
			}
		});
	});
});