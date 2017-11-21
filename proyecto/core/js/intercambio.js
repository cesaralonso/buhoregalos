/*
 *	CLASE EQUIPO
 *	===============
 */
function Intercambio(){
	this.intercambio = {};
	this.base_url = "api/front/intercambio.php";
	this.userid = '';
}


Intercambio.prototype._getByUserId = function(){
	var data = {};
	var self = this;
	//AJAX REQUEST
	$.ajax({
		url 	: self.base_url,
		method 	: 'POST',
		dataType: 'JSON',
		data 	: self.intercambio
	})
	.done( function( _res ){
		
		console.log(_res);
		/*
		var res = JSON.parse( _res );
		console.log(res);
		$('#intercambio_idintercambio').val(res.idintercambio);
		*/

	})
	.fail( function( _err ){
		console.log( _err );
	})
};

Intercambio.prototype._getallForSelect = function(){
	var data = {};
	var self = this;
	//AJAX REQUEST
	$.ajax({
		url 	: (self.intercambio.base_url!==null) ? self.intercambio.base_url : self.base_url,
		method 	: 'POST',
		dataType: 'JSON',
		data 	: self.intercambio
	})
	.done( function( _res ){
		self._drawSelect(_res);
	})
	.fail( function( _err ){
		console.log( _err );
	})
};


Intercambio.prototype._save = function(){
	var data = {};
	var self = this;
	//AJAX REQUEST
	$.ajax({
		url 	: self.base_url,
		method 	: 'POST',
		dataType: 'JSON',
		data 	: self.intercambio
	})
	.done( function( _res ){

		//var res = JSON.parse(_res);
		setFlash(_res.msg, _res.class);
		
		if( _res.status ){

			setTimeout(function() {
				window.location='./equipo';
			}, 3000);

		} else {
		}

	})
	.fail( function( _err ){
		console.log( _err );
	})
};


Intercambio.prototype._getAllForMe = function(){
	var data = {};
	var self = this;
	//AJAX REQUEST
	$.ajax({
		url 	: self.base_url,
		method 	: 'POST',
		dataType: 'JSON',
		data 	: self.intercambio
	})
	.done( function( _res ){
		self._draw(_res);
	})
	.fail( function( _err ){
		console.log( _err );
	})
};


/*
 * 	DELETE INYTERCAMBIO
 *	@params : {informacion intercambio}
 *	=======================================
 */
Intercambio.prototype._delete = function(){
	var self = this;
	$.ajax({
		url 	: (self.intercambio.base_url!==null) ? self.intercambio.base_url : self.base_url,
		method 	: 'POST',
		async 	: false,
		data 	: self.intercambio
	})
	.done(function( _res ){

		res = JSON.parse(_res);
		setFlash(res.msg, res.class);

		if( res.status ){
			self.intercambio.method = 'allForMe';
			self._getAllForMe();
		} else {
		}

	})
	.fail(function( _err ){
		console.log( _err );
	})
};


Intercambio.prototype._byId = function(){
	var data = {};
	var self = this;
	//AJAX REQUEST
	$.ajax({
		url 	: self.intercambio.base_url,
		method 	: 'POST',
		dataType: 'JSON',
		data 	: self.intercambio
	})
	.done( function( _res ){
		//var res = JSON.parse(_res);
		var res = _res;
		self._drawById(res);
	})
	.fail( function( _err ){
		console.log( _err );
	})
};


Intercambio.prototype._update = function(){
	var data = {};
	var self = this;
	//AJAX REQUEST
	$.ajax({
		url 	: self.intercambio.base_url,
		method 	: 'POST',
		dataType: 'JSON',
		data 	: self.intercambio
	})
	.done( function( _res ){

		//var res = JSON.parse(_res);
		setFlash(_res.msg, _res.class);
		
		if( _res.status ){

			setTimeout(function() {
				window.location='../mis-intercambios';
			}, 1500);
		} else {
		}

	})
	.fail( function( _err ){
		console.log( _err );
	})
};




/*
 *	SET DATA EQUIPO
 *	==================
 */
Intercambio.prototype._set = function( _data ){

	this.intercambio = {};
	this.intercambio.base_url 			= _data._base_url || null;
	this.intercambio.nombre 			= _data._nombre || null;
	this.intercambio.fecha_ini 			= _data._fecha_ini || null;
	this.intercambio.fecha_fin 			= _data._fecha_fin || null;
	this.intercambio.lugar 				= _data._lugar || null;
	this.intercambio.direccion 			= _data._direccion || null;
	this.intercambio.fecha 				= _data._fecha || null;
	this.intercambio.hora 				= _data._hora || null;
	this.intercambio.usuario_idusuario 	= _data._usuario_idusuario || null;
	this.intercambio.method 			= _data._method || null;
	this.intercambio.idintercambio		= _data._idintercambio || null;

	if( this.intercambio.method === 'all')
	{
		this._getall();
	}
	else if( this.intercambio.method === 'allForMe')
	{
		this._getAllForMe();
	}
	else if( this.intercambio.method === 'allForSelect')
	{
		this._getallForSelect();
	}
	else if( this.intercambio.method === 'byId')
	{
		this._byId();
	}
	else if( this.intercambio.method === 'getByUserId')
	{
		this._getByUserId();
	}
	else if( this.intercambio.method === 'save' )
	{
		this._save();
	}
	else if( this.intercambio.method === 'update')
	{
		this._update();
	}
	else if( this.intercambio.method === 'delete')
	{
		this._delete()
	}

};
/*
 *	DRAW TEMPLATE HANDLEBARS
 * 	===========================
 */

Intercambio.prototype._draw = function( _data ){
	if ( _data.length > 0){
		var template = Handlebars.compile( $("#intercambio-template").html() );
		var html = template( _data );
		$("#intercambio").html( html ).fadeIn();
	} else {
		$("#intercambio").html('<h3 class="text-center">Aún no tienes intercambios, ¡Registra uno!</h3><p class="card-text">Crear intercambio</p><a href="intercambio" class="btn btn-primary"><i class="fa fa-plus"></i></a>');
	}
};

Intercambio.prototype._drawSelect = function( _data ){
	if ( _data.length > 0){
		var template = Handlebars.compile( $("#intercambio-select-template").html() );
		var html = template( _data );
		$("#intercambio-select").html( html ).fadeIn();
	} else {
		$("#intercambio-select").html('<h3 class="text-center">Aún no tienes intercambios</h3>');
	}
};

Intercambio.prototype._drawById = function( _data ){
	if ( _data.length > 0){
		var template = Handlebars.compile( $("#intercambio-byid-template").html() );
		var html = template( _data );
		$("#intercambio-byid").html( html ).fadeIn();
	} else {
		$("#intercambio-byid").html('<h3 class="text-center">Aún no tienes intercambios, ¡Registra uno!</h3>');
	}
};

