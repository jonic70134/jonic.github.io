const _URL = new URL(location)

window.setMsgLogs = window.setMsgLogs||function(k, v) {
  if ((k||"") === "") return;
  window.ecmMsgLogs = window.ecmMsgLogs||{};
  window.ecmMsgLogs[k] = window.ecmMsgLogs[k]||{};
  let len = ('000' + Object.keys(window.ecmMsgLogs[k]).length).substr(-3);
  v = ((v instanceof Array) || !(v instanceof Object))? {data: v}: v;
  v._UXT = (new Date()).valueOf();
  window.ecmMsgLogs[k][len] = v;
}

window.alertMsg = window.alertMsg||function(title, msg, sec) {
  if ($('._ALERT_MSG_').length === 0) return;
  msg = msg||"";
  title = title||"-";
  if (msg === "") return;
  $('._ALERT_MSG_').css("right", 0);
  $('._ALERT_MSG_ ._TITLE_').text(title);
  $('._ALERT_MSG_ ._MSG_').text(msg);
  sec = +(`${sec}`||1500);
  if (isNaN(sec)) sec = 1500;  
  if (sec > 0) {
    setTimeout(function(){
	  $('._ALERT_MSG_').css("right", -390);
    }, sec);
  }
  
}

//AJAX 相關.START
function _postData() {
  this.requestObj = new Object();
  this.paramObj = new Object();  
  this.getData = function() {
    this.requestObj.PARAM = this.paramObj;
    return JSON.stringify(this.requestObj.PARAM);
  }
}

function _loading (swFlag) {
  if (!$("._MM_.loading").length) {
	$("body").append("<div class='_MM_ loading' style='display:none;'><div class='_MM_ mask'></div></div>");
	$("._MM_.loading").css({
	  width: $(document).width() + "px",
	  height: "100%",
	  position: "absolute",
	  left: "0px",
	  top: "0px",
	  background: "rgba(0,0,0, 0.5)",
	  "z-index": 9999
	});
	$("._MM_.mask").css({
	  border: "16px solid #f3f3f3",
	  "border-radius": "50%",
	  "border-top": "16px solid #3498db",
	  width: "120px",
	  height: "120px",
	  "-webkit-animation": "spin 2s linear infinite",
	  animation: "spin 2s linear infinite",
	  position: "fixed",
	  left: "calc(50% - 60px)",
	  top: "33%"
	});
	$(document.body).append(`<style>
	  @keyframes spin {
		0% { transform: rotate(0deg); }
		100% { transform: rotate(360deg); }
	  }
	</style>`)
  }
  swFlag = +(swFlag||"");
  if (swFlag === 1) {
	$("._MM_.loading").css("display", "block");
	$("._MM_.loading").width($(document).width());
  } else $("._MM_.loading").fadeOut();
}

function _CopyObject(obj, srcObject) {
  for (let i in srcObject) obj[i] = srcObject[i];
  return obj;
}

function execHttpPost() {

  this.data = new _postData();
  this.setParam = function() {
    return this.data.paramObj;
  }
  this.isLoading = false;
  this.isAsync = true;
  this.post = function(successFunction, errorFunction, isLoading, finalFunction, initFunction) {
	const [self]  = [this];
	finalFunction = finalFunction||"";
    return $.ajax({
      type:	"POST",
      url: 	self.url.includes("http")? self.url: `${_URL.origin}/${_URL.pathname.split("/")[1]}${self.url}`,
      data:	this.data.getData(),
      async: this.isAsync,
      contentType:	'application/json',
      dataType:		'json',
      beforeSend: function() {
        if(isLoading) _loading(1);
        if ((initFunction||"") !== "") typeof initFunction();
      }, 
      success: function(data) {
    	if(successFunction) typeof successFunction(data);
      }, 
      error: function(data) {
        if (errorFunction) typeof errorFunction(data);
	  }, 
	  complete: function(){
        if(isLoading) _loading(0); 
        if (finalFunction) typeof finalFunction();
      }
    });      
  }
  
  this.awaitPost = function () {
	return this.post(
	  function(resp){},
	  function() {},
	  true,
	  function() {}
	);
  }
}


function qkHttpPost(objData, ajaxUrl, funcs) {
  const httpPost = new execHttpPost();
  let dataContext = httpPost.setParam();
  if (ajaxUrl.includes("http") || ajaxUrl.indexOf("/") === 0) httpPost.url = ajaxUrl;
  else httpPost.url = `/${ajaxUrl}`;
  _CopyObject(dataContext, objData);
  //const dataContext = JSON.parse(JSON.stringify(objData));
  funcs = funcs||{};
  funcs.objname = funcs.objname||'xTemp';
  window.setMsgLogs(funcs.objname, {init: dataContext, url: ajaxUrl});
  success = function (resp) {
	window.setMsgLogs(funcs.objname, {resp: resp});
	if (typeof funcs.success === "function") { funcs.success(resp); }
  };
  err = function (err) {
	window.setMsgLogs(funcs.objname, {Exception: err});
	if (typeof funcs.err === "function") { funcs.err(arguments); }
  };
  funcs.finish = funcs.finish|| function () { };
  
  funcs.init = funcs.init|| function () { 
	  
  };
  if (funcs.loading !== false) funcs.loading = funcs.loading||true;
  return httpPost.post(success, err, funcs.loading, funcs.finish, funcs.init);
}