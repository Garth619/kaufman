!function(e){e.ui.FloatPanel.zIndex<100100&&(e.ui.FloatPanel.zIndex=100100),e.PluginManager.add("wordpress",function(t){function n(n){var o,a,d,l=0;a="hide"===n,t.theme.panel&&(d=t.theme.panel.find(".toolbar:not(.menubar)")),!d||d.length<2||"hide"===n&&!d[1].visible()||(!n&&d[1].visible()&&(n="hide"),s(d,function(e,t){t>0&&("hide"===n?(e.hide(),l+=30):(e.show(),l-=30))}),l&&!a&&(e.Env.iOS||(o=t.getContentAreaContainer().firstChild,r.setStyle(o,"height",o.clientHeight+l)),"hide"===n?(setUserSetting("hidetb","0"),i&&i.active(!1)):(setUserSetting("hidetb","1"),i&&i.active(!0))),t.fire("wp-toolbar-toggle"))}function o(){}var i,a,r=e.DOM,s=e.each,d=t.editorManager.i18n.translate,$=window.jQuery,l=window.wp,c=l&&l.editor&&l.editor.autop&&t.getParam("wpautop",!0);return $&&$(document).triggerHandler("tinymce-editor-setup",[t]),t.addButton("wp_adv",{tooltip:"Toolbar Toggle",cmd:"WP_Adv",onPostRender:function(){i=this,i.active("1"===getUserSetting("hidetb"))}}),t.on("PostRender",function(){t.getParam("wordpress_adv_hidden",!0)&&"0"===getUserSetting("hidetb","0")&&n("hide")}),t.addCommand("WP_Adv",function(){n()}),t.on("focus",function(){window.wpActiveEditor=t.id}),t.on("BeforeSetContent",function(t){var n;t.content&&(-1!==t.content.indexOf("<!--more")&&(n=d("Read more..."),t.content=t.content.replace(/<!--more(.*?)-->/g,function(t,o){return'<img src="'+e.Env.transparentSrc+'" data-wp-more="more" data-wp-more-text="'+o+'" class="wp-more-tag mce-wp-more" alt="" title="'+n+'" data-mce-resize="false" data-mce-placeholder="1" />'})),-1!==t.content.indexOf("<!--nextpage-->")&&(n=d("Page break"),t.content=t.content.replace(/<!--nextpage-->/g,'<img src="'+e.Env.transparentSrc+'" data-wp-more="nextpage" class="wp-more-tag mce-wp-nextpage" alt="" title="'+n+'" data-mce-resize="false" data-mce-placeholder="1" />')),t.load&&"raw"!==t.format&&c&&(t.content=l.editor.autop(t.content)),-1===t.content.indexOf("<script")&&-1===t.content.indexOf("<style")||(t.content=t.content.replace(/<(script|style)[^>]*>[\s\S]*?<\/\1>/g,function(t,n){return'<img src="'+e.Env.transparentSrc+'" data-wp-preserve="'+encodeURIComponent(t)+'" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="&lt;'+n+'&gt;" title="&lt;'+n+'&gt;" />'})))}),t.on("setcontent",function(){t.$("p").each(function(t,n){if(n.innerHTML&&n.innerHTML.length<10){var o=e.trim(n.innerHTML);o&&"&nbsp;"!==o||(n.innerHTML=e.Env.ie&&e.Env.ie<11?"":'<br data-mce-bogus="1">')}})}),t.on("PostProcess",function(e){e.get&&(e.content=e.content.replace(/<img[^>]+>/g,function(e){var t,n,o="";return-1!==e.indexOf('data-wp-more="more"')?((t=e.match(/data-wp-more-text="([^"]+)"/))&&(o=t[1]),n="<!--more"+o+"-->"):-1!==e.indexOf('data-wp-more="nextpage"')?n="<!--nextpage-->":-1!==e.indexOf("data-wp-preserve")&&(t=e.match(/ data-wp-preserve="([^"]+)"/))&&(n=decodeURIComponent(t[1])),n||e}))}),t.on("ResolveName",function(e){var n;"IMG"===e.target.nodeName&&(n=t.dom.getAttrib(e.target,"data-wp-more"))&&(e.name=n)}),t.addCommand("WP_More",function(n){var o,i,a,r="wp-more-tag",s=t.dom,l=t.selection.getNode();if(n=n||"more",r+=" mce-wp-"+n,a="more"===n?"Read more...":"Next page",a=d(a),i='<img src="'+e.Env.transparentSrc+'" alt="" title="'+a+'" class="'+r+'" data-wp-more="'+n+'" data-mce-resize="false" data-mce-placeholder="1" />',"BODY"===l.nodeName||"P"===l.nodeName&&"BODY"===l.parentNode.nodeName)return void t.insertContent(i);(o=s.getParent(l,function(e){return!(!e.parentNode||"BODY"!==e.parentNode.nodeName)},t.getBody()))&&("P"===o.nodeName?o.appendChild(s.create("p",null,i).firstChild):s.insertAfter(s.create("p",null,i),o),t.nodeChanged())}),t.addCommand("WP_Code",function(){t.formatter.toggle("code")}),t.addCommand("WP_Page",function(){t.execCommand("WP_More","nextpage")}),t.addCommand("WP_Help",function(){function n(e,t){var n="<tr>",o=0;for(t=t||1,s(e,function(e,t){n+="<td><kbd>"+t+"</kbd></td><td>"+d(e)+"</td>",o++});o<t;)n+="<td></td><td></td>",o++;return n+"</tr>"}var o=d(e.Env.mac?"Ctrl + Alt + letter:":"Shift + Alt + letter:"),i=d(e.Env.mac?"Cmd + letter:":"Ctrl + letter:"),a=[],r=[],l={},c={},p=0,m=0,u=t.settings.wp_shortcut_labels,g,h,f,w;u&&(s(u,function(e,t){var o;-1!==e.indexOf("meta")?(p++,(o=e.replace("meta","").toLowerCase())&&(l[o]=t,p%2==0&&(a.push(n(l,2)),l={}))):-1!==e.indexOf("access")&&(m++,(o=e.replace("access","").toLowerCase())&&(c[o]=t,m%2==0&&(r.push(n(c,2)),c={})))}),p%2>0&&a.push(n(l,2)),m%2>0&&r.push(n(c,2)),g=[d("Letter"),d("Action"),d("Letter"),d("Action")],g="<tr><th>"+g.join("</th><th>")+"</th></tr>",h='<div class="wp-editor-help">',h=h+"<h2>"+d("Default shortcuts,")+" "+i+'</h2><table class="wp-help-th-center fixed">'+g+a.join("")+"</table><h2>"+d("Additional shortcuts,")+" "+o+'</h2><table class="wp-help-th-center fixed">'+g+r.join("")+"</table>",t.plugins.wptextpattern&&(!e.Env.ie||e.Env.ie>8)&&(h=h+"<h2>"+d("When starting a new paragraph with one of these formatting shortcuts followed by a space, the formatting will be applied automatically. Press Backspace or Escape to undo.")+'</h2><table class="wp-help-th-center fixed">'+n({"*":"Bullet list","1.":"Numbered list"})+n({"-":"Bullet list","1)":"Numbered list"})+"</table>",h=h+"<h2>"+d("The following formatting shortcuts are replaced when pressing Enter. Press Escape or the Undo button to undo.")+'</h2><table class="wp-help-single">'+n({">":"Blockquote"})+n({"##":"Heading 2"})+n({"###":"Heading 3"})+n({"####":"Heading 4"})+n({"#####":"Heading 5"})+n({"######":"Heading 6"})+n({"---":"Horizontal line"})+"</table>"),h=h+"<h2>"+d("Focus shortcuts:")+'</h2><table class="wp-help-single">'+n({"Alt + F8":"Inline toolbar (when an image, link or preview is selected)"})+n({"Alt + F9":"Editor menu (when enabled)"})+n({"Alt + F10":"Editor toolbar"})+n({"Alt + F11":"Elements path"})+"</table><p>"+d("To move focus to other buttons use Tab or the arrow keys. To return focus to the editor press Escape or use one of the buttons.")+"</p>",h+="</div>",f=t.windowManager.open({title:"Keyboard Shortcuts",items:{type:"container",classes:"wp-help",html:h},buttons:{text:"Close",onclick:"close"}}),f.$el&&(f.$el.find('div[role="application"]').attr("role","document"),w=f.$el.find(".mce-wp-help"),w[0]&&(w.attr("tabindex","0"),w[0].focus(),w.on("keydown",function(e){e.keyCode>=33&&e.keyCode<=40&&e.stopPropagation()}))))}),t.addCommand("WP_Medialib",function(){l&&l.media&&l.media.editor&&l.media.editor.open(t.id)}),t.addButton("wp_more",{tooltip:"Insert Read More tag",onclick:function(){t.execCommand("WP_More","more")}}),t.addButton("wp_page",{tooltip:"Page break",onclick:function(){t.execCommand("WP_More","nextpage")}}),t.addButton("wp_help",{tooltip:"Keyboard Shortcuts",cmd:"WP_Help"}),t.addButton("wp_code",{tooltip:"Code",cmd:"WP_Code",stateSelector:"code"}),l&&l.media&&l.media.editor&&t.addMenuItem("add_media",{text:"Add Media",icon:"wp-media-library",context:"insert",cmd:"WP_Medialib"}),t.addMenuItem("wp_more",{text:"Insert Read More tag",icon:"wp_more",context:"insert",onclick:function(){t.execCommand("WP_More","more")}}),t.addMenuItem("wp_page",{text:"Page break",icon:"wp_page",context:"insert",onclick:function(){t.execCommand("WP_More","nextpage")}}),t.on("BeforeExecCommand",function(n){!e.Env.webkit||"InsertUnorderedList"!==n.command&&"InsertOrderedList"!==n.command||(a||(a=t.dom.create("style",{type:"text/css"},"#tinymce,#tinymce span,#tinymce li,#tinymce li>span,#tinymce p,#tinymce p>span{font:medium sans-serif;color:#000;line-height:normal;}")),t.getDoc().head.appendChild(a))}),t.on("ExecCommand",function(n){e.Env.webkit&&a&&("InsertUnorderedList"===n.command||"InsertOrderedList"===n.command)&&t.dom.remove(a)}),t.on("init",function(){var n=e.Env,o=["mceContentBody"],i=t.getDoc(),a=t.dom;if(n.iOS&&a.addClass(i.documentElement,"ios"),"rtl"===t.getParam("directionality")&&(o.push("rtl"),a.setAttrib(i.documentElement,"dir","rtl")),a.setAttrib(i.documentElement,"lang",t.getParam("wp_lang_attr")),n.ie?9===parseInt(n.ie,10)?o.push("ie9"):8===parseInt(n.ie,10)?o.push("ie8"):n.ie<8&&o.push("ie7"):n.webkit&&o.push("webkit"),o.push("wp-editor"),s(o,function(e){e&&a.addClass(i.body,e)}),t.on("BeforeSetContent",function(e){e.content&&(e.content=e.content.replace(/<p>\s*<(p|div|ul|ol|dl|table|blockquote|h[1-6]|fieldset|pre)( [^>]*)?>/gi,"<$1$2>").replace(/<\/(p|div|ul|ol|dl|table|blockquote|h[1-6]|fieldset|pre)>\s*<\/p>/gi,"</$1>"))}),$&&$(document).triggerHandler("tinymce-editor-init",[t]),window.tinyMCEPreInit&&window.tinyMCEPreInit.dragDropUpload&&a.bind(i,"dragstart dragend dragover drop",function(e){$&&$(document).trigger(new $.Event(e))}),t.getParam("wp_paste_filters",!0)&&(t.on("PastePreProcess",function(t){t.content=t.content.replace(/<br class="?Apple-interchange-newline"?>/gi,""),e.Env.webkit||(t.content=t.content.replace(/(<[^>]+) style="[^"]*"([^>]*>)/gi,"$1$2"),t.content=t.content.replace(/(<[^>]+) data-mce-style=([^>]+>)/gi,"$1 style=$2"))}),t.on("PastePostProcess",function(n){t.$("p",n.node).each(function(e,t){a.isEmpty(t)&&a.remove(t)}),e.isIE&&t.$("a",n.node).find("font, u").each(function(e,t){a.remove(t,!0)})})),t.settings.wp_shortcut_labels&&t.theme.panel){var r={},d="Shift+Alt+",l="Ctrl+";e.Env.mac&&(d="⌃⌥",l="⌘"),s(t.settings.wp_shortcut_labels,function(e,t){r[t]=e.replace("access",d).replace("meta",l)}),s(t.theme.panel.find("button"),function(e){e&&e.settings.tooltip&&r.hasOwnProperty(e.settings.tooltip)&&(e.settings.tooltip=t.translate(e.settings.tooltip)+" ("+r[e.settings.tooltip]+")")}),s(t.theme.panel.find("listbox"),function(e){e&&"Paragraph"===e.settings.text&&s(e.settings.values,function(e){e.text&&r.hasOwnProperty(e.text)&&(e.shortcut="("+r[e.text]+")")})})}}),t.on("SaveContent",function(e){if(!t.inline&&t.isHidden())return void(e.content=e.element.value);e.content=e.content.replace(/<p>(?:<br ?\/?>|\u00a0|\uFEFF| )*<\/p>/g,"<p>&nbsp;</p>"),c&&(e.content=l.editor.removep(e.content))}),t.on("preInit",function(){t.schema.addValidElements("@[id|accesskey|class|dir|lang|style|tabindex|title|contenteditable|draggable|dropzone|hidden|spellcheck|translate],i,b,script[src|async|defer|type|charset|crossorigin|integrity]"),e.Env.iOS&&(t.settings.height=300),s({c:"JustifyCenter",r:"JustifyRight",l:"JustifyLeft",j:"JustifyFull",q:"mceBlockQuote",u:"InsertUnorderedList",o:"InsertOrderedList",m:"WP_Medialib",z:"WP_Adv",t:"WP_More",d:"Strikethrough",h:"WP_Help",p:"WP_Page",x:"WP_Code"},function(e,n){t.shortcuts.add("access+"+n,"",e)}),t.addShortcut("meta+s","",function(){l&&l.autosave&&l.autosave.server.triggerSave()}),window.getUserSetting("editor_plain_text_paste_warning")>1&&(t.settings.paste_plaintext_inform=!1),e.Env.mac&&e.$(t.iframeElement).attr("title",d("Rich Text Area. Press Control-Option-H for help."))}),t.on("PastePlainTextToggle",function(e){if(!0===e.state){var t=parseInt(window.getUserSetting("editor_plain_text_paste_warning"),10)||0;t<2&&window.setUserSetting("editor_plain_text_paste_warning",++t)}}),t.on("preinit",function(){function n(n,o){function d(){if(!l)return this;var t=window.pageXOffset||document.documentElement.scrollLeft,n=window.pageYOffset||document.documentElement.scrollTop,o=window.innerWidth,i=window.innerHeight,a=u?u.getBoundingClientRect():{top:0,right:o,bottom:i,left:0,width:o,height:i},s=this.getEl(),d=s.offsetWidth,c=s.clientHeight,p=l.getBoundingClientRect(),w=(p.left+p.right)/2,b=5,v=c+5,_=m?m.getBoundingClientRect().bottom:0,y=g?g.getBoundingClientRect().bottom:0,x=h?i-h.getBoundingClientRect().top:0,C=f?i-f.getBoundingClientRect().top:0,P=Math.max(0,_,y,a.top),E=Math.max(0,x,C,i-a.bottom),S=p.top+a.top-P,k=i-a.top-p.bottom-E,M=i-P-E,B="",I=0,O=0,W,z;return S>=M||k>=M?(this.scrolling=!0,this.hide(),this.scrolling=!1,this):(e.Env.iOS&&"IMG"===l.nodeName&&(I=54,O=46),this.bottom?k>=v?(B=" mce-arrow-up",W=p.bottom+a.top+n-O):S>=v&&(B=" mce-arrow-down",W=p.top+a.top+n-c+I):S>=v?(B=" mce-arrow-down",W=p.top+a.top+n-c+I):k>=v&&M/2>p.bottom+a.top-P&&(B=" mce-arrow-up",W=p.bottom+a.top+n-O),void 0===W&&(W=n+P+5+O),z=w-d/2+a.left+t,p.left<0||p.right>a.width?z=a.left+t+(a.width-d)/2:d>=o?(B+=" mce-arrow-full",z=0):z<0&&p.left+d>o||z+d>o&&p.right-d<0?z=(o-d)/2:z<a.left+t?(B+=" mce-arrow-left",z=p.left+a.left+t):z+d>a.width+a.left+t&&(B+=" mce-arrow-right",z=p.right-d+a.left+t),e.Env.iOS&&"IMG"===l.nodeName&&(B=B.replace(/ ?mce-arrow-(up|down)/g,"")),s.className=s.className.replace(/ ?mce-arrow-[\w]+/g,"")+B,r.setStyles(s,{left:z,top:W}),this)}var c,p=[],w;return s(n,function(e){function n(){var n=t.selection;"bullist"===o&&n.selectorChanged("ul > li",function(t,n){for(var o=n.parents.length,i;o--&&"OL"!==(i=n.parents[o].nodeName)&&"UL"!=i;);e.active(t&&"UL"===i)}),"numlist"===o&&n.selectorChanged("ol > li",function(t,n){for(var o=n.parents.length,i;o--&&"OL"!==(i=n.parents[o].nodeName)&&"UL"!==i;);e.active(t&&"OL"===i)}),e.settings.stateSelector&&n.selectorChanged(e.settings.stateSelector,function(t){e.active(t)},!0),e.settings.disabledStateSelector&&n.selectorChanged(e.settings.disabledStateSelector,function(t){e.disabled(t)})}var o;"|"===e?w=null:i.has(e)?(e={type:e},a.toolbar_items_size&&(e.size=a.toolbar_items_size),p.push(e),w=null):(w||(w={type:"buttongroup",items:[]},p.push(w)),t.buttons[e]&&(o=e,e=t.buttons[o],"function"==typeof e&&(e=e()),e.type=e.type||"button",a.toolbar_items_size&&(e.size=a.toolbar_items_size),e=i.create(e),w.items.push(e),t.initialized?n():t.on("init",n)))}),c=i.create({type:"panel",layout:"stack",classes:"toolbar-grp inline-toolbar-grp",ariaRoot:!0,ariaRemember:!0,items:[{type:"toolbar",layout:"flow",items:p}]}),c.bottom=o,c.on("show",function(){this.reposition()}),c.on("keydown",function(e){27===e.keyCode&&(this.hide(),t.focus())}),t.on("remove",function(){c.remove()}),c.reposition=d,c.hide().renderTo(document.body),c}function o(e){d&&(d.tempHide||"hide"===e.type||"blur"===e.type?(d.hide(),d=!1):"resizewindow"!==e.type&&"scrollwindow"!==e.type&&"resize"!==e.type&&"scroll"!==e.type||d.blockHide||(clearTimeout(c),c=setTimeout(function(){d&&"function"==typeof d.show&&(d.scrolling=!1,d.show())},250),d.scrolling=!0,d.hide()))}var i=e.ui.Factory,a=t.settings,d,l,c,p=t.getContainer(),m=document.getElementById("wpadminbar"),u=document.getElementById(t.id+"_ifr"),g,h,f;p&&(g=e.$(".mce-toolbar-grp",p)[0],h=e.$(".mce-statusbar",p)[0]),"content"===t.id&&(f=document.getElementById("post-status-info")),t.shortcuts.add("alt+119","",function(){var e;d&&(e=d.find("toolbar")[0])&&e.focus(!0)}),t.on("nodechange",function(e){var n=t.selection.isCollapsed(),o={element:e.element,parents:e.parents,collapsed:n};t.fire("wptoolbar",o),l=o.selection||o.element,d&&d!==o.toolbar&&d.hide(),o.toolbar?(d=o.toolbar,d.visible()?d.reposition():d.show()):d=!1}),t.on("focus",function(){d&&d.show()}),t.on("resizewindow scrollwindow",o),t.dom.bind(t.getWin(),"resize scroll",o),t.on("remove",function(){t.off("resizewindow scrollwindow",o),t.dom.unbind(t.getWin(),"resize scroll",o)}),t.on("blur hide",o),t.wp=t.wp||{},t.wp._createToolbar=n},!0),{_showButtons:o,_hideButtons:o,_setEmbed:o,_getEmbed:o}})}(window.tinymce);