/* Chinese translation for the jQuery Timepicker Addon */
/* Written by Alang.lin */
(function($) {
	$.datepicker.regional['zh-TW'] = {
		dayNames:["星期日","星期一","星期二","星期三","星期四","星期五","星期六"],
		dayNamesMin:["日","一","二","三","四","五","六"],
		monthNames:["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月"],
		monthNamesShort:["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月"],
		prevText:"上月",
		nextText:"次月",
		weekHeader:"週",
	};
	$.timepicker.regional['zh-TW'] = {
		timeOnlyTitle: '選擇時分秒',
		timeText: '時間',
		hourText: '時',
		minuteText: '分',
		secondText: '秒',
		millisecText: '毫秒',
		microsecText: '微秒',
		timezoneText: '時區',
		currentText: '現在時間',
		closeText: '確定',
		timeFormat: 'HH:mm',
		amNames: ['上午', 'AM', 'A'],
		pmNames: ['下午', 'PM', 'P'],
		isRTL: false
	};
	$.datepicker.setDefaults($.datepicker.regional["zh-TW"]);
	$.timepicker.setDefaults($.timepicker.regional['zh-TW']);
})(jQuery);
