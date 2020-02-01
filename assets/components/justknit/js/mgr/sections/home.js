JustKnit.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'justknit-panel-home',
            renderTo: 'justknit-panel-home-div'
        }]
    });
    JustKnit.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(JustKnit.page.Home, MODx.Component);
Ext.reg('justknit-page-home', JustKnit.page.Home);