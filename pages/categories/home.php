<div class="row">
	<h3>Liste des categories</h3>
		<div class="col-sm-12">
			<ul>
				<?php foreach(App::getInstance()->getTable('Categorie')->all() as $four): ?>
					<li><a href="<?= $four->url ?>"><?= $four->name; ?></a></li>
				<?php endforeach;?>
			</ul>
	</div>
</div>
