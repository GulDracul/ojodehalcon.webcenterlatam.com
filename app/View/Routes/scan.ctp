<style>
.message {
    clear: both;
    color: #fff;
    font-size: 390%;
    font-weight: bold;
    margin: 0 0 1em 0;
    padding: 5px;
}
.clockdate-wrapper{
	font-size: 90px;
}
</style>
 <?php echo $this->Html->link(__('Crear caso'), array('controller' => 'incidents', 'action' => 'add'), array('type'=>'button','class' => 'btn btn-warning','style'=>'font-size: 60px; position: absolute; top: 25px; right: 40px; ')); ?>
<script src="../js/qrCode.min.js"></script>
  <div class="row justify-content-center mt-5">
    <div class="col-sm-12 shadow " style=" width: 100%; ">
      <h1 style=" font-size: 6em; " class="text-center">Escanear QR de zona</h1>
      <div class="row text-center">
        <a id="btn-scan-qr" href="#">
          <img src="https://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2017/07/1499401426qr_icon.svg" class="img-fluid text-center" width="175">
        <a/>
        <canvas style=" width: 1000px; " hidden="" id="qr-canvas" class="img-fluid"></canvas>
        </div>
        <div class="row mx-5 my-3">
		
  
    <div class="col-1"></div>
    <div class="col-10">
      <button style="width: 670px; font-size: 60px;" class="btn btn-success btn-sm rounded-3 mb-2" onclick="encenderCamara()">Encender cámara</button>
    </div>
    <div class="col-1"></div>
	
	<div class="col-1"></div>
    <div class="col-10">
      <button style="width: 670px; font-size: 60px;" class="btn btn-danger btn-sm rounded-3" onclick="cerrarCamara()">Detener cámara</button>
    </div>
    <div class="col-1"></div>

        
        
      </div>
    </div>
  </div>
  <script>
  //crea elemento
const video = document.createElement("video");

//nuestro camvas
const canvasElement = document.getElementById("qr-canvas");
const canvas = canvasElement.getContext("2d");

//div donde llegara nuestro canvas
const btnScanQR = document.getElementById("btn-scan-qr");

//lectura desactivada
let scanning = false;

//funcion para encender la camara
const encenderCamara = () => {
  navigator.mediaDevices
    .getUserMedia({ video: { facingMode: "environment" } })
    .then(function (stream) {
      scanning = true;
      btnScanQR.hidden = true;
      canvasElement.hidden = false;
      video.setAttribute("playsinline", true); // required to tell iOS safari we don't want fullscreen
      video.srcObject = stream;
      video.play();
      tick();
      scan();
    });
};

//funciones para levantar las funiones de encendido de la camara
function tick() {
  canvasElement.height = video.videoHeight;
  canvasElement.width = video.videoWidth;
  canvas.drawImage(video, 0, 0, canvasElement.width, canvasElement.height);

  scanning && requestAnimationFrame(tick);
}

function scan() {
  try {
    qrcode.decode();
  } catch (e) {
    setTimeout(scan, 300);
  }
}

//apagara la camara
const cerrarCamara = () => {
  video.srcObject.getTracks().forEach((track) => {
    track.stop();
  });
  canvasElement.hidden = true;
  btnScanQR.hidden = false;
};

const activarSonido = () => {
  var audio = document.getElementById('audioScaner');
  audio.play();
}

//callback cuando termina de leer el codigo QR
qrcode.callback = (respuesta) => {
  if (respuesta) {
    //console.log(respuesta);
    //Swal.fire(respuesta)
	window.location.replace(respuesta);
    //activarSonido();
    //encenderCamara();    
    cerrarCamara();    

  }
};
//evento para mostrar la camara sin el boton 
window.addEventListener('load', (e) => {
  encenderCamara();
})

  </script>

