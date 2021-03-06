<div class="row">
<div class="span8">
<form method="post">
<fieldset>
    <legend><?=__('Edit crew effect item')?></legend>

    <div class="clearfix <? if($this->Form->error('CrewEffectsItem.title')) echo "error"; ?>">
        <label for="data[CrewEffectsItem][title]"><?=__('Title')?></label>
        <div class="input">
            <?= $this->Form->input('CrewEffectsItem.title', array('label' => false, 'div' => false)) ?>
            <span class="help-block"><?=$this->Form->error('title')?></span>
        </div>
    </div>   
    <div class="clearfix <? if($this->Form->error('CrewEffectsItem.price')) echo "error"; ?>">
        <label for="data[CrewEffectsItem][price]"><?=__('Price')?></label>
        <div class="input">
            <?= $this->Form->input('CrewEffectsItem.price', array('label' => false, 'div' => false)) ?>
            <span class="help-block"><?=$this->Form->error('price')?></span>
        </div>
    </div>
    <div class="clearfix <? if($this->Form->error('CrewEffectsItem.amount_free')) echo "error"; ?>">
        <label for="data[CrewEffectsItem][amount_free]"><?=__('Amount of free')?></label>
        <div class="input">
            <?= $this->Form->input('CrewEffectsItem.amount_free', array('label' => false, 'div' => false)) ?>
            <span class="help-block"><?=$this->Form->error('amount_free')?></span>
        </div>
    </div>
    <div class="clearfix <? if($this->Form->error('CrewEffectsItem.image')) echo "error"; ?>">
        <label for="data[CrewEffectsItem][image]"><?=__('URL to image')?></label>
        <div class="input">
            <?= $this->Form->input('CrewEffectsItem.image', array('label' => false, 'div' => false)) ?>
            <span class="help-block">
                <? if($this->Form->error('image')) { 
                    echo $this->Form->error('image'); 
                } ?>
            </span>
        </div>
    </div>
    <div class="clearfix <? if($this->Form->error('CrewEffectsItem.description')) echo "error"; ?>">
        <label for="data[CrewEffectsItem][description]"><?=__('Description')?></label>
        <div class="input">
            <?= $this->Form->textarea('CrewEffectsItem.description', array('label' => false, 'div' => false)) ?>
            <span class="help-block"><?=$this->Form->error('description')?></span>
        </div>
    </div>
    <div class="clearfix <? if($this->Form->error('CrewEffectsItem.allow_order')) echo "error";?>">
        <label for="data[CrewEffectsItem][allow_order]"><?=__('Choose sizes')?></label>
        <div class="input">
            <ul class="inputs-list">
                <li>
                    <label>
                        <?=$this->Form->checkbox('CrewEffectsItem.allow_order', array('div' => 'false'))?>
                        <span><?=__("Allow new orders")?></span>
                    </label>
                </li>
            </ul>
            <span class="help-block"><?=$this->Form->error('CrewEffetcsItem.allow_order')?></span>
        </div>
    </div>
</fieldset>
<fieldset>
    <div class="clearfix <? if($this->Form->error('CrewEffectsItem.sizes')) echo "error";?>">
        <label id="optionscheckboxes" for="data[CrewEffectsItem][sizes]"><?=__('Choose sizes')?></label>
        <div class="input">
            <ul class="inputs-list">
                <?php foreach($sizes as $size => $item) { ?>
                    <li>
                        <label>
                            <?=$this->Form->checkbox('CrewEffectsItem.sizes'. $item, array('div' => 'false', 'checked' => $sizesValues[$item]))?>
                            <span><?=$sizes[$size]?></span>
                        </label>
                    </li>
                <?php } ?>
            </ul>
            <span class="help-block"><?=$this->Form->error('CrewEffetcsItem.sizes')?></span>
        </div>
    </div>
</fieldset>


<div class="actions">
    <?=$this->Form->submit($savebutton, array('class' => 'btn success','name'=>'save'))?>
</div>
</form>
</div>
<div class="span8">
    <?php if(isset($data['CrewEffectsItem']['image']) && $data['CrewEffectsItem']['image'] != '') { ?>
        <ul class="media-grid">
            <li>
                <div>
                    <img class="thumbnail" src="<?=$data['CrewEffectsItem']['image']?>" alt="">
                    <div class="media-comment"><?=$data['CrewEffectsItem']['title']?></div>
                </div>
            </li>
        </ul>
    <?php } ?>
</div>
</div>
