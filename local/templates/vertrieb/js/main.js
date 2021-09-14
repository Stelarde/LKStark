"use strict";

function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

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

          if (!vDrowdown.classList.contains('filter')) {
            document.addEventListener('click', function (e) {
              if (!e.target.closest('.v-dropdown')) {
                vDrowdown.classList.remove('is-open'); // headerInfoMenu.style.height = 0;
              }
            });
          }
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

  var batteryEffectGraphic = document.querySelector('.battery-effectiveness'); // const batteryEffectData = {
  //     percent: 27,
  //     value: {
  //         given: 12.3,
  //         received: 32.3
  //     }
  // }

  if (batteryEffectGraphic) {
    var batteryEffectPercentBlock = batteryEffectGraphic.querySelector('.battery-effectiveness-graphic-persent'),
        batteryEffectPercent = batteryEffectPercentBlock.querySelector('.battery-effectiveness-graphic-persent span'),
        batteryEffectArrow = batteryEffectGraphic.querySelector('.battery-effectiveness-graphic-arrow svg'),
        batteryEffectGivenValue = batteryEffectGraphic.querySelector('.battery-effectiveness-value-given span'),
        batteryEffectReceivedValue = batteryEffectGraphic.querySelector('.battery-effectiveness-value-received span');
    setTimeout(function () {
      // batteryEffectPercent.innerHTML = batteryEffectData.percent;
      // batteryEffectGivenValue.innerHTML = batteryEffectData.value.given;
      // batteryEffectReceivedValue.innerHTML = batteryEffectData.value.received;
      batteryEffectArrow.style.transform = "rotate(".concat(180 * batteryEffectPercent.innerHTML / 100, "deg)");

      if (batteryEffectPercent.innerHTML > 74) {
        batteryEffectPercentBlock.classList.add('green-zone');
      } else if (batteryEffectPercent.innerHTML > 49 && batteryEffectPercent.innerHTML < 75) {
        batteryEffectPercentBlock.classList.add('yellow-zone');
      } else if (batteryEffectPercent.innerHTML > 25 && batteryEffectPercent.innerHTML < 50) {
        batteryEffectPercentBlock.classList.add('orange-zone');
      } else if (batteryEffectPercent.innerHTML < 26) {
        batteryEffectPercentBlock.classList.add('red-zone');
      }
    }, 500);
  }

  $("#datepicker-battery-filter").datepicker({
    range: 'period',
    changeMonth: false,
    changeYear: false
  });
  $("#datepicker-event-log-filter").datepicker({
    range: 'period',
    changeMonth: false,
    changeYear: false
  }); // изменение кастомного добавления файлов
  // $(".attath-file-uploud-default").change(function() {
  //     var f_name = [];
  //     for (var i = 0; i < $(this).get(0).files.length; ++i) {
  //         f_name.push(" " + $(this).get(0).files[i].name);
  //     }
  //     $("#f_name").val(f_name.join(", "));
  // });

  var graphicsAll = document.querySelectorAll('.graphics-item'); // static data

  var backgroundColors = ['#FD8204', '#43B02A', '#4F4F4F'];
  var objGraphicsData = {
    0: {
      activity: {
        percent: [64, 35, 10],
        time: {
          charge: '12 ч 45 мин',
          discharge: '23 ч 25 мин',
          downtime: '15 ч 30 мин'
        }
      }
    },
    1: {
      activity: {
        percent: [34, 22, 21],
        time: {
          charge: '12 ч 40 мин',
          discharge: '23 ч 25 мин',
          downtime: '15 ч 30 мин'
        }
      }
    },
    2: {
      activity: {
        percent: [34, 22, 21],
        time: {
          charge: '12 ч 40 мин',
          discharge: '23 ч 25 мин',
          downtime: '15 ч 30 мин'
        }
      }
    },
    3: {
      activity: {
        percent: [34, 22, 21],
        time: {
          charge: '12 ч 40 мин',
          discharge: '23 ч 25 мин',
          downtime: '15 ч 30 мин'
        }
      }
    }
  };
  var options = {
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
  };

  if (graphicsAll.length) {
    for (var i = 0; i <= graphicsAll.length; i++) {
      var graphicCurrent = graphicsAll[i];

      if (graphicCurrent) {
        var batteryPieObjectWork = document.querySelector('.object-graphic-data .data-work span'),
            batteryPieObjectCharge = document.querySelector('.object-graphic-data .data-charge span'),
            batteryPieObjectstand = document.querySelector('.object-graphic-data .data-stand span');
        batteryPieObjectWork.innerHTML = objGraphicsData[i].activity.time.charge;
        batteryPieObjectCharge.innerHTML = objGraphicsData[i].activity.time.discharge;
        batteryPieObjectstand.innerHTML = objGraphicsData[i].activity.time.downtime;
        var ctx = graphicCurrent === null || graphicCurrent === void 0 ? void 0 : graphicCurrent.getContext('2d');
        var myChart = new Chart(ctx, {
          type: 'pie',
          plugins: [ChartDataLabels],
          data: {
            datasets: [{
              data: _toConsumableArray(objGraphicsData[i].activity.percent),
              backgroundColor: [].concat(backgroundColors)
            }]
          },
          options: _objectSpread({}, options)
        });
      }
    }
  } // battery page 


  var batteryBar = document.querySelector('.battery-bar'),
      batteryPie = document.querySelector('.battery-pie'),
      batteryCycles = document.querySelector('.battery-cycles');
  var todayBtn = document.getElementById('tab-btn-today'),
      weekBtn = document.getElementById('tab-btn-week'),
      monthBtn = document.getElementById('tab-btn-month'),
      quarterBtn = document.getElementById('tab-btn-quarter'),
      yearBtn = document.getElementById('tab-btn-year'),
      allBtn = document.getElementById('tab-btn-all');

  if (batteryPie) {
    var batteryPieWork = document.querySelector('.battery-graphics-activity-data .data-work span'),
        batteryPieCharge = document.querySelector('.battery-graphics-activity-data .data-charge span'),
        batteryPiestand = document.querySelector('.battery-graphics-activity-data .data-stand span');
    var batteryPieArray = [batteryPieWork, batteryPieCharge, batteryPiestand];
    batteryPieWork.innerHTML = chargeGraphicData.today.activity.time.charge;
    batteryPieCharge.innerHTML = chargeGraphicData.today.activity.time.discharge;
    batteryPiestand.innerHTML = chargeGraphicData.today.activity.time.downtime;
    var ctxBatteryPie = batteryPie === null || batteryPie === void 0 ? void 0 : batteryPie.getContext('2d');
    var batteryPieChart = new Chart(ctxBatteryPie, {
      type: 'pie',
      plugins: [ChartDataLabels],
      data: {
        labels: false,
        datasets: [{
          data: _toConsumableArray(chargeGraphicData.today.activity.percent),
          backgroundColor: [].concat(backgroundColors)
        }]
      },
      options: _objectSpread({}, options)
    });
  }

  if (batteryBar) {
    var dataToday = batteryBarData(chargeGraphicData.today),
        dataWeek = batteryBarData(chargeGraphicData.week),
        dataMonth = batteryBarData(chargeGraphicData.month),
        dataQuarter = batteryBarData(chargeGraphicData.quarter),
        dataYear = batteryBarData(chargeGraphicData.year),
        dataAll = batteryBarData(chargeGraphicData.all);
    var ctxBatteryBar = batteryBar === null || batteryBar === void 0 ? void 0 : batteryBar.getContext('2d');
    var batteryBarChart = new Chart(ctxBatteryBar, {
      type: 'bar',
      data: _objectSpread({}, dataToday),
      options: {
        responsive: true,
        plugins: {
          legend: false,
          title: {
            display: true
          }
        },
        // radius: 0,
        scales: {
          x: {
            ticks: {
              font: {
                size: 12,
                family: 'Roboto',
                weight: 500
              },
              color: '#828282'
            }
          },
          y: {
            min: 0,
            max: 80,
            ticks: {
              font: {
                size: 12,
                family: 'Roboto',
                weight: 500
              },
              color: '#E0E0E0'
            }
          }
        }
      }
    });
  }

  if (batteryCycles) {
    var batteryCyclesAll = batteryCycles.querySelector('.object-cycles-value span'),
        batteryCyclesDay = batteryCycles.querySelector('.object-cycles-text-day span'),
        batteryCyclesPartly = batteryCycles.querySelector('.object-cycles-text-partly span');
    var batteryCyclesArray = [batteryCyclesAll, batteryCyclesDay, batteryCyclesPartly];
    batteryCyclesAll.innerHTML = chargeGraphicData.today.cycles.all;
    batteryCyclesDay.innerHTML = chargeGraphicData.today.cycles.day;
    batteryCyclesPartly.innerHTML = chargeGraphicData.today.cycles.partly;
  }

  if (todayBtn) {
    eventClickTabs(todayBtn, batteryBarChart, _objectSpread({}, dataToday), batteryPieChart, chargeGraphicData.today, batteryPieArray, batteryCyclesArray);
  }

  if (weekBtn) {
    eventClickTabs(weekBtn, batteryBarChart, _objectSpread({}, dataWeek), batteryPieChart, chargeGraphicData.week, batteryPieArray, batteryCyclesArray);
  }

  if (monthBtn) {
    eventClickTabs(monthBtn, batteryBarChart, _objectSpread({}, dataMonth), batteryPieChart, chargeGraphicData.month, batteryPieArray, batteryCyclesArray);
  }

  if (quarterBtn) {
    eventClickTabs(quarterBtn, batteryBarChart, _objectSpread({}, dataQuarter), batteryPieChart, chargeGraphicData.quarter, batteryPieArray, batteryCyclesArray);
  }

  if (yearBtn) {
    eventClickTabs(yearBtn, batteryBarChart, _objectSpread({}, dataYear), batteryPieChart, chargeGraphicData.year, batteryPieArray, batteryCyclesArray);
  }

  if (allBtn) {
    eventClickTabs(allBtn, batteryBarChart, _objectSpread({}, dataAll), batteryPieChart, chargeGraphicData.all, batteryPieArray, batteryCyclesArray);
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
  var objectMapBlock = document.querySelector('.object-map'),
      batteryMapBlock = document.querySelector('.battery-map');
  if (objectMapBlock) objectMapBlock.style.height = 272 + 'rem'; // всем костылям костыль..

  if (batteryMapBlock) batteryMapBlock.style.height = 138 + 'rem'; // еще один костылек..

  if (windowWidth > 1279) {
    document.children[0].style.fontSize = windowWidth / 1920 + 'px';
  } else {
    document.children[0].style.fontSize = '0.666667px';
  }
}

function addFile(addFileBlocks) {
  if (addFileBlocks.length) {
    addFileBlocks.forEach(function (addFileBlockCurrent) {
      var addFileInput = addFileBlockCurrent.querySelector('input'),
          addFileDiv = addFileBlockCurrent.querySelector('div'),
          deleteFileBtn = addFileBlockCurrent.querySelector('.delete-img');
      addFileInput.addEventListener('change', function () {
        if (this.files[0]) {
          var fr = new FileReader();
          fr.addEventListener('load', function () {
            addFileDiv.style.backgroundImage = 'url(' + fr.result + ')';
          }, false);
          fr.readAsDataURL(this.files[0]);

          if (this.files.length) {
            deleteFileBtn.style.display = 'block';
          }
        }
      });
      deleteFileBtn.addEventListener('click', function () {
        addFileInput.value = '';
        addFileDiv.style.backgroundImage = '';
        deleteFileBtn.style.display = 'none';
      });
    });
  }
}

function batteryBarData(elem) {
  var elemObj = {
    labels: elem.labels,
    datasets: [{
      data: elem.charge,
      backgroundColor: 'rgba(253, 130, 4, 0.6)',
      order: 0
    }, {
      data: elem.discharge,
      backgroundColor: 'rgba(67, 176, 42, 0.6)',
      order: 1
    }, {
      data: elem.area,
      backgroundColor: 'rgba(79, 79, 79, 0.3)',
      borderColor: 'rgba(79, 79, 79, 0.3)',
      type: 'line',
      fill: true,
      order: 2
    }]
  };
  return elemObj;
}

function batteryBarFunc(thisEl, batteryBarChart, ctx) {
  var tabLinks = document.querySelectorAll('.battery-graphics-tabs a');

  if (tabLinks.length) {
    tabLinks.forEach(function (tabLink) {
      tabLink.classList.remove('active');
    });
  }

  thisEl.classList.add('active');
  batteryBarChart.data = ctx;
  batteryBarChart.update();
}

function batteryPieFunc(batteryPieChart, todayObj, batteryPieArray) {
  batteryPieArray[0].innerHTML = todayObj.activity.time.charge;
  batteryPieArray[1].innerHTML = todayObj.activity.time.discharge;
  batteryPieArray[2].innerHTML = todayObj.activity.time.downtime;
  batteryPieChart.data.datasets[0].data = todayObj.activity.percent;
  batteryPieChart.update();
}

function batteryCyclesFunc(batteryCyclesArray, cyclesObj) {
  batteryCyclesArray[0].innerHTML = cyclesObj.all;
  batteryCyclesArray[1].innerHTML = cyclesObj.day;
  batteryCyclesArray[2].innerHTML = cyclesObj.partly;
}

function eventClickTabs(todayBtn, batteryBarChart, data, batteryPieChart, chargeGraphicData, batteryPieArray, batteryCyclesArray, chargeGraphicDatacycles) {
  todayBtn.addEventListener('click', function () {
    batteryBarFunc(this, batteryBarChart, data);
    batteryPieFunc(batteryPieChart, chargeGraphicData, batteryPieArray);
    batteryCyclesFunc(batteryCyclesArray, chargeGraphicData.cycles);
  });
}