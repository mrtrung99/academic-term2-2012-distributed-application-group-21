(function(){var e=true,h,i=this;function k(){var a=l(),b;if(a)b=a._cb_cp,a._cb_cp="";else if(/_cb_cp[a-z0-9]{16}/.test(i.name))b=i.name.substr(6),i.name="";return b};function m(){this.a=i._sf_async_config||{};this.A=o(this,this.F);this.e=[];q(this);r(i,"unload",o(this,this.D));for(var a=0,b;b=(i._cbq||[])[a];++a)this.u(b);i._cbq={push:o(this,this.u)}}h=m.prototype;h.u=function(a){this.a[a[0]]=a[1];this.f=0};function o(a,b){return function(){b.apply(a,arguments)}}function u(){var a,b,c;a="";for(c=0;c<16;c++)b=Math.floor(Math.random()*36).toString(36),a+=b;return a}
function v(a){var b={};if(a){a.charAt(0)=="?"&&(a=a.substring(1));for(var a=a.replace("+"," "),a=a.split(/[&;]/g),c=0;c<a.length;c++){var d=a[c].split("=");b[decodeURIComponent(d[0])]=decodeURIComponent(d[1])}}return b}function w(a,b,c,d){var f="",g=i.location.href.split("?");g.length&&(g=v(g[1]),a=a.a[d]||c,g[a]&&(f="&"+b+"="+g[a]));return f}function x(a,b,c){a.a[b]=a.a[b]||c}function A(a){if(!B("_SUPERFLY_nosample"))a.B?a.l():(a.B=e,!i._sf_async_config&&!i._cbq?r(i,"load",o(a,a.l)):a.l())}
function q(a){a.f=0;a.k=0;a.o=0;a.v=C();a.n=e;a.i=null;a.r=72E5;for(var b=document.getElementsByTagName("script"),c=0;c<b.length;c++)if(b[c].src.match(/(chartbeat|chartbeatdev|chartbeat_raw).js/)){var d=b[c];break}d&&(b=v(d.src.split("?")[1]),x(a,"uid",b.uid),x(a,"domain",b.domain));b=i.location;x(a,"pingServer","ping.chartbeat.net");x(a,"title",document.title);x(a,"domain",b.host);a:{c=null;if(a.a.useCanonical){for(var c=null,d=document.getElementsByTagName("link"),f=0;f<d.length;++f)if(d[f].rel==
"canonical")c=d[f].href,c=c.substring(c.indexOf("/",9));if(c)break a}f=i.location;c=f.pathname+(f.search||"");c=c.replace(/PHPSESSID=[^&]+/,"");d=/&utm_[^=]+=[^&]+/ig;(f=d.exec(f.search))&&(c=c.replace(d,""));d=/\?utm_[^=]+=[^&]+(.*)/i;(f=d.exec(c))&&(c=c.replace(d,f[1]!=""?"?"+f[1]:""))}x(a,"path",c);c=parseInt(a.a.sessionLength,10);if(!isNaN(c))a.r=c*6E4;a.m=u();a.q=b.host;a.q=a.q.replace(/^www\./,"");a.a.domain=a.a.domain.replace(/^www\./,"");a.g=B("_chartbeat2");var b=C()-parseInt((a.g||"").split(".")[1]||
0,10),f=C(),g=D(),c=E("",14);g&&(d=g[3],(f=F(g[2],f))&&f<14&&(c=E(d.substr(f),f)));a.C=a.g&&b>18E5?0:1;a.g?(b=D(),b[2]=C(),b[3]=c,a.g=b.join(".")):a.g=u()+"."+C()+"."+C()+"."+c;G("_chartbeat2",a.g,30);var p;b=D();if(c=b[3])F(b[1],b[2])<14&&(c=c.substr(c.indexOf("1"))),p=Math.round(c.length/c.replace(/0/g,"").length*10)/10;a.p=p;a.c?H(a.c):a.c=new I}h.G=function(a,b){this.w=i.location.protocol+"//"+this.a.domain+this.a.path;this.a.path=a;b&&(this.a.title=b);i.clearInterval(this.j);q(this);A(this)};
h.z=function(a){this.i=a};h.l=function(){var a=i._sf_startpt,b=i._sf_endpt;if(typeof a=="number")this.t=typeof b=="number"?b-a:C()-a;this.j=i.setInterval(o(this,this.s),15E3);this.s()};h.D=function(){var a=this.m,b=l();if(b)b._cb_cp+=(b._cb_cp?",":"")+a;else if(!i.name)i.name="_cb_cp"+a};function J(a,b){var c;c=new Image(1,1);c.onerror=a.A;c.src=b}
h.F=function(){this.e.push(1);for(var a=0,b=0;b<this.e.length;++b)a+=this.e[b];a<3?(this.n=e,K(this)):(clearInterval(this.j),G("_SUPERFLY_nosample","1",0.0070))};function K(a){var b=a.f,b=b?Math.min(b*2,16):1;a.f=b}h.s=function(){var a;if(!(a=this.a.reading&&+this.a.reading))a:{a=this.c;for(var b=0;b<a.h.length;b++)if(a.b[a.d][a.h[b]]){a=e;break a}a=false}L(this.c);this.k<this.f&&!a?this.k++:(a?(this.f=0,this.o+=15):K(this),this.k=0,N(this),C()-this.v>=this.r&&i.clearInterval(this.j))};
function O(){var a=document.body,b=document.documentElement;if(typeof i.pageYOffset=="number")return i.pageYOffset;else if(a&&a.scrollTop)return a.scrollTop;else if(b&&b.scrollTop)return b.scrollTop;return 0}
function N(a){function b(a,b,d){return(b=c[b]||c[d])?"&g"+a+"="+encodeURIComponent(b):""}var c=a.a,d=O(),f=Math.round((C()-a.v)/600)/100,g=0,p=0,M=0;P(a.c,"onkeydown")?p=1:a.a.reading&&+a.a.reading||P(a.c,"onmousemove")||P(a.c,"onscroll")||f<0.1?g=1:M=1;var n="",j="",y=i.location;if(a.n)a.n=false,a.w?(n=a.w,j=e):(n=document.referrer||"",j=n.indexOf("://"+y.host+"/"),j=j!=-1&&j<9),n=(j?"&v=":"&r=")+encodeURIComponent(n),j="&i="+Q(c.title.slice(0,100));var X=a.t?"&b="+a.t:"",Y=a.i?"&A="+a.i:"",Z=a.p?
"&f="+a.p:"",s=k(),s=s?"&D="+s:"";a.e.push(0);a.e.length>18&&a.e.shift();var z=[],t;for(t in a.a)t.charAt(0)=="_"&&z.push(t+"="+a.a[t]);J(a,(y.protocol||"http:")+"//"+c.pingServer+"/ping?h="+encodeURIComponent(c.domain)+"&p="+encodeURIComponent(c.path)+"&u="+(D()[0]||a.m)+"&d="+Q(y.host.replace(/^www\./,""))+"&g="+c.uid+b(0,"sections","categories")+b(1,"authors","brands")+(c.noCookies?"":"&n="+a.C)+Z+"&c="+f+"&x="+d+"&y="+(document.body.scrollHeight||0)+"&w="+(i.innerHeight||document.body.offsetHeight||
0)+"&j="+Math.round((a.f+2)*15E3/1E3)+"&R="+g+"&W="+p+"&I="+M+"&E="+a.o+n+X+Y+w(a,"C","utm_campaign","campaignTag")+w(a,"M","utm_medium","mediumTag")+"&t="+a.m+"&V=6"+s+j+(z.length?"&"+z.join("&"):"")+"&_")};function I(){this.h=[];R(this,i,"onscroll");R(this,document.body,"onkeydown");R(this,document.body,"onmousemove");H(this)}function H(a){a.b=[{},{},{},{}];a.d=0;L(a)}function R(a,b,c){var d=b[c]||function(){};a.h.push(c);b[c]=function(b){d.apply(this,arguments);if(b&&c=="onkeydown"){var g=b.keyCode?b.keyCode:b.which;if(g==32||g>36&&g<41){a.b[a.d].onscroll++;return}}a.b[a.d][c]++}}function P(a,b){for(var c=0,d=0;d<a.b.length;d++)c+=a.b[d][b]||0;return c}
function L(a){a.d=(a.d+1)%a.b.length;for(var b=0;b<a.h.length;b++)a.b[a.d][a.h[b]]=0};function B(a){a+="=";for(var b=document.cookie.split(";"),c=0;c<b.length;c++){for(var d=b[c];d.charAt(0)==" ";)d=d.substring(1,d.length);if(d.indexOf(a)==0)return d.substring(a.length,d.length)}return null}function G(a,b,c){var d=i._sf_async_config;if(!d||!d.noCookies)d=new Date,d.setTime(C()+c*864E5),document.cookie=a+"="+b+("; expires="+d.toGMTString())+"; path=/"};function l(){if(S!==void 0)return S;try{var a=i.localStorage;if(a.removeItem)return S=a}catch(b){}return S=null}var S;function r(a,b,c){a.addEventListener?a.addEventListener(b,c,false):a.attachEvent&&a.attachEvent("on"+b,c)}function F(a,b){var c=Math,d=parseInt;return c.abs(c.floor((d(b,10)-d(a,10))/864E5))}function E(a,b){for(;b--;)a+=b==0?1:0;return a}function D(){return(B("_chartbeat2")||"").split(".")}function C(){return(new Date).getTime()}function Q(a){return encodeURIComponent(a)};function T(a){var b=document.createElement("script");b.async=e;b.src=a;a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(b,a)}function U(a){if(/[\/|\.]chartbeat.com$/.test(a.origin)){var b=l(),c=String(a.data);if(b&&c.indexOf("_cb_ip")==0)c=c.substr(6),b._cb_ip=c,a.source.postMessage(1,a.origin),c&&T(c)}};if(!i.pSUPERFLY){var V=new m;i.pSUPERFLY=V;m.prototype.virtualPage=m.prototype.G;m.prototype.activity=m.prototype.z;A(V);var W=l();if(W){r(window,"message",U);var $=W._cb_ip;$&&T($)}};})();
