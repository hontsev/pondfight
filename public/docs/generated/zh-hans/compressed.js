// Automatically generated file.  Do not edit!
var k=this;
function l(a){var b=typeof a;if("object"==b)if(a){if(a instanceof Array)return"array";if(a instanceof Object)return b;var c=Object.prototype.toString.call(a);if("[object Window]"==c)return"object";if("[object Array]"==c||"number"==typeof a.length&&"undefined"!=typeof a.splice&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("splice"))return"array";if("[object Function]"==c||"undefined"!=typeof a.call&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("call"))return"function"}else return"null";else if("function"==
b&&"undefined"==typeof a.call)return"object";return b}function m(a){return"array"==l(a)}function aa(a){var b=l(a);return"array"==b||"object"==b&&"number"==typeof a.length}function n(a){return"string"==typeof a}function p(a){return"function"==l(a)}function ba(a){var b=typeof a;return"object"==b&&null!=a||"function"==b}var q="closure_uid_"+(1E9*Math.random()>>>0),r=0;function ca(a,b,c){return a.call.apply(a.bind,arguments)}
function da(a,b,c){if(!a)throw Error();if(2<arguments.length){var d=Array.prototype.slice.call(arguments,2);return function(){var c=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(c,d);return a.apply(b,c)}}return function(){return a.apply(b,arguments)}}function t(a,b,c){t=Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?ca:da;return t.apply(null,arguments)}var ea=Date.now||function(){return+new Date};
function u(a,b){function c(){}c.prototype=b.prototype;a.J=b.prototype;a.prototype=new c;a.prototype.constructor=a;a.T=function(a,c,f){for(var g=Array(arguments.length-2),h=2;h<arguments.length;h++)g[h-2]=arguments[h];return b.prototype[c].apply(a,g)}};var w;var fa=String.prototype.trim?function(a){return a.trim()}:function(a){return a.replace(/^[\s\xa0]+|[\s\xa0]+$/g,"")};function ga(a){if(!ha.test(a))return a;-1!=a.indexOf("&")&&(a=a.replace(ia,"&amp;"));-1!=a.indexOf("<")&&(a=a.replace(ja,"&lt;"));-1!=a.indexOf(">")&&(a=a.replace(ka,"&gt;"));-1!=a.indexOf('"')&&(a=a.replace(la,"&quot;"));-1!=a.indexOf("'")&&(a=a.replace(ma,"&#39;"));-1!=a.indexOf("\x00")&&(a=a.replace(na,"&#0;"));return a}var ia=/&/g,ja=/</g,ka=/>/g,la=/"/g,ma=/'/g,na=/\x00/g,ha=/[\x00&<>"']/;
function x(a,b){return a<b?-1:a>b?1:0};var oa=Array.prototype.indexOf?function(a,b,c){return Array.prototype.indexOf.call(a,b,c)}:function(a,b,c){c=null==c?0:0>c?Math.max(0,a.length+c):c;if(n(a))return n(b)&&1==b.length?a.indexOf(b,c):-1;for(;c<a.length;c++)if(c in a&&a[c]===b)return c;return-1},pa=Array.prototype.forEach?function(a,b,c){Array.prototype.forEach.call(a,b,c)}:function(a,b,c){for(var d=a.length,e=n(a)?a.split(""):a,f=0;f<d;f++)f in e&&b.call(c,e[f],f,a)},qa=Array.prototype.filter?function(a,b,c){return Array.prototype.filter.call(a,
b,c)}:function(a,b,c){for(var d=a.length,e=[],f=0,g=n(a)?a.split(""):a,h=0;h<d;h++)if(h in g){var v=g[h];b.call(c,v,h,a)&&(e[f++]=v)}return e};function ra(a){var b=a.length;if(0<b){for(var c=Array(b),d=0;d<b;d++)c[d]=a[d];return c}return[]};function sa(a,b){for(var c in a)b.call(void 0,a[c],c,a)}function ta(){var a=y,b;for(b in a)return!1;return!0}var ua="constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" ");function va(a,b){for(var c,d,e=1;e<arguments.length;e++){d=arguments[e];for(c in d)a[c]=d[c];for(var f=0;f<ua.length;f++)c=ua[f],Object.prototype.hasOwnProperty.call(d,c)&&(a[c]=d[c])}};var z;a:{var wa=k.navigator;if(wa){var xa=wa.userAgent;if(xa){z=xa;break a}}z=""};function A(){throw Error("Do not instantiate directly");}A.prototype.g=null;A.prototype.toString=function(){return this.content};var ya=-1!=z.indexOf("Opera"),B=-1!=z.indexOf("Trident")||-1!=z.indexOf("MSIE"),za=-1!=z.indexOf("Edge"),C=-1!=z.indexOf("Gecko")&&!(-1!=z.toLowerCase().indexOf("webkit")&&-1==z.indexOf("Edge"))&&!(-1!=z.indexOf("Trident")||-1!=z.indexOf("MSIE"))&&-1==z.indexOf("Edge"),Aa=-1!=z.toLowerCase().indexOf("webkit")&&-1==z.indexOf("Edge");function Ba(){var a=k.document;return a?a.documentMode:void 0}var D;
a:{var Ca="",Da=function(){var a=z;if(C)return/rv\:([^\);]+)(\)|;)/.exec(a);if(za)return/Edge\/([\d\.]+)/.exec(a);if(B)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);if(Aa)return/WebKit\/(\S+)/.exec(a);if(ya)return/(?:Version)[ \/]?(\S+)/.exec(a)}();Da&&(Ca=Da?Da[1]:"");if(B){var Ea=Ba();if(null!=Ea&&Ea>parseFloat(Ca)){D=String(Ea);break a}}D=Ca}var Fa={};
function E(a){var b;if(!(b=Fa[a])){b=0;for(var c=fa(String(D)).split("."),d=fa(String(a)).split("."),e=Math.max(c.length,d.length),f=0;0==b&&f<e;f++){var g=c[f]||"",h=d[f]||"",v=RegExp("(\\d*)(\\D*)","g"),qb=RegExp("(\\d*)(\\D*)","g");do{var I=v.exec(g)||["","",""],J=qb.exec(h)||["","",""];if(0==I[0].length&&0==J[0].length)break;b=x(0==I[1].length?0:parseInt(I[1],10),0==J[1].length?0:parseInt(J[1],10))||x(0==I[2].length,0==J[2].length)||x(I[2],J[2])}while(0==b)}b=Fa[a]=0<=b}return b}
var Ga=k.document,Ha=Ga&&B?Ba()||("CSS1Compat"==Ga.compatMode?parseInt(D,10):5):void 0;var Ia=!B||9<=Number(Ha);!C&&!B||B&&9<=Number(Ha)||C&&E("1.9.1");B&&E("9");function F(a,b){return n(b)?a.getElementById(b):b}function Ja(a,b){sa(b,function(b,d){"style"==d?a.style.cssText=b:"class"==d?a.className=b:"for"==d?a.htmlFor=b:Ka.hasOwnProperty(d)?a.setAttribute(Ka[d],b):0==d.lastIndexOf("aria-",0)||0==d.lastIndexOf("data-",0)?a.setAttribute(d,b):a[d]=b})}
var Ka={cellpadding:"cellPadding",cellspacing:"cellSpacing",colspan:"colSpan",frameborder:"frameBorder",height:"height",maxlength:"maxLength",nonce:"nonce",role:"role",rowspan:"rowSpan",type:"type",usemap:"useMap",valign:"vAlign",width:"width"};function La(a,b,c){function d(c){c&&b.appendChild(n(c)?a.createTextNode(c):c)}for(var e=2;e<c.length;e++){var f=c[e];!aa(f)||ba(f)&&0<f.nodeType?d(f):pa(Ma(f)?ra(f):f,d)}}
function Ma(a){if(a&&"number"==typeof a.length){if(ba(a))return"function"==typeof a.item||"string"==typeof a.item;if(p(a))return"function"==typeof a.item}return!1}function Na(a){this.g=a||k.document||document}
Na.prototype.h=function(a,b,c){var d=this.g,e=arguments,f=e[0],g=e[1];if(!Ia&&g&&(g.name||g.type)){f=["<",f];g.name&&f.push(' name="',ga(g.name),'"');if(g.type){f.push(' type="',ga(g.type),'"');var h={};va(h,g);delete h.type;g=h}f.push(">");f=f.join("")}f=d.createElement(f);g&&(n(g)?f.className=g:m(g)?f.className=g.join(" "):Ja(f,g));2<e.length&&La(d,f,e);return f};B&&E(8);function Oa(){A.call(this)}u(Oa,A);(function(a){function b(){}b.prototype=a.prototype;return function(a,d){if(!String(a))return"";var e=new b;e.content=String(a);void 0!==d&&(e.g=d);return e}})(Oa);function Pa(a){Pa[" "](a);return a}Pa[" "]=function(){};var Qa;var Ra="closure_listenable_"+(1E6*Math.random()|0);function G(a){return!(!a||!a[Ra])}var Sa=0;function Ta(a,b,c,d,e){this.listener=a;this.g=null;this.src=b;this.type=c;this.B=!!d;this.C=e;this.I=++Sa;this.v=this.A=!1}function H(a){a.v=!0;a.listener=null;a.g=null;a.src=null;a.C=null};function Ua(a){this.src=a;this.g={};this.h=0}function Va(a,b,c,d,e){var f=b.toString();b=a.g[f];b||(b=a.g[f]=[],a.h++);var g=Wa(b,c,d,e);-1<g?(a=b[g],a.A=!1):(a=new Ta(c,a.src,f,!!d,e),a.A=!1,b.push(a));return a}function Xa(a,b){var c=b.type;if(!(c in a.g))return!1;var d=a.g[c],e=oa(d,b),f;(f=0<=e)&&Array.prototype.splice.call(d,e,1);f&&(H(b),0==a.g[c].length&&(delete a.g[c],a.h--));return f}function Ya(a,b,c,d,e){a=a.g[b.toString()];b=-1;a&&(b=Wa(a,c,d,e));return-1<b?a[b]:null}
function Wa(a,b,c,d){for(var e=0;e<a.length;++e){var f=a[e];if(!f.v&&f.listener==b&&f.B==!!c&&f.C==d)return e}return-1};var Za=!B||9<=Number(Ha),$a=B&&!E("9");!Aa||E("528");C&&E("1.9b")||B&&E("8")||ya&&E("9.5")||Aa&&E("528");C&&!E("8")||B&&E("9");function K(){0!=ab&&(this[q]||(this[q]=++r));this.H=this.H;this.P=this.P}var ab=0;K.prototype.H=!1;function L(a,b){this.type=a;this.g=this.i=b;this.j=!1}L.prototype.o=function(){this.j=!0};L.prototype.l=function(){};function M(a,b){L.call(this,a?a.type:"");this.g=this.i=null;this.m=this.clientY=this.clientX=0;this.h=this.state=null;if(a){this.type=a.type;var c=a.changedTouches?a.changedTouches[0]:null;this.i=a.target||a.srcElement;this.g=b;var d=a.relatedTarget;if(d&&C)try{Pa(d.nodeName)}catch(e){}null===c?(this.clientX=void 0!==a.clientX?a.clientX:a.pageX,this.clientY=void 0!==a.clientY?a.clientY:a.pageY):(this.clientX=void 0!==c.clientX?c.clientX:c.pageX,this.clientY=void 0!==c.clientY?c.clientY:c.pageY);this.m=
a.keyCode||0;this.state=a.state;this.h=a;a.defaultPrevented&&this.l()}}u(M,L);M.prototype.o=function(){M.J.o.call(this);this.h.stopPropagation?this.h.stopPropagation():this.h.cancelBubble=!0};M.prototype.l=function(){M.J.l.call(this);var a=this.h;if(a.preventDefault)a.preventDefault();else if(a.returnValue=!1,$a)try{if(a.ctrlKey||112<=a.keyCode&&123>=a.keyCode)a.keyCode=-1}catch(b){}};var bb="closure_lm_"+(1E6*Math.random()|0),cb={},db=0;
function N(a,b,c,d,e){if(m(b)){for(var f=0;f<b.length;f++)N(a,b[f],c,d,e);return null}c=eb(c);if(G(a))a=a.D(b,c,d,e);else{if(!b)throw Error("Invalid event type");var f=!!d,g=O(a);g||(a[bb]=g=new Ua(a));c=Va(g,b,c,d,e);if(!c.g){d=fb();c.g=d;d.src=a;d.listener=c;if(a.addEventListener)a.addEventListener(b.toString(),d,f);else if(a.attachEvent)a.attachEvent(gb(b.toString()),d);else throw Error("addEventListener and attachEvent are unavailable.");db++}a=c}return a}
function fb(){var a=hb,b=Za?function(c){return a.call(b.src,b.listener,c)}:function(c){c=a.call(b.src,b.listener,c);if(!c)return c};return b}function ib(a,b,c,d,e){if(m(b))for(var f=0;f<b.length;f++)ib(a,b[f],c,d,e);else c=eb(c),G(a)?a.G(b,c,d,e):a&&(a=O(a))&&(b=Ya(a,b,c,!!d,e))&&P(b)}
function P(a){if("number"==typeof a||!a||a.v)return!1;var b=a.src;if(G(b))return Xa(b.s,a);var c=a.type,d=a.g;b.removeEventListener?b.removeEventListener(c,d,a.B):b.detachEvent&&b.detachEvent(gb(c),d);db--;(c=O(b))?(Xa(c,a),0==c.h&&(c.src=null,b[bb]=null)):H(a);return!0}function jb(a){if(a)if(G(a)){if(a.s){var b=a.s;a=0;for(var c in b.g){for(var d=b.g[c],e=0;e<d.length;e++)++a,H(d[e]);delete b.g[c];b.h--}}}else if(c=O(a))for(b in a=0,c.g)for(d=c.g[b].concat(),e=0;e<d.length;++e)P(d[e])&&++a}
function gb(a){return a in cb?cb[a]:cb[a]="on"+a}function kb(a,b,c,d){var e=!0;if(a=O(a))if(b=a.g[b.toString()])for(b=b.concat(),a=0;a<b.length;a++){var f=b[a];f&&f.B==c&&!f.v&&(f=lb(f,d),e=e&&!1!==f)}return e}function lb(a,b){var c=a.listener,d=a.C||a.src;a.A&&P(a);return c.call(d,b)}
function hb(a,b){if(a.v)return!0;if(!Za){var c;if(!(c=b))a:{c=["window","event"];for(var d=k,e;e=c.shift();)if(null!=d[e])d=d[e];else{c=null;break a}c=d}e=c;c=new M(e,this);d=!0;if(!(0>e.keyCode||void 0!=e.returnValue)){a:{var f=!1;if(0==e.keyCode)try{e.keyCode=-1;break a}catch(v){f=!0}if(f||void 0==e.returnValue)e.returnValue=!0}e=[];for(f=c.g;f;f=f.parentNode)e.push(f);for(var f=a.type,g=e.length-1;!c.j&&0<=g;g--){c.g=e[g];var h=kb(e[g],f,!0,c),d=d&&h}for(g=0;!c.j&&g<e.length;g++)c.g=e[g],h=kb(e[g],
f,!1,c),d=d&&h}return d}return lb(a,new M(b,this))}function O(a){a=a[bb];return a instanceof Ua?a:null}var mb="__closure_events_fn_"+(1E9*Math.random()>>>0);function eb(a){if(p(a))return a;a[mb]||(a[mb]=function(b){return a.handleEvent(b)});return a[mb]};function Q(a){K.call(this);this.g=a;this.h={}}u(Q,K);var nb=[];Q.prototype.D=function(a,b,c,d){m(b)||(b&&(nb[0]=b.toString()),b=nb);for(var e=0;e<b.length;e++){var f=N(a,b[e],c||this.handleEvent,d||!1,this.g||this);if(!f)break;this.h[f.I]=f}return this};Q.prototype.G=function(a,b,c,d,e){if(m(b))for(var f=0;f<b.length;f++)this.G(a,b[f],c,d,e);else c=c||this.handleEvent,e=e||this.g||this,c=eb(c),d=!!d,b=G(a)?Ya(a.s,String(b),c,d,e):a?(a=O(a))?Ya(a,b,c,d,e):null:null,b&&(P(b),delete this.h[b.I]);return this};
Q.prototype.handleEvent=function(){throw Error("EventHandler.handleEvent not implemented");};function ob(a){if(a.classList)return a.classList;a=a.className;return n(a)&&a.match(/\S+/g)||[]}function pb(a,b){var c;a.classList?c=a.classList.contains(b):(c=ob(a),c=0<=oa(c,b));return c}function R(a,b){a.classList?a.classList.add(b):pb(a,b)||(a.className+=0<a.className.length?" "+b:b)}function rb(a,b){a.classList?a.classList.remove(b):pb(a,b)&&(a.className=qa(ob(a),function(a){return a!=b}).join(" "))};function S(){K.call(this);this.s=new Ua(this);this.K=this}u(S,K);S.prototype[Ra]=!0;S.prototype.removeEventListener=function(a,b,c,d){ib(this,a,b,c,d)};function T(a,b){var c=a.K,d=b,e=d.type||d;if(n(d))d=new L(d,c);else if(d instanceof L)d.i=d.i||c;else{var f=d,d=new L(e,c);va(d,f)}d.j||(c=d.g=c,sb(c,e,!0,d),d.j||sb(c,e,!1,d))}S.prototype.D=function(a,b,c,d){return Va(this.s,String(a),b,c,d)};
S.prototype.G=function(a,b,c,d){var e;e=this.s;a=String(a).toString();if(a in e.g){var f=e.g[a];b=Wa(f,b,c,d);-1<b?(H(f[b]),Array.prototype.splice.call(f,b,1),0==f.length&&(delete e.g[a],e.h--),e=!0):e=!1}else e=!1;return e};function sb(a,b,c,d){if(b=a.s.g[String(b)]){b=b.concat();for(var e=!0,f=0;f<b.length;++f){var g=b[f];if(g&&!g.v&&g.B==c){var h=g.listener,v=g.C||g.src;g.A&&Xa(a.s,g);e=!1!==h.call(v,d)&&e}}}};function U(a,b,c,d,e){function f(a){a&&(a.tabIndex=0,a.setAttribute("role","tab"),R(a,"goog-zippy-header"),a&&g.M.D(a,"click",g.R),a&&g.L.D(a,"keydown",g.S))}S.call(this);this.w=e||w||(w=new Na);this.j=F(this.w.g,a)||null;this.l=F(this.w.g,d||null);this.i=(this.o=p(b)?b:null)||!b?null:F(this.w.g,b);this.h=1==c;void 0!==c||this.o||(this.l?this.h="none"!=this.l.style.display:this.j&&(this.h=pb(this.j,"goog-zippy-expanded")));this.L=new Q(this);this.M=new Q(this);var g=this;f(this.j);f(this.l);this.u(this.h)}
u(U,S);U.prototype.u=function(a){this.i?this.i.style.display=a?"":"none":a&&this.o&&(this.i=this.o());this.i&&R(this.i,"goog-zippy-content");this.l?(this.j.style.display=a?"none":"",this.l.style.display=a?"":"none"):tb(this,a);this.h=a;T(this,new ub("toggle",this))};
function tb(a,b){if(a.j){var c=a.j;b?R(c,"goog-zippy-expanded"):rb(c,"goog-zippy-expanded");c=a.j;b?rb(c,"goog-zippy-collapsed"):R(c,"goog-zippy-collapsed");var c=a.j,d=b;m(d)&&(d=d.join(" "));""===d||void 0==d?(Qa||(Qa={atomic:!1,autocomplete:"none",dropeffect:"none",haspopup:!1,live:"off",multiline:!1,multiselectable:!1,orientation:"vertical",readonly:!1,relevant:"additions text",required:!1,sort:"none",busy:!1,disabled:!1,hidden:!1,invalid:"false"}),d=Qa,"expanded"in d?c.setAttribute("aria-expanded",
d.expanded):c.removeAttribute("aria-expanded")):c.setAttribute("aria-expanded",d)}}U.prototype.S=function(a){if(13==a.m||32==a.m)this.u(!this.h),T(this,new L("action",this)),a.l(),a.o()};U.prototype.R=function(){this.u(!this.h);T(this,new L("action",this))};function ub(a,b){L.call(this,a,b)}u(ub,L);function V(a,b,c){K.call(this);this.h=a;this.l=b||0;this.j=c;this.i=t(this.m,this)}u(V,K);V.prototype.g=0;function vb(a){0!=a.g&&k.clearTimeout(a.g);a.g=0;var b;b=a.i;var c=a.l;if(!p(b))if(b&&"function"==typeof b.handleEvent)b=t(b.handleEvent,b);else throw Error("Invalid listener argument");b=2147483647<Number(c)?-1:k.setTimeout(b,c||0);a.g=b}V.prototype.m=function(){this.g=0;this.h&&this.h.call(this.j)};var y={},W=null;function wb(a){a=a[q]||(a[q]=++r);delete y[a];ta()&&W&&(a=W,0!=a.g&&k.clearTimeout(a.g),a.g=0)}function xb(){W||(W=new V(function(){yb()},20));var a=W;0!=a.g||vb(a)}function yb(){var a=ea();sa(y,function(b){zb(b,a)});ta()||xb()};function X(){S.call(this);this.i=Y;this.w=this.j=null}u(X,S);var Y=0;X.prototype.g=function(a){T(this,a)};function Ab(a,b,c,d){X.call(this);if(!m(a)||!m(b))throw Error("Start and end parameters must be arrays");if(a.length!=b.length)throw Error("Start and end points must be the same length");this.m=a;this.F=b;this.u=c;this.o=d;this.l=[];this.h=0}u(Ab,X);function zb(a,b){a.h=(b-a.j)/(a.w-a.j);1<=a.h&&(a.h=1);Bb(a,a.h);1==a.h?(a.i=Y,wb(a),a.g("finish"),a.g("end")):1==a.i&&a.g("animate")}
function Bb(a,b){p(a.o)&&(b=a.o(b));a.l=Array(a.m.length);for(var c=0;c<a.m.length;c++)a.l[c]=(a.F[c]-a.m[c])*b+a.m[c]}Ab.prototype.g=function(a){T(this,new Cb(a,this))};function Cb(a,b){L.call(this,a);this.x=b.l[0];this.y=b.l[1];this.state=b.i}u(Cb,L);function Z(a,b,c,d){d=d||w||(w=new Na);var e=d.h("DIV",{style:"overflow:hidden"});b=F(d.g,b);b.parentNode.replaceChild(e,b);e.appendChild(b);this.m=e;this.g=null;U.call(this,a,b,c,void 0,d);a=this.h;this.m.style.display=a?"":"none";tb(this,a)}u(Z,U);Z.prototype.F=function(a){return 1-Math.pow(1-a,3)};
Z.prototype.u=function(a){if(this.h!=a||this.g){"none"==this.m.style.display&&(this.m.style.display="");var b=this.i.offsetHeight,c;this.g?(a=this.h,jb(this.g),c=this.g,wb(c),c.i=Y,Bb(c,c.h),c.g("stop"),c.g("end"),c=b-Math.abs(parseInt(this.i.style.marginTop,10))):c=a?0:b;tb(this,a);this.g=new Ab([0,c],[0,a?b:0],500,this.F);N(this.g,["begin","animate","end"],this.N,!1,this);N(this.g,"end",t(this.O,this,a));a:{a=this.g;if(a.i==Y)a.h=0,a.l=a.m;else if(1==a.i)break a;wb(a);b=ea();a.j=b;-1==a.i&&(a.j-=
a.u*a.h);a.w=a.j+a.u;a.h||a.g("begin");a.g("play");-1==a.i&&a.g("resume");a.i=1;c=a[q]||(a[q]=++r);c in y||(y[c]=a);xb();zb(a,b)}}};Z.prototype.N=function(a){var b=this.i;b.style.marginTop=a.y-b.offsetHeight+"px"};Z.prototype.O=function(a){a&&(this.i.style.marginTop="0");jb(this.g);this.h=a;this.g=null;a||(this.m.style.display="none");T(this,new ub("toggle",this))};window.addEventListener("load",function(){var a=window.location.search.match(/[?&]mode=([^&]+)/),a=a?Number(a[1]):Infinity,b=a%2?"blocks":"js";document.body.innerHTML='<h1>池塘大战帮助文档</h1><h2 id="pond"><img src="../common/1x1.gif">池塘 Pond</h2><div id="pond-content"><h3>角度 Angles</h3><p>角度以正东（屏幕右侧）为 0 度，正北 90 度， 正西 180 度，正南 270 度。如果数值超出界限，按以下规则处理：-90 是正南，450 是正北。</p><p><img src="/public/docs/compass.png" height="145" width="150" style="padding: 0 2em;"></p><h3>开炮 Cannon</h3>'+
("blocks"==b?'<p><img src="/public/docs/cannon.png" height="41" width="231"></p>':"js"==b?'<pre class="pondSpec spec">cannon(<i>angle</i>, <i>range</i>)</pre>':"")+"<p> <code>cannon()</code> 函数让小鸭子向指定方向和指定距离的地方发射一枚炮弹。发射方向为绝对角度，与小鸭子目前面朝哪个方向无关。距离可以为 0 - 70 之间的任意数字，如果输入超过 70 则依然视为 70 。</p><p>小鸭子的炮需要大约一秒钟的时间来重新装填， <code>cannon()</code> 函数在此期间的调用没有任何效果。"+
("js"==b?" 如果一枚炮弹被发射了，那么<code>cannon()</code> 返回 <code>true</code> , 而如果正在装填，返回 <code>false</code> ":"")+"</p>"+(5<=a?"<h3>扫描 Scan</h3>"+("blocks"==b?'<p><img src="/public/docs/scan.png" height="36" width="134"></p>':"js"==b?'<pre class="pondSpec spec">Scan(<i>angle</i>)\nscan(<i>angle</i>, <i>range</i>)</pre>':"")+"<p><code>scan()</code> 函数用于激活小鸭子的雷达。此函数返回在某一特定方向上离自己最近的一个敌对目标的距离。扫描角度与小鸭子目前面朝哪个方向无关。雷达会无视掉已经沉没的目标。如果在此方向上没有搜索到任何目标，那么返回 <code>Infinity</code> 。</p>"+
("js"==b?"<p><code>scan()</code> 的第二个参数（可选）指定扫描光束的宽度（也就是扇形光束的圆心角大小）。范围是 1 - 20 度。高级玩家可以通过利用这个功能，首先大面积扫描来快速定位敌人方位，再逐步减少扫描光束的宽度来精准定位敌人。如果不设置此参数，则默认宽度为 5 度。这个参数只能在 JavaScript脚本 模式下才能使用，不能在 积木块 模式使用。</p>":""):"")+(7<=a?"<h3>游动 Swim</h3>"+("blocks"==b?'<p><img src="/public/docs/swim.png" height="41" width="131"></p>':
"js"==b?'<pre class="pondSpec spec">swim(<i>angle</i>)\nswim(<i>angle</i>, <i>speed</i>)</pre>':"")+"<p><code>swim()</code> 函数让小鸭子开始游动。小鸭子会沿着指定的方向一直持续游动。</p>"+("js"==b?"<p> <code>swim()</code> 的第二个参数（可选）指定游动速度。速度范围是 0（完全静止）到 100（最高速）。要注意，只有在当前速度低于 50 的时候，小鸭子才能转向。如果不设置这个参数，速度默认为 50。这个参数只能在 JavaScript脚本 模式下才能使用，不能在 积木块 模式使用。</p>":
"")+"<p>撞上战场边缘会让你的小鸭子受伤。撞上其他鸭子会让双方都受到伤害，伤害数值取决于撞击者的速度。</p>":"")+(9<=a?"<h3>停下 Stop</h3>"+("blocks"==b?'<p><img src="/public/docs/stop.png" height="31" width="63"></p>':"js"==b?'<pre class="pondSpec spec">stop()</pre>':"")+"<p> <code>stop()</code> 函数让小鸭子停止游动。小鸭子会需要一小段时间来缓缓减速至完全停下。"+("js"==b?"这个函数与调用 <code>swim()</code> 并传入参数 0 的效果完全一样。":
"")+"</p>":"")+(9<=a?"<h3>方向 Location</h3>"+("blocks"==b?'<p><img src="/public/docs/loc_x.png" height="26" width="74"> &nbsp; <img src="/public/docs/loc_y.png" height="26" width="74"></p>':"js"==b?'<pre class="pondSpec spec">loc_x()\nloc_y()</pre>':"")+'<p> <code>loc_x()</code> 和 <code>loc_y()</code> 函数能够获得小鸭子当前在战场上的水平位置和垂直位置。返回值的范围在 0 到 100 之间，以战场左下角为坐标原点，向上向右递增。</p><p><img src="/public/docs/map.png" height="190" width="244" style="padding: 0 2em;"></p>':
"")+(11<=a?"<h3>速度 Speed</h3>"+("blocks"==b?'<p><img src="/public/docs/speed.png" height="26" width="79"></p>':"js"==b?'<pre class="pondSpec spec">speed()</pre>':"")+"<p><code>speed()</code> 函数能够获得小鸭子当前的速度。数值在 0 （完全静止）到 100（最高速）之间。此函数可以用来规避碰撞（碰撞会让小鸭子速度骤减为 0）。</p>":"")+(11<=a?"<h3>生命值 Health</h3>"+("blocks"==b?'<p><img src="/public/docs/health.png" height="26" width="78"></p>':"js"==b?'<pre class="pondSpec spec">health()</pre>':
"")+"<p><code>health()</code> 函数能够获得小鸭子当前的生命值。数值在 0（沉没了）到100（满生命值）之间。高级玩家可以通过用一个全局变量存储小鸭子的生命值，然后通过不断检测生命值是否发生变化，来得知小鸭子是否正在被敌人攻击。</p><p>损失掉的生命值没有任何办法恢复。</p>":"")+"</div>"+(3<=a?'\x3c!-- ---------------------------------------------------------------------- --\x3e<h2 id="logic"><img src="../common/1x1.gif">逻辑 Logic</h2><div id="logic-content">'+
(9<=a?"<h3>条件判断 If</h3>"+("blocks"==b?'<p><img src="/public/docs/if.png" height="90" width="118"></p>':"js"==b?'<pre class="logicSpec spec">if (<i>condition</i>) {\n  <i>statements</i>\n}\n\n\nif (<i>condition</i>) {\n  <i>statements</i>\n} else if (<i>condition</i>) {\n  <i>statements</i>\n}\n\n\nif (<i>condition</i>) {\n  <i>statements</i>\n} else {\n  <i>statements</i>\n}</pre>':"")+"<p>如果条件成立，则执行模块中的指令。<code>if</code> 后面可以跟着任意数量的 <code>else if</code> 模块，并且结尾添加 <code>else</code> 模块来在前述各项条件都没有成立的时候执行某些指令。</p>":
"")+(9<=a?"<h3>表达式 Equality</h3>"+("blocks"==b?'<p><img src="/public/docs/equals.png" height="36" width="122"></p>':"js"==b?'<pre class="logicSpec spec">==    !=    &lt;    &lt;=    &gt;    &gt;=</pre>':"")+"<p>这些表达式用于比较两个数值，表达式成立时返回 <code>true</code> ，表达式不成立时返回 <code>false</code>。表达式中的 6 个可用的运算符如下所示：</p><table><tr><th>运算符</td><th>例子</td><th>返回值</td></tr><tr><td>相等</td><td><code>5 == 10</code></td><td><code>false</code></td></tr><tr><td>不相等</td><td><code>5 != 10</code></td><td><code>true</code></td></tr><tr><td>小于</td><td><code>5 &lt; 10</code></td><td><code>true</code></td></tr><tr><td>小于等于</td><td><code>5 &lt;= 10</code></td><td><code>true</code></td></tr><tr><td>大于</td><td><code>5 &gt; 10</code></td><td><code>false</code></td></tr><tr><td>大于等于</td><td><code>5 &gt;= 10</code></td><td><code>false</code></td></tr></table><p>用 <code>!=</code> 来比较两个实数时候要谨慎。假如有一段代码，希望让小鸭子在游到 Y 坐标 50 的地方就停下来：</p><pre>while (loc_y() <b>!=</b> 50) {\n  swim(90"+
("js"==b?", 50":"")+");\n}\nstop();</pre><p>结果这段代码没有达到预期效果，这是因为 <code>loc_y()</code> 在上一个时刻进行判断时可能是 49.4 , 但是下一时刻就变成了 50.6 。由于小鸭子的 Y 坐标并没有恰好为 50 的时刻，因此循环就无法跳出。下面是一段改良后的代码：</p><pre>while (loc_y() <b>&lt;</b> 50) {\n  swim(90"+("js"==b?", 50":"")+");\n}\nstop();</pre>":"")+(11<=a?"<h3>并且/或者 And/Or</h3>"+("blocks"==b?'<p><img src="/public/docs/and.png" height="36" width="124"></p>':"js"==b?'<pre class="logicSpec spec">&&    ||</pre>':
"")+"<p>'并且' 用运算符 <code>&&</code> 来表示。只有它两端的运算条件都为真 <code>true</code>时，它才返回真 <code>true</code> 。例如，下面这段代码只会在 range 处于 5 和 70 之间的时候才会开火：</p><pre>if (range &gt; 5 <b>&amp;&amp;</b> range &lt; 70) {\n  cannon(angle, range);\n}</pre><p>'或者' 用运算符 <code>||</code> 来表示。 只要它两端的运算条件任意一个为真 <code>true</code>时，它就会返回真 <code>true</code>。例如，下面这段代码会让鸭子靠近任意一面墙的时候停下来：</p><pre>if (loc_x() &lt; 10 <b>||</b> loc_x() &gt; 90 <b>||</b>\n    loc_y() &lt; 10 <b>||</b> loc_y() &gt; 90) {\n  stop();\n}</pre>":
"")+"<h3>布尔值 Booleans</h3>"+("blocks"==b?'<p><img src="/public/docs/true.png" height="26" width="68"></p>':"js"==b?'<pre class="logicSpec spec">true    false</pre>':"")+"<p>布尔值'真' <code>true</code> 主要用在 while 循环中，来让循环一直持续运行。布尔值的另外一个取值为'假' <code>false</code> 。</p></div>":"")+(3<=a?'\x3c!-- ---------------------------------------------------------------------- --\x3e<h2 id="loops"><img src="../common/1x1.gif">循环 Loops</h2><div id="loops-content"><h3>条件成立时循环 While</h3>'+
("blocks"==b?'<p><img src="/public/docs/while.png" height="90" width="118"></p>':"js"==b?'<pre class="loopsSpec spec">while (<i>condition</i>) {\n  <i>statements</i>\n}</pre>':"")+"<p>循环会在条件成立的时候持续重复它内部（循环体中）的指令。因此，下面这段代码让小鸭子不停地向西边开炮：</p><pre>while (true) {\n  cannon(180, 50);\n}</pre><p>而下面这段代码会让小鸭子在西边存在敌对目标的时候一直持续开火：</p><pre>while (scan(180"+("js"==b?", 5":"")+") &lt;= 70) {\n  cannon(180, scan(180"+
("js"==b?", 5":"")+"));\n}</pre></div>":"")+'\x3c!-- ---------------------------------------------------------------------- --\x3e<h2 id="math"><img src="../common/1x1.gif">数学 Math</h2><div id="math-content"><h3>数值 Number</h3>'+("blocks"==b?'<p><img src="/public/docs/number.png" height="26" width="37"></p>':"js"==b?'<pre class="mathSpec spec">123</pre>':"")+"<p>数值能用于很多操作，比如表示距离，角度，或者用于计数。数值可以是负数 (比如 -360)，亦或是小数 (比如 3.14159)， 或者也可以极其巨大 (比如 9007199254740992)。有一个特殊的数值 <code>Infinity</code>（无穷大）。</p><p>数值中间不要加入分隔符 (比如 9,000).</p>"+
(11<=a?"<h3>计算 Arithmetic</h3>"+("blocks"==b?'<p><img src="/public/docs/plus.png" height="36" width="113"></p>':"js"==b?'<pre class="mathSpec spec">+    -    *    /</pre>':"")+"<p>这些运算符通过对两个数值的计算，返回一个结果数值。计算中的 4 个可用的运算符如下所示：</p><table><tr><th>运算符</td><th>例子</td><th>返回值</td></tr><tr><td>加</td><td><code>3 + 4</code></td><td><code>7</code></td></tr><tr><td>减</td><td><code>3 - 4</code></td><td><code>-1</code></td></tr><tr><td>乘</td><td><code>3 * 4</code></td><td><code>12</code></td></tr><tr><td>除</td><td><code>3 / 4</code></td><td><code>0.75</code></td></tr></table>":
"")+(11<=a?"<h3>三角函数 Trigonometry</h3>"+("blocks"==b?'<p><img src="/public/docs/math_sqrt.png" height="36" width="164"></p>':"js"==b?'<pre class="mathSpec spec">Math.<i>operation</i>(<i>number</i>)</pre>':"")+"<p>这些函数传入一个要运算的数值，返回运算结果数值。有 8 个可用的函数如下所示：</p><table><tr><th>函数</td><th>例子</td><th>返回值</td></tr><tr><td>平方根</td><td><code>Math.sqrt(25)</code></td><td><code>5</code></td></tr><tr><td>绝对值</td><td><code>Math.abs(-25)</code></td><td><code>25</code></td></tr><tr><td>正弦</td><td><code>Math.sin_deg(30)</code></td><td><code>0.5</code></td></tr><tr><td>余弦</td><td><code>Math.cos_deg(30)</code></td><td><code>0.866</code></td></tr><tr><td>正切</td><td><code>Math.tan_deg(30)</code></td><td><code>0.577</code></td></tr><tr><td>反正弦</td><td><code>Math.asin_deg(0.5)</code></td><td><code>30</code></td></tr><tr><td>反余弦</td><td><code>Math.acos_deg(0.866)</code></td><td><code>30.003</code></td></tr><tr><td>反正切</td><td><code>Math.atan_deg(0.577)</code></td><td><code>29.985</code></td></tr></table><p>注意，这些三角函数是池塘大战游戏的自定义函数，参数均为角度。而标准 JavaScript 函数的相应参数使用弧度。</p>":
"")+(11<=a?"<h3>自增 Incrementing</h3>"+("blocks"==b?'<p><img src="/public/docs/increment.png" height="41" width="159"></p>':"js"==b?'<pre class="mathSpec spec"><i>name</i> += <i>number</i>;</pre>':"")+"<p>这是一种简化的写法，效果是把两个数值相加，并且把结果写入前一个数值对应的变量中。等价于下面两行代码：</p><pre>angle += 10;\nvar angle = angle + 10;</pre><p>不要对一个没有初始化的变量使用 <code>+=</code> 运算符。如果你不能确定，那就在你代码的最开始把这些变量初始化为 0 。</p>":
"")+(11<=a?"<h3>随机数 Random</h3>"+("blocks"==b?'<p><img src="/public/docs/math_random.png" height="26" width="124"></p>':"js"==b?'<pre class="mathSpec spec">Math.random()</pre>':"")+"<p>这个函数将返回一个介于 0.0 到 1.0 之间的随机小数。如果你要获得一个更大范围内的随机数，只需要用你希望得到的随机数上限与这个函数的结果相乘。例如，用以下代码来获得一个随机角度：</p><pre>var angle = Math.random() * 360;</pre>":"")+"</div>"+(11<=a?'\x3c!-- ---------------------------------------------------------------------- --\x3e<h2 id="variables"><img src="../common/1x1.gif">变量 Variables</h2><div id="variables-content"><h3>赋值 Assigning</h3>'+
("blocks"==b?'<p><img src="/public/docs/var_set.png" height="40" width="165"></p>':"js"==b?'<pre class="variablesSpec spec">var <i>name</i> = <i>value</i>;</pre>':"")+"<p>将一个值（通常是一个数值）赋值给一个已命名了的变量。变量的名字应该起的有些意义，比如说 <code>range</code> 或 <code>angle</code>。</p>"+("js"==b?"<p>要注意，变量的名字是大小写敏感的，也就是说 <code>angle</code> 和 <code>Angle</code> 会被看作是两个完全不同的变量。变量的名字只能用英文字母 a 到 z 或数字。变量名不能以数字开头。</p><p>如果不是首次定义某个变量，那么关键字 <code>var</code> 可以被省略，你不想省略也行。</p>":
"")+"<h3>取值 Retrieving</h3>"+("blocks"==b?'<p><img src="/public/docs/var_get.png" height="26" width="79"></p>':"js"==b?'<pre class="variablesSpec spec"><i>name</i></pre>':"")+"<p>取得之前存入这个变量的值（一般是数值）。</p></div>":"")+(11<=a?'\x3c!-- ---------------------------------------------------------------------- --\x3e<h2 id="functions"><img src="/public/common/1x1.gif">函数 Functions</h2><div id="functions-content"><p>（暂无文档）</p></div>':"");for(var a=document.getElementsByTagName("h2"),
b=0,c;c=a[b];b++)new Z(c,c.id+"-content",!1)});
