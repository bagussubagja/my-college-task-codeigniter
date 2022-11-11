<?php $this->extend('layout/template'); ?>
<?= $i = 1; ?>
<?php $this->section('content') ?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Task Note</h1>
            <a href="/task/create" class="btn btn-primary mb-3">Add Task</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Course</th>
                        <th scope="col">Description</th>
                        <th scope="col">Meeting</th>
                        <th scope="col">Deadline (Date)</th>
                        <th scope="col">Deadline (Time)</th>
                        <th scope="col">Doing By</th>
                        <th scope="col">Media</th>
                        <th scope="col">IsDone</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php foreach ($task as $tasks) :  ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $tasks['title'] ?></td>
                            <td><?= $tasks['course'] ?></td>
                            <td><?= $tasks['description'] ?></td>
                            <td><?= $tasks['meeting'] ?></td>
                            <td><?= $tasks['deadlineDate'] ?></td>
                            <td><?= $tasks['deadlineTime'] ?></td>
                            <td><?= $tasks['doingBy'] ?></td>
                            <td><?= $tasks['media'] ?></td>
                            <td><?= $tasks['isDone'] ?></td>
                            <td>
                                
                                <a href="/task/<?= $tasks['id'] ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>


                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>