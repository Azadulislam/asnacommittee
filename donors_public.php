<?php
require_once("./php/autoload.php");
$title = "Jalaria Donors";
include('partials/header.php');

?>
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <div id="printContent" data-title="Donors List">
                    <div class="d-flex justify-content-end">
                        <?php include_once('./partials/printdate.php') ?>
                    </div>
                    <?php
                    $sql = "SELECT * FROM `donors` ";
                    if (isset($_GET['search'])) {
                        $key = $_GET['search'];
                        $sql .= "Where CONCAT_WS( `donor_name`, `area_city`, `donate_details`, `nick_name`) LIKE '%$key%'";
                    }
                    $sql .= " ORDER BY `donor_name` ASC";
                    $select = $db->runquery($sql);
                    $count = $select->num_rows;
                    if ($count > 0) {
                        $i = 1;
                        while ($row = $select->fetch_assoc()) {
                            $donor_id = $row['donor_id'];
                            $donor_name = $row['donor_name'];
                            $area_city = $row['area_city'];
                            $area_state = $row['area_state'];
                            $donate_asnaf = $row['donate_asnaf'];
                            $items_to_donate = $row['items_to_donate'];
                            $telephone = $row['telephone'];
                            $donate_to_jalaria = $row['donate_to_jalaria'];
                            ?>
                            <a href="donors_help.php?donor=<?= $donor_id ?>" class="text-dark">
                                <div class="row mb-3">
                                    <div class="col-md-2">
                                        <p class="mb-0"><b><?= $donor_name ?></b></p>
                                    </div>
                                    <div class="col-md-6"><p class="mb-0"><?= substr($row['donate_details'], 0, 200) ?>...</p></div>
                                    <div class="col-md-2">
                                        <?php
                                        $selectdarea = $db->runquery("SELECT * FROM `donor_area` INNER JOIN `mosque_areas` ON `donor_area`.`area_id`=`mosque_areas`.`area_id` WHERE `donor_area`.`donor_id`='$donor_id'");
                                        while ($darea = $selectdarea->fetch_assoc()) {
                                            ?>
                                            <p class="mb-0"><?= $darea['area_name'] ?></p>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="mb-0"><?= $area_city ?></p>
                                    </div>
                                </div>
                            </a>
                            <?php
                            $i++;
                        }
                    }
                    if ($count == 0) {
                        include_once('./partials/empty.php');
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('form#delete').submit(function (e) {
            e.preventDefault();
            var formid = $(this);
            submitForm(e, formid, isDeleted);
        });

        function isDeleted(response) {
            if (response.status == 1) {
                $(response.row).remove();
            }
        };
    </script>
    <!-- content-wrapper ends -->
<?php
include('partials/_footer.php');
?>