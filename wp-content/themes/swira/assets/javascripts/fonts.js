jQuery(document).ready(function() {
    alert('test');;
    var MTUserId='598cf127-b95d-4906-baa3-bd39d751257d';
    var MTFontIds = new Array();

    MTFontIds.push("788248"); // Eurostile® LT W01 Extended 2
    MTFontIds.push("788230"); // Eurostile® LT W01 Bold Extended 2
    (function() {
    var mtTracking = document.createElement('script');
    mtTracking.type='text/javascript';
    mtTracking.async='true';
    mtTracking.src=('https:'==document.location.protocol?'https:':'http:')+'//fast.fonts.net/lt/trackingCode.js';

    (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(mtTracking);
    })();
});

