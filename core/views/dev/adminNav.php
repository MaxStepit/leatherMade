<div class="nav-admin">
    <div class = 'admin-statistic'>
        <table>
            <tr>
                <td>Всего обьектов:</td>
                <td><?= $data['count'][4]{'all'}?></td>
            </tr>
            <tr>
                <td>Сдаётся:</td>
                <td><?= $data['count'][0]{'Аренда'}?></td>
            </tr>
            <tr>
                <td>Сдано:</td>
                <td><?= $data['count'][2]{'Сдано'}?></td>
            </tr>
            <tr>
                <td>Продаётся:</td>
                <td><?= $data['count'][1]{'Продажа'}?></td>
            </tr>
            <tr>
                <td>Продано:</td>
                <td><?= $data['count'][3]{'Продано'}?></td>
            </tr>
        </table>
<!--        <p>Всего обьектов:--><?//= $data['count'][4]{'all'}?><!--</p>-->
<!--        <p>Сдаётся:--><?//= $data['count'][0]{'Аренда'}?><!--</p>-->
<!--        <p>Сдано:--><?//= $data['count'][2]{'Сдано'}?><!--</p>-->
<!--        <p>Продаётся:--><?//= $data['count'][1]{'Продажа'}?><!--</p>-->
<!--        <p>Продано:--><?//= $data['count'][3]{'Продано'}?><!--</p>-->
    </div>
</div>
