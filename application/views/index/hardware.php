<form>
    Производитель
    <select class="js-producers">
        <option value="0">Выберите</option>
        <? foreach ($producers as $k => $producer) { ?>
            <option value="<?=$k?>"><?=$producer['name']?></option>
        <? } ?>
    </select>
    &nbsp;&nbsp;
    Оборудование
    <select class="js-products"></select>
</form>