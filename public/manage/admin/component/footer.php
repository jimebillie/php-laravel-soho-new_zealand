</body>
</html>

<script>
    $('.wrap__bars').on('click', function () {
        $('.wrap__sidebar').slideToggle(100)
    })


</script>

<?php
if (isset($_SESSION['result'])) {
    ?>
    <script>
        $('body').append(`<?=$_SESSION['result']['alert']?>`)
        setTimeout(function () {
            $('#alert').remove()
        }, 3500)
    </script>
    <?php
}
unset($_SESSION['result']);
?>