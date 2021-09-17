let lg = 1025 //1024
let xs = 541 //540

let viewport = $('meta[name="viewport"]');

if (window.screen.availWidth < lg || device.tablet()) {
	viewport.attr("content", "width=1024");
}
if (window.screen.availWidth < xs || device.mobile()) {
	viewport.attr("content", "width=320");
}