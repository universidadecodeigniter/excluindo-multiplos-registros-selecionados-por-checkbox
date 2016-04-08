<?php $this->load->view('commons/cabecalho'); ?>

<div class="container">
	<div class="page-header">
		<h1>Excluindo múltiplos registros selecionados por checkbox</h1>
	</div>

	<?php if ($this->session->flashdata('resultado') == TRUE): ?>
		<div class="alert alert-success"><?php echo $this->session->flashdata('resultado'); ?></div>
	<?php endif; ?>

	<?php if ($this->session->flashdata('erro') == TRUE): ?>
		<div class="alert alert-warning"><?php echo $this->session->flashdata('erro'); ?></div>
	<?php endif; ?>

	<form action="<?= base_url('excluir') ?>" method="POST" id="formDelete">
	<table class="table table-striped table-hover table-bordered">
		<caption>Contatos</caption>
		<thead>
			<tr>
				<th class="text-center"><input type="checkbox" name="selecionar_todos" title="Selecionar Todos"/></th>
				<th>Nome</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<?php if ($contatos == FALSE): ?>
				<tr><td colspan="2">Nenhum contato encontrado</td></tr>
			<?php else: ?>
				<?php foreach ($contatos as $row): ?>
					<tr>
						<td class="text-center"><input type="checkbox" name="excluir_todos[]" value="<?=$row['id']?>"/></td>
						<td><?= $row['nome']; ?></td>
						<td><?= $row['email']; ?></td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
	<input type="submit" class="btn btn-success" value="Excluir Selecionados" />
	</form>
</div>

<?php $this->load->view('commons/rodape'); ?>
