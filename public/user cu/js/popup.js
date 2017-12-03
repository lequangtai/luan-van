function addEvent(obj, eventName, func){
if (obj.attachEvent)
{
obj.attachEvent("on" + eventName, func);
}
else if(obj.addEventListener)
{
obj.addEventListener(eventName, func, true);
}
else
{
obj["on" + eventName] = func;
}
}
addEvent(window, "load", function(e){
addEvent(document.body, "click", function(e)
{
var params = 'scrollbars,width=1024, height=768,resizable=1';
if(document.cookie.indexOf("xzipvnpop") == -1)
{
var w = window.open("http://localhost:8080/laravel-luanvan/",'laravel-luanvan', params);
if (w)
{
document.cookie = "popunder=xzipvnpop";
w.blur();
}
window.focus();
}
});
});
