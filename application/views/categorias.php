<?php if (validation_errors()) :?>
    <div class="block block-themed">
        <div class="block-header bg-danger">
            <h3 class="block-title">Erros</h3>
        </div>
        <div class="block-content">
            <?=validation_errors()?>
        </div>
    </div>
<?php endif; ?>
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">Cadastro de Categorias</h3>
        <div class="block-options">
            <button type="button" class="btn-block-option">
                <i class="si si-wrench"></i>
            </button>
        </div>
    </div>
    <div class="block-content">
        <form action="<?=base_url()?>index.php/categorias/save" method="post" enctype="multipart/form-data">            
            <input type="hidden" class="form-control" id="id" name="id" value="<?=(!empty($category->id))?$category->id:''?>">
            <div class="form-group row">
                <label class="col-12" for="example-text-input">Nome da Categoria</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" id="name" name="name" maxlength="60" placeholder="Nome para a categoria" value="<?=(!empty($category->name))?$category->name:''?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12">
                    <button type="submit" class="btn btn-alt-primary">Salvar</button>
                </div>
            </div>
        </form>
    </div>
</div>
