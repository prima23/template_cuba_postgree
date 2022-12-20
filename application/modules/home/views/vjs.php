<script src="<?= base_url(); ?>assets/js/chart/chartist/chartist.js"></script>
<script src="<?= base_url(); ?>assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
<script src="<?= base_url(); ?>assets/js/chart/knob/knob.min.js"></script>
<script src="<?= base_url(); ?>assets/js/chart/knob/knob-chart.js"></script>
<script src="<?= base_url(); ?>assets/js/chart/apex-chart/apex-chart.js"></script>
<script src="<?= base_url(); ?>assets/js/chart/apex-chart/stock-prices.js"></script>

<script>
    // greeting
var today = new Date()
var curHr = today.getHours()
// console.log(curHr);
if (curHr >= 0 && curHr < 11) {
    document.getElementById("greeting").innerHTML = 'Selamat Pagi';
} else if (curHr >= 11 && curHr < 15) {
    document.getElementById("greeting").innerHTML = 'Selamat Siang';
} else if (curHr >= 15 && curHr < 18) {
    document.getElementById("greeting").innerHTML = 'Selamat Sore';
} else {
    document.getElementById("greeting").innerHTML = 'Selamat Malam';
}
// time 
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    // var ampm = h >= 12 ? 'PM' : 'AM';
    // h = h % 12;
    // h = h ? h : 12;
    m = checkTime(m);
    // s = checkTime(s);
    document.getElementById('txt').innerHTML =
        h + ":" + m + ':' + s;
        
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) { i = "0" + i };  // add zero in front of numbers < 10
    return i;
}

startTime();
</script>