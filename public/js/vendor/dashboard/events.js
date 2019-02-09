function resize() {
  let res = document.getElementById('result');
  let w = window.outerWidth;
  let h = window.outerHeight;
  let txt = 'width=' + w + ', height=' + h;

  res.innerHTML = txt;
}

let totalScreenTimes = 0;
function screenTimes() {
  let times = document.getElementById('times');
  a = totalScreenTimes += 1;
  times.innerHTML = a;
}

function myFunction() {
  document.getElementById('demoResponse').innerHTML = 'The image could not be loaded.';
}

function imgError(img) {
  if (navigator.cookieEnabled == true) {
    img.innerHTML = '<img src="https://kodoloji.com/wp-content/uploads/1-qdFdhbR00beEaIKDI_WDCw.gif" alt="...">'
  } else {
    //
  }
}

document.getElementById('demoImg').error = myFunction();

document.onready = function () {
  console.log('document.onready');

  // var img = document.getElementById('imgError');
  // img.onload = imgError(img);

  let arr = ["javascript", "flatmap()"];

  console.log(arr.flatMap(x => x.split("")));
  console.log(arr.flatMap(x => x.split(" ")));
};

window.onload = function () {
  console.log('window.load');
};

window.onunload = function () {
  console.log('window.unload');
};

window.onbeforeunload = function () {
  console.log('window.onbeforeunload');
};

window.onhashchange = function () {
  console.log('window.onhashchange');

  location.hash = 'example_hash';
  var url = location.hash;

  console.log(url);
};

window.onafterprint = function () {
  console.log('window.onafterprint');
};

window.onbeforeprint = function () {
  console.log('window.onbeforeprint');
};

window.onerror = function () {
  console.log('window.onerror');
};
window.onmessage = function () {
  console.log('window.onmessage');
};
window.onoffline = function () {
  console.log('window.onoffline');
};
window.ononline = function () {
  console.log('window.ononline');
};
window.onpagehide = function () {
  console.log('window.onpagehide');
};
window.onpageshow = function () {
  console.log('window.onpageshow');
};
window.onpopstate = function () {
  console.log('window.onpopstate');
};
window.onresize = function () {
  console.log('window.onresize');
  resize();
  screenTimes();
};
window.onstorage = function () {
  console.log('window.onstorage');
};


document.getElementById('calculateOnclick').onclick = function () {
  var txt = document.getElementById('calculateText'),
      mes = document.getElementById('calculateMes'),
      x = txt.value.length;

  txt.oninput = function () {
    console.log('txt.oninput');
  };

  try {
    mes.innerHTML = '';
    if (txt.value == '') {
      throw 'Do not leave empty.';
    } else if (!isNaN(txt.value)) {
      throw 'Do not use numbers.';
    }
  } catch (e) {
    mes.innerHTML = e;
    x = 0;
  }

  document.getElementById('calculateResult').innerHTML = x;
};
