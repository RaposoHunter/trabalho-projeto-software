@extends('layouts.main')

@push('title')
	Equipamentos
@endpush

@push('css')
	
@endpush

@section('container')
	<div class="row">
		<div id="title" class="col-md-6">
			<h1>Equipamentos</h1>
		</div>
		<div class="d-flex col-md-6 justify-content-end p-3">
			<button class="btn btn-default btn-info" data-toggle="modal" data-target=""><i class="fa fa-filter mr-2"></i>Filtrar</button>
			<button onclick="location.href = `{{ route('equipments.create') }}`" class="btn btn-default btn-success ml-2"><i class="fa fa-plus mr-2"></i>Cadastrar</button>
		</div>
	</div>
	<div id="table">
		<table style="width: 100%">
			<thead>
				<tr style="text-align: center">
					<th>Código</th>
					<th>Nome</th>
					<th>Tipo</th>
					<th>Nº de motores</th>
					<th>Tipo de propulsor</th>
					<th>Qtd. Passageiros</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($equipments as $equipment)
					<tr data-id="{{ $equipment->CD_EQPT }}" style="border-top: 1px solid rgba(0,0,0,0.15)">
						<td data-id="{{ $equipment->CD_EQPT }}" data-index="CD_EQPT">{{ $equipment->CD_EQPT ?? '---'}}</td>
						<td data-id="{{ $equipment->CD_EQPT }}" data-index="NM_EQPT">{{ $equipment->NM_EQPT ?? '---'}}</td>
						<td data-id="{{ $equipment->CD_EQPT }}" data-index="DC_TIPO_EQPT">{{ $equipment->DC_TIPO_EQPT ?? '---'}}</td>
						<td data-id="{{ $equipment->CD_EQPT }}" data-index="QT_MOTOR">{{ $equipment->QT_MOTOR ?? '---'}}</td>
						<td data-id="{{ $equipment->CD_EQPT }}" data-index="IC_TIPO_PRPS">{{ $equipment->IC_TIPO_PRPS ?? '---'}}</td>
						<td data-id="{{ $equipment->CD_EQPT }}" data-index="QT_PSGR">{{ $equipment->QT_PSGR ?? '---'}}</td>
						<td>
							<button data-id="{{ $equipment->CD_EQPT }}" class="eqpt-show btn vb-event-container btn-sm btn-secondary"><i class="fa fa-eye" aria-hidden="true"></i></button>
							<button data-id="{{ $equipment->CD_EQPT }}" class="eqpt-edit btn vb-event-container btn-sm btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
							<button data-id="{{ $equipment->CD_EQPT }}" class="eqpt-delete btn vb-event-container btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
						</td>
					</tr>
				@endforeach
			</tbody>
		
		</table>
	</div>

	<div id="modals">
		{{-- SHOW --}}
		<div class="modal fade vb-event-container" id="eqptShowModal" tabindex="-1" role="dialog" aria-labelledby="eqptShowModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="eqptShowModalLabel">Visualizando equipamento <strong id="eqpt-show-code">---</strong></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					
					<div class="modal-body">
						<div class="row ml-1 mb-2">
							Código:&nbsp;<span id="eqpt-show-CD_EQPT"></span>
						</div>
						<div class="row ml-1 mb-2">
							Nome:&nbsp;<span id="eqpt-show-NM_EQPT"></span>
						</div>
						<div class="row ml-1 mb-2">
							Tipo:&nbsp;<span id="eqpt-show-DC_TIPO_EQPT"></span>
						</div>
						<div class="row ml-1 mb-2">
							Nº de motores:&nbsp;<span id="eqpt-show-QT_MOTOR"></span>
						</div>
						<div class="row ml-1 mb-2">
							Tipo de Propulsor:&nbsp;<span id="eqpt-show-IC_TIPO_PRPS"></span>
						</div>
						<div class="row ml-1">
							Qtd. de Passageiros:&nbsp;<span id="eqpt-show-QT_PSGR"></span>
						</div>
							
						{{-- NOTE: Pensar em adicionar, talvez, mais informações como "número de aeronaves/companhias aéreas que usam este equipamento... --}}

					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
					</div>
				</div>
			</div>
		</div>
		
		{{-- UPDATE --}}
		<div class="modal fade vb-event-container" id="eqptUpdateModal" tabindex="-1" role="dialog" aria-labelledby="eqptUpdateModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="eqptUpdateModalLabel">Editando equipamento <strong id="eqpt-edit-code">---</strong></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					
					<div class="modal-body">
						<div class="row">

							<div class="col-md-12">
								<label>Código</label>
								<input class="form-control" type="text" id="CD_EQPT" disabled>
							</div>
							<div class="col-md-12">
								<label for="NM_EQPT">Nome</label>
								<input class="form-control" name="NM_EQPT" type="text" id="NM_EQPT">
							</div>
							<div class="col-md-6">
								<label for="DC_TIPO_EQPT">Tipo</label>
								<input class="form-control" name="DC_TIPO_EQPT" type="text" id="DC_TIPO_EQPT">
							</div>
							<div class="col-md-6">
								<label for="QT_MOTOR">Nº de motores</label>
								<input class="form-control" name="QT_MOTOR" type="number" id="QT_MOTOR" min="0">
							</div>
							<div class="col-md-6">
								<label for="IC_TIPO_PRPS">Tipo de propulsor</label>
								<select class="form-control" name="IC_TIPO_PRPS" id="IC_TIPO_PRPS">
									<option value="M">M</option>
									<option value="R">R</option>
								</select>
							</div>
							<div class="col-md-6">
								<label for="QT_PSGR">Qtd. Passageiros</label>
								<input class="form-control" name="QT_PSGR" type="number" id="QT_PSGR" min="0">
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
						<button data-id="" type="button" class="eqpt-edit-submit vb-event-container btn btn-primary">Editar</button>
					</div>
				</div>
			</div>
		</div>

		{{-- DELETE --}}
		<div class="modal fade vb-event-container" id="eqptDeleteModal" tabindex="-1" role="dialog" aria-labelledby="eqptDeleteModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header bg-danger text-white">
						<h5 class="modal-title" id="eqptDeleteModalLabel">Visualizando equipamento <strong id="eqpt-delete-code">---</strong></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					
					<div class="modal-body">
						<h5>Deseja realmente apagar o equipamento <em id="eqpt-delete-code-em"></em>?</h5>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
						<button data-id="" type="button" class="eqpt-delete-submit vb-event-container btn btn-danger">Sim, deletar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('js')
	<script>
		// EVENTOS RELACIONADOS COM O SHOW - BEGIN
		$('.eqpt-show').on('click', function () {
			console.log(this);
			const id = this.dataset.id;

			if(!id) {
				toastr.warning('O código do equipamento não foi informado. Tente recarregar a página!');
				return;
			}

			$.ajax({
				method: 'GET',
				url: `/equipamentos/${id}`,
				success: res => {
					$('#eqpt-show-code').html(res.CD_EQPT);
					
					$('#eqpt-show-CD_EQPT').html(res.CD_EQPT);
					$('#eqpt-show-NM_EQPT').html(res.NM_EQPT);
					$('#eqpt-show-DC_TIPO_EQPT').html(res.DC_TIPO_EQPT);
					$('#eqpt-show-QT_MOTOR').html(res.QT_MOTOR);
					$('#eqpt-show-IC_TIPO_PRPS').html(res.IC_TIPO_PRPS);
					$('#eqpt-show-QT_PSGR').html(res.QT_PSGR);
					
					$('#eqptShowModal').modal('show');
				},
				error: err => {
					console.log(err);
				}
			});
		});

		$('#eqptShowModal').on('hidden.bs.modal', function () {
			$('#eqpt-show-CD_EQPT').html('');
			$('#eqpt-show-NM_EQPT').html('');
			$('#eqpt-show-DC_TIPO_EQPT').html('');
			$('#eqpt-show-QT_MOTOR').html('');
			$('#eqpt-show-IC_TIPO_PRPS').html('');
			$('#eqpt-show-QT_PSGR').html('');
		});
		// EVENTOS RELACIONADOS COM O SHOW - END

		// EVENTOS RELACIONADOS COM O UPDATE - BEGIN
		$('.eqpt-edit').on('click', function () {
			const id = this.dataset.id;

			if(!id) {
				toastr.warning('O código do equipamento não foi informado. Tente recarregar a página!');
				return;
			}

			$.ajax({
				method: 'GET',
				url: `/equipamentos/${id}`,
				success: res => {
					$('#eqpt-edit-code').html(res.CD_EQPT);
					
					$('input#CD_EQPT').val(res.CD_EQPT);
					$('input[name=NM_EQPT]').val(res.NM_EQPT);
					$('input[name=DC_TIPO_EQPT]').val(res.DC_TIPO_EQPT);
					$('input[name=QT_MOTOR]').val(res.QT_MOTOR);
					$('select[name=IC_TIPO_PRPS]').val(res.IC_TIPO_PRPS);
					$('input[name=QT_PSGR]').val(res.QT_PSGR);
					
					$('.eqpt-edit-submit').attr('data-id', res.CD_EQPT);

					$('#eqptUpdateModal').modal('show');
				},
				error: err => {
					console.log(err);
				}
			});
		});

		$('.eqpt-edit-submit').on('click', function () {
			const id = this.dataset.id;

			if(!id) {
				toastr.warning('O código do equipamento não foi informado. Tente recarregar a página!');
				return;
			}

			$.ajax({
				method: 'PUT',
				url: `/equipamentos/${id}`,
				data: {
					'_token': $('meta[name=csrf-token]').attr('content'),
					'_method': 'PUT',
					NM_EQPT: $('input[name=NM_EQPT]').val(),
					DC_TIPO_EQPT: $('input[name=DC_TIPO_EQPT]').val(),
					QT_MOTOR: $('input[name=QT_MOTOR]').val(),
					IC_TIPO_PRPS: $('select[name=IC_TIPO_PRPS]').val(),
					QT_PSGR: $('input[name=QT_PSGR]').val(),
				},
				success: res => {				
					$('#eqptUpdateModal').modal('hide');

					toastr.success(res.message);

					for(let td of $(`td[data-id=${id}]`)) {
						$(td).html(res.equipment[td.dataset.index]);
					}
				},
				error: err => {
					console.log(err);
					toastr.error(err.responseJSON);
				}
			});
		});

		$('#eqptUpdateModal').on('hidden.bs.modal', function () {
			$('input#CD_EQPT').val('');
			$('input[name=NM_EQPT]').val('');
			$('input[name=DC_TIPO_EQPT]').val('');
			$('input[name=QT_MOTOR]').val('');
			$('select[name=IC_TIPO_PRPS]').val('');
			$('input[name=QT_PSGR]').val('');
		});
		// EVENTOS RELACIONADOS COM O UPDATE - END

		// EVENTOS RELACIONADOS COM O DELETE - BEGIN
		$('.eqpt-delete').on('click', function () {
			console.log(10);
			const id = this.dataset.id;

			if(!id) {
				toastr.warning('O código do equipamento não foi informado. Tente recarregar a página!');
				return;
			}

			$('#eqpt-delete-code').html(id);
			$('#eqpt-delete-code-em').html(id);
			$('.eqpt-delete-submit').attr('data-id', id);

			$('#eqptDeleteModal').modal('show');
		});

		$('.eqpt-delete-submit').on('click', function () {
			const id = this.dataset.id;

			if(!id) {
				toastr.warning('O código do equipamento não foi informado. Tente recarregar a página!');
				return;
			}

			$.ajax({
				method: 'DELETE',
				url: `/equipamentos/${id}`,
				data: {
					'_token': $('meta[name=csrf-token]').attr('content'),
					'_method': 'DELETE',
				},
				success: res => {				
					$('#eqptDeleteModal').modal('hide');
					$(`tr[data-id=${id}]`).remove()

					toastr.success(res);
				},
				error: err => {
					console.log(err);
					toastr.error(err.responseJSON);
				}
			});
		});

		$('#eqptDeleteModal').on('hidden.bs.modal', function () {
			$('#eqpt-delete-code').html('');
			$('#eqpt-delete-code-em').html('');
			$('.eqpt-delete-submit').attr('data-id', '');
		});
		// EVENTOS RELACIONADOS COM O DELETE - END
	</script>
@endpush