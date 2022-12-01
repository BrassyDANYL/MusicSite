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
      albumName = document.querySelector('.player-album'),
      timer = document.querySelector('.timer'),
      songer = document.querySelector('.author')
      
const cbox = document.querySelectorAll('.flex-elem');

function songChoice(){
$(".flex-elem").on('click', function(){
   var text = $(this).find('.name').text();
   var textAlbum = $(this).find('.album').text();
   var songerName = $(this).find('.author').text();
   loadSong(text, textAlbum, songerName);
   playSong();
})

}


//Load
function loadSong(song, album, songer) {
   title.innerHTML = song
   albumName.innerHTML = songer,  
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
   $('.flex-container').css('padding-bottom','120px');
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
   console.log(audio.currentTime);
   var sec_num = audio.currentTime;// don't forget the second param
   var hours = Math.floor(sec_num / 3600);
   var minutes = Math.floor((sec_num - (hours * 3600)) / 60);
   var seconds = Math.floor((sec_num - (hours * 3600) - (minutes * 60)));

   if (minutes < 10) { minutes = "0" + minutes; }
   if (seconds < 10) { seconds = "0" + seconds; }
   timer.innerHTML = minutes + ':' + seconds;

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


//change header color
$(function (){
   $(document).scroll(function () {
   var $nav = $(".header");
   $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
});
})

//burger
   $('.burger').on('click', function(){
      
      $('.header-menu').toggleClass('open-burger');
   
   });



$('.carousel').slick({
   centerMode: true,
   centerPadding: '60px',
   slidesToShow: 3,
   responsive: [
      {
         breakpoint: 768,
         settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
         }
      },
      {
         breakpoint: 480,
         settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
         }
      }
   ]
});