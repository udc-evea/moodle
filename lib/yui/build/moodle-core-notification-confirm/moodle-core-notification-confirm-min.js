YUI.add("moodle-core-notification-confirm",function(e,t){var n,r,i,s,o,u,a,f;n="moodle-dialogue",r="notificationBase",i=0,s="yesLabel",o="noLabel",u="title",a="question",f={BASE:"moodle-dialogue-base",WRAP:"moodle-dialogue-wrap",HEADER:"moodle-dialogue-hd",BODY:"moodle-dialogue-bd",CONTENT:"moodle-dialogue-content",FOOTER:"moodle-dialogue-ft",HIDDEN:"hidden",LIGHTBOX:"moodle-dialogue-lightbox"},M.core=M.core||{};var l="Moodle confirmation dialogue",c;c=function(e){c.superclass.constructor.apply(this,[e])},e.extend(c,M.core.dialogue,{closeEvents:[],initializer:function(){this.publish("complete"),this.publish("complete-yes"),this.publish("complete-no");var t=e.Node.create('<input type="button" id="id_yuiconfirmyes-'+this.get("COUNT")+'" value="'+this.get(s)+'" />'),n=e.Node.create('<input type="button" id="id_yuiconfirmno-'+this.get("COUNT")+'" value="'+this.get(o)+'" />'),i=e.Node.create('<div class="confirmation-dialogue"></div>').append(e.Node.create('<div class="confirmation-message">'+this.get(a)+"</div>")).append(e.Node.create('<div class="confirmation-buttons"></div>').append(t).append(n));this.get(r).addClass("moodle-dialogue-confirm"),this.setStdModContent(e.WidgetStdMod.BODY,i,e.WidgetStdMod.REPLACE),this.setStdModContent(e.WidgetStdMod.HEADER,'<h1 id="moodle-dialogue-'+this.get("COUNT")+'-header-text">'+this.get(u)+"</h1>",e.WidgetStdMod.REPLACE),this.after("destroyedChange",function(){this.get(r).remove()},this),this.closeEvents.push(e.on("key",this.submit,window,"down:13",this,!0),e.on("key",this.submit,window,"down:27",this,!1),t.on("click",this.submit,this,!0),n.on("click",this.submit,this,!1));var f=this.get("boundingBox").one(".closebutton");f&&this.closeEvents.push(f.on("click",this.submit,this))},submit:function(t,n){(new e.EventHandle(this.closeEvents)).detach(),this.fire("complete",n),n?this.fire("complete-yes"):this.fire("complete-no"),this.hide(),this.destroy()}},{NAME:l,CSS_PREFIX:n,ATTRS:{yesLabel:{validator:e.Lang.isString,value:"Yes"},noLabel:{validator:e.Lang.isString,value:"No"},title:{validator:e.Lang.isString,value:"Confirm"},question:{validator:e.Lang.isString,value:"Are you sure?"}}}),e.augment(c,e.EventTarget),M.core.confirm=c},"@VERSION@",{requires:["moodle-core-notification-dialogue"]});