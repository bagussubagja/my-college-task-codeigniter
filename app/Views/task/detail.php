<?php $this->extend('layout/template'); ?>

<?php $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Task</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
                </div>
                <input type="text" value="<?= $task['title'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" readonly>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Course</span>
                </div>
                <input type="text" value="<?= $task['course'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" readonly>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
                </div>
                <input type="text" value="<?= $task['description'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" readonly>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Meeting</span>
                </div>
                <input type="text" value="<?= $task['meeting'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" readonly>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Deadline (Date)</span>
                </div>
                <input type="text" value="<?= $task['deadlineDate'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" readonly>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Deadline (Time)</span>
                </div>
                <input type="text" value="<?= $task['deadlineTime'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" readonly>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Doing By</span>
                </div>
                <input type="text" value="<?= $task['doingBy'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" readonly>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Media</span>
                </div>
                <input type="text" value="<?= $task['media'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" readonly>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">isDone</span>
                </div>
                <input type="text" value="<?= $task['isDone'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" readonly>
            </div>
        </div>
    </div>
</div>
<center>
    <a href="/task/" class="btn btn-success">Back</a>
    <a href="/task/delete/<?= $task['id'] ?>" class="btn btn-danger">Delete</a>
    <a href="/task/update/<?= $task['id'] ?>" class="btn btn-warning">Done</a>
</center>
<?= $this->endSection(); ?>