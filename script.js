let currentPhoto = 1;

function changePhoto() {
    const photo = document.getElementById('photo');
    
    if (currentPhoto === 1) {
        photo.src = 'photographs/img (5).jpg';
        currentPhoto = 2;
    } else if(currentPhoto==2) {
        photo.src = 'photographs/img (7).jpg';
        currentPhoto = 3;
    }
    else if(currentPhoto==3){
        photo.src = 'photographs/img (4).jpg';
        currentPhoto = 4;
    }
    else if(currentPhoto==4){
        photo.src = 'photographs/img(13).jpg';
        currentPhoto = 5;
    }
    else if(currentPhoto==5){
        photo.src = 'photographs/img (10).jpg';
        currentPhoto = 6;
    }
    else{
        photo.src='photographs/img (8).jpg';
        currentPhoto= 1;
    }
 
}

// Change photo every 3 seconds (3000 milliseconds)
setInterval(changePhoto, 2000);
