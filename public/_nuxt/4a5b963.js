(window.webpackJsonp=window.webpackJsonp||[]).push([[5,2],{201:function(t,e,r){var content=r(205);content.__esModule&&(content=content.default),"string"==typeof content&&(content=[[t.i,content,""]]),content.locals&&(t.exports=content.locals);(0,r(52).default)("1571eece",content,!0,{sourceMap:!1})},202:function(t,e,r){"use strict";r(203)("link",(function(t){return function(e){return t(this,"a","href",e)}}))},203:function(t,e,r){var n=r(3),o=r(10),c=r(34),l=/"/g,f=function(t,e,r,n){var o=String(c(t)),f="<"+e;return""!==r&&(f+=" "+r+'="'+String(n).replace(l,"&quot;")+'"'),f+">"+o+"</"+e+">"};t.exports=function(t,e){var r={};r[t]=e(f),n(n.P+n.F*o((function(){var e=""[t]('"');return e!==e.toLowerCase()||e.split('"').length>3})),"String",r)}},204:function(t,e,r){"use strict";r(201)},205:function(t,e,r){var n=r(51)((function(i){return i[1]}));n.push([t.i,"@media only screen and (min-width:1024px){.project_card[data-v-20d1d19e]{flex-shrink:0;flex-basis:30%}}",""]),n.locals={},t.exports=n},208:function(t,e,r){"use strict";r.r(e);r(25),r(202);var n={props:["project"],mounted:function(){},computed:{image_link:function(){return this.project?location.origin+"/storage/"+this.project.image:"https://via/placeholder.com/150"}}},o=(r(204),r(17)),component=Object(o.a)(n,(function(){var t=this,e=t._self._c;return e("div",{staticClass:"border-white border-b-[15px] bg-gradient-to-br from-gray-900 to-gray-700 w-full p-3 text-white"},[e("div",{staticClass:"flex flex-col lg:flex-row w-full"},[e("div",{staticClass:"basis-1/2 p-2"},[e("img",{staticClass:"block w-full rounded-md border border-blue-300 rounded",attrs:{src:t.image_link}})]),t._v(" "),e("div",{staticClass:"basis-1/2 p-2 text-sky-200"},[e("h2",{staticClass:"card-title"},[t._v(t._s(t.project.name))]),t._v(" "),e("p",{staticClass:"break-all",domProps:{innerHTML:t._s(t.project.description)}}),t._v(" "),e("br"),t._v(" "),e("br"),t._v(" "),e("a",{staticClass:"btn text-white mt-4 bg-gradient-to-r from-blue-400 to-pink-400 hover:from-orange-400 hover:to-yellow-400",attrs:{href:t.project.link,target:"_blank"}},[t._v("view this app")])])])])}),[],!1,null,"20d1d19e",null);e.default=component.exports},215:function(t,e,r){"use strict";r.r(e);var n=r(4),o=(r(41),{data:function(){return{name:"ibrahim Mustpha",projects:[]}},asyncData:function(t){return Object(n.a)(regeneratorRuntime.mark((function e(){var r,n,o;return regeneratorRuntime.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return r=t.app,e.next=3,r.$axios.get("/api/projects/all");case 3:return n=e.sent,o=n.data,console.log(o),e.abrupt("return",{projects:o});case 7:case"end":return e.stop()}}),e)})))()}}),c=o,l=r(17),component=Object(l.a)(c,(function(){var t=this,e=t._self._c;return e("div",{staticClass:"overflow-x-hidden"},[t._m(0),t._v(" "),e("div",{staticClass:"flex h-full justify-between flex-wrap py-5"},t._l(t.projects,(function(t){return e("project-card",{key:t.id,attrs:{project:t}})})),1)])}),[function(){var t=this._self._c;return t("div",{staticClass:"my-10"},[t("h2",{staticClass:"lg:text-2xl text-white font-bold text-center font-mono"},[this._v("My Personal Projects")])])}],!1,null,null,null);e.default=component.exports;installComponents(component,{ProjectCard:r(208).default})}}]);