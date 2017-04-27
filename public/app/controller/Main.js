Ext.define('ExtMVC.controller.Main', {
    extend: 'Ext.app.Controller',

    models: [
    	'ExtMVC.model.Contato'
    ],

    stores: [
    	'ExtMVC.store.Contatos'
    ],

    views: [
    	'ExtMVC.view.ContatosGrid',
        'ExtMVC.view.ContatosForm'
    ],

    init: function(application){
        this.control({
            "contatosgrid": {
                render : this.onGridRender,
                itemdblclick : this.onEditClick
            },
            "contatosgrid button#add": {
                click : this.onAddClick
            },
            "contatosgrid button#delete": {
                click : this.onDeleteClick
            },
            "contatosform button#cancel": {
                click : this.onCancelClick
            },
            "contatosform button#save": {
                click : this.onSaveClick
            }
        });
    },

    onGridRender: function(grid, eOpts){
        grid.getStore().load();
    },

    openForm: function(title){

        var win = Ext.create('ExtMVC.view.ContatosForm');

        win.setTitle(title);

        return win;
    },

    onAddClick: function(btn, e, eOpts ){
        
        this.openForm('Nuevo Contacto');
    },

    onEditClick: function(grid, record, item, index, e, eOpts){

        var win = this.openForm('Editar Contacto - ' + record.get('id'));

        var form = win.down('form');

        form.loadRecord(record);
    },

    onCancelClick: function(btn, e, eOpts){
        
        var win = btn.up('window');

        var form = win.down('form');

        form.getForm().reset();

        win.close();
    },

    onDeleteClick: function(btn, e, eOpts){

        var grid = btn.up('grid');

        var records = grid.getSelectionModel().getSelection();

        var store = grid.getStore();

        store.remove(records);

        store.sync();
    },

    onSaveClick: function(btn, e, eOpts){

        var win = btn.up('window'),
            form = win.down('form'),
            values = form.getValues(),
            record = form.getRecord(),
            grid = Ext.ComponentQuery.query('contatosgrid')[0],
            store = grid.getStore();

        if (record){ //edicao
            
            record.set(values);

        } else { //novo registro 

            var contato = Ext.create('ExtMVC.model.Contato',{
                id: values.id,
                name: values.name,
                identification: values.identification,
                email: values.email,
                phonePrimary: values.phonePrimary,
                phoneSecondary: values.phoneSecondary,
                fax: values.fax,
                mobile: values.mobile,
                observations: values.observations,
                identification: values.identification,
                address: values.address,
                type: values.type,
                seller: values.seller,
                term: values.term,
                priceList: values.priceList,
                internalContacts: values.internalContacts
            });

            store.insert(0,contato);
        }

        store.sync();

        win.close();
    }    
});
