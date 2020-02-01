Ext.onReady(function () {
    JustKnit.config.connector_url = OfficeConfig.actionUrl;

    var grid = new JustKnit.panel.Home();
    grid.render('office-justknit-wrapper');

    var preloader = document.getElementById('office-preloader');
    if (preloader) {
        preloader.parentNode.removeChild(preloader);
    }
});