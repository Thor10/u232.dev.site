!function(t){var e=new Array,n=new Array,s=new Array,d=new Array,a=new Array,o=new Array,r=new Array,c=new Array,f=new Array,p=new Array,h=new Array;t.fn.coinslider=t.fn.CoinSlider=function(l){init=function(i){n[i.id]=new Array,s[i.id]=new Array,d[i.id]=new Array,a[i.id]=new Array,o[i.id]=new Array,c[i.id]=0,p[i.id]=0,h[i.id]=1,e[i.id]=t.extend({},t.fn.coinslider.defaults,l),t.each(t("#"+i.id+" img"),function(e,n){s[i.id][e]=t(n).attr("src"),d[i.id][e]=t(n).parent().is("a")?t(n).parent().attr("href"):"",a[i.id][e]=t(n).parent().is("a")?t(n).parent().attr("target"):"",o[i.id][e]=t(n).next().is("span")?t(n).next().html():"",t(n).hide(),t(n).next().hide()}),t(i).css({"background-image":"url("+s[i.id][0]+")",width:e[i.id].width,height:e[i.id].height,position:"relative","background-position":"top left"}).wrap("<div class='coin-slider' id='coin-slider-"+i.id+"' />"),t("#"+i.id).append("<div class='cs-title' id='cs-title-"+i.id+"' style='position: absolute; bottom:0; left: 0; z-index: 1000;'></div>"),t.setFields(i),e[i.id].navigation&&t.setNavigation(i),t.transition(i,0),t.transitionCall(i)},t.setFields=function(s){for(tWidth=sWidth=parseInt(e[s.id].width/e[s.id].spw),tHeight=sHeight=parseInt(e[s.id].height/e[s.id].sph),counter=sLeft=sTop=0,tgapx=gapx=e[s.id].width-e[s.id].spw*sWidth,tgapy=gapy=e[s.id].height-e[s.id].sph*sHeight,i=1;i<=e[s.id].sph;i++){for(gapx=tgapx,gapy>0?(gapy--,sHeight=tHeight+1):sHeight=tHeight,j=1;j<=e[s.id].spw;j++)gapx>0?(gapx--,sWidth=tWidth+1):sWidth=tWidth,n[s.id][counter]=i+""+j,counter++,e[s.id].links?t("#"+s.id).append("<a href='"+d[s.id][0]+"' class='cs-"+s.id+"' id='cs-"+s.id+i+j+"' style='width:"+sWidth+"px; height:"+sHeight+"px; float: left; position: absolute;'></a>"):t("#"+s.id).append("<div class='cs-"+s.id+"' id='cs-"+s.id+i+j+"' style='width:"+sWidth+"px; height:"+sHeight+"px; float: left; position: absolute;'></div>"),t("#cs-"+s.id+i+j).css({"background-position":-sLeft+"px "+-sTop+"px",left:sLeft,top:sTop}),sLeft+=sWidth;sTop+=sHeight,sLeft=0}t(".cs-"+s.id).mouseover(function(){t("#cs-navigation-"+s.id).show()}),t(".cs-"+s.id).mouseout(function(){t("#cs-navigation-"+s.id).hide()}),t("#cs-title-"+s.id).mouseover(function(){t("#cs-navigation-"+s.id).show()}),t("#cs-title-"+s.id).mouseout(function(){t("#cs-navigation-"+s.id).hide()}),e[s.id].hoverPause&&(t(".cs-"+s.id).mouseover(function(){e[s.id].pause=!0}),t(".cs-"+s.id).mouseout(function(){e[s.id].pause=!1}),t("#cs-title-"+s.id).mouseover(function(){e[s.id].pause=!0}),t("#cs-title-"+s.id).mouseout(function(){e[s.id].pause=!1}))},t.transitionCall=function(i){clearInterval(r[i.id]),delay=e[i.id].delay+e[i.id].spw*e[i.id].sph*e[i.id].sDelay,r[i.id]=setInterval(function(){t.transition(i)},delay)},t.transition=function(i,d){1!=e[i.id].pause&&(t.effect(i),p[i.id]=0,f[i.id]=setInterval(function(){t.appereance(i,n[i.id][p[i.id]])},e[i.id].sDelay),t(i).css({"background-image":"url("+s[i.id][c[i.id]]+")"}),void 0===d?c[i.id]++:"prev"==d?c[i.id]--:c[i.id]=d,c[i.id]==s[i.id].length&&(c[i.id]=0),-1==c[i.id]&&(c[i.id]=s[i.id].length-1),t(".cs-button-"+i.id).removeClass("cs-active"),t("#cs-button-"+i.id+"-"+(c[i.id]+1)).addClass("cs-active"),o[i.id][c[i.id]]?(t("#cs-title-"+i.id).css({opacity:0}).animate({opacity:e[i.id].opacity},e[i.id].titleSpeed),t("#cs-title-"+i.id).html(o[i.id][c[i.id]])):t("#cs-title-"+i.id).css("opacity",0))},t.appereance=function(i,n){t(".cs-"+i.id).attr("href",d[i.id][c[i.id]]).attr("target",a[i.id][c[i.id]]),p[i.id]!=e[i.id].spw*e[i.id].sph?(t("#cs-"+i.id+n).css({opacity:0,"background-image":"url("+s[i.id][c[i.id]]+")"}),t("#cs-"+i.id+n).animate({opacity:1},300),p[i.id]++):clearInterval(f[i.id])},t.setNavigation=function(i){for(t(i).append("<div id='cs-navigation-"+i.id+"'></div>"),t("#cs-navigation-"+i.id).hide(),t("#cs-navigation-"+i.id).append("<a href='#' id='cs-prev-"+i.id+"' class='cs-prev'>prev</a>"),t("#cs-navigation-"+i.id).append("<a href='#' id='cs-next-"+i.id+"' class='cs-next'>next</a>"),t("#cs-prev-"+i.id).css({position:"absolute",top:e[i.id].height/2-15,left:0,"z-index":1001,"line-height":"30px",opacity:e[i.id].opacity}).click(function(e){e.preventDefault(),t.transition(i,"prev"),t.transitionCall(i)}).mouseover(function(){t("#cs-navigation-"+i.id).show()}),t("#cs-next-"+i.id).css({position:"absolute",top:e[i.id].height/2-15,right:0,"z-index":1001,"line-height":"30px",opacity:e[i.id].opacity}).click(function(e){e.preventDefault(),t.transition(i),t.transitionCall(i)}).mouseover(function(){t("#cs-navigation-"+i.id).show()}),t("<div id='cs-buttons-"+i.id+"' class='cs-buttons'></div>").appendTo(t("#coin-slider-"+i.id)),k=1;k<s[i.id].length+1;k++)t("#cs-buttons-"+i.id).append("<a href='#' class='cs-button-"+i.id+"' id='cs-button-"+i.id+"-"+k+"'>"+k+"</a>");t.each(t(".cs-button-"+i.id),function(e,n){t(n).click(function(n){t(".cs-button-"+i.id).removeClass("cs-active"),t(this).addClass("cs-active"),n.preventDefault(),t.transition(i,e),t.transitionCall(i)})}),t("#cs-navigation-"+i.id+" a").mouseout(function(){t("#cs-navigation-"+i.id).hide(),e[i.id].pause=!1}),t("#cs-buttons-"+i.id).css({left:"50%","margin-left":15*-s[i.id].length/2-5,position:"relative"})},t.effect=function(s){if(effA=["random","swirl","rain","straight"],""==e[s.id].effect?eff=effA[Math.floor(Math.random()*effA.length)]:eff=e[s.id].effect,n[s.id]=new Array,"random"==eff){for(counter=0,i=1;i<=e[s.id].sph;i++)for(j=1;j<=e[s.id].spw;j++)n[s.id][counter]=i+""+j,counter++;t.random(n[s.id])}"rain"==eff&&t.rain(s),"swirl"==eff&&t.swirl(s),"straight"==eff&&t.straight(s),h[s.id]*=-1,h[s.id]>0&&n[s.id].reverse()},t.random=function(i){var t=i.length;if(0==t)return!1;for(;--t;){var e=Math.floor(Math.random()*(t+1)),n=i[t],s=i[e];i[t]=s,i[e]=n}},t.swirl=function(s){for(var d=e[s.id].sph,a=e[s.id].spw,o=1,r=1,c=0,f=0,p=0,h=!0;h;){for(f=0==c||2==c?a:d,i=1;i<=f;i++)if(n[s.id][p]=o+""+r,p++,i!=f)switch(c){case 0:r++;break;case 1:o++;break;case 2:r--;break;case 3:o--}switch(c=(c+1)%4){case 0:a--,r++;break;case 1:d--,o++;break;case 2:a--,r--;break;case 3:d--,o--}check=t.max(d,a)-t.min(d,a),a<=check&&d<=check&&(h=!1)}},t.rain=function(t){for(var s=e[t.id].sph,d=e[t.id].spw,a=0,o=to2=from=1,r=!0;r;){for(i=from;i<=o;i++)n[t.id][a]=i+""+parseInt(to2-i+1),a++;to2++,o<s&&to2<d&&s<d&&o++,o<s&&s>=d&&o++,to2>d&&from++,from>o&&(r=!1)}},t.straight=function(t){for(counter=0,i=1;i<=e[t.id].sph;i++)for(j=1;j<=e[t.id].spw;j++)n[t.id][counter]=i+""+j,counter++},t.min=function(i,t){return i>t?t:i},t.max=function(i,t){return i<t?t:i},this.each(function(){init(this)})},t.fn.coinslider.defaults={width:565,height:290,spw:7,sph:5,delay:3e3,sDelay:30,opacity:.7,titleSpeed:500,effect:"",navigation:!0,links:!0,hoverPause:!0}}(jQuery);