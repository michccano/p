!function(t){var e={};function n(r){if(e[r])return e[r].exports;var i=e[r]={i:r,l:!1,exports:{}};return t[r].call(i.exports,i,i.exports,n),i.l=!0,i.exports}n.m=t,n.c=e,n.d=function(t,e,r){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:r})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var i in t)n.d(r,i,function(e){return t[e]}.bind(null,i));return r},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=2)}([function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var r=function(){function t(t){void 0===t&&(t={}),this.events=t}return t.prototype.on=function(t,e){var n=this.events[t];n?n.push(e):this.events[t]=[e]},t.prototype.emit=function(t,e){var n=this.events[t];n&&n.forEach((function(t){return t(e)}))},t}();e.default=r},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});e.constants={DIRECTION_VERTICAL:"vertical",DIRECTION_HORIZONTAL:"horizontal",TYPE_INTERVAL:"interval",TYPE_SINGLE:"single"}},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),n(3),n(16)},function(t,e,n){"use strict";(function(t){var r=this&&this.__importDefault||function(t){return t&&t.__esModule?t:{default:t}};Object.defineProperty(e,"__esModule",{value:!0});var i=r(n(5));!function(t){var e={init:function(e,n){if(void 0===e&&(e={}),void 0===n&&(n={}),!t(this).data("rangeSlider")){var r=t.extend({direction:"horizontal",skin:"green",bar:!0,tip:!0,type:"single",scale:!1,settings:!1},e),a=t.extend({min:10,max:50,values:[20,40],step:2},n);return this.each((function(){t(this).data().rangeSlider=new i.default(this,r,a),t(this).data().startingVisualModel=r,t(this).data().startingModel=a}))}},updateValues:function(e){var n=t(this).data("rangeSlider");n.model.setState(e),n.reCreateApplication(n.visualModel.state)},updateVisual:function(e){var n=t(this).data("rangeSlider");n.reCreateApplication(Object.assign(n.visualModel.state,e))},reset:function(){var e=t(this).data("rangeSlider");e.model.setState(t(this).data().startingModel),e.reCreateApplication(t(this).data().startingVisualModel)},destroy:function(){t(this).data("rangeSlider").app.removeHTML(),t(this).off("onChange")},onChange:function(e){t(this).on("onChange",e)}};t.fn.rangeSlider=function(t,n){if(e[t]){var r=e[t];return r.apply(this,Array.prototype.slice.call(arguments,1))}"object"==typeof t&&e.init.apply(this,[t,n])}}(t)}).call(this,n(4))},function(t,e){t.exports=$},function(t,e,n){"use strict";var r=this&&this.__assign||function(){return(r=Object.assign||function(t){for(var e,n=1,r=arguments.length;n<r;n++)for(var i in e=arguments[n])Object.prototype.hasOwnProperty.call(e,i)&&(t[i]=e[i]);return t}).apply(this,arguments)},i=this&&this.__importDefault||function(t){return t&&t.__esModule?t:{default:t}};Object.defineProperty(e,"__esModule",{value:!0});var a=i(n(6)),s=i(n(7)),o=n(8),l=function(){function t(t,e,n){this.anchor=t,this.settingsVisualModel=e,this.settingsModel=n,this.initMVC(e,n)}return t.prototype.initMVC=function(t,e){this.model=new a.default,this.visualModel=new s.default,this.visualModel.setState(t),this.model.setState(e),this.app=(new o.ApplicationConfigurator).main(this.visualModel.state,this.anchor),this.app.createUI(this.visualModel.state),this.bindEvents(),this.app.init(this.visualModel.state)},t.prototype.bindEvents=function(){var t=this;this.app.on("finishInit",(function(e){return t.arrangeHandlers(e)})),this.model.on("pxValueDone",(function(e){return t.app.paint(e)})),this.app.on("onUserMove",(function(e){return t.model.setState(e)})),this.app.UIs.settings&&this.app.UIs.settings.on("newSettings",(function(e){t.model.setState(e),t.arrangeHandlers(e),e.step&&t.reCreateApplication(t.visualModel.state)})),this.model.on("pxValueDone",(function(){return t.app.UIs.settings&&t.app.UIs.settings.paint(r(r({},t.model.state),t.visualModel.state))})),this.app.UIs.settings&&this.app.UIs.settings.on("reCreateApp",(function(e){return t.reCreateApplication(e)})),this.model.on("pxValueDone",(function(){return t.anchor.dispatchEvent(new CustomEvent("onChange",{detail:t.model.state}))})),this.app.UIs.scale&&this.app.UIs.scale.on("newValueFromScale",(function(e){t.model.setState(e),t.arrangeHandlers(e)}))},t.prototype.arrangeHandlers=function(t){for(var e=t.edge,n=t.handlers,r=0;r<n.length;r+=1)this.model.setState({edge:e||this.model.state.edge,tempTarget:n[r],tempValue:this.model.state.values[r]})},t.prototype.reCreateApplication=function(t){var e=Object.assign(this.settingsVisualModel,t),n=this.saveOldModel(this.settingsModel,this.model.state);this.app.removeHTML(),this.initMVC(e,n)},t.prototype.saveOldModel=function(t,e){for(var n in t)t[n]=e[n];return t},t}();e.default=l},function(t,e,n){"use strict";var r,i=this&&this.__extends||(r=function(t,e){return(r=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var n in e)e.hasOwnProperty(n)&&(t[n]=e[n])})(t,e)},function(t,e){function n(){this.constructor=t}r(t,e),t.prototype=null===e?Object.create(e):(n.prototype=e.prototype,new n)}),a=this&&this.__importDefault||function(t){return t&&t.__esModule?t:{default:t}};Object.defineProperty(e,"__esModule",{value:!0});var s=function(t){function e(e){void 0===e&&(e={});var n=t.call(this)||this;return n.state={},n.mapOfHandlers=new Map,n.setState(e),n}return i(e,t),e.prototype.setState=function(t){void 0===t&&(t={}),Object.assign(this.state,t),this.correctMainValues(t),this.initialCounting(t),this.dynamicCounting(t)},e.prototype.correctMainValues=function(t){(void 0!==t.min||void 0!==t.max||void 0!==t.step||t.values)&&(this.correctMinMaxRange(),this.correctStep(),this.correctValues())},e.prototype.initialCounting=function(t){t.tempTarget&&t.edge&&void 0!==t.tempValue&&(this.state.tempPxValue=this.countPxValueFromValue(t.tempValue),this.createArrayOfPxValues(this.state.values),this.mapOfHandlers.set(t.tempTarget,{tempValue:t.tempValue,tempPxValue:this.state.tempPxValue}))},e.prototype.dynamicCounting=function(t){t.tempTarget&&t.left&&(this.state.tempValue=this.countValueFromLeft(t.left),this.state.tempPxValue=this.countPxValueFromValue(this.state.tempValue),this.mapOfHandlers.set(t.tempTarget,{tempValue:this.state.tempValue,tempPxValue:this.state.tempPxValue}),this.updateArrayOfValues(),this.createArrayOfPxValues(this.state.values))},e.prototype.correctValues=function(){var t=this;this.state.values=this.state.values.map((function(e){return t.correctValueInTheRange(e)})).sort((function(t,e){return t-e}))},e.prototype.updateArrayOfValues=function(){this.state.values=[];for(var t=0,e=Array.from(this.mapOfHandlers.values());t<e.length;t++){var n=e[t];this.state.values.push(n.tempValue)}this.state.values.sort((function(t,e){return t-e})),1===this.mapOfHandlers.size&&null!=this.state.max&&(this.state.values[1]=this.state.max)},e.prototype.createArrayOfPxValues=function(t){var e=this,n=t.map((function(t){return e.countPxValueFromValue(t)})).sort((function(t,e){return t-e}));this.emit("pxValueDone",{tempPxValues:n,arrayOfProgression:this.countArrayOfProgression(),values:this.state.values,tempTarget:this.state.tempTarget,tempValue:this.state.tempValue,tempPxValue:this.state.tempPxValue,edge:this.state.edge,ratio:this.getRatio()})},e.prototype.countValueFromLeft=function(t){var e=this.state,n=Math.round(t/this.getRatio())*e.step+e.min;return this.correctValueInTheRange(n)},e.prototype.countPxValueFromValue=function(t){var e=this.state;return(t-e.min)*(this.getRatio()/e.step)},e.prototype.correctMinMaxRange=function(){if(void 0!==this.state.min&&void 0!==this.state.max&&this.state.min>this.state.max){var t=this.state.min;this.state.min=this.state.max,this.state.max=t}},e.prototype.correctStep=function(){void 0!==this.state.max&&void 0!==this.state.step&&(this.state.step>this.state.max&&(this.state.step=this.state.max),this.state.step<1&&(this.state.step=1))},e.prototype.correctValueInTheRange=function(t){return void 0===this.state.min||void 0===this.state.max?t:t<this.state.min?this.state.min:t>this.state.max?this.state.max:t},e.prototype.getRatio=function(){var t=this.state;return t.edge/(t.max-t.min)*t.step},e.prototype.countArrayOfProgression=function(){if(void 0!==this.state.min&&void 0!==this.state.max&&void 0!==this.state.step){this.correctMainValues(this.state);for(var t=[],e=this.state.min;e<=this.state.max;e+=this.state.step)t.push(e);return t}},e}(a(n(0)).default);e.default=s},function(t,e,n){"use strict";var r,i=this&&this.__extends||(r=function(t,e){return(r=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var n in e)e.hasOwnProperty(n)&&(t[n]=e[n])})(t,e)},function(t,e){function n(){this.constructor=t}r(t,e),t.prototype=null===e?Object.create(e):(n.prototype=e.prototype,new n)}),a=this&&this.__importDefault||function(t){return t&&t.__esModule?t:{default:t}};Object.defineProperty(e,"__esModule",{value:!0});var s=function(t){function e(){var e=t.call(this)||this;return e.state={},e}return i(e,t),e.prototype.setState=function(t){void 0===t&&(t={}),Object.assign(this.state,t),this.emit("newVisualModel",this.state)},e}(a(n(0)).default);e.default=s},function(t,e,n){"use strict";var r,i=this&&this.__extends||(r=function(t,e){return(r=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var n in e)e.hasOwnProperty(n)&&(t[n]=e[n])})(t,e)},function(t,e){function n(){this.constructor=t}r(t,e),t.prototype=null===e?Object.create(e):(n.prototype=e.prototype,new n)}),a=this&&this.__importDefault||function(t){return t&&t.__esModule?t:{default:t}};Object.defineProperty(e,"__esModule",{value:!0});var s=n(9),o=a(n(0)),l=n(1),u=function(t){function e(e,n){var r=t.call(this)||this;return r.factory=e,r.anchor=n,r.UIs={},r}return i(e,t),e.prototype.createUI=function(t){var e=t.bar,n=t.scale,r=t.settings;this.template=this.factory.createTemplate(),this.UIs.handler=this.factory.createHandler(),e&&(this.UIs.bar=this.factory.createBar()),n&&(this.UIs.scale=this.factory.createScale()),r&&(this.UIs.settings=this.factory.createSettings())},e.prototype.init=function(t){this.template.init(t,this.anchor);for(var e=0,n=Object.keys(this.UIs);e<n.length;e++){var r=n[e];this.template.append(this.UIs[r],this.anchor)}t.tip&&this.UIs.handler&&(this.UIs.tip=this.factory.createTip(),this.UIs.handler.append(this.UIs.tip));var i=this.getEdge(t),a=this.anchor.querySelectorAll(".slider__handler"),s=this.anchor.querySelector(".wrapper-slider");this.listenUserEvents(s,t),this.emit("finishInit",{handlers:a,edge:i})},e.prototype.paint=function(t){for(var e=0,n=Object.keys(this.UIs);e<n.length;e++){var r=n[e];"settings"!==r&&this.UIs[r].paint(t)}},e.prototype.removeHTML=function(){this.anchor.removeChild(this.UIs.settings.settingsHTML),this.anchor.removeChild(this.template.templateHTML)},e.prototype.getEdge=function(t){var e=this.anchor.querySelector(".wrapper-slider"),n=this.anchor.querySelectorAll(".slider__handler");return t.direction===l.constants.DIRECTION_VERTICAL?e.clientHeight-n[0].offsetHeight:e.offsetWidth-n[0].offsetWidth},e.prototype.listenUserEvents=function(t,e){var n=this;t.addEventListener("mousedown",(function(r){if(r.preventDefault(),"slider__handler"===r.target.className){var i=r.target,a=r.offsetX,s=i.offsetHeight-r.offsetY,o=function(n){var r;r=e.direction===l.constants.DIRECTION_VERTICAL?t.offsetHeight-n.clientY-s+t.getBoundingClientRect().top:n.clientX-a-t.offsetLeft;this.emit("onUserMove",{left:r,tempTarget:i})}.bind(n),u=function(){document.removeEventListener("mousemove",o),document.removeEventListener("mouseup",u)};document.addEventListener("mousemove",o),document.addEventListener("mouseup",u)}}))},e}(o.default);e.Application=u;var c=function(){function t(){}return t.prototype.main=function(t,e){var n,r=t.type,i=t.direction;if(r===l.constants.TYPE_SINGLE&&i===l.constants.DIRECTION_HORIZONTAL)n=new s.SingleHorizontalFactory;else if(r===l.constants.TYPE_SINGLE&&i===l.constants.DIRECTION_VERTICAL)n=new s.SingleVerticalFactory;else if(r===l.constants.TYPE_INTERVAL&&i===l.constants.DIRECTION_HORIZONTAL)n=new s.IntervalHorizontalFactory;else{if(r!==l.constants.TYPE_INTERVAL||i!==l.constants.DIRECTION_VERTICAL)throw new Error("Error! Unknown "+r+" or "+i);n=new s.IntervalVerticalFactory}return new u(n,e)},t}();e.ApplicationConfigurator=c},function(t,e,n){"use strict";var r,i=this&&this.__extends||(r=function(t,e){return(r=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var n in e)e.hasOwnProperty(n)&&(t[n]=e[n])})(t,e)},function(t,e){function n(){this.constructor=t}r(t,e),t.prototype=null===e?Object.create(e):(n.prototype=e.prototype,new n)}),a=this&&this.__importDefault||function(t){return t&&t.__esModule?t:{default:t}};Object.defineProperty(e,"__esModule",{value:!0});var s=a(n(10)),o=a(n(11)),l=n(12),u=n(13),c=n(14),p=n(15),f=function(){function t(){}return t.prototype.createTemplate=function(){return new s.default},t.prototype.createSettings=function(){return new o.default},t}(),d=function(t){function e(){return null!==t&&t.apply(this,arguments)||this}return i(e,t),e.prototype.createBar=function(){return new u.SingleHorizontalBar},e.prototype.createHandler=function(){return new c.SingleHorizontalHandler},e.prototype.createTip=function(){return new l.SingleTip},e.prototype.createScale=function(){return new p.HorizontalScale},e}(f);e.SingleHorizontalFactory=d;var h=function(t){function e(){return null!==t&&t.apply(this,arguments)||this}return i(e,t),e.prototype.createBar=function(){return new u.SingleVerticalBar},e.prototype.createHandler=function(){return new c.SingleVerticalHandler},e.prototype.createTip=function(){return new l.SingleTip},e.prototype.createScale=function(){return new p.VerticalScale},e}(f);e.SingleVerticalFactory=h;var v=function(t){function e(){return null!==t&&t.apply(this,arguments)||this}return i(e,t),e.prototype.createBar=function(){return new u.IntervalHorizontalBar},e.prototype.createHandler=function(){return new c.IntervalHorizontalHandler},e.prototype.createTip=function(){return new l.IntervalTip},e.prototype.createScale=function(){return new p.HorizontalScale},e}(f);e.IntervalHorizontalFactory=v;var _=function(t){function e(){return null!==t&&t.apply(this,arguments)||this}return i(e,t),e.prototype.createBar=function(){return new u.IntervalVerticalBar},e.prototype.createHandler=function(){return new c.IntervalVerticalHandler},e.prototype.createTip=function(){return new l.IntervalTip},e.prototype.createScale=function(){return new p.VerticalScale},e}(f);e.IntervalVerticalFactory=_},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var r=function(){function t(){}return t.prototype.init=function(t,e){var n=t.skin,r=t.direction,i='\n      <div class="wrapper-slider wrapper-slider--'+r+'">\n        <div class="slider slider--'+r+" slider--"+n+'"></div>\n      </div>\n    ';e.insertAdjacentHTML("afterbegin",i),this.templateHTML=e.querySelector(".wrapper-slider")},t.prototype.append=function(t,e){t.init(e)},t}();e.default=r},function(t,e,n){"use strict";var r,i=this&&this.__extends||(r=function(t,e){return(r=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var n in e)e.hasOwnProperty(n)&&(t[n]=e[n])})(t,e)},function(t,e){function n(){this.constructor=t}r(t,e),t.prototype=null===e?Object.create(e):(n.prototype=e.prototype,new n)}),a=this&&this.__importDefault||function(t){return t&&t.__esModule?t:{default:t}};Object.defineProperty(e,"__esModule",{value:!0});var s=a(n(0)),o=n(1),l=function(t){function e(){return null!==t&&t.apply(this,arguments)||this}return i(e,t),e.prototype.init=function(t){this.anchor=t;t.insertAdjacentHTML("beforeend",'<div class="settings">\n                                <label class="settings__label"><input id="min" class="settings__input" type="number">\n                                  <b class="settings__option">min</b>\n                                </label>\n                                <label class="settings__label"><input id="max" class="settings__input" type="number">\n                                  <b class="settings__option">max</b>\n                                </label>\n                                <label class="settings__label"><input id="step" class="settings__input" type="number">\n                                  <b class="settings__option">step</b>\n                                </label>\n                                <label class="settings__label"><input id="valueFrom" class="settings__input" type="number">\n                                  <b class="settings__option">valueFrom</b>\n                                </label>\n                                <label class="settings__label"><input id="valueTo" class="settings__input" type="number">\n                                  <b class="settings__option">valueTo</b>\n                                </label>\n                                <div class="settings__separation"></div>\n                                <label class="settings__label">\n                                  <select id="skin">\n                                    <option>green</option>\n                                    <option>red</option>\n                                  </select>\n                                  <b class="settings__option">skin</b>\n                                </label>\n                                <label class="settings__label">\n                                  <select id="direction">\n                                    <option>horizontal</option>\n                                    <option>vertical</option>\n                                  </select>\n                                  <b class="settings__option">direction</b>\n                                </label>\n                                <label class="settings__label">\n                                  <select id="type">\n                                    <option>single</option>\n                                    <option>interval</option>\n                                  </select>\n                                  <b class="settings__option">type</b>\n                                </label>\n                                <label class="settings__label">\n                                  <select id="scale">\n                                    <option>true</option>\n                                    <option>false</option>\n                                  </select>\n                                  <b class="settings__option">scale</b>\n                                </label>\n                                <label class="settings__label">\n                                  <select id="bar">\n                                    <option>true</option>\n                                    <option>false</option>\n                                  </select>\n                                  <b class="settings__option">bar</b>\n                                </label>\n                                <label class="settings__label">\n                                  <select id="tip">\n                                    <option>true</option>\n                                    <option>false</option>\n                                  </select>\n                                  <b class="settings__option">tip</b>\n                                </label>\n                              </div>\n                            '),this.settingsHTML=t.querySelector(".settings"),this.startListenEvents()},e.prototype.paint=function(t){this.state=t;var e=this.settingsHTML.querySelectorAll("input"),n=t.values,r=n[0],i=n[1];Object.assign(t,{valueFrom:r,valueTo:i});for(var a=0,s=e;a<s.length;a++){var l=s[a];l.value=t[l.id]}for(var u=0,c=this.settingsHTML.querySelectorAll("select");u<c.length;u++){var p=c[u];p.value=t[p.id]}if(t.type===o.constants.TYPE_SINGLE){var f=this.anchor.querySelector("#valueTo");if(f&&"true"===f.getAttribute("disabled"))return;f&&f.setAttribute("disabled","true")}},e.prototype.startListenEvents=function(){var t=this;this.settingsHTML.addEventListener("change",(function(e){var n,r,i=e.target;if("INPUT"===i.tagName){var a=t.anchor.querySelectorAll(".slider__handler");if("valueFrom"===i.id||"valueTo"===i.id){var s=t.settingsHTML.querySelector("#valueFrom").value,o=t.settingsHTML.querySelector("#valueTo").value;t.emit("newSettings",{handlers:a,edge:t.state.edge,values:[+s,+o]})}else t.emit("newSettings",((n={handlers:a,edge:t.state.edge})[i.id]=Number(i.value),n))}else if("SELECT"===i.tagName){var l=i,u=void 0;u="true"===l.value||"false"===l.value?JSON.parse(l.value):l.value,t.emit("reCreateApp",((r={})[i.id]=u,r))}}))},e}(s.default);e.default=l},function(t,e,n){"use strict";var r,i=this&&this.__extends||(r=function(t,e){return(r=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var n in e)e.hasOwnProperty(n)&&(t[n]=e[n])})(t,e)},function(t,e){function n(){this.constructor=t}r(t,e),t.prototype=null===e?Object.create(e):(n.prototype=e.prototype,new n)});Object.defineProperty(e,"__esModule",{value:!0});var a=function(){function t(){}return t.prototype.init=function(t){t.insertAdjacentHTML("beforeend",'<div class="slider__tip"><div class="slider__tongue"></div></div>')},t}();e.Tip=a;var s=function(t){function e(){return null!==t&&t.apply(this,arguments)||this}return i(e,t),e.prototype.paint=function(t){var e=t.tempTarget,n=t.tempValue;t.tempPxValues;void 0!==e&&e.querySelector(".slider__tip").setAttribute("data-value",""+n)},e}(a);e.SingleTip=s;var o=function(t){function e(){return null!==t&&t.apply(this,arguments)||this}return i(e,t),e.prototype.paint=function(t){var e=t.tempTarget,n=t.tempValue,r=t.tempPxValues,i=t.values;if(void 0!==e&&void 0!==r){var a=e.querySelector(".slider__tip");a.setAttribute("data-value",""+n);var s=e.parentElement&&e.parentElement.querySelectorAll(".slider__tip"),o=s&&Array.from(s).find((function(t){return t!==a}));if(o){var l=r[1]-r[0];l<=o.offsetWidth&&l<=a.offsetWidth?(a.classList.contains("slider__tip--extended")&&(a.classList.remove("slider__tip--extended"),o.classList.remove("slider__tip--extended"),o.style.visibility="visible"),a.style.visibility="hidden",o.classList.add("slider__tip--extended"),o.setAttribute("data-extendedValue",""+(i&&i.join(" - ")))):(a.style.visibility="visible",o.classList.remove("slider__tip--extended"))}}},e}(a);e.IntervalTip=o},function(t,e,n){"use strict";var r,i=this&&this.__extends||(r=function(t,e){return(r=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var n in e)e.hasOwnProperty(n)&&(t[n]=e[n])})(t,e)},function(t,e){function n(){this.constructor=t}r(t,e),t.prototype=null===e?Object.create(e):(n.prototype=e.prototype,new n)});Object.defineProperty(e,"__esModule",{value:!0});var a=function(){function t(){}return t.prototype.init=function(t){t.querySelector(".slider").insertAdjacentHTML("beforeend",'<div class="slider__bar"></div>')},t}();e.Bar=a;var s=function(t){function e(){return null!==t&&t.apply(this,arguments)||this}return i(e,t),e.prototype.paint=function(t){var e=t.tempPxValue,n=t.tempTarget;if(void 0!==n&&void 0!==e){var r=n.parentElement&&n.parentElement.querySelector(".slider__bar");r&&(r.style.width=e+10+"px")}},e}(a);e.SingleHorizontalBar=s;var o=function(t){function e(){return null!==t&&t.apply(this,arguments)||this}return i(e,t),e.prototype.paint=function(t){var e=t.tempPxValue,n=t.tempTarget;if(void 0!==n&&void 0!==e){var r=n.parentElement&&n.parentElement.querySelector(".slider__bar");r&&(r.style.height=e+10+"px")}},e}(a);e.SingleVerticalBar=o;var l=function(t){function e(){return null!==t&&t.apply(this,arguments)||this}return i(e,t),e.prototype.paint=function(t){var e=t.tempPxValues,n=t.tempTarget;if(void 0!==n&&void 0!==e){var r=n.parentElement&&n.parentElement.querySelector(".slider__bar");r&&(r.style.left=e[0]+"px"),r&&(r.style.width=e[1]-e[0]+10+"px")}},e}(a);e.IntervalHorizontalBar=l;var u=function(t){function e(){return null!==t&&t.apply(this,arguments)||this}return i(e,t),e.prototype.paint=function(t){var e=t.tempPxValues,n=t.tempTarget;if(void 0!==n&&void 0!==e){var r=n.parentElement&&n.parentElement.querySelector(".slider__bar");r&&(r.style.bottom=e[0]+"px"),r&&(r.style.height=e[1]-e[0]+10+"px")}},e}(a);e.IntervalVerticalBar=u},function(t,e,n){"use strict";var r,i=this&&this.__extends||(r=function(t,e){return(r=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var n in e)e.hasOwnProperty(n)&&(t[n]=e[n])})(t,e)},function(t,e){function n(){this.constructor=t}r(t,e),t.prototype=null===e?Object.create(e):(n.prototype=e.prototype,new n)});Object.defineProperty(e,"__esModule",{value:!0});var a=function(){function t(){}return t.prototype.init=function(t){this.anchor=t;t.querySelector(".slider").insertAdjacentHTML("beforeend",'<div class="slider__handler"></div>')},t.prototype.append=function(t){for(var e=this.anchor.querySelectorAll(".slider__handler"),n=0,r=Array.from(e);n<r.length;n++){var i=r[n];t.init(i)}},t}();e.Handler=a;var s=function(t){function e(){return null!==t&&t.apply(this,arguments)||this}return i(e,t),e.prototype.paint=function(t){var e=t.tempTarget,n=t.tempPxValue;e&&(e.style.left=n+"px")},e}(a);e.SingleHorizontalHandler=s;var o=function(t){function e(){return null!==t&&t.apply(this,arguments)||this}return i(e,t),e.prototype.paint=function(t){var e=t.tempTarget,n=t.tempPxValue;e&&(e.style.bottom=n+"px")},e}(a);e.SingleVerticalHandler=o;var l=function(t){function e(){return null!==t&&t.apply(this,arguments)||this}return i(e,t),e.prototype.init=function(t){this.anchor=t;var e=t.querySelector(".slider");e.insertAdjacentHTML("beforeend",'<div class="slider__handler"></div>'),e.insertAdjacentHTML("beforeend",'<div class="slider__handler"></div>')},e.prototype.paint=function(t){var e=t.tempTarget,n=t.tempPxValue;e&&(e.style.left=n+"px")},e}(a);e.IntervalHorizontalHandler=l;var u=function(t){function e(){return null!==t&&t.apply(this,arguments)||this}return i(e,t),e.prototype.init=function(t){this.anchor=t;var e=t.querySelector(".slider");e.insertAdjacentHTML("beforeend",'<div class="slider__handler"></div>'),e.insertAdjacentHTML("beforeend",'<div class="slider__handler"></div>')},e.prototype.paint=function(t){var e=t.tempTarget,n=t.tempPxValue;e&&(e.style.bottom=n+"px")},e}(a);e.IntervalVerticalHandler=u},function(t,e,n){"use strict";var r,i=this&&this.__extends||(r=function(t,e){return(r=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var n in e)e.hasOwnProperty(n)&&(t[n]=e[n])})(t,e)},function(t,e){function n(){this.constructor=t}r(t,e),t.prototype=null===e?Object.create(e):(n.prototype=e.prototype,new n)}),a=this&&this.__importDefault||function(t){return t&&t.__esModule?t:{default:t}};Object.defineProperty(e,"__esModule",{value:!0});var s=function(t){function e(){return null!==t&&t.apply(this,arguments)||this}return i(e,t),e.prototype.init=function(t){var e=this;this.anchor=t,this.slider=t.querySelector(".slider");this.slider.insertAdjacentHTML("afterbegin",'<div class="slider__scale scale"></div>'),this.scaleHTML=this.anchor.querySelector(".slider__scale"),this.scaleHTML.addEventListener("click",(function(n){var r=n.target;if("scale__value"===r.className){var i=Number(r&&r.textContent),a=e.findClosestHandler(t,i),s=a.handlers,o=a.values;e.emit("newValueFromScale",{handlers:s,values:o})}}))},e.prototype.findClosestHandler=function(t,e){var n=t.querySelectorAll(".slider__handler"),r=t.querySelectorAll(".slider__tip"),i=Array.from(r).map((function(t){return t.dataset.value}));2===n.length?i[[Math.abs(i[0]-e),Math.abs(i[1]-e)].map((function(t,e,n){return t<=n[e+1]?e:e+1}))[0]]=e:(i[0]=e,i[1]=this.arrayOfProgression[this.arrayOfProgression.length-1]);return{handlers:n,values:i}},e}(a(n(0)).default);e.Scale=s;var o=function(t){function e(){return null!==t&&t.apply(this,arguments)||this}return i(e,t),e.prototype.paint=function(t){var e=t.ratio,n=t.arrayOfProgression;this.arrayOfProgression=n;var r=n,i=0;if(this.scaleHTML.childElementCount!==r.length||e!==this.ratio){this.scaleHTML.innerHTML="",void 0!==e&&(this.ratio=e);for(var a=0;a<r.length;a+=1){var s='<div class="scale__value">'+r[a]+"</div>";this.scaleHTML.insertAdjacentHTML("beforeend",s);var o=this.scaleHTML.children[a];if(0===a)o.style.left="0px";else{i+=e;var l=o.clientWidth/8;o.style.left=i-l+"px"}}var u=this.slider.querySelector(".slider__handler");this.scaleHTML.style.marginLeft=u.offsetWidth/4-1+"px"}},e}(s);e.HorizontalScale=o;var l=function(t){function e(){return null!==t&&t.apply(this,arguments)||this}return i(e,t),e.prototype.paint=function(t){var e=t.ratio,n=t.arrayOfProgression;this.arrayOfProgression=n;var r=n,i=0;if(this.scaleHTML.childElementCount!==r.length||e!==this.ratio){this.scaleHTML.innerHTML="",void 0!==e&&(this.ratio=e);for(var a=0;a<r.length;a+=1){var s='<div class="scale__value">'+r[a]+"</div>";this.scaleHTML.insertAdjacentHTML("beforeend",s);var o=this.scaleHTML.children[a];if(0===a)o.style.bottom="0px";else{i+=e;var l=o.clientWidth/8;o.style.bottom=i-l+"px"}}var u=this.slider.querySelector(".slider__handler");this.scaleHTML.style.marginBottom=u.offsetWidth/4-1+"px"}},e}(s);e.VerticalScale=l},function(t,e,n){var r=n(17);"string"==typeof r&&(r=[[t.i,r,""]]);var i={insert:"head",singleton:!1};n(18)(r,i);r.locals&&(t.exports=r.locals)},function(t,e,n){},function(t,e,n){"use strict";var r,i={},a=function(){return void 0===r&&(r=Boolean(window&&document&&document.all&&!window.atob)),r},s=function(){var t={};return function(e){if(void 0===t[e]){var n=document.querySelector(e);if(window.HTMLIFrameElement&&n instanceof window.HTMLIFrameElement)try{n=n.contentDocument.head}catch(t){n=null}t[e]=n}return t[e]}}();function o(t,e){for(var n=[],r={},i=0;i<t.length;i++){var a=t[i],s=e.base?a[0]+e.base:a[0],o={css:a[1],media:a[2],sourceMap:a[3]};r[s]?r[s].parts.push(o):n.push(r[s]={id:s,parts:[o]})}return n}function l(t,e){for(var n=0;n<t.length;n++){var r=t[n],a=i[r.id],s=0;if(a){for(a.refs++;s<a.parts.length;s++)a.parts[s](r.parts[s]);for(;s<r.parts.length;s++)a.parts.push(_(r.parts[s],e))}else{for(var o=[];s<r.parts.length;s++)o.push(_(r.parts[s],e));i[r.id]={id:r.id,refs:1,parts:o}}}}function u(t){var e=document.createElement("style");if(void 0===t.attributes.nonce){var r=n.nc;r&&(t.attributes.nonce=r)}if(Object.keys(t.attributes).forEach((function(n){e.setAttribute(n,t.attributes[n])})),"function"==typeof t.insert)t.insert(e);else{var i=s(t.insert||"head");if(!i)throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");i.appendChild(e)}return e}var c,p=(c=[],function(t,e){return c[t]=e,c.filter(Boolean).join("\n")});function f(t,e,n,r){var i=n?"":r.css;if(t.styleSheet)t.styleSheet.cssText=p(e,i);else{var a=document.createTextNode(i),s=t.childNodes;s[e]&&t.removeChild(s[e]),s.length?t.insertBefore(a,s[e]):t.appendChild(a)}}function d(t,e,n){var r=n.css,i=n.media,a=n.sourceMap;if(i&&t.setAttribute("media",i),a&&btoa&&(r+="\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(a))))," */")),t.styleSheet)t.styleSheet.cssText=r;else{for(;t.firstChild;)t.removeChild(t.firstChild);t.appendChild(document.createTextNode(r))}}var h=null,v=0;function _(t,e){var n,r,i;if(e.singleton){var a=v++;n=h||(h=u(e)),r=f.bind(null,n,a,!1),i=f.bind(null,n,a,!0)}else n=u(e),r=d.bind(null,n,e),i=function(){!function(t){if(null===t.parentNode)return!1;t.parentNode.removeChild(t)}(n)};return r(t),function(e){if(e){if(e.css===t.css&&e.media===t.media&&e.sourceMap===t.sourceMap)return;r(t=e)}else i()}}t.exports=function(t,e){(e=e||{}).attributes="object"==typeof e.attributes?e.attributes:{},e.singleton||"boolean"==typeof e.singleton||(e.singleton=a());var n=o(t,e);return l(n,e),function(t){for(var r=[],a=0;a<n.length;a++){var s=n[a],u=i[s.id];u&&(u.refs--,r.push(u))}t&&l(o(t,e),e);for(var c=0;c<r.length;c++){var p=r[c];if(0===p.refs){for(var f=0;f<p.parts.length;f++)p.parts[f]();delete i[p.id]}}}}}]);