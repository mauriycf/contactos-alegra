Ext.define('ExtMVC.model.Contato',{
	extend: 'Ext.data.Model',

	fields: [
		{name: 'id',  type: 'int'},
		{name: 'name',  type: 'string'},
		{name: 'identification',  type: 'string'},
		{name: 'email',  type: 'string'},
		{name: 'phonePrimary',  type: 'string'},
		{name: 'phoneSecondary',  type: 'string'},
		{name: 'fax',  type: 'string'},
		{name: 'mobile',  type: 'string'},
		{name: 'observations', type: 'string'},
		{name: 'address', mapping: 'address.address',  type: 'string'},
		{name: 'type',  type: 'string'},
		{name: 'seller',  type: 'string'},
		{name: 'term', mapping: 'term.name',  type: 'string'},
		{name: 'priceList', mapping: 'priceList.name',  type: 'string'},
		{name: 'internalContacts',  type: 'string'}
	]
});