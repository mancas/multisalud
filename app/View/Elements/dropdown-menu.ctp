<script type="text/javascript">
    $(document).ready(function() {
        $('.dropdown-toggle, .sub-menu').hover(
            function() {
                $(this).parent('li').addClass('open');
        },
            function () {
                $(this).parent('li').removeClass('open');
        });
    });
</script>