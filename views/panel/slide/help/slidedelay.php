<?php
/*******************************************************************************
 * Copyright (c) 2017.
 * this file created in printing-office project
 * framework: Yii2
 * license: GPL V3 2017 - 2025
 * Author:amintado@gmail.com
 * Company:shahrmap.ir
 * Official GitHub Page: https://github.com/amintado/printing-office
 * All rights reserved.
 ******************************************************************************/
?>
<div class="modal fade" tabindex="-1" id="<?= $id ?>" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">

                <div class="col-md-12">
                    The total duration in milliseconds while slides are being displayed.

                    <h4>Timing slides</h4>
                    <p>
                        We are using the <code>slidedelay</code> option to change the total duration of slides while they will be shown. This value is in milliseconds, so the default value <code>4000</code> means 4 seconds.</p>
                    <p>
                        Later in this guide we will add layers and other slide contents with having their own timing settings. Keep in mind that the <code>slidedelay</code> setting will always overrule other timings and the slider won't wait for other elements if they are exceeding the time interval set with <code>slidedelay.</code>
                    </p>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
