Date.prototype.getDateStr = function(format) {
  let date = new Date(this.valueOf());
  let mm = date.getMonth() + 1;
  return `${date.getFullYear()}-${('00' + mm).substr(-2)}-${('00' + date.getDate()).substr(-2)}`.replace(/-/g, format||"/");
}

function getROCDate (strDate) {
  arrDate = (strDate||"").split(/\D/);
  return `民國${+(arrDate[0]||"") - 1911}年${+(arrDate[1]||"")}月${+(arrDate[2]||"")}日`;
}

function jsDate(date, opts) {
  date = date||"";
  let oDate = {};
  try{
	if (date === "") {
	  oDate = new Date();
	} else if (['string', 'number'].includes(typeof date)) {
	  oDate = new Date(date);
	} else if (typeof date === 'object') {
	  oDate = date;
	} else {
	  oDate = new Date();
	}
	if (typeof oDate.valueOf() !== 'number') oDate = new Date();
  } catch (e) {
	oDate = new Date();
  }
  opts = opts||{};
  let dStr = oDate.getDateStr();
  const tStr = `${(""+oDate.getHours()).padStart("2", 0)}:${(""+oDate.getMinutes()).padStart("2", 0)}:${(""+oDate.getSeconds()).padStart("2", 0)}`
  if ((opts.delim||"") !== "") dStr = dStr.replace(/\D/g, opts.delim[0]);
  else opts.delim = dStr.replace(/\d/g, '')[0];
  switch(+(opts.mode||"")) {
  case 1: return `${dStr} ${tStr}`;
  case 2: return tStr;
  case 3: return `${dStr.substr(-5)} ${tStr.substr(0, 5)}`;
  case 4:
	const arr = dStr.split(/\D/);
  	return `${arr[2]}${opts.delim}${arr[1]}${opts.delim}${arr[0].substr(-2)} ${tStr}`;
  case 0:
  default:
	return dStr;
  }
}