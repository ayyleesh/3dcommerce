function changeCamera() {
  var x = parseInt(document.getElementById("cameraSelect").value);

  switch (x) {
    case 1:
    document.getElementById('nintendo__CameraFront').setAttribute('bind', 'true');
    break;
    case 2:
    document.getElementById('nintendo__CameraBack').setAttribute('bind', 'true');
    break;
    case 3:
    document.getElementById('nintendo__CameraLeft').setAttribute('bind', 'true');
    break;
    case 4:
    document.getElementById('nintendo__CameraRight').setAttribute('bind', 'true');
    break;
    case 5:
    document.getElementById('nintendo__CameraTop').setAttribute('bind', 'true');
    break;
    case 6:
    document.getElementById('nintendo__CameraBottom').setAttribute('bind', 'true');
    break;
    default:
    document.getElementById('nintendo__CameraFront').setAttribute('bind', 'true');
  }
}

function changeAnimation() {
          var axis;
          var x = parseInt(document.getElementById("animSelect").value);

          switch (x) {
            case 1:
              document.getElementById('nintendo__model-TIMER').setAttribute('enabled', 'true');
              document.getElementById('nintendo__model-ROUTE').setAttribute('toNode', 'model-ROTX-INTERP');
              break;
              case 2:
              document.getElementById('nintendo__model-TIMER').setAttribute('enabled', 'true');
              document.getElementById('nintendo__model-ROUTE').setAttribute('toNode', 'model-ROTY-INTERP');
                break;
                case 3:
                  axis = "Z"
                  break;

            default:
              document.getElementById('nintendo__model-TIMER').setAttribute('enabled', 'false');
          }
}
