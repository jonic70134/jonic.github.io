
$(document).ready(function () {
  // menu 開合
  $("#side_menu li").bind({
    mouseenter: function () {
      $("#side_menu").stop(true, false).animate({ width: 200, }, 200);
      $(this).find(".side_sub_menu").show();
    }, mouseleave: function () {
      $(this).find(".side_sub_menu").hide();
    }
  });

  $("#side_menu").mouseleave(function () {
    $("#side_menu").stop(true, false).animate({ width: 45, }, 200);
    $(".side_sub_menu").hide();
  });

  $("#side_menu .dis-dropdown").unbind("click");

  // // 日期選擇

  // // 獲取今天的日期
  // const today = new Date();

  // // 設定最大日期為今天
  // const maxDate = new Date(today.getFullYear(), today.getMonth(), today.getDate() + 1);

  // // 設定最小日期為今天減三個月
  // const minDate = new Date(today.getFullYear(), today.getMonth() - 3, today.getDate());

  // // 設定結束日期的最大值為明天,最小值為今天減三個月
  // const endDateMax = new Date(today.getFullYear(), today.getMonth(), today.getDate() + 1);
  // const endDateMin = new Date(today.getFullYear(), today.getMonth() - 3, today.getDate());

  // // 獲取日期輸入框元素
  // const startDateInput = document.getElementById('startDate');
  // const endDateInput = document.getElementById('endDate');

  // // 設定日期輸入框的最小和最大值
  // startDateInput.min = minDate.toISOString().split('T')[0];
  // startDateInput.max = maxDate.toISOString().split('T')[0]; // 開始日期最大值為明天
  // endDateInput.min = endDateMin.toISOString().split('T')[0]; // 結束日期最小值為今天減三個月
  // endDateInput.max = endDateMax.toISOString().split('T')[0]; // 結束日期最大值為明天

  // // 在選取日期時更新另一個輸入框的可選範圍
  // startDateInput.addEventListener('change', updateEndDateRange);
  // endDateInput.addEventListener('change', updateStartDateRange);

  // function updateEndDateRange() {
  //   const startDate = new Date(startDateInput.value);
  //   endDateInput.min = startDate.toISOString().split('T')[0]; // 結束日期最小值為開始日期
  //   endDateInput.max = endDateMax.toISOString().split('T')[0]; // 結束日期最大值為明天
  // }

  // function updateStartDateRange() {
  //   const endDate = new Date(endDateInput.value);
  //   startDateInput.max = endDate.toISOString().split('T')[0]; // 開始日期最大值為結束日期
  //   startDateInput.min = minDate.toISOString().split('T')[0]; // 開始日期最小值為今天減三個月
  // }

  


  // 全選
  const $chkAll = $(".chkall");
  const $chkitems = $(".chk_item");

  $chkAll.on("click", function () {
    $chkitems.prop("checked", $(this).prop("checked"));
  });

  $chkitems.on("click", function () {
    $chkAll.prop("checked", $chkitems.length === $chkitems.filter(":checked").length);
  });



});