const player = document.querySelector('.player'),
      playBtn = document.querySelector('.play'),
      prevBtn = document.querySelector('.prev'),
      nextBtn = document.querySelector('.next'),
      audio = document.querySelector('.audio'),
      progressContainer = document.querySelector('.progress__container'),
      progress = document.querySelector('.progress'),
      title = document.querySelector('.song'),
      cover = document.querySelector('.cover'),
      coverImage = document.querySelector('.cover__img'),
      imgSrc = document.querySelector('.img__src'),
      albumName = document.querySelector('.player-album')
      
const cbox = document.querySelectorAll('.flex-elem');

function songChoice(){
$(".flex-elem").on('click', function(){
   var text = $(this).find('.name').text();
   var textAlbum = $(this).find('.album').text();
   loadSong(text, textAlbum);
   playSong();
})

}


//Load
function loadSong(song, album) {
   title.innerHTML = song
   albumName.innerHTML = album,
   audio.src = 'audio/'+ song + '.mp3'
   coverImage.src = 'img/albums/' + album + '.jpg'
}

loadSong(songChoice(), "g");

//Play
function playSong(){
   player.classList.add('play');
   player.classList.remove('player-hidden');
   player.classList.add('player-show');
   cover.classList.add('active__img');
   imgSrc.classList.remove('fa-play');
   imgSrc.classList.add('fa-pause');
   audio.play();
}
//Pause
function pauseSong(){
   player.classList.remove('play'),
   imgSrc.classList.add('fa-play'),
   imgSrc.classList.remove('fa-pause'),
   cover.classList.remove('active__img'),
   audio.pause();
}
playBtn.addEventListener('click', () => { 
   const isPlaying = player.classList.contains('play');

   if (isPlaying) {
      pauseSong();
   }
   else{
      playSong();
   }
});
//Progress bar
function updateProgress(e){
   const {duration, currentTime } = e.srcElement;
   const progressPercent = (currentTime / duration) * 100;
   progress.style.width = progressPercent+"%";
}
audio.addEventListener('timeupdate', updateProgress);

//Set progress 
function setProgress(e){
   const width = this.clientWidth;
   const clickX = e.offsetX;
   const duration = audio.duration;
   audio.currentTime = (clickX / width) * duration;
   
}
progressContainer.addEventListener('click', setProgress);