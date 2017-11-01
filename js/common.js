// Global vars
var timeoutID1;
var timeoutID2;
// Global functions
function hideNavSub() {
 $('ul', $('#nav')).fadeOut();
}
function hideSidebarSub() {
 $('ul', $('#sidebar')).fadeOut();
}

$(document).ready(function() {
 // Cache
 var nav = $('#nav');
 var side = $('#sidebar');
 
 // Dropdown menu
 $('ul', nav).hide();
 $('#oNama > a, #agroTehnika > a, #prodaja > a, #kontakt > a', nav).mouseenter(function() {
  $('ul', nav).fadeOut();
 });
 $('#oNama > a, #agroTehnika > a, #prodaja > a, #kontakt > a', nav).mouseleave(function() {
  timeoutID1 = window.setTimeout(hideNavSub, 1000);
 });
 $('.hasSub > a', nav).mouseenter(function() {
  $(this).next(':not(:animated)').slideDown();
 });
 $('.hasSub ul', nav).mouseenter(function() {
  window.clearTimeout(timeoutID1);
 });
 $('.hasSub ul', nav).mouseleave(function() {
  $(this).delay(200).fadeOut();
 });
 // Sidebar dropdown
 $('ul', side).hide();
 $('a', nav).mouseenter(function() {
  $('ul', side).fadeOut();
 });
 $('.hasSub > a', side).mouseenter(function() {
  $(this).next(':not(:animated)').slideDown();
 });
 $('.hasSub > a', side).mouseleave(function() {
  timeoutID2 = window.setTimeout(hideSidebarSub, 1000);
 });
 $('.hasSub ul', side).mouseenter(function() {
  window.clearTimeout(timeoutID2);
 });
 $('.hasSub ul', side).mouseleave(function() {
  $(this).delay(200).fadeOut();
 });
 
 // Soft scrolling
 // http://oncemade.com/animated-page-scroll-with-jquery/
 $('.soft').click(function() {
  var anchorLink = $(this).attr("href");
  anchor = anchorLink.substr(1);
  var destination = $('a[name="'+anchor+'"]').offset().top;
  if( anchor == 'vrh' ) destination = 20; // < HACK
  $("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination-20}, 500 );
  return false;
 });
 
 // Detect widescreen
 if($('html').width() > 1024) {
  $('body').addClass('highRes');
 }
 
 // Fancybox (if needed)
 if( typeof $.fancybox == 'function' ) {
  $('.fancybox a').fancybox();
 }
 
});
