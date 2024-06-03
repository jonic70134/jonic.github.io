const SUPINFO = {
  o: null,  // 由那個 HTML-OBJ 發動
  ss: [],	// 已尋的字串
  rst: {},	// 已尋的結果
  apiUri: {
	getInfo: '/rest/mm/mgmt-supplier-supinfo' // 向 MIDDLE 要供應商資訊
  }
};

// 產生的 HTML-CHKBOX TAG
function mkSupplierChkbox(
  id,	// SUP-ID 
  name, // SUP-NAME
  isSingle	// 預設, 複選
) {
  const type = +(isSingle||"") === 1? "radio": "checkbox";
  $("._MNDC_ .SUP_SELECT_LIST").append(`<input type=${type} name=sup_select id='SUP_${id}' checked value='${id}'">
    <label for="SUP_${id}">${name}</label>`);
}

// 確定選取的供應商
function _GetSupInfoSure(obj) {
  const o = $(obj); 
  o.next().show();
  const d = getObjByMKVS(SUPINFO.rst, {NAME: o.val()})[0]||"";  
  if (d === "") return;
  if ($(`#SUP_${d.ID}`).length === 1) $(`#SUP_${d.ID}`).prop("checked", true);
  else mkSupplierChkbox(d.ID, d.NAME);
}

// 取得供應商資訊
async function _GetSupInfo(obj) {
  const o = $(obj);
  const v = o.val()||"-";
  //console.log(obj, v);
  if (v !== "-" && !SUPINFO.ss.includes(v)) {
	//const resp = await qkHttpPost({}, `${SUPINFO.apiUri.getInfo}/${v}`, {});
	const resp = await qkHttpPost({
      url: `/mgmt/supplier/supinfo/${v}`
    }, `/ajax/mm/getDataByMidUri`, {loading: false});
    console.log(resp);
    
	SUPINFO.ss[SUPINFO.ss.length] = v;
	for (const d of resp?.resultData?.SupInfo) SUPINFO.rst[d.ID] = d;
  }
  const dList = [];
  for (const k in SUPINFO.rst) {
	if (SUPINFO.rst[k]?.NAME.includes(v)) dList[dList.length] = `<option value='${SUPINFO.rst[k]?.NAME}'>${SUPINFO.rst[k]?.NAME}</option>`;
  }
  if (dList.length > 0) $(`#_SUP_LIST_`).html(dList.join(""));
}



function getSupinfo(o, func) {
	SUPINFO.o = o;
	$("._MNDC_").html($("._MNDC_BASIC_").html());
	$("._MNDC_ ._TITLE_ span").html("選取供應商");
	$("._MNDC_ ._BODY_").html($("._SUPINFO_").html());
	$('._MNDC_').show();
	let vSrc = ($(SUPINFO.o).prev().val() || "").split(",");
	if (vSrc[0] === "") vSrc = [];
	for (const supId of vSrc) {
		const d = getObjByMKVS(SUPINFO.rst, { ID: +supId })[0] || "";
		if (d === "") continue;
		mkSupplierChkbox(d.ID, d.NAME);
	}

	$('._MNDC_ button.sure').on("click", function() {
		const aSup = [];
		$("._MNDC_ [name=sup_select]:checked").each(function() {
			const v = $(this).val() || "";
			if (v === "" || aSup.includes(v)) return true;
			aSup[aSup.length] = v;
		});
		$(SUPINFO.o).prev().val(aSup.join(","));
		runFunc(func, aSup.join(","));
		$("._MNDC_").hide();
	});
}

function getSupinfo2Obj(o, selector) {
	SUPINFO.o = o;
	$("._MNDC_").html($("._MNDC_BASIC_").html());
	$("._MNDC_ ._TITLE_ span").html("選取供應商");
	$("._MNDC_ ._BODY_").html($("._SUPINFO_").html());
	$('._MNDC_').show();
	let vSrc = ($(SUPINFO.o).prev().val() || "").split(",");
	if (vSrc[0] === "") vSrc = [];
	for (const supId of vSrc) {
	  const d = getObjByMKVS(SUPINFO.rst, { ID: +supId })[0] || "";
	  if (d === "") continue;
	  mkSupplierChkbox(d.ID, d.NAME);
	}

	$('._MNDC_ button.sure').on("click", function() {
	  const aSup = [];
	  $("._MNDC_ [name=sup_select]:checked").each(function() {
		const v = $(this).val() || "";
		if (v === "" || aSup.includes(v)) return true;
		aSup[aSup.length] = v;
	  });
	  const strSup = aSup.join(",");
	  if ((selector||"") !== "" && $(selector).length > 0) {
		$(selector).val(strSup).text(strSup);
	  } else $(SUPINFO.o).prev().val(strSup).text(strSup);
	  $("._MNDC_").hide();
	});
}