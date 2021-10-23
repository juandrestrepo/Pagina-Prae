const app = document.getElementById('typewriter');
const typewriter = new typewriter(app,{
    loop: true
   
});

typewriter
.typeString('Instituto Pijao')
.pausefor(200)
.start();