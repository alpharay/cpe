/*1357212701,173213983*/

if (self.CavalryLogger) { CavalryLogger.start_js(["Ok9fL"]); }

__d("legacy:dom-untrusted",["UntrustedLink"],function(a,b,c,d){a.UntrustedLink=b('UntrustedLink');},3);
__d("PopupWindow",["DOMDimensions","DOMQuery","UserAgent","copyProperties"],function(a,b,c,d,e,f){var g=b('DOMDimensions'),h=b('DOMQuery'),i=b('UserAgent'),j=b('copyProperties'),k={_opts:{allowShrink:true,strategy:'vector',timeout:100,widthElement:null},init:function(l){j(k._opts,l);setInterval(k._resizeCheck,k._opts.timeout);},_resizeCheck:function(){var l=g.getViewportDimensions(),m=k._getDocumentSize(),n=m.height-l.height,o=m.width-l.width;if(o<0&&!k._opts.widthElement)o=0;o=o>1?o:0;if(!k._opts.allowShrink&&n<0)n=0;if(n||o)try{window.console&&window.console.firebug;window.resizeBy(o,n);if(o)window.moveBy(o/-2,0);}catch(p){}},_getDocumentSize:function(){var l=g.getDocumentDimensions();if(k._opts.strategy==='offsetHeight')l.height=document.body.offsetHeight;if(k._opts.widthElement){var m=h.scry(document.body,k._opts.widthElement)[0];if(m)l.width=g.getElementDimensions(m).width;}if(window.Dialog&&Dialog.max_bottom&&Dialog.max_bottom>l.height)l.height=Dialog.max_bottom;return l;},open:function(l,m,n){var o=typeof window.screenX!='undefined'?window.screenX:window.screenLeft,p=typeof window.screenY!='undefined'?window.screenY:window.screenTop,q=typeof window.outerWidth!='undefined'?window.outerWidth:document.body.clientWidth,r=typeof window.outerHeight!='undefined'?window.outerHeight:(document.body.clientHeight-22),s=parseInt(o+((q-n)/2),10),t=parseInt(p+((r-m)/2.5),10),u=('width='+n+',height='+m+',left='+s+',top='+t);return window.open(l,'_blank',u);}};e.exports=k;});
__d("legacy:popup-resizer",["PopupWindow"],function(a,b,c,d){a.PopupResizer=b('PopupWindow');},3);
var PlatformOptInPopup=function(){};copyProperties(PlatformOptInPopup,{DIALOG_URL:'/connect/uiserver.php',DIALOG_WIDTH:420,DIALOG_HEIGHT:450,APP_ID:127760087237610,open:function(a,b,c){if(!a)a='generic';if(!b)b='plugin.optin';var d=new URI(PlatformOptInPopup.DIALOG_URL);d.addQueryData({social_plugin:a,method:b,display:'popup',secure:URI.getRequestURI().isSecure(),app_id:PlatformOptInPopup.APP_ID});if(c)d.addQueryData(c);return PopupResizer.open(d.toString(),PlatformOptInPopup.DIALOG_WIDTH,PlatformOptInPopup.DIALOG_HEIGHT);}});
WidgetArbiter={_findSiblings:function(){if(WidgetArbiter._siblings)return;WidgetArbiter._siblings=[];for(var a=parent.frames.length-1;a>=0;a--)try{if(parent.frames[a]&&parent.frames[a].Arbiter&&parent.frames[a].Arbiter.inform)WidgetArbiter._siblings.push(parent.frames[a].Arbiter);}catch(b){}},inform:function(){WidgetArbiter._findSiblings();var a=$A(arguments);WidgetArbiter._siblings.forEach(function(b){b.inform.apply(b,a);});}};
WindowComm={_callbacks:{},makeHandler:function(a,b){b=b||'opener';var c='f'+(Math.random()*(1<<30)).toString(16).replace('.','');WindowComm._callbacks[c]=a;return new URI('/connect/window_comm.php').setQueryData({_id:c,_relation:b}).getQualifiedURI().toString();},_recv:function(a){var b=new URI(a).getQueryData();WindowComm._callbacks[b._id](b);}};
function ConnectSocialWidget(a,b){ConnectSocialWidget.setInstance(b,this);ConnectSocialWidget.delayUntilDisplayed(function(){this.initializeObject.call(this,a,b);}.bind(this));}copyProperties(ConnectSocialWidget,{OPT_IN_FACEBOOK_APP_ID:'127760087237610',TYPE_ACTIVITY:'A',TYPE_RECOMMENDATIONS:'R',TYPE_LIKEBOX:'L',instances:{},setInstance:function(a,b){ConnectSocialWidget.instances[a]=b;},getInstance:function(a){return ConnectSocialWidget.instances[a];},popups:{},login:function(a,b){ConnectSocialWidget.popups[b]={popup:PlatformOptInPopup.open('login','plugin.optin')};},aDelayedFunctions:[],delayUntilDisplayed:function(a){ConnectSocialWidget.aDelayedFunctions.push(a);if(ConnectSocialWidget.aDelayedFunctions.length===1){if(!ConnectSocialWidget.ndTestDim){var b=document.createElement('div'),c={position:'absolute',width:'1px',height:'1px',overflow:'hidden',top:'0px'};for(var d in c)if(typeof c[d]==='string')Style.set(b,d,c[d]);document.body.appendChild(b);ConnectSocialWidget.ndTestDim=b;}ConnectSocialWidget.testForDisplay();}},testForDisplay:function(){var a=Vector2.getElementDimensions(ConnectSocialWidget.ndTestDim).y;if(a!==0){ConnectSocialWidget.aDelayedFunctions.forEach(function(b){b();});ConnectSocialWidget.aDelayedFunctions=[];}else ConnectSocialWidget.testForDisplay.defer(100);},listenForLogin:function(){if(!ConnectSocialWidget.listenerAttached){Arbiter.subscribe('platform/socialplugins/login',function(a){if(a.user!==Env.user)document.location.reload();});ConnectSocialWidget.listenerAttached=true;}}});copyProperties(ConnectSocialWidget.prototype,{initializeObject:function(a,b){var c=DOM.scry(document.body,a.sOverflowContainerSelector)[0],d=DOM.scry(c,'.fbConnectWidgetFooter')[0],e=d?Vector2.getElementDimensions(d).y:0,f=a.sOverflowItemsSelector,g=DOM.scry(document.body,a.sStreamContainerSelector)[0];this.fRemoveOverflowElements=this.removeOverflowElements.bind(this,c,g,f,-e);copyProperties(this,{bInitialized:true,sWidgetId:b,iFooterHeight:e,ndTop:c,ndFooter:d,ndContentContainer:g,oQueryParams:new URI(window.location.href).getQueryData(),bComboMode:a.bComboMode,sOverflowItemsSelector:f});this.oQueryParams.user=Env.user;this.fRemoveOverflowElements();Style.set(g,'visibility','visible');animation(g).from('opacity',0).to('opacity',1).duration(200).go();ConnectSocialWidget.listenForLogin();},getElementTop:function(a){var b=DOM.scry(a,'^'+this.sOverflowItemsSelector);return b[0];},getItemPosition:function(a){var b=DOM.scry(this.ndContentContainer,this.sOverflowItemsSelector),c=b.length,d=b.indexOf(a)+1;return d+'/'+c;},removeOverflowElements:function(a,b,c,d,e){var f,g=c?DOM.scry(b,c):$A(b.childNodes);if(!e){var d=d||0,h=Vector2.getElementDimensions(a).y+d,i=Vector2.getElementPosition(a).y;e=h+i;}while(g.length>0&&(f=$(g.pop()))&&(Vector2.getElementDimensions(f).y+Vector2.getElementPosition(f).y)>e)DOM.remove(f);},login:function(){ConnectSocialWidget.login(this.appID,this.sWidgetId);},toggleLogin:function(){DOM.scry(this.ndTop,'.fbToggleLogin').forEach(function(a){CSS.toggle(a);});this.fRemoveOverflowElements();}});function ActivityWidget(a,b){this.parent.construct(this,a,b);}Class.extend(ActivityWidget,'ConnectSocialWidget');ActivityWidget.REQUEST_INTERVAL=15*1000;ActivityWidget.ACTIVITY_HEIGHT=45;ActivityWidget.MAX_INTERVAL=30;ActivityWidget.MAX_ITEMS=24;copyProperties(ActivityWidget.prototype,{initializeObject:function(a,b){this.parent.initializeObject.call(this,a,b);this.oQueryParams.nb_activities=Math.min(ActivityWidget.MAX_ITEMS,Math.round((this.oQueryParams.height||300)/ActivityWidget.ACTIVITY_HEIGHT));this.oQueryParams.newest=a.iNewestStoryTime||0;},removeOverflowElements:function(){if(this.bComboMode&&!this.bFirstRound){this.bFirstRound=true;var a=Vector2.getElementPosition(this.ndTop).y,b=Vector2.getElementDimensions(document.body).y-(a+this.iFooterHeight),c=Math.round(b/2),d=$A(arguments);d[d.length]=c;ConnectSocialWidget.prototype.removeOverflowElements.apply(this,d);}else ConnectSocialWidget.prototype.removeOverflowElements.apply(this,arguments);},hasFriendsActivity:function(){return DOM.scry(this.ndContentContainer,'div.fbFriendsActivity')[0].childNodes.length>0;},hasContent:function(){return DOM.scry(this.ndTop,this.sOverflowItemsSelector).length>0;},getEmptyMessage:function(){return DOM.find(this.ndContentContainer,'div.fbEmptyWidget');},showEmptyMessage:function(){var a=this.getEmptyMessage();if(a)CSS.show(a);}});function RecommendationsWidget(a,b){this.parent.construct(this,a,b);}Class.extend(RecommendationsWidget,'ConnectSocialWidget');copyProperties(RecommendationsWidget.prototype,{initializeObject:function(a,b){this.parent.initializeObject.call(this,a,b);this.sActivityParent=a.sActivityParent;this.cropImages(DOM.scry(this.ndContentContainer,".fbImageContainer img"),RecommendationsWidget.IMAGE_HEIGHT,true);this.cropImages(DOM.scry(this.ndContentContainer,"img.fbGalleryImage"),RecommendationsWidget.GALLERY_IMAGE_HEIGHT,false);},cropImages:function(a,b,c){if(a.length>0){var d=function(event){RecommendationsWidget.image_resize({image:event.getTarget(),dimension:b,centerimage:c});};a.forEach(function(e){if(e.complete){RecommendationsWidget.image_resize({image:e,dimension:b,centerimage:c});}else Event.listen(e,'load',d);});}},hasContent:function(){return this.ndContentContainer.childNodes.length>0;},getParent:function(){if(this.sActivityParent)return ConnectSocialWidget.getInstance(this.sActivityParent);},showRecommendationsSeparator:function(){var a=this.getParent();if(a&&a.hasContent()){var b=DOM.scry(this.ndTop,'div.fbRecommendationsSeparator')[0];CSS.show(b);Style.set(b,'visibility','visible');}return this;},removeOverflowElements:function(){ConnectSocialWidget.prototype.removeOverflowElements.apply(this,arguments);if(this.sActivityParent&&!this.hasContent()){var a=DOM.scry(this.ndTop,'div.fbRecommendationsSeparator')[0];CSS.hide(a);}}});RecommendationsWidget.IMAGE_HEIGHT=35;RecommendationsWidget.GALLERY_IMAGE_HEIGHT=105;function LikeBoxWidget(a,b){this.parent.construct(this,a,b);}Class.extend(LikeBoxWidget,'ConnectSocialWidget');copyProperties(LikeBoxWidget.prototype,{});RecommendationsWidget.image_resize=function(a){var b=a.image,c=Vector2.getElementDimensions(b),d=c.y,e=c.x,f=a.dimension,g=f+'px',h=a.centerimage;if(d<=5||e<=5)return;var i=d/e;if(i<.5||i>2)return;if(d===e){Style.set(b,'width',g);}else if(d<e){var j=f/d,k=-Math.round((e-d)*j/2);Style.set(b,'height',g);h&&Style.set(b,'marginLeft',k+'px');}else{var j=f/e,l=-Math.round((d-e)*j/2);Style.set(b,'width',g);h&&Style.set(b,'marginTop',l+'px');}Style.set(b,'visibility','visible');Style.set(b.parentNode,'background','transparent');var m=Parent.byClass(b,'fbRecommendation');if(m)CSS.removeClass(m,'invisible_elem');};
__d("sprintf",[],function(a,b,c,d,e,f){function g(h,i){i=Array.prototype.slice.call(arguments,1);var j=0;return h.replace(/%s/g,function(k){return i[j++];});}e.exports=g;});
__d("Log",["sprintf"],function(a,b,c,d,e,f){var g=b('sprintf'),h={DEBUG:3,INFO:2,WARNING:1,ERROR:0};function i(k,l){var m=Array.prototype.slice.call(arguments,2),n=g.apply(null,m),o=window.console;if(o&&j.level>=k)o[l in o?l:'log'](n);}var j={level:-1,Level:h,debug:i.bind(null,h.DEBUG,'debug'),info:i.bind(null,h.INFO,'debug'),warn:i.bind(null,h.WARNING,'debug'),error:i.bind(null,h.ERROR,'debug')};e.exports=j;});
__d("resolveWindow",[],function(a,b,c,d,e,f){function g(h){var i=window,j=h.split('.');try{for(var l=0;l<j.length;l++){var m=j[l],n=/^frames\[['"]?([a-zA-Z0-9\-_]+)['"]?\]$/.exec(m);if(n){i=i.frames[n[1]];}else if(m==='opener'||m==='parent'||m==='top'){i=i[m];}else return null;}}catch(k){return null;}return i;}e.exports=g;});
__d("XD",["function-extensions","Arbiter","DOM","DOMDimensions","Log","URI","UserAgent","copyProperties","isInIframe","resolveWindow"],function(a,b,c,d,e,f){b('function-extensions');var g=b('Arbiter'),h=b('DOM'),i=b('DOMDimensions'),j=b('Log'),k=b('URI'),l=b('UserAgent'),m=b('copyProperties'),n=b('isInIframe'),o=b('resolveWindow'),p='fb_xdm_frame_'+location.protocol.replace(':',''),q={_callbacks:[],_opts:{autoResize:false,allowShrink:true,channelUrl:null,hideOverflow:false,resizeTimeout:1000,resizeWidth:false,expectResizeAck:false,resizeAckTimeout:6000},_lastResizeAckId:0,_resizeCount:0,_resizeTimestamp:0,_shrinker:null,init:function(s){this._opts=m(m({},this._opts),s);if(this._opts.autoResize)this._startResizeMonitor();g.subscribe('Connect.Unsafe.resize.ack',function(t,u){if(!u.id)u.id=this._resizeCount;if(u.id>this._lastResizeAckId)this._lastResizeAckId=u.id;}.bind(this));},send:function(s,t){t=t||this._opts.channelUrl;if(!t)return;var u={},v=new k(t);m(u,s);m(u,k.explodeQuery(v.getFragment()));var w=new k(u.origin),x=w.getDomain()+(w.getPort()?':'+w.getPort():''),y=o(u.relation.replace(/^parent\./,'')),z=50,aa=function(){var ba=y.frames[p];try{ba.proxyMessage(k.implodeQuery(u),[x]);}catch(ca){if(--z){setTimeout(aa,100);}else j.warn('No such frame "'+p+'" to proxyMessage to');}};aa();},_computeSize:function(){var s=i.getDocumentDimensions(),t=0;if(this._opts.resizeWidth){var u=document.body;if(u.clientWidth<u.scrollWidth){t=s.width;}else{var v=u.childNodes;for(var w=0;w<v.length;w++){var x=v[w],y=x.offsetLeft+x.offsetWidth;if(y>t)t=y;}}t=Math.max(t,q.forced_min_width);}s.width=t;if(this._opts.allowShrink){if(!this._shrinker)this._shrinker=h.create('div');h.appendContent(document.body,this._shrinker);s.height=Math.max(this._shrinker.offsetTop,0);}return s;},_startResizeMonitor:function(){var s,t=document.documentElement;if(this._opts.hideOverflow){t.style.overflow='hidden';document.body.style.overflow='hidden';}var u=(function(){var v=this._computeSize(),w=Date.now(),x=this._lastResizeAckId<this._resizeCount&&(w-this._resizeTimestamp)>this._opts.resizeAckTimeout;if(!s||(this._opts.expectResizeAck&&x)||(this._opts.allowShrink&&s.width!=v.width)||(!this._opts.allowShrink&&s.width<v.width)||(this._opts.allowShrink&&s.height!=v.height)||(!this._opts.allowShrink&&s.height<v.height)){s=v;this._resizeCount++;this._resizeTimestamp=w;var y={type:'resize',height:v.height,ackData:{id:this._resizeCount}};if(v.width&&v.width!=0)y.width=v.width;try{if(k(document.referrer).isFacebookURI()&&n()&&window.name&&window.parent.location&&window.parent.location.toString&&k(window.parent.location).isFacebookURI()){var aa=window.parent.document.getElementsByTagName('iframe');for(var ba=0;ba<aa.length;ba=ba+1)if(aa[ba].name==window.name){if(this._opts.resizeWidth)aa[ba].style.width=y.width+'px';aa[ba].style.height=y.height+'px';}}this.send(y);}catch(z){this.send(y);}}}).bind(this);u();setInterval(u,this._opts.resizeTimeout);}},r=m({},q);e.exports.UnverifiedXD=r;e.exports.XD=q;a.UnverifiedXD=r;a.XD=q;});
__d("legacy:connect-xd",["XD"],function(a,b,c,d){a.UnverifiedXD=b('XD').UnverifiedXD;a.XD=b('XD').XD;},3);
__d("legacy:async-postlude",["AsyncRequestNectarLogging"],function(a,b,c,d){b('AsyncRequestNectarLogging');},3);
function fbpage_set_fan_status(a,b,c,d,e,f,g){e=e?e:function(j){_fbpage_show_change_status_feedback(a,j.getPayload());};var h={fbpage_id:b,add:c,reload:d};if(g!=null)copyProperties(h,g);var i=new AsyncRequest().setURI('/ajax/pages/fan_status.php').setData(h).setNectarModuleDataSafe(a).setHandler(e);if(f)i.setErrorHandler(f);i.send();return false;}function fbpage_set_favorite_status(a,b,c){var d=function(){_fbpage_show_change_status_feedback(a,this.getUserData());},e={fbpage_id:b,add:c},f=new AsyncRequest().setMethod('POST').setURI('/ajax/pages/favorite_status.php').setData(e);new Dialog().setAsync(f).setCloseHandler(d).show();return false;}function _fbpage_show_change_status_feedback(a,b){if(!b||!a)return;if(b.reload){fbpage_reload_on_fan_status_changed(b.preserve_tab);}else fbpage_redraw_on_fan_status_changed(a,b.feedback);}function fbpage_reload_on_fan_status_changed(a){var b=URI.getRequestURI();if(a){var c=FutureSideNav.getInstance().selected.textKey;if(!b.getQueryData().sk&&c)b.addQueryData({sk:c});}window.location.href=b;}function fbpage_redraw_on_fan_status_changed(a,b){if(!b)return;if(Parent.byClass(a,'fbTimelineEscapeSectionItem'))a=Parent.byClass(a,'fan_status_inactive')||a;var c=DOM.create('span',{className:'fan_status_inactive'},b);a.parentNode.replaceChild(c,a);var d=function(){if(data.can_repeat_action)c.parentNode.replaceChild(a,c);};animation(c).duration(3000).checkpoint().to('backgroundColor','#FFFFFF').duration(1000).ondone(d).go();}function fbpage_toggle_like_on_fan_status_changed(a,b){var c=$('liked_pages_like_action_'+a),d=$('liked_pages_undo_action_'+a);CSS.conditionClass(c,'hidden_elem',b);CSS.conditionClass(d,'hidden_elem',!b);}function fbpage_inform_arbiter_on_change(a,b){if(window.PageLikeButton)if(b){PageLikeButton.informLike(a);PageLikeButton.informLikeSuccess(a);}else PageLikeButton.informUnlike(a);}
__d("legacy:primer",["Primer"],function(a,b,c,d){b('Primer');},3);
function ConnectWidget(a,b,c,d,e){copyProperties(this,{channel_url:e,like_mode:d,profile_id:b,viewer_id:a,status:null,popup:null,busy:false,new_fan:null,user_profile:null});this.fan_hidden=[];this.fan_shown=[];var f=DOM.scry(document,'div.connections');if(f.length>0){f=f[0];this.user_profile=DOM.find(f,'div.user_profile');this.new_fan=DOM.find(f,'div.grid_item_plus');this.fan_shown.push(this.new_fan);this.fan_shown.push(DOM.find(f,'span.total_plus'));var g=DOM.scry(f,'span.total'),h=DOM.scry(f,'div.grid_item');if(h.length>1)this.fan_hidden.push(h[1]);this.fan_hidden.push(g[g.length-1]);}if(!this.like_mode){this.button=$(c);this.popup_uri=new URI('/login.php');this.popup_uri.addQueryData({connect_id:this.profile_id,popup:true});Event.listen(this.button,'click',this.connectClickHandler.bind(this));}else Arbiter.subscribe('platform/like/connection',this.updateWidgetFromLike.bind(this));ConnectWidget.instances[c]=this;if(this.channel_url)XD.init({channelUrl:this.channel_url});}ConnectWidget.instances={};ConnectWidget.is_connect=true;ConnectWidget.prototype.setLoggedIn=function(a){this.viewer_id=a;return this;};ConnectWidget.prototype.connectClickHandler=function(a){a.kill();if(this.viewer_id!=0){this.connect();}else this.popUpLogin();};ConnectWidget.prototype.connect=function(){if(!this.busy){this.busy=true;fbpage_set_fan_status(this.button,this.profile_id,true,false,this.connectDoneHandler.bind(this),this.connectErrorHandler.bind(this),this.getAsyncData());}};ConnectWidget.prototype.disconnect=function(){if(!this.busy){this.busy=true;fbpage_set_fan_status(this.button,this.profile_id,false,false,this.connectUndoneHandler.bind(this),function(){},this.getAsyncData());}};ConnectWidget.prototype.getAsyncData=function(){var a={source:'connect',is_connect:ConnectWidget.is_connect,fan_origin:'external_connect'};if(Env.fb_dtsg)a.fb_dtsg=Env.fb_dtsg;return a;};ConnectWidget.prototype.popUpLogin=function(){window.open(this.popup_uri.toString(),'_blank','toolbar=0,status=0,width=626,height=400');};ConnectWidget.prototype.updateWidgetFromLike=function(a,b){if(!b.userProfile)return;if(this.user_profile){var c=DOM.find(this.user_profile,'img'),d=DOM.find(this.user_profile,'a'),e=DOM.find(this.user_profile,'div.name');c.src=b.userProfile.pic_square;d.href=b.userProfile.profile_url;DOM.setContent(e,b.userProfile.name);}var f;if(b.nowConnected){f='likeboxLiked';this.showNewFan();}else{f='likeboxUnliked';this.hideNewFan();}if(this.channel_url)XD.send({type:f});};ConnectWidget.prototype.connectErrorHandler=function(a){if(a.error==1357001){this.viewer_id=0;this.popUpLogin();}else if(a.error==1357013){CSS.hide(this.button);var b=DOM.create('a',{href:DOM.find(document,'div.name_block a').href,target:'_blank'},"Verification is needed to connect.");this.status=DOM.create('span',{className:'connect_span'},b);DOM.insertAfter(this.button,this.status);}else{CSS.hide(this.button);if(a.error==1431001){this.status=DOM.create('span',{className:'connect_span'},"You like this.");}else this.status=DOM.create('span',{className:'connect_span'},a.getErrorSummary()+': '+a.getErrorDescription());animation(this.status).from('opacity',0).to('opacity',1).go();DOM.insertAfter(this.button,this.status);}this.busy=false;};ConnectWidget.prototype.connectDoneHandler=function(a){var b=a.getPayload();if(!b||!b.feedback)return;this.status=DOM.create('span',{className:'connect_span'},HTML(b.feedback));var c=DOM.create('a',{className:'undo'},"Undo");Event.listen(c,'click',function(e){e.kill();this.disconnect();}.bind(this));DOM.appendContent(this.status,c);animation(this.status).from('opacity',0).to('opacity',1).go();DOM.insertAfter(this.button,this.status);CSS.hide(this.button);if(this.new_fan!=null&&b.connect_fan_div){var d=DOM.create('div',null,HTML(b.connect_fan_div));DOM.setContent(this.new_fan,DOM.find(d,'a'));}this.showNewFan();this.busy=false;};ConnectWidget.prototype.showNewFan=function(){this.fan_shown.forEach(function(a){if(!CSS.hasClass(a,'hidden_elem'))return;var b=Style.get(a,'width');Style.set(a,'width',0);Style.set(a,'opacity',0);CSS.show(a);animation(a).to('width',b).duration(100).checkpoint().to('opacity',1).duration(400).go();});this.fan_hidden.forEach(function(a){CSS.hide(a);});};ConnectWidget.prototype.connectUndoneHandler=function(a){var b=a.getPayload();DOM.remove(this.status);animation(this.button).from('opacity',0).to('opacity',1).go();CSS.show(this.button);this.hideNewFan();this.busy=false;};ConnectWidget.prototype.hideNewFan=function(){this.fan_shown.forEach(function(a){if(CSS.hasClass(a,'hidden_elem'))return;animation(a).to('opacity',0).duration(100).checkpoint(.25).to('width',0).duration(100).ondone(function(){Style.set(a,'width',null);CSS.hide(a);this.fan_hidden.forEach(function(b){CSS.show(b);});}.bind(this)).go();}.bind(this));};ConnectWidget.loadStream=function(a,b,c){new AsyncRequest().setMethod('GET').setURI('/ajax/connect/connect_widget.php').setData({id:a,uniqid:b,force_wall:c}).setReadOnly(true).setErrorHandler(emptyFunction).send();};ConnectWidget.loggedIn=function(a){for(var b in ConnectWidget.instances){ConnectWidget.instances[b].setLoggedIn(a);ConnectWidget.instances[b].connect();}};ConnectWidget.setIsConnect=function(a){ConnectWidget.is_connect=a;};
__d("ArbiterFrame",[],function(a,b,c,d,e,f){var g={inform:function(h,i,j){var k=parent.frames,l=k.length,m;i.crossFrame=true;for(var n=0;n<l;n++){m=k[n];try{if(!m||m==window)continue;if(m.require){m.require('Arbiter').inform(h,i,j);}else if(m.AsyncLoader)m.AsyncLoader.wakeUp(h,i,j);}catch(o){}}}};e.exports=g;});
__d("wrapFunction",[],function(a,b,c,d,e,f){var g={};function h(i,j,k){j=j||'default';return function(){var l=j in g?g[j](i,k):i;return l.apply(this,arguments);};}h.setWrapper=function(i,j){j=j||'default';g[j]=i;};e.exports=h;});
__d("DOMEventListener",["wrapFunction"],function(a,b,c,d,e,f){var g=b('wrapFunction'),h,i;if(window.addEventListener){h=function(k,l,m){m.wrapper=g(m,'entry',k+':'+l);k.addEventListener(l,m.wrapper,false);};i=function(k,l,m){k.removeEventListener(l,m.wrapper,false);};}else if(window.attachEvent){h=function(k,l,m){m.wrapper=g(m,'entry',k+':'+l);k.attachEvent('on'+l,m.wrapper);};i=function(k,l,m){k.detachEvent('on'+l,m.wrapper);};}var j={add:function(k,l,m){h(k,l,m);return {remove:function(){i(k,l,m);k=null;}};},remove:i};e.exports=j;});
__d("curry",["bind"],function(a,b,c,d,e,f){var g=b('bind'),h=g(null,g,null);e.exports=h;});
__d("Plugin",["Arbiter","ArbiterFrame"],function(a,b,c,d,e,f){var g=b('Arbiter'),h=b('ArbiterFrame'),i={CONNECT:'platform/plugins/connect',DISCONNECT:'platform/plugins/disconnect',ERROR:'platform/plugins/error',connect:function(j,k){var l={identifier:j,href:j,story_fbid:k};g.inform(i.CONNECT,l);h.inform(i.CONNECT,l);},disconnect:function(j,k){var l={identifier:j,href:j,story_fbid:k};g.inform(i.DISCONNECT,l);h.inform(i.DISCONNECT,l);},error:function(j,k){g.inform(i.ERROR,{action:j,content:k});}};e.exports=i;});
__d("PluginMessage",["DOMEventListener"],function(a,b,c,d,e,f){var g=b('DOMEventListener'),h={listen:function(){g.add(window,'message',function(event){if((/\.facebook\.com$/).test(event.origin)&&/^FB_POPUP:/.test(event.data)){var i=JSON.parse(event.data.substring(9));if('reload' in i)document.location.replace(i.reload);}});}};e.exports=h;});
__d("PluginOptin",["DOMEvent","DOMEventListener","PluginMessage","PopupWindow","URI","bind","copyProperties","UserAgent"],function(a,b,c,d,e,f){var g=b('DOMEvent'),h=b('DOMEventListener'),i=b('PluginMessage'),j=b('PopupWindow'),k=b('URI'),l=b('bind'),m=b('copyProperties'),n=b('UserAgent');function o(p){m(this,{return_params:k.getRequestURI().getQueryData(),login_params:{},optin_params:{},plugin:p});this.addReturnParams({ret:'optin'});delete this.return_params.hash;}m(o.prototype,{addReturnParams:function(p){m(this.return_params,p);return this;},addLoginParams:function(p){m(this.login_params,p);return this;},addOptinParams:function(p){m(this.optin_params,p);return this;},start:function(){var p=new k('/dialog/plugin.optin').addQueryData(this.optin_params).addQueryData({app_id:127760087237610,secure:k.getRequestURI().isSecure(),social_plugin:this.plugin,return_params:JSON.stringify(this.return_params),login_params:JSON.stringify(this.login_params)});if(n.mobile()){p.setSubdomain('m');}else p.addQueryData({display:'popup'});this.popup=j.open(p.toString(),420,450);i.listen();return this;}});o.starter=function(p,q,r,s){var t=new o(p);t.addReturnParams(q||{});t.addLoginParams(r||{});t.addOptinParams(s||{});return l(t,t.start);};o.listen=function(p,q,r,s,t){h.add(p,'click',function(u){new g(u).kill();o.starter(q,r,s,t)();});};e.exports=o;});
__d("PluginConnectButton",["Arbiter","CSS","DOM","DOMEvent","DOMEventListener","Form","Plugin","PluginOptin","copyProperties"],function(a,b,c,d,e,f){var g=b('Arbiter'),h=b('CSS'),i=b('DOM'),j=b('DOMEvent'),k=b('DOMEventListener'),l=b('Form'),m=b('Plugin'),n=b('PluginOptin'),o=b('copyProperties'),p=g.SUBSCRIBE_NEW,q=g.subscribe,r=function(t,u){return k.add(t,'click',u);};function s(t){this.config=t;var u=i.find(t.form,'.pluginConnectButton');this.buttons=u;this.node_connected=i.find(u,'.pluginConnectButtonConnected');this.node_disconnected=i.find(u,'.pluginConnectButtonDisconnected');var v=function(x){new j(x).kill();this.submit();}.bind(this);r(this.node_disconnected,v);r(i.find(u,'.pluginButtonX button'),v);var w=this.update.bind(this);q(m.CONNECT,w,p);q(m.DISCONNECT,w,p);q(m.ERROR,this.error.bind(this),p);if(t.autosubmit)this.submit();}o(s.prototype,{update:function(t,event){var u=this.config;if(event.identifier!==u.identifier)return;var v=t===m.CONNECT?true:false,w="/plugins/"+u.plugin+"/";w+=!v?"connect":"disconnect";h[v?'show':'hide'](this.node_connected);h[v?'hide':'show'](this.node_disconnected);u.connected=v;u.form.setAttribute('action',w);u.form.setAttribute('ajaxify',w);},error:function(event,t){if(t.action in {connect:1,disconnect:1})i.setContent(this.buttons,t.content);},submit:function(){if(!this.config.canpersonalize)return this.login();l.bootstrap(this.config.form);this.fireStateToggle();},fireStateToggle:function(){var t=this.config;if(t.connected){m.disconnect(t.identifier);}else m.connect(t.identifier);},login:function(){var t=this.config.plugin;new n(t).addReturnParams({act:'connect'}).start();}});e.exports=s;});
__d("UnverifiedXD",["XD","XDUnverifiedChannel"],function(a,b,c,d,e,f){var g=b('XD').UnverifiedXD,h=c('XDUnverifiedChannel').channel;g.init({channelUrl:h});e.exports=g;});
__d("PluginConnectButtonEvent",["Arbiter","Plugin","UnverifiedXD"],function(a,b,c,d,e,f){var g=b('Arbiter'),h=b('Plugin'),i=b('UnverifiedXD'),j={listen:function(k){g.subscribe([h.CONNECT,h.DISCONNECT],function(l,event){if(event.identifier!==k)return;if(typeof event.story_fbid!=='undefined'&&!event.crossFrame)i.send({type:l===h.CONNECT?'edgeCreated':'edgeRemoved'});},g.SUBSCRIBE_NEW);}};e.exports=j;});
__d("PluginConnection",["Plugin","Arbiter","CSS","copyProperties"],function(a,b,c,d,e,f){var g=b('Plugin'),h=b('Arbiter'),i=b('CSS'),j=b('copyProperties'),k=function(){};j(k.prototype,{init:function(l,m,n,event){event=event||g.CONNECT;this.identifier=l;this.element=m;this.css=n;h.subscribe([g.CONNECT,g.DISCONNECT],function(o,p){if(l===p.href)i[o===event?'addClass':'removeClass'](m,n);return true;});return this;},connected:function(){return i.hasClass(this.element,this.css);},connect:function(){return h.inform(g.CONNECT,{href:this.identifier},h.BEHAVIOR_STATE);},disconnect:function(){return h.inform(g.DISCONNECT,{href:this.identifier},h.BEHAVIOR_STATE);},toggle:function(){return this.connected()?this.disconnect():this.connect();}});k.init=function(l){for(var m,n=0;n<l.length;n++){m=new k();m.init.apply(m,l[n]);}};e.exports=k;});
__d("PluginPerms",["DOMEvent","DOMEventListener","PluginMessage","PopupWindow","URI","bind","copyProperties"],function(a,b,c,d,e,f){var g=b('DOMEvent'),h=b('DOMEventListener'),i=b('PluginMessage'),j=b('PopupWindow'),k=b('URI'),l=b('bind'),m=b('copyProperties');function n(o,p){m(this,{return_params:k.getRequestURI().getQueryData(),login_params:{},perms_params:{},perms:[],plugin:o,app:p});this.addReturnParams({ret:'perms'});delete this.return_params.hash;}m(n.prototype,{addReturnParams:function(o){m(this.return_params,o);},addLoginParams:function(o){m(this.login_params,o);},addPermsParams:function(o){m(this.perms_params,o);},addPerms:function(o){this.perms.push.apply(this.perms,o);},start:function(){var o=k('/dialog/plugin.perms').addQueryData(this.perms_params).addQueryData({display:'popup',app_id:this.app,perms:this.perms.join(','),secure:k.getRequestURI().isSecure(),social_plugin:this.plugin,return_params:JSON.stringify(this.return_params),login_params:JSON.stringify(this.login_params)});this.popup=j.open(o.toString(),210,450);i.listen();}});n.starter=function(o,p,q,r,s,t){var u=new n(o,p);u.addReturnParams(r||{});u.addLoginParams(s||{});u.addPermsParams(t||{});u.addPerms(q||[]);return l(u,u.start);};n.listen=function(o,p,q,r,s,t,u){h.add(o,'click',function(v){new g(v).kill();n.starter(p,q,r,s,t,u)();});};e.exports=n;});
__d("PluginResize",["Log","UnverifiedXD","bind","copyProperties","curry"],function(a,b,c,d,e,f){var g=b('Log'),h=b('UnverifiedXD'),i=b('bind'),j=b('copyProperties'),k=b('curry');function l(o){o=o||document.body;return o.offsetWidth+o.offsetLeft;}function m(o){o=o||document.body;return o.offsetHeight+o.offsetTop;}function n(o,p,event){this.calcWidth=o||l;this.calcHeight=p||m;this.width=undefined;this.height=undefined;this.event=event||'resize';}j(n.prototype,{resize:function(){var o=this.calcWidth(),p=this.calcHeight();if(o!==this.width||p!==this.height){g.debug('Resizing Plugin: (%s, %s, %s)',o,p,this.event);this.width=o;this.height=p;h.send({type:this.event,width:o,height:p});}return this;},auto:function(o){setInterval(i(this,this.resize),o||250);return this;}});n.auto=function(o,event,p){return new n(k(l,o),k(m,o),event).resize().auto(p);};n.autoHeight=function(o,p,event,q){return new n(function(){return o;},k(m,p),event).resize().auto(q);};e.exports=n;});
__d("PluginSend",["Arbiter","CSS","DOMDimensions","DOMPosition","DOMQuery","PluginOptin","UnverifiedXD","copyProperties"],function(a,b,c,d,e,f){var g=b('Arbiter'),h=b('CSS'),i=b('DOMDimensions'),j=b('DOMPosition'),k=b('DOMQuery'),l=b('PluginOptin'),m=b('UnverifiedXD'),n=b('copyProperties'),o='platform/socialplugins/dialog',p='platform/socialplugins/send/sent',q='platform/socialplugins/send/cancel',r=false,s=false,t={type:'presentEdgeCommentDialog',controllerID:'',widget_type:'send',nodeURL:'',width:400,height:300,query:{}},u={close:'dismissEdgeCommentDialog',show:'showEdgeCommentDialog',hide:'hideEdgeCommentDialog'},v={element:null,href:'',canpersonalize:false,plugin:'send'},w,x,y='';function z(){new l(v.plugin).addReturnParams({act:"send"}).start();}function aa(da){if(!v.canpersonalize)return z();if(typeof da!=='string')if(!r){da='open';}else if(s){da='hide';}else da='show';switch(da){case 'open':g.inform(o,{controllerID:y,event:da});r=s=true;var ea=i.getElementDimensions(x),fa=j.getElementPosition(x);t.anchorGeometry={x:ea.width,y:ea.height};t.anchorPosition={x:fa.x,y:fa.y};var ga=ba();t.query.anchorTargetX=ga.x;t.query.anchorTargetY=ga.y;m.send(t);break;case 'close':g.inform(o,{controllerID:y,event:da});r=s=false;break;case 'show':s=true;break;default:s=false;break;}h[s?'show':'hide'](w);h[s?'hide':'show'](x);if(da!=='open')m.send({type:u[da]});}function ba(){var da=k.find(x,'.pluginButtonIcon'),ea=j.getElementPosition(da),fa=i.getElementDimensions(da);return {y:ea.y+fa.width/2,x:ea.x+fa.height/2};}var ca={init:function(da){n(v,da);y=t.controllerID=v.element.id;t.nodeURL=v.href;w=k.find(v.element,'.pluginSendActive');x=k.find(v.element,'.pluginSendInactive');v.element.onclick=aa;g.subscribe(q,function(ea,fa){if(fa.controllerID===y)aa('hide');},g.SUBSCRIBE_NEW);g.subscribe(p,function(ea,fa){if(fa.controllerID===y)aa('close');},g.SUBSCRIBE_NEW);if(da.autosubmit)aa('open');}};a.Arbiter=g;e.exports=ca;});
__d("PluginShareButton",["DOMEvent","DOMEventListener","PluginResize","PopupWindow","UserAgent"],function(a,b,c,d,e,f){var g=b('DOMEvent'),h=b('DOMEventListener'),i=b('PluginResize'),j=b('PopupWindow'),k=b('UserAgent'),l={listen:function(m,n){var o=m.href;h.add(m,'click',function(p){new g(p).kill();j.open(o,340,670);});},resize:function(m){var n=k.firefox()||k.ie()>=9?1:0;new i(function(){return m.offsetWidth+m.offsetLeft+n;},function(){return m.offsetHeight+m.offsetTop;}).resize().auto();}};e.exports=l;});
__d("PluginXDReady",["Arbiter","UnverifiedXD"],function(a,b,c,d,e,f){var g=b('Arbiter'),h=b('UnverifiedXD'),i={handleMessage:function(j){if(!j.method)return;try{g.inform('Connect.Unsafe.'+j.method,JSON.parse(j.params),g.BEHAVIOR_PERSISTENT);}catch(k){}}};a.XdArbiter=i;h.send({xd_action:'plugin_ready',name:window.name});e.exports=null;});