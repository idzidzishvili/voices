
var contactSendingMSGText="შეტყობინება იგზავნება";

$("h1,h2,h3,a.h").css({position:"absolute",top:-999,left:-999,opacity:.01});

//var playerId=0;
function initPlayers(){
   $.each($(".player"),function(){
      //if(typeof $(this).attr("data-id")!=="undefined") return;
      //
      //playerId++;
      var source=$(this).data("source");
      $(this).attr("data-id",source.ID);
      //$(this).append('<audio><source src="ajax.php?act=getsource&id='+source.ID+'" type="audio/mp3"></source></audio><div class="control"><div class="play"></div><div class="pause"></div></div><div class="progress"><div class="background"></div><div class="bar"><div class="dot"></div></div></div><div class="mic"></div>');
      $(this).append('<audio><source data-src="'+source.SOURCE+'" type="audio/mp3"></source></audio><div class="control"><div class="play"></div><div class="pause"></div></div><div class="progress"><div class="background"></div><div class="bar"><div class="dot"></div></div></div><div class="mic"></div>');
   });
}

// Move data-sources string into artist object
$.each($(".artist"),function(){
   if(typeof $(this).attr("data-sources")=="undefined") return;
   try{
      var sources=JSON.parse(atob($(this).attr("data-sources")));
      $(this).attr("data-sources","");
      $(this).data("sources",sources);
   }catch(e){console.log(e);}
});

var currentLanguageId=0;
var artistPerCategory=$(document).width()>1245?8:6;
function showArtistsByLanguage(id){
   if(id==currentLanguageId) return;
   $(".langs>.lang").removeClass("active");
   $(".langs>.lang[data-id='"+id+"']").addClass("active");
   
   $(".artist").removeClass("sourceless").hide().find(".mainPlayer").empty();
   $(".artist").find(".otherSources").empty();
   $.each($(".artist"),function(){
      var sources=[];
      $.each($(this).data("sources"),function(key,source){
         if(source.LANGUAGE_ID==id) sources.push(source);
      });
      
      if(sources.length<=0) return $(this).addClass("sourceless");
      
      $(this).find(".mainPlayer").append('<div class="playerTitle">'+sources[0].NAME+'</div>');
      $(this).find(".mainPlayer").append($("<div />").addClass("player").data("source",sources[0]));
      
      for(var i=1;i<=sources.length;i++){
         if(sources[i]===undefined) return;
         $(this).find(".otherSources").append('<div class="playerTitle">'+sources[i].NAME+'</div>');
         $(this).find(".otherSources").append($("<div />").addClass("player").data("source",sources[i]));
      }
   });
   
   $(".bank .mainPlayer .playerTitle").hide();
   $(".bank .otherSources").hide();

   $(".bank .category>.empty").hide();
   $(".bank .category>.btn").hide();
   
   
   $.each($(".bank .category"),function(){
      var $artists=$(this).find(".artist:not(.sourceless)");
      var $loadedArtists=$artists.slice(0,artistPerCategory);
      $loadedArtists.show();
      
      if($artists.length==0) $(this).hide();
      else $(this).show();
      if($artists.length>artistPerCategory) $(this).find(".btn").show();
      
      // Load unloaded images
      setTimeout(function(){
         $.each($loadedArtists,function(){
            var $img=$(this).find("img");
            $img.attr("src",$img.attr("data-src"));
         });
      },20);
   });
   initPlayers();
}
setTimeout(function(){showArtistsByLanguage(1);},100);

function filterLanguagesMenu(){
   var langArray=[];
   $.each($(".artist"),function(){
      $.each($(this).data("sources"),function(key,source){
         langArray[parseInt(source.LANGUAGE_ID)]=true;
      });
   });

   $.each($(".part .langs .lang"),function(){
      if(langArray[parseInt($(this).attr("data-id"))]!==true) $(this).hide();
      else $(this).show();
   });

   if($(".langs .lang:visible").length<2) $(".part .langs").hide();
   else $(".part .langs").show();

   return;
   $.each($(".part .langs .lang"),function(){
      var id=parseInt($(this).attr("data-id"));

      $.each($(".artist"),function(){
         $.each($(this).data("sources"),function(key,source){
            if(source.LANGUAGE_ID==id) sources.push(source);
         });
      });
   });
}
filterLanguagesMenu();

$(document).on("click",".bank .category>.btn",function(){
   var $loadedArtists=$(this).parent().find(".artist:not(.sourceless):hidden").slice(0,artistPerCategory);
   $loadedArtists.slideDown("fast");
   
   if($(this).parent().find(".artist:not(.sourceless):hidden").length<=0) $(this).slideUp("fast");
   
   // Load unloaded images
   $.each($loadedArtists,function(){
      var $img=$(this).find("img");
      $img.attr("src",$img.attr("data-src"));
   });
});

// Check if audio has been initialized
function initializedAudioCheck(audio){
   if(!$(audio).hasClass("initialized")){
      $(audio).addClass("initialized");
      $.each($(audio).find("source"),function(){
         $(this).attr("src",$(this).attr("data-src"));
      });
      audio.load()
   }
}

// Player Control
var currentAudio=false;
$(document).on("click",".player .control",function(){ 
   var $player=$(this).parent();
   var audio=$player.find("audio")[0];
   
   initializedAudioCheck(audio);
   
   $player.addClass("listened");
   if($player.hasClass("active")){
      // Pause
      $player.removeClass("active");
      currentAudio=false;
      audio.pause();
   }else{
      // Play
      if(currentAudio) currentAudio.pause();
      $(".player").removeClass("active");
      
      $player.addClass("active");
      audio.play();
      currentAudio=audio;
      
      if(typeof(audio.ontimeupdate)==="function") return;
      console.log(audio.ontimeupdate);

      audio.ontimeupdate=function(){
         $(this).parent().find(".bar").css("width",(this.currentTime*100/this.duration)+"%");
         if(this.currentTime>=this.duration){
            $player.removeClass("active");
            currentAudio=false;
            this.currentTime=0;
            this.pause();
            $(this).parent().find(".bar").css("width","0%");
         }
      }
   }
   
   return false;
});

$(document).on("click",".player .progress",function(e){
   var p=(e.pageX-$(this).offset().left)*100/$(this).width();
   var audio=$(this).parent().find("audio")[0];
   
   initializedAudioCheck(audio);
   
   setTimeout(function(){
      audio.currentTime=p*audio.duration/100;
   },350);

   if(!$(this).parent().hasClass("active")){
      $(this).parent().find(".control").trigger("click");
   }
   return false;
});

// Favourite
$(document).on("click",".artist .id span:nth-child(2)",function(e){
   if($(this).parents(".artist").hasClass("favourite")){
      $(this).parents(".artist").removeClass("favourite");
      $.post("ajax.php?act=favourite",{id:$(this).parents(".artist").attr("data-id"),insert:0},function(){});
   }else{
      $(this).parents(".artist").addClass("favourite");
      $.post("ajax.php?act=favourite",{id:$(this).parents(".artist").attr("data-id"),insert:1},function(){});
   }
   return false;
});
// Like
$(document).on("click",".artist .like",function(e){
   var count=parseInt($(this).find("span").eq(1).html());
   if($(this).parents(".artist").hasClass("liked")){
      $(this).parents(".artist").removeClass("liked");
      $(this).find("span").eq(1).html(count-1);

      $.post("ajax.php?act=like",{id:$(this).parents(".artist").attr("data-id"),insert:0},function(){});
   }else{
      $(this).parents(".artist").addClass("liked");
      $(this).find("span").eq(1).html(count+1);

      $.post("ajax.php?act=like",{id:$(this).parents(".artist").attr("data-id"),insert:1},function(){});
   }
   return false;
});
// Calc
$(document).on("click",".artist .calc",function(e){
   return false;
});
// Open artist view
$(document).on("click",".artist:not(.temp)",function(e){
   //openArtistView($(this).attr("data-id"));
   return false;
});
$(document).on("click",".artist img,.artist .id span:nth-child(1)",function(){
   openArtistView($(this).parents(".artist").eq(0).attr("data-id"));
});
$(document).on("click",".artist .calc",function(){
   if(!openArtistView($(this).parents(".artist").eq(0).attr("data-id"),true)){
      if($(this).find("span:first-child").hasClass("voice")){
         $(this).parents(".artist").find(".otherSources").slideDown(220);
         $(this).parents(".artist").first().find(".mainPlayer").slideDown(220);
         $(this).parents(".artist").first().find(".calculate").slideUp(220);
         $(this).find("span:last-child").empty().append("კალკულაცია");
         $(this).find("span:first-child").removeClass("voice");
      }else{
         $(this).parents(".artist").find(".otherSources").slideUp(220);
         $(this).parents(".artist").first().find(".mainPlayer").slideUp(220);
         $(this).parents(".artist").first().find(".calculate").slideDown(220);
         $(this).find("span:last-child").empty().append("ხმები");
         $(this).find("span:first-child").addClass("voice");
      }
   }
});

var currentArtistId=false;
function openArtistView(id,calculate){
   calculate=calculate||false;
   currentArtistId=id;

   var $artist=$(".artist[data-id='"+id+"']");
   var $temp=$("<div />");

   if($artist.hasClass("active")) return false;
   
   $temp.addClass("artist temp").css({
      "position":"relative",
      "width":$artist.outerWidth(true),
      "height":$artist.outerHeight(true)
   });
   
   $artist.css({
      "position":"absolute",
      "width":$artist.outerWidth(true),
      "top":$artist.offset().top-$(".parts").offset().top,
      "left":$artist.offset().left,
      "transform":"scale(.96)",
      zIndex:10
   });

   $artist.before($temp);
   $artist.addClass("active");

   //$(".header").fadeOut(220);
   //if($(document).width()<985) $(".hamburger").fadeOut(220);
   setTimeout(function(){
      $artist.css({"transform":"scale(1)"});
      $artist.css({"transition-duration":".26s"});

      if(calculate){
         $artist.find(".mainPlayer").slideUp(220,function(){
            $artist.find(".mainPlayer .playerTitle").slideDown(220);
         });
         $artist.find(".calculate").slideDown(220);
         $artist.find(".mainContent .info .calc span:last-child").empty().append("ხმები");
         $artist.find(".mainContent .info .calc span:first-child").addClass("voice");
      }else{
         $artist.find(".mainPlayer .playerTitle").slideDown(220);
         $artist.find(".otherSources").slideDown(220);
      }
      
      $(".overLayer").show();
      
      setTimeout(function(){
         $(".overLayer").addClass("fade");
      },100);
   },100);

   return true;
}
$(".overLayer").on("click",function(){
   var $artist=$(".artist[data-id='"+currentArtistId+"']");

   if(currentAudio) currentAudio.pause();
   $(".player").removeClass("active");

   $(".overLayer").addClass("fade");
   //$(".header").fadeIn(220);
   //if($(document).width()<985) $(".hamburger").fadeIn(220);
   setTimeout(function(){
      $(".artist.temp").remove();
      $(".overLayer").hide();

      $artist.removeClass("active");
      $artist.attr("style","");
   },180);


   $artist.find(".mainPlayer .playerTitle").slideUp(180);
   $artist.find(".otherSources").slideUp(180);
   $artist.find(".calculate").slideUp(180);
   $artist.find(".mainPlayer").slideDown(180);
   $artist.find(".mainContent .info .calc span:last-child").empty().append("კალკულაცია");
   $artist.find(".mainContent .info .calc span:first-child").removeClass("voice");

   currentArtistId=false;
});

$(document).on("keyup",".calculate textarea",function(e){
   var $info=$(this).parents(".calculate").first().find(".info");
   var fixedPrice=parseFloat($info.attr("data-price"));
   var fixedWordsCount=parseFloat($info.attr("data-words"));
   var pricePerWord=parseFloat($info.attr("data-per"));
   var value=$(this).val();
   var count=wordsCount(value);
   var price=fixedPrice;
   if(count>fixedWordsCount) price+=(count-fixedWordsCount)*pricePerWord;

   $info.find(".totalPrice .number").empty().append(count>0?price:0);
   $info.find(".totalSymbol span").empty().append(count);
});

function wordsCount(s){
   s=s.replace(/(^\s*)|(\s*$)/gi,""); // exclude  start and end white-space
   s=s.replace(/[ ]{2,}/gi," "); // 2 or more space to 1
   s=s.replace(/\n /,"\n"); // exclude newline with a start spacing
   return s.split(' ').filter(function(str){return str!="";}).length;
}

//initPlayers();
//$(".player").first().addClass("active").addClass("listened").find(".bar").css("width","60%");
//$(".player").eq(2).addClass("listened").find(".bar").css("width","60%");


var regExEmail=/\S+@\S+\.\S+/;
var regExPhone=/^[\+]?[0-9]?[-\s\.]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
var sendingMail=false;
function sendMail(){
   if(sendingMail) return;
   var errors=false;
   
   var data={};
   var $el=$(".parts .part .contact");
   
   
   // Validate Text
   if($el.find(".cText").val().length<10){
      errors=true;
      $el.find(".cText").focus().addClass("highlight");
      setTimeout(function(){$el.find(".cText").removeClass("highlight");},800);
   }else data.text=$el.find(".cText").val();
   
   // Validate Phone
   if($el.find(".cPhone").val().length<2){
      errors=true;
      $el.find(".cPhone").focus().addClass("highlight");
      setTimeout(function(){$el.find(".cPhone").removeClass("highlight");},800);
   }else data.phone=$el.find(".cPhone").val();
   
   // Validate Email Address
   if(!regExEmail.test($el.find(".cEmail").val())){
      errors=true;
      $el.find(".cEmail").focus().addClass("highlight");
      setTimeout(function(){$el.find(".cEmail").removeClass("highlight");},800);
   }else data.email=$el.find(".cEmail").val();
   
   // Validate Last Name
   if($el.find(".cName").val().length<1){
      errors=true;
      $el.find(".cName").focus().addClass("highlight");
      setTimeout(function(){$el.find(".cName").removeClass("highlight");},800);
   }else data.name=$el.find(".cName").val();
   
   if(errors) return;
   
   sendingMail=true;
   $el.find("input,textarea").prop("disabled",true);
   $el.find(".send").addClass("alert");
   $.post("ajax.php?act=send",data,function(data){
      try{
         data=$.parseJSON(data);
         console.log(data);
         console.log($el);
         console.log($el.find(".send"));

         if(data.status=="SUCCESS") $el.find(".send").removeClass("alert").addClass("success").empty().append(data.message);
         else{
            if(data.status=="TEXT_ERROR"){
               $el.find(".cText").focus().addClass("highlight");
               setTimeout(function(){$el.find(".cText").removeClass("highlight");},800);
            }
            if(data.status=="PHONE_ERROR"){
               $el.find(".cPhone").focus().addClass("highlight");
               setTimeout(function(){$el.find(".cPhone").removeClass("highlight");},800);
            }
            if(data.status=="EMAIL_ERROR"){
               $el.find(".cEmail").focus().addClass("highlight");
               setTimeout(function(){$el.find(".cEmail").removeClass("highlight");},800);
            }
            if(data.status=="NAME_ERROR"){
               $el.find(".cName").focus().addClass("highlight");
               setTimeout(function(){$el.find(".cName").removeClass("highlight");},800);
            }
            
            $el.find(".send").addClass("error").empty().append(data.message);
            
            setTimeout(function(){
               $el.find(".send").removeClass("alert");
               $el.find("input,textarea").prop("disabled",false);
               setTimeout(function(){
                  $el.find(".send").removeClass("error").empty().append(contactSendingMSGText);
                  sendingMail=false;
               },400);
            },1200);
         }
      }catch(e){console.log(e);}
   });
}
