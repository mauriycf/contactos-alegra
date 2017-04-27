Ext.define('ExtMVC.view.ContatosGrid',{
	extend: 'Ext.grid.Panel',
	alias: 'widget.contatosgrid',
	renderTo: Ext.getBody(),

	store: 'ExtMVC.store.Contatos',

	title: 'Contactos',

	iconCls: 'icon-grid',

	columns: [
		{
			text: 'ID',
			width: 35,
			dataIndex: 'id'
		},
		{
			text: 'Nombre',
			width: 170,
			flex: 1,
			dataIndex: 'name'
		},
		{
			text: 'Identificacion',
			width: 100,
			dataIndex: 'identification'
		},
		{
			text: 'Telefono 1',
			width: 100,
			dataIndex: 'phonePrimary',
		},
		{
			text: 'Observaciones',
			width: 175,
			dataIndex: 'observations'
		},
	],

	dockedItems: [
		{
			xtype: 'toolbar',
			dock: 'top',
			items: [
				{
					xtype: 'button',
					text: 'Nuevo Contacto',
					itemId: 'add',
					iconCls: 'icon-add'
				},
				{
					xtype: 'button',
					text: 'Excluir',
					itemId: 'delete',
					iconCls: 'icon-delete'
				}
			]
		},
		{
			xtype: 'pagingtoolbar',
	        store: 'ExtMVC.store.Contatos',
	        dock: 'top',
	        displayInfo: true,
	        emptyMsg: 'Ningun contacto encontrado'
		}
	]

});















