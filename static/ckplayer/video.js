/**
 * 
 */


    $(".art-content").find("video").each(function(){
         //console.log($(this).attr("src"));
        var _src=$(this).attr("src");
        var el=document.createElement("div");
        el.id="video";
        //$(".art-content").append(el);
        $(this).replaceWith(el);
        var flashvars={
            p:0,
            e:1,
            i:'https://www.ask2.cn/data/upload/cqdw.jpg'
        };
        var video=[_src];
        var support=['all'];
        CKobject.embedHTML5(el.id,'ckplayer_a1',600,400,video,flashvars,support);

    });