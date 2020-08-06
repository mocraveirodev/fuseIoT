var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        videoId: 'ra1TCcs20kA',
        playerVars: {'rel': 0, 'enablejsapi': 1, 'modestbranding': 1, 'showinfo': 0},
        events: {
        'onReady': onPlayerReady,
        'onStateChange': onPlayerStateChange
        }
    });
}

function onPlayerReady(event) {
    event.target.setVolume(100);
    let iframe = document.querySelector("iframe");
    iframe.classList.add('player');
}

function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.ENDED) {
        let proximo = document.querySelector(".proximo");
        let disable = document.querySelector(".disable");
        proximo.classList.remove('d-none');
        disable.classList.add('d-none');
    }
}