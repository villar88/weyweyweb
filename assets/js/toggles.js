
function toggleVideo() {
    var videoContainer = document.getElementById('videoContainer')
    var video = document.getElementById('video')
    videoContainer.classList.toggle("active")
    if (videoContainer.classList.contains("active")) {
        video.load();
        video.play();
    } else {
        video.pause();
    }
}

function toggleTickets() {
    var ticketsContainer = document.getElementById('ticketsContainer')
    ticketsContainer.classList.toggle("active")
}
function toggleBecome() {
    var becomeContainer = document.getElementById('becomeContainer')
    becomeContainer.classList.toggle("active")
}



