/* xlsx.full.min.js & xlsx-populate.js */
function getXlsData(obj) {
  const o = $(obj);
  o.parent().find(".xlsFileUpload").click();
}

async function xlsx2Data(binaryString, flag = 0, isObj = 0) {
	
  if (flag<0 || flag>3) flag = 0;
  const xlsDataFunc = ["sheet_to_csv", "sheet_to_json", "sheet_to_txt", "sheet_to_row_object_array"];
  const [dataList, oData] = [[], {}];
  const wb = await XLSX.read(binaryString, { type: 'binary' });
  for (const sheetname of wb.SheetNames) {
	const data = XLSX.utils[xlsDataFunc[flag]](wb.Sheets[sheetname]);
    if (data.length > 0) {
      dataList.push(data);
      oData[sheetname] = data;
    }; 
  }
  return isObj === 1? oData: dataList;
}

async function parseXlsProdid(obj) {
  if ((obj||"") === "") return;
  const [f, aXls] = [$(obj), []];
  let aXlsInfo = [];
  try {
    const xlsInfo = await xlsx2Data(await file2Base64(f[0].files[0], 1));
    aXlsInfo = Object.assign([], xlsInfo[0].split("\n"));
  } catch(e) {
    console.log(e)
  }
  for (const pid of aXlsInfo) {
    if (pid.trim().length === 0 || isNaN(pid)) continue;
    aXls[aXls.length] = pid.trim();
  }
  if (aXls.length > 0) {
    const msg = `共匯入 ${aXls.length} 筆有效商品`;
    $("div.OFFER_CONTENTS_2 [name=prodId]").val(aXls.join(","));
    $("div.OFFER_CONTENTS_2 div.ufResult span").text(`(${msg})`);
    $("div.OFFER_CONTENTS_2 div.ufResult").show();
    alertMsg("匯入商品 PID", msg);
  } else 
    alertMsg("匯入商品 PID", "該 EXCEL 檔, 不存在有效商品, 請檢查 A欄 資料");
  
  f.val("");
}