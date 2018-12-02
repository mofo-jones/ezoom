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
        <form action="<?=base_url()?>index.php/produtos/save" method="post" enctype="multipart/form-data">            
            <input type="hidden" class="form-control" id="id" name="id" value="<?=(!empty($product->id))?$product->id:''?>">
            <div class="form-group row">
                <label class="col-12" for="example-text-input">Nome do Produto</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" id="name" name="name" maxlength="60" placeholder="Nome do produto" value="<?=(!empty($product->name))?$product->name:''?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-12" for="example-text-input">Quantidade</label>
                <div class="col-md-12">
                    <input type="text" class="form-control number" id="amount" name="amount" maxlength="5" placeholder="Quantidade de produto" value="<?=(!empty($product->amount))?$product->amount:''?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-12 " for="example-text-input">Preço</label>
                <div class="col-md-12">
                    <input type="text" class="money form-control" id="val-currency" name="price" maxlength="12" placeholder="1,499.99" value="<?=(!empty($product->price))?$product->price:''?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-12" for="example-select">Categoria</label>
                <div class="col-md-9">
                    <select class="form-control" id="categories_id" name="categories_id">
                        <option value="">Selecione uma categoria</option>
                        <?php foreach ($categories as $item):?>
                            <option value="<?=$item->id?>" <?=((!empty($product->categories_id)) &&  ($product->categories_id == $item->id))? 'selected': '' ?>> <?=$item->name?></option>                        
                        <?php endforeach; ?>
                    </select>
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
