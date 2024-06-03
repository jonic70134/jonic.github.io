const _LC_STORAGE_ = 1;
function _LC_Storage(type, k, v) {
  if ((k||"") === "" || (type||"") === "") return -1;
  try {
	switch(type.toLowerCase()) {
	case "rm": 
	  localStorage.removeItem(k); break;
	case "rmall":
	  localStorage.clear(); break;
	case "set":
	  localStorage.setItem(k, v||""); break;
	case "get":
	  flag = -1;
	  v = localStorage.getItem(k); break;
	}
  } catch (e) {
	v = null;
	if (flag >= 0) flag = 1;
  }
  return flag === -1? v: flag;
}

function getLcStorage(k) {
  return _LC_Storage("get", k);
}

function setLcStorage(k, v) {
  return _LC_Storage("set", k, v);
}

function delLcStorage(k) {
  return _LC_Storage("rm", k);
}

function delAllLcStorage() {
  return _LC_Storage("rmall");
}