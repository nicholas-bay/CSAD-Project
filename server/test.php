<img src='data:image/jpeg;base64,<?php echo base64_encode($image_data); ?>' />
<?php echo
"<img src='data:image/jpeg;base64," . base64_encode($row['image']) . "?>'/>";
?>


echo "<img src='data:image/jpeg;base64," . base64_encode($row["image"]) . "' height='200' width='200' class='img-thumnail' />";