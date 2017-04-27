<div class="container col-sm-8">
			<form method="POST">
				<div class="row">
					<div class="form-group col-sm-4">
						<label for="name">Nombre</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Ingrese Nombre">
					</div>
					<div class="form-group col-sm-4">
						<label for="identification">Identificación</label>
						<input type="text" class="form-control" id="identification" name="identification" placeholder="Ingrese Identificación">
					</div>
					<div class="form-group col-sm-4">
						<label for="phonePrimary">Teléfono 1</label>
						<input type="text" class="form-control" id="phonePrimary" name="phonePrimary" placeholder="Ingrese Teléfono">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-4">
						<label for="phoneSecondary">Teléfono 2</label>
						<input type="text" class="form-control" id="phoneSecondary" name="phoneSecondary" placeholder="Ingrese Teléfono">
					</div>
					<div class="form-group col-sm-4">
						<label for="fax">Fax</label>
						<input type="text" class="form-control" id="fax" name="fax" placeholder="Ingrese Fax">
					</div>
					<div class="form-group col-sm-4">
						<label for="mobile">Celular</label>
						<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Ingrese Celular">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-4">
						<label for="observations">Observación</label>
						<input type="text" class="form-control" id="observations" name="observations" placeholder="Observaciones">
					</div>
					<div class="form-group col-sm-4">
						<label for="email">Correo Electronico</label>
						<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
					</div>
					<div class="form-group col-sm-4">
						<label for="ignoreRepeated">ignoreRepeated</label>
						<select class="form-control" id="ignoreRepeated" name="ignoreRepeated">
							<option></option>
							<option>true</option>
							<option>false</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-4">
						<label for="listPrice">Lista de Precios</label>
						<textarea class="form-control" id="listPrice" name="listPrice" rows="3"></textarea>
					</div>
					<div class="form-group col-sm-4">
						<label for="seller">Vendedor</label>
						<textarea class="form-control" id="seller" name="seller" rows="3"></textarea>
					</div>
					<div class="form-group col-sm-4">
						<label for="term">Terminos</label>
						<textarea class="form-control" id="term" name="term" rows="3"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-4">
						<label for="address">Dirección</label>
						<textarea class="form-control" id="address" name="address" rows="3"></textarea>
					</div>
					<div class="form-group col-sm-4">
						<label for="type">Tipo </label>
						<input type="text" class="form-control" id="type" name="type" placeholder="type">
					</div>
					<div class="form-group col-sm-4">
						<label for="internalContacts">Contactos internos</label>
						<input type="text" class="form-control" id="internalContacts" name="internalContacts" placeholder="Contactos internos">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<button type="submit" name="crear" class="btn btn-primary col-sm-12">Submit</button>
					</div>
					<div class="form-group col-sm-6">
						<a href="/api/" class="btn btn-warning col-sm-12">Regresar</a>
					</div>
				</div>
			</form>
		</div>