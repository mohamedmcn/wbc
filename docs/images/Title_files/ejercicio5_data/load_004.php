var mediaWikiLoadStart=(new Date()).getTime();function isCompatible(ua){if(ua===undefined){ua=navigator.userAgent;}return!((ua.indexOf('MSIE')!==-1&&parseFloat(ua.split('MSIE')[1])<6)||(ua.indexOf('Firefox/')!==-1&&parseFloat(ua.split('Firefox/')[1])<3)||ua.match(/BlackBerry[^\/]*\/[1-5]\./)||ua.match(/webOS\/1\.[0-4]/)||ua.match(/PlayStation/i)||ua.match(/SymbianOS|Series60/)||ua.match(/NetFront/)||ua.match(/Opera Mini/)||ua.match(/S40OviBrowser/)||(ua.match(/Glass/)&&ua.match(/Android/)));}var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"/load.php","apiScript":"/api.php"}});(function(name,version,dependencies,group,source){})("MediaWikiSupport.loader","20190930T023426Z",[],null,"local");(function(name,version,dependencies,group,source){(function(mw,$){$(function(event){var $selected=$(mw.config.get('EmbedPlayer.RewriteSelector'));if($selected.length){var inx=0;var checkSetDone=function(){if(inx<$selected.length){$selected.slice(inx,inx+1).
embedPlayer(function(){setTimeout(function(){checkSetDone();},5);});}inx++;};checkSetDone();}});$.fn.embedPlayer=function(readyCallback){var playerSet=this;mw.log('jQuery.fn.embedPlayer :: '+$(this).length);var dependencySet=['mw.EmbedPlayer'];var rewriteElementCount=0;$(this).each(function(inx,playerElement){var skinName='';$(playerElement).removeAttr('controls');if(!$.browser.mozilla){$(playerElement).parent().getAbsoluteOverlaySpinner().attr('id','loadingSpinner_'+$(playerElement).attr('id'));}$(mw).trigger('EmbedPlayerUpdateDependencies',[playerElement,dependencySet]);});dependencySet=$.uniqueArray(dependencySet);mediaWiki.loader.using(dependencySet,function(){mw.processEmbedPlayers(playerSet,readyCallback);},function(e){throw new Error('Error loading EmbedPlayer dependency set: '+e.message);});};})(window.mediaWiki,window.jQuery);})("EmbedPlayer.loader","20190930T023426Z",[],null,"local");(function(name,version,dependencies,group,source){(function(mw,$){$(mw).bind(
'EmbedPlayerUpdateDependencies',function(event,playerElement,classRequest){if(mw.isTimedTextSupported(playerElement)){classRequest=$.merge(classRequest,['mw.TimedText']);}});$(mw).bind('EmbedPlayerNewPlayer',function(event,embedPlayer){if(mw.isTimedTextSupported(embedPlayer)){embedPlayer.timedText=new mw.TimedText(embedPlayer);}});mw.isTimedTextSupported=function(embedPlayer){var mwprovider=embedPlayer['data-mwprovider']||$(embedPlayer).data('mwprovider');var showInterface=mw.config.get('TimedText.ShowInterface.'+mwprovider)||mw.config.get('TimedText.ShowInterface');if(showInterface=='always'){return true;}else if(showInterface=='off'){return false;}if($(embedPlayer).find('track').length!=0){return true;}else{return false;}};})(window.mediaWiki,window.jQuery);})("TimedText.loader","20190930T023426Z",[],null,"local");(function(name,version,dependencies,group,source){(function(mw,$){$(mw).bind('EmbedPlayerUpdateDependencies',function(event,embedPlayer,dependencySet){if($(embedPlayer).
attr('data-mwtitle')){$.merge(dependencySet,['mw.MediaWikiPlayerSupport']);}});})(window.mediaWiki,jQuery);})("mw.MediaWikiPlayer.loader","20190930T023426Z",[],null,"local");mw.loader.register([["site","1569810866",[],"site"],["noscript","1569810866",[],"noscript"],["startup","1630652071",[],"startup"],["filepage","1569810866"],["user.groups","1569810866",[],"user"],["user","1569810866",[],"user"],["user.cssprefs","1569806534",["mediawiki.user"],"private"],["user.options","1569806534",[],"private"],["user.tokens","1569806534",[],"private"],["mediawiki.language.data","1569810866",["mediawiki.language.init"]],["mediawiki.skinning.elements","1569810866"],["mediawiki.skinning.content","1569810866"],["mediawiki.skinning.interface","1569810865"],["skins.cologneblue","1569810866"],["skins.modern","1569810866"],["skins.vector.styles","1569810865"],["skins.monobook.styles","1569810866"],["skins.vector.js","1569810866",["jquery.throttle-debounce"]],["skins.vector.collapsibleNav","1592314424",[
"jquery.client","jquery.cookie","jquery.tabIndex"]],["jquery","1569810866"],["jquery.appear","1569810866"],["jquery.arrowSteps","1569810866"],["jquery.async","1569810866"],["jquery.autoEllipsis","1569810866",["jquery.highlightText"]],["jquery.badge","1569810866",["mediawiki.language"]],["jquery.byteLength","1569810866"],["jquery.byteLimit","1569810866",["jquery.byteLength"]],["jquery.checkboxShiftClick","1569810866"],["jquery.chosen","1569810866"],["jquery.client","1569810866"],["jquery.color","1569810866",["jquery.colorUtil"]],["jquery.colorUtil","1569810866"],["jquery.cookie","1569810866"],["jquery.delayedBind","1569810866"],["jquery.expandableField","1569810866"],["jquery.farbtastic","1569810866",["jquery.colorUtil"]],["jquery.footHovzer","1569810866"],["jquery.form","1569810866"],["jquery.fullscreen","1569810866"],["jquery.getAttrs","1569810866"],["jquery.hidpi","1569810866"],["jquery.highlightText","1569810866",["jquery.mwExtension"]],["jquery.hoverIntent","1569810866"],[
"jquery.json","1569810866"],["jquery.localize","1569810866"],["jquery.makeCollapsible","1592314424"],["jquery.mockjax","1569810866"],["jquery.mw-jump","1569810866"],["jquery.mwExtension","1569810866"],["jquery.placeholder","1569810866"],["jquery.qunit","1569810866"],["jquery.qunit.completenessTest","1569810866",["jquery.qunit"]],["jquery.spinner","1569810866"],["jquery.jStorage","1569810866",["jquery.json"]],["jquery.suggestions","1569810866",["jquery.highlightText"]],["jquery.tabIndex","1569810866"],["jquery.tablesorter","1592465666",["jquery.mwExtension","mediawiki.language.months"]],["jquery.textSelection","1569810866",["jquery.client"]],["jquery.throttle-debounce","1569810866"],["jquery.validate","1569810866"],["jquery.xmldom","1569810866"],["jquery.tipsy","1569810866"],["jquery.ui.core","1569810866",[],"jquery.ui"],["jquery.ui.widget","1569810866",[],"jquery.ui"],["jquery.ui.mouse","1569810866",["jquery.ui.widget"],"jquery.ui"],["jquery.ui.position","1569810866",[],"jquery.ui"],[
"jquery.ui.draggable","1569810866",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.droppable","1569810866",["jquery.ui.core","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.resizable","1569810866",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.selectable","1569810866",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.sortable","1569810866",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.accordion","1569810866",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.autocomplete","1569810866",["jquery.ui.core","jquery.ui.position","jquery.ui.widget"],"jquery.ui"],["jquery.ui.button","1569810866",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.datepicker","1569810866",["jquery.ui.core"],"jquery.ui"],["jquery.ui.dialog","1569810866",["jquery.ui.button","jquery.ui.core","jquery.ui.draggable",
"jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable","jquery.ui.widget"],"jquery.ui"],["jquery.ui.progressbar","1569810866",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.slider","1569810866",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.tabs","1569810866",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.effects.core","1569810866",[],"jquery.ui"],["jquery.effects.blind","1569810866",["jquery.effects.core"],"jquery.ui"],["jquery.effects.bounce","1569810866",["jquery.effects.core"],"jquery.ui"],["jquery.effects.clip","1569810866",["jquery.effects.core"],"jquery.ui"],["jquery.effects.drop","1569810866",["jquery.effects.core"],"jquery.ui"],["jquery.effects.explode","1569810866",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fade","1569810866",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fold","1569810866",["jquery.effects.core"],"jquery.ui"],["jquery.effects.highlight","1569810866",["jquery.effects.core"]
,"jquery.ui"],["jquery.effects.pulsate","1569810866",["jquery.effects.core"],"jquery.ui"],["jquery.effects.scale","1569810866",["jquery.effects.core"],"jquery.ui"],["jquery.effects.shake","1569810866",["jquery.effects.core"],"jquery.ui"],["jquery.effects.slide","1569810866",["jquery.effects.core"],"jquery.ui"],["jquery.effects.transfer","1569810866",["jquery.effects.core"],"jquery.ui"],["moment","1569810866"],["mediawiki","1569810866"],["mediawiki.api","1569810866",["mediawiki.util"]],["mediawiki.api.category","1569810866",["mediawiki.Title","mediawiki.api"]],["mediawiki.api.edit","1569810866",["mediawiki.Title","mediawiki.api","user.tokens"]],["mediawiki.api.login","1569810866",["mediawiki.api"]],["mediawiki.api.parse","1569810866",["mediawiki.api"]],["mediawiki.api.watch","1569810866",["mediawiki.api","user.tokens"]],["mediawiki.debug","1569810866",["jquery.footHovzer","jquery.tipsy"]],["mediawiki.debug.init","1569810866",["mediawiki.debug"]],["mediawiki.feedback","1597463111",[
"jquery.ui.dialog","mediawiki.Title","mediawiki.api.edit","mediawiki.jqueryMsg"]],["mediawiki.hidpi","1569810866",["jquery.hidpi"]],["mediawiki.hlist","1569810866",["jquery.client"]],["mediawiki.htmlform","1593431545"],["mediawiki.icon","1569810866"],["mediawiki.inspect","1569810866",["jquery.byteLength","jquery.json"]],["mediawiki.notification","1569810866",["mediawiki.page.startup"]],["mediawiki.notify","1569810866"],["mediawiki.searchSuggest","1592314424",["jquery.client","jquery.placeholder","jquery.suggestions","mediawiki.api"]],["mediawiki.Title","1569810866",["jquery.byteLength","mediawiki.util"]],["mediawiki.toc","1592314435",["jquery.cookie"]],["mediawiki.Uri","1569810866"],["mediawiki.user","1569810866",["jquery.cookie","mediawiki.api","user.options","user.tokens"]],["mediawiki.util","1569810866",["jquery.client","jquery.mwExtension","mediawiki.notify","mediawiki.toc"]],["mediawiki.action.edit","1569810866",["jquery.byteLimit","jquery.textSelection",
"mediawiki.action.edit.styles"]],["mediawiki.action.edit.styles","1569810866"],["mediawiki.action.edit.collapsibleFooter","1569810866",["jquery.cookie","jquery.makeCollapsible","mediawiki.icon"]],["mediawiki.action.edit.preview","1569810866",["jquery.form","jquery.spinner","mediawiki.action.history.diff"]],["mediawiki.action.history","1569810866",[],"mediawiki.action.history"],["mediawiki.action.history.diff","1569810866",[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit","1569810866",["mediawiki.page.startup","mediawiki.util"]],["mediawiki.action.view.metadata","1569810866"],["mediawiki.action.view.postEdit","1592314530",["jquery.cookie","mediawiki.jqueryMsg"]],["mediawiki.action.view.redirectToFragment","1569810866",["jquery.client"]],["mediawiki.action.view.rightClickEdit","1569810866"],["mediawiki.action.edit.editWarning","1592500674",["mediawiki.jqueryMsg"]],["mediawiki.action.watch.ajax","1569806534",["mediawiki.page.watch.ajax"]],["mediawiki.language",
"1569810866",["mediawiki.cldr","mediawiki.language.data"]],["mediawiki.cldr","1569810866",["mediawiki.libs.pluralruleparser"]],["mediawiki.libs.pluralruleparser","1569810866"],["mediawiki.language.init","1569810866"],["mediawiki.jqueryMsg","1569810866",["mediawiki.language","mediawiki.util"]],["mediawiki.language.months","1592465666",["mediawiki.language"]],["mediawiki.libs.jpegmeta","1569810866"],["mediawiki.page.gallery","1569810866"],["mediawiki.page.ready","1569810866",["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.mw-jump","jquery.placeholder","mediawiki.util"]],["mediawiki.page.startup","1569810866",["mediawiki.util"]],["mediawiki.page.patrol.ajax","1630652071",["jquery.spinner","mediawiki.Title","mediawiki.api","mediawiki.notify","mediawiki.page.startup","mediawiki.util","user.tokens"]],["mediawiki.page.watch.ajax","1592500462",["jquery.mwExtension","mediawiki.api.watch","mediawiki.notify","mediawiki.page.startup","mediawiki.util"]],[
"mediawiki.page.image.pagination","1569810866",["jquery.spinner","mediawiki.Uri","mediawiki.util"]],["mediawiki.special","1569810866"],["mediawiki.special.block","1569810866",["mediawiki.util"]],["mediawiki.special.changeemail","1593431512",["mediawiki.util"]],["mediawiki.special.changeslist","1569810865"],["mediawiki.special.changeslist.legend","1569810865"],["mediawiki.special.changeslist.legend.js","1569810866",["jquery.cookie","jquery.makeCollapsible"]],["mediawiki.special.changeslist.enhanced","1569810866"],["mediawiki.special.movePage","1569810866",["jquery.byteLimit"]],["mediawiki.special.pagesWithProp","1569810866"],["mediawiki.special.preferences","1597463803",["mediawiki.language"]],["mediawiki.special.recentchanges","1569810866",["mediawiki.special"]],["mediawiki.special.search","1592318072"],["mediawiki.special.undelete","1569810866"],["mediawiki.special.upload","1600032739",["mediawiki.libs.jpegmeta","mediawiki.util"]],["mediawiki.special.userlogin.common.styles",
"1569810866"],["mediawiki.special.userlogin.signup.styles","1569810866"],["mediawiki.special.userlogin.login.styles","1569810866"],["mediawiki.special.userlogin.common.js","1592314428"],["mediawiki.special.userlogin.signup.js","1592453533",["jquery.throttle-debounce","mediawiki.api","mediawiki.jqueryMsg"]],["mediawiki.special.javaScriptTest","1569810866",["mediawiki.Uri"]],["mediawiki.special.version","1569810866"],["mediawiki.legacy.ajax","1569810866",["mediawiki.legacy.wikibits","mediawiki.util"]],["mediawiki.legacy.commonPrint","1569810865"],["mediawiki.legacy.config","1569810866",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.protect","1569810866",["jquery.byteLimit"]],["mediawiki.legacy.shared","1569810865"],["mediawiki.legacy.oldshared","1569810866"],["mediawiki.legacy.upload","1569810866",["jquery.spinner","mediawiki.Title","mediawiki.api","mediawiki.util"]],["mediawiki.legacy.wikibits","1569810866",["mediawiki.util"]],["mediawiki.ui","1569810866"],["mediawiki.ui.button",
"1569810865"],["oojs","1569810866"],["oojs-ui","1569810866",["oojs"]],["ext.gadget.HotCat","1569810866"],["ext.gadget.Reader","1569810866"],["ext.gadget.Author","1569810866"],["ext.gadget.Mailable","1569810865",["mediawiki.util"]],["ext.gadget.mySandbox","1569810865",["mediawiki.util","mediawiki.Title","mediawiki.Uri"]],["ext.gadget.Links","1569810865"],["ext.gadget.Subpages","1569810865",["mediawiki.util"]],["ext.gadget.CollabOERate","1569810866"],["mw.MwEmbedSupport","1569810866",["Spinner","jquery.loadingSpinner","jquery.mwEmbedUtil","jquery.triggerQueueCallback","mw.MwEmbedSupport.style"]],["Spinner","1569810866"],["iScroll","1569810866"],["jquery.loadingSpinner","1569810866"],["mw.MwEmbedSupport.style","1569810866"],["mediawiki.UtilitiesTime","1569810866"],["mediawiki.client","1569810866"],["mediawiki.absoluteUrl","1569810866"],["mw.ajaxProxy","1569810866"],["fullScreenApi","1569810866"],["jquery.embedMenu","1569810866"],["jquery.ui.touchPunch","1569810866",["jquery.ui.core",
"jquery.ui.mouse"]],["jquery.triggerQueueCallback","1569810866"],["jquery.mwEmbedUtil","1569810866"],["jquery.debouncedresize","1569810866"],["mw.Language.names","1569810866"],["mw.Api","1569810866"],["mw.MediaElement","1569810866"],["mw.MediaPlayer","1569810866"],["mw.MediaPlayers","1569810866",["mw.MediaPlayer"]],["mw.MediaSource","1569810866"],["mw.EmbedTypes","1569810866",["mediawiki.Uri","mw.MediaPlayers"]],["mw.EmbedPlayer","1595679863",["fullScreenApi","jquery.client","jquery.cookie","jquery.debouncedresize","jquery.embedMenu","jquery.hoverIntent","jquery.ui.mouse","jquery.ui.slider","jquery.ui.touchPunch","mediawiki.Uri","mediawiki.UtilitiesTime","mediawiki.absoluteUrl","mediawiki.client","mediawiki.jqueryMsg","mw.EmbedPlayerNative","mw.EmbedTypes","mw.MediaElement","mw.MediaPlayers","mw.MediaSource","mw.PlayerSkinKskin"]],["mw.EmbedPlayerKplayer","1569810866"],["mw.EmbedPlayerGeneric","1569810866"],["mw.EmbedPlayerJava","1569810866"],["mw.EmbedPlayerNative","1569810866"],[
"mw.EmbedPlayerImageOverlay","1569810866"],["mw.EmbedPlayerVlc","1569810866"],["mw.PlayerSkinKskin","1569810866"],["mw.PlayerSkinMvpcf","1569810866"],["mw.TimedText","1595679863",["jquery.ui.dialog","mw.EmbedPlayer","mw.TextSource"]],["mw.TextSource","1569810866",["mediawiki.UtilitiesTime","mw.ajaxProxy"]],["schema.UploadWizardTutorialActions","1569806534",["ext.eventLogging"]],["ext.uploadWizard","1597463111",["ext.uploadWizard.apiUploadFormDataHandler","ext.uploadWizard.apiUploadHandler","ext.uploadWizard.events","jquery.arrowSteps","jquery.autoEllipsis","jquery.checkboxShiftClick","jquery.client","jquery.placeholder","jquery.spinner","jquery.suggestions","jquery.tipsy","jquery.ui.core","jquery.ui.datepicker","jquery.ui.dialog","jquery.ui.progressbar","jquery.ui.selectable","jquery.ui.widget","jquery.validate","mediawiki.Title","mediawiki.Uri","mediawiki.api","mediawiki.api.category","mediawiki.api.edit","mediawiki.api.parse","mediawiki.api.titleblacklist","mediawiki.feedback",
"mediawiki.jqueryMsg","mediawiki.language","mediawiki.libs.jpegmeta","mediawiki.user","mediawiki.util"],"ext.uploadWizard"],["ext.uploadWizard.tests","1569810866"],["ext.uploadWizard.campaigns","1569810866"],["ext.uploadWizard.campaign","1569810866",["jquery.ui.button"]],["ext.uploadWizard.events","1569810866",["ext.eventLogging","schema.UploadWizardTutorialActions"]],["jquery.uls","1569810866",["jquery.uls.compact","jquery.uls.data","jquery.uls.grid"]],["jquery.uls.data","1569810866"],["jquery.uls.grid","1569810866"],["jquery.uls.compact","1569810866"],["jquery.i18n","1569810866",["mediawiki.libs.pluralruleparser"]],["ext.cite","1592332640"],["ext.cite.popups","1569810866",["jquery.tooltip"]],["jquery.tooltip","1569810866"],["ext.rtlcite","1569810866"],["ext.interwiki.specialpage","1569810866",["jquery.makeCollapsible"]],["ext.nuke","1569810866"],["ext.geshi.local","1569810866"],["mediawiki.api.titleblacklist","1569810866",["mediawiki.api"]],["jquery.wikiEditor","1602702466",[
"jquery.client","jquery.textSelection"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs","1569810866",["jquery.tabIndex","jquery.ui.button","jquery.ui.dialog","jquery.ui.draggable","jquery.ui.resizable","jquery.wikiEditor","jquery.wikiEditor.toolbar"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs.config","1621013927",["jquery.suggestions","jquery.wikiEditor","jquery.wikiEditor.dialogs","jquery.wikiEditor.toolbar.i18n","mediawiki.Title","mediawiki.jqueryMsg"],"ext.wikiEditor"],["jquery.wikiEditor.preview","1569810866",["jquery.wikiEditor"],"ext.wikiEditor"],["jquery.wikiEditor.previewDialog","1569810866",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.publish","1569810866",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar","1569810866",["jquery.wikiEditor","jquery.wikiEditor.toolbar.i18n"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.config","1569810866",["jquery.async","jquery.cookie",
"jquery.wikiEditor","jquery.wikiEditor.toolbar","jquery.wikiEditor.toolbar.i18n"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.i18n","1569806534",[],"ext.wikiEditor"],["ext.wikiEditor","1569810866",["jquery.wikiEditor"],"ext.wikiEditor"],["ext.wikiEditor.dialogs","1569810866",["ext.wikiEditor","ext.wikiEditor.toolbar","jquery.wikiEditor.dialogs","jquery.wikiEditor.dialogs.config"],"ext.wikiEditor"],["ext.wikiEditor.preview","1569810866",["ext.wikiEditor","jquery.wikiEditor.preview"],"ext.wikiEditor"],["ext.wikiEditor.previewDialog","1569810866",["ext.wikiEditor","jquery.wikiEditor.previewDialog"],"ext.wikiEditor"],["ext.wikiEditor.publish","1569810866",["ext.wikiEditor","jquery.wikiEditor.publish"],"ext.wikiEditor"],["ext.wikiEditor.tests.toolbar","1569810866",["ext.wikiEditor.toolbar"],"ext.wikiEditor"],["ext.wikiEditor.toolbar","1569810866",["ext.wikiEditor","jquery.wikiEditor.toolbar","jquery.wikiEditor.toolbar.config"],"ext.wikiEditor"],["ext.wikiEditor.toolbar.hideSig",
"1569810866",[],"ext.wikiEditor"],["ext.codeEditor","1569810866",["ext.wikiEditor.toolbar","jquery.codeEditor"],"ext.wikiEditor"],["jquery.codeEditor","1602702466",["ext.codeEditor.ace","jquery.ui.resizable","jquery.wikiEditor"],"ext.wikiEditor"],["ext.codeEditor.ace","1569810866",[],"ext.codeEditor.ace"],["ext.codeEditor.ace.modes","1569810866",["ext.codeEditor.ace"],"ext.codeEditor.ace"],["ext.codeEditor.geshi","1569810866",[],"ext.wikiEditor"],["ext.liquidThreads","1592318132",["jquery.ui.dialog","jquery.ui.droppable","mediawiki.action.edit.preview","mediawiki.api","mediawiki.api.watch","mediawiki.util","user.tokens"]],["ext.liquidThreads.newMessages","1569810866",["ext.liquidThreads"]],["ext.dismissableSiteNotice","1569810866",["jquery.cookie","mediawiki.util"]],["ext.collection.jquery.jstorage","1569810866",["jquery.json"]],["ext.collection.suggest","1569810866",["ext.collection.bookcreator"]],["ext.collection","1569810866",["ext.collection.bookcreator","jquery.ui.sortable",
"mediawiki.language"]],["ext.collection.bookcreator","1569810866",["ext.collection.jquery.jstorage"]],["ext.collection.checkLoadFromLocalStorage","1569810866",["ext.collection.jquery.jstorage"]],["ext.scribunto.errors","1569810866",["jquery.ui.dialog"]],["ext.scribunto.logs","1569810866"],["ext.scribunto.edit","1569810866",["jquery.spinner","mediawiki.api"]],["ext.quiz","1569810866"],["ext.eventLogging","1569810866",["jquery.json","mediawiki.util"]],["ext.eventLogging.subscriber","1569810866"],["ext.eventLogging.jsonSchema","1569810866"],["ext.uploadWizard.formDataTransport","1569810866"],["ext.uploadWizard.iFrameTransport","1569810866"],["ext.uploadWizard.apiUploadHandler","1597463111",["ext.uploadWizard.iFrameTransport"]],["ext.uploadWizard.apiUploadFormDataHandler","1597463111",["ext.uploadWizard.formDataTransport"]],["ext.uploadWizard.page","1569810866",["ext.uploadWizard"]],["ext.uploadWizard.uploadCampaign.display","1569810866",["mediawiki.ui.button"]],[
"ext.uploadWizard.uploadCampaign.list","1569810866"],["rangy","1569810866"],["jquery.visibleText","1569810866"],["unicodejs.wordbreak","1569810866"],["ext.visualEditor.editPageInit","1569806534",["ext.visualEditor.viewPageTarget"]],["ext.visualEditor.viewPageTarget.icons-raster","1569810866"],["ext.visualEditor.viewPageTarget.icons-vector","1569810866"],["ext.visualEditor.viewPageTarget.init","1592314435",["jquery.client","mediawiki.Title","mediawiki.Uri","mediawiki.page.startup","mediawiki.util","user.options"]],["ext.visualEditor.viewPageTarget.noscript","1569810865"],["ext.visualEditor.viewPageTarget","1569810866",["ext.visualEditor.base","ext.visualEditor.core.desktop","ext.visualEditor.mediawiki","jquery.placeholder","mediawiki.feedback","mediawiki.jqueryMsg","mediawiki.util"]],["ext.visualEditor.base","1569810866",["oojs","oojs-ui","unicodejs.wordbreak"]],["ext.visualEditor.mediawiki","1569810866",["ext.visualEditor.base","jquery.byteLength","jquery.client","jquery.visibleText",
"mediawiki.Title","mediawiki.Uri","mediawiki.api","mediawiki.notify","mediawiki.user","mediawiki.util","user.options","user.tokens"]],["ext.visualEditor.standalone","1569810866",["ext.visualEditor.base","jquery.i18n"]],["ext.visualEditor.data","1569810866",["ext.visualEditor.base"]],["ext.visualEditor.core","1569810866",["ext.visualEditor.base","rangy","unicodejs.wordbreak"]],["ext.visualEditor.core.desktop","1569810866",["ext.visualEditor.core"]],["ext.visualEditor.mwcore","1569810866",["ext.visualEditor.core","jquery.autoEllipsis","jquery.byteLimit","mediawiki.Title","mediawiki.action.history.diff","mediawiki.user","mediawiki.util"]],["ext.visualEditor.mwformatting","1569810866",["ext.visualEditor.mwcore"]],["ext.visualEditor.mwimage","1569810866",["ext.visualEditor.mwcore"]],["ext.visualEditor.mwlink","1569810866",["ext.visualEditor.mwcore"]],["ext.visualEditor.mwmeta","1569810866",["ext.visualEditor.mwcore","ext.visualEditor.mwlink"]],["ext.visualEditor.mwreference","1569810866",[
"ext.visualEditor.mwcore","ext.visualEditor.mwtransclusion"]],["ext.visualEditor.mwtransclusion","1569810866",["ext.visualEditor.mwcore"]],["ext.visualEditor.language","1569810866",["ext.visualEditor.core","jquery.uls"]],["ext.visualEditor.mwlanguage","1569810866",["ext.visualEditor.language","jquery.uls"]],["ext.visualEditor.mwalienextension","1569810866",["ext.visualEditor.mwcore"]],["ext.visualEditor.mwgallery","1569810866",["ext.visualEditor.mwcore"]],["ext.visualEditor.mwhiero","1569810866",["ext.visualEditor.mwcore"]],["ext.visualEditor.experimental","1569806534",["ext.visualEditor.language","ext.visualEditor.mwalienextension","ext.visualEditor.mwhiero","ext.visualEditor.mwlanguage"]],["ext.visualEditor.icons-raster","1569810866"],["ext.visualEditor.icons-vector","1569810866"],["ext.templateData","1569810866"],["ext.templateDataGenerator.editPage","1569810866",["ext.templateDataGenerator.core"]],["ext.templateDataGenerator.core","1569810866",["jquery.ui.button","jquery.ui.dialog"
]],["ext.abuseFilter","1569810866"],["ext.abuseFilter.edit","1569810866",["jquery.spinner","jquery.textSelection","mediawiki.api","mediawiki.util"]],["ext.abuseFilter.tools","1569810866",["jquery.spinner","mediawiki.api","mediawiki.notify","user.tokens"]],["ext.abuseFilter.examine","1569810866",["jquery.spinner","mediawiki.api"]],["mw.PopUpMediaTransform","1569810866",["mediawiki.Title","mw.MwEmbedSupport"]],["mw.TMHGalleryHook.js","1569810866"],["embedPlayerIframeStyle","1569810866"],["ext.tmh.transcodetable","1569810866"],["mw.MediaWikiPlayerSupport","1569810866",["mw.Api"]]]);mw.config.set({"wgLoadScript":"/load.php","debug":false,"skin":"vector","stylepath":"/skins","wgUrlProtocols":
"http\\:\\/\\/|https\\:\\/\\/|ftp\\:\\/\\/|ftps\\:\\/\\/|ssh\\:\\/\\/|sftp\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|xmpp\\:|sip\\:|sips\\:|gopher\\:\\/\\/|telnet\\:\\/\\/|nntp\\:\\/\\/|worldwind\\:\\/\\/|mailto\\:|tel\\:|sms\\:|news\\:|svn\\:\\/\\/|git\\:\\/\\/|mms\\:\\/\\/|bitcoin\\:|magnet\\:|urn\\:|geo\\:|\\/\\/","wgArticlePath":"/$1","wgScriptPath":"","wgScriptExtension":".php","wgScript":"/index.php","wgSearchType":null,"wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"https://es.wikieducator.org","wgUserLanguage":"es","wgContentLanguage":"es","wgVersion":"1.23.14","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgMainPageTitle":"Página principal","wgFormattedNamespaces":{"-2":"Medio","-1":"Especial","0":"","1":"Discusión","2":"Usuario","3":"Usuario discusión","4":"WikiEducator","5":"WikiEducator discusión","6":"Archivo","7":"Archivo discusión","8":"MediaWiki","9":"MediaWiki discusión","10":"Plantilla","11":"Plantilla discusión","12":"Ayuda","13":"Ayuda discusión","14":
"Categoría","15":"Categoría discusión","90":"Thread","91":"Thread talk","92":"Summary","93":"Summary talk","100":"Portal","101":"Portal talk","102":"Practice","103":"Practice talk","104":"OERF","105":"OERF talk","274":"Widget","275":"Widget talk","460":"Campaign","461":"Campaign talk","710":"TimedText","711":"TimedText talk","828":"Módulo","829":"Módulo discusión"},"wgNamespaceIds":{"medio":-2,"especial":-1,"":0,"discusión":1,"usuario":2,"usuario_discusión":3,"wikieducator":4,"wikieducator_discusión":5,"archivo":6,"archivo_discusión":7,"mediawiki":8,"mediawiki_discusión":9,"plantilla":10,"plantilla_discusión":11,"ayuda":12,"ayuda_discusión":13,"categoría":14,"categoría_discusión":15,"thread":90,"thread_talk":91,"summary":92,"summary_talk":93,"portal":100,"portal_talk":101,"practice":102,"practice_talk":103,"oerf":104,"oerf_talk":105,"widget":274,"widget_talk":275,"campaign":460,"campaign_talk":461,"timedtext":710,"timedtext_talk":711,"módulo":828,"módulo_discusión":
829,"imagen":6,"imagen_discusión":7,"usuaria":2,"usuaria_discusión":3,"file":6,"file_talk":7,"image":6,"image_talk":7,"media":-2,"special":-1,"talk":1,"user":2,"user_talk":3,"project":4,"project_talk":5,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"module":828,"module_talk":829},"wgContentNamespaces":[0,4,104],"wgSiteName":"WikiEducator","wgFileExtensions":["png","gif","jpg","jpeg","svg","mp3","pdf","mm","ogg","ogv","oga","flac","wav","webm"],"wgDBname":"we_es","wgFileCanRotate":true,"wgAvailableSkins":{"cologneblue":"CologneBlue","modern":"Modern","monobook":"MonoBook","vector":"Vector"},"wgExtensionAssetsPath":"/extensions","wgCookiePrefix":"we_en_mw_","wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[460,461],"wgLegalTitleChars":" %!\"$\u0026'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgResourceLoaderStorageVersion":1,"wgResourceLoaderStorageEnabled":false,"wgWikiEditorMagicWords":{"redirect":
"#REDIRECCIÓN","img_right":"derecha","img_left":"izquierda","img_none":"ninguna","img_center":"centro","img_thumbnail":"miniaturadeimagen","img_framed":"marco","img_frameless":"sinmarco"},"EmbedPlayer.DirectFileLinkWarning":true,"EmbedPlayer.EnableOptionsMenu":true,"EmbedPlayer.DisableJava":false,"EmbedPlayer.DisableHTML5FlashFallback":true,"TimedText.ShowInterface":"always","TimedText.ShowAddTextLink":true,"EmbedPlayer.WebPath":"/extensions/TimedMediaHandler/MwEmbedModules/EmbedPlayer","wgCortadoJarFile":false,"AjaxRequestTimeout":30,"MediaWiki.DefaultProvider":"local","MediaWiki.ApiProviders":{"wikimediacommons":{"url":"//commons.wikimedia.org/w/api.php"}},"MediaWiki.ApiPostActions":["login","purge","rollback","delete","undelete","protect","block","unblock","move","edit","upload","emailuser","import","userrights"],"EmbedPlayer.OverlayControls":true,"EmbedPlayer.CodecPreference":["webm","h264","ogg"],"EmbedPlayer.DisableVideoTagSupport":false,"EmbedPlayer.ReplaceSources":null,
"EmbedPlayer.EnableFlavorSelector":false,"EmbedPlayer.EnableIpadHTMLControls":true,"EmbedPlayer.WebKitPlaysInline":false,"EmbedPlayer.EnableIpadNativeFullscreen":false,"EmbedPlayer.iPhoneShowHTMLPlayScreen":true,"EmbedPlayer.ForceLargeReplayButton":false,"EmbedPlayer.LibraryPage":"http://www.kaltura.org/project/HTML5_Video_Media_JavaScript_Library","EmbedPlayer.RewriteSelector":"video,audio,playlist","EmbedPlayer.DefaultSize":"400x300","EmbedPlayer.ControlsHeight":31,"EmbedPlayer.TimeDisplayWidth":85,"EmbedPlayer.KalturaAttribution":true,"EmbedPlayer.AttributionButton":{"title":"Kaltura html5 video library","href":"http://www.kaltura.com","class":"kaltura-icon","style":[],"iconurl":false},"EmbedPlayer.EnableRightClick":true,"EmbedPlayer.EnabledOptionsMenuItems":["playerSelect","download","share","aboutPlayerLibrary"],"EmbedPlayer.WaitForMeta":true,"EmbedPlayer.ShowNativeWarning":true,"EmbedPlayer.ShowPlayerAlerts":true,"EmbedPlayer.EnableFullscreen":true,"EmbedPlayer.EnableTimeDisplay"
:true,"EmbedPlayer.EnableVolumeControl":true,"EmbedPlayer.NewWindowFullscreen":false,"EmbedPlayer.FullscreenTip":true,"EmbedPlayer.FirefoxLink":"http://www.mozilla.com/en-US/firefox/upgrade.html?from=mwEmbed","EmbedPlayer.NativeControls":false,"EmbedPlayer.NativeControlsMobileSafari":true,"EmbedPlayer.FullScreenZIndex":999998,"EmbedPlayer.ShareEmbedMode":"iframe","EmbedPlayer.SkinList":["mvpcf","kskin"],"EmbedPlayer.DefaultSkin":"mvpcf","EmbedPlayer.MonitorRate":250,"EmbedPlayer.UseFlashOnAndroid":false,"EmbedPlayer.EnableURLTimeEncoding":"flash","EmbedPLayer.IFramePlayer.DomainWhiteList":"*","EmbedPlayer.EnableIframeApi":true,"EmbedPlayer.PageDomainIframe":true,"EmbedPlayer.NotPlayableDownloadLink":true,"EmbedPlayer.BlackPixel":
"data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%00%01%00%00%00%01%08%02%00%00%00%90wS%DE%00%00%00%01sRGB%00%AE%CE%1C%E9%00%00%00%09pHYs%00%00%0B%13%00%00%0B%13%01%00%9A%9C%18%00%00%00%07tIME%07%DB%0B%0A%17%041%80%9B%E7%F2%00%00%00%19tEXtComment%00Created%20with%20GIMPW%81%0E%17%00%00%00%0CIDAT%08%D7c%60%60%60%00%00%00%04%00%01'4'%0A%00%00%00%00IEND%AEB%60%82","TimedText.ShowRequestTranscript":false,"TimedText.NeedsTranscriptCategory":"Videos needing subtitles","TimedText.BottomPadding":10,"TimedText.BelowVideoBlackBoxHeight":40,"wgEventLoggingBaseUri":"http://localhost:8080/event.gif","wgVisualEditorConfig":{"disableForAnons":false,"preferenceModules":{"visualeditor-enable-experimental":"ext.visualEditor.experimental"},"namespaces":[0,4,104,2],"pluginModules":[],"defaultUserOptions":{"betatempdisable":0,"enable":0,"defaultthumbsize":180,"visualeditor-enable-experimental":0},"blacklist":{"msie":null,"android":[["\u003C",3]],"firefox":[["\u003C=",14]],"opera":[["\u003C",12]],
"blackberry":null,"silk":null},"skins":["vector","apex","monobook","minerva"],"tabPosition":"before","tabMessages":{"edit":null,"editsource":"visualeditor-ca-editsource","create":null,"createsource":"visualeditor-ca-createsource","editsection":null,"editsectionsource":"visualeditor-ca-editsource-section","editappendix":null,"editsourceappendix":null,"createappendix":null,"createsourceappendix":null,"editsectionappendix":null,"editsectionsourceappendix":null},"showBetaWelcome":false,"enableTocWidget":false}});};if(isCompatible()){document.write("\u003Cscript src=\"/load.php?debug=false\u0026amp;lang=es\u0026amp;modules=jquery%2Cmediawiki%2CSpinner%7Cjquery.triggerQueueCallback%2CloadingSpinner%2CmwEmbedUtil%7Cmw.MwEmbedSupport\u0026amp;only=scripts\u0026amp;skin=vector\u0026amp;version=20190930T023426Z\"\u003E\u003C/script\u003E");};
/* cache key: we_es-mw_:resourceloader:filter:minify-js:7:4e12e296c6b90a620280266a0cf074af */