<?php require admin_view('static/header') ?>

    <div class="box-">
        <h1>
            İletişim Mesajlarını Görüntüle
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="box-">
        <form action="" method="post" class="form label">
            <ul>
                <li>
                    <label>Ad-Soay</label>
                    <div class="form-content" style="padding-top: 12px">
                        <?= $row['contact_name'] ?>
                    </div>
                </li>
                <li>
                    <label>E-posta</label>
                    <div class="form-content" style="padding-top: 12px">
                        <?= $row['contact_email'] ?>
                    </div>
                </li>
                <?php if ($row['contact_phone']) : ?>
                    <li>
                        <label>Telefon</label>
                        <div class="form-content" style="padding-top: 12px">
                            <?= $row['contact_phone'] ?>
                        </div>
                    </li>
                <?php endif; ?>
                <li>
                    <label>Konu</label>
                    <div class="form-content" style="padding-top: 12px">
                        <?= $row['contact_subject'] ?>
                    </div>
                </li>
                <li>
                    <label>Mesaj</label>
                    <div class="form-content" style="padding-top: 12px">
                        <?= nl2br($row['contact_message']) ?>
                    </div>
                </li>
                <li>
                    <button name="submit" value="1" type="submit">Kaydet</button>
                </li>
            </ul>
        </form>
    </div>

<?php require admin_view('static/footer') ?>