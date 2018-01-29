

    <!-- Page Specific Custom Script START -->
    <script type="text/javascript">
        $(function() {
            //Height Fix
            $('#slideshow').height(getSlideHeight());
            $(window).resize(function() {
                $('#slideshow').height(getSlideHeight());
            });

            //Mouse Effect
            // initHeader($('#bg-pattern'), $('#pattern-canvas'));
        });
    </script>
    <!-- Page Specific Custom Script END -->
    <?php wp_footer(); ?>
</body>

</html>