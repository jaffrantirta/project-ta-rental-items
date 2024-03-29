<?= $this->extend('templates/main') ?>

<?= $this->section('content') ?>
<div class="mt-5">
    <div class="p-10">
    <div class="">
    <p class="font-bold text-xl">Kategori</p>
    <div class="flex overflow-scroll my-5 gap-5">
    <?php foreach ($categories as $category) { ?>
        <a href="<?= base_url('category/'.$category['id']) ?>" class="flex p-5 border-2 rounded-3xl items-center justify-center px-10">
            <img class="mr-3" src="<?php echo isset($item['image']) && !empty($item['image']) ? base_url('/uploads/'.$item['image']) : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png'; ?>"/>
            <p style="white-space: nowrap;"><?= $category['name'] ?></p>
    </a>
    <?php } ?>
</div>

</div>



        <div class="grid md:flex md:flex-wrap gap-5 justify-center">
        <?php foreach ($items as $item) { ?>
            <a href="<?php echo base_url('item/'.$item['id']); ?>" class="border-2 rounded-3xl md:w-1/4">
               <img class="rounded-3xl" src="<?php echo isset($item['image']) && !empty($item['image']) ? base_url('/uploads/'.$item['image']) : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png'; ?>" />
                <div class="p-5">
                    <p class="font-bold"><?php echo $item['name'] ?></p>
                    <p class="text-xl">Rp<?php echo number_format($item['price_per_day']) ?>/hari</p>
                </div>
        </a>
            <?php } ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>