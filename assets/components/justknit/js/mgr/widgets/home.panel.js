JustKnit.panel.Home = function (config) {
    config = config || {};
    Ext.apply(config, {
        baseCls: 'modx-formpanel',
        layout: 'anchor',
        /*
         stateful: true,
         stateId: 'justknit-panel-home',
         stateEvents: ['tabchange'],
         getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
         */
        hideMode: 'offsets',
        items: [{
            html: '<h2>' + _('justknit') + '</h2>',
            cls: '',
            style: {margin: '15px 0'}
        }, {
            xtype: 'modx-tabs',
            defaults: {border: false, autoHeight: true},
            border: true,
            hideMode: 'offsets',
            items: [{
                title: _('justknit_items'),
                layout: 'anchor',
                items: [{
                    html: _('justknit_intro_msg'),
                    cls: 'panel-desc',
                }, {
                    xtype: 'justknit-grid-items',
                    cls: 'main-wrapper',
                }]
            }]
        }]
    });
    JustKnit.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(JustKnit.panel.Home, MODx.Panel);
Ext.reg('justknit-panel-home', JustKnit.panel.Home);
