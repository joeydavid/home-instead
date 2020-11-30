//Show modal on Page Load
$(window).on('load',function(){
    $('#myModal').modal('show');
});

//Toggle Button
const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links1')[0]

toggleButton.addEventListener('click' , () => {
    navbarLinks.classList.toggle('active')
});

//Audio Autoplay
$(document).ready(function() {
    // 1.Welcome Home
    $('.play').click(function() {
        var audio = document.getElementById("welcomeAudio");
		audio.play();
    });
    // 2.Your Options
    $('#your-options-tab').click(function() {
        var audio = document.getElementById("optionsAudio");
		audio.play();
    });
    // 3.Why Home Instead
    $('#why-home-tab').click(function() {
        var audio = document.getElementById("whyhomeAudio");
        audio.play();
    });
    // 4. Support When you need it
    $('#support-tab').click(function() {
        var audio = document.getElementById("supportAudio");
        audio.play();
    });
    // 5. Contact Us
    $('#contact-tab').click(function() {
        var audio = document.getElementById("contactAudio");
        audio.play();
    });


    // Mute and Unmute
    $("#welcomeAudio, #optionsAudio, #whyhomeAudio, #supportAudio, #contactAudio").prop('muted', false);

    $("#muteaudio").click( function (){
        if( $("#welcomeAudio, #optionsAudio, #whyhomeAudio, #supportAudio, #contactAudio").prop('muted') ) {
            $("#welcomeAudio, #optionsAudio, #whyhomeAudio, #supportAudio, #contactAudio").prop('muted', false);
            $(this).text("Mute audio");
        } else {
        $("#welcomeAudio, #optionsAudio, #whyhomeAudio, #supportAudio, #contactAudio").prop('muted', true);
        $(this).text("Unmute audio");
        }
    });

    $("audio").each(function(){
        $(this).bind("play",stopAll);
      });
      
      function stopAll(e){
          var currentElementId=$(e.currentTarget).attr("id");
          $("audio").each(function(){
              var $this=$(this);
              var elementId=$this.attr("id");
              if(elementId!=currentElementId){
                  $this[0].pause();
              }
          });
      }
});

