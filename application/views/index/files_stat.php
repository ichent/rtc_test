<? if (!empty($files)) { ?>
    <h2>Статистика поиска</h2>
    <br>
    <table>
        <tr><th class="name">Имя</th><th>Количество совпадений</th></tr>
        <? foreach ($files as $fileName => $fileCount) { ?>
            <tr><td class="name"><?=$fileName?></td><td class="count"><?=$fileCount?></td></tr>
        <? } ?>
    </table>
<? } ?>