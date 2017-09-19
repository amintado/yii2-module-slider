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
                    3D transitions to be used.

                    <h4>Slide Transitions</h4>
                    <p>
                        Transitions can be defined in the same way we did in the example. with the option names of <code>transition2d</code> and <code>transition3d</code>. You can use 2D and 3D transitions separately or together depending on your needs.
                    </p>
                    <p>
                        There are more than 200 2D &amp; 3D preset transitions, so we have created a <a data-goto="slide-transitions" href="#">transition galley</a> that you can view in a separate chapter of this section. You will need to enter their IDs.
                    </p>
                    <p>
                        You can choose multiple transitions by entering a comma separated list. In that case the slider will use them in random order. or you can use the <code>all</code> value.
                    </p>
                    <p>
                        If you do not specify any transitions, the slider will use a simple slide transition.
                    </p>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

