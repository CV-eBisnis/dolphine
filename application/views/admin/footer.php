<script src="<?= base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>

<script>
    $(document).ready(function() {
        if (<?= isset($this->session->notif)? 'true' : 'false' ?> == true) {
            alert("<?= $this->session->notif ?>");
        }
    });
</script>