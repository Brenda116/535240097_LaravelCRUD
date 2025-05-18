<!-- Halaman untuk edit data -->


<?php $__env->startSection('title'); ?>
   Edit Data Mahasiswa
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nama'); ?>
    Brenda Anastasya
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="page-section portfolio" id="tambah">
    <div class="container">
        <br>
        <h1>Edit Data Mahasiswa</h1>
        
        <form action="<?php echo e(route('mahasiswa.update', $mhs->id )); ?>" method="POST">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="nim" class="form-label">Nim</label>
                <input type="text" class="form-control" id="nim" name="nim">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>

<?php $__env->stopSection(); ?>       
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
<?php echo $__env->make('layouts.template', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Lenovo\Documents\Semester 2\Backend Programming (Node JS)\Pertemuan 11\Pertemuan11\resources\views/mahasiswa/edit.blade.php ENDPATH**/ ?>