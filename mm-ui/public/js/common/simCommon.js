


// AJAX 相關.END

// 日期相關.START
// 日期字串
Date.prototype.getDateStr = function(format) {
  let date = new Date(this.valueOf());
  let mm = date.getMonth() + 1;
  return `${date.getFullYear()}-${('00' + mm).substr(-2)}-${('00' + date.getDate()).substr(-2)}`.replace(/-/g, format||"/");
}

