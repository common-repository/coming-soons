// Avoid `console` errors in browsers that lack a console.
(function () {
    var method;
    var noop = function () {
    };
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.
/*
 jCanvas v13.11.21
 Copyright 2013 Caleb Evans
 Released under the MIT license
 */
(function(d,Ka,sa,da,ta,A,E,f,D){function L(c){Y(this,c);return this}function J(c){c?Y(L.prototype,c):J.prefs=L.prototype=Y({},ia);return this}function K(c){return c&&c.getContext?c.getContext("2d"):f}function ja(c){c=Y({},c);c.masks=c.masks.slice(0);return c}function ea(c,b){var a;c.save();a=ja(b.transforms);b.savedTransforms.push(a)}function U(c,b,a){$(a.fillStyle)?b.fillStyle=a.fillStyle.call(c,a):b.fillStyle=a.fillStyle;$(a.strokeStyle)?b.strokeStyle=a.strokeStyle.call(c,a):b.strokeStyle=a.strokeStyle;
    b.lineWidth=a.strokeWidth;a.rounded?b.lineCap=b.lineJoin="round":(b.lineCap=a.strokeCap,b.lineJoin=a.strokeJoin,b.miterLimit=a.miterLimit);b.shadowOffsetX=a.shadowX;b.shadowOffsetY=a.shadowY;b.shadowBlur=a.shadowBlur;b.shadowColor=a.shadowColor;b.globalAlpha=a.opacity;b.globalCompositeOperation=a.compositing;a.imageSmoothing&&(b.webkitImageSmoothingEnabled=b.mozImageSmoothingEnabled=a.imageSmoothing)}function ua(c,b,a){a.mask&&(a.autosave&&ea(c,b),c.clip(),b.transforms.masks.push(a._args))}function X(c,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              b,a){a.closed&&b.closePath();a.shadowStroke&&0!==a.strokeWidth?(b.stroke(),b.fill(),b.shadowColor="transparent",b.shadowBlur=0,b.stroke()):(b.fill(),"transparent"!==a.fillStyle&&(b.shadowColor="transparent"),0!==a.strokeWidth&&b.stroke());a.closed||b.closePath();a._transformed&&b.restore();a.mask&&(c=P(c),ua(b,c,a))}function va(c,b,a){b._toRad=b.inDegrees?M/180:1;c.translate(b.x,b.y);c.rotate(b.rotate*b._toRad);c.translate(-b.x,-b.y);a&&(a.rotate+=b.rotate*b._toRad)}function wa(c,b,a){1!==b.scale&&
(b.scaleX=b.scaleY=b.scale);c.translate(b.x,b.y);c.scale(b.scaleX,b.scaleY);c.translate(-b.x,-b.y);a&&(a.scaleX*=b.scaleX,a.scaleY*=b.scaleY)}function xa(c,b,a){b.translate&&(b.translateX=b.translateY=b.translate);c.translate(b.translateX,b.translateY);a&&(a.translateX+=b.translateX,a.translateY+=b.translateY)}function Q(c,b,a,e,h){a._toRad=a.inDegrees?M/180:1;a.arrowAngle*=a._toRad;a._transformed=A;b.save();h===D&&(h=e);a.fromCenter||a._centered||(a.x+=e/2,a.y+=h/2,a._centered=A);a.rotate&&va(b,
    a,{});1===a.scale&&1===a.scaleX&&1===a.scaleY||wa(b,a,{});(a.translate||a.translateX||a.translateY)&&xa(b,a,{})}function P(c){var b;fa._canvas===c&&fa._data?b=fa._data:(b=d.data(c,"jCanvas"),b||(b={canvas:c,layers:[],layer:{names:{},groups:{}},intersecting:[],lastIntersected:f,cursor:d(c).css("cursor"),drag:{},event:{type:f,x:f,y:f},events:{},transforms:ja(ma),savedTransforms:[],animating:E,animated:f,pos:0,pixelRatio:1,scaled:!1},d.data(c,"jCanvas",b)),fa._canvas=c,fa._data=b);return b}function ya(c,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            b,a){for(var e in J.events)J.events.hasOwnProperty(e)&&(a[e]||a.cursors&&a.cursors[e])&&za(c,b,a,e)}function za(c,b,a,e){e=Aa(e);J.events[e](c,b);a._event=A}function Ba(c,b,a){var e,h,g;if(a.draggable||a.cursor||a.cursors){e=["mousedown","mousemove","mouseup"];for(g=0;g<e.length;g+=1)h=e[g],za(c,b,a,h);b.events.mouseoutdrag||(c.bind("mouseout.jCanvas",function(){var a=b.drag.layer;a&&(b.drag={},a.dragcancel&&a.dragcancel.call(c[0],a),c.drawLayers())}),b.events.mouseoutdrag=A);a._event=A}}function ka(c,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     b,a,e){c=b.layer.names;e?e.name!==D&&"string"===aa(a.name)&&a.name!==e.name&&delete c[a.name]:e=a;"string"===aa(e.name)&&(c[e.name]=a)}function na(c,b,a,e){c=b.layer.groups;var h,g,d,H;a.group!==f&&(a.groups=[a.group],a.dragGroupWithLayer&&(a.dragGroups=[a.group]));e&&e.group!==D&&(e.group===f?e.groups=f:(e.groups=[e.group],e.dragGroupWithLayer&&(e.dragGroups=[e.group])));if(!e)e=a;else if(e.groups!==D&&a.groups!==f)for(g=0;g<a.groups.length;g+=1)if(h=a.groups[g],b=c[h]){for(H=0;H<b.length;H+=1)if(b[H]===
    a){d=H;b.splice(H,1);break}0===b.length&&delete c[h]}if(e.groups!==D&&e.groups!==f)for(g=0;g<e.groups.length;g+=1)h=e.groups[g],b=c[h],b||(b=c[h]=[],b.name=h),d===D&&(d=b.length),b.splice(d,0,a)}function ca(c,b,a,e){e||(e=b.cursors?b.cursors[a]:b.cursor);e&&c.css({cursor:e});b[a]&&b[a].call(c[0],b)}function O(c,b,a,e){var h=b;b._args=a;b.canvas=c;if(b.draggable||b.dragGroups)b.layer=A,b.draggable=A;b._method=e?e:b.method?d.fn[b.method]:b.type?d.fn[la[b.type]]:function(){};b.layer&&!b._layer&&(a=d(c),
    e=a.getLayers(),c=P(c),h=new L(b),h.layer=A,h._layer=A,ka(a,c,h),na(a,c,h),ya(a,c,h),Ba(a,c,h),b._event=h._event,h.index===f&&(h.index=e.length),e.splice(h.index,0,h));return h}function Ca(c){var b,a;for(a=0;a<ga.length;a+=1)b=ga[a],c[b]=c["_"+b]}function Da(c,b){var a,e;for(e=0;e<ga.length;e+=1)a=ga[e],c["_"+a]=c[a],oa[a]=A,b&&delete c[a]}function La(c,b,a){for(var e in a)a.hasOwnProperty(e)&&$(a[e])&&(a[e]=a[e].call(c,b,e));return a}function Ea(c){var b,a,e=[],h=1;c.match(/^#?\w+$/gi)&&("transparent"===
    c&&(c="rgba(0,0,0,0)"),a=Ka.head,b=a.style.color,a.style.color=c,c=d.css(a,"color"),a.style.color=b);c.match(/^rgb/gi)&&(e=c.match(/\d+/gi),c.match(/%/gi)&&(h=2.55),e[0]*=h,e[1]*=h,e[2]*=h,e[3]=e[3]!==D?ta(e[3]):1);return e}function Ma(c){var b=3,a;"array"!==aa(c.start)&&(c.start=Ea(c.start),c.end=Ea(c.end));c.now=[];if(1!==c.start[3]||1!==c.end[3])b=4;for(a=0;a<b;a+=1)c.now[a]=c.start[a]+(c.end[a]-c.start[a])*c.pos,3>a&&(c.now[a]=Na(c.now[a]));1!==c.start[3]||1!==c.end[3]?c.now="rgba("+c.now.join(",")+
    ")":(c.now.slice(0,3),c.now="rgb("+c.now.join(",")+")");c.elem.nodeName?c.elem.style[c.prop]=c.now:c.elem[c.prop]=c.now}function Aa(c){void 0!==window.ontouchstart&&pa[c]&&(c=pa[c]);return c}function Oa(c){J.events[c]=function(b,a){var e,h;h=a.event;e="mouseover"===c||"mouseout"===c?"mousemove":c;a.events[e]||(b.bind(e+".jCanvas",function(a){h.x=a.offsetX;h.y=a.offsetY;h.type=e;h.event=a;b.drawLayers({resetFire:A});a.preventDefault()}),a.events[e]=A)}}function V(c,b,a){var e,h,g,d;(a=a._args)&&a._event&&
(c=P(c),e=c.event,e.x!==f&&e.y!==f&&(g=e.x*c.pixelRatio,d=e.y*c.pixelRatio,h=b.isPointInPath(g,d)||b.isPointInStroke&&b.isPointInStroke(g,d)),b=c.transforms,a.eventX=a.mouseX=e.x,a.eventY=a.mouseY=e.y,a.event=e.event,e=c.transforms.rotate,g=a.eventX,d=a.eventY,0!==e?(a._eventX=g*R(-e)-d*T(-e),a._eventY=d*R(-e)+g*T(-e)):(a._eventX=g,a._eventY=d),a._eventX/=b.scaleX,a._eventY/=b.scaleY,h&&c.intersecting.push(a),a.intersects=h)}function Fa(c){for(;0>c;)c+=2*M;return c}function Ga(c,b,a,e,h,g,d){var f,
    z,y;a.arrowRadius&&!a.closed&&(y=Pa(d-h,g-e),y-=M,f=a.strokeWidth*R(y),z=a.strokeWidth*T(y),c=g+a.arrowRadius*R(y+a.arrowAngle/2),e=d+a.arrowRadius*T(y+a.arrowAngle/2),h=g+a.arrowRadius*R(y-a.arrowAngle/2),a=d+a.arrowRadius*T(y-a.arrowAngle/2),b.moveTo(c-f,e-z),b.lineTo(g-f,d-z),b.lineTo(h-f,a-z),b.moveTo(g-f,d-z),b.lineTo(g+f,d+z))}function ha(c,b,a,e,h,g,d,f,z,y,F){a.startArrow&&Ga(c,b,a,e,h,g,d);a.endArrow&&Ga(c,b,a,f,z,y,F)}function Ha(c,b){isNaN(Number(b.fontSize))||(b.fontSize+="px");c.font=
    b.fontStyle+" "+b.fontSize+" "+b.fontFamily}function Ia(c,b,a,e){var h,g;if(Z.text===a.text&&Z.fontStyle===a.fontStyle&&Z.fontSize===a.fontSize&&Z.fontFamily===a.fontFamily&&Z.maxWidth===a.maxWidth&&Z.lineHeight===a.lineHeight)a.width=Z.width,a.height=Z.height;else{a.width=b.measureText(e[0]).width;for(g=1;g<e.length;g+=1)h=b.measureText(e[g]).width,h>a.width&&(a.width=h);b=c.style.fontSize;c.style.fontSize=a.fontSize;a.height=ta(d.css(c,"fontSize"))*e.length*a.lineHeight;c.style.fontSize=b}}function Ja(c,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 b){var a=b.maxWidth,e=b.text.split("\n"),h=[],g,d,f,z,y;for(f=0;f<e.length;f+=1){z=e[f];y=z.split(" ");g=[];d="";if(1===y.length||c.measureText(z).width<a)g=[z];else{for(z=0;z<y.length;z+=1)c.measureText(d+y[z]).width>a&&(""!==d&&g.push(d),d=""),d+=y[z],z!==y.length-1&&(d+=" ");g.push(d)}h=h.concat(g.join("\n").replace(/( (\n))|( $)/gi,"$2").split("\n"))}return h}var ia,Y=d.extend,ba=d.inArray,aa=d.type,$=d.isFunction,Na=da.round,M=da.PI,T=da.sin,R=da.cos,Pa=da.atan2,Qa=d.event.fix,pa,qa,la,fa={},
    Z={},ra={},ma={rotate:0,scaleX:1,scaleY:1,translateX:0,translateY:0,masks:[]},ga,oa;d.fn.jCanvas=J;J.events={};ia={align:"center",arrowAngle:90,arrowRadius:0,autosave:A,baseline:"middle",bringToFront:E,ccw:E,closed:E,compositing:"source-over",concavity:0,cornerRadius:0,count:1,cropFromCenter:A,cursor:f,cursors:f,disableEvents:E,draggable:E,dragGroups:f,group:f,groups:f,data:{},each:f,end:360,fillStyle:"transparent",fireDragGroupEvents:E,fontStyle:"normal",fontSize:"12pt",fontFamily:"sans-serif",fromCenter:A,
    fn:f,height:f,imageSmoothing:A,inDegrees:A,index:f,lineHeight:1,layer:E,load:f,mask:E,maxWidth:f,miterLimit:10,name:f,opacity:1,r1:f,r2:f,radius:0,repeat:"repeat",respectAlign:E,rotate:0,rounded:E,scale:1,scaleX:1,scaleY:1,shadowBlur:0,shadowColor:"transparent",shadowStroke:!1,shadowX:0,shadowY:0,sHeight:f,sides:0,source:"",spread:0,start:0,strokeCap:"butt",strokeJoin:"miter",strokeStyle:"transparent",strokeWidth:1,sWidth:f,sx:f,sy:f,text:"",translate:0,translateX:0,translateY:0,type:f,visible:A,
    width:f,x:0,y:0};J();J.extend=function(c){J.defaults=Y(ia,c.props);J();c.name&&(d.fn[c.name]=function a(e){var h,g,d,f;for(g=0;g<this.length;g+=1)if(h=this[g],d=K(h))f=new L(e),O(h,f,e,a),U(h,d,f),c.fn.call(h,d,f);return this});return d.fn[c.name]};d.fn.getLayers=function(c){var b=this[0],a,e,h=[];if(b&&b.getContext)if(a=P(b),a=a.layers,$(c))for(e=0;e<a.length;e+=1)c.call(b,a[e])&&h.push(a[e]);else h=a;return h};d.fn.getLayer=function(c){var b=P(this[0]),a=b.layers,e=aa(c),h;if(c&&c.layer)h=c;else if("number"===
    e)0>c&&(c=a.length+c),h=a[c];else if("regexp"===e)for(b=0;b<a.length;b+=1){if("string"===aa(a[b].name)&&a[b].name.match(c)){h=a[b];break}}else h=b.layer.names[c];return h};d.fn.getLayerGroup=function(c){var b=aa(c),a,e;if("array"===b)return c;if("regexp"===b)for(a in b=P(this[0]),b=b.groups,b){if(a.match(c)){e=b[a];break}}else b=P(this[0]),e=b.layer.groups[c];return e};d.fn.getLayerIndex=function(c){var b=this.getLayers();c=this.getLayer(c);return ba(c,b)};d.fn.setLayer=function(c,b){var a,e,h,g;
    for(e=0;e<this.length;e+=1)if(a=d(this[e]),h=P(this[e]),g=d(this[e]).getLayer(c))ka(a,h,g,b),na(a,h,g,b),b.index!==D&&a.moveLayer(g,b.index),Y(g,b),ya(a,h,g),Ba(a,h,g);return this};d.fn.setLayerGroup=function(c,b){var a,e,h,g;for(e=0;e<this.length;e+=1)if(a=d(this[e]),h=a.getLayerGroup(c))for(g=0;g<h.length;g+=1)a.setLayer(h[g],b);return this};d.fn.setLayers=function(c,b){var a,e,h,g;for(e=0;e<this.length;e+=1)for(a=d(this[e]),h=a.getLayers(b),g=0;g<h.length;g+=1)a.setLayer(h[g],c);return this};d.fn.moveLayer=
    function(c,b){var a,e,h;for(e=0;e<this.length;e+=1)if(a=d(this[e]),h=a.getLayers(),a=a.getLayer(c))a.index=ba(a,h),h.splice(a.index,1),h.splice(b,0,a),0>b&&(b=h.length+b),a.index=b;return this};d.fn.removeLayer=function(c){var b,a,e,h,g;for(a=0;a<this.length;a+=1)if(b=d(this[a]),e=P(this[a]),h=b.getLayers(),g=b.getLayer(c))g.index=ba(g,h),h.splice(g.index,1),ka(b,e,g,{name:f}),na(b,e,g,{groups:f});return this};d.fn.removeLayerGroup=function(c){var b,a,e,h,g,N,H;if(c!==D)for(a=0;a<this.length;a+=1)if(b=
    d(this[a]),e=P(this[a]),h=b.getLayers(),g=b.getLayerGroup(c)){for(H=0;H<g.length;H+=1)N=g[H],N.index=ba(N,h),h.splice(N.index,1),ka(b,e,N,{name:f});delete e.layer.groups[g.name]}return this};d.fn.removeLayers=function(){var c,b;for(c=0;c<this.length;c+=1)d(this[c]),b=P(this[c]),b.layers.length=0,b.layer.names={},b.layer.groups={};return this};d.fn.addLayerToGroup=function(c,b){var a,e,h,g=[];for(e=0;e<this.length;e+=1)a=d(this[e]),h=a.getLayer(c),h.groups&&-1===ba(b,h.groups)&&(g=h.groups.slice(0),
    g.push(b),a.setLayer(h,{groups:g}));return this};d.fn.removeLayerFromGroup=function(c,b){var a,e,h,g=[],f;for(e=0;e<this.length;e+=1)a=d(this[e]),h=a.getLayer(c),f=ba(b,h.groups),-1!==f&&(g=h.groups.slice(0),g.splice(f,1),a.setLayer(h,{groups:g}));return this};d.fn.drawLayer=function(c){var b,a,e;for(b=0;b<this.length;b+=1)a=d(this[b]),K(this[b]),(e=a.getLayer(c))&&e.visible&&e._method&&(e._next=f,e._method.call(a,e));return this};d.fn.drawLayers=function(c){var b,a,e=Y({},c),h,g,N,H,z,y,F;e.index||
(e.index=0);for(c=0;c<this.length;c+=1)if(b=d(this[c]),a=K(this[c])){H=P(this[c]);e.clear!==E&&b.clearCanvas();a=H.layers;for(N=e.index;N<a.length&&(h=a[N],h.index=N,e.resetFire&&(h._fired=E),h._event=!h.disableEvents,y=b,z=h,g=N+1,z&&z.visible&&z._method&&(z._next=g?g:f,z._method.call(y,z)),h._masks=H.transforms.masks.slice(0),h._method!==d.fn.drawImage||!h.visible);N+=1);h=H;g=z=y=void 0;y={};for(z=h.intersecting.length-1;0<=z;z-=1)if(y=h.intersecting[z],y._masks){for(g=y._masks.length-1;0<=g;g-=
    1)if(!y._masks[g].intersects){y.intersects=E;break}if(y.intersects)break}h=y;z=H.event;y=z.type;h[y]||qa[y]&&(y=qa[y]);F=H.drag;g=H.lastIntersected;g!==f&&h!==g&&g._hovered&&!g._fired&&(H.lastIntersected=f,g._fired=A,g._hovered=E,ca(b,g,"mouseout",H.cursor));h._event&&h.intersects&&(H.lastIntersected=h,!(h.mouseover||h.mouseout||h.cursor||h.cursors)||h._hovered||h._fired||(h._fired=A,h._hovered=A,ca(b,h,"mouseover")),h._fired||(h._fired=A,z.type=f,ca(b,h,y)),!h.draggable||"mousedown"!==y&&"touchstart"!==
    y||(F.layer=h));if(F.layer){h=H;var t=g=z=void 0,B=F=void 0,l=void 0,u=t=void 0;F=h.drag;g=F.layer;B=g.dragGroups||[];z=h.layers;if("mousemove"===y||"touchmove"===y){if(!F.dragging){F.dragging=A;g.bringToFront&&(z.splice(g.index,1),g.index=z.push(g));for(u=0;u<B.length;u+=1)if(t=B[u],l=h.layer.groups[t],g.groups&&l)for(t=0;t<l.length;t+=1)l[t]!==g&&(l[t]._startX=l[t].x,l[t]._startY=l[t].y,l[t]._endX=g._eventX,l[t]._endY=g._eventY,l[t].bringToFront&&(l[t].index=ba(l[t],z),z.splice(l[t].index,1),z.splice(-1,
    0,l[t]),l[t].index=z.length-2),l[t].dragstart&&g.fireDragGroupEvents&&l[t].dragstart.call(b[0],l[t]));F._startX=g._startX=g.x;F._startY=g._startY=g.y;F._endX=g._endX=g._eventX;F._endY=g._endY=g._eventY;ca(b,g,"dragstart")}g.x=g._eventX-(F._endX-F._startX);g.y=g._eventY-(F._endY-F._startY);for(u=0;u<B.length;u+=1)if(t=B[u],l=h.layer.groups[t],g.groups&&l)for(t=0;t<l.length;t+=1)l[t]!==g&&(l[t].x=g._eventX-(l[t]._endX-l[t]._startX),l[t].y=g._eventY-(l[t]._endY-l[t]._startY),l[t].drag&&g.fireDragGroupEvents&&
    l[t].drag.call(b[0],l[t]));ca(b,g,"drag")}else if("mouseup"===y||"touchend"===y){F.dragging&&(ca(b,g,"dragstop"),F.dragging=E);for(u=0;u<B.length;u+=1)if(t=B[u],l=h.layer.groups[t],g.groups&&l)for(t=0;t<l.length;t+=1)l[t]!==g&&l[t].dragstop&&g.fireDragGroupEvents&&l[t].dragstop.call(b[0],l[t]);h.drag={}}}N===a.length&&(H.intersecting.length=0,H.transforms=ja(ma),H.savedTransforms.length=0)}return this};d.fn.addLayer=function(c){var b,a;for(b=0;b<this.length;b+=1)if(a=K(this[b]))a=new L(c),a.layer=
    A,O(this[b],a,c);return this};ga=["width","height","opacity","lineHeight"];oa={};d.fn.animateLayer=function(){function c(a,b,c){return function(){Ca(c);b.animating&&b.animated!==c||a.drawLayers();g[4]&&g[4].call(a[0],c);c._animating=E;b.animating=E;b.animated=f}}function b(a,b,c){return function(e,h){c._pos!==h.pos&&(c._pos=h.pos,Ca(c),c._animating||b.animating||(c._animating=A,b.animating=A,b.animated=c),b.animating&&b.animated!==c||a.drawLayers(),g[5]&&g[5].call(a[0],e,h,c))}}var a,e,h,g=[].slice.call(arguments,
    0),N,H;"object"===aa(g[2])?(g.splice(2,0,g[2].duration||f),g.splice(3,0,g[3].easing||f),g.splice(4,0,g[4].done||g[4].complete||f),g.splice(5,0,g[5].step||f)):(g[2]===D?(g.splice(2,0,f),g.splice(3,0,f),g.splice(4,0,f)):$(g[2])&&(g.splice(2,0,f),g.splice(3,0,f)),g[3]===D?(g[3]=f,g.splice(4,0,f)):$(g[3])&&g.splice(3,0,f));for(e=0;e<this.length;e+=1)if(a=d(this[e]),h=K(this[e]))h=P(this[e]),(N=a.getLayer(g[0]))&&N._method!==d.fn.draw&&(H=Y({},g[1]),H=La(this[e],N,H),Da(H,A),Da(N),N.style=oa,d(N).animate(H,
    {duration:g[2],easing:d.easing[g[3]]?g[3]:f,complete:c(a,h,N),step:b(a,h,N)}));return this};d.fn.animateLayerGroup=function(c){var b,a,e=[].slice.call(arguments,0),h,g;for(a=0;a<this.length;a+=1)if(b=d(this[a]),h=b.getLayerGroup(c))for(g=0;g<h.length;g+=1)b.animateLayer.apply(b,[h[g]].concat(e.slice(1)));return this};d.fn.delayLayer=function(c,b){var a,e;b=b||0;for(a=0;a<this.length;a+=1)e=d(this[a]).getLayer(c),d(e).delay(b);return this};d.fn.delayLayerGroup=function(c,b){var a,e,h,g;b=b||0;for(e=
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             0;e<this.length;e+=1)if(a=d(this[e]),a=a.getLayerGroup(c))for(g=0;g<a.length;g+=1)(h=a[g])&&d(h).delay(b);return this};d.fn.stopLayer=function(c,b){var a,e;for(e=0;e<this.length;e+=1)a=d(this[e]),(a=a.getLayer(c))&&d(a).stop(b);return this};d.fn.stopLayerGroup=function(c,b){var a,e,h,g;for(e=0;e<this.length;e+=1)if(a=d(this[e]),a=a.getLayerGroup(c))for(g=0;g<a.length;g+=1)(h=a[g])&&d(h).stop(b);return this};(function(c){var b;for(b=0;b<c.length;b+=1)d.fx.step[c[b]]=Ma})("color backgroundColor borderColor borderTopColor borderRightColor borderBottomColor borderLeftColor fillStyle outlineColor strokeStyle shadowColor".split(" "));
    pa={mousedown:"touchstart",mouseup:"touchend",mousemove:"touchmove"};qa={touchstart:"mousedown",touchend:"mouseup",touchmove:"mousemove"};(function(c){var b;for(b=0;b<c.length;b+=1)Oa(c[b])})("click dblclick mousedown mouseup mousemove mouseover mouseout touchstart touchmove touchend".split(" "));d.event.fix=function(c){var b,a;c=Qa.call(d.event,c);if(b=c.originalEvent)if(a=b.changedTouches,c.pageX!==D&&c.offsetX===D){if(b=d(c.currentTarget).offset())c.offsetX=c.pageX-b.left,c.offsetY=c.pageY-b.top}else a&&
        (b=d(c.currentTarget).offset())&&(c.offsetX=a[0].pageX-b.left,c.offsetY=a[0].pageY-b.top);return c};la={arc:"drawArc",bezier:"drawBezier",ellipse:"drawEllipse","function":"draw",image:"drawImage",line:"drawLine",polygon:"drawPolygon",slice:"drawSlice",quadratic:"drawQuadratic",rectangle:"drawRect",text:"drawText",vector:"drawVector"};d.fn.draw=function b(a){var e,h,g=new L(a);if(la[g.type])this[la[g.type]](g);else for(e=0;e<this.length;e+=1)if(d(this[e]),h=K(this[e]))g=new L(a),O(this[e],g,a,b),g.visible&&
        g.fn&&g.fn.call(this[e],h,g);return this};d.fn.clearCanvas=function a(e){var h,g,d=new L(e);for(h=0;h<this.length;h+=1)if(g=K(this[h]))d.width===f||d.height===f?(g.save(),g.setTransform(1,0,0,1,0,0),g.clearRect(0,0,this[h].width,this[h].height),g.restore()):(O(this[h],d,e,a),Q(this[h],g,d,d.width,d.height),g.clearRect(d.x-d.width/2,d.y-d.height/2,d.width,d.height),d._transformed&&g.restore());return this};d.fn.saveCanvas=function e(h){var g,d,f,z,y;for(g=0;g<this.length;g+=1)if(d=K(this[g]))for(z=
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                P(this[g]),f=new L(h),O(this[g],f,h,e),y=0;y<f.count;y+=1)ea(d,z);return this};d.fn.restoreCanvas=function h(g){var d,f,z,y,F;for(d=0;d<this.length;d+=1)if(f=K(this[d]))for(y=P(this[d]),z=new L(g),O(this[d],z,g,h),F=0;F<z.count;F+=1){var t=f,B=y;0===B.savedTransforms.length?B.transforms=ja(ma):(t.restore(),B.transforms=B.savedTransforms.pop())}return this};d.fn.restoreCanvasOnRedraw=function(h){h=Y({},h);h.layer=A;this.restoreCanvas(h);return this};d.fn.rotateCanvas=function g(d){var f,z,y,F;for(f=
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         0;f<this.length;f+=1)if(z=K(this[f]))F=P(this[f]),y=new L(d),O(this[f],y,d,g),y.autosave&&ea(z,F),va(z,y,F.transforms);return this};d.fn.scaleCanvas=function N(d){var f,y,F,t;for(f=0;f<this.length;f+=1)if(y=K(this[f]))t=P(this[f]),F=new L(d),O(this[f],F,d,N),F.autosave&&ea(y,t),wa(y,F,t.transforms);return this};d.fn.translateCanvas=function H(d){var f,F,t,B;for(f=0;f<this.length;f+=1)if(F=K(this[f]))B=P(this[f]),t=new L(d),O(this[f],t,d,H),t.autosave&&ea(F,B),xa(F,t,B.transforms);return this};d.fn.drawRect=
        function z(d){var f,t,B,l,u,C,q,v;for(f=0;f<this.length;f+=1)if(t=K(this[f]))B=new L(d),O(this[f],B,d,z),B.visible&&(U(this[f],t,B),Q(this[f],t,B,B.width,B.height),t.beginPath(),l=B.x-B.width/2,u=B.y-B.height/2,(v=B.cornerRadius)?(B.closed=A,C=B.x+B.width/2,q=B.y+B.height/2,0>C-l-2*v&&(v=(C-l)/2),0>q-u-2*v&&(v=(q-u)/2),t.moveTo(l+v,u),t.lineTo(C-v,u),t.arc(C-v,u+v,v,3*M/2,2*M,E),t.lineTo(C,q-v),t.arc(C-v,q-v,v,0,M/2,E),t.lineTo(l+v,q),t.arc(l+v,q-v,v,M/2,M,E),t.lineTo(l,u+v),t.arc(l+v,u+v,v,M,3*M/
            2,E)):t.rect(l,u,B.width,B.height),V(this[f],t,B),X(this[f],t,B));return this};d.fn.drawArc=function y(d){var f,B,l,u,C,q,v,p,k,n,m;for(f=0;f<this.length;f+=1)if(B=K(this[f]))l=new L(d),O(this[f],l,d,y),l.visible&&(U(this[f],B,l),Q(this[f],B,l,2*l.radius),l.inDegrees||360!==l.end||(l.end=2*M),l.start*=l._toRad,l.end*=l._toRad,l.start-=M/2,l.end-=M/2,B.beginPath(),B.arc(l.x,l.y,l.radius,l.start,l.end,l.ccw),k=M/180*1,l.ccw&&(k*=-1),u=l.x+l.radius*R(l.start+k),C=l.y+l.radius*T(l.start+k),q=l.x+l.radius*
        R(l.start),v=l.y+l.radius*T(l.start),p=l.x+l.radius*R(l.end+k),k=l.y+l.radius*T(l.end+k),n=l.x+l.radius*R(l.end),m=l.y+l.radius*T(l.end),ha(this[f],B,l,u,C,q,v,n,m,p,k),V(this[f],B,l),X(this[f],B,l));return this};d.fn.drawEllipse=function F(d){var f,l,u,C,q;for(f=0;f<this.length;f+=1)if(l=K(this[f]))u=new L(d),O(this[f],u,d,F),u.visible&&(U(this[f],l,u),Q(this[f],l,u,u.width,u.height),C=4/3*u.width,q=u.height,l.beginPath(),l.moveTo(u.x,u.y-q/2),l.bezierCurveTo(u.x-C/2,u.y-q/2,u.x-C/2,u.y+q/2,u.x,
        u.y+q/2),l.bezierCurveTo(u.x+C/2,u.y+q/2,u.x+C/2,u.y-q/2,u.x,u.y-q/2),V(this[f],l,u),u.closed=A,X(this[f],l,u));return this};d.fn.drawPolygon=function t(d){var f,u,C,q,v,p,k,n,m,x;for(f=0;f<this.length;f+=1)if(u=K(this[f]))if(C=new L(d),O(this[f],C,d,t),C.visible){U(this[f],u,C);Q(this[f],u,C,2*C.radius);v=2*M/C.sides;p=v/2;q=p+M/2;k=C.radius*R(p);u.beginPath();for(x=0;x<C.sides;x+=1)n=C.x+C.radius*R(q),m=C.y+C.radius*T(q),u.lineTo(n,m),C.concavity&&(n=C.x+(k+-k*C.concavity)*R(q+p),m=C.y+(k+-k*C.concavity)*
        T(q+p),u.lineTo(n,m)),q+=v;V(this[f],u,C);C.closed=A;X(this[f],u,C)}return this};d.fn.drawSlice=function B(f){var u,C,q,v,p;for(u=0;u<this.length;u+=1)if(d(this[u]),C=K(this[u]))q=new L(f),O(this[u],q,f,B),q.visible&&(U(this[u],C,q),Q(this[u],C,q,2*q.radius),q.start*=q._toRad,q.end*=q._toRad,q.start-=M/2,q.end-=M/2,q.start=Fa(q.start),q.end=Fa(q.end),q.end<q.start&&(q.end+=2*M),v=(q.start+q.end)/2,p=q.radius*q.spread*R(v),v=q.radius*q.spread*T(v),q.x+=p,q.y+=v,C.beginPath(),C.arc(q.x,q.y,q.radius,
        q.start,q.end,q.ccw),C.lineTo(q.x,q.y),V(this[u],C,q),q.closed=A,X(this[u],C,q));return this};d.fn.drawLine=function l(d){var f,q,v,p,k,n;for(f=0;f<this.length;f+=1)if(q=K(this[f]))if(v=new L(d),O(this[f],v,d,l),v.visible){U(this[f],q,v);Q(this[f],q,v,0);p=1;for(q.beginPath();A;)if(k=v["x"+p],n=v["y"+p],k!==D&&n!==D)q.lineTo(k+v.x,n+v.y),p+=1;else break;p-=1;ha(this[f],q,v,v.x2+v.x,v.y2+v.y,v.x1+v.x,v.y1+v.y,v["x"+(p-1)]+v.x,v["y"+(p-1)]+v.y,v["x"+p]+v.x,v["y"+p]+v.y);V(this[f],q,v);X(this[f],q,v)}return this};
    d.fn.drawQuadratic=function u(f){var d,v,p,k,n,m,x,w;for(d=0;d<this.length;d+=1)if(v=K(this[d]))if(p=new L(f),O(this[d],p,f,u),p.visible){U(this[d],v,p);Q(this[d],v,p,0);k=2;v.beginPath();for(v.moveTo(p.x1+p.x,p.y1+p.y);A;)if(n=p["x"+k],m=p["y"+k],x=p["cx"+(k-1)],w=p["cy"+(k-1)],n!==D&&m!==D&&x!==D&&w!==D)v.quadraticCurveTo(x+p.x,w+p.y,n+p.x,m+p.y),k+=1;else break;k-=1;ha(this[d],v,p,p.cx1+p.x,p.cy1+p.y,p.x1+p.x,p.y1+p.y,p["cx"+(k-1)]+p.x,p["cy"+(k-1)]+p.y,p["x"+k]+p.x,p["y"+k]+p.y);V(this[d],v,p);
        X(this[d],v,p)}return this};d.fn.drawBezier=function C(d){var f,p,k,n,m,x,w,s,I,S,W;for(f=0;f<this.length;f+=1)if(p=K(this[f]))if(k=new L(d),O(this[f],k,d,C),k.visible){U(this[f],p,k);Q(this[f],p,k,0);n=2;m=1;p.beginPath();for(p.moveTo(k.x1+k.x,k.y1+k.y);A;)if(x=k["x"+n],w=k["y"+n],s=k["cx"+m],I=k["cy"+m],S=k["cx"+(m+1)],W=k["cy"+(m+1)],x!==D&&w!==D&&s!==D&&I!==D&&S!==D&&W!==D)p.bezierCurveTo(s+k.x,I+k.y,S+k.x,W+k.y,x+k.x,w+k.y),n+=1,m+=2;else break;n-=1;m-=2;ha(this[f],p,k,k.cx1+k.x,k.cy1+k.y,k.x1+
        k.x,k.y1+k.y,k["cx"+(m+1)]+k.x,k["cy"+(m+1)]+k.y,k["x"+n]+k.x,k["y"+n]+k.y);V(this[f],p,k);X(this[f],p,k)}return this};d.fn.drawVector=function q(f){var d,k,n,m,x,w,s,I,S,W,G,E;for(d=0;d<this.length;d+=1)if(k=K(this[d]))if(n=new L(f),O(this[d],n,f,q),n.visible){U(this[d],k,n);Q(this[d],k,n,0);m=1;k.beginPath();S=G=s=n.x;W=E=I=n.y;for(k.moveTo(n.x,n.y);A;)if(x=n["a"+m],w=n["l"+m],x!==D&&w!==D)x*=n._toRad,x-=M/2,S=G,W=E,G+=w*R(x),E+=w*T(x),1===m&&(s=G,I=E),k.lineTo(G,E),m+=1;else break;ha(this[d],k,
        n,s,I,n.x,n.y,S,W,G,E);V(this[d],k,n);X(this[d],k,n)}return this};d.fn.drawText=function v(p){var k,n,m,x,w,s,I;for(k=0;k<this.length;k+=1)if(d(this[k]),n=K(this[k]))if(m=new L(p),O(this[k],m,p,v),m.visible){U(this[k],n,m);n.textBaseline=m.baseline;n.textAlign=m.align;Ha(n,m);x=m.maxWidth!==f?Ja(n,m):m.text.toString().split("\n");Ia(this[k],n,m,x);p&&m.layer&&(p.width=m.width,p.height=m.height);Q(this[k],n,m,m.width,m.height);s=m.x;"left"===m.align?m.respectAlign?m.x+=m.width/2:s-=m.width/2:"right"===
        m.align&&(m.respectAlign?m.x-=m.width/2:s+=m.width/2);for(w=0;w<x.length;w+=1)n.shadowColor=m.shadowColor,I=m.y+w*m.height/x.length-(x.length-1)*m.height/x.length/2,n.fillText(x[w],s,I),"transparent"!==m.fillStyle&&(n.shadowColor="transparent"),n.strokeText(x[w],s,I);m._event&&(n.beginPath(),n.rect(m.x-m.width/2,m.y-m.height/2,m.width,m.height),V(this[k],n,m),n.closePath());m._transformed&&n.restore()}Z=m;return this};d.fn.measureText=function(d){var f,k;f=this.getLayer(d);if(!f||f&&!f._layer)f=new L(d);
        if(d=K(this[0]))Ha(d,f),k=Ja(d,f),Ia(this[0],d,f,k);return f};d.fn.drawImage=function p(k){function n(k,p,n,s,r,w){return function(){U(m[p],n,r);r.width===f&&r.sWidth===f&&(r.width=r.sWidth=G.width);r.height===f&&r.sHeight===f&&(r.height=r.sHeight=G.height);w&&(w.width=r.width,w.height=r.height);r.sWidth!==f&&r.sHeight!==f&&r.sx!==f&&r.sy!==f?(r.width===f&&(r.width=r.sWidth),r.height===f&&(r.height=r.sHeight),r.cropFromCenter||(r.sx+=r.sWidth/2,r.sy+=r.sHeight/2),0>r.sy-r.sHeight/2&&(r.sy=r.sHeight/
        2),r.sy+r.sHeight/2>G.height&&(r.sy=G.height-r.sHeight/2),0>r.sx-r.sWidth/2&&(r.sx=r.sWidth/2),r.sx+r.sWidth/2>G.width&&(r.sx=G.width-r.sWidth/2),Q(m[p],n,r,r.width,r.height),n.drawImage(G,r.sx-r.sWidth/2,r.sy-r.sHeight/2,r.sWidth,r.sHeight,r.x-r.width/2,r.y-r.height/2,r.width,r.height)):(Q(m[p],n,r,r.width,r.height),n.drawImage(G,r.x-r.width/2,r.y-r.height/2,r.width,r.height));n.beginPath();n.rect(r.x-r.width/2,r.y-r.height/2,r.width,r.height);V(m[p],n,r);n.closePath();r._transformed&&n.restore();
        ua(n,s,r);r.load&&r.load.call(k,w);r.layer&&(r._args._masks=s.transforms.masks.slice(0),r._next&&d(k).drawLayers({clear:E,resetFire:A,index:r._next}))}}var m=this,x,w,s,I,S,W,G,M,J;for(w=0;w<m.length;w+=1)if(x=m[w],s=K(m[w]))I=P(m[w]),S=new L(k),W=O(m[w],S,k,p),S.visible&&(J=S.source,M=J.getContext,J.src||M?G=J:J&&(ra[J]!==D?G=ra[J]:(G=new sa,G.src=J,ra[J]=G)),G&&(G.complete||M?n(x,w,s,I,S,W)():(d(G).bind("load",n(x,w,s,I,S,W)),G.src=G.src)));return m};d.fn.createPattern=function(p){function k(){s=
        m.createPattern(w,x.repeat);x.load&&x.load.call(n[0],s)}var n=this,m,x,w,s,I;(m=K(n[0]))?(x=new L(p),I=x.source,$(I)?(w=d("<canvas />")[0],w.width=x.width,w.height=x.height,p=K(w),I.call(w,p),k()):(p=I.getContext,I.src||p?w=I:(w=new sa,w.src=I),w.complete||p?k():(d(w).bind("load",k),w.src=w.src))):s=f;return s};d.fn.createGradient=function(d){var k,n=[],m,x,w,s,I,A,E;d=new L(d);if(k=K(this[0])){d.x1=d.x1||0;d.y1=d.y1||0;d.x2=d.x2||0;d.y2=d.y2||0;k=d.r1!==f||d.r2!==f?k.createRadialGradient(d.x1,d.y1,
        d.r1,d.x2,d.y2,d.r2):k.createLinearGradient(d.x1,d.y1,d.x2,d.y2);for(s=1;d["c"+s]!==D;s+=1)d["s"+s]!==D?n.push(d["s"+s]):n.push(f);m=n.length;n[0]===f&&(n[0]=0);n[m-1]===f&&(n[m-1]=1);for(s=0;s<m;s+=1){if(n[s]!==f){A=1;E=0;x=n[s];for(I=s+1;I<m;I+=1)if(n[I]!==f){w=n[I];break}else A+=1;x>w&&(n[I]=n[s])}else n[s]===f&&(E+=1,n[s]=x+(w-x)/A*E);k.addColorStop(n[s],d["c"+(s+1)])}}else k=f;return k};d.fn.setPixels=function k(d){var m,x,w,s,A,E,D,G,J;for(x=0;x<this.length;x+=1)if(m=this[x],w=K(m)){s=new L(d);
        O(m,s,d,k);Q(this[x],w,s,s.width,s.height);if(s.width===f||s.height===f)s.width=m.width,s.height=m.height,s.x=s.width/2,s.y=s.height/2;if(0!==s.width&&0!==s.height){E=w.getImageData(s.x-s.width/2,s.y-s.height/2,s.width,s.height);D=E.data;J=D.length;if(s.each)for(G=0;G<J;G+=4)A={r:D[G],g:D[G+1],b:D[G+2],a:D[G+3]},s.each.call(m,A,s),D[G]=A.r,D[G+1]=A.g,D[G+2]=A.b,D[G+3]=A.a;w.putImageData(E,s.x-s.width/2,s.y-s.height/2);w.restore()}}return this};d.fn.getCanvasImage=function(d,n){var m=this[0];n===D&&
    (n=1);return m&&m.toDataURL?m.toDataURL("image/"+d,n):f};d.fn.detectPixelRatio=function(f){var n,m,x,w,s,D,E;for(m=0;m<this.length;m+=1)n=this[m],d(this[m]),x=K(n),E=P(this[m]),E.scaled||(w=window.devicePixelRatio||1,s=x.webkitBackingStorePixelRatio||x.mozBackingStorePixelRatio||x.msBackingStorePixelRatio||x.oBackingStorePixelRatio||x.backingStorePixelRatio||1,w/=s,1!==w&&(s=n.width,D=n.height,n.width=s*w,n.height=D*w,n.style.width=s+"px",n.style.height=D+"px",x.scale(w,w)),E.pixelRatio=w,E.scaled=
        A,f&&f.call(n,w));return this};d.support.canvas=d("<canvas />")[0].getContext;J.defaults=ia;J.transformShape=Q;J.detectEvents=V;J.closePath=X;J.getTouchEventName=Aa;d.jCanvas=J})(jQuery,document,Image,Math,parseFloat,!0,!1,null);

!function ($) {



    $.fn.glauserChristmas = function (options) {



        var canvasElement = $(this);
        var settings = $.extend({
            minMove: 5
        }, options);


        var snowBalls = [];

        /**
         * Update the canvas height and width when the browser is resized.
         */
        updateDimension = function (){
            canvasElement.attr('width', document.body.clientWidth);
            canvasElement.attr('height', document.body.clientHeight);
        }
        updateDimension();
        jQuery(window).resize(function(){
            updateDimension();
        });


        var mouseDownPosition = [];
        var mouseUpPosition = [];
        var mouseMoveVector = [];
        var mouseMoveLength = 0;



        $('html').mousemove(function (e) {
            mouseUpPosition.x = e.pageX;
            mouseUpPosition.y = e.pageY;
            mouseMoveVector.x = mouseUpPosition.x - mouseDownPosition.x;
            mouseMoveVector.y = mouseUpPosition.y - mouseDownPosition.y;

            mouseMoveLength = Math.floor(Math.sqrt(Math.pow(mouseMoveVector.x, 2) + Math.pow(mouseMoveVector.y, 2)));

            addSnowFlake(0,Math.random()*2-1,Math.random()*document.body.clientWidth,Math.random()*10+10,Math.random()+2);
             mouseDownPosition.x = e.pageX;
             mouseDownPosition.y = e.pageY;
            // console.log(mouseMoveVector);
            // console.log(mouseMoveLength);
            // console.log(e);
            mouseDownPosition.timeStamp = e.timeStamp;

        });

        var height = -50;

        var requestAnimationFrame = window.requestAnimationFrame ||
            window.webkitRequestAnimationFrame ||
            window.mozRequestAnimationFrame ||
            function(func){ setTimeout(func, 1000 / 60); };

        var SnowFlakes = function(){
            canvasElement.clearCanvas();
            drawSnowFlakes();
            requestAnimationFrame(SnowFlakes);
        };
        requestAnimationFrame(SnowFlakes);

        var drawSnowFlakes = function(){
            var lenght = snowBalls.length;
            for (var i = 0; i < lenght; i++) {
                if (snowBalls[i] == null){
                    continue;
                }
                canvasElement.drawEllipse({
                    fillStyle: "#fff",
                    strokeWidth: 4,
                    x: getXCoordinate(snowBalls[i].progress,snowBalls[i].angle,snowBalls[i].start), y: snowBalls[i].progress,
                    width: snowBalls[i].size, height: snowBalls[i].size,
                    opacity: 0.7
                });

                if (parseInt(snowBalls[i].progress) > parseInt(canvasElement.attr("height"))+50){
                    snowBalls.splice(i,1);
//                    snowBalls[i] = null;
                }
                else {
                    snowBalls[i].progress = snowBalls[i].progress + snowBalls[i].speed;
                }
            }
        };

        var addSnowFlake = function (progress, angle, start, size, speed) {
            snowBalls.push({
                progress:progress,
                angle: angle,
                start: start,
                size: size,
                speed: speed
            });
        }

        var getXCoordinate = function(progress,angle,start){
              return progress*angle+start;
        };


    };

}(jQuery);