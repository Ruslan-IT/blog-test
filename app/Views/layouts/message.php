<?php

use App\Core\Flash;

if ($msg = Flash::get('success')): ?>


    <div class="alert alert-success border-0" role="alert">
        <strong><font dir="auto" style="vertical-align: inherit;"><font dir="auto"
                                                                        style="vertical-align: inherit;"> <?= $msg ?>
                    !</font></font></strong><font dir="auto" style="vertical-align: inherit;"><font dir="auto"
                                                                                                    style="vertical-align: inherit;">
                Вы успешно прочитали это важное предупреждение.
            </font></font></div>

<?php endif; ?>

<?php if ($msg = Flash::get('error')): ?>


    <div class="alert alert-danger border-0" role="alert">
        <strong><font dir="auto" style="vertical-align: inherit;"><font dir="auto"
                                                                        style="vertical-align: inherit;"><?= $msg ?></font></font></strong><font
                dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;"> Измените
                кое-что и попробуйте отправить ещё раз.
            </font></font></div>

<?php endif; ?>