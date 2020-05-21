(function(){var a=this,b=a._,c={},d=Array.prototype,e=Object.prototype,f=Function.prototype,g=d.push,h=d.slice,i=d.concat,j=e.toString,k=e.hasOwnProperty,l=d.forEach,m=d.map,n=d.reduce,o=d.reduceRight,p=d.filter,q=d.every,r=d.some,s=d.indexOf,t=d.lastIndexOf,u=Array.isArray,v=Object.keys,w=f.bind,x=function(a){return a instanceof x?a:this instanceof x?void(this._wrapped=a):new x(a)};"undefined"!=typeof exports?("undefined"!=typeof module&&module.exports&&(exports=module.exports=x),exports._=x):a._=x,x.VERSION="1.6.0";var y=x.each=x.forEach=function(a,b,d){if(null==a)return a;if(l&&a.forEach===l)a.forEach(b,d);else if(a.length===+a.length){for(var e=0,f=a.length;f>e;e++)if(b.call(d,a[e],e,a)===c)return}else for(var g=x.keys(a),e=0,f=g.length;f>e;e++)if(b.call(d,a[g[e]],g[e],a)===c)return;return a};x.map=x.collect=function(a,b,c){var d=[];return null==a?d:m&&a.map===m?a.map(b,c):(y(a,function(a,e,f){d.push(b.call(c,a,e,f))}),d)};var z="Reduce of empty array with no initial value";x.reduce=x.foldl=x.inject=function(a,b,c,d){var e=arguments.length>2;if(null==a&&(a=[]),n&&a.reduce===n)return d&&(b=x.bind(b,d)),e?a.reduce(b,c):a.reduce(b);if(y(a,function(a,f,g){e?c=b.call(d,c,a,f,g):(c=a,e=!0)}),!e)throw new TypeError(z);return c},x.reduceRight=x.foldr=function(a,b,c,d){var e=arguments.length>2;if(null==a&&(a=[]),o&&a.reduceRight===o)return d&&(b=x.bind(b,d)),e?a.reduceRight(b,c):a.reduceRight(b);var f=a.length;if(f!==+f){var g=x.keys(a);f=g.length}if(y(a,function(h,i,j){i=g?g[--f]:--f,e?c=b.call(d,c,a[i],i,j):(c=a[i],e=!0)}),!e)throw new TypeError(z);return c},x.find=x.detect=function(a,b,c){var d;return A(a,function(a,e,f){return b.call(c,a,e,f)?(d=a,!0):void 0}),d},x.filter=x.select=function(a,b,c){var d=[];return null==a?d:p&&a.filter===p?a.filter(b,c):(y(a,function(a,e,f){b.call(c,a,e,f)&&d.push(a)}),d)},x.reject=function(a,b,c){return x.filter(a,function(a,d,e){return!b.call(c,a,d,e)},c)},x.every=x.all=function(a,b,d){b||(b=x.identity);var e=!0;return null==a?e:q&&a.every===q?a.every(b,d):(y(a,function(a,f,g){return(e=e&&b.call(d,a,f,g))?void 0:c}),!!e)};var A=x.some=x.any=function(a,b,d){b||(b=x.identity);var e=!1;return null==a?e:r&&a.some===r?a.some(b,d):(y(a,function(a,f,g){return e||(e=b.call(d,a,f,g))?c:void 0}),!!e)};x.contains=x.include=function(a,b){return null==a?!1:s&&a.indexOf===s?-1!=a.indexOf(b):A(a,function(a){return a===b})},x.invoke=function(a,b){var c=h.call(arguments,2),d=x.isFunction(b);return x.map(a,function(a){return(d?b:a[b]).apply(a,c)})},x.pluck=function(a,b){return x.map(a,x.property(b))},x.where=function(a,b){return x.filter(a,x.matches(b))},x.findWhere=function(a,b){return x.find(a,x.matches(b))},x.max=function(a,b,c){if(!b&&x.isArray(a)&&a[0]===+a[0]&&a.length<65535)return Math.max.apply(Math,a);var d=-1/0,e=-1/0;return y(a,function(a,f,g){var h=b?b.call(c,a,f,g):a;h>e&&(d=a,e=h)}),d},x.min=function(a,b,c){if(!b&&x.isArray(a)&&a[0]===+a[0]&&a.length<65535)return Math.min.apply(Math,a);var d=1/0,e=1/0;return y(a,function(a,f,g){var h=b?b.call(c,a,f,g):a;e>h&&(d=a,e=h)}),d},x.shuffle=function(a){var b,c=0,d=[];return y(a,function(a){b=x.random(c++),d[c-1]=d[b],d[b]=a}),d},x.sample=function(a,b,c){return null==b||c?(a.length!==+a.length&&(a=x.values(a)),a[x.random(a.length-1)]):x.shuffle(a).slice(0,Math.max(0,b))};var B=function(a){return null==a?x.identity:x.isFunction(a)?a:x.property(a)};x.sortBy=function(a,b,c){return b=B(b),x.pluck(x.map(a,function(a,d,e){return{value:a,index:d,criteria:b.call(c,a,d,e)}}).sort(function(a,b){var c=a.criteria,d=b.criteria;if(c!==d){if(c>d||void 0===c)return 1;if(d>c||void 0===d)return-1}return a.index-b.index}),"value")};var C=function(a){return function(b,c,d){var e={};return c=B(c),y(b,function(f,g){var h=c.call(d,f,g,b);a(e,h,f)}),e}};x.groupBy=C(function(a,b,c){x.has(a,b)?a[b].push(c):a[b]=[c]}),x.indexBy=C(function(a,b,c){a[b]=c}),x.countBy=C(function(a,b){x.has(a,b)?a[b]++:a[b]=1}),x.sortedIndex=function(a,b,c,d){c=B(c);for(var e=c.call(d,b),f=0,g=a.length;g>f;){var h=f+g>>>1;c.call(d,a[h])<e?f=h+1:g=h}return f},x.toArray=function(a){return a?x.isArray(a)?h.call(a):a.length===+a.length?x.map(a,x.identity):x.values(a):[]},x.size=function(a){return null==a?0:a.length===+a.length?a.length:x.keys(a).length},x.first=x.head=x.take=function(a,b,c){return null==a?void 0:null==b||c?a[0]:0>b?[]:h.call(a,0,b)},x.initial=function(a,b,c){return h.call(a,0,a.length-(null==b||c?1:b))},x.last=function(a,b,c){return null==a?void 0:null==b||c?a[a.length-1]:h.call(a,Math.max(a.length-b,0))},x.rest=x.tail=x.drop=function(a,b,c){return h.call(a,null==b||c?1:b)},x.compact=function(a){return x.filter(a,x.identity)};var D=function(a,b,c){return b&&x.every(a,x.isArray)?i.apply(c,a):(y(a,function(a){x.isArray(a)||x.isArguments(a)?b?g.apply(c,a):D(a,b,c):c.push(a)}),c)};x.flatten=function(a,b){return D(a,b,[])},x.without=function(a){return x.difference(a,h.call(arguments,1))},x.partition=function(a,b){var c=[],d=[];return y(a,function(a){(b(a)?c:d).push(a)}),[c,d]},x.uniq=x.unique=function(a,b,c,d){x.isFunction(b)&&(d=c,c=b,b=!1);var e=c?x.map(a,c,d):a,f=[],g=[];return y(e,function(c,d){(b?d&&g[g.length-1]===c:x.contains(g,c))||(g.push(c),f.push(a[d]))}),f},x.union=function(){return x.uniq(x.flatten(arguments,!0))},x.intersection=function(a){var b=h.call(arguments,1);return x.filter(x.uniq(a),function(a){return x.every(b,function(b){return x.contains(b,a)})})},x.difference=function(a){var b=i.apply(d,h.call(arguments,1));return x.filter(a,function(a){return!x.contains(b,a)})},x.zip=function(){for(var a=x.max(x.pluck(arguments,"length").concat(0)),b=new Array(a),c=0;a>c;c++)b[c]=x.pluck(arguments,""+c);return b},x.object=function(a,b){if(null==a)return{};for(var c={},d=0,e=a.length;e>d;d++)b?c[a[d]]=b[d]:c[a[d][0]]=a[d][1];return c},x.indexOf=function(a,b,c){if(null==a)return-1;var d=0,e=a.length;if(c){if("number"!=typeof c)return d=x.sortedIndex(a,b),a[d]===b?d:-1;d=0>c?Math.max(0,e+c):c}if(s&&a.indexOf===s)return a.indexOf(b,c);for(;e>d;d++)if(a[d]===b)return d;return-1},x.lastIndexOf=function(a,b,c){if(null==a)return-1;var d=null!=c;if(t&&a.lastIndexOf===t)return d?a.lastIndexOf(b,c):a.lastIndexOf(b);for(var e=d?c:a.length;e--;)if(a[e]===b)return e;return-1},x.range=function(a,b,c){arguments.length<=1&&(b=a||0,a=0),c=arguments[2]||1;for(var d=Math.max(Math.ceil((b-a)/c),0),e=0,f=new Array(d);d>e;)f[e++]=a,a+=c;return f};var E=function(){};x.bind=function(a,b){var c,d;if(w&&a.bind===w)return w.apply(a,h.call(arguments,1));if(!x.isFunction(a))throw new TypeError;return c=h.call(arguments,2),d=function(){if(!(this instanceof d))return a.apply(b,c.concat(h.call(arguments)));E.prototype=a.prototype;var e=new E;E.prototype=null;var f=a.apply(e,c.concat(h.call(arguments)));return Object(f)===f?f:e}},x.partial=function(a){var b=h.call(arguments,1);return function(){for(var c=0,d=b.slice(),e=0,f=d.length;f>e;e++)d[e]===x&&(d[e]=arguments[c++]);for(;c<arguments.length;)d.push(arguments[c++]);return a.apply(this,d)}},x.bindAll=function(a){var b=h.call(arguments,1);if(0===b.length)throw new Error("bindAll must be passed function names");return y(b,function(b){a[b]=x.bind(a[b],a)}),a},x.memoize=function(a,b){var c={};return b||(b=x.identity),function(){var d=b.apply(this,arguments);return x.has(c,d)?c[d]:c[d]=a.apply(this,arguments)}},x.delay=function(a,b){var c=h.call(arguments,2);return setTimeout(function(){return a.apply(null,c)},b)},x.defer=function(a){return x.delay.apply(x,[a,1].concat(h.call(arguments,1)))},x.throttle=function(a,b,c){var d,e,f,g=null,h=0;c||(c={});var i=function(){h=c.leading===!1?0:x.now(),g=null,f=a.apply(d,e),d=e=null};return function(){var j=x.now();h||c.leading!==!1||(h=j);var k=b-(j-h);return d=this,e=arguments,0>=k?(clearTimeout(g),g=null,h=j,f=a.apply(d,e),d=e=null):g||c.trailing===!1||(g=setTimeout(i,k)),f}},x.debounce=function(a,b,c){var d,e,f,g,h,i=function(){var j=x.now()-g;b>j?d=setTimeout(i,b-j):(d=null,c||(h=a.apply(f,e),f=e=null))};return function(){f=this,e=arguments,g=x.now();var j=c&&!d;return d||(d=setTimeout(i,b)),j&&(h=a.apply(f,e),f=e=null),h}},x.once=function(a){var b,c=!1;return function(){return c?b:(c=!0,b=a.apply(this,arguments),a=null,b)}},x.wrap=function(a,b){return x.partial(b,a)},x.compose=function(){var a=arguments;return function(){for(var b=arguments,c=a.length-1;c>=0;c--)b=[a[c].apply(this,b)];return b[0]}},x.after=function(a,b){return function(){return--a<1?b.apply(this,arguments):void 0}},x.keys=function(a){if(!x.isObject(a))return[];if(v)return v(a);var b=[];for(var c in a)x.has(a,c)&&b.push(c);return b},x.values=function(a){for(var b=x.keys(a),c=b.length,d=new Array(c),e=0;c>e;e++)d[e]=a[b[e]];return d},x.pairs=function(a){for(var b=x.keys(a),c=b.length,d=new Array(c),e=0;c>e;e++)d[e]=[b[e],a[b[e]]];return d},x.invert=function(a){for(var b={},c=x.keys(a),d=0,e=c.length;e>d;d++)b[a[c[d]]]=c[d];return b},x.functions=x.methods=function(a){var b=[];for(var c in a)x.isFunction(a[c])&&b.push(c);return b.sort()},x.extend=function(a){return y(h.call(arguments,1),function(b){if(b)for(var c in b)a[c]=b[c]}),a},x.pick=function(a){var b={},c=i.apply(d,h.call(arguments,1));return y(c,function(c){c in a&&(b[c]=a[c])}),b},x.omit=function(a){var b={},c=i.apply(d,h.call(arguments,1));for(var e in a)x.contains(c,e)||(b[e]=a[e]);return b},x.defaults=function(a){return y(h.call(arguments,1),function(b){if(b)for(var c in b)void 0===a[c]&&(a[c]=b[c])}),a},x.clone=function(a){return x.isObject(a)?x.isArray(a)?a.slice():x.extend({},a):a},x.tap=function(a,b){return b(a),a};var F=function(a,b,c,d){if(a===b)return 0!==a||1/a==1/b;if(null==a||null==b)return a===b;a instanceof x&&(a=a._wrapped),b instanceof x&&(b=b._wrapped);var e=j.call(a);if(e!=j.call(b))return!1;switch(e){case"[object String]":return a==String(b);case"[object Number]":return a!=+a?b!=+b:0==a?1/a==1/b:a==+b;case"[object Date]":case"[object Boolean]":return+a==+b;case"[object RegExp]":return a.source==b.source&&a.global==b.global&&a.multiline==b.multiline&&a.ignoreCase==b.ignoreCase}if("object"!=typeof a||"object"!=typeof b)return!1;for(var f=c.length;f--;)if(c[f]==a)return d[f]==b;var g=a.constructor,h=b.constructor;if(g!==h&&!(x.isFunction(g)&&g instanceof g&&x.isFunction(h)&&h instanceof h)&&"constructor"in a&&"constructor"in b)return!1;c.push(a),d.push(b);var i=0,k=!0;if("[object Array]"==e){if(i=a.length,k=i==b.length)for(;i--&&(k=F(a[i],b[i],c,d)););}else{for(var l in a)if(x.has(a,l)&&(i++,!(k=x.has(b,l)&&F(a[l],b[l],c,d))))break;if(k){for(l in b)if(x.has(b,l)&&!i--)break;k=!i}}return c.pop(),d.pop(),k};x.isEqual=function(a,b){return F(a,b,[],[])},x.isEmpty=function(a){if(null==a)return!0;if(x.isArray(a)||x.isString(a))return 0===a.length;for(var b in a)if(x.has(a,b))return!1;return!0},x.isElement=function(a){return!(!a||1!==a.nodeType)},x.isArray=u||function(a){return"[object Array]"==j.call(a)},x.isObject=function(a){return a===Object(a)},y(["Arguments","Function","String","Number","Date","RegExp"],function(a){x["is"+a]=function(b){return j.call(b)=="[object "+a+"]"}}),x.isArguments(arguments)||(x.isArguments=function(a){return!(!a||!x.has(a,"callee"))}),"function"!=typeof/./&&(x.isFunction=function(a){return"function"==typeof a}),x.isFinite=function(a){return isFinite(a)&&!isNaN(parseFloat(a))},x.isNaN=function(a){return x.isNumber(a)&&a!=+a},x.isBoolean=function(a){return a===!0||a===!1||"[object Boolean]"==j.call(a)},x.isNull=function(a){return null===a},x.isUndefined=function(a){return void 0===a},x.has=function(a,b){return k.call(a,b)},x.noConflict=function(){return a._=b,this},x.identity=function(a){return a},x.constant=function(a){return function(){return a}},x.property=function(a){return function(b){return b[a]}},x.matches=function(a){return function(b){if(b===a)return!0;for(var c in a)if(a[c]!==b[c])return!1;return!0}},x.times=function(a,b,c){for(var d=Array(Math.max(0,a)),e=0;a>e;e++)d[e]=b.call(c,e);return d},x.random=function(a,b){return null==b&&(b=a,a=0),a+Math.floor(Math.random()*(b-a+1))},x.now=Date.now||function(){return(new Date).getTime()};var G={escape:{"&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#x27;"}};G.unescape=x.invert(G.escape);var H={escape:new RegExp("["+x.keys(G.escape).join("")+"]","g"),unescape:new RegExp("("+x.keys(G.unescape).join("|")+")","g")};x.each(["escape","unescape"],function(a){x[a]=function(b){return null==b?"":(""+b).replace(H[a],function(b){return G[a][b]})}}),x.result=function(a,b){if(null==a)return void 0;var c=a[b];return x.isFunction(c)?c.call(a):c},x.mixin=function(a){y(x.functions(a),function(b){var c=x[b]=a[b];x.prototype[b]=function(){var a=[this._wrapped];return g.apply(a,arguments),M.call(this,c.apply(x,a))}})};var I=0;x.uniqueId=function(a){var b=++I+"";return a?a+b:b},x.templateSettings={evaluate:/<%([\s\S]+?)%>/g,interpolate:/<%=([\s\S]+?)%>/g,escape:/<%-([\s\S]+?)%>/g};var J=/(.)^/,K={"'":"'","\\":"\\","\r":"r","\n":"n","	":"t","\u2028":"u2028","\u2029":"u2029"},L=/\\|'|\r|\n|\t|\u2028|\u2029/g;x.template=function(a,b,c){var d;c=x.defaults({},c,x.templateSettings);var e=new RegExp([(c.escape||J).source,(c.interpolate||J).source,(c.evaluate||J).source].join("|")+"|$","g"),f=0,g="__p+='";a.replace(e,function(b,c,d,e,h){return g+=a.slice(f,h).replace(L,function(a){return"\\"+K[a]}),c&&(g+="'+\n((__t=("+c+"))==null?'':_.escape(__t))+\n'"),d&&(g+="'+\n((__t=("+d+"))==null?'':__t)+\n'"),e&&(g+="';\n"+e+"\n__p+='"),f=h+b.length,b}),g+="';\n",c.variable||(g="with(obj||{}){\n"+g+"}\n"),g="var __t,__p='',__j=Array.prototype.join,print=function(){__p+=__j.call(arguments,'');};\n"+g+"return __p;\n";try{d=new Function(c.variable||"obj","_",g)}catch(h){throw h.source=g,h}if(b)return d(b,x);var i=function(a){return d.call(this,a,x)};return i.source="function("+(c.variable||"obj")+"){\n"+g+"}",i},x.chain=function(a){return x(a).chain()};var M=function(a){return this._chain?x(a).chain():a};x.mixin(x),y(["pop","push","reverse","shift","sort","splice","unshift"],function(a){var b=d[a];x.prototype[a]=function(){var c=this._wrapped;return b.apply(c,arguments),"shift"!=a&&"splice"!=a||0!==c.length||delete c[0],M.call(this,c)}}),y(["concat","join","slice"],function(a){var b=d[a];x.prototype[a]=function(){return M.call(this,b.apply(this._wrapped,arguments))}}),x.extend(x.prototype,{chain:function(){return this._chain=!0,this},value:function(){return this._wrapped}}),"function"==typeof define&&define.amd&&define("underscore",[],function(){return x})}).call(this);;
!function(a,b){if("function"==typeof define&&define.amd)define(["underscore","jquery","exports"],function(c,d,e){a.Backbone=b(a,e,c,d)});else if("undefined"!=typeof exports){var c=require("underscore");b(a,exports,c)}else a.Backbone=b(a,{},a._,a.jQuery||a.Zepto||a.ender||a.$)}(this,function(a,b,c,d){{var e=a.Backbone,f=[],g=(f.push,f.slice);f.splice}b.VERSION="1.1.2",b.$=d,b.noConflict=function(){return a.Backbone=e,this},b.emulateHTTP=!1,b.emulateJSON=!1;var h=b.Events={on:function(a,b,c){if(!j(this,"on",a,[b,c])||!b)return this;this._events||(this._events={});var d=this._events[a]||(this._events[a]=[]);return d.push({callback:b,context:c,ctx:c||this}),this},once:function(a,b,d){if(!j(this,"once",a,[b,d])||!b)return this;var e=this,f=c.once(function(){e.off(a,f),b.apply(this,arguments)});return f._callback=b,this.on(a,f,d)},off:function(a,b,d){var e,f,g,h,i,k,l,m;if(!this._events||!j(this,"off",a,[b,d]))return this;if(!a&&!b&&!d)return this._events=void 0,this;for(h=a?[a]:c.keys(this._events),i=0,k=h.length;k>i;i++)if(a=h[i],g=this._events[a]){if(this._events[a]=e=[],b||d)for(l=0,m=g.length;m>l;l++)f=g[l],(b&&b!==f.callback&&b!==f.callback._callback||d&&d!==f.context)&&e.push(f);e.length||delete this._events[a]}return this},trigger:function(a){if(!this._events)return this;var b=g.call(arguments,1);if(!j(this,"trigger",a,b))return this;var c=this._events[a],d=this._events.all;return c&&k(c,b),d&&k(d,arguments),this},stopListening:function(a,b,d){var e=this._listeningTo;if(!e)return this;var f=!b&&!d;d||"object"!=typeof b||(d=this),a&&((e={})[a._listenId]=a);for(var g in e)a=e[g],a.off(b,d,this),(f||c.isEmpty(a._events))&&delete this._listeningTo[g];return this}},i=/\s+/,j=function(a,b,c,d){if(!c)return!0;if("object"==typeof c){for(var e in c)a[b].apply(a,[e,c[e]].concat(d));return!1}if(i.test(c)){for(var f=c.split(i),g=0,h=f.length;h>g;g++)a[b].apply(a,[f[g]].concat(d));return!1}return!0},k=function(a,b){var c,d=-1,e=a.length,f=b[0],g=b[1],h=b[2];switch(b.length){case 0:for(;++d<e;)(c=a[d]).callback.call(c.ctx);return;case 1:for(;++d<e;)(c=a[d]).callback.call(c.ctx,f);return;case 2:for(;++d<e;)(c=a[d]).callback.call(c.ctx,f,g);return;case 3:for(;++d<e;)(c=a[d]).callback.call(c.ctx,f,g,h);return;default:for(;++d<e;)(c=a[d]).callback.apply(c.ctx,b);return}},l={listenTo:"on",listenToOnce:"once"};c.each(l,function(a,b){h[b]=function(b,d,e){var f=this._listeningTo||(this._listeningTo={}),g=b._listenId||(b._listenId=c.uniqueId("l"));return f[g]=b,e||"object"!=typeof d||(e=this),b[a](d,e,this),this}}),h.bind=h.on,h.unbind=h.off,c.extend(b,h);var m=b.Model=function(a,b){var d=a||{};b||(b={}),this.cid=c.uniqueId("c"),this.attributes={},b.collection&&(this.collection=b.collection),b.parse&&(d=this.parse(d,b)||{}),d=c.defaults({},d,c.result(this,"defaults")),this.set(d,b),this.changed={},this.initialize.apply(this,arguments)};c.extend(m.prototype,h,{changed:null,validationError:null,idAttribute:"id",initialize:function(){},toJSON:function(){return c.clone(this.attributes)},sync:function(){return b.sync.apply(this,arguments)},get:function(a){return this.attributes[a]},escape:function(a){return c.escape(this.get(a))},has:function(a){return null!=this.get(a)},set:function(a,b,d){var e,f,g,h,i,j,k,l;if(null==a)return this;if("object"==typeof a?(f=a,d=b):(f={})[a]=b,d||(d={}),!this._validate(f,d))return!1;g=d.unset,i=d.silent,h=[],j=this._changing,this._changing=!0,j||(this._previousAttributes=c.clone(this.attributes),this.changed={}),l=this.attributes,k=this._previousAttributes,this.idAttribute in f&&(this.id=f[this.idAttribute]);for(e in f)b=f[e],c.isEqual(l[e],b)||h.push(e),c.isEqual(k[e],b)?delete this.changed[e]:this.changed[e]=b,g?delete l[e]:l[e]=b;if(!i){h.length&&(this._pending=d);for(var m=0,n=h.length;n>m;m++)this.trigger("change:"+h[m],this,l[h[m]],d)}if(j)return this;if(!i)for(;this._pending;)d=this._pending,this._pending=!1,this.trigger("change",this,d);return this._pending=!1,this._changing=!1,this},unset:function(a,b){return this.set(a,void 0,c.extend({},b,{unset:!0}))},clear:function(a){var b={};for(var d in this.attributes)b[d]=void 0;return this.set(b,c.extend({},a,{unset:!0}))},hasChanged:function(a){return null==a?!c.isEmpty(this.changed):c.has(this.changed,a)},changedAttributes:function(a){if(!a)return this.hasChanged()?c.clone(this.changed):!1;var b,d=!1,e=this._changing?this._previousAttributes:this.attributes;for(var f in a)c.isEqual(e[f],b=a[f])||((d||(d={}))[f]=b);return d},previous:function(a){return null!=a&&this._previousAttributes?this._previousAttributes[a]:null},previousAttributes:function(){return c.clone(this._previousAttributes)},fetch:function(a){a=a?c.clone(a):{},void 0===a.parse&&(a.parse=!0);var b=this,d=a.success;return a.success=function(c){return b.set(b.parse(c,a),a)?(d&&d(b,c,a),void b.trigger("sync",b,c,a)):!1},L(this,a),this.sync("read",this,a)},save:function(a,b,d){var e,f,g,h=this.attributes;if(null==a||"object"==typeof a?(e=a,d=b):(e={})[a]=b,d=c.extend({validate:!0},d),e&&!d.wait){if(!this.set(e,d))return!1}else if(!this._validate(e,d))return!1;e&&d.wait&&(this.attributes=c.extend({},h,e)),void 0===d.parse&&(d.parse=!0);var i=this,j=d.success;return d.success=function(a){i.attributes=h;var b=i.parse(a,d);return d.wait&&(b=c.extend(e||{},b)),c.isObject(b)&&!i.set(b,d)?!1:(j&&j(i,a,d),void i.trigger("sync",i,a,d))},L(this,d),f=this.isNew()?"create":d.patch?"patch":"update","patch"===f&&(d.attrs=e),g=this.sync(f,this,d),e&&d.wait&&(this.attributes=h),g},destroy:function(a){a=a?c.clone(a):{};var b=this,d=a.success,e=function(){b.trigger("destroy",b,b.collection,a)};if(a.success=function(c){(a.wait||b.isNew())&&e(),d&&d(b,c,a),b.isNew()||b.trigger("sync",b,c,a)},this.isNew())return a.success(),!1;L(this,a);var f=this.sync("delete",this,a);return a.wait||e(),f},url:function(){var a=c.result(this,"urlRoot")||c.result(this.collection,"url")||K();return this.isNew()?a:a.replace(/([^\/])$/,"$1/")+encodeURIComponent(this.id)},parse:function(a){return a},clone:function(){return new this.constructor(this.attributes)},isNew:function(){return!this.has(this.idAttribute)},isValid:function(a){return this._validate({},c.extend(a||{},{validate:!0}))},_validate:function(a,b){if(!b.validate||!this.validate)return!0;a=c.extend({},this.attributes,a);var d=this.validationError=this.validate(a,b)||null;return d?(this.trigger("invalid",this,d,c.extend(b,{validationError:d})),!1):!0}});var n=["keys","values","pairs","invert","pick","omit"];c.each(n,function(a){m.prototype[a]=function(){var b=g.call(arguments);return b.unshift(this.attributes),c[a].apply(c,b)}});var o=b.Collection=function(a,b){b||(b={}),b.model&&(this.model=b.model),void 0!==b.comparator&&(this.comparator=b.comparator),this._reset(),this.initialize.apply(this,arguments),a&&this.reset(a,c.extend({silent:!0},b))},p={add:!0,remove:!0,merge:!0},q={add:!0,remove:!1};c.extend(o.prototype,h,{model:m,initialize:function(){},toJSON:function(a){return this.map(function(b){return b.toJSON(a)})},sync:function(){return b.sync.apply(this,arguments)},add:function(a,b){return this.set(a,c.extend({merge:!1},b,q))},remove:function(a,b){var d=!c.isArray(a);a=d?[a]:c.clone(a),b||(b={});var e,f,g,h;for(e=0,f=a.length;f>e;e++)h=a[e]=this.get(a[e]),h&&(delete this._byId[h.id],delete this._byId[h.cid],g=this.indexOf(h),this.models.splice(g,1),this.length--,b.silent||(b.index=g,h.trigger("remove",h,this,b)),this._removeReference(h,b));return d?a[0]:a},set:function(a,b){b=c.defaults({},b,p),b.parse&&(a=this.parse(a,b));var d=!c.isArray(a);a=d?a?[a]:[]:c.clone(a);var e,f,g,h,i,j,k,l=b.at,n=this.model,o=this.comparator&&null==l&&b.sort!==!1,q=c.isString(this.comparator)?this.comparator:null,r=[],s=[],t={},u=b.add,v=b.merge,w=b.remove,x=!o&&u&&w?[]:!1;for(e=0,f=a.length;f>e;e++){if(i=a[e]||{},g=i instanceof m?h=i:i[n.prototype.idAttribute||"id"],j=this.get(g))w&&(t[j.cid]=!0),v&&(i=i===h?h.attributes:i,b.parse&&(i=j.parse(i,b)),j.set(i,b),o&&!k&&j.hasChanged(q)&&(k=!0)),a[e]=j;else if(u){if(h=a[e]=this._prepareModel(i,b),!h)continue;r.push(h),this._addReference(h,b)}h=j||h,!x||!h.isNew()&&t[h.id]||x.push(h),t[h.id]=!0}if(w){for(e=0,f=this.length;f>e;++e)t[(h=this.models[e]).cid]||s.push(h);s.length&&this.remove(s,b)}if(r.length||x&&x.length)if(o&&(k=!0),this.length+=r.length,null!=l)for(e=0,f=r.length;f>e;e++)this.models.splice(l+e,0,r[e]);else{x&&(this.models.length=0);var y=x||r;for(e=0,f=y.length;f>e;e++)this.models.push(y[e])}if(k&&this.sort({silent:!0}),!b.silent){for(e=0,f=r.length;f>e;e++)(h=r[e]).trigger("add",h,this,b);(k||x&&x.length)&&this.trigger("sort",this,b)}return d?a[0]:a},reset:function(a,b){b||(b={});for(var d=0,e=this.models.length;e>d;d++)this._removeReference(this.models[d],b);return b.previousModels=this.models,this._reset(),a=this.add(a,c.extend({silent:!0},b)),b.silent||this.trigger("reset",this,b),a},push:function(a,b){return this.add(a,c.extend({at:this.length},b))},pop:function(a){var b=this.at(this.length-1);return this.remove(b,a),b},unshift:function(a,b){return this.add(a,c.extend({at:0},b))},shift:function(a){var b=this.at(0);return this.remove(b,a),b},slice:function(){return g.apply(this.models,arguments)},get:function(a){return null==a?void 0:this._byId[a]||this._byId[a.id]||this._byId[a.cid]},at:function(a){return this.models[a]},where:function(a,b){return c.isEmpty(a)?b?void 0:[]:this[b?"find":"filter"](function(b){for(var c in a)if(a[c]!==b.get(c))return!1;return!0})},findWhere:function(a){return this.where(a,!0)},sort:function(a){if(!this.comparator)throw new Error("Cannot sort a set without a comparator");return a||(a={}),c.isString(this.comparator)||1===this.comparator.length?this.models=this.sortBy(this.comparator,this):this.models.sort(c.bind(this.comparator,this)),a.silent||this.trigger("sort",this,a),this},pluck:function(a){return c.invoke(this.models,"get",a)},fetch:function(a){a=a?c.clone(a):{},void 0===a.parse&&(a.parse=!0);var b=a.success,d=this;return a.success=function(c){var e=a.reset?"reset":"set";d[e](c,a),b&&b(d,c,a),d.trigger("sync",d,c,a)},L(this,a),this.sync("read",this,a)},create:function(a,b){if(b=b?c.clone(b):{},!(a=this._prepareModel(a,b)))return!1;b.wait||this.add(a,b);var d=this,e=b.success;return b.success=function(a,c){b.wait&&d.add(a,b),e&&e(a,c,b)},a.save(null,b),a},parse:function(a){return a},clone:function(){return new this.constructor(this.models)},_reset:function(){this.length=0,this.models=[],this._byId={}},_prepareModel:function(a,b){if(a instanceof m)return a;b=b?c.clone(b):{},b.collection=this;var d=new this.model(a,b);return d.validationError?(this.trigger("invalid",this,d.validationError,b),!1):d},_addReference:function(a){this._byId[a.cid]=a,null!=a.id&&(this._byId[a.id]=a),a.collection||(a.collection=this),a.on("all",this._onModelEvent,this)},_removeReference:function(a){this===a.collection&&delete a.collection,a.off("all",this._onModelEvent,this)},_onModelEvent:function(a,b,c,d){("add"!==a&&"remove"!==a||c===this)&&("destroy"===a&&this.remove(b,d),b&&a==="change:"+b.idAttribute&&(delete this._byId[b.previous(b.idAttribute)],null!=b.id&&(this._byId[b.id]=b)),this.trigger.apply(this,arguments))}});var r=["forEach","each","map","collect","reduce","foldl","inject","reduceRight","foldr","find","detect","filter","select","reject","every","all","some","any","include","contains","invoke","max","min","toArray","size","first","head","take","initial","rest","tail","drop","last","without","difference","indexOf","shuffle","lastIndexOf","isEmpty","chain","sample"];c.each(r,function(a){o.prototype[a]=function(){var b=g.call(arguments);return b.unshift(this.models),c[a].apply(c,b)}});var s=["groupBy","countBy","sortBy","indexBy"];c.each(s,function(a){o.prototype[a]=function(b,d){var e=c.isFunction(b)?b:function(a){return a.get(b)};return c[a](this.models,e,d)}});var t=b.View=function(a){this.cid=c.uniqueId("view"),a||(a={}),c.extend(this,c.pick(a,v)),this._ensureElement(),this.initialize.apply(this,arguments),this.delegateEvents()},u=/^(\S+)\s*(.*)$/,v=["model","collection","el","id","attributes","className","tagName","events"];c.extend(t.prototype,h,{tagName:"div",$:function(a){return this.$el.find(a)},initialize:function(){},render:function(){return this},remove:function(){return this.$el.remove(),this.stopListening(),this},setElement:function(a,c){return this.$el&&this.undelegateEvents(),this.$el=a instanceof b.$?a:b.$(a),this.el=this.$el[0],c!==!1&&this.delegateEvents(),this},delegateEvents:function(a){if(!a&&!(a=c.result(this,"events")))return this;this.undelegateEvents();for(var b in a){var d=a[b];if(c.isFunction(d)||(d=this[a[b]]),d){var e=b.match(u),f=e[1],g=e[2];d=c.bind(d,this),f+=".delegateEvents"+this.cid,""===g?this.$el.on(f,d):this.$el.on(f,g,d)}}return this},undelegateEvents:function(){return this.$el.off(".delegateEvents"+this.cid),this},_ensureElement:function(){if(this.el)this.setElement(c.result(this,"el"),!1);else{var a=c.extend({},c.result(this,"attributes"));this.id&&(a.id=c.result(this,"id")),this.className&&(a["class"]=c.result(this,"className"));var d=b.$("<"+c.result(this,"tagName")+">").attr(a);this.setElement(d,!1)}}}),b.sync=function(a,d,e){var f=x[a];c.defaults(e||(e={}),{emulateHTTP:b.emulateHTTP,emulateJSON:b.emulateJSON});var g={type:f,dataType:"json"};if(e.url||(g.url=c.result(d,"url")||K()),null!=e.data||!d||"create"!==a&&"update"!==a&&"patch"!==a||(g.contentType="application/json",g.data=JSON.stringify(e.attrs||d.toJSON(e))),e.emulateJSON&&(g.contentType="application/x-www-form-urlencoded",g.data=g.data?{model:g.data}:{}),e.emulateHTTP&&("PUT"===f||"DELETE"===f||"PATCH"===f)){g.type="POST",e.emulateJSON&&(g.data._method=f);var h=e.beforeSend;e.beforeSend=function(a){return a.setRequestHeader("X-HTTP-Method-Override",f),h?h.apply(this,arguments):void 0}}"GET"===g.type||e.emulateJSON||(g.processData=!1),"PATCH"===g.type&&w&&(g.xhr=function(){return new ActiveXObject("Microsoft.XMLHTTP")});var i=e.xhr=b.ajax(c.extend(g,e));return d.trigger("request",d,i,e),i};var w=!("undefined"==typeof window||!window.ActiveXObject||window.XMLHttpRequest&&(new XMLHttpRequest).dispatchEvent),x={create:"POST",update:"PUT",patch:"PATCH","delete":"DELETE",read:"GET"};b.ajax=function(){return b.$.ajax.apply(b.$,arguments)};var y=b.Router=function(a){a||(a={}),a.routes&&(this.routes=a.routes),this._bindRoutes(),this.initialize.apply(this,arguments)},z=/\((.*?)\)/g,A=/(\(\?)?:\w+/g,B=/\*\w+/g,C=/[\-{}\[\]+?.,\\\^$|#\s]/g;c.extend(y.prototype,h,{initialize:function(){},route:function(a,d,e){c.isRegExp(a)||(a=this._routeToRegExp(a)),c.isFunction(d)&&(e=d,d=""),e||(e=this[d]);var f=this;return b.history.route(a,function(c){var g=f._extractParameters(a,c);f.execute(e,g),f.trigger.apply(f,["route:"+d].concat(g)),f.trigger("route",d,g),b.history.trigger("route",f,d,g)}),this},execute:function(a,b){a&&a.apply(this,b)},navigate:function(a,c){return b.history.navigate(a,c),this},_bindRoutes:function(){if(this.routes){this.routes=c.result(this,"routes");for(var a,b=c.keys(this.routes);null!=(a=b.pop());)this.route(a,this.routes[a])}},_routeToRegExp:function(a){return a=a.replace(C,"\\$&").replace(z,"(?:$1)?").replace(A,function(a,b){return b?a:"([^/?]+)"}).replace(B,"([^?]*?)"),new RegExp("^"+a+"(?:\\?([\\s\\S]*))?$")},_extractParameters:function(a,b){var d=a.exec(b).slice(1);return c.map(d,function(a,b){return b===d.length-1?a||null:a?decodeURIComponent(a):null})}});var D=b.History=function(){this.handlers=[],c.bindAll(this,"checkUrl"),"undefined"!=typeof window&&(this.location=window.location,this.history=window.history)},E=/^[#\/]|\s+$/g,F=/^\/+|\/+$/g,G=/msie [\w.]+/,H=/\/$/,I=/#.*$/;D.started=!1,c.extend(D.prototype,h,{interval:50,atRoot:function(){return this.location.pathname.replace(/[^\/]$/,"$&/")===this.root},getHash:function(a){var b=(a||this).location.href.match(/#(.*)$/);return b?b[1]:""},getFragment:function(a,b){if(null==a)if(this._hasPushState||!this._wantsHashChange||b){a=decodeURI(this.location.pathname+this.location.search);var c=this.root.replace(H,"");a.indexOf(c)||(a=a.slice(c.length))}else a=this.getHash();return a.replace(E,"")},start:function(a){if(D.started)throw new Error("Backbone.history has already been started");D.started=!0,this.options=c.extend({root:"/"},this.options,a),this.root=this.options.root,this._wantsHashChange=this.options.hashChange!==!1,this._wantsPushState=!!this.options.pushState,this._hasPushState=!!(this.options.pushState&&this.history&&this.history.pushState);var d=this.getFragment(),e=document.documentMode,f=G.exec(navigator.userAgent.toLowerCase())&&(!e||7>=e);if(this.root=("/"+this.root+"/").replace(F,"/"),f&&this._wantsHashChange){var g=b.$('<iframe src="javascript:0" tabindex="-1">');this.iframe=g.hide().appendTo("body")[0].contentWindow,this.navigate(d)}this._hasPushState?b.$(window).on("popstate",this.checkUrl):this._wantsHashChange&&"onhashchange"in window&&!f?b.$(window).on("hashchange",this.checkUrl):this._wantsHashChange&&(this._checkUrlInterval=setInterval(this.checkUrl,this.interval)),this.fragment=d;var h=this.location;if(this._wantsHashChange&&this._wantsPushState){if(!this._hasPushState&&!this.atRoot())return this.fragment=this.getFragment(null,!0),this.location.replace(this.root+"#"+this.fragment),!0;this._hasPushState&&this.atRoot()&&h.hash&&(this.fragment=this.getHash().replace(E,""),this.history.replaceState({},document.title,this.root+this.fragment))}return this.options.silent?void 0:this.loadUrl()},stop:function(){b.$(window).off("popstate",this.checkUrl).off("hashchange",this.checkUrl),this._checkUrlInterval&&clearInterval(this._checkUrlInterval),D.started=!1},route:function(a,b){this.handlers.unshift({route:a,callback:b})},checkUrl:function(){var a=this.getFragment();return a===this.fragment&&this.iframe&&(a=this.getFragment(this.getHash(this.iframe))),a===this.fragment?!1:(this.iframe&&this.navigate(a),void this.loadUrl())},loadUrl:function(a){return a=this.fragment=this.getFragment(a),c.any(this.handlers,function(b){return b.route.test(a)?(b.callback(a),!0):void 0})},navigate:function(a,b){if(!D.started)return!1;b&&b!==!0||(b={trigger:!!b});var c=this.root+(a=this.getFragment(a||""));if(a=a.replace(I,""),this.fragment!==a){if(this.fragment=a,""===a&&"/"!==c&&(c=c.slice(0,-1)),this._hasPushState)this.history[b.replace?"replaceState":"pushState"]({},document.title,c);else{if(!this._wantsHashChange)return this.location.assign(c);this._updateHash(this.location,a,b.replace),this.iframe&&a!==this.getFragment(this.getHash(this.iframe))&&(b.replace||this.iframe.document.open().close(),this._updateHash(this.iframe.location,a,b.replace))}return b.trigger?this.loadUrl(a):void 0}},_updateHash:function(a,b,c){if(c){var d=a.href.replace(/(javascript:|#).*$/,"");a.replace(d+"#"+b)}else a.hash="#"+b}}),b.history=new D;var J=function(a,b){var d,e=this;d=a&&c.has(a,"constructor")?a.constructor:function(){return e.apply(this,arguments)},c.extend(d,e,b);var f=function(){this.constructor=d};return f.prototype=e.prototype,d.prototype=new f,a&&c.extend(d.prototype,a),d.__super__=e.prototype,d};m.extend=o.extend=y.extend=t.extend=D.extend=J;var K=function(){throw new Error('A "url" property or function must be specified')},L=function(a,b){var c=b.error;b.error=function(d){c&&c(a,d,b),a.trigger("error",a,d,b)}};return b});;
/*!
 * mustache.js - Logic-less {{mustache}} templates with JavaScript
 * http://github.com/janl/mustache.js
 */
var Mustache = (typeof module !== "undefined" && module.exports) || {};

(function (exports) {

  exports.name = "mustache.js";
  exports.version = "0.5.0-dev";
  exports.tags = ["{{", "}}"];
  exports.parse = parse;
  exports.compile = compile;
  exports.render = render;
  exports.clearCache = clearCache;

  // This is here for backwards compatibility with 0.4.x.
  exports.to_html = function (template, view, partials, send) {
    var result = render(template, view, partials);

    if (typeof send === "function") {
      send(result);
    } else {
      return result;
    }
  };

  var _toString = Object.prototype.toString;
  var _isArray = Array.isArray;
  var _forEach = Array.prototype.forEach;
  var _trim = String.prototype.trim;

  var isArray;
  if (_isArray) {
    isArray = _isArray;
  } else {
    isArray = function (obj) {
      return _toString.call(obj) === "[object Array]";
    };
  }

  var forEach;
  if (_forEach) {
    forEach = function (obj, callback, scope) {
      return _forEach.call(obj, callback, scope);
    };
  } else {
    forEach = function (obj, callback, scope) {
      for (var i = 0, len = obj.length; i < len; ++i) {
        callback.call(scope, obj[i], i, obj);
      }
    };
  }

  var spaceRe = /^\s*$/;

  function isWhitespace(string) {
    return spaceRe.test(string);
  }

  var trim;
  if (_trim) {
    trim = function (string) {
      return string == null ? "" : _trim.call(string);
    };
  } else {
    var trimLeft, trimRight;

    if (isWhitespace("\xA0")) {
      trimLeft = /^\s+/;
      trimRight = /\s+$/;
    } else {
      trimLeft = /^[\s\xA0]+/;
      trimRight = /[\s\xA0]+$/;
    }

    trim = function (string) {
      return string == null ? "" :
        String(string).replace(trimLeft, "").replace(trimRight, "");
    };
  }

  var escapeMap = {
    "&": "&amp;",
    "<": "&lt;",
    ">": "&gt;",
    '"': '&quot;',
    "'": '&#39;'
  };

  function escapeHTML(string) {
    return String(string).replace(/&(?!\w+;)|[<>"']/g, function (s) {
      return escapeMap[s] || s;
    });
  }

  /**
   * Adds the `template`, `line`, and `file` properties to the given error
   * object and alters the message to provide more useful debugging information.
   */
  function debug(e, template, line, file) {
    file = file || "<template>";

    var lines = template.split("\n"),
        start = Math.max(line - 3, 0),
        end = Math.min(lines.length, line + 3),
        context = lines.slice(start, end);

    var c;
    for (var i = 0, len = context.length; i < len; ++i) {
      c = i + start + 1;
      context[i] = (c === line ? " >> " : "    ") + context[i];
    }

    e.template = template;
    e.line = line;
    e.file = file;
    e.message = [file + ":" + line, context.join("\n"), "", e.message].join("\n");

    return e;
  }

  /**
   * Looks up the value of the given `name` in the given context `stack`.
   */
  function lookup(name, stack, defaultValue) {
    if (name === ".") {
      return stack[stack.length - 1];
    }

    var names = name.split(".");
    var lastIndex = names.length - 1;
    var target = names[lastIndex];

    var value, context, i = stack.length, j, localStack;
    while (i) {
      localStack = stack.slice(0);
      context = stack[--i];

      j = 0;
      while (j < lastIndex) {
        context = context[names[j++]];

        if (context == null) {
          break;
        }

        localStack.push(context);
      }

      if (context && typeof context === "object" && target in context) {
        value = context[target];
        break;
      }
    }

    // If the value is a function, call it in the current context.
    if (typeof value === "function") {
      value = value.call(localStack[localStack.length - 1]);
    }

    if (value == null)  {
      return defaultValue;
    }

    return value;
  }

  function renderSection(name, stack, callback, inverted) {
    var buffer = "";
    var value =  lookup(name, stack);

    if (inverted) {
      // From the spec: inverted sections may render text once based on the
      // inverse value of the key. That is, they will be rendered if the key
      // doesn't exist, is false, or is an empty list.
      if (value == null || value === false || (isArray(value) && value.length === 0)) {
        buffer += callback();
      }
    } else if (isArray(value)) {
      forEach(value, function (value) {
        stack.push(value);
        buffer += callback();
        stack.pop();
      });
    } else if (typeof value === "object") {
      stack.push(value);
      buffer += callback();
      stack.pop();
    } else if (typeof value === "function") {
      var scope = stack[stack.length - 1];
      var scopedRender = function (template) {
        return render(template, scope);
      };
      buffer += value.call(scope, callback(), scopedRender) || "";
    } else if (value) {
      buffer += callback();
    }

    return buffer;
  }

  /**
   * Parses the given `template` and returns the source of a function that,
   * with the proper arguments, will render the template. Recognized options
   * include the following:
   *
   *   - file     The name of the file the template comes from (displayed in
   *              error messages)
   *   - tags     An array of open and close tags the `template` uses. Defaults
   *              to the value of Mustache.tags
   *   - debug    Set `true` to log the body of the generated function to the
   *              console
   *   - space    Set `true` to preserve whitespace from lines that otherwise
   *              contain only a {{tag}}. Defaults to `false`
   */
  function parse(template, options) {
    options = options || {};

    var tags = options.tags || exports.tags,
        openTag = tags[0],
        closeTag = tags[tags.length - 1];

    var code = [
      'var buffer = "";', // output buffer
      "\nvar line = 1;", // keep track of source line number
      "\ntry {",
      '\nbuffer += "'
    ];

    var spaces = [],      // indices of whitespace in code on the current line
        hasTag = false,   // is there a {{tag}} on the current line?
        nonSpace = false; // is there a non-space char on the current line?

    // Strips all space characters from the code array for the current line
    // if there was a {{tag}} on it and otherwise only spaces.
    var stripSpace = function () {
      if (hasTag && !nonSpace && !options.space) {
        while (spaces.length) {
          code.splice(spaces.pop(), 1);
        }
      } else {
        spaces = [];
      }

      hasTag = false;
      nonSpace = false;
    };

    var sectionStack = [], updateLine, nextOpenTag, nextCloseTag;

    var setTags = function (source) {
      tags = trim(source).split(/\s+/);
      nextOpenTag = tags[0];
      nextCloseTag = tags[tags.length - 1];
    };

    var includePartial = function (source) {
      code.push(
        '";',
        updateLine,
        '\nvar partial = partials["' + trim(source) + '"];',
        '\nif (partial) {',
        '\n  buffer += render(partial,stack[stack.length - 1],partials);',
        '\n}',
        '\nbuffer += "'
      );
    };

    var openSection = function (source, inverted) {
      var name = trim(source);

      if (name === "") {
        throw debug(new Error("Section name may not be empty"), template, line, options.file);
      }

      sectionStack.push({name: name, inverted: inverted});

      code.push(
        '";',
        updateLine,
        '\nvar name = "' + name + '";',
        '\nvar callback = (function () {',
        '\n  return function () {',
        '\n    var buffer = "";',
        '\nbuffer += "'
      );
    };

    var openInvertedSection = function (source) {
      openSection(source, true);
    };

    var closeSection = function (source) {
      var name = trim(source);
      var openName = sectionStack.length != 0 && sectionStack[sectionStack.length - 1].name;

      if (!openName || name != openName) {
        throw debug(new Error('Section named "' + name + '" was never opened'), template, line, options.file);
      }

      var section = sectionStack.pop();

      code.push(
        '";',
        '\n    return buffer;',
        '\n  };',
        '\n})();'
      );

      if (section.inverted) {
        code.push("\nbuffer += renderSection(name,stack,callback,true);");
      } else {
        code.push("\nbuffer += renderSection(name,stack,callback);");
      }

      code.push('\nbuffer += "');
    };

    var sendPlain = function (source) {
      code.push(
        '";',
        updateLine,
        '\nbuffer += lookup("' + trim(source) + '",stack,"");',
        '\nbuffer += "'
      );
    };

    var sendEscaped = function (source) {
      code.push(
        '";',
        updateLine,
        '\nbuffer += escapeHTML(lookup("' + trim(source) + '",stack,""));',
        '\nbuffer += "'
      );
    };

    var line = 1, c, callback;
    for (var i = 0, len = template.length; i < len; ++i) {
      if (template.slice(i, i + openTag.length) === openTag) {
        i += openTag.length;
        c = template.substr(i, 1);
        updateLine = '\nline = ' + line + ';';
        nextOpenTag = openTag;
        nextCloseTag = closeTag;
        hasTag = true;

        switch (c) {
        case "!": // comment
          i++;
          callback = null;
          break;
        case "=": // change open/close tags, e.g. {{=<% %>=}}
          i++;
          closeTag = "=" + closeTag;
          callback = setTags;
          break;
        case ">": // include partial
          i++;
          callback = includePartial;
          break;
        case "#": // start section
          i++;
          callback = openSection;
          break;
        case "^": // start inverted section
          i++;
          callback = openInvertedSection;
          break;
        case "/": // end section
          i++;
          callback = closeSection;
          break;
        case "{": // plain variable
          closeTag = "}" + closeTag;
          // fall through
        case "&": // plain variable
          i++;
          nonSpace = true;
          callback = sendPlain;
          break;
        default: // escaped variable
          nonSpace = true;
          callback = sendEscaped;
        }

        var end = template.indexOf(closeTag, i);

        if (end === -1) {
          throw debug(new Error('Tag "' + openTag + '" was not closed properly'), template, line, options.file);
        }

        var source = template.substring(i, end);

        if (callback) {
          callback(source);
        }

        // Maintain line count for \n in source.
        var n = 0;
        while (~(n = source.indexOf("\n", n))) {
          line++;
          n++;
        }

        i = end + closeTag.length - 1;
        openTag = nextOpenTag;
        closeTag = nextCloseTag;
      } else {
        c = template.substr(i, 1);

        switch (c) {
        case '"':
        case "\\":
          nonSpace = true;
          code.push("\\" + c);
          break;
        case "\r":
          // Ignore carriage returns.
          break;
        case "\n":
          spaces.push(code.length);
          code.push("\\n");
          stripSpace(); // Check for whitespace on the current line.
          line++;
          break;
        default:
          if (isWhitespace(c)) {
            spaces.push(code.length);
          } else {
            nonSpace = true;
          }

          code.push(c);
        }
      }
    }

    if (sectionStack.length != 0) {
      throw debug(new Error('Section "' + sectionStack[sectionStack.length - 1].name + '" was not closed properly'), template, line, options.file);
    }

    // Clean up any whitespace from a closing {{tag}} that was at the end
    // of the template without a trailing \n.
    stripSpace();

    code.push(
      '";',
      "\nreturn buffer;",
      "\n} catch (e) { throw {error: e, line: line}; }"
    );

    // Ignore `buffer += "";` statements.
    var body = code.join("").replace(/buffer \+= "";\n/g, "");

    if (options.debug) {
      if (typeof console != "undefined" && console.log) {
        console.log(body);
      } else if (typeof print === "function") {
        print(body);
      }
    }

    return body;
  }

  /**
   * Used by `compile` to generate a reusable function for the given `template`.
   */
  function _compile(template, options) {
    var args = "view,partials,stack,lookup,escapeHTML,renderSection,render";
    var body = parse(template, options);
    var fn = new Function(args, body);

    // This anonymous function wraps the generated function so we can do
    // argument coercion, setup some variables, and handle any errors
    // encountered while executing it.
    return function (view, partials) {
      partials = partials || {};

      var stack = [view]; // context stack

      try {
        return fn(view, partials, stack, lookup, escapeHTML, renderSection, render);
      } catch (e) {
        throw debug(e.error, template, e.line, options.file);
      }
    };
  }

  // Cache of pre-compiled templates.
  var _cache = {};

  /**
   * Clear the cache of compiled templates.
   */
  function clearCache() {
    _cache = {};
  }

  /**
   * Compiles the given `template` into a reusable function using the given
   * `options`. In addition to the options accepted by Mustache.parse,
   * recognized options include the following:
   *
   *   - cache    Set `false` to bypass any pre-compiled version of the given
   *              template. Otherwise, a given `template` string will be cached
   *              the first time it is parsed
   */
  function compile(template, options) {
    options = options || {};

    // Use a pre-compiled version from the cache if we have one.
    if (options.cache !== false) {
      if (!_cache[template]) {
        _cache[template] = _compile(template, options);
      }

      return _cache[template];
    }

    return _compile(template, options);
  }

  /**
   * High-level function that renders the given `template` using the given
   * `view` and `partials`. If you need to use any of the template options (see
   * `compile` above), you must compile in a separate step, and then call that
   * compiled function.
   */
  function render(template, view, partials) {
    return compile(template)(view, partials);
  }

})(Mustache);
;
/* Common front-end code for the Notifications system
 *	- wpNotesCommon wraps all the proxied REST calls
 *	- wpNoteModel & wpNoteList are Backbone.js Model, & Collection implementations
 */

var wpNotesCommon;
var wpNotesCommentModView;
var wpNoteList;
var wpNoteModel;

(function($){
	var cookies = document.cookie.split( /;\s*/ ), cookie = false;
	for ( i = 0; i < cookies.length; i++ ) {
		if ( cookies[i].match( /^wp_api=/ ) ) {
			cookies = cookies[i].split( '=' );
			cookie = cookies[1];
			break;
		}
	}

	wpNotesCommon = {
		jsonAPIbase: 'https://public-api.wordpress.com/rest/v1',
		hasUpgradedProxy: false,

		noteTypes: {
			comment: 'comment',
			follow: 'follow',
			like: [
				'like',
				'like_trap'
			],
			reblog: 'reblog',
			trophy: [
				'best_liked_day_feat',
				'like_milestone_achievement',
				'achieve_automattician_note',
				'achieve_user_anniversary',
				'best_followed_day_feat',
				'followed_milestone_achievement'
			],
			'alert': [
				'expired_domain_alert'
			]
		},

		noteType2Noticon: {
			'like': 'like',
			'follow': 'follow',
			'comment_like': 'like',
			'comment': 'comment',
			'comment_pingback': 'external',
			'reblog': 'reblog',
			'like_milestone_achievement': 'trophy',
			'achieve_followed_milestone_note': 'trophy',
			'achieve_user_anniversary': 'trophy',
			'best_liked_day_feat': 'milestone',
			'best_followed_day_feat': 'milestone',
			'automattician_achievement': 'trophy',
			'expired_domain_alert': 'alert',
			'automattcher': 'atsign'
		},
	
		createNoteContainer: function( note, id_prefix ) {
			var note_container = $('<div/>', {
				id : id_prefix + '-note-' + note.id,
				'class' : 'wpn-note wpn-' + note.type + ' ' + ( ( note.unread > 0 ) ? 'wpn-unread' : 'wpn-read' )
			}).data( {
				id: parseInt( note.id, 10 ),
				type: note.type
			});
			var note_body = $('<div/>', { "class":"wpn-note-body wpn-note-body-empty" } );
			var spinner = $( '<div/>', { style : 'position: absolute; left: 180px; top: 60px;' } );
			note_body.append( spinner );
			spinner.spin( 'medium' );
			note_container.append(
				this.createNoteSubject( note ),
				note_body
			);
	
			return note_container;
		},
	
		createNoteSubject: function( note ) {
			var subj = $('<div/>', { "class":"wpn-note-summary" } ).append(
				$('<span/>', {
					"class" : 'wpn-noticon noticon noticon' + note.noticon
				}),
				$('<span/>', {
					"class" : 'wpn-icon no-grav',
						html : $('<img/>', {
							src : note.subject.icon,
							width : '24px',
							height : '24px',
							style : 'display: inline-block; width: 24px; height: 24px; overflow-x: hidden; overflow-y: hidden;'
						})
				}),
				$('<span/>', {
					"class" : 'wpn-subject',
					html : note.subject.html
				})
			);
			return subj;
		},
	
	
		createNoteBody: function( note_model ) {
			var note_body = $('<div/>', { "class":"wpn-note-body" } );
			var note = note_model.toJSON();
			var class_prefix = 'wpn-' + note.body.template;
			switch( note.body.template ) {
				case 'single-line-list' :
				case 'multi-line-list' :
					note_body.append( 
						$( '<p/>' ).addClass( class_prefix + '-header' ).html( note.body.header )
					);

					for ( var i in note.body.items ) {
						var item = $('<div></div>', { 
							'class' : class_prefix + '-item ' + class_prefix + '-item-' + i + 
								( note.body.items[i].icon ? '' : ' ' + class_prefix + '-item-no-icon' )
						});
						if ( note.body.items[i].icon ) {
							item.append(
								$('<img/>', { 
									"class" : class_prefix + '-item-icon avatar avatar-' + note.body.items[i].icon_width,
									height: note.body.items[i].icon_height,
									width: note.body.items[i].icon_width,
									src: note.body.items[i].icon
							} ) );
						}
						if ( note.body.items[i].header ) {
							item.append(
								$('<div></div>', { 'class' : class_prefix + '-item-header' }
							).html( note.body.items[i].header ) );
						}
						if ( note.body.items[i].action ) {
							switch ( note.body.items[i].action.type ) {
								case 'follow' :
									var button = wpFollowButton.create( note.body.items[i].action );
									item.append( button );
									// Attach action stat tracking for follows
									button.click( function(e) {
										if ( $( this ).children('a').hasClass( 'wpcom-follow-rest' ) )
											wpNotesCommon.bumpStat( 'notes-click-action', 'unfollow' );
										else
											wpNotesCommon.bumpStat( 'notes-click-action', 'follow' );
										return true;
									} );
									break;
								default :
									console.error( "Unsupported " + note.type + " action: " + note.body.items[i].action.type );
									break;
							}
						}
						if ( note.body.items[i].html ) {
							item.append(
								$('<div></div>', { 'class' : class_prefix + '-item-body' }
							).html( note.body.items[i].html ) );
						}
						note_body.append( item );
					}
	
					if ( note.body.actions ) {
						var note_actions = new wpNotesCommentModView( { model: note_model } );
						note_actions.render();
						note_body.append( note_actions.el );
					}
	
					if ( note.body.footer ) {
						note_body.append( 
							$( '<p/>' ).addClass( class_prefix + '-footer' ).html( note.body.footer )
						);
					}
					break;
				case 'big-badge' :
					if ( note.body.header ) {
						note_body.append( 
							$( '<div/>' ).addClass( class_prefix + '-header' ).html( note.body.header )
						);
					}
	
					if ( note.body.badge ) {
						note_body.append( $('<div></div>', { 
							'class' : class_prefix + '-badge ' 
						}).append( note.body.badge ) );
					}
	
					if ( note.body.html !== '' ) {
						note_body.append( 
							$( '<div/>' ).addClass( class_prefix + '-footer' ).html( note.body.html )
						);
					}
	
					break;
				default :
					note_body.text( 'Unsupported note body template!' );
					break;
			}

			note_body.find( 'a[notes-data-click]' ).mousedown( function(e) {
				var type = $(this).attr( 'notes-data-click' );
				wpNotesCommon.bumpStat( 'notes-click-body', type );
				return true;
			} );
	
			return note_body;		
		},
	
		getNoteSubjects: function( query_params, success, fail ) {
			query_params.fields = 'id,type,unread,noticon,timestamp,subject';
			query_params.trap = true;
			return this.getNotes( query_params, success, fail );
		},

		getNotes: function( query_params, success, fail ) {
			return this.ajax({
				type:    'GET',
				path:    '/notifications/',
				data:    query_params,
				success: success,
				error:   fail
			});
		},
		
		markNotesSeen: function( timestamp ) {
			return this.ajax({
				type:    'POST',
				path:    '/notifications/seen',
				data:    { time: timestamp }
			});
		},
	
		markNotesRead: function( unread_cnts ) {
			var query_args = {};
			var t = this;

			for ( var id in unread_cnts ) {
				if ( unread_cnts[ id ] > 0 ) {
					query_args['counts[' + id + ']'] = unread_cnts[ id ];
				}
			}

			if ( 0 === query_args.length ) {
				return (new $.Deferred()).resolve( 'no unread notes' );
			}
			
			return this.ajax({
				type : 'POST',
				path : '/notifications/read',
				data : query_args,
				success : function( res ) { },
				error : function( res ) { }
			});
		},

		ajax: function( options ) {
			var t = this;
			var request = {
				path: options.path,
				method: options.type
			};

			if ( options.type.toLowerCase() == 'post' )
				request.body = options.data;
			else
				request.query = options.data;

			return $.Deferred( function( dfd ) {
				var makeProxyCall = function() {
					$.wpcom_proxy_request( request, function( response, statusCode ) { 
						if ( 200 == statusCode ) {
							if ( 'function' == typeof options.success ) {
								options.success( response );
							}
							return dfd.resolve( response );
						}
						if ( 'function' == typeof options.error ) {
							options.error( statusCode );
						}
						else {
							console.error( statusCode );
						}
						return dfd.reject( statusCode );
					});
				};

				if ( t.hasUpgradedProxy ) {
					return makeProxyCall();
				}
				return $.wpcom_proxy_request( { metaAPI: { accessAllUsersBlogs: true } } ).done( function() {
					t.hasUpgradedProxy = true;
					makeProxyCall();
				} );	
			});
		},
	
		bumpStat: function( group, names ) {
			if ( 'undefined' != typeof wpNotesIsJetpackClient && wpNotesIsJetpackClient ) {
				var jpStats = [ 'notes-menu-impressions', 'notes-menu-clicks' ];
				if ( _.contains( jpStats, group ) ) {
					names = names.replace( /(,|$)/g, '-jetpack$1' );
				}
			}
			new Image().src = document.location.protocol + '//stats.wordpress.com/g.gif?v=wpcom-no-pv&x_' + group + '=' + names + '&baba=' + Math.random();
		},

		getKeycode: function( key_event ) {
			//determine if we can use this key event to trigger the menu
			key_event = key_event || window.event;
			if ( key_event.target )
				element = key_event.target;
			else if ( key_event.srcElement )
				element = key_event.srcElement;
			if( element.nodeType == 3 ) //text node, check the parent
				element = element.parentNode;
			
			if( key_event.ctrlKey === true || key_event.altKey === true || key_event.metaKey === true )
				return false;
		
			var keyCode = ( key_event.keyCode ) ? key_event.keyCode : key_event.which;

			if ( keyCode && ( element.tagName == 'INPUT' || element.tagName == 'TEXTAREA' || element.tagName == 'SELECT' ) )
				return false;

			if ( keyCode && element.contentEditable == "true" )
				return false;

			return keyCode;
		}
	};

	wpNoteModel = Backbone.Model.extend({
		defaults: {
			summary: "",
			unread: true
		},


		initialize: function() {			
		},

		markRead: function() {
			var unread_cnt = this.get( 'unread' );
			if ( Boolean( parseInt( unread_cnt, 10 ) ) ) {
				var notes = {};
				notes[ this.id ] = unread_cnt;
				wpNotesCommon.markNotesRead( notes );
				wpNotesCommon.bumpStat( 'notes-read-type', this.get( 'type' ) );
			}
		},
		
		loadBody: function() {
			wpNotesCommon.createNoteBody( this );
		},

		reload: function() {
			var t = this;
			var fields = 'id,type,unread,noticon,subject,body,date,timestamp';
			if ( 'comment' == t.get( 'type' ) ) {
				fields += ',approval_status,has_replied';
			}
			return wpNotesCommon.getNotes( {
				fields: fields,
				trap: true,
				ids: [ t.get('id') ]
			}, function ( res ) {
				var notes = res.notes;
				if ( typeof notes[0] !== 'undefined' ) {
					t.set( notes[ 0 ] );
				}
			}, function() {
				//ignore failure
			} );
		},

		resize: function() {
			this.trigger( 'resize' );
		}
	});

	wpNoteList = Backbone.Collection.extend({
		model:   wpNoteModel,
		lastMarkedSeenTimestamp : false,
		newNotes: false,
		maxNotes : false,
		loading: false,
		hasLoaded: false,
		allBodiesLoaded: false,

		//always sort by timpstamp
		comparator: function( note ) {
			return -note.get( 'timestamp' );
		},

		addNotes: function( notes ) {
			// Filter out any notes that have no subject
			notes = _.filter( notes, function(note) { return typeof( note.subject ) === "object"; } );
			var models = _.map( notes, function(o) { return new wpNoteModel(o); });
			this.add( models );
			this.sort(); //ensure we maintain sorted order
			if ( this.maxNotes ) {
				while( this.length > this.maxNotes ) {
					this.pop();
				}
			}
			this.trigger( 'loadNotes:change' );
		},

		getMostRecentTimestamp: function() {
			if ( !this.length ) {
				return false;
			}

			//ensure we maintain sorted order see the comparator function
			this.sort();
			return parseInt( this.at(0).get( 'timestamp' ), 10 );
		},

		// load notes from the server
		loadNotes: function( query_args ) {
			var t = this;

			t.loading = true;
			t.trigger( 'loadNotes:beginLoading' );
			
			var fields = query_args.fields;
			var number = parseInt( query_args.number, 10 );
			var before = parseInt( query_args.before, 10 );
			var since = parseInt( query_args.since, 10 );
			var timeout = parseInt( query_args.timeout, 10 ) || 7000;
			var type = 'undefined' == typeof query_args.type ? null : query_args.type;
			var unread = 'undefined' == typeof query_args.unread ? null : query_args.unread;

			query_args = {
				timeout: timeout
			};
			
			if ( ! fields ) {
				fields = 'id,type,unread,noticon,subject,body,date,timestamp';
			}
			
			if ( isNaN( number ) ) {
				number = 9;
			}
			
			if ( ! isNaN( before ) ) {
				query_args.before = before;
			}
			if ( ! isNaN( since ) ) {
				query_args.since = since;
			}

			if ( unread !== null ) {
				query_args.unread = unread;
			}

			if ( type !== null && type != "unread" && type != "latest" ) {
				query_args.type = type;
			}
			
			query_args.number = number;
			query_args.fields = fields;
			query_args.trap = true;

			return wpNotesCommon.getNotes( query_args ).done( function ( res ) {
				var qt;
				var notes = res.notes;
				var notes_changed = false;
				if ( !t.lastMarkedSeenTimestamp || ( res.last_seen_time > t.lastMarkedSeenTimestamp ) ) { 
					notes_changed = true; 
					t.lastMarkedSeenTimestamp = parseInt( res.last_seen_time, 10 );
				} 

				for( var idx in notes ) {
					var note_model = t.get( notes[idx].id );
					if ( note_model ) {
						// Remove notes that have no subject
						if ( typeof( notes[idx].subject ) != 'object' ) {
							t.remove( notes[idx].id );
							notes_changed = true;
							continue;
						}
						if ( type ) {
							qt = note_model.get( 'queried_types' ) || {};
							qt[ type ] = true;
							notes[idx].queried_types = qt;
						}
						note_model.set( notes[ idx ] );
					}
					else {
						// Skip notes that have no subject
						if ( typeof( notes[idx].subject ) != 'object' ) {
							continue;
						}
						if ( type ) {
							qt = {};
							qt[ type ] = true;
							notes[idx].queried_types = qt;
						}
						note_model = new wpNoteModel( notes[ idx ] );
						t.add( note_model );
					}
					if ( ! note_model.has('body') )
						t.allBodiesLoaded = false;
					notes_changed = true;
				}

				if ( t.maxNotes ) {
					while( t.length > t.maxNotes ) {
						t.pop();
					}
				}

				if ( notes_changed ) {
					t.sort(); //ensure we maintain sorted order
					t.trigger( 'loadNotes:change' );
				}
				t.loading = false;
				t.hasLoaded = true;
				t.trigger( 'loadNotes:endLoading' );
			}).fail( function( e ) {
				t.loading = false;
				t.trigger( 'loadNotes:failed' );
			});
		},

		loadNoteBodies: function( filter ) {
			var t = this;
			if ( t.allBodiesLoaded ) {
				return (new $.Deferred()).resolve();
			}

			// Only load the note bodies that pass the caller supplied filter.
			// If no filter is supplied, all notes in the collection are fetched.
			var ids = t.getNoteIds( filter );

			if ( 0 == ids.length ) {
				return (new $.Deferred()).reject();
			}

			var doneFunc = function( res ) {
				var notes = res.notes;
				for( var idx in notes ) {
					// Skip notes that have no subject
					if ( typeof( notes[idx].subject ) != 'object' ) {
						continue;
					}
					var note_model = t.get( notes[idx].id );
					if ( note_model ) {
						note_model.set( notes[idx] );
					} else {
						note_model = new wpNoteModel( notes[ idx ] );
						t.add( note_model );
					}
				}
			};

			var failFunc = function ( e ) {
				if ( typeof console != 'undefined' && typeof console.error == 'function' )
					console.error( 'body loading error!' );
			}

			//get each note body as a separate request so we can get them in parallel
			//to speed up loading when there are many new notes
			var deferreds = [];

			//split into 3 requests (3 most recent notes, and then any others into one request)
			var count = 3
			for ( var i=0; i<count; i++ ) {
				if ( typeof ids[i] == 'undefined' )
					break;

				var query_params = {};
				// loads subject & meta data also so all are consistent
				query_params.fields = 'id,type,unread,noticon,timestamp,subject,body,meta';
				query_params.trap = true;
				query_params['ids[' + i + ']'] = ids[i];

				deferreds.push( wpNotesCommon.getNotes( query_params )
					.done( doneFunc )
					.fail( failFunc )
				)	;
			}

			if ( ids.length > count ) {
				var query_params = {};
				// loads subject & meta data also so all are consistent
				query_params.fields = 'id,type,unread,noticon,timestamp,subject,body,meta';
				query_params.trap = true;

				for ( var i=count; i<ids.length; i++ )
					query_params['ids[' + i + ']'] = ids[i];

				deferreds.push( wpNotesCommon.getNotes( query_params )
					.done( doneFunc )
					.fail( failFunc )
				)	;
			}

			var all_xhr = $.when.apply(null, deferreds);
			all_xhr.done( function() {
				if ( typeof filter != 'function' ) {
					t.allBodiesLoaded = true;
				}
			} );

			return all_xhr;
		},

		markNotesSeen: function() {
			var t = this,
				mostRecentTs = t.getMostRecentTimestamp();

			if ( mostRecentTs > this.lastMarkedSeenTimestamp ) {
				wpNotesCommon.markNotesSeen( mostRecentTs ).done( function() {
					t.lastMarkedSeenTimestamp = false;
				});
			}
		},

		unreadCount: function() {
			return this.reduce( function( num, note ) { return num + ( note.get('unread') ? 1 : 0 ); }, 0 );
		},

		numberNewNotes: function() {
			var t = this;
			if ( ! t.lastMarkedSeenTimestamp )
				return 0;
			return t.getNewNotes().length;
		},

		// return notes in this collection which were generated after we last marked it as seen.
		getNewNotes: function() {
			var t = this;
			return t.filter( function( note ) { 
				return ( note.get('timestamp') > t.lastMarkedSeenTimestamp ); 
			} );
		},

		// get all unread notes in the collection
		getUnreadNotes: function() {
			return this.filter( function( note ){ return Boolean( parseInt( note.get( "unread" ), 10 ) ); } );
		},
		
		// get all notes in the collection of specified type
		getNotesOfType: function( typeName ) {
			var t = this;
			switch( typeName ){
				case 'unread':
					return t.getUnreadNotes();
				case 'latest':
					return t.filter( function( note ) {
						var qt = note.get( 'queried_types' );
						return 'undefined' != typeof qt && 'undefined' != typeof qt.latest && qt.latest;
					});
				default:
					return t.filter( function( note ) {
						var note_type = note.get( "type" );
						if ( "undefined" == typeof wpNotesCommon.noteTypes[ typeName ] ) {
							return false;
						}
						else if ( "string" == typeof wpNotesCommon.noteTypes[ typeName ] ) {
							return typeName == note_type;
						}
						var len = wpNotesCommon.noteTypes[ typeName ].length;
						for ( var i=0; i<len; i++ ){
							if ( wpNotesCommon.noteTypes[ typeName ][i] == note_type ) {
								return true;
							}
						}
						return false;
					} );
			}
		},

		getNoteIds: function(filter) {
			if ( typeof filter != 'function' )
				filter = function(){ return true; };
			return _.pluck( this.filter(filter), 'id' );
		}
	});

	wpNotesCommentModView = Backbone.View.extend({
		mode: 'buttons', //buttons, reply
		commentNeedsApproval : false,
		actionIDMap : {},

		events: {
			'click .wpn-replyto-comment-button-open a': 'openReply',
			'click .wpn-comment-reply-button-close':    'closeReply',
			'click .wpn-comment-reply-button-send':     'sendReply',
			'click .wpn-approve-comment-button a':      'clickModComment',
			'click .wpn-unapprove-comment-button a':    'clickModComment',
			'click .wpn-spam-comment-button a':         'clickModComment',
			'click .wpn-unspam-comment-button a':       'clickModComment',
			'click .wpn-trash-comment-button a':        'clickModComment',
			'click .wpn-untrash-comment-button a':      'clickModComment'
		},

		templateButton: '\
			<span class="{{class_name}}">\
				<a href="#" title="{{title_text}} Keyboard shortcut: {{keytext}}" data-action-type="{{data_action_type}}">{{#bold}}<b>{{/bold}}{{text}}{{#bold}}</b>{{/bold}}</a>\
			</span>\
		',

		templateReply: '\
			<div class="wpn-note-comment-reply"> \
				<h5>{{reply_header_text}}</h5>\
				<textarea class="wpn-note-comment-reply-text" rows="5" cols="45" name="wpn-note-comment-reply-text"></textarea>\
				<p class="wpn-comment-submit">\
					<span class="wpn-comment-submit-waiting" style="display: none;"></span>\
				<span class="wpn-comment-submit-error" style="display:none;">Error!</span>\
				<a href="#" class="wpn-comment-reply-button-send alignright">{{submit_button_text}}</a>\
				<a href="#" class="wpn-comment-reply-button-close alignleft">_</a>\
				</p>\
			</div>\
		',

		initialize : function() {
			var t = this;
			_.bindAll( this, 'render' );
			t.setElement( $( '<div class="wpn-note-comment-actions" />' ) );
			this.model.bind( 'change', this.render, this );

			$(document).keydown(function ( key_event ) {
				if ( t.$el.is( ':hidden' ) ) {
					return;
				}

				if ( t.mode != 'buttons' ) {
					return;
				}

				var keyCode = wpNotesCommon.getKeycode( key_event );
				if ( !keyCode ) {
					return;
				}
				if ( keyCode == 82 ) { //r = reply to comment
					if ( typeof t.actionIDMap[ 'replyto-comment' ] != 'undefined' )
						t.openReply( key_event );
					return false; //prevent default
				}
				if ( keyCode == 65 ) { //a = approve/unapprove comment
					if ( typeof t.actionIDMap[ 'approve-comment' ] != 'undefined' )
						t.modComment( 'approve-comment' );
					else if ( typeof t.actionIDMap[ 'unapprove-comment' ] != 'undefined' )
						t.modComment( 'unapprove-comment' );
					return false; //prevent default
				}
				if ( keyCode == 83 ) { //s = spam/unspam comment
					if ( typeof t.actionIDMap[ 'spam-comment' ] != 'undefined' )
						t.modComment( 'spam-comment' );
					else if ( typeof t.actionIDMap[ 'unspam-comment' ] != 'undefined' )
						t.modComment( 'unspam-comment' );
					return false; //prevent default
				}
				if ( keyCode == 84 ) { //t = trash/untrash comment
					if ( typeof t.actionIDMap[ 'trash-comment' ] != 'undefined' )
						t.modComment( 'trash-comment' );
					else if ( typeof t.actionIDMap[ 'untrash-comment' ] != 'undefined' )
						t.modComment( 'untrash-comment' );
					return false; //prevent default
				}
			});

		},

		render: function() {
			var t = this;
			t.$el.empty();
			if ( t.mode == 'buttons' ) {
				t.$el.append.apply( this.$el, this.createActions() );
			} else {
				t.$el.html( t.createReplyBox() );
				t.$( 'textarea' ).focus();
			}
			t.delegateEvents();
			return t;
		},

		createActions: function() {
			var actions = this.model.get('body').actions;
			var t = this;
			var elements = [];
			this.actionIDMap = {};

			var cnt = 0;
			_.forEach( actions, function( action ) {
				var keytext;
				t.actionIDMap[ action.type ] = cnt++;
				var button_data = {
					"ajax_url": action.params.url,
					"title_text": action.params.title_text || action.params.button_title_text,
					"data_action_type": action.type,
					"text": action.params.button_text || action.params.text
				};
				switch( action.type ) {
					case 'replyto-comment':
						button_data = $.extend( {
							keytext: '[r]',
							class_name: 'wpn-' + action.type + '-button-open'
						}, button_data );
						elements.push( Mustache.render( t.templateButton, button_data ) );
						elements.push( ' | ' );
						break;
					case 'approve-comment':
						button_data = $.extend( {
							keytext: '[a]',
							bold: true,
							class_name: 'wpn-' + action.type + '-button'
						}, button_data );
						t.commentNeedsApproval = true;
						elements.push( Mustache.render( t.templateButton, button_data ) );
						elements.push( ' | ' );
						break;
					case 'unapprove-comment':
						keytext = '[a]';
					case 'spam-comment':
						keytext = ( typeof keytext == 'undefined' ) ? '[s]' : keytext;
					case 'unspam-comment':
						keytext = ( typeof keytext == 'undefined' ) ? '[s]' : keytext;
					case 'trash-comment':
						keytext = ( typeof keytext == 'undefined' ) ? '[t]' : keytext;
					case 'untrash-comment':
						keytext = ( typeof keytext == 'undefined' ) ? '[t]' : keytext;
						button_data = $.extend( {
							keytext: keytext,
							class_name: 'wpn-' + action.type + '-button'
						}, button_data );

						elements.push( Mustache.render( t.templateButton, button_data ) );
						elements.push( ' | ' );
						break;
				}
			});

			//remove final " | "
			elements = elements.slice( 0, -1 );
			elements.push( $( '<span/>', {
				'class': "wpn-comment-mod-waiting",
				style: "display:none;"
			} ) );

			return elements;
		},

		createReplyBox : function() {
			var action = this.model.get('body').actions[ this.actionIDMap['replyto-comment'] ];
			var blog_id = action.params.blog_id || 0;
			var comment_id = this.model.id || 0;
			var element = Mustache.render( this.templateReply, {
				reply_header_text: action.params.reply_header_text,
				submit_button_text: action.params.submit_button_text
			} );
			return element;
		},

		closeReply : function( ev ) {
			if ( ev )
				ev.preventDefault();
			this.mode = 'buttons';
			this.model.currentReplyText = this.$el.children( '.wpn-note-comment-reply' ).children( '.wpn-note-comment-reply-text' ).val();
			this.render();
			this.model.resize();
		},

		openReply : function( ev ) {
			ev.preventDefault();
			this.mode = 'reply';
			this.render();
			this.$el.children( '.wpn-note-comment-reply' ).children( '.wpn-note-comment-reply-text' ).val( this.model.currentReplyText );
			this.model.resize();
		},

		sendReply : function( ev ) {
			ev.preventDefault();
			var t = this;
			var comment_reply_el = t.$el.children( '.wpn-note-comment-reply' );
			var action = t.model.get('body').actions[ t.actionIDMap['replyto-comment'] ];
			t.model.currentReplyText = comment_reply_el.children( '.wpn-note-comment-reply-text' ).val();
			
			comment_reply_el.children( '.wpn-comment-submit' ).children( '.wpn-comment-submit-error').hide();
			comment_reply_el.children( '.wpn-comment-submit' ).children( '.wpn-comment-submit-waiting').show();

			var	blog_id = action.params.blog_id || 0,
				comment_id = action.params.comment_id || 0,
				content = t.model.currentReplyText || 0;

			if ( !( blog_id && comment_id && content ) )
				return error.log( 'Invalid sendReply params' );

			$('.wpn-comment-submit-waiting').spin( 'small' );
			wpNotesCommon.bumpStat( 'notes-click-action', 'replyto-comment' );

			var doSend = function() {
				return wpNotesCommon.ajax({
					type:  'POST',
					path:  '/sites/' + blog_id + '/comments/' + comment_id + '/replies/new',
					data:  { content: content },
					success: function (r) {
						if ( typeof r == 'string' ) {
							t.errorReply( r );
							return false;
						}
						t.closeReply();
						t.model.currentReplyText = '';
						// @todo use response to update the model & render to save a round trip
						t.model.reload().done( function() {
							if ( !t.model.get( 'has_replied' ) ) {
								var tries = 0; //don't try forever
								t.replyCommentInterval = setInterval( function() {
									t.model.reload().done( function(){
										if ( t.model.get( 'has_replied' ) || tries++ >= 10 ) {
											clearInterval( t.replyCommentInterval );
										}
									});
								}, 3000 );
							}
						});
					},
					error: function(r) { 
						t.errorReply( r );
					}
				});
			};

			if ( t.commentNeedsApproval ) {
				return t.modComment( 'approve-comment' ).done( doSend );
			} else
				return doSend();
		},

		errorReply : function(r) {
			var t = this;
			var er = r;
			if ( typeof r == 'object' ) {
				if ( r.responseText) {
					o = $.parseJSON( r.responseText );
					er = o.error + ': ' + o.message;
				} else if ( r.statusText ) {
					er = r.statusText;
				} else {
					er = 'Unknown Error';
				}
			}

			var comment_reply_el = t.$el.children( '.wpn-note-comment-reply' );

			comment_reply_el.children( '.wpn-comment-submit' ).children( '.wpn-comment-submit-waiting').hide();

			if ( er )
				comment_reply_el.children( '.wpn-comment-submit' ).children( '.wpn-comment-submit-error').text(er).show();
		},

		clickModComment : function( ev ) {
			var t = this;
			ev.preventDefault();
			var type = $( ev.currentTarget ).data( 'action-type' );
			if ( 'undefined' == typeof type )
				return (new $.Deferred()).reject( 'Undefined action-type' );

			return t.modComment( type );
		},

		modComment : function( type ) {
			var t = this;
			var action_id = t.actionIDMap[type];
			var action = t.model.get('body').actions[ t.actionIDMap[ type ] ];

			if ( 'undefined' == typeof action_id )
				return (new $.Deferred()).reject( 'Undefined action_id' );

			t.$( ' .wpn-comment-mod-waiting' ).show().spin( 'small' );
			wpNotesCommon.bumpStat( 'notes-click-action', type );

			var oldStatus = t.model.get( 'approval_status' );

			clearInterval( t.modCommentInterval );

			return wpNotesCommon.ajax({
				type:  'POST',
				path:  action.params.rest_path,
				data:  action.params.rest_body,
				success: function (r) {
					// @todo use response to update the model & render to save a round trip
					t.model.reload().done( function(){
						if ( oldStatus == t.model.get( 'approval_status' ) ) {
							var tries = 0; //don't try forever
							t.modCommentInterval = setInterval( function() {
								t.model.reload().done( function(){
									if ( oldStatus != t.model.get( 'approval_status' ) || tries++ >= 10 ) {
										clearInterval( t.modCommentInterval );
									}
								});
							}, 3000 );
						}
					});
				},
				error: function(r) {
					// @todo provide visible feedback that the attempt hasn't succeeded
					console.error( 'Comment moderation error' );
					t.model.reload();
				}
			});
		}
	});
})(jQuery);
;
if ( 'undefined' == typeof wpcom ) {
	wpcom = {};
}
if ( 'undefined' == typeof wpcom.events ) {
	wpcom.events = _.extend( {}, Backbone.Events );
}
(function($) {
	var wpNotesArgs = window.wpNotesArgs || {},
		cacheBuster = wpNotesArgs.cacheBuster || (function() {
			var today = new Date();
			return today.getFullYear() + ( '0' + ( 1 + today.getMonth() ) ).slice( -2 ) + ( '0' + today.getDate() ).slice( -2 );
		})(),
		iframeUrl = wpNotesArgs.iframeUrl || 'https://widgets.wp.com/notes/';

	$(function(){
		new wpntView();
	});

	var wpntView = Backbone.View.extend({
		el: '#wp-admin-bar-notes',
		hasUnseen: null,
		initialLoad: true,
		count: null,
		iframe: null,
		iframeWindow: null,
		messageQ: [],
		iframeSpinnerShown: false,
		isJetpack: false,
		linkAccountsURL: false,

		initialize: function() {
			var t = this;

			// graceful fallback for IE <= 7
			var matches = navigator.appVersion.match( /MSIE (\d+)/ );
			if ( matches && parseInt( matches[1], 10 ) < 8 ) {
				var $panel = t.$( '#wpnt-notes-panel' );
				var $menuItem = t.$( '.ab-empty-item' );
				if ( !$panel.length || !$menuItem.length ) {
					return;
				}
				var offset = t.$el.offset();

				t.$( '.ab-item' ).removeClass( 'ab-item' );
				t.$( '#wpnt-notes-unread-count' ).html( '?' );

				// @todo localize
				$panel.html( ' \
					<div class="wpnt-notes-panel-header"><p>Notifications are not supported in this browser!</p> </div> \
					<img src="http://i2.wp.com/wordpress.com/wp-content/mu-plugins/notes/images/jetpack-notes-2x.png" /> \
					<p class="wpnt-ie-note"> \
					Please <a href="http://browsehappy.com" target="_blank">upgrade your browser</a> to keep using notifications. \
					</p>'
				).addClass( 'browse-happy' );

				t.$el.on( 'mouseenter', function(e) {
					clearTimeout( t.fadeOutTimeout );
					if ( $panel.is( ':visible:animated' ) ) {
						$panel.stop().css( 'opacity', '' );
					}
					$menuItem.css({ 'background-color': '#eee' });
					$panel.show();
				});

				t.$el.on( 'mouseleave', function() {
					t.fadeOutTimeout = setTimeout( function() {
						clearTimeout( t.fadeOutTimeout );
						if ( $panel.is( ':animated' ) ) {
							return;
						}
						$panel.fadeOut( 250, function() {
							$menuItem.css({ 'background-color': 'transparent' });
						});
					}, 350 );
				});

				return;
			}

			// don't break notifications if jquery.spin isn't available
			if ( 'function' != typeof $.fn.spin ) {
				$.fn.spin = function(x){};
			}
			this.isRtl = $('#wpadminbar').hasClass('rtl');
			this.count = $('#wpnt-notes-unread-count');
			this.panel = $('#wpnt-notes-panel');
			this.hasUnseen = this.count.hasClass( 'wpn-unread' );
			if ( 'undefined' != typeof wpNotesIsJetpackClient && wpNotesIsJetpackClient )
				t.isJetpack = true;
			if ( t.isJetpack && 'undefined' != typeof wpNotesLinkAccountsURL )
				t.linkAccountsURL = wpNotesLinkAccountsURL;

			this.$el.children('.ab-item').click(function(e){
				e.preventDefault();
				t.togglePanel();

				return false;
			});

			// Click outside the panel to close the panel.
			$(document).bind( "mousedown focus", function(e) {
				var $clicked;

				// Don't fire if the panel isn't showing
				if ( ! t.showingPanel )
					return true;

				$clicked = $(e.target);

				/**
				 * Don't fire if there's no real click target
				 * Prevents Firefox issue described here: http://datap2.wordpress.com/2013/08/15/running-in-to-some-strange/
				 */
				if ( $clicked.is( document ) )
					return true;

				// Don't fire on clicks in the panel.
				if ( $clicked.closest( '#wp-admin-bar-notes' ).length )
					return true;

				t.hidePanel();
			});

			$(document).on( 'keydown.notes', function (e) {
				var keyCode = wpNotesCommon.getKeycode( e );
				if ( !keyCode )
					return;

				if ( ( keyCode == 27 ) && t.showingPanel ) //ESC close only
					t.togglePanel();
				if ( ( keyCode == 78 ) ) //n open/close
					t.togglePanel();

				//ignore other commands if the iframe hasn't been loaded yet
				if ( this.iframeWindow === null )
					return;

				if ( t.showingPanel && ( ( keyCode == 74 ) || ( keyCode == 40  ) ) ) { //j and down arrow
					t.postMessage( { action:"selectNextNote" } );
					return false; //prevent default
				}
				if ( t.showingPanel && ( ( keyCode == 75 ) || ( keyCode == 38  ) ) ) { //k and up arrow
					t.postMessage( { action:"selectPrevNote" } );
					return false; //prevent default
				}

				if ( t.showingPanel && ( ( keyCode == 82 ) || ( keyCode == 65  ) || 
					( keyCode == 83  ) || ( keyCode == 84  ) ) ) { //mod keys (r,a,s,t) to pass to iframe
					t.postMessage( { action:"keyEvent", keyCode: keyCode } );
					return false; //prevent default
				}
			});

			wpcom.events.on( 'notes:togglePanel', function() { t.togglePanel(); } );

			if ( t.isJetpack )
				t.loadIframe();
			else {
				setTimeout(function() {
					t.loadIframe();
				}, 3000);
			}

			if ( t.count.hasClass( 'wpn-unread' ) )
				wpNotesCommon.bumpStat( 'notes-menu-impressions', 'non-zero' );
			else
				wpNotesCommon.bumpStat( 'notes-menu-impressions', 'zero' );

			// listen for postMessage events from the iframe
			$(window).on( 'message', function( event ) {
				if ( !event.data && event.originalEvent.data ) {
					event = event.originalEvent;
				}
				if ( event.origin != 'https://widgets.wp.com' ) {
					return;
				}
				try {
					var data = ( 'string' == typeof event.data ) ? JSON.parse( event.data ) : event.data;

					if ( data.type != 'notesIframeMessage' ) {
						return;
					}
					t.handleEvent( data );
				} catch(e){}
			});
		},

		// Done this way, "this" refers to the wpntView object instead of the window.
		handleEvent: function( event ) {

			var inNewdash = ( 'undefined' !== typeof wpcomNewdash && 'undefined' !== typeof wpcomNewdash.router && 'undefined' !== wpcomNewdash.router.setRoute );

			if ( !event || !event.action ) {
				return;
			}
			switch ( event.action ) {
				case "togglePanel":
					this.togglePanel();
					break;
				case "render":
					this.render( event.num_new, event.latest_type );
					break;
				case "renderAllSeen":
					this.renderAllSeen();
					break;
				case "iFrameReady":
					this.iFrameReady(event);
					break;
				case "goToNotesPage":
					if ( inNewdash ) {
						wpcomNewdash.router.setRoute( '/notifications' );
					} else {
						window.location.href = '//wordpress.com/notifications/';
					}
					break;
			}
		},

		render: function( num_new, latest_type ) {
			var t = this, flash = false;

			if ( ( false === this.hasUnseen ) && ( 0 === num_new ) )
				return;

			//assume the icon is correct on initial load, prevents fading in and out for no reason
			if ( this.initialLoad && this.hasUnseen && ( 0 !== num_new ) ) {
				this.initialLoad = false;
				return;
			}

			if ( ! this.hasUnseen && ( 0 !== num_new ) ) {
				wpNotesCommon.bumpStat( 'notes-menu-impressions', 'non-zero-async' );
			}

			var latest_icon_type = wpNotesCommon.noteType2Noticon[ latest_type ];
			if ( typeof latest_icon_type == 'undefined' )
				latest_icon_type = 'notification';

			var latest_img_el = $('<span/>', {
				'class' : 'noticon noticon-' + latest_icon_type + ''
			});

			var status_img_el = this.getStatusIcon( num_new );

			if ( 0 === num_new || this.showingPanel ) {
				this.hasUnseen = false;
				t.count.fadeOut( 200, function() {
					t.count.empty();
					t.count.removeClass('wpn-unread').addClass('wpn-read');
					t.count.html( status_img_el );
					t.count.fadeIn( 500 );
				} );
			} else {
				this.hasUnseen = true;
				t.count.fadeOut( 400, function() {
					t.count.empty();
					t.count.removeClass('wpn-read').addClass('wpn-unread');
					t.count.html( latest_img_el );
					t.count.fadeIn( 400, function() { });
				});
			}
		},

		renderAllSeen: function() {
			var img_el = this.getStatusIcon(0);
			this.count.removeClass('wpn-unread').addClass('wpn-read');
			this.count.empty();
			this.count.html( img_el );
			this.hasUnseen = false;
		},

		getStatusIcon: function( number ) {
			var new_icon = '';
			switch ( number ) {
				case 0:
					new_icon = 'noticon noticon-notification';
					break;
				case 1:
					new_icon = 'noticon noticon-notification';
					break;
				case 2:
					new_icon = 'noticon noticon-notification';
					break;
				default:
					new_icon = 'noticon noticon-notification';
			}

			return $('<span/>', {
				'class' : new_icon
			});
		},

		togglePanel: function() {
			// temp hack until 3.3 merge to highlight toolbar number
			//this.$el.removeClass('wpnt-stayopen');	
			this.$el.toggleClass('wpnt-stayopen');
			this.$el.toggleClass('wpnt-show');
			this.showingPanel = this.$el.hasClass('wpnt-show');
			this.loadIframe();

			if ( this.showingPanel ) {
				var $unread = this.$( '.wpn-unread' );
				if ( $unread.length ) {
					$unread.removeClass( 'wpn-unread' ).addClass( 'wpn-read' );
				}
				this.reportIframeDelay();
				if ( this.hasUnseen )
					wpNotesCommon.bumpStat( 'notes-menu-clicks', 'non-zero' );
				else
					wpNotesCommon.bumpStat( 'notes-menu-clicks', 'zero' );

				this.hasUnseen = false;
			}
			// tell the iframe we are opening it
			this.postMessage( { action:"togglePanel", showing:this.showingPanel } );
			if ( this.showingPanel )
				this.iframe[0].contentWindow.focus();
			else
				window.focus();
		},

		loadIframe: function() {
			var t = this,
				args = [],
				src,
				lang,
				queries;

			if ( t.iframe === null ) {
				// Removed spinner here because it shows up so briefly, and is replaced by the iframe spinner in a different spot
				// t.panel.addClass('loadingIframe').find('.wpnt-notes-panel-header').spin('large');
				t.panel.addClass('loadingIframe');

				if ( t.isJetpack ) {
					args.push( 'jetpack=true' );
					if ( t.linkAccountsURL ) {
						args.push( 'link_accounts_url=' + escape( t.linkAccountsURL ) );
					}
				}

				args.push( 'v=' + cacheBuster );
				queries = ( args.length ) ? '?' + args.join( '&' ) : '';
				src = iframeUrl;
				src = src + queries + '#' + document.location.toString();
				if ( $( '#wpnt-notes-panel' ).attr( 'dir' ) == 'rtl' ) {
					src += '&rtl=1';
				}
				lang = $( '#wpnt-notes-panel' ).attr( 'lang' ) || 'en';
				if ( !lang.match( /^en/ ) ) {
					src += ( '&lang=' + lang );
				}

				// Add the iframe (invisible until iFrameReady)
				t.iframe = $('<iframe style="display:none" id="wpnt-notes-iframe" frameborder=0 ALLOWTRANSPARENCY="true" scrolling="no"></iframe>');
				t.iframe.attr( 'src', src );
				t.panel.append(t.iframe);
			}
		},

		reportIframeDelay: function() {
			if ( !this.iframeWindow ) {
				if ( !this.iframeSpinnerShown )
					this.iframeSpinnerShown = (new Date()).getTime();
				return;
			}
			if ( this.iframeSpinnerShown !== null ) {
				var delay = 0;
				if ( this.iframeSpinnerShown )
					delay = (new Date()).getTime() - this.iframeSpinnerShown;
				if ( delay === 0 )
					wpNotesCommon.bumpStat( 'notes_iframe_perceived_delay', '0' );
				else if ( delay < 1000 )
					wpNotesCommon.bumpStat( 'notes_iframe_perceived_delay', '0-1' );
				else if ( delay < 2000 )
					wpNotesCommon.bumpStat( 'notes_iframe_perceived_delay', '1-2' );
				else if ( delay < 4000 )
					wpNotesCommon.bumpStat( 'notes_iframe_perceived_delay', '2-4' );
				else if ( delay < 8000 )
					wpNotesCommon.bumpStat( 'notes_iframe_perceived_delay', '4-8' );
				else
					wpNotesCommon.bumpStat( 'notes_iframe_perceived_delay', '8-N' );
				this.iframeSpinnerShown = null;
			}
		},

		iFrameReady: function(event) {
			var t = this;
			this.iframeWindow = this.iframe.get(0).contentWindow;

			if ( "num_new" in event )
				this.render( event.num_new, event.latest_type );
			this.panel.removeClass('loadingIframe').find('.wpnt-notes-panel-header').remove();
			this.iframe.show();
			if ( this.showingPanel )
				this.reportIframeDelay();

			// detect user activity and trigger a refresh event in the iframe
			$( window ).on( 'focus keydown mousemove scroll', function() {
				// Throttle postMessages since the overhead is pretty high & these events fire a lot
				var now = ( new Date() ).getTime();
				if ( !t.lastActivityRefresh || t.lastActivityRefresh < now - 5000 ) {
					t.lastActivityRefresh = now;
					t.postMessage( { action: "refreshNotes" } );
				}
			} );

			this.sendQueuedMessages();
		},

		hidePanel: function() {
			if ( this.showingPanel ) {
				this.togglePanel();
			}
		},

		postMessage: function( message ) {
			var t = this;
			try{
				var _msg = ( 'string' == typeof message ) ? JSON.parse( message ) : message;
				if ( !_.isObject( _msg ) ) {
					return;
				}

				_msg = _.extend( { type: 'notesIframeMessage' }, _msg );

				var targetOrigin = 'https://widgets.wp.com';
				if ( this.iframeWindow && this.iframeWindow.postMessage ) {
					this.iframeWindow.postMessage( JSON.stringify( _msg ), targetOrigin );
				} else {
					this.messageQ.push( _msg );
				}
			}
			catch(e){}
		},

		sendQueuedMessages: function() {
			var t = this;
			_.forEach( this.messageQ, function( m ) {
				t.postMessage( m );
			} );
			this.messageQ = [];
		}

	});
})(jQuery);
;
jQuery(document).ready( function($){

	var tosform = {};
	tosform.loaded = false;

	tosform.setup  = function() {

		tosform.report_type ='';
		tosform.ajaxurl = wpcom_tos_report_form.ajaxurl;
		tosform.isLoggedoutUser = wpcom_tos_report_form.isLoggedoutUser;

		tosform.$step1 = $( '#report-step-1' );
		tosform.$types = tosform.$step1.find( 'input:radio' );
		tosform.$step2 = $( '#report-step-2' );
		tosform.$step2_details = $( '.step-2-details' );
		tosform.$next = $( '#step1-submit' );
		tosform.$submit = $( '#step2-submit' );
		tosform.$report_url = $('#report-url');
		tosform.$report_email = $('#report-email');
		tosform.$step3 = $( '#report-confirm' );

		tosform.$step3.hide();
		tosform.$step2.hide();
		tosform.$step1.show();
		tosform.$step2_details.hide();
		tosform.$types.attr( 'checked', false );
		tosform.$next.attr( 'disabled', true );
		tosform.$submit.attr( 'disabled', true );
	}

	tosform.setup();

	tosform.setup_step2 = function() {
		$( '#report-step-1' ).fadeOut( 'fast', function(){
			tosform.report_type = tosform.$types.filter( ':checked' ).val();
			tosform.$step2.fadeIn( 'fast' );
			// Show step 2 description depending on type of report
			tosform.$step2_details.hide();
			if( tosform.report_type == 'copyright' )
				$('#step2-submit').hide();
			$( '#step-2-' + tosform.report_type).show();
			$( '#TB_ajaxContent' ).css( 'height', 'auto' );

		});
	}

	// Enable continue button when an option is selected, if url has been entered and the email is available
	$(document).on( 'change.tos_report_form', '#report-step-1 input:radio', function(){
		tosform.report_type = tosform.$types.filter( ':checked' ).val();
		if ( $.trim( tosform.$report_url.val() ).length != 0 && tosform.report_type.length != 0 && $.trim( tosform.$report_email.val() ).length != 0 )
			tosform.$next.attr( 'disabled', false );
		else
			tosform.$next.attr( 'disabled', true );
	});

	// Enable continue button when a url has been entered, if an option has been selected and the email is available
	$(document).on( 'change.tos_report_form', '#report-url', function(){
		if ( $.trim( tosform.$report_url.val() ).length != 0 && tosform.report_type.length != 0 && $.trim( tosform.$report_email.val() ).length != 0 )
			tosform.$next.attr( 'disabled', false );
		else
			tosform.$next.attr( 'disabled', true );
	});

	// Enable continue button when an email has been entered, if an option is selected and url  has been entered
	$(document).on( 'change.tos_report_form', '#report-email', function(){
		if ( $.trim( tosform.$report_url.val() ).length != 0 && tosform.report_type.length != 0 && $.trim( tosform.$report_email.val() ).length != 0 )
			tosform.validateUrl( tosform.$report_url.val() );
		else
			tosform.$next.attr( 'disabled', true );
	});

	// Move to step 2
	$(document).on( 'click.tos_report_form', '#step1-submit', function(){
		if( tosform.isLoggedoutUser) {
			$('#step1-submit').val('validating..');
			$.ajax( {
				url: tosform.ajaxurl,
				type : 'POST',
				dataType: 'json',
				data : {
					action: 'tos_validate_report_fields',
					report_url: $.trim( tosform.$report_url.val() ),
					report_email: $.trim( tosform.$report_email.val() )
				},
				success: function( errorMessages ) {
					$( '#tos-email-error-message' ).empty();
					$( '#tos-url-error-message' ).empty();
					if( Object.keys(errorMessages.errors).length === 0 ) {
						tosform.setup_step2();
					} else {
						if( typeof errorMessages.errors.email_error_message != 'undefined' )
							$( '#tos-email-error-message' ).append( '<p>' + errorMessages.errors.email_error_message[0] + '</p>' );
						if( typeof errorMessages.errors.url_error_message != 'undefined' )
							$( '#tos-url-error-message' ).append( '<p>' + errorMessages.errors.url_error_message[0] + '</p>' );
						$( '#step1-submit' ).val( 'Submit' );
					}
				}
			});
		} else {
			tosform.setup_step2();
		}

	});

	// Enable form submission when reason textarea is field
	$(document).on( 'change.tos_report_form input.tos_report_form paste.tos_report_form', 'textarea.step-2-confirm', function(){
		if ( $.trim( $(this).val() ).length != 0 )
			tosform.$submit.attr( 'disabled', false );
		else
			tosform.$submit.attr( 'disabled', true );
	});

	// close window on cancel button click or overlay click
	$(document).on( 'click.tos_report_form', '#TB_ajaxContent .tosform-cancel, #TB_overlay', function(e) {
		e.preventDefault();
		tb_remove();
	});

	// close window on 'esc' keypress
	$(document).keyup( function(e) {
		if ( e.keyCode == 27 ) {
			tb_remove();
		}
	});

	// open the form
	$(document).on( 'click.tos_report_form', '#wp-admin-bar-wpcom_report_url', function(e){
		e.preventDefault();
		tb_show( wpcom_tos_report_form.report_this_content, '#TB_inline?height=450&width=auto&inlineId=report-form-window&modal=true', '' );

		$( '#TB_window, #TB_overlay, #TB_load, #TB_ajaxContent' ).addClass( 'tos-report-form' );

		var $tb_ajax_content = $( '#TB_ajaxContent.tos-report-form' );

		if ( ! tosform.loaded ) {
			$tb_ajax_content.spin( 'large' );
			$.ajax( {
				url: tosform.ajaxurl,
				data : {
					action: 'tos_form',
					post_id: wpcom_tos_report_form.post_ID,
					report_url: wpcom_tos_report_form.current_url
				},
				success: function( form ) {
					$( '#TB_ajaxContent' ).html( form ).css( 'height', 'auto' );
					tosform.setup();
					tosform.loaded = true;
				},
				xhrFields: {
					withCredentials: true
				}
			} );
		} else {
			$tb_ajax_content.find( '.spinner' ).remove();
			tosform.setup();
		}

		return false;
	});

	// submit the form
	$(document).on( 'submit.tos_report_form', '#report-form', function(e){
		e.preventDefault();

		// set the reason according to the form type
		$( '#report-form input[name=reason]' ).val( $( '#confirm-' + tosform.report_type ).val() );
		var formData = $( '#report-form' ).serialize();
		$.ajax( {
			url: tosform.ajaxurl,
			data : formData,
			type : 'POST',
			xhrFields: {
				withCredentials: true
			}
		});
		tosform.$step2.hide();
		tosform.$step3.show();
		$( '#TB_ajaxContent.tos-report-form' ).spin( 'large' );

		setTimeout(function(){
			tb_remove();
		}, 2000);

	})

});;
/*	SWFObject v2.2 <http://code.google.com/p/swfobject/> 
	is released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/
var swfobject=function(){var D="undefined",r="object",S="Shockwave Flash",W="ShockwaveFlash.ShockwaveFlash",q="application/x-shockwave-flash",R="SWFObjectExprInst",x="onreadystatechange",O=window,j=document,t=navigator,T=false,U=[h],o=[],N=[],I=[],l,Q,E,B,J=false,a=false,n,G,m=true,M=function(){var aa=typeof j.getElementById!=D&&typeof j.getElementsByTagName!=D&&typeof j.createElement!=D,ah=t.userAgent.toLowerCase(),Y=t.platform.toLowerCase(),ae=Y?/win/.test(Y):/win/.test(ah),ac=Y?/mac/.test(Y):/mac/.test(ah),af=/webkit/.test(ah)?parseFloat(ah.replace(/^.*webkit\/(\d+(\.\d+)?).*$/,"$1")):false,X=!+"\v1",ag=[0,0,0],ab=null;if(typeof t.plugins!=D&&typeof t.plugins[S]==r){ab=t.plugins[S].description;if(ab&&!(typeof t.mimeTypes!=D&&t.mimeTypes[q]&&!t.mimeTypes[q].enabledPlugin)){T=true;X=false;ab=ab.replace(/^.*\s+(\S+\s+\S+$)/,"$1");ag[0]=parseInt(ab.replace(/^(.*)\..*$/,"$1"),10);ag[1]=parseInt(ab.replace(/^.*\.(.*)\s.*$/,"$1"),10);ag[2]=/[a-zA-Z]/.test(ab)?parseInt(ab.replace(/^.*[a-zA-Z]+(.*)$/,"$1"),10):0}}else{if(typeof O.ActiveXObject!=D){try{var ad=new ActiveXObject(W);if(ad){ab=ad.GetVariable("$version");if(ab){X=true;ab=ab.split(" ")[1].split(",");ag=[parseInt(ab[0],10),parseInt(ab[1],10),parseInt(ab[2],10)]}}}catch(Z){}}}return{w3:aa,pv:ag,wk:af,ie:X,win:ae,mac:ac}}(),k=function(){if(!M.w3){return}if((typeof j.readyState!=D&&j.readyState=="complete")||(typeof j.readyState==D&&(j.getElementsByTagName("body")[0]||j.body))){f()}if(!J){if(typeof j.addEventListener!=D){j.addEventListener("DOMContentLoaded",f,false)}if(M.ie&&M.win){j.attachEvent(x,function(){if(j.readyState=="complete"){j.detachEvent(x,arguments.callee);f()}});if(O==top){(function(){if(J){return}try{j.documentElement.doScroll("left")}catch(X){setTimeout(arguments.callee,0);return}f()})()}}if(M.wk){(function(){if(J){return}if(!/loaded|complete/.test(j.readyState)){setTimeout(arguments.callee,0);return}f()})()}s(f)}}();function f(){if(J){return}try{var Z=j.getElementsByTagName("body")[0].appendChild(C("span"));Z.parentNode.removeChild(Z)}catch(aa){return}J=true;var X=U.length;for(var Y=0;Y<X;Y++){U[Y]()}}function K(X){if(J){X()}else{U[U.length]=X}}function s(Y){if(typeof O.addEventListener!=D){O.addEventListener("load",Y,false)}else{if(typeof j.addEventListener!=D){j.addEventListener("load",Y,false)}else{if(typeof O.attachEvent!=D){i(O,"onload",Y)}else{if(typeof O.onload=="function"){var X=O.onload;O.onload=function(){X();Y()}}else{O.onload=Y}}}}}function h(){if(T){V()}else{H()}}function V(){var X=j.getElementsByTagName("body")[0];var aa=C(r);aa.setAttribute("type",q);var Z=X.appendChild(aa);if(Z){var Y=0;(function(){if(typeof Z.GetVariable!=D){var ab=Z.GetVariable("$version");if(ab){ab=ab.split(" ")[1].split(",");M.pv=[parseInt(ab[0],10),parseInt(ab[1],10),parseInt(ab[2],10)]}}else{if(Y<10){Y++;setTimeout(arguments.callee,10);return}}X.removeChild(aa);Z=null;H()})()}else{H()}}function H(){var ag=o.length;if(ag>0){for(var af=0;af<ag;af++){var Y=o[af].id;var ab=o[af].callbackFn;var aa={success:false,id:Y};if(M.pv[0]>0){var ae=c(Y);if(ae){if(F(o[af].swfVersion)&&!(M.wk&&M.wk<312)){w(Y,true);if(ab){aa.success=true;aa.ref=z(Y);ab(aa)}}else{if(o[af].expressInstall&&A()){var ai={};ai.data=o[af].expressInstall;ai.width=ae.getAttribute("width")||"0";ai.height=ae.getAttribute("height")||"0";if(ae.getAttribute("class")){ai.styleclass=ae.getAttribute("class")}if(ae.getAttribute("align")){ai.align=ae.getAttribute("align")}var ah={};var X=ae.getElementsByTagName("param");var ac=X.length;for(var ad=0;ad<ac;ad++){if(X[ad].getAttribute("name").toLowerCase()!="movie"){ah[X[ad].getAttribute("name")]=X[ad].getAttribute("value")}}P(ai,ah,Y,ab)}else{p(ae);if(ab){ab(aa)}}}}}else{w(Y,true);if(ab){var Z=z(Y);if(Z&&typeof Z.SetVariable!=D){aa.success=true;aa.ref=Z}ab(aa)}}}}}function z(aa){var X=null;var Y=c(aa);if(Y&&Y.nodeName=="OBJECT"){if(typeof Y.SetVariable!=D){X=Y}else{var Z=Y.getElementsByTagName(r)[0];if(Z){X=Z}}}return X}function A(){return !a&&F("6.0.65")&&(M.win||M.mac)&&!(M.wk&&M.wk<312)}function P(aa,ab,X,Z){a=true;E=Z||null;B={success:false,id:X};var ae=c(X);if(ae){if(ae.nodeName=="OBJECT"){l=g(ae);Q=null}else{l=ae;Q=X}aa.id=R;if(typeof aa.width==D||(!/%$/.test(aa.width)&&parseInt(aa.width,10)<310)){aa.width="310"}if(typeof aa.height==D||(!/%$/.test(aa.height)&&parseInt(aa.height,10)<137)){aa.height="137"}j.title=j.title.slice(0,47)+" - Flash Player Installation";var ad=M.ie&&M.win?"ActiveX":"PlugIn",ac="MMredirectURL="+encodeURI(O.location).toString().replace(/&/g,"%26")+"&MMplayerType="+ad+"&MMdoctitle="+j.title;if(typeof ab.flashvars!=D){ab.flashvars+="&"+ac}else{ab.flashvars=ac}if(M.ie&&M.win&&ae.readyState!=4){var Y=C("div");X+="SWFObjectNew";Y.setAttribute("id",X);ae.parentNode.insertBefore(Y,ae);ae.style.display="none";(function(){if(ae.readyState==4){ae.parentNode.removeChild(ae)}else{setTimeout(arguments.callee,10)}})()}u(aa,ab,X)}}function p(Y){if(M.ie&&M.win&&Y.readyState!=4){var X=C("div");Y.parentNode.insertBefore(X,Y);X.parentNode.replaceChild(g(Y),X);Y.style.display="none";(function(){if(Y.readyState==4){Y.parentNode.removeChild(Y)}else{setTimeout(arguments.callee,10)}})()}else{Y.parentNode.replaceChild(g(Y),Y)}}function g(ab){var aa=C("div");if(M.win&&M.ie){aa.innerHTML=ab.innerHTML}else{var Y=ab.getElementsByTagName(r)[0];if(Y){var ad=Y.childNodes;if(ad){var X=ad.length;for(var Z=0;Z<X;Z++){if(!(ad[Z].nodeType==1&&ad[Z].nodeName=="PARAM")&&!(ad[Z].nodeType==8)){aa.appendChild(ad[Z].cloneNode(true))}}}}}return aa}function u(ai,ag,Y){var X,aa=c(Y);if(M.wk&&M.wk<312){return X}if(aa){if(typeof ai.id==D){ai.id=Y}if(M.ie&&M.win){var ah="";for(var ae in ai){if(ai[ae]!=Object.prototype[ae]){if(ae.toLowerCase()=="data"){ag.movie=ai[ae]}else{if(ae.toLowerCase()=="styleclass"){ah+=' class="'+ai[ae]+'"'}else{if(ae.toLowerCase()!="classid"){ah+=" "+ae+'="'+ai[ae]+'"'}}}}}var af="";for(var ad in ag){if(ag[ad]!=Object.prototype[ad]){af+='<param name="'+ad+'" value="'+ag[ad]+'" />'}}aa.outerHTML='<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"'+ah+">"+af+"</object>";N[N.length]=ai.id;X=c(ai.id)}else{var Z=C(r);Z.setAttribute("type",q);for(var ac in ai){if(ai[ac]!=Object.prototype[ac]){if(ac.toLowerCase()=="styleclass"){Z.setAttribute("class",ai[ac])}else{if(ac.toLowerCase()!="classid"){Z.setAttribute(ac,ai[ac])}}}}for(var ab in ag){if(ag[ab]!=Object.prototype[ab]&&ab.toLowerCase()!="movie"){e(Z,ab,ag[ab])}}aa.parentNode.replaceChild(Z,aa);X=Z}}return X}function e(Z,X,Y){var aa=C("param");aa.setAttribute("name",X);aa.setAttribute("value",Y);Z.appendChild(aa)}function y(Y){var X=c(Y);if(X&&X.nodeName=="OBJECT"){if(M.ie&&M.win){X.style.display="none";(function(){if(X.readyState==4){b(Y)}else{setTimeout(arguments.callee,10)}})()}else{X.parentNode.removeChild(X)}}}function b(Z){var Y=c(Z);if(Y){for(var X in Y){if(typeof Y[X]=="function"){Y[X]=null}}Y.parentNode.removeChild(Y)}}function c(Z){var X=null;try{X=j.getElementById(Z)}catch(Y){}return X}function C(X){return j.createElement(X)}function i(Z,X,Y){Z.attachEvent(X,Y);I[I.length]=[Z,X,Y]}function F(Z){var Y=M.pv,X=Z.split(".");X[0]=parseInt(X[0],10);X[1]=parseInt(X[1],10)||0;X[2]=parseInt(X[2],10)||0;return(Y[0]>X[0]||(Y[0]==X[0]&&Y[1]>X[1])||(Y[0]==X[0]&&Y[1]==X[1]&&Y[2]>=X[2]))?true:false}function v(ac,Y,ad,ab){if(M.ie&&M.mac){return}var aa=j.getElementsByTagName("head")[0];if(!aa){return}var X=(ad&&typeof ad=="string")?ad:"screen";if(ab){n=null;G=null}if(!n||G!=X){var Z=C("style");Z.setAttribute("type","text/css");Z.setAttribute("media",X);n=aa.appendChild(Z);if(M.ie&&M.win&&typeof j.styleSheets!=D&&j.styleSheets.length>0){n=j.styleSheets[j.styleSheets.length-1]}G=X}if(M.ie&&M.win){if(n&&typeof n.addRule==r){n.addRule(ac,Y)}}else{if(n&&typeof j.createTextNode!=D){n.appendChild(j.createTextNode(ac+" {"+Y+"}"))}}}function w(Z,X){if(!m){return}var Y=X?"visible":"hidden";if(J&&c(Z)){c(Z).style.visibility=Y}else{v("#"+Z,"visibility:"+Y)}}function L(Y){var Z=/[\\\"<>\.;]/;var X=Z.exec(Y)!=null;return X&&typeof encodeURIComponent!=D?encodeURIComponent(Y):Y}var d=function(){if(M.ie&&M.win){window.attachEvent("onunload",function(){var ac=I.length;for(var ab=0;ab<ac;ab++){I[ab][0].detachEvent(I[ab][1],I[ab][2])}var Z=N.length;for(var aa=0;aa<Z;aa++){y(N[aa])}for(var Y in M){M[Y]=null}M=null;for(var X in swfobject){swfobject[X]=null}swfobject=null})}}();return{registerObject:function(ab,X,aa,Z){if(M.w3&&ab&&X){var Y={};Y.id=ab;Y.swfVersion=X;Y.expressInstall=aa;Y.callbackFn=Z;o[o.length]=Y;w(ab,false)}else{if(Z){Z({success:false,id:ab})}}},getObjectById:function(X){if(M.w3){return z(X)}},embedSWF:function(ab,ah,ae,ag,Y,aa,Z,ad,af,ac){var X={success:false,id:ah};if(M.w3&&!(M.wk&&M.wk<312)&&ab&&ah&&ae&&ag&&Y){w(ah,false);K(function(){ae+="";ag+="";var aj={};if(af&&typeof af===r){for(var al in af){aj[al]=af[al]}}aj.data=ab;aj.width=ae;aj.height=ag;var am={};if(ad&&typeof ad===r){for(var ak in ad){am[ak]=ad[ak]}}if(Z&&typeof Z===r){for(var ai in Z){if(typeof am.flashvars!=D){am.flashvars+="&"+ai+"="+Z[ai]}else{am.flashvars=ai+"="+Z[ai]}}}if(F(Y)){var an=u(aj,am,ah);if(aj.id==ah){w(ah,true)}X.success=true;X.ref=an}else{if(aa&&A()){aj.data=aa;P(aj,am,ah,ac);return}else{w(ah,true)}}if(ac){ac(X)}})}else{if(ac){ac(X)}}},switchOffAutoHideShow:function(){m=false},ua:M,getFlashPlayerVersion:function(){return{major:M.pv[0],minor:M.pv[1],release:M.pv[2]}},hasFlashPlayerVersion:F,createSWF:function(Z,Y,X){if(M.w3){return u(Z,Y,X)}else{return undefined}},showExpressInstall:function(Z,aa,X,Y){if(M.w3&&A()){P(Z,aa,X,Y)}},removeSWF:function(X){if(M.w3){y(X)}},createCSS:function(aa,Z,Y,X){if(M.w3){v(aa,Z,Y,X)}},addDomLoadEvent:K,addLoadEvent:s,getQueryParamValue:function(aa){var Z=j.location.search||j.location.hash;if(Z){if(/\?/.test(Z)){Z=Z.split("?")[1]}if(aa==null){return L(Z)}var Y=Z.split("&");for(var X=0;X<Y.length;X++){if(Y[X].substring(0,Y[X].indexOf("="))==aa){return L(Y[X].substring((Y[X].indexOf("=")+1)))}}}return""},expressInstallCallback:function(){if(a){var X=c(R);if(X&&l){X.parentNode.replaceChild(l,X);if(Q){w(Q,true);if(M.ie&&M.win){l.style.display="block"}}if(E){E(B)}}a=false}}}}();;
/*!
 * VideoPress JavaScript Loader 1.09
 *
 * Copyright 2011 Automattic Inc.
 * Licensed under GNU General Public License (GPL) Version 2 or later
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

// jQuery.type() was introduced in 1.4.3, WP 3.0 has 1.4.2 
// To maintain backwards compatibility, insert our own version if it doesn't exist 
if ( typeof jQuery.type != 'function' ) { 
	jQuery.extend({
		class2type: {},
	
		type: function( obj ) { 
	 		return obj == null ? 
	 	    	String( obj ) : 
	 	    	jQuery.class2type[ toString.call(obj) ] || "object"; 
		}
	});
	
	jQuery.each("Boolean Number String Function Array Date RegExp Object".split(" "), function(i, name) { 
	 	jQuery.class2type[ "[object " + name + "]" ] = name.toLowerCase(); 
	}); 
	
} 

jQuery.extend({VideoPress: {
	error:{
		messages:{
			age:"You are of insufficient age to view this video.",
			error:"Unable to download and play video",
			flash:"Error loading Flash on your system",
			freedom:'You do not have sufficient <a href="http://www.gnu.org/philosophy/free-sw.html">Freedom levels</a> to view this video.',
			incompatible:'VideoPress requires either HTML5 video or <a href="http://www.adobe.com/go/getflashplayer">Adobe Flash Player 10</a> or above for playback.',
			incapable:"Your device is incapable of playing the requested video.",
			network:"A network error prevented video download and playback"
		}
	},
	support:{
		flash: function() {
			if ( typeof swfobject !== "undefined" && swfobject.hasFlashPlayerVersion( jQuery.VideoPress.video.flash.min_version ) ) {
				return true;
			} else {
				return false;
			}
		},
		html5Video: function(sourcetype) {
			var v = document.createElement("video");
			if ( !!v.canPlayType ) {
				if ( jQuery.type(sourcetype)==="string" ) {
					return !!v.canPlayType(sourcetype).replace(/no/,"");
				}
				return true;
			} else {
				return false;
			}
		}
	},
	data:[],
	analytics:{
		wpcom:{
			base_uri:"//stats.wordpress.com/v.gif?",
			params:function(guid, filetype) {
				var data = jQuery.VideoPress.data[guid];
				if ( !jQuery.isPlainObject(data) ) {
					return;
				}

				var params = {blog:data.blog,post:data.post,page_url:top.document.URL};
				if ( filetype==="mp4" && data.mp4 && data.mp4.size ) {
					params.video_fmt = "fmt_" + data.mp4.size;
				} else {
					params.video_fmt = "fmt_std";
				}
				return params;
			},
			send:function(params) {
				var beacon = new Image();
				beacon.src = jQuery.VideoPress.analytics.wpcom.base_uri + jQuery.param(params);
				beacon=null;
			}
		},
		ga:{
			is_active:function(){
				if ( (typeof _gaq !== "undefined") && jQuery.type( _gaq )==="array" ) {
					return true;
				} else {
					return false;
				}
			}
		},
		/*comscore:{
			is_active()function(){
				if ( typeof COMSCORE !== "undefined" )
					return true;
			}
		}*/
		impression:function(guid) {
			var params = jQuery.VideoPress.analytics.wpcom.params( guid, "mp4" );
			if ( !jQuery.isPlainObject( params ) ) {
				return;
			}
			params.video_impression = 1;
			jQuery.VideoPress.analytics.wpcom.send( params );
		},
		played:function(guid, filetype) {
			var params = jQuery.VideoPress.analytics.wpcom.params( guid, filetype );
			if ( !jQuery.isPlainObject( params ) ) {
				return;
			}
			params.video_play = 1;
			jQuery.VideoPress.analytics.wpcom.send( params );

			if ( jQuery.VideoPress.analytics.ga.is_active() ) {
				/* Google Analytics tracks unique events per visit.
				 * Unique video value omitted since two videos on the same page that are both played would only be recorded as one play event.
				 */
				_gaq.push( ["_trackEvent", "Videos", "Play" ] );
			}
		},
		watched:function( guid, filetype, current_time, initial_time ) {
			if ( jQuery.VideoPress.data[guid].playback === undefined ) {
				var start = 0;
				if ( initial_time !== undefined && jQuery.type(initial_time)==="number" && initial_time > 0 ) {
					if ( current_time > initial_time ) {
						start = current_time - initial_time;
					}
				}
				jQuery.VideoPress.data[guid].playback = { last_observed:current_time, time_elapsed:start };
			}
			var time_watched = current_time - jQuery.VideoPress.data[guid].playback.last_observed;
			if ( time_watched > 0 ) {
				jQuery.VideoPress.data[guid].playback.time_elapsed += time_watched;
				jQuery.VideoPress.data[guid].playback.last_observed = current_time;
				if ( jQuery.VideoPress.data[guid].playback.time_elapsed > 15 ) {
					var params = jQuery.VideoPress.analytics.wpcom.params( guid, filetype );
					if ( !jQuery.isPlainObject( params ) ) {
			  			return;
					}
					params.t = 15;
					jQuery.VideoPress.analytics.wpcom.send( params );
					jQuery.VideoPress.data[guid].playback.time_elapsed -= 15;
				} else if ( current_time === jQuery.VideoPress.data[guid].duration ) {
					jQuery.VideoPress.analytics.wpcom.send( params );
					jQuery.VideoPress.data[guid].playback.time_elapsed = 0;
					delete jQuery.VideoPress.data[guid].playback;
				}
			}
		}
	},
	requirements:{
		isSufficientAge: function( container_el, min_age ) {
			var birthday = new Date( parseInt( jQuery( "select[name=year]", container_el ).val() ), parseInt( jQuery( "select[name=month]", container_el ).val() ), parseInt( jQuery( "select[name=day]", container_el ).val() ) );
			var allowed_age = new Date( Date.now() - (1000*60*60*24*365*min_age) );
			if ( birthday > allowed_age ) {
				container_el.html( '<p class="error" style="color:#fff;font-weight:bold">' + jQuery.VideoPress.error.messages.age + "</p>");
			} else {
				jQuery.VideoPress.video.play(container_el);
			}
		},
		allowedDomain: function (allowed_domains) {
			if ( jQuery.type(allowed_domains)==="array" ) {
				if ( jQuery.inArray( top.document.location.hostname, allowed_domains )===-1 ) {
					return false;
				}
			}
			return true;
		}
	},
	video:{
		flash:{
			// Protocol and domain for player_uri and expressinstall set in video.play()
			player_uri: ( 'https:' == location.protocol ? 'https://v0.wordpress.com' : 'http://s0.videopress.com' ) + "/player.swf?v=1.03",
			min_version:"10.0.0",
			params:{wmode:"direct",quality:"autohigh",seamlesstabbing:"true",allowfullscreen:"true",allowscriptaccess:"always",overstretch:"true"},
			expressinstall: ( 'https:' == location.protocol ? 'https://v0.wordpress.com' : 'http://s0.videopress.com' ) + "/playerProductInstall.swf",
			embedCallback: function(event) {
				if ( event.success===false ) {
					jQuery("#" + event.id).html("<p>" + jQuery.VideoPress.error.messages.flash + "</p>");
				}
			}
		},
		types:{mp4:'video/mp4; codecs="avc1.64001E, mp4a.40.2"',ogv:'video/ogg; codecs="theora, vorbis"'},
		canPlay:function () {
			if ( jQuery.VideoPress.support.flash() ) {
				jQuery.VideoPress.video.playerSupport = "flash";
			} else if ( jQuery.VideoPress.support.html5Video() ) {
				if ( jQuery.VideoPress.support.html5Video( jQuery.VideoPress.video.types.mp4 ) ) {
					jQuery.VideoPress.video.playerSupport = "mp4";
				} else if ( jQuery.VideoPress.support.html5Video( jQuery.VideoPress.video.types.ogv ) ) {
					jQuery.VideoPress.video.playerSupport = "ogv";
				} else {
					jQuery.VideoPress.video.playerSupport = "html5";
				}
			} else {
				jQuery.VideoPress.video.playerSupport = "";
			}
		},
		prepare: function ( guid, config, count ) {
			var video = jQuery.VideoPress.data[guid][count];
			if ( config.container === undefined || jQuery.type(video)!=="object" ) {
				return;
			}
			
			var width = 0;
			if ( config.width !== undefined ) {
				width = config.width;
			} else {
				config.container.width();
			}


			var height = 0;
			if ( config.height !== undefined ) {
				height = config.height;
			} else {
				config.container.height();
			}
			
			var div_id = "#v-" + guid + '-' + count;
			
			var parent_width = jQuery( div_id ).parent().width();
			var diffw = 0;
			var diffh = 0;
			var ratio = 0;
			if ( width > parent_width ) {
				diffw = width - parent_width + 11;
				ratio = ( width * 1.0 ) / ( height * 1.0 );
				diffh = diffw / ratio;
				
				width -= diffw;
				height -= Math.round( diffh );
			}
			
			if ( width < 60 || height < 60 ) {
				width = 400;
				height = 300;
			}
			
			jQuery.VideoPress.data[guid][count].dimensions = {};
			
			if( 0 == ratio ) {
				jQuery.VideoPress.data[guid][count].dimensions.width = width;
				jQuery.VideoPress.data[guid][count].dimensions.height = height;
			}
			else {
				jQuery.VideoPress.data[guid][count].dimensions.width = width - 7;
				jQuery.VideoPress.data[guid][count].dimensions.height = height - Math.round( 7 / ratio );
				
				jQuery( div_id ).width( width );
				jQuery( div_id ).height( height + 50 );
	
				jQuery( div_id + "-placeholder" ).width( jQuery.VideoPress.data[guid][count].dimensions.width );
				jQuery( div_id + "-placeholder" ).height( jQuery.VideoPress.data[guid][count].dimensions.height );
	
				jQuery( div_id + "-placeholder img.videopress-poster" ).width( jQuery.VideoPress.data[guid][count].dimensions.width );
				jQuery( div_id + "-placeholder img.videopress-poster" ).height( jQuery.VideoPress.data[guid][count].dimensions.height );
			}

			config.container.data( "guid", guid );
			config.container.data( "count", count );
			if ( jQuery.VideoPress.video.playerSupport === undefined ) {
				jQuery.VideoPress.video.canPlay();
			}

			if ( config.freedom===true && jQuery.type(video.ogv)==="string" ) {
				jQuery.VideoPress.video.insert( config.container, guid, count, video, "ogv", jQuery.VideoPress.data[guid][count].dimensions.width, jQuery.VideoPress.data[guid].dimensions.height );
				config.container.data( "player", "ogv" );
			} else if ( jQuery.VideoPress.video.playerSupport === "flash" ) {
				config.container.data( "player", "flash" );
				config.container.append( '<div id="v-' + guid + "-" + count + '-video">' );
			} else if ( jQuery.inArray( jQuery.VideoPress.video.playerSupport, ["html5","mp4","ogv"] ) && ( jQuery.type(video.mp4.uri)==="string" || jQuery.type(video.ogv.uri)==="string" ) ) {
				var load_type = "html5";
				if ( jQuery.VideoPress.video.playerSupport==="mp4" && video.mp4!==undefined && jQuery.type(video.mp4.uri)==="string" ) {
					load_type = "mp4";
				} else if ( jQuery.VideoPress.video.playerSupport==="ogv" && video.ogv!==undefined && jQuery.type(video.ogv.uri)==="string" ) {
					load_type = "ogv";
				}
				jQuery.VideoPress.video.insert( config.container, guid, count, video, load_type, jQuery.VideoPress.data[guid][count].dimensions.width, jQuery.VideoPress.data[guid][count].dimensions.height );
				config.container.data( "player", load_type );
				load_type=null;
			} else {
				config.container.html('<p class="videopress-error">' + jQuery.VideoPress.error.messages.incompatible + '</p>');
				return false;
			}
			return true;
		},
		insert: function( container_el, guid, count, video_data, video_type, width, height ) {
			var video_id = "v-" + guid + "-" + count + "-video";
			var video_el = jQuery("<video />");
			video_el.attr( "id", video_id );
			video_el.attr( "width", width );
			video_el.attr( "height", height );
			video_el.attr( "poster", video_data.poster );
			if ( video_type==="ogv" ) {
				video_el.attr( "preload", "metadata" );
			} else {
				video_el.attr( "preload", "none" );
			}
			video_el.attr( "controls", "true" );
			video_el.attr( "x-webkit-airplay", "allow" );
			if ( video_type==="mp4" && video_data.mp4!==undefined && jQuery.type(video_data.mp4.uri)==="string" ) {
				video_el.attr( "src", video_data.mp4.uri );
			} else if ( video_type==="ogv" && video_data.ogv!==undefined && jQuery.type(video_data.ogv.uri)==="string" ) {
				video_el.attr( "src", video_data.ogv.uri );
			} else {
				// Purposely omit source type attribute since the browser does not seem to support specifics such as canPlayType
				if ( video_data.mp4!==undefined && jQuery.type(video_data.mp4.uri)==="string" ) {
					video_el.append( '<source src="' + video_data.mp4.uri + '" />' );
				}
				if ( video_data.ogv!==undefined && jQuery.type(video_data.ogv.uri)==="string" ) {
					video_el.append( '<source src="' + video_data.ogv.uri + '" />' );
				}
			}
			
			if ( video_data.tracks !== undefined ) {
				video_el.append( video_data.tracks );
			}
			video_el.append( '<p class="videopress-error">' + jQuery.VideoPress.error.messages.incompatible + "</p>" );
			video_el.hide();
			container_el.append( video_el );
			video_el=null;
			video_id=null;
		},
		play: function( container_el ) {
			var player = container_el.data( "player" );
			if ( player===undefined ) {
				player="flash";
			}

			var guid = container_el.data( "guid" );
			var count = container_el.data( "count" );

			if ( player === "flash" ) {
				jQuery( "#" + container_el.attr("id") + "-placeholder", container_el ).remove();

				var player_uri = jQuery.VideoPress.video.flash.player_uri;
				var expressinstall = jQuery.VideoPress.video.flash.expressinstall;

				swfobject.embedSWF( player_uri, "v-" + guid + "-" + count + "-video", jQuery.VideoPress.data[guid][count].dimensions.width, jQuery.VideoPress.data[guid][count].dimensions.height, jQuery.VideoPress.video.flash.min_version, expressinstall, {guid:guid,autoPlay:"true",isDynamicSeeking:"true",hd:jQuery.VideoPress.data[guid][count].hd}, jQuery.VideoPress.video.flash.params, null, jQuery.VideoPress.video.flash.embedCallback );
			} else if ( jQuery.inArray( player, ["html5", "mp4", "ogv"] ) ) {
				var video_el = jQuery("video", container_el);
				if ( video_el ) {
					jQuery( "#" + container_el.attr("id") + "-placeholder", container_el ).remove();
					if ( player==="html5" ) {
						player = "mp4";
					}
					jQuery.VideoPress.video.playHTML5( video_el, guid, player );
				}
			} else {
				jQuery( "#" + container_el.attr("id") + "-placeholder", container_el ).remove();
				container_el.append( '<p class="videopress-error">Unable to play video. No suitable player.</p>' );
			}
		},
		playHTML5: function( video_el, guid, filetype ) {
			video_el.show();
			video_el[0].load();

			/* It seems load() sometimes does not work, but play() will trigger load.
			 * Tried attaching play() to a data event but data might not load
			 * So we trigger play() even if there is not enough data loaded to begin playback
			 */
			video_el[0].play();
			jQuery.VideoPress.analytics.played(guid, filetype);
			video_el.bind( "error stalled", function(e) {
				var message = jQuery.VideoPress.error.messages.error;
				try {
					// provide a more detailed error message if a failure reason is communicated
					switch (e.target.error.code) {
						case e.target.error.MEDIA_ERR_NETWORK:
							message = jQuery.VideoPress.error.messages.network;
							break;
						case e.target.error.MEDIA_ERR_DECODE:
						case e.target.error.MEDIA_ERR_SRC_NOT_SUPPORTED:
							message = jQuery.VideoPress.error.messages.incapable + " " + filetype.toUpperCase() + ".";
							break;
						default:
							break;
					}
				} catch( err ){}
				// provide an opportunity to silence an error with an empty string
				if ( message.length > 0 ) {
					video_el.html( '<p class="videopress-error">' + message + "</p>" );
				}
				message=null;
			} );
			video_el.bind( "durationchange", {guid:guid}, function( event ) {
				var duration = jQuery(event.target).attr("duration");
				if ( jQuery.type(duration)==="number" ) {
					jQuery.VideoPress.data[event.data.guid].duration = duration;
				}
				duration=null;
			} );

			/* Only record stats after video data has loaded
			 * If html5 video seems to work but we could not match on a specific codec descriptor then there may be multiple source elements. Browser chooses a source at runtime in source order. We check the loaded video filetype instead of assuming MP4.
			 */
			video_el.one( "loadeddata", {guid:guid, filetype:filetype}, function( event ){
				var filetype = event.data.filetype;
				var loaded_file = jQuery(event.target).attr("currentSrc");
				if ( jQuery.type(loaded_file)==="string" && loaded_file.length > 3 ) {
					var ext = loaded_file.substr( loaded_file.lastIndexOf(".") + 1 ).toLowerCase();
					if ( jQuery.inArray( ext, ["mp4","ogv"] ) ) {
						filetype = ext;
					}
					ext=null;
				}
				video_el.bind( "play", {guid:event.data.guid,filetype:filetype}, function( event ) {
					jQuery.VideoPress.analytics.played(event.data.guid, event.data.filetype);
				} );
				video_el.bind( "timeupdate", {guid:event.data.guid,filetype:filetype}, function( event ) {
					var target = jQuery(event.target);
					jQuery.VideoPress.analytics.watched( event.data.guid, event.data.filetype, target.attr("currentTime"), target.attr("initialTime") );
					target=null;
				} );
				video_el.bind( "ended", {guid:event.data.guid,filetype:filetype}, function( event ) {
					jQuery.VideoPress.analytics.watched( event.data.guid, event.data.filetype, jQuery.VideoPress.data[guid].duration, jQuery(event.target).attr("initialTime") );
				} );
			} );
		}
	}
}});
;
// @start-hide-in-jetpack
if (typeof wpcom === "undefined") {
	var wpcom = {};
}
wpcom.carousel = (function($) {
	var prebuilt_widths = jetpackCarouselStrings.widths;
	var pageviews_stats_args = jetpackCarouselStrings.stats_query_args;

	var findFirstLargeEnoughWidth = function(original_w, original_h, dest_w, dest_h) {
		var inverse_ratio = original_h / original_w;

		for ( var i = 0; i < prebuilt_widths.length; ++i ) {
			if ( prebuilt_widths[i] >= dest_w || prebuilt_widths[i] * inverse_ratio >= dest_h )
				return prebuilt_widths[i];
		}

		return original_w;
	};

	var addWidthToImageURL = function(url, width) {
		width = parseInt(width, 10);
		// Give devices with a higher devicePixelRatio higher-res images (Retina display = 2, Android phones = 1.5, etc)
		if ('undefined' != typeof window.devicePixelRatio && window.devicePixelRatio > 1)
			width = Math.round( width * window.devicePixelRatio );
		url = addArgToURL(url, 'w', width);
		url = addArgToURL(url, 'h', '');
		return url;
	};

	var addArgToURL = function(url, arg, value) {
		var re = new RegExp(arg+'=[^?&]+');
		if ( url.match(re) ) {
			return url.replace(re, arg + '=' + value);
		} else {
			var divider = url.indexOf('?') !== -1 ? '&' : '?';
			return url + divider + arg + '=' + value;
		}
	};

	var stat = function ( names ) {
		if ( typeof names != 'string' )
			names = names.join( ',' );

		new Image().src = window.location.protocol +
			'//stats.wordpress.com/g.gif?v=wpcom-no-pv' +
			'&x_carousel=' + names +
			'&baba=' + Math.random();
	};

	var pageview = function ( post_id ) {
		new Image().src = window.location.protocol +
			'//stats.wordpress.com/g.gif?host=' + encodeURIComponent( window.location.host ) +
			'&ref=' + encodeURIComponent( document.referrer ) +
			'&rand=' + Math.random() +
			'&' + pageviews_stats_args +
			'&post=' + encodeURIComponent( post_id );
	};


	return {
		findFirstLargeEnoughWidth: findFirstLargeEnoughWidth,
		addWidthToImageURL: addWidthToImageURL,
		stat: stat,
		pageview: pageview
	};

})(jQuery);
// @end-hide-in-jetpack

jQuery(document).ready(function($) {

	// gallery faded layer and container elements
	var overlay, comments, gallery, container, nextButton, previousButton, info, title, transitionBegin,
	caption, resizeTimeout, mouseTimeout, photo_info, close_hint, commentInterval, lastSelectedSlide,
	screenPadding = 110, originalOverflow = $('body').css('overflow'), originalHOverflow = $('html').css('overflow'), proportion = 85,
	last_known_location_hash = '';

	if ( window.innerWidth <= 760 ) {
		screenPadding = Math.round( ( window.innerWidth / 760 ) * 110 );

		if ( screenPadding < 40 && ( ( 'ontouchstart' in window ) || window.DocumentTouch && document instanceof DocumentTouch ) )
			screenPadding = 0;
	}

	var keyListener = function(e){
		switch(e.which){
			case 38: // up
				e.preventDefault();
				container.scrollTop(container.scrollTop() - 100);
				break;
			case 40: // down
				e.preventDefault();
				container.scrollTop(container.scrollTop() + 100);
				break;
			case 39: // right
				e.preventDefault();
				gallery.jp_carousel('clearCommentTextAreaValue');
				gallery.jp_carousel('next');
				break;
			case 37: // left
			case 8: // backspace
				e.preventDefault();
				gallery.jp_carousel('clearCommentTextAreaValue');
				gallery.jp_carousel('previous');
				break;
			case 27: // escape
				e.preventDefault();
				gallery.jp_carousel('clearCommentTextAreaValue');
				container.jp_carousel('close');
				break;
			default:
				// making jslint happy
				break;
		}
	};

	var resizeListener = function(e){
		clearTimeout(resizeTimeout);
		resizeTimeout = setTimeout(function(){
			gallery
				.jp_carousel('slides')
				.jp_carousel('fitSlide', true);
			gallery.jp_carousel('updateSlidePositions', true);
			gallery.jp_carousel('fitMeta', true);
		}, 200);
	};

	var prepareGallery = function( dataCarouselExtra ){
		if (!overlay) {
			overlay = $('<div></div>')
				.addClass('jp-carousel-overlay')
				.css({
					'position' : 'absolute',
					'top'      : 0,
					'right'    : 0,
					'bottom'   : 0,
					'left'     : 0
				});

			var buttons  = '<a class="jp-carousel-commentlink" href="#">' + jetpackCarouselStrings.comment + '</a>';
			if ( 1 == jetpackCarouselStrings.is_logged_in ) {
// @start-hide-in-jetpack
				if ( 1 == jetpackCarouselStrings.is_public )
					buttons += '<a class="jp-carousel-reblog" href="#">' + jetpackCarouselStrings.reblog + '</a>';
// @end-hide-in-jetpack
			}

			buttons  = $('<div class="jp-carousel-buttons">' + buttons + '</div>');

			caption    = $('<h2></h2>');
			photo_info = $('<div class="jp-carousel-photo-info"></div>').append(caption);

			imageMeta = $('<div></div>')
				.addClass('jp-carousel-image-meta')
				.css({
					'float'      : 'right',
					'margin-top' : '20px',
					'width'      :  '250px'
				});

			imageMeta
				.append( buttons )
				.append( "<ul class='jp-carousel-image-exif' style='display:none;'></ul>" )
				.append( "<a class='jp-carousel-image-download' style='display:none;'></a>" )
				.append( "<div class='jp-carousel-image-map' style='display:none;'></div>" );

			titleAndDescription = $('<div></div>')
				.addClass('jp-carousel-titleanddesc')
				.css({
					'width'      : '100%',
					'margin-top' : imageMeta.css('margin-top')
				});

			var commentFormMarkup = '<div id="jp-carousel-comment-form-container">';

			if ( jetpackCarouselStrings.local_comments_commenting_as && jetpackCarouselStrings.local_comments_commenting_as.length ) {
				// Jetpack comments not enabled, fallback to local comments

				if ( 1 != jetpackCarouselStrings.is_logged_in && 1 == jetpackCarouselStrings.comment_registration ) {
					commentFormMarkup += '<div id="jp-carousel-comment-form-commenting-as">' + jetpackCarouselStrings.local_comments_commenting_as + '</div>';
				} else {
					commentFormMarkup += '<form id="jp-carousel-comment-form">';
					commentFormMarkup += '<textarea name="comment" class="jp-carousel-comment-form-field jp-carousel-comment-form-textarea" id="jp-carousel-comment-form-comment-field" placeholder="' + jetpackCarouselStrings.write_comment + '"></textarea>';
					commentFormMarkup += '<div id="jp-carousel-comment-form-submit-and-info-wrapper">';
					commentFormMarkup += '<div id="jp-carousel-comment-form-commenting-as">' + jetpackCarouselStrings.local_comments_commenting_as + '</div>';
					commentFormMarkup += '<input type="submit" name="submit" class="jp-carousel-comment-form-button" id="jp-carousel-comment-form-button-submit" value="'+jetpackCarouselStrings.post_comment+'" />';
					commentFormMarkup += '<span id="jp-carousel-comment-form-spinner">&nbsp;</span>';
					commentFormMarkup += '<div id="jp-carousel-comment-post-results"></div>';
					commentFormMarkup += '</div>';
					commentFormMarkup += '</form>';
				}
			}
			commentFormMarkup += '</div>';

			commentForm = $(commentFormMarkup)
				.css({
					'width'      : '100%',
					'margin-top' : '20px',
					'color'      : '#999'
				});

			comments = $('<div></div>')
				.addClass('jp-carousel-comments')
				.css({
					'width'      : '100%',
					'bottom'     : '10px',
					'margin-top' : '20px'
				});

			commentsLoading = $('<div id="jp-carousel-comments-loading"><span>'+jetpackCarouselStrings.loading_comments+'</span></div>')
				.css({
					'width'      : '100%',
					'bottom'     : '10px',
					'margin-top' : '20px'
				});

			leftWidth = ( $(window).width() - ( screenPadding * 2 ) ) - (imageMeta.width() + 40);
			leftWidth += 'px';

			leftColWrapper = $('<div></div>')
				.addClass('jp-carousel-left-column-wrapper')
				.css({
					'width' : Math.floor( leftWidth )
				})
				.append(titleAndDescription)
				.append(commentForm)
				.append(comments)
				.append(commentsLoading);

			fadeaway = $('<div></div>')
				.addClass('jp-carousel-fadeaway');

			info = $('<div></div>')
				.addClass('jp-carousel-info')
				.css({
					'top'   : Math.floor( ($(window).height() / 100) * proportion ),
					'left'  : screenPadding,
					'right' : screenPadding
				})
				.append(photo_info)
				.append(imageMeta);

			if ( window.innerWidth <= 760 ) {
				photo_info.remove().insertAfter( titleAndDescription );
				info.prepend( leftColWrapper );
			}
			else {
				info.append( leftColWrapper );
			}

			targetBottomPos = ( $(window).height() - parseInt( info.css('top'), 10 ) ) + 'px';

			nextButton = $("<div><span></span></div>")
				.addClass('jp-carousel-next-button')
				.css({
					'right'    : '15px',
				});

			previousButton = $("<div><span></span></div>")
				.addClass('jp-carousel-previous-button')
				.css({
					'left'     : 0,
				});

			nextButton.add( previousButton ).css( {
				'position' : 'fixed',
				'top' : '40px',
				'bottom' : targetBottomPos,
				'width' : screenPadding
			} );

			gallery = $('<div></div>')
				.addClass('jp-carousel')
				.css({
					'position' : 'absolute',
					'top'      : 0,
					'bottom'   : targetBottomPos,
					'left'     : 0,
					'right'    : 0
				});

			close_hint = $('<div class="jp-carousel-close-hint"><span>&times;</span></div>')
				.css({
					position : 'fixed'
				});

			container = $("<div></div>")
				.addClass('jp-carousel-wrap')
				.addClass( 'jp-carousel-transitions' );

			if ( 'white' == jetpackCarouselStrings.background_color )
				 container.addClass('jp-carousel-light');

			container.css({
					'position'   : 'fixed',
					'top'        : 0,
					'right'      : 0,
					'bottom'     : 0,
					'left'       : 0,
					'z-index'    : 2147483647,
					'overflow-x' : 'hidden',
					'overflow-y' : 'auto',
					'direction'  : 'ltr'
				})
				.hide()
				.append(overlay)
				.append(gallery)
				.append(fadeaway)
				.append(info)
				.append(nextButton)
				.append(previousButton)
				.append(close_hint)
				.appendTo($('body'))
				.click(function(e){
					var target = $(e.target), wrap = target.parents('div.jp-carousel-wrap'), data = wrap.data('carousel-extra'),
						slide = wrap.find('div.selected'), attachment_id = slide.data('attachment-id');
					data = data || [];

					if ( target.is(gallery) || target.parents().add(target).is(close_hint) ) {
						container.jp_carousel('close');
// @start-hide-in-jetpack
					} else if ( target.hasClass('jp-carousel-reblog') ) {
						e.preventDefault();
						e.stopPropagation();
						if ( !target.hasClass('reblogged') ) {
							target.jp_carousel('show_reblog_box');
							wpcom.carousel.stat('reblog_show_box');
						}
					} else if ( target.parents('#carousel-reblog-box').length ) {
						if ( target.is('a.cancel') ) {
							e.preventDefault();
							e.stopPropagation();
							target.jp_carousel('hide_reblog_box');
							wpcom.carousel.stat('reblog_cancel');
						} else if ( target.is( 'input[type="submit"]' ) ) {
							e.preventDefault();
							e.stopPropagation();

							var note = $('#carousel-reblog-box textarea').val();
							if ( jetpackCarouselStrings.reblog_add_thoughts == note )
								note = '';

							$('#carousel-reblog-submit').val( jetpackCarouselStrings.reblogging );
							$('#carousel-reblog-submit').prop('disabled', true);
							$( '#carousel-reblog-box div.submit span.canceltext' ).spin( 'small' );

							$.post( jetpackCarouselStrings.ajaxurl, {
								'action': 'post_reblog',
								'reblog_source': 'carousel',
								'original_blog_id': $('#carousel-reblog-box input#carousel-reblog-blog-id').val(),
								'original_post_id': $('.jp-carousel div.selected').data('attachment-id'),
								'blog_id': $('#carousel-reblog-box select').val(),
								'blog_url': $('#carousel-reblog-box input#carousel-reblog-blog-url').val(),
								'blog_title': $('#carousel-reblog-box input#carousel-reblog-blog-title').val(),
								'post_url': $('#carousel-reblog-box input#carousel-reblog-post-url').val(),
								'post_title': slide.data( 'caption' ) || $('#carousel-reblog-box input#carousel-reblog-post-title').val(),
								'note': note,
								'_wpnonce': $('#carousel-reblog-box #_wpnonce').val()
							},
							function(result) {
								$('#carousel-reblog-box').css({ 'height': $('#carousel-reblog-box').height() + 'px' }).slideUp('fast');
								$('a.jp-carousel-reblog').html( jetpackCarouselStrings.reblogged ).removeClass( 'reblog' ).addClass( 'reblogged' );
								$( '#carousel-reblog-box div.submit span.canceltext' ).spin( false );
								$('#carousel-reblog-submit').val( jetpackCarouselStrings.post_reblog );
								$('div.jp-carousel-info').children().not('#carousel-reblog-box').fadeIn('fast');
								slide.data('reblogged', 1);
								$('div.gallery').find('img[data-attachment-id="' + slide.data('attachment-id') + '"]').data('reblogged', 1);


							}, 'json' );
							wpcom.carousel.stat('reblog_submit');
						}
					} else if ( target.hasClass( 'jp-carousel-image-download' ) ) {
						wpcom.carousel.stat( 'download_original_click' );
// @end-hide-in-jetpack
					} else if ( target.hasClass('jp-carousel-commentlink') ) {
						e.preventDefault();
						e.stopPropagation();
						$(window).unbind('keydown', keyListener);
						container.animate({scrollTop: parseInt(info.position()['top'], 10)}, 'fast');
						$('#jp-carousel-comment-form-submit-and-info-wrapper').slideDown('fast');
						$('#jp-carousel-comment-form-comment-field').focus();
					} else if ( target.hasClass('jp-carousel-comment-login') ) {
						var url = jetpackCarouselStrings.login_url + '%23jp-carousel-' + attachment_id;

						window.location.href = url;
					} else if ( target.parents('#jp-carousel-comment-form-container').length ) {
						var textarea = $('#jp-carousel-comment-form-comment-field')
							.blur(function(){
								$(window).bind('keydown', keyListener);
							})
							.focus(function(){
								$(window).unbind('keydown', keyListener);
							});

						var emailField = $('#jp-carousel-comment-form-email-field')
							.blur(function(){
								$(window).bind('keydown', keyListener);
							})
							.focus(function(){
								$(window).unbind('keydown', keyListener);
							});

						var authorField = $('#jp-carousel-comment-form-author-field')
							.blur(function(){
								$(window).bind('keydown', keyListener);
							})
							.focus(function(){
								$(window).unbind('keydown', keyListener);
							});

						var urlField = $('#jp-carousel-comment-form-url-field')
							.blur(function(){
								$(window).bind('keydown', keyListener);
							})
							.focus(function(){
								$(window).unbind('keydown', keyListener);
							});

						if ( textarea && textarea.attr('id') == target.attr('id')) {
							// For first page load
							$(window).unbind('keydown', keyListener);
							$('#jp-carousel-comment-form-submit-and-info-wrapper').slideDown('fast');
						} else if ( target.is( 'input[type="submit"]' ) ) {
							e.preventDefault();
							e.stopPropagation();

							$('#jp-carousel-comment-form-spinner').spin('small', 'white');

							var ajaxData = {
								action: 'post_attachment_comment',
								nonce:   jetpackCarouselStrings.nonce,
								blog_id: data['blog_id'],
								id:      attachment_id,
								comment: textarea.val()
							};

							if ( ! ajaxData['comment'].length ) {
								gallery.jp_carousel('postCommentError', {'field': 'jp-carousel-comment-form-comment-field', 'error': jetpackCarouselStrings.no_comment_text});
								return;
							}

							if ( 1 != jetpackCarouselStrings.is_logged_in ) {
								ajaxData['email']  = emailField.val();
								ajaxData['author'] = authorField.val();
								ajaxData['url']    = urlField.val();

								if ( 1 == jetpackCarouselStrings.require_name_email ) {
									if ( ! ajaxData['email'].length || ! ajaxData['email'].match('@') ) {
										gallery.jp_carousel('postCommentError', {'field': 'jp-carousel-comment-form-email-field', 'error': jetpackCarouselStrings.no_comment_email});
										return;
									} else if ( ! ajaxData['author'].length ) {
										gallery.jp_carousel('postCommentError', {'field': 'jp-carousel-comment-form-author-field', 'error': jetpackCarouselStrings.no_comment_author});
										return;
									}
								}
							}

							$.ajax({
								type:       'POST',
								url:        jetpackCarouselStrings.ajaxurl,
								data:       ajaxData,
								dataType:   'json',
								success: function(response, status, xhr) {
									if ( 'approved' == response.comment_status ) {
										$('#jp-carousel-comment-post-results').slideUp('fast').html('<span class="jp-carousel-comment-post-success">' + jetpackCarouselStrings.comment_approved + '</span>').slideDown('fast');
									} else if ( 'unapproved' == response.comment_status ) {
										$('#jp-carousel-comment-post-results').slideUp('fast').html('<span class="jp-carousel-comment-post-success">' + jetpackCarouselStrings.comment_unapproved + '</span>').slideDown('fast');
									} else {
										// 'deleted', 'spam', false
										$('#jp-carousel-comment-post-results').slideUp('fast').html('<span class="jp-carousel-comment-post-error">' + jetpackCarouselStrings.comment_post_error + '</span>').slideDown('fast');
									}
									gallery.jp_carousel('clearCommentTextAreaValue');
									gallery.jp_carousel('getComments', {attachment_id: attachment_id, offset: 0, clear: true});
									$('#jp-carousel-comment-form-button-submit').val(jetpackCarouselStrings.post_comment);
									$('#jp-carousel-comment-form-spinner').spin(false);
								},
								error: function(xhr, status, error) {
									// TODO: Add error handling and display here
									gallery.jp_carousel('postCommentError', {'field': 'jp-carousel-comment-form-comment-field', 'error': jetpackCarouselStrings.comment_post_error});
									return;
								}
							});
						}
					} else if ( ! target.parents( '.jp-carousel-info' ).length ) {
						container.jp_carousel('next');
					}
				})
				.bind('jp_carousel.afterOpen', function(){
					$(window).bind('keydown', keyListener);
					$(window).bind('resize', resizeListener);
					gallery.opened = true;

					resizeListener();
				})
				.bind('jp_carousel.beforeClose', function(){
					var scroll = $(window).scrollTop();

					$(window).unbind('keydown', keyListener);
					$(window).unbind('resize', resizeListener);
					$(window).scrollTop(scroll);
					gallery.jp_carousel( 'hide_reblog_box' ); // @hide-in-jetpack
				})
				.bind('jp_carousel.afterClose', function(){
					if ( history.pushState ) {
						history.pushState("", document.title, window.location.pathname + window.location.search);
					} else {
						last_known_location_hash = '';
						window.location.hash = '';
					}
					gallery.opened = false;
				})
				.on( 'transitionend.jp-carousel ', '.jp-carousel-slide', function ( e ) {
					// If the movement transitions take more than twice the allotted time, disable them.
					// There is some wiggle room in the 2x, since some of that time is taken up in
					// JavaScript, setting up the transition and calling the events.
					if ( 'transform' == e.originalEvent.propertyName ) {
						var transitionMultiplier = ( ( Date.now() - transitionBegin ) / 1000 ) / e.originalEvent.elapsedTime;

						container.off( 'transitionend.jp-carousel' );

						if ( transitionMultiplier >= 2 )
							$( '.jp-carousel-transitions' ).removeClass( 'jp-carousel-transitions' );
					}
				} );

				$( '.jp-carousel-wrap' ).touchwipe( {
					wipeLeft : function ( e ) {
						e.preventDefault();
						gallery.jp_carousel( 'next' );
					},
					wipeRight : function ( e ) {
						e.preventDefault();
						gallery.jp_carousel( 'previous' );
					},
					preventDefaultEvents : false
				} );

			$( '.jetpack-likes-widget-unloaded' ).each( function() {
				jetpackLikesWidgetQueue.push( this.id );
				});

			nextButton.add(previousButton).click(function(e){
				e.preventDefault();
				e.stopPropagation();
				if ( nextButton.is(this) ) {
					gallery.jp_carousel('next');
				} else {
					gallery.jp_carousel('previous');
				}
			});
		}
	};

	var methods = {
		testForData: function(gallery) {
			gallery = $( gallery ); // make sure we have it as a jQuery object.
			if ( ! gallery.length || undefined == gallery.data( 'carousel-extra' ) ) {
				return false;
			}
			return true;
		},

		testIfOpened: function() {
			if ( 'undefined' != typeof(gallery) && 'undefined' != typeof(gallery.opened) && true == gallery.opened )
				return true;
			return false;
		},

		open: function(options) {
			var settings = {
				'items_selector' : ".gallery-item [data-attachment-id], .tiled-gallery-item [data-attachment-id]",
				'start_index': 0
			},
			data = $(this).data('carousel-extra');

			if ( !data )
				return; // don't run if the default gallery functions weren't used

			prepareGallery( data );

			if ( gallery.jp_carousel( 'testIfOpened' ) )
				return; // don't open if already opened

			// make sure to stop the page from scrolling behind the carousel overlay, so we don't trigger
			// infiniscroll for it when enabled (Reader, theme infiniscroll, etc).
			originalOverflow = $('body').css('overflow');
			$('body').css('overflow', 'hidden');
			// prevent html from overflowing on some of the new themes.
			originalHOverflow = $('html').css('overflow');
			$('html').css('overflow', 'hidden');

			// Re-apply inline-block style here and give an initial value for the width
			// This value will get replaced with a more appropriate value once the slide is loaded
			// This avoids the likes widget appearing initially full width below the comment button and then shuffling up
			jQuery( '.slim-likes-widget' ).find( 'iframe' ).css( 'display', 'inline-block' ).css( 'width', '60px' );

			container.data('carousel-extra', data);
// @start-hide-in-jetpack
			wpcom.carousel.stat( ['open', 'view_image'] );
// @end-hide-in-jetpack

			return this.each(function() {
				// If options exist, lets merge them
				// with our default settings
				var $this = $(this);

				if ( options )
					$.extend( settings, options );
				if ( -1 == settings.start_index )
					settings.start_index = 0; //-1 returned if can't find index, so start from beginning

				container.trigger('jp_carousel.beforeOpen').fadeIn('fast',function(){
					container.trigger('jp_carousel.afterOpen');
					gallery
						.jp_carousel('initSlides', $this.find(settings.items_selector), settings.start_index)
						.jp_carousel('start', settings.start_index);
				});
				gallery.html('');
			});
		},

		start : function(start_index){
			var slides = this.jp_carousel('slides'), selected = slides.eq(start_index);

			if ( 0 === selected.length )
				selected = slides.eq(0);

			gallery.jp_carousel('selectSlide', selected, false);
			return this;
		},

		close : function(){
			// make sure to let the page scroll again
			$('body').css('overflow', originalOverflow);
			$('html').css('overflow', originalHOverflow);
			return container
				.trigger('jp_carousel.beforeClose')
				.fadeOut('fast', function(){
					container.trigger('jp_carousel.afterClose');
				});

		},

		next : function(){
			var slide = gallery.jp_carousel( 'nextSlide' );
			container.animate({scrollTop:0}, 'fast');
			gallery.jp_carousel( 'hide_reblog_box' ); // @hide-in-jetpack

			if ( slide ) {
				this.jp_carousel('selectSlide', slide);
				wpcom.carousel.stat( ['next', 'view_image'] ); // @hide-in-jetpack
			}
		},

		previous : function(){
			var slide = gallery.jp_carousel( 'prevSlide' );
			container.animate({scrollTop:0}, 'fast');
			gallery.jp_carousel( 'hide_reblog_box' ); // @hide-in-jetpack

			if ( slide ) {
				this.jp_carousel('selectSlide', slide);
				wpcom.carousel.stat( ['previous', 'view_image'] ); // @hide-in-jetpack
			}
		},

		resetButtons : function(current) {
			if ( current.data('liked') )
				$('.jp-carousel-buttons a.jp-carousel-like').addClass('liked').text(jetpackCarouselStrings.unlike);
			else
				$('.jp-carousel-buttons a.jp-carousel-like').removeClass('liked').text(jetpackCarouselStrings.like);
// @start-hide-in-jetpack
			if ( current.data( 'reblogged' ) )
				$('.jp-carousel-buttons a.jp-carousel-reblog').addClass( 'reblogged' ).text( jetpackCarouselStrings.reblogged );
			else
				$('.jp-carousel-buttons a.jp-carousel-reblog').removeClass( 'reblogged' ).text( jetpackCarouselStrings.reblog );

			// Must also take care of reblog/reblogged here
// @end-hide-in-jetpack
		},

		selectedSlide : function(){
			return this.find('.selected');
		},

		setSlidePosition : function(x) {
			transitionBegin = Date.now();

			return this.css({
					'-webkit-transform':'translate3d(' + x + 'px,0,0)',
					'-moz-transform':'translate3d(' + x + 'px,0,0)',
					'-ms-transform':'translate(' + x + 'px,0)',
					'-o-transform':'translate(' + x + 'px,0)',
					'transform':'translate3d(' + x + 'px,0,0)'
			});
		},

		updateSlidePositions : function(animate) {
			var current = this.jp_carousel( 'selectedSlide' ),
				galleryWidth = gallery.width(),
				currentWidth = current.width(),
				previous = gallery.jp_carousel( 'prevSlide' ),
				next = gallery.jp_carousel( 'nextSlide' ),
				previousPrevious = previous.prev(),
				nextNext = next.next(),
				left = Math.floor( ( galleryWidth - currentWidth ) * 0.5 );

			current.jp_carousel( 'setSlidePosition', left ).show();

			// minimum width
			gallery.jp_carousel( 'fitInfo', animate );

			// prep the slides
			var direction = lastSelectedSlide.is( current.prevAll() ) ? 1 : -1;

			// Since we preload the `previousPrevious` and `nextNext` slides, we need
			// to make sure they technically visible in the DOM, but invisible to the
			// user. To hide them from the user, we position them outside the edges
			// of the window.
			//
			// This section of code only applies when there are more than three
			// slides. Otherwise, the `previousPrevious` and `nextNext` slides will
			// overlap with the `previous` and `next` slides which must be visible
			// regardless.
			if ( 1 == direction ) {
				if ( ! nextNext.is( previous ) ) {
					nextNext.jp_carousel( 'setSlidePosition', galleryWidth + next.width() ).show();
				}

				if ( ! previousPrevious.is( next ) ) {
					previousPrevious.jp_carousel( 'setSlidePosition', -previousPrevious.width() - currentWidth ).show();
				}
			} else {
				if ( ! nextNext.is( previous ) ) {
					nextNext.jp_carousel( 'setSlidePosition', galleryWidth + currentWidth ).show();
				}
			}

			previous.jp_carousel( 'setSlidePosition', Math.floor( -previous.width() + ( screenPadding * 0.75 ) ) ).show();
			next.jp_carousel( 'setSlidePosition', Math.ceil( galleryWidth - ( screenPadding * 0.75 ) ) ).show();
		},

		selectSlide : function(slide, animate){
			lastSelectedSlide = this.find( '.selected' ).removeClass( 'selected' );

			var slides = gallery.jp_carousel( 'slides' ).css({ 'position': 'fixed' }),
				current = $( slide ).addClass( 'selected' ).css({ 'position': 'relative' }),
				attachmentId = current.data( 'attachment-id' ),
				previous = gallery.jp_carousel( 'prevSlide' ),
				next = gallery.jp_carousel( 'nextSlide' ),
				previousPrevious = previous.prev(),
				nextNext = next.next(),
				animated,
				captionHtml;

			// center the main image
			gallery.jp_carousel( 'loadFullImage', current );

			caption.hide();

			if ( next.length == 0 && slides.length <= 2 ) {
				$( '.jp-carousel-next-button' ).hide();
			} else {
				$( '.jp-carousel-next-button' ).show();
			}

			if ( previous.length == 0 && slides.length <= 2 ) {
				$( '.jp-carousel-previous-button' ).hide();
			} else {
				$( '.jp-carousel-previous-button' ).show();
			}

			animated = current
				.add( previous )
				.add( previousPrevious )
				.add( next )
				.add( nextNext )
				.jp_carousel( 'loadSlide' );

			// slide the whole view to the x we want
			slides.not( animated ).hide();

			gallery.jp_carousel( 'updateSlidePositions', animate );

			gallery.jp_carousel( 'resetButtons', current );
			container.trigger( 'jp_carousel.selectSlide', [current] );

			gallery.jp_carousel( 'getTitleDesc', {
				title: current.data( 'title' ),
				desc: current.data( 'desc' )
			});

			// Lazy-load the Likes iframe for the current, next, and previous slides.
			gallery.jp_carousel( 'loadLikes', attachmentId );
			gallery.jp_carousel( 'updateLikesWidgetVisibility', attachmentId );

			if ( next.length > 0 ) {
				gallery.jp_carousel( 'loadLikes', next.data( 'attachment-id' ) );
			}

			if ( previous.length > 0 ) {
				gallery.jp_carousel( 'loadLikes', previous.data( 'attachment-id' ) );
			}

			var imageMeta = current.data( 'image-meta' );
			gallery.jp_carousel( 'updateExif', imageMeta );
			gallery.jp_carousel( 'updateFullSizeLink', current );
			gallery.jp_carousel( 'updateMap', imageMeta );
			gallery.jp_carousel( 'testCommentsOpened', current.data( 'comments-opened' ) );
			gallery.jp_carousel( 'getComments', {
				'attachment_id': attachmentId,
				'offset': 0,
				'clear': true
			});
			$( '#jp-carousel-comment-post-results' ).slideUp();

			// $('<div />').text(sometext).html() is a trick to go to HTML to plain
			// text (including HTML entities decode, etc)
			if ( current.data( 'caption' ) ) {
				captionHtml = $( '<div />' ).text( current.data( 'caption' ) ).html();

				if ( captionHtml == $( '<div />' ).text( current.data( 'title' ) ).html() ) {
					$( '.jp-carousel-titleanddesc-title' ).fadeOut( 'fast' ).empty();
				}

				if ( captionHtml == $( '<div />' ).text( current.data( 'desc' ) ).html() ) {
					$( '.jp-carousel-titleanddesc-desc' ).fadeOut( 'fast' ).empty();
				}

				caption.html( current.data( 'caption' ) ).fadeIn( 'slow' );
			} else {
				caption.fadeOut( 'fast' ).empty();
			}

			wpcom.carousel.pageview( attachmentId ); // @hide-in-jetpack

			// Load the images for the next and previous slides.
			$( next ).add( previous ).each( function() {
				gallery.jp_carousel( 'loadFullImage', $( this ) );
			});

			window.location.hash = last_known_location_hash = '#jp-carousel-' + attachmentId;
		},

		slides : function(){
			return this.find('.jp-carousel-slide');
		},

		slideDimensions : function(){
			return {
				width: $(window).width() - (screenPadding * 2),
				height: Math.floor( $(window).height() / 100 * proportion - 60 )
			};
		},

		loadSlide : function() {
			return this.each(function(){
				var slide = $(this);
				slide.find('img')
					.one('load', function(){
						// set the width/height of the image if it's too big
						slide
							.jp_carousel('fitSlide',false);
					});
			});
		},

		bestFit : function(){
			var max        = gallery.jp_carousel('slideDimensions'),
			    orig       = this.jp_carousel('originalDimensions'),
			    orig_ratio = orig.width / orig.height,
			    w_ratio    = 1,
			    h_ratio    = 1;

			if ( orig.width > max.width )
				w_ratio = max.width / orig.width;
			if ( orig.height > max.height )
				h_ratio = max.height / orig.height;

			if ( w_ratio < h_ratio ) {
				width = max.width;
				height = Math.floor( width / orig_ratio );
			} else if ( h_ratio < w_ratio ) {
				height = max.height;
				width = Math.floor( height * orig_ratio );
			} else {
				width = orig.width;
				height = orig.height;
			}

			return {
				width: width,
				height: height
			};
		},

		fitInfo : function(animated){
			var current = this.jp_carousel('selectedSlide'),
				size = current.jp_carousel('bestFit');

			photo_info.css({
				'left'  : Math.floor( (info.width() - size.width) * 0.5 ),
				'width' : Math.floor( size.width )
			});

			return this;
		},

		fitMeta : function(animated){
			var newInfoTop   = { top: Math.floor( $(window).height() / 100 * proportion + 5 ) + 'px' };
			var newLeftWidth = { width: ( info.width() - (imageMeta.width() + 80) ) + 'px' };

			if (animated) {
				info.animate(newInfoTop);
				leftColWrapper.animate(newLeftWidth);
			} else {
				info.animate(newInfoTop);
				leftColWrapper.css(newLeftWidth);
			}
		},

		fitSlide : function(animated){
			return this.each(function(){
				var selected   = gallery.jp_carousel('selectedSlide'),
				    $this      = $(this),
				    dimensions = $this.jp_carousel('bestFit'),
				    method     = 'css',
				    max        = gallery.jp_carousel('slideDimensions');

				dimensions.left = 0;
				dimensions.top = Math.floor( (max.height - dimensions.height) * 0.5 ) + 40;
				$this[method](dimensions);
			});
		},

		texturize : function(text) {
				text = new String(text); // make sure we get a string. Title "1" came in as int 1, for example, which did not support .replace().
				text = text.replace(/'/g, '&#8217;').replace(/&#039;/g, '&#8217;').replace(/[\u2019]/g, '&#8217;');
				text = text.replace(/"/g, '&#8221;').replace(/&#034;/g, '&#8221;').replace(/&quot;/g, '&#8221;').replace(/[\u201D]/g, '&#8221;');
				text = text.replace(/([\w]+)=&#[\d]+;(.+?)&#[\d]+;/g, '$1="$2"'); // untexturize allowed HTML tags params double-quotes
				return $.trim(text);
		},

		initSlides : function(items, start_index){
			var width = this.jp_carousel('slideDimensions').width,
				x = 0;

			if ( items.length < 2 ) {
				$( '.jp-carousel-next-button, .jp-carousel-previous-button' ).hide();
			}
			else {
				$( '.jp-carousel-next-button, .jp-carousel-previous-button' ).show();
			}

			// Calculate the new src.
			items.each(function(i){
				var src_item  = $(this),
					orig_size = src_item.data('orig-size') || '',
					max       = gallery.jp_carousel('slideDimensions'),
					parts     = orig_size.split(',');
					orig_size = {width: parseInt(parts[0], 10), height: parseInt(parts[1], 10)},
					medium_file     = src_item.data('medium-file') || '',
					large_file      = src_item.data('large-file') || '';

// @start-hide-in-jetpack
				if ( 'undefined' != typeof wpcom ) {
					src = src_item.attr('src') || src_item.attr('original') || src_item.data('original') || src_item.data('lazy-src');
					if (src.indexOf("imgpress") != -1)
						src = src_item.data('orig-file');
					src = wpcom.carousel.addWidthToImageURL( src, wpcom.carousel.findFirstLargeEnoughWidth( orig_size.width, orig_size.height, max.width, max.height ) );
				} else {
// @end-hide-in-jetpack
					src = src_item.data('orig-file');

					src = gallery.jp_carousel('selectBestImageSize', {
						orig_file   : src,
						orig_width  : orig_size.width,
						orig_height : orig_size.height,
						max_width   : max.width,
						max_height  : max.height,
						medium_file : medium_file,
						large_file  : large_file
					});
// @start-hide-in-jetpack
				} // end else of if ( 'undefined' != typeof wpcom )
// @end-hide-in-jetpack

				// Set the final src
				$(this).data( 'gallery-src', src );
			});

			// If the start_index is not 0 then preload the clicked image first.
			if ( 0 !== start_index )
				$('<img/>')[0].src = $(items[start_index]).data('gallery-src');

			var useInPageThumbnails = items.first().closest( '.tiled-gallery.type-rectangular' ).length > 0;

			// create the 'slide'
			items.each(function(i){
				var src_item        = $(this),
					liked           = src_item.data('liked') || 0, // @hide-in-jetpack
					reblogged       = src_item.data( 'reblogged' ) || 0, // @hide-in-jetpack
					attachment_id   = src_item.data('attachment-id') || 0,
					comments_opened = src_item.data('comments-opened') || 0,
					image_meta      = src_item.data('image-meta') || {},
					orig_size       = src_item.data('orig-size') || '',
					thumb_size      = { width : src_item[0].naturalWidth, height : src_item[0].naturalHeight },
					title           = src_item.data('image-title') || '',
					description     = src_item.data('image-description') || '',
					caption         = src_item.parents('dl').find('dd.gallery-caption').html() || '',
					src		= src_item.data('gallery-src') || '',
					medium_file     = src_item.data('medium-file') || '',
					large_file      = src_item.data('large-file') || '',
					orig_file	= src_item.data('orig-file') || '';

				var tiledCaption = src_item.parents('div.tiled-gallery-item').find('div.tiled-gallery-caption').html();
				if ( tiledCaption )
					caption = tiledCaption;

				if ( attachment_id && orig_size.length ) {
					title       = gallery.jp_carousel('texturize', title);
					description = gallery.jp_carousel('texturize', description);
					caption     = gallery.jp_carousel('texturize', caption);

					// Initially, the image is a 1x1 transparent gif.  The preview is shown as a background image on the slide itself.
					var image = $( '<img/>' )
						.attr( 'src', 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7' )
						.css( 'width', '100%' )
						.css( 'height', '100%' );

					var slide = $('<div class="jp-carousel-slide"></div>')
							.hide()
							.css({
								//'position' : 'fixed',
								'left'     : i < start_index ? -1000 : gallery.width()
							})
							.append( image )
							.appendTo(gallery)
							.data('src', src )
							.data('title', title)
							.data('desc', description)
							.data('caption', caption)
							.data('attachment-id', attachment_id)
							.data('permalink', src_item.parents('a').attr('href'))
							.data('orig-size', orig_size)
							.data('comments-opened', comments_opened)
							.data('image-meta', image_meta)
							.data('medium-file', medium_file)
							.data('large-file', large_file)
							.data('orig-file', orig_file)
							.data('thumb-size', thumb_size)
							.data('liked', liked) // @hide-in-jetpack
							.data( 'reblogged', reblogged ) // @hide-in-jetpack
							;

						if ( useInPageThumbnails ) {
							// Use the image already loaded in the gallery as a preview.
							slide
								.data( 'preview-image', src_item.attr( 'src' ) )
								.css( {
									'background-image' : 'url("' + src_item.attr( 'src' ) + '")',
									'background-size' : '100% 100%',
									'background-position' : 'center center'
								} );
						}

						slide.jp_carousel( 'fitSlide', false );
				}
			});
			return this;
		},

		selectBestImageSize: function(args) {
			if ( 'object' != typeof args )
				args = {};

			if ( 'undefined' == typeof args.orig_file )
				return '';

			if ( 'undefined' == typeof args.orig_width || 'undefined' == typeof args.max_width )
				return args.orig_file;

			if ( 'undefined' == typeof args.medium_file || 'undefined' == typeof args.large_file )
				return args.orig_file;

			var medium_size       = args.medium_file.replace(/-([\d]+x[\d]+)\..+$/, '$1'),
				medium_size_parts = (medium_size != args.medium_file) ? medium_size.split('x') : [args.orig_width, 0],
				medium_width      = parseInt( medium_size_parts[0], 10 ),
				medium_height     = parseInt( medium_size_parts[1], 10 ),
				large_size        = args.large_file.replace(/-([\d]+x[\d]+)\..+$/, '$1'),
				large_size_parts  = (large_size != args.large_file) ? large_size.split('x') : [args.orig_width, 0],
				large_width       = parseInt( large_size_parts[0], 10 ),
				large_height      = parseInt( large_size_parts[1], 10 );

			// Give devices with a higher devicePixelRatio higher-res images (Retina display = 2, Android phones = 1.5, etc)
			if ('undefined' != typeof window.devicePixelRatio && window.devicePixelRatio > 1) {
				args.max_width  = args.max_width * window.devicePixelRatio;
				args.max_height = args.max_height * window.devicePixelRatio;
			}

			if ( large_width >= args.max_width || large_height >= args.max_height )
				return args.large_file;

			if ( medium_width >= args.max_width || medium_height >= args.max_height )
				return args.medium_file;

			return args.orig_file;
		},
// @start-hide-in-jetpack
		show_reblog_box: function() {
			$('#carousel-reblog-box textarea').val(jetpackCarouselStrings.reblog_add_thoughts);
			//t.addClass('selected');
			$('#carousel-reblog-box p.response').remove();
			$('#carousel-reblog-box div.submit, #carousel-reblog-box div.submit span.canceltext').show();
			$('#carousel-reblog-box div.submit input[type=submit]').prop('disabled', false);

			var current = $('.jp-carousel div.selected');
			$('#carousel-reblog-box input#carousel-reblog-post-url').val( current.data('permalink') );
			$('#carousel-reblog-box input#carousel-reblog-post-title').val( $('div.jp-carousel-info').children('h2').text() );

			$('div.jp-carousel-info').append( $('#carousel-reblog-box') ).children().fadeOut('fast');
			$('#carousel-reblog-box').fadeIn('fast');
		},

		hide_reblog_box: function () {
			$( 'div.jp-carousel-info' ).children().not( '#carousel-reblog-box' ).fadeIn( 'fast' );
			$( '#carousel-reblog-box' ).fadeOut( 'fast' );
		},
// @end-hide-in-jetpack

		originalDimensions: function() {
			var splitted = $(this).data('orig-size').split(',');
			return {width: parseInt(splitted[0], 10), height: parseInt(splitted[1], 10)};
		},

		format: function( args ) {
			if ( 'object' != typeof args )
				args = {};
			if ( ! args.text || 'undefined' == typeof args.text )
				return;
			if ( ! args.replacements || 'undefined' == typeof args.replacements )
				return args.text;
			return args.text.replace(/{(\d+)}/g, function(match, number) {
				return typeof args.replacements[number] != 'undefined' ? args.replacements[number] : match;
			});
		},

		shutterSpeed: function(d) {
			if (d >= 1)
				return Math.round(d) + 's';
			var df = 1, top = 1, bot = 1;
			var limit = 1e3;
			while (df != d && limit-- > 0) {
				if (df < d) {
					top += 1;
				}
				else {
					bot += 1;
					top = parseInt(d * bot, 10);
				}
				df = top / bot;
			}
			if (top > 1) {
				bot = Math.round(bot / top);
				top = 1;
			}
			if (bot <= 1)
				return '1s';
			return top + '/' + bot + 's';
		},

		parseTitleDesc: function( value ) {
			if ( !value.match(' ') && value.match('_') )
				return '';
			// Prefix list originally based on http://commons.wikimedia.org/wiki/MediaWiki:Filename-prefix-blacklist
			var prefixes = $([
				'CIMG',                   // Casio
				'DSC_',                   // Nikon
				'DSCF',                   // Fuji
				'DSCN',                   // Nikon
				'DUW',                    // some mobile phones
				'GEDC',                   // GE
				'IMG',                    // generic
				'JD',                     // Jenoptik
				'MGP',                    // Pentax
				'PICT',                   // misc.
				'Imagen',                 // misc.
				'Foto',                   // misc.
				'DSC',                    // misc.
				'Scan',                   // Scanners
				'SANY',                   // Sanyo
				'SAM',                    // Samsung
				'Screen Shot [0-9]+'      // Mac screenshots
			])
			.each(function(key, val){
				regex = new RegExp('^' + val);
				if ( regex.test(value) ) {
					value = '';
					return;
				}
			});
			return value;
		},

		getTitleDesc: function( data ) {
			var title ='', desc = '', markup = '', target, commentWrappere;

			target = $( 'div.jp-carousel-titleanddesc', 'div.jp-carousel-wrap' );
			target.hide();

			title = gallery.jp_carousel('parseTitleDesc', data.title) || '';
			desc  = gallery.jp_carousel('parseTitleDesc', data.desc)  || '';

			if ( title.length || desc.length ) {
				// $('<div />').text(sometext).html() is a trick to go to HTML to plain text (including HTML entities decode, etc)
				if ( $('<div />').text(title).html() == $('<div />').text(desc).html() )
					title = '';

				markup  = ( title.length ) ? '<div class="jp-carousel-titleanddesc-title">' + title + '</div>' : '';
				markup += ( desc.length )  ? '<div class="jp-carousel-titleanddesc-desc">' + desc + '</div>'   : '';

				target.html( markup ).fadeIn('slow');
			}

			$( 'div#jp-carousel-comment-form-container' ).css('margin-top', '20px');
			$( 'div#jp-carousel-comments-loading' ).css('margin-top', '20px');
		},

		updateLikesWidgetVisibility: function ( attachmentId ) {
			// Only do this if likes is enabled
			if ( "undefined" === typeof jetpackLikesWidgetQueue )
				return;

			// Hide all likes widgets except for the one for the attachmentId passed in
			$( '.jp-carousel-buttons .jetpack-likes-widget-wrapper' ).css( 'display', 'none' ).each( function () {
				var widgetWrapper = $( this );
				if ( widgetWrapper.attr( 'data-attachment-id' ) == attachmentId ) {
					widgetWrapper.css( 'display', 'inline-block' );
					return false;
				}
			});
		},

		loadLikes : function ( attachmentId ) {
			var dataCarouselExtra = $( '.jp-carousel-wrap' ).data( 'carousel-extra' );
			var blogId = dataCarouselExtra.likes_blog_id;

			if ( $( "#like-post-wrapper-" + blogId + "-" + attachmentId ).length == 0 ) {
				// Add the iframe the first time the slide is shown.
				var protocol = 'http';
				var originDomain = 'http://wordpress.com';

				if ( dataCarouselExtra.permalink.length ) {
					var protocol = dataCarouselExtra.permalink.split( ':' )[0];

					if ( ( protocol != 'http' ) && ( protocol != 'https' ) )
						protocol = 'http';

					var parts = dataCarouselExtra.permalink.split( '/' );

					if ( parts.length >= 2 )
						originDomain = protocol + "://" + parts[2];
				}

				var dataSource = protocol + "://widgets.wp.com/likes/#blog_id=" + encodeURIComponent( blogId )
					+ "&post_id=" + encodeURIComponent( attachmentId )
					+ "&slim=1&origin=" + encodeURIComponent( originDomain );

				if ( 'en' !== jetpackCarouselStrings.lang )
					dataSource += "&lang=" + encodeURIComponent( jetpackCarouselStrings.lang );

				var likesWidget = $( "<iframe class='post-likes-widget jetpack-likes-widget jetpack-resizeable'></iframe>" )
					.attr( "name", "like-post-frame-" + blogId + "-" + attachmentId )
					.attr( 'src', dataSource )
					.css( "display", "inline-block" );

				var likesWidgetWrapper = $( "<div/>" )
					.addClass( "jetpack-likes-widget-wrapper jetpack-likes-widget-unloaded slim-likes-widget" )
					.attr( "id", "like-post-wrapper-" + blogId + "-" + attachmentId )
					.attr( "data-src", dataSource )
					.attr( "data-name", "like-post-frame-" + blogId + "-" + attachmentId )
					.attr( "data-attachment-id", attachmentId )
					.css( "display", "none" )
					.css( "vertical-align", "middle" )
					.append( likesWidget )
					.append( "<div class='post-likes-widget-placeholder'></div>" );

				$( '.jp-carousel-buttons' ).append( likesWidgetWrapper );
			}

		},

		// updateExif updates the contents of the exif UL (.jp-carousel-image-exif)
		updateExif: function( meta ) {
			if ( !meta || 1 != jetpackCarouselStrings.display_exif )
				return false;

			var $ul = $( "<ul class='jp-carousel-image-exif'></ul>" );

			$.each( meta, function( key, val ) {
				if ( 0 === parseFloat(val) || !val.length || -1 === $.inArray( key, [ 'camera', 'aperture', 'shutter_speed', 'focal_length' ] ) )
					return;

				switch( key ) {
					case 'focal_length':
						val = val + 'mm';
						break;
					case 'shutter_speed':
						val = gallery.jp_carousel('shutterSpeed', val);
						break;
					case 'aperture':
						val = 'f/' + val;
						break;
				}

				$ul.append( '<li><h5>' + jetpackCarouselStrings[key] + '</h5>' + val + '</li>' );
			});

			// Update (replace) the content of the ul
			$( 'div.jp-carousel-image-meta ul.jp-carousel-image-exif' ).replaceWith( $ul );
		},

		// updateFullSizeLink updates the contents of the jp-carousel-image-download link
		updateFullSizeLink: function(current) {
			if(!current || !current.data)
				return false;
			var original  = current.data('orig-file').replace(/\?.+$/, ''),
				origSize  = current.data('orig-size').split(','),
				permalink = $( '<a>'+gallery.jp_carousel('format', {'text': jetpackCarouselStrings.download_original, 'replacements': origSize})+'</a>' )
					.addClass( 'jp-carousel-image-download' )
					.attr( 'href', original )
					.attr( 'target', '_blank' );

			// Update (replace) the content of the anchor
			$( 'div.jp-carousel-image-meta a.jp-carousel-image-download' ).replaceWith( permalink );
		},

		updateMap: function( meta ) {
			if ( !meta.latitude || !meta.longitude || 1 != jetpackCarouselStrings.display_geo )
				return;

			var latitude  = meta.latitude,
				longitude = meta.longitude,
				$metabox  = $( 'div.jp-carousel-image-meta', 'div.jp-carousel-wrap' ),
				$mapbox   = $( '<div></div>' ),
				style     = '&scale=2&style=feature:all|element:all|invert_lightness:true|hue:0x0077FF|saturation:-50|lightness:-5|gamma:0.91';

			$mapbox
				.addClass( 'jp-carousel-image-map' )
				.html( '<img width="154" height="154" src="https://maps.googleapis.com/maps/api/staticmap?\
							center=' + latitude + ',' + longitude + '&\
							zoom=8&\
							size=154x154&\
							sensor=false&\
							markers=size:medium%7Ccolor:blue%7C' + latitude + ',' + longitude + style +'" class="gmap-main" />\
							\
						<div class="gmap-topright"><div class="imgclip"><img width="175" height="154" src="https://maps.googleapis.com/maps/api/staticmap?\
							center=' + latitude + ',' + longitude + '&\
							zoom=3&\
							size=175x154&\
							sensor=false&\
							markers=size:small%7Ccolor:blue%7C' + latitude + ',' + longitude + style + '"c /></div></div>\
							\
						' )
				.prependTo( $metabox );
		},

		testCommentsOpened: function( opened ) {
			if ( 1 == parseInt( opened, 10 ) ) {
// @start-hide-in-jetpack
				if ( 1 == jetpackCarouselStrings.is_logged_in )
					$('.jp-carousel-commentlink').fadeIn('fast');
				else
// @end-hide-in-jetpack
					$('.jp-carousel-buttons').fadeIn('fast');
				commentForm.fadeIn('fast');
			} else {
// @start-hide-in-jetpack
				if ( 1 == jetpackCarouselStrings.is_logged_in )
					$('.jp-carousel-commentlink').fadeOut('fast');
				else
// @end-hide-in-jetpack
					$('.jp-carousel-buttons').fadeOut('fast');
				commentForm.fadeOut('fast');
			}
		},

		getComments: function( args ) {
			clearInterval( commentInterval );

			if ( 'object' != typeof args )
				return;

			if ( 'undefined' == typeof args.attachment_id || ! args.attachment_id )
				return;

			if ( ! args.offset || 'undefined' == typeof args.offset || args.offset < 1 )
				args.offset = 0;

			var comments        = $('.jp-carousel-comments'),
				commentsLoading = $('#jp-carousel-comments-loading').show();

			if ( args.clear )
				comments.hide().empty();

			$.ajax({
				type:       'GET',
				url:        jetpackCarouselStrings.ajaxurl,
				dataType:   'json',
				data: {
					action: 'get_attachment_comments',
					nonce:  jetpackCarouselStrings.nonce,
					id:     args.attachment_id,
					offset: args.offset
				},
				success: function(data, status, xhr) {
					if ( args.clear )
						comments.fadeOut('fast').empty();

					$( data ).each(function(){
						var comment = $('<div></div>')
							.addClass('jp-carousel-comment')
							.attr('id', 'jp-carousel-comment-' + this['id'])
							.html(
								  '<div class="comment-gravatar">'
								+   this['gravatar_markup']
								+ '</div>'
								+ '<div class="comment-author">'
								+   this['author_markup']
								+ '</div>'
								+ '<div class="comment-date">'
								+   this['date_gmt']
								+ '</div>'
								+ '<div class="comment-content">'
								+   this['content']
								+ '</div>'
							);
						comments.append(comment);

						// Set the interval to check for a new page of comments.
						clearInterval( commentInterval );
						commentInterval = setInterval( function() {
							if ( ( $('.jp-carousel-overlay').height() - 150 ) < $('.jp-carousel-wrap').scrollTop() + $(window).height() ) {
								gallery.jp_carousel('getComments',{ attachment_id: args.attachment_id, offset: args.offset + 10, clear: false });
								clearInterval( commentInterval );
							}
						}, 300 );
					});

					// Verify (late) that the user didn't repeatldy click the arrows really fast, in which case the requested
					// attachment id might no longer match the current attachment id by the time we get the data back or a now
					// registered infiniscroll event kicks in, so we don't ever display comments for the wrong image by mistake.
					var current = $('.jp-carousel div.selected');
					if ( current && current.data && current.data('attachment-id') != args.attachment_id ) {
						comments.fadeOut('fast');
						comments.empty();
						return;
					}

					// Increase the height of the background, semi-transparent overlay to match the new length of the comments list.
					$('.jp-carousel-overlay').height( $(window).height() + titleAndDescription.height() + commentForm.height() + ( (comments.height() > 0) ? comments.height() : imageMeta.height() ) + 200 );

					comments.show();
					commentsLoading.hide();
				},
				error: function(xhr, status, error) {
					// TODO: proper error handling
					console.log( 'Comment get fail...', xhr, status, error );
					comments.fadeIn('fast');
					commentsLoading.fadeOut('fast');
				}
			});
		},

		postCommentError: function(args) {
			if ( 'object' != typeof args )
				args = {};
			if ( ! args.field || 'undefined' == typeof args.field ||  ! args.error || 'undefined' == typeof args.error )
				return;
			$('#jp-carousel-comment-post-results').slideUp('fast').html('<span class="jp-carousel-comment-post-error">'+args.error+'</span>').slideDown('fast');
			$('#jp-carousel-comment-form-spinner').spin(false);
		},

		setCommentIframeSrc: function(attachment_id) {
			var iframe = $('#jp-carousel-comment-iframe');
			// Set the proper irame src for the current attachment id
			if (iframe && iframe.length) {
				iframe.attr('src', iframe.attr('src').replace(/(postid=)\d+/, '$1'+attachment_id) );
				iframe.attr('src', iframe.attr('src').replace(/(%23.+)?$/, '%23jp-carousel-'+attachment_id) );
			}
		},

		clearCommentTextAreaValue: function() {
			var commentTextArea = $('#jp-carousel-comment-form-comment-field');
			if ( commentTextArea )
				commentTextArea.val('');
		},

		nextSlide : function () {
			var slides = this.jp_carousel( 'slides' );
			var selected = this.jp_carousel( 'selectedSlide' );

			if ( selected.length == 0 || ( slides.length > 2 && selected.is( slides.last() ) ) )
				return slides.first();

			return selected.next();
		},

		prevSlide : function () {
			var slides = this.jp_carousel( 'slides' );
			var selected = this.jp_carousel( 'selectedSlide' );

			if ( selected.length == 0 || ( slides.length > 2 && selected.is( slides.first() ) ) )
				return slides.last();

			return selected.prev();
		},

		loadFullImage : function ( slide ) {
			var image = slide.find( 'img:first' );

			if ( ! image.data( 'loaded' ) ) {
				// If the width of the slide is smaller than the width of the "thumbnail" we're already using,
				// don't load the full image.

				image.on( 'load.jetpack', function () {
					image.off( 'load.jetpack' );
					$( this ).closest( '.jp-carousel-slide' ).css( 'background-image', '' );
				} );

				if ( ! slide.data( 'preview-image' ) || ( slide.data( 'thumb-size' ) && slide.width() > slide.data( 'thumb-size' ).width ) )
					image.attr( 'src', image.closest( '.jp-carousel-slide' ).data( 'src' ) );
				else
					image.attr( 'src', slide.data( 'preview-image' ) );

				image.data( 'loaded', 1 );
			}
		}
	};

	$.fn.jp_carousel = function(method){
		// ask for the HTML of the gallery
		// Method calling logic
		if ( methods[method] ) {
			return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
		} else if ( typeof method === 'object' || ! method ) {
			return methods.open.apply( this, arguments );
		} else {
			$.error( 'Method ' +	method + ' does not exist on jQuery.jp_carousel' );
		}

	};

	// register the event listener for starting the gallery
	$( document.body ).on( 'click', 'div.gallery,div.tiled-gallery', function(e) {
		if ( ! $(this).jp_carousel( 'testForData', e.currentTarget ) )
			return;
		if ( $(e.target).parent().hasClass('gallery-caption') )
			return;
		e.preventDefault();
		$(this).jp_carousel('open', {start_index: $(this).find('.gallery-item, .tiled-gallery-item').index($(e.target).parents('.gallery-item, .tiled-gallery-item'))});
	});

	// Makes carousel work on page load and when back button leads to same URL with carousel hash (ie: no actual document.ready trigger)
	$( window ).on( 'hashchange', function () {
		if ( ! window.location.hash || ! window.location.hash.match(/jp-carousel-(\d+)/) )
			return;

		if ( window.location.hash == last_known_location_hash )
			return;

		last_known_location_hash = window.location.hash;

		var gallery = $('div.gallery, div.tiled-gallery'), index = -1, n = window.location.hash.match(/jp-carousel-(\d+)/);

		if ( ! $(this).jp_carousel( 'testForData', gallery ) )
			return;

		n = parseInt(n[1], 10);

		gallery.find('img').each(function(num, el){
			if ( n && $(el).data('attachment-id') == n ) { // n cannot be 0 (zero)
				index = num;
				return false;
			}
		});

		if ( index != -1 )
			gallery.jp_carousel('open', {start_index: index}); // open method checks if already opened
	});

	if ( window.location.hash )
		$( window ).trigger( 'hashchange' );
});

/**
 * jQuery Plugin to obtain touch gestures from iPhone, iPod Touch and iPad, should also work with Android mobile phones (not tested yet!)
 * Common usage: wipe images (left and right to show the previous or next image)
 *
 * @author Andreas Waltl, netCU Internetagentur (http://www.netcu.de)
 * Version 1.1.1, modified to pass the touchmove event to the callbacks.
 */
(function($) {
$.fn.touchwipe = function(settings) {
	var config = {
			min_move_x: 20,
			min_move_y: 20,
			wipeLeft: function(e) { },
			wipeRight: function(e) { },
			wipeUp: function(e) { },
			wipeDown: function(e) { },
			preventDefaultEvents: true
	};

	if (settings) $.extend(config, settings);

	this.each(function() {
		var startX;
		var startY;
		var isMoving = false;

		function cancelTouch() {
			this.removeEventListener('touchmove', onTouchMove);
			startX = null;
			isMoving = false;
		}

		function onTouchMove(e) {
			if(config.preventDefaultEvents) {
				e.preventDefault();
			}
			if(isMoving) {
				var x = e.touches[0].pageX;
				var y = e.touches[0].pageY;
				var dx = startX - x;
				var dy = startY - y;
				if(Math.abs(dx) >= config.min_move_x) {
					cancelTouch();
					if(dx > 0) {
						config.wipeLeft(e);
					}
					else {
						config.wipeRight(e);
					}
				}
				else if(Math.abs(dy) >= config.min_move_y) {
						cancelTouch();
						if(dy > 0) {
							config.wipeDown(e);
						}
						else {
							config.wipeUp(e);
						}
					}
			}
		}

		function onTouchStart(e)
		{
			if (e.touches.length == 1) {
				startX = e.touches[0].pageX;
				startY = e.touches[0].pageY;
				isMoving = true;
				this.addEventListener('touchmove', onTouchMove, false);
			}
		}
		if ('ontouchstart' in document.documentElement) {
			this.addEventListener('touchstart', onTouchStart, false);
		}
	});

	return this;
};
})(jQuery);
;
