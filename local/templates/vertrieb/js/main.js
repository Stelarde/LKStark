"use strict";

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && Symbol.iterator in Object(iter)) return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

document.addEventListener('DOMContentLoaded', function () {
  var body = document.querySelector('body'); // gumb 

  var gumb = document.querySelector('.js-gumb');

  if (gumb) {
    gumb.addEventListener('click', function () {
      if (body.classList.contains('sidebar-compact')) {
        body.classList.remove('sidebar-compact');
      } else {
        body.classList.add('sidebar-compact');
      }
    });
  } // v-dropdown


  var vDrowdownAll = document.querySelectorAll('.v-dropdown');

  if (vDrowdownAll.length) {
    vDrowdownAll.forEach(function (vDrowdown) {
      if (vDrowdown) {
        var dropdownBtn = vDrowdown.querySelector('.v-dropdown-btn'),
            dropdownOptions = vDrowdown.querySelector('.v-dropdown-options');

        if (dropdownBtn) {
          dropdownBtn.addEventListener('click', function () {
            if (vDrowdown.classList.contains('is-open')) {
              vDrowdown.classList.remove('is-open'); // headerInfoMenu.style.height = 0;
            } else {
              vDrowdown.classList.add('is-open'); // headerInfoMenu.style.height = headerInfoMenu.scrollHeight + "px";
            }
          });
          document.addEventListener('click', function (e) {
            if (!e.target.closest('.v-dropdown')) {
              vDrowdown.classList.remove('is-open'); // headerInfoMenu.style.height = 0;
            }
          });
        }
      }
    });
  }

  window.onresize = function () {
    return handleResize();
  };

  a(changeAdaptive); // v-select 

  var vSelectAll = document.querySelectorAll('.v-select');

  if (vSelectAll.length) {
    vSelectAll.forEach(function (vSelect) {
      if (vSelect) {
        var vSelectValue = vSelect.querySelector('.v-select-value'),
            vSelectOptions = vSelect.querySelector('.v-select-options'),
            vSelectOptionsValue = vSelectOptions.querySelectorAll('a'),
            vSelectValueText = vSelectValue.innerText;
        vSelectValue.addEventListener('click', function () {
          // vSelectAll.forEach(vSelectAllCurrent => {
          //     vSelectAllCurrent.classList.remove('is-open');
          // })
          if (vSelect.classList.contains('is-open')) {
            vSelect.classList.remove('is-open');
          } else {
            vSelect.classList.add('is-open');
          }
        });
        vSelectOptionsValue.forEach(function (vSelectOptionsValueCurrent) {
          vSelectOptionsValueCurrent.addEventListener('click', function (e) {
            var vSelectOptionsValueText = e.target.innerText;
            var vSelectPromise = new Promise(function (resolve, reject) {
              vSelectValue.innerHTML = vSelectOptionsValueText;

              if (vSelectValue.innerHTML !== vSelectValueText) {
                vSelect.classList.add('fill');
              } else {
                vSelect.classList.remove('fill');
              }

              resolve(vSelect.classList.remove('is-open'));
            });
          });
        });
        document.addEventListener('click', function (e) {
          if (!e.target.closest('.v-select')) {
            vSelect.classList.remove('is-open');
          }
        });
      }
    });
  } // resource-scale 


  var resourceParentBlock = document.querySelectorAll('.object-resource-wrap');

  if (resourceParentBlock.length) {
    resourceParentBlock.forEach(function (resourceParentCurrent) {
      var resourceBlock = resourceParentCurrent.querySelector('.object-resource'),
          resourceBar = resourceBlock.querySelector('span'),
          resourceValuePercent = resourceParentCurrent.querySelector('.object-resource-value'),
          resourceValue = resourceValuePercent.innerText.substring(0, resourceValuePercent.innerText.length - 1);

      if (resourceValue > 59) {
        resourceBlock.classList.add('green');
      } else if (resourceValue < 60 && resourceValue > 29) {
        resourceBlock.classList.add('yellow');
      } else if (resourceValue < 30) {
        resourceBlock.classList.add('red');
      }

      setTimeout(function () {
        resourceBar.style.height = resourceValuePercent.innerText;
      }, 500);
    });
  } // password-icon 


  var inputPassWrap = document.querySelectorAll('.input.password');

  if (inputPassWrap.length) {
    inputPassWrap.forEach(function (inputPassWrapCurrent) {
      var inputPassIconBlock = inputPassWrapCurrent.querySelector('.input-icon'),
          inputPass = inputPassWrapCurrent.querySelector('input');
      inputPassIconBlock.addEventListener('click', function () {
        if (inputPass.getAttribute('type') == 'password') {
          inputPassIconBlock.classList.add('visible');
          inputPass.setAttribute('type', 'text');
        } else {
          inputPassIconBlock.classList.remove('visible');
          inputPass.setAttribute('type', 'password');
        }
      });
    });
  } // notifications 


  var notificationsBlock = document.querySelector('.header-notifications');

  if (notificationsBlock) {
    var notificationsBtn = notificationsBlock.querySelector('.header-notifications-btn'),
        notificationOverlay = notificationsBlock.querySelector('.overlay');
    notificationsBtn.addEventListener('click', function () {
      if (!notificationsBlock.classList.contains('show-notifications')) {
        notificationsBlock.classList.add('show-notifications');
      } else {
        notificationsBlock.classList.remove('show-notifications');
      }
    });
    notificationOverlay.addEventListener('click', function (e) {
      notificationsBlock.classList.remove('show-notifications');
    });
    document.addEventListener('click', function (e) {
      if (!e.target.closest('.header-notifications')) {
        notificationsBlock.classList.remove('show-notifications');
      }
    });
  }

  var graphicsAll = document.querySelectorAll('.graphics-item'); // static data

  var dataValues = {
    0: [67, 16, 9],
    1: [16, 9, 67],
    2: [60, 16, 16],
    3: [20, 54, 16],
    4: [16, 13, 63]
  },
      backgroundColors = ['#FD8204', '#43B02A', '#4F4F4F'],
      labelsValue = ["Работа", "Заряд", "Простой"];

  if (graphicsAll.length) {
    for (var i = 0; i <= graphicsAll.length; i++) {
      var graphicCurrent = graphicsAll[i];

      if (graphicCurrent) {
        var ctx = graphicCurrent === null || graphicCurrent === void 0 ? void 0 : graphicCurrent.getContext('2d');
        var myChart = new Chart(ctx, {
          type: 'pie',
          plugins: [ChartDataLabels],
          data: {
            labels: [].concat(labelsValue),
            datasets: [{
              data: _toConsumableArray(dataValues[i]),
              backgroundColor: [].concat(backgroundColors)
            }]
          },
          options: {
            maintainAspectRatio: false,
            responsive: true,
            events: [],
            plugins: {
              legend: false,
              datalabels: {
                formatter: function formatter(value, ctx) {
                  return value + "%";
                },
                color: '#fff',
                font: {
                  size: 12,
                  family: 'Roboto'
                }
              }
            }
          }
        });
      }
    }
  }

  $('.popup-link').fancybox({
    touch: false,
    autoFocus: false
  });
}); // window.ObjBreak = {
//     breakpoints: null,
//     currentSize: 'lgValue',
//     currentFontSize: 10,
//     updateRequired: true,
//     calculateCurrentFontSize: function() {
//         const innerWidth = window.innerWidth > 1440 ? 1440 : window.innerWidth;
//         if(innerWidth > 1024 && innerWidth < 1441) {
//             this.currentFontSize = innerWidth / 1440;
//             document.children[0].style.fontSize = `${this.currentFontSize}px`;            
//         } else {
//             document.children[0].style.fontSize = 0.7111111 + 'px'
//         }
//     },
//     handleAnimationFrame: function() {
//         if (this.updateRequired) {
//             this.updateRequired = false;
//             this.calculateCurrentFontSize();
//         }
//         window.requestAnimationFrame(() => this.handleAnimationFrame());
//     },
//     handleResize: function() {
//         this.updateRequired = true
//     }   
// }
// window.ObjBreak.handleAnimationFrame();

function changeAdaptive() {
  var promiseAutoWidth = new Promise(function (resolve, reject) {
    handleResize();
    resolve();
  });
  return promiseAutoWidth;
}

function a(changeAdaptive) {
  changeAdaptive().then(function () {
    setTimeout(function () {
      document.body.style.opacity = 1;
    }, 300);
  });
}

function handleResize() {
  var windowWidth = window.innerWidth;
  var mapBlock = document.querySelector('.object-map');
  if (mapBlock) mapBlock.style.height = 272 + 'rem'; // всем костылям костыль..

  if (windowWidth > 1279) {
    document.children[0].style.fontSize = windowWidth / 1920 + 'px';
  } else {
    document.children[0].style.fontSize = '0.666667px';
  }
}