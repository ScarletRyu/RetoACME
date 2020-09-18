//-----------------DATE & TIME--------------------//
function doDate()
{
    var str = "";
    var now = new Date();
    var mes = now.getMonth()+1;
    str += now.getDay() + "/" + now.getDate() + "/" + mes+ "/" + now.getFullYear() + "<br> " + now.getHours() +":" + now.getMinutes() + ":" + now.getSeconds();
    document.getElementById("hora_fecha").innerHTML = str;
}

setInterval(doDate, 1000);