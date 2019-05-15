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
function playAnim() {
  var axis;
  var x = parseInt(document.getElementById("animSelect").value);

  switch (x) {
    case 1:
      document.getElementById('nintendo__model-TIMER').setAttribute('enabled', 'true');
      document.getElementById('nintendo__model-ROT-INTERP').setAttribute('keyValue', '-1 0 0 -1.571 -0.9999 -0.01104 0.01104 -1.571 -0.9982 -0.04275 0.04275 -1.573 -0.9914 -0.09267 0.09267 -1.579 -0.9749 -0.1575 0.1575 -1.596 -0.9443 -0.2328 0.2328 -1.628 -0.8968 -0.3129 0.3129 -1.68 -0.8324 -0.3919 0.3919 -1.753 -0.7536 -0.4648 0.4648 -1.85 -0.6646 -0.5283 0.5283 -1.968 -0.5701 -0.5809 0.5809 -2.105 -0.474 -0.6226 0.6226 -2.256 -0.3793 -0.6543 0.6543 -2.417 -0.2879 -0.6772 0.6772 -2.581 -0.2012 -0.6927 0.6927 -2.745 -0.1201 -0.702 0.702 -2.903 -0.04558 -0.7064 0.7064 -3.05 0.02232 -0.7069 0.7069 -3.186 0.09393 -0.704 0.704 -3.329 0.1718 -0.6966 0.6966 -3.482 0.2551 -0.6837 0.6837 -3.641 0.3429 -0.6642 0.6642 -3.802 0.4342 -0.637 0.637 -3.961 0.5272 -0.6008 0.6008 -4.112 -0.6198 0.5549 -0.5549 -2.032 -0.7085 0.499 -0.499 -1.909 -0.7896 0.4339 -0.4339 -1.805 -0.859 0.3621 -0.3621 -1.722 -0.9136 0.2875 -0.2875 -1.661 -0.9526 0.2152 -0.2152 -1.619 -0.9771 0.1506 -0.1506 -1.594 -0.9903 0.0983 -0.0983 -1.581 -0.9961 0.06211 -0.06211 -1.575 -0.998 0.04477 -0.04477 -1.573 -0.9981 0.04358 -0.04358 -1.573');
      break;
      case 2:
        document.getElementById('nintendo__model-TIMER').setAttribute('enabled', 'true');
        document.getElementById('nintendo__model-ROT-INTERP').setAttribute('keyValue', '-1 0 0 -1.571 -0.9999 0.01104 0.01104 -1.571 -0.9982 0.04275 0.04275 -1.573 -0.9914 0.09267 0.09267 -1.579 -0.9749 0.1575 0.1575 -1.596 -0.9443 0.2328 0.2328 -1.628 -0.8968 0.3129 0.3129 -1.68 -0.8324 0.3919 0.3919 -1.753 -0.7536 0.4648 0.4648 -1.85 -0.6646 0.5283 0.5283 -1.968 0.5701 -0.5809 -0.5809 -4.178 0.474 -0.6226 -0.6226 -4.027 0.3793 -0.6543 -0.6543 -3.867 0.2879 -0.6772 -0.6772 -3.702 0.2012 -0.6927 -0.6927 -3.539 0.1201 -0.702 -0.702 -3.381 0.04558 -0.7064 -0.7064 -3.233 -0.02232 -0.7069 -0.7069 -3.097 -0.09393 -0.704 -0.704 -2.954 -0.1718 -0.6966 -0.6966 -2.801 -0.2551 -0.6837 -0.6837 -2.642 -0.3429 -0.6642 -0.6642 -2.481 -0.4342 -0.637 -0.637 -2.322 -0.5272 -0.6008 -0.6008 -2.171 -0.6198 -0.5549 -0.5549 -2.032 -0.7085 -0.499 -0.499 -1.909 -0.7896 -0.4339 -0.4339 -1.805 -0.859 -0.3621 -0.3621 -1.722 -0.9136 -0.2875 -0.2875 -1.661 -0.9526 -0.2152 -0.2152 -1.619 -0.9771 -0.1506 -0.1506 -1.594 -0.9903 -0.0983 -0.0983 -1.581 -0.9961 -0.06211 -0.06211 -1.575 -0.998 -0.04477 -0.04477 -1.573 -0.9981 -0.04358 -0.04358 -1.573');
        break;
        case 3:
          document.getElementById('nintendo__model-TIMER').setAttribute('enabled', 'true');
          document.getElementById('nintendo__model-ROT-INTERP').setAttribute('keyValue', '-1 0 0 -1.571 -1 0 0 -1.593 -1 0 0 -1.656 -1 0 0 -1.756 -1 0 0 -1.889 -1 0 0 -2.051 -1 0 0 -2.239 -1 0 0 -2.446 -1 0 0 -2.671 -1 0 0 -2.908 -1 0 0 -3.154 -1 0 0 -3.405 -1 0 0 -3.655 -1 0 0 -3.903 -1 0 0 -4.142 1 0 0 -1.913 1 0 0 -1.701 1 0 0 -1.507 1 0 0 -1.301 1 0 0 -1.078 1 0 0 -0.8419 1 0 0 -0.5968 1 0 0 -0.3467 1 0 0 -0.09573 -1 0 0 -0.1521 -1 0 0 -0.3927 -1 0 0 -0.622 -1 0 0 -0.8359 -1 0 0 -1.03 -1 0 0 -1.201 -1 0 0 -1.345 -1 0 0 -1.456 -1 0 0 -1.532 -1 0 0 -1.568 -1 0 0 -1.571');
        break;

    default:
      document.getElementById('nintendo__model-TIMER').setAttribute('enabled', 'false');
  }
}

var count = 0;
function toggleRender() {
  count ++;
  console.log(count);
  element.runtime.togglePoints(true);
  document.getElementById('renderToggle').innerHTML = "vertex";
  if (count == 2){
  document.getElementById('renderToggle').innerHTML = "polygon";
  }
  else if(count >= 3){
      count = 0;
      document.getElementById('renderToggle').innerHTML = "default";
  }
}
