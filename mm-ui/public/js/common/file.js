const UFILE = { oFile: {}, base64: "" };
async function getUploadFileInfo(selector, flag) {
  let fileData = $(`${selector}`)[0].files[0];
  flag = Number(flag||"");
  UFILE.oFile = fileData;
  return new Promise((resolve, reject) => {
    let reader = new FileReader();
    reader.onload = (event) => {
      fileData.base64 = event.target.result;
      resolve(event.target.result);
    };
    reader.onerror = (error) => {
      reject(error);
    };
    if (flag === 0) {
      reader.readAsText(fileData, "big5");	
    } else if (flag === 1) {
      reader.readAsDataURL(fileData);	
    } else if (flag === 2) {
      reader.readAsBinaryString(fileData);	
    } else if (flag === 3) {
      reader.readAsDataURL(fileData);	
    } else {
      reader.readAsDataURL(fileData);	
    }
    
  });
}


function file2Base64(file, flag = 0, charSet = "big5") {
  return new Promise((resolve, reject) => {
	try{
      const reader = new FileReader();
      if (flag === 1) reader.readAsBinaryString(file);
	  else if (flag === 2) reader.readAsText(file, charSet);  
	  else reader.readAsDataURL(file);  
      reader.onloadend = function(e) {
		if ($("img[id=imgTmp]").length === 0) {
		  $(document.body).append(`<img src='' id='imgTmp' style="display:none;">`);
		  $("img[id=imgTmp]").on("load", function() {
            Img_Width = $("img[id=imgTmp]").width();
            Img_Height = $("img[id=imgTmp]").height();
          });
		}
		if (e.target.result.includes("data:image")) {
		  Img_Width = Img_Height = 0;
		  $("img[id=imgTmp]").attr("src", e.target.result);
		}
		resolve(e.target.result);	
	  }
	  
      reader.onerror = function() {
	    reject(new Error('read file failed'));
	  }
    } catch (e) {}
  });
}

function bolbDownload(blob, filename = "") {

  const url = window.URL.createObjectURL(blob);
  const a = document.createElement("a");
  document.body.appendChild(a);
  a.href = url;
  a.download = filename||`${new Date().valueOf()}`;
  a.click();
  window.URL.revokeObjectURL(url);
}

function _OpenFileBox(selector, opt = {}) {
  selector = selector||"";
  if (selector === "") return;
  const isVideo = +(opt?.isVideo||"");
  
  //$("._MNDC_").html($("._MNDC_BASIC_").html());
  $("._MNDC_ ._TITLE_ span").html(opt?.title||"-");
  $("._MNDC_ ._BODY_").html($(selector).html());
  $('._MNDC_').show();
  if (isVideo === 1) {
	UFILE.valid = opt?.valid||"";
	//if (($("._MNDC_ .vdoU2B").attr("data-value")||"") === "") {
	  $("._MNDC_ .vdoU2B").attr("data-value", 1);
	  $("._MNDC_ .vdoU2B").on("blur", function(){
		if ((this.value||"") === "") {
		  UFILE.u2bCode = UFILE.base64 = ``;
		  return;
		}
	    const errMsg = runFunc(UFILE.valid, this.value);
	    if (errMsg.length > 0) {
		  alertMsg("上傳影音連結", errMsg.join("<br>"));
	      $("._MNDC_ .vdoU2B").val("");	
	    } else {
		  let [aU2B, u2bCode] = [null, ""];
		  aU2B = this.value.split(/[=|?|\/]/);		
		  console.log(aU2B, this.value)
		  for (let i = 0; i < aU2B.length; i++) {
		    if (['v', 'youtu.be', 'embed'].includes(aU2B[i])) { 
			  UFILE.u2bCode = aU2B[i + 1]||"";
			  break; 
		    }
		  }
		  UFILE.base64 = `https://www.youtube.com/embed/${UFILE.u2bCode}`;
		  if (UFILE.u2bCode !== "")  $("._MNDC_ ._BODY_ iframe").attr("src", UFILE.base64).show();
		  else console.log(aU2B, this.value)
	    }
	  });
	//}
  } else {
	//if (($('._MNDC_ input[type=file]').attr("data-value")||"") === "") {
	  $('._MNDC_ input[type=file]').attr("data-value", 1);
	  $('._MNDC_ input[type=file]').on("change", async function() {
	    getImage($("._MNDC_ input[type=file]"));
      });
    //}
    UFILE.valid = opt?.valid||"";
  }
  runFunc(opt?.init);
    
  $('._MNDC_ button.sure').off("click");
  $('._MNDC_ button.sure').on("click", function(e){	
	e.stopPropagation();	  
	runFunc(opt?.submit);
	$('._MNDC_').hide();
  });
    
  $('._MNDC_ button.close, ._MNDC_ button.cancel').off("click");
  $('._MNDC_ button.close, ._MNDC_ button.cancel').on("click", function(e){	
	e.stopPropagation();
	runFunc(opt?.close||opt?.cancel);
	$('._MNDC_').hide();
  });
  
}

function getU2BCode(u2bLink) {
  const aU2B = (u2bLink||"").split(/[=|?|\/]/);
  let u2bCode = "";
  console.log(aU2B, u2bLink)
  for (let i = 0; i < aU2B.length; i++) {
    if (['v', 'youtu.be', 'embed'].includes(aU2B[i])) { 
	  u2bCode = aU2B[i + 1]||"";
	  break; 
    }
  }
  return u2bCode;
}

function getU2BImage(u2bCode, flag) {
  flag = +(flag||"");
  return `http://img.youtube.com/vi/${u2bCode}/1.jpg`
}

function runFunc(func, req) {
  if ((func||"") !== "") {
	console.log(func)
    if (typeof func === "string") return window[func](req||"");
    else if (typeof func === "function") return func(req||"");
  }
}

function fileDragenter(e) {
  e.stopPropagation(); //終止事件傳導
  e.preventDefault();  //終止預設行為
}

function fileDragover(e) {
  e.stopPropagation(); //終止事件傳導
  e.preventDefault();  //終止預設行為
}

function fileDrop(e) {	
  e.stopPropagation(); //終止事件傳導
  e.preventDefault();  //終止預設行為
  getImage(e.dataTransfer.files, 1);
}


async function getImage(obj, flag, validFunc) {
  flag = +(flag||"");
  let [oFile] = [null];
  if (flag === 0) oFile = obj[0].files[0];
  else if (flag === 1) oFile = obj[0];
   
  const errMsg = runFunc(UFILE.valid, oFile);
  console.log(errMsg, oFile);
  if (errMsg.length > 0) {
    alertMsg("圖檔有誤", errMsg.join(""));
    return;
  }
  UFILE.base64 = await file2Base64(oFile)||"";
  if (UFILE.base64 !== "") {
	$("._MNDC_ img").attr("src", UFILE.base64).show();
	$("._MNDC_ span").hide();
  }
  $("._MNDC_ input[type=file]").val("");
}