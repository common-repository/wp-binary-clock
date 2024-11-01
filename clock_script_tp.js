window.onload = tpb_initialize;

function tpb_initialize()
{
  tpb_UpdateClock(); 
}

function tpb_UpdateClock() 
{
  var now = new Date();
  var hrs = now.getHours();
  var min = now.getMinutes();
  var sec = now.getSeconds();
  var hstr = "";
  var mstr = "";
  var sstr = "";
  var d = 128;
  for (i = 7; i>=0; i--) {
    hstr = hstr + String.fromCharCode(48 + ((hrs & d) > 0));
    mstr = mstr + String.fromCharCode(48 + ((min & d) > 0));
    sstr = sstr + String.fromCharCode(48 + ((sec & d) > 0));
    d >>= 1;
  }
  document.getElementById( "tpb_clock" ).innerHTML = hstr + ":" + mstr + ":" + sstr;
  newtime = window.setTimeout("tpb_UpdateClock();", 1000);
}