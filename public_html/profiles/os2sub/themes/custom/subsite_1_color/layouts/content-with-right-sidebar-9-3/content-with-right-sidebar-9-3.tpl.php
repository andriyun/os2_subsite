<!-- content-with-right-sidebar-9-3.tpl.php -->
<div class="row" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

    <?php if ($content['sidebar']): ?>

        <!-- Begin - sidebar -->
        <div class="col-sm-3 col-sm-push-9">
            <?php print $content['sidebar']; ?>
        </div>
        <!-- End - sidebar -->

        <!-- Begin - content -->
        <div class="col-sm-9 col-sm-pull-3">
            <?php print $content['content']; ?>
        </div>
        <!-- End - content -->

    <?php else: ?>

        <!-- Begin - content -->
        <div class="col-xs-12">
            <?php print $content['content']; ?>
        </div>
        <!-- End - content -->

    <?php endif ?>
</div>
