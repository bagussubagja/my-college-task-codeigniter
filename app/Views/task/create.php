<?= $this->extend('layout/template'); ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Add Task</h2>
            <form action="/task/save" method="POST">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="title" placeholder="ex. Make an App">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="course" class="col-sm-2 col-form-label">Course</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="course" name="course" placeholder="ex. Pemrograman Aplikasi Terdistribusi">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="description" name="description" placeholder="ex. Make a simple web App">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="meeting" class="col-sm-2 col-form-label">Meeting</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="meeting" name="meeting" placeholder="ex. 14">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deadlineDate" class="col-sm-2 col-form-label">Deadline (Date)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="deadlineDate" name="deadlineDate" placeholder="ex. 2022-08-17">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deadlineTime" class="col-sm-2 col-form-label">Deadline (Time)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="deadlineTime" name="deadlineTime" placeholder="ex. 23:59">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="doingBy" class="col-sm-2 col-form-label">Doing By</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="doingBy" name="doingBy" placeholder="Berkelompok / Individu">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="media" class="col-sm-2 col-form-label">Media</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="media" name="media" placeholder="SPOT UPI / Google Classroom">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>