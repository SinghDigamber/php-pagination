<!-- jQuery + Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        $('#records-limit').change(function () {
            $('form').submit();
        })
    });
</script>