var JustKnit = function (config) {
    config = config || {};
    JustKnit.superclass.constructor.call(this, config);
};
Ext.extend(JustKnit, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('justknit', JustKnit);

JustKnit = new JustKnit();