function include(file) { 
    var script  = document.createElement('script'); 
    script.src  = file; 
    script.type = 'text/javascript'; 
    script.defer = true; 
    document.getElementsByTagName('head').item(0).appendChild(script);
} 
include('/home-instead/wp-content/themes/homeinstead/assets/js/audio.js');
include('/home-instead/wp-content/themes/homeinstead/assets/js/api.js');

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

//Video on Tab 1 will autoplay when button clicked
// $(".videoClickPlay").click(function(){
//     $("#cartoonVideo")[0].src += "?autoplay=1";
// });













// window.onload = function() {
//     const ctx = new(window.AudioContext || window.webkitAudioContext)();
//     const osc = ctx.createOscillator();
//     osc.connect(ctx.destination);
//     console.log(ctx.state);

//     var audio = document.getElementById("welcomeAudio");
//     audio.play();
// }

// addEventListener("mousedown", () => {
    
//     const ctx = new(window.AudioContext || window.webkitAudioContext)();
//     const osc = ctx.createOscillator();
//     osc.connect(ctx.destination);

//     var audio = document.getElementById("welcomeAudio");
//     audio.play();
// })

// const htmarkup = document.querySelector("html");
// htmarkup.addEventListener("mousedown", () => {
//     const ctx = new(window.AudioContext || window.webkitAudioContext)();
//     const osc = ctx.createOscillator();
//     osc.connect(ctx.destination);
//     osc.start(0);
//     osc.stop(2);
//     osc.onended = () => {
//         console.log(ctx.state)
//     }
// })

// let source;

// window.addEventListener('load', () => {
//     // noinspection JSUnresolvedVariable
//     let audioCtx = new (window.AudioContext || window.webkitAudioContext)();

//     if (!audioCtx) {
//         alert('Sorry, but the Web Audio API is not supported by your browser. Please, consider upgrading to the latest version or downloading Google Chrome or Mozilla Firefox');
//         playAudio();
//     }
//     let xhr = new XMLHttpRequest();
//     xhr.open('GET', window.origin+'/home-instead/wp-content/uploads/2020/10/Page-1-Welcome-Home.mp3');  //window.origin+'/wp-content/uploads/2020/10/Page-1-Welcome-Home.mp3' window.origin+'/wordpress/homeinstead/wp-content/uploads/2020/12/Page-1-Welcome-Home.mp3'
//     xhr.responseType = 'arraybuffer';
//     xhr.addEventListener('load', () => {
//         let playsound = (audioBuffer) => {
//             source = audioCtx.createBufferSource();
//             source.buffer = audioBuffer;
//             source.connect(audioCtx.destination);
//             source.loop = false;
//             source.start(); // on off mo nalang to pag click yung mga mute mo or ek ek
//         };

//         audioCtx.decodeAudioData(xhr.response).then(playsound);
//     });
//     xhr.send();
// });

