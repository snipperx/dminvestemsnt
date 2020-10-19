<?php

defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('layouts/header');
?>
<body>


<!--================Header Area =================-->
<?php
$this->load->view('layouts/top-menu');
?>
<!--================Header Area =================-->

<!--================Banner Area =================-->

        <?php
        // Load footer_view
        $this->load->view('layouts/footer');
        ?>


<!--================End Footer Area =================-->
<!--================Begin Script Area =================-->
<?php
$this->load->view('layouts/global-js');
?>
</body>
</html>