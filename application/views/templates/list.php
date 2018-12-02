<!-- Dynamic Table -->
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">Dynamic Table <small>Full</small></h3>
        <a class="btn btn-primary min-width-125" href="<?=current_url()?>/create">Novo</a>    
    </div>
    <div class="block-content block-content-full">
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full ">
            <thead>
                <tr>
                    <?php foreach ($list->getTh() as $title) {?>
                    <th>
                        <?=$title?>
                    </th>
                    <?php }  ?>
                    <?php  if($list->getEdit() || $list->getDelete()){ ?>
                    <th> Ações </th>
                    <?php }  ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($list->getList() as $item) { ?>
                <tr>
                    <?php foreach ($list->getTd() as $attr) { ?>
                    <td>
                        <?=$item->{$attr}?>
                    </td>
                    <?php } ?>

                    <?php if($list->getEdit() || $list->getDelete()) { ?>
                    <td class="text-center">

                        <div class=" btn-group">
                            <?php  if($list->getEdit()) {?>
                            <a class="btn btn-sm btn-secondary" href="<?=$list->editUrl($item->id)?>" data-toggle="tooltip" title="Editar">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <?php } ?>
                            <?php  if($list->getDelete()) {?>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-times"></i></button>
                                <div class="dropdown-menu btn-table" aria-labelledby="btnGroupVerticalDrop1" x-placement="bottom-start">
                                    <div class="text-center"><label>Deseja Excluir?</label></div>
                                    <a class="dropdown-item btn-alt-danger text-center deleteClick" href="<?=$list->deleteUrl($item->id)?>"><i class="fa fa-fw fa-check mr-5"></i>Sim</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item btn-danger btn-alt-primary text-center" href="javascript:void(0)"><i class="fa fa-fw fa-times mr-5"></i>Não</a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </td>
                    <?php } ?>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- END Dynamic Table -->