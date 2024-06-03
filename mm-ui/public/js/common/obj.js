const _CurrencyStyle_ = new Intl.NumberFormat("en", {
  style: "currency",
  currency: "USD",
  maximumFractionDigits: 0
});

function getMaxOrMin(limit, dir, ...num) {
  limit = +(limit||""); // !== 0, 下限/上限
  dir = +(dir||""); // === 0: 取小, // >0: 取大
  let rv = +(isNaN(num[0])? "":(num[0]||""));  
  for (const n of num) {
	if (`${n}` === "" || isNaN(n)) continue;
	if (dir === 0 && (rv > +(n||"") && (limit === 0 || (+(n||"") >= limit)))) rv = +n;
	else if (dir === 1 && (rv < +(n||"") && (limit === 0 || (+(n||"") <= limit)))) rv = +n;
  }
  return rv;
}

function byteLength(str) {
  if (typeof str === 'undefined') str = "";
  else str = `${str}`||"";
  return str.replace(/[\u4E00-\u9FFF]/g,"OOO").length;
}

function getNewJson(obj) {
  return JSON.parse(JSON.stringify(obj));
}

function str2jsn(str) {
  let tmp  = null;
  try {
	tmp = JSON.parse(str);
  } catch (e) {
	tmp = null; 
  }
  return tmp;
}

function _CP2board(textToCopy) {
  let textArea = document.createElement("textarea");
  textArea.style.position = "fixed";
  textArea.style.left = "-999999px";
  textArea.style.top = "-999999px";
  textArea.value = textToCopy;    
  document.body.appendChild(textArea);
  
  textArea.focus();
  textArea.select();
  return new Promise((res, rej) => {
    document.execCommand('copy') ? res() : rej();
    textArea.remove();
  });
}

/**
 * :物件資料排序 (一維)
 * @param obj
 * @param sortKey: 排序依據
 * @param desc: 0/1 0: 升序 1: 降序
 * @returns 傳回排序後的資料內容
 */
function xSort(obj, sortKey, desc) {

    desc = desc||[];
	let _desc = Number(desc[0]||"");
	if ((sortKey||"") === "") {
		let newObj = {};
		let dx = _desc === 0? 1: -1;
		let arr = Object.keys(obj).sort(function(a, b) {
			return (a>b? 1: -1) * dx;
		});
		//arr.filter(key => return obj[key]);
		for (let k of arr) {
			newObj[k] = obj[k];
		}
		return newObj;
	}
	obj = obj||{};
	if (Object.keys(obj).length === 0) return;
	switch (typeof sortKey) {
	case "string": 
	  sortKey = [sortKey]; 
	  break;
	case "object": 
	  sortKey = Object.values(sortKey); 
	  break;
	}
	
	let o = JSON.parse(JSON.stringify(obj));
	tmp = Object.keys(o).sort(function (a, b) {
	  let rva = o[a]||{};
	  let rvb = o[b]||{};
	  let _desc = Number(desc[0]||"");
	  for (let i in sortKey) {
		let sk = sortKey[i];
		let _desc = Number(desc[i]||"");
		_desc = (_desc === 0)? 1: -1;
		let arrSKey = sk.split(".");
		let ta = rva;
		let tb = rvb;
		for (let j of arrSKey) {
			if (typeof ta === 'object' && typeof tb === 'object') {
				ta = ta[j]||"";
				tb = tb[j]||"";
			}
		}
		if (!isNaN(rva) && !isNaN(tb) && rva.length<10 && tb.length<10) {
		  ta = Number(ta);
		  tb = Number(tb);
	    }
	    if (ta>tb) {
		  return 1 * _desc;
	    } else if (ta<ta) {
		  return -1 * _desc;
	    }
	  }
	  return (a>b? 1: -1) * ((_desc === 0)? 1: -1);
	});
	let newObj = {};
	let uxt = (new Date()).valueOf();
	if (desc != undefined && desc === 1) {
		for (let i=tmp.length-1; i>=0; i--) {
		  let v = tmp[i];
		  if (sortKey === '') { o[v].id = v; }
		  newObj[uxt++] = o[v];
		}
	} else {
		for (let i of tmp) {
		  if (sortKey === '') { o[i].id = i; }
		  newObj[uxt++] = o[i];
		}
	}
	return newObj;
}

function xSortV2(obj, arrSKey, dir) {
  dir = +(dir||"");
  dir = (dir === 0)? 1: -1;
  const arr = Object.values(obj);
  const log = [];
  log.push(`${arrSKey.join(",")} dir = '${dir}'`);
  const newArr = Object.values(obj).sort(function(oa, ob){
    for (const d of arrSKey) {
	  if ((oa[d]||"") === "" && (oa[d]||"") === "") continue;
	  if ((oa[d]||"") === "") return dir;
	  if ((ob[d]||"") === "") return dir * -1;
	  let a = `${oa[d]}`;
	  let b = `${ob[d]}`;
	  if (isNaN(a) && !isNaN(Date.parse(a))) {
	    log.push(`DATE FORMAT:${d}`);
	    a = Date.parse(a);
		b = Date.parse(b);
	  } else if (!isNaN(a) || !isNaN(b)) {
		  a = +a;
		  b = +b;
	  }
	  if (a>b) return dir;
	  else if (a<b) return dir * -1;
	}
	return dir;
  });
  return newArr;
}

function xSortEnx(obj, arrSortKey, arrDesc, flagReturnType) {
	
  let o = getNewJson(obj);
  if (typeof arrSortKey === "string") arrSortKey = [arrSortKey];
  
	const [aFieldSpace, aFieldData] = [[], []];
	if ((flagReturnType & 2) > 0) {
	  for (const k in obj) {
		if ((obj[k][arrSortKey[0]]||"") === "" && typeof obj[k][arrSortKey[0]] !== 'number') aFieldSpace[aFieldSpace.length] = obj[k];
		else aFieldData[aFieldData.length] = obj[k];
	  }
	  o = aFieldData; 
	}
	tmp = Object.keys(o).sort(function (a, b) {
	  for (let i in arrSortKey) {
		const k = arrSortKey[i];
		let [k1, rva, rvb] = ["", `${o[a][k]||""}`, `${o[b][k]||""}`];
		if (rva === rvb) continue;
		let desc = +(arrDesc[i]||0); 
		if (isNaN(desc)) { desc = 0; }
		desc = desc>0? -1: 1; // 降 VS 升
		if (rva>rvb) return desc;
		else if (rva<rvb) return (0 - desc);
	  }
	  return 1;
	});
	o.concat(aFieldSpace);
	flagReturnType = flagReturnType||0;
	if ((flagReturnType & 1)>0) {
	  let nArray = [];
	  for (let i of tmp) nArray[nArray.length] = o[i];
	  return nArray;
	}
	
	let [newObj, uxt] = [{}, (new Date()).valueOf()];
	for (let i of tmp) newObj[uxt++] = o[i];
	return newObj;
}

/* 自物件搜尋資料 */
function getObjByMKVS(obj, okv, opt) {
  obj = obj||"";
  okv = okv||"";  
  if (obj === "" || okv === "") return [];
  opt = opt||{};
  opt.type = opt.type||"array";

  const oRst = {};
  if (typeof obj === 'string') {
  	if (opt.type === 'object') {
  	  oRst[obj] = obj;
  	  return oRst;
  	} else return [obj];
  }
  const [rst, rstKey] = [[], []];
  if (typeof okv === 'string') okv = {okv};
  const cnt = Object.keys(okv).length;

  for (const ok in obj) {
  	const ov = obj[ok];
  	let rCnt = 0;
  	for (const kk in okv) {
  	  const kv = okv[kk];
  	  if ((ov[kk]||"") !== "" || (typeof ov[kk] === "number")) {
  		if (ov[kk] === kv || (Array.isArray(kv)  && kv.includes(ov[kk]))) rCnt++;
  	  } else  break;
  	}
  	if (rCnt === cnt) {
  	  rst[rst.length] = ov;
  	  rstKey[rstKey.length] = ok;
  	}
  }
  if ((opt.type||"") !== "" && opt.type === 'object') {
  	for (const k in rstKey) oRst[rstKey[k]] = rst[k];
  	return oRst;
  } else return rst;
}

function getObjByKeyValue(obj, key, val) {
  let rv = {};
  for (let idx in obj) {
    if (obj[idx][key] === undefined) break;
	if (obj[idx][key] === val) {
	  rv = obj[idx];
	  break;
	}
  }
  return rv;
}

function getObjByKeyValues(obj, key, val) {
  let rv = [];
  for (let idx in obj) {
    if (obj[idx][key] === undefined) break;
	if (obj[idx][key] === val) {
	  rv.push(obj[idx]);
	}
  }
  return rv;
}

// VALID.00
function vaildNumWithPoint(obj, maxValue) {
  if (obj.value.length === 0) return;
  maxValue = +(maxValue||"");
  let flagAdjust = 0;
  if (isNaN(obj.value))flagAdjust = 1; //obj.value = obj.value.substring(0, obj.value.length-1);
  else if (obj.value.length>1 && obj.value[0] === "0" && obj.value[1] !== ".") flagAdjust = 1;
   
  if (1 === flagAdjust) obj.value = obj.value.substring(0, obj.value.length-1);
  if (maxValue > 0 && +obj.value.split(".")[0] >= maxValue) obj.value = maxValue;
}

function vaildByByte(obj, maxValue) {
  
  if (obj.value.length === 0) return;
  maxValue = +(maxValue||"");
  if (maxValue === 0) return true;
  const len = byteLength(obj.value);
  if (len > maxValue) {
	let nLen = 0, w = "", aStr = obj.value.split('');
    for (const s of aStr) {
      nLen += byteLength(s);
      if (nLen <= maxValue) w+= s;
      else break;
    }
    obj.value = w;
  } 
}

function vaildCmnString(obj) {
  
  if (obj.value.length === 0) return;
  obj.value = obj.value.replace(/(\t|\?|\、|\<|\>|\s|\(|\))/g, '');
}