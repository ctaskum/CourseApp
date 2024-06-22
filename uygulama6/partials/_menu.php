<div class="list-group container-md">

<?php foreach (getDb()["kategoriler"] as $kategori): ?>

    <a href="#" class="list-group-item list-group-item-action <?php echo ($kategori["aktif"])?"active":"" ?>" >
        <?php echo $kategori["kategoriAdi"] ; ?> 
    </a>
<?php endforeach; ?>

</div>