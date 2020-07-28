var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        height: '360',
        width: '655',
        videoId: 'fbnrqx5MCo0',
        playerVars: {'rel': 0, 'enablejsapi': 1, 'modestbranding': 1, 'showinfo': 0},
        events: {
        'onReady': onPlayerReady,
        'onStateChange': onPlayerStateChange
        }
    });
}

function onPlayerReady(event) {
    event.target.setVolume(100);
}

function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.ENDED) {
        let proximo = document.querySelector(".proximo");
        let disable = document.querySelector(".disable");
        proximo.classList.remove('d-none');
        disable.classList.add('d-none');
    }
}