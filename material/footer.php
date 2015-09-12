<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>.<br/>
	<?php _e('Theme <a href="https://github.com/BLumia/TypechoTheme">Theme</a> Created by <a href="https://github.com/BLumia">BLumia</a>'); ?>.
</footer><!-- end #footer -->
<script type="text/javascript" src="<?php $this->options->themeUrl('prettify.js'); ?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('jquery.min.js'); ?>"></script>
<script type="text/javascript">
$(window).load(function(){
    $("code").addClass("prettyprint");
    prettyPrint();
})
</script>
<?php $this->footer(); ?>
</body>
</html>
