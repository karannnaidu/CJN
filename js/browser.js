var browser = navigator.userAgent.toLowerCase().indexOf('chrome') > -1 ? 'chrome' : 'other';
if (BrowserDetect.browser.indexOf("chrome") > -1) {
    document.write('<' + 'link rel="stylesheet" href="../component/chromeCSSStyles.css" />');
} else if (BrowserDetect.browser.indexOf("mozilla") > -1) {
    document.write('<' + 'link rel="stylesheet" href="../component/mozillaStyles.css" />');
} else if (BrowserDetect.browser.indexOf("explorer") > -1) {
    document.write('<' + 'link rel="stylesheet" href="../component/explorerStyles.css" />');
}