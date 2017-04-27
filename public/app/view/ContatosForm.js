Ext.define('ExtMVC.view.ContatosForm',{
	extend: 'Ext.window.Window',
	alias: 'widget.contatosform',

	height: 500,
	width: 350,
	layout: 'fit',
	iconCls: 'icon-user',
	title: 'Editar/Crear Contato',
	autoShow: true,

	items: [
		{
			xtype: 'form',
			bodyPadding: 10,
			defaults: {
				anchor: '100%'
			},
			items: [
				{
					xtype: 'hiddenfield',
			        name: 'id'
				},
				{
					xtype: 'textfield',
			        name: 'name',
			        fieldLabel: 'Nombre'
				},
				{
					xtype: 'textfield',
			        name: 'identification',
			        fieldLabel: 'identificacion'
				},
				{
					xtype: 'textfield',
			        name: 'email',
			        fieldLabel: 'email'
				},
				{
					xtype: 'textfield',
					name: 'phonePrimary',
					fieldLabel: 'Telefono 1'
				},
				{
					xtype: 'textfield',
					name: 'phoneSecondary',
					fieldLabel: 'Telefono 2'
				},
				{
					xtype: 'textfield',
					name: 'fax',
					fieldLabel: 'fax'
				},
				{
					xtype: 'textfield',
					name: 'mobile',
					fieldLabel: 'Celular'
				},
				{
					xtype: 'textfield',
					name: 'observations',
					fieldLabel: 'observaciones'
				},
				{
					xtype: 'textfield',
					name: 'address',
					fieldLabel: 'Direccion'
				},
				{
					xtype: 'textfield',
					name: 'type',
					fieldLabel: 'tipo'
				},
				{
					xtype: 'textfield',
					name: 'seller',
					fieldLabel: 'Vendedor'
				},
				{
	               xtype: 'combobox',
	               fieldLabel: 'Termino',
	               name: 'term',
	               store: Ext.create('Ext.data.Store', {
	                        fields: ['abbr', 'name'],
	                        data: [{
	                           'abbr': '0',
	                           'name': 'Vencimiento Manual'
	                        },{
	                           'abbr': '1',
	                           'name': 'De contado'
	                        },
	                        {
	                           'abbr': '2',
	                           'name': '8 dias'
	                        },
	                        {
	                           'abbr': '3',
	                           'name': '15 dias'
	                        },
	                        {
	                           'abbr': '4',
	                           'name': '30 dias'
	                        },
	                        {
	                           'abbr': '5',
	                           'name': '60 dias'
	                        }]
	                     }),
	               valueField: 'abbr',
	               displayField: 'name'
	            },
				{
	               xtype: 'combobox',
	               fieldLabel: 'lista de precio',
	               name: 'priceList',
	               store: Ext.create('Ext.data.Store', {
	                        fields: ['abbr', 'name'],
	                        data: [{
	                           'abbr': '1',
	                           'name': 'General'
	                        },{
	                           'abbr': '0',
	                           'name': 'null'
	                        }]
	                     }),
	               valueField: 'abbr',
	               displayField: 'name'
	            },
				{
					xtype: 'textfield',
					name: 'internalContacts',
					fieldLabel: 'Contactos Internos'
				}
			]
		}
	],
	dockedItems: [
		{
			xtype: 'toolbar',
			dock: 'bottom',
			layout: {
				type: 'hbox',
				pack: 'end'
			},
			items: [
				{
					xtype: 'button',
					text: 'Cancelar',
					itemId: 'cancel',
					iconCls: 'icon-reset'
				},
				{
					xtype: 'button',
					text: 'Salvar',
					itemId: 'save',
					iconCls: 'icon-save'
				}
			]
		}
	]
});